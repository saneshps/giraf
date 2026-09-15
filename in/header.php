   <?php include("gtag_body.php"); ?>
   <header class="header">
     <div class="toggle-menus">
       <span class="menu-text"> Menu </span>
       <button aria-label='Toggle menu' class='nav-button button-lines button-lines-x close' role='button' type='button'>
         <span class='lines'></span>
       </button>
       <!-- logo -->
       <a href="https://girafcreatives.com/in"> <img class="logo" src="https://girafcreatives.com/in/img/logo.png" alt="logo"> </a>
       <!-- logo -->
     </div>
   </header>
   <?php $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); ?>
   <?php
     $animationActive = in_array($curPageName, [
       "animation.php",
       "2d-animation.php",
       "3d-animation.php"
     ], true);
     $servicesActive = in_array($curPageName, [
       "services.php",
       "digital-marketing.php",
       "branding.php",
       "designing.php",
       "web-and-app-development.php",
       "photography-and-video-production.php",
       "animation.php",
       "2d-animation.php",
       "3d-animation.php"
     ], true);
   ?>
   <nav class="nav-wrapper">
     <!-- push logo -->
     <img class="push-logo" src="./img/push-logo.png" alt="logo">
     <!-- push logo -->
     <ul class="site-nav">
       <li class="<?php echo ($curPageName == "index.php") ? 'active' : '' ?>">
         <a href="index.php"> Home </a>
       </li>
       <li class="<?php echo ($curPageName == "about.php") ? 'active' : '' ?>">
         <a href="about.php"> About Us </a>
       </li>
       <li class="<?php echo ($curPageName == "portfolio.php") ? 'active' : '' ?>">
         <a href="portfolio.php"> Works </a>
       </li>
       <li class="has-submenu <?php echo $servicesActive ? 'active is-open' : '' ?>">
         <button type="button" class="nav-parent" aria-expanded="<?php echo $servicesActive ? 'true' : 'false' ?>" aria-controls="services-submenu">
           <span class="nav-parent-label">Services</span>
           <span class="nav-chevron" aria-hidden="true"></span>
         </button>
         <ul class="nav-submenu" id="services-submenu">
           <li class="<?php echo ($curPageName == "branding.php") ? 'is-current' : '' ?>">
             <a href="branding.php"><span class="sub-index">01</span><span class="sub-label">Branding</span></a>
           </li>
           <li class="<?php echo ($curPageName == "digital-marketing.php") ? 'is-current' : '' ?>">
             <a href="digital-marketing.php"><span class="sub-index">02</span><span class="sub-label">Digital Marketing</span></a>
           </li>
           <li class="<?php echo ($curPageName == "designing.php") ? 'is-current' : '' ?>">
             <a href="designing.php"><span class="sub-index">03</span><span class="sub-label">Creative Designing</span></a>
           </li>
           <li class="<?php echo ($curPageName == "web-and-app-development.php") ? 'is-current' : '' ?>">
             <a href="web-and-app-development.php"><span class="sub-index">04</span><span class="sub-label">Website Design &amp; Development</span></a>
           </li>
           <li class="has-nested <?php echo $animationActive ? 'is-current' : '' ?>">
             <div class="nav-sub-item">
               <a href="animation.php"><span class="sub-index">05</span><span class="sub-label">Animation Services</span></a>
               <button type="button" class="nav-nested-toggle" aria-expanded="false" aria-controls="animation-nested">
                 <span class="nav-chevron" aria-hidden="true"></span>
               </button>
             </div>
             <ul class="nav-nested" id="animation-nested">
               <li class="<?php echo ($curPageName == "2d-animation.php") ? 'is-current' : '' ?>">
                 <a href="2d-animation.php"><span class="sub-label">2D Animation</span></a>
               </li>
               <li class="<?php echo ($curPageName == "3d-animation.php") ? 'is-current' : '' ?>">
                 <a href="3d-animation.php"><span class="sub-label">3D Animation</span></a>
               </li>
             </ul>
           </li>
           <li class="<?php echo ($curPageName == "photography-and-video-production.php") ? 'is-current' : '' ?>">
             <a href="photography-and-video-production.php"><span class="sub-index">06</span><span class="sub-label">Product Explanatory Videos</span></a>
           </li>
           <li class="nav-submenu-all <?php echo ($curPageName == "services.php") ? 'is-current' : '' ?>">
             <a href="services.php"><span class="sub-label">View all services</span><span class="sub-arrow" aria-hidden="true">→</span></a>
           </li>
         </ul>
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
   <script>
     (function () {
       var parents = document.querySelectorAll(".has-submenu > .nav-parent");
       parents.forEach(function (btn) {
         btn.addEventListener("click", function (e) {
           e.preventDefault();
           e.stopPropagation();
           var item = btn.closest(".has-submenu");
           if (!item) return;
           var willOpen = !item.classList.contains("is-open");

           document.querySelectorAll(".has-submenu.is-open").forEach(function (openItem) {
             if (openItem === item) return;
             openItem.classList.remove("is-open");
             var openBtn = openItem.querySelector(":scope > .nav-parent");
             if (openBtn) openBtn.setAttribute("aria-expanded", "false");
           });

           item.classList.toggle("is-open", willOpen);
           btn.setAttribute("aria-expanded", willOpen ? "true" : "false");
         });
       });

       document.querySelectorAll(".nav-nested-toggle").forEach(function (btn) {
         btn.addEventListener("click", function (e) {
           e.preventDefault();
           e.stopPropagation();
           var item = btn.closest(".has-nested");
           if (!item) return;
           var willOpen = !item.classList.contains("is-open");
           item.classList.toggle("is-open", willOpen);
           btn.setAttribute("aria-expanded", willOpen ? "true" : "false");
         });
       });
     })();
   </script>
