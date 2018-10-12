<form method="post">
	Registrasi Akun<br><br>
	Nama : <input type="text" name="nama"><br>
	NIM  : <input type="text" name="nim"><br>

	<br><br>

	Kelas : <br>
	<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01<br>
	<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02<br>
	<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03<br>
	<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04

	<br><br>

	Jenis Kelamin : <br>
	<input type="radio" name="jk" value="laki-laki">Laki-laki<br>
	<input type="radio" name="jk" value="Perempuan">Perempuan

	<br><br>

	HOBI : <br>
	<input type="checkbox" name="hobi[]" value="Basket">Basket<br>
	<input type="checkbox" name="hobi[]" value="Sepak Bola">Sepak Bola<br>
	<input type="checkbox" name="hobi[]" value="Bowling">Bowling<br>
	<input type="checkbox" name="hobi[]" value="Futsal">Futsal<br>
	<input type="checkbox" name="hobi[]" value="Taekwondo">Taekwondo<br>
	<input type="checkbox" name="hobi[]" value="Nonton">Nonton<br>
	<input type="checkbox" name="hobi[]" value="Golf">Golf

	<br><br>

	Fakultas : <br>
	<select name="fakultas">
		<option></option>
		<option value="FIT">FIT</option><br>
		<option value="FIK">FIK</option><br>
		<option value="FEB">FEB</option><br>
		<option value="FKB">FKB</option>
	</select>

	<br><br>

	Alamat : <br>
	<textarea name="alamat"></textarea><br>

	<input type="submit" name="submit" value="Regist">
</form>

<?php
$connect = mysqli_connect("localhost", "root", "", "modul6");

if (isset($_POST['submit'])) {
	
	session_start();
	
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jk'];
	$hobi = $_POST['hobi'];
	$fakultas = $_POST['fakultas'];
	$alamat = $_POST['alamat'];


	$db = "INSERT INTO mahasiswa (NIM,Nama,Kelas,Jenis_Kelamin,Hobi,Fakultas,Alamat) VALUES ('$nim', '$nama', '$kelas', '$jk', '$hobi', '$fakultas', '$alamat')";
	$query = mysqli_query($connect, $db);

	if (strlen($nama)>=30 || strlen($nama)==0) {
		echo "Nama Maksimal 30 Karakter<br>";
	}else{
		echo "";
	}

	if (strlen($nim)!=10 || strlen($nim)==0) {
		echo "NIM Wajib 10 Karakter";
	}else{
		echo "";
	}

	if (strlen($kelas)==0) {
		echo "Anda kelas berapa??";
	}else{
		echo "";
	}

	if (strlen($jk)==0) {
		echo "Pilih Jenis Kelamin Anda";
	}else{
		echo "";
	}


	if (strlen($fakultas)==0) {
		echo "Anda kelas berapa??";
	}else{
		echo "";
	}

	if (str_word_count($alamat)==0) {
		echo "input alamat rumah anda";
	}else {
		echo "";
	}


	if ($query) {
		echo "Data Berhasil Disimpan";
		header("location:login.php");
	}else{
		echo "Data Gagal Disimpan";
	}

	
	$_SESSION['nim'] = $nim;
	$_SESSION['nama'] = $nama;
}

 ?>