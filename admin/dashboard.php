<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:login.php');
}
else{
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
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
  <!-- Graph CSS -->
  <link href="css/lines.css" rel='stylesheet' type='text/css' />
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!----webfonts--->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
  <!---//webfonts--->
  <!-- Nav CSS -->
  <link href="css/custom.css" rel="stylesheet">
  <!-- Metis Menu Plugin JavaScript -->
  <script src="js/metisMenu.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- Graph JavaScript -->
  <script src="js/d3.v3.js"></script>
  <script src="js/rickshaw.js"></script>
</head>

<body>
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

      <!-- chnaged -->

      <!-- chnaged End -->


      <!-- /.navbar-header -->
      <?php include('includes/sidebar.php') ?>
      <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
      <div class="graphs">
        <div class="col_3">
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
              <div class="stats">
                <?php $sql = "SELECT id from tbl_gallery";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
					?>
                <h5><strong><?php echo htmlentities($cnt);?></strong></h5>
                <span>Total Gallery Images</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-users user1 icon-rounded"></i>
              <div class="stats">
                <?php $sql1 = "SELECT id from tbl_slider";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$cnt1=$query1->rowCount();
					?>
                <h5><strong><?php echo htmlentities($cnt1);?></strong></h5>
                <span>Total Slider</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-comment user2 icon-rounded"></i>
              <div class="stats">
                <?php $sql2 = "SELECT id from tbl_notice";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$cnt2=$query2->rowCount();
					?>
                <h5><strong><?php echo htmlentities($cnt2);?></strong></h5>
                <span>Total News & Notices</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 widget">
            <div class="r3_counter_box">
              <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
              <div class="stats"
              <?php $sql = "SELECT id from tbl_event";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=$query->rowCount();
					?>>
                <h5><strong><?php echo htmlentities($cnt);?></strong></h5>
                <span>Total Event</span>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="col_1">

          <div class="clearfix"> </div>
        </div>
        <div class="span_11">

          <!-- map -->
          <link href="css/jqvmap.css" rel='stylesheet' type='text/css' />
          <script src="js/jquery.vmap.js"></script>
          <script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
          <script src="js/jquery.vmap.world.js" type="text/javascript"></script>
          <script type="text/javascript">
            jQuery(document).ready(function () {
              jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: '#333333',
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#666666',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#C8EEFF', '#006491'],
                normalizeFunction: 'polynomial'
              });
            });
          </script>
          <!-- //map -->
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="content_bottom">
        <div class="col-md-8 span_3">

        </div>
        <div class="col-md-4 span_4">

          <div class="clearfix"> </div>
        </div>
        <?php include('includes/copyright.php') ?>
      </div>
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>