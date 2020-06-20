<?php 
    require '../function/function.php';
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sederhana | Tambah</title>
</head>
<body>
    <h1>Form Tambah Data</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="" required>
                </td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>:</td>
                <td>
                    <input type="text" name="nim" id="" required>
                </td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>:</td>
                <td>
                    <input type="text" name="jurusan" id="" required>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="" required>
                </td>
            </tr>
            <tr>
                <th>Gambar</th>
                <td>:</td>
                <td>
                    <input type="file" name="gambar" id="" required>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Tambah" name="tambah">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>