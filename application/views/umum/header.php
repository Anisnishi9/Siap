<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/b.png">
</head>

<link href="<?php echo base_url();?>assets/css/w3responsiv.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/sidenav.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/pop.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/svg.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/dashboard.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/table.css" rel="stylesheet" type="text/css" />

<script>
    ///SIDEBAR
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      
    }

    ///POP UP
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    document.body.style.backgroundColor = "rgba(0,0,0,0,4)";
    }

    ///NAVBAR
    window.onscroll = function(){
        scrollFunction()
    }

    function scrollFunction(){
        if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
            document.getElementById("navibar").style.top = "0";
        } else {
            document.getElementById("navibar").style.top = "-200px";
        }
    }
</script>

<style> 
    div.example {}

@media screen and (max-width: 450px) {
    div.example{
        display: none;
    }
}

img { 
    max-width: 50%;
    height: auto;
}
</style>


<title>SIAP AMWIN</title>

<!--SIDENAV OVERLAY-->
<div id="navibar">
    <a href="<?php echo site_url('umum/beranda'); ?>#top">Beranda</a>
    <a href="<?php echo site_url('umum/beranda'); ?>#visi"> Visi Misi</a>
    <a href="<?php echo site_url('umum/beranda'); ?>#profil">Profil</a>
    <a href="<?php echo site_url('umum/beranda'); ?>#kegiatan">Kegiatan</a>
    <a href="<?php echo site_url('umum/beranda'); ?>#kontak">Kontak</a>
    <a onclick="document.getElementById('id01').style.display='block'" style="height: 70px">Log In</p></a>
    <input type="text" name="search" placeholder="Search...">
</div>

<div class="w3-container w3-light-blue" style="width: 100%" >
    <div class="w3-half">
        <div id="mySidenav" class="sidenav" style="overflow-x: hidden;">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a><h3>MENU<h3></a>
        
            <div class="underline"></div>

            <input style="width: 100%; margin" type="text" name="search" placeholder="Search...">

                <a href="<?php echo site_url('umum/beranda'); ?>#top">
                    <svg class="svg-iconh" viewBox="0 0 20 20">
                        <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z">
                        </path>
                    </svg>&nbsp; Beranda</a>

                <a href="<?php echo site_url('umum/beranda'); ?>#visi">
                    <svg class="svg-iconh" viewBox="0 0 20 20">
                            <path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z"></path>
                        </svg>&nbsp; Visi Misi</a>

                <a href="<?php echo site_url('umum/beranda'); ?>#profil">
                    <svg class="svg-iconh" viewBox="0 0 20 20">
                            <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                        </svg>&nbsp; Profil</a>

                <a href="<?php echo site_url('umum/beranda'); ?>#kegiatan">
                     <svg class="svg-iconh" viewBox="0 0 20 20">
                            <path d="M16.557,4.467h-1.64v-0.82c0-0.225-0.183-0.41-0.409-0.41c-0.226,0-0.41,0.185-0.41,0.41v0.82H5.901v-0.82c0-0.225-0.185-0.41-0.41-0.41c-0.226,0-0.41,0.185-0.41,0.41v0.82H3.442c-0.904,0-1.64,0.735-1.64,1.639v9.017c0,0.904,0.736,1.64,1.64,1.64h13.114c0.904,0,1.64-0.735,1.64-1.64V6.106C18.196,5.203,17.461,4.467,16.557,4.467 M17.377,15.123c0,0.453-0.366,0.819-0.82,0.819H3.442c-0.453,0-0.82-0.366-0.82-0.819V8.976h14.754V15.123z M17.377,8.156H2.623V6.106c0-0.453,0.367-0.82,0.82-0.82h1.639v1.23c0,0.225,0.184,0.41,0.41,0.41c0.225,0,0.41-0.185,0.41-0.41v-1.23h8.196v1.23c0,0.225,0.185,0.41,0.41,0.41c0.227,0,0.409-0.185,0.409-0.41v-1.23h1.64c0.454,0,0.82,0.367,0.82,0.82V8.156z"></path>
                        </svg>&nbsp; Kegiatan</a>

                <a href="<?php echo site_url('umum/beranda'); ?>#kontak">
                    <svg class="svg-iconh" viewBox="0 0 20 20">
                            <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                        </svg>&nbsp; Kontak</a>

            &nbsp;
        <div class="underline"></div>

            <a href="http://www.amwiner.org/" target="_blank">
                <svg class="svg-iconi" viewBox="0 0 20 20">
                    <path fill="none" d="M10,2.531c-4.125,0-7.469,3.344-7.469,7.469c0,4.125,3.344,7.469,7.469,7.469c4.125,0,7.469-3.344,7.469-7.469C17.469,5.875,14.125,2.531,10,2.531 M10,3.776c1.48,0,2.84,0.519,3.908,1.384c-1.009,0.811-2.111,1.512-3.298,2.066C9.914,6.072,9.077,5.017,8.14,4.059C8.728,3.876,9.352,3.776,10,3.776 M6.903,4.606c0.962,0.93,1.82,1.969,2.53,3.112C7.707,8.364,5.849,8.734,3.902,8.75C4.264,6.976,5.382,5.481,6.903,4.606 M3.776,10c2.219,0,4.338-0.418,6.29-1.175c0.209,0.404,0.405,0.813,0.579,1.236c-2.147,0.805-3.953,2.294-5.177,4.195C4.421,13.143,3.776,11.648,3.776,10 M10,16.224c-1.337,0-2.572-0.426-3.586-1.143c1.079-1.748,2.709-3.119,4.659-3.853c0.483,1.488,0.755,3.071,0.784,4.714C11.271,16.125,10.646,16.224,10,16.224 M13.075,15.407c-0.072-1.577-0.342-3.103-0.806-4.542c0.673-0.154,1.369-0.243,2.087-0.243c0.621,0,1.22,0.085,1.807,0.203C15.902,12.791,14.728,14.465,13.075,15.407 M14.356,9.378c-0.868,0-1.708,0.116-2.515,0.313c-0.188-0.464-0.396-0.917-0.621-1.359c1.294-0.612,2.492-1.387,3.587-2.284c0.798,0.97,1.302,2.187,1.395,3.517C15.602,9.455,14.99,9.378,14.356,9.378">
                    </path>
                </svg>&nbsp; AMWIN</a>

            <p>Al Muayyad Windan <br> Windan No.12 RT 02 RW 08, Makamhaji, Kartasura, Sukoharjo <br> Telp. (0271) 726288 <br> Email : amwiners@gmail.com</p>
        
        </div>
</div>

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> 
        &nbsp;
        &nbsp;
    <!-- END SIDEBAROVERLY -->

    <a href="<?php echo site_url('umum/beranda');?>"><img src="<?php echo base_url();?>assets/img/logo.png"/></a>

    <!-- CSS POP -->
    <div id="id01" class="modal">
        <form class="modal-content animate" action="<?php echo site_url('login/submit'); ?>" method="post">

            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Login">&times;</span>
            </div>

            <div id="card">
                <div id="card-content">
                    <div id="card-title">LOGIN</div>
                    <div class="underline-title"></div>

                    <h5>&nbsp;</h5>

                    <label  for="user-name" style="padding-top:13px">
                        <b style="text-align: left;"><div id="dt">Username</div></b>
                    </label>

                    <input placeholder="E-mail" class="form-content" type="Email" name="username" required />

                    <div class="form-border"></div><br>

                    <label for="user-password" style="padding-top:13px" >
                        <b style="text-align: left;"><div id="dt">Password</div></b>
                    </label>

                    <input placeholder="Password" class="form-content" type="password" name="password" required />

                    <div class="form-border"></div>

                    <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                    <b style="text-align: center;"><div id="dt">Belum Punya Akun?  <a href="<?php echo site_url('umum/daftar'); ?>" style="text-align: center; color: red">Daftar</a></div></b>
                </div>
            </div>
        </form>
    </div>
</div>

