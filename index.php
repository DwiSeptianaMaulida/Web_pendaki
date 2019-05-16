<!DOCTYPE html>
<html>
<head>
	<title>Programmer awam</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
	
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul"><b>Cari Barengan Mendaki Gunung</b></h1>
		<h3 class="deskripsi">"Jangan takut mendaki sendirian, kamu akan menemui banyak orang disana"</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=about">About me</a></li>
			<li><a href="index.php?page=galeri">My galery</a></li>
			<li><a href="index.php?page=form">Form pendaftaran</a></li>
			<li><a href="index.php?page=list">List Cari Barengan</a></li>
			<!--<li><a href="index.php?page=edit"></a></li>-->
			
		</ul>
	</div>
  
	<div class="badan">
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "Home.php";
				break;
			case 'about':
				include "about.php";
				break;
			case 'galeri':
				include "galery.php";
				break;	
			case 'form':
				include "form_pendaftaran.php";
				break;	
			case 'list':
				include "list_member.php";
				break;	
			
			
			default:
				echo "<center><h3>Maaf Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "Home.php";   
	}
 
	 ?>
	 
	</div>
</div>

	<!--- <div class ="footer"> <marquee> Created By : Dwi Septiana Maulida</marquee>-->
	
</body>
</html>