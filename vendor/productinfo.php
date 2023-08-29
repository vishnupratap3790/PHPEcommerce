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
            .product
            {
                width:400px;
                height:500px;
                border:2px solid gray;
                display:inline-block;
                padding:20px;
                margin:10px;                
            }
            .image
            {
                width:100%;
                height:65%;
                
            }
            .name
            {
                font-family:"verdana";
                font-size:24px;
            }
            .disp{
                margin-top: 0px;
                font-size: large;
            }

        </style>

<?php
$pid=$_GET['pid'];
include_once '../shared/connection.php';
$cmd="select * from products where pid=$pid";
$sql_result=mysqli_query($conn,$cmd);

while ($row = mysqli_fetch_assoc($sql_result)) {

    $name = $row['name'];
    $price = $row['price'];
    $details = $row['details'];
    $impath = $row['impath'];

    echo "  
    <div class='disp'>
    <a href=vieworder.php> Go Back </a>
    </div>
  
    <div class='product'>
            <div class='name'>$name</div>
            <div class='price'>$price</div>
            <img class='image' src='$impath'>
            <div class='details'>$details</div>    
    </div>
    
     
    ";

}
?>


