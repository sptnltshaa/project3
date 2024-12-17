<?php
    // $_POST -> disini dan di klik simpan
    //is, set -> apakah diatur -> apakah ada nilai dari
    if(isset($_POST['judul'])){
        require_once "koneksi.php";
        // dapatkan data dari form bermetod post
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];
        $penulis = $_POST['penulis'];

        //data tadi masukkan ke dalam query -> insert
        $query = "INSERT INTO catatan (judul, deskripsi, tanggal, penulis) VALUES ('$judul', '$deskripsi', '$tanggal', '$penulis')";
        // eksekusi query
        $eksekusi = mysqli_query($koneksi, $query);
        // jika berhasil lempar ke index
        if($eksekusi){
            header('location: index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data cpns</title>
    <link rel="stylesheet" href="styl.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Notable&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+VN+Guides&display=swap" rel="stylesheet">
</head>
<body>

    <!-- LOKASI, JABATAN, JUMLAH -> DATABASE -->

    <!-- tag from -->
    <!-- method : 2
    post -> data tidak tertampil di address bar ,
    get -> database tertampil di address bar -->
    <h1 class="h2">Add Note</h1>
    <div class="tambah">
        <form action="" method="POST">
            <div>
                <span class="details">judul</span>
                <input type="text" name="judul" placeholder="judul">
            </div>
            <div>
                <span class="details">deskripsi</span>
                <textarea type="text" name="deskripsi" placeholder="deskripsi"></textarea>
            </div>
            <div>
                <span class="details">tanggal</span>
                <input type="date" name="tanggal" placeholder="tanggal">
            </div>
            <div>
                <span class="details">penulis</span>
                <input type="text" name="penulis" placeholder="penulis">
            </div>
            <div>
                <a href="index.php" class="mbutton">Batal</a>
                <input type="submit" name="simpan" class="but">
            </div>
        </form>
    </div>  
</body>
</html>