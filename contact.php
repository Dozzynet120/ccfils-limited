<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Contact Hero -->
<section class="section contact-hero" data-aos="fade-up">
  <div class="container text-center">
    <h1 class="section-title">Get in Touch</h1>
    <p>We’d love to hear from you. Start your property journey with CCFILS Construction Nig. Limited today.</p>
  </div>
</section>

<!-- Contact Info + Form -->
<section class="section contact-details" data-aos="fade-up">
  <div class="container contact-grid">
    
    <!-- Contact Info -->
    <div class="contact-info">
      <h3><i class="fas fa-map-marker-alt"></i> Office Address</h3>
      <p>Address: Block B, House 20B, Abraham Adesanya Estate, Ajah, Lagos, Nigeria.</p>

      <h3><i class="fas fa-phone-alt"></i> Phone</h3>
      <p>+234 9037107683<br>+234 7069625432</p>

      <h3><i class="fas fa-envelope"></i> Email</h3>
      <p>Ccfilsrealities@gmail.com</p>

      <h3><i class="fas fa-share-alt"></i> Follow Us</h3>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
      <form id="contactForm" action="send-message.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>
  </div>
</section>

<!-- Confirmation Popup -->
<div id="popup" class="popup">
  <div class="popup-content">
    <h2>Thank you!</h2>
    <p>Your message has been sent successfully.</p>
    <button onclick="closePopup()">Close</button>
  </div>
</div>

<!-- Google Map -->
<section class="section map-section" data-aos="fade-up">
  <div class="container">
    <h2 class="section-title text-center">Our Location</h2>
    <div class="map-container">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15853.748313676772!2d3.555925298839399!3d6.480125169730396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf6c4ad7c48b7%3A0xd64ce5b869e0c413!2sAbraham%20Adesanya%20Estate%2C%20Ajah!5e0!3m2!1sen!2sng!4v1722477163651"
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
  function closePopup() {
    document.getElementById('popup').style.display = 'none';
  }

  // Show popup if redirected with success
  window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status') === 'sent') {
      document.getElementById('popup').style.display = 'flex';
    }
  };
</script>

<style>
  .popup {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.7);
    align-items: center; justify-content: center;
  }

  .popup-content {
    background: #fff;
    padding: 30px;
    text-align: center;
    border-radius: 10px;
    max-width: 400px;
    width: 90%;
  }

  .popup-content button {
    margin-top: 15px;
    padding: 10px 20px;
    background: darkgreen;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
