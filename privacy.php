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
	<title><?php echo $set['sitetitle'] ?> - Privacy Policy</title>
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
			<?php echo '<img src="data:image;base64,'.base64_encode($set['logo']).'" alt="Image" style="width:50px; height:50px;">' ; ?>
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
                        
                    <h2 class="display-4 fw-bold">Privacy Policy</h2> <br>
                    <!-- <p>Please fill in the below details to provide analytics on your IT spend.</p> -->
                </div>
                <div class="card border-3 h-100 shadow-sm font-15" style="background: transparent;">
                    <h3 class="card-header font-20 p-4 color1">General</h3>
                    <div class="card-body p-4">
                        <p> At YOUR NAME, accessible from YOUR NAME WEBSITE, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by YOUR NAME and how we use it.</p>

                        <p> If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at YOUR MAIL ID </p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Log Files</h3>
                    <div class="card-body p-4">
                        <p> YOUR NAME follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Cookies and Web Beacons</h3>
                    <div class="card-body p-4">
                        <p>Like any other website, YOUR NAME uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Google DoubleClick DART Cookie</h3>
                    <div class="card-body p-4">
                        <p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Privacy Policies</h3>
                    <div class="card-body p-4">
                        <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on YOUR NAME, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
                        <p>Note that YOUR NAME has no access to or control over these cookies that are used by third-party advertisers.</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Third Pary Privacy Policies</h3>
                    <div class="card-body p-4">
                        <p>YOUR NAME Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>
                        <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Children's Information</h3>
                    <div class="card-body p-4">
                        <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
                        <p>PNGWing does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Online Privacy Policy Only</h3>
                    <div class="card-body p-4">
                        <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in YOUR NAME. This policy is not applicable to any information collected offline or via channels other than this website.</p>
                    </div>
                    <h3 class="card-header font-20 p-4 color1">Consent</h3>
                    <div class="card-body p-4">
                        <p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
                    </div>
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
