<?php
include("connection.php");

$id = $_GET["id"];
$query = mysqli_query($connection, "SELECT * FROM pelajar WHERE id = $id");
$pelajar = mysqli_fetch_assoc($query);
?>

<html>
    <body>
        <h3><?=$pelajar["nama"]?></h3>
        <label>Jenis Kelamin: </label>
        <label><?=$pelajar["jenis_kelamin"]?></label>
        <br>
        <label>Jurusan: </label>
        <label><?=$pelajar["jurusan"]?></label>
        <br>
        <label>Alamat: </label>
        <label><?=$pelajar["alamat"]?></label>
        <br>
        <label>Hobi: </label>
        <label><?=$pelajar["hobi"]?></label>
        <br>
        <label>Tempat: </label>
        <label><?=$pelajar["tempat_lahir"]?></label>
        <br>
        <label>Tanggal lahir: </label>
        <label><?=date("d M Y", strtotime($pelajar["tanggal_lahir"]))?></label>
        <br>
        <a href="list.php">Kembali</a>
    </body>
</html>