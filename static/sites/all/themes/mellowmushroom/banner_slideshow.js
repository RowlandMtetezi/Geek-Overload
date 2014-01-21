$(document).ready(function() {

  $('.pager-item a').each(function(index,element){
    $(element).attr('rel',$(element).text());
    $(element).text('');
  });
  
  
  $('.pager-item').mouseover(function(event) {
    
      $(this).addClass('selectedSlide');  
  }).mouseout(function(event){
      $(this).removeClass('selectedSlide');
  });

  $('#views_slideshow_singleframe_main_misc_queries-block_1 .views-field-field-main-picture-fid a').each(function(index){
    
    //Check if the address is local
    var address = $(this).attr('href');
    if ((address.search(/mellowdev/) == -1) && (address.search(/mellowmushroom\.com/) == -1) )
     $(this).attr('target','_blank');
    
  });

});