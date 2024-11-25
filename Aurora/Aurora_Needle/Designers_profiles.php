<?php
include "Header.php";

session_start();
$email = $_SESSION['login'];
echo "$email";
$A = isset($email );
echo "$A";

if($_SESSION['login']) {


















?>

<html>
<head> </head>

<body>





<div class ="dp">





<h2 class= "fd_greet"> WELCOME, <?php ?> </h2>
<div class ="dp1">

<h2 class= "fd_greet1"> LET'S DESIGN </h2>


</div>




<div class="lrectangle"> 

<img src="/Group-project/images/fdimage2.jpeg" alt="login form" class="img-fluid dim " style="border-radius: 1rem 0 0 1rem";>




</div>

<div class="rrectangle"> 

<img src="/Group-project/images/fdimage2.jpeg"alt="login form" class="img-fluid dim" >




</div>


<div class="lrectangle1"> 

<img src="/Group-project/images/fdimage2.jpeg" alt="login form" class="img-fluid dim" style="border-radius: 1rem 0 0 1rem";>




</div>

<div class="rrectangle1"> 

<img src="/Group-project/images/fdimage2.jpeg"alt="login form" class="img-fluid dim" >




</div>

<div class="container"> 


<div class="dp_button">

<img src="/Group-project/images/fdimage2.jpeg"alt="login form" class="img-fluid dim" >



<div class="button">
<a  href = "/Group-project/Aurora_Needle/Designer_view.php?username=<?php echo $email ?>"><button >VIEW YOUR PROFILE </button> </a>
<br>
<br>

<a  href = "/Group-project/Aurora_Needle/Designer_profile_edit.php?username=<?php echo $email ?>"><button>EDIT YOUR PROFILE </button></a>
<br>
<br>

<a  href = "/Group-project/Aurora_Needle/Designers_Orders.php?username=<?php echo $email ?>"><button>VIEW YOUR ORDERS </button></a>
<br>
<a  href = "/Group-project/Aurora_Needle/Designers_Orders.php?username=<?php echo $email ?>"><button>CHATN </button></a>
<a  href = "/Group-project/Aurora_Needle/log_out.php?username=<?php echo $email ?>"><button>LOG OUT </button></a>
</div>



</div>





</div>



<div class="hor1"> 

<img src="/Group-project/images/fdimage2.jpeg"alt="login form" class="img-fluid " >
<div class="mobile">



<div class="mobilebutton">
<a  href = "/Group-project/Aurora_Needle/Designer_view.php?username=<?php echo $email ?>"><button >VIEW YOUR PROFILE2 </button> </a>
<br>
<br>

<a  href = "/Group-project/Aurora_Needle/Designer_profile_edit.php?username=<?php echo $email ?>"><button>EDIT YOUR PROFILE </button></a>
<br>
<br>

<a  href = "/Group-project/Aurora_Needle/Designers_Orders.php?username=<?php echo $email ?>"><button>VIEW YOUR ORDERS </button></a>
<br>
<br>
<a  href = "/Group-project/Aurora_Needle/Designers_Orders.php?username=<?php echo $email ?>"><button>CHATN </button></a>
<a  href = "/Group-project/Aurora_Needle/log_out.php?username=<?php echo $email ?>"><button>LOG OUT </button></a>
</div>



</div>





</div>



<br>
<br>
<br>


<br>








</div>











</body>


<?php

include "Footer.php";
?>

</html>

<?php


}
else {


  echo"Please logged in first";

  header("Location:fashion_Designer_Login.php");
}





?>

