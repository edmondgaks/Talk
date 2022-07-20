<?php

include_once 'config.php';

$searchTerm = mysqli_real_escape_string($conn,$_POST['searchTerm']);
$sql = mysqli_query($conn,"Select * from chat where fname like '%$searchTerm%' OR lname like '%$searchTerm%'");

$output = '';
if(mysqli_num_rows($sql) > 0) {
    include_once 'data.php';
} else {
    $output .= "No users found related to your search";
}
echo $output;

?>