/* INICIALIZAÇÃO */
$(document).ready(function () {
    // MENU MOBILE
    $('.sidenav').sidenav()
    // LINK INTERNO
    $('.scrollspy').scrollSpy({
        scrollOffset: 0
    });
    // CAROUSEL
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    // MODAL
    $('.modal').modal();
    // TABS
    $('ul.tabs').tabs();
    // AUTO PLAY CAROUSEL
    function autoplay (){
        $('.carousel').carousel('next');
        setTimeout(autoplay, 5000);
    }
    autoplay()
});

/* SCRIPT PARA MUDAR FUNDO DO NAVBAR (CABEÇALHO/MENU) */
$(window).on("scroll", function(){
    if ($(window).scrollTop() > 100){
        $(".navbar").addClass("nav-color");
    } else {
        $(".navbar").removeClass("nav-color");
    }
});