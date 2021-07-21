<?php
session_start();


$con=mysqli_connect('localhost','root','','autodoc') or die('Could not connect');
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subscribe'];
$s="select email from news1 where email='$email'";
$r=mysqli_query($con,$s);
$n=mysqli_num_rows($r);
if($n==1)
{
	
	echo"<script>alert('You have Already Subscribed.')
	window.location.href='index.html';</script>";
}
else
{
$sql="insert into news1 values('$name','$email','$sub')";

 if(mysqli_query($con,$sql))
 {
	echo "<script>alert('Thank You For Subscribing');
	window.location.href='index.html';
	</script>";
 }
 else
{
 
	echo "<script>alert('Error has occured');
	window.location.href='index.html';
	</script>";
}
}



?>