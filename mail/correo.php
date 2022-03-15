<?php
/*

echo $nombre . "<br>";
echo $correoCliente . "<br>";
echo $telefonoCliente . "<br>";
echo $mensaje . "<br>";*/

/*
mail("diegoduenez03@gmail.com", "asuntillo", "Este es el cuerpo del mensaje");*/


//header('Content-type: application/json');


if (isset($_POST['g-recaptcha-response'])) {

    //La respuesta del recaptcha
    $respuesta = $_POST['g-recaptcha-response'];
    //La ip del usuario
    $ipuser = $_SERVER['REMOTE_ADDR'];
    //Tu clave secretra de recaptcha
    $clavesecreta = '6LcTBLMcAAAAAGWa46fE8FgBbbn2D4wTl1jLcIrX';
    //La url preparada para enviar
    $urlrecaptcha = "https://www.google.com/recaptcha/api/siteverify?secret=" .$clavesecreta."&response=".$respuesta."&remoteip=".$ipuser;

    //Leemos la respuesta (suele funcionar solo en remoto)
    $respuesta = file_get_contents($urlrecaptcha);

    //Comprobamos el success
    $dividir = explode('"success":', $respuesta);
    $obtener = explode(',', $dividir[1]);

    //Obtenemos el estado
    $estado = trim($obtener[0]);


    if ($estado == 'true') {
        //Si es ok
        echo '-> Ok';
    } else if ($estado == 'false') {
        //Si es error
        echo '-> Error';
    }
}



/*
error_reporting(E_ALL ^ E_NOTICE);

$nombre = $_POST['nombre'];
$correoCliente = $_POST['correo'];
$telefonoCliente = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


if (empty($nombre) ||  empty($correoCliente) || empty($mensaje))
{
    return print(json_encode('empty')); 
}
else
{
    $para = "pedidos1.chk@gmail.com";
    $titulo = $naombre.' quiere ponerse en contacto.';
    $mensaje = '
    <html>
    <head>

        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>ChickenMart</title>
    </head>
    <body>
        <h2>Nombre completo:</h2>
        <p>'.$nombre.'</p>
        <h2>Correo y telefono:</h2>
        <p> '.$correoCliente . '<br>' . $telefonoCliente .'</p>
        <br>
        <h2>Mensaje:</h2>
        <p>' . $mensaje  .'</p>
        
    </body>
    </html>';

    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    $cabeceras .= 'Para: <pedidos1.chk@gmail.com>' . "\r\n";
    $cabeceras .= 'From: ' . $nombre. "\r\n";

    $sent = mail($para, utf8_decode($titulo), utf8_decode($mensaje), $cabeceras);
    //echo "correo enviado";
   // echo "<script>window.location.href='../index.php'</script>";

    // var_dump($jsonResponse);
    if ($jsonResponse->success === true) {

        $sent = mail($para, utf8_decode($titulo), utf8_decode($mensaje), $cabeceras);

        if ($sent) {
            echo json_encode('success');
        }
        else {
            echo json_encode('servidor');            
        }
    } else {
        echo json_encode('captcha');                
    }

}*/


function test_input($field) {
    $field = trim($field);
    $field = stripslashes($field);
    $field = htmlspecialchars($field);
    return $field;
}