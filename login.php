<?php

include "init.php";

 $obj = new base_class();

if(isset($_POST['login']))
{
$email = $obj->security($_POST['email']);
$password = $obj->security($_POST['password']);
$email_status = $password_status = 1;

if(empty($email)){
    $email_error = "Email is required";
    $email_status = "";
}

if(empty($password)){
    $password_error = "Password is required ";
    $password_status = "";

}
if(!empty($email_status) && !empty($password_status)){
    if($obj->Normal_Query("SELECT * FROM users WHERE email = ?", [$email])){
        if($obj->Count_Rows() == 0) {
            $email_error = "Please enter correct email";
        }else {
            $row         = $obj->Single_Result();
            $db_email    = $row->email;
            $db_password = $row->password;
            $user_id     = $row->id;
            $user_name   = $row->name;
            $user_image  = $row->image;
            $clean_status = $row->clean_status;

            if(password_verify($password, $db_password)){
              $status = 1;
              $obj->Normal_Query("UPDATE users SET status = ? WHERE id = ?", [$status, $user_id]);
              if($clean_status == 0){
              if($obj->Normal_Query("SELECT msg_id from messages ORDER BY msg_id DESC LIMIT 1")){
                  $last_row = $obj->Single_Result();
                  $last_msg_id = $last_row->msg_id + 1;
                  if($obj->Normal_Query("INSERT INTO clean(clean_message_id, clean_user_id) VALUES(?,?)", [
                      $last_msg_id, $user_id])){
                          $update_clean_status = 1;
                          $obj->Normal_Query("UPDATE users SET clean_status = ? WHERE id => ?", [$update_clean_status, $user_id]);
                          $obj->Create_Session("user_name", $user_name);
                          $obj->Create_Session("user_id", $user_id);
                          $obj->Create_Session("user_image", $user_image);
                          header("location:index.php");
                  }
              } 

              }else {
                $obj->Create_Session("user_name", $user_name);
                $obj->Create_Session("user_id", $user_id);
                $obj->Create_Session("user_image", $user_image);
                header("location:index.php");
              }
            }else {
                $password_error = "Please enter correct password";
            }

        }
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Messenger</title>
    <?php include 'components/css.php' ;?>
</head>
<body>
<?php if(isset($_SESSION['security'])):?>
<div class="flash error-flash">
    <span class="remove">&times;</span>
    <div class="flash-heading">
        <h3><span class="cross">&#x2715;</span>Error: you have error!</h3>
    </div>
    <div class="flash-body">
    <p><?php echo $_SESSION['security'];?></p>
    </div>
</div>
<?php endif;?>
<?php unset($_SESSION['security']);?>
    <div class="signup-container">

        <div class="account-left">
        <div class="account-text">
        <h1>Lets Chat</h1> 
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, rerum iure, suscipit illum pariatur quod minus libero explicabo commodi, ipsum dolores excepturi facilis. Inventore iste, suscipit voluptates delectus eos blanditiis omnis hic tempora sit accusamus maiores nemo. Saepe tempora, aspernatur porro delectus similique veritatis possimus quasi mollitia reprehenderit iste velit? Omnis repudiandae voluptates excepturi dicta vel. Pariatur laboriosam exercitationem inventore nam quisquam, unde deserunt expedita doloribus. Quam nam iusto saepe eaque unde dolor, velit nihil ea aliquam aliquid non voluptatum facere consequuntur, inventore at officiis totam. Distinctio cumque aliquam molestias dolores sit corrupti consequatur eos, omnis eligendi voluptatem, eum saepe.
            </p> 
        </div>
        </div>

        <div class="account-right">
        <?php include 'components/login_form.php' ;?>


        </div> 
    </div>
   <?php include 'components/js.php' ;?>
</body> 
</html>