<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:dashboard.php');
}
else{
$sid=intval($_GET['sid']);  
if(isset($_POST['submit']))
{
if((($image)!=NULL AND isset($_FILES['image']))){
$image=$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);

$text=$_POST['text'];
$description=$_POST["description"];


	$sql="update tbl_slider set image=:image,text=:text,description=:description where Id=:sid";
	
$query = $dbh->prepare($sql);
$query->bindParam(':image',$image,PDO::PARAM_STR);
$query->bindParam(':text',$text,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);

$query->bindParam(':sid',$sid,PDO::PARAM_STR);
$query->execute();
}else{
	$text=$_POST['text'];
	$description=$_POST["description"];

	$sql="update tbl_slider set text=:text,description=:description where Id=:sid";
	$query = $dbh->prepare($sql);

	$query->bindParam(':text',$text,PDO::PARAM_STR);
	$query->bindParam(':description',$description,PDO::PARAM_STR);

	$query->bindParam(':sid',$sid,PDO::PARAM_STR);
	$query->execute();
}$msg="Slider Details Updated Successfully";
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Calcutta Racket Club||Update Slider</title>
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
        bkLib.onDomLoaded(function () {
            nicEditors.allTextAreas()
        });
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
                    <h3>Update Slider</h3>
                    <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?>
                    </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <?php 
$sid=intval($_GET['sid']);
$sql = "SELECT * from tbl_slider where Id=:sid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':sid', $sid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	
?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                    <input type="varchar" class="form-control" name="text" id="text"
                                        value="<?php echo htmlentities($result->text); ?>">
                                </div>
                            <div class="form-group">
                                    <div class="col-sm-8">
                                        <textarea name="description" id="description" cols="60"
                                         rows="20"><?php echo htmlspecialchars_decode(stripslashes($result->description));?>
                                </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <img src="slider/<?php echo htmlentities($result->simage);?>"
                                        style="width:50%;height:50%;">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="simage" id="simage">
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