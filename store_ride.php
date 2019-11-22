<?php
session_start();
$conn=mysqli_connect("localhost","root","","bikerentalsk");
$uid=$_SESSION['id'];
$uname=$_SESSION['fname'];
    $query="INSERT INTO rides (id, name) VALUES ($uid,'$uname')";
    $sql=mysqli_query($conn,$query);
    if($sql==TRUE){
        echo '<script language="javascript">';
            echo 'alert("Booked ride successfully")';
            echo '</script>';
            echo "<script> window.location.assign('book_ride.php'); </script>";
    
            
    }
    else{
        echo '<script language="javascript">';
            echo 'alert("failed to add details")';
            echo '</script>';
            echo "<script> window.location.assign('book_ride.php');</script>";
            
    }
?>