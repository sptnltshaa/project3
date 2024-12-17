<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil ID data yang akan dihapus dari URL
$id = $_GET['id'];

$query = "DELETE FROM catatan WHERE id='$id'";
$eksekusi = mysqli_query($koneksi, $query);
echo "<script> alert('Berhasil hapus catatan');
  window.location.replace('index.php');
  </script>"
?>