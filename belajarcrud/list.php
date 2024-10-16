<?php
include("connection.php");

$query = mysqli_query($connection, "SELECT * FROM pelajar");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
    <body>
        <a href="add.php">Tambahkan Data</a>
        <form action="search.php" method="GET">
            <br>
            <input type="text" name="keyword" placeholder="Ketik Untuk Mencari Data">
            <button type="submit">Cari</button>
        </form>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Jurusan</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <?php foreach($result as $index => $pelajar) : ?>
                <tr>
                    <td><?= $index +1 ?></td> 
                    <!-- untuk mempersingkat php echo maka gunakan "=" -->
                    <td><a href="profil.php?id=<?=$pelajar["id"]?>"><?= $pelajar["nama"] ?></a></td>
                    <td><?= $pelajar["jenis_kelamin"] ?></td>
                    <td><?= $pelajar["jurusan"] ?></td>
                    <td>
                        <a href="edit.php?id=<?=$pelajar["id"]?>">Edit</a> |
                        <a href="delete.php?id=<?=$pelajar["id"]?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>