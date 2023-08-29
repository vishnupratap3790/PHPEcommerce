<?php
include_once 'shared/connection.php';
$uname=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$message=$_POST['message'];
 
$cmd="insert into people(uname,email,mobile,address,message) values('$uname','$email','$mobile','$address','$message')";
$query_status=mysqli_query($conn,$cmd);
if($query_status)
{
    echo "Message Send Successfully!";
    echo "<a href='index.html'>return to Home page </a>";
}
else
{
    echo "Failed to send message";
}
?>