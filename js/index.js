$(document).ready(function() {
    //$('#inicio').load("alerta.html")
  /*$.get("alerta.html", function (data) {
      $("body").append(data);
  });*/
  console.log("pantalla " + $(window).width())

  
});



$(document).on('scroll', function () {
 // console.log($(window).width())
  if ($(document).scrollTop() >= 450 && screen.width <= 720) {
    /*$('.navbar-img').css('width', '8.5rem');
    $('.navbar-img').css('opacity', '0.1');
    $('.navbar-img').css('filter', 'alpha(opacity=40)');*/
    $(".nav-estatico").css('background-color', 'rgba(255, 255, 255)')
    $(".nav-estatico").css('height', '3.5rem')
    $(".nav-estatico").css('padding-top', '0px')
    $(".openMenu img").css('width', '2rem')
    $(".openMenu").css("margin", "2%")
    $('.navbar-img').css('width', '4.5rem');
    $('.navbar-img').css('margin-top', '-25%');

    

  }
  else {
    $('.navbar-img').css('width', '10rem');
    $('.navbar-img').css('opacity', '1');

    $(".nav-estatico").css('background-color', 'transparent')
    $(".nav-estatico").css('height', '0px')
    $(".nav-estatico").css('padding-top', '60px')
    $(".openMenu img").css('width', 'auto')
    $(".openMenu").css("margin", "20px")
    $('.navbar-img').css('width', '8.8rem');
    $('.navbar-img').css('margin-top', 'auto');

  }
});

