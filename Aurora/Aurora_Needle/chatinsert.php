<?php

include "connection.php";

if(isset($_POST['submit'])){
$fromuser = $_GET['uname'];
$touser = $_GET['dname'];
$message = $_GET['message'];

$query ="insert into messages where (fromuser,touser,message) values ($fromuser ,$touser,$message )";
$result = mysqli_query($conn,$query);

$n = mysqli_num_rows($result);

if($n>0) {


echo "okay";



}

else {

echo "not okay";


}







}








?>