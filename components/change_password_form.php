<div class="form-section">
         <div class="form-grid">
         <form action="" method="POST">
                     <h2 class="form-heading">Change Password </h2>

                    <div class="group">
                    <input type="password" name="current_password" class="control" placeholder="Add current password" value="<?php if(isset($current_password)): echo $current_password; endif;?>">
                    <div class="name-error error">
                    <?php if(isset($current_password_error)):?>
                    <?php echo $current_password_error; ?>

                    <?php  endif; ?>
                    </div><!--- close name-error block -->
                </div>
                <div class="group">
                    <input type="password" name="new_password" class="control" placeholder="Create new password" value="<?php if(isset($new_password)): echo $new_password; endif;?>">
                    <div class="name-error error">
                    <?php if(isset($new_password_error)):?>
                    <?php echo $new_password_error; ?>

                    <?php  endif; ?>
                    </div><!--- close name-error block -->
                </div>
                <div class="group">
                    <input type="password" name="retype_new_password" class="control" placeholder="Retype password" value="<?php if(isset($retype_password)): echo $retype_password; endif;?>">
                    <div class="name-error error">
                    <?php if(isset($retype_password_error)):?>
                    <?php echo $retype_password_error; ?>

                    <?php  endif; ?>
                    </div><!--- close name-error block -->
                </div>

                    <div class="group">
                    <input type="submit" name="change_password" class="btn account-btn" value="Save Changes">
                   </div>

                </form>
         </div> <!---form-grid-->
     </div> <!-- close form-section--->