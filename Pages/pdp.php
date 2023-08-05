<?php 

include('../Connection.php');
include('LoginScript.php');


$id = "";
if(isset($_GET['id'])){
    $id = $_GET["id"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" class="favicon">
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>

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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

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


                <!--==================== icons ====================-->

                <?php 
include('logos.php');
?>

        <!--==================== HOME ====================-->
<section style="margin-top: 110px;" >

        <?php 
					$i = 1;
						$qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type,
                        b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
                        on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
                        on m.car_type_id = ct.id where v.id = $id ");
						while($row = $qry->fetch_assoc()):
					?>

        <div style="display: flex; justify-content: center; text-align: center; margin: 0 0 30px 0">
            <h1 style="font-size: 30px;"><?= $row['brand'] ?> <?= $row['model'] ?></h1>
        </div>

        <?php endwhile; ?>


            <div class="CenterDivs">
                <div class="mainPDP">
                    <div class="left_side">
                            <!-- Slider main container -->
                            <div class="swiper myswiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php 
                                $i = 1;
                                $qry = $conn->query("SELECT vl.*, img.*
                                FROM vehicle_list vl
                                INNER JOIN images img ON vl.id = img.car_id
                                WHERE vl.id = $id");
                                while($row = $qry->fetch_assoc()):
                                ?>
                                <div class="swiper-slide">
                                <div class="price-overlay">
                                    <p><?= $row['price'] ?> AED</p>
                                </div>
                                <img src="../../adms/admin/<?= $row['image'] ?>" alt="" class="sliderpics">
                                </div>
                                <?php endwhile; ?>

                            </div>
                            <!-- If we need pagination -->
                            <div  class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div style="color: var(--clr-neon);" class="swiper-button-prev swnex"></div>
                            <div style="color: var(--clr-neon);" class="swiper-button-next swnex"></div>
                            </div>
                    </div>


                    <div class="right_side">
                        <div class="mainp1">
                            <div class="p p1">
                                <h2 style="margin-bottom: 30px; font-size: 19px;">Virtual Test Drive</h2>
                                <p style="margin-bottom: 30px; color: white;">Our Virtual Test Drive Service allows customers to watch a video of someone else test driving a car before making a purchase. </p>
                                <button class="TryIt" id="video-button">Ride It</button>
                            <?php 
                                $i = 1;
                                $qry = $conn->query("SELECT * FROM vids where car_id = $id");
                                while($row = $qry->fetch_assoc()):
                            ?>
                                <video id="my-video" muted autoplay="false">
                                    <source src="../../adms/admin/<?= $row['vids'] ?>" type="video/mp4">
                                </video>
                            <?php endwhile; ?>
                            </div>
                        </div>

                        <div class="mainp2">
                            <div class="p p2">
                                <h2 style="margin: 0 10px 30px 10px; font-size: 19px;">360 Interior Tour</h2>
                                <p style="margin: 0 10px 20px 10px; color: white;">Our Virtual Interior Tour Service provides customers with a 360-degree view of the car's interior, allowing them to inspect every detail as if they were sitting inside the vehicle. </p>
                                <button class="TryIt" id="iframe-button">Come Inside</button>
                            </div>
                        </div>

                        <div id="video-popup">
                                <button class="close TryIt">Close</button>
                            <?php 
                            $i = 1;
                            $qry = $conn->query("SELECT * FROM vids where car_id = $id");
                            while($row = $qry->fetch_assoc()):
                            ?>
                                <video id="my-video-popup" controls autoplay="false" muted>
                                <source src="../../adms/admin/<?= $row['vids'] ?>" type="video/mp4"> 
                                </video>
                            <?php endwhile; ?>
                        </div>

                        <div class="iframe-popup">
                        <button class="close close-button TryIt">Close</button>
                            <iframe class="frame" src="https://idvdigital.com/360-vr/nissan/sentra/"></iframe>
                        </div>
                    </div>
                </div>
            </div>
</section>




        <!-- ==================== Details ==================== -->

<section class="CarsDet">
    <div class="CarSpcWrap">
        <div class="mainCars">
            <div style="display: flex; justify-content: center; text-align: center; margin: 15px 0 15px 0">
                <h1 style="font-size: 28px;">Car Specification</h1>
            </div>
            <div class="hl"></div>
            <div class="Cars_Sp">
            <?php 
					$i = 1;
						$qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type,
                        b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
                        on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
                        on m.car_type_id = ct.id where v.id = $id ");
						while($row = $qry->fetch_assoc()):
					?>
                <div class="row1"  >
                    <div class="col">
                        <h3 class="MainB">Brand </h3> <h3 class="sub"><?= $row['brand'] ?></h3>
                    </div>
                    <div class="col">
                        <h3 class="MainB">Model </h3> <h3 class="sub"><?= $row['model'] ?></h3>
                    </div>
                </div>
                <div class="row1"  >
                    <div class="col">
                        <h3 class="MainB">Type </h3> <h3 class="sub"><?= $row['car_type'] ?></h3>
                    </div>
                    <div class="col">
                        <h3 class="MainB">Year </h3> <h3 class="sub"><?= $row['Year'] ?></h3>
                    </div>
                </div>
                <div class="row1"  >
                    <div class="col">
                        <h3 class="MainB">Color </h3> <h3 class="sub"><?= $row['variant'] ?></h3>
                    </div>
                    <div class="col">
                        <h3 class="MainB">Mileage </h3> <h3 class="sub"><?= $row['mileage'] ?></h3>
                    </div>
                </div>
                <div class="row1"  >
                    <div class="col">
                        <h3 class="MainB">Engine </h3> <h3 class="sub"><?= $row['engine_type'] ?></h3>
                    </div>
                    <div class="col">
                        <h3 class="MainB">Cylinder </h3> <h3 class="sub"><?= $row['Cylinder'] ?></h3>
                    </div>
                </div>
                <div class="row1"  >
                    <div class="col">
                        <h3 class="MainB">Transmission </h3> <h3 class="sub"><?= $row['transmission_type'] ?></h3>
                    </div>
                    <div class="col">
                        <h3 class="MainB">Chasis Number </h3> <h3 class="sub"><?= $row['chasis_number'] ?></h3>
                    </div>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>



    <div class="DecTeckWraper">
        <div class="DescriptionCars">
            <div style="display: flex; justify-content: center; text-align: center; margin: 15px 0 15px 0">
                <h1 style="font-size: 28px;">Description</h1>
            </div>
            <div class="hl"></div>
            <div class="Cars_desc">
                <?php 
                    $i = 1;
                    $qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type,
                    b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
                    on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
                    on m.car_type_id = ct.id where v.id = $id ");
                    while($row = $qry->fetch_assoc()):
                        $description = $row['Description'];
                ?>
                <div class="description-wrapper">
                    <p class="description-preview" style="margin: 20px;"><?= substr($description, 0, 200) ?>...</p>
                    <p class="description-full" style="margin: 20px; display: none;"><?= $description ?></p>
                    <?php if (strlen($description) > 200): ?>
                        <button class="show-more-btn TryIt">Read More</button>
                        <button class="show-less-btn TryIt" style="display: none;">Read Less</button>
                    <?php endif; ?>
                </div>
                <?php endwhile; ?>
            </div>
        </div>

        <script>
            var showMoreBtns = document.querySelectorAll('.show-more-btn');
            for (var i = 0; i < showMoreBtns.length; i++) {
                showMoreBtns[i].addEventListener('click', function() {
                    var wrapper = this.parentNode;
                    var preview = wrapper.querySelector('.description-preview');
                    var full = wrapper.querySelector('.description-full');
                    var showLessBtn = wrapper.querySelector('.show-less-btn');
                    preview.style.display = 'none';
                    full.style.display = 'block';
                    this.style.display = 'none';
                    showLessBtn.style.display = 'block';
                });
            }

            var showLessBtns = document.querySelectorAll('.show-less-btn');
            for (var i = 0; i < showLessBtns.length; i++) {
                showLessBtns[i].addEventListener('click', function() {
                    var wrapper = this.parentNode;
                    var preview = wrapper.querySelector('.description-preview');
                    var full = wrapper.querySelector('.description-full');
                    var showMoreBtn = wrapper.querySelector('.show-more-btn');
                    preview.style.display = 'block';
                    full.style.display = 'none';
                    this.style.display = 'none';
                    showMoreBtn.style.display = 'block';
                });
            }
        </script>

        <div class="TechnologiesCars">
            <div style="display: flex; justify-content: center; text-align: center; margin: 15px 0 15px 0">
                <h1 style="font-size: 28px;">Technologies</h1>
            </div>
            <div class="hl"></div>
            <div class="Cars_tec">
                <?php 
                $i = 1;
                $qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type,
                b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
                on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
                on m.car_type_id = ct.id where v.id = $id ");
                while($row = $qry->fetch_assoc()):
                    $technologies = $row['Technologies'];
                ?>
                    <div class="description-wrapper">
                        <p class="description-preview" style="margin: 20px;"><?= substr($technologies, 0, 200) ?>...</p>
                        <p class="description-full" style="margin: 20px; display: none;"><?= $technologies ?></p>
                        <?php if (strlen($technologies) > 200): ?>
                            <button class="show-more-btn TryIt">Show More</button>
                            <button class="show-less-btn TryIt" style="display: none;">Show Less</button>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <script>
            var showMoreBtns = document.querySelectorAll('.show-more-btn');
            for (var i = 0; i < showMoreBtns.length; i++) {
                showMoreBtns[i].addEventListener('click', function() {
                    var wrapper = this.parentNode;
                    var preview = wrapper.querySelector('.description-preview');
                    var full = wrapper.querySelector('.description-full');
                    var showLessBtn = wrapper.querySelector('.show-less-btn');
                    preview.style.display = 'none';
                    full.style.display = 'block';
                    this.style.display = 'none';
                    showLessBtn.style.display = 'block';
                });
            }

            var showLessBtns = document.querySelectorAll('.show-less-btn');
            for (var i = 0; i < showLessBtns.length; i++) {
                showLessBtns[i].addEventListener('click', function() {
                    var wrapper = this.parentNode;
                    var preview = wrapper.querySelector('.description-preview');
                    var full = wrapper.querySelector('.description-full');
                    var showMoreBtn = wrapper.querySelector('.show-more-btn');
                    preview.style.display = 'block';
                    full.style.display = 'none';
                    this.style.display = 'none';
                    showMoreBtn.style.display = 'block';
                });
            }
        </script>
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

    <!--=============== PopUp Scripts ===============-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
$(document).ready(function(){
    $("#video-button").click(function(){
        var video = $("#my-video").get(0);
        video.load();
        $("#my-video").show();
        video.play();
        $("#video-popup").show();
    });

    $("#video-popup .close").click(function(){
        var video = $("#my-video").get(0);
        video.pause();
        video.currentTime = 0;
        $("#my-video").hide();
        $("#video-popup").hide();
    });
});
</script>

<script>
        const iframeButton = document.getElementById('iframe-button');
        const iframePopup = document.querySelector('.iframe-popup');

        iframeButton.addEventListener('click', () => {
            iframePopup.classList.toggle('show');
        });

        $(".close-button").click(function(){
        $(".iframe-popup").removeClass("show");
    });

    </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
</script>
</body>



</html>