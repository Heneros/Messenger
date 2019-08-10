$(document).ready(function(){
  $(document).on("change", "#file", function(){
      var image_name = $('#file').val();
      $("#file-label").html(image_name);
  })
}); 


$(document).ready(function(){
 $(".remove").click(function(){
   $(".flash").hide();
 })
 setTimeout(function(){
   $(".flash").fadeOut("slow");
 }, 4000);
}); 