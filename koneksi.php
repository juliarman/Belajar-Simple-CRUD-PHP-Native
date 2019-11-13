<?php

$koneksinya = mysqli_connect("localhost","root","","finalweb");

if (mysqli_connect_errno()) {

    echo "GAGAL TERHUBUNGKI KI KE DATABASENA" . mysqli_connect_error();

}