Drupal.behaviors.hollerInit = function() {

  $.mask.definitions['1'] = '[01]';
  $.mask.definitions['3'] = '[0123]';
  $('#edit-phone-area-code').mask('999');
  $('#edit-phone-prefix').mask('999');
  $('#edit-phone-suffix').mask('9999');
  $('#edit-phone-area-code-wrapper label').append('<span class="form-required" title="This field is required.">*</span>');
  //console.log($('#taxonomy-json').text());
  var taxonomy = JSON.parse($('#taxonomy-json').text());

  // [Re]populates a select object with new data from the Taxonomy JSON object
  // newSubject is the termID for the parent, which filters the new list
  function refreshSelect(targetObject,newSubject){

    // Only refresh the subject once (at start), and only the topic if the subject isn't 0    
    if ($(targetObject).attr('id') == 'edit-subject' || newSubject != 0)
      $.each(taxonomy, function(k,v) {
        if ((v.parents[0] * 1) == newSubject) {
          targetObject.append('<option value="' + v.tid + '">'+ v.name +'</option>');
        }
      });
  };
  
  
  
  // Repopulate the Topic select when Subject changes.
  $('#edit-subject').change(function(event){
 
    $('#edit-topic').html('');

    // Attempt to repopulate the topic 
    refreshSelect($('#edit-topic'),this.value);
    
    if ($('#edit-topic option').length > 0) {
      $('#edit-topic').prepend('<option value="0" selected>Select a Topic</option>');  
      $('#edit-topic-wrapper').slideDown();  
    } else {
      $('#edit-topic-wrapper').slideUp();//prepend('<option value="0">-----</option>');          
    }
  
  });

  $('#edit-topic').change(function(event){
 
    if ($('#edit-topic option:selected').text() == 'Franchising')
      window.location.replace("http://mellowfranchise.com");
  
  });

  
  // Adjust the store's font if the name is sufficiently long.
  $('#edit-store').change(function(event){
    if ($('#edit-store option:selected').text().length > 30)
      $('#edit-store').css('font-size','10px');
    else 
      $('#edit-store').css('font-size','16px');
  });

  // Populate the Subject select.
  refreshSelect($('#edit-subject'),0);
  
  // Hide the Topic field.
  $('#edit-topic-wrapper').hide();

  
  $('#edit-submit').click(function(event){
    var err = false;
    var subject = $('#edit-subject option:selected').text();
    var topic = $('#edit-topic option:selected').text();

    // Is the store specified, and if not, does it need to be?
    if (($('#edit-store').val() == 0)) {
      $('#edit-store-wrapper').addClass('error');
      err = true;      
    }   
    
    // Is subject specified?
    if ($('#edit-subject').val() == 0) {
      $('#edit-subject-wrapper').addClass('error');
      err = true;
    }
    else if (($('#edit-topic option').length > 1) && ($('#edit-topic').val() == 0)) {
        $('#edit-topic-wrapper').addClass('error');
        err = true;
    }
  
    
    $('.step-2 input').each(function (i,v){
      if ($(v).val().length == 0) {
        err = true;
        $(v).addClass('error');
      }
    });

    if ($('#edit-comments').val().length == 0) {
      err = true;
      $('#edit-comments').addClass('error');
    }

    //$(this).preventDefault();
    if (err)
      return false;
  });
    
  $('.step-2 input, #edit-comments').focus(function() { $(this).removeClass('error');}); 
    
  $('#edit-subject, #edit-topic, #edit-store').focus(function() {
    $(this).parent().removeClass('error');
  });


};