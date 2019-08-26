<?php
include "../init.php";


$con = mysqli_connect("127.0.0.1", "root", "", "messenger");

if (isset($_POST['message'])) {

    $message = $_POST['message'];    
    $msg_type = "text";
    $user_id = $_SESSION['user_id'];
    
   if($sql = mysqli_query($con, "INSERT INTO messages(message, msg_type, user_id) VALUES ('$message', '$msg_type', '$user_id')")) {
    echo json_encode(['status' => 'success']);
   }

} else {
    echo "Message is empty";
}


?>


