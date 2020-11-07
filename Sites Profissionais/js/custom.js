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
    })
})

/* SCRIPT PARA MUDAR FUNDO DO NAVBAR (CABEÇALHO/MENU) */
$(window).on("scroll", function(){
    if ($(window).scrollTop() > 100){
        $(".navbar").addClass("nav-color");
    } else {
        $(".navbar").removeClass("nav-color");
    }
});