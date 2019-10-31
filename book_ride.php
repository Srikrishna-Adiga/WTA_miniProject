<?php
    include_once('database.php');
    if(!isset($_SESSION['login'])){
        header('location:login.html');
    }
    $user_id=$_SESSION['id'];
    $name=$_SESSION['fname'];
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/register.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="vendor/css/ionicons.min.css">
        
        <title>Book your ride!! - Bike & Roll</title>
    </head>
    <body>
        <header style=" height: 25vh;background: #ff9a3b;
        background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
        background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
        background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
        background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);">
        <div class="row">
            <div class="col-lg-9">
                <img src="assets/img/logo_black.png" alt="Bike & Roll" style="height: 100px;width: auto;float: left;margin-top: 20px;margin-left: 20px;"> 
            </div>
            <div class="col-lg-3">
            <a style="float:right; padding:10px; margin-bottom:10px;" class="btn btn-ghost" href="index.php">Log Out</a>
            
            <h4 style="float:right;"><?php echo $name ?></h4>
                <img src="assets/img/customer.png" alt="user" style="height: 30px;width: auto;float: right;">
                
               
            </div>

        </header>
        <section style=" background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url(assets/img/background/Book_a_ride_background.jpg);
        background-size: cover;
        background-position: center;
        height: 100vh;
        background-attachment: fixed;">
        <div class="row staff-grid-row" id="empCards" >
            <div class="col-lg-3">
                <div class="profile-widget" style="background-color: azure;">
                        
                    <div class="profile-img">
                            
                        <a href="#" class="avatar"><img id="popBtn" src="assets/img/vehicles/ktm.png" alt="KTM"></a>
                         
                        </div>
                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">KTM Duke</a></h4>
                
                </div>
                </div>
                <div id="myModal" class="modal" >

                        <!-- Modal content -->
                        <div class="modal-content">
                                <span class="close">&times;</span>
                                <center><h2> KTM Duke </h2></center>
                                <div class="row">
                                <div class="col-lg-6" >
                                  <img style="width: 500px; height: 300px;" src="assets/img/vehicles/ktm.png">
                                  <center><label style="font-size: 30px;"><strong>&#8377; 10 per KM</strong></label></center>
                                </div>
                                <div class="col-lg-6"  >
                                      <p>Powering the KTM 390 Duke is a 390cc single-cylinder engine. The liquid-cooled motor delivers 25PS at 10,000rpm and 19.2Nm of peak torque arrives at 8,000rpm. </p>
                                      <br><label>From:</label>
                                      <select id="fromPlace"style="outline: none" class="popupOpt" placeholder="Select city" >
                                            <option value="Banglore" selected="selected">Bangalore</option>
                                                <option value="Mysore">Mysore</option>
                                                <option value="Mangalore">Mangalore</option>
                                                <option value="Hubli">Hubli</option>
                                                <option value="Chikkamagalur">Chikkamagalur</option>
                                                <option value="Hassan">Hassan</option>
                                                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <label>To:</label>
                                      <select id="toPlace" style="outline: none" class="popupOpt" >
                                            <option value="Banglore">Bangalore</option>
                                                <option value="Mysore" selected="selected">Mysore</option>
                                                <option value="Mangalore">Mangalore</option>
                                                <option value="Hubli">Hubli</option>
                                                <option value="Chikkamagalur">Chikkamagalur</option>
                                                <option value="Hassan">Hassan</option>
                                                </select>
                                        <br><br><button id="1" style="background: #ff9a3b;
                                        background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                        background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                        background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                                        background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
                                    border: 0;
                                    border-radius: 4px;
                                    display: block;
                                    font-size: 22px;
                                    padding: 10px 26px;
                                    width: 60%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button><label style="width:30%;float: right;margin-top: -40px;margin-right: 30px;">&#8377;</label><label style="width:30%;float:right;margin-top: -40px;"id="price"></label>
                                     
                                     <br><br><button id="bookRide" style="background: #ff9a3b;
                                     background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                     background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                     background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                                     background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
                                 border: 0;
                                 border-radius: 4px;
                                 display: block;
                                 font-size: 22px;
                                 padding: 10px 26px;
                                 width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button>
                                </div>
                              </div>
                          </div>
                      
                      </div>
            
            
                <div class="col-lg-3">
                    <div class="profile-widget" style="background-color: azure;">
                        <div class="profile-img">
                            <a href="#" class="avatar"><img src="assets/img/vehicles/bullet.png" alt="bullet"></a>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Royal Enfield</a></h4>
                    </div>
                </div>
                <div class="col-lg-3">
                        <div class="profile-widget" style="background-color: azure;">
                            <div class="profile-img">
                                <a href="#" class="avatar"><img src="assets/img/vehicles/gixxer.png" alt="gixxer"></a>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Suzuki Gixxer</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3">
                            <div class="profile-widget" style="background-color: azure;">
                                <div class="profile-img">
                                    <a href="#" class="avatar"><img src="assets/img/vehicles/pulsar.png" alt="bike"></a>
                                </div>
                                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Bajaj Pulsar 220</a></h4>
                                
                            </div>
                        </div>
                        <div class="col-lg-3">
                                <div class="profile-widget" style="background-color: azure;">
                                    <div class="profile-img">
                                        <a href="#" class="avatar"><img src="assets/img/vehicles/R.png" alt="bike"></a>
                                    </div>
                                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Suzuki GSX</a></h4>
                                    
                                </div>
                        </div>
                        <div class="col-lg-3">
                                <div class="profile-widget" style="background-color: azure;">
                                    <div class="profile-img">
                                        <a href="#" class="avatar"><img src="assets/img/vehicles/fz.png" alt="bike"></a>
                                    </div>
                                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Yamaha FZ</a></h4>
                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                                    <div class="profile-widget" style="background-color: azure;">
                                        <div class="profile-img">
                                            <a href="#" class="avatar"><img src="assets/img/vehicles/passion.png" alt="bike"></a>
                                        </div>
                                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Honda Passion</a></h4>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="profile-widget" style="background-color: azure;">
                                            <div class="profile-img">
                                                <a href="#" class="avatar"><img src="assets/img/vehicles/dio.png" alt="bike"></a>
                                            </div>
                                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Honda Dio</a></h4>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                            <div class="profile-widget" style="background-color: azure;">
                                                <div class="profile-img">
                                                    <a href="#" class="avatar"><img src="assets/img/vehicles/r15.png" alt="bike"></a>
                                                </div>
                                                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Yamaha R15</a></h4>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                                <div class="profile-widget" style="background-color: azure;">
                                                    <div class="profile-img">
                                                        <a href="#" class="avatar"><img src="assets/img/vehicles/vespa.png" alt="bike"></a>
                                                    </div>
                                                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Vespa</a></h4>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                    <div class="profile-widget" style="background-color: azure;">
                                                        <div class="profile-img">
                                                            <a href="#" class="avatar"><img src="assets/img/vehicles/activa.png" alt="bike"></a>
                                                        </div>
                                                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Honda Activa</a></h4>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                        <div class="profile-widget" style="background-color: azure;">
                                                            <div class="profile-img">
                                                                <a href="#" class="avatar"><img src="assets/img/vehicles/access.png" alt="bike"></a>
                                                            </div>
                                                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Access 125</a></h4>
                                                            
                                                        </div>
                                                    </div>
                                                    


                </div>
            </section>
                <footer id="myfooter">
                        <div class="row">
                            <div class="col span-1-of-2">
                                <ul class="footer-nav">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">ios App</a></li>
                                    <li><a href="#">Android App</a></li>
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
    
     <script src="assets/js/index.js"></script>
    </body>
</html>