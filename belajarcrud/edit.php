<?php
include("connection.php");

$id = $_GET["id"];
$query = mysqli_query($connection, "SELECT * FROM pelajar WHERE id = $id");
$pelajar = mysqli_fetch_assoc($query);
?>

<html>
<body>
    <h1>Edit Data</h1>

    <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?=$pelajar["id"]?>">

    <label>Nama : </label>
    <input type="text" name="nama" value="<?=$pelajar["nama"]?>" />
    <br>
    <br>

    <label for="">Jenis Kelamin : </label>
    <select name="jenis_kelamin">
        <option value="Laki - Laki" <?php if($pelajar["jenis_kelamin"] == "Laki - Laki") echo "selected" ?>>Laki - Laki</option>
        <option value="Perempuan" <?php if($pelajar["jenis_kelamin"] == "Perempuan") echo "selected" ?>>Perempuan</option>
    </select>
    <br>
    <br>

    <label for="">Jurusan : </label>
    <select name="jurusan" id="">
        <option value="IPA" <?php if($pelajar["jurusan"] == "IPA") echo "selected" ?>>IPA</option>
        <option value="IPS" <?php if($pelajar["jurusan"] == "IPS") echo "selected" ?>>IPS</option>
        <option value="BAHASA" <?php if($pelajar["jurusan"] == "BAHASA") echo "selected" ?>>BAHASA</option>
    </select>
    <br>
    <br>

    <label for="">Alamat : </label>
    <textarea name="alamat" id="" cols="30" rows="3"><?=$pelajar["alamat"]?></textarea>
    <br>
    <br>

    <label for="">Hobi : </label>
    <input type="text" name="hobi" value="<?=$pelajar["hobi"]?>">
    <br>
    <br>

    <label for="">Tempat Lahir : </label>
    <input type="text" name="tempat_lahir" value="<?=$pelajar["tempat_lahir"]?>">
    <br>
    <br>

    <label for="">Tanggal Lahir : </label>
    <input type="date" name="tanggal_lahir" value="<?=$pelajar["tanggal_lahir"]?>">
    <br>
    <br>

    <label for="">Nomor Handphone : </label>
    <input type="number" name="nomor_hp" value="<?=$pelajar["nomor_hp"]?>">
    <br>
    <br>

    <button type="submit">Simpan Perubahan</button>
    <a href="list.php">Kembali</a>
    </form>
</body>
</html>