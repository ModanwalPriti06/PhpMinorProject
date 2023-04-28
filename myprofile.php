<?php
session_start();
if(isset($_SESSION['name']))
{
		
}
else{
	 echo "<script>alert('plzzzzz login');window.location.href='loginform.php';</script>";
}?>
<?php
if(isset($_POST['sub1'])){
	$name=$_POST['name'];
	
	$gen=$_POST['gen'];
	$user=$_SESSION['eid'];
	$sub=$_POST['sub'];
	$photo=$_FILES['pic']['name'];
	$con=mysqli_connect('localhost','root','','feedback');
	if($photo=='null'){
	$query="update registration set name='$name',gender='$gen',sub='$sub' where email='$user'";
	}else{
	//$con=mysqli_connect(localhost,'root','','miniproject');
	$query="update registration set name='$name',gender='$gen',file='$photo',sub='$sub' 
	where email='$user'";
	$phototmpfile=$_FILES['pic']['tmp_name'];
	move_uploaded_file($phototmpfile,"ProfilePic/$photo");
	}
	$res=mysqli_query($con,$query);
		$_SESSION['name']=$name;
		$_SESSION['gender']=$gen;
		$_SESSION['file']=$photo;
}
?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" text="type/css"/>
<script src="js/jquery.js" rel="stylesheet"></script>
<script src="js/bootstrap.js" rel="stylesheet" text="type/javascript"></script>
<link href="css/font.css" rel="stylesheet"/>
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
</head>
<body>
<?php include('userheader.php');?>
<div class="container-fluid">

<div class="row">
<div class="col-sm-12" style="text-align:center;font-size:20px">MyProfile</div>
<div class="container">
<div class="row">
<div class="col-sm-2" style="margin-top:5%;"><img src="profilepic/<?php echo $_SESSION['file'];?>" 
style="height:100px;width:100px;"></div>
<div class="col-sm-10">

<form action="" method="POST" enctype="multipart/form-data">
<div class="row">
		<div class="col-sm-6">Name:<input type="text" name="name" value="<?php echo $_SESSION['name']?>" class="form-control"/></div>
		<div class="col-sm-6">UPload Photo:<input type="file" name="pic" value="<?php echo $_SESSION['file']?>" 
class="form-control"/></div></br>
		</div> 
		<div class="row">
	 	<div class="col-sm-6"></br><b>Gender:</b>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="gen" value="male" <?php if($_SESSION['gender']=="male"){echo "checked";}?>/> male
		<input type="radio" name="gen" value="Female" <?php if($_SESSION['gender']=="Female"){echo "checked";}?>/>Female</div>
<div class="col-sm-6">
College Name:

<select class="form-control" name="sub">
		<option <?php if($_SESSION['sub']=="JAVA"){echo "selected";}?>>JAVa</option>
		<option <?php if($_SESSION['sub']=="Android"){echo "selected";}?>>Android</option>
		<option <?php if($_SESSION['sub']=="IOT"){echo "selected";}?>>IOT</option>
		<option <?php if($_SESSION['sub']=="C"){echo "selected";}?>>C</option>		
		<option <?php if($_SESSION['sub']=="PHP"){echo "selected";}?>>PHP</option>		
		<option <?php if($_SESSION['sub']=="CC"){echo "selected";}?>>CC</option>		
		<option <?php if($_SESSION['sub']=="IMED"){echo "selected";}?>>IMED</option>		
		<option <?php if($_SESSION['sub']=="OS"){echo "selected";}?>>OS</option>		
		<option <?php if($_SESSION['sub']=="Elective"){echo "selected";}?>>Elective</option>		
				
		
	</select></div>
</div>
<div class="row">

<div class="col-sm-6"></br><input type="submit" name="sub1" class="form-control btn btn-info" 
		value="Update Now"/></div>
		</div>
</form>		
</div>
</div>
</div>
</div>
</div>
<!--FOOTER-->
<?php include('userfooter.php');?>
</body>
</html>