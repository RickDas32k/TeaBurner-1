<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TeaBurner</title>
    <link rel="javascript" href="javascript.js">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="Logo.jpg" width="100px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Products</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="About Us.php">About</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="Account.php">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1><b>Knock! Knock!</b><br>We Are Here To Give<br>Your Life More Flavour!</h1>
                    <p>"If you are cold, tea will warm you; if you are too heated, it will cool you; if you are depressed, it will cheer you; if you are excited, it will calm you."<br> -William Ewart Gladstone</p>
                    <a href="product.php" class="btn">Explore Now &#8594</a>
                </div>
                <div class="col">
                    <img src="banner.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-------- Featured Categories ---------->
    <div class="categories">
        <img src="banner-2.jpg" width="100%">
    </div>

    <!-------- Featured Products ---------->
    <div class="container-2">
        <h2 class="title">Featured Items</h2>
        <div class="row">
            <div class="col-4">
                <div class="product">
                    <img src="Product/product-1.jpg" alt="product-1">
                    <img src="Product/product-2.jpg" class="img-top" alt="product-2">
                </div>
                <h4>Darjeeling Tea</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>MRP: 150.00/-</p>
            </div>
            <div class="col-4">
                <div class="product">
                    <img src="Product/product-3.jpg" alt="product-1">
                    <img src="Product/product-4.jpg" class="img-top" alt="product-4">
                </div>
                <h4>Ayurveda Tea</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>MRP: 150.00/-</p>
            </div>
            <div class="col-4">
                <div class="product">
                    <img src="Product/product-5.jpg" alt="product-1">
                    <img src="Product/product-6.jpg" class="img-top" alt="product-6">
                </div>
                <h4>Kashmiri Tea</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>MRP: 150.00/-</p>
            </div>
            <div class="col-4">
                <div class="product">
                    <img src="Product/product-7.jpg" alt="product-1">
                    <img src="Product/product-8.jpg" class="img-top" alt="product-8">
                </div>
                <h4>Oolong Tea</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>MRP: 150.00/-</p>
            </div>
        </div>
        <h2 class="title">Popular Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="product-details.php">
                    <div class="product">
                        <img src="Product/product-9.jpg" alt="product-1">
                        <img src="Product/product-10.jpg" class="img-top" alt="product-10">
                    </div>
                    <h4>White Tea</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </a>
                <p>MRP: 1,499.00/-</p>
            </div>
            <div class="col-4">
                <a href="decaf-tea.php">
                    <div class="product">
                        <img src="Product/product-23.jpg" alt="product-1">
                        <img src="Product/product-24.jpg" class="img-top" alt="product-24">
                    </div>
                    <h4>Decaf Tea</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </div>
                </a>
                <p>MRP: 499.00/-</p>
            </div>
            <div class="col-4">
                <a href="pure-chamomile.php">
                    <div class="product">
                        <img src="Product/product-21.jpg" alt="product-1">
                        <img src="Product/product-22.jpg" class="img-top" alt="product-22">
                    </div>
                    <h4>Pure Chamomile</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </a>
                <p>MRP: 599.00/-</p>
            </div>
            <div class="col-4">
                <a href="muscatel-tea.php">
                    <div class="product">
                        <img src="Product/product-11.jpg" alt="product-1">
                        <img src="Product/product-12.jpg" class="img-top" alt="product-12">
                    </div>
                    <h4>Muscatel Tea</h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </a>
                <p>MRP: 1,399.00/-</p>
            </div>
            <div class="col-4">
                <div class="product">
                    <img src="Product/product-13.jpg" alt="product-1">
                    <img src="Product/product-14.jpg" class="img-top" alt="product-14">
                </div>
                <h4>Turmeric Tea</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>MRP: 150.00/-</p>
            </div>
            <div class="col-4">
                <div class="product">
                    <img src="Product/product-15.jpg" alt="product-1">
                    <img src="Product/product-16.jpg" class="img-top" alt="product-16">
                </div>
                <h4>Peppermint Tea</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>MRP: 150.00/-</p>
            </div>
            <div class="col-4">
                <div class="product">
                    <img src="Product/product-17.jpg" alt="product-1">
                    <img src="Product/product-18.jpg" class="img-top" alt="product-18">
                </div>
                <h4>Sweet Tea</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>MRP: 150.00/-</p>
            </div>
            <div class="col-4">
                <div class="product">
                    <img src="Product/product-25.jpg" alt="product-1">
                    <img src="Product/product-26.jpg" class="img-top" alt="product-26">
                </div>
                <h4>Matcha Green Tea</h4>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>MRP: 150.00/-</p>
            </div>
        </div>
    </div>

    <!----------- Offer ---------->
    <div class="offer">
        <div class="container-2">
            <div class="row">
                <div class="col-2">
                    <img src="darjeeling.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on TeaBurner</p>
                    <h1>Speacial Darjeeling Muscatel Tea</h1>
                    <small>A sweet musky, light nutty Muscatel from Darjeeling</small>
                    <a href="" class="btn">Buy Now &#8594</a>
                </div>
            </div>
        </div>
    </div>

    <!--------------testimonial-------------->
    <div class="testimonial">
        <div class="container-2">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                    <p>Delicious fresh tea that is delivered on time. I am assured that if I am running out of my morning chai leaves that Teabox will have replenish my tea tins within days. Great service!</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <img src="images/user-1.png">
                    <h3>ESTHAR GIBBS</h3>
                </div>
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                    <p>Every tea we've ordered from TeaBurner has been a cut above teas we order from any company.This tea was no exception.The cup brews up to a beautiful deep amber color and is perfect to sip alone or with sugar. I will buy this again.</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="images/user-2.png">
                    <h3>SATISH PANDEY</h3>
                </div>
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>
                    <p>Brilliant aromas. Drinking Darjeeling Chai rejuvenates the mind & body and takes one to another planet!</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="user.jpg">
                    <h3>PRASANTA SENGUPTA</h3>
                </div>
            </div>
        </div>
    </div>
    <!-------------brands---------->

    <div class="brands">
        <div class="container-2">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="Tata-Tea-Logo.png">
                </div>
                <div class="col-5">
                    <img src="paytm-logo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="jiomart.png">
                </div>
            </div>
        </div>
    </div>
    <!--------------footer------------>

    <div class="footer">
        <div class="container-2">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios.</p>
                    <div class="app-logo">
                        <img src="images/play-store.png">
                        <img src="images/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="Logo2.png">
                    <p>LOVE EVERY MOMENTS WITH TEA...</p>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href=""><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href=""><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href=""><i class="fab fa-youtube"></i> YouTube</a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Made With <i class="fas fa-heart"> by Team- Tech Mates</i></p>
        </div>
    </div>

    <!--------------------------------------js for toggle menu------------------------->

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>