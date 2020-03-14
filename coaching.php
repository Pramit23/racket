<?php
session_start();
error_reporting(0);
include('includes/config.php'); 
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Golf Club a Sports Category Bootstrap Responsive Website Template | About :: w3layouts</title>
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

    <style>
        .col-md-3 {
            font-size: 17px;
        }
    </style>
</head>

<body>
    <div class="main-agile">
        <!--header-->
        <?php include('includes/header.php') ?>
        <!--/header-->
        <!-- banner -->
        <div class="w3l-banner-2">
            <h6>Coaching</h6>
        </div>
    </div><br>
    <div class="container">
        <h1 class="text-center">Our Coaches</h1>
        <br><br>
        <div class="row">
        <?php 
				$sql2="select * from tbl_coach";
				$query2=$dbh->prepare($sql2);
					$query2->execute();
					$results2=$query2->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
				
					if($query2->rowCount()>0)
					{
						foreach($results2 as $result2)
						{
            ?>
            <div class="col-md-3">
                <h4 class="text-center"><?php echo htmlentities($result2->name)?></h4><br>
                <p class="text-justify"><?php echo  htmlspecialchars_decode(stripslashes($result2->description))?></p>
            </div>
        <?php
                        }
                    }
            ?>
        </div>
        <br>
        <h1 style="color:#007ACC" class="text-center">National Junior Development Program(NJDP)</h1><br>
        <div class="col-md-4">
            <div class="image-box">
                <img src="images/NJDP.png" height="300" width="100%" class="responsive"><br><br>
                <button type="submit" class="btn btn-success">
                    <h4><a href="content/form.pdf"><span><i class="fas fa-arrow-circle-down"></i>&nbsp;Download Application form</span></a></h4>
                </button>
            </div>
        </div>
        <div class="col-md-8">
            <h4>
                <p class="text-justify">

                    To cradle future squash the Club started a National Junior Development Program in November 2002 to
                    popularize the game amongst school children and create an environment for the participants to
                    develop their skills in the game to a competitive level. Qualified coaches impart training at all
                    levels.

                    This program is a part of National Junior Development Program (NJDP) which is the official coaching
                    system adopted by Squash Racket Federation of India (SRFI). The program participants are divided
                    into three categories i.e. Beginners - Talented – Elite

                    Participants need to put in 4 to 6 hours a week. The Elite squad would obviously need to put in
                    additional hours.

                    More than 600 children have trained at the Club under our professional coaches. We are perhaps the
                    only club that gives memberships to children and in their names. The only condition is that they
                    have to be interested in squash. This is with an eye to the future. The idea is to groom the next
                    generation of squash enthusiasts.
                </p>
            </h4>
        </div>
        <br><br>
        <h1 style="color:#007ACC" class="text-center">Communication</h1><br>
        <h4>
            <p class="text-justify">

                We welcome all schools, educational institution, parents and interested individuals to nominate children
                between the ages of 6-15 for the above program at the club.

                Please feel free to write or speak to the following club officials who shall be pleased to elaborate on
                the program.
            </p>
        </h4>

        <div class="row">
            <div class="col-md-3">
                <h4>Mr. H. Shroff</h4>
            </div>
            <div class="col-md-3">
                <h5>- Jt. Hony. Secretary & coordinator (NJDP) </h5>
            </div>
            <div class="col-md-6">
                <!--keep it empty-->
            </div><br>
            <div class="col-md-3">
                <h4>Mr. Dalip Tripathi</h4>
            </div>
            <div class="col-md-3">
                <h5>- Chief Coach </h5>
                <br>
                <h5>
                    <p style="color:blue"><span class="glyphicon glyphicon-phone"></span>+919903032547</p>
                </h5>
            </div>
            <div class="col-md-6">
                <!--keep it empty-->
            </div>
        </div>


        <br><br>
        <h1 style="color:#007ACC" class="text-center">State Development Squad (SDS)</h1><br>
        <h4>
            <p class="text-justify">



                The State Development Squad (SDS) is the upgraded version of the National Junior Program (NJDP). If the
                participants of the NJDP are doing well, the candidate will be promoted to SDS for further improve
                through the intensive coaching. The program has graded certification for the participants at each level.
                Nominations for entries to national & international tournaments are made for the talented and elite
                players. More then 50 players are already benefited from the program and represented Bengal in various
                National & International tournament.

                Some of the names of the participant are given. Abhinav Rampuria, Anirudh Todi, Anshuman Beri, Anshuman
                Jajodia, Anurag Shah, Arjun Arora, Ashnit Sethia, Ayush Bengani, Devesh Jhunjhunwala, Harsh Mallya,
                Kabir Jaggi, Kanishka Bagaria, Karan Kishorpuria, Mukund Chaudhary, Neelaksha Bhutoria, Nikhil Bhambani,
                Nikhil Khemka, Prateek Sekhani, Raghav Aagrawal, Raghav Bajoria, Rahul Bangur, Rishab Mundra, Rishi
                Tandon, Rohan Bajpeyi, Rohit Bansal, Rupangi Mehta, Shashwat Phumbhra, Snehal Bathwal, Soham Bathwal,
                Sreyansh Prasad, Srivats Bagaria, Utkarsh Drolia, Vedant Bubna, Vikram Chopra, Dhreuv Dabrwiwal, Karan
                Kishorepuria, Vivek Dinodia & Krish Kapur.

            </p>
        </h4>
        <br>

        <div class="text-center">
            <img src="images/coaching.png" class="rounded" height="400" width="100%" class="responsive">
        </div>
    </div><br>

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