<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles2.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Tienda</title>
</head>
<header class="navegacion">
    <div class="nav">
        <h1><a href="index.html" class="texto-titulo">Deeusz&nbsp;<span class="texto">Shop</span></a></h1>
        <ul>
            <li><a href="index.php" class="form">Inicio</a></li>
            <li><a href="shop.php" class="form">Tienda</a></li>
            <li><a href="nosotros.php" class="form">Nosotros</a></li>
            <li><a href="contacto.php" class="form">Contactos</a></li>
            <li><a href="mostrarCarrito.php" class="form shop"><i class='bx bxs-cart-alt'><?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']);?></i></a></li>
        </ul>
    </div>
</header>