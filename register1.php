<?php
if(isset($_POST['sub'])){
	echo $roll=$_POST['roll'];
	echo $name=$_POST['name'];
	echo $email=$_POST['email'];
	echo $pass=$_POST['pass'];
	echo $class=$_POST['class'];
	echo $year=$_POST['year'];
	
	//MYSQL connectivity
	$con=mysqli_connect("localhost","root","","feedback");
	$res=mysqli_query($con,"insert into registration1(rollno,name,pass,branch,email,year,date)
	values($roll,'$name','$pass','$class','$email','$year',curdate())");
	//echo $res;
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
</style></head>
<body>
<?php include('usertopheader.php');?>
<!--         content        -->
<div class="container-fluid" id="outer">
		<div class="row"id="inner" style="color:white; font-weight:bold;">
		<div class="col-sm-12">
		<div class="container-fluid m-5" style="text-align:center; padding:10px; color:black">
		<h1><i class="fa fa-address-card-o"></i> Student Registration Form:</h1></div>
		<div class="container-fluid m-5">
		</div><form action="" method="post">
		<div class="row">
		<div class="col-sm-6 type-center">Roll no:<input type="number" name="roll" class="form-control" placeholder="Enter your Roll no."/></div>
		</div>
		<div class="row">
		<div class="col-sm-6 type-center">Name:<input type="text" name="name" class="form-control" placeholder="Enter your name"/></div>
		</div> 
		<div class="row">
		<div class="col-sm-6">Password:<input type="password" name="pass" class="form-control" placeholder="Enter your Password"/>
		</div>
		</div>
		<div class="row">
        <div class="col-sm-6">Branch:<select class="form-control" name="class">
		<option>Select Your Branch</option>
		<option>CS FIRST YEAR</option>
		<option>CS SEC YEAR</option>
		<option>CS THIRD YEAR</option>
		<option>ELX FIRST YEAR</option>
		<option>ELX SEC YEAR</option>
		<option>ELX FINAL YEAR</option>
		</select></div>
		</div>
		<div class="row">
		<div class="col-sm-6">Email:<input type="email" name="email" class="form-control" placeholder="Enter your Email"/>
		</div>
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
<!--footer-->
<?php include('userfooter.php')?>
</body>
</html>