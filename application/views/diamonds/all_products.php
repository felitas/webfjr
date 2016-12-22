<style type="text/css">
    /*Thumb Buttons*/
    .hoverimg{
        min-height: 400px;
        background-repeat: no-repeat;
    }
    .hoverimg2{
        min-height: 400px;
    }
    .hoverimg3{
        min-height: 268px;
        background-repeat: no-repeat;
        position: relative;
        
    }
    @media (min-width: 768px) {
        .hoverimg2{
            min-height: 100px !important;
        }
    }
    #imgbutton1{
        background: url(<?php echo base_url() ?>assets/diamonds/1.jpg);
        background-size: cover;
    }
    #imgbutton2{
        background: url(<?php echo base_url() ?>assets/diamonds/2.jpg);
        background-size: cover;
    }
    #imgbutton3{
        background: url(<?php echo base_url() ?>assets/diamonds/3.jpg);
        background-size: cover;
    }
    #imgbutton4{
        background: url(<?php echo base_url() ?>assets/diamonds/4.jpg);
        background-size: cover;
    }
    #imgbutton5{
        background: url(<?php echo base_url() ?>assets/diamonds/5.jpg);
        background-size: cover;
    }
    #imgbutton6{
        background: url(<?php echo base_url() ?>assets/diamonds/6.jpg);
        background-size: cover;
    }
    #imgbutton7{
        background: url(<?php echo base_url() ?>assets/diamonds/7.jpg);
        background-size: cover;
    }
    #imgbutton8{
        background: url(<?php echo base_url() ?>assets/diamonds/8.jpg);
        background-size: cover;
    }
    #imgbutton9{
        background: url(<?php echo base_url() ?>assets/diamonds/9.jpg);
        background-size: cover;
    }
    #imgbutton10{
        background: url(<?php echo base_url() ?>assets/diamonds/10.jpg);
        background-size: cover;
    }
    #imgbutton11{
        background: url(<?php echo base_url() ?>assets/diamonds/14.jpg);
        background-size: cover;
    }
    #imgbutton12{
        background: url(<?php echo base_url() ?>assets/diamonds/15.jpg);
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
      height: 90%;
      width: 90%;
      position: absolute;
      top: -12.5%;
      left: 5.8%;
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

    
    }
</style>
 <!--Slider container-->   
<div class="container" id="sliderfluid">
    <div class="row">
        <div class="col-xs-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo base_url() ?>assets/diahead.jpg" alt="...">
                </div>
              </div>
            </div>       
        </div>
    </div>
</div>
<!--Content-->
<div class="container">
    <div class="row" style="margin-top: 30px;">
        <div class="col-md-3" >
           <div id="imgbutton1" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
           </div>            
        </div>
        <div class="col-md-3">
            <div id="imgbutton2" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
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
    </div>
    <div class="row" style="margin-top: 10px;">
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
        <div class="col-md-3">
            <div id="imgbutton7" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div id="imgbutton8" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
    </div>
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-3">
           <div id="imgbutton9" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
           </div>            
        </div>
        <div class="col-md-3">
            <div id="imgbutton10" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div id="imgbutton11" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div id="imgbutton12" class="hoverimg3 hovereffect">
                    <div class="overlay">
                       <a class="info" href="#">Check Now</a>
                    </div>
            </div>    
        </div>
    </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script type="text/javascript" src="<?php echo base_url() ?>js/main.js"></script>
    <script src="<?php echo base_url() ?>js/app.js"></script>
    <script src="<?php echo base_url() ?>js/stats.js"></script>
    <script src="<?php echo base_url() ?>js/logopainter.js"></script>
    <script>
      update = function() {
       
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script>
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
        

        function check_if_in_view() {
          var window_height = $window.height();
          var window_top_position = $window.scrollTop();
          var window_bottom_position = (window_top_position + window_height);
         
          $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);
         
            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
              $element.addClass('in-view');
            } else {
              $element.removeClass('in-view');
            }
          });
        }

        $window.on('scroll resize', check_if_in_view);
        $window.trigger('scroll');

    </script>
  </body>
</html>