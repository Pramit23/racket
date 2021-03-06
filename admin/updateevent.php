<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:dashboard.php');
}
else{
$eid=intval($_GET['eid']);
if(isset($_POST['submit']))
{
$event=$_FILES["event"]["name"];
move_uploaded_file($_FILES["event"]["tmp_name"],"events/".$_FILES["event"]["name"]);
$sql="Update tbl_event set event=:event where Id=:eid";
$query = $dbh->prepare($sql);

$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->bindParam(':event',$event,PDO::PARAM_STR);
$query->execute();
$msg="Event Updated Successfully";
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Calcutta Racket Club || Update Event</title>
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

            <!-- /.navbar-header -->

                <?php include('includes/sidebar.php'); ?>

                <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="graphs">
                <div class="xs">
                    <h3>Update Event</h3>
                    <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo $error ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo $msg  ?> </div><?php }?>
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                        <?php 
$eid=intval($_GET['eid']);
$sql = "SELECT event from tbl_event where Id=:eid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':eid', $eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	
?>
                        <form class="form-horizontal" name="category"  method="post" enctype="multipart/form-data">
                            
                                <div class="form-group">
                                <img src="events/<?php echo $result->event ?>"   style="width:50%;height:50%;">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="event" id="event" required>
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