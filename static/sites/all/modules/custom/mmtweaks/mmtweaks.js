$(document).ready(function() {

  // Are we on a node edit page?
  if(/\/node\/.*\/edit/.test(window.location.pathname)) {

    // Is it for a store?
    if ($('body').hasClass('node-type-store')) {

      // Then trigger the admin toolbar's tab-switching method as if we clicked on the Store Admin tab.
      Drupal.adminToolbar.tab($('#admin-toolbar'), $('.admin-tab.block-5'), false);
    }
  }

  // Hide the old store comment category dropdowns (but leave present for validation).
  $('#node-form .hierarchical-select-wrapper-for-name-edit-taxonomy-3').parent().hide();

});


