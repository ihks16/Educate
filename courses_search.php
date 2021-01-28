<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="Harsh Kumar Sharma">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Course Category</title> 

	<!--Google Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d29bdaf53.js" crossorigin="anonymous"></script>

	<!--CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu" style="font:arial">
						<li class="menu-active" style="font:arial"><a href="index.php">Home</a></li>
						<li><a href="about.php" style="font:arial">Courses</a></li>
						<li class="menu-has-children" style="font:arial"><a href="">Categories</a>
                             <ul>
								<li><a href="courses_search.php?name=programming" style="font:arial">Programming</a></li>
								<li><a href="courses_search.php?name=excel" style="font:arial">Excel</a></li>
                                <li><a href="courses_search.php?name=web" style="font:arial">Web</a></li>
								<li><a href="courses_search.php?name=photograph" style="font:arial">Photograph</a></li>
                                <li><a href="courses_search.php?name=maths" style="font:arial">Maths</a></li>
								<li><a href="courses_search.php?name=music" style="font:arial">Music</a></li>
                            </ul>
                        </li>
						<li><a href="contact.html" style="font:arial">Contact Us</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- End Header Area -->


	<!-- Start Banner Area -->  
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Courses
					</h1>
					<p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of
						the space telescope.</p>
					<div class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="courses.html">Courses</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>  
	<!-- End Banner Area -->

	<section style= "margin:70px ; padding-top:20px  ;  ">
	    <div class="section-title text-center" style="padding-bottom: 40px">
						<h1>Courses That Makes You Hero</h1>
		</div>
		<div class="row justify-content-center">				
				<div class="col-lg-3  col-xs-3 col-md-3">
				 <div class="latest-courses">
					<h3  style="margin:20px 0px 0px 0px"><center>Latest Courses</center></h3><br>
					<?php
					 $con = mysqli_connect("localhost","root","","test");
					 if (mysqli_connect_errno()) {
					 echo "Failed to connect to MySQL: " . mysqli_connect_error();
					 exit();
					 }
          	 		 $sql_ = "SELECT * from coursedetails ORDER BY createdDate ASC LIMIT 4";
           			 $result_ = mysqli_query($con , $sql_);
           			 if ($result_->num_rows > 0) {
           			while($row_ = $result_->fetch_assoc()) {
          			  ?>
           			 <div class="" style="margin: 0px 0px 5px 0px;padding-left: 10px; height: 250px ; width: 320px;">
          			  <?php
           			 echo '<a href="Java.html"><img style="height: 	150px; width: 280px; border-left: 10px;border-radius:10px" src="'.$row_["img1"].'"'.' alt="">'; ?>
            		    <a href="Java.html"><h3 style="width:280px"><center><?php
                 	    echo $row_["name"] 
                   	 ?></center></h3></a>
           </div>
            <?php
            }
            }
            ?>
                 </div>	
				</div>
			    <div class="col-lg-9 col-xs-9 col-md-9">
				<div class="" style="margin: 0px 0px 0px 0px; ">
          				 <?php
           					   $con = mysqli_connect("localhost","root","","test");
           					   if (mysqli_connect_errno()) 
         				     {
           				       echo "Failed to connect to MySQL: " . mysqli_connect_error();
           				       exit();
           					   }
            					  $search = $_GET["name"];
            					  $sql = "SELECT * FROM coursedetails WHERE tags LIKE '%$search%'" ;
								  $result= mysqli_query($con , $sql );
            					  while($row = $result->fetch_assoc()) 
                 				{
            			?>
         			   <?php 
           				 echo '
              			   	 <div class="row" style=" border-top:solid; color:#000000 ; height:200px; border-width:1.5px">
                  		  	   <div class="col-lg-3 col-xs-3">
                      	           <a href="courses.php?id='.$row["id"].'">
                     		       <img style="margin-top:10px;height: 148px; width: 260px; border-left: 10px;border-radius:10px;" src="'.$row["img1"].'" alt="">
							       </a>
							     <h3><?php echo "Rs: $row[""]"  ?></h3>
                               </div>
                               <div class="col-lg-9 col-xs-9">
                                 <div class="row">
                                  <div class="col-lg-10 col-xs-10" style="width:640px; margin-left:5px">
                                     <a href="courses.php?id='.$row["id"].'"><h4 style="width:auto ; height:auto; margin-top:10px;">'.$row["name"].'</h4></a>
                                     <p style="margin:0px;height:50px ; overflow: hidden ;">'.$row["description"].'</p>
                                     <p style="font-size:14px">'.$row["author"].'<br>'.$row["ratings"].'<i class="fas fa-star" style="font-size:14 px;color:#e6e600"></i>('.$row["ratingsCount"].' Rating Count)<br><i class="fas fa-table" style="font-size:14 px;color:brown"></i>'.$row["lectures"].' Lectures <i class="fas fa-clock" style="font-size:14px;color:black"></i>	 '.$row["duration"].' Total Hours</p>
                                  </div>
                                  <div class="col-lg-1 col-xs-1">
                                     <h5 style="margin-top:40px">Rs:'.$row["dealPrice"].'</h5>
                                     <h5>Rs:'.$row["originalPrice"].'</h5>
                                  </div>
                                 </div>
                                </div>       
                             </div>
                          ';
                          }
                         ?>
                     </div>
				</div>
        </div>
      
    </section>

  
	

	<!-- Start Footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required="" type="email">
							<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Area -->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#"></a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>