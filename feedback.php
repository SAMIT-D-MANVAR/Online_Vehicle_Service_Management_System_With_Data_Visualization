<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>FEEDBACK | CUSTOMER</title>
	<style>
	.header 
{
 padding: 25px;
background:url("projectphotos/net.png");
background-size:cover;
height:auto;
width:100%;
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
.feedback
{
width:250px;
height:auto;
		
		
}

</style>
</head>
    <body>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
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
      <a href="home.php"> BACK</a>
    </div>
<br>
<br>
<br>
   <h3><center>CUSTOMER'S FEEDBACK FORM</center></h3><br>
   <center><img src="projectphotos/feedback1.jpeg" class="feedback" alt="feedbackimage"/></center>
   <div class="container">
	 
	 <form method="post" action="feedback.php">
     <div class="row">
       <div class="col">
         <input type="text" class="form-control" name="custname" placeholder="Full Name">
       </div>
      <div class="col">
        <input type="email" class="form-control" name="email" placeholder="Email-Id">
      </div>
	</div>
	 
	 <br>
	 <div class="row">
	  <h3>Was the service performed to your satisfaction?</h3><br>
     </div>
   
   <input type="radio" id="a" name="perform" value="yes" required>
   <label for="a">YES</label><br>
   <input type="radio" id="a" name="perform" value="no">
   <label for="a">NO</label><br>
   <input type="radio" id="a" name="perform" value="somewhat">
   <label for="a">SOMEWHAT</label>
  
  <div class="row">
	<h3>Were the service hours convenient for you?</h3><br>
	</div>
	 <input type="radio" id="hours" name="time" value="yes" required>
  <label for="hours">YES</label><br>
  <input type="radio" id="hours" name="time" value="no">
  <label for="hours">NO</label><br>

  <div class="row">
	<h3>Was it easy to get an appointment?</h3><br>
  </div>
 
  <input type="radio" id="b" name="appoint" value="yes" required>
  <label for="b">YES</label><br>
  <input type="radio" id="b" name="appoint" value="no">
  <label for="b">NO</label><br>

  
	<div class="row">
	<h3>Was the car/bike  pickup/delivered at the promised time?</h3><br>
  </div>
 
  <input type="radio" id="c" name="pdtime" value="yes" required>
  <label for="c">YES</label><br>
  <input type="radio" id="c" name="pdtime" value="no">
  <label for="c">NO</label><br>
  
  	<div class="row">
	<h3>Staff were friendly and helpful?</h3><br>
  </div>
 
  <input type="radio" id="c" name="staff" value="yes" >
  <label for="s">YES</label><br>
  <input type="radio" id="c" name="staff" value="no">
  <label for="s">NO</label><br>
  
  	<div class="row">
	<h3>How would you rate us overall?</h3><br>
  </div>
 
  <input type="radio" id="c" name="overall" value="average" >
  <label for="s">AVERAGE</label><br>
     <input type="radio" id="c" name="overall" value="satisfactory">
  <label for="s">SATISFACTORY</label><br>
  <input type="radio" id="c" name="overall" value="good">
  <label for="s">GOOD</label><br>
    <input type="radio" id="c" name="overall" value="verygood">
  <label for="s">VERY GOOD</label><br>
    <input type="radio" id="c" name="overall" value="excellent">
  <label for="s">EXCELLENT</label><br>

  <div class="row"><br>
  <h3>Any other suggestion?</h3><br>
  </div>
  <label for="text">Please type in the box</label><br>

<textarea id="text" name="othersuggest" rows="5" cols="40">
</textarea><br>
<center>
<input type="submit" value="submit" class="btn btn-danger btn-lg" name="submit"/>
</center>
</form>
</div><br><br>
 </body>
 </html>
 <?php
 $con=mysqli_connect("localhost","root","","autodoc");
 if(!$con)
 {
	 echo("connection error");
 }
 if(isset($_POST['submit']))
 {
	 $name=$_POST['custname'];
	 $email=$_POST['email'];
	 $satisfaction=$_POST['perform'];
	 $time=$_POST['time'];
	 $appointment=$_POST['appoint'];
	 $pdtime=$_POST['pdtime'];
	 $staff=$_POST['staff'];
	 $overall=$_POST['overall'];
	 $other=$_POST['othersuggest'];
	 $sql="insert into feedback values('$name','$email','$satisfaction','$time','$appointment','$pdtime','$staff','$overall','$other');";
	 
	 if(mysqli_query($con,$sql))
	 {
		echo "<script> alert('Your feedback was successfully sended');
		window.location.href='feedbackthankyou.html';
		</script>" ;
		 
	}
	else
	{
		echo "<script> alert('Some Error occured.Please try again!)</script>";
	}
	
	 mysqli_close($con);
	 
 }

  mysqli_close($con);
 
 ?>