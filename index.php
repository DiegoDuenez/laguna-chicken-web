<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width,  minimum-scale=1.0">
    <meta name="viewport" content="initial-scale = 1.0,minimum-scale = 1.0" />
    <meta name="viewport" content="user-scalable=no, width=device-width">-->
    <!--<meta content="yes" name="apple-mobile-web-app-capable" />-->
    <!--<meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos/menuResponsive.css">
    <link rel="stylesheet" href="estilos/index3.css">
    <link rel="stylesheet" href="estilos/nuevo.css">
    <link rel="stylesheet" href="estilos/menuFullscren.css">
    <link rel="stylesheet" href="estilos/modal.css">
    <link rel="stylesheet" href="estilos/dropdown.css">
    <link rel="stylesheet" href="estilos/escritorio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        #map-canvas {
            height: 50%;

            position: absolute;

        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        /*@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap');*/

        * {
            font-family: 'Ubuntu', sans-serif !important;
        }

        @font-face {
            font-family: 'Ubuntu-bold';
            src: url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap');
        }

        @font-face {
            font-family: 'Ubuntu-normal';
            src: url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        }

        .contenedor-3 .menu h6 {

            font-family: 'Ubuntu', sans-serif;
            font-weight: 900;

        }

        #wrapper {
            position: absolute;
            width: 100%;

        }

        .contenedor-global {
            /*width: 100% !important;
            height: 100%;*/
            overflow-x: hidden;
        }
    </style>

    <title>Chicken Mart</title>

    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body id="inicio">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <?php
    require_once("database/productos.php");

    ?>

    <nav class="nav-estatico">
        <div class="logo"><a href="index.php"><img src="assets/LogoLagunaChicken.png" alt="" class="navbar-img"></a></div>
        <div class="openMenu " id="open"><img src="iconos/menu.png" alt=""></div>
    </nav>

    <div class="img-principal" style="z-index: -2;" data-aos="fade-right">
        <img src="assets/imagen-redonda.png" alt="" width="">
    </div>

    <div class="img-segunda" style="z-index: -5;" data-aos="fade-left">
        <img src="assets/fondo-pollo.jpg" alt="" width="">

    </div>

    <div class="contenedor">
        <div class="seccion-blanca">
            <h1 class="titulo-principal">Productos de calidad directamente a tu hogar</h1>
            <div class="seccion-blanca-items" data-aos="zoom-in" data-aos-delay="200">
                <a href="#nosotros"><img src="assets/scroll.png" alt="" class="scroll-icon"></a>
            </div>
        </div>
    </div>

    <div id='menu'>
        <div style="z-index: 99999;">
            <h6><a href="#inicio" class="link ">Inicio</a></h6>
            <h6><a href="#nosotros" class="link ">Nosotros</a></h6>
            <h6><a href="#productos" class="link ">Productos</a></h6>
            <h6><a href="Catálogo LCHICK.pdf" class="link closeMenu" download>Catálogo</a></h6>
            <h6><a href="#contacto" class="link closeMenu">Contacto</a></h6>
        </div>
        <button id="close" class="ic-cerrar" style="z-index: 99999;background-color: var(--naranja); border:none;color:#fad25a; text-decoration: none; width: max-content; position: absolute; top:15px; right:10px">
            <img src="iconos/cerrar.png" alt="" style="z-index: -1;">
        </button>
        <div class="informacion">
            <div class="sociales">
                <div class="fb">
                    <div class="img-fb">
                        <img src="iconos/facebook.svg" alt="" width="30" height="30" style="margin-left: 12px; margin-right: 15px">
                    </div>
                    <div class="text-fb">
                        <a href="https://www.facebook.com/Laguna-Chicken-1913718588936109" target="blank">@laguna.chicken</a>
                    </div>

                </div>
                <div class="fb">
                    <div class="img-fb">
                        <img src="iconos/instagram.svg" alt="" width="30" height="30" style="margin-left: 12px; margin-right: 15px">
                    </div>
                    <div class="text-fb">
                        <a href="https://www.instagram.com/lagunachickentrn/" target="blank">@lagunachickentrn</a>
                    </div>

                </div>
            </div>
            <div class="logos">
                <img src="assets/LogoLagunaChicken.png" alt="">
                <img src="assets/logoChickenMart.png" alt="">


            </div>
        </div>

    </div>

    <div class="icon-whats ">
        <a onclick="myFunction()" target="blank">
            <img src="iconos/whatsapp.png" alt="" class="dropbtn" id="wh">
        </a>
    </div>
    <div class="dropdown">
        <div id="myDropdown" class="dropdown-content">
            <a href="https://api.whatsapp.com/send?phone=+5218713169265" target="blank"><b>Pedidos Torreón</b> 871 316 9265</a>
            <a href="https://api.whatsapp.com/send?phone=+5218711957085" target="blank"><b>Pedidos Gómez</b> 871 195 7085 </a>
        </div>
    </div>

    <div class="contenedor-global">
        <div class="nosotros" id="nosotros">

            <img src="assets/quienes-somos.png" alt="" class="img-somos" data-aos="fade-right">
            <p data-aos="fade-left">Laguna Chicken, originalmente llamado Chicken Mart, abrió como un pequeño expendio de pollo en la ciudad de Torreón, Coahuila a principios del 2006. Poco a poco fuimos creciendo a mayoristas en el mercado de abastos y hasta el día de hoy en convertirnos en el mejor distribuidor de pollo de la Laguna y Durango.
                <br> Día con día ofrecemos productos de la mejor calidad y satisfacemos las necesidades de todos nuestros clientes, ya sean pequeños restaurantes o grandes empresas, así como a familias.
            </p>
            <img src="assets/mision.png" alt="" class="img-mision" data-aos="fade-right">
            <p data-aos="fade-left">Somos una empresa líder en el mercado que busca llegar al público con la mayor variedad de productos de calidad y a
                un
                precio competitivo, ofreciendo seguridad y confianza al consumidor.</p>
            <img src="assets/vision.png" alt="" class="img-vision" data-aos="fade-right">
            <p data-aos="fade-left">Ser una empresa con marca propia, elaborando productos de valor agregado. Queremos tener presencia a nivel nacional
                y
                ofrecer una gama amplia de productos y soluciones a nuestros clientes.</p>


        </div>


        <div class="valores-header">
            <div class="header">
                <h3 data-aos="zoom-in">Valores</h3>
            </div>
        </div>
        <div class="valores">
            <div class="valor">
                <div class="imagen-valor" data-aos="zoom-in">
                    <img src="assets/valores/honestidad.png" alt="honestidad" class="img-h">
                </div>
                <div class="desc-valor">
                    <h6>Honestidad</h6>
                    <p>No mentir ni manipular, apoyándonos en el marco legal de la empresa y la moral de nuestra comunidad.</p>
                </div>
            </div>
            <div class="valor">
                <div class="imagen-valor" data-aos="zoom-in">
                    <img src="assets/valores/calidad.png" alt="calidad" class="img-cal">
                </div>
                <div class="desc-valor" data-aos="zoom-in">
                    <h6>Calidad</h6>
                    <p>Buscamos la excelencia en nuestro trabajo, dando siempre los mejor que podemos ofrecer.</p>
                </div>
            </div>
            <div class="valor">
                <div class="imagen-valor" data-aos="zoom-in">
                    <img src="assets/valores/compromiso.png" alt="compromiso" class="img-comp">
                </div>
                <div class="desc-valor">
                    <h6>Compromiso</h6>
                    <p>Tener la responsabilidad de cumplir con los clientes, nuestro trabajo, con nosotros mismos y con el medio
                        ambiente.</p>
                </div>
            </div>

            <div class="valor">
                <div class="imagen-valor" data-aos="zoom-in">
                    <img src="assets/valores/confianza.png" alt="compromiso" class="img-conf">
                </div>
                <div class="desc-valor">
                    <h6>Confianza</h6>
                    <p>Queremos que tanto clientes como proveedores crean en nosotros, ofreciéndoles seguridad como eslabón de la
                        cadena de
                        valor.</p>
                </div>
            </div>

            <div class="valor">
                <div class="imagen-valor" data-aos="zoom-in">
                    <img src="assets/valores/lealtad.png" alt="compromiso" class="img-leal">
                </div>
                <div class="desc-valor">
                    <h6>Lealtad</h6>
                    <p>Queremos proteger a nuestros clientes y la empresa.</p>
                </div>
            </div>
            <div class="valor"></div>
        </div>

        <div class="productos" id="productos">
            <div class="header">
                <h3 data-aos="zoom-in">Productos de calidad</h3>
                <h6 data-aos="zoom-in" data-aos-delay="200">La mejor calidad, de nuestra tienda a tu cocina</h6>
            </div>
            <div class="categorias">
                <div class="categoria" data-aos="zoom-in-up" id="categoriaFrescos">
                    <img src=" assets/frescos.png" alt="" class="imagen" onclick="$('#congelados').hide();$('#empanizados').hide();$('#frescos').show();">
                    <div class=" nombre" id="openFrescos">
                        Frescos
                    </div>
                    <div class="productos-menu" id="frescos">
                        <ul>
                            <?php
                            foreach (getProductos(1) as $result) {
                                echo "<li class='prod-nombre btnModal'>" . $result->nombre_prod . " <span style='visibility:hidden'>" . $result->id . "</span>" . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="categoria" data-aos="zoom-in-up" data-aos-delay="100" id="categoriaCongelados">
                    <img src="assets/congelados.png" alt="" class="imagen" onclick="$('#frescos').hide();$('#empanizados').hide();$('#congelados').show();">
                    <div class="nombre" id="openCongelados">Congelados</div>
                    <div class="productos-menu" id="congelados">
                        <ul>
                            <?php
                            foreach (getProductos(2) as $result) {
                                echo "<li class='prod-nombre btnModal'>" . $result->nombre_prod . " <span style='visibility:hidden' >" . $result->id . "</span>" . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="categoria" data-aos="zoom-in-up" data-aos-delay="200" id="categoriaEmpanizados">
                    <img src="assets/empanizado.png" alt="" class="imagen" onclick="$('#frescos').hide();$('#congelados').hide();$('#empanizados').show();">
                    <div class="nombre" id="openEmpanizados">Empanizados</div>
                    <div class="productos-menu" id="empanizados">
                        <ul>
                            <?php
                            foreach (getProductos(3) as $result) {
                                echo "<li class='prod-nombre btnModal'>" . $result->nombre_prod . " <span style='visibility:hidden' >" . $result->id . "</span>" . "</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sucursales">
            <div class="header">
                <h3 data-aos="zoom-in">Nuestras sucursales</h3>
            </div>
            <div class="direcciones">
                <div class="direccion" id="direccion" data-aos="zoom-in-left">
                    <iframe id="map" class="framemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.560826353913!2d-103.42876028552702!3d25.55300192344484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdbb64759a2c3%3A0x309e6aeb9c8628d0!2sChicken%20Mart%20(Laguna%20Chicken%20SA%20de%20CV)!5e0!3m2!1ses-419!2smx!4v1633097409856!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="nombre" id="diagonal">Torreón</div>
                    <p class="dir-desc" id="primer">
                        <img src="iconos/ubicacion.png" alt="" class="ic-ubicacion-nj">
                        Blvd. Diagonal Ref. #1800 Local 104 Col. Santa María, Torreón Coah.
                    </p>
                </div>
                <div class="direccion" id="direccion2" data-aos="zoom-in-left" data-aos-delay="100">
                    <!--<div id="map-canvas-2" style="height: 100%;width:100%;position: relative;background:#f2777a;"></div>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d449.88526833403796!2d-103.47885773743438!3d25.568933641440697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf041de1d561fa674!2sLaguna%20Chicken!5e0!3m2!1sen!2smx!4v1633104506156!5m2!1sen!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="nombre" id="fiscal">Gómez Palacio</div>
                    <p class="dir-desc">
                        <img src="iconos/ubicacion.png" alt="" class="ic-ubicacion-nj">
                        Calle Quinta #517 Zona Central de Abastos, Gómez Palacio.
                    </p>
                </div>
                <div class="direccion" id="direccion3" data-aos="zoom-in-left" data-aos-delay="200">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d227.73258469268652!2d-104.6291055417162!3d24.040889316788345!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8dc694f245c3492!2sLaguna%20Chicken%20SA%20de%20CV!5e0!3m2!1sen!2smx!4v1633104841831!5m2!1sen!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <div class="nombre" id="durango">Durango</div>
                    <p class="dir-desc">
                        <img src="iconos/ubicacion.png" alt="" class="ic-ubicacion-nj">
                        Calle Rio de Janeiro #101 Colonia Guadalupe, Durango.

                    </p>
                </div>
            </div>
            <!--<div class="direcciones-desc">
                <div class="descripciones" data-aos="zoom-in-left">
                    <img src="iconos/ubicacion.png" alt="" class="ic-ubicacion-nj">
                    Blvd. Diagonal Reforma #1800 Local 104 Col. Santa María, Torreón Coah.
                </div>
                <div class="descripciones" data-aos="zoom-in-left" data-aos-delay="100">
                    <img src="iconos/ubicacion.png" alt="" class="ic-ubicacion-nj">
                    Calle Quinta #517 Zona Central de Abastos, Gómez Palacio.
                </div>
                <div class="descripciones" data-aos="zoom-in-left" data-aos-delay="200">
                    <img src="iconos/ubicacion.png" alt="" class="ic-ubicacion-nj">
                    Calle Rio de Janeiro #101 Colonia Guadalupe, Durango.
                </div>
            </div>-->
        </div>

        <div class="contacto" id="contacto">
            <div class="header">
                <h3 data-aos="zoom-in">Ponte en contacto</h3>
                <h6 data-aos="zoom-in" data-aos-delay="200">Escríbenos si tienes alguna duda y nos pondremos en contacto a la brevedad</h6>
            </div>

            <div class="body">
                <form class="formulario" data-aos="zoom-in" data-aos-delay="300" method="post" action="mail/captcha.php" id="form">
                    <label for="nombre" class="lblNombre">Nombre Completo</label>
                    <input type="text" name="nombre" id="nombre" required>
                    <div class="input-linear">
                        <label for="correo" class="lblCorreo">Correo Electrónico</label>
                        <label for="telefono" class="lblTel">Teléfono</label>
                        <input type="email" name="correo" id="correo" required>
                        <input type="number" min="1" pattern="^[0-9]+" name="telefono" id="telefono" required>
                    </div>
                    <label for="mensaje" class="lblMensaje">Mensaje</label>
                    <textarea name="mensaje" cols="30" rows="10" id="mensaje" required></textarea>

                    <div class="g-recaptcha" data-sitekey="6LcTBLMcAAAAAKVMGMHjcCV67KesXzX6FTocLLQq" style="margin-top: 2%"></div>
                    <br>
                    <div id="status"></div>
                    <!--<input type="button" onclick="descargar()" value="Descargar">-->
                    <input type="button" onclick="enviarCorreo()" value="Enviar" class="btnEnviar" style="z-index: 100">
                </form>
                <div class="informacion" data-aos="zoom-in" data-aos-delay="300">
                    <p><span style="margin-left: 28px" id="mailContacto"><a href="mailto:pedidos1.chk@gmail.com" style="color: black; text-decoration: none;"><img src="iconos/mail_naranja.png" alt="" width="20" height="15"> pedidos1.chk@gmail.com</span></a><br><br>
                        <span style="margin-left: 28px"><a href="tel:8711930436" style="color: black; text-decoration: none;"><img src="iconos/telefono_naranja.png" alt="" width="20" height="20"> 871 193 0436 </a></span> <br> <span style="margin-left: 28px"><a href="tel:8711930437" style="color: black; text-decoration: none;"><img src="iconos/telefono_naranja.png" alt="" width="20" height="20"> 871 193 0437 </a></span> <br> <br><span style="margin-left: 28px;">
                            <img src="iconos/whatsapp.png" alt="" width="20" height="20">
                            <a href="https://api.whatsapp.com/send?phone=+5218713169265" style="color: black; text-decoration: none;" target="blank">871 316 9265 Torreón, Coahuila </a></span> <br><span style="margin-left: 28px;"> <a href="https://api.whatsapp.com/send?phone=+5218711957085" style="color: black; text-decoration: none;" target="blank"><img src="iconos/whatsapp.png" alt="" width="20" height="20"> 871 195 7085 Gómez Palacio, Dgo </a></span>
                    </p>
                </div>
                <!--<div class="icon-whats" data-aos="zoom-in" data-aos-delay="300">
                    <a href="https://api.whatsapp.com/send?phone=+5218712001905" target="blank">
                        <img src="iconos/whatsapp.png" alt="" width="80" height="80">
                    </a>
                </div>-->
            </div>
        </div>

        <div class="footer">
            <p>Desarrollado por <a href="https://awsoftware.mx/" target="blank">AW Software</a> </p>
        </div>

        <div class="modal" id="modalProd">
            <div class="contenedor-modal">
                <div class="imagen">
                    <img alt="" id="imagenProductoModal">
                    <button id="closeModal" class="ic-cerrar btnModal">
                        <img src="iconos/cerrar.png" alt="">
                    </button>
                    <input type="button" class="btnRango" id="btnRango" value="Rangos y peso" onclick="verTabla()">
                </div>
                <div class="descripcion">

                    <h3 id="productoModal"></h3>
                    <p id="descripcionModal"></p>
                    <h4 id="presentacionModal">Presentación</h4>
                    <p id="txtPresentacion"></p>
                    <h4 id="pesoCajaModal">Peso por caja</h4>
                    <p id="txtPesoCaja"></p>
                    <div class="rangoPeso">
                        <table id="tablaRangos" >
                            <thead>
                                <tr>
                                    <th>Rango</th>
                                    <th>Peso</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlEYfC3mlX7EsxagZmY33rFTlys7cVoKA&libraries=geometry&callback=initMap" async defer></script>



    </div>

    <!--<script>
        $('#form').submit(function(event) {
            event.preventDefault();
            /*Cambia 6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS por tu clave de sitio web*/
            grecaptcha.ready(function() {
                grecaptcha.execute('6LcTBLMcAAAAAKVMGMHjcCV67KesXzX6FTocLLQq', {
                    action: 'registro'
                }).then(function(token) {
                    $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
                    $('#form').prepend('<input type="hidden" name="action" value="registro">');
                    $('#form').unbind('submit').submit();
                });;
            });
        });
    </script>-->


</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="js/menuFull.js"></script>
<script>
    AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>

<script src="js/menu.js"></script>
<script src="js/index.js"></script>
<script src="js/producto.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/direcciones.js"></script>
<script src="js/categorias.js"></script>
<script src="js/mail.js"></script>


</html>