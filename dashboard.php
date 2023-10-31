
<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Establish a connection to your database
$db = mysqli_connect('localhost', 'root', '', 'n');
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve the relevant data based on the logged-in user's details
$email = $_SESSION['email'];

$query = "SELECT * FROM register WHERE email = '$email'";
$result = mysqli_query($db, $query);

// Close the database connection
mysqli_close($db);
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Energym</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body class="sub_page about_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="./index.html">
            <span>
              Energym
            </span>
          </a>
          <div class="contact_nav" id="">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <img src="images/call.png" alt="" />
                  <span>9106157108</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <img src="images/envelope.png" alt="" />
                  <span>nihal@gmail.com</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./dashboard.php">
                  <img src="./images/logo.png" alt="" />
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.html">
                  <img src="#" alt="" />
                  <span>Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item ">
                    <a class="nav-link" href="./index.html">Home </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="./about.html">About <span class="sr-only">(current)</span> </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./service.html">Services </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contact.html">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
    <!-- end slider section -->
    <div style="text-align:center; padding:20px;">
<?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Process and display the data
            echo "<h1>Welcome, " .$row['fname'] . " " . $row['lname'] . "</h1>";
            echo "<p>Email: " . $row['email'] . "</p>";
            echo "<p>Gender: " . $row['gender'] . "</p>";
            echo "<p>Verification: " . $row['status'] . "</p>";
        }
    } else {
        echo "<p>No data found.</p>";
    }
    ?>
    </div>
    <div class="log">
      <button style="transform:translateX(900%);">
        <a href="./index.html">Logout</a>
        </button>
    </div>
  
    <!-- info section -->

  <section class="info_section layout_padding2-top">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h6>
            About Energym
          </h6>
          <p>
            Get in shape with personalized gym workouts and expert diet plans.
            Achieve your fitness goals with our comprehensive programs today!
          </p>
        </div>
        <div class="col-md-2 offset-md-1">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="./index2.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="./about.html">About </a>
            </li>
            <li class="">
              <a class="" href="./service.html">Services </a>
            </li>
            <li class="">
              <a class="" href="./contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="images/location-white.png" alt="">
              <span> No.1506, Apex Complex, Mumbai</span>
            </a>
            <a href="">
              <img src="images/call-white.png" alt="">
              <span>+91 9106157108</span>
            </a>
            <a href="">
              <img src="images/mail-white.png" alt="">
              <span> nihal.program@gmail.com</span>
            </a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

   <!-- footer section -->
   <section class="container-fluid footer_section ">
    <p>
      &copy; Design by
      <a href="https://www.linkedin.com/in/nihalparekh-webtech/">Nihal Parekh</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>
</html>