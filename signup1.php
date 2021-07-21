<!doctype html>
<html lang="en">
  <head>
  <script type="text/javascript" language="javascript">
window.history.forward();

</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      
    <title>SIGNUP</title>
	
	
	
	<style type="text/css">
	body{
		
		/*background-image:url("projectphotos/serviceb.jpg");*/
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
	
	input[type=text],[type=password],[type=email] {
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

input[type=text]:focus {
  border: 3px solid green;
}
	input[type=password]:focus {
  border: 3px solid green;
}
	input[type=email]:focus {
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
</style>
  </head>
  <body>
    
    <script src="signupvalidation.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<!-- beginning of header section-->
<div class="header">
  <a href="#">
        <img src="projectphotos/style.png" class="logo">
  </a>
  <h1 class="head"> AUTODOC</h1>               <!--company logo and heading-->
</div>
<!--end of header-->	
<div class="nav">
<a href="login.php">BACK TO LOGIN</a>
</div>
<br><br>


<div class="container" style="max-width:600px">



<div class="card" style="max-width:500px;background: linear-gradient(to bottom left, #ffff66 0%, #ff6600 100%);">
<img src="projectphotos/back.jpeg" class="card-img-top" alt="car_photo">
<div class="card-body">
<h3 style="color:red;margin-left:180px;">SIGN-UP</h3>
<form method="post" action="registration.php" name="myForm" onsubmit="return validateForm()">
<label for="name">USERNAME</label><br>
<input type="text" name="customer" id="name"/><br>
<label for="e">EMAIL-ID</label>
<input type="email" name="eid"><br>
<label>PASSWORD</label><br>
<input type="password" name="pass"><br>
<br>
<center><input type="submit" class="btn" name="submit" value="REGISTER"/></center>
</form>
</div>
</div>
</div>
<br>
<center>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
 HOW TO CREATE A ACCOUNT
</button>
</center>
<!-- fade effect modal fade--> 
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">HOW TO CREATE A ACCOUNT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       1) GIVE A UNIQUE USERNAME OR YOU CAN GIVE YOUR  FULL NAME (IT IS RECCOMMENDED TO GIVE UNIQUE NAME)<br>
	   2) GIVE A VALID EMAIL-ID <br>
	   3) GIVE A STRONG PASSWORD MAXIMUM OF 16 CHARACTERS AND MINIMUM OF 10 CHARACTERS.<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<br><br>
</body>
</html>