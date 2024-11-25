<?php

include 'Header.php';



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>aurora</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" >

     <!--font awsome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="cstyle.css">
</head>

<body><!-- Start: Table -->

<?php





session_start();
$email =$_GET['username'];
echo "$email";

if(isset($email)) {
  $ename = $_GET['username'];
  

  
  

include 'connect.php';


if(isset($_GET['pending'])){
 

  
  $select_queryp = "update  aurora_needle_orders
  set status='pending'
  where designer_email='$ename'";
  $result_query1 = mysqli_query($conn,$select_queryp);
 


}

else if (isset($_GET['complete'])) {


  $select_queryc = "update  aurora_needle_orders
  set status='completed'
  where designer_email='$ename'";
  $result_query2 = mysqli_query($conn,$select_queryc);
  if( $result_query2 >0) {

    echo"done";
  }
  else {echo"not done";}
}

$select_query = "Select * from aurora_needle_orders where designer_email = '$ename' ";

$result_query = mysqli_query($conn,$select_query);

echo '<h1 class="otext"> YOUR ORDERS</h1>

<div class="background">

<table class="table table-striped table-light ">
  <thead>
    <tr>
      <th scope="col">Order No</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Due date</th>
      <th scope="col">Status</th>
      <th scope="col">Update</th>

      
    '


?>

<?php


while( $row = mysqli_fetch_assoc($result_query))
{

  $o_no = $row['order_id'];
  $no =+ $o_no +1;
$c_name =$row['customer_email'];
$d_name = $row['designer_email'];

$desc = $row['description'];
$price =$row['price'];
$date =$row['due_date'];
$status =$row['status'];


  echo '</tr>
  </thead>
  <tbody><tr>
      
      <td>'.$no .'</td>
      <td>'.$c_name.'</td>
      <td>'.$desc.'</td>
      <td>'.$price.'</td>
      <td>'.$date.'</td>
      <td>'.$status.'</td>
      <td>'

      ?>

      <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
      
      <input type='hidden' value='<?php echo $ename ?>' name='username' ></input> 
      <input type="submit" name ="pending" value="Pending" class ="text-light bg-dark"> </button>
      <input type="submit" name ="complete" value="complete"> </input>
     
      
      </form>
      
      

  <?php echo '
  
</div>

  
    </td>

    </tr>

  
      
     



  </tbody>'?>

  <?php



}



?>

</table>



</div>


<?php




}

else {


  echo"Please logged in first";
  
    header("Location:fashion_Designer_Login.php");
  



}











?>

















  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  <?php

include 'Footer.php';



?>


</body>

</html> 




