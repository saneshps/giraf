<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Digital-Marketing-Agentur | Kontaktieren Sie uns | Giraf Creatives </title>
  <meta name="description" content="Kontaktieren Sie die führende Agentur für Digital Marketing in Deutschland – wir freuen uns auf Ihre Anfrage!">

  <!-- canonical -->
  <link href="https://girafcreatives.com/de/connect-us.php" rel="canonical">
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'> -->
  <!-- blogs -->
  
<style>
        label.error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }
  </style>

  
  <link rel="alternate" hreflang="en" href="https://girafcreatives.com/" />
<link rel="alternate" hreflang="de" href="https://girafcreatives.com/de/" />
<link rel="alternate" hreflang="en-DE" href="https://girafcreatives.com/de/en/" />
<link rel="alternate" hreflang="en-IN" href="https://girafcreatives.com/in/" />
<link rel="alternate" hreflang="en-GB" href="https://girafcreatives.com/uk/" />
<link rel="alternate" hreflang="x-default" href="https://girafcreatives.com/" />


<!-- CookieConsent -->
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/35eaccce22fb0d051cda9731c9be6e07.js">
    </script>
    <!-- CookieConsent -->
</head>

<body>
  <!-- =====================
          HEADER START
     ===================== -->

  <?php
  if (isset($_SESSION['message'])) { ?>
    <style>
      .alert-warning {
        color: #ffffff;
        background-color: #017ac9;
        border-color: #017ac9;
      }
    </style>

    <div class="alert alert-warning alert-dismissible" role="alert">
      <strong><?php echo $_SESSION['message'] ?>!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>


  <?php  }
  if (isset($_SESSION['fail'])) { ?>
    <style>
      .alert-warning {
        color: #ffffff;
        background-color: #017ac9;
        border-color: #017ac9;
      }
    </style>

    <div class="alert alert-warning alert-dismissible" role="alert">
      <strong><?php echo $_SESSION['fail'] ?>!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>


  <?php  }

  if (isset($_SESSION['g-recpatcha_fail'])) { ?>
    <style>
      .alert-warning {
        color: #ffffff;
        background-color: #E52000;
        border-color: #E52000;
      }
    </style>

    <div class="alert alert-warning alert-dismissible" role="alert">
      <strong><?php echo $_SESSION['g-recpatcha_fail'] ?>!</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>


  <?php  }

  ?>

  <?php include("header.php"); ?>


  <!-- =====================
          HEADER END
     ===================== -->


  <!-- =====================
          HERO AREA START
     ===================== -->
  <section>
    <div class="banner-area">
      <img src="./img/banner-cnt.jpg" alt="banner">
      <h1> Kontakt </h1>
    </div>
  </section>
  <!-- =====================
          HERO AREA END
     ===================== -->

  <!-- ============================
          ADDRESS FORM AREA START
     ============================== -->
  <section class="address-from-area">
    <div class="container">
      <div class="row box-commn justify-content-center align-items-center">
        <div class="col-xl-6 col-lg-7 col-md-12 address-from-first">
          <h6> Du bist fast am Ziel! </h6>
          <h4> Rufen Sie uns an, um mehr darüber zu erfahren, wie wir Ihnen helfen können, sich von der
            Masse abzuheben. </h4>
          <!-- <P> Ob Neuanfang oder starkes Comeback – bringen Sie Ihr Unternehmen mit uns zum Erfolg. Wir bieten Ihnen den besten Service.

            Kontaktieren Sie uns – wir stehen Ihnen zur Seite und arbeiten Hand in Hand.
          </P> -->

          <ul class="address-list">
            <li> <i class="fas fa-map-marker-alt"></i> <a href="#">  
                Mackstraße 84, <br>
                88348 Bad Saulgau, Deutschland </a> </li>
            <li> <i class="fas fa-phone"></i> <a href="tel:+497581488820"> +49 / 7581 / 48882-0 </a> </li>
            <li> <i class="fas fa-envelope"></i> <a href="mailto:info@girafcreatives.com"> info@girafcreatives.com </a> </li>
            <li> <i class="fas fa-map-marker-alt"></i> <a> Deutschland </a>
            </li>
          </ul>

          <ul class="contact-social">
            <li> <a href="https://www.facebook.com/people/GIRAF/100088398906381/" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
            <li> <a href="https://twitter.com/Girafcreatives" target="_blank"> <i class="fab fa-twitter"></i> </a> </li>
            <li> <a href="https://www.instagram.com/girafcreatives/" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
            <li> <a href="https://www.linkedin.com/company/girafcreatives/?viewAsMember=true" target="_blank"> <i class="fab fa-linkedin-in"></i> </a> </li>
            <li> <a href="https://www.youtube.com/@Giraf_Creatives" target="_blank"> <i class="fab fa-youtube"></i> </a> </li>
          </ul>

        </div>

        <div class="col-xl-4 col-lg-5 col-md-12 felix-image">
          <img src="./img/Felix_Kistler.png" alt="felix kistler">
          <h4> Felix Kistler</h4>
          <h5> <a href="tel:497581488820"> +49 / 7581 / 48882-0 </a> </h5>
        </div>


      </div>
    </div>
  </section>
  <!-- ==========================
          ADDRESS FORM AREA END
     ============================ -->
  <section class="map">
    <div class="container">
      <div class="row">
        <div class="col-md-12 map-area"> 

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10348554.479309125!2d-0.1093548!3d50.710615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479a721ec2b1be6b%3A0x75e85d6b8e91e55b!2sGermany!5e0!3m2!1sen!2sin!4v1748942352526!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================
          FORM AREA START
     ===================== -->
  <section class="address-from-area">
    <div class="container">
      <div class="row mx-auto justify-content-center fm box-commn">


        <div class="col-xl-9 col-lg-10 col-md-12 address-from">
          <div class="form-bg">
            <div class="form-container">
                 <form class="form-horizontal" method="post" action="send_mail.php" id="contact_form_">

              <!-- <form class="form-horizontal" method="post" action="mail.php"> -->
                <h3 class="title"> Schreiben Sie uns </h3>

                <p> Ihre E-Mail-Adresse wird nicht veröffentlicht. Erforderliche Felder sind mit * markiert. </p>
                <div class="form-group">
                  <input type="text" class="form-control required" name="firstname" placeholder="Name">
                </div>


                <div class="form-group">
                  <input type="email" class="form-control required" name="email" placeholder="Email">

                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" placeholder="Telefon">
                </div>


                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Thema">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="msg" rows="4" cols="120" placeholder="Nachricht"></textarea>

                </div>
                 <div class="g-recaptcha" data-sitekey="6Le7ggIrAAAAAJun6e28-mI0moO5OwQHzvENAt9f"> 
                <!--<div class="g-recaptcha" data-sitekey="6Ld-GlArAAAAAJEbB1KrL2pS_nN4f2aO2Ybw7uu5"></div>  Giraf Local-->

                </div>
                <br>
                <br>
                <br>
                <button type="submit" name="subc" id="sub" class="btn btn-default" style="top: 10px;"> Schreiben Sie uns <i class="fas fa-angle-right"></i> </button>
              </form>
            </div>
          </div>



        </div>



      </div>
    </div>
  </section>
  <!-- ===================
          FORM AREA END
     ===================== -->



  <!-- ======================
          FOOTER AREA START
       ====================== -->
  <?php include("footer.php"); ?>

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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
  
  
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="./js/jquery.validate.min.js"></script>
  <script src="./js/jquery.form.min.js"></script>

 <script>
  (function ($) {
    $("#contact_form_").validate({
      submitHandler: function (form) {
        var form_btn = $(form).find('button[type="submit"]');
        var form_result_div = '#form-result';
        // alert('AFAS')
        Swal.fire({
          title: 'Sending...',
          text: 'Please wait while we send your message.',
          allowOutsideClick: false,
          didOpen: () => {
            Swal.showLoading();
          }
        });

        form_btn.prop('disabled', true);

        $(form).ajaxSubmit({
          url: 'send_gmail.php',
          dataType: 'json',
          success: function (data) {
            Swal.close();

            form_btn.prop('disabled', false);
            if (data.status === 'success') {
                // alert('s')
                form.reset(); 
            //   $(form).find('.form-control').val('');
              Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: data.message
              });
            } else {
                // alert('f')

              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data.message
              });
            }
          },
          error: function () {
            Swal.close();

            form_btn.prop('disabled', false);
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong. Please try again later.'
            });
          }
        });
      }
    });
  })(jQuery);
</script>

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
  <script>
    $("#sub").on('click', function() {
      var form = $(this);
      $.ajax({
        url: "sendmail.php",
        method: 'post',
        data: form.serialize(),
        success: function(result) {
          if (result == 'success') {
            $('.output_message').text('Message Sent!');
          } else {
            $('.output_message').text('Error Sending email!');
          }
        }
      });
    });
  </script>
  <!--// blogs area -->

  <!-- =====================
          JS AREA END
     ===================== -->




</body>

</html>