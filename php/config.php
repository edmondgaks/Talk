<?php
$conn = mysqli_connect("localhost","root","","chatty");
if(!$conn) {
    echo "Errorr".mysqli_connect_error();
}
?>