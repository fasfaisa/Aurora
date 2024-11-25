<?php

//include('../includes/connect.php');


//get user order details
function get_user_order_details()
{
    global $con;
    
    if (isset($_SESSION['user_name'])) {
        $user_name = $_SESSION['user_name'];
        $get_details = "SELECT * FROM `customer` WHERE user_name='$user_name'";
        $result_query = mysqli_query($con, $get_details);

        while ($row_query = mysqli_fetch_array($result_query)) {
            $user_id = $row_query['user_id'];

            if (!isset($_GET['edit_account']) && !isset($_GET['my_orders']) && !isset($_GET['delete_account'])) {
                $get_orders = "SELECT * FROM `user_orders` WHERE user_id='$user_id'";
                $result_orders_query = mysqli_query($con, $get_orders);
                $row_count = mysqli_num_rows($result_orders_query);

              
            }
        }
    } else {
        echo "<p class='text-center'>Please log in to view your order details.</p>";
    }
}


//get ip addressfunction

function getIPAddress() {
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
//whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  
?>
