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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
            <a href="#" class="nav__link active-link neon_eff">Buy Car</a>
            <ul class="SubMenu">
              <li><a href="cards.php" class="nav__link active-link neon_eff">Buy Car</a></li>
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
        <section class="popular section" id="popular">
            <h2 class="section__title" style="  margin-bottom: 20px;">
            You will find the car <br> of your dreams with us
            </h2>
<div style="display: flex;
    justify-content: center;">
<button class="button compare__button" onclick="compareProducts()">Compare</button>

</div>

            <div class="popular__container1 container swiper">

<!--=============== SearchBar ===============-->
<div class="input-box" style="margin: 30px;">
  <form method="post">
    <button class="submitbut " type="submit" name="submit">
      <i class="uil uil-check submit-icon"></i>
    </button>
    <div>
      <input type="text" name="search" style="font-size: 12px;" placeholder="Search Using Brand Or Model...">
      <span class="search">
        <button style="border: none;" type="button">
          <i class="uil uil-search search-icon"></i>
        </button>
      </span>
      <i class="uil uil-times close-icon"></i>
    </div>
  </form>

</div>

    
    <script>

function compareProducts() {
    var checkboxes = document.querySelectorAll('.compare__checkbox:checked');
    var selectedProducts = [];
    checkboxes.forEach(function(checkbox) {
        selectedProducts.push(checkbox.value);
    });
    if (selectedProducts.length < 2) {
        alert('Please select at least 2 products to compare.');
    } else {
        // Redirect to the comparison page with the selected products
        var url = 'compare.php?products=' + selectedProducts.join(',');
        window.location.href = url;
    }
}
</script>
                <div class="featured__container container">


              <!-- search query -->
<?php
if (isset($_POST["submit"])) {
    $con = new PDO("mysql:host=localhost;dbname=adms_db", 'root', '');
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT v.*, m.model, m.engine_type, m.transmission_type,
    b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
    on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
    on m.car_type_id = ct.id where model = '$str' ");
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
    if($row = $sth->fetch()) 
    {
        ?>
    <article class="popular__card swiper-slide">
        <div class="shapeX shape__smaller"></div>
        <h1 class="popular__title"><?= $row->brand ?></h1>
        <h3 class="popular__subtitle"><?= $row->model?></h3>
        <img src="../<?= $row->Pic ?>" alt="" class="popular__img">
        <div class="popular__data">
            <div class="popular__data-group">
                <i class="ri-dashboard-2-line"></i> <?= $row->mileage ?> 
            </div>
            <div class="popular__data-group">
                <i class="ri-exchange-funds-line"></i> <?= $row->transmission_type ?> 
            </div>
            <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i> <?= $row->Year ?>
            </div>
        </div>
            
        <h3 class="popular__price"><?= number_format($row->price, 2) ?> <P>AED</P> </h3>
        <a href="pdp.php?id=<?= $row->id ?>" class="button popular__button">
            <i class="ri-shopping-bag-2-line"></i>
        </a>
    </article>
        <?php
    }
    else {
        echo "Name Does Not Exist";
    }
} else {
    
    $i = 1;
    $products = array(); 
        
    $qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type,
        b.name as `brand`, ct.name as `car_type` from `vehicle_list` v inner join model_list m
        on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
        on m.car_type_id = ct.id where v.status = 0 and v.delete_flag = 0 order by abs(unix_timestamp(v.date_created)) asc ");
    
    while($row = $qry->fetch_assoc()):
    ?>
<article class="popular__card swiper-slide">
    <!-- checkbox  -->
    <div class="popular__compare">
        <input type="checkbox" class="compare__checkbox" name="compare[]" value="<?= $row['id'] ?>" />
    </div>

    <div class="shapeX shape__smaller"></div>
    <h1 class="popular__title"><?= $row['brand'] ?></h1>
    <h3 class="popular__subtitle"><?= $row['model'] ?></h3>
    <img src="../<?= $row['Pic'] ?>" alt="" class="popular__img" />
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

    <a href="pdp.php?id=<?= $row['id'] ?>" class="button popular__button">
        <i class="ri-shopping-bag-2-line"></i>
    </a>
</article>

    <?php endwhile;} ?>
    



    

                    
                </div>
                <div class="swiper-pagination"></div>
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
                SubmitIcon = document.querySelector(".submitbut");
            search.addEventListener("click", () => inputBox.classList.add("open"));
            search.addEventListener("click", () => SubmitIcon.classList.add("opensubmitbut"));
            closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
            closeIcon.addEventListener("click", () => SubmitIcon.classList.remove("opensubmitbut"));
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>



</html>


