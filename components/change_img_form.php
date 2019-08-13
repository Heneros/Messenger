<div class="form-section">
         <div class="form-grid">
         <form action="" method="POST" enctype="multipart/form-data">
                     <h2 class="form-heading">Change Photo </h2>

                    <div class="group">
                        <label for="change-image" id="change-image-label"></label>
                        <input type="file" name="change_img" id="change-image" class="change-img">
                        <div class="name-error error">
                    <?php if(isset($img_error)):?>
                    <?php echo $img_error; ?>

                    <?php  endif; ?>
                    </div><!--- close name-error block -->
                </div>
                    <div class="group">
                    <input type="submit" name="change_img" class="btn account-btn" value="Save Changes">
                   </div>

                </form>
         </div> <!---form-grid-->
     </div> <!-- close form-section---> 