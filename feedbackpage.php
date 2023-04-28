
<?php
session_start();
if(isset($_SESSION['sroll']))
{
		
}
else{
	 echo "<script>alert('please login');window.location.href='loginform.php';</script>";
}?><?php

if(isset($_POST['sub'])){
	 $branch=$_SESSION['sbranch'];
	 $rollno=$_SESSION['sroll'];
	 $name=$_SESSION['sname'];
	 $email=$_SESSION['semail'];
	 $year=$_SESSION['syear'];
	 $subject=$_POST['subject'];
	 $q1=$_POST['q1'];
	 $q2=$_POST['q2'];
	 $q3=$_POST['q3'];
	 $q4=$_POST['q4'];
	 $q5=$_POST['q5'];
	 $q6=$_POST['q6'];
	 $q7=$_POST['q7'];
	 $q8=$_POST['q8']; 
	 $comment=$_POST['comment'];

	 //MYSQL connectivity
	include('connection.php');
	$res=mysqli_query($con,"insert into fbpage(rollno,name,email,year,branch,sub,q1,q2,q3,q4,q5,q6,q7,q8,comment,date)
	values($rollno,'$name','$email',$year,'$branch','$subject','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$comment',curdate())");
	echo "<script>alert('Feebback successfully!! Thankyou!');window.location.href='index.php'</script>";
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
<div class="container-fluid">
<div class="row bg-dark" id="topheader">
<div class="col-sm-2 p-2">
<a href="index.php">
<img src="ProfilePic/ggpalogo.png" style="height:65px; width:70;border-radius:50%;"></a></div>
<div class="col-sm-8 h3 text-light p-4 text-center font-weight-bold">Welcome Back, <?php echo $_SESSION['sname']?></div>
<div class="col-sm-1 p-3"></div>
<div class="col-sm-1 p-3">
<a href="logout.php" style="text-decoration:white;">
<button type="button" class="btn btn-outline-light">SignOut</button></a>
&nbsp;
</div>
</div>
<!--==============================MAin contain==================================-->
<div class="container-fluid" id="outer">
		<div class="row"id="inner">
		<div class="col-sm-12">
		<div class="container-fluid m-6" style="text-align:center; padding:10px; color:#fed45f">
		<h1> <i class="fa fa-pencil"></i> FEEDBACK </h1></div>
		<form action="" method="post" enctype="multipart/form-data">	
  <div class="card">
  <h5 class="card-header"><marquee style="color:#fed45f;">Government Girls Polytechnic Amethi, Feedback Form</marquee></h5>
  <div class="card-body">
  <div class="row">

	<div class="col-sm-6"><b>Subject:</b><select class="form-control" name="subject">
		<option>choose your sub</option>
		<option>Android</option>
		<option>elective</option>
		<option>IMED</option>
		<option>JAVA</option>
		<option>PHP</option>
		<option>C</option>
		<option>IOT</option>
		<option>OS</option>
		</select></div>
		<div class="col-sm-6"></div>
   </div>
   <div class="row">
   	 	<div class="col-sm-6"></br><b>Que-1 Has the teacher covered entire Syllabus as prescribed by University/college/board? </b></br>
		<input type="radio" name="q1" value="good"/>&nbsp;Good&nbsp;&nbsp;
		<input type="radio" name="q1" value="better"/>&nbsp;Better&nbsp;&nbsp;
		<input type="radio" name="q1" value="Excellent"/>&nbsp;Excellent&nbsp;&nbsp;
		<input type="radio" name="q1" value="poor"/>&nbsp;Poor&nbsp;&nbsp;
		<input type="radio" name="q1" value="no"/>&nbsp;No&nbsp;&nbsp;</div>
		<div class="col-sm-6"></br><b>Que-2 Has the Tecaher covered relevent topics beyond syllabus? </b></br>
		<input type="radio" name="q2" value="good"/>&nbsp;Good&nbsp;&nbsp;
		<input type="radio" name="q2" value="better"/>&nbsp;Better&nbsp;&nbsp;
		<input type="radio" name="q2" value="Excellent"/>&nbsp;Excellent&nbsp;&nbsp;
		<input type="radio" name="q2" value="poor"/>&nbsp;Poor&nbsp;&nbsp;
		<input type="radio" name="q2" value="no"/>&nbsp;NO&nbsp;&nbsp;
		</div>
	</div>
	<div class="row">
   	 	<div class="col-sm-6"></br><b>Que-3 Effectiveness of Teacher in term of:</b><br/>(a)Technical content/course content(b)Communication Skills(c)Use of teaching aids</br><input type="radio"
		name="q3" value="good"/>&nbsp;Good&nbsp;&nbsp;
		<input type="radio" name="q3" value="better"/>&nbsp;Better&nbsp;&nbsp;
		<input type="radio" name="q3" value="Excellent"/>&nbsp;Excellent&nbsp;&nbsp;
		<input type="radio" name="q3" value="poor"/>&nbsp;Poor&nbsp;&nbsp;
		<input type="radio" name="q3" value="no"/>&nbsp;NO&nbsp;&nbsp;
		</div>
		<div class="col-sm-6"></br><b>Que-4 Pace on which contents were covered</b></br><input type="radio"
		name="q4" value="good"/>&nbsp;Good&nbsp;&nbsp;
		<input type="radio" name="q4" value="better"/>&nbsp;Better&nbsp;&nbsp;
		<input type="radio" name="q4" value="Excellent"/>&nbsp;Excellent&nbsp;&nbsp;
		<input type="radio" name="q4" value="poor"/>&nbsp;Poor&nbsp;&nbsp;
		<input type="radio" name="q4" value="no"/>&nbsp;NO&nbsp;&nbsp;
		</div>
	</div>
	<div class="row">
   	 	<div class="col-sm-6"></br><b>Que-5 Motivation and inspiration for students to learn</b></br><input type="radio"
		name="q5" value="good"/>&nbsp;Good&nbsp;&nbsp;
		<input type="radio" name="q5" value="better"/>&nbsp;Better&nbsp;&nbsp;
		<input type="radio" name="q5" value="Excellent"/>&nbsp;Excellent&nbsp;&nbsp;
		<input type="radio" name="q5" value="poor"/>&nbsp;Poor&nbsp;&nbsp;
		<input type="radio" name="q5" value="no"/>&nbsp;NO&nbsp;&nbsp;
		</div>
		<div class="col-sm-6"></br><b>Que-6  Support for the development of Student Skil</b></br><input type="radio"
		name="q6" value="good6"/>&nbsp;Good&nbsp;&nbsp;
		<input type="radio" name="q6" value="better"/>&nbsp;Better&nbsp;&nbsp;
		<input type="radio" name="q6" value="Excellent"/>&nbsp;Excellent&nbsp;&nbsp;
		<input type="radio" name="q6" value="poor"/>&nbsp;Poor&nbsp;&nbsp;
		<input type="radio" name="q6" value="no"/>&nbsp;NO&nbsp;&nbsp;
		</div>
	</div>
	<div class="row">
   	 	<div class="col-sm-6"></br><b>Que-7 Clarity of expectations of Students</b></br><input type="radio"
		name="q7" value="good"/>&nbsp;Good&nbsp;&nbsp;
		<input type="radio" name="q7" value="better"/>&nbsp;Better&nbsp;&nbsp;
		<input type="radio" name="q7" value="Excellent"/>&nbsp;Excellent&nbsp;&nbsp;
		<input type="radio" name="q7" value="poor"/>&nbsp;Poor&nbsp;&nbsp;
		<input type="radio" name="q7" value="no"/>&nbsp;NO&nbsp;&nbsp;
		</div>
		<div class="col-sm-6"></br><b>Que-8 Willingness to offer help and advice to students</b></br><input type="radio"
		name="q8" value="good"/>&nbsp;Good&nbsp;&nbsp;
		<input type="radio" name="q8" value="better"/>&nbsp;Better&nbsp;&nbsp;
		<input type="radio" name="q8" value="Excellent"/>&nbsp;Excellent&nbsp;&nbsp;
		<input type="radio" name="q8" value="poor"/>&nbsp;Poor&nbsp;&nbsp;
		<input type="radio" name="q8" value="no"/>&nbsp;NO&nbsp;&nbsp;
		</div>
	</div>
	</br>
	<div class="row">
	<div class="col-sm-12"> <b>Description/Comment:</b><textarea class="form-control" placeholder="Description/Comment" 
	rows="3" name="comment" aria-label="Username" 
  aria-describedby="basic-addon1">
  </textarea></div>
	</div>
	</br>
	<div class="row">
	<div class="col-sm-3">
	<input type="submit" name="sub" class="form-control btn btn-warning" value="Submit"/>
	</div>
	</div>
	</br>
	</form>
		</div>		
		</div>
		</div>
		</div>
		</div>
		
<!--===========================footer=====================================-->

<?php include('userfooter.php');?>
</div>
</body>
</html>