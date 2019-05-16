

<?php

include ("koneksi.php");

if (isset($_POST['daftar']))
{
	$id = $_POST ['id'];
	$gunung = $_POST ['gunung'];
	$tanggal=$_POST['tanggal'];
	$nama = $_POST ['nama'];
	$jenis_kelamin = $_POST ['jenis_kelamin'];
	$no_telp=$_POST['no_telp'];

	$alamat = $_POST ['alamat'];
	
	$sql = "INSERT INTO member (id,gunung,tanggal,nama,jenis_kelamin,no_telp,alamat)
			VALUE ('$id','$gunung','$tanggal','$nama','$jenis_kelamin','$no_telp','$alamat')";
	$query = mysqli_query ($db,$sql);
	
	if ($query)
	{
		header ('Location: index.php?page=list');
		
	}
	else
	{
		header ('Location: index.php?page=list');
	}
}
else
{
	die ("AKSES DILARANG");
}
?>