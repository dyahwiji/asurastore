<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Asura Store's Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url('assets/css/bootstrap.css" rel="stylesheet')?>" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url('assets//css/font-awesome.css" rel="stylesheet')?>" />
  <!-- CUSTOM STYLES-->
  <link href="<?php echo base_url('assets//css/custom.css" rel="stylesheet')?>" />
  <!-- GOOGLE FONTS-->
  <link href="<?php echo base_url('assets/http://fonts.googleapis.com/css?family=Open+Sans');?>" rel='stylesheet' type='text/css' />
</head>
<body>
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?php echo $this->session->userdata('admin_name') ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?php echo base_url()."AdminController/adminlogout" ?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
    </body>
      <!--header end-->
  <!-- /. NAV TOP  -->
   <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            

        <li>  
           <a href="<?php echo base_url()."AdminController/index" ?>" ><i class="fa fa-desktop "></i>Dashboard </a>
        </li>
         <li>
            <a href="<?php echo base_url()."AdminController/addpage" ?>"><i class="fa fa-table "></i>Input Data </a>
        </li>
        <li>          
         <a href="<?php echo base_url()."AdminController/checkdata" ?>"><i class="fa fa-edit "></i>Check Data </a>
        </li>
    </ul>
</div>

</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>INPUT DATA STEAM</h2>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="input-group">
               <?php echo form_open_multipart('AdminController/do_upload'); ?>
                <input placeholder="kode_steam" name="kode_steam" type="text" required="">
                <br>

                <input placeholder="nama_steam" name="nama_steam" type="text" required="">
                <br>

                <input placeholder="nominal_steam" name="nominal_steam" type="text" required="">
                <br>

                <input placeholder="harga_steam" name="harga_steam"  type="text" required="">
                <br>

                <input  placeholder="kategori_steam " name="kategori_steam"  type="text" required="">
                <br>
                 <input  placeholder="stok_steam " name="stok_steam"  type="text" required="">
                <br>
                
                <input type="file" name="gambar_steam" size="20">
                
                <input type="submit" name="submit" value="Tambah">
            <?php echo form_close(); ?>

           </div>

       </div>
       
      </div>
    </div>
        </div>
</html>