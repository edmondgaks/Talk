<?php

include_once 'config.php';

session_start();

$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if(!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn,"Select * from chat where email = '{$email}' and password = '{$password}'");
    if(mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "success";
    } else {
        echo "Email or Password is incorrect";
    }
} else {
    echo "All input types are required";
}
?>