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

            td{
                border:1.2px solid black;
                width: 400px;
                margin: auto;
                text-align: center;
                padding: 20px;
              
            }
          
            /*tbody, td{*/
            /*    border:1.2px solid black;*/
            /*    width: 400px;*/
            /*    margin: auto;*/
            /*    text-align: center;*/
            /*    padding : 20px;*/
                 
            /*}*/
           
        </style>
    </head>
    <body>
        <table class="yrytrytry">
        <thead>
         <tr>
            <td>Order Id</td>
            <td>Client Id</td>
            <td>Product Id</td>
            <td>Date and Time</td>
         </tr>
     </thead>
        </table>
    </body>
</html>

<?php
include_once "../shared/connection.php";

$cmd="select * from orders";
$sql_result=mysqli_query($conn,$cmd);
 
while($row=mysqli_fetch_assoc($sql_result))
{
    $oid = $row['oid'];
    $cid=$row['cid'];
    $pid=$row['pid'];
    $date = $row['date'];
    echo " 
    <table>
     <tbody>
         <tr>
         <td>$oid</td>
         <td>  <a href=clientinfo.php?cid=$cid> $cid </a> </td>
         <td>  <a href=productinfo.php?pid=$pid> $pid </a> </td>
         <td>$date</td>
         </tr>
     </tbody>
    </table>
    
    
    ";   
  
}
?>