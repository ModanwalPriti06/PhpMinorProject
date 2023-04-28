 <?php
if(isset($_POST['sub'])){
	echo $name=$_POST['name'];
	$Gen=$_POST['gen'];
	$email=$_POST['email'];
	$year=$_POST['year'];
	echo $pass=$_POST['pass'];
	$class=$_POST['class'];
	$picname=$_FILES['pic']['name'];
	$pictem=$_FILES['pic']['tmp_name'];
	$pictype=$_FILES['pic']['type'];
	$picsize=$_FILES['pic']['size'];
	move_uploaded_file($pictem,"ProfilePic/$picname");
	//MYSQL connectivity
	$con=mysqli_connect("localhost","root","","feedback");
	$res=mysqli_query($con,"insert into registration(name,file,gender,email,password,sub,year,regdate)
	values('$name','$picname','$Gen','$email','$pass','$class','$year',curdate())");
	echo $res;
	//$query="insert into registration(name,dob,file,gender,email,password,college,regdate)
	//values('$name','$date','$picname','$Gen','$email','$pass','$class',curdate())";
	//echo $query;
		echo "<script>alert('register successfully!!');window.location.href='loginform.php'</script>";
}
?>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" text="type/css"/>
<script src="js/bootstrap.js" rel="stylesheet" text="type/javascript"></script>
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
<?php include('usertopheader.php');?>
		<div class="container-fluid" id="outer">
		<div class="row"id="inner">
		<div class="col-sm-12">
		<div class="container-fluid m-6" style="text-align:center; padding:10px; color:black;">
		<h1><i class="fa fa-address-card-o"></i> Admin Registration Form</h1></div>
		<div class="container-fluid m-3">
		</div><form action="" method="post" enctype="multipart/form-data">
		<div class="row">
		<div class="col-sm-6">Name:<input type="text" name="name" class="form-control" placeholder="Enter your name"/></div>
		</div> 
		<div class="row">
		<div class="col-sm-6">File:<input type="file" name="pic" class="form-control"/></div></div>
		<div class="row">
	 	<div class="col-sm-6"></br><b style="color:black;">Gender:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
		name="gen" value="male"/>male
		<input type="radio" name="gen" value="Female"/>Female</div>
		</div>
		<div class="row">
		<div class="col-sm-6">Password:<input type="password" name="pass" class="form-control" placeholder="Enter your Password"/></div></div>
        <div class="row">
		<div class="col-sm-6">Subject:<select class="form-control" name="class">
		<option>choose your sub</option>
		<option>Android</option>
		<option>JAVA</option>
		<option>C</option>
		<option>PHP</option>
		<option></option>
		</select></div>
		</div>
		<div class="row">
        <div class="col-sm-6">Year:<select class="form-control" name="year">
		<option>Select Your year</option>
		<option>2021</option>
		<option>2022</option>
		<option>2023</option>
		<option>2024</option>
		<option>2025</option>
		<option>2026</option>
		<option>2027</option>
		<option>2028</option>
		<option>2029</option>
		<option>2030</option>
		</select></div>
		</div>
		<div class="row">
		<div class="col-sm-6">Email:<input type="email" name="email" class="form-control" placeholder="Enter your Email"/></div>
		</div>
		<div class="row">
		<div class="col-sm-3"></br><input type="submit" name="sub" class="form-control btn btn-info" 
		value="Register Now"/></div>
		<div class="col-sm-3"></br>
		<a href="loginform.php"><input type="button" value="Already register ? Login now" class="form-control btn btn-info" 
		name="sub"></a>
		</div>
		
		</form>
		</div>		
		</div>
		</div>
		</div>
		<?php include('userfooter.php');?>
</body>		 
</html>