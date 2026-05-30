<?php
//Logo Settings
$connect = new PDO("mysql:host=localhost;dbname=picture", "root", "");

$query = "SELECT * FROM `settings` ORDER BY id DESC LIMIT 1";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$count= 0;
foreach($result as $row){
	$count++;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $set['sitetitle'] ?> - Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script>
		function disableClick(){
			document.onclick=function(event){
			if (event.button == 2) {
				alert('Right Click Message');
				return false;
				}
			}
		}
 	</script>

</head>
	<body>
		
	<div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="fa fa-times"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand"></a></h1>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<!-- <li><a href="pricing.html">Pricing</a></li> -->
			<li class="active"><a href="contact.html">Contact</a></li>
		</ul>
		<!-- <h3 class="fh5co-lead">Connect with us</h3>
		<p class="fh5co-social-icons">
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</p> -->
	</div>
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="fa fa-bars"></i></a>
					<!-- <a class="navbar-brand" href="index.html">Hydrogen</a>		 -->
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->
	
	
	<div id="fh5co-main">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center mt-5 mb-3 display-5">Contact</h2>
					<div class="fh5co-spacer fh5co-spacer-sm"></div>
					<form action="#">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control font-15" placeholder="First Name">	
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control font-15" placeholder="Last Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="email" class="form-control font-15" placeholder="Email Address">
								</div>
								<div class="form-group">
									<textarea name="message" id="message" cols="30" class="form-control font-15" rows="10"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary font-18" value="Send Message">
								</div>
							</div>
						</div>
					</form>
					
				</div>
        		
        	</div>
       </div>
	</div>

	<footer class="footer text-center text-sm-start mb-5 m-5 font-15">
        &copy;
		<?php echo $row['footer']?> 
		<span class="text-muted d-none d-sm-inline-block float-end">
			<ul class="list-unstyled">
				<li class="d-inline-block ml-1 mr-1 p-3"><a href="terms.php" class="text-dark">Terms & Conditions</a></li>
				<li class="d-inline-block ml-1 mr-1 p-3"><a href="privacy.php" class="text-dark"></i>Privacy Policy </a></li>
				<li class="d-inline-block ml-1 mr-1 p-3"><a href="contact.php" class="text-dark"></i>Contact Us</a></li>
				<li class="d-inline-block ml-1 mr-1 p-3"><a href="aboutus.php" class="text-dark"></i>About Us</a></li>
			</ul>
        </span>
    </footer>
	<?php } ?>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="js/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>

	

	
	</body>
</html>
