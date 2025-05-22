<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me | Jovianto Godjali</title>
  <link rel="icon" type="image/x-icon" href="/img/icon/favicon.png">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <?php $currentPage = 'about-me'; ?>

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
    }

    @media only screen and (max-width: 992px) {
      #contact {
        margin-top: 230px !important;
      }

      .photo {
        width: 90%;
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
</head>
<body data-page="<?php echo $currentPage; ?>">
  <!-- navbar -->
  <?php include 'include/navbar.php'; ?>

  <!-- overlay -->
  <?php include 'include/overlay.php'; ?>
  
  <!-- "Home" section -->
  <section data-section-name="Home" data-section-offset="-61">
    <div class="main-home-container container d-flex align-items-center">
      <div class="column w-100">
        <div class="row d-flex align-items-center">
          <div class="col-12 col-md-7 col-lg-6 order-2 order-md-1">
            <h1 class="text-center text-md-start position-relative cycling-text">
              <span id="animated-text" class="d-block position-absolute w-100 text-nowrap">
                <span>JOVIANTO GODJALI</span>
                <span>AKSHIRO</span>
              </span>
            </h1>

            <div class="d-flex">
              <a href="https://en.wikipedia.org/wiki/Web_development" target="_blank" rel="noopener noreferrer" class="text-center text-lg-start mt-3 mt-lg-4 role-about-me me-1 cursor-hoverable ms-auto ms-md-0">WEB DEVELOPER</a>
              <a href="https://en.wikipedia.org/wiki/Graphic_design" target="_blank" rel="noopener noreferrer" class="text-center text-lg-start mt-3 mt-lg-4 role-about-me ms-2 cursor-hoverable me-auto me-md-0">GRAPHIC DESIGNER</a>
            </div>

            <p class="mt-4 mb-0">
              I come from a computer science background, but I've always been more than just a “code person.” I'm naturally curious and always looking to learn something new—whether it's a programming trick, a design technique, or a better way to solve a problem.
              <br><br>
              From prototyping to tracking down weird coding bugs, I'm all about the little details. Maybe it's a love for quality. Maybe it's perfectionism. Honestly, it's probably both.
              <br><br>
              "Keep learning, and keep creating."
            </p>

            <a href="https://drive.google.com/file/d/12Khyhx9UM6NiO4aBEZNlN6mYdwPrfrxu/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="text-center text-md-start mt-4 d-block cursor-hoverable w-100-mobile">
              RESUME →
            </a>
          </div>
        
          <div class="col-12 col-md-5 col-lg-6 text-center order-1 order-md-2 mb-5 mb-md-0">
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
                          <img src="img/(about-me)/akshiro-freelance.png" alt="Akshiro Freelance">
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
                          <img src="img/(about-me)/hashmicro-internship.png" alt="HashMicro Internship">
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
                          <img src="img/(about-me)/binus-university.png" alt="BINUS University">
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
                          <img src="img/(about-me)/sma-santo-aloysius.png" alt="SMA Santo Aloysius">
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
                          <img src="img/(about-me)/hashmicro-certificate.png" alt="HashMicro Internship Certificate">
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
                          <img src="img/(about-me)/sololearn-certificate.png" alt="Sololearn Certificate">
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
                          <img src="img/(about-me)/oracle-database-certificate.png" alt="Oracle Database Certificate">
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
