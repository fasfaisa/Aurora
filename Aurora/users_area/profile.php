<?php
session_start();

include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome <?php echo $_SESSION['user_name'] ?></title>
        <!--font awesome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--css file-->
        <link rel="stylesheet" href="style.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

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

            .profile_img{
                width:90%;
                margin:auto;
                display:block;
                object-fit: contain;
            }
            .edit_img{
                width: 100px;
                height: 100px;
                object-fit: contain;
            }


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
                                    <li><a class="dropdown-item" href="#">User</a></li>
                                    <li><a class="dropdown-item" href="#">Designer</a></li>
                                </ul>
                            </li>
                    </div>  


                </div>
            </div>
        </nav>
        <!-- header end -->


        <!-- Second child -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #c4a185;">
            <div class="container mt-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <?php
                        if (!isset($_SESSION['user_name'])) {
                            echo "<li class='nav-item'>
        <a class='nav-link' href='#'>Welcome Guest</a>
    </li>";
                            echo "<li class='nav-item'>
        <a class='nav-link' href='./user_login.php'>Login</a>
    </li>";
                        } else {
                            echo "<li class='nav-item'>
        <a class='nav-link' href='#'>Welcome " . $_SESSION['user_name'] . "</a>
    </li>";
                            echo "<li class='nav-item'>
        <a class='nav-link' href='./logout.php'>Logout</a>
    </li>";
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Second child end -->

        <div class="bg-light">
            <h3 class="text-center">Aurora Store</h3>
            <p class="text-center">Communication is at the heart of e-commerce and community</p>
        </div>

        <!<!-- fourth child -->
        <div class= "row">
            <div class="col-md-2">
                <ul class="navbar-nav  text-center" style="height:100vh;background-color:#c4a185;">
                    <li class="nav-item ">
                        <a class="nav-link" text-light href="#"><h4>Your profile</h4></a>
                    </li> 

                    <?php
                    if (isset($_SESSION['user_name'])) {
                        $user_name = $_SESSION['user_name'];
                        $user_image_query = "SELECT * FROM `customer` WHERE user_name='$user_name'";
                        $user_image_result = mysqli_query($con, $user_image_query);
                        $row_image = mysqli_fetch_array($user_image_result);

                        if ($row_image && isset($row_image['user_image'])) {
                            $user_image = $row_image['user_image'];
                            echo "<li class='nav-item'>
             <img src='./user_images/$user_image' class='profile_img my-4' alt=''>
        </li>";
                        } else {
                            // Handle the case where 'user_image' is not set or no row is found in the database
                            // For example, display a default image or an error message
                            echo "<li class='nav-item'>
             <img src='./user_images/default_user_image.jpg' class='profile_img my-4' alt=''>
        </li>";
                        }
                    } else {
                        // Handle the case where 'user_name' session variable is not set (user not logged in)
                        // For example, display a default image or an error message
                        echo "<li class='nav-item'>
             <img src='./user_images/default_user_image.jpg' class='profile_img my-4' alt=''>
        </li>";
                    }
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" text-light href="profile.php?edit_account">edit account</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" text-light href="profile.php?my_orders">My orders</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" text-light href="profile.php?delete_account">Delete account</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" text-light href="logout.php?">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 text-center">

                <?php
                get_user_order_details();
                if (isset($_GET['edit_account'])) {
                    include('edit_account.php');
                }
                if (isset($_GET['my_orders'])) {
                    include('user_orders.php');
                }
                if (isset($_GET['delete_account'])) {
                    include('delete_account.php');
                }
                ?>
            </div>

        </div>
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
