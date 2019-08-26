<form class="chat-form">
      <div class="chat-container">
          <div class="form-input">
              <textarea placeholder="Type your message..." name="message" class="textarea-control" id="send_message"></textarea>
              <div class="error" id="error_message"></div>
          </div><!-- close form-input -->
          <div class="form-input">
              <label for="upload-files" id="upload-label"><i class="fas fa-paperclip fa-uploads"></i><i class="fas fa-file-image fa-uploads"></i></label>
             <input type="file" 
             id="upload-files"
             class="files-upload"
             name="send_file">
          </div><!-- form-input close -->
      </div> <!-- chat-container close --> 
      <div class="files-error"></div>
    </form><!-- chat-form close -->