<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">
<div class="w3-container">   
  
  <?php
// arahkan form submit ke kontroller 'book/insert' 
  echo form_open_multipart('daftar/pendidikan'); 
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
      <h2 style="padding-left:0">PENDIDIKAN</h2>
    </div>
    <!--END TITLE-->
    
    <!--CONTENT-->
      <input align="center" id="submit-btna" type="text" class="form-control" name="univ" placeholder="Masukkan Universitas" required value="<?php echo $univ; ?>">
      <input align="center" id="submit-btna" type="text" class="form-control" name="fakultas" placeholder="Masukkan Fakultas" required value="<?php echo $fakultas; ?>">
      <input align="center" id="submit-btna" type="text" class="form-control" name="prodi" placeholder="Masukkan Program Studi" required value="<?php echo $prodi; ?>">
      <input align="center" id="submit-btna" type="number" class="form-control" name="semester" placeholder="Masukkan Semester" required value="<?php echo $semester; ?>">
      <input align="center" id="submit-btna" type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Universitas" required value="<?php echo $alamat; ?>">
      <input align="center" id="submit-btna" type="text" class="form-control" name="pesantren" placeholder="Masukkan Pesantren" required value="<?php echo $pesantren; ?>">


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