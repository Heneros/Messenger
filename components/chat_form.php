<form class="chat-form">
      <div class="chat-container">
          <div class="form-input">
              <textarea placeholder="Type your message..." name="message" class="textarea-control" id="send_message"></textarea>
              <div class="error" id="error_message"></div>
              <button class="btn btn-success" id="save">Save</button>
          </div><!-- close form-input -->
          <div class="form-input">
              <label for="upload-files" id="upload-label"><i class="fas fa-paperclip fa-uploads"></i><i class="fas fa-file-image fa-uploads"></i></label>
             <input type="file" 
             id="upload-files"
             class="files-upload" >
          </div><!-- form-input close -->
      </div> <!-- chat-container close --> 
    </form><!-- chat-form close -->