<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Calcutta Racket Club | Single Gallery </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Calcutta Racket Club" />
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
		<?php 
$gid=intval($_GET['gid']);
$sql = "SELECT * FROM tbl_gallery WHERE Id=:gid";

$query = $dbh->prepare($sql);
$query -> bindParam(':gid', $gid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
		<!-- banner -->
		<div class="w3l-banner-2">
			<h6><?php echo htmlentities($result->category) ?></h6>
		</div>
	</div>
	<!-- gallery -->
	<div class="container-fluid">
		<div class="gallery-fluid">
			<div class="gallery-grids">
				<div class="col-md-4 col-xs-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
					<div class="grid">

						<figure class="effect-apollo">
							<a class="example-image-link"
								href="admin/images/<?php echo htmlentities($result->image_1) ?>"
								data-lightbox="example-set" data-title="">
								<img src="admin/images/<?php echo htmlentities($result->image_1) ?>" alt="" />
								<figcaption>
									<h3><?php echo htmlentities($result->title_1) ?></h3>
									<p><?php echo htmlentities($result->description_1) ?></p>
								</figcaption>
							</a>
						</figure>

						<figure class="effect-apollo">
							<a class="example-image-link"
								href="admin/images/<?php echo htmlentities($result->image_2) ?>"
								data-lightbox="example-set" data-title="">
								<img src="admin/images/<?php echo htmlentities($result->image_2) ?>" alt="" />
								<figcaption>
									<h3><?php echo htmlentities($result->title_2) ?></h3>
									<p><?php echo htmlentities($result->description_2) ?></p>
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
	<script>
		var array = [{
				id: "1",
				date: "Mar 12 2012 10:00:00 AM"
			},
			{
				id: "2",
				date: "Mar 8 2012 08:00:00 AM"
			}
		];

		var el = document.getElementById("GFG_P");

		function geeks_outer() {
			array.sort(GFG_sortFunction);
			el.innerHTML = JSON.stringify(array);
		}

		function GFG_sortFunction(a, b) {
			var dateA = new Date(a.date).getTime();
			var dateB = new Date(b.date).getTime();
			return dateA > dateB ? 1 : -1;
		};
	</script>
	<!-- //js-scripts -->
</body>

</html>