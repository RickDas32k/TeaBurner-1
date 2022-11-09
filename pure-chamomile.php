<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Products - TeaBurner</title>
    <link rel="javascript" href="javascript.js">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
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
    </div>

    <!--------------------------------single product details--------------->

    <div class="container-2 single-product">
        <div class="row">
            <div class="col-new">
                <img src="Product/product-21.jpg" width="60%" id="productimg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="Product/product-21.jpg" width="60%" class="smallimg">
                    </div>
                    <div class="small-img-col">
                        <img src="Product/product-22.jpg" width="60%" class="smallimg">
                    </div>
                    <div class="small-img-col">
                        <img src="Product/chamomile-tea.jpg" width="60%" class="smallimg">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / Pure Chamomile</p>
                <h1>Pure Chamomile Tea</h1>
                <H4>MRP: 599/-</H4>
                <select>
                    <option>Select Size</option>
                    <option>50gm | 50cups</option>
                    <option>150gm | 150cups</option>
                    <option>250gm | 250cups</option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>
                <h3>Product Details <i class="fas fa-indent"></i></h3>
                <br>
                <p>Pure herbal tisane for bedtime.<br><b>Aroma:</b> Vegetal and slightly floral
                    <br>
                    <b>Appearance:</b> Golden yellow</p>
            </div>
        </div>
    </div>

    <!-----------------------------------title--------------------->

    <div class="container-2">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>
    <div class="container-2">
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

    <!-------------------js for product details-------------------------->

    <script>
        var productimg = document.getElementById("productimg");
        var smallimg = document.getElementsByClassName("smallimg");

        smallimg[0].onclick = function() {
            productimg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            productimg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            productimg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            productimg.src = smallimg[3].src;
        }
    </script>
</body>

</html>