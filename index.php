<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: .3rem;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <header class="jumbotron text-center mb-4">
            <h1 class="display-4">Pendaftaran Siswa Baru</h1>
            <h3 class="text-secondary">SMK UNDIRA</h3>
            <hr class="my-4">
        </header>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">MENU</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-3">
                            <a href="form-daftar.php" class="btn btn-outline-primary btn-lg">
                                <i class="bi bi-person-plus"></i> Daftar Baru
                            </a>
                            <a href="list-siswa.php" class="btn btn-outline-success btn-lg">
                                <i class="bi bi-table"></i> Data Siswa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt-5 text-center text-muted">
            <p>&copy; 2025 SMK UNDIRA - Pendaftaran Siswa Baru</p>
        </footer>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</body>

</html>