<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nugen</title>

  <!-- 
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->
  <link rel="icon" href="favicon.png" type="image/x-icon">

  <!--OWl carousel-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!--CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-... (checksum)" crossorigin="anonymous" />
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">


  <!-- bootstrap link -->

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS for Carousel -->
  <style>
    @keyframes colorChange {

      0%,
      100% {
        color: #462699;
        /* Start and end color */
      }

      50% {
        color: #9E83EA;
        /* Middle color */
      }
    }

    .animated-heading {
      font-size: 40px;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      animation: colorChange 3s infinite;
      /* Animation duration and repetition */


      @media (max-width: 600px) {
        input[type="text"]#search {
          font-size: 14px;

          /* Adjust font size for smaller screens */
        }
      }
    }
  </style>

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">
          <li>
            <a href="#" class="header-top-link">
              <ion-icon name="call-outline"></ion-icon>

              <span> 7599556060 </span>
            </a>
          </li>

          <li>
            <a href="mailto:info@homeverse.com" class="header-top-link">
              <ion-icon name="mail-outline"></ion-icon>

              <span>info@nugencommunications.com</span>
            </a>
          </li>

          <li>
            <a href="#" class="header-top-link">
              <ion-icon name="location-outline"></ion-icon>

              <address>A-64 3rd Floor, Noida-63</address>
            </a>
          </li>

        </ul>

        <div class="wrapper">
          <ul class="header-top-social-list" style="margin-bottom: 27px;">

            <li>
              <a href="https://www.facebook.com/profile.php?id=61557583432506&mibextid=ZbWKwL"
                class="header-top-social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li> <br>

            <li>
              <a href="https://www.instagram.com/nugencommunication?igsh=MW10MzNjb3FuOTNhMg=="
                class="header-top-social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li> <br>

            <li>
              <a href="https://www.linkedin.com/company/nugen-communication2/" class="header-top-social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li> <br>

            <!-- <li>
              <a href="https://youtube.com/shorts/m4eyDP6349I?feature=share" class="header-top-social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li> -->

          </ul>

          <!-- <button class="header-top-btn">Download</button> -->
        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <a href="#" class="logo">
          <img src="./assets/images/NUGEN_TM.png" alt="nugen logo">
        </a>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/NUGEN_TM.png" alt="nugen logo">
            </a>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <div class="navbar-bottom">
            <ul class="navbar-list">

              <li>
                <a href="#home" class="navbar-link" data-nav-link>Home</a>
              </li>

              <li>
                <a href="#about" class="navbar-link" data-nav-link>About</a>
              </li>

              <li>
                <a href="#service" class="navbar-link" data-nav-link>Service</a>
              </li>

              <li>
                <a href="#property" class="navbar-link" data-nav-link>Features</a>
              </li>

              <li>
                <a href="#form" class="navbar-link" data-nav-link>Contact</a>
              </li>

              <div class="dropdown">
                <li>
                  <a href="#" class="navbar-link" data-nav-link>Download</a>
                </li>
                <div class="dropdown-content">
                  <!-- Dropdown items -->
                  <li><a href="./assets/DOWNLOAD/NUEGEN_CRF.pdf" target="_blank">CAF Bandwidth</a></li>
                  <li><a href="./assets/DOWNLOAD/T&C- Pdf_inext.pdf" target="_blank">Terms & Conditions </a></li>

                  <!-- <li><a href="./assets\images\GM_haridwar.pdf" target="_blank">Item 3</a></li> -->
                </div>
              </div>


              <!-- <form action="submit_form.php" method="POST" id="search-bar">
                <input type="text" id="search" name="search" placeholder="Search...">
              </form> -->

            </ul>
          </div>

        </nav>

        <div class="header-bottom-actions">

          <!-- <button class="header-bottom-actions-btn" aria-label="Search">
            <ion-icon name="search-outline"></ion-icon>

            <span>Search</span>
          </button>

          <button class="header-bottom-actions-btn" aria-label="Profile">
            <ion-icon name="person-outline"></ion-icon>

            <span>Profile</span>
          </button>  -->

          <!-- <button class="header-bottom-actions-btn" aria-label="Cart">
            <ion-icon name="cart-outline"></ion-icon>

            <span>Cart</span>
          </button> -->

          <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
            <ion-icon name="menu-outline"></ion-icon>

            <span>Menu</span>
          </button>

        </div>

      </div>
    </div>

  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->
      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <ion-icon name="wifi"></ion-icon>

              <span>Welcome to Nugen Commmunication Private Limited </span>
            </p>

            <h2 class="h1 hero-title"> Connecting You to a Faster Future </h2>

            <p class="hero-text">
              "Discover a faster, more reliable internet connection that ensures smooth browsing and streaming."
            </p>
            <a href="#form" class="button-link">
              <button class="btn">Contact Us</button></a>
          </div>

          <figure class="hero-banner">
            <img src="./assets/images/banner.png" alt="Modern house model" class="w-100">
          </figure>

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about2.jpg" alt="House interior">

            <!-- <img src="./assets/images/about-banner-2.jpg" alt="House interior" class="abs-img"> -->
          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title"> "Innovative Internet Solutions for a Connected Future." </h2>

            <p class="about-text" style="text-align: justify;">
              we offer innovative, high-speed internet solutions for homes and businesses. Enjoy fast, reliable, and
              secure connections for seamless streaming, gaming, and productivity. Stay connected with us !
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="wifi-outline"></ion-icon>
                </div>

                <p class="about-item-text">24/7 Support </p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="locate-outline"></ion-icon>
                </div>

                <p class="about-item-text"> Highly Secure </p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="radio-outline"></ion-icon>
                </div>

                <p class="about-item-text"> Fastest Speed </p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>

                <p class="about-item-text"> Reliable </p>
              </li>

            </ul>

            <p class="callout">
              NUGEN COMMUNICATION PVT LTD's registered office address is A-64, Sector-63, Noida, Gautam Buddha Nagar,
              Noida, Uttar Pradesh, India, 201301
              click here for all the companies at 201301

            </p>

            <!-- <a href="service" class="btn"> Read More </a> -->

          </div>

        </div>
      </section>

      <!-- 
        - #SERVICE
      -->

      <section class="service" id="service">
        <div class="container">

          <!-- <p class="section-subtitle">Our Services</p> -->

          <h2 class="h2 section-title">Our Services</h2>
          <h3 class="mid-text">"Reliable connectivity, lightning-fast speeds, and advanced security features to protect
            your data. Unlimited data plans and extensive network coverage keep you connected anywhere, anytime. Get
            24/7 customer support and scalable solutions to grow your business".
          </h3> <br>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/bulk bandwidth.png" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Bulk Bandwidth</a>
                </h3>

                <p class="card-text">
                  "High-capacity internet access for large data transfers, heavy usage, multiple devices, high-speed
                  connectivity solutions, enterprise networks, data centers, cloud services, and scalable infrastructure
                  to support growing business needs.""
                </p>

                <a href="bulkbandwidth.html" class="card-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/p2p.png" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">P2P/NLD</a>
                </h3>

                <p class="card-text">
                  Point-to-Point: "Dedicated connection between two sites for secure, high-speed data transfer and
                  reliable communication."
                  NLD (National Long Distance): "High-capacity network connectivity across regions for fast data, voice,
                  and video services."
                </p>

                <a href="p2p.html" class="card-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/Enterprise.png" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Enterprise</a>
                </h3>

                <p class="card-text">
                  "Enterprise refers to a large organization or business, often with complex operations, multiple
                  locations, and a large workforce, requiring robust infrastructure, advanced technology, and scalable
                  solutions to drive growth and success."
                </p>

                <a href="enterprise.html" class="card-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #PROPERTY
      -->

      <section class="property" id="property">
        <div class="container">

          <!-- <p class="section-subtitle">Properties</p> -->

          <h2 class="h2 section-title">Features</h2>

          <ul class="property-list has-scrollbar">

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/features1.jpg" alt="New Apartment Nice View" class="w-100">
                  </a>
                </figure>

                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#"> OTT (Over-The-Top)</a>
                  </h3>

                  <p class="card-text">
                    OTT refers to the delivery of audio, video, and other media content over the internet, bypassing
                    traditional cable, broadcast, and satellite television platforms.
                  </p>
                  <br>
                  <p class="card-text">
                    OTT (Over-The-Top) is a streaming technology that allows users to access various media content
                    directly over the internet. It bypasses traditional broadcast and cable TV, offering a personalized
                    viewing experience. <br> <br> With OTT, users can watch their favorite shows, movies, and original
                    content
                    on-demand, at any time and on any device, making it a popular choice for modern entertainment.
                  </p>
                </div>
              </div>
            </li>

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/features2.jpg" alt="Modern Apartments" class="w-100">
                  </a>
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">IPTV (Internet Protocol Television) </a>
                  </h3>

                  <p class="card-text">

                    IPTV (Internet Protocol Television) is a system for delivering television programming and video
                    content over the internet, rather than through traditional broadcast or cable TV formats. <br> <br>
                    It
                    uses
                    internet protocol (IP) to transmit TV channels, programs, and videos, allowing users to access a
                    wide range of content on various devices, including TVs and etc.
                    <br><br>
                    IPTV typically offers high-quality video, with resolutions ranging from SD to 4K also offers a
                    library of content access at any time.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="./assets/images/features3.jpg" alt="Comfortable Apartment" class="w-100">
                  </a>
                </figure>

                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">(VOIP) Voice over Internet Protocol</a>
                  </h3>

                  <p class="card-text">
                    Voice over Internet Protocol (VoIP) is a technology
                    that enables voice communications over internet connections, replacing traditional phone lines.</p>
                  <br> <br>

                  <p class="card-text">
                    There are several types of VoIP, including residential VoIP, business VoIP, mobile VoIP, and cloud
                    VoIP. Popular VoIP providers include Skype, Vonage, RingCentral, Google Voice, and AT&T VoIP.

                    <br> <br>
                    While VOIP offers many advantages, it can be affected by internet connection quality, latency, and
                    security concerns.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- 
        - #Feedback

      -->
      <section class="blog" id="blog">

        <!-- <p class="section-subtitle">News & Blogs</p> -->

        <h2 class="h2 section-title">Feedback</h2>


        <ul class='blog-list has-scrollbar owl-carousel'>
          <?php
          // Include the database configuration file
          include_once 'db/config.php';

          // Query to fetch feedback data
          $sql = "SELECT * FROM feedback";
          $result = mysqli_query($conn, $sql);

          // Check if there are any results
          if (mysqli_num_rows($result) > 0) {
            // Loop through each row fetched from the database
            while ($row = mysqli_fetch_assoc($result)) {
              $name = htmlspecialchars($row['name']); // Sanitize output
              $img = htmlspecialchars($row['image']); // Sanitize output
              $msg = htmlspecialchars($row['text']); // Sanitize output
              ?>
              <li class='item'>
                <div class='blog-card'>
                  <figure class='card-banner'>
                    <img src='admin/<?php echo $img; ?>' alt='Feedback Image'>
                  </figure>
                  <div class='blog-content'>
                    <div class='blog-content-top'>
                      <ul class='card-meta-list'>
                        <li>
                          <a href='#' class='card-meta-link'>
                            <ion-icon name='person'></ion-icon>
                            <span>By: <?php echo $name; ?></span>
                          </a>
                        </li>
                      </ul>
                      <div class='cont-box'>
                        <p><?php echo $msg; ?></p>
                      </div>
                    </div>
                  </div>
                </div>

              </li>
              <?php
            }
          } else {
            // Handle case where no feedback entries are found
            echo "<li>No feedback available.</li>";
          }

          // Close database connection and any other cleanup
          
          mysqli_close($conn);
          ?>
        </ul>


        </div>
      </section>

      <!-- form -->
      <div class="container-form" id="form">
        <div class="contact-info">
          <br>
          <h3>Have any query?</h3> <br>
          <h1 class="animated-heading">Consult our professional if you have any dream project.</h1>
          <div class="info-tiles">
            <div class="info-tile">
              <h3 style="text-align: center;"> <i class="fas fa-envelope"></i> <br>Email Address</h3>

              <div class="main-items" id="main-items">
                <p style="text-align: center;"><a href=" mailto:info@nugencommunications.com">
                    info@nugencommunications.com</a></p>
              </div>

            </div>
            <div class="info-tile">
              <h3 style="text-align: center;"> <i class="fas fa-mobile-alt"></i> <br> Mobile Number</h3>
              <div class="main-items" id="main-items">
                <p style="text-align: center; ">+91-7599556060</p>
              </div>
            </div>
            <div class="info-tile">
              <h3 style="text-align: center; "> <i class="far fa-clock"></i> <br> Opening Times</h3>
              <div class="main-items" id="main-items">
                <p style="text-align: center;">Mon - Sat: 10am - 6pm<br> Sun: Closed</p>
              </div>
            </div>
            <div class="info-tile">
              <h3 style="text-align: center;"> <i class="fab fa-facebook"></i> <br> Follow Us</h3>
              <div class="main-items" id="main-items">
                <p style="text-align: center;"><a href="https://www.facebook.com/profile.php?id=61557583432506&mibextid=ZbWKwL">
                    Facebook </a></p>
              </div>

            </div>
          </div>
        </div>
        <div class="contact-form">
          <h1 style="color: #462699;">Contact Us </h1> <br>
          <h3>Got a question? Send us a message and we'll respond as soon as possible.</h3> <br>
          <form action="db/contact.php" method="POST">



            <input type="text" id="name" name="name" required placeholder="Name:">
            <input type="email" id="email" name="email" required placeholder="Email:">
            <input type="number" id="number" name="number" required placeholder="Mobile:">

            <input type="text" id="text" name="text" required placeholder="City:">
            <textarea id="address" name="address" rows="6" cols="2" required placeholder="Write a message:"></textarea>

            <button type="submit" formmethod="post">Submit</button>
          </form>
        </div>
      </div>

      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container" id="map-container">

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.31632595605!2d77.37823957500791!3d28.620280084637905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce558309e7001%3A0x8c1fea04b543b7b4!2sCynet%20India!5e0!3m2!1sen!2sin!4v1719483796909!5m2!1sen!2sin"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand ">
          <p class="section-text">
            <a href="#"><img src="assets/images/logo3.png" alt=""></a>
          </p>

          <ul class="contact-list">

            <p> Nugen Communication (New Generation Communication) is one of the largest ICT companies in the Northern
              Cape, integrating communication solutions to every significant market sector, focusing on the value added
              service of voice, convergence and data products.</p>
          </ul>
          <br>
          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/profile.php?id=61557583432506&mibextid=ZbWKwL" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/nugencommunication?igsh=MW10MzNjb3FuOTNhMg==" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.linkedin.com/company/nugen-communication2/" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <!-- <li>
              <a href="https://youtube.com/@techsaathigrow?si=C6brNICOq9sbwTkQ" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li> -->

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Ouicks Links</p>
            </li>

            <li>
              <a href="#" class="footer-link">Home</a>
            </li>

            <li>
              <a href="#" class="footer-link">About</a>
            </li>

            <li>
              <a href="#" class="footer-link"> Service</a>
            </li>

            <li>
              <a href="#" class="footer-link"> Features</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contact </a>
            </li>

            <li>
              <a href="#" class="footer-link">Download </a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            <li>
              <a href="#" class="footer-link"> Bulk Bandwidth </a>
            </li>

            <li>
              <a href="#" class="footer-link"> P2P/NLD </a>
            </li>

            <li>
              <a href="#" class="footer-link"> Enterprise </a>
            </li>
            <!-- 
            <li>
              <a href="#" class="footer-link">My account</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

            <li>
              <a href="#" class="footer-link">Promotional Offers</a>
            </li> -->

          </ul>

          <ul class="footer-list">

            <ul class="contact-list">
              <li>
                <p class="footer-list-title">Official info : </p>
              </li>
              <li>
                <a href="#" class="contact-link">
                  <ion-icon name="location-outline"></ion-icon>

                  <address>A-64 3rd Floor, Noida-63</address>
                </a>
              </li>

              <li>
                <a href="tel:+91-7599556060" class="contact-link">
                  <ion-icon name="call-outline"></ion-icon>

                  <span>+91-7599556060</span>
                </a>
              </li>

              <li>
                <a href="mailto:info@nugencommunications.com" class="contact-link">
                  <ion-icon name="mail-outline"></ion-icon>

                  <span>info@nugencommunications.com</span>
                </a>
              </li>

            </ul>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="#">Nugen Commmunications</a>. All Rights Reserved
        </p>

      </div>
    </div>

  </footer>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>