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
    <main class="areanya">
   

  
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>

    <div class="formnya">
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				
				<td><input type="text" name="username" placeholder="Masukkan username" class="inputandesain"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
			
				<td><input type="password" name="password" placeholder="Masukkan password" class="inputandesain"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				
				<td>
			<br>
			<input type="submit" value="MASUK" class="kiriman" style=" color: #fff;
			border-radius: 15px;
			background-color: #5e8bc7;
			border: 0px;
			cursor: pointer;
			padding: 13px;">

				</td>
				
			</tr>
		</table>			
	</form>
    </div>

<br>
<br>

<br>
<br>
<br>
<div class="footernya"
 H5> Developer By Juliarman & Eko STMIK Dipanegara Makassar 2018 - Sekolah Manajemen Informatika Dan Komputer  </H5>
   
</div>

    </main>
</body>
</html>