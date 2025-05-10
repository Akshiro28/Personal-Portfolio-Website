gsap.registerPlugin(ScrollTrigger);
let tlCalculateRevealWrapperContainerSize = [];
let navbarTween;
let tlScrollOnTop;
let loadingPortalDurationBoolean = 1;
let loadingPortalDuration = 2.5;
let tlLoadingText;
let delayOpeningText = 3850;
let isPortalFinished = 0;

if (window.innerWidth < 768) delayOpeningText = 0;

// Detect touch
let isTouchDevice = false;
let isMouseDevice = false;
window.addEventListener('touchstart', function onFirstTouch() {
  isTouchDevice = true;
  const customCursors = document.querySelectorAll(".custom-cursor");
  customCursors.forEach((customCursor) => {
    customCursor.style.display = "none";
  });
  window.removeEventListener('touchstart', onFirstTouch, false);
}, false);

// Detect mouse
window.addEventListener('mousemove', function onMouseMove() {
  if (!isTouchDevice) {
    isMouseDevice = true;
    window.removeEventListener('mousemove', onMouseMove, false);

    const customCursors = document.querySelectorAll(".custom-cursor");
    customCursors.forEach((customCursor) => {
      customCursor.style.display = "unset";
    });
  }
}, false);

const currentPage = document.body.dataset.page;
const menuLinks = document.querySelectorAll('.menu-link');

menuLinks.forEach(link => {
  if (link.dataset.page === currentPage) {
    link.classList.add('active');
  }
});

// hide scroll bar when opening menu
const scrollbarContainer = document.getElementById('customScrollbarContainer');

let tlScrollBar;
if (scrollbarContainer) {
  tlScrollBar = gsap.timeline({ paused: true });

  tlScrollBar.to(scrollbarContainer, {
    opacity: 0,
    duration: 0.4,
    ease: 'power2.out',
  }).set(scrollbarContainer, {
    display: 'none',
  });
}

// Safe Lenis setup with fallback
try {
  if (typeof Lenis !== 'undefined') {
    window.lenis = new Lenis({
      duration: 1.5,
      smooth: true,
      direction: "vertical",
      gestureDirection: "vertical",
      smoothTouch: false
    });

    ScrollTrigger.scrollerProxy(document.body, {
      scrollTop(value) {
        return arguments.length
          ? lenis.scrollTo(value, { immediate: true })
          : lenis.targetScroll;
      },
      getBoundingClientRect() {
        return {
          top: 0,
          left: 0,
          width: window.innerWidth,
          height: window.innerHeight
        };
      },
      pinType: document.body.style.transform ? "transform" : "fixed"
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    lenis.on('scroll', ScrollTrigger.update);
    ScrollTrigger.refresh();
  } else {
    console.warn("Lenis not loaded.");
  }
} catch (err) {
  console.error("Failed to initialize Lenis:", err);
}

let resizeTimeout;
window.addEventListener("resize", () => {
  if (window.innerWidth < 576) return;

  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(() => {
    ScrollTrigger.getAll().forEach(trigger => trigger.kill());

    document.querySelectorAll(".tile").forEach(el => el.remove());
    document.querySelectorAll(".line").forEach(el => el.remove());

    tileGridAnimation();
    horizontalLinesAnimation();
    blurFadeIn();
    imgScroll();
    matchCutBelowSize();
    cutBelow();
    calculateRevealWrapperContainerSize();
    calculateSpanFontSize();

    ScrollTrigger.refresh(true);
  }, 200);
});

// load animations on page load
window.addEventListener("load", function () {
  tileGridAnimation();
  horizontalLinesAnimation();
  blurFadeIn();
  imgScroll();
  matchCutBelowSize();
  cutBelow();
  calculateRevealWrapperContainerSize();
  navbarAnimation();
  scrollDownCircle();
});

document.addEventListener('DOMContentLoaded', function () {
  const sections = document.querySelectorAll('section[data-section-name]');
  const navItems = document.querySelectorAll('.section-navigation .content-inside-reveal-wrapper');

  function updateActiveNav() {
    let closestSection = null;
    let closestOffset = Number.POSITIVE_INFINITY;

    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      const offset = Math.abs(rect.top); // distance from top of viewport

      if (offset < closestOffset && rect.top < window.innerHeight) {
        closestOffset = offset;
        closestSection = section;
      }
    });

    if (closestSection) {
      const sectionName = closestSection.getAttribute('data-section-name');

      navItems.forEach(item => {
        if (item.getAttribute('data-section-name') === sectionName) {
          item.classList.add('active');
        } else {
          item.classList.remove('active');
        }
      });
    }
  }

  window.addEventListener('scroll', updateActiveNav);
  updateActiveNav(); // Initial run in case a section is already visible

  // section navigation on click redirects user to the section
  navItems.forEach(item => {
    item.addEventListener('click', function () {
      const sectionName = this.getAttribute('data-section-name');
      const targetSection = document.querySelector(`section[data-section-name="${sectionName}"]`);
  
      if (!targetSection) {
        console.warn(`No section found with data-section-name="${sectionName}"`);
        return;
      }
  
      if (typeof window.lenis === 'undefined') {
        console.warn("Lenis is not available.");
        return;
      }
  
      const offset = parseInt(targetSection.getAttribute('data-section-offset')) || 0;
  
      window.lenis.scrollTo(targetSection, {
        offset: offset,
        duration: 1.6,
        easing: t => t < 0.5 ? 4*t*t*t : (t - 1)*(2*t - 2)*(2*t - 2) + 1  
      });
    });
  });

  // menu open and menu close (navbar)
  const menuToggle = document.getElementById('menuToggle');
  const menuClose = document.getElementById('menuClose');
  const fullscreenMenu = document.getElementById('fullscreenMenu');
  const menuItems = document.querySelectorAll('.fullscreen-menu li');

  // Open fullscreen menu
  function openMenu() {
    fullscreenMenu.classList.add('active');
    try {
      if (typeof lenis !== 'undefined' && typeof lenis.stop === 'function') {
        lenis.stop();
      }
    } catch (err) {
      console.warn('Lenis stop failed or not available:', err);
    }    

    // Animate each menu item individually (random entrance animation)
    gsap.fromTo(menuItems,
      {
        opacity: 0,
        y: -100 // Start slightly above
      },
      {
        opacity: 1,
        y: 0,
        duration: 1.2,
        delay: 0.5,
        ease: 'power3.out',
        stagger: {
          each: 0.2,
          from: "start"
        }
      }
    );

    if (tlScrollBar) tlScrollBar.play();
  }

  // Close fullscreen menu
  function closeMenu() {
    fullscreenMenu.classList.remove('active');
    try {
      if (typeof lenis !== 'undefined' && typeof lenis.start === 'function') {
        lenis.start();
      }
    } catch (err) {
      console.warn('Lenis start failed or not available:', err);
    }    

    if (tlScrollBar) tlScrollBar.reverse();
  }
  
  const topLine = document.querySelector('.line-menu.top');
  const bottomLine = document.querySelector('.line-menu.bottom');

  function compressIconLines() {
    gsap.to(topLine, { attr: { y1: 8, y2: 8 }, duration: 0.2 });
    gsap.to(bottomLine, { attr: { y1: 16, y2: 16 }, duration: 0.2 });
  }
  
  // Reset hamburger icon spacing on hover out (hover out)
  function resetIconLines() {
    gsap.to(topLine, { attr: { y1: 6, y2: 6 }, duration: 0.2 });
    gsap.to(bottomLine, { attr: { y1: 18, y2: 18 }, duration: 0.2 });
  }

  // Event listeners for the hamburger icon
  menuToggle.addEventListener('click', openMenu);
  menuClose.addEventListener('click', closeMenu);

  menuToggle.addEventListener('mouseenter', compressIconLines);
  menuToggle.addEventListener('mouseleave', resetIconLines);

  // custom cursor
  const cursorOuter = document.querySelector(".custom-cursor--large");
  const cursorInner = document.querySelector(".custom-cursor--small");
  let isHover = 0;
  let isStuck = false;
  let mouse = {
    x: -100,
    y: -100,
  };

  let cursorOuterOriginalState = {
    width: cursorOuter.getBoundingClientRect().width,
    height: cursorOuter.getBoundingClientRect().height,
  };
  const buttons = document.querySelectorAll(".cursor-hoverable");
  const buttons2 = document.querySelectorAll(".cursor-hoverable-2");

  buttons.forEach((button) => {
    button.addEventListener("pointerenter", handleMouseEnter);
    button.addEventListener("pointerleave", handleMouseLeave);
  });

  buttons2.forEach((button) => {
    button.addEventListener("pointerenter", handleMouseEnter2);
    button.addEventListener("pointerleave", handleMouseLeave2);
  });

  document.body.addEventListener("pointermove", updateCursorPosition);

  document.body.addEventListener("pointerdown", () => {
    if (isHover === 0) {
      gsap.to(cursorInner, 0.2, {
        scale: 2
      });
    }
  });
  document.body.addEventListener("pointerup", () => {
    if (isHover === 0) {
      gsap.to(cursorInner, 0.2, {
        scale: 1
      });
    }
  });

  function updateCursorPosition(e) {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  }

  function updateCursor() {
    gsap.set(cursorInner, {
      x: mouse.x,
      y: mouse.y,
    });
  
    if (!isStuck) {
      gsap.to(cursorOuter, {
        duration: 0.25,
        x: mouse.x - cursorOuterOriginalState.width / 2,
        y: mouse.y - cursorOuterOriginalState.height / 2,
      });
    } else {
      // while stuck, update cursorOuter to follow the hovered element's position
      if (stuckElement) {
        const targetBox = stuckElement.getBoundingClientRect();

        // Get the border-radius of the hovered element
        const borderRadius = window.getComputedStyle(stuckElement).borderRadius;

        gsap.to(cursorOuter, {
          duration: 0,
          width: targetBox.width,
          height: targetBox.height,
          borderRadius: borderRadius // Match the border-radius of the hovered element
        });

        gsap.to(cursorOuter, {
          duration: 0.3,
          x: targetBox.left,
          y: targetBox.top,
        });
      }
    }
  
    requestAnimationFrame(updateCursor);
  }
  updateCursor();

  let stuckElement = null;
  function handleMouseEnter(e) {
    isStuck = true;
    stuckElement = e.currentTarget; // store the hovered element

    gsap.to(cursorInner, {
      duration: 0.25,
      scale: 0,
      opacity: 0
    });
  }

  function handleMouseLeave() {
    isStuck = false;
    stuckElement = null; // reset when mouse leaves
    gsap.to(cursorOuter, {
      width: cursorOuterOriginalState.width,
      height: cursorOuterOriginalState.width,
      borderRadius: "50%",
      backgroundColor: "transparent",
      duration: 0.25
    });

    gsap.to(cursorInner, {
      duration: 0.25,
      scale: 1,
      opacity: 1
    });
  }

  let enterInnerTween;
  let enterOuterTween;
  let leaveInnerTween;
  let leaveOuterTween;

  function handleMouseEnter2() {
    // Kill any running leave animations first
    if (leaveInnerTween) leaveInnerTween.kill();
    if (leaveOuterTween) leaveOuterTween.kill();
  
    enterInnerTween = gsap.to(cursorInner, {
      duration: 0.9,
      scale: 8,
      ease: "elastic.out(1, 0.5)"
    });
  
    enterOuterTween = gsap.to(cursorOuter, {
      duration: 0.3,
      scale: 0,
      opacity: 0
    });

    isHover = 1;
  }
  
  function handleMouseLeave2() {
    // Kill any running enter animations first
    if (enterInnerTween) enterInnerTween.kill();
    if (enterOuterTween) enterOuterTween.kill();
  
    leaveInnerTween = gsap.to(cursorInner, {
      duration: 0.9,
      scale: 1,
      ease: "power4.out"
    });
  
    leaveOuterTween = gsap.to(cursorOuter, {
      duration: 0.9,
      scale: 1,
      opacity: 1,
      ease: "elastic.out(1, 0.6)"
    });

    isHover = 0;
  }

  buttons.forEach(button => {
    let bounds = button.getBoundingClientRect();
    let isHovering = false;
    let mouse2 = { x: 0, y: 0 };
    
    function update(e) {
      mouse2.x = e.clientX;
      mouse2.y = e.clientY;
      
      bounds = button.getBoundingClientRect(); // update bounds on every move

      const relX = mouse2.x - bounds.left - bounds.width / 2;
      const relY = mouse2.y - bounds.top - bounds.height / 2;

      // move the button
      if (isHovering) {
        gsap.to(button, {
          x: relX * 0.2,
          y: relY * 0.4,
          rotate: relX * 0.02,
          ease: "power3.out",
          duration: 0.45,
        });
      }
    }

    function reset() {
      gsap.to(button, {
        x: 0,
        y: 0,
        rotate: 0,
        ease: "elastic.out(1, 0.5)",
        duration: 1.4,
      });
    }

    button.addEventListener('mouseenter', () => {
      isHovering = true;
    });

    button.addEventListener('mouseleave', () => {
      isHovering = false;
      reset();
    });

    window.addEventListener('mousemove', update);
  });
});

function tileGridAnimation() {
  const section = document.getElementById("animatedSection");
  if (!section) return;

  const animationBoundary = document.getElementById("animationBoundary");

  let desiredCols;
  if (window.innerWidth <= 768) {
    desiredCols = 6;
  } else if (window.innerWidth <= 992) {
    desiredCols = 8;
  } else if (window.innerWidth <= 1200) {
    desiredCols = 10;
  } else {
    desiredCols = 12;
  }

  // Round down tile size so we can stretch last row/column manually
  const tileSize = Math.ceil((window.innerWidth + 100) / desiredCols);
  const cols = Math.ceil((window.innerWidth + 100) / tileSize);
  const rows = Math.ceil((window.innerHeight + 1200) / tileSize);
  let tiles = [];

  // Clear previous tiles if any
  section.innerHTML = '';

  // Create grid of tiles
  for (let row = 0; row < rows; row++) {
    for (let col = 0; col < cols; col++) {
      const tile = document.createElement("div");
      tile.classList.add("tile");

      // Basic size
      let width = tileSize;
      let height = tileSize;

      // Stretch last column
      if (col === cols - 1) {
        width = window.innerWidth - tileSize * (cols - 1);
      }

      // Stretch last row
      if (row === rows - 1) {
        height = window.innerHeight - tileSize * (rows - 1);
      }

      tile.style.width = `${width}px`;
      tile.style.height = `${height}px`;
      tile.style.position = "absolute";
      tile.style.left = `${col * tileSize}px`;
      tile.style.top = `${row * tileSize}px`;
      section.appendChild(tile);
      tiles.push(tile);
    }
  }

  // Shuffle tiles randomly
  tiles = tiles.sort(() => Math.random() - 0.5);

  // Animate tile opacity on scroll
  const progressBarIntoLineSection = document.getElementById("progressBarIntoLineSection");
  const progressBarIntoLineSectionContainer = document.getElementById("progressBarIntoLineSectionContainer");
  const lineSection = document.getElementById("lineSection");

  gsap.to(tiles, {
    opacity: 1,
    duration: 0.3,
    stagger: {
      each: 0.03,
      from: "random"
    },
    scrollTrigger: {
      trigger: animationBoundary,
      start: "top bottom",
      end: "bottom bottom",
      scrub: 2,
      onLeave: () => {
        overlayAnimations();
      },
      onEnterBack: () => {
        reverseOverlayAnimations();
      }
    }
  });

  gsap.to(progressBarIntoLineSectionContainer, {
    bottom: "50%",
    scrollTrigger: {
      trigger: lineSection,
      start: "top bottom",
      end: "1150 bottom",
      scrub: 1.5
    }
  })

  gsap.to(progressBarIntoLineSection, {
    width: "100%",
    duration: 1.5,
    ease: "power3.out",
    overwrite: true,
    scrollTrigger: {
      trigger: lineSection,
      start: "top bottom",
      end: "1000 bottom",
      scrub: 1.5
    }
  })
}

function horizontalLinesAnimation(){
  // horizontal line animations (left & right)
  const container = document.getElementById("lineSection");
  if (!container) return; // skip if the section doesn't exist

  let gap = 0; // vertical space between lines
  if (window.innerWidth < 768) gap = 130;
  else if (window.innerWidth < 1200) gap = 195;
  else gap = 260;

  const sectionHeight = container.offsetHeight;
  const lineCount = Math.ceil(sectionHeight / gap);

  const lines = [];

  // create and store all lines
  for (let i = 0; i <= lineCount + 5; i++) {
    const line = document.createElement("div");
    line.classList.add("line");
    line.style.top = `${i * gap}px`;
    line.style.transform = `translateX(${i % 2 === 0 ? '-100%' : '100%'})`; // set initial offset
    container.appendChild(line);
    lines.push(line);
  }

  // animate all lines at once, with stagger
  gsap.to(lines, {
    x: 0,
    duration: 0.8,
    ease: "power3.out",
    stagger: {
      each: 0.03,
      from: "start"
    },
    scrollTrigger: {
      trigger: container,
      start: "800px bottom",
      end: "55% bottom",
      scrub: 2
    }
  });
}

function blurFadeIn(){
  gsap.utils.toArray(".blur-fade-in").forEach(el => {
    gsap.to(el, {
      y: 0,
      duration: 1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: el,
        start: "top bottom",
        end: "bottom 40%",
        scrub: 2
      }
    });
  });
}

function cutBelow() {
  const sections = document.querySelectorAll(".cut-below");

  sections.forEach(section => {
    const hr = section.querySelector(".cut-below-hr");
    const item = section.querySelector(".cut-below-items");

    if (!item) return;

    const tlCutBelow = gsap.timeline({ paused: true });

    tlCutBelow.to(hr, {
      width: "100%",
      duration: 0.8,
      ease: "power3.out",
    }).to(item, {
      top: "50%",
      duration: 1.2,
      ease: "power3.out",
    });

    ScrollTrigger.create({
      trigger: section,
      start: "bottom 85%",
      end: "bottom center",
      onEnter: () => tlCutBelow.play(),
      onLeaveBack: () => tlCutBelow.reverse(),
    });
  });
}

function imgScroll(){
  gsap.utils.toArray(".img-scroll").forEach(el => {
    gsap.to(el, {
      y: -400,
      duration: 1,
      scrollTrigger: {
        trigger: el,
        start: "top bottom",
        end: "bottom top",
        scrub: 2
      }
    });
  });
}

function matchCutBelowSize() {
  document.querySelectorAll('.cut-below').forEach(container => {
    const item = container.querySelector('.cut-below-items');

    if (item) {
      const rect = item.getBoundingClientRect();
      container.style.width = `${rect.width}px`;
      container.style.height = `${rect.height + 6}px`;
    }
  });
}

function calculateRevealWrapperContainerSize() {
  const revealWrappers = document.querySelectorAll('.reveal-wrapper');

  revealWrappers.forEach(wrapper => {
    const contents = wrapper.querySelectorAll('.content-inside-reveal-wrapper');
    const cursors = wrapper.querySelectorAll('.reveal-wrapper-cursor');

    let widest = 0;
    let totalHeight = 0;

    // Calculate total height and widest content
    contents.forEach(content => {
      totalHeight += content.scrollHeight;
      if (content.scrollWidth > widest) {
        widest = content.scrollWidth;
      }
    });

    wrapper.style.height = `${totalHeight + 13}px`;
    gsap.to(wrapper, {
      width: `${widest + 36}px`,
      duration: 1.2,
      ease: "expo.out"
    });

    // Apply animations with staggered delays
    contents.forEach((content, index) => {
      const cursor = cursors[index];
      const contentWidth = content.scrollWidth;
      const baseDelay = 1.6 + (loadingPortalDuration * loadingPortalDurationBoolean * 1.75);
      const stagger = 0.35;
    
      const tl = gsap.timeline();
    
      tl.to(content, {
        width: `${contentWidth}px`,
        delay: baseDelay + index * stagger,
        duration: 1.2,
        ease: "expo.out",
        onStart: () => {
          loadingPortalDurationBoolean = 0;
        }
      });
    
      if (cursor) {
        tl.to(cursor, {
          height: "0px",
          duration: 0.8,
          ease: "expo.out"
        });
      }
    
      // Save this timeline
      tlCalculateRevealWrapperContainerSize.push(tl);
    });    
  });
}

function overlayAnimations() {
  const revealWrappers = document.querySelectorAll('.reveal-wrapper');

  // Kill reverse animation if it's running
  if (Array.isArray(tlCalculateRevealWrapperContainerSize)) {
    tlCalculateRevealWrapperContainerSize.forEach(tl => {
      if (typeof tl.kill === 'function') tl.kill();
    });
    tlCalculateRevealWrapperContainerSize = []; // Clear the array
  }  

  revealWrappers.forEach(wrapper => {
    const contents = wrapper.querySelectorAll('.content-inside-reveal-wrapper');
    const revealWrappersCursor = wrapper.querySelectorAll('.reveal-wrapper-cursor');

    if (contents) {
      wrapper.style.width = "0px";
      wrapper.style.zIndex = "999";

      if (revealWrappersCursor && revealWrappersCursor.length > 0) {
        revealWrappersCursor.forEach(cursor => {
          cursor.style.height = "100%";
        });
      }      

      document.documentElement.style.setProperty('--change-solid', '#ffffff');
      document.documentElement.style.setProperty('--change-solid-inverse', '#1c1719');
      // document.documentElement.style.setProperty('--change-progress-bar-track', 'rgba(255, 255, 255, 0.05)');
      document.documentElement.style.setProperty('--change-progress-bar-track', '#282325');
      document.documentElement.style.setProperty('--change-from-dark-ten-percent', 'rgba(255, 255, 255, 0.08)');
      document.documentElement.style.setProperty('--change-navbar-menu', '#282325');
      document.documentElement.style.setProperty('--light-light-blue', 'rgb(160, 160, 255, 0.14)');
      document.documentElement.style.setProperty('--change-gray', '#A0A0A0');

      contents.forEach((content) => {
        content.style.width = "0px";
      });

      calculateRevealWrapperContainerSize();
      if (navbarTween) {
        navbarTween.kill();
      }
      navbar.style.top = "-61px";
      navbarAnimation();
    }
  });
}

function reverseOverlayAnimations() {
  const revealWrappers = document.querySelectorAll('.reveal-wrapper');

  // Kill forward animation if it's running
  if (Array.isArray(tlCalculateRevealWrapperContainerSize)) {
    tlCalculateRevealWrapperContainerSize.forEach(tl => {
      if (typeof tl.kill === 'function') tl.kill();
    });
    tlCalculateRevealWrapperContainerSize = []; // Clear the array
  }  

  revealWrappers.forEach(wrapper => {
    const contents = wrapper.querySelectorAll('.content-inside-reveal-wrapper');
    const revealWrappersCursor = wrapper.querySelectorAll('.reveal-wrapper-cursor');

    if (contents) {
      wrapper.style.width = "0px";
      wrapper.style.zIndex = "8";

      if (revealWrappersCursor && revealWrappersCursor.length > 0) {
        revealWrappersCursor.forEach(cursor => {
          cursor.style.height = "100%";
        });
      }      

      document.documentElement.style.setProperty('--change-solid', '#1c1719');
      document.documentElement.style.setProperty('--change-solid-inverse', '#ffffff');
      // document.documentElement.style.setProperty('--change-progress-bar-track', 'rgba(0, 0, 0, 0.07)');
      document.documentElement.style.setProperty('--change-progress-bar-track', '#EDEDED');
      document.documentElement.style.setProperty('--change-from-dark-ten-percent', 'rgba(0, 0, 0, 0.10)');
      document.documentElement.style.setProperty('--change-navbar-menu', '#EDEDED');
      document.documentElement.style.setProperty('--light-light-blue', 'rgb(160, 160, 255, 0.18)');
      document.documentElement.style.setProperty('--change-gray', '#666');

      contents.forEach((content) => {
        content.style.width = "0px";
      });

      calculateRevealWrapperContainerSize();

      const navbar = document.getElementById("navbar");
      if (navbarTween) {
        navbarTween.kill();
      }
      navbar.style.top = "-61px";
      navbarAnimation();
    }
  });
}

function generateSectionNavigation() {
  const sections = document.querySelectorAll('section[data-section-name]');
  const revealWrapper = document.querySelector('.reveal-wrapper.section-navigation');

  // Clear any existing content first
  revealWrapper.innerHTML = '';

  sections.forEach((section) => {
    const sectionName = section.getAttribute('data-section-name');
    const displayText = `${sectionName.replace(/-/g, ' ')}`;

    // Create content wrapper
    const contentWrapper = document.createElement('div');
    contentWrapper.classList.add('content-inside-reveal-wrapper');
    
    // Add data-section-name to content wrapper
    contentWrapper.setAttribute('data-section-name', sectionName);

    // Create cursor
    const cursor = document.createElement('div');
    cursor.classList.add('reveal-wrapper-cursor');

    // Create paragraph
    const p = document.createElement('p');
    p.classList.add('mb-0', 'cursor-hoverable');
    p.textContent = displayText;

    // Append to content wrapper
    contentWrapper.appendChild(cursor);
    contentWrapper.appendChild(p);

    // Append to reveal wrapper
    revealWrapper.appendChild(contentWrapper);
  });
}
generateSectionNavigation();

// Scroll listener -> progress bar
let hasTriggeredScrollEnd = false;
let targetScrollPercent = 0;

window.addEventListener('scroll', () => {
  if (window.innerWidth < 768) return;

  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  targetScrollPercent = (scrollTop / docHeight) * 100;

  const bar = document.querySelector('.scroll-progress-bar');
  const percentText = document.querySelector('.scroll-progress-percentage');

  if (bar) bar.style.width = `${Math.round(targetScrollPercent)}%`;
  if (percentText) percentText.textContent = `${Math.round(targetScrollPercent)}%`;

  if (targetScrollPercent >= 99 && !hasTriggeredScrollEnd) {
    hasTriggeredScrollEnd = true;
    onScrollComplete();
  }

  if (targetScrollPercent < 99 && hasTriggeredScrollEnd) {
    hasTriggeredScrollEnd = false;
    onScrollReverse();
  }
});

// overlay scripts + custom scroll bar (only if lenis is present)
if (window.lenis && window.innerWidth >= 768) {
  const thumb = document.getElementById('customScrollbar');

  let currentScrollPercent = 0;
  let isDragging = false;
  let startY = 0;
  let startScrollPercent = 0;

  // Update thumb position smoothly
  function animateThumb() {
    currentScrollPercent += (targetScrollPercent - currentScrollPercent) * 0.1;

    const trackHeight = window.innerHeight - thumb.offsetHeight - 44;
    const thumbTop = (currentScrollPercent / 100) * trackHeight;
    thumb.style.transform = `translateY(${thumbTop}px)`;

    requestAnimationFrame(animateThumb);
  }
  animateThumb();

  // Drag behavior
  thumb.addEventListener('mousedown', (e) => {
    isDragging = true;
    startY = e.clientY;
    const trackHeight = window.innerHeight - thumb.offsetHeight - 44;
    startScrollPercent = currentScrollPercent;
    e.preventDefault();
  });

  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;

    const deltaY = e.clientY - startY;
    const trackHeight = window.innerHeight - thumb.offsetHeight - 44;
    let newScrollPercent = startScrollPercent + (deltaY / trackHeight) * 100;

    newScrollPercent = Math.max(0, Math.min(100, newScrollPercent));
    targetScrollPercent = newScrollPercent;

    const scrollAmount = (targetScrollPercent / 100) * (document.documentElement.scrollHeight - window.innerHeight);
    lenis.scrollTo(scrollAmount, { immediate: true });
  });

  window.addEventListener('mouseup', () => {
    isDragging = false;
  });
} else {
  console.warn("Lenis not available. Custom scrollbar disabled.");
  document.documentElement.style.overflowY = 'unset';
  document.body.style.overflowY = 'unset';

  const customScrollbar = document.getElementById("customScrollbarContainer");
  customScrollbar.classList.add('d-none');
}

function onScrollComplete() {
  if (window.innerWidth < 1200) return;

  const scrollToTop = document.getElementById("scrollToTop");
  const scrollToTopButton = document.querySelector("#scrollToTop button");

  gsap.to(scrollToTop, {
    width: scrollToTopButton.scrollWidth,
    duration: 1.2,
    ease: "expo.out",
  })

  scrollToTop.style.height = `${scrollToTopButton.scrollHeight}px`;

  const interestedInHowIMadeThisWebsite = document.getElementById("interestedInHowIMadeThisWebsite");
  const interestedInHowIMadeThisWebsiteButton = document.querySelector("#interestedInHowIMadeThisWebsite a");

  gsap.to(interestedInHowIMadeThisWebsite, {
    width: interestedInHowIMadeThisWebsiteButton.scrollWidth,
    duration: 1.2,
    ease: "expo.out",
  })

  interestedInHowIMadeThisWebsite.style.height = `${interestedInHowIMadeThisWebsiteButton.scrollHeight}px`;
}

function onScrollReverse() {
  if (window.innerWidth < 1200) return;

  const scrollToTop = document.getElementById("scrollToTop");

  gsap.to(scrollToTop, {
    width: "0",
    duration: 1.2,
    ease: "expo.out",
  })

  const interestedInHowIMadeThisWebsite = document.getElementById("interestedInHowIMadeThisWebsite");

  gsap.to(interestedInHowIMadeThisWebsite, {
    width: "0",
    duration: 1.2,
    ease: "expo.out",
  })
}

function navbarAnimation() {
  const navbar = document.getElementById("navbar");
  let delay = 0.6 + (loadingPortalDuration * loadingPortalDurationBoolean * 1.75);

  navbarTween = gsap.to(navbar, {
    top: 0,
    duration: 1.2,
    delay: delay,
    zIndex: 9999,
    ease: "power3.out",
    onStart: () => {
      loadingPortalDurationBoolean = 0;
    }
  });
}

function scrollBackToTop() {
  if (typeof window.lenis === 'undefined') {
    console.warn("Lenis is not available.");
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    return;
  } else {
    lenis.scrollTo(0, { immediate: true })
  }
}

// loadng screen script
const TOTAL_TILES = 25;

// Generate shuffled index order once
const shuffledIndices = [...Array(TOTAL_TILES).keys()].sort(() => Math.random() - 0.5);

let loadedResources = 0;
let totalResources = 0;

const loadingGrid = document.getElementById('loading-grid');

// Generate 25 rectangles dynamically
for (let i = 0; i < TOTAL_TILES; i++) {
  const rect = document.createElement('div');
  rect.classList.add('rectangle');
  loadingGrid.appendChild(rect);
}

const gridRectangles = document.querySelectorAll('.rectangle');

function updateLoadingProgress() {
  const progress = (loadedResources / totalResources) * 100;

  console.log(`Loading progress: ${Math.floor(progress)}%`);
  console.log(loadedResources);
  console.log(totalResources);

  const tilesToLight = Math.min(Math.floor(progress / 4), TOTAL_TILES);

  // Light up tiles in order with GSAP animation
  for (let i = 0; i < tilesToLight; i++) {
    const index = shuffledIndices[i];
    const rect = gridRectangles[index];
    if (!rect.classList.contains('lit-up')) {
      rect.classList.add('lit-up');
      gsap.fromTo(rect, { scale: 0.5 }, { scale: 1, duration: 0.7, ease: "power3.out" });
    }
  }

  if (loadedResources >= totalResources) {
    if (tlLoadingText) tlLoadingText.kill();
    document.getElementById("loading-text").textContent = "LOADING SUCCESSFUL";

    gsap.to(".rectangle", {
      scale: 0,
      delay: 0.8,
      duration: 0.55,
      stagger: {
        each: 0.05,
      },
      onComplete: () => {
        document.querySelector("#loading-screen").style.backgroundColor = "transparent";
        document.getElementById("loading-text").style.opacity = "0";
        portalOpens();
      }
    });

    function portalOpens() {
      const portal = document.querySelector(".loading-portal");
      const newPortalWidth = window.innerWidth + 1 + 'px';
      const newPortalHeight = window.innerHeight + 1 + 'px';

      document.getElementById('loading-screen').style.pointerEvents = 'none';
      gsap.to(portal, {
        width: newPortalWidth,
        height: newPortalHeight,
        duration: loadingPortalDuration,
        ease: "back.inOut(0.9)",
        onComplete: () => {
          document.getElementById('loading-screen').style.display = 'none';
          if (window.innerWidth < 768) loadingPortalDurationBoolean = 0;
          
          // remove cursor once page loaded
          document.documentElement.style.cursor = 'none';
          document.body.style.cursor = 'none';

          setTimeout(openingTextAnimation, delayOpeningText);

          if (document.body.getAttribute('data-page') !== 'home' && isPortalFinished === 0) {
            animateRole();
            isPortalFinished = 1;
          }
        }
      });

      gsap.to(".loading-top, .loading-bottom", {
        y: "0%",
        duration: loadingPortalDuration,
        ease: "back.inOut(0.9)"
      });

      gsap.to(".loading-left, .loading-right", {
        x: "0%",
        duration: loadingPortalDuration,
        ease: "back.inOut(0.9)"
      });
    }
  }
}

function trackResourceLoading() {
  const resources = [...document.images, ...document.scripts];
  totalResources = document.images.length + document.scripts.length;

  // Fallback to handle empty resource pages
  if (totalResources === 0) {
    totalResources = TOTAL_TILES; // Treat as fully loaded
    loadedResources = TOTAL_TILES;
    updateLoadingProgress();
    return;
  }

  // Check each image's loading status
  Array.from(document.images).forEach(img => {
    if (img.complete) {
      loadedResources++;
      updateLoadingProgress()
    } else {
      img.onload = () => {
        loadedResources++;
        updateLoadingProgress()
      };
    }
  });

  // Check each script's loading status
  Array.from(document.scripts).forEach(script => {
    if (script.readyState === 'complete') {
      loadedResources++;
      updateLoadingProgress()
    } else {
      script.onload = () => {
        loadedResources++;
        updateLoadingProgress()
      };
    }
  });
}

trackResourceLoading();
window.addEventListener('load', trackResourceLoading);

// loading screen text script
const loadingText = document.getElementById("loading-text");
let dotCount = 0;
tlLoadingText = gsap.timeline();

tlLoadingText.to({}, {
  repeat: -1,
  repeatDelay: 0.3,
  onRepeat: () => {
    dotCount = (dotCount + 1) % 4;
    loadingText.textContent = "LOADING" + ".".repeat(dotCount);
  }
});

let spanFontSize = 116;
function calculateSpanFontSize() {
  if (window.innerWidth <= 768) {
    spanFontSize = 28;
  } else if (window.innerWidth <= 992) {
    spanFontSize = 54;
  } else if (window.innerWidth <= 1200) {
    spanFontSize = 76;
  } else if (window.innerWidth <= 1400) {
    spanFontSize = 96;
  } else {
    spanFontSize = 116;
  }

  const spanFonts = document.querySelectorAll(".text-line span");

  spanFonts.forEach((spanFont) => {
    spanFont.style.fontSize = `${spanFontSize}px`;
  });
}

// opening text on home page load
function openingTextAnimation() {
  if (document.body.getAttribute('data-page') !== 'home') {
    return;
  }

  const lines = document.querySelectorAll(".text-line");
  const [line1, line2, line3] = lines;

  // Split each line into span-wrapped letters
  lines.forEach(line => {
    const letters = line.textContent.split("");
    line.innerHTML = letters
      .map(letter => `<span>${letter === " " ? "&nbsp;" : letter}</span>`)
      .join("");
  });

  // Animate a single line
  function animateLine(timeline, line, options = {}) {
    const spans = line.querySelectorAll("span");
    const {
      showDelay = 0,
      hold = 0,
      staggerIn = 0.03,
      staggerOut = 0.03
    } = options;
    let delay = 2;

    // Set initial state
    gsap.set(spans, { y: 100, opacity: 0 });

    // Animate in
    timeline.to(line, { opacity: 1, duration: 0.01, delay: showDelay });
    timeline.to(spans, {
      y: 0,
      opacity: 1,
      duration: 1,
      delay: delay,
      ease: "power3.out",
      filter: "blur(0px)",
      stagger: {
        each: staggerIn,
        from: "random"
      },
    });

    // Hold
    timeline.to({}, { duration: hold });

    // Animate out
    timeline.to(spans, {
      y: -100,
      opacity: 0,
      duration: 0.98,
      ease: "power3.in",
      filter: "blur(12px)",
      stagger: {
        each: staggerOut,
        from: "random"
      },
    });
    timeline.to(line, { opacity: 0, duration: 0.01 }, `+=${spans.length * staggerOut}`);
    timeline.set(spans, { y: 100, opacity: 0 }); // Reset for future use
  }

  // Show line1 once
  const introTimeline = gsap.timeline();
  animateLine(introTimeline, line1, { hold: 1.2 });

  // Loop line2 and line3
  const loopTimeline = gsap.timeline({ repeat: -1, delay: introTimeline.duration() });
  function loop() {
    animateLine(loopTimeline, line2, { hold: 1.203 });
    animateLine(loopTimeline, line3, { hold: 1.203 });
  }
  loop();
}

function scrollDownCircle() {
  const scrollDownCircle = document.querySelector(".scroll-down-circle");

  gsap.to(scrollDownCircle, {
    y: 19,
    duration: 2,
    ease: "power2.inOut",
    repeat: -1,
    yoyo: true,
  })
}

if (document.body.getAttribute('data-page') !== 'home') {
  const container = document.getElementById("animated-text");
  const roles = Array.from(container.children);
  let index = 0;

  function animateRole() {
    roles.forEach(span => {
      gsap.set(span, { opacity: 0, y: 30, filter: "blur(6px)" });
    });

    const current = roles[index];

    gsap.fromTo(current,
      { y: 30, opacity: 0, filter: "blur(10px)" },
      {
        y: 0,
        opacity: 1,
        filter: "blur(0px)",
        duration: 0.8,
        ease: "power2.out",
        onComplete: () => {
          gsap.to(current, {
            delay: 2,
            y: -30,
            opacity: 0,
            filter: "blur(6px)",
            duration: 0.8,
            ease: "power2.in",
            onComplete: () => {
              index = (index + 1) % roles.length;
              animateRole();
            }
          });
        }
      }
    );
  }
}
