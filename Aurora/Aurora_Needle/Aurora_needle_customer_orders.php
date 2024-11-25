<?php 

include 'header.php';



if(isset($_POST['confirm'])) {

    
$email = $_POST['c_email'];
$d_email =  $_POST['d_email'];
$desc =  $_POST['desc'];
$price =  $_POST['price'];
$date = $_POST['f_date'];



    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  
  
    
  
    test_input(  $email );
   
  
    include "connect.php";
  
    $query1 = "select user_email from customer where user_email = '$email'";
  
    $result1 = mysqli_query($conn,$query1);

    $query2 = "select designer_email from designers where Designer_email = '$email'";
  
    $result2 = mysqli_query($conn,$query2);




   
  
   

    try{

         $row1 = mysqli_fetch_array($result1) ;
         $row2 = mysqli_fetch_array($result2) ;
           
        
     }
     catch (Exception ){
        throw new Exception( 'error
        
        
        
        ');
     }






    if(($row1>0) && ($row2>0)) {

 
   
   
  
   $sql1 = "set  foreign_key_checks = 0"; 
   $query2 = "INSERT INTO aurora_needle_orders (customer_email,designer_email,	description,price,due_date) VALUES ('$email','$d_email','$desc','$price','$date' )";
   $result1 = mysqli_query($conn,$sql1) or die( mysqli_error($conn));
   $result2 = mysqli_query($conn,$query2) or die( mysqli_error($conn));
   
    ?>

  <div>
  
  <h1 style="text-align:center; background-color:black; color:white;">Thank you for choosing us! We received your order </h1>
  
  
  </div>";
   

  <?php


    }

    else {


        ?>

<script> alert('EMAIL OR PASSWORD IS INCORRECT PLEASE ENTER A VALID EMAIL OR PASSWORD');</script>



        <?php




    }

}





?>







<section class="vh-100" style="background-color:#ffffff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="/Group-project/images/fdimage1.jpeg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <image style="height:40px; width:40px;" src = "/Group-project/images/logo.png "> </image> &nbsp;
                    <span class="h1 fw-bold mb-1"> &nbsp; A U R O R A</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">YOUR ORDER DETAILS</h5>

                  <div class="form-outline mb-4">
                    <input type="email" name="c_email" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_email">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="d_name" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_password">Designer's name</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="d_email" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_password">Designer's email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="desc" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_password">Description </label>
                  </div>

                  

                  <div class="form-outline mb-4">
                    <input type="text" name="price" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_password">Price</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="date" name="f_date" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_password">The finishing date</label>
                  </div>








                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" name = "confirm" type="submit"></input>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color:#ffffff;">Don't have an account? <a href="/Group-project/Aurora_Needle/Fashion_Designers_Registration.php"
                      style="color:#ffffff;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    





</div>