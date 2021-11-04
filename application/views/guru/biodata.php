<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">
<div class="w3-container">   
  
  <?php
// arahkan form submit ke kontroller 'book/insert' 
  echo form_open_multipart('daftar/bio'); 
  ?>

  <style type="text/css">
    select {text-align-last: center;}
  </style>

  <div class="w3-half" align="center">
  <img src="<?php echo base_url();?>assets/img/k.png" width="40%" height="40%"/>
  </div> 
    
  <div class="w3-half">
    <!--TITLE-->
    <div class="w3-col" align="center">
      <h2 style="padding-left:0">FORMULIR REGISTRASI</h2>
      <?php if (!isset($_SESSION['panggilan'])){ echo '<p style="color: red">Anda Belum Registrasi</p>';}
        else { echo '<p style="color: blue">Anda Sudah Registrasi</p>';}?>
    </div>
    <!--END TITLE-->
    
    <!--CONTENT-->
      <input align="center" id="submit-btna" type="text" class="form-control" name="lengkap" placeholder="Masukkan Nama Lengkap" required value="<?php echo $nama; ?>" disabled>
      <input align="center" id="submit-btna" type="Email" class="form-control" name="uname" placeholder="Masukkan Email" required value="<?php echo $username; ?>" disabled>
      <input align="center" id="submit-btna" type="text" class="form-control" name="status" placeholder="Masukkan Status" required value="<?php echo $status; ?>" disabled>
      <input align="center" id="submit-btna" type="text" class="form-control" name="panggilan" placeholder="Masukkan Nama Panggilan" required value="<?php echo $panggilan; ?>">
      <input align="center" id="submit-btna" type="number" class="form-control" name="nomorhp" placeholder="Masukkan Nomor Telp/WA" required value="<?php echo $nomorhp; ?>">
      
      <input align="center" id="submit-btna" type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap" required value="<?php echo $alamat; ?>">

    <div class="w3-third">
      <input align="center" id="submit-btna" type="number" class="form-control" name="tinggi" placeholder="Masukkan Tinggi Badan" required value="<?php echo $tinggi; ?>">
    </div>

    <div class="w3-third">
      <input align="center" id="submit-btna" type="number" class="form-control" name="berat" placeholder="Masukkan Berat Badan" required value="<?php echo $berat; ?>">
    </div>

    <div class="w3-third">
      <input align="center" id="submit-btna" type="number" class="form-control" name="saudara" placeholder="Masukkan Jumlah Saudara" required value="<?php echo $saudara; ?>">
    </div>

    <div class="w3-third">
      <input align="center" id="submit-btna" type="text" class="form-control" name="gol" placeholder="Masukkan Golongan Darah" required value="<?php echo $gol; ?>">
    </div>

    <div class="w3-third">
      <label for="Jenis Kelamin"></label>
      <select id="submit-btna" class="form-control" name="jk" required>
        <?php if ($jeniskelamin == "Laki-laki"){ echo '<option value="Laki-laki">Laki-laki</option>';}
        else { echo '<option value="Perempuan">Perempuan</option>';}?>
      </select>
    </div> 

    <div class="w3-third">
      <input align="center" id="submit-btna" type="date" class="form-control" name="hari" required>
    </div>

    <div class="w3-third" align="center">&nbsp;</div>
    <div class="w3-third" align="center">&nbsp;</div>
    <div class="w3-third" align="center">
      <form action="#"   >
        <button id="submit-btn" type="textarea" name="judul" style="display: inline">Next</button>
      </form>
    </div>

  </div>
  <!-- END CONTENT -->

</div>

</body>
</html>