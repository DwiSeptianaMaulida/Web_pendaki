<?php
include ("koneksi.php");

if (isset($_GET['id']))
{
	
	$id = $_GET ['id'];
	
	$sql = "DELETE FROM member WHERE id=$id";
	$query = mysqli_query($db,$sql);
	
	if($query)
	{
		header ('Location: index.php?page=list');
		
	}
	else
	{
		die ("GAGAL MENGHAPUS");
	}
}
else{
	die ("akses dilarang");
}



?>