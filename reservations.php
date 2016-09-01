<!DOCTYPE html>
<html lang="en">
<head>
<title>Le Expensziv</title>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
 <div id="wrapper">

  <!-- Logo image -->
  <header role="banner">
    <img src="images/logo.png" class="desktop" width="400" height="200" alt="Le Expensziv Logo">
	<img src="images/logo_sm.png" class="mobile" width="200" height="100" alt="Le Expensziv Logo">
  </header>
  
  <!--  Navigation -->
  <nav role="navigation">
   <ul class="navfade">
    <li><a href="index.html">HOME</a></li>
    <li><a href="about.html">ABOUT</a></li>
    <li><a href="menu.html">MENU</a></li>
    <li><a href="reservations.html">RESERVATIONS</a></li>
    <li><a href="contact.html">CONTACT</a></li>
   </ul>
  </nav>
 
  <!-- Splash image -->
  <div id="splash_home"></div>
 
  <!-- reference the ID by linking to #content -->
  <main id="content" role="main">
  
   <p class="centered">BOOK A TABLE</p>
  
   <p class="centered">Thank you, <strong><?php echo $_POST["fname"]; ?></strong>!</p>

   <p class="justified">
   We have received your request for a table for <strong><?php echo $_POST["guests"]; ?></strong> guests
   on <strong><?php echo $_POST["date"]; ?></strong> at <strong><?php echo $_POST["time"]; ?></strong>, as well as any comments that were included.<br><br>
   We will contact you and offer to reschedule if a table that meets your needs is unavailable at that time. If you have any questions or concerns, please call <a href="tel:+17739293100">(773)929-3100</a>.</p>
  
   <p class="centered"><em>Thank you for your interest in Le Expensziv!</em></p>

   <!-- Footer -->
   <footer role="contentinfo">
    Le Expensziv<br>
	322 W Armitage Ave<br>
	Chicago, IL 60614<br>
	<div class="mobile"><a href="tel:+17739293100">(773)929-3100</a><br></div>
	<div class="desktop">(773)929-3100<br></div>
    
	<!-- Social media icons -->
    <div id="social">
     <ul>
      <li><a href="http://www.facebook.com" target="blank">&#xe227;</a></li>
      <li><a href="http://www.instagram.com" target="blank">&#xe300;</a></li>
      <li><a href="http://www.twitter.com" target="blank">&#xe286;</a></li>
     </ul>
    </div>
   </footer>
  </main>
 
 </div> 
</body>

</html>