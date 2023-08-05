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
                    <img style="justify-content: center; display: flex; width: 100%;" class="home__img" src="../assets/img/buy.png">
                    <!-- <img src="../assets/img/whitelogo.png" alt="" class="home__img"> -->
                </div>
            </div>






            <div class="home__social">
                <a href="#" class="home__social-icon"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="home__social-icon"><i class="ri-instagram-fill"></i></a>
                <a href="#" class="home__social-icon"><i class="ri-twitter-fill"></i></a>

            </div>

        </section>

         <!--==================== GALLERY BANNER ====================-->
         <section class="gallery section">
            <div class="gallery__container container grid">
                <video class="video__slide active" src="../assets/video/vid_1.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_4.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_3.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_2.mp4" autoplay muted loop></video>
                <video class="video__slide" src="../assets/video/vid_5.mp4" autoplay muted loop></video>
            
            </div>

        </section>

                <!--==================== icons ====================-->

                <?php 
include('logos.php');
?>

        <!--==================== POPULAR ====================-->
        <section style="flex-direction: column; width: 100%; display: flex; justify-content: center; align-items: center;" class="popular section" id="popular">
            <h2 class="section__title">
            Make the Right Choice
            </h2>
            <!-- <div class="popular__container1 container swiper">
                <div class="featured__container container"> -->


                <?php
// Retrieve the selected products from the URL parameter
$products = explode(',', $_GET['products']);

// Query the database to get the details of the selected products
$qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type,
    b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
    on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
    on m.car_type_id = ct.id where v.id in (" . implode(',', $products) . ")");

// Create an empty array to store the product details
$selectedProducts = array();

while ($row = $qry->fetch_assoc()) {
    $selectedProducts[] = $row;
}
?>
<div class="tableDiv">
<table>
    <thead>
        <tr>
            <th></th>
            <th class="subtd" style="font-size: 22px;"><?= $selectedProducts[0]['brand']?> <?= $selectedProducts[0]['model']?> </th>
            <th></th>
            <th class="subtd" style="font-size: 22px;"><?= $selectedProducts[1]['brand']?> <?= $selectedProducts[1]['model']?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td><img src="../<?= $selectedProducts[0]['Pic'] ?>" alt="" class="popular__img"></td>
            <td></td>
            <td><img src="../<?= $selectedProducts[1]['Pic'] ?>" alt="" class="popular__img"></td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"><?= $selectedProducts[0]['car_type'] ?></td>
            <td class="maintd">Type</td>
            <td class="subtd"><?= $selectedProducts[1]['car_type'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"><?= $selectedProducts[0]['variant'] ?></td>
            <td class="maintd">Color</td>
            <td class="subtd"><?= $selectedProducts[1]['variant'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"><?= $selectedProducts[0]['engine_type'] ?></td>
            <td class="maintd">Engine Type</td>
            <td class="subtd"><?= $selectedProducts[1]['engine_type'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"><?= $selectedProducts[0]['Cylinder'] ?></td>
            <td class="maintd">Cylinder</td>
            <td class="subtd"><?= $selectedProducts[1]['Cylinder'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"><?= $selectedProducts[0]['mileage'] ?></td>
            <td class="maintd">Mileage</td>
            <td class="subtd"><?= $selectedProducts[1]['mileage'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"><?= $selectedProducts[0]['transmission_type'] ?></td>
            <td class="maintd">Transmission</td>
            <td class="subtd"><?= $selectedProducts[1]['transmission_type'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"><?= $selectedProducts[0]['Year'] ?></td>
            <td class="maintd">Year</td>
            <td class="subtd"><?= $selectedProducts[1]['Year'] ?></td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"><?= number_format($selectedProducts[0]['price'], 2) ?> AED</td>
            <td class="maintd">Price</td>
            <td class="subtd"><?= number_format($selectedProducts[1]['price'], 2) ?> AED</td>
        </tr>
        <tr>
            <td></td>
            <td class="subtd"> <a href="pdp.php?id=<?= $selectedProducts[0]['id'] ?>">  <button class="button compare__button" >Read More</button></a> </td>
            <td class="maintd"></td>
            <td class="subtd"><a href="pdp.php?id=<?= $selectedProducts[1]['id'] ?>">  <button class="button compare__button" >Read More</button></a></td>
        </tr>
        <!-- Add more rows for other product details as needed -->
    </tbody>
</table>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>



</html>


