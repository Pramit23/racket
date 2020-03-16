<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Calcutta Racket Club</title>
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
		<!--header-->
		<?php include('includes/header.php') ?>
		<!--/header-->
		<!-- banner -->
		<div class="w3l-banner-2">
			<h6>Committee</h6>
		</div>
	</div>
	<div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Committee
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Committee</li>
                </ol>
            </div>
        </div>
	<!-- about -->
	<div class="row">
	        <div class="col-md-12">
                <h2 style="text-align:center; color:#235689"><span style="font-size:28px;">Executive Committee For The
                        Year 2019-2020</span></h2>
                &nbsp;
			
                <table class="table table-striped">
                    <tbody>
                        <tr>
							<th bgcolor="blue"><strong><span style="color:#F0FFFF;">Id</span></strong></th>
                            <th bgcolor="blue"><strong><span style="color:#F0FFFF;">Name</span></strong></th>
                            <th bgcolor="blue"><strong><span style="color:#F0F8FF;">Designation</span></strong></th>
                        </tr>
						<?php 
				$sql="select * from tbl_commitee";
				$query=$dbh->prepare($sql);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
				
					if($query->rowCount()>0)
					{
						foreach($results as $result)
						{
            ?>
    
						<tr>
							<td><?php  echo $result->Id; ?></td>
                            <td><?php  echo $result->name; ?></td>
                            <td><?php  echo $result->designation; ?></td>
                        </tr>
						<?php
								 	$cnt=$cnt+1;

						}
					} 
			?>
	                    
                    </tbody>
                </table>
			</div>
		
        </div>
	</div>
	<!-- //about -->
	<!-- Middle -->
	<!-- //Middle -->
	<!-- blog -->
	<!--
<div class="blog" id="blog">
	<div class="container">
		<h3 class="agile-title">Events</h3>
		<div class="col-md-4-md-4 blog-grids">
			<div class="blog-full-wthree">
				<div class="blog-left-agileits">
					<p>April</p>
					<span>17</span>
				</div>	
				<div class="blog-right-agileits-w3layouts">
					<h4><a href="#" data-toggle="modal" data-target="#myModal2">club champion tournament 2017</a></h4>
					<p><a href="#" data-toggle="modal" data-target="#myModal2">Golf Club -</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>	
			<div class="blog-full-wthree">
				<div class="blog-left-agileits">
					<p>June</p>
					<span>22</span>
				</div>	
				<div class="blog-right-agileits-w3layouts">
					<h4><a href="#" data-toggle="modal" data-target="#myModal2">golf champions of the future start here!</a></h4>
					<p><a href="#" data-toggle="modal" data-target="#myModal2">Golf Club -</a></p>
				</div>	
				<div class="clearfix"> </div>
			</div>	
			<div class="blog-full-wthree">
				<div class="blog-left-agileits">
					<p>May</p>
					<span>15</span>
				</div>	
				<div class="blog-right-agileits-w3layouts">
					<h4><a href="#" data-toggle="modal" data-target="#myModal2">golf legend paul short to officially open our club</a></h4>
					<p><a href="#" data-toggle="modal" data-target="#myModal2">Golf Club -</a></p>
				</div>	
				<div class="clearfix"> </div>
			</div>	
		</div>
		<div class="col-md-4-md-4 blog-grids mid-blog-agile">
			<h5>Blog News</h5>	
		</div>
		<div class="col-md-4-md-4 blog-grids">
			<div class="blog-full-wthree">
				<div class="blog-left-agileits">
					<p>July</p>
					<span>26</span>
				</div>	
				<div class="blog-right-agileits-w3layouts">
					<h4><a href="#" data-toggle="modal" data-target="#myModal2">club champion tournament 2017</a></h4>
					<p><a href="#" data-toggle="modal" data-target="#myModal2">Golf Club -</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>	
			<div class="blog-full-wthree">
				<div class="blog-left-agileits">
					<p>May</p>
					<span>06</span>
				</div>	
				<div class="blog-right-agileits-w3layouts">
					<h4><a href="#" data-toggle="modal" data-target="#myModal2">golf champions of the future start here!</a></h4>
					<p><a href="#" data-toggle="modal" data-target="#myModal2">Golf Club -</a></p>
				</div>	
				<div class="clearfix"> </div>
			</div>	
			<div class="blog-full-wthree">
				<div class="blog-left-agileits">
					<p>June</p>
					<span>12</span>
				</div>	
				<div class="blog-right-agileits-w3layouts">
					<h4><a href="#" data-toggle="modal" data-target="#myModal2">golf legend paul short to officially open our club</a></h4>
					<p><a href="#" data-toggle="modal" data-target="#myModal2">Golf Club -</a></p>
				</div>	
				<div class="clearfix"> </div>
			</div>				
		</div>
		<div class="clearfix"> </div>
	</div>	
</div>
-->
	<!-- Modal5 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-info">
						<h4>Golf Club</h4>
						<img src="images/gr2.jpg" alt=" " class="img-responsive" />
						<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
						<p class="para-agileits-w3layouts">Duis sit amet nisi quis leo fermentum vestibulum vitae eget
							augue. Nulla quam nunc, vulputate id urna at, tempor tincidunt metus. Sed feugiat quam nec
							mauris mattis malesuada.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal5 -->
	<!-- //blog -->
	<!-- feature -->
	<!--
<div class="spe-w3l" id="feature">
	<div class="container">
		<div class="wthree-services-bottom-grids">
			<div class="col-md-4-md-6 wthree-services-right left-w3">
				<h3 class="title-w3">COME & JOIN OUR FRIENDLY CLUB</h3>
				<div class="wthree-services-right-bottom">
					<div class="services-right-bottom-bottom">
						<div class="col-md-4-xs-2 services-bottom-icon">
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
						<div class="col-md-4-xs-10 services-bottom-info text-w3l">
							<h5>Tournament Course</h5>
							<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-bottom-bottom">
						<div class="col-md-4-xs-2 services-bottom-icon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="col-md-4-xs-10 services-bottom-info text-w3l">
							<h5>FACILITIES</h5>
							<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-bottom-bottom">
						<div class="col-md-4-xs-2 services-bottom-icon">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</div>
						<div class="col-md-4-xs-10 services-bottom-info text-w3l">
							<h5>LESSONS FOR ALL AGES</h5>
							<p>In hac habitasse platea dictumst. Proin et ipsum non augue porttitor mollis eget semper nisl.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-4-md-6 wthree-services-left img-2-w3">
				<img src="images/mk2.png" alt="">
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
-->
	<!-- //feature -->
	<!-- team -->
	<!--
<div class="team" id="team">
	<h3 class="agile-title">Our Team</h3>
	<div class="agile_team_grids">
		<div class="col-md-4-md-2 agile_team_grid">
			<div class="ih-item circle effect1">
				<div class="spinner"></div>
				<div class="img"><img src="images/t1.jpg" alt=" " class="img-responsive" /></div>
				<div class="info">
					<div class="info-back">
					  <h4>Director</h4>
					  <p>Dolorem</p>
					</div>
				</div>
			</div>
			<h4>Alison Roy</h4>
			<p>Fusce eu semper mkskham lacus, sodales id elit.</p>
			<div class="social-icons team-icons">
				<ul>
					<li><a href="#" class="fa fa-facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter"> </a></li>
					<li><a href="#" class="fa fa-linkedin"> </a></li>
				</ul>
			</div> 
		</div>
		<div class="col-md-4-md-2 agile_team_grid">
			<div class="ih-item circle effect1">
				<div class="spinner"></div>
				<div class="img"><img src="images/t2.jpg" alt=" " class="img-responsive" /></div>
				<div class="info">
					<div class="info-back">
					  <h4>Manager</h4>
					  <p>Dolorem</p>
					</div>
				</div>
			</div>
			<h4>Ruthie Doe</h4>
			<p>Fusce eu semper mkskham lacus, sodales id elit.</p>
			<div class="social-icons team-icons">
				<ul>
					<li><a href="#" class="fa fa-facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter"> </a></li>
					<li><a href="#" class="fa fa-linkedin"> </a></li>
				</ul>
			</div> 
		</div>
		<div class="col-md-4-md-2 agile_team_grid t3">
			<div class="ih-item circle effect1">
				<div class="spinner"></div>
				<div class="img"><img src="images/t3.jpg" alt=" " class="img-responsive" /></div>
				<div class="info">
					<div class="info-back">
					  <h4>Trainer</h4>
					  <p>Dolorem</p>
					</div>
				</div>
			</div>
			<h4>Edward Crisp</h4>
			<p>Fusce eu semper mkskham lacus, sodales id elit.</p>
			<div class="social-icons team-icons">
				<ul>
					<li><a href="#" class="fa fa-facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter"> </a></li>
					<li><a href="#" class="fa fa-linkedin"> </a></li>
				</ul>
			</div> 
		</div>
		<div class="col-md-4-md-2 agile_team_grid t4">
			<div class="ih-item circle effect1">
				<div class="spinner"></div>
				<div class="img"><img src="images/t4.jpg" alt=" " class="img-responsive" /></div>
				<div class="info">
					<div class="info-back">
					  <h4>Maintenance</h4>
					  <p>Dolorem</p>
					</div>
				</div>
			</div>
			<h4>Saen kmhn</h4>
			<p>Fusce eu semper mkskham lacus, sodales id elit.</p>
			<div class="social-icons team-icons">
				<ul>
					<li><a href="#" class="fa fa-facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter"> </a></li>
					<li><a href="#" class="fa fa-linkedin"> </a></li>
				</ul>
			</div> 
		</div>
		<div class="col-md-4-md-2 agile_team_grid t4">
			<div class="ih-item circle effect1">
				<div class="spinner"></div>
				<div class="img"><img src="images/t6.jpg" alt=" " class="img-responsive" /></div>
				<div class="info">
					<div class="info-back">
					  <h4>Founder</h4>
					  <p>Dolorem</p>
					</div>
				</div>
			</div>
			<h4>John Koe</h4>
			<p>Fusce eu semper mkskham lacus, sodales id elit.</p>
			<div class="social-icons team-icons">
				<ul>
					<li><a href="#" class="fa fa-facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter"> </a></li>
					<li><a href="#" class="fa fa-linkedin"> </a></li>
				</ul>
			</div> 
		</div>
		<div class="col-md-4-md-2 agile_team_grid t4">
			<div class="ih-item circle effect1">
				<div class="spinner"></div>
				<div class="img"><img src="images/t5.jpg" alt=" " class="img-responsive" /></div>
				<div class="info">
					<div class="info-back">
					  <h4>Trainer</h4>
					  <p>Dolorem</p>
					</div>
				</div>
			</div>
			<h4>Lisn John</h4>
			<p>Fusce eu semper mkskham lacus, sodales id elit.</p>
			<div class="social-icons team-icons">
				<ul>
					<li><a href="#" class="fa fa-facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter"> </a></li>
					<li><a href="#" class="fa fa-linkedin"> </a></li>
				</ul>
			</div> 
		</div>
		<div class="clearfix"> </div> 
	</div>
</div>
-->
	<!-- //team -->
	<!-- Footer -->
	<?php include('includes/footer.php') ?>
	<!-- //Footer -->

	<!-- js-scripts -->
	<!-- js-files -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js-files -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
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