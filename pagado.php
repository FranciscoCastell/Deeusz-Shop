<?php
    include './global/config.php';
    include './carrito.php';
    include './templates/header.php';
?>

<div class="jumbotron">
    <h1 class="display-4">¡Listo!</h1>
    <p class="lead">
        En estos momentos se esta procesando tu pago
    <div id="paypal-button-container"></div>
    </p>
    <p>En unos segundo te estaremos entregando un recibo de tus compras</p>
    <strong>(Para aclaraciones: francisco.castell97@gmail.com)</strong>

</div>
<br><br>
<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<script src="/assets/js/script.js"></script>
<section class="reciboPDF">

    <div class="recibo">
        <h1 class="display-4">Recibo de pago</h1>
        <p>Tus compras: </p>
        <strong>(Para aclaraciones: francisco.castell97@gmail.com)</strong>
    </div>
    <?php if (!empty($_SESSION['CARRITO'])) { ?>
        <div class="main-container">
            <table>
                <tbody>
                    <tr>
                        <th>Descripcion</th>
                        <th class="text-center">Cantidad</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Total</th>
                    </tr>
                    <?php $total = 0; ?>
                    <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                        <tr>
                            <td><?php echo $producto['NOMBRE'] ?></td>
                            <td class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
                            <td class="text-center">$<?php echo $producto['PRECIO'] ?></td>
                            <td class="text-center">$<?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></td>
                        </tr>
                        <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>
                    <?php } ?>
                    <tr>
                        <td colspan="3" align="right">
                            <h3>Total</h3>
                        </td>
                        <td align="left">
                            <h3>$<?php echo number_format($total, 2); ?></h3>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <button class="btn-imprimir" onclick="generarPDF();">Imprimir</button>
</section>

<?php } ?>
<?php
include './templates/pie.php'
?>