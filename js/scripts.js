gsap.registerPlugin(ScrollTrigger);

// Safe Lenis setup with fallback
try {
  if (typeof Lenis !== 'undefined') {
    const lenis = new Lenis({
      duration: 1.2,
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

    ScrollTrigger.refresh(true);
  }, 200);
});

// load animations on page load
window.addEventListener("load", function () {
  tileGridAnimation();
  horizontalLinesAnimation();
  blurFadeIn();
  imgScroll();
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
      scrub: 2
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
  for (let i = 0; i < lineCount; i++) {
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
    ease: "power2.out",
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
      ease: "power2.out",
      scrollTrigger: {
        trigger: el,
        start: "top bottom",
        end: "bottom 40%",
        scrub: 2
      }
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