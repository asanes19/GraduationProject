<?php
include('../Connection.php');
include('LoginScript.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" class="favicon">

        <!--=============== SweetAlert ===============-->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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


                <!--==================== icons ====================-->

                <?php 
include('logos.php');
?>

 <!--==================== MainFrm ====================-->
 <section class="Upperform">
                <div style="display: flex; justify-content: center; text-align: center;">
                            <h1>Enter Your Car Information<br>And We Will Contact you</h1>
                        </div>
                        <div class="CenterDivs">

                        <div class="MainContainer">
                          
                        <div  class="LeftSide">
                        <h4 style="font-size: 22px;  margin: 10px" class="about__card-title">How It Works</h4>
                        <img style="width:100%;" src="../assets/img/sellcar1.jpg">
                        <div style="background-color: hsla(0, 0%, 100%, .1); width:100%; margin: 20px; border-radius: 10px;">
                        <p style="margin: 10px; text-align: justify;" class="about__card-description">Submit your car's information for evaluation. If we determine that your car is a good fit for our business, we will contact you. Our comprehensive service includes handling all necessary paperwork and details to present your car to potential buyers. We treat every car with exceptional care and make the selling process as easy and as possible. Ensuring that you get the best possible value for your car.</p>
                            </div>
                        </div>
                        <div class="vl2"></div>
                            <div class="Sell1FormDiv">
                        <form action="" method="POST" class="Sell1Form">

                            <div class="InputContainer">

                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" id="Name" name="Name" required>
                                        <span>Your Name</span>
                                    </div>
                                </div>
                            </div>

                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" id="Phone" name="Phone" required>
                                        <span>Phone Number</span>
                                    </div>
                                </div>
                            </div>

                            </div>
                            <div class="InputContainer">

                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" id="Company" name="Company" required>
                                        <span>Company Name</span>
                                    </div>
                                </div>
                            </div>

                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" id="model" name="model" required>
                                        <span>Cars's Model</span>
                                    </div>
                                </div>
                            </div>

                            </div>

                            <div class="InputContainer">
                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" name="Year" required>
                                        <span>Cars's Year</span>
                                    </div>
                                </div>
                            </div>
                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" name="Mileage" required>
                                        <span>Cars's Mileage</span>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="InputContainer">
                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" name="AskingPrice" required>
                                        <span>Asking Price</span>
                                    </div>
                                </div>
                            </div>
                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" name="Options" required>
                                        <span>Options</span>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="InputContainer">
                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" id="Specifications" name="Specifications" required>
                                        <span>Specifications</span>
                                    </div>
                                </div>
                            </div>
                            <div class="formsection">
                                <div class="formcontainer">
                                    <div class="entryarea">
                                        <input type="text" id="Description" name="Description" required>
                                        <span>Description</span>
                                    </div>
                                </div>
                            </div>
                            </div>

                                                                                                                      
        

                            <input onclick="myFunction()" type="Submit" name="Submit" value="Submit" id="Submit">

                          </form>

                          <?php

                          if(isset($_POST['Name']) && isset($_POST['Phone']) && isset($_POST['Company']) && isset($_POST['model']) && isset($_POST['Year']) && isset($_POST['Mileage']) && isset($_POST['AskingPrice']) && isset($_POST['Options']) && isset($_POST['Specifications']) && isset($_POST['Description'])){
                            $Name = $_POST['Name'];
                            $Phone = $_POST['Phone'];
                            $Company = $_POST['Company'];
                            $model = $_POST['model'];
                            $Year = $_POST['Year'];
                            $Mileage = $_POST['Mileage'];
                            $AskingPrice = $_POST['AskingPrice'];
                            $Options = $_POST['Options'];
                            $Specifications = $_POST['Specifications'];
                            $Description = $_POST['Description'];


                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "adms_db";

                            $conn = mysqli_connect($servername,$username,$password,$dbname);

                            if ($conn->connect_error) {
                                die('Could not connect to the database.');
                            }
                            else {
                                $stmt = $conn->prepare("insert into commoffers(Name, Phone, Company, Model, 
                                Year, Mileage, AskingPrice, Options, Specifications, Description)
                                values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                                $stmt->bind_param("sissiiisss",$Name, $Phone, $Company, 
                                $model, $Year, $Mileage, $AskingPrice, $Options, $Specifications, $Description);
                                $data_inserted_successfully = true;
                             
                                    if ($data_inserted_successfully) { ?>
                                        <script>
                                    function myFunction(){
                                    swal({
                                        title: "Success",
                                        text: "Data inserted",
                                        icon: "success",
                                    })
                                    };
                                    myFunction();
                                </script>
                                <?php } 
                                $stmt->execute();
                                $stmt->close();
                                $conn->close();
                                ?>
                                <script>
                                window.location.href='sell2.php'
                                </script>
                                <?php
                            }}
                                ?>




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