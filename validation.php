<?php
session_start();
$registration=$_POST['registration_no'];
$password=$_POST['Password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bpcit');
$q="select * from registration where s_registration_no='$registration' && s_password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['registration_no']=$registration;
	header('location:http://localhost/mbpcit/bpcit.php');
}
else
{
header('location:http://localhost/mbpcit/login.php');
}
?>
	