<?php 
    include './global/config.php';
    include './carrito.php';
    include './templates/header.php';
?>

<script src="/assets/js/alertaBotones.js"></script>
<div>
    <h3 class="title-table">Lista del carrito</h3>
</div>
<?php if(!empty($_SESSION['CARRITO'])) {?>
<div class="main-container">
<table>
    <tbody>
        <tr>
            <th>Descripcion</th>
            <th class="text-center">Cantidad</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Total</th>
            <th>--</th>
        </tr>
        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice => $producto){ ?>
                <tr>
                    <td ><?php echo $producto['NOMBRE']?></td>
                    <td class="text-center"><?php echo $producto['CANTIDAD']?></td>
                    <td class="text-center">$<?php echo $producto['PRECIO']?></td>
                    <td class="text-center">$<?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
                    <td class="btn">
                        <form action="" method="POST">
                            
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">

                            <button
                            id="eliminar" 
                            class="btnDelete" 
                            type="submit"
                            name="btnAccion"
                            value="Eliminar"
                            >Eliminar</button>
                        </form>
                    </td>
                </tr>
        <?php $total = $total + ($producto['PRECIO']*$producto['CANTIDAD']); ?>
        <?php }?>
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="left"><h3>$<?php echo number_format($total,2); ?></h3></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="5"> 
                <form action="./pagar.php" method="post">
                    <div class="alert alert-success">
                        <div class="form-group">
                            <label class="my-input">Correo de contacto:</label>
                                <input 
                                id="email" 
                                name="email" 
                                class="form-control"
                                placeholder="Escibe tu correo"
                                type="text"
                                required>
                        </div>
                        <small id="emailHelp" class="form-text ">
                            Los productos se enviarán a este correo
                        </small>
                    </div>
                    <button 
                    class="btn-pay" 
                    type="submit" 
                    name="btnAccion"
                    value="proceder">
                        Proceder a pagar >>
                    </button>
                </form>

            </td>
        </tr>

    </tbody>
</table>
</div>
<?php } else { ?>
    <section>
    <div>
        <p class="alert">No hay productos en el carrito.</p>
    </div>
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php } ?>
<?php 
    include './templates/pie.php';
?>