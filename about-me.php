<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me | Jovianto Godjali</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <style>
    #contact {
      margin-top: 301px !important;
    }

    .role-about-me {
      background: var(--black-seven-percent);
      border-radius: 4px;
      padding: 8px 20px 6px 20px;
      width: fit-content;
      color: var(--change-gray);
      transition: background 0.3s ease, color 0.3s ease;
    }

    .role-about-me:hover {
      background: var(--light-blue);
      color: var(--primary-dark-color);
    }

    @media only screen and (max-width: 1200px) {
      #contact {
        margin-top: 206px !important;
      }

      #animated-text span {
        font-size: 48px;
      }
    }

    @media only screen and (max-width: 992px) {
      #contact {
        margin-top: 230px !important;
      }
    }

    @media only screen and (max-width: 768px) {
      .line-content {
        margin-top: 1115px;
      }

      #contact {
        margin-top: 251px !important;
      }

      .line-content-certificate {
        margin-top: 272px !important;
      }

      .line-content .col {
        margin-top: 151px;
      }
    }

    @media only screen and (max-width: 400px) {
     #contact {
        margin-top: 233px !important;
      }
    }
  </style>

  <?php $currentPage = 'about-me'; ?>
</head>
<body data-page="<?php echo $currentPage; ?>">
  <!-- navbar -->
  <?php include 'include/navbar.php'; ?>

  <!-- overlay -->
  <?php include 'include/overlay.php'; ?>
  
  <!-- "Home" section -->
  <section data-section-name="Home">
    <div class="main-home-container container d-flex align-items-center">
      <div class="column w-100">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-lg-6">
            <h1 class="text-center text-lg-start position-relative" style="height: 2em;">
              <span id="animated-text" class="d-block position-absolute w-100 text-nowrap">
                <span>JOVIANTO GODJALI</span>
                <span>AKSHIRO</span>
              </span>
            </h1>

            <div class="d-flex">
              <a href="https://en.wikipedia.org/wiki/Web_development" target="_blank" rel="noopener noreferrer" class="text-center text-lg-start mt-4 role-about-me me-1 cursor-hoverable">WEB DEVELOPER</a>
              <a href="https://en.wikipedia.org/wiki/Graphic_design" target="_blank" rel="noopener noreferrer" class="text-center text-lg-start mt-4 role-about-me ms-2 cursor-hoverable">GRAPHIC DESIGNER</a>
            </div>

            <p class="text-center text-lg-start mt-4 mb-0">
              I'm a front-end developer based in Indonesia who loves both structure and style. Whether it's crafting clean layouts or experimenting with animations, I enjoy building digital experiences that are polished, fun, and just a little unexpected.
              <br><br>
              From prototyping to tracking down weird coding bugs, I'm all about the little details. Maybe it's a love for quality. Maybe it's perfectionism. Honestly, it's probably both.
              <br><br>
              I'm driven by goals, obsessed with the details, and always curious—especially when it helps me grow, both personally and professionally.
            </p>
          </div>
        
          <div class="col-12 col-lg-6 text-center">
            <img src="img/(about-me)/me.png" alt="Photo.png" class="photo">
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="position-relative">
    <div id="progressBarIntoLineSectionContainer">
      <div id="progressBarIntoLineSection"></div>
    </div>
  </div>

  <!-- "My Journey" section -->
  <?php include 'include/darker-bg.php'; ?>
  <div id="lineSection">
    <section data-section-name="My Journey" data-section-offset="1250">
      <div class="container">
        <div class="column">
          <div class="row">
            <div class="line-content text-center">
              <div class="cut-below">
                <hr class="cut-below-hr hr-middle">
                <p class="p-96 cut-below-items pb-2 pb-md-0">
                  A QUICK SCROLL
                </p>
              </div>

              <div class="cut-below">
                <hr class="cut-below-hr hr-middle d-none">
                <p class="p-96 cut-below-items pt-md-2 pt-2 mt-lg-1">
                  THROUGH MY JOURNEY
                </p>
              </div>
            
              <!-- journey #1 (Graphic Design Freelance) -->
              <div class="col mx-auto journey-margin-top-first">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0 text-start">
                          2021-Ongoing
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(about-me)/akshiro-freelance.png" alt="">
                        </div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          Graphic Design Freelance
                        </p>
                        <p class="p-journey-24 mb-0">
                          AS AKSHIRO
                        </p>
                        <a class="button-white-bg cursor-hoverable" href="https://akshiro.wixsite.com/akshiro" target="_blank" rel="noopener noreferrer">
                          VIEW SITE →
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- journey #2 (PT. HashMicro Solusi Indonesia) -->
              <div class="col mx-auto journey-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          2023-2024
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(about-me)/hashmicro-internship.png" alt="">
                        </div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          PT. HashMicro Solusi Indonesia
                        </p>
                        <p class="p-journey-24 mb-0">
                          1 YEAR INTERNSHIP (FRONT-END DEVELOPER)
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- journey #3 (BINUS University) -->
              <div class="col mx-auto journey-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          2020-2024
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(about-me)/binus-university.png" alt="">
                        </div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          BINUS University Bandung
                        </p>
                        <p class="p-journey-24 mb-0">
                          BACHELOR'S DEGREE, COMPUTER SCIENCE MAJOR
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- journey #4 (SMA Santo Aloysius 1 Bandung) -->
              <div class="col mx-auto journey-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          2017-2020
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(about-me)/sma-santo-aloysius.png" alt="">
                        </div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          SMA Santo Aloysius 1 Bandung
                        </p>
                        <p class="p-journey-24 mb-0">
                          HIGH SCHOOL DIPLOMA (IPA - SCIENCE)
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- "Certificate" section -->
    <section data-section-name="Certificate" data-section-offset="260">
      <div class="container">
        <div class="column">
          <div class="row">
            <div class="line-content line-content-certificate text-center">
              <div class="cut-below">
                <hr class="cut-below-hr hr-middle">
                <p class="p-96 cut-below-items pb-2 pb-md-0">
                  CERTIFICATES
                </p>
              </div>

              <div class="cut-below">
                <hr class="cut-below-hr hr-middle d-none">
                <p class="p-96 cut-below-items pt-md-2 pt-2 mt-lg-1">
                  AND ACHIEVEMENTS
                </p>
              </div>
            
              <!-- certificate #1 (PT. HashMicro Solusi Indonesia) -->
              <div class="col mx-auto journey-margin-top-first">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          Mar. 2024
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(about-me)/hashmicro-certificate.png" alt="">
                        </div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          PT. HashMicro Solusi Indonesia Internship
                        </p>
                        <p class="p-journey-24 mb-0">
                          INTERNSHIP COMPLETION CERTIFICATE
                        </p>
                        <a class="button-white-bg cursor-hoverable" href="https://drive.google.com/file/d/1HXZxFfA2U2jLf32rRZ1yAmUzUU9jnnkz/view?usp=sharing" target="_blank" rel="noopener noreferrer">
                          VIEW CERTIFICATE →
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- certificate #2 (Sololearn (HTML)) -->
              <div class="col mx-auto journey-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          Nov. 2022
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(about-me)/sololearn-certificate.png" alt="">
                        </div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          Sololearn (HTML)
                        </p>
                        <p class="p-journey-24 mb-0">
                          SOLOLEARN DIGITAL CERTIFICATE
                        </p>
                        <a class="button-white-bg cursor-hoverable" href="https://drive.google.com/file/d/1Q_4SQdekGojLA34aKCbeG5xNP2KkV3ef/view" target="_blank" rel="noopener noreferrer">
                          VIEW CERTIFICATE →
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- certificate #3 (BINUS University) -->
              <div class="col mx-auto journey-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          Oct. 2021
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(about-me)/oracle-database-certificate.png" alt="">
                        </div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          Database for Developers: Foundations
                        </p>
                        <p class="p-journey-24 mb-0">
                          ORACLE DIGITAL CERTIFICATE
                        </p>
                        <a class="button-white-bg cursor-hoverable" href="https://drive.google.com/file/d/1UIgW3NJFTAsbpFwAkLqaM2GBm1Ls6J4b/view" target="_blank" rel="noopener noreferrer">
                          VIEW CERTIFICATE →
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- "contact" section -->
              <?php include 'include/contact.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Bootstrap -->
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- GSAP -->
  <script src="js/gsap.min.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>

  <!-- Lenis -->
  <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>

  <!-- JS Scripts -->
  <script src="js/scripts.js"></script>
</body>
</html>
