
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DIK - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/desain.css" />
    <script src="js/skripnya.js"></script>
</head>
<body>



<header>


    <h1 class="judul">DATA INPUT KEPENDUDUKAN</h1>
    <h4>Aplikasi webiste input data kependudukan daerah</h4>

    <nav>


    <li><a href="http://localhost/xampp/finalweb/home.php"> Home</a></li>
    <li><a href="http://localhost/xampp/finalweb/data.php">Data</a></li>
    <li><a href="http://localhost/xampp/finalweb/tambah_admin.php">Tambah Admin</a></li>
    <li><a href="http://localhost/xampp/finalweb/index.php">Keluar</a></li>
    </nav>

</header>

<main class="areanya">


<table border="0px" cellpadding="10px">

<tr>
    <th>No</th>
    <th>Nama Depan</th>
    <th>Nama Belakang</th>
    <th>NIK</th>
    <th>Kelamin</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Pilihan</th>
</tr>

<?php

include 'koneksi.php';

$nomor = 1;


$data = mysqli_query($koneksinya,"select * from penduduk");
while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $d['NDepan']; ?></td>
        <td><?php echo $d['NBelakang']; ?></td>
        <td><?php echo $d['id_NIK']; ?></td>
        <td><?php echo $d['Kelamin']; ?></td>
        <td><?php echo $d['agama']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
            <a href="hapus.php?id=<?php echo $d['id_NIK']; ?>">HAPUS</a>
        </td>
    </tr>
    <?php 
}
?>



</table>



    </main>
    <div class="footernya"
 H5> Developer By Juliarman & Eko STMIK Dipanegara Makassar 2018 - Sekolah Manajemen Informatika Dan Komputer  </H5>
   
</div>
</body>
</html>