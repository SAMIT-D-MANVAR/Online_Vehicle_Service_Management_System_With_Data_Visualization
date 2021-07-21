function validateForm() {
  var x = document.forms["myForm"]["cname"].value;
  var y=document.forms["myForm"]["phone"].value;
var z=document.forms["myForm"]["pincode"].value;
var p=document.forms["myForm"]["emailid"].value;
var v=document.forms["myForm"]["regno"].value;
  if (x == "") {
    alert("PLEASE ENTER YOUR NAME !");
    return false;
  }
  if (y.length<10) {
    alert("PLEASE ENTER A VALID PHONE NUMBER! ");
    return false;
  }
if(z.length<6)
{
	alert("PLEASE ENTER A VALID Pincode! ");
	  return false;
}
 
var atposition =p.indexOf("@");  
var dotposition =p.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=p.length){  
  alert("Please enter a valid e-mail address");  
  return false;  
  } 

if(v.length<10)
{
	alert("PLEASE ENTER A VALID CAR REGISTRATION NUMBER EG(KA19AB1234! ");
	  return false;
}
}