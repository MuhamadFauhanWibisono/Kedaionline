<?php
    $koneksi = new mysqli("localhost", "root", "", "kedai_online");

if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }
?>