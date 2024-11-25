<?php 
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
unset($email);
header("location:/Group-project/Aurora_Needle/fashion_Designer_Login.php");
echo"hii";



?>