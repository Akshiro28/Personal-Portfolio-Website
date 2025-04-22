gsap.registerPlugin(ScrollTrigger);
let tlCalculateRevealWrapperContainerSize = [];
let additionalWidth = 16;

// Safe Lenis setup with fallback
try {
  if (typeof Lenis !== 'undefined') {
    const lenis = new Lenis({
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
    console.warn("Lenis is not loaded - smooth scrolling disabled.");
  }
} catch (err) {
  console.error("Failed to initialize Lenis:", err);
}

let resizeTimeout;
window.addEventListener("resize", () => {
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
});

function tileGridAnimation(){
  const section = document.getElementById("animatedSection");
  if (!section) return; // skip if the section doesn't exist

  const animationBoundary = document.getElementById("animationBoundary");

  const tileSize = 120;
  const cols = Math.ceil(window.innerWidth / tileSize);
  const rows = Math.ceil(window.innerHeight / tileSize);
  let tiles = [];

  // create grid of tiles
  for (let row = 0; row < rows; row++) {
    for (let col = 0; col < cols; col++) {
      const tile = document.createElement("div");
      tile.classList.add("tile");
      tile.style.width = `${tileSize}px`;
      tile.style.height = `${tileSize}px`;
      tile.style.left = `${col * tileSize}px`;
      tile.style.top = `${row * tileSize}px`;
      section.appendChild(tile);
      tiles.push(tile);
    }
  }

  // shuffle tiles randomly
  tiles = tiles.sort(() => Math.random() - 0.5);

  // animate tile opacity on scroll
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
}

function horizontalLinesAnimation(){
  // horizontal line animations (left & right)
  const container = document.getElementById("lineSection");
  if (!container) return; // skip if the section doesn't exist

  const gap = 260; // vertical space between lines
  const sectionHeight = container.offsetHeight;
  const lineCount = Math.ceil(sectionHeight / gap);

  const lines = [];

  // create and store all lines
  for (let i = 0; i <= lineCount + 1; i++) {
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
      end: "4000px bottom",
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

    wrapper.style.height = `${totalHeight + 8}px`;
    gsap.to(wrapper, {
      width: `${widest + 36}px`,
      duration: 1.2,
      ease: "expo.out"
    });

    // Apply animations with staggered delays
    contents.forEach((content, index) => {
      const cursor = cursors[index];
      const contentWidth = content.scrollWidth;
      const baseDelay = 1;
      const stagger = 0.35;
    
      const tl = gsap.timeline();
    
      tl.to(content, {
        width: `${contentWidth + additionalWidth}px`,
        delay: baseDelay + index * stagger,
        duration: 1.2,
        ease: "expo.out"
      });
    
      if (cursor) {
        tl.to(cursor, {
          height: "0px",
          duration: 0.5,
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
      document.documentElement.style.setProperty('--change-progress-bar-track', 'rgba(255, 255, 255, 0.05)');

      contents.forEach((content) => {
        content.style.width = "0px";
      });

      calculateRevealWrapperContainerSize();
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
      document.documentElement.style.setProperty('--change-progress-bar-track', 'rgba(0, 0, 0, 0.07)');

      contents.forEach((content) => {
        content.style.width = "0px";
      });

      calculateRevealWrapperContainerSize();
    }
  });
}

function generateSectionNavigation() {
  const sections = document.querySelectorAll('section[data-section-name]');
  const revealWrapper = document.querySelector('.reveal-wrapper.section-navigation');

  // Clear any existing content first
  revealWrapper.innerHTML = '';

  sections.forEach((section, index) => {
    const sectionName = section.getAttribute('data-section-name');
    const displayText = `${sectionName.replace(/-/g, ' ')}`;

    // Create content wrapper
    const contentWrapper = document.createElement('div');
    contentWrapper.classList.add('content-inside-reveal-wrapper');

    // Create cursor
    const cursor = document.createElement('div');
    cursor.classList.add('reveal-wrapper-cursor');

    // Create paragraph
    const p = document.createElement('p');
    p.classList.add('mb-0');
    p.textContent = displayText;

    // Append to content wrapper
    contentWrapper.appendChild(cursor);
    contentWrapper.appendChild(p);

    // Append to reveal wrapper
    revealWrapper.appendChild(contentWrapper);
  });
}

generateSectionNavigation();

// overlay scripts
window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercent = Math.round((scrollTop / docHeight) * 100);

  const bar = document.querySelector('.scroll-progress-bar');
  const percentText = document.querySelector('.scroll-progress-percentage');

  bar.style.width = `${scrollPercent}%`;
  percentText.textContent = `${scrollPercent}%`;
});