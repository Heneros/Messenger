<section id="sidebar">
    <ul class="left-ul">
        <li><a href="#!"> <span class="profile-img-span"><img src="img/<?php echo $_SESSION['user_image'];?>" class="profile-img" alt="profile-img"></span></a></li>
        <li><a href="index.php"> <?php echo ucfirst($_SESSION['user_name']);?> <span class="cool-hover"></span></a></li>
        <li><a href="change_name.php">Change Name <span class="cool-hover"></span></a></li>
        <li><a href="change_password.php">Change Password <span class="cool-hover"></span></a></li>
        <li><a href="change_image.php">Change Image <span class="cool-hover"></span></a></li>
        <li><a href="#!">110 User Online <span class="cool-hover"></span></a></li>
        <li><a href="logout.php">Logout <span class="cool-hover"></span></a></li>
    </ul>
</section>
