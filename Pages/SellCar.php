<?php
include('../Connection.php');
include('LoginScript.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-c4C/jzvo0NloeiKdPv/S/6wS8NTKj3TwrCg0SB0z9HCrDm72oQbRfhWIJvKLs1wIVsHtYysDrRz+jgMkK9tW8Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" class="favicon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

    <!--=============== FontAwesome  ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/myCustom.css">

    <!--================== Unicons CSS =================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>ASANES Used Cars Dealeship Managment</title>

                <!-- Start of Async Drift Code -->
<script>
    "use strict";
    
    !function() {
      var t = window.driftt = window.drift = window.driftt || [];
      if (!t.init) {
        if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
        t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
        t.factory = function(e) {
          return function() {
            var n = Array.prototype.slice.call(arguments);
            return n.unshift(e), t.push(n), t;
          };
        }, t.methods.forEach(function(e) {
          t[e] = t.factory(e);
        }), t.load = function(t) {
          var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
          o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
          var i = document.getElementsByTagName("script")[0];
          i.parentNode.insertBefore(o, i);
        };
      }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('dhrwr9r27rcf');
    </script>
    <!-- End of Async Drift Code -->
</head>

<body>
<!--==================== HEADER ====================-->
<header class="header" id="header">

    <nav class="nav container">
      <a href="" class="nav__logo">
        <i> <img class="site_logo" src="../assets/img/whitelogo.png"> </i>
        ASANES
      </a>
  
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="../index.php" class="nav__link Underline_Stroke">Home</a>
          </li>
          <li class="nav__item">
            <a href="AboutUs.php" class="nav__link Underline_Stroke">About Us</a>
          </li>
          <li class="nav__item nav__dropdown">
            <a href="#" class="nav__link Underline_Stroke">Buy Car</a>
            <ul class="SubMenu">
              <li><a href="cards.php" class="nav__link Underline_Stroke">Buy Car</a></li>
              <li><a href="Request.php" class="nav__link Underline_Stroke">Request Car</a></li>
              <li><a href="Bidding.php" class="nav__link Underline_Stroke">Bidding</a></li>
            </ul>
          </li>
          <li class="nav__item">
            <a href="SellCar.php" class="nav__link active-link neon_eff">Sell Car</a>
          </li>
          <li class="nav__item">
            <a href="News.php" class="nav__link Underline_Stroke">News</a>
          </li>
          <?php 
if(isset($_SESSION['user_id'])) { 
  $firstName = $_SESSION['first_name'];
?>
  <li class="nav__item nav__dropdownpt2">
    
      <a href="#" class="nav__link nav__login-button"  >
        <i class="ri-user-line nav__login-icon"></i>
        <?php echo $firstName; ?>
      </a>
      <ul class="SubMenu" >
        <li><a class="nav__link Underline_Stroke" href="#">Profile</a></li>
        <li><a class="nav__link Underline_Stroke" href="logout.php">Logout</a></li>
      </ul>
    
  </li>

  
<?php } else { ?>
  <li class="nav__item">
    <!-- Login Button -->
    <a href="Login.php">
      <button class="nav__login-button" id="login-button">
        <i class="ri-user-line nav__login-icon"></i>
        Login
      </button>
    </a>
  </li>
<?php } ?>

      </ul>

      <div class="nav__close" id="nav-close">
        <i class="ri-close-line"></i>
      </div>
    </div>

    <!-- Togglar Button -->
    <div class="nav__toggle" id="nav-toggle">
      <i class="ri-menu-line"></i>
    </div>

  </nav>

</header>



<script>



  // JavaScript
  const dropdown = document.querySelector('.nav__dropdown');
  dropdown.addEventListener('click', (event) => {
    event.stopPropagation();
    dropdown.classList.toggle('active');
  });

  document.addEventListener('click', (event) => {
    const target = event.target;
    const isClickInsideDropdown = dropdown.contains(target);
    if (!isClickInsideDropdown) {
      dropdown.classList.remove('active');
    }
  });

  // JavaScript
  const dropdown2 = document.querySelector('.nav__dropdownpt2');
  dropdown2.addEventListener('click', (event) => {
    event.stopPropagation();
    dropdown2.classList.toggle('active');
  });

  document.addEventListener('click', (event) => {
    const target2 = event.target;
    const isClickInsideDropdown = dropdown2.contains(target2);
    if (!isClickInsideDropdown) {
      dropdown2.classList.remove('active');
    }
  });

</script>

    <!--************* MAIN CODE ****************-->

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="shapeX shape__big"></div>
            <div class="shapeX shape__small"></div>

            <div class="aboutus_container">
                <div class="aboutus_img">
                    <img style="justify-content: center; display: flex; width: 100%;" class="home__img" src="../assets/img/sellcar.png">
                    <!-- <img src="../assets/img/whitelogo.png" alt="" class="home__img"> -->
                </div>
            </div>






            <div class="home__social">
                <a href="#" class="home__social-icon"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="home__social-icon"><i class="ri-instagram-fill"></i></a>
                <a href="#" class="home__social-icon"><i class="ri-twitter-fill"></i></a>

            </div>

        </section>

                <!--==================== icons ====================-->

                <?php 
include('logos.php');
?>

        
         <!--==================== GALLERY BANNER ====================-->
         <section class="gallery">
            <div class="gallery__container container grid">
                <video class="video__slide active" src="../assets/video/vid_1.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_4.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_3.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_2.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_5.mp4" autoplay muted loop></video>
            
            </div>

        </section>

<!--==================== SellsTypes ====================-->

<!--==================== Type1 ====================-->
<section class="about section" id="about">
    <h1 class="section__title">
        We Offer 3 Services To Sell Your Car
    </h1>
    <div class="container sellstypes">
        <div class="sellCar about__container container grid">
            <h1 class="selltitle section__title">
                Sell Your Car To Us
            </h1>
            <a href="Sell1.php">
                <div style="position: relative; text-align: center;" class="about__group">
                    <a href="Sell1.php"><img src="../assets/img/sellcar2.jpg" alt="" class="sellpic about__img" /></a>
                    <a href="Sell1.php">
                        <div class="sellcard about__card">
                            <h3 class="about__card-title">fairly price</h3>
                            <p class="about__card-description">
                                Asanes provides a quick and easy way for customers to sell their car hassle-free. Customers can send their vehicle Information, and we will provide a fair appraisal and buy the car directly from the customer
                                if they accept the offer. This service is perfect for customers who want to sell their car quickly without the stress of finding potential buyers.
                            </p>
                        </div>
                    </a>
                </div>
            </a>
            <div class="about__data">
                <!-- <h2 class="section__title about__title">Machines With <br> Future Technology</h2>
                    <p class="about__description">See the future with high-performance electric cars produced by
                        renowned brands. They feature futuristic builds and designs with
                        new and innovative platforms that last a long time.</p>
                    <a href="#" class="button">Know More</a> -->
            </div>
        </div>

        <!--==================== Type2 ====================-->
        <div class="sellCar about__container container grid">
            <h1 class="selltitle section__title">
                We Will Help You Tor Sell Your Car
            </h1>
            <a href="Sell2.php">
                <div style="position: relative; text-align: center;" class="about__group">
                    <a href="Sell2.php"><img src="../assets/img/sellcar1.jpg" alt="" class="sellpic about__img" /></a>
                    <a href="Sell2.php">
                        <div class="sellcard about__card">
                            <h3 class="about__card-title">We Got You</h3>
                            <p class="about__card-description">
                                Asanes provides a where we can assist customers in selling their car. we will list the car for sale in our showroom, handle all inquiries and viewings on the customer's behalf, and charge a 10% commission fee
                                if the car sells. This service is perfect for customers who want to sell their car but don't have the time or expertise to manage the sale process themselves.
                            </p>
                        </div>
                    </a>
                </div>
            </a>
            <div class="about__data">
                <!-- <h2 class="section__title about__title">Machines With <br> Future Technology</h2>
                    <p class="about__description">See the future with high-performance electric cars produced by
                        renowned brands. They feature futuristic builds and designs with
                        new and innovative platforms that last a long time.</p>
                    <a href="#" class="button">Know More</a> -->
            </div>
        </div>

        <!--==================== Type3 ====================-->
        <div class="sellCar about__container container grid">
            <h1 class="selltitle section__title">
                Rent A Place In Our Showroom
            </h1>
            <a href="Sell3.php">
                <div style="position: relative; text-align: center;" class="about__group">
                    <img src="../assets/img/Header.jpg" alt="" class="sellpic about__img" />
                    <div class="sellcard about__card">
                        <h3 class="about__card-title">It's Up To You</h3>
                        <p class="about__card-description">
                            Asanes offers rental space in our showroom for customers who wish to sell their cars privately. The customer can rent a space to showcase their car and manage the sale themselves. We provides a safe location for
                            the vehicle, and the customer pays a rental fee. This service is suitable for customers who want to keep control over the sale of their car.
                        </p>
                    </div>
                </div>
            </a>
            <div class="about__data">
                <!-- <h2 class="section__title about__title">Machines With <br> Future Technology</h2>
                    <p class="about__description">See the future with high-performance electric cars produced by
                        renowned brands. They feature futuristic builds and designs with
                        new and innovative platforms that last a long time.</p>
                    <a href="#" class="button">Know More</a> -->
            </div>
        </div>
    </div>
</section>


        <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <div class="featured__container container">
                <div class="featured__content grid">
                </div>
            </div>
        </section>
       



        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos__container container grid">
                <div class="logos__content">
                    <img src="../assets/img/logo1.png" alt="" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="../assets/img/logo6.png" alt="" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="../assets/img/logo5.png" alt="" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="../assets/img/logo4.png" alt="" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="../assets/img/logo3.png" alt="" class="logos__img">
                </div>
                <div class="logos__content">
                    <img src="../assets/img/logo2.png" alt="" class="logos__img">
                </div>

            </div>



        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="shapeX shape__big"></div>
        <div class="shapeX shape__small"></div>

        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i> <img class="site_logo" src="../assets/img/whitelogo.png"> </i>
                    ASANES
                </a>
                <p class="footer__description">
                    We offer the best cars of <br>
                    the most recognized brands in <br>
                    the world.
                </p>
            </div>


            <div class="footer__content">

                <h3 class="footer__title">Company </h3>

                <ul class="footer__links">
                    <li>
                        <a href="AboutUs.php" class="footer__links">About Us</a>
                    </li>
                    <li>
                        <a href="AboutUs.html#findus" class="footer__links">Contact Us</a>
                    </li>
                    <li>
                    <?php

if (isset($_SESSION['user_id'])) {
  // user is logged in
  echo '<a href="Suggestions.php" class="footer__links">Suggestions</a>';
} else {
  // user is not logged in
  echo '<a href="Login.php" class="footer__links">Suggestions</a>';
}
?>
                    </li>
                    <li>
                        <a href="#" class="footer__links"></a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Information </h3>
                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__links">FAQ</a>
                    </li>
                    <li>
                        <a href="#" class="footer__links">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="footer__links">Terms & Conditions</a>
                    </li>


                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title"> Follow us </h3>

                <ul class="footer__social">
                    <a href="" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-fill"></i>
                    </a>
                    <a href="" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-line"></i>
                    </a>
                </ul>
            </div>
        </div>
                <?php
                    include('mymark.php');
                ?>
    </footer>

    <!--========== SCROLL UP ==========-->

    <a href="" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>


    <!--=============== SCROLL REVEAL - PAGE ANNIMATION ===============-->
    <script src="../assets/js/scrollrevealAnimation.min.js"></script>

    <!--=============== SWIPER JS - PRODUCT SLIDER ===============-->
    <script src="../assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP JS - FILTER PRODUCT ===============-->
    <script src="../assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="../assets/js/main.js"></script>


        <!--=============== SearchBar ===============-->
        <script>
            let inputBox = document.querySelector(".input-box"),
                search = document.querySelector(".search"),
                closeIcon = document.querySelector(".close-icon");
            search.addEventListener("click", () => inputBox.classList.add("open"));
            closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
        </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>



</html>