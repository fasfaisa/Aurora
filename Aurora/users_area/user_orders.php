<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Account</title>
    </head>
    <body>
    <?php
    $user_name = $_SESSION['user_name'];
    $get_user = "SELECT * FROM `customer` WHERE user_name='$user_name'";
    $result = mysqli_query($con, $get_user);
    $row_fetch = mysqli_fetch_assoc($result);
    $user_id = $row_fetch['user_id'];
    //echo $user_id;
    ?>
    <h3 class="text-dark">All my Orders</h3>
    <table class="table table-bordered mt-5">
        <thead class="bg-dark">
            <tr>
                <th>SI no</th>
                <th>Order ID</th>
                <th>Amount Due</th>
                <th>Total products</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            $get_order_details = "SELECT * FROM `user_orders` WHERE user_id=$user_id";
            $result_orders = mysqli_query($con, $get_order_details);
             // Initialize the serial number outside the loop
            while ($row_orders = mysqli_fetch_assoc($result_orders)) {
                $order_id = $row_orders['order_id'];
                $amount_due = $row_orders['amount_due'];
                $total_products = $row_orders['total_products'];
                $number=1;
                echo "<tr>
                    <td>$number</td>
                    <td>$order_id</td>
                    <td>$amount_due</td>
                    <td>$total_products</td>
                </tr>";
                $number++; // Increment the serial number
            }
            ?>
        </tbody>
    </table>
</body>

</html>
