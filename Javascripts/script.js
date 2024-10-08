gsap.registerPlugin(ScrollTrigger);

// Locomotive Scroll initialization
const locoScroll = new LocomotiveScroll({
  el: document.querySelector("#main"),
  smooth: true,
});

// ScrollTrigger and LocomotiveScroll synchronization
ScrollTrigger.scrollerProxy("#main", {
  scrollTop(value) {
    return arguments.length
      ? locoScroll.scrollTo(value, 0, 0)
      : locoScroll.scroll.instance.scroll.y;
  },
  getBoundingClientRect() {
    return {
      top: 0,
      left: 0,
      width: window.innerWidth,
      height: window.innerHeight,
    };
  },
  pinType: document.querySelector("#main").style.transform
    ? "transform"
    : "fixed",
});

locoScroll.on("scroll", ScrollTrigger.update);
ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
ScrollTrigger.refresh();

// Animation functions
function createTimeline(options) {
  return gsap.timeline({
    scrollTrigger: {
      trigger: options.trigger,
      scroller: "#main",
      start: options.start || "top 70%",
      end: options.end || "top 80%",
      scrub: options.scrub || 2,
    },
  });
}

function Page1Animation() {
  const t1 = gsap.timeline();
  t1.from(".classpan", { opacity: 0, delay: 0.3, x: 10, stagger: 0.2 })
    .to(".classpan", { x: -10, stagger: 0.2, opacity: 0 })
    .to(".loader", { duration: 0.1, display: "none" })
    .from(".aboutusflex", { opacity: 0, x: -20 }, "-=0.5", "anime")
    .from(".greetinsflex span", { opacity: 0, stagger: 0.3 }, "anime")
    .from(".home-landing-image img", { opacity: 0, x: 20 }, "anime")
    .from(
      ".section-inner-para",
      { opacity: 0, duration: 0.3, x: -10 },
      "anime"
    );
}

function Page2Animation() {
  const tl2 = createTimeline({
    trigger: ".security-boxes",
    start: "top 60%",
    end: "top 60%",
  });
  tl2
    .from(
      ".same-scsss, .same-csss",
      { x: -20, duration: 2, opacity: 0 },
      "animation1"
    )
    .from(
      ".same-css, .same-cs",
      { x: 20, duration: 2, opacity: 0 },
      "animation1"
    );
}

function aboutus() {
  const tl3 = createTimeline({ trigger: ".aboutussection" });
  tl3
    .from(".aboutheading-section-big h1", { opacity: 0, y: 10 })
    .from(".left-about", { x: -10, opacity: 0 }, "about")
    .from(".right-about", { x: 10, opacity: 0 }, "about");
}

function SwiperFunc() {
  const swiper = new Swiper(".swiper", {
    speed: 400,
    autoplay: { delay: 3000 },
    loop: true,
    scrollbar: { el: ".swiper-scrollbar", draggable: true },
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      320: { slidesPerView: 2, spaceBetween: 20 },
      480: { slidesPerView: 3, spaceBetween: 30 },
      640: { slidesPerView: 4, spaceBetween: 40 },
    },
  });

  document
    .querySelector(".swiper-button-next")
    .addEventListener("click", () => swiper.slideNext());
  document
    .querySelector(".swiper-button-prev")
    .addEventListener("click", () => swiper.slidePrev());
}

function Awareness_topics() {
  const tl4 = createTimeline({ trigger: ".Awareness-Topics" });
  tl4.from(".heading-awareness-topics h1", { y: 20, delay: 1, opacity: 0 });

  const tl5 = createTimeline({
    trigger: ".View-all-awareness-topics",
    start: "top 85%",
    end: "top 90%",
  });
  tl5.from(".View-all-awareness-topics button", {
    opacity: 0,
    delay: 2,
    y: 10,
  });
}

function Awareness_videos() {
  const tl6 = createTimeline({ trigger: ".Awareness-Videos" });
  tl6
    .from(".heading-awareness-videos h1", { opacity: 0, delay: 1, y: 20 })
    .from(".Lower-awareness-flex span", {
      opacity: 0,
      x: -20,
      scale: 0.5,
      stagger: 2,
      duration: 3,
    })
    .from(".button-awanress", { opacity: 0, y: 3 });
}

// Initialize all animations
Page1Animation();
Page2Animation();
aboutus();
SwiperFunc();
Awareness_topics();
Awareness_videos();
