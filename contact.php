<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TeaBurner / Contact</title>
    <link rel="javascript" href="javascript.js">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>

    <section class="sub-header">
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
        <h1>CONTACT US</h1>
    </section>

    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5901594586994!2d88.3795411142371!3d22.891593426956526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89167529a8f17%3A0xe94a8f21ca53259a!2sTechno%20India%20Hooghly!5e0!3m2!1sen!2sin!4v1657988328987!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fas fa-home"></i>
                    <span>
                            <h5>Techno India Hooghly
                                Dharampur G. T. Road
                                (Near Khadina More)
                                Chinsurah - 712101</h5>
                            <p>West Bengal, India</p>
                        </span>
                </div>
                <div>
                    <i class="fas fa-phone-alt"></i>
                    <span>
                            <h5>+91 6290381376, +91 6290321157, +91 9163895403</h5>
                            <p>Monday to Saturday, 10AM to 6PM</p>
                        </span>
                </div>
                <div>
                    <i class="fab fa-whatsapp-square"></i>
                    <span>
                            <h5>+91 66290381376, +91 6290321157, +91 9163895403</h5>
                            <p>WhatsApp Only, No Calls</p>
                        </span>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------form---------------------->

    <section class="contact">
        <h2 class="text-center">Enquiry</h2>
        <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your name">
            <input class="form-input" type="Phone No" name="Phone No" id="Phone No" placeholder="Enter Your Phone No">
            <input class="form-input" type="Email" name="email" id="email" placeholder="Enter Your email">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate your concern"></textarea>
            <button class="btn btn-sm btn-dark">Submit</button>
        </div>
    </section>
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