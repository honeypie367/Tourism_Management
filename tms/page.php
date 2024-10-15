<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
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
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="row">
	<div class="col-md-6">


<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
	<div class="container">
									

		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"><?php 	echo $_GET['type'] ?></h3>
<?php 
$name=$_GET['type'] ;
if($name=='aboutus') {
	
	echo "<p style='color:black;'>Welcome to Tourism Managemnet System, your trusted companion for navigating the world's most <br>captivating destinations.
   Our platform offers personalized online guidance tours, crafted to enrich<br> your travel experiences. Our team of seasoned travel 
   experts and local guides share their insider <br>knowledge to ensure you uncover hidden gems, immerse in local cultures, and create 
   unforgettable <br>memories.With Tourism Managemnet System, explore destinations at your own pace, anytime,<br> anywhere. 
   Our interactive tours feature stunning visuals, engaging narratives, and expert insights, <br>guaranteeing an immersive experience.
Join us on this journey and discover new wonders, rekindle<br> old passions, and connect with fellow travelers. 
Let us guide you through the world's most<br> breathtaking landscapes, vibrant cities, and hidden treasures.</p>";
	
} else {



  echo '<div style="background-color: #f2f2f2; padding: 15px; border: 0.5px solid #ddd; border-radius: 10px; 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05); width: 700px;">
  <ul style="list-style: none; padding: 0; margin: 0;">
  <li style="margin-bottom: 15px;">
  <i class="fa fa-map-marker" style="margin-right: 10px; font-size: 14px; color: #4CAF50;"></i>
  <span style="font-weight: bold;">Address:</span>
  <br>
  No. 14, Sri Ram Towers, 2nd Floor,
  <br>
  10th Main Road, Jayanagar 4th Block,
  <br>
  Bangalore - 560011, Karnataka, India
  </li>
  <li style="margin-bottom: 15px;">
  <i class="fa fa-phone" style="margin-right: 10px; color: #4CAF50;"></i>
  <span style="font-weight: bold;">Phone:</span>
  <a href="tel:+91 80 4123 4567" style="text-decoration: none; color: #337ab7;">+91 80 4123 4567</a>
  </li>
  <li>
  <i class="fa fa-envelope" style="margin-right: 10px; color: #4CAF50;"></i>
  <span style="font-weight: bold;">Email:</span>
  <a href="mailto:tourism@gmail.com" style="text-decoration: none; color: #337ab7;">tourism@gmail.com</a>
  </li>
  </ul>
  </div>';
  
  
 
}
?>

	</div>
</div></div>
<div class="col-md-6" style="background-image:url('http://localhost/Tourism-Management-System-PHP/tms/images/tm3.jpeg');
 background-size:cover; height: 419px;"></div></div>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>