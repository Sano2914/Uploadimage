
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hydrogen &mdash; A free HTML5 Template by FREEHTML5.CO</title>
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
	<link rel="shortcut icon" href="images/img_1.jpg">

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
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>
	<?php
		//Logo Settings
		$connect = new PDO("mysql:host=localhost;dbname=picture", "root", "");

		$sql = "SELECT * FROM `settings` ORDER BY id DESC LIMIT 1";
		$statement = $connect->prepare($sql);
		$statement->execute();
		$output = $statement->fetchAll();
		$count= 0;
		foreach($output as $set){
			$count++;
	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid m-3 p-2">
            <a class="navbar-brand font-15" href="index.php">
			<?php echo '<img src="data:image;base64,'.base64_encode($set['logo']).'" alt="Image" style="width:50px; height:50px;">'.$set['sitetitle'].'' ; ?>
                <!-- <img src="images/logo-sm.png" height="26" alt="" class="m-4"> -->
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse font-18" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
					<a class="nav-link" href="png.php">Png Images</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="background.php">Background Images</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="vector.php">Vector</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="psd.php">Psd</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="photo.php">Photo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="more.php">More</a>
					</li>
                </ul>
                <ul class="navbar-nav mr-5 align-items-center">
					<div class="app-search-topbar">
						
						<button type="submit" class="btn mb-1 font-18"><input type="search" id="search" name="search" class="from-control btn top-search font-15 mb-2"  onkeyup="search()"><i class="fa fa-search mb-2"></i></button>
					</div>
        		</ul>
				<ul class="navbar-nav mr-5 mt-4 align-items-center">    
					<li class="nav-item">
						<button class="btn nav-link font-15"><a href="upload.php"><i class="fa fa-upload"></i>Upload</a></button>
					</li>	
				</ul>
				<ul class="navbar-nav mr-5 mb-2 align-items-center">
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn mb-4">Menu <i class="fa fa-bars"></i></a>
				</ul>
            </div>
        </div><!--end container-->
    </nav>	
	<div id="fh5co-offcanvass">
		<a href="index.php" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="fa fa-times"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand"></a></h1>
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.html">About</a></li>
			<!-- <li><a href="pricing.html">Pricing</a></li> -->
			<li><a href="contact.php">Contact</a></li>
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
	<main role="main">
		<section class="mt-4 mb-5">
			<header id="fh5co-header" role="banner">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							
							<!-- <a class="navbar-brand" href="index.php"></a>		 -->
						</div>
					</div>
				</div>
			</header>
			<!-- END .header -->
			
			
			<div id="fh5co-main">
				<div class="container">
					<?php 
						$query1 = "SELECT * FROM post ORDER BY id DESC";
						$statement = $connect->prepare($query1);
						$statement->execute();
						$result1 = $statement->fetchAll();
					?>
					<div class="row">
						<?php
							$count = 0;
							foreach($result1 as $set1){
								$count++;         
						?>
						<div id="fh5co-board" class="col-lg-3">
                            <div class="item">
                                <div class="animate-box">   
                                    <?php echo '<img src="data:image;base64,'.base64_encode($set1['file']).'" >' ; ?>                    
                                </div><!--end card-body-->
								<div class="fh5co-desc text-end" style="float: right">
									<h2 class="card-title title"><?php echo $set1['title'] ?></h2>
									<div class="more">
										<a href="download.php?download=<?php echo $set1['title']?>">
										<i class="fa fa-download font-15" aria-hidden="true"></i> </a>
									</div>
								</div>
								
                            </div><!--end card-->
                        </div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>	
	</main>	

	<footer class="footer text-center text-sm-start mb-5 m-5 font-15">
        &copy;
		<?php echo $set['footer']?> 
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
