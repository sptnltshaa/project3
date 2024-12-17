<!-- berisi tampilan seluruh data dari database -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Notable&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+VN+Guides&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h1 class="h1">Tata Surya</h1>
    <a href="tambah.php">
        <button type="button" class="button">Add Note</button>
    </a>
    <?php
    include 'koneksi.php';
    $query = 'SELECT * FROM catatan';
    $eksekusi = mysqli_query($koneksi, $query);
    $catatans = mysqli_fetch_all($eksekusi, MYSQLI_ASSOC);

    foreach($catatans as $catatan){
    ?>
    <div class="deskr">
        <div class="deskripsi">
            <h2><?= $catatan['judul'] ?></h2>
            <p><?= $catatan['deskripsi'] ?></p>
            <p><?= $catatan['tanggal'] ?></p>
            <p><?= $catatan['penulis'] ?></p>
            <a href="delete.php?id=<?= $catatan['id'] ?>" class="btn btn-danger">
                <button class="mbutton">Delete</button>
            </a>
            <a href="edit.php?id=<?= $catatan['id'] ?>" class="btn btn-danger">
                <button class="mybutton">Update</button>
            </a>
        </div>
    </div>
<?php
}
?>
</body>
</html>