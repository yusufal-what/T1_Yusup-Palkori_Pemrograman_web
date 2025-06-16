<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $email = $_POST['email'];
    $nomer_hp = $_POST['nomer_hp'];

    $stmt = $conn->prepare("UPDATE Pelanggan SET Nama = ?, Email = ?, Telepon = ? WHERE ID = ?");
    $stmt->bind_param("sssi", $nama_pelanggan, $email, $nomer_hp, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data pelanggan berhasil diperbarui'); window.location='lihat_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data pelanggan'); window.location='lihat_pelanggan.php';</script>";
    }
}
?>
