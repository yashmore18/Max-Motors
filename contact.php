<?php  
if(isset($_POST['submit'])){
    $namee = $_POST['namee'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];

    $sname= "localhost";
    $unmae= "root";
    $password = "";
    $db_name = "test_db";

    $conn = mysqli_connect($sname,$unmae,$password,$db_name);

    $sql = "INSERT INTO feedback(namee,email,mobile,msg) values ('$namee','$email','$mobile','$msg')";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "<script>alert('Message sent successfully');
        </script>";
    }
}
?>
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

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1632137920043!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="" method="POST">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box" name="namee" >
            <input type="email" placeholder="your email" class="box" name="email">
            <input type="tel" placeholder="subject" class="box" name="mobile">
            <textarea placeholder="your message" class="box" cols="30" rows="10" name="msg"></textarea>
            <input type="submit" value="send message" class="btn" name="submit"> 
        </form>

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
    
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>