$(document).ready(function(){
  
});

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
    $('#navbar').addClass('navbar-fixed-top');
    $('#imgbrand').css('width','150px');
  }
});

var waypoint2 = new Waypoint({
    element: document.getElementById('sliderfluid'),
    handler:function(direction) {
        $('#navbar').removeClass('navbar-fixed-top');
    },
    offset: 100
});
    