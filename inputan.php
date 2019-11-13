<?php

include "koneksi.php";

$ndepan = $_POST['nama'];
$belakang = $_POST['namabelakang'];
$nik = $_POST['nik'];
$jenkel = $_POST['jenkel'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO penduduk SET NDepan='$ndepan', NBelakang='$belakang', 
            id_NIK='$nik', Kelamin='$jenkel', agama='$agama', alamat='$alamat'";

$simpan = mysqli_query($koneksinya, $query);

  header("location:home.php");