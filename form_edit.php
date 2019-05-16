<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php?page=list');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM member WHERE id=$id";
$query = mysqli_query($db, $sql);
$edit = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $edit['id'] ?>" />

        <p>
            <label for="gunung">Nama Gunung: </label>
            <?php $gunung = $edit['gunung']; ?>
            <select name="gunung">
                <option <?php echo ($edit == 'Semeru') ? "selected": "" ?>>Semeru</option>
                <option <?php echo ($edit == 'Papandayan') ? "selected": "" ?>>Papandayan</option>
                <option <?php echo ($edit == 'Sumbing') ? "selected": "" ?>>Sumbing</option>
                <option <?php echo ($edit == 'Slamet') ? "selected": "" ?>>Slamet</option>
                <option <?php echo ($edit == 'Merbabu') ? "selected": "" ?>>Merbabu</option>
            </select>
        </p>
        <p>
            <label for="tanggal">Masukkan tanggal: </label>
            <input type="text" name="tanggal" placeholder="nama sekolah" value="<?php echo $edit['tanggal'] ?>" >
        </p>
        <p>
            <label for="nama">Nama lengkap: </label>
            <input type="text" name="nama" placeholder="nama sekolah" value="<?php echo $edit['nama'] ?>" >
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jenis_kelamin = $edit['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jenis_kelamin == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jenis_kelamin == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
         <p>
            <label for="no_telp">Nomor telfon : </label>
            <input type="text" name="no_telp" placeholder="nomor telfon" value="<?php echo $edit['no_telp'] ?>" >
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $edit['alamat'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" >
        </p>

        </fieldset>


    </form>

    </body>
</html>
