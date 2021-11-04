<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/logozz.png">
</head>
<body>


<div class="w3-col">
      &nbsp;
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th width="120px">Nomor Surat</th>
              <th width="120px">Klasifikasi</th>
              <th width="120px">Jenis Surat</th>
              <th width="120px">Nama Pengirim</th>
              <th width="120px">Tujuan</th>
              <th width="120px">Lampiran</th>
              <th width="120px">Tanggal Surat</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            // menampilkan data buku
            foreach ($view_det as $det): 
            ?>
            <tr align="center">
              <td><?php echo $det['nomorsurat']?></td>
              <td><?php echo $det['klasifikasi']?></td>
              <td><?php echo $det['jenis']?></td>
              <td><?php echo $det['dari']?></td>
              <td><?php echo $det['kepada']?></td>
              <td><?php echo $det['lampiran']?></td>
              <td><?php echo $det['tglsurat']?></td>
            </tr>
            <?php 
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>