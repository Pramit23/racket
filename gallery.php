<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Golf Club a Sports Category Bootstrap Responsive Website Template | Gallery :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"
		content="Golf Club web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="css/lightbox.css"> <!-- Gallery-CSS -->
	<!-- //css files -->
	<!-- online-fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic,latin-ext,vietnamese"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
	<div class="main-agile">
		<!-- header -->
		<?php include('includes/header.php') ?>
		<!-- //header -->
		<!-- banner -->
		<div class="w3l-banner-2">
			<h6>Gallery</h6>
		</div>
	</div>


	<!-- gallery -->
	<div class="container-fluid">
		<div class="gallery-fluid">


			<div class="btnsection">
				<?php 
	
	$sql1="SELECT * 
	FROM tbl_gallery join tbl_category On tbl_gallery.name=tbl_category.name";
	$query1=$dbh->prepare($sql1);
		$query1->execute();
		$results1=$query1->fetchAll(PDO::FETCH_OBJ);
	
		if($query1->rowCount()>0)
		{
			foreach($results1 as $result1)
			{
			?>
				<!--<center>
					<button type="submit" class="btn btn-primary"><?php echo htmlentities($result1->name) ?></button>
				</center>-->
			</div>
			<div class="gallery-grids">
				<div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-apollo">
							<a class="example-image-link"
								href="admin/images/<?php echo htmlentities($result1->image) ?>"
								data-lightbox="example-set" data-title="">
								<img src="admin/images/<?php echo htmlentities($result1->image) ?>" alt="" />
								<figcaption>
									<h3><?php echo htmlentities($result1->title) ?></h3>
									<p><?php echo htmlentities($result1->description) ?></p>
								</figcaption>
							</a>
						</figure>
					</div>
				</div>
				
				<?php 
			} 
			}
			?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //gallery -->
	<!-- Footer -->
	<?php include('includes/footer.php') ?>
	<!-- //Footer -->

	<!-- js-scripts -->
	<!-- js-files -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js-files -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- //gallery -->
	<script src="js/lightbox-plus-jquery.min.js"> </script>
	<!-- //gallery -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- //js-scripts -->
</body>

</html>