<?php
$conn = new mysqli("localhost", "root", "", "dpw07");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>