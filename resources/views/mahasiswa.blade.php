<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body class="bg-light d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm">
         <div class="container">
            <a class="navbar-brand text-white" href="#">Profile Mahasiswa</a>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center py-4">
                        <h2 class="card-tittle mb-0">Profile Mahasiswa</h2>
                        <center><img src="{{ asset('images/kita.jpg') }}"
                        alt="profile image" class="img-fluid rounded-circle mt-3"
                        style="width: 150px; height: 150px; object-fit: cover;"></center>
                    </div>
                    <div class="card-body px-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Nama:</strong> {{ $mahasiswa['nama'] }}
                            </li>
                            <li class="list-group-item">
                                <strong>NIM:</strong> {{ $mahasiswa['nim'] }}
                            </li>
                            <li class="list-group-item">
                                <strong>Prodi:</strong> {{ $mahasiswa['prodi'] }}
                            </li>
                            <li class="list-group-item">
                                <strong>Kampus:</strong> {{ $mahasiswa['kampus'] }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2026 Profile Mahasiswa. All rights reserved</p>
    </footer>
</body>
</html>