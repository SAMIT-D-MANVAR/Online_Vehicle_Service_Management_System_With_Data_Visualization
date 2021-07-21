<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="shortcut icon" href="projectphotos/style.png" type="image/x-icon"/><!--icon on title-->
    <title>Checkslot</title>
<style type="text/css">
body{
	margin:0;
}
.header {
padding:20px;
background:url("projectphotos/net.png");
background-size:cover;
height:auto;
width:100%;
}

.logo{
	position:relative;

	height:auto;
	width:130px;
	left:20px;
}

.head{
font-size: 35px;
color:#cc5200;
}

.nav {
  width: 100%;
  background-color:green;
  overflow: auto;
}

.nav a {
  float: left;
  padding: 10px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.nav a:hover {
  background-color:red;
}
	
</style>
</head>
<body>
  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<div class="header">
  <a href="#">
        <img src="projectphotos/style.png" class="logo">
  </a>
  <h1 class="head"> AUTODOC</h1>               <!--company logo and heading-->
</div>


<div class="nav">
<a href="formprocess.php">BACK</a>
</div>
	<br>
	<br>
	<div class="container">
	<center><h3>Enter the date you wish  to check which slots are booked </h3></center><br>
	<form method="post" action="slotstatus.php">
	<input type="date" name="date" class="form-control" required><br><br>
	<center>
	<input type="submit" value="submit" class="btn btn-primary" name="submit">
	</center>
	</form>
	<br>
	
	<table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Service date</th>
        <th>Service Time am/pm</th>
        
      </tr>
    </thead>
    <tbody>
<?php
$con=mysqli_connect("localhost","root","","autodoc");
if(mysqli_connect_error($con))
  echo " connection error";
  if(isset($_POST['submit']))
  {
	  $date=$_POST['date'];

	  
	  $sql = "SELECT sdate,stime FROM servicedetails where sdate='$date';";
	  $result=mysqli_query($con,$sql);
	  while($row=mysqli_fetch_array($result))
	  {
		  echo '  
                               <tr>  
							   <td>'.$row["sdate"].'</td> 
							  <td>'.$row["stime"].'</td>  
                              
		  </tr>  
	  ';
	  }
  }
	  ?>
		  
		</tbody>  
  </table>
</div>
</body>
</html>
	