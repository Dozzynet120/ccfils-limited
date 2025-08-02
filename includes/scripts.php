<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  // Initialize Swiper for hero and testimonials
  const heroSwiper = new Swiper(".hero.swiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  const testimonialSwiper = new Swiper(".testimonials.swiper", {
    loop: true,
    autoplay: {
      delay: 7000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  // Initialize AOS animations
  AOS.init({
    duration: 1000,
    once: true,
  });

  // Mobile nav toggle
  const navToggle = document.querySelector(".nav-toggle");
  const navMenu = document.querySelector(".navbar-links");

  navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });
</script>
