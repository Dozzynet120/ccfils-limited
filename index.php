<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Swiper CSS (if not already included in header.php) -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<!-- Hero Video Banner with Centered Text -->
<div class="video-hero">
  <video class="banner-video" autoplay muted loop playsinline poster="assets/images/flyer1.jpg">
    <source src="assets/images/LAG.mp4" type="video/mp4">
  </video>
  <div class="hero-overlay centered">
    <h1>About CCFILS Construction Nig. Limited</h1>
    <p>Building Excellence, Delivering Trust</p>
  </div>
</div>

<!-- Property Investment Section -->
<section class="section property-investment" data-aos="fade-up">
  <h2 class="section-title">Property Investment</h2>
  <div class="investment-grid">
    <div class="investment-card"><i class="fas fa-hand-holding-usd"></i><h3>Selling</h3></div>
    <div class="investment-card"><i class="fas fa-user-check"></i><h3>Buyers</h3></div>
    <div class="investment-card"><i class="fas fa-cogs"></i><h3>Management</h3></div>
    <div class="investment-card"><i class="fas fa-users"></i><h3>Users</h3></div>
    <div class="investment-card"><i class="fas fa-user-tie"></i><h3>Experts</h3></div>
    <div class="investment-card"><i class="fas fa-briefcase"></i><h3>Brokers</h3></div>
    <div class="investment-card"><i class="fas fa-key"></i><h3>Rents</h3></div>
    <div class="investment-card"><i class="fas fa-file-alt"></i><h3>Documents</h3></div>
  </div>
</section>

<!-- Featured Properties -->
<section class="section properties" data-aos="fade-up">
  <h2 class="section-title">Featured Properties</h2>
  <div class="property-grid">
    <?php include 'includes/property-card.php'; ?>
    <?php include 'includes/property-card.php'; ?>
    <?php include 'includes/property-card.php'; ?>
  </div>
</section>

<!-- About Preview -->
<section class="section about-preview" data-aos="fade-right">
  <div class="about-content">
    <h2>About Our Company</h2>
    <p>At CCFILS Construction Nig Ltd, we are dedicated to transforming ideas into lasting structures and creating solutions that meet your construction needs. With a specialization in construction, building estimation, and maintenance, we deliver excellence in every project, ensuring quality, precision, and sustainability.</p><br>
    <a href="about.php" class="btn-outline">Learn More</a>
  </div>
  <div class="about-image">
    <img src="assets/images/flyer2.jpg" alt="About Image">
  </div>
</section>

<!-- Services -->
<section class="section services" data-aos="zoom-in">
  <h2 class="section-title">Why Choose Us</h2>
  <div class="service-grid">
    <div class="service-card">
      <i class="fas fa-home"></i>
      <h3>Tailored Listings</h3>
      <p>Custom property recommendations based on your preferences.</p>
    </div>
    <div class="service-card">
      <i class="fas fa-map-marker-alt"></i>
      <h3>Prime Locations</h3>
      <p>Our listings are in the most desirable neighborhoods worldwide.</p>
    </div>
    <div class="service-card">
      <i class="fas fa-handshake"></i>
      <h3>Trusted Partners</h3>
      <p>We collaborate with top developers and agents.</p>
    </div>
  </div>
</section>

<!-- Extended Services -->
<section class="section extended-services" style="background: url('assets/images/bg-services.jpg') center/cover no-repeat;" data-aos="fade-up">
  <h2 class="section-title">Our Services</h2>
  <p>Our team of skilled professionals combines innovative techniques with industry best practices to provide integrated services and solutions.</p>
  <div class="service-grid">
    <div class="service-card">
      <i class="fas fa-drafting-compass"></i>
      <h3>Estimation Services</h3>
      <p>Accurate cost analysis and project estimation to guide your budget and planning.</p>
    </div>
    <div class="service-card">
      <i class="fas fa-paint-roller"></i>
      <h3>Construction Services</h3>
      <p>From conceptualization to completion, we build structures that stand the test of time.</p>
    </div>
    <div class="service-card">
      <i class="fas fa-key"></i>
      <h3>Maintenance Services</h3>
      <p>Comprehensive maintenance solutions to preserve and enhance the value of your property..</p>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="section stats" style="background: #111; color: #fff;" data-aos="fade-up">
  <h2 class="section-title">Let Numbers Speak</h2>
  <p>At CCFILS Construction Ltd., we prioritize client satisfaction, adhering to the highest standards of integrity, safety, and professionalism. Let us bring your vision to life with unmatched expertise and dedication.</p>
  <div class="stat-grid">
    <div class="stat-box">
      <h3 data-count="250">0</h3>
      <p>Projects Completed</p>
    </div>
    <div class="stat-box">
      <h3 data-count="100">0</h3>
      <p>Satisfied Clients</p>
    </div>
    <div class="stat-box">
      <h3 data-count="15">0</h3>
      <p>Years of Experience</p>
    </div>
  </div>
</section>

<!-- Works -->
<section class="section works" data-aos="fade-up">
  <h2 class="section-title">Some Works Done By Us</h2>
  <div class="work-gallery">
    <div class="project-card"><img src="assets/images/d9.jpg" alt="Work 1"></div>
    <div class="project-card"><img src="assets/images/d6.jpg" alt="Work 2"></div>
    <div class="project-card"><img src="assets/images/d10.jpg" alt="Work 3"></div>
    <div class="project-card"><img src="assets/images/d4.jpeg" alt="Work 4"></div>
  </div>
</section>

<!-- Testimonials -->
<section class="section testimonials swiper testimonial-swiper" data-aos="fade-up">
  <h2 class="section-title">Client Testimonials</h2>
  <div class="swiper-wrapper">
    <div class="swiper-slide testimonial-card">
      <img src="assets/images/mr.1.jpg" alt="" class="testimonial-img">
      <p>"Working with CCFILS Construction Ltd. has been a game-changer for us. Their professionalism, attention to detail, and commitment to excellence are unmatched. From the initial consultation to the final handover, the team demonstrated expertise in construction, accurate project estimation, and efficient maintenance solutions."<br />A Satisfied Client"</p>
    </div>
    <div class="swiper-slide testimonial-card">
      <img src="assets/images/mr.5.jpg" alt="" class="testimonial-img">
      <p>"CCFILS made our energy transistion seamless! Their team provided expert guidance, high-quality products, and professional installation services. Thanks to them, our office now enjoys uninterrupted power, and we've significantly reduced our energy costs. If you're looking for reliable solar solutions, CCFILS is the way to go!"</p>
    </div>
      <div class="swiper-slide testimonial-card">
      <img src="assets/images/mr.2.jpg" alt="" class="testimonial-img">
      <p>"CCFILS Construction Ltd exceeded our expectations with their top-notch service and attention to detail. They delivered our project on time, within budget, and with exceptional quality. We couldn’t be happier!"<br />A Happy Client"</p>
    </div>
      <div class="swiper-slide testimonial-card">
      <img src="assets/images/mr.3.jpg" alt="" class="testimonial-img">
      <p>"We highly recommend CCFILS Construction Ltd. for anyone looking for reliable, top-tier construction services. They truly set the standard for excellence in the industry!"."</p>
    </div>
  </div>
  <div class="swiper-pagination"></div>
</section>

<!-- CTA Banner -->
<section class="section cta" data-aos="fade-in">
  <div class="cta-text">
    <h2>Ready to find your next home?</h2><br>
    <a href="contact.php" class="btn">Contact Us</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Swiper Initialization -->
<script>
  const heroSwiper = new Swiper('.hero-swiper', {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.hero-swiper .swiper-pagination',
      clickable: true,
    }
  });

  const testimonialSwiper = new Swiper('.testimonial-swiper', {
    loop: true,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.testimonial-swiper .swiper-pagination',
      clickable: true,
    },
  });

  // Counter Animation
  const counters = document.querySelectorAll('[data-count]');
  counters.forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-count');
      const count = +counter.innerText;
      const increment = Math.ceil(target / 100);
      if (count < target) {
        counter.innerText = count + increment;
        setTimeout(updateCount, 30);
      } else {
        counter.innerText = target;
      }
    };
    updateCount();
  });
</script>

<!-- Navigation toggle script -->
<script>
  const navToggle = document.getElementById('navToggle');
  const navLinks = document.getElementById('navLinks');

  navToggle?.addEventListener('click', () => {
    navLinks.classList.toggle('active');
  });
</script>

<!-- Hero Video Banner Styling -->
<style>
  .video-hero {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
  }
  .video-hero video.banner-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .video-hero .hero-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    text-align: center;
    background-color: rgba(0,0,0,0.4);
    padding: 2rem;
    border-radius: 10px;
  }
  .hero-overlay h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
  }
  .hero-overlay p {
    font-size: 1.2rem;
  }

  /* Property Investment Grid Fix */
  .investment-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
  }

  .investment-card {
    background: #f3f3f3;
    padding: 1.5rem;
    text-align: center;
    border-radius: 10px;
    transition: 0.3s;
  }
  .investment-card:hover {
    background: #0f3e2e;
    color: #fff;
    transform: translateY(-5px);
  }

  /* Work Gallery Fix */
  .work-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1rem;
    margin-top: 2rem;
  }

  .work-gallery .project-card {
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.15);
  }

  .work-gallery img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s;
  }

  .work-gallery img:hover {
    transform: scale(1.05);
  }

  /* Testimonial Fix */
  .testimonial-card img.testimonial-img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 1rem;
  }

  .testimonial-card {
    padding: 2rem;
    text-align: center;
  }

  .stat-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
    margin-top: 2rem;
  }

  .stat-box {
    flex: 1 1 200px;
    text-align: center;
  }
</style>
