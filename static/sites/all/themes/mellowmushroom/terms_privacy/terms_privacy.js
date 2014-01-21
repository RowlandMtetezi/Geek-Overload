$(document).ready(function() {
  // Force the "sideburns" to come down as far as the effective height of the center div
  $('#cardboard-left, #cardboard-right').css('height',$('#cardboard-center')[0].scrollHeight);  
});