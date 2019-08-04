<?php

include "init.php";

if(isset($_POST['signup']))
{
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$img_name = $_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];
$name_status = $email_status = $password_status = $photo_status = 1;
if(empty($full_name)){
    $name_error = "Full name is required!";
    $name_status = "";
    
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
         <?php include 'components/signup.php'; ?> 
        
</div>

        </div> 
    <?php include 'components/js.php'; ?>
</body> 
</html>