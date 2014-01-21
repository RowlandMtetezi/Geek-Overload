$(document).ready(function() {

    var isMobile = {
      Android: function() {
          return navigator.userAgent.match(/Android/i);
      },
      BlackBerry: function() {
          return navigator.userAgent.match(/BlackBerry/i);
      },
      iOS: function() {
          return navigator.userAgent.match(/iPhone|iPad|iPod/i);
      },
      Opera: function() {
          return navigator.userAgent.match(/Opera Mini/i);
      },
      Windows: function() {
          return navigator.userAgent.match(/IEMobile/i);
      },
      any: function() {
          return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
      }
      
    };

    //if(isMobile.any()) alert('Mobile');
    /*
    if (true) {
      $('.dk_fouc').removeClass('dk_fouc');
      if (isMobile.iOS())
        $('.dk_fouc').addClass('is-mobile');
    } else {
      //$jq('#edit-province').dropkick();
    }*/

    //console.log("Adding inlining...");
    $('#store-locator-form #edit-postal-code-wrapper label').addClass('inlined').text('Enter ZIP Code');
    $('#store-locator-form #edit-postal-code-wrapper input').addClass('input-text');
    $('#store-locator-form #edit-city-wrapper label').addClass('inlined').text('Enter a City (Optional)');
    $('#store-locator-form #edit-city-wrapper input').addClass('input-text');
  
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
    
    $('#edit-province').focus(function() {$(this).removeClass('error')});

    $('.store-locator-results .views-row').each(function(k,v) {
    
      var store_newness = $(v).find('.views-field-php-2 .field-content').text();
      var store_status = $(v).find('.views-field-field-store-status-value .field-content').text();
    
      if (store_status == 'temporarily closed')
            $(v).addClass('tempclosed');      
      else if (store_newness == 'Now Open')
            $(v).addClass('nowopen');
      else if (store_newness == 'Coming Soon')
            $(v).addClass('comingsoon');      
      /*else if (store_status == 'under renovation')
            $(v).addClass('renovation');      */
        

    });
  
    /* Prioritize one search function over the other, use the one where user clicks go.
   * Clear other values.
   */
    $("#store-locator-form .form-submit").click(function(event){
      //console.log("Checking...");
      var zip_empty = !($('#store-locator-form #edit-postal-code').val());
      var city_empty = !($('#store-locator-form #edit-city').val());
      var state_empty = !($.trim($('#store-locator-form #edit-province').val()));
      
      if (zip_empty) {
        if (city_empty && state_empty) {
          //console.log('Error on zip.');
          $('#store-locator-form #edit-postal-code-wrapper label').addClass('error');
          return false;
        }
        else if (state_empty) {
          //console.log('Error on state.');
          $('#store-locator-form #edit-province').addClass('error');
          return false;
        }
        // City and State are valid, proceed.
      }
                                
    });
    
    
    // Map stuffs!
    
    var store_coords = JSON.parse($('#markers-json').text());
    //console.log('Store coords loaded.');
    
    map = new OpenLayers.Map("mellowmap");
    map.addLayer(new OpenLayers.Layer.Google("Google Streets",{numZoomLevels: 20}));
 
    var proj = new OpenLayers.Projection("EPSG:4326");
    var projObj = map.getProjectionObject();
 
    // Set the center of the map.
    // Center of the map will default to the center of the continental US with a zoom of 3, unless otherwise specified.
    if ($('#start-coords').text() != '') {
      var startCoords = JSON.parse($('#start-coords').text());      
      var startLon = startCoords.lon; 
      var startLat = startCoords.lat; 
      var startZoom = map.getZoomForResolution(startCoords.range * 2 * 1609 / 546,true) - 1;
      //console.log("Range given was " + startCoords.range + " so the map needs to be " + (startCoords.range * 2) + " miles ("+ (startCoords.range * 2 * 1609) + " meters) across.");
    } else {
      var startLon = -99.755859;
      var startLat = 40.078071;
      var startZoom = 3;
    }
      //console.log("Centered on " + startLon + ", " + startLat);
    
    
    var lonLat = new OpenLayers.LonLat( startLon, startLat)
          .transform(
            proj, // transform from WGS 1984
            projObj // to Spherical Mercator Projection
          );
 
    // test - 15 mile radius
 
    
 
    map.setCenter (lonLat,startZoom);



    //console.log('Projection and zoom set. ' + map.getZoom());
    //console.log("Map Resolution: "+map.resolution);
    //console.log(map.resolutions);
    var size = new OpenLayers.Size(31,35);
    var offset = new OpenLayers.Pixel(-15.5,-17.5);
    var url = '/sites/all/themes/mellowmushroom/store_locator/mellow-icon.png';
    
    var icon = new OpenLayers.Icon(url,size,offset);
 
    var markers = new OpenLayers.Layer.Markers( "Store Locations" );
    map.addLayer(markers);
 
    // Iterate through all the coordinate pairs marked in the JSON object

    var ShroomClass = OpenLayers.Class(OpenLayers.Popup.Anchored, {
      'contentSize': new OpenLayers.Size(151,81),
      'minSize': new OpenLayers.Size(151,81),
      'maxSize': new OpenLayers.Size(151,81),
      'displayClass': 'shroomPopup',
      'closeOnMove': true,
    });


    $.each(store_coords,function(k,v){
        var ll = new OpenLayers.LonLat(v.location_longitude * 1,v.location_latitude * 1).transform(proj,projObj);        
        addShroom(ll,v.node_title,v.nid);        
    });
    
    function addShroom(coords,name,nid) {
    
      var feature = new OpenLayers.Feature(markers,coords); // Put the feature on the markers layer at the coords of the shroom
      feature.closeBox = false;
      feature.popupClass = ShroomClass;
      
      feature.data.popupContentHTML = '<div class="popup-title"><span>' + name + "</span></div><a href=\"/node/" + nid + "\">store's homepage</a>";
      feature.data.overflow = "auto";


      feature.data.popupSize = new OpenLayers.Size(151,81); 
      feature.data.popupBackgroundColor = 'transparent';
      feature.data.icon = new OpenLayers.Icon(url,size,offset);
      
      var marker = feature.createMarker();
      //console.log("Marker:");
      //console.log(marker);
      var markerHover = function (evt) {
        //console.log("markerHover invoked. What is this.popup?");
        //console.log(this.popup);
        if (this.popup == null) {
            //console.log(name + ' was n\'t defined, so we are creating it.');
            this.popup = this.createPopup(this.closeBox);
            this.popup.setBackgroundColor('transparent');
            this.popup.anchor = {'size': new OpenLayers.Size(0,0),'offset': new OpenLayers.Pixel(25,25)};
            this.popup.panMapIfOutOfView = false;
            map.addPopup(this.popup,true); // true = exclusive, remove all other popups first
            this.popup.show();
            
            if ($(this.popup.contentDiv).find('div span').text().length * 1 <= 25) 
              $(this.popup.contentDiv).find('div').textfill({maxFontPixels: 16, explicitHeight: 35, explicitWidth: 120});
            else
              $(this.popup.contentDiv).find('div').textfill({maxFontPixels: 10, explicitHeight: 35, explicitWidth: 120});
        } else {
            if (this.popup.visible()) {
              //console.log(name + ' was visible, so we are destroying it.');
              this.popup.destroy();
              this.popup = null;              
            }
            else {
              //console.log(name + ' wasn\'t visible, so we are destroying and rebuilding it.');
              this.popup.destroy();
              this.popup = null;              
              this.popup = this.createPopup(this.closeBox);
              this.popup.setBackgroundColor('transparent');
              this.popup.anchor = {'size': new OpenLayers.Size(0,0),'offset': new OpenLayers.Pixel(25,25)};
              this.popup.panMapIfOutOfView = false;
              map.addPopup(this.popup,true); // true = exclusive, remove all other popups first
              this.popup.show();
              
              if ($(this.popup.contentDiv).find('div span').text().length * 1 <= 25) 
                $(this.popup.contentDiv).find('div').textfill({maxFontPixels: 16, explicitHeight: 35, explicitWidth: 120});
              else
                $(this.popup.contentDiv).find('div').textfill({maxFontPixels: 10, explicitHeight: 35, explicitWidth: 120});
              
            }
        }
        currentPopup = this.popup;
        //console.log("Map's current popups:");
        //console.log(map.popups);
        OpenLayers.Event.stop(evt);
        
      };
      
      //var markerRemove = function (evt) {
      //  if (this.popup != null)
      //}
      
      marker.events.register('mousedown',feature,markerHover);
      //marker.events.register('mouseout',feature,markerRemove);

      markers.addMarker(marker);

    }
    
});
