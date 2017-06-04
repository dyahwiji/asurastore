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
       <header>     
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                        <a href="#">
                            <span class="username"><?php echo $this->session->userdata('admin_name') ?></span>
                       
                        </a>
                            <a href="<?php echo base_url()."AdminController/adminlogout" ?>">    Log Out</a>
             
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
    </header>
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
            <h2>DATA STEAM</h2>
        </div>
    </div>
    <!-- /. ROW  -->
<style type="text/css">

table, th, td {
	border: 2px solid blue;
    border-collapse: collapse;
    background-color: azure;
    
}
th, td {
    padding: 10px;
}
</style>
        
<table style="width:100%">

	<form method="POST" action="<?php echo base_url().'index.php/AdminController/doUpdate'?>">
	<tr>
		<td>Kode Steam</td>
		<td><input type="text" name="kode_steam" value="<?php echo $kode_steam; ?>" readonly /></td>
	</tr>
	<tr>
		<td>Nama Steam</td>
		<td><input type="text" name="nama_steam" value="<?php echo $nama_steam; ?>" /></td>
	</tr>
	<tr>
		<td>Nominal Steam</td>
		<td><input type="text" name="nominal_steam" value="<?php echo $nominal_steam; ?>" /></td>
	</tr>
	<tr>
		<td>Harga Steam</td>
		<td><input type="text" name="harga_steam" value="<?php echo $harga_steam; ?>" /></td>
	</tr>
	<tr>
		<td>Kategori Steam</td>
		<td><input type="text" name="kategori_steam" value="<?php echo $kategori_steam; ?>" /></td>
	</tr>
	<tr>
		<td>Stok Steam</td>
		<td><input type="text" name="stok_steam" value="<?php echo $stok_steam; ?>" /></td>
  </tr>
  <tr>  
     <td>Gambar Steam</td>
    <td><input type="file" name="gambar_steam"/></td>
  </tr>                                                                
		<td></td>
		<td><input type="submit" name="Simpan" value="simpan" /> </td>
    </form>
</table>
        
            </div>
        </div>
      </div>
    </div>
        </div>
        </div>
    </div>
    </body>
</html>