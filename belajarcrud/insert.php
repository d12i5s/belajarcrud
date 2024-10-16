<?php
include("connection.php");


//menangkap data yg insert
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$jurusan = $_POST["jurusan"];
$alamat = $_POST["alamat"];
$hobi = $_POST["hobi"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$nomor_hp = $_POST["nomor_hp"];

try {
    mysqli_query(
        $connection, 
        "INSERT INTO pelajar (nama, jenis_kelamin, jurusan, alamat, hobi, tempat_lahir, tanggal_lahir, nomor_hp)
        VALUES ('$nama', '$jenis_kelamin', '$jurusan', '$alamat', '$hobi', '$tempat_lahir', '$tanggal_lahir', '$nomor_hp')"
        );
    header("location:list.php");
} catch (Exception $e) {
    echo "Gagal Insert Ke database: " . $e->getMessage();
}


?>