<?php

/*use PHPMailer\PHPMailer\PHPMailer;*/
session_start();
$conn=mysqli_connect("localhost","root","","bikerentalsk");
$uid=$_SESSION['id'];
$uname=$_SESSION['fname'];
$bid=$_GET['b_id'];

/*echo $uname;
require_once "includes/PHPMailer.php";
require_once "includes/SMTP.php";
require_once "includes/Exception.php";
$mailob=new PHPMailer();
//SMTP
$mailob->isSMTP();
$mailob->Host="smtp.gmail.com";
$mailob->SMTPAuth=true;
$mailob->Username="booking.BikeAndRoll@gmail.com";
$mailob->Password="bike&roll";
$mail->Port=465;
$mail->SMTPSecure="ssl";

//email
//$mailob->isSMTP();
$mailob->setFrom("booking.BikeAndRoll@gmail.com","Bike & Roll");
$mailob->addAddress('prajwalrambr@gmail.com','prajwal ram');
$mailob->Subject="RIDE yo";
$mailob->Body="You are blessed";

if($mailob->send())
echo "mail sent";
else
echo "booo".$mailob->ErrorInfo;*/
   
  
   $query="INSERT INTO bookings (uid,bid,uname) VALUES ($uid,$bid,'$uname')";
    $sql=mysqli_query($conn,$query);
   
    if($sql==TRUE){
        echo '<script language="javascript">';
            echo 'alert("Booked ride successfully")';
            echo '</script>';
            echo "<script> window.location.assign('book_ride.php'); </script>";
    
            
    }
    else{
      
        echo '<script language="javascript">';
            echo 'alert("failed to book your ride, please try again!!")';
            
            echo '</script>';
            echo "<script> window.location.assign('book_ride.php');</script>";
            
    }

    

?>