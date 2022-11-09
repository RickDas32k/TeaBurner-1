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
    <section id="blog-home" class="pt-1 mt-1 container">
        <h2 class="font-weight-bold pt-1">Blogs <i class="fab fa-hive"></i></h2>
        <hr>
    </section>

    <section id="blog-container" class="container pt-3">
        <div class="row">
            <div class="post col-lg-6 col-md-6 col-12 pb-5">
                <div class="post-img">
                    <img src="blog/blog-14.jpg" width="100%">
                </div>
                <h4 class="text-center font-weight-normal pt-2">Honeybush Tea</h4>
                <h6 class="text-center">Da Hong Pao or Red Robe is highly oxidize that gives it a rich, earthy flavor. Feng Huang Dan Cong offers sweet and more floral flavor.....</h6>
                <p class="text-center">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5">
                <div class="post-img">
                    <img class="img-fluid" src="blog/blog-11.jpg" width="100%" ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Biluochun Tea</h4>
                <h6 class="text-center ">Biluochun is a Chinese-style green tea with a strong aroma and fruity taste.
                    Japanese tea variety with a strong, savory flavor similar to seaweed.....</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="blog/blog-13.jpg " width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Lemon Tea</h4>
                <h6 class="text-center ">Lemon tea is a low-sugar, low-calorie way to add a range of vitamins and minerals to your diet. Grating lemon zest into your tea also adds.....</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="blog/blog-12.jpg " width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Black Tea</h4>
                <h6 class="text-center ">Black tea is rich in antioxidants that may provide benefits including improved heart and gut health, lowered “bad” LDL cholesterol, .....</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="C:\Users\Shirsha Dhar\Downloads\onlyme\Duchess-of-Bedford-raspberry-rose-black-tea-1.jpg" width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Bedford Tea</h4>
                <h6 class="text-center ">Bedford tea is the classic tea suitable for any consumption.The fresh crisp taste of Bedford tea is a true characteristic of the high grown tea from the Nilgiris.</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="C:\Users\Shirsha Dhar\Downloads\onlyme\images.jpg" width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Marlimund Premium  Tea</h4>
                <h6 class="text-center ">Murlimund Premium Tea is a speciality tea from Gudalur region of the Nilgiris.Made with tender tea leaves,it has a mild aroma with fine briskness.</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="C:\Users\Shirsha Dhar\Downloads\onlyme\MOUNTAIN-ROSE-SET-OF-4_1000x_fa5707a8-e96a-43be-a6a6-399920663d8c_1024x.webp" width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Mountain Rose Tea</h4>
                <h6 class="text-center ">Mountain Rose tea is made from the blends of tea sourced from the Nilgiris.It is rich, strong and full of aroma.</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="C:\Users\Shirsha Dhar\Downloads\onlyme\EibxN2FUcAEDKNC.jpg" width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Mountain Rose Dust Tea</h4>
                <h6 class="text-center ">Mountain Rose Dust Tea is a soothing blend of strong CTC and high grown long leaves.Metoculously blended to bring an unique combination of refreshing test and rich aroma.</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="C:\Users\Shirsha Dhar\Downloads\onlyme\250g-blue-mont-tea-1000x1000.webp" width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Blue Mont Premium Tea</h4>
                <h6 class="text-center ">Blue Mont Premium Dust Tea is a specially made premium tea with a signature taste and aroma.</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-6 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="C:\Users\Shirsha Dhar\Downloads\onlyme\Ooty-Tea_2-1.jpg" width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Ooty Tea Gold</h4>
                <h6 class="text-center ">Ooty Tea Gold is one of the finest blends from INDCOSERVE.It is known for its strong and distinct aroma.</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="col-lg-12 col-md-12 col-12 pb-5 ">
                <div class="post-img ">
                    <video width="100% " autoplay loop muted>
                        <source src="images/banner.mp4 " type="video/mp4 ">
                        <source src="images/banner.ogg " type="video/ogg ">
                    </video>
                </div>
            </div>
            <div class="post col-lg-4 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="blog/blog-6.jpg " width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Matcha Tea</h4>
                <h6 class="text-center ">Matcha is high in a catechin called EGCG (epigallocatechin gallate), which is believed to have cancer-fighting effects on the body. Studies have linked green tea to a variety of health benefits, like helping to prevent heart disease,</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-4 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="blog/blog-16.jpg " width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">Pu-erh Tea</h4>
                <h6 class="text-center ">Young raw Pu-erh is aged for less than 2 or 3 years. It has the same grassy and fresh flavor and characteristics of green tea. Aged Raw Pu-erh has a darker color with an earthy, woodsy, and fruity flavor.</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
            <div class="post col-lg-4 col-md-6 col-12 pb-5 ">
                <div class="post-img ">
                    <img class="img-fluid " src="blog/blog-20.webp " width="100% ">
                </div>
                <h4 class="text-center font-weight-normal pt-2 ">White Tea</h4>
                <h6 class="text-center ">Bai Hao Yin Zhen or Silver Needle has a sweet flavor and floral scent.
                    Bai Mu Dan or White Peony has a mildly stronger flavor than Silver Needle because of young leaves and buds.
                    Darjeeling White Tea is from India..</h6>
                <p class="text-center ">Jul 18, 2022</p>
            </div>
        </div>
    </section>
    
<!--------------footer------------>

<div class="footer ">
    <div class="container-2 ">
        <div class="row ">
            <div class="footer-col-1 ">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios.</p>
                <div class="app-logo ">
                    <img src="images/play-store.png ">
                    <img src="images/app-store.png ">
                </div>
            </div>
            <div class="footer-col-2 ">
                <img src="Logo2.png ">
                <p>LOVE EVERY MOMENTS WITH TEA...</p>
            </div>
            <div class="footer-col-4 ">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href=" "><i class="fab fa-facebook "></i> Facebook</a></li>
                    <li><a href=" "><i class="fab fa-twitter "></i> Twitter</a></li>
                    <li><a href=" "><i class="fab fa-instagram "></i> Instagram</a></li>
                    <li><a href=" "><i class="fab fa-youtube "></i> YouTube</a></li>
                    <li><a href=" "><i class="fab fa-linkedin "></i> LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright ">Made With <i class="fas fa-heart "> by Team- Tech Mates</i></p>
    </div>
</div>

<!--------------------------------------js for toggle menu------------------------->

<script>
    var MenuItems = document.getElementById("MenuItems ");

    MenuItems.style.maxHeight = "0px ";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px ")
            {
                MenuItems.style.maxHeight = "200px ";
            }
        else
            {
                MenuItems.style.maxHeight = "0px ";
            }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
</body>
</html>