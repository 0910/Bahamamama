<?php
	if (!empty($_GET['section'])) {
		$section = $_GET['section'];
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Nuevediez">
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Bahamamama</title>
		<meta property="og:title" content="Nuevediez" />
		<meta property="og:type" content="web" />
		<meta property="og:image" content="img/0910fb.jpg" />
		<meta property="og:url" content="http://www.nuevediez.com.ar" />
		<meta property="og:description" content="" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/queries.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<link href="css/jpreloader.css" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.easing.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
		<script src="js/jpreloader.min.js"></script>
		<script src="js/magic.js"></script>
	</head>
	<body section="home">
		<div id="main">
			<div class="row header">
				<a class="menubtn" href="#"><i class="fa fa-bars"></i></a>
				<a id="cartbutton">
					Bag
					<div class="qty"><p>0</p></div>
				</a>
			</div>
			<div class="socialbox">
				<a href="#" class="social">
					<p><i class="fa fa-facebook"></i></p>
				</a>
				<a href="#" class="social">
					<p><i class="fa fa-instagram"></i></p>
				</a>
			</div>
			<div class="brandbox">
				<a class="brand" href="#">Bahamamama</a>
			</div>
			<img class="logo" src="img/logo.svg" alt=""/>
			<div class="arrow"></div>
			<div class="row page" id="home">
				<div class="homesplash">
					<div class="container">
						<div class="splashtext">
							<h1>
								Bahama<br/>
								Mama<br/>
								Pura<br/>
								Colombiana
							</h1>
						</div>
						<div class="col-md-offset-3 col-md-9">
							<img src="img/home.jpg" alt=""/>
						</div>
					</div>
				</div>
			</div>
			<div class="row page" id="works">
				<div class="container">
		    		<div class="product col-sm-6 col-md-6">
		    			<a class="revealOnScroll" ratio="3" scale="1" href="detail.php">
		    				<div class="name">
		    					<p>Acid Wash</p>
		    				</div>
		    				<img class="lazy" src="img/products/bahamamama-acid-wash.jpg">
		    			</a>
		    		</div>
		    		<div class="product col-sm-6 col-md-6">
		    			<a class="revealOnScroll" ratio="12" scale="0.9" href="detail.php">
		    				<div class="name">
		    					<p>Noodle Soup</p>
		    				</div>
		    				<img class="lazy" src="img/products/bahamamama-noodle-soup.jpg">
		    			</a>
		    		</div>
		    		<div class="product col-sm-6 col-md-6">
		    			<a class="revealOnScroll" ratio="2" scale="0.95" href="detail.php">
		    				<div class="name">
		    					<p>Bite Me One Piece</p>
		    				</div>
		    				<img class="lazy" src="img/products/bahamamama-bite-me-one-piece.jpg">
		    			</a>
		    		</div>
		    		<div class="product col-sm-6 col-md-6">
		    			<a class="revealOnScroll" ratio="16" scale="1" href="detail.php">
		    				<div class="name">
		    					<p>Don't Tell Your Parents</p>
		    				</div>
		    				<img class="lazy" src="img/products/bahamamama-dont-tell-your-parents.jpg">
		    			</a>
		    		</div>
		    		<div class="product col-sm-6 col-md-6">
		    			<a class="revealOnScroll" ratio="15" href="detail.php">
		 					<div class="name">
		    					<p>Bite Me Bikini</p>
		    				</div>
		 					<img class="lazy" src="img/products/bahamamama-bite-me-bikini.jpg">
		 				</a>
		 			</div>
		 			<div class="product ol-sm-6 col-md-6">
		 				<a class="revealOnScroll" ratio="5" href="detail.php">
		 					<div class="name">
		    					<p>Candy Flip</p>
		    				</div>
		 					<img class="lazy" src="img/products/bahamamama-candy-flip.jpg">
		 				</a>
		 			</div>
		 			<div class="product col-sm-6 col-md-6">
		 				<a class="revealOnScroll" ratio="1" href="detail.php">
		 					<div class="name">
		    					<p>Purple Haze</p>
		    				</div>
		 					<img class="lazy" src="img/products/bahamamama-purple-haze.jpg">
		 				</a>
		    		</div>
		    		<div class="product col-sm-6 col-md-6">
		    			<div class="quote revealOnScroll">
			 				<h2>
			 					use #holymama - THE COOLEST PICS WILL BE POSTED
			 				</h2>
			 			</div>
		    		</div>
		    	</div>
			</div>
		</div>
	</body>
</html>
