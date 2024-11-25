<?php 

session_start();

include "Header.php";


if(isset($_POST['submit'])) {


  function test_input($data) { 
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


  

  $email = $_POST['fd_email'];
  $password = $_POST['fd_password'];

  test_input(  $email );
  test_input(  $password);


  echo "$password";


  include "connect.php";

  $query = "select Designer_Password from Designers where Designer_email	 = '.$email.'";

  $result = mysqli_query($conn,$query);

  $row = mysqli_fetch_array($result);

  $i = $row['Designer_Password'];
  
  
  echo " $i ";
  echo "$email";
  echo " $i ";
 


  if( $password == $i ) {

    echo "$email";

    $_SESSION['login']=$email; // hold the user name in session
	  $_SESSION['id']=$row['Designer_ID']; // hold the user id in session
		$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
									        // query for inser user log in to data base
		mysqli_query($conn,"insert into designer_login(Designer_email,Designer_id,Designer_ip) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip')");
									        // code redirect the page after login
    header('Location: /Group-project/Aurora_Needle/Designers_profiles.php?email='. $email.'');
    exit;
   

  }

  else {

    
   echo "<script> alert('EMAIL OR PASSWORD IS INCORRECT PLEASE ENTER A VALID EMAIL OR PASSWORD');</script>";


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

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" name="fd_email" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_email">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="fd_password" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_password">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" name = "submit" type="submit">Login</input>
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

<?php 

include "Footer.php";


?>