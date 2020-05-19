<!DOCTYPE html>

<html lang="en">
  <head>
    <title>silly fellows</title>
    <meta charset="utf-8">
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
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php">Cg Projects</a></li>
					<li><a href="FeedBack.php">FeedBack</a></li>
					<li class="colorlib-active"><a href="Projectreq.php">Project Request</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h1 id="colorlib-logo" class="mb-5"><a href="index.html" style="background-image: url(images/bg_1.jpg);">Andrea <span>Moore</span></a></h1>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section contact-section px-md-4">
	      <div class="container">
	        <div class="row d-flex mb-5 contact-info">
	          <div class="col-md-12 mb-4">
	            <h2 class="h3">Contact Information</h2>
	          </div>
	          <div class="w-100"></div>
	          
	          <div class="col-lg-6 col-xl-3 d-flex mb-4">
	          	<div class="info bg-light p-4"><span>For Fast Response Ping Vai </span>
		            <p><span>Telegram:</span> <a href="tel://1234567920">@silly_fellows</a></p>
		          </div>
	          </div>
	          <div class="col-lg-6 col-xl-3 d-flex mb-4">
	          	<div class="info bg-light p-4">
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com">sellyfellows@gmail.com</a></p>
		          </div>
	          </div>
	         <?php
require 'connection.php';
$conn = Connect();
if(isset($_POST['req'])){
	$title = $_POST['title'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$des = $_POST['des'];
	$sql = "insert into projectreq(r_id, title, email_id, telegram_id, pro_des) values('' , '$title','$email','$tel','$des')";
	$res = mysqli_query($conn,$sql);
	if(!$res){
		echo $conn -> error;
	die("Error");
	}
	
	echo '<h2 >Request Sent. Email Will be sent Once we Get The Project.</h2><br>';
}

?>
	        </div><h2 >Request Project Here</h2><br>
	        <div class="row block-9">
			
	          <div class="col-lg-6 d-flex">
	            <form action="" method="post"class="bg-light p-5 contact-form">
	              <div class="form-group">
	                <input type="text" class="form-control" name="title" placeholder="Your Project Title" Required>
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" name="email" placeholder="Your Email Id" Required>
	              </div>
				  <div class="form-group">
	                <input type="text" class="form-control" name="tel" placeholder="Your Teleragm Id">
	              </div>
				   <div class="form-group">
	                <textarea name="des" id="" cols="30" rows="7"  class="form-control" placeholder="Project Description"></textarea>
	              </div>
				  
	              <div class="form-group">
	                <input type="submit" name ="req" value="Send Message" class="btn btn-primary py-3 px-5">
	              </div>
	            </form>
	          
	          </div>

	          
	        </div>
	      </div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>