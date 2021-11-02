<?php include_once 'z_db.php'; 
 $toupdate =  mysqli_real_escape_string($con,$_GET['id']);
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SmartField Academy &mdash; School News</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Best school in Anambra state" />
	<meta name="keywords" content="Smartfield  Academy , Creche in Anambra State" />
	<meta name="author" content="ice-hub.ng" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/custom.css">

	<!-- link to font awesome and glyphycons -->
	<link rel="stylesheet" href="fonts/font-fig/font-awesome.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-right">
							<p class="site">www.smartfieldacademy.com</p>
							<p class="num">Call: 090 6928 3122 </p>
							<ul class="fh5co-social">
								<li><a href=""><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>


		<nav class="navbar  navbar-default">
				<div class="container">
				    <div class="navbar-header">
					      <a href="index.php">
								<img src="images/logo.jpg" height="50px" width="50px">
								<span class="smart">SMART</span><span class="field">FIELD</span>
							</a>
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
				    </div>
					<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
					     <ul class="nav navbar-nav navbar-right">
					    		<li><a href="index.php">Home</a></li>
							    <li><a href="about-us.php">About</a></li>
							    <!-- <li><a href="our-management.php">Management Staff</a></li>  -->
							    <li><a href="classes.php">Classes</a></li> 
                                <li><a href="news.php" style="color: black; font-family: cursive;">School News</a></li>
						     	<li><a href="contact-us.php">Contact Us</a></li>
							    <li class="dropdown">
						      	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						      		<span style="background:#fe5629; padding: 5px; color: white;">School Portal <span class="caret"></span></span>
						      	</a>
						      		<ul class="dropdown-menu">
							          	<li><a href="result-checker.php">Check your result</a></li>
										<li><a href="admin/login.php">Blog login</a></li>
										<li><a href="studentsadmin/index.php">Portal login</a></li>
							        </ul>
						      </li>
					    </ul>
				    </div>
				</div>
		</nav>


	<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
            		<!-- <div class="junior__classes">
						<div class="classes__inner">
							<div class="classes__icon">
								<img src="images/class/star/1.png" alt="starr images">
								<span ><i class="fa fa-phone"></i></span>
							</div>
						</div>
					</div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">School News</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><img src="images/icons/brad.png" alt="separator images"></span>
                                  <span class="breadcrumb-item active">School News</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->

	<div id="fh5co-contact">
		<div class="container">
		        <section class="page__contact bg--white section-padding--lg">
		        	<div class="container">
		        		<div class="row">
		        			<!-- Start Single Address -->
		        		
                                <div class="col-md-9">                
                                        <?php 
					 $query="SELECT * FROM blog where id='$toupdate' "; 
 
 
 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result))
{
	
	$to="$row[id]";
	$title="$row[title]";
	$details="$row[details]";
        $ufile="$row[ufile]";
		$date="$row[date]";
        $date= date("l jS \of F Y h:i:s A", strtotime($date));
			  
		}			  ?>  
            
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>  <?php print $title ?></h3>
               
                  <span class="mailbox-read-time">Posted on: <?php print $date ?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
         
              <!-- /.mailbox-controls -->
             
                  <span class="mailbox-attachment-icon has-img"><img src="admin/uploads/<?php print $ufile ?>" alt="Attachment"></span>

                  <br>

                <?php print $details ?>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
                                                
                                                
                                </div>  			<!-- End Single Address -->
		        		</div>
		        	</div>
		        </section>
			
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About SmartField</h3>
					<p>
						Smartfield International Academy is a school that offers skills, morals, child centered and academically rigorous curriculum that addresses the intellectual, social and emotional needs of each child from the creche, pre-school 1 to grade 6. 
					</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
							<li><a href="index.php">Home</a></li>
							<li><a href="about-us.php">About</a></li>
							<!-- <li><a href="our-management.php">Management Staff</a></li> -->
							<li><a href="classes.php">Classes</a></li> 
							<li><a href="news.php">School News</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>School Portal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="result-checker.php">Check your result</a></li>
						<!-- <li><a href="admin/login.php">Blog login</a></li> -->
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="contact-us.php"><span>Contact Us</span></a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<!-- <h3>Admin</h3>
					<ul class="fh5co-footer-links">
						<li><a href="school-portal.php"><span>Portal</span></a></li>
					</ul> -->
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; <script>document.write(new Date().getFullYear())</script> SmartField Academy All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://ice-hub.ng" target="_blank"> Ice Hub</a> </small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

