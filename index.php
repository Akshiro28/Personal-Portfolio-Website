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
  <?php include 'include/navbar.php'; ?>

  <!-- "Home" section -->
  <section>
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
  <section class="about-me">
    <div class="container">
      <div class="column">
        <div class="row">
          <div class="col-lg-6 col">
            <div class="about-me-card">
              <p class="p-36">GET TO KNOW ME!</p>
              <hr>
              <p class="mt-4">I'm a Front-end Web Developer with a huge passion on Graphic Design. Based on Indonesia. Bla bla bla.</p>
              <button class="d-block">EVERYTHING ABOUT ME →</button>
              <button class="mt-3">CONTACT</button>
            </div>
          </div>

          <div class="col-lg-6 col mt-lg-0 mt-3">
            <div class="about-me-card">
              <p class="p-36">MY SKILLS</p>
              <hr>
              <div class="flex-container mt-4">
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

              <p class="p-36 mt-5 pt-3">DEVELOPMENT TOOLS</p>
              <hr>
              <div class="flex-container mt-4">
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
  <section id="lineSection">
    <div class="container">
      <div class="column">
        <div class="row">
          <div class="line-content text-center">
            <div class="col-10 mx-auto">
              <p class="p-96 line-below blur-fade-in">PORTFOLIO</p>
              <div class="col text-end">
                <div class="image-text-section">
                  <div class="container p-0">
                    <img src="img/a.png" alt="" class="featured-image" />
                    <div class="image-text-overlay">
                      <p class="p-64 line-below blur-fade-in">SOFTWARE CRM PAGE</p>
                      <p class="mt-2">2024 // DEVELOPMENT // BOOTSTRAP</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col text-end">
                <div class="image-text-section">
                  <div class="container p-0">
                    <img src="img/a.png" alt="" class="featured-image" />
                    <div class="image-text-overlay">
                      <p class="p-64 line-below blur-fade-in">SOFTWARE CRM PAGE</p>
                      <p class="mt-2">2024 // DEVELOPMENT // BOOTSTRAP</p>
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