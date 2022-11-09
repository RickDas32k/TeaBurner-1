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

    <div class="container-2">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort By Price</option>
                <option>Sort By Popularity</option>
                <option>Sort By Rating</option>
                <option>Sort By Sale</option>
            </select>
        </div>
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

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
</body>

</html>