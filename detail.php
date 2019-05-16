<?php

    include "koneksi.php";

    if($_POST['id']) {

        $id = $_POST['id'];      

        $sql = mysql_query("SELECT * FROM member WHERE id = $id");

        while ($result = mysql_fetch_array($sql)){

        ?>

        <form action="edit.php" method="post">

            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">

            <div class="form-group">

               <?php $gunung = $gunung['gunung'];?>
             <select name="gunung">
                <option<?php echo ($gunung == 'Semeru')? "selected":""?>>Semeru</option>
                <option<?php echo ($gunung == 'Papandayan')? "selected":""?>>Papandayan</option>
                <option<?php echo ($gunung == 'Sumbing')? "selected":""?>>Sumbing</option>
                <option<?php echo ($gunung == 'Slamet')? "selected":""?>>Slamet</option>
                <option<?php echo ($gunung == 'Merbabu')? "selected":""?>>Merbabu</option>

            </div>
             <div class="form-group">

                <label>Tanggal mendaki</label>

                <input type="text" class="form-control" name="tanggal" value="<?php echo $result['tanggal']; ?>">

            </div>
             <div class="form-group">

                <label>Nama </label>

                <input type="text" class="form-control" name="nama" value="<?php echo $result['nama']; ?>">

            </div>

             <div class="form-group">

              <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jenis_kelamin = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jenis_kelamin == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jenis_kelamin == 'perempuan') ? "checked": "" ?>> Perempuan</label>
            </div>
            <div class="form-group">

                <label>No telfon</label>

                <input type="text" class="form-control" name="no_telp" value="<?php echo $result['no_telp']; ?>">

            </div>
             <div class="form-group">

                <label>email</label>

                <input type="text" class="form-control" name="email" value="<?php echo $result['email']; ?>">

            </div>
             <div class="form-group">

                <label>Alamat</label>

                <input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat']; ?>">

            </div>

              <button class="btn btn-primary" type="submit">Update</button>

        </form>     

        <?php } }

?>
