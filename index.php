<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jovianto Godjali</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
  <!-- navbar -->
  <?php include 'include/navbar.php'; ?>

  <!-- overlay -->
  <?php include 'include/overlay.php'; ?>

  <!-- "Home" section -->
  <section data-section-name="Home">
    <div class="main-home-container container d-flex flex-column">
      <div class="column">
        <div class="row">
          <div class="col">
            <p>JOVIANTO GODJALI</p>
            <h1>WEB DEVELOPER</h1>
            <p>Come and see <span class="underline">my projects →</span></p>
          </div>
        
          <div class="col text-center">
            <a href="">Spline</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- "About Me" section -->
  <section class="about-me" data-section-name="About Me">
    <div class="container">
      <div class="column">
        <div class="row">
          <div class="col-lg-6 col d-flex flex-column">
            <div class="about-me-card-header">
              <p class="p-36 mb-0">GET TO KNOW ME!</p>
            </div>

            <div class="about-me-card-content h-100">
              <p class="p-gray">I'm a Front-end Web Developer with a huge passion on Graphic Design. Based on Indonesia. Bla bla bla.</p>
              <a href="" class="d-block">EVERYTHING ABOUT ME →</a>
              <button class="mt-3">CONTACT</button>
            </div>
          </div>

          <div class="col-lg-6 col mt-lg-0 mt-3">
            <div class="about-me-card-header">
              <p class="p-36 mb-0">MY SKILLS</p>
            </div>
            <div class="about-me-card-content">
              <div class="flex-container p-gray">
                <p class="items">HTML</p>
                <p class="items">CSS</p>
                <p class="items">JavaScript</p>
                <p class="items">PHP</p>
                <p class="items">GSAP</p>
                <p class="items">Bootstrap</p>
                <p class="items">Responsive Web Design</p>
                <p class="items">Graphic Design</p>
                <p class="items">UI/UX Design</p>
                <p class="items">Wix</p>
                <p class="items">Wordpress</p>
              </div>
            </div>

            <div class="about-me-card-header mt-4">
              <p class="p-36 mb-0">DEVELOPMENT TOOLS</p>
            </div>

            <div class="about-me-card-content">
              <div class="flex-container p-gray">
                <p class="items">Photoshop</p>
                <p class="items">Paint.NET</p>
                <p class="items">After Effects</p>
                <p class="items">Figma</p>
                <p class="items">Visual Studio Code</p>
                <p class="items">GIT</p>
                <p class="items">GitHub</p>
                <p class="items">Laragon</p>
                <p class="items">Spline</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- "Portfolio" section -->
  <?php include 'include/darker-bg.php'; ?>
  <section id="lineSection" data-section-name="Portfolio" data-section-offset="1200">
    <div class="container">
      <div class="column">
        <div class="row">
          <div class="line-content text-center">
            <div class="cut-below">
              <hr class="cut-below-hr">
              <p class="p-96 cut-below-items">PORTFOLIO</p>
            </div>
          
            <!-- portfolio #1 (Software CRM Page) -->
            <div class="col-md-10 col mx-auto portfolio-margin-top-first">
              <div class="image-text-section">
                <div class="container p-0">
                  <div class="image-wrapper blur-fade-in">
                    <div class="overflow-hidden w-100 h-100 position-relative">
                      <img src="img/(home)-portfolio/software-crm-page/software-crm-page.png" alt="Software CRM Page Image" class="featured-image img-scroll" />
                      <img src="img/(home)-portfolio/software-crm-page/software-crm-page-top.png" alt="" class="featured-image" />
                      <img src="img/(home)-portfolio/software-crm-page/software-crm-page-bottom.png" alt="" class="featured-image-overlay-bottom" />
                    </div>
                  </div>
                  <div class="image-text-overlay-right">
                    <p class="p-64 blur-fade-in text-bg mb-0">SOFTWARE CRM PAGE</p>
                    <p class="mt-4 blur-fade-in">2024 // DEVELOPMENT // BOOTSTRAP</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- portfolio #2 (Skema Harga Page) -->
            <div class="col-md-10 col mx-auto portfolio-margin-top">
              <div class="image-text-section">
                <div class="container p-0">
                  <div class="image-wrapper blur-fade-in ms-auto">
                    <div class="overflow-hidden w-100 h-100 position-relative">
                      <img src="img/(home)-portfolio/skema-harga-page/skema-harga-page.png" alt="Skema Harga Page Image" class="featured-image img-scroll" />
                      <img src="img/(home)-portfolio/skema-harga-page/skema-harga-page-top.png" alt="" class="featured-image" />
                      <img src="img/(home)-portfolio/skema-harga-page/skema-harga-page-bottom.png" alt="" class="featured-image-overlay-bottom" />
                    </div>
                  </div>
                  <div class="image-text-overlay-left">
                    <p class="p-64 blur-fade-in text-bg mb-0">SKEMA HARGA PAGE</p>
                    <p class="mt-4 blur-fade-in">2023 // DEVELOPMENT // BOOTSTRAP</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- portfolio #3 (Eva HR Page) -->
            <div class="col-md-10 col mx-auto portfolio-margin-top">
              <div class="image-text-section">
                <div class="container p-0">
                  <div class="image-wrapper blur-fade-in">
                    <div class="overflow-hidden w-100 h-100 position-relative">
                      <img src="img/(home)-portfolio/eva-hr-page/eva-hr-page.png" alt="Eva HR Page Image" class="featured-image img-scroll" />
                      <img src="img/(home)-portfolio/eva-hr-page/eva-hr-page-top.png" alt="" class="featured-image" />
                      <img src="img/(home)-portfolio/eva-hr-page/eva-hr-page-bottom.png" alt="" class="featured-image-overlay-bottom" />
                    </div>
                  </div>
                  <div class="image-text-overlay-right">
                    <p class="p-64 blur-fade-in text-bg mb-0">EVA HR PAGE</p>
                    <p class="mt-4 blur-fade-in">2023 // DEVELOPMENT // WORDPRESS</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- portfolio #4 (Koneksi Page) -->
            <div class="col-md-10 col mx-auto portfolio-margin-top">
              <div class="image-text-section">
                <div class="container p-0">
                  <div class="image-wrapper blur-fade-in ms-auto">
                    <div class="overflow-hidden w-100 h-100 position-relative">
                      <img src="img/(home)-portfolio/koneksi-page/koneksi-page.png" alt="Koneksi Page Image" class="featured-image img-scroll" />
                      <img src="img/(home)-portfolio/koneksi-page/koneksi-page-top.png" alt="" class="featured-image" />
                      <img src="img/(home)-portfolio/koneksi-page/koneksi-page-bottom.png" alt="" class="featured-image-overlay-bottom" />
                    </div>
                  </div>
                  <div class="image-text-overlay-left">
                    <p class="p-64 blur-fade-in text-bg mb-0">KONEKSI PAGE</p>
                    <p class="mt-4 blur-fade-in">2023 // DEVELOPMENT // BOOTSTRAP</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- portfolio #5 (Akshiro) -->
            <div class="col-md-10 col mx-auto portfolio-margin-top">
              <div class="image-text-section">
                <div class="container p-0">
                  <div class="image-wrapper blur-fade-in">
                    <div class="overflow-hidden w-100 h-100 position-relative">
                      <img src="img/(home)-portfolio/akshiro-freelance-page/akshiro-freelance-page.png" alt="Akshiro Image" class="featured-image img-scroll" />
                      <img src="img/(home)-portfolio/akshiro-freelance-page/akshiro-freelance-page-top.png" alt="" class="featured-image" />
                    </div>
                  </div>
                  <div class="image-text-overlay-right">
                    <p class="p-64 blur-fade-in text-bg mb-0">AKSHIRO FREELANCE PAGE</p>
                    <p class="mt-4 blur-fade-in">2022 // WEB DESIGN // UI/UX DESIGN // DEVELOPMENT // WIX</p>
                  </div>
                </div>
              </div>
            </div>

            <a href="" class="position-relative text-center view-all-projects-button blur-fade-in bold">VIEW ALL PROJECTS IN DETAIL →</a>

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
  <script src="js/scripts.js"></script>
</body>
</html>