// JS routines that should run on any page that uses this theme...

// Causes certain page links to open up in new windows/tabs
function externalizeLinks() {
  // Beer Club
  // Franchising
  // Jobs
  //$('#primary-beer-club').attr('target','_blank');

};

function smoothScrollyAnchors() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
}

$(document).ready(function() {
  
  externalizeLinks();
  smoothScrollyAnchors();
  if ($('a#gearnav-cartcount span').html()==0) {
      $('a#gearnav-cartcount').attr('href', '#');
  }
  
});
