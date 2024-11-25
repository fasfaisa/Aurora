<?php

include 'Header.php';

session_start();
$email =$_GET['username'];
echo "$email";

if(isset($email)) {
  $ename = $_GET['username'];
  



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" >

     <!--font awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
   
   
      <!-- css link -->
  <link rel="stylesheet" href="/Group-project/cstyle.css">

  

      
  <title>Profiles</title>


     
  </head>

<body>


<section class="vh-100 fdr" style="background-color:#ffffff;">

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
                
              <img src="/Group-project/images/fdimage2.jpeg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />

                <br>
                <br>
                <br>

                <img  class ="fdim"src="/Group-project/images/fd_image4.jpeg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

            

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <image style="height:40px; width:40px;" src = "/Group-project/images/logo.png "> </image> &nbsp;
                    <span class="h1 fw-bold mb-1"> &nbsp; A U R O R A</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">EDIT YOUR ACCOUNT </h5>

                  <form action= "updating.php?email=<?php echo $email ?>" method = "POST">
                  <div class="form-outline mb-4">
                    <input type="text" name="fd_uname" class="form-control form-control-lg"  />
                    <label class="form-label" for="fd_uname">Username</label>
                   <input type="submit" name ="uname"> EDIT </input>
                  </div>
                </form>




                <form action= "updating.php?email=<?php echo $email ?>" method = "POST">

                <div class="form-outline mb-4">
               <input type="email" name="email1" class="form-control form-control-lg"  />
               <label class="form-label" for="email1">Email</label>
               <input type="submit" name ="ename"> EDIT </input>

              </div>
              </form>


                    <form action= "updating.php?email=<?php echo $email ?>" method = "POST">

                  <div class="form-outline mb-4">
                    <input type="email" name="contact" class="form-control form-control-lg" />
                    <label class="form-label" for="contact">Contact</label>
                    <input type="submit" name ="contact"> EDIT </input>
                  </div>

                </form>


                <form action= "updating.php?email=<?php echo $email ?>" method = "POST">
                  <div class="form-outline mb-4">
                    <input type="text" name="desc" class="form-control form-control-lg" />
                    <label class="form-label" for="desc">Description</label>
                    <input type="submit" name ="desc"> EDIT </input>
                  </div>
                </form>

               

                <form action= "updating.php?email=<?php echo $email ?>" method = "POST">
                  
                    <input type="text" name="e_desc" class="form-control form-control-lg"  />
                    <label class="form-label" for="e_desc">Experience Description</label>
                    <input type="submit" name ="e_desc"> EDIT </input>
                  
                  
                </form>


                <form action= "updating.php?email=<?php echo $email ?>" method = "POST">
                 
                    <input type="image" name="d1" class="form-control form-control-lg"  />
                    <label class="form-label" for="d1">Design 1</label>
                 
                </form>

                <form action= "updating.php?email=<?php echo $email ?>" method = "POST">
                  
                    <input type="image" name="d2" class="form-control form-control-lg"  />
                    <label class="form-label" for="d2">Design 2</label>
                  
                </form>

                <form action= "updating.php?email=<?php echo $email ?>" method = "POST">
                 
                    <input type="image" name="d3" class="form-control form-control-lg"  />
                    <label class="form-label" for="d3">Design 3</label>
                 
                  </form>

                  <div class="form-outline mb-4">

                    Put here you top 3 work
                  </div>


                    
                  <form action= "updating.php?email=<?php echo $email ?>" method = "POST">
                       <h2> Change Password </h2>


                    

                  <div class="form-outline mb-4">
                    <input type="password" name="n_password" class="form-control form-control-lg"  />
                    <label class="form-label" for="n_password">New Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="c_password" class="form-control form-control-lg"  />
                    <label class="form-label" for="C_password">Confirm Password</label>
                  </div>

                 





                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" name = "submit" type="submit">Save</input>
                  </div>
                </form>







                 
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                


              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  
 
</section>

<?php 

}

else {


  echo"Please logged in first";
  
    header("Location:fashion_Designer_Login.php");
  



}



?>





<?php

include 'Footer.php'


?>




</body>


</html>