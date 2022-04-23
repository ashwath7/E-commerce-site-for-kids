$("#btn-mail").click(function(){
   $.ajax({
      url: "likes.php",
      type: "post",
      success: function(responsedata) {
        $('#write').html(responsedata);
      }

   });
});
