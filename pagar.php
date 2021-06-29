<?php
include './global/config.php';
include './global/conexion.php';
include './carrito.php';
include './templates/header.php';
?>

<?php
if ($_POST) {
    $total = 0;
    $SID = session_id();
    $correo = $_POST['email'];
    foreach ($_SESSION['CARRITO'] as $indice => $producto) {
        $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);
    }

    $sentencia = $pdo->prepare("INSERT INTO `ventas` (`id`, `claveTransaccion`, `payPalDatos`, `fecha`, `correo`, `total`, `status`) 
        VALUES (NULL, :claveTransaccion, '', NOW(), :correo, :total, 'pendiente');");


    $sentencia->bindParam(":claveTransaccion", $SID);
    $sentencia->bindParam(":correo", $correo);
    $sentencia->bindParam(":total", $total);

    $sentencia->execute();
    $idVenta = $pdo->lastInsertId();

    foreach ($_SESSION['CARRITO'] as $indice => $producto) {

        $sentencia = $pdo->prepare("INSERT INTO 
            `detalle` (`id`, `idVenta`, `idProducto`, `precioUnitario`, `cantidad`, `descargado`) 
            VALUES (NULL, :idVenta, :idProducto, :precioUnitario, :cantidad, '0');");

        $sentencia->bindParam(":idVenta", $idVenta);
        $sentencia->bindParam(":idProducto", $producto['ID']);
        $sentencia->bindParam(":precioUnitario", $producto['PRECIO']);
        $sentencia->bindParam(":cantidad", $producto['CANTIDAD']);

        $sentencia->execute();
    }

    //echo "<h3>".$total."</h3>";
}

?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/assets/js/validar2.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=MXN"></script>
<style>
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }

    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
        }
    }
</style>

<div class="jumbotron">
    <h1 class="display-4">¡Ya casi es tuyo!</h1>
    <p class="lead">
        Estas por pagar con tarjeta de credito la cantidad de:
    <h2 class="num">$<?php echo number_format($total, 2); ?></h2>
    <div id="paypal-button-container"></div>
    </p>
    <p>Los productos productos serán descargados una vez que se procese el pago</p>
    <strong>(Para aclaraciones: francisco.castell97@gmail.com)</strong>

    <a href="pagado.php" class="btn-pagar" type="submit" name="btnAccion" value="proceder">Pagar Ya</a>
    
</div>

<!-- Include the PayPal JavaScript SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

<script>
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: <?php ?>
                    }
                }]
            });
        },

        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show a success message to the buyer
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
            });
        }


    }).render('#paypal-button-container');
</script>