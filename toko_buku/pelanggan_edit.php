<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Harus login dulu bro."));
    exit;
}
?>
<?php
include 'koneksi_db.php';
include 'nav.php';

$id = $_GET['id'] ?? 0;

// Ambil data pelanggan berdasarkan ID
$stmt = $conn->prepare("SELECT * FROM Pelanggan WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Pelanggan</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Data Pelanggan</h2>
        <form method="post" action="proses_edit_pelanggan.php">
            <input type="hidden" name="id" value="<?= $row['ID'] ?>">

            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= htmlspecialchars($row['Nama']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($row['Email']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="nomer_hp" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="nomer_hp" name="nomer_hp" value="<?= htmlspecialchars($row['Telepon']) ?>" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="lihat_pelanggan.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
