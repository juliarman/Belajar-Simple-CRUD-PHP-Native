<?php

include "koneksi.php";
include "data.php";


$idnya = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksinya, "delete from penduduk where id_NIK='$idnya'");
 
// mengalihkan halaman kembali ke index.php
header("location:data.php");