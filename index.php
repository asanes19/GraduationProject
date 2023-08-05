<?php 
include('Connection.php');
include('Pages/LoginScript.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-c4C/jzvo0NloeiKdPv/S/6wS8NTKj3TwrCg0SB0z9HCrDm72oQbRfhWIJvKLs1wIVsHtYysDrRz+jgMkK9tW8Q=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" class="favicon" />

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="assets/css/myCustom.css" />

        <!--================== Unicons CSS =================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

        <title>ASANES Used Cars Dealeship Managment</title>

        <!-- Start of Async Drift Code -->
        <?php
include('scripts/messagebox.php');
?>
    </head>

    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="" class="nav__logo">
                    <i> <img class="site_logo" src="assets/img/whitelogo.png" /> </i>
                    ASANES
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link active-link neon_eff">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="Pages/AboutUs.php" class="nav__link Underline_Stroke">About Us</a>
                        </li>
                        <li class="nav__item nav__dropdown">
                            <a href="#" class="nav__link Underline_Stroke">Buy Car</a>
                            <ul class="SubMenu">
                                <li><a href="Pages/cards.php" class="nav__link Underline_Stroke">Buy Car</a></li>
                                <li><a href="Pages/Request.php" class="nav__link Underline_Stroke">Request Car</a></li>
                                <li><a href="Pages/Bidding.php" class="nav__link Underline_Stroke">Bidding</a></li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="Pages/SellCar.html" class="nav__link Underline_Stroke">Sell Car</a>
                        </li>
                        <li class="nav__item">
                            <a href="Pages/News.php" class="nav__link Underline_Stroke">News</a>
                        </li>
                        <?php 
if(isset($_SESSION['user_id'])) { 
  $firstName = $_SESSION['first_name'];
?>
                        <li class="nav__item nav__dropdownpt2">
                            <a href="#" class="nav__link nav__login-button">
                                <i class="ri-user-line nav__login-icon"></i>
                                <?php echo $firstName; ?>
                            </a>
                            <ul class="SubMenu">
                                <li><a class="nav__link Underline_Stroke" href="#">Profile</a></li>
                                <li><a class="nav__link Underline_Stroke" href="Pages/logout.php">Logout</a></li>
                            </ul>
                        </li>

                        <?php } else { ?>
                        <li class="nav__item">
                            <!-- Login Button -->
                            <a href="Pages/Login.php">
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

        <!--************* MAIN CODE ****************-->

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="shapeX shape__big"></div>
                <div class="shapeX shape__small"></div>

                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__title">
                            Let Us Find You<br />
                            Your Next Car
                        </h1>
                        <h2 class="home__subtitle"></h2>
                        <h3 class="home__elec">
                            <i class="ri-flashlight-fill"></i>
                        </h3>
                    </div>

                    <img src="assets/img/whitelogo.png" alt="" class="home__img home_size" />
                    <div class="home__car">
                        <div class="home__car-data">
                            <div class="home__car-icon">
                                <i class="ri-temp-cold-line"></i>
                            </div>
                            <h2 style="font-size: 12px;" class="home__car-number">
                                Free <br />
                                Warranty
                            </h2>
                            <h3 class="home__car-name">0-100 km/h</h3>
                        </div>

                        <div class="home__car-data">
                            <div class="home__car-icon">
                                <i class="ri-dashboard-2-line"></i>
                            </div>
                            <h2 style="font-size: 12px;" class="home__car-number">
                                Downpayment <br />
                                Option
                            </h2>
                            <h3 class="home__car-name">POWER (KW)</h3>
                        </div>
                        <div class="home__car-data">
                            <div class="home__car-icon">
                                <i class="ri-flashlight-fill"></i>
                            </div>
                            <h2 style="font-size: 12px;" class="home__car-number">
                                Certified <br />
                                Used Cars
                            </h2>
                            <h3 class="home__car-name">MAX. SPEED</h3>
                        </div>
                    </div>

                    <a href="#" class="home__button">START</a>

                    <div class="slider__bg">
                        <div class="slider__bg-navBtn active"></div>
                        <div class="slider__bg-navBtn"></div>
                        <div class="slider__bg-navBtn"></div>
                        <div class="slider__bg-navBtn"></div>
                        <div class="slider__bg-navBtn"></div>
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
include('Pages/logos.php');
?>

            <!--==================== GALLERY BANNER ====================-->
            <section class="gallery">
                <div class="gallery__container container grid">
                    <video class="video__slide active" src="assets/video/vid_1.mp4" autoplay muted loop></video>
                    <video class="video__slide" src="assets/video/vid_4.mp4" autoplay muted loop></video>
                    <video class="video__slide" src="assets/video/vid_3.mp4" autoplay muted loop></video>
                    <video class="video__slide" src="assets/video/vid_2.mp4" autoplay muted loop></video>
                    <video class="video__slide" src="assets/video/vid_5.mp4" autoplay muted loop></video>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__group">
                        <img src="https://st.arenaev.com/news/22/05/byd-buys-lithium-mines/-828x414/arenaev_000.jpg" alt="" class="about__img" />

                        <div style="position: absolute;" class="about__news">
                            <h3 class="about__card-title">2.500+</h3>
                            <p class="about__card-description">Never miss a beat in the automotive industry.</p>
                        </div>
                    </div>

                    <div style="margin-top: 30px;" class="about__data">
                        <h2 class="section__title about__title"><h2>Latest Car News</h2></h2>
                        <p class="about__description">
                            Stay up to date with the latest information and developments in the car industry, from new releases to innovative technologies. Check back regularly for more updates and exciting news about your favorite cars.
                        </p>

                        <a href="Pages/News.php" class="button">Stay up to date</a>
                    </div>
                </div>
            </section>

            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <h2 class="section__title">
                    You Will Find The <br />
                    Most Luxurious Cars With Us
                </h2>
                <div class="popular__container container swiper">
                    <div class="swiper-wrapper">
                        <?php
                $i = 1;
                    $qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type, b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m on v.model_id = m.id inner join brand_list b on
                        m.brand_id = b.id inner join car_type_list ct on m.car_type_id = ct.id where v.status = 0 and v.delete_flag = 0 ORDER BY price DESC LIMIT 3 "); while($row = $qry->fetch_assoc()): ?>
                        <article class="popular__card swiper-slide">
                            <div class="shapeX shape__smaller"></div>
                            <h1 class="popular__title"><?= $row['brand'] ?></h1>
                            <h3 class="popular__subtitle"><?= $row['model'] ?></h3>
                            <img src="<?= $row['Pic'] ?>" alt="" class="popular__img" />
                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-2-line"></i>
                                    <?= $row['mileage'] ?>
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-exchange-funds-line"></i>
                                    <?= $row['transmission_type'] ?>
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i>
                                    <?= $row['Year'] ?>
                                </div>
                            </div>

                            <h3 class="popular__price">
                                <?= number_format($row['price'], 2) ?>
                                <p>AED</p>
                            </h3>
                            <a href="Pages/pdp.php?id=<?= $row['id'] ?>" class="button popular__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </a>
                        </article>
                        <?php endwhile;  ?>
                    </div>
                </div>
            </section>

            <!--==================== sell options ====================-->
            <section class="about section" id="about">
                <h2 style="margin: 0 0 20px 0;" class="section__title">
                    It's The Time! <br />
                    To Sell Your Own Old Car
                </h2>
                <div class="about__container container grid">
                    <div class="about__group">
                        <img style="width: 600px;" src="https://c1.wallpaperflare.com/preview/508/250/386/porsche-oldtimer-m%C3%BChlheim-mulhouse.jpg" alt="" class="about__img" />

                        <div style="position: absolute; right: 18px;" class="about__news">
                            <h3 class="about__card-title">3 Types</h3>
                            <p class="about__card-description">Choose Whatever Good For You.</p>
                        </div>
                    </div>

                    <div class="options">
                        <div class="option">
                            <div class="bulletsCon">
                                <div class="bulletsbox aos-init aos-animate" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0"><span class="redbul"></span></div>
                                <i class="dotlines aos-init aos-animate" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0"></i>
                            </div>
                            <a href="Pages/Sell1.php">
                                <div class="description">
                                    <h2>Option 1</h2>
                                    <p>We'll Buy The Car Directly From You</p>
                                </div>
                            </a>
                        </div>
                        <div class="option">
                            <div class="bulletsCon">
                                <div class="bulletsbox aos-init aos-animate" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0"><span class="redbul"></span></div>
                                <i class="dotlines aos-init aos-animate" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0"></i>
                            </div>
                            <a href="Pages/Sell2.php">
                                <div class="description">
                                    <h2>Option 2</h2>
                                    <p>We'll Help You To Sell Your Car</p>
                                </div>
                            </a>
                        </div>
                        <div class="option">
                            <div class="bulletsCon">
                                <div class="bulletsbox aos-init aos-animate" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0"><span class="redbul"></span></div>
                                <i style="display: none;" class="dotlines aos-init aos-animate" data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1000" data-aos-offset="0"></i>
                            </div>
                            <a href="Pages/Sell3.php">
                                <div class="description">
                                    <h2>Option 3</h2>
                                    <p>Rent A Place In Our Showroom</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <h2 class="section__title">
                    New Arrivals! <br />
                    The Latest Cars in Our Showroom
                </h2>
                <div class="popular__container container swiper">
                    <div class="swiper-wrapper">
                        <?php
                $i = 1;
                $qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type, b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m on v.model_id = m.id inner join brand_list b on m.brand_id
                        = b.id inner join car_type_list ct on m.car_type_id = ct.id where v.status = 0 and v.delete_flag = 0 ORDER BY date_created DESC LIMIT 3 "); while($row = $qry->fetch_assoc()): ?>
                        <article class="popular__card swiper-slide">
                            <div class="shapeX shape__smaller"></div>
                            <h1 class="popular__title"><?= $row['brand'] ?></h1>
                            <h3 class="popular__subtitle"><?= $row['model'] ?></h3>
                            <img src="<?= $row['Pic'] ?>" alt="" class="popular__img" />
                            <div class="popular__data">
                                <div class="popular__data-group">
                                    <i class="ri-dashboard-2-line"></i>
                                    <?= $row['mileage'] ?>
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-exchange-funds-line"></i>
                                    <?= $row['transmission_type'] ?>
                                </div>
                                <div class="popular__data-group">
                                    <i class="ri-charging-pile-2-line"></i>
                                    <?= $row['Year'] ?>
                                </div>
                            </div>

                            <h3 class="popular__price">
                                <?= number_format($row['price'], 2) ?>
                                <p>AED</p>
                            </h3>
                            <a href="Pages/pdp.php?id=<?= $row['id'] ?>" class="button popular__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </a>
                        </article>
                        <?php endwhile;  ?>
                    </div>
                </div>
            </section>

            <!--==================== FEATURED ====================-->
            <section class="featured section" id="featured">
                <h2 class="section__title">Featured Sport Cars</h2>
                <div class="featured__container container">
                    <ul class="featured__filters">
                        <li>
                            <button id="featuredd" class="featured__item active-featured" data-filter="all">
                                <span>All</span>
                            </button>
                        </li>
                        <li>
                            <button id="featuredd" styel=" align-items: center; display: flex;" class="featured__item" data-filter=".Ferarri">
                                <img src="https://companieslogo.com/img/orig/RACE.D-a40e5994.png?t=1660640315" alt="" />
                            </button>
                        </li>
                        <li>
                            <button id="featuredd" class="featured__item" data-filter=".Bugati">
                                <img src="assets/img/PngItem_287978.png" alt="" />
                            </button>
                        </li>
                        <li>
                            <button id="featuredd" class="featured__item" data-filter=".Lamborghini">
                                <img src="assets/img/bugatti.png" alt="" />
                            </button>
                        </li>
                    </ul>
                    <div class="featured__content grid">
                        <?php 
                    include('Pages/SportsCarsScript.php');
                ?>
                    </div>
                </div>
            </section>

            <!--==================== bid ====================-->
            <section class="offer section">
                <div class="offer__container container grid">
                    <img src="assets/img/offer-bg.png" alt="" class="offer__bg" />

                    <div class="offer__data">
                        <h2 class="section__title offer__title">
                            Place Your Bid <br />
                            Find Your Dream Car Today!
                        </h2>

                        <p class="offer__description">Find your dream car through our bidding system and compete with other buyers. Bid now and make your dream car a reality.</p>

                        <a href="Pages/Bidding.php" class="button">Place Your Bid</a>
                    </div>

                    <img src="assets/img/offer.png" alt="" class="offer__img" />
                </div>
            </section>

            <!--==================== LOGOS ====================-->
            <?php
include('scripts/footerLogos.php');
?>

            <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="shapeX shape__big"></div>
                <div class="shapeX shape__small"></div>

                <div class="footer__container container grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">
                            <i> <img class="site_logo" src="assets/img/whitelogo.png" /> </i>
                            ASANES
                        </a>
                        <p class="footer__description">
                            We offer the best cars of <br />
                            the most recognized brands in <br />
                            the world.
                        </p>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Company</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="Pages/AboutUs.php" class="footer__links">About Us</a>
                            </li>
                            <li>
                                <a href="Pages/AboutUs.php#findus" class="footer__links">Contact Us</a>
                            </li>
                            <li>
                        
                        <?php
    
    if (isset($_SESSION['user_id'])) {
      echo '<a href="Pages/Suggestions.php" class="footer__links">Suggestions</a>';
    } else {
      echo '<a href="Pages/Login.php" class="footer__links">Suggestions</a>';
    }
    ?> 
                        </li>

                            <li>
                                <a href="#" class="footer__links"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Information</h3>
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
                        <h3 class="footer__title">Follow us</h3>

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
                    include('Pages/mymark.php');
                ?>
            </footer>
        </main>

        <!--========== SCROLL UP ==========-->

        <a href="" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-s-line"></i>
        </a>

        <!--=============== SCROLL REVEAL - PAGE ANNIMATION ===============-->
        <script src="assets/js/scrollrevealAnimation.min.js"></script>

        <!--=============== SWIPER JS - PRODUCT SLIDER ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MIXITUP JS - FILTER PRODUCT ===============-->
        <script src="assets/js/mixitup.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>
