<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Site's Story | Jovianto Godjali</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <style>
    .dev-height {
      min-height: 826px;
    }

    #contact {
      margin-top: 274px !important;
    }

    #lineSection .development-margin-top-first {
      margin-top: 292px;
    }

    @media only screen and (max-width: 1400px) {
      #contact {
        margin-top: 14px !important;
      }
    }

    @media only screen and (max-width: 1200px) {
      #lineSection .development-margin-top-first {
        margin-top: 239px;
      }

      #lineSection .development-small-text-margin-top {
        margin-top: 70px;
      }

      .p-dev-24 {
        font-size: 12px !important;
      }

      #lineSection .development-text-margin-top {
        margin-top: 92px;
      }

      .p-32 {
        font-size: 24px;
      }

      #lineSection .development-margin-top {
        margin-top: 4px;
      }

      #lineSection .development-text-margin-top-2-texts {
        margin-top: 68px;
      }

      #lineSection .development-text-margin-top-4-texts {
        margin-top: 20px;
      }

      #contact {
        margin-top: 18px !important;
      }

      .development-img-wrapper {
        padding: 20px;
      }

      .dev-height {
        min-height: 776px;
      }
    }

    @media only screen and (max-width: 992px) {
      #lineSection .development-text-margin-top {
        margin-top: 69px;
      }

      #lineSection .development-text-margin-top-2-texts {
        margin-top: 52px;
      }

      #lineSection .development-small-text-margin-top {
        margin-top: 96px;
      }

      #lineSection .development-text-margin-top {
        margin-top: 90px;
      }

      #lineSection .development-text-margin-top-2-texts {
        margin-top: 66px;
      }

      #lineSection .development-text-margin-top-4-texts {
        margin-top: 18px;
      }

      #contact {
        margin-top: 66px !important;
      }
    }

    @media only screen and (max-width: 768px) {
      .development-img-wrapper {
        padding: 16px;
      }

      .line-content {
        margin-top: 1115px;
      }

      .development-img-wrapper {
        aspect-ratio: 1 / 1;
        max-height: 320px;
      }

      #contact {
        margin-top: 54px !important;
      }

      #lineSection .development-margin-top-first {
        margin-top: 44px;
      }

      #lineSection .development-text-margin-top, #lineSection .development-text-margin-top-2-texts, #lineSection .development-text-margin-top-4-texts {
        margin-top: 50px;
      }

      .dev-height {
        min-height: 520px;
        padding-left: 12px !important;
        padding-right: 12px !important;
      }

      #lineSection .development-margin-top {
        margin-top: 70px;
      }
    }

    @media only screen and (max-width: 576px) {
      .dev-height {
        min-height: 520px;
      }
    }
  </style>

  <?php $currentPage = 'the-sites-story'; ?>
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
                <span>SKETCH.</span>
                <span>CODE.</span>
                <span>LAUNCH.</span>
              </span>
            </h1>

            <p class="mt-4">
              Ever wonder what goes into building a personal site like this? I created this page to walk you through the full process—from planning the layout to pushing the final commit.
            </p>
          </div>
        
          <div class="col-12 col-md-6 text-center order-1 order-md-2 mb-5 mb-md-0">
            <img src="img/(the-sites-story)/story.png" alt="Story.png" class="photo">
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

  <!-- "Development" section -->
  <?php include 'include/darker-bg.php'; ?>
  <section id="lineSection" data-section-name="Development" data-section-offset="1250">
    <div class="container">
      <div class="column">
        <div class="row">
          <div class="line-content text-center">
            <div class="cut-below">
              <hr class="cut-below-hr hr-middle">
              <p class="p-96 cut-below-items pb-2 pb-md-0">
                HERE'S HOW IT ALL
              </p>
            </div>

            <div class="cut-below">
              <hr class="cut-below-hr hr-middle d-none">
              <p class="p-96 cut-below-items pt-md-2 pt-2 mt-lg-1">
                CAME TOGETHER
              </p>
            </div>

            <!-- development #1 (Figma) -->
            <div class="col mx-auto development-margin-top-first">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 ms-auto order-1 order-md-1">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper">
                          <img src="img/icon/development-tools/Figma.png" alt="Figma" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(the-sites-story)/Figma.png" alt="Figma" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-12 me-auto ps-0 ps-xl-5 ps-md-4 text-start order-2 order-md-2 dev-height">
                      <div class="cut-below development-small-text-margin-top d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          FIGMA → UI/UX PLANNING AND VISUAL DESIGN
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Design process on Figma
                        </p>
                      </div>

                      <p class="text-start my-4">
                        My process starts in Figma, where I lay down the core ideas—simple wireframes to explore structure, layout planning to shape each section, and design concepts to set the overall vibe. Since I'm still growing as a developer, I don't wait for the design to be “final” before I start coding. Instead, I design and develop side by side, testing what works (and what doesn't) as I go.
                        <br><br>
                        Some ideas look great in Figma but need tweaking in the browser—so I keep things flexible.
                      </p>

                      <a class="development-button d-block cursor-hoverable" href="https://www.figma.com/design/BkAC4EFdwnJPOkDxMYUUzP/Portfolio-Website?node-id=639-520&t=9eIa55zEBwvmozfT-1" target="_blank" rel="noopener noreferrer">
                        VIEW ON FIGMA →
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- development #2 (Spline) -->
            <div class="col mx-auto development-margin-top">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 me-auto order-1 order-md-2">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper">
                          <img src="img/icon/development-tools/Spline.png" alt="Spline" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(the-sites-story)/Spline.png" alt="Spline" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-12 ms-auto pe-0 pe-xl-5 pe-md-4 text-start order-2 order-md-1 dev-height">
                      <div class="cut-below development-small-text-margin-top d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          SPLINE → EYE CATCHING 3D ELEMENTS
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Spline
                        </p>
                      </div>

                      <p class="text-start my-4">
                        Next came the 3D asset work in Spline—definitely one of the more fun parts of this project. I designed a clean 3D animation for the homepage to grab attention without overwhelming the user. I also focused on keeping things lightweight and smooth, prioritizing optimization over excessive effects. Learning Spline was a blast, and playing around with it added a whole new layer of personality to the site.
                      </p>

                      <a class="development-button d-block cursor-hoverable" href="https://app.spline.design/file/15970078-77b9-4f2e-9685-a3ac3816d3b4" target="_blank" rel="noopener noreferrer">
                        VIEW ON SPLINE →
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- development #3 (Photoshop & paint.NET) -->
            <div class="col mx-auto development-margin-top">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 ms-auto order-1 order-md-1">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper">
                          <img src="img/icon/development-tools/Photoshop.png" alt="Photoshop" class="development-img-apps">
                          <img src="img/icon/development-tools/paint-dot-NET.png" alt="paint.NET" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(the-sites-story)/Photoshop-and-paint-dot-NET.png" alt="Photoshop & paint.NET" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-12 me-auto ps-0 ps-xl-5 ps-md-4 text-start order-2 order-md-2 dev-height">
                      <div class="cut-below development-small-text-margin-top d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          PHOTOSHOP → SHAPING 2D ASSETS
                        </p>
                      </div>
                      <div class="cut-below d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          PAINT.NET → SHAPING 2D ASSETS
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top-2-texts ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Photoshop & paint.NET
                        </p>
                      </div>

                      <p class="text-start my-4">
                        For this project, I relied on Photoshop and Paint.NET to handle the visual side of things—from editing images and creating custom assets to fine-tuning icons and design elements. These tools helped me shape a more cohesive look across the site, making sure everything felt visually balanced.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- development #4 (Code & development) -->
            <div class="col mx-auto development-margin-top">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 me-auto order-1 order-md-2">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper">
                          <img src="img/icon/development-tools/VSCode.png" alt="VSCode" class="development-img-apps">
                          <img src="img/icon/development-tools/Laragon.png" alt="Laragon" class="development-img-apps">
                          <img src="img/icon/development-tools/GIT.png" alt="GIT" class="development-img-apps">
                          <img src="img/icon/development-tools/GitHub.png" alt="GitHub" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(the-sites-story)/code-and-development.png" alt="Photoshop & paint.NET" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-12 ms-auto pe-0 pe-xl-5 pe-md-4 text-start order-2 order-md-1 dev-height">
                      <div class="cut-below development-small-text-margin-top d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          VISUAL STUDIO CODE → STREAMLINED CODING
                        </p>
                      </div>

                      <div class="cut-below d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          LARAGON → LOCAL ENVIRONMENT FOR PHP CODES
                        </p>
                      </div>

                      <div class="cut-below d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          GIT → VERSION CONTROL
                        </p>
                      </div>

                      <div class="cut-below d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          GITHUB → ORGANIZE AND MANAGE THE PROJECT
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top-4-texts ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Code & development
                        </p>
                      </div>

                      <p class="text-start my-4">
                        Development goes hand-in-hand with design process—I use Visual Studio Code for coding, Laragon to run PHP codes smoothly, and Git with GitHub to keep everything organized. I take things step by step, working alongside Figma to stay flexible and adapt as I go. I'm especially patient with learning animations, diving into GSAP and Bootstrap to truly understand how and why they work as is. Throughout the process, I remain humble and open, knowing that growth comes from taking my time and learning one piece of code at a time.
                      </p>

                      <a class="development-button d-block cursor-hoverable" href="https://github.com/Akshiro28/Personal-Portfolio-Website" target="_blank" rel="noopener noreferrer">
                        VIEW ON GITHUB →
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- development #5 (Launch & Maintenance) -->
            <div class="col mx-auto development-margin-top">
              <div class="image-text-section">
                <div class="container p-0 container-no-padding-mobile">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-12 ms-auto order-1 order-md-1">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper development-img-apps-wrapper-1">
                          <img src="img/icon/development-tools/Photoshop.png" alt="Photoshop" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(home)-portfolio/software-crm-page/software-crm-page.png" alt="Software CRM Page" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-12 me-auto ps-0 ps-xl-5 ps-md-4 text-start order-2 order-md-2 dev-height">
                      <div class="cut-below development-small-text-margin-top d-none d-md-block ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items">
                          [BLANK] → DEPLOYING THE SITE
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Launch & maintenance
                        </p>
                      </div>

                      <p class="text-start my-4">
                        The final step is launching the site live—using [BLANK] as my hosting platform, chosen for its fast / cheap / etc etc. and keeping everything running smoothly over time. Launching is just the beginning; regular maintenance ensures the site stays fast and up to date. I keep an eye on performance and bugs, making tweaks as needed to keep things fresh and reliable.
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

  <!-- Bootstrap -->
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- GSAP -->
  <script src="js/gsap.min.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>

  <!-- Lenis -->
  <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>

  <script>
    const aContainer = document.getElementById('interestedInHowIMadeThisWebsite');
    const link = aContainer.querySelector('a');

    // Change the link text
    link.textContent = 'Go back to home page →';

    // Change the href
    link.href = 'index.php';
  </script>

  <!-- JS Scripts -->
  <script src="js/scripts.js"></script>
</body>
</html>
