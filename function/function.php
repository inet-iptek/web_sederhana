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

?>