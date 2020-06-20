<?php 
    require 'function/function.php';
    $data = queryAll("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sederhana</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>AKSI</th>
        </tr>
        <?php
            $no = 1; 
            foreach($data as $dt) : 
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $dt['gambar']; ?></td>
            <td><?= $dt['nim']; ?></td>
            <td><?= $dt['nama']; ?></td>
            <td>
                <a href="">Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>