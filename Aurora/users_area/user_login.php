<?php 
session_start();

include('../includes/connect.php');
include('../functions/common_function.php');

?>

<!DOCTYPE html>
<html>

<head>
  <title>Aurora Cloth Store - Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="style.css" rel="stylesheet" type="text/css"/>
         </head>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">

        <style>
             @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');
            /*header*/
            .nav-item a{
                color: white;
            }
            .dropdown-menu {
                background-color: #795644;
            }
            .fa:hover {
                transform: scale(1.1);
            }

        /*header end*/
 
           

            h2 {
                text-align: center;
                margin-bottom: 30px;
                color: black; 
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                color: black;
            }

            .btn {
                width: 100%;
                background-color: #795644;
            }
            /*footer css*/
              

            * {
                padding: 0;
                margin: 0;

            }

            body {
                font-family: 'Poppins', sans-serif;
            }

            html {
                background-color: #ffffff;
            }

            /* The footer is fixed to the bottom of the page */

            footer {
                position: fixed;
                bottom: 0;
            }




            @media (max-height:800px) {
                footer {
                    position: static;
                }
                header {
                    padding-top: 40px;
                }
            }
            .footer-distributed {
                background-color: #795644 ;

                width: 100%;
                text-align: left;
                font: bold 16px sans-serif;
                padding: 50px 50px 60px 50px;
                margin-top: 80px;
            }

            .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
                display: inline-block;
                vertical-align: top;
            }
            /* Footer left */

            .footer-distributed .footer-left {
                width: 30%;
            }

            .footer-distributed h3 {
                color: #ffffff;
                font-size: 36px;
                margin: 0;
            }


            .footer-distributed h3 span {
                color: #ffffff;
            }

            /* Footer links */

            .footer-distributed .footer-links {
                color: #ffffff;
                margin: 20px 0 12px;
            }

            .footer-distributed .footer-links a {
                display: inline-block;
                line-height: 1.8;
                text-decoration: none;
                color: inherit;
            }

            .footer-distributed .footer-company-name {
                color: #ffffff;
                font-size: 14px;
                font-weight: normal;
                margin: 0;
            }


            /* Footer Center */

            .footer-distributed .footer-center {
                width: 35%;
            }

            .footer-distributed .footer-center i {
                background-color: #c4a185;
                color: #ffffff;
                font-size: 25px;
                width: 38px;
                height: 38px;
                border-radius: 50%;
                text-align: center;
                line-height: 42px;
                margin: 10px 15px;
                vertical-align: middle;
            }

            .footer-distributed .footer-center i.fa-envelope {
                font-size: 17px;
                line-height: 38px;
            }

            .footer-distributed .footer-center p {
                display: inline-block;
                color: #ffffff;
                vertical-align: middle;
                margin: 0;
            }

            .footer-distributed .footer-center p span {
                display: block;
                font-weight: normal;
                font-size: 14px;
                line-height: 2;
            }

            .footer-distributed .footer-center p a {
                color: #ffffff;
                text-decoration: none;

            }



            /* Footer Right */

            .footer-distributed .footer-right {
                width: 30%;
            }

            .footer-distributed .footer-company-about {
                line-height: 20px;
                color: #ffffff;
                font-size: 13px;
                font-weight: normal;
                margin: 0;
            }

            .footer-distributed .footer-company-about span {
                display: block;
                color: #ffffff;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 20px;
            }
            .footer-distributed .footer-icons a {
                display: inline-block;
                width: 35px;
                height: 35px;
                cursor: pointer;
                background-color:#c4a185 ;
                border-radius: 2px;
                font-size: 20px;
                color: #ffffff;
                text-align: center;
                line-height: 35px;
                margin-top: 5px;
                margin-right: 3px;
                margin-bottom: 5px;
            }


            .footer-distributed .footer-icons a:hover {
                background-color: #30190f;
            }

            .footer-links a:hover {
                color: #846148;
            }

            @media (max-width: 880px) {
                .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
                    display: block;
                    width: 100%;
                    margin-bottom: 40px;
                    text-align: center;
                }
                .footer-distributed .footer-center i {
                    margin-left: 0;
                }
            }
  </style>
 <!-- header -->
        <nav class="navbar navbar-expand-lg fixed-top " style="background-color: #795644">
            <div class="container mt-2">
                <a class="navbar-brand text-white fw-bold" href="#" style="padding-right:20px">Aurora</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ps-10  " id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Men</a></li>
                                <li><a class="dropdown-item" href="#">Women</a></li>
                                <li><a class="dropdown-item" href="#">Kids</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Aurora's Needle</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link " href="#">Total Price: 100/-</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="">

                        <ul class="nav navbar-nav navbar-right">

                            <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:25px;color:white;padding:15px" ></i><sup>1</sup></a></li>                        
                            <li class=" nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" ><i class="fa fa-user"style="font-size:25px;color:white;padding:8px" ></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Admin</a></li>
                                    <li><a class="dropdown-item" href="profile.php">User</a></li>
                                    <li><a class="dropdown-item" href="#">Designer</a></li>
                                </ul>
                            </li>
                    </div>  


                </div>
            </div>
        </nav>
    <!-- header end -->
    
 <div class="container" style="max-width: 400px;margin: 100px auto;background-color: #c4a185;padding: 20px;border-radius: 5px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <h2>Aurora</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="user_name">Username</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter your password" required>
                </div>
                <input type="submit" value="Login" class="btn btn-dark" name="user_login">
            </form>
            <p class="mt-3 text-center">Don't have an account? <a href="user_registration.php">Register here</a></p>
        </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <footer class="footer-distributed">
            <div class="footer-left">
                <h3>Aurora</h3>

                <p class="footer-links">
                    <a href="">Home</a>
                    |

                    <a href="" >Contact Us</a>
                    |
                    <a href="">Blog</a>
                </p>

                <p class="footer-company-name">Copyright © 2023 <strong> Aurora</strong> All rights reserved</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span></span>475/C Sri Mawatha, 
                        Rajagiriya,
                        Sri Lanka</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>011 2 111111</p>

                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">Aurora@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About the company</span>
                    Welcome to <strong>Aurora</strong>, your fashion destination! Discover the latest trends, 
                    timeless styles, and exceptional customer service. 
                    Shop with us for quality clothing that expresses your unique personality and fits your budget.
                    Thank you for choosing <strong>Aurora</strong>. Happy shopping! 
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>

        </footer> 

</body>

</html>

<?php
if (isset($_POST['user_login'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $select_query = "SELECT * FROM `customer` WHERE user_name = '$user_name'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
    $rows_data = mysqli_fetch_assoc($result);
    $user_ip = getIPAddress();

    //cart item

   // $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address = '$user_ip'";
   // $select_cart = mysqli_query($con, $select_query_cart);
   // $rows_count_cart = mysqli_num_rows($select_cart);

    if ($rows_count > 0) {
        $_SESSION['user_name'] = $user_name;
        if (password_verify($user_password, $rows_data['user_password'])) {
            // echo "<script>alert('login successful')</script>";
            if ($rows_count == 1) {                      // && $rows_count_cart == 0
                $_SESSION['user_name'] = $user_name;
                echo "<script>alert('login successful')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
            } else {
                $_SESSION['user_name'] = $user_name;
                echo "<script>alert('login successful')</script>";
                echo "<script>window.open('home.php','_self')</script>";
            }
        } else {
            echo "<script>alert('Invalid Credentials')</script>";
        }
    } else {
        echo "<script>alert('Invalid Credentials')</script>";
    }
}
?>
