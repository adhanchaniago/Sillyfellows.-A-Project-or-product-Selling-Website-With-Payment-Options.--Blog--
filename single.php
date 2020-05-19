<!DOCTYPE html>

<?php


require 'conn.php';
$conn = Connect();
if ( isset( $_GET[ "id" ] ) ){
	$id = $_GET[ "id" ];
$sql = 'SELECT * FROM projects where id = '.$id;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0)
	{
	header("location: notfound.php");
}
if (mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result)){

?>
<html lang="en">
  <head>
    <title>Silly Fellows</title>
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
					<li ><a href="index.php">Home</a></li>
					<li class="colorlib-active"><a href="index.php">Cg Projects</a></li>
					<li ><a href="FeedBack.php">FeedBack</a></li>
					<li><a href="Projectreq.php">Project Request</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h1 id="colorlib-logo" class="mb-4"><a href="index.php" style="background-image: url(images/bg_1.jpg);">Silly <span>Fellows</span></a></h1>
				<div class="mb-4">
					<h3>Join Telegram for More Updates</h3>
					<form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	
              <button class="mt-2 btn btn-white submit"><a href="https://t.me/silly_fellow" class="mb-4 sidebar-heading"><span class="icon-paper-plane"></span> Click to Join </a></button>
            </div>
          </form>
				</div>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Sillyfellow</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-lg-8 px-md-5 py-5">
								<center><a href="index.php" class="img img-2"> <img src="sf.png"></a></center>
								
							<div class="row pt-md-4">
										<h1 class="mb-3"><?php echo $row["title"]; ?></h1>
								
								  <img src="<?php echo $row['image_link']; ?>" alt="" class="img-fluid"><hr>
							   <hr>
							   <br>
								<h1 class="mb-3">About project	</h1>
							
								<br>
								<p>Most of theapplication will be designed to access OpenGL directly through functions in three libraries. Functions in the main GL (or OpenGL in windows) library have names that begin with the letters gl and are stored in a library usually referred to as GL (or OpenGL in windows).  The  second  is  the OpenGL  Utility  Library(GLU).  This  library  uses  only  GL functions  but  contains  code  for  creating  common  objects  and  simplifying  viewing.  All functions in GLU can be created from the core GL library but application programmers prefer not   to   write   the   code   repeatedly.   The   GLU   library   is   available   in   all   OpenGL implementations; functions in the GLU library begin with letters glu.</p>
								<p><?php echo $row["title"]; ?></p>	
								
								<p><?php echo $row["des"]; ?></p>		
								
							  <!--   <div class="tag-widget post-tag-container mb-5 mt-5">
								  <div class="tagcloud">
									<a href="#" class="tag-cloud-link">Life</a>
									<a href="#" class="tag-cloud-link">Sport</a>
									<a href="#" class="tag-cloud-link">Tech</a>
									<a href="#" class="tag-cloud-link">Travel</a>
								  </div>
								</div>
								 -->
								 
								 <div class="comment-form-wrap pt-5">
									</hr>
								  </div>
								  
								  
								  <div class="about-author d-flex p-4 bg-light">
								  
								  <div class="desc">
									<h3>Price : <?php echo $row["price"]; ?> </h3>
									
									<p>The Project Includes </p>
									<p>* Source Code
										* Report Link</p>
									<p>How to buy </p>
									<p>Click On Buy Now link. It Takes to Payment Page Pay Vai Paytm and Enter Transaction Id and Email Id.
									Once the Payment is validated You will Get Links To Source Code and Report Of the Project And It Will Be Mailed To Your Mail Id</p>
									 <button class="mt-2 btn btn-white submit"><a href="paymentpage.php?id=<?php echo $row["id"]; ?>" class="mb-4 sidebar-heading" >Buy Now</a></button>
									
									
									</div>
								</div>
								
								</br>
								  <?php
			}
			}

			?>
								<div class="about-author d-flex p-4 bg-light">
								  <div class="bio mr-5">
									<img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
								  </div>
								  <div class="desc">
									<h3>Silly Fellows</h3>
									<p>One piece of log creates a small fire, adequate to warm you up, add just a few more pieces to blast an immense bonfire, large enough to warm up your entire circle of friends; needless to say that individuality counts but teamwork dynamites.</p>
								  </div>
								</div>


								<div class="pt-5 mt-5">
								  <!-- <h3 class="mb-5 font-weight-bold">6 Comments</h3>
								  <ul class="comment-list">
									<li class="comment">
									  <div class="vcard bio">
										<img src="images/person_1.jpg" alt="Image placeholder">
									  </div>
									  <div class="comment-body">
										<h3>John Doe</h3>
										<div class="meta">October 03, 2018 at 2:21pm</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
										<p><a href="#" class="reply">Reply</a></p>
									  </div>
									</li>

									<li class="comment">
									  <div class="vcard bio">
										<img src="images/person_1.jpg" alt="Image placeholder">
									  </div>
									  <div class="comment-body">
										<h3>John Doe</h3>
										<div class="meta">October 03, 2018 at 2:21pm</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
										<p><a href="#" class="reply">Reply</a></p>
									  </div>

									  <ul class="children">
										<li class="comment">
										  <div class="vcard bio">
											<img src="images/person_1.jpg" alt="Image placeholder">
										  </div>
										  <div class="comment-body">
											<h3>John Doe</h3>
											<div class="meta">October 03, 2018 at 2:21pm</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
											<p><a href="#" class="reply">Reply</a></p>
										  </div>


										  <ul class="children">
											<li class="comment">
											  <div class="vcard bio">
												<img src="images/person_1.jpg" alt="Image placeholder">
											  </div>
											  <div class="comment-body">
												<h3>John Doe</h3>
												<div class="meta">October 03, 2018 at 2:21pm</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
												<p><a href="#" class="reply">Reply</a></p>
											  </div>

												<ul class="children">
												  <li class="comment">
													<div class="vcard bio">
													  <img src="images/person_1.jpg" alt="Image placeholder">
													</div>
													<div class="comment-body">
													  <h3>John Doe</h3>
													  <div class="meta">October 03, 2018 at 2:21pm</div>
													  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
													  <p><a href="#" class="reply">Reply</a></p>
													</div>
												  </li>
												</ul>
											</li>
										  </ul>
										</li>
									  </ul>
										</li> -->

									<hr>
								  </ul>
								  <!-- END comment-list -->
								  
								  
								</div>
						</div><!-- END-->
			    	</div>
						<div class="col-xl-4 sidebar ftco-animate bg-light pt-5">
	            <div class="sidebar-box pt-md-4">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	                </div>
	              </form>
	            </div>
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Categories</h3>
	              
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Popular Articles</h3>
				  <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
					<?php
				  
					$query2 = "SELECT * FROM projects LIMIT 3";
					$result = mysqli_query($conn, $query2);
					if (mysqli_num_rows($result) > 0)
						 while($row = mysqli_fetch_assoc($result))
						  {
							  $user_Image = $row["image_link"];

	?>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(<?php echo $row['image_link']; ?>);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="single.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span><?php echo $row["date"]; ?></a></div>
	                    <div><a href="#"><span class="icon-person"></span> <?php echo $row["cat"]; ?></a></div>
	                  </div>
	                </div>
	              </div>
					<?php
						
							}
					?>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Tag Cloud</h3>
	              <ul class="tagcloud">
	                <a href="#" class="tag-cloud-link">animals</a>
	                <a href="#" class="tag-cloud-link">human</a>
	                <a href="#" class="tag-cloud-link">people</a>
	                <a href="#" class="tag-cloud-link">cat</a>
	                <a href="#" class="tag-cloud-link">dog</a>
	                <a href="#" class="tag-cloud-link">nature</a>
	                <a href="#" class="tag-cloud-link">leaves</a>
	                <a href="#" class="tag-cloud-link">food</a>
	              </ul>
	            </div>

							<div class="sidebar-box subs-wrap img py-4" style="background-image: url(images/bg_1.jpg);">
								<div class="overlay"></div>
								<h3 class="mb-4 sidebar-heading">Join Us On Telegram</h3>
								<p class="mb-4">Join us on telegram and get latest project updates</p>
	              <form action="#" class="subscribe-form">
	                <div class="form-group">
	                 <button class="mt-2 btn btn-white submit"><a href="https://t.me/silly_fellow" class="mb-4 sidebar-heading"> Click to Join</a></button>
	                </div>
	              </form>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Paragraph</h3>
	              <p>It's through vulnerability that human beings create connections. The more vulnerable we can be with one another, the more that we'll trust one another and the more we'll be able to collaborate effectively.</p>
	            </div>
	          </div><!-- END COL -->
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

<?php

						  
						  }
						  else
						  {
							  header("location: notfound.php");
						  }
?>