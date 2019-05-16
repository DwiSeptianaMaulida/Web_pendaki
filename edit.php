<?php

    include "koneksi.php";

    $id = $_POST ['id'];
    $gunung = $_POST ['gunung'];
    $tanggal = $_POST ['tanggal'];
    $nama = $_POST ['nama'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $no_telp=$_POST['no_telp'];

    $alamat = $_POST ['alamat'];


    $sql = mysql_query( "UPDATE member SET gunung='$gunung', tanggal='$tanggal',nama='$nama', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', alamat='$alamat' WHERE id=$id");

    if ($sql) {

        //jika  berhasil tampil ini

        echo "Data Berhasil Diubah"."</br>";

        echo "<a href='index.php?page=list'></a>";

    } else {

        // jika gagal tampil ini

        echo "Gagal Melakukan Perubahan: ";

    }

?>