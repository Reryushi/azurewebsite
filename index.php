<!DOCTYPE html>
<html>
<head>
<meta name="Viewport" content="width=device-width, initial-scale=1.0">
	<title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
	<style>
		body{
			background-image: url(bg.jpg);
			}
		table{
			border:6px solid red;
			background-color:pink;
			padding:5px;
			
			}
		</style>
</head>
<body>
	<h2>Login - www.malasngoding.com</h2>
	<br/>
	<!-- cek pesan notifikasi -->
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
	<form method="post" action="cek_login.php">
		<table align="center">
			<tr>
				<th>Username : </th>
				<td><input type="text" name="username" placeholder="Masukan username"></td>
				</tr>
			<tr>
				<th>Password : </th>
				<td><input type="password" name="password" placeholder="Masukan password"></td>
				</tr>
			<tr>
				<th colspan="2" style="text-align:center"> 
					<input type="submit" value="Login">
				</th>
				</tr>
		</table>
	</form>
</body>
</html>