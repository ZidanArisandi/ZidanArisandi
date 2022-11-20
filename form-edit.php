<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM form_tb WHERE id=$id";
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
    <title>Formulir Edit Siswa | SMK Telkom Lampung</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
                <label for="kelas">kelas: </label>
                <input type="text" name="kelas" placeholder="kelas" />
            </p>
            <p>
                <label for="jurusan">Jurusan: </label>
                <?php $Jurusan = $siswa['jurusan']; ?>
                <select name="jurusan">
                    <option <?php echo ($Jurusan=='RPL') ? "selected" : "" ?>>RPL</option>
                    <option <?php echo ($Jurusan=='ANIMASI') ? "selected" : "" ?>>Animasi</option>
                    <option <?php echo ($Jurusan=='TJAT') ? "selected" : "" ?>>Tjat</option>
                    <option <?php echo ($Jurusan=='TKJ') ? "selected" : "" ?>>Tkj</option>
                </select>
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama=='Islam') ? "selected" : "" ?>>Islam</option>
                    <option <?php echo ($agama=='Kristen') ? "selected" : "" ?>>Kristen</option>
                    <option <?php echo ($agama=='Hindu') ? "selected" : "" ?>>Hindu</option>
                    <option <?php echo ($agama=='Budha') ? "selected" : "" ?>>Budha</option>
                </select>
            </p>
            <p>
                <label for="nomor_telepon">Nomor Telepon: </label>
                <input type="text" name="no_telepon" placeholder="nomor_telepon" />
            </p>
            <p>
                <label for="asal_sekolah">Asal sekolah: </label>
                <input type="text" name="asal_sekolah" placeholder="nama sekolah"
                    value="<?php echo $siswa['asal_sekolah'] ?>" />
            </p>
            <p>
                <label for="tanggal_lahir">TTL: </label>
                <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control-border dark" required>
            </p>
            <p>
                <label for="email">Email: </label>
                <input name="email" id="email" type="email" class="form-control border-dark"
                    placeholder="example@example.com">
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>

        </fieldset>


    </form>

</body>

</html>