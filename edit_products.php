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
  </head>

<link rel="stylesheet" type = "text/css" href ="admin/css/view_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/bootstrap.min.css">
  <link rel="stylesheet" type = "text/css" href ="admin/css/table.css">
  <script type="text/javascript" src="admin/js/jquery.min.js"></script>
  <script type="text/javascript" src="admin/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    function display_alert()
    {
      alert("Data Updated Successfully...!!!");
    }
  </script>

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
            <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>




<div class="container">
    <div class="jumbotron">
     <h1>Hello Manager! </h1>
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
    		
    		 
    		<a href="add_Products.php" class="list-group-item ">Add Products</a>
    		<a href="edit_Products.php" class="list-group-item active">Edit Products</a>
    		<a href="delete_Product.php" class="list-group-item ">Delete Products</a>
      
    	</div>
    </div>
    


    
    

<div class="col-xs-3">

  <div class="form-area" style="padding: 10px 10px 110px 10px; ">
  
    <div style="text-align: center;">
      <h3>Click On Menu <br><br></h3>
    </div>
    <?php
   
 

    if (isset($_GET['submit'])) {
    $F_ID = $_GET['dfid'];
    $name = $_GET['title'];
    $sub_cont = $_GET['sub_cont'];
    $price = $_GET['dprice'];
    $ddescription = $_GET['ddescription'];
    $report_link = $_GET['report_link'];
    $download_link = $_GET['download_link'];
    $cat = $_GET['cat'];
	
	
    
    $query = mysqli_query($conn, "UPDATE projects SET title='$name',sub_cont='$sub_cont',des='$ddescription',
	price='$price',download_link='$download_link',report_link='$report_link',cat='$cat' WHERE id = '$F_ID'");
	if(!$query)
                {
                    $this->debug_mode('query', 'error', '#Query Failed<br/>' . $link->error);
                    die();
                }
    }
	
	
	
	
	
	
    $query = mysqli_query($conn, "SELECT * FROM projects order by id ");
    while ($row = mysqli_fetch_array($query)) {

      ?>

      <div class="list-group" style="text-align: center;">
        <?php
      echo "<b><a href='edit_products.php?update= {$row['id']}'>{$row['title']}</a></b>";  
        ?>
      </div>


    <?php
    }
    ?>
    

    <?php
    if (isset($_GET['update'])) {
    $update = $_GET['update'];
    $query1 = mysqli_query($conn, "SELECT * FROM projects WHERE id=$update");
    while ($row1 = mysqli_fetch_array($query1)) {
		$title = $row1["title"];

    ?>
</div>
</div>



<div class="container">
<div class="col-md-6">
 <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="edit_products.php" method="GET">
		<br style="clear: both">
		  <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT YOUR Product ITEMS HERE </h3>

		  <div class="form-group">
			<input class='input' type='hidden' name="dfid" value=<?php echo $row1['id'];  ?> />
		  </div>

		   <div class="form-group">
		   <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Product Title: </label>
		  <textarea id="w3mission" name="title" rows="2" cols="50" >
<?php echo $row1['title'];  ?>
		  </textarea></div>

		  <div class="form-group">
			<label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Product Price: </label>
			<input type="text" class="form-control" id="dprice" name="dprice" value=<?php echo $row1['price'];  ?> placeholder="Your Food Price (INR)" required="">
		  </div>

		  <div class="form-group">
			 <textarea id="w3mission" name="sub_cont" rows="4" cols="50" >
<?php echo $row1['sub_cont'];  ?>
		  </textarea> </div>
		   <div class="form-group">
		  <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Product description Content: </label>
		  <textarea id="w3mission" name="ddescription" rows="10" cols="50" >
<?php echo $row1['des'];  ?>
 </div>
		  </textarea>
		  <div class="form-group">
			<label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Product Download Link: </label>
			<input type="text" class="form-control" id="ddescription" name="download_link" value=<?php echo $row1['download_link'];  ?> placeholder="Your Food Description" required="">
		  </div>
		  <div class="form-group">
			<label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Product Report Link: </label>
			<input type="text" class="form-control" id="ddescription" name="report_link" value=<?php echo $row1['report_link'];  ?> placeholder="Your Food Description" required="">
		  </div>
		  <div class="form-group">
			<label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Product Cat : </label>
			
			<select id="cars" class="form-control" id="cat" name="cat"  value=<?php echo $row1['cat'];  ?> required>
			  <option value="Cg">CG</option>
			  
			</select>
		  </div>
		  <div class="form-group">
		  <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box" > Update </button>    
	  </div>
        </form>


    <?php
}
}


  ?>
      
  </div>




</div>


<?php
mysqli_close($conn);
?>
</div>
</div>

  </body>
<br>
  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> DESI KITCHEN 2019 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>