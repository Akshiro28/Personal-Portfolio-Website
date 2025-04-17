<style>
  .animated-section {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
    z-index: 99;
  }

  .tile {
    position: absolute;
    background-color: #1c1719;
    opacity: 0;
  }

  .animation-boundary {
    position: relative;
    height: 500px;
    margin-top: 600px;
    pointer-events: none;
  }
</style>

<div class="animated-section" id="animatedSection"></div>
<div class="animation-boundary" id="animationBoundary"></div>