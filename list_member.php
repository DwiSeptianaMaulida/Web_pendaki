<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar member Cari Barengan Mendaki</title>
</head>
<style type="text/css">
  table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
a:link, a:visited {
  background-color: #607D8B;
  color: white;
  padding: 6px 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 4px;
}

a:hover, a:active {
  background-color: red;
}
   
.footer{
    background-color: #607D8B;
    border: 1px solid #f0f0f0;
    border-radius: 8px; 
    margin-bottom: 10px;
    text-transform:uppercase;
    font-family: sans-serif;
    color:white;
    font-size:10px;
    text-align: center;
}   

</style>

<body>
   
        <h3><center>DAFTAR MEMBER CARI BARENGAN</center> </h3>
   

    <nav>
        <a href="index.php?page=form">Tambah Data Member</a> |
        <a href="index.php">HOME</a>
    </nav>

    <br>

    <table border="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Gunung</th>
            <th>Tanggal </th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No telfon</th>
        
             <th>alamat</th>
             <th>Proses</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM member";
        $query = mysqli_query($db, $sql);


        while($edit = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$edit['id']."</td>";
            echo "<td>".$edit['gunung']."</td>";
            echo "<td>".$edit['tanggal']."</td>";
            echo "<td>".$edit['nama']."</td>";
            echo "<td>".$edit['jenis_kelamin']."</td>";
            echo "<td>".$edit['no_telp']."</td>";
            echo "<td>".$edit['alamat']."</td>";
            

            echo "<td>";
         
            echo "<a href='form_edit.php?id=".$edit['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$edit['id']."'>Hapus</a>";
            echo "</td>";
           
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total pendaki : <?php echo mysqli_num_rows($query) ?></p>

    </p>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
 
    <div class="footer">
        <p>Created By : Dwi Septiana Maulida</p>
    </div>
    </body>
</html>