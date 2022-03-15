$(function () {

    $("#open").click(function () {
        $("div#menu").addClass('open')
    })

    $("#close").click(function () {
        $("div#menu").removeClass('open')
    })

    $(".link").click(function () {
        $("div#menu").removeClass('open')
    })

    $(".btnModal").click(function () {
        $("div#modalProd").addClass('modal')
        $(".contenedor-modal").css("display","flex")

    })

    $("#closeModal").click(function () {
        $("div#modalProd").removeClass('modal')
        $(".contenedor-modal").css("display","none")
        /*$(".contenedor-modal").css("bottom","-100%");*/

       // console.log("entro otra ves")
    })

    
})