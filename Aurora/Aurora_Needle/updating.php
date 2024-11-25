<?php 

$email =$_GET['email']; 
echo "$email";


if(isset($_POST['uname'])) {
   
   
  $uname = $_POST['fd_uname'];
  include 'connect.php';
  $queryun = "UPDATE designers
  SET Designer_Usrename	 = '$uname'
  WHERE Designer_email = '$email';";
  $resultun = mysqli_query($conn,$queryun );
  if($resultun>0) {
  
  echo "sucessg";
  
  }

  else {

    echo "not sucess";

  }
  }


  /*email*/

  if(isset($_POST['ename'])) {
   
   
    $uname = $_POST['email1'];
    include 'connect.php';
    $queryun = "UPDATE designers
    SET Designer_email	 = '$uname'
    WHERE Designer_email = '$email';";
    $resultun = mysqli_query($conn,$queryun );
    if($resultun>0) {
    
    echo "sucessg";
    
    }
  
    else {
  
      echo "not sucess";
  
    }
    }


    /*contact*/

  if(isset($_POST['contact'])) {
   
   
    $uname = $_POST['contact'];
    include 'connect.php';
    $queryun = "UPDATE designers
    SET Designer_contact	 = '$uname'
    WHERE Designer_email = '$email';";
    $resultun = mysqli_query($conn,$queryun );
    if($resultun>0) {
    
    echo "sucessg";
    
    }
  
    else {
  
      echo "not sucess";
  
    }
    }


     /*desc*/

  if(isset($_POST['desc'])) {
   
   
    $uname = $_POST['desc'];
    include 'connect.php';
    $queryun = "UPDATE designers
    SET Description	 = '$uname'
    WHERE Designer_email = '$email'";
    $resultun = mysqli_query($conn,$queryun );
    if($resultun>0) {
    
    echo "sucessg";
    
    }
  
    else {
  
      echo "not sucess";
  
    }
    }

     /*e_desc*/

  if(isset($_POST['e_desc'])) {
   
   
    $uname = $_POST['e_desc'];
    include 'connect.php';
    $queryun = "UPDATE designers
    SET Experience_desc	 = '$uname'
    WHERE Designer_email = '$email'";
    $resultun = mysqli_query($conn,$queryun );
    if($resultun>0) {
    
    echo "sucessg";
    
    }
  
    else {
  
      echo "not sucess";
  
    }
    }









?>