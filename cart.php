<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Family Market</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo2.png" type="image/gif">
    <!-- <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/44a1776457.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body>
    
    <!-- Loader -->
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="img/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productsV2.php">Productos</a></li>
                    <li><a href="#">Sobre Nosotros</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=+51994906181" target="_blank">WhatsApp</a></li>
                    <li><a href="account.php">Cuenta</a></li>
                </ul>
            </nav>
            <li class="cart">
                <a href="cart.php">
                    <img src="img/cart.png" width="30px" height="30px"><span>0</span>
                </a>
                <img src="img/menu.png" class="menu-icon" onclick="menutoggle();">
            </li>
        </div>
    </div>

    <!-- Cart items details -->

<!--<div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/buy-1.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/buy-2.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $75.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/buy-3.jpg">
                        <div>
                            <p>Red Printed T-Shirt</p>
                            <small>Price: $75.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>IGV</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$235.00</td>
                </tr>
            </table>
        </div>
    </div>-->

    <div class="products-container">
        <div class="product-header">
            <h5 class="product-title">PRODUCTO</h5>
            <h5 class="price">PRECIO</h5>
            <h5 class="quantity">CANTIDAD</h5>
            <h5 class="total">TOTAL</h5>
        </div>
        <div class="products">

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
                    <img src="img/logo.png">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, quibusdam maiores omnis voluptate
                        nulla aspernatur
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

    <script>
        $(window).on("load", function () {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>

    <script src="js/script.js"></script>
    <script src="js/shoppingCart.js"></script>
    <!-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->
</body>

</html>