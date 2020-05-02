// Store the canvas object into a variable

$(document).ready(function () {
var $myCanvas = $('#myCanvas1');

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#0472bf',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 0, end: 320
});

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#8d9799',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 320, end: 0
});

var $myCanvas = $('#myCanvas2');

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#0472bf',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 0, end: 300
});

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#8d9799',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 300, end: 0
});

var $myCanvas = $('#myCanvas3');

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#0472bf',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 0, end: 300
});

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#8d9799',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 300, end: 0
});

var $myCanvas = $('#myCanvas4');

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#0472bf',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 0, end: 200
});

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#8d9799',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 200, end: 0
});

var $myCanvas = $('#myCanvas5');

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#0472bf',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 0, end: 200
});

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#8d9799',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 200, end: 0
});

var $myCanvas = $('#myCanvas6');

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#0472bf',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 0, end: 300
});

$myCanvas.drawArc({
  strokeStyle: 'steelblue',
  strokeStyle: '#8d9799',
  strokeWidth: 6,
  x: 50, y: 50,
  radius: 40,
  // start and end angles in degrees
  start: 300, end: 0


});
//progress bar
$(".meter > span").each(function() {
  $(this)
    .data("origWidth", $(this).width())
    .width(0)
    .animate({
      width: $(this).data("origWidth") // or + "%" if fluid
    }, 1200);
});
});