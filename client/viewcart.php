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
                height: 65%;
                
            }
            .name
            {
                font-family:"verdana";
                font-size:24px;
            }
            .action
            {
                display:flex;
                justify-content:space-between;
            }
            .action-edit
            {
                background-color:yellow;
                padding:5px 8px;
                border-radius:5px;
                border:none;
                cursor:pointer;
            }
            .action-delete1
            {
                background-color:green;
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

session_start();
// include "menu.html";

include_once "../shared/connection.php";
// session_start();
include "menu.html";
$uid=$_SESSION['userid'];

$sql_result=mysqli_query($conn,"select * from cart join products on cart.pdt_id=products.pid where client_id=$uid");

while($row=mysqli_fetch_assoc($sql_result))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];   
    $impath=$row['impath'];
    $cartid=$row['cart_id'];

    echo " 
    <html>  
    <body> 
    <div class='product'>
            <div class='name'>$name</div>
            <div class='price'>$price</div>
            <img class='image' src='$impath'>
            <div class='details'>$details</div>

            <div class='action'>                            
                <a href='deletecart.php?cartid=$cartid'>
                    <button class='action-delete'>Remove from Cart</button>
                </a>
                <a href='placeorder.php?pid=$pid'>
                    <button class='action-delete1'>Place Order</button>
                </a>

            </div>
    </div> 
    
    
</body>
</html>
    ";

}


?>