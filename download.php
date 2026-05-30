<?php
$connect = new PDO("mysql:host=localhost;dbname=picture", "root", "");

$query = "SELECT * FROM `settings` ORDER BY id DESC LIMIT 1";
$statement = $connect->prepare($query);
$statement->execute();
$output = $statement->fetchAll();

?>
<?php
	$count= 0;
	foreach($output as $set){
		$count++;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $set['sitetitle'] ?> - Download</title>
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
	<link rel="shortcut icon" >

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
    <!-- <link href="css/css/metisMenu.min.css" rel="stylesheet" type="text/css" /> -->
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
		<a class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="fa fa-times"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand font-18"></a></h1>
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.html">About</a></li>
			<!-- <li><a href="pricing.html">Pricing</a></li> -->
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
    <main role="main">
        
    
    <section class="bg-gray200 pt-5 pb-5 font-15">
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'picture');
        if(isset($_GET['download'])){
            $title = $_GET['download'];
            $query1 = "SELECT * FROM `post` WHERE title='$title'";
            $result1 = mysqli_query($conn , $query1);
            $row1 = mysqli_fetch_assoc($result1);
        }
    ?>
    <div class="container">
    	<div class="row">
			<div class="col-md-3">
			<img src="images/ad1.jpg" style="height: 725px; width: 250px"/>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9561946030523125"
									crossorigin="anonymous">
							</script>
							<!-- testing -->
							<ins class="adsbygoogle"
								style="display:block"
								data-ad-client="ca-pub-9561946030523125"
								data-ad-slot="7307543487"
								data-ad-format="auto"
								data-full-width-responsive="true">
							</ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
			</div>
    		<div class="col-md-6">
    			<article class="card">
					<?php echo '<img src="data:image;base64,'.base64_encode($row1['file']).'" alt="Image" class="card-img-top mb-2">'; ?>
    				<!-- <img class="card-img-top mb-2" src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e0245bb4e87077312cc3d102e68c1efd&auto=format&fit=crop&w=735&q=80" alt="Card image"> -->
					<div class="card-body">
						<h5 class="card-title font-18">PNG Tags</h5>
						<p class="p-3">Computer icons Logo, Instagram, Text, Symbol, Portable Document Format Png </p>
						
						<h5 class="card-title font-18">PNG Info</h1>
						<ul>
							<li>Dimentions 512 X 512px</li>
							<li>File Size: 11.19KB</li>
							<li>Format Type: Image/Png</li>
							
						</ul>

						<h5 class="card-title font-18">Licesne:</h1>
						<ul>
							<li>Non Commercial Use, DMCA</li>
							<li><a href="contactus.php">Contact Us</a></li>
						</ul>
						<h5 class="card-title font-18">Share This: <a href="#"><i class="fa fa-share"></i></a></h1><br><br>
						<div class="form group">                        
							<a href="downloads.php?image=<?php echo $row1['id']?>"><button class="btn btn-primary col-lg-12 mb-3 font-18" id="submit" name="submit"><i class="fa fa-download"></i>Download</button></a>                           
						</div>
						<!-- <small class="d-block"><a class="btn btn-sm btn-gray200" href="#"><i class="fa fa-external-link"></i> Visit Website</a></small> -->
						
					</div>
    			</article>
    		</div>
			<div class="col-md-3">
			<img src="images/ad1.jpg" style="height: 725px; width: 250px"/>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9561946030523125"
									crossorigin="anonymous">
							</script>
							<!-- testing -->
							<ins class="adsbygoogle"
								style="display:block"
								data-ad-client="ca-pub-9561946030523125"
								data-ad-slot="7307543487"
								data-ad-format="auto"
								data-full-width-responsive="true">
							</ins>
							<script>
								(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
			</div>
    	</div>
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
                            <div class="item row">
                                <div class="animate-box card">   
                                    <?php echo '<img src="data:image;base64,'.base64_encode($set1['file']).'" >' ; ?>                    
                                </div><!--end card-body-->
								<div class="fh5co-desc">
									<div style="float:left">
										<h2 class="card-title title"><?php echo $set1['title'] ?></h2>
									</div>
									<div class="more" style="float:right">
										<a href="download.php?download=<?php echo $set1['title']?>">
										<i class="fa fa-download font-20" aria-hidden="true" style="float: right" ></i> </a>
									</div>
								</div>	
                            </div><!--end card-->

                        </div>
						<?php } ?>
					</div>
				</div>
			</div>
	</div>
    </section>
        
    </main>
    
    <footer class="footer text-center text-sm-start mb-5 m-5 font-15">
        &copy; <script>
        document.write(new Date().getFullYear())
        </script>
        <?php echo $set['footer']; ?> 
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
