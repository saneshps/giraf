<?php include('db_connect.php');
$sql = "SELECT blogs.*, websites.*, blogs.created_at as created_at
        FROM blogs
        JOIN websites ON blogs.website_id = websites.id
        WHERE blogs.status = 1
          AND blogs.deleted_at IS NULL
          AND websites.title LIKE '%giraf%'
        ORDER BY blogs.created_at DESC";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Check out our Blogs and get information on trending topics of Digital Marketing,Website & App Development, UI & UX Design,Ecommerce industry">
  <title> Blogs|Top Digital Marketing Agency,India|Giraf </title>
  <!-- canonical -->
  <link href="https://girafcreatives.com/in/blogs.php" rel="canonical">
  <!--// canonical -->
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
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
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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

  <!-- blogs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'> -->
  <!-- blogs -->
  <?php include("gtag_head.php"); ?>
</head>

<body>
  <!-- =====================
  HEADER START
  ===================== -->



  <?php include("header.php") ?>



  <!-- =====================
  HEADER END
  ===================== -->


  <!-- =====================
  HERO AREA START
  ===================== -->
  <section>
    <div class="banner-area">
      <img src="./img/blogs/banner.jpg" alt="banner">
      <h1> Blogs </h1>
    </div>
  </section>
  <!-- =====================
  HERO AREA END
  ===================== -->


  <!-- =====================
  BLOG AREA START
  ===================== -->

  <section class="blog-section">
    <div class="main-box">
      <div class="row">
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

        ?>
            <!-- blog-box -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
              <div class="post-slide-blog">
                <a href="blog-details/<?php echo $row['slug']; ?>">
                  <div class="pic">
                    <img src="https://bigleap.tech/cms/storage/app/public/<?= $row['default_image']; ?>" alt="<?php echo $row['image_alt']; ?>">
                  </div>
                </a>

                <ul class="post-bar">
                  <a href="blog-details/<?php echo $row['slug']; ?>">
                    <li><?php echo (new DateTime($row['created_at']))->format('M d, Y'); ?></li>
                  </a>
                  <a href="blog-details/<?php echo $row['slug']; ?>">
                    <li><i class="fa fa-users"></i> Giraf </li>
                  </a>
                </ul>

                <div class="post-header">
                  <h2 class="post-title"> <a href="blog-details/<?php echo $row['slug']; ?>"> <?php echo $row['blog_title']; ?> </a> </h2>
                </div>


                <p class="post-description">
                  <a href="blog-details/<?php echo $row['slug']; ?>">
                    <span><?php echo implode(' ', array_slice(explode("\n", strip_tags($row['blog_description'])), 0, 1)); ?></span>
                  </a>
                </p>

                <a href="blog-details/<?php echo $row['slug']; ?>" class="read-more">read more</a>
              </div>


            </div>

        <?php  }
        }
        ?>
        <!-- blog-box -->

      </div>
    </div>
  </section>

  <!-- =====================
    BLOG AREA END
    ===================== -->




  <!-- ======================
    FOOTER AREA START
    ====================== -->
  <?php include("footer.php") ?>

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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script> -->

  <!-- swiper -->

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 2,
          spaceBetween: 40
        },
        992: {
          slidesPerView: 2,
          spaceBetween: 40
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 40
        },
        1600: {
          slidesPerView: 4,
          spaceBetween: 40
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

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
    var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
  </script>
  <!--// blogs area -->

  <!-- =====================
  JS AREA END
  ===================== -->




</body>

</html>