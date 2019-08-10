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
    <!--Password update-->
    <?php if(isset($_SESSION['password_updated'])): ?>
    <div class="flash success-flash">
    <span class="remove">&times;</span>
    <div class="flash-heading">
        <h3><span class="checked">&#10004;</span>Successs: you have done!</h3>
    </div>
    <div class="flash-body">
    <p><?php echo $_SESSION['password_updated'];?></p>
    </div>
<?php endif; ?>
<?php unset($_SESSION['password_updated']); ?>
</div>
<!--Name update-->
<?php if(isset($_SESSION['name_updated'])): ?>
    <div class="flash success-flash">
    <span class="remove">&times;</span>
    <div class="flash-heading">
        <h3><span class="checked">&#10004;</span>Successs: you have done!</h3>
    </div>
    <div class="flash-body">
    <p><?php echo $_SESSION['name_updated'];?></p>
    </div>
<?php endif; ?>
<?php unset($_SESSION['name_updated']); ?>
</div>
 <!--close flash-->
<!-- <div class="flash error-flash">
    <span class="remove">&times;</span>
    <div class="flash-heading">
        <h3><span class="cross">&#x2715;</span>Error: you have error!</h3>
    </div>
    <div class="flash-body">
    <p>First you need login!</p>
    </div>
</div> -->
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