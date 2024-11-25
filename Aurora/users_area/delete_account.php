<?php
include('../includes/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Account</title>
    </head>
    <a href="delete_account.php"></a>
<body>
<h3 class=" text-dark mb-4">Delete Account</h3>
<form action="" method="POST" class="mt-5" >
    <div class="form-outline mb-4"> 
        <input type="submit" class="form-control w-50 m-auto" name="delete" value="Delete Account">
    </div>
    <div class="form-outline mb-4"> 
        <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="Don't Delete Account">
    </div>
</form>  
</<body>
</html>
<?php
$username_session=$_SESSION['user_name'];
if (isset($_POST['delete'])) {
    // Corrected DELETE query
    $delete_query = "DELETE FROM `customer` WHERE user_name='$username_session'";
    $result = mysqli_query($con, $delete_query);
    if ($result) {
        session_destroy();
        echo "<script>alert('Account Deleted successfully')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}
if (isset($_POST['dont_delete'])){
    echo "<script>window.open('profile.php','_self')</script>";
}
?>

   
