<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">
<div class="w3-container">   
  
  <?php
// arahkan form submit ke kontroller 'book/insert' 
  echo form_open_multipart('daftar/pekerjaan'); 
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
      <h2 style="padding-left:0">PEKERJAAN</h2>
    </div>
    <!--END TITLE-->
    
    <!--CONTENT-->
      <input align="center" id="submit-btna" type="text" class="form-control" name="jenis" placeholder="Masukkan Jenis Pekerjaan" required value="<?php echo $jenis; ?>">
      <input align="center" id="submit-btna" type="text" class="form-control" name="instansi" placeholder="Masukkan Nama Instansi" required value="<?php echo $instansi; ?>">
      <input align="center" id="submit-btna" type="text" class="form-control" name="alamatinstansi" placeholder="Masukkan Alamat Instansi" required value="<?php echo $alamatinstansi; ?>">
      <input align="center" id="submit-btna" type="number" class="form-control" name="kontak" placeholder="Masukkan Kontak Instansi" required value="<?php echo $kontak; ?>">


    <div class="w3-third" align="center">&nbsp;</div>
    <div class="w3-third" align="center">&nbsp;</div>
    <div class="w3-third" align="center">
      <form action="#"   >
        <button id="submit-btn" type="textarea" name="judul" style="display: inline">Next</button>
      </form>
    </div>
    
    <div class="w3-third" align="center">&nbsp;</div>

  </div>
  <!-- END CONTENT -->

</div>

</body>
</html>