<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Stanford Mobile</title>
<link rel="stylesheet" href="jqm/jquery.mobile-1.3.1.min.css" />
<link href="css/mobile.css?v=1.3" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="jqm/jquery.mobile-1.3.1.min.js"></script>

<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1860414-20']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body class="home">
<!-- Home -->
<div data-role="page" id="home">
<div id="wordmark"> <img src="img/banner/wordmark.png" alt="Stanford" width="119" height="25" /> </div>
  <h2 id="banner">Stanford Mobile</h2>
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li><a rel="external" href="news"><i class="icon-doc"></i> News</a></li>
      <li><a rel="external" href="events"><i class="icon-calendar"></i> Events</a></li>
      <li><a rel="external" href="athletics"><i class="icon-football"></i> Athletics</a></li>
      <li><a href="#maps"><i class="icon-location"></i> Maps &amp; Directions</a></li>
      <li><a href="#contact"><i class="icon-phone"></i> Contact &amp; Directory</a></li>
      <li><a href="#links"><i class="icon-link"></i> Links</a></li>
    </ul>
    <ul data-role="listview" data-inset="true">
      <li data-theme="e"><a href="http://www.stanford.edu/?view=full"><i class="icon-desktop"></i> Full Site</a> </li>
    </ul>
  </div>
  <!-- end content --> 
</div>
<!-- end page --> 

<!-- Maps & Directions -->
<div data-role="page" id="maps">
  <div data-role="header">
    <h1>Maps &amp; Directions</h1>
    <a href="./" data-icon="back" data-iconpos="left" data-direction="reverse" class="ui-btn-right">Back</a> </div>
  <!-- end header -->
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li><a href="http://goo.gl/maps/ieiE" rel="external">Stanford campus</a></li>
      <li><a href="http://goo.gl/maps/xq3d" rel="external">Stanford Stadium</a></li>
      <li><a href="http://goo.gl/maps/Q94F" rel="external">Maples Pavilion</a></li>
      <li><a href="http://goo.gl/maps/UTtp" rel="external">Cantor Arts Center</a></li>
      <li><a href="http://goo.gl/maps/zBpl" rel="external">Tresidder Memorial Union</a></li>
      <li><a href="http://goo.gl/maps/OiAI" rel="external">Bookstore</a></li>
      <li><a href="http://goo.gl/maps/6J74" rel="external">Hoover Tower</a></li>
      <li><a href="http://goo.gl/maps/6J74" rel="external">Memorial Auditorium</a></li>
    </ul>
  </div>
  <!-- end content --> 
</div>
<!-- end page --> 

<!-- Contact -->
<div data-role="page" id="contact">
  <div data-role="header">
    <h1>Contact &amp; Directory</h1>
    <a href="./" data-icon="back" data-iconpos="left" data-direction="reverse" class="ui-btn-right">Back</a> </div>
  <!-- /header -->
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li><a href="tel:6507232300" rel="external">Operator (650) 723-2300</a></li>
      <li><a href="tel:6507232560" rel="external">Visitor Info (650) 723-2560</a></li>
    </ul>
    <ul data-role="listview" data-inset="true">
      <li data-theme="e"> <a href="http://who.stanford.edu">Stanford Directory</a> </li>
    </ul>
  </div>
  <!-- /content --> 
</div>
<!-- /page --> 

<!-- Links -->
<div data-role="page" id="links">
  <div data-role="header">
    <h1>Links</h1>
    <a href="./" data-icon="back" data-iconpos="left" data-direction="reverse" class="ui-btn-right">Back</a> </div>
  <!-- /header -->
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li><a href="#schools">Schools</a></li>
      <li><a rel="external" href="departments/">Departments</a></li>
      <li><a rel="external" href="programs/">Interdisciplinary Programs</a></li>
      <li><a href="http://stanford.edu/admission/" rel="external">Admission</a></li>
      <li><a href="http://library.stanford.edu/" rel="external">Libraries</a></li>
      <li><a href="#hospitals">Hospitals</a></li>
      <li><a rel="external" href="professional/">Professional Education</a></li>
    </ul>
  </div>
  <!-- /content --> 
</div>
<!-- /page --> 

<!-- Schools -->
<div data-role="page" id="schools">
  <div data-role="header">
    <h1>Schools</h1>
    <a href="./#links" data-icon="back" data-iconpos="left" data-direction="reverse" class="ui-btn-right">Back</a> </div>
  <!-- /header -->
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li><a href="http://gsb.stanford.edu" rel="external">Business</a></li>
      <li><a href="http://earthsci.stanford.edu" rel="external">Earth Sciences</a></li>
      <li><a href="http://ed.stanford.edu" rel="external">Education</a></li>
      <li><a href="http://engineering.stanford.edu" rel="external">Engineering</a></li>
      <li><a href="http://humsci.stanford.edu" rel="external">Humanities &amp; Sciences</a></li>
      <li><a href="http://law.stanford.edu" rel="external">Law</a></li>
      <li><a href="http://med.stanford.edu" rel="external">Medicine</a></li>
    </ul>
  </div>
  <!-- /content --> 
</div>
<!-- /page --> 

<!-- Hospitals -->
<div data-role="page" id="hospitals">
  <div data-role="header">
    <h1>Hospitals</h1>
    <a href="./#links" data-icon="back" data-iconpos="left" data-direction="reverse" class="ui-btn-right">Back</a> </div>
  <!-- /header -->
  <div data-role="content">
    <ul data-role="listview" data-inset="true">
      <li><a href="http://stanfordhospital.org" rel="external">Stanford Hospital &amp; Clinics</a></li>
      <li><a href="http://lpch.org" rel="external">Lucile Packard Children's Hospital</a></li>
    </ul>
  </div>
  <!-- /content --> 
</div>
<!-- /page -->

</body>
</html>