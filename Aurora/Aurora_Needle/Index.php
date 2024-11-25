<?php 

include 'Header.php';



?>
<section>


<a href = "customer_cart.php" class ="icon" class="p-3"><i class="fa-solid fa-scissors" style="color: #010113;"></i></a>
<div class="bground img-fluid container-fluid" style="background-image: url('/Group-project/images/ANB.jpeg'); ">


<div class="row">

<div class= "dtra" class="col-md"> 

<P> WE CREATE YOUR DREAM CLOTH </P>
</div>

<div class= "dtra" class="col-xl"> 

<image src="/Group-project/images/cimage19.jpeg" class="img-fluid">
</div>

</div>

<br>
<br>
<br>
<br>
<br>
<br>







<!--  DESIGNERS SECTION -->
<?php 

include 'connect.php';

$select_query = "Select * from Designers";
$result_query = mysqli_query($conn,$select_query);


while( $row = mysqli_fetch_assoc($result_query)) {

$image = $row['Designer_image'];
$D_name =$row['Designer_Usrename'];
$D_Desc = $row['Description'];
$eID = $row['Designer_email'];

echo "<div class='container-fluid'>";
?>
<?php echo ' <img class="csize  img-fluid "  src = "data:image;base64,'.base64_encode($image). ' "  > '?>

<?php 
  echo "
  <div class='fdsec row  >
   <div class='ctext col'>
    <h5 class=' col-md name'>$D_name</h5>
    <p class='col-md desc'>$D_Desc</p>
    </div>
  </div>
  
  

<div class='bt'>
  <form action='Profiles.php' method='get'>";
  ?>
      <input type='hidden' value='<?php echo $eID ?>' name='hval' ></input>
  <?php
    echo "<input type='submit' class='btn btn-dark btm-xsm col btt'  value='VIEW PROFILE'> </input>
  
  </form>
  
  


    </div>

</div>";


}

?>












 


<!-- description -->
<br>
<br>
<br>

<div class="adesc col ">

<h2>WHY YOU SHOULD CHHOSE US</h2>
 <p> WE HAVE BEST DESIGNERS</p>
 <p> WE ARE RELAIABLE</p>
 <p> WE ARE DELIVERING BEST THING FOR YOU </p>
 
</div>



</body>


</div>


<br>
<br>



    
<footer class="">


  <?php
  
  include 'Footer.php';
  
  
  ?>  

   


</footer>



</section>
   