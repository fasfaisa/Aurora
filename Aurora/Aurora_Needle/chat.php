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

  

      
  <title>aurora chat</title>


     
  </head>
  <body class="">

  <?php 
  session_start();
  include "connect.php";

  $_SESSION['login'] = "cat";

  if(isset($_SESSION['login'])) {
  
  $user = "cat";
  $designer = $_GET['username'];
  $query = "select * from Designers where Designer_email= '$designer' ";
 $result = mysqli_query($conn,$query);
 
 while( $row = mysqli_fetch_assoc($result))
 {

$dimage = $row['Designer_image'];


 }
  
  ?>

<div class= "container-fluid">
    <div class="row">
        <div class="col-md-4">
            
        </div>

         <div class= "col-md-4">
             <div class="modal-dialog">
                <div class= "modal-content">
                  <div class= "modal-header achead ">
                  <P class= "acheadt"> AURORA CHAT</P>
                  <img src="/Group-project/images/aurora_chat.jpeg" class="img-responsive acim"> </img>
                  <br>
                  
                    <?php echo ' <img class="acim2 img-fluid img-fluid"  src = "data:image;base64,'.base64_encode($dimage). ' "  > '?>
                  


                  </div>

                    <div class= "modal-body" style ="height:400px; overflow-y:scroll; overflow-x: hidden; background-color:black; color:white;">
                    <?php
                    $query = "select * from chatbox where fromuser=' $user ' AND touser = '$designer'";
                    $result2 = mysqli_query($conn,$query);

                    while($chat = mysqli_fetch_assoc($result2)) {

                      echo "<div style= 'text-align:right;'> 
                      
                      <p style = 'background-color:lightblue; word_wrap:break-word; display:inline-block;padding:5px; border_radius:10px;max width:70%;'>
                      
                      ".$chat['message']."
                      </div>
                      </p>
                            </div>
                      ";

                    }
                    
                    
                    ?>
                     </div>  

                    <div class= "modal-footer">
                    <div class= "modal-footer">
                        <form action= "chatinsert.php?dname=<?php echo $email ?>?unmae=<?php echo $user ?> "  method="post">
                        <input name="message"><textarea id="message" class= "form-control" style = "height:70px"> </textarea></input>
                        <button id= "send" name="submit" class="btn btn-primary" style="height:70%">send</button>
                        </form>
                    </div>
                
                 
               </div>
         </div>
    </div>

</div>

  </body>


  </html>


  <?php
  }

  else {


echo "<script> alert('You have to logged first')</script>";


  }
  
  
  ?>

  <?php 
  
  
  include "Footer.php";
  
  
  ?>