$(function() {
    var offset = $('#globalNavi').offset();

    $(window).scroll(function () {
        if ($(window).scrollTop() > offset.top) {
            $('#globalNavi').addClass('fixed');
            $('#border1').addClass('fix');
            $('#border2').addClass('fix');
            $('#border3').addClass('fix');
            $('.brog-hidden').addClass('fit');
            $('.backbox').addClass('fi');
        } else {
            $('#globalNavi').removeClass('fixed');
            $('#border1').removeClass('fix');
            $('#border2').removeClass('fix');
            $('#border3').removeClass('fix');
            $('.brog-hidden').removeClass('fit');
            $('.backbox').removeClass('fi');
        }
    });
});


$(document).ready(function() {
  setAutoRndColor();
});

function setAutoRndColor(){
  var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
  $('.backword').animate({
    color: hue
  }, 5000);
  setAutoRndColor();
}
