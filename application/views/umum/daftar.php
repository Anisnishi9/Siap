<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">

<div class="w3-container">   
  
<!---arahkan form submit ke kontroller 'book/insert' --->
<?php echo form_open_multipart('daftar/insert');?>

<style type="text/css">
    select {text-align-last: center;}
</style>

<div class="w3-half" align="center">
    <img src="<?php echo base_url();?>assets/img/k.png" width="40%" height="40%"/>
</div> 
    
<div class="w3-half">
    <!--TITLE-->
    <div class="w3-col" align="center">
        <h2 style="padding-left:0">PENDAFTARAN SANTRI BARU</h2>
    </div>
    <!--END TITLE-->
    
    <!--CONTENT-->
        <input align="center" id="submit-btna" type="text" class="form-control" name="full" placeholder="Masukkan Nama Lengkap" required>
        <input align="center" id="submit-btna" type="Email" class="form-control" name="uname" placeholder="Masukkan Email" required>
        <input align="center" id="submit-btna" type="text" class="form-control" name="pass" placeholder="Masukkan Password" required>

    <div class="w3-third">
        <label for="Jenis Kelamin"></label>
        <select id="submit-btna" class="form-control" name="jk" required>
            <option>Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div> 

    <div class="w3-third">
        <label for="Status"></label>
        <select id="submit-btna" class="form-control" name="status" required>
            <option>Status</option>
            <option value="Alumni">Alumni</option>
            <option value="Santri">Santri</option>
        </select>
    </div> 

    <div class="w3-third" align="center">
        <form action="#"   >
            <button id="submit-btn" type="textarea" name="judul" style="display: inline">Submit</button>
        </form>
    </div>
    
    <div class="w3-third" align="center">&nbsp;</div>

</div>
<!-- END CONTENT -->

</div>

</body>

<!--- FOOTER --->
<footer> 

<div class="w3-container" style="padding-top: 20px; padding-bottom: 0" style="position: fixed; co"> 
    <fieldset style="background-color: rgba(93, 172, 224, 0.8); border-width: 0; border-color: #0086ad; border-top-left-radius: 40px; border-top-right-radius: 40px;">

        <div class="w3-third">
            <h3>Dapatkan Bantuan dan Dukungan</h3>
            <p style="color: white">Untuk mendapatkan petunjuk atau dukungan dari kami, kunjungi situs <a href="member.html" target="_blank">support.anisnishi.com</a> dan submit form anda.</p>
        </div>

        <div class="w3-third">
            <h3>Hubungi Kami</h3><p style="color: white">
                Jl. Ronggowarsito 75<br>
                Surakarta 878654 Jawa Tengah<br>
                (+6231) 53565678</p>
        </div>

        <div class="w3-third">
            <h3>Temukan Kami</h3><p style="color: white">
            <a href="http://facebook.com/anisnur.choiriyah" title="Anis Nishi Hitsugaya" target="_blank">Facebook</a><br>
            <a href="http://twitter.com/Nafia_Nissya" title="Nafia_Nissya" target="_blank">Twitter</a><br>
            <a href="https://www.instagram.com/anisnishi9" title="anisnishi9" target="_blank">Instagram</a><br>
            <a href="http://mail.google.com/" title="anisnishi9@gmail.com" target="_blank">E-mail</a></p>
        </div>

    </fieldset>
</div>

</footer>
<!--- END --->

</html>