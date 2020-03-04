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

$title=$_POST['title'];
    
$description=$_POST['description'];


$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);	

$sql="INSERT INTO tbl_gallery(title ,description,image)
VALUES(:title,:description,:image)";
	
$query = $dbh->prepare($sql);
$query->bindParam(':title',$title,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);	
$query->bindParam(':image',$image,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Package Created Successfully";
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
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Master Admin Panel</a>
            </div>
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
                                    <select class="form-control">
                                        <?php 
                            $sql = "SELECT * from tbl_category";
                        $query = $dbh -> prepare($sql);
//$query -> bindParam(':city', $city, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
                                        <option><?php echo htmlentities($result->name);?></option>
                                        <?php $cnt=$cnt+1;} }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <textarea type="varchar" name="description" id="description" placeholder="Enter description"
                                        required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" id="image" required="">
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