console.log('core js')
import $ from 'jquery';

$(document).ready(function() {

  var ppp = 6; // Post per page
  var pageNumber = 1;


  function load_posts(){
      pageNumber++;
      var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax' + '&cid=' + $("#more_posts").data('cid');
      $.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = $(data);
              console.log($data)
              if($data.length){
                  $("#ajax-posts").append($data);
                  $("#more_posts").attr("loading",false); // Uncomment this if you want to disable the button once all posts are loaded
                  // $("#more_posts").hide(); // This will hide the button once all posts have been loaded
              } else{
                  $("#more_posts").attr("disabled",true);
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      return false;
  }

  $("#more_posts").on("click",function(){ // When btn is pressed.
      $("#more_posts").attr("loading",true); // Disable the button, temp.
      load_posts();
      $(this).insertAfter('#ajax-posts'); // Move the 'Load More' button to the end of the the newly added posts.
  });

 

})