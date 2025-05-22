<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects | Jovianto Godjali</title>
  <link rel="icon" type="image/x-icon" href="/img/icon/favicon.png">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <?php $currentPage = 'projects'; ?>

  <style>
    .items:hover {
      background: var(--light-blue);
      color: var(--white);
    }

    .project-margin-top .image-number {
      left: 0;
      z-index: 1;
      transform: translate(-50%, -50%);
    }

    #contact {
      margin-top: 301px !important;
    }

    .misc-works-img-border {
      border: 1px solid var(--white-twenty-percent);
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

      .p-32 {
        font-size: 24px;
      }
    }

    @media only screen and (max-width: 768px) {
      .line-content {
        margin-top: 1115px;
      }

      #contact {
        margin-top: 293px !important;
      }

      .line-content-misc-works {
        margin-top: 185px;
      }

      #lineSection .misc-margin-top-first {
        margin-top: 40px;
        transform: translateY(6px);
      }

      .misc-margin-top-first.col, .misc-margin-top.col {
        min-height: 300px;
      }

      .line-content .col {
        margin-top: 29px;
      }

      .misc-margin-top-2 {
        margin-top: 96px !important;
      }

      .misc-works-img-border {
        border: unset;
      }

      .misc-works-img-border img {
        border: 1px solid var(--white-twenty-percent);
      }

      .image-number {
        display: none;
      }

      .project-text-bg {
        right: 50%;
        font-size: 16px;
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
        margin-top: 176px;
      }
    }

    @media only screen and (max-width: 475px) {
      #lineSection .project-text-margin-top-last {
        margin-top: 31px;
      }

      .line-content-misc-works {
        margin-top: 155px;
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
    <div class="main-home-container container d-flex flex-column">
      <div class="column">
        <div class="row">
          <div class="col-12 col-md-6 my-auto order-2 order-md-1">
            <h1 class="text-center text-md-start position-relative cycling-text">
              <span id="animated-text" class="d-block position-absolute w-100 text-nowrap">
                <span>WEB DEVELOPER</span>
                <span>GRAPHIC DESIGNER</span>
              </span>
            </h1>

            <p class="mt-4">
              I love building websites that are clean, responsive, and just a little bold. I actually started out in graphic design—it's what first sparked my love for creative digital work. From there, I found my way into front-end development, where I could bring those visuals to life through code.
              <br><br>
              Come take a look at some of the work I'm proud of!
            </p>
          </div>
        
          <div class="col-12 col-md-6 text-center order-1 order-md-2 mb-5 mb-md-0">
            <img src="img/(projects)/projects.png" alt="Projects.png" class="photo">
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
                        <div class="project-img-wrapper position-relative">
                          <p class="image-number">01</p>
                          <a href="https://www.hashmicro.com/id/iklan/software-crm-terbaik/" class="p-32 project-text-bg cursor-hoverable-2" target="_blank" rel="noopener noreferrer">
                            VIEW SITE →
                          </a>

                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(projects)/software-crm-page.png" alt="Software CRM Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-start my-4">
                          This Bootstrap project took my skill to a new height of complexity, with more dynamic and visually rich components. I built large carousels, continuously sliding photo and logo sections, and layered in more complex layouts throughout the page. It was a solid project in combining structure and motion to keep things both functional and visually engaging.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">HTML</a>
                          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">CSS</a>
                          <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">JavaScript</a>
                          <a href="https://en.wikipedia.org/wiki/PHP" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">PHP</a>
                          <a href="https://getbootstrap.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Bootstrap</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Responsive Web Design</a>
                          <a href="https://code.visualstudio.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Visual Studio Code</a>
                          <a href="https://laragon.org/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Laragon</a>
                          <a href="https://git-scm.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GIT</a>
                          <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GitHub</a>
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
                        <div class="project-img-wrapper position-relative">
                          <p class="image-number">02</p>
                          <a href="https://www.hashmicro.com/id/offer/download-skema-harga-software-erp" class="p-32 project-text-bg cursor-hoverable-2" target="_blank" rel="noopener noreferrer">
                            VIEW SITE →
                          </a>

                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(projects)/skema-harga-page.png" alt="Skema Harga Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-start my-4">
                          This Bootstrap project let me push things further with more complex section designs, while still keeping everything responsive across devices. One of the key features I built was an interactive popup that tracked form progress—visually showing a completion percentage based on how many fields had been filled out. It was a fun implementation that blended logic with user experience.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">HTML</a>
                          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">CSS</a>
                          <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">JavaScript</a>
                          <a href="https://en.wikipedia.org/wiki/PHP" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">PHP</a>
                          <a href="https://getbootstrap.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Bootstrap</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Responsive Web Design</a>
                          <a href="https://code.visualstudio.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Visual Studio Code</a>
                          <a href="https://laragon.org/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Laragon</a>
                          <a href="https://git-scm.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GIT</a>
                          <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GitHub</a>
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
                        <div class="project-img-wrapper position-relative">
                          <p class="image-number">03</p>
                          <a href="https://www.eva-hr.com/" class="p-32 project-text-bg cursor-hoverable-2" target="_blank" rel="noopener noreferrer">
                            VIEW SITE →
                          </a>

                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(projects)/eva-hr-page.png" alt="EVA HR Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-start my-4">
                          This project marked my first introduction to WordPress, and it opened up a whole new side of development for me. I was once again focused solely on the technical side, but this time I got to explore layouting within the WordPress ecosystem. I also got hands-on with custom JavaScript to add interactive behaviors, and built popups that worked seamlessly within the project's constraints.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">HTML</a>
                          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">CSS</a>
                          <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">JavaScript</a>
                          <a href="https://wordpress.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">WordPress</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Responsive Web Design</a>
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
                        <div class="project-img-wrapper position-relative">
                          <p class="image-number">04</p>
                          <a href="https://www.koneksi.co/" class="p-32 project-text-bg cursor-hoverable-2" target="_blank" rel="noopener noreferrer">
                            VIEW SITE →
                          </a>

                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(projects)/koneksi-page.png" alt="Koneksi Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-start my-4">
                          This was one of the earliest projects I worked on during my internship. I was in charge of the development side only, with the design, and content handled by other divisions. It taught me a lot about collaborating in a team setting, making sure my code matched the design team's vision. I also got hands-on experience with building responsive pages for mobile and implementing interactive elements like carousels and accordions. It was a foundational project that helped me grow quickly in both teamwork and technical skills.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">HTML</a>
                          <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">CSS</a>
                          <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">JavaScript</a>
                          <a href="https://en.wikipedia.org/wiki/PHP" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">PHP</a>
                          <a href="https://getbootstrap.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Bootstrap</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Responsive Web Design</a>
                          <a href="https://code.visualstudio.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Visual Studio Code</a>
                          <a href="https://laragon.org/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Laragon</a>
                          <a href="https://git-scm.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GIT</a>
                          <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GitHub</a>
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
                        <div class="project-img-wrapper position-relative">
                          <p class="image-number">05</p>
                          <a href="https://akshiro.wixsite.com/akshiro" class="p-32 project-text-bg cursor-hoverable-2" target="_blank" rel="noopener noreferrer">
                            VIEW SITE →
                          </a>

                          <div class="position-relative overflow-hidden w-100 h-100">
                            <img src="img/(projects)/akshiro-freelance-page.png" alt="Akshiro Freelance Page" class="project-img">
                          </div>
                        </div>
                        <div class="cut-below project-text-margin-top project-text-margin-top-last">
                          <hr class="cut-below-hr hr-middle">
                          <p class="p-36 cut-below-items pb-2">
                            PROJECT OVERVIEW
                          </p>
                        </div>

                        <p class="text-start my-4">
                          This was a personal project I built using Wix, back when I had little to no experience with front-end coding. It served as a space to showcase my custom graphic design commissions, and even without writing a single line of code, I created everything from scratch—layout, assets, content, and copy. It was the project that first sparked my interest in front-end development and introduced me to the fun of shaping a digital space. Looking back, it was the real starting point of my journey into creative digital work.
                        </p>

                        <div class="flex-container justify-content-center p-gray">
                          <a href="https://www.wix.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Wix</a>
                          <a href="https://en.wikipedia.org/wiki/Graphic_design" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Graphic Design</a>
                          <a class="items cursor-hoverable">UI/UX Design</a>
                          <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Responsive Web Design</a>
                          <a href="https://www.adobe.com/id_en/products/photoshop.html" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Photoshop</a>
                          <a href="https://www.getpaint.net/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Paint.NET</a>
                          <a href="https://www.adobe.com/id_en/products/aftereffects.html" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">After Effects</a>
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
    <section data-section-name="Misc. Works" data-section-offset="55">
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
                      <div class="col-md-1 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          2025
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(projects)/csl-staff.png" alt="CSL Tournament">
                        </div>
                      </div>

                      <div class="col-md-7 col-12 my-auto ps-lg-4 ps-md-4 ps-2 pe-md-0 pe-2 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          CSL Tournament (Staff)
                        </p>
                        <p class="p-misc-24 mb-0">
                          [LEAD GRAPHIC DESIGNER] | DESIGNED: LOGO,
                          BANNERS, SOCIAL MEDIA POST IMAGES,
                          PORTABLE SIGNAGE IMAGES, AND BROADCAST
                          OVERLAY SCREENS (ANIMATED)
                        </p>
                        <a class="button-white-bg cursor-hoverable" href="https://osu.ppy.sh/community/forums/topics/2007891?n=1" target="_blank" rel="noopener noreferrer">
                          VIEW TOURNAMENT PAGE →
                        </a>
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
                      <div class="col-md-1 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          2025
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center misc-works-img-border">
                          <img src="img/(projects)/msc2-staff.png" alt="MSC 2025 Tournament">
                        </div>
                      </div>

                      <div class="col-md-7 col-12 my-auto ps-lg-4 ps-md-4 ps-2 pe-md-0 pe-2 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          MSC 2025 Tournament (Staff)
                        </p>
                        <p class="p-misc-24 mb-0">
                          [LEAD GRAPHIC DESIGNER] | DESIGNED: LOGO,
                          BANNERS, BADGES, CUSTOM MOUSEPADS, AND
                          BROADCAST OVERLAY SCREENS (ANIMATED)
                        </p>
                        <a class="button-white-bg cursor-hoverable" href="https://osu.ppy.sh/community/forums/topics/2009467?n=1" target="_blank" rel="noopener noreferrer">
                          VIEW TOURNAMENT PAGE →
                        </a>
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
                      <div class="col-md-1 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          2024
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center">
                          <img src="img/(projects)/ssot-staff.png" alt="SSOT Tournament">
                        </div>
                      </div>

                      <div class="col-md-7 col-12 my-auto ps-lg-4 ps-md-4 ps-2 pe-md-0 pe-2 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          SSOT24 Tournament (Staff)
                        </p>
                        <p class="p-misc-24 mb-0">
                          DESIGNED: BANNERS, THUMBNAILS, SOCIAL
                          MEDIA POST IMAGES, AND INFOGRAPHICS
                        </p>
                        <a class="button-white-bg cursor-hoverable" href="https://osu.ppy.sh/community/forums/topics/1866151?n=1" target="_blank" rel="noopener noreferrer">
                          VIEW TOURNAMENT PAGE →
                        </a>
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
                      <div class="col-md-1 col-12 d-flex align-items-center">
                        <p class="mb-3 mb-md-0 mx-auto mx-md-0">
                          2024
                        </p>
                      </div>

                      <div class="col-md-4 col-12 pe-lg-4 pe-0">
                        <div class="about-me-journey-img d-flex justify-content-center misc-works-img-border">
                          <img src="img/(projects)/msc-staff.png" alt="MSC 2024 Tournament">
                        </div>
                      </div>

                      <div class="col-md-7 col-12 my-auto ps-lg-4 ps-md-4 ps-2 pe-md-0 pe-2 text-center text-md-start mt-3 mt-md-auto">
                        <p class="mb-2">
                          MSC 2024 Tournament (Staff)
                        </p>
                        <p class="p-misc-24 mb-0">
                          [LEAD GRAPHIC DESIGNER] | DESIGNED: LOGO,
                          BANNERS, BADGES, AND BROADCAST OVERLAY SCREENS
                        </p>
                        <a class="button-white-bg cursor-hoverable" href="https://osu.ppy.sh/community/forums/topics/1852945?n=1" target="_blank" rel="noopener noreferrer">
                          VIEW TOURNAMENT PAGE →
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
