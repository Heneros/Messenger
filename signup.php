<?php

include "init.php";
$obj = new base_class();

if(isset($_POST['signup']))
{
$full_name = $obj->security($_POST['full_name']);
$email = $obj->security($_POST['email']);
$password = $obj->security($_POST['password']);
$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];
$img_path = "img/";
$extensions = ['jpg', 'jpeg', 'png'];
$img_ext = explode(".", $img_name);
$img_extension = end($img_ext);

$name_status = $email_status = $password_status = $photo_status = 1;
if(empty($full_name)){
    $name_error = "Full name is required!";
    $name_status = "";
    
}
// Email Validation
if(empty($email)){
    $email_error = "Email is required";
    $email_status = "";
} else {
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = "Invalid email format";
    $email_status = "";
}else {
    if($obj->Normal_Query("SELECT email FROM users WHERE email = ?", array($email))){
        if($obj->Count_Rows() == 0){
        }else {
            $email_error = "Sorry this email is exist";
            $email_status = "";
        }
    }
  }
}
// Password Validation
if(empty($password)){
    $password_error = "Password is required ";
    $password_status = "";
}else if(strlen($password) < 5 ) {
    $password_error = "Password is too short ";
    $password_status = "";
}
// Image Validation

if(empty($img_name)){
    $image_error = "Image is required";
    $photo_status = "";
}else if(!in_array($img_extension, $extensions)){
    $image_error = "Inavalid image extension";
    $photo_status = "";
}


if(!empty($name_status) && !empty($email_status) && !empty($password_status) && !empty($photo_status)){
    move_uploaded_file($img_tmp, "$img_path/$img_name");
    $status = 0;
    $clean_status = 0;
    if($obj->Normal_Query("INSERT INTO users (name, email, password, image, status, clean_status) VALUES (?, ?, ?, ?, ?, ?)", [$full_name, $email, password_hash($password, PASSWORD_DEFAULT), $img_name, $status, $clean_status])){
        $obj->Create_Session("account_success", "Your account is successfully created" );
        header("location:login.php");
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
    <?php include 'components/css.php'; ?>
</head>
<body>
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
         <?php include 'components/signup_form.php'; ?> 
        
</div>

        </div> 
    <?php include 'components/js.php'; ?>
      
    </body>
  </html>