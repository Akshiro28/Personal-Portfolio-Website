<style>
  #contact {
    position: relative;
    color: var(--white);
    z-index: 100;
    text-align: center;
    margin-top: 361px;
  }

  #contact .whatsapp-button {
    background: var(--white);
    margin-top: 25px;
    padding: 8px 20px;
  }

  #contact .whatsapp-button p {
    color: var(--primary-dark-color);
  }

  #contact .icon-with-text p {
    color: var(--white);
  }

  #contact .icon-with-text {
    background: var(--change-navbar-menu);
    padding-left: 14px;
    padding-right: 14px;
    height: 40px;
    border-radius: 8px;
    transition: background 0.3s ease;
  }

  #contact .icon-only {
    background: var(--change-navbar-menu);
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: background 0.3s ease;
  }

  #contact .icon-with-text:hover, #contact .icon-only:hover {
    background: var(--light-blue);
  }

  #contact img {
    max-height: 20px;
  }

  #contact .whatsapp-button img, #contact .mail-icon {
    max-height: 26px;
  }

  #contact .footer-section {
    margin-top: 341px;
    padding-bottom: 24px;
    gap: 16px;
  }

  #contact .email-section {
    margin-top: 59px;
  }

  #contact .mail-icon {
    margin-bottom: 16px;
  }

  #footer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 72px;
    background: var(--white-five-percent);
  }

  #contact .contact-container {
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  @media only screen and (max-width: 1200px) {
    #contact {
      margin-top: 248px;
    }

    #contact .email-section {
      margin-top: 42px;
    }

    #contact .footer-section {
      margin-top: 211px;
    }

    #footer {
      height: 69px;
    }
  }

  @media only screen and (max-width: 992px) {
    #contact {
      margin-top: 272px;
    }

    #contact .email-section {
      margin-top: 66px;
    }
  }

  @media only screen and (max-width: 768px) {
    #contact {
      margin-top: 328px;
    }

    #contact .email-section {
      margin-top: 161px;
    }

    #contact .footer-section {
      flex-wrap: wrap;
    }

    #contact .footer-section {
      gap: 12px;
      justify-content: center;
    }

    #contact .footer-section {
      margin-top: 159px;
    }
  }

  @media only screen and (max-width: 520px) {
    #contact .icon-with-text p {
      font-size: 12px;
    }

    #contact .icon-only {
      width: 36px;
      height: 36px;
    }

    #contact img {
      max-height: 16px;
    }

    #contact .icon-with-text {
      height: 36px;
    }

    #contact .footer-section {
      gap: 10px;
    }

    #contact .footer-section {
      margin-top: 169px;
    }
  }
</style>

<section id="contact" data-section-name="Contact" data-section-offset="-40">
  <div class="container contact-container">
    <div class="column">
      <div class="row">
        <div class="col">
          <div class="cut-below">
            <hr class="cut-below-hr hr-middle">
            <p class="p-96 cut-below-items pb-2 pb-md-0">
              LET'S BUILD A GREAT
            </p>
          </div>

          <div class="cut-below">
            <hr class="cut-below-hr hr-middle d-none">
            <p class="p-96 cut-below-items pt-md-2 pt-2 mt-lg-1">
              2025 TOGETHER
            </p>
          </div>

          <div class="d-flex justify-content-center align-items-center email-section">
            <a href="mailto:joviantogodjali@gmail.com" target="_blank" rel="noopener noreferrer" class="line-below-flex cursor-hoverable-2 p-0">
              <img src="img/icon/email.svg" alt="Mail Icon" class="mail-icon">
              <p class="mb-0 ms-2 ps-1">joviantogodjali@gmail.com</p>
            </a>
          </div>

          <a href="https://wa.me/6287743870668" target="_blank" rel="noopener noreferrer" class="whatsapp-button d-flex justify-content-center align-items-center mx-auto cursor-hoverable">
            <img src="img/icon/whatsapp.svg" alt="WhatsApp Icon">
            <p class="mb-0 ms-2 ps-1">Chat me on WhatsApp →</p>
          </a>

          <div class="d-flex justify-content-center align-items-center mt-5 mb-4">
            <div class="line-below-flex footer-section">
              <div class="icon-with-text d-flex align-items-center ms-0 cursor-hoverable">
                <img src="img/icon/discord.svg" alt="Discord Icon">
                <p class="mb-0 ms-2">Akshiro</p>
              </div>

              <a href="https://github.com/Akshiro28" target="_blank" rel="noopener noreferrer" class="icon-only cursor-hoverable">
                <img src="img/icon/github.svg" alt="GitHub Icon">
              </a>

              <a href="https://www.linkedin.com/in/joviantogodjali/" target="_blank" rel="noopener noreferrer" class="icon-only cursor-hoverable">
                <img src="img/icon/linkedin.svg" alt="LinkedIn Icon">
              </a>

              <a href="https://x.com/Akshiro28" target="_blank" rel="noopener noreferrer" class="icon-only cursor-hoverable">
                <img src="img/icon/X.svg" alt="X Icon">
              </a>

              <a href="https://www.instagram.com/jovianto.g/" target="_blank" rel="noopener noreferrer" class="icon-with-text d-flex align-items-center cursor-hoverable">
                <img src="img/icon/instagram.svg" alt="Instagram Icon">
                <p class="mb-0 ms-2">jovianto.g</p>
              </a>

              <a href="https://www.instagram.com/akshiro28/" target="_blank" rel="noopener noreferrer" class="icon-with-text d-flex align-items-center cursor-hoverable">
                <img src="img/icon/instagram.svg" alt="Instagram Icon">
                <p class="mb-0 ms-2">akshiro28</p>
              </a>

              <a href="https://www.youtube.com/@akshiro" target="_blank" rel="noopener noreferrer" class="icon-only cursor-hoverable">
                <img src="img/icon/youtube.svg" alt="YouTube Icon">
              </a>

              <a href="https://www.deviantart.com/akshiro" target="_blank" rel="noopener noreferrer" class="icon-only cursor-hoverable">
                <img src="img/icon/deviantart.svg" alt="DeviantArt Icon">
              </a>
            </div>
          </div>

          <p class="text-center pb-2 pt-1 p-14">© Copyright 2025 by Jovianto Godjali // Akshiro</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="footer">
  <div class="container">
    <div class="column">
      <div class="row"></div>
    </div>
  </div>
</section>
