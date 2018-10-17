<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
</head>
<body style="font-family: mimich">
	<center>
		<h2><p>INPUT DATA MAHASISWA</p></h2>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" required=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki" required="">Laki-laki<br></td>
				<td><input type="radio" name="jk" value="Perempuan">Perempuan<br></td>
				<td><input type="radio" name="jk" value="lain">Lainnya<br></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>
				<select name="studi" required="">
    				<option value="Manajemen Informatika">Manajemen Informatika</option>
    				<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
    				<option value="Sistem Multimedia">Sistem Multimedia</option>
    				<option value="Teknik Informatika">Teknik Informatika</option>
    				<option value="Teknik Komputer">Teknik Komputer</option>
    				<option value="Perhotelan">Perhotelan</option>
    				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
    				<option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
    				<option value="Seni Rupa">Seni Rupa</option>
    				<option value="Kriya Tekstil dan Mode">Kriya Tekstil dan Mode</option>
    				<option value="Desain Interior">Desain Interior</option>
    				<option value="Desain Produk">Desain Produk</option>
    				<option value="Desan Komunikasi Visual">Desain Komunikasi Visual</option>
    				<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
    				<option value="Administrasi Bisnis">Administrasi Bisnis</option>
				</select></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>
				<select name="fakultas" required="">
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FKB">Fakultas Komunikai dan Bisnis</option>
    				<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    			</select>
    			</td>
    		</tr>
    		<tr>
				<td>Asal</td>
				<td><input type="text" name="asal" required=""></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td><input type="textarea" name="motohidup" required="" style=" width: 210px;height: 75px;border-radius: 10px"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Send" style="color: black; width: 100px;height: 40px;border-radius: 10px"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>

<?php
include "dbmhs.php";
if (isset($_POST['submit'])) {
			$nama=$_POST['nama'];
			$nim=$_POST['nim'];
			$jenisk=$_POST['jk'];
			$progstud=$_POST['studi'];
			$fakultas=$_POST['fakultas'];
			$asal=$_POST['asal'];
			$motohidup=$_POST['motohidup'];
	
	$sql="INSERT INTO mahasiswa  VALUES ('$nama','$nim','$jenisk','$progstud','$fakultas','$asal','$motohidup')";
			if(mysqli_query($con,$sql)){
				header("");
			}else{
				echo "Error";
				echo "<a href='detailmhs.php'>Back</a>";
			}
}
?>