<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">
<div class="w3-container">   
  
  <?php
// arahkan form submit ke kontroller 'book/insert' 
  echo form_open_multipart('daftar/keluarga'); 
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
      <h2 style="padding-left:0">KELUARGA</h2>
    </div>
    <!--END TITLE-->
    
    <!--CONTENT-->
      <input align="center" id="submit-btna" type="text" class="form-control" name="ayah" placeholder="Masukkan Nama Ayah" required value="<?php echo $ayah; ?>">
      <input align="center" id="submit-btna" type="text" class="form-control" name="ibu" placeholder="Masukkan Nama Ibu" required value="<?php echo $ibu; ?>" >
      <input align="center" id="submit-btna" type="text" class="form-control" name="kerjaayah" placeholder="Masukkan Pekerjaan Ayah" required value="<?php echo $kerjaayah; ?>" >
      <input align="center" id="submit-btna" type="text" class="form-control" name="kerjaibu" placeholder="Masukkan Pekerjaan Ibu" required value="<?php echo $kerjaibu; ?>">
      <input align="center" id="submit-btna" type="text" class="form-control" name="domisili" placeholder="Masukkan Alamat Asal" required value="<?php echo $domisili; ?>">

    <div class="w3-third">
    <input align="center" id="submit-btna" type="number" class="form-control" name="gajiayah" placeholder="Masukkan Gaji Ayah" required value="<?php echo $gajiayah; ?>">
    </div>

    <div class="w3-third">
    <input align="center" id="submit-btna" type="number" class="form-control" name="gajiibu" placeholder="Masukkan Gaji Ibu" required value="<?php echo $gajiibu; ?>">
    </div>

    <div class="w3-third">
      <input align="center" id="submit-btna" type="number" class="form-control" name="telp" placeholder="Masukkan Telp Ortu" required value="<?php echo $telp; ?>">
    </div>

    <div class="w3-third">&nbsp;</div>
    <div class="w3-third">&nbsp;</div>
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