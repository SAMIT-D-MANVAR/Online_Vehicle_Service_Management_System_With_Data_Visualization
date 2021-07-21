<!doctype html>
<html lang="en">
<head>
<script type="text/javascript" language="javascript">
window.history.forward();

</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     
	<title>LOGIN PAGE</title>
	
<style>

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
	
  input[type=text],[type=password] 
  {
  width: 100%;
  padding: 10px 15px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid red;
  transition: 0.5s;
  outline: none;
  border-radius:25px;
  margin-top:-5px;
}

  input[type=text]:focus 
  {
  border: 3px solid green;
   
  }
	
  input[type=password]:focus 
  {
  border: 3px solid green;
  }

.btn{
  background-color:yellow;
  border: none;
  color: red;
  padding: 14px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:15px;
  font-weight:bold;
 }
 .btn:hover{
	 background-color:#00ff00;
 }
body{
	
	
		
		
	/*	background-image:url("projectphotos/servicetheme.jpg");*/
	
}
</style>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<!-- beginning of header section-->
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
<br><br>
<div class="box">
 <div class="container" style="max-width:600px;">
 <div class="card" style="max-width:500px;background: linear-gradient(to left, #3399ff 0%, #ff99ff 100%);" >
 <img class="card-img-top" src="projectphotos/audi2.jpg" alt="Card image cap">
 <div class="card-body">
 <form action="validation.php" method="post">
 <br>
<center><h3 style="color:red;">LOGIN PAGE<h3></center>
<br>
<label>USERNAME</label>
<input type="text" name="uname" required><br>
<label>PASSWORD</label><br>
<input type="password" name="pass" required><br><br>
<center>
<input type="submit" value="SUBMIT" class="btn" name="submit">
</center>
<br><br>
<center>
<h5 style="color:red;">New User?<a href="signup1.php"><span style="color:blue;">Sign Up!!</span></a></h5>
</center>
</form>

</div>
</div>
</div>
<center>


<br>
</div>
</body>
</html>