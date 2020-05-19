<?php

include('session_m.php');
$login_session = $_SESSION['login_user1']; 
if(!isset($login_session)){
header('Location: test.php'); // Redirecting To Home Page
}



$name = $conn->real_escape_string($_POST['title']);
$price = $conn->real_escape_string($_POST['price']);
$description = $conn->real_escape_string($_POST['description']);
$sub_cont = $conn->real_escape_string($_POST['sub_cont']);
$down_link = $conn->real_escape_string($_POST['down_link']);
$pdf_link = $conn->real_escape_string($_POST['pdf_link']);
$cat = $conn->real_escape_string($_POST['cat']);


// Storing Session
$user_check=$_SESSION['login_user1'];
/* $R_IDsql = "SELECT RESTAURANTS.R_ID FROM RESTAURANTS, MANAGER WHERE RESTAURANTS.M_ID='$user_check'";
$R_IDresult = mysqli_query($conn,$R_IDsql);
$R_IDrs = mysqli_fetch_array($R_IDresult, MYSQLI_BOTH);
$R_ID = $R_IDrs['R_ID']; */
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
$target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["images_path"]["name"]);
    move_uploaded_file($_FILES["images_path"]["tmp_name"], $target_file);

//$query = "INSERT INTO FOOD(name,price,description,R_ID,images_path) VALUES('" . $name . "','" . $price . "','" . $description . "','" . $R_ID ."','" . $target_file . "')";

$query = "INSERT INTO projects(id, title, sub_cont, des, price, download_link, report_link, image_link, date, cat) VALUES (' ','" . $name . "','" . $sub_cont . "','" . $description . "','" . $price ."','" . $down_link . "','" . $pdf_link . "','" . $target_file . "','" . $date . "','" . $cat . "')";
$success = $conn->query($query);

if (!$success){


	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	<link rel="stylesheet" type = "text/css" href ="admin/css/view_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/table.css">
  <script type="text/javascript" src="admin/js/jquery.min.js"></script>
  <script type="text/javascript" src="admin/js/bootstrap.min.js"></script>

	</head>
	<body>
		<!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Silly fellows</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>


	<div class="container">
    <div class="jumbotron">
     <h1>Oops...!!! </h1>
     <p>Kindly enter your Product details .</p>
     <p><a href="managerlogin.php"> Click Me </a></p>

    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
	</body>
	  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> silly fellows | &copy All Rights Reserved </p>
  <br>
  </footer>
	</html>

	<?php
	
}
else {
	echo "SUCCESS";
	header('Location: add_products.php');
}

$conn->close();


?>