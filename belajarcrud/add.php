<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Data</title>
</head>
<body>
    <h1>Isi Form Dibawah Untuk Menambahkan Data</h1>

    <form action="insert.php" method="POST">
    <label for="">Nama : </label>
    <input type="text" name="nama" id="">
    <br>
    <br>

    <label for="">Jenis Kelamin : </label>
    <select name="jenis_kelamin" id="">
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <br>
    <br>

    <label for="">Jurusan : </label>
    <select name="jurusan" id="">
        <option value="IPA">IPA</option>
        <option value="IPS">IPS</option>
        <option value="BAHASA">BAHASA</option>
    </select>
    <br>
    <br>

    <label for="">Alamat : </label>
    <textarea name="alamat" id="" cols="30" rows="3"></textarea>
    <br>
    <br>

    <label for="">Hobi : </label>
    <input type="text" name="hobi" id="">
    <br>
    <br>

    <label for="">Tempat Lahir : </label>
    <input type="text" name="tempat_lahir" id="">
    <br>
    <br>

    <label for="">Tanggal Lahir : </label>
    <input type="date" name="tanggal_lahir" id="">
    <br>
    <br>

    <label for="">Nomor Handphone : </label>
    <input type="number" name="nomor_hp" id="">
    <br>
    <br>

    <button type="submit">Simpan</button>
    <a href="list.php">Kembali</a>
    </form>
</body>
</html>