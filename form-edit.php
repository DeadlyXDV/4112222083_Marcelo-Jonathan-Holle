<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <header class="mb-4">
            <h3 class="text-center">Formulir Edit Siswa</h3>
        </header>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Edit Data Siswa</h5>
                    </div>
                    <div class="card-body">
                        <form action="proses-edit.php" method="POST">

                            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                            <div class="mb-3">
                                <label for="nama" class="form-label fw-bold">Nama: </label>
                                <input type="text" class="form-control" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-bold">Alamat: </label>
                                <textarea class="form-control" name="alamat" rows="3"><?php echo $siswa['alamat'] ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Jenis Kelamin: </label>
                                <?php $jk = $siswa['jenis_kelamin']; ?>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>>
                                    <label class="form-check-label" for="laki">Laki-laki</label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="agama" class="form-label fw-bold">Agama: </label>
                                <?php $agama = $siswa['agama']; ?>
                                <select class="form-select" name="agama">
                                    <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                                    <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                                    <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                                    <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                                    <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="sekolah_asal" class="form-label fw-bold">Sekolah Asal: </label>
                                <input type="text" class="form-control" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                            </div>

                            <div class="d-flex gap-2 mt-4">
                                <a href="list-siswa.php" class="btn btn-outline-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary flex-grow-1" name="simpan">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>