<?php
session_start();


$con=mysqli_connect('localhost','root','','autodoc');
$name=$_POST['customer'];
$email=$_POST['eid'];
$pwd=$_POST['pass'];
$s="select username from signup where username='$name'";
$r=mysqli_query($con,$s);
$n=mysqli_num_rows($r);
if($n==1)
{
	
	echo"<script>alert('USERNAME ALREADY TAKEN.');
	window.location.href='signup1.php';
	</script>";
}
else
{
$sql="insert into signup values('$name','$email','$pwd')";

 if(mysqli_query($con,$sql))
 {
	echo "<script>alert('ur account is created successfully');
	window.location.href='login.php';
	</script>";
 }
 else
{
 
	echo "<script>alert('username taken');
	window.location.href='signup1.php';
	</script>";
}
}
 mysqli_close($con);


?>