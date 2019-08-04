<div class="form-area">
                <form method="POST" action="" enctype="multipart/form-data" >
                <h2 class="form-heading">Create new account</h2>
 
                    <div class="group">
                    <input type="text" name="full_name" class="control" placeholder="Enter your Full Name">
                    <div class="name-error error">
                    <?php if(isset($name_error)):?>
                    <?php echo $name_error; ?>

                    <?php  endif; ?>
                    </div><!--- close name-error block -->
                    </div><!--- close full name -->
                    <div class="group">
                    <input type="email" name="email" class="control" placeholder="Enter your email"></div>
                    <div class="group">
                    <input type="password" name="password" class="control" placeholder="Enter your password">
                    </div>
                    <div class="group">
                    <label for="file" id="file-label"> Choose image</label>
                    <input type="file" name="img" class="file" id="file">
                   </div>
                   <div class="group">
                    <input type="submit" name="signup" class="btn account-btn" value="Create Account">
                   </div>
                    <div class="group">
                    <a href="login.php" class="link">Already have an account?</a>
                      </div>
                </form>
            </div>   