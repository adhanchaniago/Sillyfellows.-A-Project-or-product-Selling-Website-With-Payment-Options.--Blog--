<?php
include('session_m.php');

if(!isset($_SESSION['login_user1'])){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Silly Fellows </title>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">


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
          <a class="navbar-brand" href="#">Silly Fellows </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="managerlogin.php">Home</a></li>
            <li><a href="add_Products.php">Add Producs</a></li>
            <li><a href="edit_products.php">Edit Products</a></li>
            <li><a href="delete_product.php">Delete Products</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>






    
    	


    
  


<?php




// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM projects";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>


<div class="divTable greyGridTable">
<div class="divTableHeading">
<div class="divTableRow">
<div class="divTableHead">Product ID</div>
<div class="divTableHead">Product Name</div>
<div class="divTableHead">Price</div>
<div class="divTableHead">Description</div>
<div class="divTableHead">Download Link</div>
<div class="divTableHead">pdf Link</div>

</div>
    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>
<div class="divTableRow">
<div class="divTableCell"><?php echo $row["id"]; ?></div>
<div class="divTableCell"><?php echo $row["title"]; ?></div>
<div class="divTableCell"><?php echo $row["price"]; ?></div>
<div class="divTableCell"><?php echo $row["des"]; ?></div>
<div class="divTableCell"><?php echo $row["download_link"]; ?></div>
<div class="divTableCell"><?php echo $row["report_link"]; ?></div>
</div>
  
  
  <?php } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

 
        
        </div>
      
    </div>
</div>
<br>
<br>
<br>
<br>
  
  </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Silly Fellows  | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>