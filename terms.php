<?php
$connect = new PDO("mysql:host=localhost;dbname=picture", "root", "");

$query = "SELECT * FROM `settings` ORDER BY id DESC LIMIT 1";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>
<?php
	$count= 0;
	foreach($result as $set){
		$count++;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $set['sitetitle'] ?> - Terms & Conditions</title>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid m-3 p-2">
            <a class="navbar-brand font-15" href="index.php">
			<?php echo '<img src="data:image;base64,'.base64_encode($set['logo']).'" alt="Image" style="width:50px; height:50px;">'; ?>
                <!-- <img src="images/logo-sm.png" height="26" alt="" class="m-4"> -->
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse font-18" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<?php
						$query = "SELECT * FROM category LIMIT 5";
						$statement = $connect->prepare($query);
						$statement->execute();
						$result = $statement->fetchAll();
						$count = 0;
						foreach($result as $row){
							$count++;
					?>
					<li class="nav-item">
						<a class="nav-link" href="tag.php?tag=<?php echo $row['categoryname']?>"><?php echo $row['categoryname'];?></a>
					</li>
					<?php } ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
    					<div class="dropdown-menu shadow-lg" aria-labelledby="dropdown01">
							<?php 
								$query2 = "SELECT * FROM category LIMIT 5, 523547896";
								$statement = $connect->prepare($query2);
								$statement->execute();
								$result2 = $statement->fetchAll();
								$count = 0;
								foreach($result2 as $row2){
									$count++;
							?>
    						<a class="dropdown-item font-15" href="tag.php?tag=<?php echo $row2['categoryname']?>"><?php echo $row2['categoryname']; } ?> </a>
							
    					</div>
					</li>
					<!-- <li class="nav-item">
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
					</li> -->
					
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
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="fa fa-times"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand font-18"></a></h1>
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.html">About</a></li>
			<!-- <li><a href="pricing.html">Pricing</a></li> -->
			<li><a href="contact.php">Contact</a></li>
		</ul>
		
	</div>
    <main role="main">
        
    
    <section class="bg-gray200 pt-5 pb-5">
        <div class="content-wrap pb-0">
            <div class="container">
                <div class="heading-block border-bottom-0 center mx-auto mb-0">
                        
                    <h2 class="display-4 fw-bold">Terms & Conditions</h2> <br>
                    <!-- <p>Please fill in the below details to provide analytics on your IT spend.</p> -->
                </div>
                <div class="card border-3 h-100 shadow-sm font-15" style="background: transparent;">
                    <h3 class="card-header font-20 p-4 color1">General</h3>
                    <div class="card-body p-4">
                        <p> Please read the following terms of service agreement carefully. by accessing or using our sites and our services, you hereby agree to be bound by the terms and all terms incorporated herein by reference. it is the responsibility of you, the user, customer, or prospective customer to read the terms and conditions before proceeding to use this site. if you do not expressly agree to all of the terms and conditions, then please do not access or use our sites or our services.</p>

                        <p> Accessing and using the Website implies that the User has read and accepts to be bound by these Terms without exception. In case the User does not accept the Terms or have any objection to any part of the present Terms the User must not use the Website. </p>
                            
                        <p> YOUR NAME may modify the Terms at any time and thus we recommended that the Terms are reviewed on a regular basis by the User.</p>
                            
                        <p>   Some Services provided through the Website may be subject to specific conditions or instructions that must be accepted by the User prior to the provision of the relevant Service. These specific conditions may be imposed by YOUR NAME. Such specific conditions shall apply in addition to the Terms and in case of conflict shall supersede the Terms. Accordingly the User must read and accept such specific conditions before the provision of the relevant service. Likewise, in respect of collection and processing personal data, the Privacy Policy will apply.</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Intellectual Property</h3>
                    <div class="card-body p-4">
                        <p> As all Png Images in YOUR NAME are derived from the network users to share(self-design or cut out from unknown user's JPG files), so YOUR NAME does not have sufficient monitoring capabilities to review the picture there are infringement and other circumstances. The user should consciously abide by the copyright law and other relevant laws and regulations, shall not infringe the legal rights of this site and the right holder, To YOUR NAME and any third party losses, infringing users should bear full responsibility.</p>
                        <p>YOUR NAME WEBSITE is in compliance with 17 U.S.C. §512 and the Digital Millennium Copyright Act ("DMCA"). It is our policy to respond to any infringement notices and take appropriate actions under the Digital Millennium Copy right Act ("DMCA") and other applicable intellectual property laws. As all of YOUR NAMEs content is user-submitted, some of it will inevitably be the work of others. We strive to respect copyright law, so if you own the rights to an image you find on the site, you can contact us at EMAIL ID with details to have the relevant images removed. We can also add you to an upload blacklist to prevent this from happening in the future.</p>
                        <p>PNGWing encourages users to monitor the work on the site when the copyright owner to file an infringement allegation and produce sufficient copyright documents, YOUR NAME will engage in the investigate, the infringing works will be deleted in a few days after the infringement was confirmed.</p>
                        <p>Without the permission of YOUR NAME, No one can use YOUR NAME to copy or imitate the site or non-YOUR NAME server to establish a mirror, YOUR NAME logo, source code, and all the page layout design, copyright PNGWing all The Unauthorized, not used for any site other than YOUR NAME. YOUR NAME that all users enter the YOUR NAME home page and the page has been carefully read the terms of this agreement and fully agree, please understand!
                        </p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Post Content</h3>
                    <div class="card-body p-4">
                        <p> Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, Png Images, or other material ("Content"). You are responsible for the Content that you post on or through the Service, including its legality, reliability, and appropriateness.</p>
                        <p>By posting Content on or through the Service, You represent and warrant that: (i) the Content is yours (you own it) and/or you have the right to use it and the right to grant us the rights and license as provided in these Terms, and (ii) that the posting of your Content on or through the Service does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person or entity. We reserve the right to terminate the account of anyone found to be infringing on a copyright.</p>
                        <p>You retain any and all of your rights to any Content you submit, post or display on or through the Service and you are responsible for protecting those rights. We take no responsibility and assume no liability for Content you or any third party posts on or through the Service. However, by posting Content using the Service you grant us the right and license to use, modify, publicly perform, publicly display, reproduce, and distribute such Content on and through the Service. You agree that this license includes the right for us to make your Content available to other users of the Service, who may also use your Content subject to these Terms.</p>
                        <p>YOUR NAME has the right but not the obligation to monitor and edit all Content provided by users.</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Disclaimer</h3>
                    <div class="card-body p-4">
                        <p> The User acknowledges and agrees that uses the Website and its Services at the User’s own risk and under the User’s responsibility and therefore YOUR NAME does not accept any responsibility for misuse or use in breach of these Terms.</p>
                        <p>YOUR NAME cannot be held responsible for any copyright violations that may arise from incorrect or inappropriate use of any images downloaded from this website. All users of YOUR NAME download and use our Graphics, PNG cliparts, photos, Icons are at their own risk, and are entirely responsible for subsequent image usage and application.</p>
                    </div>
                </div>
                
            </div>
                            
        </div>
    
    </section>
        
    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/theme.js"></script>
    
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
