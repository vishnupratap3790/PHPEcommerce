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
            .action
            {
                display:flex;
                justify-content:center;
            }
            .action-edit
            {
                background-color:yellow;
                padding:5px 8px;
                border-radius:5px;
                border:none;
                cursor:pointer;
            }
            .action-delete
            {
                background-color:tomato;
                padding:5px 8px;
                border-radius:5px;
                border:none;
                cursor:pointer;
            }
            
        </style>
    </head>
    <body>
        
    </body>
</html>

<?php
include_once "../shared/connection.php";
$uname=$_SESSION['username'];
$uid=$_SESSION['userid'];
echo "<h1>Welcome $uname</h1>";
$cmd="select * from products";
$sql_result=mysqli_query($conn,$cmd);

while($row=mysqli_fetch_assoc($sql_result))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];   
    $impath=$row['impath'];

    echo "    
    <div class='product'>
            <div class='name'>$name</div>
            <div class='price'>$price</div>
            <img class='image' src='$impath'>
            <div class='details'>$details</div>

            <div class='action'>                            
                <a href='addcart.php?pid=$pid'>
                    <button class='action-delete'>Add to Cart</button>
                </a>
            </div>
    </div>    
    ";
}
?>