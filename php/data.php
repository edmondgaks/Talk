<?php
include_once 'config.php';

while($row = mysqli_fetch_assoc($sql)) {
    $sql2 = "Select * from messages where (incoming_msg_id ={$row['unique_id']} OR outgoing_msg_id={$row['unique_id']}) AND (outgoing_msg_id=$outgoing_id OR outgoing_msg_id={$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($row2) > 0) {
        $result = $row['msg'];
    } else {
        $result = "No messages available";
    }
    $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                    <div class="content">
                        <img src="php/img/'.$row['img'] .'" alt="">
                        <div class="details">
                            <span>'.$row['fname'] ." ". $row['lname'].'</span>
                            <p>This is test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>';
}


?>