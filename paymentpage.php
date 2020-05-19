<?php
session_start();

require 'connection.php';
$conn = Connect();

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM projects where id = $id";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==0){
	header('Location: notfound.php');
}
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){
?>

<html>

  <head>
    <title> Online Payment | Silly Fellows </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="admin/css/COD.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/COD.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/payment.css">
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


<?php
if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
			<li><a href="order_details.php"><span class="glyphicon glyphicon-cutlery"></span> Orders </a></li>
          
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="customersignup.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>



<div class="container">
    <div class="row">
        <div class="jumbotron">
          <h1 class="text-center"><?php echo $row['title']; ?></h1>
        </div>
    </div>
</div>

</br>
</br>

<div class="container">
    <div class="row">
        <div class="jumbotron">
          <h3>Price : <?php echo $row["price"]; ?> </h3>
						
						<p>The Project Includes </p>
						<p>* Source Code
							* Report Link</p>
        </div>
    </div>
</div>

</br>
</br>
<?php
if (!isset($_SESSION['login_user2'])) {
  ?>
</br>
<div class="container">
    <div class="row">
        <div class="jumbotron"><center>
		<h2><b>We Are Not Accpecting Online Payment Methods So please Contact Vai:-</b></h2>
		<h2> Telegram :- <a href="https://t.me/silly_fellows">@silly_fellows </a><h2>
		<h2> Mail id :- sillyfellows20@gmail.com</a><h2>
		
		<samp>Send the Product link to complete purchase.</samp>
		  </center>
		  </form>
        </div>
    </div>
</div>
<?php
}
?>

<?php
if (isset($_SESSION['login_user2'])) {
	$email = $_SESSION['login_user2'];
	$query1 = "SELECT email, c_id FROM purchase WHERE email='$email' AND c_id='$id'";
	$result1 = mysqli_query($conn, $query1);
	if (!$result1){
	echo $conn -> error;
die("Error");}
	if (mysqli_num_rows($result1) == 1)
{
  ?>
	<div class="container">
		<div class="row">
			<div class="jumbotron"><center>
			<h2>Product Already purchased</h2>
				<label>Source Download Link:- <a href="<?php echo $row['download_link']; ?>"><?php echo $row['download_link']; ?></a></label></br>
				<label>Report Download Link:- <a href="<?php echo $row['report_link']; ?>"><?php echo $row['report_link']; ?></a></label>
			</div>
		</div>
	</div>
<?php
}
else
{
?>

</hr>
</br>
<div class="container">
    <div class="row">
        <div class="jumbotron"><center>
		<h2><b>We Are Not Accpecting Online Payment Methods So please Contact Vai:-</b></h2>
		<h2> Telegram :- <a href="https://t.me/silly_fellows">@silly_fellows </a><h2>
		<h2> Mail id :- sillyfellows20@gmail.com </a><h2>
		
		<samp>Send the Product link to complete purchase.</samp>
		  </center>
		  </form>
        </div>
    </div>
</div>
<?php
}
?>


  
<?php

}
}
}
}

else{
	header('Location: notfound.php');
}

?>


</html>