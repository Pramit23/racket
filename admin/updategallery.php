<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:dashboard.php');
}
else{
$gid=intval($_GET['gid']);  
if(isset($_POST['submit']))
{
if((($gimage)!=NULL AND isset($_FILES['gimage']))){
$gimage=$_FILES["gimage"]["name"];
move_uploaded_file($_FILES["gimage"]["tmp_name"],"images/".$_FILES["gimage"]["name"]);

$gtitle=$_POST['gtitle'];
$gdescription=$_POST["gdescription"];
$gname=$_POST["gname"];

	$sql="update tbl_gallery set image=:gimage,title=:gtitle,description=:gdescription,name=:gname where Id=:gid";
	
$query = $dbh->prepare($sql);
$query->bindParam(':gimage',$gimage,PDO::PARAM_STR);
$query->bindParam(':gtitle',$gtitle,PDO::PARAM_STR);
$query->bindParam(':gdescription',$gdescription,PDO::PARAM_STR);
$query->bindParam(':gname',$gname,PDO::PARAM_STR);

$query->bindParam(':gid',$gid,PDO::PARAM_STR);
$query->execute();
}else{
	$gtitle=$_POST['gtitle'];
	$gdescription=$_POST["gdescription"];
	$gname=$_POST["gname"];

	$sql="update tbl_gallery set title=:gtitle,description=:gdescription,name=:gname where Id=:gid";
	$query = $dbh->prepare($sql);

	$query->bindParam(':gtitle',$gtitle,PDO::PARAM_STR);
	$query->bindParam(':gdescription',$gdescription,PDO::PARAM_STR);
	$query->bindParam(':gname',$gname,PDO::PARAM_STR);

	$query->bindParam(':gid',$gid,PDO::PARAM_STR);
	$query->execute();
}$msg="Gallery Updated Successfully";
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
                    <h3>Update Gallery</h3>
                    <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                    </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <?php 
$gid=intval($_GET['gid']);
$sql = "SELECT * from tbl_gallery where Id=:gid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':gid', $gid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>
                            <form class="form-horizontal" name="gallery" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="varchar" class="form-control" name="gname" id="gname"
                                        value="<?php echo htmlentities($result->name); ?>">
                                </div>
                                <div class="form-group">
                                    <input type="varchar" class="form-control" name="gtitle" id="gtitle"
                                        value="<?php echo htmlentities($result->title); ?>">
                                </div>
                                <div class="form-group">
                                <input type="varchar" class="form-control" name="gdescription" id="gdescription"
                                        value="<?php echo htmlentities($result->description); ?>">

                                </div>
                                <div class="form-group">
                                    <div class=container-fluid">
                                    <img src="images/<?php echo htmlentities($result->image);?>"
                                        style="width:50%;height:50%;">
                                    <br>                                    
                                    <a href="changegallery.php?Gid=<?php echo htmlentities($result->Id);?>"
                                     style="color:black; font:sans-serif;">
                                    Change Image</a>
</div>
                                </div>
                        <?php }} ?>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn-inverse btn">Reset</button>

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
<?php }
    ?>