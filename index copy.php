<?php
// koneksi ke database
$conn = mysqli_connect( "localhost", "root", "", "phpdasar" );


// query data dari tabel mahasiswa
$result =  mysqli_query($conn, "SELECT * FROM mahasiswa"); 
// var_dump($result);

// fetch mahasiswa dari object result
// while( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs); // menampilkan isi data mahasiswa per baris
// }
// var_dump($mhs);


?>

<!DOCTYPE html>
    <head>
        <title>Halaman Admin</title>
    </head>

    <body>
        <h1>Daftar</h1>

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
            <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
               <td><?= $i; ?></td>
               <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
               </td>
               <td><img src="img/<?= $row["gambar"]; ?>" alt="flammable" width="50"></td>
               <td><?= $row[ "nrp" ]; ?></td> 
               <td><?= $row[ "nama" ]; ?></td>
               <td><?= $row[ "email" ]; ?></td>
               <td><?= $row[ "jurusan" ]; ?></td> 
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>

        </table>

    </body>
</html>