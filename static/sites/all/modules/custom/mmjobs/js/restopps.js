$(document).ready(function() {

  // NOTE: JSON.parse only supported in IE8+ and other browsers.
  var stores = JSON.parse($('#store-json').text());

  function refreshSelect(targetObject,newState){
    $.each(stores, function(k,v) {
      if (v.location_province == newState) {
        targetObject.append('<option value="' + v.nid + '">'+ v.store +'</option>');
      } else if (v.store == 'Wilder' && newState == 'OH') { // BHZ: Because Wilder is on the KY/OH border so this is practical to include.
        targetObject.append('<option value="' + v.nid + '">'+ v.store +'</option>');        
      }
    });
  };
  
  $('#edit-state').change(function(event){    
    $('#edit-locations-wrapper').hide();
    $('#edit-locations').html('');
    refreshSelect($('#edit-locations'),this.value);
    $('#edit-locations-wrapper label').text($(this).find('option:selected').text() + ' Locations:');
    
    if ($('#edit-locations option').length > 0) {
      $('#edit-locations').prepend('<option value="0" selected>All Stores</option>');  
      $('#edit-locations-wrapper').show();  
    }
  
  });
    
  // Handle a back-to state where everything's pre-selected.  
  if($('#edit-state').val() != 0) {
    refreshSelect($('#edit-locations'),$('#edit-state').val());
    $('#edit-locations-wrapper label').text($('#edit-state').find('option:selected').text() + ' Locations:');
    if ($('#edit-locations option').length > 0) {
      $('#edit-locations').prepend('<option value="0" selected>All Stores</option>');  
      $('#edit-locations-wrapper').show();  
    }
  } else {
    $('#edit-locations-wrapper').hide();  
  }

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

