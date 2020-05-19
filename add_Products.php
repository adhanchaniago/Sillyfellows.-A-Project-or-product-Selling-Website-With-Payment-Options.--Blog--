<?php

include('session_m.php');
$login_session = $_SESSION['login_user1']; 
if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Admin Login | Silly Fellows</title>
  </head>

<link rel="stylesheet" type = "text/css" href ="admin/css/view_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/table.css">
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
          <a class="navbar-brand" href="#">Silly Fellows</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">ADMIN CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h1>Hello Admin! </h1>
     <p>Manage all your Products from here</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		
    		 
    		<a href="add_Products.php" class="list-group-item active">Add Products</a>
    		<a href="edit_Products.php" class="list-group-item ">Edit Products</a>
    		<a href="delete_Product.php" class="list-group-item ">Delete Products</a>
      
    	</div>
    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="add_food_items1.php" method="POST" enctype="multipart/form-data">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> ADD NEW PRODUCT HERE </h3>

           <div class="form-group">
		   
		  <textarea id="w3mission" name="title" rows="2" cols="50" placeholder="Product Title" ></textarea></div>  

          <div class="form-group">
            <input type="text" class="form-control" id="sub_cont" name="sub_cont" placeholder="Your Sub Content Here " required="">
          </div>

		  <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Your Product Price (INR)" required="">
          </div>
		  
		  <div class="form-group">
			<select id="cars" class="form-control" id="cat" name="cat"  placeholder="Your Cat"required>
			  <option value="Cg">CG</option>
			  
			</select>
		  </div>
		  
         <div class="form-group">
		  <textarea id="w3mission" name="description" rows="10" cols="50" placeholder="Product description" ></textarea>
			</div>
		  
		  <div class="form-group">
            <input type="text" class="form-control" id="description" name="down_link" placeholder="Your Product Download Link" required="">
          </div>
		
		  <div class="form-group">
            <input type="text" class="form-control" id="description" name="pdf_link" placeholder="Your Product Pdf Link" required="">
          </div>
		  
		  
          <div class="form-group">
            Select Product Image:<input type="file" id="images_path" name="images_path" placeholder="Select Food image" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD PRODUCT </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> SILLY FELLOWS| &copy All Rights Reserved </p>
  <br>
  </footer>
</html>