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
<h5><font size="5"><b><u>About Website:-</u></b></h5>

<ul type="square" style="font-size:15px; ">
    <li>This is a humble attempt to develop a basic online feedback system by the students for the students
    <li>Content of the website will cover basic concepts of various technologies and php programming languages.
    <li>Focus area of the website is to provide feedback form.
    <li>We are trying to adopt the continuous development and maintenance of the website in incremental manner.So soon more and more content of various Technologies shall be made available
    <li>The project is different in terms that are theme is to develop this portal with the enviroment of various student of different
	batches for find feedback of All cs subject.</li>
	
</ul>

<font  size="3"><u style="font-size:18px;"><b>Students participated under guidence of </b></u><span style="font-size:18px;color:blue;"><b> Mr Sheetanshu Krishna (Lecturer Computer)</b></span>
<br><br>
    <br>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Enrollment</th>
      <th scope="col">Students Name</th>
      <th scope="col">Branch</th>
      <th scope="col">Batch</th>
      <th scope="col">Modules Worked on</th>
      <th scope="col">Role</th>
      <th scope="col">Web Version</</th>
 
    </tr>
  </thead>
   <tbody>
  <tr>
      <td>01</td>
      <td>E18221135500038</td>
      <td>Priti MOdanwal</td>
      <td>Computer Science and Eng.</td>
      <td>2020-21</td>
      <td>Student Online Feedback System</td>
      <td>Development and Testing</td>
      <td>1.0</td>
    </tr> 
  </tbody>
  <tbody>
    <tr>
      <td>02</td>
      <td>E18221135500002</td>
      <td>Akriti Shrivastava</td>
      <td>Computer Science and Eng.</td>
      <td>2020-21</td>
      <td>Student Online Feedback System</td>
      <td>Development and Testing</td>
      <td>1.0</td>
    </tr> 
  </tbody>
  <tbody>
    <tr>
      <td>03</td>
      <td>E18221135500024</td>
      <td>Manali Shrivastav</td>
      <td>Computer Science and Eng.</td>
      <td>2020-21</td>
      <td>Student Online Feedback System</td>
      <td>Development and Testing</td>
      <td>1.0</td>
    </tr> 
  </tbody>
  </table>
<!--footer-->
<?php include('userfooter.php');?>
</body>
</html>