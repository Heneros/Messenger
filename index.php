<?php include "init.php";?>
<?php if(!isset($_SESSION['user_id'])):?>
<?php  header("location:login.php");?>
<?php endif;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php include 'components/css.php'; ?>
</head>
<body>
<?php include 'components/nav.php'; ?>
<div class="chat-container">
<?php include 'components/sidebar.php'; ?>
    <section id="right-area">
     <div class="messages">
     <?php include 'components/messages.php'; ?>
     <?php include 'components/chat_form.php'; ?>
     <?php include 'components/emoji.php'; ?>
    </section> <!-- close right area close -->
</div> <!--close chat-container -->
<?php include 'components/js.php'; ?>
</body>
</html>