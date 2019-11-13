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
<form action="inputan.php" method="post">

<h1>SELAMAT DATANG...</h1>
<input type="text" name="nama" class="inputandesain" placeholder="Nama Depan">
<input type="text" name="namabelakang" class="inputandesain" placeholder="Nama Belakang">
<br><br>
<input type="text" name="nik" class="niknya" placeholder="Masukkan Nomor NIK..">
<br>

<br>
<input type="text" name="alamat" class="niknya" placeholder="Alamat">

<h4>Jenis Kelamin : </h4>

<input type="radio" class="jenkel" name="jenkel" value="laki-laki">
<label>Laki-laki</label>

<input type="radio" class="jenkel" name="jenkel" value="perempuan">
<label>Perempuan</label>

<br><br>

<h4>Pilih Agama Anda : </h4>

<select name="agama">
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="Budha">Budha</option>

</select>




<br>
<br>

<input type="submit" value="INPUT DATA" class="kiriman" style=" color: #fff;
    background-color: #5e8bc7;
    border: 0px;
    cursor: pointer;
    padding: 13px;">




</form>

<br>
<div class="footernya"
 H5> Developer By Juliarman & Eko STMIK Dipanegara Makassar 2018 - Sekolah Manajemen Informatika Dan Komputer  </H5>
   
</div>

    </main>
</body>
</html>