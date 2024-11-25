

/* 
* Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
* Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
*/

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--<link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" >

     <!--font awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
      <!-- css link -->
      <link rel="stylesheet" href="/Group-project/cstyle.css">
      <link rel="stylesheet" href="style.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">

        <style>
            .nav-item a{
                color: white;
            }
            .dropdown-menu {
                background-color: #795644;
            }
            .fa:hover {
                transform: scale(1.1);
            }

        </style>

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
                            <a class="nav-link " href="..\shop\product.php">Aurora's Needle</a>
                        </li>
                    </ul>
                    <div class="">


                        <ul class="nav navbar-nav navbar-right">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>

                            <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:25px;color:white;padding:15px" ></i></a></li>                        
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
        <!-- slider start -->


        

        <!-- jquery -->
        <script src="jquery-3.6.0.js" type="text/javascript"></script>    
        <!-- isotope js -->
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
        <!-- custom js -->
        <script src="script.js" type="text/javascript"></script>
    </body>

</html>

