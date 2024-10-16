<?php
include("connection.php");

$id = $_POST["id"];
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
        "UPDATE pelajar
        SET nama = '$nama',
            jenis_kelamin = '$jenis_kelamin',
            jurusan = '$jurusan',
            alamat = '$alamat',
            hobi = '$hobi',
            tempat_lahir = '$tempat_lahir',
            tanggal_lahir = '$tanggal_lahir',
            nomor_hp = '$nomor_hp'
        WHERE id = $id
    ");
    header("location:list.php");
} catch (Exception $e) {
    echo "Gagal Update Ke database: " . $e->getMessage();
}
?>