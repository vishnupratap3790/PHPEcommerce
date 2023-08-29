<?php
$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];

$actual_name=$_FILES['pdt_image']['name'];
$file_name="../images/$actual_name";
move_uploaded_file($_FILES['pdt_image']['tmp_name'],$file_name);

include_once "../shared/connection.php";
$cmd="insert into products(name,price,details,impath) values('$name',$price,'$details','$file_name')";
$sql_status=mysqli_query($conn,$cmd);
if($sql_status)
{
    echo "Product Uploaded Successfully!! 
     <a href=upload.php> Go Back </a> ";
}
else{
    echo "failed to upload";
    echo mysqli_error($conn);
    
}
 
 
?>