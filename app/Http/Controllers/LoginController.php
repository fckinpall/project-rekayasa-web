<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('admin.home');
        } else{
            return view('login');
        }
    }

    public function actionLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            /** @var User $user */
            $user = Auth::user();
            $user->tokens()->where('name', 'web_admin_token')->delete();
            
            $token = $user->createToken('web_admin_token')->plainTextToken;
            session(['api_token' => $token]);

            return redirect()->route('admin.home');
        } else{
            session()->flash('error', 'Email atau Password Salah');
        

            return redirect('/login');
        }
    }
    
    public function ActionLogout(Request $request)
    {
        if (Auth::check()) {
            /** @var User $user */
            $user = Auth::user();
            $user->tokens()->where('name', 'web_admin_token')->delete();
        }
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register(request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validatedData->fails()) {
            return response()->json([
                'errors' => $validatedData->errors()
                ], 422);
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;
            
            return response()->json([
                'message' => 'User registered successfully', 
                'access_token' => $token, 
                'token_type' => 'Bearer'
                ], 201);
        } catch (\Exception $e) {
            return response()->json(
                ['success' => false, 
                'message' => 'registrasi user gagal', 
                'error' => $e->getMessage()
                ],
                500
            );
        }
    }
    public function loginApi(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

    $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['success' => false, 'message' => 'Email atau password tidak valid'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login berhasil',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ]);
}

public function logoutApi(Request $request)
{
    $request->user()->currentAccessToken()->delete();

    return response()->json([
        'success' => true,
        'message' => 'Logout berhasil',
    ]);
}
}