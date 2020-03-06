<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:dashboard.php');
     }

else{
if(isset($_POST['submit']))
{
$category=$_POST['category'];

$title=$_POST['title'];   
$description=$_POST['description'];
$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);

$title_1=$_POST['title_1'];   
$description_1=$_POST['description_1'];
$image_1=$_FILES["image_1"]["name"];
move_uploaded_file($_FILES["image_1"]["tmp_name"],"images/".$_FILES["image_1"]["name"]);	

$sql="INSERT INTO tbl_gallery(category,title ,description,image,title_1,description_1,image_1)
VALUES(:category,:title,:description,:image,:title_1,:description_1,:image_1)";
	
$query = $dbh->prepare($sql);

$query->bindParam(':category',$category,PDO::PARAM_STR);	

$query->bindParam(':title',$title,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);	
$query->bindParam(':image',$image,PDO::PARAM_STR);

$query->bindParam(':title_1',$title_1,PDO::PARAM_STR);
$query->bindParam(':description_1',$description_1,PDO::PARAM_STR);	
$query->bindParam(':image_1',$image_1,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Image and it's details Created Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Forms :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
    <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           
            <!-- /.navbar-header -->
           

                <?php include('includes/sidebar.php'); ?>

                <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="graphs">
                <div class="xs">
                    <h3>Add Gallery</h3>
                    <div class="tab-content">
                        <?php if($error){?><div class="errorWrap">
                            <strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                        <div class="tab-pane active" id="horizontal-form">
                            <form class="form-horizontal" name="gallery" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="varchar" class="form-control" name="category" id="name" placeholder="Enter Category"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title"
                                        required="">
                                </div>
                                <div class="form-group">
                                <textarea name="description" cols="40" >
                                </textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" id="image" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title_1" id="title_1" placeholder="Enter Title"
                                        required="">
                                </div>
                                <div class="form-group">
                                <textarea name="description_1" cols="40" >
                                </textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image_1" id="image_1" required="">
                                </div>
                               
                                <div class="row">
                                    <button type="submit" name="submit" class="btn-primary btn">Create</button>
                                    <button class="btn-default btn">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include('includes/copyright.php') ?>
        </div>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Nav CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
<?php 
}
?>