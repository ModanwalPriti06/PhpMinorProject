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
		echo "<script>alert('data deleted successfully');windows.location.href='allstudent.php';</script>";
		
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

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Roll No</th>
      <th scope="col">Name</th>
      <th scope="col">Branch</th>
      <th scope="col">Email-Id</th>
      <th scope="col">Subject</th>
      <th scope="col">Year</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php include('connection.php');
	$data=mysqli_query($con,"SELECT * from fbpage");
	$num2=mysqli_num_rows($data);
	while($row=mysqli_fetch_array($data)){
		if($row['sub']==$_SESSION['sub']){
	?>
  <tbody>
    <tr>
      <td><?php echo $row['rollno']?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['branch']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['sub']?></td>
      <td><?php echo $row['year']?></td>
	  <td><a onclick=" return confirm_delete()"href="allstudent.php?id=<?php echo $row[0] ?>">
	  <i class="fa fa-trash" style="color:red;font-size:15px;"></i>
</a></td>
    </tr>
    
  </tbody>
	<?php }
	
	}
	?>
</table>

<!--footer-->
<?php include('userfooter.php')?>
</body>
</html>