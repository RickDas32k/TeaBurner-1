<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cart - TeaBurner</title>
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


    <!-----------------------------cart-------------------->

    <div class="container-2 cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>SubTotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="product/gallery-1.jpg">
                        <div>
                            <p>Darjeeling Tea</p>
                            <small>MRP: 150.00/-</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>150.00/-</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <a href="decaf-tea.php"><img src="product/product-23.jpg"></a>
                        <div>
                            <p>Decaf Tea</p>
                            <small>MRP: 499.00/-</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>499.00/-</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <a href="muscatel-tea.php"><img src="product/product-11.jpg"></a>
                        <div>
                            <p>Muscatel Tea</p>
                            <small>MRP: 1,399.00/-</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>1,399.00/-</td>
            </tr>
        </table>

        <div class="total-price">

            <table>
                <tr>
                    <td>SubTotal</td>
                    <td>2,048.00/-</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>45.52/-</td>
                </tr>
                <tr>
                    <td>Total Ammount Payable</td>
                    <td>2,093.52/-</td>
                </tr>
            </table>
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