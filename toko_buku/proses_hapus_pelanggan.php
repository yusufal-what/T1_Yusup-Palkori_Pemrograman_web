<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Harus login dulu bro."));
    exit;
}
?>
<?php
include 'koneksi_db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Siapkan statement untuk menghindari SQL Injection
    $stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>
            alert('Data pelanggan berhasil dihapus!');
            window.location.href = 'lihat_pelanggan.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data pelanggan.');
            window.location.href = 'lihat_pelanggan.php';
        </script>";
    }
} else {
    echo "<script>
        alert('ID pelanggan tidak ditemukan.');
        window.location.href = 'lihat_pelanggan.php';
    </script>";
}
?>
