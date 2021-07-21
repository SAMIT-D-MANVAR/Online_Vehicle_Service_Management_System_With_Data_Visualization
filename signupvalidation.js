function validateForm() 
{
  var x = document.forms["myForm"]["customer"].value;
  var y = document.forms["myForm"]["pass"].value;
  var p=document.forms["myForm"]["eid"].value; 
 if (x == "") {
    alert("username cannot be empty!!!");
    return false;
  }

  if (y.length<7) {
    alert("Password must be of 7 characters!!");
    return false;
  }
  var atposition =p.indexOf("@");  
var dotposition =p.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=p.length){  
  alert("Please enter a valid e-mail address");  
  return false;  
  } 
}