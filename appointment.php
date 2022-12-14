<?php

require_once __DIR__ .'/../db/connection.php';

$object = connection();

if (isset($_POST["book_submit"])) {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    database_book_insert($name, $number, $email, $date, $time);
    header("Location: bookredirect.php");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" href="../image/hlogo.png">
    <link rel="stylesheet" href="../css/appointment.css">
    <title>services</title>
     
    
</head>
 
<body>
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Med<span>Centre</span> </a>
    
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="#doctors">doctors</a>
            <a href="#book">book</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
    </header>
    
    <!-- header section ends -->

    <!-- booking section starts   -->

<section class="book" id="book">
    <div class="padding"> 
    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="../image/book-img.svg" alt="">
        </div>

        <form action="appointment.php" method="post">
                <h3>book appointment</h3>
                <input type="text" placeholder="your name" class="box" required name="name">
                <input type="number" placeholder="your number" class="box" required name="number">
                <input type="email" placeholder="your email" class="box" required name="email">
                <input type="date" class="box" required name="date">
                <input type="time" class="box" required name="time">
                <input type="submit" value="book now" class="btn" name="book_submit">
            </form>

    </div>
</div>

</section>

<!-- booking section ends -->
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> anasbhai@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>Banha-Medical-Team</span> | all rights reserved </div>

</section>

<!-- footer section ends -->
</body>
</html>
