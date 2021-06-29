<?php 
    include './global/config.php';
    include './global/conexion.php';
    include './carrito.php';
    include './templates/headerGral.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/css/estilo3.css">
    <link rel="stylesheet" href="/assets/css/estilos2.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Contacto</title>
</head>

    <br><br>
    <section>
        <div class="container">
            <form action="contacto.php" id="formContacto" method="POST" onsubmit="return validar();">
                <h1>Contactanos</h1>
                <input type="text" id="nombre"  placeholder="Nombre Completo">
                <input type="text" id="correo" placeholder="Correo">
                <input type="text" id="telefono" placeholder="Tel.">
                <textarea id="mensaje" placeholder="Mensaje"></textarea>
                <button id="enviar">Enviar Mensaje</button>
            </form>
        </div>
    </section>
    <footer class="footer section">
        <div class="footer__container bd-grid">
            <div class="footer__box">
                <h3 class="footer__title">Deeusz&nbsp;<span class="texto">Shop</span></h3>
                <p class="footer__description">Music and Games shop 2021.</p>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">EXPLORA</span></h3>
                <ul>
                    <li><a href="/index.php" class="footer__link">Inicio</a></li>
                    <li><a href="/shop.php" class="footer__link">Tienda</a></li>
                    <li><a href="#" class="footer__link">Nosotros</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">SOPORTE</span></h3>
                <ul>
                    <li><a href="#" class="footer__link">Product Help</a></li>
                    <li><a href="#" class="footer__link">Customer Care</a></li>
                    <li><a href="#" class="footer__link">Athorized service</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-google'></i></a>
            </div>
        </div>
        <p class="footer__copy">&#169; 2021 DeeuszPlay. Todos los derechos reservados</p>
    </footer>
    <script src="/assets/js/main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/assets/js/validar.js"></script>
</body>

</html>