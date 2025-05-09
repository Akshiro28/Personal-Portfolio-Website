<style>
  .reveal-wrapper {
    position: fixed;
    bottom: 19px;
    left: 12px;
    overflow: hidden;
    width: 0;
  }

  .reveal-wrapper-cursor {
    position: absolute;
    display: flex;
    align-items: center;
    right: 0;
    height: 100%;
    width: 2px;
    background: var(--change-solid);
  }

  .scroll-progress-container {
    position: absolute;
    width: 100px;
    height: 7px;
    background-color: var(--change-progress-bar-track);
    overflow: hidden;
    border-radius: 99px;
  }

  .scroll-progress-bar {
    height: 100%;
    width: 0%;
    background-color: var(--change-solid);
    transition: width 0.3s ease-out;
    border-radius: 99px;
  }

  .scroll-progress-percentage {
    padding-top: 3px;
    font-size: 12px;
    color: var(--change-solid);
    margin-left: 116px;
    min-width: 42px;
  }

  .content-inside-reveal-wrapper {
    margin-left: 20px;
    position: relative;
    width: 0;
    overflow: hidden;
  }

  .section-navigation p {
    font-size: 12px;
    white-space: nowrap;
    color: var(--change-solid);
    margin-left: 6px;
    padding-top: 5px;
    padding-bottom: 3px;
    padding-left: 12px;
    padding-right: 12px;
    transition: background-size 1s cubic-bezier(0.5, 0, 0.1, 1), background-position 1s cubic-bezier(0.5, 0, 0.1, 1), color 1s, background-color 0.15s;
    width: fit-content;
    border-radius: 4px;
  }

  .section-navigation .content-inside-reveal-wrapper p {
    background-image: linear-gradient(to right, var(--change-solid), var(--change-solid));
    background-repeat: no-repeat;
    background-size: 0% 100%;
    background-position: left center;
  }

  .section-navigation .content-inside-reveal-wrapper.active p {
    background-size: 100% 100%;
    background-position: left center;
    color: var(--change-solid-inverse);
  }

  .section-navigation .content-inside-reveal-wrapper:not(.active) p {
    background-size: 0% 100%;
    background-position: left center;
  }

  .section-navigation .content-inside-reveal-wrapper.active {
    border-radius: 4px;
  }

  .section-navigation {
    top: 50%;
    right: 48px;
    left: unset;
    transform: translateY(-50%);
    opacity: 1;
    z-index: 8;
  }

  .section-navigation .content-inside-reveal-wrapper {
    padding-bottom: 1px;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
  }

  .section-navigation .content-inside-reveal-wrapper:not(.active):hover p {
    /* background-color: var(--change-from-dark-ten-percent); */
    background-color: var(--light-light-blue);
  }

  #scrollToTop {
    position: fixed;
    left: 196px;
    bottom: 25px;
    white-space: nowrap;
    z-index: 999;
    width: 0;
    border-radius: 4px;
    overflow: hidden;
    opacity: 1;
  }

  #scrollToTop button {
    position: absolute;
    top: 0;
    background: var(--change-from-dark-ten-percent);
    color: var(--white);
    border-radius: 4px;
    font-size: 12px;
    padding: 3px 16px 0px 16px;
    transition: background 0.3s ease;
  }

  #scrollToTop button:hover, #interestedInHowIMadeThisWebsite a:hover {
    background: var(--light-blue);
  }

  #interestedInHowIMadeThisWebsite {
    position: fixed;
    bottom: 25px;
    right: 32px;
    white-space: nowrap;
    z-index: 999;
    width: 0;
    border-radius: 4px;
    overflow: hidden;
    opacity: 1;
  }

  #interestedInHowIMadeThisWebsite a {
    position: absolute;
    top: 0;
    background: var(--change-from-dark-ten-percent);
    color: var(--white);
    border-radius: 4px;
    font-size: 12px;
    padding: 3px 16px 0px 16px;
    transition: background 0.3s ease;
    text-decoration: none;
  }

  /* scrollbar css */
  #customScrollbarContainer {
    position: fixed;
    top: -6px;
    right: 10px;
    width: 8px;
    height: 100vh;
    z-index: 9999;
  }

  #customScrollbar {
    position: absolute;
    width: 100%;
  }

  #scrollThumb {
    width: 100%;
    height: 24px;
    background: var(--change-solid);
    border-radius: 999px;
    position: absolute;
    top: 0;
    left: 0;
    transform: translateY(0);
    transition: 
      background 0.25s ease,
      height 0.25s ease,
      opacity 0.25s ease,
      margin 0.25s ease;
    opacity: 0.2;
    pointer-events: auto;
    margin-top: 16px;
    cursor: grabbing;
  }

  #scrollThumb:hover {
    height: 40px;
    opacity: 0.35;
    margin-top: 8px;
  }

 #loading-screen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999999;
    background: var(--white);
    transition: background 1.5s ease;
  }

  .loading-bottom #loading-text {
    text-align: center;
    margin-top: 32px;
    font-size: 24px;
    color: var(--primary-dark-color);
    transition: opacity 0.8s ease;
  }

  .loading-top {
    position: fixed;
    bottom: 100%;
    width: 100%;
    height: 100%;
    transform: translateY(50%) translateY(-60px);
    background: var(--white);
  }

  .loading-right {
    position: fixed;
    left: 100%;
    width: 100%;
    height: 100%;
    transform: translateX(-50%) translateX(60px);
    background: var(--white);
  }

  .loading-bottom {
    position: fixed;
    top: 100%;
    width: 100%;
    height: 100%;
    transform: translateY(-50%) translateY(60px);
    background: var(--white);
  }

  .loading-left {
    position: fixed;
    right: 100%;
    width: 100%;
    height: 100%;
    transform: translateX(50%) translateX(-60px);
    background: var(--white);
  }

  .loading-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(5, 1fr);
    width: 160px;
    height: 160px;
    padding: 20px;
  }

  .loading-portal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 120px;
    height: 120px;
    border: 1px solid var(--primary-dark-color);
  }

  .rectangle {
    width: 100%;
    height: 100%;
    background-color: var(--black-seven-percent);
    transition: background-color 0.25s ease;
  }

  .lit-up {
    background-color: var(--primary-dark-color);
  }

  @media only screen and (max-width: 1200px) {
    #scrollToTop, #interestedInHowIMadeThisWebsite {
      opacity: 0;
    }
  }

  @media only screen and (max-width: 992px) {
    .fullscreen-menu ul {
      display: unset;
    }

    .fullscreen-menu li {
      width: 100vw;
      margin-bottom: 16px;
      border-right: none;
    }

    .loading-bottom #loading-text {
      font-size: 20px;
    }
  }

  @media only screen and (max-width: 768px) {
    .progress-bar {
      display: none !important;
    }

    .menu-close {
      top: 24px;
      right: 24px;
    }
    
    .fullscreen-menu li:last-child {
      margin-bottom: 0px;
    }

    .section-navigation {
      display: none;
    }

    .loading-bottom #loading-text {
      font-size: 16px;
    }
  }
</style>

<div class="reveal-wrapper d-flex align-items-center progress-bar">
  <div class="content-inside-reveal-wrapper d-flex align-items-center me-auto">
    <div class="reveal-wrapper-cursor"></div>
    <div class="scroll-progress-container">
      <div class="scroll-progress-bar"></div>
    </div>
    <div class="scroll-progress-percentage text-start">0%</div>
  </div>
</div>

<div id="scrollToTop" class="cursor-hoverable">
  <button onclick="scrollBackToTop()">
    Scroll back to top
  </button>
</div>

<div id="interestedInHowIMadeThisWebsite" class="cursor-hoverable">
  <a href="the-sites-story.php">
    Interested in the process of making this website? →
  </a>
</div>

<!-- section navigation (right side of screen) -->
<div class="reveal-wrapper section-navigation"></div>

<!-- custom browser scroll bar -->
<div id="customScrollbarContainer">
  <div id="customScrollbar">
    <div id="scrollThumb" class="cursor-hoverable"></div>
  </div>
</div>

<!-- custom cursor -->
<div class="custom-cursor custom-cursor--large"></div>
<div class="custom-cursor custom-cursor--small"></div>

<!-- loading screen -->
<div id="loading-screen">
  <div class="loading-top"></div>
  <div class="loading-right"></div>
  <div class="loading-left"></div>
  <div class="loading-bottom">
    <p id="loading-text">LOADING...</p>
  </div>

  <div class="loading-portal"></div>

  <div class="loading-grid" id="loading-grid">
    <!-- rectangles will be dynamically generated here -->
  </div>
</div>