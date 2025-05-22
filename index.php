<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Jovianto Godjali</title>
  <link rel="icon" type="image/x-icon" href="/img/icon/favicon.png">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <?php $currentPage = 'home'; ?>
</head>
<body data-page="<?php echo $currentPage; ?>">
  <!-- navbar -->
  <?php include 'include/navbar.php'; ?>

  <!-- overlay -->
  <?php include 'include/overlay.php'; ?>

  <!-- "Home" section -->
  <section data-section-name="Home" data-section-offset="-61">
    <div class="main-home-container position-relative container">
      <div class="column">
        <div class="row">
          <div class="home-text">
            <div class="reveal-wrapper">
              <div class="content-inside-reveal-wrapper mx-auto">
                <h1 class="text-center"><span class="home-span-text">[</span> JOVIANTO GODJALI <span class="home-span-text">]</span></h1>
              </div>
              <div class="content-inside-reveal-wrapper mx-auto">
                <p>Come and see <span class="underline cursor-hoverable-2" id="goToProjects" data-section-name="Portfolio">my projects →</span></p>
              </div>

              <div class="content-inside-reveal-wrapper mx-auto">
                  <div class="scroll-down mx-auto">
                    <div class="scroll-down-circle mx-auto"></div>
                  </div>

                  <svg class="arrow-down-svg d-flex mx-auto" width="10" height="6" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="black" stroke-width="1">
                    <polyline points="1,1 5,5 9,1" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="spline">
      <img src="img/(home)-portfolio/Spline-img.png" alt="Spline">
    </div>

    <p class="text-line">WELCOME TO MY PAGE!</p>
    <p class="text-line">WEB DEVELOPER</p>
    <p class="text-line">GRAPHIC DESIGNER</p>
  </section>

  <!-- "About Me" section -->
  <section class="about-me" data-section-name="About Me" data-section-offset="-81">
    <div class="container">
      <div class="column">
        <div class="row">
          <div class="col-md-6 col-12 d-flex flex-column">
            <div class="about-me-card-header">
              <p class="p-36 mb-0">GET TO KNOW ME!</p>
            </div>

            <div class="about-me-card-content h-100">
              <p class="p-gray">
                I'm a front-end developer based in Indonesia with a creative twist—I've got a thing for graphic design too! I'm the kind of person who's always exploring new ideas, pushing limits, and making the digital space a more exciting place.
                <br><br>
                Something that looks good also makes me feel good—so let's build something cool together!
              </p>
              <a href="about-me" class="d-block text-center w-100-mobile cursor-hoverable mt-4">MORE ABOUT ME →</a>
              <button class="mt-3 cursor-hoverable" data-section-name="Contact">CONTACT</button>
            </div>
          </div>

          <div class="col-md-6 col-12 mt-md-0 mt-3">
            <div class="about-me-card-header">
              <p class="p-36 mb-0">MY SKILLS</p>
            </div>
            <div class="about-me-card-content">
              <div class="flex-container p-gray">
                <a href="https://en.wikipedia.org/wiki/HTML" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">HTML</a>
                <a href="https://en.wikipedia.org/wiki/CSS" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">CSS</a>
                <a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">JavaScript</a>
                <a href="https://en.wikipedia.org/wiki/PHP" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">PHP</a>
                <a href="https://gsap.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GSAP</a>
                <a href="https://getbootstrap.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Bootstrap</a>
                <a href="https://en.wikipedia.org/wiki/Responsive_web_design" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Responsive Web Design</a>
                <a href="https://en.wikipedia.org/wiki/Graphic_design" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Graphic Design</a>
                <a href="https://www.wix.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Wix</a>
                <a href="https://wordpress.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">WordPress</a>
              </div>
            </div>

            <div class="about-me-card-header mt-3 mt-md-4">
              <p class="p-36 mb-0">DEVELOPMENT TOOLS</p>
            </div>

            <div class="about-me-card-content">
              <div class="flex-container p-gray">
                <a href="https://www.adobe.com/id_en/products/photoshop.html" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Photoshop</a>
                <a href="https://www.getpaint.net/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Paint.NET</a>
                <a href="https://www.adobe.com/id_en/products/aftereffects.html" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">After Effects</a>
                <a href="https://www.figma.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Figma</a>
                <a href="https://code.visualstudio.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Visual Studio Code</a>
                <a href="https://git-scm.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GIT</a>
                <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">GitHub</a>
                <a href="https://laragon.org/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Laragon</a>
                <a href="https://spline.design/" target="_blank" rel="noopener noreferrer" class="items cursor-hoverable">Spline</a>
              </div>
            </div>
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

  <!-- "Portfolio" section -->
  <?php include 'include/darker-bg.php'; ?>
  <section id="lineSection" data-section-name="Portfolio" data-section-offset="1250">
    <div class="container">
      <div class="column">
        <div class="row">
          <div class="line-content text-center">
            <div class="cut-below">
              <hr class="cut-below-hr">
              <p class="p-96 cut-below-items">PORTFOLIO</p>
            </div>
          
            <!-- portfolio #1 (Software CRM Page) -->
            <div class="col-lg-10 col mx-auto portfolio-margin-top-first">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="image-container blur-fade-in">
                    <div class="image-wrapper">
                      <div class="overflow-hidden w-100 h-100 position-relative">
                        <img src="img/(home)-portfolio/software-crm-page/software-crm-page.png" alt="Software CRM Page" class="featured-image img-scroll" />
                        <img src="img/(home)-portfolio/software-crm-page/software-crm-page-top.png" alt="" class="featured-image" />
                        <img src="img/(home)-portfolio/software-crm-page/software-crm-page-bottom.png" alt="" class="featured-image-overlay-bottom" />
                      </div>
                    </div>

                    <p class="image-number-right image-number">01</p>
                  </div>

                  <div class="image-text-overlay-right">
                    <p class="p-64 blur-fade-in text-bg mb-0">SOFTWARE CRM PAGE</p>
                    <p class="mt-4 blur-fade-in">2024 // DEVELOPMENT // BOOTSTRAP</p>

                    <a href="https://www.hashmicro.com/id/iklan/software-crm-terbaik/" target="_blank" rel="noopener noreferrer" class="blur-fade-in mt-1 bold cursor-hoverable">
                      VIEW SITE →
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- portfolio #2 (Skema Harga Page) -->
            <div class="col-lg-10 col mx-auto portfolio-margin-top">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="image-container ms-auto blur-fade-in">
                    <div class="image-wrapper">
                      <div class="overflow-hidden w-100 h-100 position-relative">
                        <img src="img/(home)-portfolio/skema-harga-page/skema-harga-page.png" alt="Skema Harga Page" class="featured-image img-scroll" />
                        <img src="img/(home)-portfolio/skema-harga-page/skema-harga-page-top.png" alt="" class="featured-image" />
                        <img src="img/(home)-portfolio/skema-harga-page/skema-harga-page-bottom.png" alt="" class="featured-image-overlay-bottom" />
                      </div>
                    </div>

                    <p class="image-number-left image-number">02</p>
                  </div>

                  <div class="image-text-overlay-left">
                    <p class="p-64 blur-fade-in text-bg mb-0">SKEMA HARGA PAGE</p>
                    <p class="mt-4 blur-fade-in">2023 // DEVELOPMENT // BOOTSTRAP</p>

                    <a href="https://www.hashmicro.com/id/offer/download-skema-harga-software-erp" target="_blank" rel="noopener noreferrer" class="blur-fade-in mt-1 bold cursor-hoverable">
                      VIEW SITE →
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- portfolio #3 (Eva HR Page) -->
            <div class="col-lg-10 col mx-auto portfolio-margin-top">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="image-container blur-fade-in">
                    <div class="image-wrapper">
                      <div class="overflow-hidden w-100 h-100 position-relative">
                        <img src="img/(home)-portfolio/eva-hr-page/eva-hr-page.png" alt="Eva HR Page" class="featured-image img-scroll" />
                        <img src="img/(home)-portfolio/eva-hr-page/eva-hr-page-top.png" alt="" class="featured-image" />
                        <img src="img/(home)-portfolio/eva-hr-page/eva-hr-page-bottom.png" alt="" class="featured-image-overlay-bottom" />
                      </div>
                    </div>
                    
                    <p class="image-number-right image-number">03</p>
                  </div>

                  <div class="image-text-overlay-right">
                    <p class="p-64 blur-fade-in text-bg mb-0">EVA HR PAGE</p>
                    <p class="mt-4 blur-fade-in">2023 // DEVELOPMENT // WORDPRESS</p>

                    <a href="https://www.eva-hr.com/" target="_blank" rel="noopener noreferrer" class="blur-fade-in mt-1 bold cursor-hoverable">
                      VIEW SITE →
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- portfolio #4 (Koneksi Page) -->
            <div class="col-lg-10 col mx-auto portfolio-margin-top">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="image-container ms-auto blur-fade-in">
                    <div class="image-wrapper">
                      <div class="overflow-hidden w-100 h-100 position-relative">
                        <img src="img/(home)-portfolio/koneksi-page/koneksi-page.png" alt="Koneksi Page" class="featured-image img-scroll" />
                        <img src="img/(home)-portfolio/koneksi-page/koneksi-page-top.png" alt="" class="featured-image" />
                        <img src="img/(home)-portfolio/koneksi-page/koneksi-page-bottom.png" alt="" class="featured-image-overlay-bottom" />
                      </div>
                    </div>

                    <p class="image-number-left image-number">04</p>
                  </div>

                  <div class="image-text-overlay-left">
                    <p class="p-64 blur-fade-in text-bg mb-0">KONEKSI PAGE</p>
                    <p class="mt-4 blur-fade-in">2023 // DEVELOPMENT // BOOTSTRAP</p>

                    <a href="https://www.koneksi.co/" target="_blank" rel="noopener noreferrer" class="blur-fade-in mt-1 bold cursor-hoverable">
                      VIEW SITE →
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <!-- portfolio #5 (Akshiro) -->
            <div class="col-lg-10 col mx-auto portfolio-margin-top">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="image-container blur-fade-in">
                    <div class="image-wrapper">
                      <div class="overflow-hidden w-100 h-100 position-relative">
                        <img src="img/(home)-portfolio/akshiro-freelance-page/akshiro-freelance-page.png" alt="Akshiro Image" class="featured-image img-scroll" />
                        <img src="img/(home)-portfolio/akshiro-freelance-page/akshiro-freelance-page-top.png" alt="" class="featured-image" />
                      </div>
                    </div>

                    <p class="image-number-right image-number">05</p>
                  </div>

                  <div class="image-text-overlay-right">
                    <p class="p-64 blur-fade-in text-bg mb-0 mobile-22px">AKSHIRO FREELANCE PAGE</p>
                    <p class="mt-4 blur-fade-in mobile-10px">2022 // WEB DESIGN // UI/UX DESIGN // DEVELOPMENT // WIX</p>

                    <a href="https://akshiro.wixsite.com/akshiro" target="_blank" rel="noopener noreferrer" class="blur-fade-in mt-1 bold cursor-hoverable">
                      VIEW SITE →
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <a href="projects" class="position-relative text-center view-all-projects-button blur-fade-in bold w-100-mobile cursor-hoverable">VIEW ALL PROJECTS IN DETAIL →</a>

            <!-- "contact" section -->
            <?php include 'include/contact.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Bootstrap -->
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- GSAP -->
  <script src="js/gsap.min.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>

  <!-- Lenis -->
  <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>

  <!-- JS Scripts -->
  <script type="module">
    import 'https://unpkg.com/@splinetool/viewer@1.9.96/build/spline-viewer.js';
  </script>
  <script src="js/scripts.js"></script>

  <script>
    // go to portfolio button
    const goToPortfolio = document.querySelector('span[data-section-name="Portfolio"]');

    goToPortfolio.addEventListener('click', function () {
      const targetSection = document.querySelector(`section[data-section-name="Portfolio"]`);
  
      if (!targetSection) {
        console.warn(`No section found with data-section-name="Portfolio"`);
        return;
      }
  
      if (typeof window.lenis === 'undefined') {
        console.warn("Lenis is not available.");
        return;
      }
  
      const offset = parseInt(targetSection.getAttribute('data-section-offset')) || 0;
  
      window.lenis.scrollTo(targetSection, {
        offset: offset,
        duration: 1.6,
        easing: t => t < 0.5 ? 4*t*t*t : (t - 1)*(2*t - 2)*(2*t - 2) + 1  
      });
    });

    // go to contact button
    const goToContact = document.querySelector('button[data-section-name="Contact"]');

    goToContact.addEventListener('click', function () {
      const targetSection = document.querySelector(`section[data-section-name="Contact"]`);
  
      if (!targetSection) {
        console.warn(`No section found with data-section-name="Contact"`);
        return;
      }
  
      if (typeof window.lenis === 'undefined') {
        console.warn("Lenis is not available.");
        return;
      }
  
      const offset = parseInt(targetSection.getAttribute('data-section-offset')) || 0;
  
      window.lenis.scrollTo(targetSection, {
        offset: offset,
        duration: 1.6,
        easing: t => t < 0.5 ? 4*t*t*t : (t - 1)*(2*t - 2)*(2*t - 2) + 1  
      });
    });
  </script>
</body>
</html>
