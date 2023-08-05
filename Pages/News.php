<?php 
include('../Connection.php');


$results_per_page = 6;
$num_news = $conn->query("SELECT COUNT(*) as total FROM news")->fetch_assoc()['total'];
$page_num = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page_num - 1) * $results_per_page;
$qry = $conn->query("SELECT * FROM news ORDER BY id DESC LIMIT $offset, $results_per_page");
$num_pages = ceil($num_news / $results_per_page);
?>

<?php
include('LoginScript.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-5/b5QHnvFB8w0jKp4g4+JGG4UqqK6U1dl6O3d6fZWx6jKhh7lYH2U1XB7RzID6WmXPTyv2Qk1a7Rc+M/hflh8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <a href="News.php" class="nav__link active-link neon_eff">News</a>
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
                    <img style="justify-content: center; display: flex; width: 100%;" class="home__img" src="../assets/img/news.png">
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


<section class="NewsSection">
  <div class="news-grid">
    <?php 
    $i = 1;
    while($row = $qry->fetch_assoc()):
    ?>  
    <article class="NewsCard swiper-slide">
      <div style="position: absolute;" class="shapeX shape__smaller"></div>
      <div class="NewsImageCont">
      <div class="sayed">
        </div>
        <img src="<?= $row['Pic'] ?>" alt="" class="NewsImage">
      </div>
      <div class="NewsTitle">
        <h1><?= $row['Title'] ?></h1>
      </div>
      <div class="NewsDesc">
        <p><?= $row['Descriptionn'] ?></p>
      </div>
      <a href="article.php?id=<?= $row['id'] ?>" class="Newsbutton">Know More</a>
    </article>
    <?php endwhile; ?>

    <div class="pagination-links">
  <a href="?page=<?= $page_num - 1 ?>" class="pagination-arrow<?= $page_num == 1 ? ' disabled' : '' ?>">
    &laquo;
  </a>
  <?php for ($i = 1; $i <= $num_pages; $i++) : ?>
    <a href="?page=<?= $i ?>" class="pagination-link<?= $i == $page_num ? ' active' : '' ?>">
      <?= $i ?>
    </a>
  <?php endfor; ?>
  <a href="?page=<?= $page_num + 1 ?>" class="pagination-arrow<?= $page_num == $num_pages ? ' disabled' : '' ?>">
    &raquo;
  </a>
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


