<?php
$conn=mysqli_connect("localhost","root","","bikeRentalSK");
if(isset($_POST['pop'])){
$name=$_POST['fN'];
$phno=$_POST['ph'];
$email=$_POST['em'];
$pwd=$_POST['pw'];
$hash=password_hash($pwd,PASSWORD_DEFAULT);
$query="INSERT INTO users(id, FullName, PhNo, Email, Password) VALUES (0,'$name',$phno,'$email','$hash')";
$sql=mysqli_query($conn,$query);
if($sql==TRUE){
    echo '<script language="javascript">';
        echo 'alert("Details entered successfully");';
        echo 'window.location.replace=register.html;';
        echo '</script>';
        
}
else{
    echo '<script language="javascript">';
        echo 'alert("failed to add details")';
        echo '</script>';
}
}
?>