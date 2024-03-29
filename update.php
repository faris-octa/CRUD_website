<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// check apakah tombol submit sudah ditekan atau belum
if( isset( $_POST['submit'] ) ) {
    
    // check apakah data berhasil diubah
    if( update( $_POST ) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>Update data</h1>

    <form action="" method="post">
    <input type="hidden" name="id" value=" <?= $mhs["id"] ?> "
    <ul>
        <li>
            <label for="nrp">NRP: </label>
            <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"] ?>">
        </li>
        <li>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
        </li>
        <li>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
        </li>
        <li>
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
        </li>
        <li>
            <label for="gambar">Gambar: </label>
            <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"] ?>">
        </li>
        <li>
            <button type="submit" name="submit">Update Data!</button>
        </li>
    </ul>

    </form>


</body>
</html>