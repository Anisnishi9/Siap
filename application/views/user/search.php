<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">
<div class="w3-container">   

  <!--CONTENT-->
  <?php
  
  echo form_open_multipart('admin/cari'); 
  ?>

    <!--TITLE-->
    <div class="w3-col" align="center">
      <h2 style="padding-left:0">SEARCH</h2>
    </div>
    <!--END TITLE-->

    <div class="w3-third" align="center">&nbsp;</div>

    <div class="w3-third" align="center">
      <div class="col-sm-10" align="center">
        <input id="submit-btna" type="textarea" class="form-control" name="law" placeholder="Pencarian">
      </div>
    </div>

    <div class="w3-third" align="center">&nbsp;</div>
    <div class="w3-third" align="center">&nbsp;</div>
    <div class="w3-third" align="center">&nbsp;</div>
    <div class="w3-third" align="center">&nbsp;</div>

    <div class="w3-third" align="center">
    </div>

    <div class="w3-third">&nbsp;</div>

  <!--END CONTENT-->
  
  <!-- DAFTAR ADMIN -->

    <!--TITLE-->
    <div class="w3-col" align="center">
      <h2 style="padding-left:0">HASIL PENCARIAN</h2>
    </div>
    <!--END TITLE-->
    <div class="w3-col">
      &nbsp;
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nomor Arsip</th>
              <th width="250px">Organisasi Perangkat Daerah</th>
              <th>Nama Peminjam</th>
              <th>NIP Peminjam</th>
              <th>Kontak</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
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

<!-- END DAFTAR ADMIN -->

</div>

</body>
</html>