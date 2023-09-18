<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website to buy cars bikes and motorparts</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">


    
</head>
<body>


<!--header section starts-->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="home.php" class="logo"> <span>max</span>Motors</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="cars.php">cars</a>
        <a href="bikes.php">bikes</a>
        <a href="motorparts.php">motorparts</a>
        <a href="review.php">reviews</a>
        <a href="contact.php">contact</a>
    </nav> 

    <div class="hicons">
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
    </div>

    <div id="login-btn">
        <a href="logout.php" button class="btn">logout <?php echo $_SESSION['name']; ?></a>
        <i class="far fa-user"></i>
    </div>

</header>

<!--header section ends-->
<h1 class="heading"> <span>cars</span> cars </h1>
<section class="cars" id="cars">

    <h1 class="heading"> <span>Newly </span> Launched</h1>

    <div class="swiper cars-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/bike1.png" alt="">
                <div class="content">
                    <h3>Yamaha YZF R1</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">₹19,00,000/-</div>
                    <a href="spec/yzfr1.php" class="btn">View More</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/bike2.png" alt="">
                <div class="content">
                    <h3>Hero Passion Pro</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">₹73,452/-</div>
                    <a href="spec/passionpro.php" class="btn">View More</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/bike3.png" alt="">
                <div class="content">
                    <h3>Hero Karizma ZMR</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">₹1,10,506/-</div>
                    <a href="spec/karizma.php" class="btn">View More</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/bike4.png" alt="">
                <div class="content">
                    <h3>Duke 125</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">₹1,41,000/-</div>
                    <a href="spec/duke125.php" class="btn">View More</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper cars-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="image/bike5.png" alt="">
                 <div class="content">
                     <h3>Honda Hunk</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">₹74,968/-</div>
                     <a href="spec/hunk.php" class="btn">View More</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/bike6.png" alt="">
                 <div class="content">
                     <h3>KTM 1190 R8</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">₹20,00,000/-</div>
                     <a href="spec/ktm.php" class="btn">View More</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/bike7.png" alt="">
                 <div class="content">
                     <h3>Hero Splendor 2022</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">₹60,000</div>
                     <a href="spec/splendor.php" class="btn">View More</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/bike8.png" alt="">
                 <div class="content">
                     <h3>Kawasaki Ninja H2R</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">₹79,90,000</div>
                     <a href="spec/ninja.php" class="btn">View More</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<!--footer starts-->
<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i>enquiry.maxcars@gmail.com</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400001 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

</section>

<!--footer section ends-->







<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- custom js link -->
<script src="vehicles.js"></script>
<script src="script.js"></script>
    
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>