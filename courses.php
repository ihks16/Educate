<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Course</title>

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d29bdaf53.js" crossorigin="anonymous"></script>

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
       $con = mysqli_connect("localhost","root","","test");
       if (mysqli_connect_errno()) {
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
       exit();
       }
       $id = $_GET['id'];
       $sql = "SELECT * from coursedetails WHERE id=$id";
       $result = mysqli_query($con , $sql);
       $row = mysqli_fetch_assoc($result);
       $id = $row["categoryId"];
    ?>
    
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
	</header><br><br><br><br>

	<div class="row" style="margin:0px 70px 20px 70px">
        
		<div class="col-lg-9 col-xl-9" >
		  <div class="col-lg-12 col-xl-12" style="border-top: solid">
            <!--<p style="padding-left: 10px"><a href="index.html">Main Page</a>-><a href="C++.html">C++</a></p>-->
            <div class="container" style="padding: 2px 2px 2px 2px; border: 2px 2px 2px 2px; margin: 5px 5px 5px 5px;">
              <div class="row">
                  <div class="col-lg-6 col-md-6">
                      <div class="course_text" style="padding: 0px 0px 0px 0px; color: black;">
                            <?php echo'
                            <a href="'.$row["url"].'"><h4 style="width:auto ; height:auto;font-size:50px; margin-top:20px;"><b style="color:black">'.$row["name"].'</b></h4></a>
                            <!-- <p style="color:black;margin:0px;height:50px ; overflow: hidden ;">'.$row["description"].'</p> -->
                            <p style="font-size:14px;font-size:18px"><b style="color:black">'.$row["author"].'<br>'.$row["ratings"].'<i class="fas fa-star" style="font-size:18 px;color:#e6e600" ></i>('.$row["ratingsCount"].' Rating Count)<br><i class="fas fa-table" style="font-size:18 px;color:brown"></i>'.$row["lectures"].' Lectures <i class="fas fa-clock" style="font-size:18 px;color:black"></i>	 '.$row["duration"].' Total Hours</b></p>'  ?>
                            <i class="fab fa-facebook" style="font-size:25px;color:#3366ff"></i>
                            <i class="fab fa-twitter" style="font-size:25px;color:#33ccff"></i>
                            <i class="fab fa-pinterest" style="font-size:25px;color:red"></i>
                       </div>
                  </div>
                  <div class="col-lg-5 col-md-6">
                      <?php 
                         echo '<img style="height:250px; width:420px;margin-top:30px;margin-left:30px;border-radius:20px" src="'.$row["img1"].'"'.' alt="">';
                        ?>                        
                  </div>
               </div>
            </div><br><br>  
            <div class="courses_details_info" style="padding: 0px 0px 0px 0px">
            <div class="container">
                <div class="single_courses">
                    <h3 style="text-decoration-style: solid;"><b style="color: black">What Will You Learn</b></h3>
                        <p style="font-size: 20px;color: black;">
                            <?php
                                echo $row["learn"];
                            ?>
                        </p>
                </div><br><br><br><br>
                <div class="single_courses">
                    <h3 style="text-decoration-style: solid;"><b style="color: black">Objectives</b></h3>
                        <p style="font-size: 20px;color: black;">
                            <?php
                                echo $row["description"];
                            ?>
                        </p>
                </div><br><br><br><br>
                <div class="single_courses">
                   <h3 style="text-decoration-style: solid;"><b style="color: black">Requirements</b></h3>
                        <p style="font-size: 20px;color: black;">
                            <?php
                                echo $row["requirements"];
                            ?>
                        </p>
                </div><br><br><br>
                <div class="single_courses">
                    <h3 style="text-decoration-style: solid;"><b style="color: black">Who This Course Is For</b></h3>
                        <p style="font-size: 20px;color: black;">
                            <?php
                                echo $row["courseFor"];
                            ?>
                        </p>
                </div><br><br><br><br>
                <div class="" style="position=center; padding-left:40%; padding-right:40%;">
                    <a href="<?php echo $row["udemy_url"]; ?>" style="color:#ffffff ; text-align:center; font-size:32px; border-radius:25px; border:solid; border-color: red ; background-color:red; padding:10px 15px 10px 15px;">
                    Enroll Now
                    </a>
				</div><br><br>
	       </div>
            </div>
        </div>
        </div> 
		<div class="col-lg-3 col-xl-3" style="overflow:hidden;border-top: solid;padding:0px">
		    
                <div style="margin:20px 0px 20px 5px;">
                    <h3>Latest courses</h3>
                </div><?php
        		 $sql_ = "SELECT * from coursedetails ORDER BY createdDate ASC LIMIT 8";
            	$result_ = mysqli_query($con , $sql_);
            	if ($result_->num_rows > 0) {
            	while($row_ = $result_->fetch_assoc()) {
            	?>
            	<div style="border-top: solid; border-width:2px; width:auto ; height:auto;margin-bottom:30px;">
                <div class="row">
                   <div class="col-lg-4 col-md-4">
                        <?php echo '<a href="courses.php?id='.$row_["id"].'"><img style="height: 80px; width: 120px; margin-left: 5px;margin-top:30px;border-radius:2px" src="'.$row_["img1"].'"'.' alt="">'; ?>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div style="height:90px; overflow:hidden" >
                            <a href="courses.php?id=<?php echo $row_["id"]?>"><h4 style="margin-top:30px;padding-left:15px">
                            <?php echo $row_["name"] ?></h4></a>
           		        </div>
                        <div style="height:20px; overflow:hidden" >
                            <a href="courses_search.php?name=<?php echo $row_["categoryName"]?>"><h6 style="margin-top:0px;padding-left:15px">
                            <?php echo $row_["categoryName"] ?></h6></a>
           		        </div>
                    </div>    
                    </div>
                </div>
           	
            	<?php
            	} 
            	}
				?>
        </div>
        </div> 
    <div style="border-top:solid ; margin:5px 70px 30px 85px; padding:20px;">
        <h2 style="font-size:30px; color:#000000;">Related Courses</h2><br>
        <div class="row">
            <?php
               $sql_1 = "SELECT * FROM coursedetails WHERE categoryId=$id ORDER BY createdDate ASC LIMIT 8";
               $result_1 = mysqli_query($con , $sql_1);
               if($result_1 ->num_rows>0){
               while ($row_1 = $result_1->fetch_assoc()){                  
            ?>
               <div class="col-lg-3 col-xl-3">
                <div class="col-lg-12 col-xl-12"style="overflow:hidden;padding:0px;border-top:solid;border-width:1px">
                 <div class="row">
                   <div class="col-lg-4 col-md-4">
                        <?php echo '<a href="'.$row_1["url"].'"><img style="height: 80px; width: 120px;margin-top:10px;border-radius:2px" src="'.$row_1["img1"].'"'.' alt="">'; ?>
                    </div>
                    <div class="col-lg-8 col-md-8" style="margin-bottom:10px">
                        <div style="height:70px; overflow:hidden" >
                            <a href="courses.php?id=<?php echo $row_1["id"]?>"><h4 style="margin-top:10px;padding-left:15px">
                            <?php echo $row_1["name"] ?></h4></a>
           		        </div>
                        <div style="height:20px; overflow:hidden" >
                            <a href="courses_search.php?name=<?php echo $row_1["categoryName"]?>"><h6 style="margin-top:0px;padding-left:15px">
                            <?php echo $row_1["categoryName"] ?></h6></a>
           		        </div>
                    </div>
                   </div>
                   </div>
               </div>
            <?php }
               } 
            ?>
        </div>
    
    </div>
    
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
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

        <script src="js/main.js"></script>
   </body>
    
    </html>