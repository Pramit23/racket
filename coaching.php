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
        <?php 
				$sql3="select * from tbl_courses";
				$query3=$dbh->prepare($sql3);
					$query3->execute();
					$results3=$query3->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
				
					if($query3->rowCount()>0)
					{
						foreach($results3 as $result3)
						{
            ?>
        <h1 style="color:#007ACC" class="text-center"><?php echo $result3->name; ?></h1><br>
        <div class="col-md-4">
            <div class="image-box">
                <img src="admin/images/<?php echo $result3->image; ?>" height="300" width="100%"
                    class="responsive"><br><br>
                <button type="submit" class="btn btn-success">
                    <h4><a href="content/form.pdf"><span>Download
                                Application form</span></a></h4>
                </button>
            </div>
        </div>
        <div class="col-md-8">
            <h4>
                <p class="text-justify">
                    <?php  echo htmlspecialchars_decode(stripslashes($result3->description)) ?>
                </p>
            </h4>
        </div>
        <?php
                        }
                    }
?>
        <br><br><br><br>
        <h1 style="color:#007ACC" class="text-center">Communication</h1><br>
        <h4>
            <p class="text-justify">

                We welcome all schools, educational institution, parents and interested individuals to nominate children
                between the ages of 6-15 for the above program at the club. Please feel free to write or speak to the
                following club officials who shall be pleased to elaborate on the program.

            </p>
        </h4>

        <?php 
	$sql4="select * from tbl_comms";
    $query4=$dbh->prepare($sql4);
        $query4->execute();
        $results4=$query4->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
    
        if($query4->rowCount()>0)
        {
            foreach($results4 as $result4)
            {
?>
       <center> 
           <div class="row">
            <div class="col-md-4">
                <h4><?php echo $result4->name; ?></h4>
            </div>
            <div class="col-md-4">
                <h5><?php echo $result4->post; ?></h5>
            </div>
            <div class="col-md-4">
                <h5>
                    <p style="color:blue"><span class="glyphicon glyphicon-phone"></span><?php echo $result4->number; ?>
                    </p>
                </h5>
            </div>
            </div> 
        </center>
            <?php
            }
        }
        ?>
        <br><br>
        <?php 
	$sql5="select * from tbl_squad";
    $query5=$dbh->prepare($sql5);
        $query5->execute();
        $results5=$query5->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
    
        if($query5->rowCount()>0)
        {
            foreach($results5 as $result5)
            {
?>

        <h1 style="color:#007ACC" class="text-center"><?php echo $result5->name; ?></h1><br>
        <h4>
            <p class="text-justify">

                <?php echo htmlspecialchars_decode(stripslashes($result5->description)); ?>

            </p>
        </h4>
        <br>

        <div class="text-center">
            <img src="admin/images/<?php echo $result5->image; ?>" class="rounded" height="100%" width="100%"
                class="responsive">
        </div>
    </div>
    <?php 
         }
        }
    ?>
    <br>

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