<div class="form-area">

              <?php if(isset($_SESSION['account_success'])): ?>
              <div class="alert alert-success">
              <?php echo $_SESSION['account_success'];?>
              </div>
<?php endif;?>
<?php unset($_SESSION['account_success']);?>
                <form action="" method="POST">
                     <h2 class="form-heading">User Login</h2>

                    <div class="group">
                    <input type="email" name="email" class="control" placeholder="Enter your email" value="<?php if(isset($email)): echo $email; endif;?>">
                    <div class="name-error error" >
                    <?php if(isset($email_error)):?>
                    <?php echo $email_error; ?>

                    <?php  endif; ?>
                    </div><!--- close name-error block -->
                    </div>
                    <div class="group">
                    <input type="password" name="password" class="control" placeholder="Enter your password" value="<?php if(isset($password)): echo $password; endif;?>">
                    <div class="name-error error" >
                    <?php if(isset($password_error)):?>
                    <?php echo $password_error; ?>

                    <?php  endif; ?>
                    </div><!--- close name-error block -->

                    </div>
                    <div class="group">
                    <input type="submit" name="login" class="btn account-btn" value="User Account">
                   </div>
                    <div class="group">
                    <a href="signup.php" class="link">Create new account?</a>
                      </div>
                </form>
            </div> 