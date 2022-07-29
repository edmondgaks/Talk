<?php

include_once 'config.php';


session_start();

$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$lname = mysqli_real_escape_string($conn,$_POST['lname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "Select email FROM chat where email='{$email}'");
        if(mysqli_num_rows($sql) > 0) {
            echo "Email is already in use";
        } else {
            if(isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $image_explode = explode('.', $img_name);
                $image_ext = end($image_explode);

                $extensions = array('jpg', 'jpeg', 'png');
                if(in_array($image_ext, $extensions) === true) {
                    $time = time();
                    $new_img_name = $time.$img_name;
                    if(move_uploaded_file($tmp_name,"img/".$new_img_name)) {
                        $status = "Active now";
                        $random_id = rand(time(),10000000);
                        $sql2 = mysqli_query($conn, "INSERT INTO chat (unique_id,fname,lname,email,password,img,status) VALUES({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");

                        if($sql2) {
                            // echo "Data saved successfully";
                            $sql3 = mysqli_query($conn, "Select * from chat where email='$email'");
                            if(mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            }
                        } else {
                            echo "Something went wrong. Please try again later";
                        }
                    }
                } else {
                    echo "Please select an image extension in jpg,png and png files";
                }

            } else {
                echo "Please select an image";
            }
        }

    } else {
        echo "$email - This is not a valid email";
    }
} else {
    echo "All input types are required";
}

?>