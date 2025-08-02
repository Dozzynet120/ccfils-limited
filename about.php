<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Light/Dark Toggle -->
<style>
  :root {
    --bg-color: #ffffff;
    --text-color: #111;
    --card-bg: #f7f7f7;
  }

  [data-theme='dark'] {
    --bg-color: #111;
    --text-color: #f7f7f7;
    --card-bg: #222;
  }

  body {
    background: var(--bg-color);
    color: var(--text-color);
    transition: background 0.3s, color 0.3s;
  }

  .card, .property-card {
    background: var(--card-bg);
    color: var(--text-color);
    transition: background 0.3s;
  }

  .theme-toggle {
    position: fixed;
    top: 10px;
    right: 10px;
    z-index: 999;
    cursor: pointer;
    background: var(--card-bg);
    padding: 10px;
    border-radius: 30px;
  }

  .section {
    padding: 60px 20px;
  }

  .section.dark-green {
    background: #0b3d2e;
    color: #ffffff;
  }

  .container {
    max-width: 1100px;
    margin: auto;
  }

  .card-grid {
    display: grid;
    gap: 1.5rem;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    margin-top: 30px;
  }

  .card {
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 0 20px rgba(0,0,0,0.05);
  }

  video.banner-video {
    width: 100%;
    height: auto;
    object-fit: cover;
    max-height: 400px;
  }

  .hero-fallback {
    background: url('assets/images/flyer1.jpg') center/cover no-repeat;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
  }

  .hero-fallback h1 {
    font-size: 2.5rem;
    background: rgba(0,0,0,0.5);
    padding: 10px 20px;
    border-radius: 8px;
  }

  .property-grid {
    display: grid;
    gap: 1.5rem;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    margin-top: 30px;
  }

  .property-card {
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0,0,0,0.08);
    transition: transform 0.3s;
  }

  .property-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
  }

  .property-card:hover {
    transform: translateY(-5px);
  }

  .property-info {
    padding: 15px;
  }

  @media screen and (max-width: 768px) {
    .hero-fallback h1 {
      font-size: 1.8rem;
    }
  }
</style>

<div class="theme-toggle" onclick="toggleTheme()">🌓</div>

<!-- Video Banner with Fallback -->
<video class="banner-video" autoplay muted loop playsinline poster="assets/images/flyer1.jpg">
  <source src="assets/images/LAG.mp4" type="video/mp4">
  <div class="hero-fallback">
    <h1>About CCFILS Construction Nig. Limited</h1>
  </div>
</video>

<!-- About Overview -->
<section class="section" data-aos="fade-up">
  <div class="container">
    <h1>Who We Are</h1>
    <p>Welcome to CCFILS Construction Ltd, where we transform visions into reality with precision, professionalism, and unparalleled expertise. Built on trust, quality, and integrity, we deliver projects across all sectors with excellence.</p>
  </div>
</section>

<!-- Mission & Vision -->
<section class="section cream" data-aos="fade-up">
  <div class="container">
    <h2>Our Vision & Mission</h2>
    <div class="card-grid">
      <div class="card">
        <h3>Our Vision</h3>
        <p>To lead Nigeria’s construction industry with innovation, quality, and excellence.</p>
      </div>
      <div class="card">
        <h3>Our Mission</h3>
        <p>We build sustainable, aesthetic spaces that improve lives and the environment.</p>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="section cream" data-aos="fade-up">
  <div class="container">
    <h2>Why Choose Us</h2>
    <div class="card-grid">
      <div class="card"><h4>Trusted Expertise</h4><p>Years of proven excellence in construction services.</p></div>
      <div class="card"><h4>On-Time Delivery</h4><p>Timely project execution with professional management.</p></div>
      <div class="card"><h4>Customer-Centric</h4><p>Your satisfaction is at the core of what we do.</p></div>
      <div class="card"><h4>Innovative Solutions</h4><p>Smart, sustainable construction technologies.</p></div>
    </div>
  </div>
</section>

<!-- Our Services -->
<section class="section" style="background: linear-gradient(to left, #f0f0f0, #dadada);" data-aos="fade-up">
  <div class="container">
    <h2>Our Services</h2>
    <div class="card-grid">
      <div class="card"><h4>Construction</h4><p>Bringing your ideas to life using top-tier materials and techniques.</p></div>
      <div class="card"><h4>Estimation</h4><p>Accurate projections for seamless project planning and execution.</p></div>
      <div class="card"><h4>Maintenance</h4><p>Reliable services that extend the life and value of your assets.</p></div>
    </div>
  </div>
</section>

<!-- Our Projects -->
<section class="section cream " data-aos="fade-up">
  <div class="container">
    <h2>Our Projects</h2>
    <div class="property-grid">
      <div class="property-card">
        <img src="assets/images/p4.jpg" alt="Project 1">
      </div>
      <div class="property-card">
        <img src="assets/images/p5.jpg" alt="Project 2">
      </div>
      <div class="property-card">
        <img src="assets/images/p6.jpg" alt="Project 3">
      </div>
      <div class="property-card">
        <img src="assets/images/p7.jpg" alt="Project 4">
      </div>
      <div class="property-card">
        <img src="assets/images/p9.jpg" alt="Project 4">
      </div>
      <div class="property-card">
        <img src="assets/images/w4.jpg" alt="Project 4">
      </div>
      <div class="property-card">
        <img src="assets/images/w3.jpg" alt="Project 4">
      </div>
      <div class="property-card">
        <img src="assets/images/w2.jpg" alt="Project 4">
      </div>
      <div class="property-card">
        <img src="assets/images/w1.jpg" alt="Project 4">
      </div>
       <div class="property-card">
        <img src="assets/images/d10.jpg" alt="Project 4">
      </div>
       <div class="property-card">
        <img src="assets/images/d6.jpg" alt="Project 4">
      </div>
       <div class="property-card">
        <img src="assets/images/dd2.jpg" alt="Project 4">
      </div>
    </div>
  </div>
</section>

<!-- JS Theme Toggle -->
<script>
  function toggleTheme() {
    const current = document.documentElement.getAttribute('data-theme');
    document.documentElement.setAttribute('data-theme', current === 'dark' ? 'light' : 'dark');
  }
</script>

<?php include 'includes/footer.php'; ?>
