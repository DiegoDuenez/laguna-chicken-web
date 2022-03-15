function enviarCorreo() {

    var response = grecaptcha.getResponse();
    if (response.length != 0) {

        const nombre = $("#nombre").val()
        const correo = $("#correo").val()
        const telefono = $("#telefono").val()
        const mensaje = $("textarea#mensaje").val()

        $.ajax({
            url: 'mail/captcha.php',
            type: 'post',
            data: {'nombre': nombre, 'correo': correo, 'telefono': telefono, 'mensaje': mensaje},
            dataType: 'text',
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function (response) {
                //JSON.parse(data)
               // $.parseJSON(data);
                $("#nombre").val('')
                $("#correo").val('')
                $("#telefono").val('')
                $("textarea#mensaje").val('')
                document.getElementById('status').innerHTML = "";
                Swal.fire(
                    {
                    title: "Gracias por enviarnos tu correo",
                    text: "Espera nuestra respuesta pronto",
                    icon: 'success',
                    confirmButtonText: "Ok",
                    iconColor: '#D76D2A',
                    confirmButtonColor: "#D76D2A",
                    }
                )
            
            },
            error: function(xhr, status, error) {
                $("#nombre").val('')
                $("#correo").val('')
                $("#telefono").val('')
                $("textarea#mensaje").val('')
                document.getElementById('status').innerHTML = "";
                
            }
        });

    }
            
    else {
        document.getElementById('status').innerHTML = "Debes aceptar el captcha";
    }

    
}