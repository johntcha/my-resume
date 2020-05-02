$(document).ready(function() {

// Gets the video src from the data-src on each button

var $pictureSrc;  
$('.video-btn').click(function() {
    $pictureSrc = $(this).data( "src" );
});
console.log($pictureSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal1').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#picture").attr('src',$pictureSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal1').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#picture").attr('src',$pictureSrc); 
})       
// document ready  
});