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


// include "../init.php";

// $obj = new base_class;
// if(isset($_POST['send_message'])){
//     $message = $obj->security($_POST['send_message']);
//     $user_id = $_SESSION['user_id'];
//     $msg_type = "text";

//     if($obj->Normal_Query("INSERT INTO  messages (message, msg_type, user_id) VALUES(?,?,?)", [$message,$user_id,$msg_type]))
//     {
//         echo json_encode(['status' => 'success']);
//     }
    
// }

// $connection = mysql_connect("127.0.0.1", "root"); // Establishing Connection with Server..
// $db = mysql_select_db("messenger", $connection); // Selecting Database
// if (isset($_POST['send_message'])) {
// $query = mysql_query("insert into messages (message, msg_type, user_id) VALUES(?,?,?)"); //Insert Query
// echo "Form Submitted succesfully";
// }
// mysql_close($connection); // Connection Closed




// include "../init.php";

// include "../classes/db.php";
// $obj = new base_class();
// $con = mysqli_connect("127.0.0.1", "root", "", "messenger");

// if (isset($_POST['message'])) {

//     $message = $_POST['message'];    
//     $msg_type = "text";
//     $user_id = $_SESSION['user_id'];
    
    

//     mysqli_query($con, "INSERT into messages(message, msg_type, user_id) values ('$message', '$msg_type', '$user_id')");
//     $sql = mysqli_query($con, "SELECT message,user_id FROM messages order by id desc");
//     $result = mysqli_fetch_array($sql);
//     echo '<div class="message-wrap">' . $result['message'] . '</div>';
// } else {
//     echo "Message is empty";
// }

?>


