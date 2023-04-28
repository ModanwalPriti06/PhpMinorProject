<?php
if(isset($_POST['loginbtn1']))
{
	$email=$_POST['eid'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost","root","","feedback");
	$query="select * from registration1 where email='$email' and pass='$pass'";
	//echo $query;
	$data=mysqli_query($con,$query);
	 $cr= mysqli_num_rows($data);
	 $row=mysqli_fetch_array($data);//echo $res;
	if($cr>0)
	{
		session_start();
		$_SESSION['sroll']=$row[1];
		$_SESSION['sname']=$row[2];
		$_SESSION['spass']=$row[3];
		$_SESSION['sbranch']=$row[4];
		$_SESSION['semail']=$row[5];
		$_SESSION['syear']=$row[6];
		
		echo "<script>window.location.href='feedbackpage.php';</script>";      //12+18     
		//echo $row[4];
	}
	else{
		echo "<script>alert('Sorry incorrect data Fill try Again!!');window.location.href='loginform.php'</script>";
	}
}
?>
<?php
if(isset($_POST['loginbtn']))
{
	echo $email=$_POST['eid'];
	echo $pass=$_POST['pass'];
	echo $sub=$_POST['sub'];
	$con=mysqli_connect("localhost","root","","feedback");
	$query="select * from registration where email='$email' and password='$pass' and sub='$sub'";
	//echo $query;
	$data=mysqli_query($con,$query);
	 $cr= mysqli_num_rows($data);
	 $row=mysqli_fetch_array($data);//echo $res;
	if($cr>0)
	{
		session_start();
		$_SESSION['name']=$row[0];
		$_SESSION['eid']=$row[3];
		$_SESSION['file']=$row[1];
		$_SESSION['pass']=$row[4];
		$_SESSION['year']=$row[6];
		$_SESSION['gender']=$row[2];
		$_SESSION['sub']=$row[5];
		echo "<script>window.location.href='dashboard.php';</script>";      //12+18     
		//echo $row[4];
	}
	else{
		echo "<script>alert('Sorry incorrect Data Fill try Again!!');window.location.href='#'</script>";
	}
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

<div class="container"><center><h3><b><br/><i class="fa fa-user-circle"></i> STUDENT LOGIN FORM</b></h3></center>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4" style="min-height:50;background:url('bk2.jpg');padding:2px; border:
 5px solid black;box-shadow: 0 0 5px black inset; color:white; margin-top:2%;margin-bottom:12%;">
<div class="col-sm-12 " style="font-size:25px; color:white; text-align:center; font-weight:bold;">Login Here</br><hr/>
 </div>
 <form action="" method="post">
<i class="fa fa-envelope-o"></i><b> Email:</b></br><input type="email" name="eid" class="form-control" required placeholder="Enter your email" />
<i class="fa fa-key"></i><b> Password:</b><input type="password" name="pass" class="form-control" required placeholder="Enter your password"/></br>
<input type="submit" name="loginbtn1" class="form-control btn btn-warning" value="Login Now"/>
<a href="register1.php" style="text-decoration:none;color:white;">New User? Register now</a></form>
</div>
</div>
</div>
<!----------------------------------------------------->
<div class="container"><center><h3><b><br/><i class="fa fa-user-circle"></i> ADMIN LOGIN FORM</b></h3></center>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4" style="min-height:50;background:url('bk2.jpg');padding:2px; border:
 5px solid black;box-shadow: 0 0 5px black inset; color:white; margin-top:2%;margin-bottom:12%;">
<div class="col-sm-12 " style="font-size:25px; color:white; text-align:center; font-weight:bold;">Login Here</br><hr/>
 </div>
 <form action="" method="post">
<i class="fa fa-envelope-o"></i><b> Email:</b></br><input type="email" name="eid" class="form-control" required placeholder="Enter your email" />
<i class="fa fa-key"></i><b> Password:</b><input type="password" name="pass" class="form-control" required placeholder="Enter your password"/>
<i class="fa fa-book"></i><b> Choose subject:</b><select class="form-control" name="sub">
		<option>choose your sub</option>
		<option>CC</option>
		<option>Android</option>
		<option>Elective</option>
		<option>IMED</option>
		<option>JAVA</option>
		<option>PHP</option>
		<option>C</option>
		<option>IOT</option>
		<option>OS</option>
		<option></option>
		</select></br></br>
<input type="submit" name="loginbtn" class="form-control btn btn-warning" value="Login Now"/>
<a href="register.php" style="text-decoration:none;color:#de9c00;">New Admin? Register now</a></form>
</div>
</div>
</div>
<!--footer-->
<?php include('userfooter.php')?>
</body>
</html>