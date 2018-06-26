<?php
$name=$_POST['name'];
$registration=$_POST['registration_no'];
$email=$_POST['email_id'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bpcit');
$q="INSERT INTO registration(s_name,s_registration_no,s_email_id,s_password) values('$name','$registration','$email','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
<title>insertion</title>

</head>
<body>
<h1> west bengal state councelling of technical education </h1>
<p><?php if($status==1) echo "REGISTRATION SUCCESSFULLY";
else "registration fail";
echo "REGISTRATION SUCCESSFULLY";
  echo $name;
 echo $registration;
 echo $email;
 echo $password;?>
</p>
<h1 font-color="green">GO TO STUDENT LOGIN PAGE<a href="login.php"> Click hare</a></h1>
</body>
</html>