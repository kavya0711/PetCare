<?php
session_start();
include "animal.php";
$un=$_POST['username'];
$pwd=$_POST['password'];
$email=$_POST['email'];

$sql="insert into register1(username,password,email)values('$un','$pwd','$email')";
$result=mysqli_query($con,$sql);
if($result)
{
header("location:loginpage.php");
}
else
{
echo"error";
}
?>
