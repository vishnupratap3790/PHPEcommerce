<?php
include_once '../shared/connection.php';
$uname=$_POST['username'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];
$address=$_POST['address'];
$sql_result=mysqli_query($conn,"select * from user where username='$uname'");
$total_rows=mysqli_num_rows($sql_result);
if($total_rows>0)
{
    echo "<h3>Username Already Taken</h3>";
    die;
}
$cmd="insert into user(username,password,address) values('$uname','$pass1','$address')";
$query_status=mysqli_query($conn,$cmd);
if($query_status)
{
    echo "Registartion Successfully!";
    echo "<a href='login.html'>Login here</a>";
}
else
{
    echo "Registration Failed";
}
?>