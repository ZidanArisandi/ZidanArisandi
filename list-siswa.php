<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Telkom Lampung</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>kelas</th>
                <th>jurusan</th>
                <th>alamat</th>
                <th>asal_sekolah</th>
                <th>agama</th>
                <th>tanggal_lahir</th>
                <th>no_telepon</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM form_tb";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $siswa['id'] . "</td>";
                echo "<td>" . $siswa['nama'] . "</td>";
                echo "<td>" . $siswa['kelas'] . "</td>";
                echo "<td>" . $siswa['jurusan'] . "</td>";
                echo "<td>" . $siswa['alamat'] . "</td>";
                echo "<td>" . $siswa['asal_sekolah'] . "</td>";
                echo "<td>" . $siswa['agama'] . "</td>";
                echo "<td>" . $siswa['tanggal_lahir'] . "</td>";
                echo "<td>" . $siswa['no_telepon'] . "</td>";
                echo "<td>" . $siswa['email'] . "</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total:
        <?php echo mysqli_num_rows($query) ?>
    </p>

</body>

</html>