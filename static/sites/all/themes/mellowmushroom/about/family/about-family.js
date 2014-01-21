$(document).ready(function() {

  $('.view-family-bios .views-row .views-field-field-selected-picture-fid').hide();
  //$('.view-family-bios').css('width','372px');
  // Rollover handler
  $('.view-family-bios .views-row').hover(function(){
    //console.log(this);
    //Fade in the bio's associated callout bubble.
    $(this).find('.views-field-field-main-picture-fid').hide();
    $(this).find('.views-field-field-selected-picture-fid').show();
    $(this).find('.views-field-nothing').fadeIn(200);
  },function(){
    //console.log(this);
    //Fade in the bio's associated callout bubble.
    $(this).find('.views-field-field-selected-picture-fid').hide();
    $(this).find('.views-field-field-main-picture-fid').show();
    $(this).find('.views-field-nothing').hide();
  });
  //console.log("Is this even running?");
  // Click handler
  $('.view-family-bios .views-row').click(function(event){
    
    var self = this;
    //Fade in the bio's associated callout bubble.
    $('#family-bio-full-view').fadeOut(100,function() {
      $(this).html('').show();
      $(self).find('.views-field-nothing-1').clone().appendTo('#family-bio-full-view');
      $('#family-bio-full-view .views-field-nothing-1').css('top','-614px').show().animate({top: '0px'});      
    });
  });
  
  // Startup sequence
  // Roll the first bio's block into place.
  $('.views-row-1 .views-field-nothing-1').clone().appendTo('#family-bio-full-view');
  $('#family-bio-full-view .views-field-nothing-1').show();      
  
});

/*function calibrateBioDots() {
  //console.log("Starting BioDot calibration...");
  // Clear out any existing biodots.
  $('#bio-dots').html('');

  // Count how many bio-slide divs are inside the portal.
  // Create that many bio-dot divs inside the biodots div.  
  $('.bio-slide.visible').each(function(k,v){
    $('#bio-dots').append('<div class="bio-dot"></div>');
  });
  
  // Set the biodots div width to (3 * biodot_width * number of slides)
  $('#bio-dots').css('width', 42 * $('.bio-slide.visible').length);
  $('.bio-dot:first').addClass('active');
  //console.log("Finishing BioDot calibration...");
};

function calibratePortal() {
  //console.log("Starting portal calibration...");
  $('.view-family-bios').css('width', 754 * $('.bio-slide.visible').length);
  //console.log("Finishing portal calibration...");

};

function setBioDot(i) {
  $('.bio-dot').removeClass('active');
  $('.bio-dot').each(function(k,v){
    if (k == i)
      $(v).addClass('active');
  });
  
}

var navIndex = 0;

$(document).ready(function() {
  
  // Ensure "family" link is active and no others.
  $('#primary-about-us').addClass('active');
  
  
  // Initialize the portal.
  
  // Make all slides initially visible.
  $('.bio-slide').addClass('visible');
  calibratePortal();
  calibrateBioDots();
  $('#view-all').addClass('active');
  
  // Click handler for the nav buttons.
  $('.bio-nav').click(function(event){

    var targetID = $(event.target).attr('id');
    var portalWidth = parseInt($('.bio-portal').css('width'));

    // Check which button was clicked
    if ((targetID == 'bio-nav-prev') && navIndex > 0) {
      navIndex--;
      $('.view-family-bios').animate({left: ('+=' + portalWidth)});
      setBioDot(navIndex);
    } else if ((targetID == 'bio-nav-next') && navIndex < (($('.bio-slide.visible').length * 1 ) - 1)) {
      navIndex++;
      $('.view-family-bios').animate({left: ('-=' + portalWidth)});
      setBioDot(navIndex);
    }

  });
  
  // Click handler for the view filters.
  $('.view-button').click(function(event){

      var targetID = $(event.target).attr('id');

      // Allow switch if what we selected isn't the active filter.
      if (!$(event.target).hasClass('active')) {

        $('.view-button').removeClass('active');
        $(event.target).addClass('active');
        // Fade out the portal for the moment, then reset all entries' visibility.
        $('.view-family-bios').fadeOut(function() {
          $('.bio-slide').removeClass('visible');

          switch(targetID) {
            case "view-all"       :
              $('.bio-slide').addClass('visible');
            break;
            case "view-team"      :
              $('.bio-slide.team').addClass('visible');
            break;
            case "view-mushrooms" :
              $('.bio-slide.char').addClass('visible');
            break;
          }

          calibratePortal();
          calibrateBioDots();          
          navIndex = 0;
          setBioDot(navIndex);
          $('.view-family-bios').css('left','0px').fadeIn();
        });

        
      }
      
      event.preventDefault();
    
  });
});*/