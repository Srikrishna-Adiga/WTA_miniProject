
<!DOCTYPE html> 
<htmk>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
        <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Admin-Home</title>

        <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="css/register.css">
		<style>
            table {
            font-family: arial, sans-serif;
            font-size:20px;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
                
            }
            h1{
                padding:10px;
                border-radius:5px;
                background: #ff9a3b;
                background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
                background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
                background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);
            }
        </style>
    </head>
    <body>
        <header style=" height: 25vh;background: #ff9a3b;
        background: -moz-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
        background: -webkit-linear-gradient(left, #ff9a3b 0%, #d85205 100%);
        background: -ms-linear-gradient(left,#ff9a3b 0%, #d85205 100%);
        background: linear-gradient(to right,#ff9a3b 0%, #d85205 100%);">
        <div class="row">
                <div class="col-lg-8">
                    <img src="img/logo_black.png" alt="Bike & Roll" style="height: 100px;width: auto;float: left;margin-top: 20px;margin-left: 20px;"> 
                </div>
                <div class="col-lg-2">
                        <img src="img/customer.png" alt="user" style="height: 60px;width: auto;float:right;margin-top:30px;">
                </div>
                <div class="col-lg-2"><br>
                        <h3 style="float:left;margin-top:10px;">Admin</h3><br><br><br>
                        <a href="logout.php"><button class="btn btn-default btn-md" type="button" style="border:1px solid black; width: auto; font-size: 18px; color:black"><i class="fa fa-sign-out"></i></button></a>
                </div>
        </div>

        </header>

        <section>
        <div class="row staff-grid-row" id="empCards" >
                <div class="col-lg-4">
                    <div class="profile-widget" style="background-color: azure;">     
                        <div class="profile-img">
                            <?php
                            $servername="localhost";
                            $username="root";
                            $password="";
                            $dbname="bikerentalsk";
                            $conn=mysqli_connect($servername,$username,$password,$dbname);
	                        if($conn->connect_error){
		                        die("connection failed:".$conn->connect_error);
                            }
                            $sql="SELECT * FROM users";
                            $result=$conn->query($sql);
                            $row=mysqli_num_rows($result);
                            echo "<h1 class='no'>".$row."</h1>";
                            ?>
                           
                        </div>
                        <h1 class="user-name m-t-10 mb-0 text-ellipsis">Users</h1>
                    <?php
	                $servername="localhost";
	                $username="root";
	                $password="";
	                $dbname="bikerentalsk";
	                $a=array();
	                $conn=mysqli_connect($servername,$username,$password,$dbname);
	                if($conn->connect_error){
		            die("connection failed:".$conn->connect_error);
	                }
	                $sql="SELECT id,FullName,Email FROM users";
	                $result=$conn->query($sql);
	                echo "<br>";
	                
	                echo "<table border='2'>";
	                echo "<tr>";
	                echo "<th>ID</th><th>NAME</th><th>EMAIL</th></tr>";
	                if($result->num_rows>0)
	                {
		                while($row=$result->fetch_assoc())
		                {
			            echo "<tr>";
			            echo "<td>".$row["id"]."</td>";
			            echo "<td>".$row["FullName"]."</td>";
			            echo "<td>".$row["Email"]."</td></tr>";
			            array_push($a,$row["id"]);
                        }
	                }
	                else{
		            echo "Table is Empty";
	                }
                    echo "</table>";
                    $conn->close();
	                ?></div>
                </div>
                <div class="col-lg-4">
                    <div class="profile-widget" style="background-color: azure;">    
                        <div class="profile-img">    
                        <?php
                            $servername="localhost";
                            $username="root";
                            $password="";
                            $dbname="bikerentalsk";
                            $conn=mysqli_connect($servername,$username,$password,$dbname);
	                        if($conn->connect_error){
		                        die("connection failed:".$conn->connect_error);
                            }
                            $sql="SELECT * FROM bikes";
                            $result=$conn->query($sql);
                            $row=mysqli_num_rows($result);
                            echo "<h1 class='no'>".$row."</h1>";
                            ?>
                           
                        </div>
                        <h1 class="user-name m-t-10 mb-0 text-ellipsis">Bikes</h1>
                        <?php
	                    $servername="localhost";
	                    $username="root";
	                    $password="";
	                    $dbname="bikerentalsk";
	                    $a=array();
	                    $conn=mysqli_connect($servername,$username,$password,$dbname);
	                    if($conn->connect_error){
		                    die("connection failed:".$conn->connect_error);
	                    } $sql1="SELECT * FROM bikes";
                        $result1=$conn->query($sql);
                        echo "<br>";
                        
                        echo "<table border='2'>";
                        echo "<tr>";
                        echo "<th>BIKE_ID</th><th>NAME</th><th>RATE/KM</th></tr>";
                        if($result->num_rows>0)
                        {
                            while($row=$result->fetch_assoc())
                            {
                                echo "<tr>";
                                echo "<td>".$row["bid"]."</td>";
                                echo "<td>".$row["name"]."</td>";
                                echo "<td>".$row["rate"]."</td></tr>";
                                array_push($a,$row["bid"]);
                    
                            }
                        }
                        else{
                            echo "Table is Empty";
                        }
                        echo "</table>";
                        $conn->close();
	                    ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="profile-widget" style="background-color: azure;">     
                        <div class="profile-img">
                            <?php
                            $servername="localhost";
                            $username="root";
                            $password="";
                            $dbname="bikerentalsk";
                            $conn=mysqli_connect($servername,$username,$password,$dbname);
	                        if($conn->connect_error){
		                        die("connection failed:".$conn->connect_error);
                            }
                            $sql="SELECT * FROM bookings";
                            $result=$conn->query($sql);
                            $row=mysqli_num_rows($result);
                            echo "<h1 class='no'>".$row."</h1>";
                            ?>
                           
                        </div>
                        <h1 class="user-name m-t-10 mb-0 text-ellipsis">Bookings</h1>
                    <?php
	                $servername="localhost";
	                $username="root";
	                $password="";
	                $dbname="bikerentalsk";
	                $a=array();
	                $conn=mysqli_connect($servername,$username,$password,$dbname);
	                if($conn->connect_error){
		            die("connection failed:".$conn->connect_error);
	                }
	                $sql="SELECT * FROM bookings";
	                $result=$conn->query($sql);
	                echo "<br>";
	                
	                echo "<table border='2'>";
	                echo "<tr>";
	                echo "<th>USER_ID</th><th>BIKE_ID</th><th>NAME</th></tr>";
	                if($result->num_rows>0)
	                {
		                while($row=$result->fetch_assoc())
		                {
			            echo "<tr>";
			            echo "<td>".$row["uid"]."</td>";
			            echo "<td>".$row["bid"]."</td>";
			            echo "<td>".$row["uname"]."</td></tr>";
			            array_push($a,$row["uid"]);
                        }
	                }
	                else{
		            echo "Table is Empty";
	                }
                    echo "</table>";
                    $conn->close();
	                ?></div>
                </div>
        </div>
        
   
	
	

    </section>
    </body>
</htmk>