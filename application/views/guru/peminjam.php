<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">
<div class="w3-container">   

  <?php
  // arahkan form submit ke kontroller 'book/insert' 
  echo form_open_multipart('arsipadmin/insertpinjam'); 
  ?>


  <!--TITLE-->
  <div class="w3-col" align="center">
    <h2>PEMINJAMAN ARSIP</h2> 
  </div>
  <!--END TITLE-->

  <!--CONTENT-->
    <div class="w3-third" align="left" style="padding-left:300px; padding-top: 30px" >
      <label for="nomor">Nomor Arsip</label>
    </div>

    <div class="w3-twothird" style="padding-bottom:10px">
      <input id="submit-btna" type="text" class="form-control" name="nomor" style="float:left" value="<?php echo $nomor; ?>">
    </div>

    <div class="w3-third" align="left" style="padding-left:300px; padding-top: 30px" >
      <label for="OPD">OPD</h7> 
    </div>

    <div class="w3-twothird" style="padding-bottom:10px">
      <input id="submit-btna" type="text" class="form-control" name="departemen" style="float:left" value="<?php echo $departemen; ?>">
    </div>

    <div class="w3-third" align="left" style="padding-left:300px; padding-top: 30px" >
      <label for="namapeminjam">Nama Peminjam</label>
    </div>

    <div class="w3-twothird" style="padding-bottom:10px">
      <input id="submit-btna" type="text" class="form-control" name="namapeminjam" placeholder="Masukkan Nama Peminjam" style="float:left">
    </div>

    <div class="w3-third" align="left" style="padding-left:300px; padding-top: 30px" >
      <label for="nip">NIP Peminjam</label>
    </div>

    <div class="w3-twothird" style="padding-bottom:10px">
      <input id="submit-btna" type="text" class="form-control" name="nip" placeholder="Masukkan NIP Peminjam" style="float:left">
    </div>

    <div class="w3-third" align="left" style="padding-left:300px; padding-top: 30px" >
      <label for="kontak">Kontak Peminjam</h7> 
    </div>

    <div class="w3-twothird" style="padding-bottom:10px">
      <input id="submit-btna"type="text" class="form-control" name="kontak" placeholder="Masukkan Kontak Peminjam" style="float:left">
    </div>

    <div class="w3-third">&nbsp;</div>
    
    <div class="w3-third">
      <div class="w3-third" align="center">
         <form action="#"   >
            <button id="submit-btna" type="textarea" name="judul" style="display: inline">Simpan Data</button>
          </form>
      </div>
    </div>

    <div class="w3-third">
        <h3>&nbsp;</h3>
    </div>
    <div class="w3-third">
        <h3>&nbsp;</h3>
    </div>
<!--END CONTENT-->

</div>

</body>
</html>