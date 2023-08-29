<html>

<head>
    <style>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">@import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap');

        * {
            font-family: Georgia, 'Times New Roman', Times, serif;
            box-sizing: border-box;
        }

        .product {
            width: 390px;
            height: 400px;
            border: 2px solid gray;
            display: inline-block;
            padding: 20px;
            margin: 10px;
            margin-left:30px;
        }

        .image {
            width: 100%;
            height: 65%;

        }

        .name {
            font-family: "verdana";
            font-size: 24px;
            color: white;
        }

        body {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
            background-color:black;

        }

        .price {
            color: white;
        }

        .details {
            color: white;
        }

        .action {
            display: flex;
            justify-content: center;
        }

        .action-purchase {
            background-color: tomato;
            padding: 5px 8px;
            border-radius: 5px;
            border: none;
            font-weight:bold;
            cursor: pointer;
        }

        .container {
            max-width: 1170%;
            /* background-color: rgba(0, 0, 0, 0.2); */
            margin: auto;
            /* justify-content: space-evenly; */
        }

        /* 
        .row{
               display: flex;
               flex-wrap: wrap;
            } */

        ul {
            list-style: none;
        }

        .footer {
            /* background-color:#24262b; */
            background: url(serve.jpeg) no-repeat;
            background-size: cover;
            background-position: center;
            height: fit-content;
            /* padding: 70px 0; */

        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
           font-weight: bold;
            position: relative;
        }


        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            height: 2px;
            box-sizing: border-box;
            background-color: #e91e63;
            width: 50px;
        }

        .footer-col ul li a {
            font-size: 18px;
            font-weight: bold;
            text-transform: capitalize;
            color: white;
            text-decoration: none;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 10px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            color: darkblue;
            background-color: #e91e63;
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: black;
            background-color: white;
        }
    </style>
</head>

<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="about.html">about us</a></li>
                        <li><a href="service.php">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">term & conditions</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">electronics machine</a></li>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>


            </div>

        </div>

    </footer>

</body>

</html>
<?php
include_once "shared/connection.php";
$cmd = "select * from products";
$sql_result = mysqli_query($conn, $cmd);

while ($row = mysqli_fetch_assoc($sql_result)) {
    $pid = $row['pid'];
    $name = $row['name'];
    $price = $row['price'];
    $details = $row['details'];
    $impath = $row['impath'];

    echo "    
    <div class='product'>
            <div class='name'>$name</div>
            <div class='price'>$price</div>
            <img class='image' src='$impath'>
            <div class='details'>$details</div>
            <div class='action'>                            
            <a href='../client/login.html'>
                <button class='action-purchase'>Login First To Purchase</button>
            </a>
        </div>

    </div>    
    ";
}

?>