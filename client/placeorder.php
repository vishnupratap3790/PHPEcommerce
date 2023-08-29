<?php
session_start();
if(!isset($_SESSION['login']))
{
    echo "Illegal Attempt Login First";
    die;
}
if($_SESSION['login']==false)
{
    echo "Login Failed!";
    die;
}
//$uname=$_SESSION['username'];
$uid=$_SESSION['userid'];
$pid=$_GET['pid'];

include_once '../shared/connection.php';

$sql_status=mysqli_query($conn,"insert into orders(cid, pid, address) values($uid, $pid, '')");
if($sql_status)
{
    echo "place order successfully!! 
    <a href='viewcart.php'>Go back</a>
    "; 

}
else
{
    echo "Failed to Place order";
    echo mysqli_error($conn);
}

?>