

$(document).on("click", "#save", function () {
    var message = $("#send_message").val();
    if (message == "") {
        $("#error_message").html("Please enter message");
        return false;
    } else {
        $("#error_message").html("");
    }
    $.ajax({
        type: "POST",
        url: 'ajax/send_message.php',
        data: {message: message},
        cache: false,
        success: function (data) {
            alert(data);
            $("#message").val("");
        }
    });
});

// $(document).ready(function(){
//     $(".chat-form").keypress(function(e){
//         if(e.keyCode == 13) {
//             var send_message = $("#send_message").val();
//             if(send_message.length != "" ){
//                                  $.ajax({
//                     type: 'POST',
//                     url: 'ajax/send_message.php',
//                     data: {send_message:send_message},
//                     dataType: 'JSON',
//                     success: function(feedback){
//                         if(feedback.status == "success"){
//                             alert(feedback);
//                         }
//                     }
//                     // error: function(error){
//                     //     console.log(error);
//                     // }
//                 })
            
//             }

//         }
//     })
// })

