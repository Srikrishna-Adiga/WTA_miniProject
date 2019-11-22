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
            <div class="col-lg-8">
                <img src="assets/img/logo_black.png" alt="Bike & Roll" style="height: 100px;width: auto;float: left;margin-top: 20px;margin-left: 20px;"> 
            </div>
            <div class="col-lg-2">
                        <img src="assets/img/customer.png" alt="user" style="height: 60px;width: auto;float:right;margin-top:30px;">
            </div>
            <div class="col-lg-2"><br>
                <h4 style="float:right;"><?php echo $name ?></h4>
                <a   href="logout.php"><button class="btn btn-default btn-md" type="button" style="border:1px solid black; width: auto; font-size: 18px; color:black"><i class="fa fa-sign-out"></i></button></a>
            </div>
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
                            
                        <div class="avatar"><img id="popBtn1" src="assets/img/vehicles/ktm.png" onclick="popit(this.id)" alt="KTM"></div>
                         
                    </div>
                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">KTM Duke</a></h4>
                
                </div>
            </div>
            <div id="myModal1" class="modal" >

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
                                        <br><br><center><button id="1" style="background: #ff9a3b;
                                        background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                        background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                        background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                                        background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
                                    border: 0;
                                    border-radius: 4px;
                                    display: block;
                                    font-size: 22px;
                                    padding: 10px 26px;
                                    width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
                                     
                                     <br><br><a href="send_mail.php?b_id=1"><button id="bookRide" style="background: #ff9a3b;
                                     background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                     background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                     background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                                     background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
                                 border: 0;
                                 border-radius: 4px;
                                 display: block;
                                 font-size: 22px;
                                 padding: 10px 26px;
                                 width: 80%; margin-left:40px;" type="submit" name="bookRide">Bike & Roll</button></a>
                                </div>
                              </div>
                          </div>
                      
                      </div>
            
            
                <div class="col-lg-3">
                    <div class="profile-widget" style="background-color: azure;">
                        <div class="profile-img">
                            <div class="avatar"><img id="popBtn2" src="assets/img/vehicles/bullet.png" onclick="popit(this.id)" alt="bullet"></div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Royal Enfield</a></h4>
                    </div>
                </div>
                <div id="myModal2" class="modal" >

                        <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close" >&times;</span>
                                <center><h2> Royal Enfield Classic 350 </h2></center>
                                <div class="row">
                                <div class="col-lg-6" >
                                  <img style="width: 500px; height: 300px;" src="assets/img/vehicles/bullet.png">
                                  <center><label style="font-size: 30px;"><strong>&#8377; 10 per KM</strong></label></center>
                                </div>
                                <div class="col-lg-6"  >
                                      <p>It's powered by a 346cc single-cylinder air-cooled engine which churns out 20PS at 5250rpm and 28Nm at 4000rpm. A 5-speed gearbox transmits power to the rear wheel via a chain drive.</p>
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
                                        <br><br><center><button id="1" style="background: #ff9a3b;
                                        background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                        background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                        background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                                        background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
                                    border: 0;
                                    border-radius: 4px;
                                    display: block;
                                    font-size: 22px;
                                    padding: 10px 26px;
                                    width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
                                     
                                     <br><br><a href="send_mail.php?b_id=2"><button id="bookRide" style="background: #ff9a3b;
                                     background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                     background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                     background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                                     background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
                                 border: 0;
                                 border-radius: 4px;
                                 display: block;
                                 font-size: 22px;
                                 padding: 10px 26px;
                                 width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
                                </div>
                              </div>
                          </div>
                      
                      </div>
                <div class="col-lg-3">
                    <div class="profile-widget" style="background-color: azure;">
                         <div class="profile-img">
                                 <a href="#" class="avatar"><img id="popBtn3" onclick="popit(this.id)" src="assets/img/vehicles/r15.png" alt="bike"></a>
                         </div>
                         <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Yamaha R15</a></h4>
                     </div>
                </div>
                <div id="myModal3" class="modal" >

                        <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <center><h2> Yamaha R15 </h2></center>
                                <div class="row">
                                <div class="col-lg-6" >
                                  <img style="width: 500px; height: 300px;" src="assets/img/vehicles/r15.png">
                                  <center><label style="font-size: 30px;"><strong>&#8377; 10 per KM</strong></label></center>
                                </div>
                                <div class="col-lg-6"  >
                                      <p>The Yamaha YZF-R15 Version 3.0 is the sportiest motorcycle in the 150cc category.R15 comes with a larger 155cc liquid-cooled engine with Variable Valve Timing (VVT) technology. </p>
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
                                        <br><br><center><button id="1" style="background: #ff9a3b;
                                        background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                        background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                        background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                                        background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
                                    border: 0;
                                    border-radius: 4px;
                                    display: block;
                                    font-size: 22px;
                                    padding: 10px 26px;
                                    width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
                                     
                                     <br><br><a href="send_mail.php?b_id=3"><button id="bookRide" style="background: #ff9a3b;
                                     background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                     background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                                     background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                                     background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
                                 border: 0;
                                 border-radius: 4px;
                                 display: block;
                                 font-size: 22px;
                                 padding: 10px 26px;
                                 width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
                                </div>
                              </div>
                          </div>
                      
                      </div>
                    <div class="col-lg-3">
                            <div class="profile-widget" style="background-color: azure;">
                                <div class="profile-img">
                                    <a href="#" class="avatar"><img id="popBtn4" onclick="popit(this.id)" src="assets/img/vehicles/pulsar.png" alt="bike"></a>
                                </div>
                                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Bajaj Pulsar 220</a></h4>
                                
                            </div>
                        </div>
                        <div id="myModal4" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Bajaj Pulsar 220 </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/pulsar.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 10 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p>Pulsar 220 F employs a dual cradle frame paired with conventional telescopic forks and a twin gas-charged suspension setup at the rear. Braking duties are handled by a 260mm disc brake up front and a 230mm disc at the rear. </p>
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
                <br><br><center><button id="1" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=4"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
  </div>

</div>
                        <div class="col-lg-3">
                        <div class="profile-widget" style="background-color: azure;">
                            <div class="profile-img">
                                <a href="#" class="avatar"><img id="popBtn5" onclick="popit(this.id)" src="assets/img/vehicles/gixxer.png" alt="gixxer"></a>
                            </div>
                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Suzuki Gixxer</a></h4>
                        </div>
                    </div>
                    <div id="myModal5" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Suzuki Gixxer </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/gixxer.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 7 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p> Gixxer employs a BS6-ready 155cc, fuel-injected engine that puts out power figures identical to the 2019 Gixxer SF - 14.1PS at 8,000rpm and 14Nm at 6,000rpm -, mated to a 5-speed transmission. </p>
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
                <br><br><center><button id="2" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=5"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
  </div>

</div>
                       
                       
                        <div class="col-lg-3">
                                <div class="profile-widget" style="background-color: azure;">
                                    <div class="profile-img">
                                        <a href="#" class="avatar"><img id="popBtn6" onclick="popit(this.id)" src="assets/img/vehicles/R.png" alt="bike"></a>
                                    </div>
                                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Suzuki GSX</a></h4>
                                    
                                </div>
                        </div>
                        <div id="myModal6" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Suzuki GSX </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/R.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 7 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p> Suzuki GSX employs a dual cradle frame paired with conventional telescopic forks and a twin gas-charged suspension setup at the rear. Braking duties are handled by a 260mm disc brake up front and a 230mm disc at the rear.  </p>
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
                <br><br><center><button id="2" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=6"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
  </div>

</div>
                        <div class="col-lg-3">
                                <div class="profile-widget" style="background-color: azure;">
                                    <div class="profile-img">
                                        <a href="#" class="avatar"><img id="popBtn7" onclick="popit(this.id)" src="assets/img/vehicles/fz.png" alt="bike"></a>
                                    </div>
                                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Yamaha FZ</a></h4>
                                    
                                </div>
                            </div>
                            <div id="myModal7" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Yahama FZ </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/fz.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 7 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p> The third-generation Yamaha FZ-Fi gets a completely new bodywork and now has a premium as well as aggressive design. It gets a new headlamp, side panel, beefier tank extensions, engine cowl, tail section and exhaust. </p>
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
                <br><br><center><button id="2" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=7"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
  </div>

</div>
                            <div class="col-lg-3">
                                    <div class="profile-widget" style="background-color: azure;">
                                        <div class="profile-img">
                                            <a href="#" class="avatar"><img id="popBtn8" onclick="popit(this.id)" src="assets/img/vehicles/unicorn.png" alt="bike"></a>
                                        </div>
                                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Honda Unicorn</a></h4>
                                        
                                    </div>
                                </div>
                                <div id="myModal8" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Honda Unicorn </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/unicorn.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 7 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p>One of the first commuter motorcycles to sport a monoshock, the Unicorn has the best-in-class comfort and bulletproof build quality. With a highly refined, fuel efficient engine, no-frills design and comfortable ergonomics, the Unicorn ticks all the right boxes for the ideal commuter. </p>
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
                <br><br><center><button id="2" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=8"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
  </div>

</div>
                                <div class="col-lg-3">
                                        <div class="profile-widget" style="background-color: azure;">
                                            <div class="profile-img">
                                                <a href="#" class="avatar"><img  id="popBtn9" onclick="popit(this.id)" src="assets/img/vehicles/dio.png" alt="bike"></a>
                                            </div>
                                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Honda Dio</a></h4>
                                            
                                        </div>
                                    </div>
                                    <div id="myModal9" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Honda Dio </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/dio.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 5 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p>One of the highest selling scooters designed for youngsters, the Honda Dio looks funkier than ever before thanks the updates like the all-LED headlamp, LED DRLs, all-digital instrument console, 4-in-1 key slot and golden rims. </p>
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
                <br><br><center><button id="3" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=9"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
  </div>

</div>
                                    
                                        <div class="col-lg-3">
                                                <div class="profile-widget" style="background-color: azure;">
                                                    <div class="profile-img">
                                                        <a href="#" class="avatar"><img id="popBtn10" onclick="popit(this.id)" src="assets/img/vehicles/vespa.png" alt="bike"></a>
                                                    </div>
                                                    <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Vespa</a></h4>
                                                    
                                                </div>
                                            </div>
                                            <div id="myModal10" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Vespa </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/vespa.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 5 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p>The most iconic scooter company in the world, Vespa, has made its Indian return. The Italian firm has been the most revered name in the world of scooters since its inception in 1940s. </p>
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
                <br><br><center><button id="3" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=10"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
  </div>

</div>
                                            <div class="col-lg-3">
                                                    <div class="profile-widget" style="background-color: azure;">
                                                        <div class="profile-img">
                                                            <a href="#" class="avatar"><img id="popBtn11" onclick="popit(this.id)" src="assets/img/vehicles/activa.png" alt="bike"></a>
                                                        </div>
                                                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Honda Activa</a></h4>
                                                        
                                                    </div>
                                                </div>
                                                <div id="myModal11" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Honda Activa </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/activa.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 5 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p>For the premium Activa 5G, you get a couple of cosmetic updates such as black rims, chrome muffler cover, completely blacked out engine and more. As far as the feature list is concerned, the Activa sports a full-LED headlamp and a semi-digital instrument cluster. </p>
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
                <br><br><center><button id="3" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=11"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
  </div>

</div>
                                                <div class="col-lg-3">
                                                        <div class="profile-widget" style="background-color: azure;">
                                                            <div class="profile-img">
                                                                <a href="#" class="avatar"><img id="popBtn12" onclick="popit(this.id)" src="assets/img/vehicles/access.png" alt="bike"></a>
                                                            </div>
                                                            <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="#">Suzuki Access 125</a></h4>
                                                            
                                                        </div>
                                                    </div>
                                                    <div id="myModal12" class="modal" >

<!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2> Suzuki Access 125 </h2></center>
        <div class="row">
        <div class="col-lg-6" >
          <img style="width: 500px; height: 300px;" src="assets/img/vehicles/access.png">
          <center><label style="font-size: 30px;"><strong>&#8377; 5 per KM</strong></label></center>
        </div>
        <div class="col-lg-6"  >
              <p>The Suzuki Access 125 offers an appealing design paired with features like a front pocket on the apron, a USB charging socket, Suzuki Easy Start System, an analogue-digital instrument console and chrome highlights. </p>
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
                <br><br><center><button id="3" style="background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            border: 0;
            border-radius: 4px;
            display: block;
            font-size: 22px;
            padding: 10px 26px;
            width: 40%;" type="submit" name="login" onclick="getPrice(this.id)">Get Price</button></center>
             
             <br><br><a href="send_mail.php?b_id=12"><button id="bookRide" style="background: #ff9a3b;
             background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
             background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
             background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
         border: 0;
         border-radius: 4px;
         display: block;
         font-size: 22px;
         padding: 10px 26px;
         width: 80%; margin-left:40px;" type="submit" name="bookRide" >Bike & Roll</button></a>
        </div>
      </div>
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