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
        </ul>
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
	<thead>
		<td>kode barang</td>
        <td>nama barang</td>
		<td>nominal barang</td>
		<td>harga steam</td>
		<td>kategori steam</td>
        <td>stok steam</td>
	</thead>
	<tbody>
	<?php foreach ($data as $x) { ?>
		<tr>
            <td> <?= $x['kode_steam'] ?></td>
			<td><?= $x['nama_steam'] ?></td>
			<td><?= $x['nominal_steam'] ?></td>
			<td><?= $x['harga_steam'] ?></td>
			<td><?= $x['kategori_steam'] ?></td>
			<td><?= $x['stok_steam'] ?></td>
            <td align="center">
                <a href="<?php echo base_url()."AdminController/updateData/".$x ['kode_steam'];?>">Update Data</a>
                <br>
                <a href="<?php echo base_url()."AdminController/delete_data/".$x ['kode_steam'];?>">DeleteData</a>
            </td>
		</tr>
    <?php } ?>
    </tbody>
</table><br>
        <br>
        <a href="<?php echo base_url()."AdminController/index" ?>"  class="button-primary"> Back </a>
        
            </div>
        </div>
</html>