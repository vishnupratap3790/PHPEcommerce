<?php
$servername="localhost";
$username="id19994133_root1";
$password="hc8D0!*c9C~qoHfs";
$dbname="id19994133_localhost";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    echo "Connection Failed";
    die;
}
?>