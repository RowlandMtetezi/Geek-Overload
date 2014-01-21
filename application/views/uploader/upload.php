<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 
'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
  
  <head>
    
  <title>
    PublishMe Upload Screen 
  </title>
  <!-- Our CSS stylesheet file -->
  
  <link rel="stylesheet" href="
<?php echo base_url();?>
static/css/generic.css" />
  <link rel="stylesheet" href="
<?php echo base_url();?>
static/css/form.css" />
  
  <!--[if lt IE 9]>

<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>

<![endif]-->
  </head>
  <body>
    <center>
      
      <div id="wrap">
        
        <center>
          
          
          <form id=payment enctype="multipart/form-data" action="
<?php echo site_url();?>
profile/upload" method="post" >
  <h1 id="top_name">
  </h1>
  <fieldset>
    <legend>
      File details
    </legend>
    <ol>
      <!--
<li>
<label for=name>
Name
</label>
<input id=name name=name type=text placeholder="Rowland Mtetezi" required autofocus>
</li>
<li>
<label for=email>
Email
</label>
<input id=email name=email type=email placeholder="example@domain.com" required>
</li>
<li>
<label for=phone>
Phone
</label>
<input id=phone name=phone type=tel placeholder=" 254710805009" required>
</li>
-->
          <li>
            <label for=photo>
              File
            </label>
            <input id=photo name=file type=file placeholder="Select file" >
          </li>
          <li>
            <label for=photo>
              Description
            </label>
            <textarea id=message name=description rows=3 required>
            </textarea>
          </li>
      </ol>
  </fieldset>
  
  <fieldset>
    <button type=submit>
      Upload
    </button>
  </fieldset>
  </form>
  
  
  </div>
  
  </center>
  </center>
  <center>
    <div style="font-weight:bold;color:#707EBC;font-size:14px;">
      <a href="faq.html" rel="#overlay" style="text-decoration:none"">
Feedback
</a>
<label style="margin-right:10px;color:#707EBC;">
|
</label>
<a href="faq.html" rel="#overlay" style="text-decoration:none">
FAQ
</a>
<label style="margin-right:10px;color:#707EBC;">
|
</label>
<a href="https://www.facebook.com/rowland.kk"  target="_blank" style="margin-right:10px;">
Rowland Apps
</a>
<label style="margin-right:10px;color:#707EBC;">
|
</label>
<a href="https://twitter.com/RowlandBiznez" class="twitter-follow-button" data-show-count="true" data-lang="en" style="margin-right:10px;">
Follow @RowlandBiznez
</a>
<label style="margin-right:10px;color:#707EBC;">
</div>
<div style='font-size:13px;color:#FFFFFF;'>


<div style="margin-top:10px;">
All graphic items including user interface, design, artwork & software  Copyright &copy; 2010-2013  
<a href="https://www.facebook.com/pages/Stats-Mtaani/395643417150270" target="_blank">
Otieno Rowland
</a>
.
</div>
<div>
All rights reserved.
</div>
<br/>
<span>
<a href="http://agame.ntbmedia.com/agamedev.php/terms" target="_blank" style="margin-right:10px;">
Terms of Service
</a>
<label style="margin-right:10px;color:#707EBC;">
|
</label>
<a href="/privacypolicy" target="_blank" style="margin-right:10px;">
Privacy Policy
</a>
<label style="margin-right:10px;color:#707EBC;">
|
</label>
<a href="#"  style="margin-right:10px;" onclick="facebox_r('reportpop')" >
Report Copyright
</a>
</span>
</div>
</center>
</body>
</html>