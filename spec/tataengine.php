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
    <title>website to buy cars,bikes and motorparts</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">


    
</head>
<body>


<!--header section starts-->

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="home.php" class="logo"> <span>max</span>motors </a>

    <nav class="navbar">
        <a href="/project-website/home.php">home</a>
        <a href="/project-website/cars.php">cars</a>
        <a href="/project-website/bikes.php">bikes</a>
        <a href="/project-website/motorparts.php">motorparts</a>
        <a href="/project-website/review.php">reviews</a>
        <a href="/project-website/contact.php">contact</a>
    </nav> 

    <div class="hicons">
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
    </div>

    <div id="login-btn">
        <a href="/project-website/logout.php" button class="btn">logout <?php echo $_SESSION['name']; ?></a>
        <i class="far fa-user"></i>
    </div>

</header>

<!--header section ends-->

<section class="spec" id="spec">
<div class = "card-wrapper">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            <img src = "cars/part3.png" alt = "shoe image">
          </div>
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title">Tata Nexon Engine</h2>
        <div class = "product-rating">
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "Price">Price: <span>₹ 2,75,000/-</span></p>
        </div>

        <div class = "product-detail">
          <h2>Product overview: </h2>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
          
        </div>

        <div class = "purchase-info">
          
          <a href="gateway.php" button type = "button" class = "btn">
            Confirm Purchase <i class = "fas fa-shopping-cart"></i>
          </a>
          <button type = "button" class = "btn">Compare</button>
        </div>

        <div class = "social-links">
          <p>Share At: </p>
          <a href = "#">
            <i class = "fab fa-facebook-f"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-twitter"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-instagram"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-whatsapp"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>
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
<script src="script.js"></script>
<script src="spec.js"></script>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
