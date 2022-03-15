$( document ).ready(function() {

});


$(".btnModal").click(function () {
   // var json = '{"opacity": "1", "visibility": "visible", "transform": "translateY(0%)", "z-index": "9999"}';
    /*var cssObject = JSON.parse(json);*/
    $(".modal").css({"opacity": "1", "visibility": "visible", "transform": "translateY(0%)", "z-index": "9999"})
    $(".contenedor-modal").css("transform", "translateY(0%)");
    verInformacion()



});
var id;

$(".prod-nombre").click(function () {
    
    //alert(x);
   // console.log("ejemplo4")
    id = $(this).children("span").text()
    getProductoUnico($(this).children("span").text());

});

function verTabla() {
    getRangos(id)
    $(".modal .contenedor-modal .descripcion h3").css("display", "none")
    $(".modal .contenedor-modal .descripcion h4").css("display", "none")
    $(".modal .contenedor-modal .descripcion p").css("display", "none")
    $(".btnRango").val("Información")
    $('.btnRango').attr('onClick', 'verInformacion()');
}


function verInformacion() {
    $(".modal .contenedor-modal .descripcion h3").css("display", "block")
    $(".modal .contenedor-modal .descripcion h4").css("display", "block")
    $(".modal .contenedor-modal .descripcion p").css("display", "block")
    $("#tablaRangos").css("display", "none")
    $('.btnRango').removeAttr('onclick');
    $(".btnRango").val("Rangos y peso")
    $('.btnRango').attr('onClick', 'verTabla()');

    
    
}

/*
function getProducto(idProducto) {
    console.log("paso 1")
    $.ajax({
        url: 'database/getProducto.php',
        type: 'post',
        data: { 'id': idProducto },
        dataType: 'json',
        success: function(response){
            console.log("Respuesta " + response)
            urlImagenes = "assets/modal/"
            for (let item of response) {
                console.log(item.imagen_prod)
                $("#productoModal").text(item.nombre_prod)
                $("#descripcionModal").text(item.descripcion)
                $("#txtPresentacion").text(item.presentacion)
                $("#txtPesoCaja").text(item.peso_caja)
                $("#imagenProductoModal").attr("src", urlImagenes + item.imagen_prod);
            }

            
        },
        error: function(xhr, status, error) {
            alert(xhr.responseText + " " + status + " " + error);
        }
        
    });

  

}*/


function getRangos(idProducto) {
     $.ajax({
        url: 'database/getRangos.php',
        type: 'post',
        data: { 'producto_id': idProducto },
        dataType: 'json',
        success: function (response) {
           // console.log("Respuesta rangos " + response.length)
           
            if (response.length > 0) {
                $("#tablaRangos > tbody").empty();
                for (let item of response) {
                    //console.log(item.rango)
                    $("#tablaRangos").css("display", "block")
                    /*if (screen.width <= 485) {
                        $(".contenedor-modal ").css("height", "720px")
                    }*/
                    /*$("#tablaRangos").css("display", "block")
                    $("#tablaRangos").css("visibility", "visible")*/
                    $("#tablaRangos > tbody").append("<tr><td>" + item.rango + "</td> <td>" + item.peso + "</td></tr>");
                    
                }
            }
            else {
                $("#tablaRangos").css("display", "none")
                //$(".contenedor-modal ").css("height", "500px")
            }
           

           
         }
        
    });
}

function getProductoUnico(idProducto) {
    
     $.ajax({
        url: 'database/getProducto.php',
        type: 'post',
        data: { 'producto_id': idProducto },
        dataType: 'json',
        success: function (response) {
              //console.log("Respuesta prod " + response.length)
           
            if (response.length > 0) {
  
                
                for (let item of response) {
                    //console.log(item.imagen_prod)
                    if (item.nombre_prod != 'Pollo rosticero') {
                        $("#btnRango").css("display","none")
                    }
                    else {
                        $("#btnRango").css("display","block")
                        
                    }

                    $("#productoModal").text(item.nombre_prod)
                    $("#descripcionModal").text(item.descripcion)
                    $("#txtPresentacion").text(item.presentacion)
                    $("#txtPesoCaja").text(item.peso_caja)
                    $("#imagenProductoModal").attr("src", "assets/modal/" + item.imagen_prod);
                }
                
                
            }
            else {
                console.log("vacio")
            }
            

         },
        error: function(xhr, status, error) {
            alert(xhr.responseText + " " + status + " " + error);
        }
    });
}