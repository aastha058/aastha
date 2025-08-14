@extends('header')

@section('title', 'Contact Us')

@section('content')

<!-- Animated Banner Section -->
<div class="banner-section m-2 position-relative overflow-hidden" style="background: linear-gradient(rgba(0, 0, 40, 0.8), rgba(0, 0, 40, 0.8)), url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);">
  <!-- Animated background elements -->
  <div class="position-absolute top-0 start-0 w-100 h-100">
    <div class="banner-circle-1 position-absolute rounded-circle" style="width: 300px; height: 300px; background: radial-gradient(circle, rgba(100, 150, 255, 0.3) 0%, rgba(0,0,0,0) 70%); top: -50px; left: -50px; animation: float 8s ease-in-out infinite;"></div>
    <div class="banner-circle-2 position-absolute rounded-circle" style="width: 200px; height: 200px; background: radial-gradient(circle, rgba(255, 100, 150, 0.3) 0%, rgba(0,0,0,0) 70%); bottom: -30px; right: 100px; animation: float 6s ease-in-out infinite reverse; animation-delay: 1s;"></div>
    <div class="banner-circle-3 position-absolute rounded-circle" style="width: 150px; height: 150px; background: radial-gradient(circle, rgba(100, 255, 150, 0.3) 0%, rgba(0,0,0,0) 70%); top: 40%; right: -30px; animation: float 7s ease-in-out infinite; animation-delay: 0.5s;"></div>
    
    <!-- Floating particles animation -->
    <div class="particles-container position-absolute w-100 h-100 overflow-hidden">
      <div class="particle" style="position: absolute; width: 5px; height: 5px; background-color: rgba(255,255,255,0.5); border-radius: 50%;" v-for="i in 30" :key="i" :style="{
        left: Math.random() * 100 + '%',
        top: Math.random() * 100 + '%',
        animation: `float ${3 + Math.random() * 7}s ease-in-out infinite`,
        animationDelay: Math.random() * 5 + 's',
        opacity: 0.3 + Math.random() * 0.7,
        transform: `scale(${0.5 + Math.random()})`
      }"></div>
    </div>
  </div>
  
  <div class="container position-relative py-5">
    <div class="row align-items-center">
      <!-- Text Left -->
      <div class="col-lg-6 banner-content py-5 text-white">
        <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown text-shadow">Let's Start a <span  style="color:#b06e12">Conversation</span></h1>
        <p class="lead mb-4 animate__animated animate__fadeIn animate__delay-1s" style="text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
          Our team is ready to assist you with startup registration, tax filing, and all your business needs.
        </p>

        <div class="d-flex align-items-center flex-wrap gap-3 animate__animated animate__fadeInUp animate__delay-1s">
          <div class="bg-white rounded-pill p-2 d-flex align-items-center shadow-sm hover-grow" style="transition: all 0.3s ease;">
            <i class="fas fa-phone-alt text-primary ms-2 me-2"></i>
            <span class="fw-bold text-dark">+91 9059377172</span>
          </div>
          <a href="#contact-form" class="btn rounded-pill px-4 py-2 shadow-sm hover-grow" style="transition: all 0.3s ease; background-color: rgb(212, 121, 17);">
            <i class="fas fa-paper-plane me-2"></i>Send Message
          </a>
          <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 shadow-sm hover-grow" style="transition: all 0.3s ease;">
            <i class="fas fa-calendar-alt me-2"></i>Book Appointment
          </a>
        </div>
        
        <!-- Trust badges -->
        <div class="d-flex align-items-center mt-4 animate__animated animate__fadeIn animate__delay-2s">
          <div class="me-3" style="width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-check text-primary"></i>
          </div>
          <small class="text-white-50" style="text-shadow: 0 1px 2px rgba(0,0,0,0.3);">Trusted by 500+ businesses</small>
        </div>
      </div>

      <!-- Image Right -->
      <div class="col-lg-6 text-center animate__animated animate__fadeIn animate__delay-1s">
       
      </div>
    </div>
  </div>
</div>

<style>
  @keyframes float {
    0% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
    100% { transform: translateY(0px) rotate(0deg); }
  }
  
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }
  
  .floating-animation {
    animation: float 6s ease-in-out infinite;
  }
  
  .hover-grow:hover {
    transform: translateY(-3px) scale(1.03);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2) !important;
  }
  
  .text-shadow {
    text-shadow: 0 4px 8px rgba(0,0,0,0.3);
  }
  
  .banner-section {
    transition: all 0.5s ease;
  }
  
  .banner-section:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.3) !important;
  }
</style>

<script>
  // For the particles animation (if using Vue.js)
  // If not using Vue, you can generate these with plain JavaScript
  document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.particles-container');
    for (let i = 0; i < 30; i++) {
      const particle = document.createElement('div');
      particle.className = 'particle';
      particle.style.left = Math.random() * 100 + '%';
      particle.style.top = Math.random() * 100 + '%';
      particle.style.animation = `float ${3 + Math.random() * 7}s ease-in-out infinite`;
      particle.style.animationDelay = Math.random() * 5 + 's';
      particle.style.opacity = 0.3 + Math.random() * 0.7;
      particle.style.transform = `scale(${0.5 + Math.random()})`;
      container.appendChild(particle);
    }
  });
</script>


  <div class="row g-2 contact-section m-2" >
    <!-- Contact Form -->
    <div class="col-lg-6"  id="contact-form">
      <div class="contact-box p-4 shadow-sm border-4 " >
        <h3 class="section-title fw-bold mb-4">
          <span class="title-decoration" style="color:#002a69">Send Us a Message</span>
        </h3>
        
        <div class="service-tabs mb-4">
          <div class="service-tab active">
            <i class="fas fa-lightbulb me-2"></i>
            <div>
              <h5>GST Filing Assistance</h5>
              <p>Expert help with all your GST compliance needs</p>
            </div>
          </div>
          <div class="service-tab">
            <i class="fas fa-building me-2"></i>
            <div>
              <h5>Company Registration</h5>
              <p>Complete business registration services</p>
            </div>
          </div>
          <div class="service-tab">
            <i class="fas fa-chart-line me-2"></i>
            <div>
              <h5>Startup Consulting</h5>
              <p>Guidance for your new business venture</p>
            </div>
          </div>
        </div>

        <form action="" method="POST" class="contact-form">
          @csrf
          <div class="form-inner">
            <div class="floating-label mb-4">
              <input type="text" name="name" id="name" class="form-control" placeholder=" " required>
              <label for="name">
                <i class="fas fa-user me-2"></i>Your Name*
              </label>
              <div class="focus-line"></div>
            </div>

            <div class="floating-label mb-4">
              <input type="email" name="email" id="email" class="form-control" placeholder=" " required>
              <label for="email">
                <i class="fas fa-envelope me-2"></i>Your Email*
              </label>
              <div class="focus-line"></div>
            </div>

            <div class="floating-label mb-4">
              <input type="tel" name="phone" id="phone" class="form-control" placeholder=" " required>
              <label for="phone">
                <i class="fas fa-phone-alt me-2"></i>Phone Number*
              </label>
              <div class="focus-line"></div>
            </div>

            <div class="floating-label mb-4">
              <select name="service" id="service" class="form-select" required>
                <option value="" selected disabled></option>
                <option>Startup Registration</option>
                <option>GST Filing</option>
                <option>Company Registration</option>
                <option>Tax Consultation</option>
                <option>Business Loans</option>
                <option>Other Service</option>
              </select>
              <label for="service">
                <i class="fas fa-concierge-bell me-2"></i>Select Service*
              </label>
              <div class="focus-line"></div>
            </div>

            <div class="floating-label mb-4">
              <textarea name="message" id="message" class="form-control" placeholder=" " rows="2"></textarea>
              <label for="message">
                <i class="fas fa-comment-dots me-2"></i>Your Message
              </label>
              <div class="focus-line"></div>
            </div>

            <button type="submit" class="btn submit-btn w-100 mt-3 py-3 fs-5" style="background-color: #124590;">
              <i class="fas fa-paper-plane me-2"></i>Send Message
              <span class="submit-arrow">→</span>
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- Contact Info -->
    <div class="col-lg-6 ">
      <div class="contact-info-box p-4 shadow-sm border-5 h-100">
        <h3 class="section-title fw-bold mb-4">
          <i class="fas fa-address-book me-2" style="color: #02398c"></i>
          <span class="title-decoration" style="color: #002a69">Our Contact Information</span>
        </h3>
        <p class="mb-4">
          <i class="fas fa-info-circle me-2"></i>Feel free to reach out to us through any of these channels. Our team typically responds within 1 business day.
        </p>

        <div class="contact-grid">
          <div class="contact-card shadow-sm border-3">
            <div class="contact-icon" style="background-color: #02398c;">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="contact-details">
              <h3 class="fw-bold">Office Address</h3>
              <p>
                <i class="fas fa-map-pin me-2" style="color:#01357e;"></i>
                Flat No. 4A, Vishwa Heritage Arcade, SR Nagar, Hyderabad-500038
              </p>
            </div>
          </div>

          <div class="contact-card shadow-sm border-3">
            <div class="contact-icon" style="background-color: #02398c;">
              <i class="fas fa-phone-alt" ></i>
            </div>
            <div class="contact-details">
              <h3 class="fw-bold">Phone Numbers</h3>
              <p><i class="fas fa-mobile-alt me-2" style="color: #02398c;"></i>+91 9059377172 (Primary)</p>
              <p><i class="fas fa-phone-volume me-2" style="color: #02398c;"></i>+91 9876543210 (Secondary)</p>
            </div>
          </div>

          <div class="contact-card shadow-sm border-3">
            <div class="contact-icon" style="background-color: #02398c;">
              <i class="fas fa-envelope" ></i>
            </div>
            <div class="contact-details ">
              <h3 class="fw-bold">Email Addresses</h3>
              <p><i class="fas fa-envelope-open-text me-2" style="color: #02398c;"></i>info@taxfilinghub.com</p>
              <p><i class="fas fa-mail-bulk me-2" style="color: #02398c;"></i>support@taxfilinghub.com</p>
            </div>
          </div>

          <div class="contact-card shadow-sm border-3">
            <div class="contact-icon" style="background-color: #02398c;">
              <i class="fas fa-clock" ></i>
            </div>
            <div class="contact-details">
              <h3 class="fw-bold">Working Hours</h3>
              <p><i class="fas fa-calendar-day me-2" style="color: #02398c;"></i>Mon-Fri: 9:00 AM - 6:00 PM</p>
              <p><i class="fas fa-calendar-week me-2" style="color: #02398c;"></i>Sat: 10:00 AM - 3:00 PM</p>
            </div>
          </div>
        </div>
<!-- Font Awesome CDN (Place this in your <head> section) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-y8fH7T4L5x5jI6DmyMsox6O2vL8KYaDnOjT+lqzvVbzUvmx7J7zv8V4My6Zmwh1Hvo9eUzbgU3Zx9KkxPCl2Zw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Social Media Section - Enhanced Version -->
<section class="social-media-section my-5" aria-label="Social media links">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <!-- Section Header -->
        <h2 class="section-title mb-4">
          <i class="fas fa-share-alt me-2 text-primary"></i>
          <span class="position-relative">
            Connect With Us
            <span class="title-underline"></span>
          </span>
        </h2>
        
        <!-- Social Icons -->
        <div class="social-icons d-flex justify-content-center flex-wrap gap-3">
          <!-- Facebook -->
          <a href="https://facebook.com/yourpage" 
             class="social-icon rounded-circle bg-primary text-white" 
             target="_blank" 
             rel="noopener noreferrer"
             aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          
          <!-- Instagram -->
          <a href="https://instagram.com/yourpage" 
             class="social-icon rounded-circle bg-instagram-gradient text-white" 
             target="_blank" 
             rel="noopener noreferrer"
             aria-label="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          
          <!-- Twitter -->
          <a href="https://twitter.com/yourpage" 
             class="social-icon rounded-circle bg-info text-white" 
             target="_blank" 
             rel="noopener noreferrer"
             aria-label="Twitter">
            <i class="fab fa-twitter"></i>
          </a>
          
          <!-- LinkedIn -->
          <a href="https://linkedin.com/company/yourpage" 
             class="social-icon rounded-circle bg-linkedin text-white" 
             target="_blank" 
             rel="noopener noreferrer"
             aria-label="LinkedIn">
            <i class="fab fa-linkedin-in"></i>
          </a>
          
          <!-- YouTube -->
          <a href="https://youtube.com/yourchannel" 
             class="social-icon rounded-circle bg-danger text-white" 
             target="_blank" 
             rel="noopener noreferrer"
             aria-label="YouTube">
            <i class="fab fa-youtube"></i>
          </a>
          
          <!-- TikTok (Additional Platform) -->
          <a href="https://tiktok.com/@yourpage" 
             class="social-icon rounded-circle bg-dark text-white" 
             target="_blank" 
             rel="noopener noreferrer"
             aria-label="TikTok">
            <i class="fab fa-tiktok"></i>
          </a>
        </div>
        
        
      </div>
    </div>
  </div>
</section>

<!-- Optional CSS for this component -->
<style>
  /* Social Media Section Styles */
  .social-media-section {
    padding: 2rem 0;
  }
  
  .section-title {
    font-weight: 700;
    position: relative;
    display: inline-block;
  }
  
  .title-underline {
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #3b5998, #e4405f, #55acee, #0077b5, #cd201f);
    border-radius: 3px;
  }
  
  .social-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    font-size: 1.1rem;
    transition: all 0.3s ease;
  }
  
  .social-icon:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  
  .bg-instagram-gradient {
    background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
  }
  
  .bg-linkedin {
    background-color: #0077b5;
  }
  
  @media (max-width: 576px) {
    .social-icons {
      gap: 1rem;
    }
  }
</style>

      </div>
    </div>
  </div>


<style>
  .contact-section {
    background: linear-gradient(135deg, #f9f9f9 0%, #ffffff 100%);
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    overflow: hidden;
  }
  
  .contact-box {
    background: white;
    border-radius: 12px;
    height: 100%;
  }
  
  .contact-info-box {
    background: rgba(255,255,255,0.9);
    border-radius: 12px;
    backdrop-filter: blur(5px);
  }
  
  .section-title {
    position: relative;
    color: #2c3e50;
    font-size: 1.8rem;
  }
  
  .title-decoration::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, rgba(184, 122, 6, 0.753), #d4a017);
    border-radius: 2px;
    transition: all 0.4s ease;
  }
  
  .section-title:hover .title-decoration::after {
    width: 120px;
    border: linear-gradient(90deg, #1058b6, rgba(9, 118, 140, 0.753));
  }
  
  /* Service Tabs */
  .service-tabs {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  
  .service-tab {
    padding: 15px;
    border-radius: 8px;
    background: rgba(184, 122, 6, 0.05);
    border-left: 4px solid rgba(184, 122, 6, 0.1);
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
  }
  
  .service-tab:hover, .service-tab.active {
    background: rgba(184, 122, 6, 0.1);
    border-left-color: rgba(184, 122, 6, 0.753);
    transform: translateX(5px);
  }
  
  .service-tab i {
    font-size: 1.5rem;
    color: rgba(184, 122, 6, 0.753);
    margin-right: 15px;
    transition: all 0.3s ease;
  }
  
  .service-tab:hover i, .service-tab.active i {
    transform: scale(1.1);
  }
  
  .service-tab h5 {
    font-size: 1.1rem;
    margin-bottom: 5px;
    color: #2c3e50;
  }
  
  .service-tab p {
    font-size: 0.9rem;
    color: #6c757d;
    margin-bottom: 0;
  }
  
  /* Form Styles */
  .contact-form {
    position: relative;
  }
  
  .floating-label {
    position: relative;
    margin-bottom: 1.5rem;
  }
  
  .floating-label label {
    position: absolute;
    top: 12px;
    left: 15px;
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    pointer-events: none;
    background: white;
    padding: 0 5px;
    color: #6c757d;
  }
  
  .floating-label input:focus + label,
  .floating-label input:not(:placeholder-shown) + label,
  .floating-label select:focus + label,
  .floating-label select:not([value=""]) + label,
  .floating-label textarea:focus + label,
  .floating-label textarea:not(:placeholder-shown) + label {
    top: -10px;
    left: 10px;
    font-size: 0.8rem;
    color: rgba(184, 122, 6, 0.753);
    transform: scale(1.05);
  }
  
  .focus-line {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, rgba(184, 122, 6, 0.753), #d4a017);
    transition: width 0.4s ease;
  }
  
  .floating-label:hover .focus-line {
    width: 100%;
  }
  
  /* Submit Button */
  .submit-btn {
    background: linear-gradient(135deg, rgba(8, 95, 152, 0.8), rgba(8, 70, 117, 0.9));
    color: white;
    border: none;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    letter-spacing: 1px;
    border-radius: 8px;
  }
  
  .submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(184, 122, 6, 0.2);
     background: linear-gradient(135deg, rgba(8, 95, 152, 0.8), rgba(8, 70, 117, 0.9));
    letter-spacing: 1.5px;
    color:white;
  }
  
  .submit-arrow {
    display: inline-block;
    transform: translateX(0);
    transition: all 0.3s ease;
    opacity: 0;
  }
  
  .submit-btn:hover .submit-arrow {
    transform: translateX(5px);
    opacity: 1;
  }
  
  /* Contact Grid */
  .contact-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 15px;
  }
  
  .contact-card {
    display: flex;
    align-items: flex-start;
    padding: 15px;
    border-radius: 10px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(7,3,4,0.05);
  }
  
  .contact-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    background: white;
    border: linear-gradient(90deg, #0b62ae, rgba(11, 88, 165, 0.753));
  }
  
  .contact-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    font-size: 1.2rem;
    color: white;
    background: rgba(184, 122, 6, 0.753);
    flex-shrink: 0;
    transition: all 0.3s ease;
  }
  
  .contact-card:hover .contact-icon {
    transform: rotate(15deg) scale(1.1);
  }
  
  .contact-details h5 {
    font-size: 1.1rem;
    margin-bottom: 8px;
    color: #2c3e50;
  }
  
  .contact-details p {
    font-size: 0.95rem;
    color: #6c757d;
    margin-bottom: 5px;
  }
  
  /* Social Icons */
  .social-icons {
    display: flex;
    gap: 12px;
  }
  
  .social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 18px;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    position: relative;
    overflow: hidden;
  }
  
  
</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Service tab switching
    const serviceTabs = document.querySelectorAll('.service-tab');
    
    serviceTabs.forEach(tab => {
      tab.addEventListener('click', function() {
        serviceTabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });
  });
</script>

<style>
  /* Base Styles */
  .contact-box {
    position: relative;
    overflow: hidden;
  }
  
  .section-title {
    position: relative;
    color: #2c3e50;
  }
  
  .title-decoration::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(90deg, rgba(184, 122, 6, 0.753), #d4a017);
    border-radius: 2px;
    transition: all 0.4s ease;
  }
  
  .section-title:hover .title-decoration::after {
    width: 120px;
    background: linear-gradient(90deg, #d4a017, rgba(184, 122, 6, 0.753));
  }
  
  /* Form Container Animation */
  .form-container {
    position: relative;
    overflow: hidden;
    transition: all 0.5s ease;
  }
  
  .form-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent 48%, rgba(184, 122, 6, 0.1) 50%, transparent 52%);
    background-size: 200% 200%;
    opacity: 0;
    transition: all 0.6s ease;
  }
  
  .form-container:hover::before {
    opacity: 1;
    background-position: 100% 100%;
  }
  
  .form-inner {
    transition: transform 0.4s ease;
  }
  
  .form-container:hover .form-inner {
    transform: translateY(-5px);
  }
  
  /* Service Highlight */
  .service-highlight {
    background: rgba(184, 122, 6, 0.05);
    border-left: 4px solid rgba(184, 122, 6, 0.753);
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  
  .service-highlight::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transform: translateX(-100%);
    transition: all 0.6s ease;
  }
  
  .service-highlight:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  }
  
  .service-highlight:hover::after {
    transform: translateX(100%);
  }
  
  /* Floating Label Enhancements */
  .floating-label {
    position: relative;
    transition: all 0.3s ease;
  }
  
  .floating-label:hover {
    transform: translateX(5px);
  }
  
  .floating-label label {
    position: absolute;
    top: 12px;
    left: 15px;
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    pointer-events: none;
    background: white;
    padding: 0 5px;
  }
  
  .floating-label input:focus + label,
  .floating-label input:not(:placeholder-shown) + label,
  .floating-label select:focus + label,
  .floating-label select:not([value=""]) + label,
  .floating-label textarea:focus + label,
  .floating-label textarea:not(:placeholder-shown) + label {
    top: -10px;
    left: 10px;
    font-size: 0.8rem;
    color: rgba(184, 122, 6, 0.753);
    transform: scale(1.05);
  }
  
  .focus-line {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, rgba(184, 122, 6, 0.753), #d4a017);
    transition: width 0.4s ease, opacity 0.3s ease;
    opacity: 0.7;
  }
  
  .floating-label:hover .focus-line {
    opacity: 1;
  }
  
  .input-animate:focus ~ .focus-line,
  .floating-label:hover input:not(:placeholder-shown) ~ .focus-line,
  .floating-label:hover select:not([value=""]) ~ .focus-line,
  .floating-label:hover textarea:not(:placeholder-shown) ~ .focus-line {
    width: 100%;
  }
  
  /* Submit Button */
  .submit-btn {
    background: linear-gradient(135deg, rgba(184, 122, 6, 0.8), rgba(212, 160, 23, 0.9));
    color: white;
    border: none;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    letter-spacing: 1px;
  }
  
  .submit-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: all 0.6s ease;
  }
  
  .submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(184, 122, 6, 0.2);
    letter-spacing: 1.5px;
  }
  
  .submit-btn:hover::before {
    left: 100%;
  }
  
  .submit-arrow {
    display: inline-block;
    transform: translateX(0);
    transition: all 0.3s ease;
    opacity: 0;
  }
  
  .submit-btn:hover .submit-arrow {
    transform: translateX(5px);
    opacity: 1;
  }
  
  /* Contact Info Section */
  .contact-info-container {
    perspective: 1000px;
  }
  
  .contact-info-inner {
    transition: all 0.5s ease;
    transform-style: preserve-3d;
  }
  
  .contact-info-container:hover .contact-info-inner {
    transform: rotateY(2deg) rotateX(1deg);
    box-shadow: 0 20px 30px rgba(0,0,0,0.1);
  }
  
  /* Info Cards */
  .info-card {
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    position: relative;
    overflow: hidden;
  }
  
  .info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 0;
    background: linear-gradient(to bottom, rgba(184, 122, 6, 0.753), #d4a017);
    transition: all 0.4s ease;
  }
  
  .info-card:hover {
    transform: translateY(-5px) scale(1.01);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
  }
  
  .info-card:hover::before {
    height: 100%;
  }
  
  .contact-icon {
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  }
  
  .info-card:hover .contact-icon {
    transform: scale(1.1) rotate(5deg);
  }
  
  /* Social Icons */
  .social-icons {
    display: flex;
    gap: 12px;
  }
  
  .social-icons a {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 18px;
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    position: relative;
    overflow: hidden;
  }
  
  .social-icons a::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at center, rgba(255,255,255,0.8) 0%, rgba(255,255,255,0) 70%);
    transform: scale(0);
    opacity: 0;
    transition: all 0.4s ease;
  }
  
  .social-icons a:hover {
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  }
  
  .social-icons a:hover::after {
    transform: scale(2);
    opacity: 0.4;
  }
  
  /* Background colors kept as original */
  .bg-facebook { background: #3b5998; }
  .bg-instagram { background: #e4405f; }
  .bg-twitter { background: #1da1f2; }
  .bg-linkedin { background: #0077b5; }
  .bg-youtube { background: #cd201f; }
  
  /* Entrance Animations */
  @keyframes fadeInLeft {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes fadeInRight {
    from {
      opacity: 0;
      transform: translateX(30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  #contact-form {
    animation: fadeInLeft 0.8s ease-out both;
  }
  
  .contact-info-container {
    animation: fadeInRight 0.8s ease-out both;
    animation-delay: 0.2s;
  }
</style>

<!-- Add Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- Add Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

<script>
  // Add intersection observer for scroll animations
  document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.animate__animated');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          const animation = entry.target.getAttribute('data-animate');
          entry.target.classList.add(animation);
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });
    
    animateElements.forEach(element => {
      element.style.opacity = 0;
      observer.observe(element);
    });
    
    // Add ripple effect to submit button
    const submitBtn = document.querySelector('.submit-btn');
    if (submitBtn) {
      submitBtn.addEventListener('click', function(e) {
        const x = e.clientX - e.target.getBoundingClientRect().left;
        const y = e.clientY - e.target.getBoundingClientRect().top;
        
        const ripple = document.createElement('span');
        ripple.classList.add('ripple-effect');
        ripple.style.left = ${x}px;
        ripple.style.top = ${y}px;
        
        this.appendChild(ripple);
        
        setTimeout(() => {
          ripple.remove();
        }, 1000);
      });
    }
  });
</script>
<!-- FAQ Section -->
<div class="faq-section position-relative overflow-hidden py-6">
  <!-- Background Image with Overlay -->
  <div class="faq-background">
    <div class="background-image" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')"></div>
    <div class="background-overlay"></div>
  </div>

  <div class="container position-relative z-2">
    <!-- Section Header -->
    <div class="text-center mb-6">
      <h2 class="faq-title display-5 fw-bold mb-3 animate__animated" data-animation="fadeInUp">
        Frequently Asked Questions
      </h2>
      <p class="faq-subtitle fw-bold lead  animate__animated" data-animation="fadeInUp" data-delay="0.2s" style="color:#b06e12;">
        Find quick answers to common questions about our services
      </p>
    </div>

    <!-- FAQ Cards -->
    <div class="row g-4 mt-4">
      <!-- Card 1 -->
      <div class="col-md-6 col-lg-3 animate__animated" data-animation="fadeInUp" data-delay="0.3s">
        <div class="faq-card">
          <div class="card-image">
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                 class="img-fluid" 
                 alt="Documents for company registration">
            <div class="image-overlay"></div>
          </div>
          <div class="card-body">
            <h5 class="card-title"  style="color:#b06e12;">What documents do I need for company registration?</h5>
            <div class="card-content"  style="color:#b06e12;">
              <p>You'll need identity proof, address proof, passport photos, and business documents. The exact requirements depend on your business type.</p>
              <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-3 animate__animated" data-animation="fadeInUp" data-delay="0.4s">
        <div class="faq-card">
          <div class="card-image">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                 class="img-fluid" 
                 alt="GST registration timeline">
            <div class="image-overlay"></div>
          </div>
          <div class="card-body">
            <h5 class="card-title"  style="color:#b06e12;">How long does GST registration take?</h5>
            <div class="card-content"  style="color:#b06e12;">
              <p>Typically 3-7 working days after document submission. We can expedite the process with our priority service.</p>
              <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-3 animate__animated" data-animation="fadeInUp" data-delay="0.5s">
        <div class="faq-card">
          <div class="card-image">
            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
                 class="img-fluid" 
                 alt="Compliance support">
            <div class="image-overlay"></div>
          </div>
          <div class="card-body">
            <h5 class="card-title"  style="color:#b06e12;">Do you offer ongoing compliance support?</h5>
            <div class="card-content" style="color:#b06e12;">
              <p>Yes! We provide monthly, quarterly, or annual compliance packages tailored to your business needs.</p>
              <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-lg-3 animate__animated" data-animation="fadeInUp" data-delay="0.6s">
        <div class="faq-card">
          <div class="card-image">
            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" 
                 class="img-fluid" 
                 alt="Working hours">
            <div class="image-overlay"></div>
          </div>
          <div class="card-body">
            <h5 class="card-title"  style="color:#b06e12;">What are your working hours?</h5>
            <div class="card-content"  style="color:#b06e12;">
              <p>Our support team is available Mon-Sat from 9AM to 6PM. Emergency services available 24/7 for premium clients.</p>
              <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Base Styles */
  .faq-section {
    padding: 5rem 0;
    color: #333;
  }

  /* Background Styles */
  .faq-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
  }

  .background-image {
    position: absolute;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    filter: brightness(0.4);
    animation: zoomInOut 20s infinite alternate;
  }

  .background-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.85);
  }

  /* Typography */
  .faq-title {
    color: #1e3a8a;
    position: relative;
    display: inline-block;
  }

  .faq-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--accent-orange);
    border-radius: 2px;
  }

  .faq-subtitle {
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
  }

  /* FAQ Cards */
  .faq-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .faq-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  }

  .card-image {
    position: relative;
    overflow: hidden;
    height: 180px;
  }

  .card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .faq-card:hover .card-image img {
    transform: scale(1.05);
  }

  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(30, 58, 138, 0.7), transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .faq-card:hover .image-overlay {
    opacity: 1;
  }

  .card-body {
    padding: 1.5rem;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .card-title {
    font-weight: 700;
    margin-bottom: 1rem;
    color: #1e3a8a;
    transition: color 0.3s ease;
  }

  .faq-card:hover .card-title {
    color: var(--accent-orange);
  }

  .card-content {
    flex: 1;
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: all 0.4s ease;
  }

  .faq-card:hover .card-content {
    opacity: 1;
    max-height: 200px;
    margin-bottom: 1rem;
  }

  .read-more {
    color: var(--accent-orange);
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
  }

  .read-more i {
    margin-left: 5px;
    transition: transform 0.3s ease;
  }

  .read-more:hover {
    color: #1e3a8a;
  }

  .read-more:hover i {
    transform: translateX(5px);
  }

  /* View All Button */
  .btn-view-all {
    background: var(--accent-orange);
    color: white;
    border: none;
    border-radius: 8px;
    padding: 0.75rem 2rem;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(251, 146, 60, 0.3);
  }

  .btn-view-all:hover {
    background: #1e3a8a;
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(30, 58, 138, 0.3);
  }

  .btn-view-all i {
    transition: transform 0.3s ease;
  }

  .btn-view-all:hover i {
    transform: translateY(5px);
  }

  /* Animations */
  @keyframes zoomInOut {
    0% { transform: scale(1); }
    100% { transform: scale(1.05); }
  }

  /* Responsive Adjustments */
  @media (max-width: 992px) {
    .faq-section {
      padding: 3rem 0;
    }

    .faq-title {
      font-size: 2.2rem;
    }

    .card-image {
      height: 150px;
    }
  }

  @media (max-width: 768px) {
    .faq-card {
      max-width: 350px;
      margin-left: auto;
      margin-right: auto;
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize animations when elements come into view
    const animateElements = document.querySelectorAll('[data-animation]');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const animation = entry.target.getAttribute('data-animation');
          const delay = entry.target.getAttribute('data-delay') || '0s';
          
          entry.target.style.animationDelay = delay;
          entry.target.classList.add('animate__' + animation);
          
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    
    animateElements.forEach(el => observer.observe(el));

    // Card hover effect for touch devices
    const faqCards = document.querySelectorAll('.faq-card');
    faqCards.forEach(card => {
      card.addEventListener('click', function() {
        if (window.innerWidth < 992) {
          this.classList.toggle('active');
        }
      });
    });
  });
</script>


<!-- Include Animate.css for additional animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<!-- Include Animate.css for additional animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4 animate-fadeInUp delay-1">
        <h5 class="mb-3">Tax Filing Hub</h5>
        <p>We provide affordable tax registration, GST compliance, and business consultation services across India.</p>
        <div class="social-icons mt-3">
          <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="col-md-4 mb-4 animate-fadeInUp delay-2">
        <h5 class="mb-3">Services</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2" style="color: var(--light-orange)"></i>GST Registration</a></li>
          <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2" style="color: var(--light-orange)"></i>Company Formation</a></li>
          <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2" style="color: var(--light-orange)"></i>TDS Return Filing</a></li>
          <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2" style="color: var(--light-orange)"></i>Startup Support</a></li>
          <li class="mb-2"><a href="#"><i class="fas fa-chevron-right me-2" style="color: var(--light-orange)"></i>Tax Consultation</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-4 animate-fadeInUp delay-3">
        <h5 class="mb-3">Newsletter</h5>
        <p>Subscribe to get updates on tax regulations and business tips.</p>
        <form class="d-flex gap-2 mt-3">
          <input type="email" class="form-control" placeholder="Your Email" />
          <button class="btn" style="background: var(--accent-orange); color: white">Subscribe</button>
        </form>
        <div class="mt-3">
          <i class="fas fa-map-marker-alt me-2" style="color: var(--light-orange)"></i>
          <small>7th Floor, KL Mehra Heritage Arcade, Hyderabad</small>
        </div>
      </div>
    </div>
    <div class="text-center mt-4 pt-3 animate-fadeInUp delay-4" style="border-top: 1px solid rgba(255,255,255,0.1)">
      <small>© 2025 Tax Filing Hub. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></small>
    </div>
  </div>
</footer>
<style>
  footer {
    background-color: #002a69;
    color: white;
    padding: 3rem 1rem;
    position: relative;
  }
  
  footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, var(--accent-orange), var(--light-orange));
  }
  
  footer a {
    color: #ddd;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  footer a:hover {
    color: white;
    padding-left: 5px;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.animate-fadeInUp');   
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 });
    animateElements.forEach(el => observer.observe(el));
    // Add hover effect to FAQ images
    const faqImages = document.querySelectorAll('.faq-image');
    faqImages.forEach(img => {
      img.addEventListener('mouseenter', function() {
        this.querySelector('img').style.transform = 'scale(1.05)';
      });
      img.addEventListener('mouseleave', function() {
        this.querySelector('img').style.transform = 'scale(1)';
      });
    });
  });
</script>
<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919059377172" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
  <i class="fab fa-whatsapp fa-lg"></i>
</a>
<!-- Back to Top Button -->
<a href="#" class="btn btn-primary rounded-circle back-to-top" style="position: fixed; bottom: 30px; right: 30px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
  <i class="fas fa-arrow-up"></i>
</a>
<script>
  // Back to top button
  document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.querySelector('.back-to-top');
    
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 300) {
        backToTopButton.style.opacity = '1';
        backToTopButton.style.visibility = 'visible';
      } else {
        backToTopButton.style.opacity = '0';
        backToTopButton.style.visibility = 'hidden';
      }
    });
    
    backToTopButton.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({top: 0, behavior: 'smooth'});
    });
  });
</script>
@endsection