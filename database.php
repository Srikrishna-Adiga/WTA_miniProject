<?php
session_start();
$conn=mysqli_connect("localhost","root","","bikerentalsk");
if(isset($_POST['pop'])){
$name=$_POST['fN'];
$phno=$_POST['ph'];
$email=$_POST['em'];
$pwd=$_POST['pw'];
$rque="SELECT count(id) from users where Email='$email'";
$slr=mysqli_query($conn,$rque);
$rty=mysqli_fetch_row($slr);
if($rty[0]>=1){
    echo '<script language="javascript">';
    echo 'alert("email already exists!!!")';
    echo '</script>';
    echo "<script> window.location.assign('login.html'); </script>";
}
else{

$hash=password_hash($pwd,PASSWORD_DEFAULT);
$query="INSERT INTO users(id, FullName, PhNo, Email, Password) VALUES (0,'$name',$phno,'$email','$hash')";
$sql=mysqli_query($conn,$query);
if($sql==TRUE){
    echo '<script language="javascript">';
        echo 'alert("Details entered successfully")';
        echo '</script>';
        echo "<script> window.location.assign('login.html'); </script>";

        
}
else{
    echo '<script language="javascript">';
        echo 'alert("failed to add details")';
        echo '</script>';
        echo "<script> window.location.assign('register.html');</script>";
        
}
}
}
if(isset($_POST['login'])){
    $name=$_POST['em'];
    $pwd=$_POST['pw'];
    $query="SELECT * from users where Email='$name'";
    $sql=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($sql);
    if(password_verify($pwd,$row['Password'])){
        $_SESSION['id']=$row['id'];
        $_SESSION['fname']=$row['FullName'];
        $_SESSION['login']=true;
        echo '<script language="javascript">';
        echo 'alert("Login successful")';
        echo '</script>';
        echo "<script> window.location.assign('book_ride.php'); </script>";

    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Incorrrect password")';
        echo '</script>';
        echo "<script> window.location.assign('login.html'); </script>";

    }
}

?>