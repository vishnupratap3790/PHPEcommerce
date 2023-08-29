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
echo "<h1> Welcome $username</h1>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        .rwerwereew{
          border-radius:30px;
          display:flex;
          flex-direction:column;
          align-items:center;
          justify-content:space-evenly;
        }
       
        input
        {
            display: block; 
            margin:10px;
        }
        .form-control{
            border-radius:15px !important;
        }
       
    </style>
</head>
<body>    

        <div class="d-flex justify-content-center align-item-center rwerwereew" >

        <form action="upload_pdt.php"  method="post" class="p-5 bg-info text-center rwerwereew" enctype="multipart/form-data">
            <input  class="mt-2 form-control" type="text" name="name" placeholder="Enter name" required>
            <input  class="mt-2 form-control" type="text" name="price" placeholder="Enter price" required>
            <textarea  class="mt-2 form-control" name="details" id="" cols="30" rows="10" placeholder="Product description" required>Product description...</textarea>
            <input type="file" class="form-control" name="pdt_image" required>

            <input class="bg-primary form-control" type="submit">
        </form>
        </div>
</body>
  
</html>