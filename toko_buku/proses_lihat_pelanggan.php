<?php
include 'koneksi_db.php';

$search_judul = isset($_GET['judul']) ? $_GET['judul'] : '';

$query = "SELECT ID, Nama, Email, Telepon FROM pelanggan";
if (!empty($search_judul)) {
    $query .= " WHERE Nama LIKE '%" . $conn->real_escape_string($search_judul) . "%'";
}

$result = $conn->query($query);
?>
