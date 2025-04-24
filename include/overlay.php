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
    transition: width 0.1s ease-out;
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
    right: 64px;
    left: unset;
    transform: translateY(-50%);
  }

  .section-navigation .content-inside-reveal-wrapper {
    padding-bottom: 1px;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
    cursor: pointer;
  }

  .section-navigation .content-inside-reveal-wrapper:not(.active):hover p {
    background-color: var(--change-from-dark-ten-percent);
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
  }

  #scrollToTop button {
    position: absolute;
    top: 0;
    background: var(--white);
    color: var(--primary-dark-color);
    border-radius: 4px;
    font-size: 12px;
    padding: 3px 12px 0px 12px;
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
  }

  #interestedInHowIMadeThisWebsite button {
    position: absolute;
    top: 0;
    background: var(--white);
    color: var(--primary-dark-color);
    border-radius: 4px;
    font-size: 12px;
    padding: 3px 12px 0px 12px;
  }
</style>

<div class="reveal-wrapper d-flex align-items-center">
  <div class="content-inside-reveal-wrapper d-flex align-items-center">
    <div class="reveal-wrapper-cursor"></div>
    <div class="scroll-progress-container">
      <div class="scroll-progress-bar"></div>
    </div>
    <div class="scroll-progress-percentage">0%</div>
  </div>
</div>

<div id="scrollToTop">
  <button>
    Scroll back to top
  </button>
</div>

<div id="interestedInHowIMadeThisWebsite">
  <button>
    Interested in the process of making this website? →
  </button>
</div>

<div class="reveal-wrapper section-navigation"></div>