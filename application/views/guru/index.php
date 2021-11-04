<body background="<?php echo base_url();?>assets/img/a.jpg" style="background-size: cover; background-attachment:fixed;">
<div class="w3-container">   

    <!-- TITLE -->
    <form method="post" action="<?php echo site_url('admin/search'); // arahkan form submit ke kontroller 'book/findbooks ?>">
    <div class="w3-col" align="center">
        <h2 style="padding-left:0">PENCARIAN</h2>
        <p style="padding-left:0; margin:0px" >Situs Pencarian Data Santri </p>
    </div>  
    <!-- END TITLE -->

    <!-- SEARCHBAR -->       
    <div class="w3-third">&nbsp;</div>

    <div class="w3-third" align="center">
        <input id="submit-btna" type="textarea" name="key" placeholder="Masukkan Kata Kunci Pencarian" />
    </div>

    <div class="w3-third">
        <p>&nbsp;</p>
    </div>
    </form>
    <!-- END SEARCHBAR -->
    
</div>

</body>
</html>