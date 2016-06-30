//POST functions
//
//
//
//

(function( $ ){
   $.fn.post_photo = function(photo) {
      $.ajax({
         url: "nav_photo?category=" + window.category,
         data: 'photo=' + photo,
         type:"POST",
         dataType: "html",
   success: function(data){
        $('this').get_photo();

    }});
      return this;
   }; 
})( jQuery );
(function( $ ){
   $.fn.post_category = function(token) {
     $.ajax({
      url: "category",
         data: 'token=' + token,
         type:"POST",
         dataType: "html",
   success: function(data){
        $('this').get_category();
         
    }});
      return this;
   }; 
})( jQuery );

(function( $ ){
   $.fn.post_container = function(path) {
       $.ajax({
         url: "container",
         data: 'path=' + path,
         type:"POST",
         dataType: "html",
   success: function(data){
        $('this').get_container();

    }});
      return this;
   }; 
})( jQuery );

(function( $ ){
   $.fn.post_containerStart = function(pathStart) {
       $.ajax({
         url: "container",
         data: 'path=' + pathStart,
         type:"POST",
         dataType: "html",
   success: function(data){
     
      
        $('this').get_container();

    }});
      return this;
   }; 
})( jQuery );
(function( $ ){
   $.fn.post_description = function(description) {
      
      $.ajax({
      url: "container",
         data: 'description=' + description,
         type:"POST",
         dataType: "html",
   success: function(data){
        $('this').get_container();

    }});
      return this;
   }; 
})( jQuery );
(function( $ ){
      $.fn.post_descriptionStart = function(descriptionStart) {
      
      $.ajax({
      url: "container",
         data: 'description=' + descriptionStart,
         type:"POST",
         dataType: "html",
   success: function(data){
        
        $('this').get_container();

    }});
      return this;
   }; 
})( jQuery );
// GET functions
//
//
//
(function( $ ){
   $.fn.get_container = function() {
      $.ajax({url: "container",
   dataType: "html",
   success: function(data){
        $('.container').html(data);

    }});
      return this;
   }; 
})( jQuery );



(function( $ ){
   $.fn.get_photo = function() {
      $.ajax({url: "nav_photo?category=" + window.category,
      
   dataType: "html",
   success: function(data){
        $('#photos').html(data);
        var descriptionStart = $(".navigation").children(".test:first-child").text();
         $('this').post_descriptionStart(descriptionStart);
          var pathStart = $("img.photo").first().attr("src");
         $('this').post_containerStart(pathStart);
        
   
      // $( "li.navigation" ).click(function() {
   //var lastClicks = $(this).prev().children().attr("src");
   // console.error(lastClicks);
      //return this;
//});

$( "img.photo" ).click(function() {
   var path = $(this).attr("src");
   $('this').post_container(path);
   $('this').get_container();
    $('this').full_screen();

});
    
    }});
    
      return this;
   }; 
})( jQuery );

(function( $ ){
   $.fn.get_category = function() {
       
      $.ajax({url: "category",
   dataType: "html",
   success: function(data){
        $('#header').html(data);
       
         $(".navigation li:contains('"+ window.category +"')").css("opacity", "0.5");
        $( ".navigation li" ).click(function() {
        window.category = $(this).text();
            $(".navigation li").css("opacity", "1");
              
         $(".navigation li:contains('"+ window.category +"')").css("opacity", "0.5");
           
            $.ajax({url: "nav_photo?category=" + window.category,
   dataType: "html",
   success: function(data){
        $('#photos').html(data);
        
        var path = $("img.photo").first().attr("src");
        $('this').post_container(path);
        var description = $(".navigation").children(".test:first-child").text();
        $('this').post_description(description);
        $( ".navigation" ).click(function() {
        var description = $(this).children(".test").text();
        $('this').post_description(description);
   
   
});

$( "img.photo" ).click(function() {
   var path = $(this).attr("src");
   
   $('this').post_container(path);
   
    $('this').full_screen();
     
});
   
    }});
  
     
});
    
   }});
           return this;
   }; 
})( jQuery );

//OTHER
//
//
//
//
(function( $ ){
   $.fn.full_screen = function() {
      $(".full_screen").click(function() {
     $(".photo_frame").addClass("full").removeClass("photo_frame");
        $('this').small_screen();
});
      return this;
   }; 
})( jQuery );

(function( $ ){
   $.fn.small_screen = function() {
$(".full").click(function() {
     $(".full").addClass("photo_frame").removeClass("full");
});
      return this;
   }; 
})( jQuery );

//BODY
//
//
//
//

$(document).ready(function(){
  
  
    var token = 0;
    window.category = "Ślesin";
    var photo = 0;
    
       
     $('this').get_category(token); 
     $('this').post_photo(photo);
    $('this').full_screen();
    $('this').small_screen();
    
   
    $('this').full_screen();
   
          
         
 
            $( ".top_arrow" ).click(function() {
              var photo_count = $("#photo_count").val();
                 if (photo_count <= photo )
                {
                  
                  photo = photo_count;
                }         
    else 
    {
      photo++;
    }       
                
               $(this).post_photo(photo); 
               alert (photo);
               alert (photo_count);
               
});
$( ".bottom_arrow" ).click(function() {
                
                if(photo > 0)
                {
                    photo--;
    $(this).post_photo(photo); 
    
                }
                else{
                    return false;
                }
});

                
$( ".move_buttonRight" ).click(function() {
  var token_count = $("#token_count").val();
            if (token_count <= token )
                {
                  
                  token = token_count;
                }         
    else 
    {
      token++;
    }       
                $('this').post_category(token);
     

                
                
});


$( ".move_buttonLeft" ).click(function() {
                
                if(token > 0)
                {
                    token--;
    $('this').post_category(token);
               
                }
                else{
                    return false;
                }
});
$( "#header, .small_left, .small_right" ).mouseover(function() {
  $( ".small_left, .small_right" ).css( "display", "initial" );
});
$( "#header, .small_left, .small_right" ).mouseout(function() {
  $( ".small_left, .small_right" ).css( "display", "none" );
});
var pathname = window.location.pathname; 


$( ".buttons .monkey_jpg" ).click(function() {
                window.location.pathname = "gallery/insert_photo";
               
                
});
$( "#form_sub .monkey_jpg" ).click(function() {
                window.location.pathname = "gallery/photo";
               
                
});
});