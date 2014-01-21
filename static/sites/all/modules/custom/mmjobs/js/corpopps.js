$(document).ready(function() {

  $('#edit-keyword-wrapper label').addClass('inlined').text('Search');
  $('#edit-keyword-wrapper input').addClass('input-text');
  
  $("label.inlined + input.input-text").each(function (index, item) {
  
      var me = $(this);
  
      $(window).load(function () {
          setTimeout(function(){
              if (me[0].value.length) {
                  //console.log("Input started with text, fully fading label");
                  me.prev("label.inlined").addClass('has-text');
              }
          }, 200);
      });
  
      $(this).focus(function () {
          //console.log("Input got the focus, fading label");
          $(this).prev("label.inlined").addClass("focus").removeClass('error');
      });
  
      $(this).keypress(function () {
          //console.log("Input has text, further fading label");
          $(this).prev("label.inlined").addClass("has-text").removeClass("focus"); //.css('background-color','transparent');
      });
  
      // Upon losing focus, if the input is empty, restore the label opacity
      $(this).blur(function () {
          if($(this).val() == "") {
              //console.log("Input lost focus and there's nothing there, fade in the label");
              $(this).prev("label.inlined").removeClass("has-text").removeClass("focus");
          }
      });
  });


});

