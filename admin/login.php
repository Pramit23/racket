<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT email,password FROM admin WHERE email=:email and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}
?>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<script src="https://kit.fontawesome.com/02c69b64af.js" crossorigin="anonymous"></script>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<
</head>
<body id="login">
  <div class="login-logo">
    <a href="login.php"><img src="images/admin.png" height="100px" width="100px" alt=""/></a>
  </div>
  <br><br>
  <h2 class="form-heading">Master Admin panel</h2>
  <div class="app-cam">
    <form method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="text" name="email"class="form-control" placeholder="Email" required="">
						</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Password" required="">
					</div>
					<div class="form-group">
						<input type="submit" value="Submit" class="btn float-right login_btn" name="login">
          </div>
          
          <ul class="new">
          <div class="clearfix"></div>
		      </ul>
		</form>
  </div>
  &nbsp;
  <?php include('includes/copyright.php') ?>
</body>
</html>
