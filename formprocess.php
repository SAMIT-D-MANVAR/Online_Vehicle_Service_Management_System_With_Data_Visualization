<?php    //start the session
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	
?>
<!doctype html>
<html lang="en">
  <head>
  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="formtest.css">
         <title>SERVICE | FORM</title>
		 <link rel="shortcut icon" href="projectphotos/style.png" type="image/x-icon"/><!--icon on title-->
  </head>
<body>

    <script src="formtest.js"></script> <!--form validation-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="timepicker/jquery.timepicker.min.css"><!--libraries for timepicker jquery library-->
    <script src="timepicker/jquery.timepicker.min.js"></script>
	
	
<div class="header">
  <a href="#">
        <img src="projectphotos/style.png" class="logo">
  </a>
  <h1 class="head"> AUTODOC</h1>               <!--company logo and heading-->
</div>
<div class="nav">
<a href="home.php"><i class="fa fa-fw fa-sign-out"></i> BACK TO HOME</a>
<a href="slotstatus.php"><i class="fa fa-fw fa-sign-out"></i> CHECK SLOTS BY DATE</a>
</div>
<br><br>
<center><h2 style="color:red;">SERVICE APPLICATION FORM</center><br>
<!--registration page starts-->
<form method="post" action="formprocess.php" name="myForm" onsubmit="return validateForm()">
<div class="container" style="max-width:800px; background: linear-gradient(to bottom, #99ffcc 0%, #66ffff 100%);">
<h2>CUSTOMER DETAILS</h2>
<div class="row">
<div class="col-sm-12">
 <label for="cname">CUSTOMER NAME</label>
  <input type="text" id="cname" name="cname"/ placeholder="Please Enter Your Name" value= "<?php  if(isset($_POST['cname'])) echo $_POST['cname']; ?>" />
 </div>
</div>
<div class="row">
<div class="col-sm-6">
<label for="mail">EMAIL ID</label>
<input type="email" id="mail" name="emailid" placeholder="Eg : abc@gmail.com" value= "<?php  if(isset($_POST['emailid'])) echo $_POST['emailid']; ?>"/>
</div>
<div class="col-sm-6">
<label for="mobile">PHONE NUMBER</label>
<input type="tel" id="mobile" name="phone" maxlength="10" placeholder="Enter a valid number"value= "<?php  if(isset($_POST['phone'])) echo $_POST['phone']; ?>"/>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<label for="dob">DATE OF BIRTH</label>
<input type="date" id="dob" name="birth" value= "<?php  if(isset($_POST['birth'])) echo $_POST['birth']; ?>" />
</div>
<div class="col-sm-6">
 <label for="gen">GENDER</label>
       <select id="gen" name="gender" value= "<?php  if(isset($_POST['gender'])) echo $_POST['gender']; ?>">
         <option value="male">MALE</option>
         <option value="female">FEMALE</option>
         <option value="others">OTHERS</option>
       </select>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<label for="add">ADDRESS</label>
<input type="text" name="address" id="add" value= "<?php  if(isset($_POST['address'])) echo $_POST['address']; ?>" placeholder="House/flat name,Landmark(Eg:-Opp to warehouse etc.)"/>  
</div>
</div>
<div class="row">
<div class="col-sm-6">
<label for="pin">PINCODE</label>
<input type="text" name="pincode" id="pin" maxlength="6" placeholder="Valid 6 Digit Pincode" value= "<?php  if(isset($_POST['pincode'])) echo $_POST['pincode']; ?>"/> 
</div>
<div class="col-sm-6">
<label for="cit">CITY</label>
<input type="text" id="cit" name="city" value="<?php  if(isset($_POST['city'])) echo $_POST['city']; ?>"/>
</div>
</div>
<h2>Car Service Details</h2>
<div class="row">
<div class="col-sm-6">
<label for="no">CAR REGISTRATION NUMBER</label>
<input type="text" name="regno" id="no" maxlength="10" placeholder="EXAMPLE KA19MZ1234"value= "<?php  if(isset($_POST['regno'])) echo $_POST['regno']; ?>"/>
</div>


<div class="col-sm-6">
<label for="t">VEHICLE TYPE</label>
       <select id="t" name="type" value= "<?php  if(isset($_POST['type'])) echo $_POST['type']; ?>">
     
		 <option value="four wheeler">FOUR WHEELER</option>
         <option value="two wheeler">TWO WHEELER</option>
        
       </select>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<label for="mm">CAR MAKE AND MODEL</label>
<input type="text" name="model" id="mm" value= "<?php  if(isset($_POST['model'])) echo $_POST['model']; ?>" placeholder="Honda(make) Accord(model" />
</div>
<div class="col-sm-6">
<label for="pd">DO YOU NEED PICK AND DROP FACILITY</label>
<select id="pd" name="pick" value= "<?php  if(isset($_POST['pick'])) echo $_POST['pick']; ?>">
       
		 <option value="yes">YES</option>
         <option value="no">NO</option>
        
       </select>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<label for="d">SELECT SERVICE DATE</label>
<input type="date" name="date" id="d" value= "<?php  if(isset($_POST['date'])) echo $_POST['date']; ?>"/>
</div>
<div class="col-sm-6">
<label for="time">SELECT SERVICE TIME</label>
      <input type="text" name="time" id="time" value= "<?php  if(isset($_POST['time'])) echo $_POST['time']; ?>" placeholder="Click here"/>
	 
</div>
</div>
 <script>
$(document).ready(function(){
    $('#time').timepicker({
		 step: 60,
	 minTime: '9',
      maxTime: '4:00pm',
});
});
</script>
<div class="row">
<div class="col-sm-6 service-type">
<label for="sv"> SELECT SERVICE TYPE</label>
    <select id="sv" name="service" value= "<?php  if(isset($_POST['service'])) echo $_POST['service']; ?>">
        <option data-price="10000" value="PERIODIC MAINTENANCE">PERIODIC MAINTENANCE</option>
         <option data-price="5500" value="AC SERVICES">AC SERVICE</option>
		  <option data-price="7000" value="CAR SPA">CAR SPA</option>
		   <option data-price="7500" value="BODY REPAIR">BODY REPAIRS</option>
		    <option data-price="5000" value="WHEEL REPLACEMENT">WHEEL REPLACEMENT</option>
		     <option data-price="6500" value="RUNNING REPAIRS">RUNNING REPAIRS</option>
               <option data-price="5000" value="REGULAR BIKE SERVICE">REGULAR BIKE SERVICE</option>
			    <option data-price="4500" value="OIL AND AIR FILTER">OIL AND AIR FILTER CHANGE</option>
			     <option data-price="8500" value="PERIODIC BIKE SERVICE">PERIODIC BIKE SERVICE</option>
	</select>
</div>
<div class="col-sm-6">
<label for="price"> SERVICE COST</label>
    <input type="text" name="cost" class="price-input" value= "<?php  if(isset($_POST['cost'])) echo $_POST['cost']; ?>" readonly>
</div>
</div>
<script>
$('.service-type').on('change', function() {
  $('.price-input')
  .val(
    $(this).find(':selected').data('price')
  );
});
</script><br><br>
<center>
<input type="submit" class="btn1"  value="CHECK SLOT" name="check" />
<input type="submit"  class="btn1" value="SUBMIT" name="submit"/><br>
</center>
</div>
</form>
<br><br><br>
<div class="container-fluid"style="background: linear-gradient(to bottom right, #66ff66 10%, #ffffff 42%);";>
<h3 style="color:red;">PLEASE NOTE :-</h3>
<p>1)Please Enter the correct details in the service form</p>
<p>2)Please provide the correct address details</p> 
<p>3)If your opting for free pick/drop facility for your car please ensure to keep your car ready on time so that our 
staff can collect it on time and avoid delay in servicing</p>
<p>4)If you are bringing and taking back your car by yourself please make sure to bring your car to the service company based
on the time slot you choose to avoid delay.</p>
<p>5)Make sure to take all your required documents before giving your car for service</p>
<p>6)Time slot is subject of availability</p>
<p>Any other queries contact us</p>
<p>Phone no:- 2145432,2146543,9099890900<br>
Email-id :-autodocinfo@gmail.com</p>
</div>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","autodoc");
if(mysqli_connect_error($con))
  echo " connection error";
if(isset($_POST['submit']))
{
	$date=$_POST['date'];
	$time=$_POST['time'];
	$sql= "SELECT sdate,stime from servicedetails where stime='$time' and sdate='$date'";
	$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
	echo " <script> 
alert('slot already taken')</script>";
}
else{
	$name=$_POST['cname'];
	$email=$_POST['emailid'];
	$phone=$_POST['phone'];
	$dob=$_POST['birth'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$pincode=$_POST['pincode'];
	$city=$_POST['city'];
	$regno=$_POST['regno'];
	$type=$_POST['type'];
	$model=$_POST['model'];
	$pick=$_POST['pick'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$service=$_POST['service'];
	$cost=$_POST['cost'];
		$_SESSION['name']=$name;
	$_SESSION['email']=$email;
	$_SESSION['phone']=$phone;
	$_SESSION['birth']=$dob;
	$_SESSION['gender']=$gender;
	$_SESSION['address']=$address;
	$_SESSION['pincode']=$pincode;
	$_SESSION['city']=$city;
	$_SESSION['regno']=$regno;
	$_SESSION['type']=$type;
	$_SESSION['model']=$model;
	$_SESSION['pick']=$pick;
	$_SESSION['date']=$date;
	$_SESSION['time']=$time;
	$_SESSION['service']=$service;
	$_SESSION['cost']=$cost;
	$sql="INSERT INTO customerdetails(customer_name,email_id,phone_no,dob,gender,address,pincode,city) VALUES ('$name','$email','$phone','$dob','$gender','$address','$pincode','$city')";
	
	if(mysqli_query($con,$sql))

	{
	$sql2=	"INSERT INTO servicedetails(reg_no,vehicle_type,make_model,pickup,sdate,stime,service_type,cost) VALUES 
	('$regno','$type','$model','$pick','$date','$time','$service','$cost')";
	if(mysqli_query($con,$sql2))
	{

     $sql3="insert into servicestatus(reg_no,customer_name,sdate) values('$regno','$name','$date');";
	mysqli_query($con,$sql3);
	}
	
	
	
	
	
	
	echo "<script> alert('data inserted successfully');
window.location.href='formpdf.php';
</script>";	
}
else{
	echo "failed";
}

}
}
if(isset($_POST['check']))
{
	$date=$_POST['date'];
	$time=$_POST['time'];
	$sql= "SELECT sdate,stime from servicedetails where stime='$time' and sdate='$date'";
	$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
echo " <script> 
alert('slot already taken')</script>";

	
}
else{
	echo " <script> 
alert('slot available')</script>";

}
}

?>