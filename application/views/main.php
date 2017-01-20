<style type="text/css">
    /*Thumb Buttons*/
    .hoverimg{
        min-height: 400px;
        background-repeat: no-repeat;
    }
    .hoverimg2{
        min-height: 650px;
    }
    .hoverimg3{
        min-height: 320px;
        background-repeat: no-repeat;
        position: relative;
        
    }
    @media (min-width: 768px) {
        .hoverimg2{
            min-height: 100px !important;
        }
    }
    #imgbutton2{
        background: url(<?php echo base_url() ?>assets/thumb1.jpg);
        background-size: cover;
    }
    #imgbutton3{
        background: url(<?php echo base_url() ?>assets/thumb1.jpg);
        background-size: cover;
    }
    #imgbutton4{
        background: url(<?php echo base_url() ?>assets/thumb2.jpg);
        background-size: cover;
    }
    #imgbutton5{
        background: url(<?php echo base_url() ?>assets/thumb3.jpg);
        background-size: cover;
    }
    #imgbutton6{
        background: url(<?php echo base_url() ?>assets/thumb4.jpg);
        background-size: cover;
    }
    /*Hover Effect*/
    .hovereffect .overlay {
      width: 100%;
      height: 100%;
      position: absolute;
      overflow: hidden;
      top: 0;
      left: 0;
      -webkit-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
    }

    .hovereffect:hover .overlay {
      background-color: rgba(0,0,0,0.4);
    }

    .hovereffect a.info {
      display: inline-block;
      text-decoration: none;
      text-transform: uppercase;
      color: #fff !important;
      border: 1px solid #fff !important;
      margin: 46px 0 0 0;
      background-color: transparent;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transform: scale(1.5);
      -ms-transform: scale(1.5);
      transform: scale(1.5);
      -webkit-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
      font-weight: normal;
      height: 93%;
      width: 90%;
      position: absolute;
      top: -10%;
      left: 5%;
      padding: 70px;
      padding-top: 45%;
      padding-left: 32%;
    }
    .hovereffect a.infovid{
        height: 20%;
        width: 95%;
        left: 2.5%;
        top: -5%;
        padding-top: 12%;
        padding-bottom: 18%;
        padding-left: 42%;
    }

    .hovereffect:hover a.info {
      opacity: 1;
      filter: alpha(opacity=100);
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
      background-color: rgba(0,0,0,0.4);
    }

    /*Video Button*/
    .header-unit {
      height: 400px;
      border: none !important;
      position: relative;
      padding: 20px;
    }
    #video-container {
        position: absolute;
    }
    #video-container {
        top:0%;
        left:0%;
        height:100%;
        width:100%;
        overflow: hidden;
    }
    #video-container>video {
        position:absolute;
        z-index:0;
        top:-170px;
        left: -10px;
    }
    #video-container>video.fillWidth {
        width: 102%;

    }
    .modal-dialog{
        position: relative;
        display: table; //This is important 
        overflow-y: auto;    
        overflow-x: auto;
        width: auto;
        min-width: 300px;
        padding-top: 0px !important;
    }
</style>
 <!--Slider container-->   
<div class="container" id="sliderfluid">
    <div class="row">
        <div class="col-xs-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo base_url() ?>assets/Korea.jpg" alt="...">
                  <!-- <div class="carousel-caption">
                  </div> -->
                </div>
                <div class="item">
                    <img src="<?php echo base_url() ?>assets/Slider(4).jpg" alt="...">
                </div>
                <div class="item">
                  <img src="<?php echo base_url() ?>assets/Dubai.jpg" alt="...">
                  <!-- <div class="carousel-caption">
                    ...
                  </div> -->
                </div>
                <div class="item">
                  <img src="<?php echo base_url() ?>assets/Slider(3).jpg" alt="...">
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>       
        </div>
    </div>
</div>
<!--Content-->
<div class="container">
    <!-- <div class="row animation-element slide-left" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="col-xs-5">
                <div id="imgbutton1" class="hoverimg" style="position: relative;">
                    <div style="position: absolute; color: #000; font-size: 20px; top: 120px; left:10px;text-align: left;">
                        <h1 class="texthead">Fajar Baru</h1>
                        <h3>Definition of new perfection</h3>
                    </div>
                </div>
        </div>
        <div class="col-xs-7" >
            <div id="imgbutton2" class="hoverimg"></div>
        </div>
    </div> -->

    <!-- <div class="row">
        <div class="col-xs-12">
            <div id="imgbutton6" class="hoverimg"></div>
        </div>
    </div>

    <div class="row" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="col-xs-7">
            <div id="imgbutton2" class="hoverimg"></div>
                
        </div>
        <div class="col-xs-5" >
            <div id="imgbutton1" class="hoverimg" style="position: relative;">
                    <div style="position: absolute; color: #000; font-size: 20px; top: 120px; right:10px;text-align: right;">
                        <h1 class="texthead">Fajar Baru</h1>
                        <h3>Jewellery Collection</h3>
                    </div>
                </div>
        </div>
    </div> -->

    <div class="row" style="margin-top: 30px;">
        <div class="col-md-3">
           <div id="imgbutton3" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
           </div>            
        </div>
        <div class="col-md-3">
            <div id="imgbutton4" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div id="imgbutton5" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div id="imgbutton6" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-12">
            <div class="header-unit hovereffect">
                    <div id="video-container">
                        <video src="<?php echo base_url('assets/short.mp4')?>" autoplay loop muted class="fillWidth"></video>
                    </div><!-- end video-container -->
                    <div class="overlay overlayvid">
                        <a class="info infovid" href="#videomodal"  data-toggle="modal">Watch The Video</a>
                    </div>
            </div><!-- end .header-unit -->
        </div>
    </div>
    <div id="videomodal" class="modal fade autoModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <video id="promovideo" width="760" height="460" src="<?php echo base_url('assets/fullpromo.mp4')?>" controls>
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- <script type="text/javascript" src="<?php #echo base_url() ?>js/main.js"></script>
    <script src="<?php #echo base_url() ?>js/app.js"></script>
    <script src="<?php #echo base_url() ?>js/stats.js"></script>
    <script src="<?php #echo base_url() ?>js/logopainter.js"></script>
    <script>
      update = function() {
       
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script> -->
    <script>
        $(document).ready(function(){
            var $animation_elements = $('.animation-element');
            var $window = $(window);
            var url = $("#cartoonVideo").attr('src');
            $("#videomodal").on('hide.bs.modal', function(){
                $("#promovideo").attr('src', '');
            });
            $("#videomodal").on('show.bs.modal', function(){
                $("#promovideo").attr('src', 'url');
            });
        });

    </script>
  </body>
</html>