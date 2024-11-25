<?php 


include "Header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$dname= $_POST['fd_uname'];
$dpword= $_POST['fd_password'];
$image= $_POST['fd_image'];
$email = $_POST['fd_email'];
$contact = $_POST['fd_no'];
$desc = $_POST['fd_desc'];
$ex = $_POST['fd_edesc'];
$d1 = $_POST['fd_d1'];
$d2 = $_POST['fd_d2'];
$d3 = $_POST['fd_d2'];


include 'connect.php';

$sql="select * from Designers where Designer_email ='$email'";

      $res=mysqli_query($conn,$sql);

      if (mysqli_num_rows($res) > 0) {
        
      
        
        echo '<script> alert ("Enterd Email is already exist please use a nother email") </script>

       ';
        }

        else {

$sql1 = "insert ignore into Designers (Designer_Usrename,Designer_Password,Designer_image,Designer_email,Designer_contact,	Description,Experience_desc,Design_1,Design_2,Design_3) values('$dname','$dpword','$image','$email','$contact','$desc','$ex','$d1','$d2','$d3')";
$result_query = mysqli_query($conn,$sql1);
$n = mysqli_affected_rows($conn);
if($result_query){
  $n = mysqli_affected_rows($conn);
  

  echo ' <script> alert ("Registration is successful")

  </script> 
  window.location = "fashion_Designer_Login.php";


  
  
  ';
  
  
  
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$n = mysqli_affected_rows($conn);

// Close connection
mysqli_close($conn);




}

}








?>


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

              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <image style="height:40px; width:40px;" src = "/Group-project/images/logo.png "> </image> &nbsp;
                    <span class="h1 fw-bold mb-1"> &nbsp; A U R O R A</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign up </h5>

                  <div class="form-outline mb-4">
                    <input type="email" name="fd_uname" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_uname">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="fd_password" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_password">Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="file" accept="image/*" name="fd_image" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_image">Profile picture</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" name="fd_email" class="form-control form-control-lg" required />
                  <?php echo "<label class='form-label' for='fd_email'>Email</label>"?>  
                  </div>

                  <div class="form-outline mb-4">
                    <input type="tel" name="fd_no" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_no">Contact Number</label>
                  </div>

                  <div class="form-outline mb-4">
                  <textarea id="w3review" name="fd_desc" rows="4" cols="50"></textarea>
                    <label class="form-label" for="fd_desc">Description about you</label>
                  </div>

                  <div class="form-outline mb-4">
                  <textarea id="w3review" name="fd_edesc" rows="4" cols="50"></textarea>
                    <label class="form-label" for="fd_edesc">Your experiences</label>
                  </div>

                  <div class="form-outline mb-4">

                    Put here you top 3 work
                  </div>


                    

                  <div class="form-outline mb-4">
                    <input type="file" accept="image/*" name="fd_d1" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_d1">Design 1</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="file" accept="image/*" name="fd_d2" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_d2">Design 2</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="file" accept="image/*" name="fd_d3" class="form-control form-control-lg" required />
                    <label class="form-label" for="fd_d3">Design 3</label>
                  </div>






                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" name = "submit" type="submit"></input>
                  </div>

                 
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

<footer class="footer">
<?php 


include "Footer.php";






?>

</footer>





