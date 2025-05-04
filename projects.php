<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jovianto Godjali | Projects</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <style>
    .items:hover {
      background: var(--light-red);
      color: var(--white);
    }

    #contact {
      margin-top: 301px !important;
    }

    @media only screen and (max-width: 1400px) {
      #contact {
        margin-top: 271px !important;
      }

      .line-content .col {
        margin-top: 150px;
      }
    }

    @media only screen and (max-width: 1200px) {
      #contact {
        margin-top: 240px !important;
      }

      .line-content .col {
        margin-top: 86px;
      }
    }

    @media only screen and (max-width: 992px) {
      #contact {
        margin-top: 245px !important;
      }

      .line-content .col {
        margin-top: 105px;
      }
    }

    @media only screen and (max-width: 768px) {
      .line-content {
        margin-top: 1115px;
      }

      #contact {
        margin-top: 216px !important;
      }

      .line-content-misc-works {
        margin-top: 185px;
      }

      #lineSection .misc-margin-top-first {
        margin-top: 45px;
        transform: translateY(6px);
      }

      .misc-margin-top-first .row, .misc-margin-top .row {
        min-height: 248px;
      }

      .line-content .col {
        margin-top: 29px;
      }
    }

    @media only screen and (max-width: 576px) {
      #lineSection p.text-md-start.text-center.my-4 {
        font-size: 12px;
      }
    }

    @media only screen and (max-width: 520px) {
      .line-content .last-col {
        margin-top: 8px;
      }

      .line-content-misc-works {
        margin-top: 206px;
      }
    }

    @media only screen and (max-width: 475px) {
      #lineSection .project-text-margin-top-last {
        margin-top: 31px;
      }

      .line-content-misc-works {
        margin-top: 185px;
      }
    }

    @media only screen and (max-width: 450px) {
      .misc-margin-top-2 {
        transform: translateY(6px);
      }
    }
  </style>

  <?php $currentPage = 'projects'; ?>
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

  <!-- "Projects" section -->
  <?php include 'include/darker-bg.php'; ?>
  <div id="lineSection">
    <section data-section-name="Projects" data-section-offset="1250">
      <div class="container">
        <div class="column">
          <div class="row">
            <div class="line-content text-center">
              <div class="cut-below">
                <hr class="cut-below-hr hr-middle">
                <p class="p-96 cut-below-items pb-2 pb-md-0">
                  WHAT I'VE BEEN
                </p>
              </div>

              <div class="cut-below">
                <hr class="cut-below-hr hr-middle d-none">
                <p class="p-96 cut-below-items pt-md-2 pt-2 mt-lg-1">
                  WORKING ON
                </p>
              </div>
            
              <div class="cut-below project-margin-top-first">
                <hr class="cut-below-hr hr-middle">
                <p class="p-64 cut-below-items pt-md-2 pt-2 mt-lg-1 pb-3 pb-md-0">
                  SOFTWARE CRM PAGE
                </p>
              </div>
              <p class="mt-4">
                2024 // DEVELOPMENT // BOOTSTRAP
              </p>

              <!-- project #1 (Software CRM Page) -->
              <div class="col-md-8 col-12 mx-auto project-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col">
                        <div class="project-img-wrapper">
                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(home)-portfolio/software-crm-page/software-crm-page.png" alt="Software CRM Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-md-start text-center my-4">
                          [Story behind the making of this work]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" class="items cursor-hoverable">HTML</a>
                          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" class="items cursor-hoverable">CSS</a>
                          <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" class="items cursor-hoverable">JavaScript</a>
                          <a href="https://en.wikipedia.org/wiki/PHP" target="_blank" class="items cursor-hoverable">PHP</a>
                          <a href="https://getbootstrap.com/" target="_blank" class="items cursor-hoverable">Bootstrap</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" class="items cursor-hoverable">Responsive Web Design</a>
                          <a href="https://code.visualstudio.com/" target="_blank" class="items cursor-hoverable">Visual Studio Code</a>
                          <a href="https://laragon.org/" target="_blank" class="items cursor-hoverable">Laragon</a>
                          <a href="https://git-scm.com/" target="_blank" class="items cursor-hoverable">GIT</a>
                          <a href="https://github.com/" target="_blank" class="items cursor-hoverable">GitHub</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="cut-below project-margin-top-not-first">
                <hr class="cut-below-hr hr-middle">
                <p class="p-64 cut-below-items pt-md-2 pt-2 mt-lg-1 pb-3 pb-md-0">
                  SKEMA HARGA PAGE
                </p>
              </div>
              <p class="mt-4">
                2023 // DEVELOPMENT // BOOTSTRAP
              </p>

              <!-- project #2 (Skema Harga Page) -->
              <div class="col-md-8 col-12 mx-auto project-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col">
                        <div class="project-img-wrapper">
                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(home)-portfolio/skema-harga-page/skema-harga-page.png" alt="Software CRM Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-md-start text-center my-4">
                          [Story behind the making of this work]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" class="items cursor-hoverable">HTML</a>
                          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" class="items cursor-hoverable">CSS</a>
                          <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" class="items cursor-hoverable">JavaScript</a>
                          <a href="https://en.wikipedia.org/wiki/PHP" target="_blank" class="items cursor-hoverable">PHP</a>
                          <a href="https://getbootstrap.com/" target="_blank" class="items cursor-hoverable">Bootstrap</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" class="items cursor-hoverable">Responsive Web Design</a>
                          <a href="https://code.visualstudio.com/" target="_blank" class="items cursor-hoverable">Visual Studio Code</a>
                          <a href="https://laragon.org/" target="_blank" class="items cursor-hoverable">Laragon</a>
                          <a href="https://git-scm.com/" target="_blank" class="items cursor-hoverable">GIT</a>
                          <a href="https://github.com/" target="_blank" class="items cursor-hoverable">GitHub</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="cut-below project-margin-top-not-first">
                <hr class="cut-below-hr hr-middle">
                <p class="p-64 cut-below-items pt-md-2 pt-2 mt-lg-1 pb-3 pb-md-0">
                  EVA HR PAGE
                </p>
              </div>
              <p class="mt-4">
                2023 // DEVELOPMENT // WORDPRESS
              </p>

              <!-- project #3 (EVA HR Page) -->
              <div class="col-md-8 col-12 mx-auto project-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col">
                        <div class="project-img-wrapper">
                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(home)-portfolio/eva-hr-page/eva-hr-page.png" alt="Software CRM Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-md-start text-center my-4">
                          [Story behind the making of this work]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" class="items cursor-hoverable">HTML</a>
                          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" class="items cursor-hoverable">CSS</a>
                          <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" class="items cursor-hoverable">JavaScript</a>
                          <a href="https://wordpress.com/" target="_blank" class="items cursor-hoverable">Wordpress</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" class="items cursor-hoverable">Responsive Web Design</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="cut-below project-margin-top-not-first">
                <hr class="cut-below-hr hr-middle">
                <p class="p-64 cut-below-items pt-md-2 pt-2 mt-lg-1 pb-3 pb-md-0">
                  KONEKSI PAGE
                </p>
              </div>
              <p class="mt-4">
                2023 // DEVELOPMENT // BOOTSTRAP
              </p>

              <!-- project #4 (Koneksi Page) -->
              <div class="col-md-8 col-12 mx-auto project-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col">
                        <div class="project-img-wrapper">
                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(home)-portfolio/koneksi-page/koneksi-page.png" alt="Software CRM Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-md-start text-center my-4">
                          [Story behind the making of this work]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" class="items cursor-hoverable">HTML</a>
                          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" class="items cursor-hoverable">CSS</a>
                          <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" class="items cursor-hoverable">JavaScript</a>
                          <a href="https://en.wikipedia.org/wiki/PHP" target="_blank" class="items cursor-hoverable">PHP</a>
                          <a href="https://getbootstrap.com/" target="_blank" class="items cursor-hoverable">Bootstrap</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" class="items cursor-hoverable">Responsive Web Design</a>
                          <a href="https://code.visualstudio.com/" target="_blank" class="items cursor-hoverable">Visual Studio Code</a>
                          <a href="https://laragon.org/" target="_blank" class="items cursor-hoverable">Laragon</a>
                          <a href="https://git-scm.com/" target="_blank" class="items cursor-hoverable">GIT</a>
                          <a href="https://github.com/" target="_blank" class="items cursor-hoverable">GitHub</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="cut-below project-margin-top-not-first">
                <hr class="cut-below-hr hr-middle">
                <p class="p-64 cut-below-items pt-md-2 pt-2 mt-lg-1 pb-3 pb-md-0">
                  AKSHIRO FREELANCE PAGE
                </p>
              </div>
              <p class="mt-4">
                2022 // WEB DESIGN // UI/UX DESIGN // DEVELOPMENT // WIX
              </p>

              <!-- project #5 (Akshiro Freelance Page) -->
              <div class="col-md-8 col-12 mx-auto project-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col last-col">
                        <div class="project-img-wrapper">
                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(home)-portfolio/akshiro-freelance-page/akshiro-freelance-page.png" alt="Software CRM Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top project-text-margin-top-last">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-md-start text-center my-4">
                          [Story behind the making of this work]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://www.wix.com/" target="_blank" class="items cursor-hoverable">Wix</a>
                          <a href="https://en.wikipedia.org/wiki/Graphic_design" target="_blank" class="items cursor-hoverable">Graphic Design</a>
                          <a class="items cursor-hoverable">UI/UX Design</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" class="items cursor-hoverable">Responsive Web Design</a>
                          <a href="https://www.adobe.com/id_en/products/photoshop.html" target="_blank" class="items cursor-hoverable">Photoshop</a>
                          <a href="https://www.getpaint.net/" target="_blank" class="items cursor-hoverable">Paint.NET</a>
                          <a href="https://www.adobe.com/id_en/products/aftereffects.html" target="_blank" class="items cursor-hoverable">After Effects</a>
                        </div>
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

    <!-- "Misc. Works" section -->
    <section data-section-name="Misc. Works" data-section-offset="260">
      <div class="container">
        <div class="column">
          <div class="row">
            <div class="line-content line-content-misc-works text-center">
              <div class="cut-below">
                <hr class="cut-below-hr hr-middle">
                <p class="p-96 cut-below-items pb-2 pb-md-0">
                  MISCELLANEOUS
                </p>
              </div>

              <div class="cut-below">
                <hr class="cut-below-hr hr-middle d-none">
                <p class="p-96 cut-below-items pt-md-2 pt-2 mt-lg-1">
                  WORKS
                </p>
              </div>
            
              <!-- misc. works #1 (CSL Tournament (Staff)) -->
              <div class="col mx-auto misc-margin-top-first">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-2 mb-md-0 mx-auto mx-md-0">
                          2025
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto ps-lg-5 ps-md-4 ps-2 pe-md-0 pe-2 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          CSL Tournament (Staff)
                        </p>
                        <p class="p-misc-24 mb-0">
                          LEAD GRAPHIC DESIGNER, DESIGNING LOGO,
                          BANNERS, SOCIAL MEDIA POST IMAGES,
                          PORTABLE SIGNAGE IMAGES, AND BROADCAST
                          OVERLAY SCREENS (ANIMATED)
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- misc. works #2 (MSC 2025 Tournament (Staff)) -->
              <div class="col mx-auto misc-margin-top misc-margin-top-2">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-2 mb-md-0 mx-auto mx-md-0">
                          2025
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto ps-lg-5 ps-md-4 ps-2 pe-md-0 pe-2 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          MSC 2025 Tournament (Staff)
                        </p>
                        <p class="p-misc-24 mb-0">
                          LEAD GRAPHIC DESIGNER, DESIGNING LOGO,
                          BANNERS, BADGES, CUSTOM MOUSEPADS, AND
                          BROADCAST OVERLAY SCREENS (ANIMATED)
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- misc. works #3 (SSOT24 Tournament (Staff)) -->
              <div class="col mx-auto misc-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-2 mb-md-0 mx-auto mx-md-0">
                          2024
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto ps-lg-5 ps-md-4 ps-2 pe-md-0 pe-2 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          SSOT24 Tournament (Staff)
                        </p>
                        <p class="p-misc-24 mb-0">
                          DESIGNING BANNERS, THUMBNAILS, SOCIAL
                          MEDIA POST IMAGES, AND INFOGRAPHICS
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- misc. works #4 (MSC 2024 Tournament (Staff)) -->
              <div class="col mx-auto misc-margin-top">
                <div class="image-text-section">
                  <div class="container p-0 container-no-padding-mobile">
                    <div class="row">
                      <div class="col-md-2 col-12 d-flex align-items-center">
                        <p class="mb-2 mb-md-0 mx-auto mx-md-0">
                          2024
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img"></div>
                      </div>

                      <div class="col-md-6 col-12 my-auto ps-lg-5 ps-md-4 ps-2 pe-md-0 pe-2 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          MSC 2024 Tournament (Staff)
                        </p>
                        <p class="p-misc-24 mb-0">
                          LEAD GRAPHIC DESIGNER, DESIGNING LOGO,
                          BANNERS, BADGES, AND BROADCAST OVERLAY SCREENS
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