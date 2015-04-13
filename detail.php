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
	<body section="detail">
		<div class="row header">
			<a class="menubtn" href="index.php"><i class="fa fa-times"></i></a>
			<a id="cartbutton" class="on">
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
		<div class="brandbox on">
			<a class="brand" href="#">Candy Flip</a>
		</div>
		<img class="product-bg" src="img/products/bahamamama-dont-tell-your-parents.jpg" alt=""/>
		<div class="product-detail">
			<div class="container">
				
				<p>$122 USD</p>
				<button class="btn product-add">Add to Cart</button>
				<p>Free Shipping in BOG</p>
			</div>
		</div>
	</body>
</html>
