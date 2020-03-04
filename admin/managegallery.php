<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:dashoard.php');
}
else{ 
    
    if(isset($_GET['gid'])){
        
        $gid=intval($_REQUEST['gid']);
        
        $sql="DELETE FROM tbl_gallery WHERE Id=:gid";
        $query = $dbh->prepare($sql);
        $query-> bindParam(':gid',$gid, PDO::PARAM_STR);
        $query -> execute();    
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
        <div class="container">
          <div class="logobox">
          <a class="navbar-brand" href="dashboard.php">Master Admin Panel</a>
          </div>
        </div>
      </div>
      <!-- /.navbar-header -->

      <?php include('includes/sidebar.php'); ?>

      <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">


      <div class="container">
        <div class="margin">
          <div class="row">
            <div class="col-md-6">
              <h2>Manage Gallery</h2>
            </div>
            <div class="col-md-6"><a href="addgallery.php"><button type="submit" class="btn btn-default">Add
                  Gallery</button></a></div>
          </div>
        </div>


        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Description</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $sql = "SELECT * from tbl_gallery";
$query = $dbh -> prepare($sql);
//$query -> bindParam(':city', $city, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
            <tr>


              <td><?php echo htmlentities($cnt);?></td>
              <td><?php echo htmlentities($result->title);?></td>
              <td><?php echo htmlentities($result->description);?></td>
              <td><?php echo htmlentities($result->image);?></td>
              <td><button type="submit" class="btn btn-danger">Active</button></td>
              <td><a href="updategallery.php?gid=<?php echo htmlentities($result->Id); ?>" class="btn btn-primary" title="" data-toggle="tooltip"
                  data-original-title="Edit"><i class="fa fa-pencil"></i></a>&nbsp;
                  <a href="managegallery.php?gid=<?php echo htmlentities($result->Id);?>"  onclick="return confirm('Do you really want to delete')" class="btn btn-danger delete-btn" title="Delete" data-toggle="tooltip">
                <i class="fa fa-times"></i></a>&nbsp;</td>
            </tr>
            <?php $cnt=$cnt+1;} }?>
          </tbody>
        </table>
      </div>








      <!-- Copywrite Section -->
      <?php include('includes/copyright.php') ?>
      <!-- Copywrite Section End -->
    </div>
  </div>
  <!-- /#page-wrapper -->
  <!-- /#wrapper -->
  <!-- Nav CSS -->
  <link href="css/custom.css" rel="stylesheet">
  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/metisMenu.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
<?php } ?>