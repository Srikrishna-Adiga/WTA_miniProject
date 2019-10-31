<?php
    if(isset($_SESSION['login'])){
        echo "<script>";
        echo "alert('ride booked yay!!')";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('please login')";
        echo "</script>";
        echo "<script>window.location.assign('login.html')</script>";
    }
?>