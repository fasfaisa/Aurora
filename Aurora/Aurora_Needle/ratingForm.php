<?php 

include "Header.php";


echo '<div class = "feedback1">THANK YOU FOR YOUR </div>
<div class = "feedback2">FEEDBACK </div>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


   

  $d_name = $_POST["hval"];
 
  
  $name = $_POST["name"];

  $eid = $_POST["uid"];

  $rate = $_POST["rate"];


  $review = $_POST["comment"];

 

  /*validating*/


     test_input( $name);
     test_input( $eid);
     test_input($review );



  

  /*connecting to the database*/


     include "connect.php";

 
  /*inserting data to the table*/


$sql1 = "set  foreign_key_checks = 0"; 
$sql2 = "insert ignore into user_feedback (Designer_email ,Email,Name,ratings,feedback) values (' $d_name','$eid','$name','$rate','$review')";
$result1 = mysqli_query($conn,$sql1) or die( mysqli_error($conn));
$result2 = mysqli_query($conn,$sql2) or die( mysqli_error($conn));
 




if($result2>0){


 


  echo ' <script> alert ("Registration is successful")

  </script> 
  window.location = "ratingForm.php";


  
  
  ';





}

else {

  echo '<script> alert ("Sorry something went wrong") </script>

  window.location = "ratingForm.php";
  
  
  
  </script>';



}



  
  
  
  

  
   
  }
   






?>