<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari ditekan
if( isset( $_POST["cari"] ) ) {
    $mahasiswa = cari( $_POST[ "keyword" ] );
}


?>

<!DOCTYPE html>
    <head>
        <title>Halaman Admin</title>
    </head>

    <body>
        <h1>Daftar</h1>

        <a href="tambah.php">Tambah data</a>
        <br><br>

        <form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus
            placeholder="Input  keyword..." autocomplete="off">
            <button type="submit" name="cari">Cari</button>
        </form>
        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Action</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>    
            </tr>
             
            <?php $i = 1; ?>
            <?php foreach( $mahasiswa as $row ) : ?>
            <tr>
               <td><?= $i; ?></td>
               <td>
                <a href="update.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" 
                    onclick="return confirm('apakah anda yakin?');">hapus</a>    
               </td>
               <td><img src="img/<?= $row["gambar"]; ?>" alt="flammable" width="50"></td>
               <td><?= $row[ "nrp" ]; ?></td> 
               <td><?= $row[ "nama" ]; ?></td>
               <td><?= $row[ "email" ]; ?></td>
               <td><?= $row[ "jurusan" ]; ?></td> 
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>

    </body>
</html>