<body>
    <header class="l-header" id="header">
        <nav class="nav bd-grid">
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <a href="index.html" class="nav__logo">Deeusz&nbsp;<span class="texto">Shop</span></a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/index.php" class="nav__link">Inicio</a></li>
                    <li class="nav__item"><a href="/shop.php#featured class=" nav__link">Tienda</a></li>
                    <li class="nav__item"><a href="/nosotros.php" class="nav__link">Nosotros</a></li>
                    <li class="nav__item"><a href="/contacto.php " class="nav__link">Contactos</a></li>
                </ul>
            </div>
            <div class="nav__shop">
                <i href="mostrarCarrito.php" class='bx bxs-cart-alt'>(<?php echo (empty($_SESSION['CARRITO'])) ? 0 : count($_SESSION['CARRITO']);?>)</i>
            </div>
        </nav>
    </header>