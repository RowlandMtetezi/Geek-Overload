// Handles the scrolly effect for corporate menus.

$(document).ready(function(){

  var scrollDistance = 100;
  var inTransition = false;
  var scrollActive = false;
  // Hide all the secondary views.
  $('.secondary-view, .tertiary-view').hide();
  
  
  
  // Check each portal for size of its contents
  
  // If greater, do this...
  
  // If less than, do this...
  // Vertically center it within the portal.
  // Disappear the arrows, if applicable.
  function initPortal(portal) {
    // Find the visible display within this portal.
    var visibleDisplay = $(portal).find('.view-wrapper:visible .view');
    //console.log("Comparing outer height of portal " + $(portal).outerHeight() + " with height of display " +  $(visibleDisplay).outerHeight());
    if ($(portal).outerHeight() > $(visibleDisplay).outerHeight()) {
      // hide the arrows
      $(portal).next('.arrows').hide();
      // Center the display within the area.
      var padding = Math.floor(($(portal).outerHeight() - $(visibleDisplay).outerHeight()) / 2);
      $(visibleDisplay).css('top',padding);
    } else {
      var portalHeight = $(portal).height();
      var viewHeight = $(visibleDisplay).height();
      var offset = parseInt(visibleDisplay.css('top'));
      var arrowDown = $(portal).next('.arrows').find('.arrow-down');
      var arrowUp = $(portal).next('.arrows').find('.arrow-up');
      
      if ((viewHeight + offset) <= portalHeight) 
        $(arrowDown).addClass('hidden');
      else
        $(arrowDown).removeClass('hidden');
      
      if (offset >= 0) 
        $(arrowUp).addClass('hidden');
      else
        $(arrowUp).removeClass('hidden');
        
      $(portal).next('.arrows').show();
    }
  }

  $('.arrow-down').click(function(e){
  
    if (!inTransition) {
      var portalHeight = $(e.target).parent().prev('.portal').height();
      var thisView = $(e.target).parent().prev().find('.view-wrapper:visible .view');
      var viewHeight = thisView.height(); // outerHeight includes padding and border (and optionally margin). 

      var offset = parseInt(thisView.css('top'));
      if ((viewHeight + offset) > portalHeight) {
        inTransition = true;
        thisView.animate({"top" : "-=" + scrollDistance + "px" },function() { 
        
          // If we are now able to scroll up, show that arrow.
          if (parseInt(thisView.css('top')) < 0) {
            $(e.target).parent().find('.arrow-up').removeClass('hidden');
          }
          if ((viewHeight + parseInt(thisView.css('top'))) <= portalHeight) {
            $(e.target).addClass('hidden');
          }
          inTransition = false; 
        });
      }
      
    }
  });
  
  $('.arrow-up').click(function(e){
    
    if (!inTransition) {
      var portalHeight = $(e.target).parent().prev('.portal').height();
      var thisView = $(e.target).parent().prev().find('.view-wrapper:visible .view');
      var viewHeight = thisView.height(); // outerHeight includes padding and border (and optionally margin). 

      var offset = parseInt(thisView.css('top'));
      if (offset < 0) {
        inTransition = true;
        thisView.animate({"top" : "+=" + scrollDistance + "px" },function() { 
          if (parseInt(thisView.css('top')) >= 0) {
            $(e.target).addClass('hidden');
          }
          if ((viewHeight + parseInt(thisView.css('top'))) > portalHeight) {
            $(e.target).parent().find('.arrow-down').removeClass('hidden');
          }
          inTransition = false; 
        });
      }
      
    }
    
  });
/*
  function doAScrolly(obj, param) {
    var myArrowUp = obj.closest('.section').find('.arrow-up');
    var myArrowDown = obj.closest('.section').find('.arrow-down');
    var viewHeight = obj.height(); // outerHeight includes padding and border (and optionally margin). 
    var portalHeight = obj.closest('.portal').height();
    obj.animate( { "top" : param },100,"linear",function(){
      var newOffset = parseInt(obj.css('top'));

      // Check to see if we need to show or hide arrows.
      if (newOffset < 0 && ($(myArrowUp).hasClass('hidden'))) { // We are not at the top of the view.
          $(myArrowUp).removeClass('hidden');
      }
      if (newOffset >= 0 && !($(myArrowUp).hasClass('hidden'))) { // We are at the top of the view.
          $(myArrowUp).addClass('hidden');
      }
      if (((viewHeight + newOffset) > portalHeight) && ($(myArrowUp).hasClass('hidden'))) {
          $(myArrowDown)
      }
      
       && ($(myArrows).find('.arrow-up').hasClass('hidden'))) {
        $(myArrows).find('.arrow-up').removeClass('hidden');
      } else if ()


      if (scrollActive) 
        doAScrolly(obj,param);
    });
  }

  $('.arrow-down').mousedown(function(e){
    if (!inTransition) {
      scrollActive = true;
      var thisView = $(e.target).parent().prev().find('.view-wrapper:visible .view');
      doAScrolly(thisView,"-=5px");
    }
    
    var height = $()
    
  });
*/
  
  
  $('.primary-tab').click(function(e){
    var mySection = $(e.target).parents('.section').eq(0);
    var primaryView = $(e.target).parent().next('.portal').find('.primary-view');
    var secondaryView = $(e.target).parent().next('.portal').find('.secondary-view');
    var tertiaryView = $(e.target).parent().next('.portal').find('.tertiary-view');
    if (primaryView.css('display') == 'none' && !inTransition) {
      inTransition = true;
      // If secondary was active, deactivate it and fade it out.
      if ($(e.target).siblings('.secondary-tab').hasClass('active')) {
        $(e.target).siblings('.secondary-tab').removeClass('active');
        $(e.target).addClass('active');
        secondaryView.fadeOut(function(){
          primaryView.fadeIn(function(){ 
            initPortal($(e.target).parent().next('.portal'));        
            inTransition = false; 
          });
        });        
      } else
      if ($(e.target).siblings('.tertiary-tab').hasClass('active')) {
        $(e.target).siblings('.tertiary-tab').removeClass('active');
        $(e.target).addClass('active');
        tertiaryView.fadeOut(function(){
          primaryView.fadeIn(function(){ 
            initPortal($(e.target).parent().next('.portal'));        
            inTransition = false; 
          });
        });        
      } 
      
    }
  });
  
  $('.secondary-tab').click(function(e){
    var mySection = $(e.target).parents('.section').eq(0);
    var primaryView = $(e.target).parent().next('.portal').find('.primary-view');
    var secondaryView = $(e.target).parent().next('.portal').find('.secondary-view');
    var tertiaryView = $(e.target).parent().next('.portal').find('.tertiary-view');
    if (secondaryView.css('display') == 'none' && !inTransition) {
      inTransition = true;
      // If primary was active, deactivate it and fade it out.
      if ($(e.target).siblings('.primary-tab').hasClass('active')) {
        $(e.target).siblings('.primary-tab').removeClass('active');
        $(e.target).addClass('active');
        primaryView.fadeOut(function(){
          secondaryView.fadeIn(function(){ 
            initPortal($(e.target).parent().next('.portal'));        
            inTransition = false; 
          });
        });        
      } else
      if ($(e.target).siblings('.tertiary-tab').hasClass('active')) {
        $(e.target).siblings('.tertiary-tab').removeClass('active');
        $(e.target).addClass('active');
        tertiaryView.fadeOut(function(){
          secondaryView.fadeIn(function(){ 
            initPortal($(e.target).parent().next('.portal'));        
            inTransition = false; 
          });
        });        
      } 
    }
    
  });

  $('.tertiary-tab').click(function(e){
    var mySection = $(e.target).parents('.section').eq(0);
    var primaryView = $(e.target).parent().next('.portal').find('.primary-view');
    var secondaryView = $(e.target).parent().next('.portal').find('.secondary-view');
    var tertiaryView = $(e.target).parent().next('.portal').find('.tertiary-view');
    if (tertiaryView.css('display') == 'none' && !inTransition) {
      inTransition = true;
      
      // If primary was active, deactivate it and fade it out.
      if ($(e.target).siblings('.primary-tab').hasClass('active')) {
        $(e.target).siblings('.primary-tab').removeClass('active');
        $(e.target).addClass('active');
        primaryView.fadeOut(function(){
          tertiaryView.fadeIn(function(){ 
            initPortal($(e.target).parent().next('.portal'));        
            inTransition = false; 
          });
        });        
      } else
      // If secondary was active, deactivate it and fade it out.
      if ($(e.target).siblings('.secondary-tab').hasClass('active')) {
        $(e.target).siblings('.secondary-tab').removeClass('active');
        $(e.target).addClass('active');
        secondaryView.fadeOut(function(){
          tertiaryView.fadeIn(function(){ 
            initPortal($(e.target).parent().next('.portal'));        
            inTransition = false; 
          });
        });        
      }
    }
    
  });
  
  $('.section .portal').each(function(k,v){ initPortal(v);});
  //console.log("Ready and loaded.");
  
  
  /*
  $('.arrow-up').mousedown(function(e){});
  
  // No matter where we are on the document, a mouseup stops scroll.
  $(document).mouseup(function(e){
    
  });
  */
  
});


