<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet" >
     <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <title>Messenger</title>
</head>
<body>
<nav id="nav">
</nav>
<div class="chat-container">
    <section id="sidebar">
    <ul class="left-ul">
        <li><a href="#!"> <span class="profile-img-span"><img src="img/homer.png" class="profile-img" alt="profile-img"></span></a></li>
        <li><a href="#!">Homer Simpson <span class="cool-hover"></span></a></li>
        <li><a href="#!">Change Name <span class="cool-hover"></span></a></li>
        <li><a href="#!">Change Password <span class="cool-hover"></span></a></li>
        <li><a href="#!">110 User Online <span class="cool-hover"></span></a></li>
    </ul>
    </section>
    <section id="right-area">
     <div class="messages">

    <div class="left-message common-margin">

    <div class="sender-img-block">
    <img src="img/bender.jpg" class="sender-img" alt="sender image">
    </div>

    <div class="left-msg-area">

        <div class="user-name-date">
            <span class="sender-name">
            Bender Rodriguez 
            </span>
            <span class="date-time">
                1 day ago
            </span>
         </div>
         
         <div class="left-msg">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
         </div>
         
       </div>

    </div>

    <div class="left-message common-margin">
    <div class="sender-img-block">
    <img src="img/bender.jpg" class="sender-img" alt="sender image">
    </div>

    <div class="left-msg-area">

        <div class="user-name-date">
            <span class="sender-name">
            Bender Rodriguez 
            </span>
            <span class="date-time">
                1 day ago
            </span>
         </div>
         
         <div class="left-msg">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
         </div>
       </div> <!--  sender-img-block-->
       </div> <!--  left-message common-margin -->

    <div class="left-message common-margin">
    <div class="sender-img-block">
    <img src="img/bender.jpg" class="sender-img" alt="sender image">
    <span class="online-icon">
    
    </span>
    </div>
    <div class="left-msg-area">
        <div class="user-name-date">
            <span class="sender-name">
            Bender Rodriguez 
            </span>
            <span class="date-time">
                1 day ago
            </span>
         </div>
         <div class="left-msg">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
         </div>
       </div>
    </div>
    <div class="right-messages common-margin">
             <div class="right-msg-area">
             <span class="date-time right-time">
                1 day ago
            </span>
            <div class="right-msg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
            </div>
             </div>
        </div>
        <div class="right-messages common-margin">
             <div class="right-msg-area">
             <span class="date-time right-time">
                1 day ago
            </span>
            <div class="right-msg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
            </div>
             </div>
        </div>
        <div class="right-messages common-margin">
             <div class="right-msg-area">
             <span class="date-time right-time">
                1 day ago
            </span>
            <div class="right-msg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
            </div>
             </div>
        </div>
        <div class="right-messages common-margin">
             <div class="right-msg-area">
             <span class="date-time right-time">
                1 day ago
            </span>
            <div class="right-msg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
            </div>
             </div>
        </div>
        <div class="right-messages common-margin">
             <div class="right-msg-area">
             <span class="date-time right-time">
                1 day ago
            </span>
            <div class="right-msg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
            </div>
             </div>
        </div>
        <div class="right-messages common-margin">
             <div class="right-msg-area">
             <span class="date-time right-time">
                1 day ago
            </span>
            <div class="right-msg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
            </div>
             </div>
        </div>
        <div class="right-messages common-margin">
             <div class="right-msg-area">
             <span class="date-time right-time">
                1 day ago
            </span>
            <div class="right-msg">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
            </div>
             </div>
        </div>
        <div class="left-message common-margin">
    <div class="sender-img-block">
    <img src="img/bender.jpg" class="sender-img" alt="sender image">
    <span class="offline-icon">
    </span>   
    </div>
    
    <div class="left-msg-area">
        <div class="user-name-date">
            <span class="sender-name">
            Bender Rodriguez 
            </span>
            <span class="date-time">
                1 day ago
            </span>
         </div><!-- user-name-date-end -->
         <div class="left-msg">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates molestiae expedita sed!</p>
             </div> <!-- left-msg-end -->
       </div><!-- left-msg-area -->

    </div>
    
 </div>
 
    <div class="chat-form">
      <div class="chat-container">
          <div class="form-input">
              <textarea placeholder="Type your message..." class="textarea-control"></textarea>
          </div><!-- close form-input -->
          <div class="form-input">
              <label for="upload-files" id="upload-label"><i class="fas fa-paperclip fa-uploads"></i><i class="fas fa-file-image fa-uploads"></i></label>
             <input type="file" 
             id="upload-files"
             class="files-upload" >
          </div><!-- form-input close -->
      </div> <!-- chat-container close --> 
    </div><!-- chat-form close -->
    </section> <!-- close right area close -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
</body>
</html>