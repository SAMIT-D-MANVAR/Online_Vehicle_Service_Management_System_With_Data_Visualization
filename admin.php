<!doctype html>
<html lang="en">
  <head>
    <script type="text/javascript" language="javascript">
window.history.forward();

</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"/>

    <title>ADMIN | AUTODOC</title>
	<style>
	body{
		margin:0;
		/*background:url("projectphotos/serviceb.jpg");*/

	}
	.header 
{
 padding: 25px;
background:url("projectphotos/net.png");
background-size:cover;
height:auto;
width:100%;
background-color:white;
}

.logo
{
	position:relative;
    height:auto;
	width:130px;
	left:20px;
}
.head{
     font-size: 35px;
     color:#cc5200;
}

.nav 
{
        width: 100%;
        background-color:green;
        overflow: auto;
}

.nav a 
{
  float: left;
  padding: 10px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.nav a:hover 
{
  background-color:red;
}
	
	
	.img img{
		
		width:100%;
		height:300px;
		
		
	}
	input[type=text],[type=password]{
		
		border:2px solid red;
		border-radius:20px;
		padding:12px 20px;
	}
	input[type=text]:focus{
		
		border:2px solid green;
		
	}
	input[type=password]:focus{
		
		border:2px solid green;
		
	}
	input[type=text]:hover{
		
		cursor:pointer;
		
	}
	input[type=password]:hover{
		
		cursor:pointer;
		
	}
	.button{
		text-align:center;
		background-color:green;
		padding:10px;
		color:white;
		border:1px solid green;
		border-radius:7px;
		
	}
	.log{
		
        position: relative;
        
     
		max-width:100%;
		height:360px;
	
	}
</style>
</head>
<body>
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
  


	 

<div class="header">
  <a href="#">
        <img src="projectphotos/style.png" class="logo">
  </a>
  <h1 class="head"> AUTODOC</h1>               <!--company logo and heading-->
</div>
<!--end of header-->
<div class="nav">
<a href="index.html"><i class="fa fa-fw fa-sign-out"></i> HOME</a>
</div>
<br><br><h1 style="color:red ;text-align:center;">ADMIN PORTAL</h1><br>

<div class="container" style="max-width:800px;background: linear-gradient(to top, #99ccff 12%, #ff6699 100%);">
<div class="row  ">
<div class="col-sm-7">
<img src="projectphotos/style7.jpg" class="log"/>
</div>
<div class="col-sm-5">
<br><br>
<center><h4>Admin Login</h4></center><br>
           <form class="form-group"  action="admin.php" method="post">
              <label>USERNAME  </label><br>
              <input type="text" name="username" class="form-control" placeholder="enter username"><br>
              <label>PASSWORD  </label><br>
              <input type="password" name="password" class="form-control" placeholder="enter password"><br>
              <center> <input type="Submit" name="Login" value="LOGIN" class="button"/></center>
           </form>
</div>
</div>
</div><br><br>
</body>
</html>

<?php

$con=mysqli_connect("localhost","root","","autodoc");
if(isset($_POST['Login'])){ 
$username=$_POST['username'];
$password=$_POST['password'];
$query="select  * from admin where username='$username' and  password='$password'";  
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
echo "<script>alert('signed in successfully');
	window.location.href='adminwelcome.php';
	</script>";
}
else
{
     echo "<script>alert('error login')</script>";
     echo "<script>window.open('admin.php','_self')</script>";
}
}
 mysqli_close($con);
?>

