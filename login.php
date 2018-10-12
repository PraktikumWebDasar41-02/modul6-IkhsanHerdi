<form method="post">
	NIM : <input type="text" name="nim"><br>
	Nama : <input type="text" name="nama"><br>
	<input type="submit" name="kirim" value="login">
</form>
<a href="regis.php">Buat Akun</a>

<?php 

if (isset($_POST['kirim'])) {
	session_start();
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$name = $_SESSION['nama'];
	$NIM = $_SESSION['nim']

	if ($nama==$name || $nim ==$NIM) {
		header("Location:tampilan.php");
	}else{
		echo "Login Failed";
	}
}

 ?>