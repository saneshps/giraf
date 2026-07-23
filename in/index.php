<?php include('db_connect.php');
$sql = "SELECT blogs.*, websites.*, blogs.created_at as created_at, 
               blog_translations.blog_title, blog_translations.blog_description, 
               blog_translations.slug, blog_translations.image_alt, blog_translations.blog_image_alt,
               blogs.image as default_image
        FROM blogs
        JOIN websites ON blogs.website_id = websites.id
        LEFT JOIN blog_translations ON blogs.id = blog_translations.blog_id AND blog_translations.language = 'en'
        WHERE blogs.status = 'active'
          AND blogs.deleted_at IS NULL
          AND blog_translations.deleted_at IS NULL
          AND websites.name LIKE '%giraf%'  
          ORDER BY blogs.created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Giraf is a top digital marketing agency in India, with branches in Germany and the United States. For all types of creative work, connect with us.">
    <title> Giraf Creatives| Best Advertising Agency in India </title>
    <!-- canonical -->
    <link href="https://girafcreatives.com/in" rel="canonical">
    <!--// canonical -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <!-- google font -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!--// bootstrap -->
    <!-- animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--// animate -->
    <!-- swiper -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!--// swiper -->

    <!-- testimonials -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <!--// testimonials -->

    <!-- video -->
    <link rel="stylesheet" href="https://dayapuram.org/FrontendAsset/css/magnific-popup.css">
    <!-- video -->

    <!-- text-loop -->
    <link rel="stylesheet" href="./css/text-loop.css">
    <!-- text-loop -->

    <!-- slick -->
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/slick.theme.css">
    <!-- slick -->
    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="shortcut icon" href="./img/favicon-16x16.png">
    <link rel="shortcut icon" href="./img/favicon-32x32.png">

    <!-- humberger menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <!-- humberger menu -->

    <!-- testimonials -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <!-- testimonials -->

    <!-- fancy box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- fancy box -->

    <!-- CookieConsent -->
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/35eaccce22fb0d051cda9731c9be6e07.js">
    </script>
    <!-- CookieConsent -->

    <?php include("gtag_head.php"); ?>
</head>

<body>
    <!-- =====================
          HEADER START
     ===================== -->


    <?php include('header.php'); ?>


    <!-- =====================
          HEADER END
     ===================== -->


    <!-- =====================
          HERO AREA START
     ===================== -->
    <!-- <section>
    <div class="banner-area">
      <img src="./img/hero.jpg" alt="banner">
    </div>
  </section> -->
    <!-- =====================
          HERO AREA END
     ===================== -->



    <!-- ======================
          SLIDER AREA START
     ======================== -->
    <section class="home-header">
        <div class="home-header__content">
            <div class="slider-container">
                <div class="slider-text">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-text__slide">
                            <h1> Stand Tall <br>
                                <span> Stand Apart </span>
                            </h1> 

                            <div class="read-more mt-3">
                                <a href="connect-us.php" class="btn btn-lg">
                                    Contact Us
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>


                        </div>



                    </div>
                </div>

                <div class="slider-img">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slider-img__slide">
                            <div class="slider-img__bg" style="background-image: url(./img/hero.png);"
                                data-swiper-parallax="20%">
                            </div>
                        </div>


                    </div>
                </div>



            </div>

        </div>
    </section>

    <!-- =====================
          SLIDER AREA END
     ===================== -->


    <!-- =======================
          ABOUT HOME AREA START
        ======================== -->
    <section class="about-home-area">
        <div class="main-box">
            <div class="container">
                <div class="row">

                    <!-- col-md-4 -->
                    <div class="col-xl-4 col-lg-4 col-md-12 about-home-first">
                        <h6> ABOUT US </h6>
                        <h4> A bunch of creative, out-of-the-box thinkers who can catapult your brand to greater heights
                        </h4>
                    </div>
                    <!--// col-md-4 -->


                    <!-- col-md-8 -->
                    <div class="col-xl-8 col-lg-8 col-md-12 about-home-scnd">
                        <p> We aren't much different from you. We are equally ambitious. Beyond that, we possess a
                            certain set of skills that will make us think beyond the boundaries. Crafting unique and
                            thought-provoking digital marketing creatives. </p>
                    </div>
                    <!--// col-md-8 -->

                    <!-- =============== BUTTON =================== -->
                    <div class="read-more">
                        <a href="about.php" class="btn btn-lg">
                            View More
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                    <!-- =============== BUTTON =================== -->

                </div>
            </div>
        </div>
    </section>
    <!-- =====================
          ABOUT HOME AREA END
        ====================== -->


    <!-- =======================
           TEXT LOOP AREA START
        ======================== -->
    <section class="text-loop-area">
        <div class="loop-overlay"></div>
        <div class="l">
            Digital Marketing | Branding | Designing | Web and App Development | Product Explanatory Videos | Animation
        </div>
        <div class="r">
            Digital Marketing | Branding | Designing | Web and App Development | Product Explanatory Videos | Animation
        </div>
    </section>

    <!-- =====================
          TEXT LOOP AREA END
        ====================== -->


    <!-- ======================
           PORTFOLIO AREA END
        ======================= -->
    <section class="portfolio-area">
        <div class="main-box">
            <div class="container">
                <div class="row">

                    <!-- col-md-4 -->
                    <div class="col-xl-4 col-lg-4 col-md-12 about-home-first">
                        <h6> WORKS </h6>
                        <h4> Ignite your Brand image with Giraf. </h4>
                    </div>
                    <!--// col-md-4 -->


                    <!-- col-md-8 -->
                    <div class="col-xl-8 col-lg-8 col-md-12 about-home-scnd">
                        <p> Reinventing digital creativeness and building thought-provoking ideas. Efficient,
                            profitable,
                            and competitive digital marketing strategies. Not only creating successful brands but also
                            creating
                            unforgettable memories with them. Conceptualization and presentation of incredible ideas by
                            Team Giraf,
                            please check it out here.

                        </p>
                    </div>
                    <!--// col-md-8 -->



                </div>





            </div>

            <div class="row portfolio-boxes hm-portfolio-bx">


                <!-- ======== Home page portfolio boxes ======== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="hm-portfolio-single-box">
                        <div class="row">

                            <!-- col-xl-6 -->
                            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-page-box">
                                <div class="box">
                                    <a data-fancybox="gallery"
                                        href="./img/services/branding/store-to-go-eid-al-adha.jpg">
                                        <img src="./img/services/branding/store-to-go-eid-al-adha.jpg"
                                            alt="Eid al adha">
                                    </a>
                                </div>
                            </div>
                            <!-- col-xl-6 -->

                            <!-- col-xl-6 -->
                            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-page-box">
                                <div class="box">
                                    <a data-fancybox="gallery" href="./img/services/branding/Calendar-2025.jpg">
                                        <img src="./img/services/branding/Calendar-2025.jpg" alt="Eid al adha">
                                    </a>
                                </div>
                            </div>
                            <!-- col-xl-6 -->

                            <!-- col-xl-12 -->
                            <div class="col-xl-12 col-lg-12 col-md-12 portfolio-videos-area">
                                <div class="video-1">
                                    <div class="portfolio-page-box corporate">
                                        <img src="./img/portfolio/videography/Neo-Intro-Video.jpg"
                                            alt="Neo Intro Video">
                                        <div class="hero-video"> <a href="https://www.youtube.com/watch?v=Li2mhnCfPlY"
                                                class="video-play-btn1 popup-video"> <i class="icofont-play-alt-3"></i>
                                                <div class="center1">
                                                    <div class="pulse1"> <i class="fas fa-play"></i> </div>
                                                </div>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col-xl-12 -->


                        </div>

                    </div>
                </div>
                <!-- ======== Home page portfolio boxes ======== -->

                <!-- ======== Home page portfolio boxes ======== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="hm-portfolio-single-box">
                        <div class="row">
                            <!-- col-xl-12 -->
                            <div class="col-xl-12 col-lg-12 col-md-12 portfolio-videos-area">
                                <div class="video-1">
                                    <div class="portfolio-page-box corporate">
                                        <img src="./img/portfolio/videography/yes-openhouse-2025.jpg"
                                            alt="YES Open House 2025| Promotion Video">
                                        <div class="hero-video"> <a href="https://www.youtube.com/watch?v=geMtgE6RmTQ"
                                                class="video-play-btn1 popup-video"> <i class="icofont-play-alt-3"></i>
                                                <div class="center1">
                                                    <div class="pulse1"> <i class="fas fa-play"></i> </div>
                                                </div>
                                            </a> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- col-xl-12 -->

                            <!-- col-xl-6 -->
                            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-page-box">
                                <div class="box">
                                    <a data-fancybox="gallery" href="./img/services/web/logistica.jpg">
                                        <img src="./img/services/web/logistica.jpg" alt="web design">
                                    </a>
                                </div>
                            </div>
                            <!-- col-xl-6 -->

                            <!-- col-xl-6 -->
                            <div class="col-xl-6 col-lg-6 col-md-6 portfolio-page-box">
                                <div class="box">
                                    <a data-fancybox="gallery"
                                        href="./img/services/branding/kistler-app-poster-change.jpg">
                                        <img src="./img/services/branding/kistler-app-poster-change.jpg"
                                            alt="APP development">
                                    </a>
                                </div>
                            </div>
                            <!-- col-xl-6 -->

                        </div>

                    </div>
                </div>
                <!-- ======== Home page portfolio boxes ======== -->


            </div>


            <!-- main box -->
            <div class="main-box">
                <div class="container">
                    <div class="row">

                        <!-- col-md-8 -->
                        <div class="col-xl-8 col-lg-10 col-md-10 col-xs-12 mx-auto portfolio-p">
                            <p> We know, now you are curious to see more works. Each of our projects is differentiated
                                by the vibrant
                                design crafted by our design team. You can see some client-satisfying work done by our
                                incredible team.
                            </p>
                        </div>
                        <!--// col-md-8 -->

                        <!-- =============== BUTTON =================== -->
                        <div class="read-more">
                            <a href="portfolio.php" class="btn btn-lg">
                                More Works
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                        <!-- =============== BUTTON =================== -->

                    </div>
                </div>
            </div>
        </div>
        <!-- main box -->
    </section>
    <!-- =======================
           PORTFOLIO AREA START
        ======================== -->


    <!-- =============================
          SERVICES HOME AREA START
        ============================ -->
    <section class="services-home-area">
        <div class="main-box">
            <div class="container">
                <div class="row">

                    <!-- col-md-4 -->
                    <div class="col-xl-5 col-lg-5 col-md-12 services-home-first">
                        <h6> SERVICES </h6>
                        <h4> We stay local but we play global </h4>
                    </div>
                    <!--// col-md-4 -->


                    <!-- col-md-8 -->
                    <!-- <div class="col-xl-8 col-lg-8 col-md-12 services-home-scnd">
            <p> We are providing services for your company’s tip-to-toe development.
              We are here to build your company in a creative way. To help you to reach
              the success milestone. Yeah, competition is increasing day by day and you
              need a different story for the customer, to make the people listen to you,
              follow you, and become your fan. </p>
          </div> -->
                    <!--// col-md-8 -->



                </div>

                <div class="row services-home">
                    <img class="serv-giraf" data-aos="fade-left" data-aos-duration="2000"
                        src="./img/services/services-1.png" alt="giraf">
                    <ul>
                        <li>

                            <h2> <a href="branding.php"> Branding </a> </h2>
                            <h2> <a href="designing.php"> Designing </a> </h2>
                            <h2> <a href="digital-marketing.php"> Digital Marketing </a> </h2>
                            <h2> <a href="animation.php"> Animation </a> </h2>
                            <h2> <a href="photography-and-video-production.php"> Product Explanatory Videos </a> </h2>
                            <h2> <a href="web-and-app-development.php"> Web & App Development </a> </h2>


                        </li>
                    </ul>

                    <!-- =============== BUTTON =================== -->
                    <div class="read-more">
                        <a href="services.php" class="btn btn-lg">
                            Our Services
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                    <!-- =============== BUTTON =================== -->

                </div>
            </div>
        </div>
    </section>
    <!-- ==========================
          SERVICES HOME AREA END
       ========================= -->

    <!-- ==========================
          TEAM HOME AREA START
       ========================= -->
    <section class="team-home-area">
        <div class="main-box">
            <div class="container">
                <div class="row">

                    <!-- team text -->
                    <div class="col-xl-3 col-lg-4 col-md-3 team-text">
                        <h6> TEAM </h6>
                        <h4> They can turn you into a Giraf </h4>

                        <!-- =============== BUTTON =================== -->
                        <div class="read-more">
                            <a href="about.php" class="btn btn-lg">
                                View More
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                        <!-- =============== BUTTON =================== -->
                    </div>
                    <!-- team text -->


                    <!-- team slide -->
                    <div class="col-xl-9 col-lg-8 col-md-9 position-relative">
                        <div class="team-pic">
                            <!-- Swiper -->
                            <div class="swiper teamSlider">
                                <div class="swiper-wrapper">


                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/arun.jpg" alt="arun">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Arun Asokan </h3>
                                                <span class="post"> Manager </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Kavya-V-Sagar.jpg" alt="Kavya-V-Sagar">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Kavya Sagar </h3>
                                                <span class="post"> Technical Advisor </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Dibin-Kumar-C.jpeg" alt="Dibin-Kumar-C">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Dibin Kumar  </h3>
                                                <span class="post"> Technical Lead </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/gokul.jpg" alt="Gokul">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Gokul Nandan </h3>
                                                <span class="post"> Creative Head </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->



                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/basil.jpg" alt="Basil">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Basil </h3>
                                                <span class="post"> Animation Team Lead </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/divya.jpg" alt="divya">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Divya Chacko </h3>
                                                <span class="post"> SEO Team Lead  </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Sanesh.jpg" alt="Sanesh">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Sanesh P S </h3>
                                                <span class="post"> Front-End Team Lead </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Safwan.jpg" alt="Safwan">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Safwan V </h3>
                                                <span class="post"> Mobile App Team Lead </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->



                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Iyas-Ali.jpg" alt="Iyas Ali">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Iyas Ali </h3>
                                                <span class="post"> Ul / UX </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Anu.png" alt="Anu">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Anu </h3>
                                                <span class="post"> Animator </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/sreerag.jpg" alt="Sreerag">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Sreerag </h3>
                                                <span class="post"> Animator </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->


                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/hadi.jpg" alt="hadi">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Hadi </h3>
                                                <span class="post"> Graphic Designer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Mubasheer.jpg" alt="Mubasheer">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Mubashir C </h3>
                                                <span class="post"> Multimedia Specialist </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    
                                       <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Althaf.jpg" alt="Althaf">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Althaf Banna </h3>
                                                <span class="post"> Rigging Artist </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/akhila.jpg" alt="akhila">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Akhila Sasidharan </h3>
                                                <span class="post"> Team Lead Laravel </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->



                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/salih.jpeg" alt="Muhammed Salih">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Muhammed Salih </h3>
                                                <span class="post"> Senior Laravel Developer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/muhsin.jpg" alt="Muhsin">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Muhammed Muhsin </h3>
                                                <span class="post"> Senior Laravel Developer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->



                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/abhijith.jpg" alt="Abhijith">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Abhijith Joshy </h3>
                                                <span class="post"> Laravel Developer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->


                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/pranav.jpg" alt="Pranav">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Pranav Pradeep </h3>
                                                <span class="post"> MERN Stack Developer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->



                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/safna.jpg" alt="Safna P P">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Safna </h3>
                                                <span class="post"> Senior WordPress Developer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/sneha.jpg" alt="Sneha Rameshan">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Sneha Rameshan </h3>
                                                <span class="post"> Front-End-Developer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/lijosh.jpeg" alt="Lijosh">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Lijosh </h3>
                                                <span class="post"> Flutter Developer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/jisna-liya.jpeg" alt="Jisna Liya">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Jisna Liya </h3>
                                                <span class="post"> Flutter Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Vishnumaya.jpg" alt="Vishnumaya">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Vishnumaya </h3>
                                                <span class="post"> UI UX Designer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/reefath.jpg" alt="Reefath">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Reefath </h3>
                                                <span class="post"> Software Tester </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->






                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Vyshnavi.jpg" alt="Vyshnavi">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Vyshnavi </h3>
                                                <span class="post"> Content Writer </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                      <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                            <img src="./img/team/Fayis.jpg" alt="Fayis">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Fayis Muhammed </h3>
                                                <span class="post"> Copywriter </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/babisha.jpg" alt="babisha">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Babisha N S </h3>
                                                <span class="post"> Accountant </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->


                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Subin.jpg" alt="Subin">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Subin Nath</h3>
                                                <span class="post"> SEO Analyst </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/vishnu.jpg" alt="Vishnu">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Vishnu G P </h3>
                                                <span class="post"> SEO Analyst </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->


                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/maneesh.jpg" alt="Maneesh">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Maneesh </h3>
                                                <span class="post"> SEO Analyst </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/vishnu-prasannan.jpg" alt="Vishnu P">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Vishnu Prasannan </h3>
                                                <span class="post"> SEO Analyst </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <div class="our-team">
                                            <div class="pic">
                                                <img src="./img/team/Adarsh.jpeg" alt="Adarsh">

                                            </div>
                                            <div class="team-content">
                                                <h3 class="title"> Adarsh Madhavan </h3>
                                                <span class="post"> Performance Marketer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- slide -->



                                </div>
                                <div class="prev-next">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>

                                </div>
                                <!-- <div class="swiper-pagination"></div> -->
                            </div>

                            <!-- =============== BUTTON =================== -->
                            <div class="read-more">
                                <a href="about.php" class="btn btn-lg">
                                    View More
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                            <!-- =============== BUTTON =================== -->


                        </div>



                    </div>
                    <!-- team slide -->


                </div>
            </div>
        </div>
    </section>
    <!-- == ========================
          TEAM HOME AREA END
       ========================= -->


    <!-- == ========================
          CLIENTS HOME AREA START
       ========================= -->
    <section class="clients-home-area">
        <div class="main-box">
            <div class="container">
                <div class="row">

                    <!-- col-md-4 -->
                    <div class="col-xl-4 col-lg-4 col-md-12 clients-home-first">
                        <h6> CLIENTS </h6>
                        <h4> Those who believed in us. </h4>
                    </div>
                    <!--// col-md-4 -->


                    <!-- col-md-8 -->
                    <div class="col-xl-8 col-lg-8 col-md-12 clients-home-scnd">
                        <p> People who dared to dream beyond the sky. People who are close to our hearts.
                            People who choose us through their way to success. </p>
                    </div>
                    <!--// col-md-8 -->
                </div>
            </div>
        </div>
    </section>


    <section class="customer-logos slider">
        <div class="slide">
            <img src="./img/clients/ym-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/ya-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/rh-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/sg-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/frank.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/franz-olsen.jpeg" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/kistler.jpeg" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/logistica.jpeg" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/patchsnatched.jpeg" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/sbr.jpg" alt="clients">
        </div>

        <div class="slide">
            <img src="./img/clients/tt-logo.png" alt="clients">
        </div>

        <div class="slide">
            <img src="./img/clients/nice-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/ms-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/hytekmarketing.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/mh-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/id-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/hs-logo.png" alt="clients">
        </div>
        <div class="slide">
            <img src="./img/clients/daya-logo.png" alt="clients">
        </div>



    </section>

    <!-- == ========================
          CLIENTS HOME AREA END
       ========================= -->

    <!-- ===============================
          TESTIMONIALS HOME AREA START
       =============================== -->
    <section class="testimonials-home-area">
        <div class="main-box">
            <div class="container">
                <div class="row">

                    <!-- team text -->
                    <div class="col-xl-5 col-lg-4 col-md-4 testimonials-text">
                        <h6> CLIENT TESTIMONIALS </h6>
                        <h4> They have something to say and those words are our motivation. </h4>


                    </div>
                    <!-- team text -->


                    <!-- team slide -->
                    <div class="col-xl-7 col-lg-8 col-md-8 position-relative">
                        <div class="testimonials-pic">

                            <div class="demo">

                                <div id="testimonial-slider" class="owl-carousel">

                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="./img/testimonials/Lekhraj-Katariya.jpg" alt="Lekhraj Katariya">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3 class="title"> Lekhraj Katariya </h3>
                                            <span class="post"> Managing Director - Hytek Marketing </span>
                                            <p class="description">
                                                Working with Giraf has been a game-changer for our business. Their
                                                expertise and strategies have helped us reach
                                                a wider audience and significantly increase our online presence. Their
                                                tailored approach to our
                                                specific industry has been instrumental in attracting quality leads and
                                                generating sales.
                                                The team is professional, responsive, and dedicated to delivering
                                                results.


                                            </p>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="./img/testimonials/Aiswarya-R-Nair.jpg" alt="Aiswarya R Nair">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3 class="title"> Aiswarya R Nair </h3>
                                            <span class="post"> Marketing Manager - YES machinery </span>
                                            <p class="description">
                                                We’re truly impressed. Impressed on their quick response, their
                                                technical know-how, promptness. <br>

                                                They’re doing a commendable job on our website development and SEO
                                                activities.
                                                We’re extremely happy with our new website and have been receiving a lot
                                                of compliments about it
                                                from our customers and dealers and the increase in enquiries we receive
                                                is quite noticeable.
                                                It’s a great pleasure to work with them for the past 3+years. Would
                                                surely recommend this team if
                                                you’re looking for best website development and digital marketing
                                                services.


                                            </p>
                                        </div>
                                    </div>

                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="./img/testimonials/Prithviraj-Katariya.jpg" alt="">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3 class="title"> Prithviraj Katariya </h3>
                                            <span class="post"> Founder - Rack O Van </span>
                                            <p class="description">
                                                I had the pleasure of working with Giraf and I must say they exceeded my
                                                expectations.
                                                They developed a customized digital marketing plan for my business that
                                                not only addressed
                                                our specific needs, but also incorporated innovative ideas to stay ahead
                                                of the competition.
                                                Their attention to detail and commitment to delivering quality work has
                                                made them my go-to
                                                choice for all my digital marketing needs.


                                            </p>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- team slide -->


                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
          TESTIMONIALS HOME AREA END
       ============================== -->


    <!-- =============================
          BLOGS HOME AREA START
        ============================ -->
    <section class="blogs-home-area">

        <div class="main-box">
            <img class="home-blog-giraf" src="./img/blogs/home-blog-giraf.png" alt="giraf">
            <div class="container">
                <div class="row">

                    <!-- col-md-4 -->
                    <div class="col-xl-4 col-lg-4 col-md-12 blogs-home-first">
                        <h6> BLOGS </h6>
                        <h4> Let’s improve together by sharing our knowledge </h4>
                    </div>
                    <!--// col-md-4 -->


                    <!-- col-md-8 -->
                    <div class="col-xl-8 col-lg-8 col-md-12 blogs-home-scnd">
                        <p> We are people who like to share our knowledge and experience with you. We want you
                            to know and understand how digital marketing can develop your business. You should know the
                            right method for the success of your business. Please don't forget to check this area for
                            new updates.
                        </p>
                    </div>
                    <!--// col-md-8 -->



                </div>

                <div class="row blogs-home">

                    <div class="blog-slider">
                        <div class="swiper bloghomeSwiper">
                            <div class="swiper-wrapper">
                                <!-- 1 -->
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {

                                ?>
                                        <div class="swiper-slide">
                                            <div class="row">
                                                <div class="col-xl-5 bloghomeSwiper-pic">
                                                    <img src="https://bigleap.tech/cms/storage/app/public/<?= isset($row['default_image']) ? $row['default_image'] : $row['blog_image']; ?>"
                                                        alt="<?= isset($row['image_alt']) ? $row['image_alt'] : (isset($row['blog_image_alt']) ? $row['blog_image_alt'] : ''); ?>">
                                                </div>
                                                <div class="col-xl-7 bloghomeSwiper-details">
                                                    <h2> <?php echo isset($row['blog_title']) ? $row['blog_title'] : ''; ?>
                                                    </h2>
                                                    <p><?php echo isset($row['blog_description']) ? implode(' ', array_slice(explode("\n", strip_tags($row['blog_description'])), 0, 1)) : ''; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                <?php  }
                                }
                                ?>
                                <!-- 1 -->
                                <!-- 1 -->

                                <!-- 1 -->
                                <!-- 1 -->

                                <!-- 1 -->
                                <!-- 2 -->

                                <!-- 2 -->



                            </div>

                            <div class="swiper-pagination"></div>
                        </div>


                        <!-- =============== BUTTON =================== -->
                        <div class="read-more">
                            <a href="blogs.php" class="btn btn-lg">
                                More blogs
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                        <!-- =============== BUTTON =================== -->
                    </div>


                </div>


            </div>
        </div>
    </section>
    <!-- ==========================
                BLOGS HOME AREA END
             ========================= -->


    <!-- ======================
          FOOTER AREA START
       ====================== -->
    <?php include('footer.php'); ?>

    <!-- =====================
          LINES AREA START
       ===================== -->
    <div class="wgl-body-lines">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- =====================
        LINES AREA END
      ===================== -->
    <!-- =====================
          FOOTER AREA END
       ===================== -->











    <!-- =====================
          JS AREA START
     ===================== -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
     integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
     crossorigin="anonymous"></script> -->

    <!-- swiper -->

    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="./js/main.js"></script>
    <!-- back to top -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="./js/script.js"></script>
    <!--// back to top -->



    <!-- video -->
    <script src="https://dayapuram.org/FrontendAsset/js/jquery.magnific-popup.min.js"></script>
    <script src="https://dayapuram.org/FrontendAsset/js/aos.js"></script>
    <script src="https://dayapuram.org/FrontendAsset/js/youtube.js"></script>
    <!-- video -->


    <!-- slider -->
    <script src="./js/slider.js"></script>
    <script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.0/swiper-bundle.min.js'></script> -->
    <!-- slider -->


    <!-- humberger menu -->
    <script>
        let navButton = document.querySelector(".nav-button");

        navButton.addEventListener("click", e => {
            e.preventDefault();

            // toggle nav state
            document.body.classList.toggle("nav-visible");
        });
    </script>
    <!-- humberger menu -->


    <!-- animate aos -->
    <script>
        AOS.init();
    </script>

    <!--// animate aos -->

    <!-- Team slider -->
    <script>
        var swiper = new Swiper(".teamSlider", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                1400: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },

                1920: {
                    slidesPerView: 4,
                    spaceBetween: 40
                }
            },
        });
    </script>
    <!--// Team slider -->

    <!-- Clients -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                        breakpoint: 1920,
                        settings: {
                            slidesToShow: 6
                        }
                    },
                    {
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: 5
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3
                        }
                    },

                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    </script>
    <!--// Clients -->

    <!-- testimonials -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                items: 1,
                itemsDesktop: [1000, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                margin: 10,
                pagination: false,
                navigation: true,
                navigationText: ["", ""],
                autoPlay: true
            });
        });
    </script>
    <!--// testimonials -->

    <!-- blogs area -->

    <script>
        var swiper = new Swiper(".bloghomeSwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <!--// blogs area -->

    <!-- sticky menu -->
    <script type="text/javascript">
        $(function() {
            var navbar = $('.header');
            $(window).scroll(function() {
                if ($(window).scrollTop() <= 40) {
                    navbar.removeClass('navbar-scroll');
                } else {
                    navbar.addClass('navbar-scroll');
                }
            });
        });
    </script>
    <!--// sticky menu -->

    <!-- fancy box -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <!-- fancy box -->

    <!-- =====================
          JS AREA END
     ===================== -->




</body>

</html>