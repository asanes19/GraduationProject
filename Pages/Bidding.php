<?php
include('../Connection.php');



$id = "";
if(isset($_GET['id'])){
    $id = $_GET["id"];
}


// number of results per page
$results_per_page = 6;

// get total number of news items
$num_news = $conn->query("SELECT COUNT(*) as total FROM news")->fetch_assoc()['total'];

// get current page number
$page_num = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// calculate offset for results based on current page number
$offset = ($page_num - 1) * $results_per_page;

// get news items for current page
$qry = $conn->query("SELECT v.*, m.model, m.engine_type, m.transmission_type,
b.name as `brand`, ct.name as `car_type` from `biddingcars` v inner join model_list m
on v.model_id = m.id inner join brand_list b on m.brand_id = b.id inner join car_type_list ct
on m.car_type_id = ct.id where v.status = 0 and v.delete_flag = 0  ORDER BY date_created DESC LIMIT $offset, $results_per_page");

// calculate total number of pages
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-n5cM/eM+Eml+h8iyy46hZPY1+srmjUNi9ya+x8C0n95gctnKtNYifdTDaHStn+E1cnYqMc1lFwg5z5l5d5/JKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css" />

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
            <a href="#" class="nav__link active-link neon_eff">Buy Car</a>
            <ul class="SubMenu">
              <li><a href="cards.php" class="nav__link Underline_Stroke">Buy Car</a></li>
              <li><a href="Request.php" class="nav__link Underline_Stroke">Request Car</a></li>
              <li><a href="Bidding.php" class="nav__link active-link neon_eff">Bidding</a></li>
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
                    <img style="justify-content: center; display: flex; width: 100%;" class="home__img" src="../assets/img/bid.png">
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
<?php
// Fetch highest bid, starting bid and total number of bids for this car
$car_id = $row['id'];
$query = "SELECT MAX(hights_bid) AS hights_bid FROM bids WHERE car_id = $car_id";
$result = mysqli_query($conn, $query);
$highest_bid_row = mysqli_fetch_assoc($result);
$hights_bid = $highest_bid_row['hights_bid'];

$query = "SELECT start_bid FROM biddingcars WHERE id = $car_id";
$result = mysqli_query($conn, $query);
$start_bid_row = mysqli_fetch_assoc($result);
$start_bid = $start_bid_row['start_bid'];

$query = "SELECT COUNT(*) AS total_bids FROM bids WHERE car_id = $car_id";
$result = mysqli_query($conn, $query);
$total_bids_row = mysqli_fetch_assoc($result);
$total_bids = $total_bids_row['total_bids'];

$bid_end_datetime = new DateTime($row['bid_end_datetime']);
?>


<article class="BidCard swiper-slide">
    <div style="position: absolute;" class="shapeX shape__smaller"></div>
    <div class="NewsImageCont">
        <div class="sayed">
        </div>
        <img src="<?= $row['Pic'] ?>" alt="" class="NewsImage">

    </div>
    <div style="display: flex; justify-content: center;" class="NewsTitle">
        <h1><?= $row['brand'] ?> <?= $row['model'] ?> - <?= $row['Year'] ?></h1>
    </div>
    <div class="NewsDesc">
        <div id="countdown">
            <span class="countdown-number" id="days"></span>
            <span class="countdown-label">days</span>
            <span class="countdown-number" id="hours"></span>
            <span class="countdown-label">hours</span>
            <span class="countdown-number" id="minutes"></span>
            <span class="countdown-label">minutes</span>
            <span class="countdown-number" id="seconds"></span>
            <span style="margin-right: 0;" class="countdown-label">seconds</span>
        </div>
        <input type="hidden" id="bid-end-datetime" value="<?= $row['bid_end_datetime'] ?>">
        <div style="display: flex; justify-content: center;">
            <div class="main-bid-info-row">
                <div class="cl-bid-info-row">
                    <div class="bid-info-row">
                        <div class="bid-info-label"><i class="fas fa-tag"></i></div>
                        <div class="bid-info-value"><?= $start_bid." AED" ?></div>
                    </div>
                    <div class="bid-info-row">
                        <div class="bid-info-label"><i class="fas fa-money-bill-alt"></i></div>
                        <div class="bid-info-value"><?= $hights_bid ? $hights_bid." AED" : "No bids yet" ?></div>
                    </div>
                    <div class="bid-info-row">
                        <div class="bid-info-label"><i class="fas fa-users"></i></div>
                        <div class="bid-info-value"><?= $total_bids ?></div>
                    </div>
                </div>
                <div class="cl-bid-info-row">
                    <div class="bid-info-row" style="width: 100%;">
                        <div class="bid-info-label"><i class="far fa-clock"></i></div>
                        <div class="bid-info-value"><?= $bid_end_datetime->format('d F Y h:i A') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons-container">
        <a href="BiddingPDP.php?id=<?= $row['id'] ?>" class="Bidbutton right"><i class="fa fa-car"></i></a>
        <?php 
if(isset($_SESSION['user_id'])) { // check if the user is logged in
?>
  <a id="openModalButton-<?= $row['id'] ?>" href="#" class="Bidbutton left"><i class="fa fa-gavel"></i></a>
<?php
} else {
?>
  <a href="login.php" class="Bidbutton left"><i class="fa fa-gavel"></i></a>
<?php
}
?>

    <div id="bidsModal-<?= $row['id'] ?>" class="modal" style="display: none;">
  <div class="box-modal">
    <div class="modal-header">
      <h2>Place a bid</h2>
      <h3><?= $row['brand'] ?> <?= $row['model'] ?> - <?= $row['Year'] ?></h3>
      <i class="fas fa-times close"></i>
    </div>
    <div class="modal-body">
        <div class="row11">
            <div class="colleft">
            </div>
      <div class="row22">
        <form method="post" action="submit_bid.php">
          <div class="entryarea">
            <input type="text" id="bid-amount" name="bid_amount" min="<?= $highest_bid + 1000 ?>" required>
            <span>Enter your bid amount</span>
          </div>
            <input type="hidden" name="car_id" value="<?= $row['id'] ?>">
            <input type="submit" name="submit_bid" value="Submit Bid">
        </form>
      </div>
    </div>
  </div>
</div>





<script>
    const bidsModal = document.querySelector(`#bidsModal-<?= $row['id'] ?>`);
    const openModalButton = document.querySelector(`#openModalButton-<?= $row['id'] ?>`);

    openModalButton.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();
        bidsModal.style.display = 'block';
    });

    document.addEventListener('click', (event) => {
        const target = event.target;
        const isClickInsideModal = bidsModal.contains(target);
        if (!isClickInsideModal) {
            bidsModal.style.display = 'none';
        }
    });

    const closeButton = bidsModal.querySelector('.close');
    closeButton.addEventListener('click', () => {
        bidsModal.style.display = 'none';
    });
</script>




</article>










<style>
.countdown-number {
    display: inline-block;
    font-size: 1rem;
    font-weight: 700;
    margin-right: 0.5rem;
}

.countdown-label {
    display: inline-block;
    font-size: 1rem;
    font-weight: 400;
    margin-right: 1rem;
}

#countdown {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 1rem 0;
}
</style>

<script>
  
// Set the date we're counting down to
const endDate = new Date(document.getElementById("bid-end-datetime").value).getTime();

// Update the count down every 1 second
const x = setInterval(function() {

    // Get the current time
    const now = new Date().getTime();

    // Calculate the time remaining
    const distance = endDate - now;

    // Calculate days, hours, minutes, and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="countdown"
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // If the countdown is finished, display "EXPIRED"
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);
</script>


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


