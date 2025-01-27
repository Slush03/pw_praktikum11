<!DOCTYPE html>
<html>
<head>
        <title>Edit Mahasiswa</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Edit Mahasiswa</h1>
        <?php
        //koneksi ke database
        include "koneksi.php";
        //mengambil data mahasiswa berdasarkan ID
        $id = $_GET['id'];
        $sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
        $result = mysqli_query($koneksi, $sql);
        $data = mysqli_fetch_assoc($result);
        ?>
        <form method="post" action="aksi_edit.php"> <!-- Correct action attribute here -->
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $data['nim'] ?>" />
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" />
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data['no_hp'] ?>" />
            </div>
            <div class="mb-3 form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan" value="Perempuan" required>
                <label class="form-check-label" for="jenis_kelamin_perempuan">Perempuan</label>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan" required>
                    <option value="Teknik Informatika" <?php if ($data['jurusan'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                    <option value="Sistem Informasi" <?php if ($data['jurusan'] == 'Sistem Informasi') echo 'selected'; ?>>Sistem Informasi</option>
                    <option value="Sistem Komputer" <?php if ($data['jurusan'] == 'Sistem Komputer') echo 'selected'; ?>>Sistem Komputer</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?php echo $data['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="tampilan_data.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
