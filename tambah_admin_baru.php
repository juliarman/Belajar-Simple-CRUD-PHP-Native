<?php

include "koneksi.php";

$username = $_POST['usernamebaru'];
$passwordnya = $_POST['passwordnya'];


$query = "INSERT INTO adminya SET passwordnya='$username', usernamenya='$passwordnya'";

$simpan = mysqli_query($koneksinya, $query);

  header("location:tambah_admin.php");