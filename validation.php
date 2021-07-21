<?php
session_start();
$con=mysqli_connect('localhost','root','','autodoc');
$uname=$_POST['uname'];
$pwd=$_POST['pass'];
$sql="select * from signup where username='$uname' and password='$pwd'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$uname;
	header('location:home.php');
}
else
{
	echo"<script>alert('invalid login credentials');
	window.location.href='login.php';
	</script>"; 
	
}
 mysqli_close($con);	



?>