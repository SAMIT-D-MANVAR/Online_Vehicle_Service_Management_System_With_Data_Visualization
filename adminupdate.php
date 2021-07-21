<?php  
 $connect = mysqli_connect("localhost", "root", "", "autodoc");  
$sql = "SELECT * FROM servicestatus";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           
		   <title>service|status</title>  
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

		 
           
       
	  
<style type="text/css">
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
#customer_data {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customer_data td, #employee_data th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customer_data tr:nth-child(even){background-color:#99ff66;}

#customer_data tr:hover {background-color: yellow;}

#customer_data th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}  
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>  
      
<body>  
<div class="header">
  <a href="#">
        <img src="projectphotos/style.png" alt="company_logo" class="logo">
  </a>
  <h1 class="head"> AUTODOC</h1>               <!--company logo and heading-->
</div>
<!--end of header-->
<div class="nav">
<a href="adminwelcome.php"><i class="fa fa-fw fa-sign-out"></i>BACK</a>
</div>
	   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   
		  <center>
           <div class="container ">  
                <h2 align="center">SERVICE STATUS</h2>  
                <br />  
				 <input class="form-control" id="myInput" maxlength="10" type="text" placeholder="Search data" required>
                <br><br>
				<div class="table-responsive">  
                     <table id="customer_data" >  
                          <thead >  
                               <tr>  
							   <td style="width:150px;">reg_no</td>
							   <td style="width:250px;">customer_name</td>
							   <td style="width:250px;">service_status</td>
							   <td style="width:230px;">service_date</td>
                             </tr>  
                          </thead>
     <tbody id="myTable">						  
						  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                            <tr>  
							  <td>'.$row["reg_no"].'</td> 
							  <td>'.$row["customer_name"].'</td>  
							  <td>'.$row["sstatus"].'</td>  
                              <td>'.$row["sdate"].'</td> 
                            </tr>  
                               ';  
                          }  
                          ?>  
                       </tbody>
					   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
					 </table>  
                </div>  
           </div>  
	</center>
	<script>  
$(document).ready( function() {
    $('#customer_data').DataTable( {
       
     } );
} );


 </script> <br><br>
	<div class="container">
<form method="post" action="adminupdate.php">
<div class="form-group">
<label for="sample">ENTER REGISTRATION NUMBER</label><br>
<input type="text" id="sample"name="regno" maxlength="10" class="form-control" required><br>
</div><br>
<center>
<input type="submit" class="btn btn-danger" value="servicing" name="service">
<input type="submit" class="btn btn-success" value="completed" name="completed">
<a href="servicedetail.php" class="btn btn-success">BACK</a>
</center>
</form>
</div>
<br><br>


<?php
$con=mysqli_connect("localhost","root","","autodoc");

if(mysqli_connect_error($con))
 echo "failed to connect";
 if(isset($_POST['service']))
 {
	 $regno=$_POST['regno'];
	 $value='serviceing';
	$sql1=" update servicestatus set sstatus='$value' where reg_no='$regno'";
	if(mysqli_query($con,$sql1))
	echo "<script>alert('updated successfully');
	window.location.href='adminupdate.php';</script>";
	else
	echo "<script>alert('failed to update');
	window.location.href='adminupdate.php';</script>";

	 
 }
 if(isset($_POST['completed']))
 {
	 $regno=$_POST['regno'];
	 $value='completed';
	$sql1=" update servicestatus set sstatus='$value' where reg_no='$regno'";
	if(mysqli_query($con,$sql1))
	echo "<script>alert('updated successfully');
	window.location.href='adminupdate.php';</script>";
	else
echo "<script>alert('failed to update');
	window.location.href='adminupdate.php';</script>";
	 
 }
?>
</body>  
</html>  
  






