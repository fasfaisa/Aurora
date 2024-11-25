<?php 

include "Header.php";


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
  <body class="">

  <div   class="FD_profiles ">

  <?php 

  $ename =$_GET['hval'];

  
  

  include 'connect.php';

  $select_query = "Select * from Designers where Designer_email = '$ename' ";
  
  $result_query = mysqli_query($conn,$select_query);

 
  
  

  while( $row = mysqli_fetch_assoc($result_query))
  {

    $image = $row['Designer_image'];

  $D_Desc = $row['Description'];
  $email = $row['Designer_email'];
  $dname = $row['Designer_Usrename'];

 
  $Experience = $row['Experience_desc'];
  $image1 =$row['Design_1'];
  $image2 =$row['Design_2'];
  $image3 =$row['Design_3'];
  
  
  
  }

  

 

  
  ?>

  <div class="container-fluid">
  <header class = "head " >

  <div class="ver"></div>

   
<a href="" class="title row"> AURORA </a>

<div class="ver"></div>

<nav class ="nav"> 
<a href="#home" class="nav-link">Home </a>

<a href="#ex" class="nav-link">Experiences </a>
<a href="#t" class="nav-link">Top work </a>
<a href="/Group-project/Aurora_needle/chat.php?username=<?php echo $email ?>" class="row"><img src="/Group-project/images/aurora_chat.jpeg" class= "acim"> </img> </a>
</nav>


<div class="smedia"> 

<a href=""><i class="fa-brands fa-facebook" ></i></a>
<a href=""><i class="fa-brands fa-instagram"></i></a>
<a href=""><i class="fa-brands fa-twitter"></i></a>
<a href=""><i class="fa-brands fa-linkedin-in"></i></a>


</div>




</div>

</header>

<?php echo ' <img class="pcsize img-fluid"  src = "data:image;base64,'.base64_encode($image). ' "  > '?>

<div class="content ">

<?php



echo " <h2 class='cname '> HI I'AM ".$dname."</h2>

<br>



<p  class='fs_de '> $D_Desc</P>"
?>





</div>



<?php



echo " <h2 id='ex' class='exd text'>EXPERIENCES &nbsp; <i class='fa-solid fa-lightbulb fa-bounce' style='color: #111212;'></i> </h2>

<br>



<p id='ex' class='ab text' class='p-2 bg-light border'> $Experience </P>

<br>
<br>



<h2 id ='t'class='exd text'>TOP WORK &nbsp; <i class='fa-solid fa-lightbulb fa-bounce' style='color: #111212;'></i> </h2>
<br>
<br>
<br>
<br>
";

?>



<?php echo ' <img  class="dimage img-fluid"   src = "data:image;base64,'.base64_encode($image1). ' "  > '?>
    
    <?php echo ' <img  class="dimage img-fluid"    src = "data:image;base64,'.base64_encode($image2). ' "  > '?>
    
    <?php echo ' <img  class="dimage img-fluid"    src = "data:image;base64,'.base64_encode($image3). ' "  > '?>
    

    <!-- Order confirmation  section -->

    <button type="button" class="btn btn-dark btn-lg btn-block confirm"><a href ="Aurora_needle_customer_orders.php"> CONFIRM YOUR ORDER NOW </a> </button>

       
   <!-- clients's feedback section -->


   <h3 class=" text-sm-left clfeedback" style="text-decoration:none;"> WHAT OUR CLIENTS SAY</h3>

   <div class="row">
    <br>


<?php  include 'connect.php';

$sql1 = "Select * from user_feedback where Designer_email = '$email'";



$result_query1 = mysqli_query($conn,$sql1);





while( $row = mysqli_fetch_assoc($result_query1)) {


  $name = $row['Name'];
$cemail = $row['Email'];
$rate  = $row['ratings'];
$review = $row['feedback'];





switch ( $rate  ) {
  case "1":
   $star1 = "<span class='fa fa-star checked'></span>
    <span class='fa fa-star '></span>
    <span class='fa fa-star '></span>
    <span class='fa fa-star'></span>
    <span class='fa fa-star'></span> ";
    
    break;

  case "2":
    $star1 = "<span class='fa fa-star checked'></span>
    <span class='fa fa-star checked '></span>
    <span class='fa fa-star '></span>
    <span class='fa fa-star'></span>
    <span class='fa fa-star'></span> ";
    
    break;

  case "3":
    $star1 ="<span class='fa fa-star checked'></span>
    <span class='fa fa-star checked'></span>
    <span class='fa fa-star checked '></span>
    <span class='fa fa-star'></span>
    <span class='fa fa-star'></span>   ";
     
    break;

  case "4":
    $star1 = "<span class='fa fa-star checked'></span>
    <span class='fa fa-star checked '></span>
    <span class='fa fa-star  checked'></span>
    <span class='fa fa-star  checked'></span>
    <span class='fa fa-star'></span> ";
      break;
    case "5":
      $star1 ="<span class='fa fa-star checked'></span>
      <span class='fa fa-star checked '></span>
      <span class='fa fa-star  checked'></span>
      <span class='fa fa-star  checked'></span>
      <span class='fa fa-star checked'></span> ";
    
    break;
    
  default:
    echo "  ";
}


$sql2 = "select * from customer where user_email = ' $cemail ' " ;

$result_query2 = mysqli_query($conn,$sql2);



?>






  <?php



   

  echo " <div class='col'> <div class= 'fcard' class='d-flex p-2'>
   <div class='card' style='width: 22rem;'>";

   ?>

   



  

  <?php

  echo "<div class='card-body'>"
  ?>

  <?php
  while( $i = mysqli_fetch_assoc($result_query2)) {
$len = $i['user_image'];
echo"$cemail";
?>

<?php echo ' <img   class="card-img-top"  src = "data:image;base64,'.base64_encode($len). ' "  > '?>
<?php
}

 echo "<h2>    $name </h2>
  <div> $star1 </div>
<p class='card-text'>$review</p>
  </div>
</div>

</div>
</div>
  
  
  
  
  ";





}


?>

</div>

<form action="ratingForm.php" method="post" class="text-light bg-dark">
  <div class="form-row ">
    <div class="form-group col-md-6">
      <label for="name">Username</label>
      <input type="email" class="form-control" name="name" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="uid">Email</label>
      <input type="password" class="form-control" name="uid" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <!-- Rating section -->

   <h2 class="rateheading text"> RATE US</h2>

<br>
<div class= "rposition">


<div class="rate col">

<input type="radio" id="star5" name="rate" value="5" />
<label for="star5" title="text">5 stars</label>
<input type="radio" id="star4" name="rate" value="4" />
<label for="star4" title="text">4 stars</label>
<input type="radio" id="star3" name="rate" value="3" />
<label for="star3" title="text">3 stars</label>
<input type="radio" id="star2" name="rate" value="2" />
<label for="star2" title="text">2 stars</label>
<input type="radio" id="star1" name="rate" value="1" />
<label for="star1" title="text">1 star</label>

</div>

</div>

  </div>
<div class="form-row ">

<div class="form-group col-md-6">

  <label for="inputAddress2">How do you feel about my service? </label>
  <div class="form-group">
   <textarea  name="comment" rows="10" cols="100" required> </textarea>
  </div>

</div>


<div class="form-group col-md-6">
      <image src="/Group-project/images/cimage7 (25).jpeg" class="fcimage">
</div>


  
</div>
 
<input type='hidden' value='<?php echo $ename ?>' name='hval' ></input>
  <button type="submit" class="btn btn-dark">Submit</button>
</form>
    

  



























<div>
  
  


</div>



<footer> 

<?php

include "Footer.php";


?>



</footer>

</div>

  </body>

</html>











 

