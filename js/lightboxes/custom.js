jQuery(document).ready(function($){
   $(".block-viewed .block-content").hide();
   $(".block-viewed .block-title").click(function(){
       $(".block-viewed .block-content").toggle();
   });
});