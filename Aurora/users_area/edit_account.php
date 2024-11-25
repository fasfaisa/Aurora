<?php
// Check if user is logged in and the "user_name" key is set in the $_SESSION array
if (isset($_SESSION['user_name'])) {
    $user_session_name = $_SESSION['user_name'];
    $select_query = "SELECT * FROM `customer` WHERE user_name='$user_session_name'";
    $result_query = mysqli_query($con, $select_query);
    $row_fetch = mysqli_fetch_assoc($result_query);

    // Check if the query returned any rows before accessing the values
    if ($row_fetch) {
        $user_id = $row_fetch['user_id'];
        $user_name = $row_fetch['user_name'];
        $user_email = $row_fetch['user_email'];
        $user_address = $row_fetch['user_address'];
        $user_mobile = $row_fetch['user_mobile'];
    } else {
        // Handle the case where the query did not return any rows or there was an issue with fetching data
        // You can redirect the user or show an error message here
        echo "Error: User data not found";
        exit; // Stop further execution of the script
    }
} else {
    // Handle the case where the user is not logged in
    // You can redirect the user to the login page or show an error message here
    echo "Error: User not logged in";
    exit; // Stop further execution of the script
}
    if (isset($_POST['user_update'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_address = $_POST['user_address'];
    $user_mobile = $_POST['user_mobile'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_tmp = $_FILES['user_image']['tmp_name'];
    move_uploaded_file($user_image_tmp, "./user_images/$user_image");
    
    //update query
$update_data = "UPDATE `customer` SET user_name='$user_name', user_email='$user_email', user_image='$user_image', user_address='$user_address', user_mobile='$user_mobile' WHERE user_id='$user_id'";
$result_query_update = mysqli_query($con, $update_data);

if ($result_query_update) {
    echo "<script>alert('Data updated successfully')</script>";
    echo "<script>window.open('logout.php','_self')</script>";
} else {
    // Handle the case where the update query fails
    echo "<script>alert('Failed to update data')</script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>    
  </head>
  <body>
      <h3 class=" text-dark mb-4">Edit Account</h3>
      <form action="" method="POST" enctype="multipart/form-data" >
           <div class="form-outline mb-4"> 
        <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_name ?>" name="user_name">
      </div>
            <div class="form-outline mb-4"> 
        <input type="email" class="form-control w-50 m-auto" value="<?php echo $user_email ?>" name="user_email">
      </div>
            <div class="form-outline mb-4 d-flex w-50 m-auto"> 
        <input type="file" class="form-control m-auto " name="user_image">
        <img src="./user_images/<?php echo $user_image?>" alt="" class="edit_img">
      </div>
            <div class="form-outline mb-4"> 
        <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_address ?>" name="user_address">
      </div>
            <div class="form-outline mb-4"> 
        <input type="text" class="form-control w-50 m-auto" value="<?php echo $user_mobile ?>" name="user_mobile">
      </div>
          <input type="submit" value="update" class="bg-dark py-2 px-3 border-0" name="user_update">
      </form>
  </body>
</head>
</html>
