<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">
<div class="w3-container">   

	<!--CONTENT-->

	<!--TITLE-->
<fieldset style="background-color: rgba(240, 248, 254, 0.6); border-width: 5px; border-color: #0086ad;">
  <legend style="text-align: center; color: #0086ad; font-weight: bold; font-size: 20px; text-transform: uppercase;"><?php echo $role; ?> - 
  PONDOK PESANTREN AL MUAYYAD WINDAN</legend>
<div class="w3-col">
    <div class="w3-third">
      	<font style="color: #0086ad; font-weight: bold; padding-left: 35px; font-size: 30px;"><?php echo $nama;?></h2></font><br>
      	<font style="font-weight: bold; padding-left: 35px"><?php echo $jk; ?></font><br><br>

        <font style="font-weight: bold; padding-left: 35px">Status</font><br>
        <font style="color: #0086ad; font-weight: bold; padding-left: 35px; font-size: 20px;"><?php echo $role; ?></font><br><br>

        <font style="font-weight: bold; padding-left: 35px">Alamat</font><br>
        <font style="color: #0086ad; font-weight: bold; padding-left: 35px; font-size: 20px;"><?php echo $alamat; ?></font><br><br>

        <font style="font-weight: bold; padding-left: 35px">Tanggal Lahir</font><br>
        <font style="color: #0086ad; font-weight: bold; padding-left: 35px; font-size: 20px;"><?php echo $hari; ?></font><br><br>

      	<font style="font-weight: bold; padding-left: 35px">Telp</font><br>
      	<font style="color: #0086ad; font-weight: bold; padding-left: 35px; font-size: 20px;"><?php echo $nomorhp; ?><?php echo $nomorhpa; ?></font><br>
    </div>

    <div class="w3-third" align="center"><br><br><br>
        <img src="<?php echo base_url();?>assets/img/b.png" width="50%" height="50%"/>
        
    </div>

    <div class="w3-third" align="right">
        <font style="font-weight: bold; padding-right: 35px">Universitas</font><br>
        <font style="color: #0086ad; font-weight: bold; padding-right: 35px; font-size: 20px;"><?php echo $univ; ?></font><br><br>

        <font style="font-weight: bold; padding-right: 35px">Ayah</font><br>
        <font style="color: #0086ad; font-weight: bold; padding-right: 35px; font-size: 20px;"><?php echo $ayah; ?></font><br><br>

        <font style="font-weight: bold; padding-right: 35px">Ibu</font><br>
        <font style="color: #0086ad; font-weight: bold; padding-right: 35px; font-size: 20px;"><?php echo $ibu; ?></font><br><br>

        <font style="font-weight: bold; padding-right: 35px">Alamat Orang Tua</font><br>
        <font style="color: #0086ad; font-weight: bold; padding-right: 35px; font-size: 20px;"><?php echo $domisili; ?></font><br><br>

        <font style="font-weight: bold; padding-right: 35px">Telp Orang Tua</font><br>
        <font style="color: #0086ad; font-weight: bold; padding-right: 35px; font-size: 20px;"><?php echo $telp; ?></font>
    </div>
</div>
</fieldset>
    <!--END TITLE-->
    <div class="w3-col">
      &nbsp;
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nomor</th>
              <th width="250px">Tanggal</th>
              <th>Guru Ngaji</th>
              <th>Surat / Juz</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            // menampilkan data buku
            foreach ($view as $book_item): 
            ?>
            <tr>
              <td><?php echo $book_item['nomorarsip']?></td>
              <td><?php echo $book_item['departemen']?></td>
              <td><?php echo $book_item['namapeminjam']?></td>
              <td><?php echo $book_item['nippeminjam']?></td>
              <td><?php echo $book_item['kontak']?></td>
              <td><?php echo $book_item['tglpinjam']?></td>
              <td><?php echo $book_item['tglkembali']?></td>
            </tr>
            <?php 
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>

	<!--END CONTENT-->

</div>

</body>
</html>