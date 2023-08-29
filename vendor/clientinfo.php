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
?>
<style>
  .disp{
    font-size: large;
    
  }
  .name{
    font-size: large;
    font-family: Arial, Helvetica, sans-serif;
  }
  .mobile{
    font-size: large;
    font-family: Arial, Helvetica, sans-serif;
  }
  .address{
    font-size: large;
    font-family: Arial, Helvetica, sans-serif;
  }

</style>

<?php
$cid=$_GET['cid'];
include_once '../shared/connection.php';
$cmd="select * from client where userid=$cid";
$sql_result=mysqli_query($conn,$cmd);

while ($row = mysqli_fetch_assoc($sql_result)) {

    $uname = $row['username'];
    $mobile = $row['mobile'];
    $address = $row['address'];
     
    echo "  
    
    <div class='disp'>
    <a href=vieworder.php> Go Back </a>
    </div>
  
    <div class='product'>
            <div class='name'>User name : $uname</div>
            <div class='mobile'>User Mobile Number : $mobile</div>
            <div class='address'>User Address : $address</div>    
    </div>
     
    ";

}
?>