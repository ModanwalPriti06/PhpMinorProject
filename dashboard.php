<?php
session_start();
if(isset($_SESSION['name']))
{
		
}
else{
	 echo "<script>alert('please login');window.location.href='loginform.php';</script>";
}?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" text="type/css"/>
<script src="js/jquery.js" rel="stylesheet"></script>
<script src="js/bootstrap.js" rel="stylesheet" text="type/javascript"></script>
<link href="css/font.css" rel="stylesheet"/></head>
<style>
#topheader{
	min-height:60px;
	backgruond-color:teal;
	border-top:4px solid black;
	box-shadow:0px 3px 2px grey;
	padding-top:10px;	
}
#header2{
	background:black;
	padding:3px;
	text-align:center;
}
 a{

	margin-left:35px;
}
li{
	margin-top:10px;
}

</style>
<body>
<?php include('userheader.php')?>
<div class="row">
<img src="dashboard.jpg" class="img-fluid" alt="Responsive image" style="width:100%; height:420px;">

</div>
<!--footer-->
<?php include('userfooter.php');?>
</body>
</html>