<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | Data Pendaftaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        .table-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-4">
        <header class="text-center mb-4">
            <h1 class="display-5 fw-bold">Siswa Yang Sudah Mendaftar</h1>
            <p class="text-muted">Daftar siswa yang telah terdaftar di SMK UNDIRA</p>
        </header>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="index.php" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <a href="form-daftar.php" class="btn btn-primary">
                <i class="bi bi-person-plus"></i> Tambah Siswa Baru
            </a>
        </div>

        <div class="table-container bg-white">
            <table id="dataSiswa" class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
                    $nomor = 1;

                    while ($siswa = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>" . $nomor++ . "</td>";
                        echo "<td>" . $siswa['nama'] . "</td>";
                        echo "<td>" . $siswa['alamat'] . "</td>";
                        echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                        echo "<td>" . $siswa['agama'] . "</td>";
                        echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                        echo "<td class='text-center'>";
                        echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn btn-sm btn-warning me-1'><i class='bi bi-pencil'></i></a>";
                        echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'><i class='bi bi-trash'></i></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mt-4 text-center">
            <?php
            $count_query = "SELECT COUNT(*) as total FROM calon_siswa";
            $count_result = mysqli_query($db, $count_query);
            $count_data = mysqli_fetch_assoc($count_result);
            ?>
            <p class="text-muted">Total: <span class="fw-bold"><?php echo $count_data['total']; ?></span> siswa</p>
        </div>

        <footer class="mt-5 text-center text-muted">
            <p>&copy; 2025 SMK UNDIRA - Pendaftaran Siswa Baru</p>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function() {
            $('#dataSiswa').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json'
                },
                responsive: true,
                columnDefs: [{
                        orderable: false,
                        targets: 6
                    } // Disable sorting on action column
                ]
            });
        });
    </script>
</body>

</html>