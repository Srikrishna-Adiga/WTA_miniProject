<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Bike and Roll:Style Over Speed!!!</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
<link rel="stylesheet" type="text/css" href="vendor/css/normalize.css">
<link rel="stylesheet" type="text/css" href="vendor/css/Grid.css">
<link rel="stylesheet" type="text/css" href="vendor/css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/queries.css">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<script type="text/javascript" src="assets/js/jquery.js"></script>
</head>

<body>
    <header>
        <nav>
           <div class="row">
            <img src="assets/img/logo.png" alt="Bike & Roll logo" class="logo">
               <ul class="main-nav">
                <li><a href="#features">How it works</a></li>
                <li><a href="#reviews">Customer Reviews</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="register.html">Sign up</a></li>
               </ul>
            </div>
        </nav>
        <div class="textbox">
           <h1>Half the wheels, twice the fun.<br> The safe way is the right way.</h1>
            <a class="btn btn-full" href="book_ride.php">Book a Ride</a>
            <a class="btn btn-ghost" href="login.html">Log In</a>
            
    </header>

    <button onclick="topFunction()" id="topBtn" title="Go to top">^</button>

    <section id="features" class="section-features">
         <div class="row">
             <h2>Find the best bike for you.</h2>
             <p class="long-copy">
             You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! No waste of time during your holidays to find a rental point on the spot! No language barrier, thanks to our multilingual team! At the same price you would pay on the spot! We have best bikes with best deals
             </p>
            </div>
            <div class="row">
                <div class="col span-1-of-3 box">
                    <i class="ion-ios-infinite-outline icon-big"></i>
                    <h3>Up to 365 days/year</h3>
                    <p>
                    Never buy a bike again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                    </p>
                </div>
                <div class="col span-1-of-3 box">
                    <i class="ion-ios-stopwatch-outline icon-big"></i>
                    <h3>Ride in 20 minutes</h3>
                    <p>
                    You're only twenty minutes away from your ride and super fast ride delivered right to your home. We work with the dealers in each town to ensure that you're 100% happy.
                    </p>
                </div>
                <div class="col span-1-of-3 box">
                    <i class="ion-ios-cart-outline icon-big"></i>
                    <h3>Order anything</h3>
                    <p>
                   We don't limit your creativity, which means you can order whatever you feel like. You can choose from our collection containing over 100 bikes. It's up to you!
                    </p>
                </div>
        </div>
    </section>

    <section id="reviews" class="section-testimonials">
            <div class="row">
               <h2> Our customers can't live without us</h2>
            </div>
        <?php
            $tid=1;
            $sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid";
            $query = $dbh -> prepare($sql);
            $query->bindParam(':tid',$tid, PDO::PARAM_STR);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount() > 0)
            {
                ?><div class="row">
                <?php
                foreach($results as $result)
                {  
                    ?>
                    <div class="col span-1-of-3">
                    <blockquote>
                        <?php echo htmlentities($result->Testimonial);?>
                        <cite> <img src="assets/img/customer.png" alt="" /><?php echo htmlentities($result->FullName);?></cite>
                    </blockquote>
                    </div>
                <?php }?>
                </div>
                <?php }?>  
    </section>

    <footer id="myfooter">
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="aboutus.html">About us</a></li>
                       
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copywright &copy; 2019 by Bike & Roll. All rights reserved.
                </p>
            </div>
    </footer>
    <script type="text/javascript" src="assets/js/index.js"></script>
   
    
</body>
</html>
        
