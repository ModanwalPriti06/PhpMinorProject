<?php
session_start();
if(isset($_SESSION['name']))
{
		
}
else{
	 echo "<script>alert('please login');window.location.href='loginform.php';</script>";
}?>
<?php
if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	include('connection.php');
	$query="delete from fbpage where id=$id";
	$res=mysqli_query($con,$query);
	if($res){
		echo "<script>alert('data deleted successfully');windows.location.href='alldocument.php';</script>";
		
	}
}	

?>
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

#dynamicrow{
	min-height:400px;
	background:#d9d8d8;
	max-height:30px;
	padding:2%;
	box-shadow:1px 2px 2px black;
	margin-bottom:15px;
	
}
</style>
<script>
function confirm_delete(){
	var v=confirm("DO you really delete this item");
	if(v==true){
		return true;
	}
	else
		return false;
}
</script>
<body>
<?php include('userheader.php')?>
</br>
<div class="row">
  <?php include('connection.php');
	$data=mysqli_query($con,"select * from fbpage");
	$num2=mysqli_num_rows($data);
	while($row=mysqli_fetch_array($data)){
		if($row['sub']==$_SESSION['sub']){
	?>
	<!--<div class="row">
	<div class="w-50 p-3 m-2 zoom" style="background-color: #eee ;">
	<?php echo $row['q1'];?>
	</div>
	</div>-->

<div class="col-sm-6">
<div class="col-sm-12" id="dynamicrow">
<div class="row">
<div class="col-sm-10">
<span class="normaltext" style="color:blue;"><b>Specielly Design For: </b><?php echo $row['branch'];?></span>&nbsp;&nbsp;

<span class="normaltext" style="color:blue;"><b>Subject: </b><?php echo $row['sub'];?></span>
<a onclick=" return confirm_delete()"href="alldocument.php?id=<?php echo $row[0] ?>">
	 Delete <i class="fa fa-trash" style="color:red;font-size:15px;"></i>
</a>
<br/>
<span class="normaltext" style="color:black;"><b>Que-1 Has the teacher covered entire Syllabus as prescribed by University/college/board? </b>&nbsp;&nbsp;<span class="normaltext" style="color:blue;"><?php echo $row['q1'];?></span></span><br/>
<span class="normaltext" style="color:black;"><b>Que-2 Has the Tecaher covered relevent topics beyond syllabus? </b><span class="normaltext" style="color:blue;"><?php echo $row['q2'];?></span></span><br/>
<span class="normaltext" style="color:black;"><b>Que-3 Effectiveness of Teacher in term of:<br/>(a)Technical content/course content(b)Communication Skills(c)Use of teaching aids&nbsp;&nbsp;</b><span class="normaltext" style="color:blue;"><?php echo $row['q3'];?></span></span><br/>
<span class="normaltext" style="color:black;"><b>Que-4  Pace on which contents were covered </b><span class="normaltext" style="color:blue;"><?php echo $row['q4'];?></span></span><br/>
<span class="normaltext" style="color:black;"><b>Que-5 Motivation and inspiration for students to learn </b>&nbsp;&nbsp;<span class="normaltext" style="color:blue;"><?php echo $row['q5'];?></span></span><br/>
<span class="normaltext" style="color:black;"><b>Que-6 Support for the development of Student Skill </b>&nbsp;&nbsp;<span class="normaltext" style="color:blue;"><?php echo $row['q6'];?></span></span><br/>
<span class="normaltext" style="color:black;"><b>Que-7 Clarity of expectations of Students </b>&nbsp;&nbsp;<span class="normaltext" style="color:blue;"><?php echo $row['q7'];?></span></span><br/>
<span class="normaltext" style="color:black;"><b>Que-8 Willingness to offer help and advice to students </b>&nbsp;&nbsp;<span class="normaltext" style="color:blue;"><?php echo $row['q8'];?></span></span><br/>
<span class="heading" style="color:black;"><b>Description:</b>&nbsp;&nbsp;<span class="normaltext" style="color:blue;"><?php echo $row['comment'];?></span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
</div>
</div>
</div>
	</br>
	<?php }
	
	}?>
</div>
</br>
<!--footer-->
<?php include('userfooter.php')?>
</body>
</html>