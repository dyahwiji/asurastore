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

    <div id="wrapper">
       <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                </a>
            </div>

            <span class="logout-spn" >
              <a href="#" style="color:#fff;">LOGOUT</a>  

          </span>
      </div>
  </div>
  <!-- /. NAV TOP  -->
  <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li>  
           <a href="<?php echo base_url()."index.php/AdminController/dashboard" ?>" ><i class="fa fa-desktop "></i>Dashboard </a>
        </li>
         <li>
            <a href="<?php echo base_url()."index.php/AddminController/addpage" ?>"><i class="fa fa-table "></i>Input Data </a>
        </li>
        <li>          
         <a href="<?php echo base_url()."index.php/AdminController/checkdata" ?>"><i class="fa fa-edit "></i>Check Data </a>
        </li>

        <li>
    </ul>
</div>

</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>DATA ADMIN</h2>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="input-group">

    <div id="wrapper">
       <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                </a>
            </div>

            <span class="logout-spn" >
              <a href="#" style="color:#fff;">LOGOUT</a>  

          </span>
      </div>
  </div>
        
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

	<form method="POST" action="<?php echo base_url().'AdminController/doUpdateAdmin'?>">
	<tr>
		<td>Nama Admin</td>
		<td><input type="text" name="admin_name" value="<?php echo $admin_name; ?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="pass_admin" value="<?php echo $pass_admin; ?>" /></td>
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