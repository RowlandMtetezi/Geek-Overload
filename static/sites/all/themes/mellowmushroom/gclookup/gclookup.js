$(document).ready(function (){
  
  $('.gift-card-checker-result').hide();
  $('#gift-card-checker-form').submit(function() {
    var balance;
    $('.gift-card-checker-result').hide();
    
    // Fire off a RESTful request to the site's SOAP to ALOHA page..
    $.ajax({
      url: "http://mellowmushroom.com/xml_aloha_soap.php",
      data: { cardNumber: $('#gc-number').val() },
      type: "POST",
      dataType: "XML",
      success: function(data) {
        balance = $(data).find('cardBalance').text();
        if (balance == '0.00') {
          $('#gift-card-checker-result-failure').fadeIn('fast');
        } else {
          $('#gift-card-balance').text('$' + balance);
          $('#gift-card-checker-result-success').fadeIn('fast');          
        }
      }
      
    });
    
    return false;
  });
  
});