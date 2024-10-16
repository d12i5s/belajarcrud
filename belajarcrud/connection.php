<?php
try{
    $connection = mysqli_connect("localhost", "root", "","db_crud");
} catch (Exception $e) {
    echo "Gagal: " . $e->getMessage(); // untuk mendapatkan pesan apa yang error
}
?>