<style>
  .menu-toggle {
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
    color: var(--change-solid-inverse);
    z-index: 10000;
  }

  .menu-icon .line-menu {
    stroke: var(--change-solid);
    stroke-width: 2;
    stroke-linecap: round;
    transition: y 0.5s cubic-bezier(0.5, 0, 0.1, 1), transform 0.5s cubic-bezier(0.5, 0, 0.1, 1);
  }

  .menu-close {
    position: absolute;
    top: 48px;
    right: 48px;
    background: none;
    border: none;
    cursor: pointer;
    z-index: 10002;
    color: var(--change-solid);
    padding: 0;
    transition: transform 0.5s cubic-bezier(0.5, 0, 0.1, 1);
  }

  .menu-close:hover .close-icon {
    transform: rotate(90deg);
  }

  .close-icon {
    transition: transform 0.5s cubic-bezier(0.5, 0, 0.1, 1);
  }

  .fullscreen-menu {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: calc(100vh + 1px);
    background: var(--change-navbar-menu);
    color: var(--change-solid);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    transform: translateY(-100%);
    transition: transform 1.2s cubic-bezier(0.5, 0, 0.1, 1);
    z-index: 10001;
    border-bottom: 1px solid var(--change-solid);
    -webkit-backdrop-filter: blur(32px);
    backdrop-filter: blur(32px);
  }

  .fullscreen-menu.active {
    transform: translateY(0);
  }

  .fullscreen-menu ul {
    list-style: none;
    padding: 0;
    display: flex;
    margin: 0;
    width: 100%;
  }

  .fullscreen-menu li {
    width: 25vw;
    font-size: 28px;
    text-align: center;
    margin: 0;
    border-right: 1px solid var(--change-solid);
    display: flex;
    align-items: center;
  }

  .fullscreen-menu li:last-child {
    border-right: none;
  }

  .fullscreen-menu li a {
    text-decoration: none;
    color: var(--change-solid);
    display: block;
    width: fit-content;
    margin-left: auto;
    margin-right: auto;
  }

  #navbar {
    border-bottom: 1px solid var(--change-solid);
    z-index: 9;
    background: var(--change-navbar-menu);
    top: -66px;
  }

  #navbar p, #navbar a {
    color: var(--change-solid);
    text-decoration: none;
  }

  .menu-link {
    position: relative;
    padding: 10px 30px 5px 30px;
    border-radius: 8px;
    color: var(--change-solid);
    overflow: hidden;
    z-index: 0;
    transition: color 0.3s ease;
  }

  .menu-link::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 0%;
    background: var(--change-progress-bar-track);
    transition: width 0.5s cubic-bezier(0.5, 0, 0.1, 1);
    z-index: -1;
  }

  .menu-link:hover::before {
    width: 100%;
  }
  
  .menu-link.active::before {
    width: 100%;
    background: var(--change-solid);
  }

  .menu-link.active {
    color: var(--change-solid-inverse) !important;
  }
</style>

<!-- Navbar and Fullscreen Menu -->
<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
  <div id="fullscreenMenu" class="fullscreen-menu">
    <button class="menu-close" id="menuClose" aria-label="Close menu">
      <svg class="close-icon" viewBox="0 0 24 24" width="28" height="28" xmlns="http://www.w3.org/2000/svg">
        <line x1="18" y1="6" x2="6" y2="18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        <line x1="6" y1="6" x2="18" y2="18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>

    <ul class="text-center">
      <li>
        <a href="#" data-page="home" class="menu-link">HOME</a>
      </li>
      <li>
        <a href="#" data-page="about-me" class="menu-link">ABOUT ME</a>
      </li>
      <li>
        <a href="#" data-page="projects" class="menu-link">PROJECTS</a>
      </li>
      <li>
        <a href="#" data-page="the-sites-story" class="menu-link">THE SITE'S STORY</a>
      </li>
    </ul>
  </div>

  <div class="container">
    <a class="navbar-brand" href="#">JOVIANTO GODJALI // AKSHIRO</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="ms-auto d-flex align-items-center">
        <button class="menu-toggle" id="menuToggle" aria-label="Open menu">
          <svg class="menu-icon" viewBox="0 0 24 24" width="28" height="28" xmlns="http://www.w3.org/2000/svg">
            <line class="line-menu top" x1="3" y1="6" x2="21" y2="6"/>
            <line class="line-menu middle" x1="3" y1="12" x2="21" y2="12"/>
            <line class="line-menu bottom" x1="3" y1="18" x2="21" y2="18"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
</nav>
