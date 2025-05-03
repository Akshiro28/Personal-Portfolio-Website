<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jovianto Godjali | About Me</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <style>
    #contact {
      margin-top: 301px !important;
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
    }

    @media only screen and (max-width: 768px) {
      .line-content {
        margin-top: 1115px;
      }

      #contact {
        margin-top: 192px !important;
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
    <div class="main-home-container container d-flex flex-column">
      <div class="column">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h1 class="text-center text-lg-start">JOVIANTO GODJALI</h1>
            <p class="text-center text-lg-start">I'm a Front-end Web Developer with a huge passion on Graphic Design. Based on Indonesia. Bla bla bla.</p>
          </div>
        
          <div class="col-12 col-lg-6">
            <a href="" class="mx-auto cursor-hoverable d-block">Spline</a>
          </div>
        </div>
      </div>
    </div>
  </section>

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
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          Graphic Design Freelance
                        </p>
                        <p class="p-journey-24 mb-0">
                          AS AKSHIRO
                        </p>
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
                        <div class="about-me-journey-img"></div>
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
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          BINUS University
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
                        <div class="about-me-journey-img"></div>
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
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          PT. HashMicro Solusi Indonesia
                        </p>
                        <p class="p-journey-24 mb-0">
                          INTERNSHIP COMPLETION CERTIFICATE
                        </p>
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
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          Sololearn (HTML)
                        </p>
                        <p class="p-journey-24 mb-0">
                          SOLOLEARN DIGITAL CERTIFICATE
                        </p>
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
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto text-start ps-lg-5 ps-4 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          Database for Developers: Foundations
                        </p>
                        <p class="p-journey-24 mb-0">
                          ORACLE DIGITAL CERTIFICATE
                        </p>
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