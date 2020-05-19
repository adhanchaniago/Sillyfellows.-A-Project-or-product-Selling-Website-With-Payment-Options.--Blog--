<?php
include('session_m.php');

if(!isset($_SESSION['login_user1'])){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Silly fellows </title>
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




<div class="container">
    <div class="jumbotron">
     <h1>Hello Manager! </h1>
     <p>Manage all your restaurant from here</p>

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
    		<a href="edit_Products.php" class="list-group-item ">Edit Products</a>
    		<a href="delete_Products.php" class="list-group-item active">Delete Products</a>
      
    	</div>
    </div>
    


    
    <?php
  
  	if(isset($_GET['del_id'])){
		$del_id = $_GET['del_id'];
		$sql = "DELETE FROM Projects WHERE id in ('$del_id')";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($result){
	echo '<div class="text-danger"><h2> Product '.$del_id.' is deleted succesfully</h2></div>';
}
	}
	
	?>

<div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="add_food_items1.php" method="POST" enctype="multipart/form-data">
        <br style="clear: both">
    <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        
        <th> Product Name </th>
        <th> Delete </th>
      </tr>
    </thead>
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

<tbody>
	<tr>
	  <td><?php echo $row["title"]; ?></td>
	  <td><a href="delete_product.php?del_id=<?php echo $row['id']; ?>">Delete Product</a></td>
	</tr>
</tbody>



    <?php
    }
    ?>
 </table>
        
        </div>
      
    </div>
</div>

  </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> DESI KITCHEN 2019 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>