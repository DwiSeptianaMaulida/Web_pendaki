
 <style>
 * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
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
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
</style>

<div class="halaman">
    
	<center><h3>Formulir Pendaftaran Siswa Baru</h3></center>
    <form  action="proses_pendaftaran.php"  method="POST" >

        <fieldset>

        <p>
            <label for="gunung">Gunung </label>
             <select name="gunung">
                <option>Semeru</option>
                <option>Papandayan</option>
                <option>Sumbing</option>
                <option>Slamet</option>
                <option>Merbabu</option>
            </select>
        </p>
         <p>
            <label for="tanggal">Masukkan tanggal </label>
            <input type="text" name="tanggal" placeholder="Tanggal Pendakian" />
        </p>
        
        <p>
            <label for="nama">Nama Lengkap </label>
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" />
        </p>
        
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="no_telp">Nomor telfon aktif</label>
            <input type="text" name="no_telp" placeholder="Masukkan No telfon" />
        </p>
       
        <p>
            <label for="alamat">Alamat Lengkap </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <div class="button">
            <input type="submit" value="daftar" name="daftar" />
        </p>
            </div>
        </fieldset>

    </form>
  
</div>
    <div class="footer">
        <p>Created By : Dwi Septiana Maulida</p>
    </div>