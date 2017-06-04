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
            <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard </a>
        </li>


        <li class="active-link">
            <a href="ui.html"><i class="fa fa-table "></i>Input Data Steam </a>
        </li>
        <li>
            <a href="blank.html"><i class="fa fa-edit "></i>Check Data </a>
        </li>


        <li>
            <a href="#"><i class="fa fa-qrcode "></i>My Link One</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
        </li>

        <li>
            <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
        </li>
        <li>
            <a href="#"><i class="fa fa-table "></i>My Link Four</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
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
    <div class="content-top ">
            <div class="container ">
                <div class="spec ">
                    <h3>Top Seller</h3>
                    <div class="ser-t">
                        <b></b>
                        <span><i></i></span>
                        <b class="line"></b>
                    </div>
                </div>

                <div class="tab-head ">

                    <div class=" tab-content tab-content-t ">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class=" con-w3l">

                                <?php foreach ($data as $x) { ?>

                                <div class="col-md-3 m-wthree">
                                    <div class="col-m">					
                                        <img src="<?php echo base_url('assets/images/steam.jpg');?>" class="img-responsive" alt="">
                                        <!--
<div class="offer"><p><span>Sold</span></p></div>
-->

                                        <div class="mid-1">
                                            <div class="women">
                                                <h6> <?= $x['nama_steam'] ?> <?= $x['nominal_steam'] ?> </h6> 						
                                            </div>
                                            <div class="mid-2">
                                                <em class="item_price"><?= $x['harga_steam'] ?></em>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name='nama_steam' data-summary="summary 1" data-price='harga_steam' data-quantity="1" data-image='gambar_steam'>Add to Cart</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
</body>
</html>
