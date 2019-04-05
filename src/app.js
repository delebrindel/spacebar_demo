var Reveal = require('reveal');
var $ = require('jquery');
// Full list of configuration options available here:
// https://github.com/hakimel/reveal.js#configuration

$(function(){
  let slidesFolder ="slides/";
  $("#slide-1").load( slidesFolder + "slide_1.html"); 
  $("#slide-2").load( slidesFolder + "slide_2.html"); 
  $("#slide-3").load( slidesFolder + "slide_3.html"); 
  $("#slide-4").load( slidesFolder + "slide_4.html"); 
  $("#slide-5").load( slidesFolder + "slide_5.html"); 
  $("#slide-6").load( slidesFolder + "slide_6.html"); 
  Reveal.initialize({
    controls: true,
    progress: true,
    history: true,
    center: true,
    // default/cube/page/concave/zoom/linear/fade/none
    transition: 'none',
  });
});