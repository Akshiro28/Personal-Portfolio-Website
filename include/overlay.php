<style>
  .reveal-wrapper {
    position: fixed;
    bottom: 10px;
    left: 0;
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
    background: var(--primary-dark-color);
  }

  .scroll-progress-container {
    position: relative;
    width: 100px;
    height: 7px;
    background-color: var(--black-seven-percent);
    overflow: hidden;
    border-radius: 99px;
  }

  .scroll-progress-bar {
    height: 100%;
    width: 0%;
    background-color: var(--primary-dark-color);
    transition: width 0.1s ease-out;
  }

  .scroll-progress-percentage {
    transform: translateY(1px);
    font-size: 12px;
    color: var(--primary-dark-color);
  }

  .scroll-progress-scanner {
    /* position: absolute; */
    top: 0;
    left: 0;
    height: 100%;
    width: 10px;
    background: linear-gradient(
      to right,
      transparent 0%,
      rgba(255, 255, 255, 0.9) 50%,
      transparent 100%
    );
    pointer-events: none;
    z-index: 101;
    opacity: 0;
  }

  .content-inside-reveal-wrapper {
    margin-left: 20px;
  }
</style>

<div class="reveal-wrapper d-flex align-items-center">
  <div class="reveal-wrapper-cursor"></div>

  <div class="content-inside-reveal-wrapper d-flex align-items-center">
    <div class="scroll-progress-container">
      <div class="scroll-progress-bar"></div>
      <div class="scroll-progress-scanner"></div>
    </div>
    <div class="scroll-progress-percentage ms-2 ps-1">0%</div>
  </div>
</div>


