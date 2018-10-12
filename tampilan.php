<?php 

session_start();
$konek = mysqli_connect("localhost", "root", "", "modul6");
$nim = $_SESSION['nim'];
$sql = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE NIM = '$nim'");

if ($array=mysqli_fetch_array($sql)) {
	# code...
}

 ?>


<table border="1">
	<tr>
		<td> Nama : </td>
		<td> <?php  ?> </td>
	</tr>
</table>