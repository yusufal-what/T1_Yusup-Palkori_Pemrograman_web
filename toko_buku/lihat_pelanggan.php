<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Harus login dulu bro."));
    exit;
}
?>
<?php include 'proses_lihat_pelanggan.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Daftar Pelanggan</title>
</head>
<body>
   <?php include 'nav.php'; ?>
   <div class="container mt-4">
       <h2>Daftar Pelanggan</h2>

       <!-- Form Pencarian -->
       <form method="get" class="row g-3 mb-4">
           <div class="col-md-5">
               <label for="judul" class="form-label">Cari Nama Pelanggan</label>
               <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan nama pelanggan" value="<?= htmlspecialchars($search_judul) ?>">
           </div>
           <div class="col-md-2 align-self-end">
               <button type="submit" class="btn btn-primary">Cari</button>
           </div>
           <div class="col-md-2 align-self-end">
               <a href="lihat_pelanggan.php" class="btn btn-secondary">Reset</a>
           </div>
       </form>

       <!-- Tabel Daftar Pelanggan -->
       <table class="table table-striped">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Nama</th>
                   <th>Email</th>
                   <th>Telepon</th>
                   <th>Tombol</th>
               </tr>
           </thead>
           <tbody>
               <?php while ($row = $result->fetch_assoc()): ?>
               <tr>
                   <td><?= $row['ID'] ?></td>
                   <td><?= htmlspecialchars($row['Nama'] ?? '') ?></td>
                   <td><?= htmlspecialchars($row['Email'] ?? '') ?></td>
                   <td><?= htmlspecialchars($row['Telepon'] ?? '') ?></td>
                   <td>
                       <a href="pelanggan_edit.php?id=<?= $row['ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
                       <a href="proses_hapus_pelanggan.php?id=<?= $row['ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                   </td>
               </tr>
               <?php endwhile; ?>
           </tbody>
       </table>
   </div>
</body>
</html>
