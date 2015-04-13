<?php
	// iniciamos session
	session_start();

	// archivos necesarios
    require_once 'admin/includes/config.php';
    require_once 'admin/includes/conexion.php';

    // obtengo puntero de conexion con la db
    $dbConn = conectar();
		
	if (empty($_GET['id'])) {
		header("Location: index.php");
	}
	if (!empty($_GET['id'])) {
		$query = "SELECT id, title, location, year, description, images, cover, category, orderby FROM works WHERE id = {$_GET['id']}";
		$resultado = mysql_query($query, $dbConn) or die(mysql_error());
		$row = mysql_fetch_assoc($resultado);
		$id = $row['id'];
		$title = $row['title'];
		$location = $row['location'];
		$year = $row['year'];
		$description = $row['description'];
		$images = $row['images'];
		$cover = $row['cover'];
		$category = $row['category'];
		$orderby = $row['orderby'];
		$imagesdecoded = json_decode($images);
		$i = 0;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="NOISE">
		<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
		<title>0910 Studio · <?php echo $title; ?></title>
		<?php include("inc/head.php"); ?>
	</head>
	<body>
		<div class="main">
			<div class="container">
				<div class="row show">
					<img class="lazy" data-src="<? echo $imagesdecoded[1]; ?>" src="" alt=""/>
				</div>
				<div class="row show workheader">
					<div class="col-md-6">
						<h3><?php echo $title; ?><br/>—</h3>
					</div>
					<div class="col-md-6">
						<p>
							<?php echo $location; ?>, <?php echo $year; ?>
							<br/><br/>
							<?php echo $description; ?>
						</p>
					</div>		
				</div>
				<?php foreach ($imagesdecoded as $image) { ?>
					<? if(($cover != $i) && ($i > 1)){ ?>
						<div class="row show">
							<img class="lazy" data-src="<? echo $image; ?>" src="" alt=""/>
						</div>
					<? } $i++;
        			}
          		?>
			</div>
	    	<div class="row page section" id="contact">
	    		<p><a href="mailto:hola@nuevediez.com.ar" id="workwithus">hola@nuevediez.com.ar</a><br/>+54 11 3796-6019</p>
	    	</div>
	    </div>
	    <script type="text/javascript">
	    	jQuery(document).ready(function(){
	    		jQuery("img.lazy").lazy({ effect: "fadeIn", effectTime: 500 });
	    	});
	    </script>
	</body>
</html>
