   <?php include("gtag_body.php"); ?>
   <header class="header">
     <div class="toggle-menus">
       <span class="menu-text"> Menu </span>
       <button aria-label='Toggle menu' class='nav-button button-lines button-lines-x close' role='button' type='button'>
         <span class='lines'></span>
       </button>
       <!-- logo -->
       <a href="https://girafcreatives.com/uk"> <img class="logo" src="./img/logo.png" alt="logo"> </a>
       <!-- logo -->
     </div>
   </header>
   <?php $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); ?>
   <nav class="nav-wrapper">
     <!-- push logo -->
     <img class="push-logo" src="./img/push-logo.png" alt="logo">
     <!-- push logo -->
     <ul class="nav">
       <li class="<?php echo ($curPageName == "index.php") ? 'active' : '' ?>">
         <a href="index.php"> Home </a>
       </li>
       <li class="<?php echo ($curPageName == "about.php") ? 'active' : '' ?>">
         <a href="about.php"> About Us </a>
       </li>
       <li class="<?php echo ($curPageName == "portfolio.php") ? 'active' : '' ?>">
         <a href="portfolio.php"> Works </a>
       </li>
       <li class="<?php echo ($curPageName == "services.php" || $curPageName == "digital-marketing.php" || $curPageName == "branding.php" || $curPageName == "designing.php" || $curPageName == "web-and-app-development.php" || $curPageName == "photography-and-video-production.php" || $curPageName == "animation.php") ? 'active' : '' ?>">
         <a href="services.php"> Services </a>
       </li>
       <li class="<?php echo ($curPageName == "blogs.php" || $curPageName == "blog-details.php") ? 'active' : '' ?>">
         <a href="blogs.php"> Blogs </a>
       </li>
       <li class="<?php echo ($curPageName == "connect-us.php") ? 'active' : '' ?>">
         <a href="connect-us.php"> Contact Us </a>
       </li>
     </ul>
     <span class="nav-marker"></span>
   </nav>