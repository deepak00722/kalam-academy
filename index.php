<?php
include("connect.php");
error_reporting(0);



?>
<html> 
<head><title>SINGUP FORM</title></head>
<body>
<h2 align="center">Singup Form</h2>
<table align="center">
<tr><td>First name:<td><input type="text" placeholder="first name" name="firstname" required></td></tr>
<tr><td>Last name:<td><input type="text" placeholder="last name" name="lastname" required></td></tr>
<tr><td>Email address:<td><input type="email" placeholder="email" name="email" required></td></tr>
<tr><td>password:<td><input type="password" placeholder="password" name="pwd" required></td></tr>
<tr><td>Gender:<td> Male <input type="radio" name="d1">Female<input type="radio" name="d1" required></td></tr>
<tr><td>Address:<td><input type="textbox" height="15" width="17"place holder="address" name="address" required></td></tr>
<tr><td align="center" colspan="2"><input type="submit" href="index.html"></td></td>
</table>
</body>
</html>

<?php
  $fn= $_POST['firstname'];
  $ln= $_POST['lastname'];
  $email= $_POST['email'];
  $password= $_POST['pwd'];
  $add= $_POST['address'];
  
  $query="INSERT INTO STUDENT VALUES ('$fn','$ln','$email','$password','$add')";
  $data=mysquli_query($conn,$query);
  if($data)
 {
  echo "DATA INSERTED TO THE DATA BASE";
 }
 else 
 {
  echo "DATA IS NOT INSERTED TO THE DATA BASE";
 };
?>