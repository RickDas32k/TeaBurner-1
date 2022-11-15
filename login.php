<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TeaBurner / Account</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/1aaa63ca71.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="Logo.jpg" width="100px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="AboutUs.php">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="Account.php">Account</a></li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

<!--------------------------account--------------------->

<div class="hero">
    <h1>LOGIN TO YOUR ACCOUNT</h1>
    <div class="signup-box">
        <div class="left-box">
            <form>
                <input type="text" placeholder="Username" required class="input-box">
                <input type="password" placeholder="Password" required class="input-box">
                <button type="submit">LOGIN <span>&#x27f6;</span></button>
            </form>
        </div>
        <div class="right-box">
            <a href="" class="fb-link"><i class="fa-brands fa-facebook-f"></i>Login with Facebook</a>
            <a href="" class="tw-link"><i class="fa-brands fa-twitter"></i>Login with Twitter</a>
            <a href="" class="g-link"><i class="fa-brands fa-google"></i>Login with Google</a>
        </div>
    </div>
    <p class="login-msg">Do Not have an account? <a href="Account.php">Register Now</a></p>
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
                    <li><a href=""><i class="fa-brands fa-square-twitter"></i> Twitter</a></li>
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


<!-----------------------javascript--------------->

<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
    function login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
    }
</script>
</body>
</html>