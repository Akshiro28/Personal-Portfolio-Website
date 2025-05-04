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
  </style>

  <?php $currentPage = 'the-sites-story'; ?>
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
            <h1 class="text-center text-lg-start">Sketch.</h1>
            <p class="text-center text-lg-start">Hey there! Ever wonder what goes into building a personal site like this? I created this page to walk you through the full process — from planning the layout to pushing the final commit.</p>
          </div>
        
          <div class="col-12 col-lg-6">
            <a href="" class="mx-auto cursor-hoverable d-block">Spline</a>
          </div>
        </div>
      </div>
    </div>
  </section>

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
                    <div class="col-md-5 col-12 ms-auto order-1 order-md-1">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper development-img-apps-wrapper-1">
                          <img src="img/icon/development-tools/Figma.png" alt="Figma" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(home)-portfolio/software-crm-page/software-crm-page.png" alt="Software CRM Page" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-5 col-12 me-auto ps-0 ps-md-5 text-start order-2 order-md-2 dev-height">
                      <div class="cut-below development-small-text-margin-top ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items pb-2">
                          FIGMA → WIREFRAME AND INITIAL DESIGN
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Design process on Figma
                        </p>
                      </div>

                      <p class="text-md-start text-center my-4">
                        [Story behind this step of the process]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      </p>

                      <a class="development-button d-block cursor-hoverable" href="">
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
                    <div class="col-md-5 col-12 me-auto order-1 order-md-2">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper development-img-apps-wrapper-1">
                          <img src="img/icon/development-tools/Spline.png" alt="Spline" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(home)-portfolio/software-crm-page/software-crm-page.png" alt="Software CRM Page" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-5 col-12 ms-auto pe-0 pe-md-5 text-start order-2 order-md-1 dev-height">
                      <div class="cut-below development-small-text-margin-top ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items pb-2">
                          SPLINE → 3D ASSETS
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Spline
                        </p>
                      </div>

                      <p class="text-md-start text-center my-4">
                        [Story behind this step of the process]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      </p>

                      <a class="development-button d-block cursor-hoverable" href="">
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
                    <div class="col-md-5 col-12 ms-auto order-1 order-md-1">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper development-img-apps-wrapper-1">
                          <img src="img/icon/development-tools/Photoshop.png" alt="Photoshop" class="development-img-apps">
                        </div>

                        <div class="development-img-apps-wrapper development-img-apps-wrapper-2">
                          <img src="img/icon/development-tools/paint-dot-NET.png" alt="paint.NET" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(home)-portfolio/software-crm-page/software-crm-page.png" alt="Software CRM Page" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-5 col-12 me-auto ps-0 ps-md-5 text-start order-2 order-md-2 dev-height">
                      <div class="cut-below development-small-text-margin-top ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items pb-2">
                          PHOTOSHOP → 2D ASSETS
                        </p>
                      </div>
                      <div class="cut-below ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items pb-2">
                          PAINT.NET → 2D ASSETS
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top-2-texts ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Photoshop & paint.NET
                        </p>
                      </div>

                      <p class="text-md-start text-center my-4">
                        [Story behind this step of the process]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
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
                    <div class="col-md-5 col-12 me-auto order-1 order-md-2">
                      <div class="development-img-wrapper position-relative">
                        <div class="development-img-apps-wrapper development-img-apps-wrapper-1">
                          <img src="img/icon/development-tools/VSCode.png" alt="VSCode" class="development-img-apps">
                        </div>

                        <div class="development-img-apps-wrapper development-img-apps-wrapper-2">
                          <img src="img/icon/development-tools/Laragon.png" alt="Laragon" class="development-img-apps">
                        </div>

                        <div class="development-img-apps-wrapper development-img-apps-wrapper-3">
                          <img src="img/icon/development-tools/GIT.png" alt="GIT" class="development-img-apps">
                        </div>

                        <div class="development-img-apps-wrapper development-img-apps-wrapper-4">
                          <img src="img/icon/development-tools/GitHub.png" alt="GitHub" class="development-img-apps">
                        </div>

                        <div class="position-relative overflow-hidden w-100 h-100">
                          <img src="img/(home)-portfolio/software-crm-page/software-crm-page.png" alt="Software CRM Page" class="development-img">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-5 col-12 ms-auto pe-0 pe-md-5 text-start order-2 order-md-1 dev-height">
                      <div class="cut-below development-small-text-margin-top ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items pb-2">
                          VISUAL STUDIO CODE → MAIN CODING TOOL
                        </p>
                      </div>

                      <div class="cut-below ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items pb-2">
                          LARAGON → PHP
                        </p>
                      </div>

                      <div class="cut-below ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items pb-2">
                          GIT → VERSION
                        </p>
                      </div>

                      <div class="cut-below ms-md-0 ms-auto">
                        <p class="p-dev-24 cut-below-items pb-2">
                          GITHUB → DATABASE
                        </p>
                      </div>

                      <div class="cut-below development-text-margin-top-4-texts ms-md-0 ms-auto">
                        <hr class="cut-below-hr hr-middle">
                        <p class="p-32 cut-below-items pb-2">
                          Code & development
                        </p>
                      </div>

                      <p class="text-md-start text-center my-4">
                        [Story behind this step of the process]. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      </p>

                      <a class="development-button d-block cursor-hoverable" href="">
                        VIEW ON GITHUB →
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