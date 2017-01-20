<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="HandheldFriendly" content="true" />

    <meta name="keywords" content="jewellery, jewelry, diamond, fajar, earrings, necklace, necklaces, bracelets, rings, pendants, jewelers, engagement rings, gold jewelry, jewelry, fajarbaru, diamond jewelry, fine jewelry, jewelry stores, mens jewelry, men's jewelry, jewelry store, fajar baru, fajar baru cibubur, women's jewelry, fajarbarucibubur, toko perhiasan, emas, berlian, cincin kawin, cincin pertunangan, cincin berlian" />
    <meta name="description" content="" />

    <meta property="og:url" content="http://www.fajarbarujewellery.com/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Fajar Baru" />
    <meta property="og:description" content="Fajar Baru" />
    <meta property="og:image" content="" />


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fajar Baru</title>

    <!-- initial design -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
    <link href="<?php echo base_url() ?>libraries/fonts/font-awesome.min.css" rel="stylesheet"/>

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Source+Sans+Pro" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,400italic,300italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>  

    <!--FROM TEMPLATE-->
    <link rel="stylesheet" href="<?php echo base_url() ?>libraries/fuelux/jquery-ui.min.css">
    <linK href="<?php echo base_url() ?>libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS File  *  v1.3.3 -->
    <linK href="<?php echo base_url() ?>libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS Theme  File  *  v1.3.3 -->
    <link href="<?php echo base_url() ?>libraries/flexslider/flexslider.css" rel="stylesheet" /> <!-- flexslider -->
    <link href="<?php echo base_url() ?>libraries/magnific-popup.css" rel="stylesheet"/> <!-- Light Box -->
    <link href="<?php echo base_url() ?>css/components.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>css/media.css" rel="stylesheet"/>

    
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.waypoints.min.js"></script>
    <!-- <script src="<?php #echo base_url() ?>js/particles.js"></script> -->
    <style>
        .logoFajar {
            -webkit-transform: rotateX(150deg); /* Safari */
            transform: rotateX(150deg);
            margin:auto;
            left: 45%;
            z-index: 999;
        }
  
        .parallax-window {
            min-height: 400px;
            background: transparent;
        }
        
        /*Carousel*/
        .carousel-control.left, .carousel-control.right {
           background-image:none !important;
           filter:none !important;
        }
        .carousel-inner>.item>img, .carousel-inner>.item>a>img {
            display: block;
            height: auto;
            max-width: 100%;
            line-height: 1;
            width: 100%; // Add this
        }
        /*Social Media button on head*/
        #social-media{
            position: absolute;
            right: 7.5%;
            top: 7px;
        }
        .img{
            display: inline;
        }
        .sosmed:hover img{
            -webkit-filter: brightness(3); /* Safari 6.0 - 9.0 */
            filter: brightness(3);
        }
        /*Footer settings*/
        #social-media-footer{
            position: absolute;
            left:10;
            top: 60;
        }
        .foot-head{
            font-variant: small-caps;
            font-size: 15px;
        }

        
        /*Animation element slide left*/
        .animation-element {
          opacity: 0;
          position: relative;
        }
        .animation-element.slide-left {
          opacity: 0;
          -moz-transition: all 500ms linear;
          -webkit-transition: all 500ms linear;
          -o-transition: all 500ms linear;
          transition: all 500ms linear;
          -moz-transform: translate3d(-100px, 0px, 0px);
          -webkit-transform: translate3d(-100px, 0px, 0px);
          -o-transform: translate(-100px, 0px);
          -ms-transform: translate(-100px, 0px);
          transform: translate3d(-100px, 0px, 0px);
        }

        .animation-element.slide-left.in-view {
          opacity: 1;
          -moz-transform: translate3d(0px, 0px, 0px);
          -webkit-transform: translate3d(0px, 0px, 0px);
          -o-transform: translate(0px, 0px);
          -ms-transform: translate(0px, 0px);
          transform: translate3d(0px, 0px, 0px);
        }

        /*Navbar Media*/
        @media (max-width: 970px) {
          .navbar-header {
              float: none;
          }
          .navbar-left,.navbar-right {
              float: none !important;
          }
          .navbar-toggle {
              display: block;
          }
          .navbar-collapse {
              border-top: 1px solid transparent;
              box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
          }
          .navbar-fixed-top {
              top: 0;
              border-width: 0 0 1px;
          }
          .navbar-collapse.collapse {
              display: none!important;
          }
          .navbar-nav {
              float: none!important;
              margin-top: 7.5px;
          }
          .navbar-nav>li {
              float: none;
          }
          .navbar-nav>li>a {
              padding-top: 10px;
              padding-bottom: 10px;
          }
          .collapse.in{
              display:block !important;
          }
          .logoFajar{
            left: 40% !important;
          }
        }
        /*Logo Fajar Baru Media Positioning*/
        @media (max-width: 550px){
          .logoFajar{
            left: 35% !important;
          }   
        }
        @media (max-width: 420px){
          .logoFajar{
            left: 31% !important;
          }   
        }
        @media (max-width: 370px){
          .logoFajar{
            left: 25% !important;
          }   
        }
        .navbar-brand{
            padding-right: 0px !important;
            padding-top: 10px !important;
            margin-right: 0px !important;
        }
        #imgbrand{
            width: 0px;
        }
    </style>
  </head>
  <body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
    <!-- LOADER -->
    <!-- <div id="site-loader" class="load-complete">
      <div class="load-position">
        <div class="logo">
          <img src="<?php echo base_url() ?>assets/FajarBaru.png" width="180" id="logo" height="180" class="img img-responsive"  alt="Logo Fajar baru">
        </div>
        <h6>Please wait, loading...</h6>
        <div class="loading">
          <div class="loading-line"></div>
          <div class="loading-break loading-dot-1"></div>
          <div class="loading-break loading-dot-2"></div>
          <div class="loading-break loading-dot-3"></div>
        </div>
      </div>
    </div> -->
    <!-- Loader /- -->
    <!-- top-header -->
    <div class="container">
        <header class="text-center">
                <!-- <div id="infinitespin" class="rotating"></div> -->
                <div class="animated flipInY logoFajar">
                    <img src="<?php echo base_url() ?>assets/FajarBaru.png" width="180" id="logo" height="180" class="img img-responsive"  alt="Logo Fajar baru">    
                </div>
                <div id="social-media">
                    <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconig.png" height="25px" width="25px" class="img img-responsive"></a>
                    <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconfb.png" height="25px" width="25px" class="img img-responsive"></a>
                </div> 
        </header>
    </div>
        
      <div class="menu-block">
      <!-- container -->
      <div class="container">
        <nav class="navbar navbar-default navbar-static-top">           
          <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>              
            </button>               
          </div>
          <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
              <li id="home"><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url('diamonds')?>" >Diamond</a></li>
                    <li><a href="#">Gold</a></li>
                    <li><a href="#">Fine Gold</a></li>
                    <li><a href="#">Promo & Event</a></li>
                    <li><a href="#">How to Buy</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </nav>
        </div>
    </div><!-- menu-block /- -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/logo-horizontal.png" id="imgbrand" class="img img-responsive"  alt="Logo Fajar baru"></a>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div> -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav" style="padding-bottom: 0px !important;">
                    <li id="home"><a href="<?php echo base_url()?>">Home</a></li>
                    <li><a href="<?php echo base_url('diamonds')?>" >Diamond</a></li>
                    <li><a href="#">Gold</a></li>
                    <li><a href="#">Fine Gold</a></li>
                    <li><a href="#">Promo & Event</a></li>
                    <li><a href="#">How to Buy</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
            
    

<?php echo $body?>
<hr>
<!--Footer container-->
<div class="container">
    <!-- <div class="row">
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php #echo base_url() ?>assets/ring.jpg" data-min-height="600px"></div>
    </div> -->
    <footer style="height: 50px;">
        <div class="row" style="padding-top: 0px!important;">
            <div class="col-md-3">
                <p><div class="texthead foot-head">Find Us</div></p>
                <div id="social-media-footer" class="hidden-xs">
                    <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconig.png" height="35px" width="35px" class="img img-responsive"></a>
                    <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconfb.png" height="35px" width="35px" class="img img-responsive"></a>
                </div>
            </div>
            <div class="col-md-3" style="padding-top: 0px !important;">
                <p><div class="texthead foot-head">Contact Us</div></p>
                <p><a href="tel:+622187713309"><i class="fa fa-phone iconfoot" aria-hidden="true"></i>+6221 – 877 133 09</p></a>
                <p><a href="tel:+6285881694188"><i class="fa fa-whatsapp iconfoot" aria-hidden="true"></i>+62858 – 8169 4188</p></a>
                <p><a href="mailto:fbcibubur@gmail.com"><i class="fa fa-envelope iconfoot" aria-hidden="true"></i>fbcibubur@gmail.com</p></a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-12">
                        <p><div class="texthead foot-head">Store Location</div></p>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7" style="padding-right: 0px;">
                        <a href="http://maps.google.com/maps?daddr=-6.351656996788107,106.88085452785504&amp;ll=">
                            <iframe
                              width="100%"
                              height="120"
                              frameborder="0" style="border:0"
                              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCmspcQ1OKmdHpxFxcpUYQtLsdkMaqdQNI
                                &q=pasar%20jaya%20cibubur" allowfullscreen>
                            </iframe>
                            <!--AIzaSyCmspcQ1OKmdHpxFxcpUYQtLsdkMaqdQNI-->
                                
                        
                        </a>    
                    </div>
                    <div class="col-md-5">
                        Pasar Jaya Cibubur<br>AL01 AKS No. 52-55, AKS No. 7-10<br> 
                        JL. Raya Lap. Tembak – Jakarta Timur<br> 
                        DKI Jakarta 13720 INDONESIA
                    </div>
                </div>
            </div>            
        </div>
        <div class="row"  style="padding-top: 20px;">
            <div class="col-xs-12 text-center">
            
                <p style="font-variant: small-caps;">Copyright &copy; Fajar Baru Gold & Jewellery</p>
            </div>
        </div>
    </footer>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script type="text/javascript" src="<?php echo base_url() ?>js/main.js"></script>
    
  </body>
</html>
<script>

$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
$('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

var waypoint = new Waypoint({
  element: document.getElementById('sliderfluid'),
  handler: function(direction) {
    $('#imgbrand').css('width','150px');
    $('#home').css('margin-left','0px');
  }
});

var waypoint2 = new Waypoint({
    element: document.getElementById('sliderfluid'),
    handler:function(direction) {
        $('#imgbrand').css('width','0px');
        $('#home').css('margin-left','50px');
    },
    offset: 100
});
</script>