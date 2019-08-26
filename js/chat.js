$(document).ready(function(){
    ///send messages
    $(".chat-form").keypress(function(e){
        if(e.keyCode == 13) {
            var message = $("#send_message").val();
    if (message == "") {
        $("#error_message").html("Please enter message");
        return false;
    } else {
        $("#error_message").html("");
    }
                  $.ajax({
                    type: 'POST',
                    url: 'ajax/send_message.php',
                    data: {message: message},
                    dataType: 'JSON',
                    cache: false,
                    success: function(feedback){
                        if(feedback.status == "success"){
                            alert('message is sent');
                            $("#send_message").val("");
                        }
                    },
                    error: function(error){
                        console.log(error);
                    }
                })
        }
    })
///send files
    $("#upload-files").change(function(){
        var file_name = $("#upload-files").val();
        if(file_name.length != ""){
            $.ajax({
                type: 'POST',
                url: 'ajax/send_files.php',
                data: new FormData($(".chat-form")[0]),
                contentType: false,
                processData: false,
                success: function(feedback){
                    if(feedback == "error") {
                         $(".files-error").addClass("show-file-error");
                         $(".files-error").html("<span class='files-cross-icon'>&#x2715;</span>"+ "Please choose valid image/file");
                         setTimeout(function(){
                            $(".files-error").removeClass("show-file-error");
                         }, 4000)
                    }else if(feedback == "success"){
                        alert('file/image send');
                    }
                }
            })
        }
    })
    ///send emoji
    $(".emoji-same").click(function(){
        var emoji = $(this).attr("src");
        $.ajax({
            type: 'POST',
            url: 'ajax/send_emoji.php',
            data: {'send_emoji': emoji},
            dataType: 'JSON',
            success: function(feedback){
                if(feedback.status == "success"){
                    alert("emoji send");
                }
            }
        })
    })
})

