<?php
include './global/config.php';
include './global/conexion.php';
include './carrito.php';
include './templates/header.php';
?>

<head>
    <title>Tienda</title>
</head>

<body>

    <?php if ($mensaje != "") { ?>
        <!--
        <div class="alert-config">
            <?php echo $mensaje; ?>-->
        <script>
            Swal.fire({
                title: '¡Listo!',
                text: "Tu producto ha sido agregado al carrito",
                icon: 'success'
            });
        </script>
        <!--<a href="mostrarCarrito.php" class="button-light-alert">
                            Ver Carrito<i class='bx bxs-right-arrow-circle button-icon-alert'></i></a>
    -->
        </div>
    <?php } ?>
    <?php
    $sentencia = $pdo->prepare("SELECT * FROM `productos`");
    $sentencia->execute();
    $listaProducto = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($listaProducto);
    ?>
    <br><br>
    <h2 class="section-title">SHOP</h2>

    <?php foreach ($listaProducto as $producto) { ?>
        <div class="container">
            <div class="card">
                <img src="<?php echo $producto['imagen']; ?>" alt="" class="card-img">
                <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
                <p class="precio">$<?php echo $producto['precio']; ?></p>

                <form action="" method="post">

                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'], COD, KEY); ?>">
                    <input type="hidden" name="nombre" id="nomre" value="<?php echo openssl_encrypt($producto['nombre'], COD, KEY); ?>">
                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'], COD, KEY); ?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">

                    <button href="#" name="btnAccion" value="Agregar" class="button-light">
                        Add to Cart <i class='bx bxs-right-arrow-circle button-icon'></i></button>
                </form>
            </div>
        </div>
    <?php } ?>

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        });
    </script>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
    include './templates/pie.php';
    ?>