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
    <title>Product Card/Page</title>

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

    <a href="home.php" class="logo"> <span>max</span>Motors </a>

    <nav class="navbar">
        <a href="/project-website/home.php">home</a>
        <a href="/project-website/cars.php">cars</a>
        <a href="/project-website/bikes.php">bikes</a>
        <a href="/project-website/motorparts.php">motorparts</a>
        <a href="#reviews">reviews</a>
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
            <img src = "cars/sclass5.png" alt = "shoe image">
            <img src = "cars/sclass2.webp" alt = "shoe image">
            <img src = "cars/sclass3.webp" alt = "shoe image">
            <img src = "cars/sclass4.webp" alt = "shoe image">
          </div>
        </div>
        <div class = "img-select">
          <div class = "img-item">
            <a href = "#" data-id = "1">
              <img src = "cars/sclass1.webp" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "2">
              <img src = "cars/sclass2.webp" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "3">
              <img src = "cars/sclass3.webp" alt = "shoe image">
            </a>
          </div>
          <div class = "img-item">
            <a href = "#" data-id = "4">
              <img src = "cars/sclass4.webp" alt = "shoe image">
            </a>
          </div>
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h2 class = "product-title">Mercedes Benz S-Class</h2>
        <div class = "product-rating">
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "Price">Price: <span>₹ 2.33 Cr</span></p>
        </div>

        <div class = "product-detail">
          <h2>Overview of the car: </h2>
          <p>The Mercedes-Benz S-Class is a luxury sedan produced by the German automaker Mercedes-Benz. The S-Class is known for its advanced technology, high level of comfort, and powerful performance.
            <br>The S-Class is available in both rear-wheel drive and all-wheel drive configurations.
            The S-Class is equipped with advanced safety features, including automatic emergency braking, lane departure warning, and adaptive cruise control.
            .Overall, the Mercedes S-Class is a top-of-the-line luxury sedan that combines cutting-edge technology, powerful performance, and high levels of comfort and luxury.
          </p>
          <p></p>
          <p></p>
          <h2>More Details</h2>
          <ul>
            <li>Variant: <span>Petrol</span></li>
            <li>Transmission: <span>Manual</span></li>
            <li>Category: <span>Sedan</span></li>
            <li>Mileage: <span>17.40km/l</span></li>
            <li>Engine: <span>2500 cc</span></li>
            <li>Max Power: <span>118@5500</span></li>
            <li>Max Torque: <span>170@1570</span></li>
            <li>Gearbox: <span>6 speed</span></li>
            <li>Boot: <span>350 Ltrs </span></li>
          </ul>
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
