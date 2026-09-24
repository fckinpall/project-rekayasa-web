<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light d-flex flex-column min-vh-100">
    <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Profile Mahasiswa UNPAM</a>
        </div>
    </nav>
    
    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center py-4">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="https://afif-e.my.id/storage/about/01KJ6JM4456EE46KM16GPJDP4X.png" alt="" style="width: 120px; height: 120px; object-fit: cover;">
                        </div>
                        <h4 class="mb-0 fw-bold">{{ $mahasiswa['nama'] }}</h4>
                        <span class="badge bg-success mt-1">{{ $mahasiswa['status'] }}</span>
                    </div>
                    <div class="card-body px-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">NIM:</span>
                                <span>{{ $mahasiswa['nim'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">Email:</span>
                                <span>{{ $mahasiswa['email'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">Program Studi:</span>
                                <span>{{ $mahasiswa['prodi'] }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white border-top py-3 mt-5">
        <div class="container text-center">
            <span class="text-muted">&copy; 2024 Profile Mahasiswa UNPAM. All rights reserved.</span>
        </div>
    </footer>
</body>
</html>