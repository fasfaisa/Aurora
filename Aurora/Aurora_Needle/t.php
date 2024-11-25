<?php

include "connect.php";


$query = 'insert aurora_needle_orders (customer_email,designer_email,description,price) values ("echamini193@gmail.com","echamini193@gmail.com","e",4 )';
  
    $result = mysqli_query($conn,$query);
  
    $row = mysqli_fetch_array($result);







?>