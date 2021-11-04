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
              <th width="100px">Nomor Arsip</th>
              <th width="200px">OPD / Instansi</th>
              <th width="150px">Nama Peminjam</th>
              <th width="100px">NIP Peminjam</th>
              <th width="100px">Kontak</th>
              <th width="100px">Tanggal Pinjam</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            // menampilkan data buku
            foreach ($view_det as $det): 
            ?>
            <tr align="center">
              <td><?php echo $det['nomorarsip']?></td>
              <td><?php echo $det['departemen']?></td>
              <td><?php echo $det['namapeminjam']?></td>
              <td><?php echo $det['nippeminjam']?></td>
              <td><?php echo $det['kontak']?></td>
              <td><?php echo $det['tglpinjam']?></td>
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