<!doctype html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<style>
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


#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin:auto;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #99ff66;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.thank{
	max-width:300px;
	height:auto;
}
.btn{
	margin:auto;
	
}
</style>
</head>
<body>
<div class="header">
  <a href="#">
        <img src="projectphotos/style.png" class="logo">
  </a>
  <h1 class="head"> AUTODOC</h1>               <!--company logo and heading-->
</div>


<div class="nav">
<a href="home.php"><i class="fa fa-fw fa-sign-out"></i>back</a>
</div>
<br>
<center><h1>GET UPDATES</h1></center>
<br>

<div class="container">
<form method="post" action="fetch.php" class="form-group">
<div class="row">
<div class="col-sm-6">
<label>REGISTRATION NUMBER</label>
<input type="id" name="regno" maxlength="10" class="form-control" required><br>
</div>
<div class="col-sm-6">
<label>ENTER THE SERVICE DATE</label>
<input type="date" name="date" class="form-control" required><br>
</div>
<input type="submit" value="submit" name="submit" class="btn btn-success">
</form>
</div>
</div>
<?php
$con=mysqli_connect("localhost","root","","autodoc");
if(mysqli_connect_error($con))
  echo " connection error";
  if(isset($_POST['submit']))
  {
	  $date=$_POST['date'];

	  $regno=$_POST['regno'];
	  $sql = "SELECT * FROM customerdetails NATURAL JOIN servicedetails  where (reg_no='$regno') and sdate='$date' ";
	$sql1="SELECT sstatus from servicestatus where reg_no='$regno' and sdate ='$date'"; 
	$r=mysqli_query($con,$sql1);
	 if(mysqli_num_rows($r) > 0)  
	 {
	while($g=mysqli_fetch_array($r))
	{
	$fin=$g['sstatus'];
	}
	 }
	 else{
		 echo "<center><h1>records not found</h1><br><h2>Please enter correct details !</h2></center>";
	 }
	 $result=mysqli_query($con,$sql);
	  while($row=mysqli_fetch_array($result))
	  {
		  ?>
<div class="container">
<table id="customers" class="display">
	<tr>
    <td>application number</td>
    <td><?php  echo $row['application_no']; ?></td>
    
  </tr>
  <tr>
    <td>CUSTOMER NAME</td>
    <td><?php  echo $row['customer_name'] ?></td>
    
  </tr>
  <tr>
    <td>EMAIL ID</td>
    <td><?php  echo $row['email_id'] ?></td>
  
  </tr>
  <tr>
    <td>PHONE NUMBER</td>
    <td><?php  echo $row['phone_no'] ?></td>
   
  </tr>
  <tr>
    <td>DATE OF BIRTH</td>
    <td><?php  echo $row['dob'] ?></td>
    
  </tr>
  <tr>
    <td>ADDRESS</td>
    <td><?php  echo $row['address'] ?></td>
 
  </tr>
   <tr>
    <td>VEHICLE TYPE</td>
    <td><?php  echo $row['pincode'] ?></td>
  
  </tr>
   <tr>
    <td>VEHICLE TYPE</td>
    <td><?php  echo $row['city'] ?></td>
  
  </tr>
  <tr>
    <td>VEHICLE REGISTRATION NUMBER</td>
    <td><?php  echo $row['reg_no'] ?></td>
   
  </tr>
  <tr>
    <td>VEHICLE TYPE</td>
    <td><?php  echo $row['vehicle_type'] ?></td>
  
  </tr>
   <tr>
    <td>VEHICLE TYPE</td>
    <td><?php  echo $row['pickup'] ?></td>
  
  </tr>
  <tr>
    <td>MAKE AND MODEL</td>
    <td><?php  echo $row['make_model'] ?></td>
    
  </tr>
  <tr>
    <td>MAKE AND MODEL</td>
    <td><?php  echo $row['service_type'] ?></td>
    
  </tr>
  <tr>
    <td>SERVICE DATE</td>
    <td><?php  echo $row['sdate'] ?></td>
   
  </tr>
  <tr>
    <td>SERVICE TIME</td>
    <td><?php  echo $row['stime'] ?></td>
    
  </tr>
  
  <tr>
    <td>SERVICE COST</td>
    <td><?php  echo "Rs ".$row['cost'] ?></td>
    
  </tr>
  <tr style="background-color:yellow">
    <td>SERVICE STATUS</td>
    <td><?php echo $fin ?></td>
    
  </tr>
</table>
<br><br>


		  <?php
	  }
	  
	  
  }
?><br><br>
<center>
NOTE:-<br>
If you have any queries/problems please contact us <br>
PhoneNo :-2145432,2146543,9022145678<br>
Email-id:autodocinfo@gmail.com<br><br>
</center>
</div>
</body>
</html>