<?php
session_start();?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" text="type/css"/>
<script src="js/bootstrap.js" rel="stylesheet" text="type/javascript"></script>
<link href="css/font.css" rel="stylesheet"/>
<link href="css/font.css" rel="stylesheet"/>
<style>
#topheader{
	min-height:60px;
	backgruond-color:teal;
	border-top:4px solid black;
	box-shadow:0px 3px 2px grey;

}
#header2{

	padding:3px;
	text-align:center;
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row bg-dark" id="topheader">
<div class="col-sm-2 p-2">
<a href="index.php">
<img src="ProfilePic/ggpalogo.png" style="height:65px; width:70;border-radius:50%;"></a></div>
<div class="col-sm-8 h3 text-light p-4 text-center font-weight-bold">STUDENT FEEDBACK</div>
<div class="col-sm-2 p-3"><a href="loginform.php" style="text-decoration:white;width:100%;">
<button type="button" class="btn btn-outline-light"> <span style="text-align:right;">Sign In</span></button></a>
&nbsp;&nbsp;
<a href="logout.php" style="text-decoration:white;width:100%;">
<button type="button" class="btn btn-outline-light"> Sign Out</button></a>
&nbsp;

</div>


</div>
<div class="row">
<img src="ProfilePic/fd.jpg" class="img-fluid" alt="Responsive image" style="width:100%; height:490px;">

</div>
<!--<div class="row">
<div class="col-sm-12">
<h1 style="height:100px;">STUDENT ONLINE FEEDBACK SYSTEM <i class="fa fa-star"> </i></h1>


</div>

</div>-->


<?php include('userfooter.php');?>

</div>

</body>
</html>