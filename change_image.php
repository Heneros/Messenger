<?php include "init.php"; ?>
<?php
$obj = new base_class();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'components/css.php' ;?>
    <title>Messenger</title>
</head>
<body>
<?php include 'components/nav.php'; ?>
<div class="chat-container">
<?php include 'components/sidebar.php'; ?>

    <section id="right-area">
    <?php include 'components/change_img_form.php'; ?>
    </section> <!-- close right area close -->
</div> <!--close chat-container -->

<?php include 'components/js.php'; ?>
</body>
</html>