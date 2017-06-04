<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Asura Store</title>

        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta property="og:title" content="Vide" />
        <meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                       Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="<?php echo base_url('assets/css/bootstrap.css');?>"  rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="<?php echo base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />
        <!-- js -->
        <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
        <!-- //js -->
        <!-- start-smoth-scrolling -->
        <script src="<?php echo base_url('assets/js/move-top.js');?>" type="text/javascript"> </script>
        <script src="<?php echo base_url('assets/js/easing.js');?>" type="text/javascript" ></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet"> 
        <link href="<?php echo base_url('assets/css/fonts.googleapis.com/css?family=Montserrat:400,700');?>" rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('assets/css/fonts.googleapis.com/css?family=Noto+Sans:400,700');?>" rel='stylesheet' type='text/css'>

        <!--- start-rate---->
        <script src="<?php echo base_url('assets/js/jstarbox.js');?>"></script>
        <link href="<?php echo base_url('assets/css/jstarbox.css');?>" rel="stylesheet" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
                jQuery('.starbox').each(function() {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                        if(starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' '+val);
                            return val;
                        } 
                    })
                });
            });
        </script>
        <!---//End-rate---->

    </head>
    <body>
        <div class="header">

            <div class="container">

                <div class="logo">
                    <h1 ><a href="<?php echo base_url()."UserController/topseller" ?>">Asura Store<span>Gudangnya Voucher Steam Wallet </span></a></h1>
                </div>
                <div class="head-t">
                    <ul class="card">
                        <li><a href="<?php echo base_url()."UserController/maulogin" ?>"> <i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                        <li><a href="<?php echo base_url()."UserController/mauregis" ?>"> <i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>

                    </ul>	
                </div>

                <div class="header-ri">
                    <ul class="social-top">
                        <li><a href="https://www.instagram.com/asurastore/" class="icon instagram"><i class="fa fa-instagram" aria-hidden="true"> asurastore</i><span></span></a></li>
                        <li><a href="<?php echo base_url('assets/#');?>" class="icon envelope"><i class="fa fa-envelope-o" aria-hidden="true">asurastore2@gmail.com </i><span></span></a></li>
                        <li><a href="<?php echo base_url('assets/#');?>" class="icon phone"><i class="fa fa-phone" aria-hidden="true">  +6285735934630</i><span></span></a></li>
                    </ul>
                    <br>
                    <br>
                    <br>	
                </div>
            </div>
            <div class="nav-top">
                <nav class="navbar navbar-default">

                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav ">
                            <li class=" active"></li>
                            <li><a href="<?php echo base_url()."UserController/topseller" ?>" class="hyper "><span>Home</span></a></li>	
                            <li><a href="<?php echo base_url()."UserController/steamIDR" ?>" class="hyper"> <span>Steam IDR</span></a></li>
                            <li><a href="<?php echo base_url()."UserController/steamsea" ?>"  class="hyper"><span>Steam SEA</span></a></li>
                            <li><a href="<?php echo base_url()."UserController/googleplay
                            " ?>" class="hyper"> <span>Google Play Gift Code</span></a></li>
                            <li><a href="<?php echo base_url()."UserController/itunes" ?>"  class="hyper"><span>iTunes Gift Code</span></a></li>
                        </ul>
                    </div>
                </nav>
                <div class="cart" >

                    <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>

    <!--content-->

    <div class="content-top ">
    	<div class="container ">
    		<div class="spec ">
    			<h3>Steam Wallet SEA </h3>
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
                                                <h6> <?= $x['nama_steam'] ?> </h6> 						
                                            </div>
                                            <div class="mid-2">
                                                <em class="item_price"><?= $x['harga_steam'] ?></em>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                            <?=anchor('UserController/maulogin', 'Order' , [
                                            'class' => 'btn btn-primary',
                                            'role'  => 'button'
                                        ])?>
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

        <!--footer-->
        <div class="footer">
            <div class="clearfix"></div>
            <div class="footer-bottom">
                <h2 ><a href="index.html">Asura Store<span>Gudangnya Voucher Steam Wallet </span></a></h2>
                <!--		
<p class="fo-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
-->		

                <div class="copy-right">
                    <p> &copy; 2017 Asura Store. All Rights Reserved
                </div>
            </div>
        </div>
        <!-- //footer-->

        <!-- smooth scrolling -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
			*/								
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //smooth scrolling -->
        <!-- for bootstrap working -->
        <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
        <!-- //for bootstrap working -->
        <script  src="<?php echo base_url('assets/js/jquery.mycart.js');?>" type='text/javascript'></script>
        <script type="text/javascript">
            $(function () {

                var goToCartIcon = function($addTocartBtn){
                    var $cartIcon = $(".my-cart-icon");
                    var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
                    $addTocartBtn.prepend($image);
                    var position = $cartIcon.position();
                    $image.animate({
                        top: position.top,
                        left: position.left
                    }, 500 , "linear", function() {
                        $image.remove();
                    });
                }

                $('.my-cart-btn').myCart({
                    classCartIcon: 'my-cart-icon',
                    classCartBadge: 'my-cart-badge',
                    affixCartIcon: true,
                    checkoutCart: function(products) {
                        $.each(products, function(){
                            console.log(this);
                        });
                    },
                    clickOnAddToCart: function($addTocart){
                        goToCartIcon($addTocart);
                    },
                    getDiscountPrice: function(products) {
                        var total = 0;
                        $.each(products, function(){
                            total += this.quantity * this.price;
                        });
                        return total * 1;
                    }
                });

            });
        </script>
        </div>
    </body>
</html>