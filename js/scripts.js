// register the plugin
gsap.registerPlugin(ScrollTrigger);

window.addEventListener("load", function () {
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
});

// horizontal line animations (left & right)
const container = document.getElementById("lineSection");
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
  duration: 1,
  ease: "power2.out",
  stagger: {
    each: 0.1,
    from: "start"
  },
  scrollTrigger: {
    trigger: container,
    start: "top bottom",
    end: "2160px bottom",
    scrub: 1.7
  }
});

gsap.utils.toArray(".blur-fade-in").forEach(el => {
  gsap.to(el, {
    opacity: 1,
    filter: "blur(0px)",
    y: 0,
    duration: 1,
    ease: "power2.out",
    scrollTrigger: {
      trigger: el,
      start: "top bottom",
      end: "top 80%",
      scrub: 1.7,
      markers: true,
    }
  });
});
