<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Nuevediez">
		<link rel="shortcut icon" href="../../img/favicon.ico">
		<title>0910 Studio · Cool Wood</title>
		<meta property="og:title" content="Nuevediez" />
		<meta property="og:type" content="web" />
		<meta property="og:image" content="img/0910fb.jpg" />
		<meta property="og:url" content="http://www.nuevediez.com.ar" />
		<meta property="og:description" content="" />
		<link rel="stylesheet" href="../../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../css/main.css" />
		<link rel="stylesheet" href="../../css/queries.css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
		<script type="text/javascript" src="../../js/jquery.easing.js"></script>
		<script type="text/javascript" src="../../js/jquery.scrollTo.min.js"></script>
		<script type="text/javascript" src="../../js/jquery.lazy.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row page" id="studio">
				<div class="container">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="row header">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<a href="../../index.php" class="logo">O9IO</a>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<a class="workbot" href="../../index.php">Work</a>
								<a class="studiobot" href="../../index.php?section=studio">Studio</a>
							</div>
						</div>
						<div class="row about">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<p>
									Cool Wood
								</p>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<p>
									Website & E-Commerce para Cool Wood —
									<br/>
									Muebles y objetos de diseño.
									<br/>
									Argentina, 2014
									<br/>
									<br/>
								</p>
								<p class="small">Ph. Ignacio Gilardoni</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row page show" style="padding-top:5%;">
				<div class="container">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<img class="lazy" data-src="00.jpg" src="" alt=""/>
					</div>
				</div>
			</div>
			<div class="row page show">
				<div class="container">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<img class="lazy" data-src="01.jpg" src="" alt=""/>
					</div>
				</div>
			</div>
			<div class="row page show">
				<div class="container">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<img class="lazy" data-src="02.jpg" src="" alt=""/>
					</div>
				</div>
			</div>
			<div class="row page show">
				<div class="container">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<img class="lazy" data-src="03.jpg" src="" alt=""/>
					</div>
				</div>
			</div>
			<div class="row page show" style="padding-bottom:5%;">
				<div class="container">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<img class="lazy" data-src="04.jpg" src="" alt=""/>
					</div>
				</div>
			</div>
	    	<div class="row page" id="about">
	    		<div class="container">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<p>
							<a class="control" href="../../index.php">
								<img src="../../img/close.png"/>
							</a>
							<a class="control up" href="index.php">
								<img src="../../img/up.png"/>
							</a>
						</p>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<p>
							Contanos acerca de tu proyecto.
							<br/><br/>
							<a href="mailto:info@nuevediez.com.ar">info@nuevediez.com.ar</a>
							<br/>
							+54911 37966019
						</p>
					</div>
				</div>
			</div>
		</div>
	    <script type="text/javascript">
	    	$(function(){
	    		jQuery("img.lazy").lazy({ effect: "fadeIn", effectTime: 500 });
	    		$('a.up').click(function(event){
	    			event.preventDefault();
					$(window).scrollTo(0, 800);
				});
	    	});
	    </script>
	</body>
</html>
