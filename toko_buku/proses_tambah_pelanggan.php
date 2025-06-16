<?php
include 'koneksi_db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $nama_pelanggan = $_POST['nama_pelanggan'];
   $email = $_POST['email'];
   $nomer_hp = $_POST['nomer_hp'];
   


   $stmt = $conn->prepare("INSERT INTO Pelanggan (Nama, Email, Telepon) VALUES (?, ?, ? )");
   $stmt->bind_param("sss", $nama_pelanggan, $email, $nomer_hp);


   if ($stmt->execute()) {
       echo "<script>
           alert('Pelanggan berhasil ditambahkan!');
           window.location.href = 'tambah_buku.php';
       </script>";
   } else {
       echo "<script>
           alert('Gagal menambahkan buku: " . addslashes($stmt->error) . "');
           window.location.href = 'tambah_buku.php';
       </script>";
   }
}
?>

