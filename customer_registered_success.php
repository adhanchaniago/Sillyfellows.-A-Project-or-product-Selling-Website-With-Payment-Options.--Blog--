<html>

  <head>
    <title> Customer Login | Silly Fellows </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="admin/css/manager_registered_success.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/bootstrap.min.css">
  <script type="text/javascript" src="admin/js/jquery.min.js"></script>
  <script type="text/javascript" src="admin/js/bootstrap.min.js"></script>

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
          <a class="navbar-brand" href="index.php">Silly Fellows</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
           
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
          </ul>
        </div>

      </div>
    </nav>

<?php

require 'connection.php';
$conn = Connect();


$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);
$name = $conn->real_escape_string($_POST['name']);
$wp = $conn->real_escape_string($_POST['wp']);
$sql2 = "SELECT * FROM users where email = '$email'";
	$result2 = mysqli_query($conn, $sql2);
	if(!$result2){
		echo $conn -> error;
	die("Error");
	}
if (mysqli_num_rows($result2) > 0)
{ 


?>
<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $email!" ?> </h2>
		<h1>Account Already Exist Check Mail Id or Try Other mail Id</h1>
		<p>Login Now from <a href="customerlogin.php">HERE</a></p>
	</div>
</div>

    </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Silly Fellows 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>

<?php
}
else
{
$query = "INSERT into users(id,name,email,password,wp) VALUES('','" . $name . "','" . $email . "','" . $password ."','" . $wp . "')";
$success = $conn->query($query);

if (!$success){
	
	die('<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h1>Username or email already reister:</h1>
		<p>Sign Up Again Now from <a href="customersignup.php">HERE</a></p>
	</div>
</div>');
}

$conn->close();
?>

<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $email!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="customerlogin.php">HERE</a></p>
	</div>
</div>

    </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Silly Fellows 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>

<?php

}

?>