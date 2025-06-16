<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Tambah Buku</title>
</head>
<body>
   <div class="container mt-4">
       <h2>Tambah Pelanggan</h2>
       <form method="post" action="proses_tambah_pelanggan.php">
           <div class="mb-3">
               <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
               <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
           </div>
           <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="text" class="form-control" id="email" name="email" required>
           </div>
           <div class="mb-3">
               <label for="nomer_hp" class="form-label">Nomer_hp</label>
               <input type="number" class="form-control" id="nomer_hp" name="nomer_hp" required>
           </div>
           
           
           <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
       </form>
   </div>
</body>
</html>
