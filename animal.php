<?php
$con=mysqli_connect("localhost","root","","animal");
if($con)
{
echo "connected";
}
else
{
echo"not connected";
}
?>