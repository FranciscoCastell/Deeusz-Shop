<?php 
    include 'global/config.php';
    include 'global/conexion.php';
    include './templates/headerGral.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ==== CSS ==== -->
    <link rel="stylesheet" href="/assets/css/estilos2.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- ==== BOX ICONS ==== -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Inicio</title>
</head>


    <main class="l-main">

        <!-- ==== HOME ==== -->
        <section class="home" id="home">
            <div class="home__contenido bd-grid">
                <div class="home__shop">
                    <div class="home__shape"></div>
                    <img src="/assets/img/productos/productoInicio.png" alt="" class="home__img">
                </div>
                <div class="home__data">
                    <spam class="home__new">Llegó la</spam>
                    <h1 class="home__title">Ryzen 9 5950X</h1>
                    <p class="home__description">
                        Procesador de última generación con <br> 
                        3.40GHz
                    </p>
                    <a href="#" class="button">Ver más</a>
                </div>
            </div>
        </section>

        <!-- ==== SLIDER ==== -->
        <br><br>
        <h2 class="section-title">NOVEDADES</h2>
        <section class="slider">
            <div class="img-slider">
                <div class="slide active">
                    <img src="/assets/img/slider/slide1.jpg" alt="" class="img-slide">
                    <div class="info">
                        <h2>Nuevo Album</h2>
                        <p>
                            ミカヅキBIGWAVE lanza su nuevo album, 魔法戦線 METROPOLIS.exe
                            más future funk que nunca.
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <img src="/assets/img/slider/slide2.jpg" alt="" class="img-slide">
                    <div class="info">
                        <h2>Pure Pure</h2>
                        <p>
                           Te traemos el album que aun sigue sonando en la radio de parte 
                           de nuestro querido Moe Shop.  
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <img src="/assets/img/slider/slide3.jpg" alt="" class="img-slide">
                    <div class="info">
                        <h2>Lo nuevo</h2>
                        <p>
                           Después de tanto tiempo, サクラSAKURA-LEE regresa con un album
                           llamado "Shining Sky" y rematando con nuevo sencillo, "とても明るく"
                           que su significado es "Brillante".
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <img src="/assets/img/slider/slide4.jpg" alt="" class="img-slide">
                    <div class="info">
                        <h2>Shibuya Meltdown</h2>
                        <p>
                           Te traemos para ti, el album que hizo bailar al mundo entero 
                           de parte nuestro future funker mexicano マクロスMACROSS 82-99.  
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <img src="/assets/img/slider/slide5.jpg" alt="" class="img-slide">
                    <div class="info">
                        <h2>Remember</h2>
                        <p>
                           Album mas escuchado del mundo de ev.exi y ahora a la venta en 
                           Deeusz Shop.  
                        </p>
                    </div>
                </div>
                <div class="nav">
                    <div class="btn active"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                    <div class="btn"></div>
                </div>
            </div>
            <script src="/assets/js/slide.js"></script>
        </section>

        <!-- ==== FEATURED ==== -->
        <section class="featured section" id="featured">
            <h2 class="section-title">FUTURE FUNK</h2>

            <div class="featured__container bd-grid">
                <article class="songs">
                    <div class="songs__sale">Sale</div>
                    <img src="/assets/img/productos/producto1.jpg" alt="" class="songs__img">
                    <span class="songs__name">Cherry Soda</span>
                    <span class="songs__preci">$60.99</span>
                    <a href="" class="button-light">Add to Cart <i
                            class='bx bxs-right-arrow-circle button-icon'></i></a>
                </article>

                <article class="songs">
                    <div class="songs__sale">Sale</div>
                    <img src="/assets/img/productos/producto2.jpg" alt="" class="songs__img">
                    <span class="songs__name">魔法戦線 METROPOLIS​.​exe</span>
                    <span class="songs__preci">$160.00</span>
                    <a href="" class="button-light">Add to Cart <i
                            class='bx bxs-right-arrow-circle button-icon'></i></a>
                </article>

                <article class="songs">
                    <div class="songs__sale">Sale</div>
                    <img src="/assets/img/productos/Producto3.jpg" alt="" class="songs__img">
                    <span class="songs__name">Pure Pure</span>
                    <span class="songs__preci">$45.98</span>
                    <a href="" class="button-light">Add to Cart <i
                            class='bx bxs-right-arrow-circle button-icon'></i></a>
                </article>

            </div>
        </section>

        <!-- ==== COLLECTION ==== -->
        <section class="collection section" id="collection">
            <div class="collection__container bd-grid">
                <div class="collection__card">
                    <div class="collection__data">
                        <h3 class="collection__name">Aorus B450</h3>
                        <p class="collection__description">Lo nuevo de motherboards</p>
                        <a href="" class="button-light">Comprar Ahora <i
                                class='bx bxs-right-arrow-circle button-icon'></i></a>
                    </div>

                    <img src="/assets/img/productos/productoFeatured1.png" alt="" class="collection__img">
                </div>

                <div class="collection__card">
                    <div class="collection__data">
                        <h3 class="collection__name">GeForce</h3>
                        <p class="collection__description">RTX 3090 Ti</p>
                        <a href="" class="button-light">Comprar Ahora <i
                                class='bx bxs-right-arrow-circle button-icon'></i></a>
                    </div>

                    <img src="/assets/img/productos/productoCollection2.png" alt="" class="collection__img">
                </div>

                <div class="collection__card">
                    <div class="collection__data">
                        <h3 class="collection__name">Intel</h3>
                        <p class="collection__description">Core i9 10900K 3.40GHz</p>
                        <a href="" class="button-light">Comprar Ahora <i
                                class='bx bxs-right-arrow-circle button-icon'></i></a>
                    </div>

                    <img src="/assets/img/productos/productoCollection3.png" alt="" class="collection__img">
                </div>
            </div>
        </section>

        <!-- ==== GAMES SNEAKERS ==== -->
        <section class="game section" id="woman">
            <h2 class="section-title">JUEGOS</h2>

            <div class="game__container bd-grid">
                <article class="songs">
                    <img src="/assets/img/productos/juegos/XBOX/producto_juego_xbox1.png" alt="" class="songs__img">
                    <span class="songs__name">Gears 5</span>
                    <span class="songs__preci">$1,160.00</span>
                    <a href="" class="button-light">Add to Cart <i
                            class='bx bxs-right-arrow-circle button-icon'></i></a>
                </article>

                <article class="songs">
                    <img src="/assets/img/productos/juegos/PLAYSTATION/producto_juego_playstation3.png" alt=""
                        class="songs__img">
                    <span class="songs__name">God of War</span>
                    <span class="songs__preci">$760.00</span>
                    <a href="" class="button-light">Add to Cart <i
                            class='bx bxs-right-arrow-circle button-icon'></i></a>
                </article>

                <article class="songs">
                    <img src="/assets/img/productos/juegos/STEAM/producto_juegos_pc6.png" alt="" class="songs__img">
                    <span class="songs__name">Resident Evil Village</span>
                    <span class="songs__preci">$1,050.00</span>
                    <a href="" class="button-light">Add to Cart <i
                            class='bx bxs-right-arrow-circle button-icon'></i></a>
                </article>

                <article class="songs">
                    <img src="/assets/img/productos/juegos/NINTENDO/producto_juego_ninendo2.png" alt="" class="songs__img">
                    <span class="songs__name">Super Smash Bros ultimate</span>
                    <span class="songs__preci">$1,050.00</span>
                    <a href="" class="button-light">Add to Cart <i
                            class='bx bxs-right-arrow-circle button-icon'></i></a>
                </article>
            </div>
        </section>
        <!-- ==== OFFER ==== -->
        <section class="offer section">
            <div class="offer__container bd-grid">
                <div class="offer__data">
                    <h3 class="offer__title">50% OFF</h3>
                    <p class="offer__description">Album Shining Sky de サクラSAKURA-LEE</p>
                    <a href="#" class="button">Shop Now</a>
                </div>

                <img src="/assets/img/productos/offer1.png" alt="" class="offer__img">

            </div>
        </section>

        <!-- ==== NEWSLETTER ==== -->
        <section class="newsletter section">
            <div class="newsletter__container bd-grid">
                <div>
                    <h3 class="newsletter__title">En la compra del album <br> 魔法戦線 METROPOLIS​.​exe</h3>
                    <p class="newsletter__description">Obten 10% OFF en todas las compras</p>
                    <p class="newsletter__description">Ingresa el código:</p>
                </div>

                <form action="" class="newsletter__code">
                    <input type="text" placeholder="code here" class="newsletter__input">
                    <a href="#" class="button">Enviar</a>
                </form>
            </div>
        </section>

        <!-- ==== FOOTER ==== -->
        <?php 
            include './templates/pie.php';
        ?>      
        <!-- ==== FOOTER ==== -->

    </main>

    <!-- ==== MAIN JS ==== -->
    <script src="/assets/js/main.js"></script>

