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
$username=$_SESSION['username'];
include "menu.html";
?>

<html>
    <head>
        <style>
            .product
            {
                width:400px;
                height:550px;
                border:2px solid gray;
                display:inline-block;
                padding:20px;
                margin:10px;
                margin-left:50px;
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
            
            .date{
              font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
              font-size:medium;
            }
            
        </style>
    </head>
    <body>
        
    </body>
</html>

<?php
include_once "../shared/connection.php";
//$uname=$_SESSION['username'];
$uid = $_SESSION['userid'];
$cmd="select * from orders join products ON orders.pid=products.pid where cid=$uid";
$sql_result=mysqli_query($conn,$cmd);
echo "<h1>My Orders</h1>";

while($row=mysqli_fetch_assoc($sql_result))
{
    //$pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];   
    $impath=$row['impath'];
    $date = $row['date'];
    echo "    
    <div class='product'>
            <div class='name'>$name</div>
            <div class='price'>$price</div>
            <img class='image' src='$impath'>
            <div class='details'>$details</div>
             <div class='date'>Date and Time of Order <br> $date</div>  
    </div>    
    ";
}
?>