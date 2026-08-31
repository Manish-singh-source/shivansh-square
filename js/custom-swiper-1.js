const heroTitle = document.getElementById("hero-title");
const heroSubtitle = document.getElementById("hero-subtitle");
const heroDescription = document.getElementById("hero-description");
const heroCopy = document.querySelector(".hero-banner-copy");
const heroTags = document.getElementById("hero-tags");

function updateHeroContent(activeIndex) {
  const slide = document.querySelector(
    `.swiper-slide[data-swiper-slide-index="${activeIndex}"]`
  ) || document.querySelectorAll(".swiper-slide")[activeIndex];

  if (!slide || !heroTitle || !heroSubtitle || !heroDescription) return;

  heroCopy && heroCopy.classList.add("is-changing");
  heroTags && heroTags.classList.add("is-changing");

  window.setTimeout(() => {
    heroTitle.textContent = slide.dataset.title || "";
    heroSubtitle.textContent = slide.dataset.subtitle || "";
    heroDescription.textContent = slide.dataset.description || "";

    if (heroTags && slide.dataset.tags) {
      slide.dataset.tags.split("|").forEach((tag, index) => {
        if (heroTags.children[index]) {
          heroTags.children[index].textContent = tag;
        }
      });
    }

    heroCopy && heroCopy.classList.remove("is-changing");
    heroTags && heroTags.classList.remove("is-changing");
  }, 350);
}

const swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  loop: true,
  spaceBetween: 0,
  effect: "creative",
  speed: 1500, // transition speed

  creativeEffect: {
    prev: {
      // Zoom out (shrink + fade)
      scale: 1.1,
      opacity: 0,
      translate: [0, 0, 0], // stay centered
    },
    next: {
      // Zoom in (grow + fade in)
      scale: 1.3,
      opacity: 0,
      translate: [0, 0, 0], // stay centered
    },
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: false,
    clickable: false,
  },
  on: {
    init: function () {
      updateHeroContent(this.realIndex);
    },
    slideChangeTransitionStart: function () {
      updateHeroContent(this.realIndex);
    },
  },
});
