<?php
include "koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM catatan WHERE id = $id";
$eksekusi = mysqli_query($koneksi, $query); 
$data = mysqli_fetch_assoc($eksekusi);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "koneksi.php";
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $penulis = $_POST['penulis'];

    $query = "UPDATE catatan SET
                    judul = '$judul',
                    deskripsi = '$deskripsi',
                    tanggal = '$tanggal',
                    penulis = '$penulis'
                WHERE id = $id";
    mysqli_query($koneksi, $query);

    echo "<script>
            alert('Data berhasil di update');
            window.location='index.php';
            </script>";  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Notable&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+VN+Guides&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="h2">Edit Note</h1>
    <div class="tambah">
        <form action="" method="POST">
            <div>
                <span class="details">judul</span>
                <input type="text" name="judul" value="<?=$data['judul']?>">
            </div>
            <div>
                <span class="details">deskripsi</span>
                <textarea type="text" name="deskripsi"><?=$data['deskripsi']?></textarea>
            </div>
            <div>
                <span class="details">tanggal</span>
                <input type="date" name="tanggal" value="<?=$data['tanggal']?>">
            </div>
            <div>
                <span class="details">penulis</span>
                <input type="text" name="penulis" value="<?=$data['penulis']?>">
            </div>
            <div>
                <a href="index.php" class="mbutton">Batal</a>
                <input type="submit" value="Submit" class="but">
            </div>
        </form>
    </div>  
</body>
</html>