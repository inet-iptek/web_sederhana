<?php 
    // Koneksi Database
    function conn() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "db_web_sederhana";

        $conn = new mysqli($host,$user,$pass,$db);

        return $conn;
    }

    // Tampil Semua Data
    function queryAll($s) {
        $conn = conn();

        $data = $conn->query($s);
        $rows = [];
        
        while($row = $data->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    // Tampil Satu Data
    function query($s) {
        $conn = conn();

        $data = $conn->query($s);

        return $data->fetch_assoc();
    }
    // Upload Gambar
    function upload() {
        $nama_file = $_FILES['gambar']['name'];
        $tipe_file = $_FILES['gambar']['type'];
        $ukuran_file = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $lokasi_upload = "../img/";

        // Ketika gambar kosong / Tidak dipilih
        if($error == 4) {
            return 'default.png';
        }

        // Cek Ekstensi file
        $daftar_tipe_file = ['jpg','jpeg','png'];
        $ekstensi_file = explode('.',$nama_file);
        $ekstensi_file = strtolower(end($ekstensi_file));

        if(!in_array($ekstensi_file, $daftar_tipe_file)) {
            echo "<script>
                alert('Ekstensi file harus jpg, jpeg dan png!');
            </script>";
            return false;
        }

        // Cek type file
        if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
            echo "<script>
                alert('File bukan gambar!');
            </script>";
            return false;
        }

        // Cek ukuran file
        // Maksimal 1MB = 1000000
        if($ukuran_file > 1000000) {
            echo "<script>
                alert('Ukuran File Terlalu Besar');
            </script>";
            return false;
        }

        // Jika Berhasil dicek
        // Upload / Pemindahan file ke folder img

        // Generate nama baru
        $nama_file_baru = uniqid();
        $nama_file_baru .= '.';
        $nama_file_baru .= $ekstensi_file;

        move_uploaded_file($tmp_file, $lokasi_upload.$nama_file_baru);

        return $nama_file_baru;
    }

    // Tambah Data
    function tambah($data) {

    }

?>