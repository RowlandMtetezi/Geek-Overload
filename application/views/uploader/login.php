<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 
'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
  
  <head>
    
  <title>
    PublishMe Login Screen | Welcome 
  </title>
  <!-- Our CSS stylesheet file -->
  
  <link rel="stylesheet" href="
<?php echo base_url();?>
static/css/styles.css" />
  
  <!--[if lt IE 9]>

<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>

<![endif]-->
  </head>
  <body>
    <div style="margin:0 auto; width:300px; padding-left: 32px; margin-top:50px;">
    </div>
    
    
    
    
    <div id="formContainer">
      <form id="login" action='
<?php echo site_url();?>
login/go' method='post' name='go'>
  
  <a href="
<?php echo site_url();?>
login/register" id="flipToRecover" class="flipLink">
  Forgot?
  </a>
  
  <!--
<h2>
User Login
</h2>
-->
  <br />
  
  <!--
<label for='username'>
Username
</label>
-->
  <input type='text' name='username'  id="loginEmail" placeholder="Username" size='32' />
  <br />
  
  <!--
<label for='password'>
Password
</label>
-->
  <input type='password' name='password'  id="loginPass" placeholder="Password" size='32' />
  <br />
  
  
  <input type='Submit' value='Login' />
  
      </form>
      
      
      <form id="recover" action="
<?php echo site_url();?>
login/register"  method="post" name='register'>
  
  <a href="#" id="flipToLogin" class="flipLink">
    Forgot?
  </a>
  <input type="text" name="username" id="loginEmail" placeholder="Username" style="top: 138px;"/>
  <input type="text" name="email" id="loginEmail" placeholder="email" />
  <input type="password" name="password" id="recoverEmail" placeholder="Password" />
  
  <input type="submit" name="submit" value="Register" />
  
      </form>
  </div>
  
  <!-- JavaScript includes -->
  
  <script src="
<?php echo base_url();?>
static/js/jquery-1.7.1.min.js">
  </script>
  
  <script src="
<?php echo base_url();?>
static/js/script.js">
  </script>
  </body>
</html>