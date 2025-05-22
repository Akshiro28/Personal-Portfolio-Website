<style>
  .animated-section {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    pointer-events: none;
    z-index: 99;
  }

  .tile {
    position: absolute;
    background-color: var(--primary-dark-color);
    opacity: 0;
    outline: 1px solid var(--primary-dark-color);
  }

  .animation-boundary {
    position: absolute;
    height: 500px;
    margin-top: 600px;
    pointer-events: none;
  }
</style>

<div class="animated-section" id="animatedSection"></div>
<div class="animation-boundary" id="animationBoundary"></div>
