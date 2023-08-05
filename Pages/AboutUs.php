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


    <title>ASANES Used Cars Dealeship Managment</title>

    <?php
include('../scripts/messagebox.php');
?>
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
            <a href="AboutUs.php" class="nav__link active-link neon_eff">About Us</a>
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
            <a href="SellCar.php" class="nav__link Underline_Stroke">Sell Car</a>
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
                    <img style="justify-content: center; display: flex; width: 100%;" class="home__img" src="../assets/img/banner3.jpg">
                    <!-- <img src="../assets/img/whitelogo.png" alt="" class="home__img"> -->
                </div>
                <div class="aboutus_text home__title">
                    <p style="text-align: center;">Welcome to Asanes, a used car dealership management company dedicated to providing the best quality vehicles and services to our customers.
                        We pride ourselves on offering a wide selection of reliable, high-quality pre-owned cars,
                        trucks, and SUVs at competitive prices. Our team of experienced professionals is committed to ensuring that your car-buying experience is stress-free, enjoyable,
                        and above all, transparent. With years of experience in the automotive industry, we have built a reputation for being one of the most trusted used car dealerships in UAE.
                        Our focus on customer satisfaction has earned us a loyal following of customers who continue to come back to us for all
                        their vehicle needs. At Asanes, we strive to exceed our customers' expectations every time, and we look forward to helping you find your next car.</p>
                    
                </div>
            </div>






            <div class="home__social">
                <a href="#" class="home__social-icon"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="home__social-icon"><i class="ri-instagram-fill"></i></a>
                <a href="#" class="home__social-icon"><i class="ri-twitter-fill"></i></a>

            </div>

        </section>

        
         <!--==================== GALLERY BANNER ====================-->

            <div class="gallery__container container grid">
                <video class="video__slide active" src="../assets/video/vid_1.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_4.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_3.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_2.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_5.mp4" autoplay muted loop></video>
            
            </div>

                <!--==================== icons ====================-->

                <?php 
include('logos.php');
?>

         <!--==================== Why Section ====================-->

         <section  class="about section" id="about">
            <div class="about__container container grid">

                <div class="about__group">
                    <img src="https://www.edgedesign.ae/wp-content/uploads/2018/02/Aston-Martin-Showroom-Interior-View-Main-OG.jpg">
                </div>

                <div class="about__data">
                        <h2 class="section__title about__title">Why Buying From Us</h2>


                        <p class="about__description" style="text-align: justify; font-weight: bolder;
                        font-size: 18px;">As a starting point, all you need to do is browse through our collection of used luxury cars from our Buy Used Car section. Search for your desired car
                            and choose to either make a booking online or visit our branch
                            and make the booking in person.</p>


                        <p class="about__description" style="text-align: justify; font-weight: bolder;
                        font-size: 18px;">All of the pre-owned vehicles purchased and
                            sold at ALBA CARS showroom go through thorough vehicle inspection and tests.</p>

                        <p class="about__description" style="text-align: justify; font-weight: bolder;
                        font-size: 18px;">We buy cars in perfectly immaculate condition and provide complete
                            transparency to customers before they buy a used car from us. Also visit our Terms and Conditions page for
                            our “Terms of Service” and “Privacy Policy”.</p>
                            

                        <p class="about__description" style="text-align: justify; font-weight: bolder;
                        font-size: 18px;">What sets ALBA CARS apart from its competition in the used luxury cars
                            segment is its commitment to delivering service beyond customer’s expectations, a friendly sales approach and a reliable post-sales support system. We are
                            proud to leave every used car buyer and seller with a smile and a great deal.</p>
                </div>
            </div>
         </section>


        <!--==================== history ====================-->

        <section class="home section" id="home">

            <div class="aboutus_container">
                <h2 class="section__title about__title about__data">How it started</h2>
                <div class="aboutus_img">
                    <img class="history_img home__img" src="https://assets.cai-media-management.com/dealership/e0ae3649-d77a-4da4-befd-e9cf38d4690e.JPG">
                    <!-- <img src="../assets/img/whitelogo.png" alt="" class="home__img"> -->
                </div>
                <div class="history_text home__title">
                    <p>Sherif Ezzat and his sons Abdelrahman Sherif and Omar Sherif established the showroom in 2013 with a vision to provide quality used cars to their customers. Sherif Ezzat, a veteran in the automotive industry, brought his years of experience and expertise to the business. Abdelrahman Sherif and Omar Sherif, who grew up around cars, inherited their father's passion and love for automobiles.
                    </p>

                    <p>
                        The showroom began its operations as a small family business with just a handful of cars on display. However, with their collective dedication and hard work, the showroom quickly grew to become one of the most trusted and reputable used car dealerships in UAE. The team's commitment to customer satisfaction and transparency earned them a loyal customer base that continues to grow today.
                    </p>
                    
                    <p>
                        As the business grew, the team remained focused on maintaining the family-owned and operated feel. They take pride in knowing their customers by name and providing personalized service. The showroom's success is a testament to the team's hard work, passion, and dedication to providing the best possible customer experience.
                    </p>

                    <p>
                        Today, Sherif Ezzat and his sons Abdelrahman Sherif and Omar Sherif continue to lead the showroom, striving to provide their customers with the best quality used cars and exceptional customer service. They look forward to serving the community for many years to come.

                    </p>
                </div>
            </div>

        </section>


<!--==================== FindUs ====================-->
<section class="features section" id="findus">
    <h2 class="section__title">
        How To Find Us
    </h2>

    <div class="features__container container grid">
        <div class="features__group">
            <img src="../assets/img/features.png" alt="" class="features__img" />

            <div class="features__card features__card-1">
                <i style="font-size: 20px;" class="fa-solid fa-envelope"></i>
                <h3 class="features__card-title">Email</h3>
            </div>

            <div class="features__card features__card-2">
                <a href="https://api.whatsapp.com/send?phone=971562588105&text=I%20would%20like%20to%20know%20more%20details%20about%20the%20project" class="float" target="_blank">
                    <i style="font-size: 22px;" class="fa fa-whatsapp my-float"></i>
                </a>
                <h3 class="features__card-title">WhatsApp</h3>
            </div>

            <div class="features__card features__card-3">
                <a href="https://www.google.com/maps/dir//Al+Ruqa+Al+Hamra+-+Sharjah/@25.3507576,55.41296,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3e5f59705baa6473:0x57b8f40f02313a1e!2m2!1d55.4830003!2d25.3507742" class="float" target="_blank">
                    <i style="font-size: 20px;" class="fa-solid fa-location-dot"></i>
                </a>
                <h3 class="features__card-title">Location</h3>
            </div>
        </div>
    </div>

    <img src="../assets/img/map.svg" alt="" class="features__map" />
</section>

<!--==================== Owners ====================-->
<section class="featured section" id="featured">
    <h2 class="section__title">Our Owners</h2>
    <div style="flex-direction: column;" class="featured__container container">
        <div class="featured__content grid">
            <article class="featured__card mix tesla">
                <div class="shape shape__smaller"></div>

                <h1 class="featured__title">Sherif Ezzat</h1>
                <img style="width: 76%;" src="../assets/img/man1.png" alt="" class="featured__img" />
                <button class="button featured__button">
                    <i class="fa-solid fa-envelope"></i>
                </button>
            </article>

            <article class="featured__card mix tesla">
                <div class="shape shape__smaller"></div>

                <h1 style="font-size: 21.2px;" class="featured__title">Abdelrahman Sherif</h1>
                <img style="width: 100%;" src="https://www.pngmart.com/files/3/Man-PNG-Transparent-Image.png" alt="" class="featured__img" />
                <button class="button featured__button">
                    <i class="fa-solid fa-envelope"></i>
                </button>
            </article>

            <article class="featured__card mix audi">
                <div class="shape shape__smaller"></div>

                <h1 class="featured__title">Omar Sherif</h1>
                <img style="width: 70%;" src="https://www.pngall.com/wp-content/uploads/12/James-Bond-PNG-Picture.png" alt="" class="featured__img" />
                <button class="button featured__button">
                    <i class="fa-solid fa-envelope"></i>
                </button>
            </article>
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>



</html>