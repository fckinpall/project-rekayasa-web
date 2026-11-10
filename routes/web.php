<?php

use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionLogin'])->name('action.Login');
Route::post('/logout', [LoginController::class, 'actionLogout'])->name('actionLogout');
Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', [MahasiswaController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/about', function () {
    return view('page.about');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');

    Route::get('/projects/pdf', [AdminProjectController::class, 'exportPdf'])->name('projects.pdf');
    Route::get('projects/{id}/pdf', [AdminProjectController::class, 'exportPdfById'])->name('projects.pdfSingle');
    Route::resource('projects', AdminProjectController::class);
});