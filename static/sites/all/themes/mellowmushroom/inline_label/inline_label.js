$(document).ready(function(){
  $('.locator-mini-form label').addClass('inlined').text('Enter ZIP Code');
  $('.locator-mini-form .form-text').addClass('input-text');
  
  $("label.inlined + input.input-text").each(function (index, item) {
 
    var me = $(this);
 
    $(window).load(function () {
      setTimeout(function(){
        if (me[0].value.length) {
          me.prev("label.inlined").addClass('has-text');
        }
      }, 200);
    });
 
    $(this).focus(function () {
      $(this).prev("label.inlined").addClass("focus");
    });
 
    $(this).keypress(function () {
      $(this).prev("label.inlined").addClass("has-text").removeClass("focus");
    });
 
    $(this).blur(function () {
      if($(this).val() == "") {
        $(this).prev("label.inlined").removeClass("has-text").removeClass("focus");
      }
    });
  });
});