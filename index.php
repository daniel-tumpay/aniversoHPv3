<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Market</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo2.png" type="image/gif">
    <!-- <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> -->
    <!-- <script src="js/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="js/multislider.min.js"></script> -->
    <script src="https://kit.fontawesome.com/44a1776457.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>


    <!-- Loader -->
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>


    <div class="header">
    <!--<div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="img/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="products.html">Productos</a></li>
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Contactos</a></li>
                        <li><a href="account.html">Cuenta</a></li>
                    </ul>
                </nav>
                <li class="cart">
                    <a href="cart.html">
                        <img src="img/cart.png" width="30px" height="30px"><span>0</span>
                    </a>
                    <img src="img/menu.png" class="menu-icon" onclick="menutoggle();">
                </li>
            </div>
        </div>-->
        <header>
            <a href="index.php" class="logo"><img src="img/logo.png" width="100px"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productsV2.php">Productos</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=+51994906181" target="_blank">WhatsApp</a></li>
                <li><a href="account.php">Cuenta</a></li>
                <li class="cart">
                    <a href="cart.php">
                        <img src="img/cart.png" width="30px" height="30px"><span>0</span>
                    </a>
                    <img src="img/menu.png" class="menu-icon" onclick="menutoggle();">
                </li>
            </ul>
        </header>

        <section class="banner" id="home">
            <div class="textBx">
                <h2>Somos<br><span>Family Market !</span></h2>
                <p>Empezamos como una tienda de aceite y jabones;<br> 
                    nos expandimos al rubro de alimentos, cuidado del<br>
                    hogar y personal.
                    <br>Hoy alimentamos el crecimiento del país donde<br> 
                    estamos y mejoramos la calidad de vida de nuestros<br>clientes.
                </p>
                <a href="#proddest" class="btn">Explorar Ahora &#8594;</a>
            </div>
        </section>
    <!--<div class="row">
            <div class="col-2">
                <h1>Somos<br>Family Market !</h1>
                <p>Empezamos como una tienda de aceite y jabones; nos expandimos al rubro de alimentos, cuidado del hogar y personal.
                    <br>Hoy alimentamos el crecimiento del país donde estamos y mejoramos la calidad de vida de nuestros clientes.
                    
                </p>
                <a href="#proddest" class="btn">Explorar Ahora &#8594;</a>
            </div>
            <div class="col-2">
                <img src="img/image1.png">
            </div>
        </div>-->
    </div>


    <!--image slider start-->
    <h2 class="title">Categorías Destacadas</h2>
    <div class="slidmaster">
        <div class="slider">
            <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">
                <input type="radio" name="radio-btn" id="radio6">
                <!--radio buttons end-->
                <!--slide images start-->
                <div class="slide first">
                    <img src="img/product-coca.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img/product-gloria.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img/product-huggies.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img/product-sapolio.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img/product-vinos.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img/product-cereales.jpg" alt="">
                </div>
                <!--slide images end-->
                <!--automatic navigation start-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                    <div class="auto-btn6"></div>
                </div>
                <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
                <label for="radio6" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
        </div>
    </div>
    <!--image slider end-->

    <!-- Feactured Products -->
    <div class="small-container" id="proddest">
        <h2 class="title">Productos Destacados</h2>
        <div class="row">
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/pañoabsorbente.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <input type="hidden" value="14" />
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Paño Absorbente Scotch-Brite Bolsa 8 unid</h4></a>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/14.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/esponjaanatómica.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <input type="hidden" value="23" />
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Esponja Anatómica Home Care Paquete 12 unid</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/23.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/toallitasdesinfectantes.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <input type="hidden" value="9" />
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Toallitas Desinfectantes Clorox Expert Paquete 30 Unidades</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>S/9.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/lejíacloroxtradicional.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <input type="hidden" value="6" />
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Lejía Clorox Tradicional Botella 2 L</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/6.00</p>
            </div>
        </div>
        <h2 class="title">Últimos Productos</h2>
        <div class="row">
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/detergenteenpolvoace4.0kg.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Detergente en Polvo Ace Limón Bolsa 4 kg</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/32.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/detergenteenpolvobolivar2.6kg.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Detergente Bolivar con Partículas de Jabón Bolivar Bolsa 2.6 Kg</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/27.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/bolsabasurarollo50x70x10unid.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Bolsa Basura Rollo 50x70 Contenido 10 Unidades</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>S/2.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/limpiadormr.músculo500ml.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Limpiador de Baño Mr. Músculo Doypack 500 ml</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/6.00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/lavavajillasayudín+esponjascotchbrite.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Lavavajillas Ayudín 300 ml + Esponja de Cocina Scotch-Brite</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/5.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/limpiadorpoettbotella1.8lt.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Limpiador Desinfectante Alegra tu Día Poett Botella 1.8 Lt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/7.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/suavizantedownyfrasco2.8lt.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Suavizante de Ropa Aroma Floral Downy Frasco 2.8 lt</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>S/20.00</p>
            </div>
            <div class="col-4">
                <figure class="product-image">
                    <img src="img/productosDestacados/toallavirutexcontenido35unid.jpg">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4>Toalla Desinfectantes Easy Clean Virutex Contenido 35 Unidades</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/14.00</p>
            </div>
            
            <!-- PHP TEST -->
            <!-- <div class="col-4">
                <figure class="product-image">
                    <img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>">
                    <div class="product-over">
                        <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i>Add to cart</button>
                        <a href="#" class="btn btn-small">More Info</a>
                    </div>
                </figure>
                <h4><?php echo $row['Categoria']?> <?php echo $row['Subcategoria']?> <?php echo $row['Producto']?> <?php echo $row['Variedad']?> <?php echo $row['Marca']?> <?php echo $row['Formato']?></h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>S/14.00</p>
            </div>-->

        </div>
    </div>
    <!-- Offer -->

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="img/productosDestacados/jamóndepavitasuizaxkg.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusivo, disponible en Family Market</p>
                    <h1>Jamón de Pavita Suiza</h1>
                    <a>S/38.00 x kg</a>
                    <br>
                    <button class="btn btn2-small addToCart"><i class="fas fa-cart-plus"></i> Comprar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quia ullam cum expedita accusantium totam possimus
                            magnam hic sed, porro deserunt nobis sint corrupti molestiae? Ipsa eius et dolore vel.</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="img/user-1.png">
                        <h3>Maritza Jiménez</h3>
                </div>
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quia ullam cum expedita accusantium totam possimus
                            magnam hic sed, porro deserunt nobis sint corrupti molestiae? Ipsa eius et dolore vel.</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="img/user-2.png">
                        <h3>Alberto Gutierrez</h3>
                </div>
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quia ullam cum expedita accusantium totam possimus
                            magnam hic sed, porro deserunt nobis sint corrupti molestiae? Ipsa eius et dolore vel.</p>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <img src="img/user-3.png">
                        <h3>Gladys Milagros</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand -->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="img/logo-huggies.png">
                </div>
                <div class="col-5">
                    <img src="img/logo-gloria.png">
                </div>
                <div class="col-5">
                    <img src="img/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="img/logo-clorox.png">
                </div>
                <div class="col-5">
                    <img src="img/logo-sapolio.png">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and Ios mobile phone</p>
                    <div class="app-logo">
                        <img src="img/play-store.png">
                        <img src="img/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="img/logo2.png">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, quibusdam maiores omnis voluptate nulla aspernatur
                        iste saepe.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © 2021 Danny Mind Proyect. All Right Reserved</p>
    </div>
    <script src="js/script.js"></script>
    <script src="js/shoppingCart.js"></script>

    <script>
        window.addEventListener('scroll', function(){
        var header = document.querySelector('header');
        header.classList.toggle('sticky', window.scrollY > 0);
        });
    </script>
    
    <script>
        $(window).on("load", function () {
            $(".loader-wrapper").fadeOut("slow");
        });

        var counter = 1;
        setInterval(function () {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 6) {
                counter = 1;
            }
        }, 5000);
    </script> 

</body>
</html>