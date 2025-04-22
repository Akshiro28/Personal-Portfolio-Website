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
    transform: translateY(1px);
    font-size: 12px;
    color: var(--change-solid);
    margin-left: 116px;
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
    padding-top: 3px;
    padding-left: 12px;
    padding-right: 12px;
    transition: background 0.5s, color 0.5s;;
    width: fit-content;
    border-radius: 3px;
  }

  .section-navigation .content-inside-reveal-wrapper.active p {
    background: var(--change-solid);
    color: var(--change-solid-inverse);
  }

  .section-navigation {
    top: 50%;
    right: 84px;
    left: unset;
    transform: translateY(-50%);
  }

  .section-navigation .content-inside-reveal-wrapper {
    margin-bottom: 4px;
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

<div class="reveal-wrapper section-navigation"></div>