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
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url()."AdminController/checkdata" ?>"> <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Check Data</h4>
                      </a>
                      </div>
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" > <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>Mail Box</h4>
                      </a>
                      </div>
                 
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" > <i class="fa fa-users fa-5x"></i>
                      <h4>See Users</h4>
                      </a>
                      </div>     
                  </div>
                    
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo base_url()."AdminController/dataadmin" ?>"><i class="fa fa-key fa-5x"></i>
                      <h4>Data Admin </h4>
                      </a>
                      </div>
                  </div>
                  </div>
                
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" ><i class="fa fa-bell-o fa-5x"></i>
                      <h4>Notifications </h4>
                      </a>
                      </div>
                     
                     
                  </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" ><i class="fa fa-user fa-5x"></i>
                      <h4>Register User</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
              </div>   
        </div> 
    </body>
</html>