<?php 

include 'Header.php';

$ename = $_GET['username'];
echo "$ename";
  


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

  <div   class="FD_profiles">

  <?php 

if(isset($ename)) {
  $ename = $_GET['username'];
  
  

  include 'connect.php';

  $select_query = "Select * from Designers where Designer_email = '$ename' ";
  
  $result_query = mysqli_query($conn,$select_query);

 
  
  

  while( $row = mysqli_fetch_assoc($result_query))
  {

    $image = $row['Designer_image'];
  $D_name =$row['Designer_Usrename'];
  $D_Desc = $row['Description'];
 
  $Experience = $row['Experience_desc'];
  $image1 =$row['Design_1'];
  $image2 =$row['Design_2'];
  $image3 =$row['Design_3'];

  
  
  
  
  }

  

 

  
  ?>

  <header class = "head" >

  <div class="ver"></div>

   
<a href="" class="title"> AURORA </a>


<div class="ver"></div>

<nav class ="nav"> 
<a href="#home" class="">Home </a>

<a href="#home" class="">Experiences </a>
<a href="#home" class="">Top work </a>
</nav>


<div class="smedia"> 

<a href=""><i class="fa-brands fa-facebook" ></i></a>
<a href=""><i class="fa-brands fa-instagram"></i></a>
<a href=""><i class="fa-brands fa-twitter"></i></a>
<a href=""><i class="fa-brands fa-linkedin-in"></i></a>


</div>




</div>

</header>

<?php echo ' <img class="pcsize"  src = "data:image;base64,'.base64_encode($image). ' "  > '?>

<div class="content">

<?php



echo " <h2 class='cname'> HI I'AM ".$D_name."</h2>

<br>



<p  class='fs_de'> $D_Desc</P>"
?>





</div>



<?php



echo " <h2 class='exd'>EXPERIENCES &nbsp; <i class='fa-solid fa-lightbulb fa-bounce' style='color: #111212;'></i> </h2>

<br>



<p  class='ab' class='p-2 bg-light border'> $Experience </P>

<br>
<br>



<h2 class='exd'>TOP WORK &nbsp; <i class='fa-solid fa-lightbulb fa-bounce' style='color: #111212;'></i> </h2>
<br>
<br>
<br>
<br>
";

?>



<?php echo ' <img  class="dimage"   src = "data:image;base64,'.base64_encode($image1). ' "  > '?>
    
    <?php echo ' <img  class="dimage"    src = "data:image;base64,'.base64_encode($image2). ' "  > '?>
    
    <?php echo ' <img  class="dimage"    src = "data:image;base64,'.base64_encode($image3). ' "  > '?>
    

    <!-- Order confirmation  section -->

    <h1 class= "confirm"> CONFIRM YOUR ORDER NOW </h1>

       
   <!-- clients's feedback section -->


   <h3 class="clfeedback"> WHAT OUR CLIENTS SAY</h3>


<?php  include 'connect.php';

$sql1 = "Select * from user_feedback where Designer_email = '$ename'";





$result_query1 = mysqli_query($conn,$sql1);





while( $row = mysqli_fetch_assoc($result_query1)) {

  

  $name = $row['Name'];
$email = $row['Email'];
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
    echo "Your favorite color is neither red, blue, nor green!";
}











$sql2 = "select user_image from customer where user_email = ' $email  ' " ;

$result_query2 = mysqli_query($conn,$sql2);

$i = mysqli_fetch_assoc($result_query2);
$uimage = $i['user_image'];



 







  



   

  echo " <div class='row'> <div class= 'fcard' class='d-flex p-2'>
   <div class='card' style='width: 22rem;'>";

   ?>

<?php echo ' <img   class="card-img-top"  src = "data:image;base64,'.base64_encode($uimage). ' "  > '?>

  

  <?php

  echo "<div class='card-body'>
  <h2>    $name </h2>
  <div> $star1 </div>
<p class='card-text'>$review</p>
  </div>
</div>

</div>
</div>
  
  
  
  
  ";





}






?>







<div class="footer">
<?php 

include 'Footer.php';


?>

</div>

  </body>

  
  
  
  
  ?>

</html>

<?php }
  
  else {

    echo"Please logged in first";
  
    header("Location:fashion_Designer_Login.php");
  
  
  }

  
?>