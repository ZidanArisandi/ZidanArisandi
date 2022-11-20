<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Telkom lampung</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="kelas">kelas: </label>
                <input type="text" name="kelas" placeholder="kelas" />
            </p>
            <p>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="agama" placeholder="jurusan" />
                <select name="jurusan">
                    <option>RPL</option>
                    <option>ANIMASI</option>
                    <option>TJAT</option>
                    <option>TKJ</option>
                </select>
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea type="alamat" name="alamat" placeholder="Wajib di isi!"></textarea>
            </p>
            <p>
                <label for="asal_sekolah">Asal sekolah: </label>
                <input type="text" name="asal_sekolah" placeholder="asal_sekolah" />
            </p>
            <p>
                <label for="tanggal_lahir">TTL: </label>
                <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control-border dark" required>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                </select>
            </p>
            <p>
                <label for="nomor_telepon">Nomor Telepon: </label>
                <input type="text" name="no_telepon" placeholder="nomor_telepon" />
            </p>
            <p>
                <label for="email">Email: </label>
                <input name="email" id="email" type="email" class="form-control border-dark"
                    placeholder="example@example.com">
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>