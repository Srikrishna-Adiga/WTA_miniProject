<?php
session_start();
$conn=mysqli_connect("localhost","root","","bikerentalsk");
if(isset($_POST['login'])){
    $name=$_POST['em'];
    $pwd=$_POST['pw'];
    $query="SELECT * from users where Email='$name'";
    $sql=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($sql);
    echo $row['Password'];
    if($pwd=='Bike&Roll'){
        $_SESSION['id']=$row['id'];
        $_SESSION['fname']=$row['FullName'];
        $_SESSION['login']=true;
        echo '<script language="javascript">';
        echo 'alert("Login successful")';
        echo '</script>';
        echo "<script> window.location.assign('admin_home.php'); </script>";

    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Incorrrect password")';
        echo '</script>';
        echo "<script> window.location.assign('index.html'); </script>";

    }
}
?>