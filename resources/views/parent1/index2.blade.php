<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Copyright Registration | TaxFilingHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #1a1a2e;
      --accent-color: #ff6b6b;
      --secondary-accent: #4ecdc4;
      --light-bg: #f8f9fa;
      --text-color: #2d3436;
      --text-light: #636e72;
      --gradient-start: #1a1a2e;
      --gradient-end: #16213e;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      color: var(--text-color);
      overflow-x: hidden;
      line-height: 1.6;
    }

    .hero-section {
      background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
      padding: 100px 0;
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
      clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
      margin-bottom: 50px;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: linear-gradient(90deg, var(--accent-color), var(--secondary-accent));
    }

    .hero-title {
      font-weight: 700;
      font-size: 3.2rem;
      margin-bottom: 20px;
      text-shadow: 0 2px 10px rgba(0,0,0,0.3);
      letter-spacing: -0.5px;
    }

    .hero-subtitle {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto 30px;
      opacity: 0.9;
    }

    .price-tag {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--accent-color);
      margin: 25px 0;
      text-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: relative;
      display: inline-block;
    }

    .price-tag::before, .price-tag::after {
      content: '✦';
      position: absolute;
      color: var(--secondary-accent);
      font-size: 1.2rem;
    }

    .price-tag::before {
      left: -30px;
      top: 10px;
    }

    .price-tag::after {
      right: -30px;
      top: 10px;
    }

    .btn-custom {
      background: linear-gradient(135deg, var(--accent-color) 0%, #ff8e8e 100%);
      color: white;
      font-weight: 600;
      padding: 16px 45px;
      border: none;
      border-radius: 50px;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      box-shadow: 0 10px 20px rgba(255, 107, 107, 0.3);
      position: relative;
      overflow: hidden;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      font-size: 0.9rem;
    }

    .btn-custom:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 15px 30px rgba(255, 107, 107, 0.4);
      color: white;
    }

    .btn-custom:active {
      transform: translateY(0) scale(0.98);
    }

    .section-title {
      font-weight: 700;
      font-size: 2rem;
      margin-top: 60px;
      margin-bottom: 30px;
      color: var(--primary-color);
      position: relative;
      display: inline-block;
      padding-bottom: 10px;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 70px;
      height: 5px;
      background: linear-gradient(90deg, var(--accent-color), var(--secondary-accent));
      border-radius: 5px;
      animation: underlineGrow 0.8s ease-out forwards;
    }

    @keyframes underlineGrow {
      from { width: 0; opacity: 0; }
      to { width: 70px; opacity: 1; }
    }

    .info-card {
      background: white;
      padding: 35px;
      border-radius: 15px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.08);
      margin-bottom: 40px;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      border-top: 5px solid var(--accent-color);
      position: relative;
      overflow: hidden;
    }

    .info-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, var(--accent-color), var(--secondary-accent));
    }

    .info-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    }

    .feature-list {
      list-style: none;
      padding: 0;
    }

    .feature-list li {
      margin-bottom: 18px;
      position: relative;
      padding-left: 35px;
      transition: all 0.3s ease;
    }

    .feature-list li:hover {
      transform: translateX(10px);
      color: var(--primary-color);
    }

    .feature-list li::before {
      content: '';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 22px;
      height: 22px;
      background-color: var(--secondary-accent);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 0.8rem;
      font-weight: bold;
    }

    .nav-box {
      background: linear-gradient(135deg, var(--primary-color) 0%, #16213e 100%);
      color: white;
      padding: 20px;
      text-align: center;
      font-weight: 600;
      border-radius: 12px;
      margin-bottom: 25px;
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      position: relative;
      overflow: hidden;
      border-left: 5px solid var(--accent-color);
    }

    .nav-box:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .nav-box.active {
      background: linear-gradient(135deg, var(--accent-color) 0%, #ff8e8e 100%);
      transform: translateY(-5px);
    }

    .footer {
      background: linear-gradient(135deg, var(--primary-color) 0%, #16213e 100%);
      color: white;
      padding: 100px 0 0;
      position: relative;
      clip-path: polygon(0 10%, 100% 0, 100% 100%, 0 100%);
      margin-top: 80px;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: linear-gradient(90deg, var(--accent-color), var(--secondary-accent));
    }

    .footer h5 {
      font-weight: 700;
      margin-bottom: 30px;
      position: relative;
      display: inline-block;
      font-size: 1.4rem;
    }

    .footer h5::after {
      content: '';
      position: absolute;
      bottom: -12px;
      left: 0;
      width: 50px;
      height: 4px;
      background: var(--accent-color);
      border-radius: 2px;
    }

    .footer ul {
      list-style: none;
      padding: 0;
    }

    .footer ul li {
      margin-bottom: 15px;
      transition: all 0.3s ease;
      position: relative;
      padding-left: 0;
    }

    .footer ul li::before {
      content: '→';
      position: absolute;
      left: -20px;
      color: var(--secondary-accent);
      opacity: 0;
      transition: all 0.3s ease;
    }

    .footer ul li:hover {
      color: var(--accent-color);
      transform: translateX(10px);
    }

    .footer ul li:hover::before {
      opacity: 1;
      left: -15px;
    }

    .footer a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer a:hover {
      color: var(--accent-color);
    }

    .footer-bottom {
      text-align: center;
      padding: 30px;
      font-size: 14px;
      background: rgba(0,0,0,0.2);
      margin-top: 80px;
      position: relative;
    }

    .footer-bottom::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 1px;
      background: rgba(255,255,255,0.1);
    }

    .social-icons i {
      font-size: 1.2rem;
      margin-right: 15px;
      color: white;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      background: rgba(255,255,255,0.1);
      width: 45px;
      height: 45px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .social-icons i:hover {
      color: white;
      transform: translateY(-5px) scale(1.1);
      background: var(--accent-color);
      box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
    }

    .pulse {
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(255, 107, 107, 0.4); }
      70% { box-shadow: 0 0 0 20px rgba(255, 107, 107, 0); }
      100% { box-shadow: 0 0 0 0 rgba(255, 107, 107, 0); }
    }

    .sticky-top {
      position: sticky;
      top: 100px;
      z-index: 1020;
    }

    .process-time {
      display: inline-flex;
      align-items: center;
      background: rgba(255,255,255,0.1);
      padding: 8px 20px;
      border-radius: 50px;
      margin-top: 20px;
    }

    .process-time i {
      margin-right: 10px;
      color: var(--secondary-accent);
    }

    @media (max-width: 992px) {
      .hero-section {
        clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
        padding: 80px 0;
      }
      
      .hero-title {
        font-size: 2.5rem;
      }
      
      .price-tag {
        font-size: 2rem;
      }
      
      .section-title {
        font-size: 1.8rem;
        margin-top: 40px;
      }
      
      .info-card {
        padding: 25px;
      }
    }

    @media (max-width: 768px) {
      .hero-section {
        clip-path: polygon(0 0, 100% 0, 100% 97%, 0 100%);
        padding: 60px 0;
      }
      
      .hero-title {
        font-size: 2rem;
      }
      
      .price-tag {
        font-size: 1.8rem;
      }
      
      .section-title {
        font-size: 1.6rem;
      }
      
      .btn-custom {
        padding: 14px 35px;
      }
      
      .footer {
        clip-path: polygon(0 3%, 100% 0, 100% 100%, 0 100%);
      }
    }

    /* Floating animation */
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
      100% { transform: translateY(0px); }
    }

    .floating {
      animation: float 6s ease-in-out infinite;
    }

    /* Glow effect */
    .glow {
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    /* Decorative elements */
    .decorative-circle {
      position: absolute;
      border-radius: 50%;
      opacity: 0.1;
      z-index: 0;
    }

    .circle-1 {
      width: 300px;
      height: 300px;
      background: var(--accent-color);
      top: -150px;
      right: -150px;
    }

    .circle-2 {
      width: 200px;
      height: 200px;
      background: var(--secondary-accent);
      bottom: -100px;
      left: -100px;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero-section animate__animated animate__fadeIn">
    <div class="decorative-circle circle-1"></div>
    <div class="decorative-circle circle-2"></div>
    <div class="container position-relative">
      <h1 class="hero-title animate__animated animate__fadeInDown">COPYRIGHT REGISTRATION</h1>
      <p class="hero-subtitle animate__animated animate__fadeInDown animate__delay-1s">Protect your creative work with our hassle-free copyright registration service</p>
      <div class="price-tag animate__animated animate__fadeInDown animate__delay-1s">Only ₹5,999/-</div>
      <button class="btn btn-custom mb-4 pulse animate__animated animate__fadeInDown animate__delay-2s">GET STARTED NOW</button>
      <div class="process-time animate__animated animate__fadeInDown animate__delay-2s">
        <i class="bi bi-lightning-charge-fill"></i> Process completed in 3 days
      </div>
    </div>
  </section>

  <div class="container my-5">
    <div class="row">
      <!-- Left Sidebar -->
      <div class="col-lg-4">
        <div class="sticky-top">
          <div class="nav-box animate__animated" onclick="scrollToSection('time-cost')">TIME AND COST</div>
          <div class="nav-box animate__animated" onclick="scrollToSection('about-epf')">ABOUT EPF & ESI</div>
          <div class="nav-box animate__animated" onclick="scrollToSection('entities-covered')">ENTITIES COVERED</div>
          <div class="nav-box animate__animated" onclick="scrollToSection('documents')">DOCUMENTS REQUIRED</div>
        </div>
      </div>

      <!-- Right Content Section -->
      <div class="col-lg-8">
        <!-- TIME AND COST -->
        <section id="time-cost" class="animate__animated">
          <h2 class="section-title">TIME AND COST</h2>
          <div class="info-card">
            <p>Once the full document is received, it will take 3 days to obtain the certificate.</p>
            <ul class="feature-list">
              <li>Professional Fee-ESI (Inclusive of Taxes): ₹5,999/-</li>
              <li>Professional Fee-COMBO (Inclusive of Taxes): ₹9,999/-</li>
            </ul>
          </div>
        </section>

        <!-- ABOUT EPF & ESI -->
        <section id="about-epf" class="animate__animated">
          <h2 class="section-title">ABOUT EPF & ESI</h2>
          <div class="info-card">
            <p><strong>EPF:</strong> The Employees' Provident Fund (EPF) is a savings scheme introduced under the Employees' Provident Fund and Miscellaneous Act, 1952.</p>
            <ul class="feature-list">
              <li>Any organisation or factory with at least 20 employees must register under the EPF Scheme</li>
              <li>Applicable to employees earning less than ₹15,000/month</li>
            </ul>

            <p class="mt-4"><strong>ESI:</strong> Managed by the Employee State Insurance Corporation.</p>
            <ul class="feature-list">
              <li>Provides medical and maternity benefits</li>
              <li>Mandatory for employees earning up to ₹21,000/month (establishments with 10+ employees)</li>
            </ul>
          </div>
        </section>

        <!-- ENTITIES COVERED -->
        <section id="entities-covered" class="animate__animated">
          <h2 class="section-title">ENTITIES COVERED UNDER ESIC</h2>
          <div class="info-card">
            <ul class="feature-list">
              <li>Shops</li>
              <li>Restaurants or hotels (sales only)</li>
              <li>Cinemas</li>
              <li>Road motor transport companies</li>
              <li>Private educational institutions</li>
            </ul>
          </div>
        </section>

        <!-- DOCUMENTS REQUIRED -->
        <section id="documents" class="animate__animated">
          <h2 class="section-title">DOCUMENTS REQUIRED</h2>
          <div class="info-card">
            <ul class="feature-list">
              <li>PAN Card</li>
              <li>AADHAAR Card</li>
              <li>Cancelled Cheque</li>
              <li>Name of Business</li>
              <li>Income Tax Return copy</li>
              <li>MOA / AOA (if applicable)</li>
              <li>Digital Signature Certificate (DSC)</li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5">
          <h5>TaxFilingHub</h5>
          <p class="mt-4">Your trusted partner for all tax and compliance related services in India.</p>
          <div class="social-icons mt-4">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <h5>Our Services</h5>
          <ul class="mt-4">
            <li><a href="#">Copyright Registration</a></li>
            <li><a href="#">Trademark Registration</a></li>
            <li><a href="#">GST Registration</a></li>
            <li><a href="#">Company Registration</a></li>
          </ul>
        </div>
        <div class="col-lg-4 mb-5">
          <h5>Contact Us</h5>
          <ul class="mt-4">
            <li><i class="bi bi-envelope me-2"></i> info@taxfilinghub.com</li>
            <li><i class="bi bi-phone me-2"></i> +91 9876543210</li>
            <li><i class="bi bi-geo-alt me-2"></i> 123 Business Street, Mumbai</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="mb-2">© Copyright TaxFilingHub. All Rights Reserved</p>
        <p class="mb-0">Powered by TechPeer Technologies</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Smooth scroll function for navigation boxes
    function scrollToSection(sectionId) {
      document.getElementById(sectionId).scrollIntoView({
        behavior: 'smooth'
      });
      
      // Add active class to clicked nav box
      const navBoxes = document.querySelectorAll('.nav-box');
      navBoxes.forEach(box => {
        box.classList.remove('active');
        if (box.getAttribute('onclick').includes(sectionId)) {
          box.classList.add('active');
        }
      });
    }

    // Add active class to nav box when section is in view
    window.addEventListener('scroll', function() {
      const sections = document.querySelectorAll('section');
      const navBoxes = document.querySelectorAll('.nav-box');
      
      let currentSection = '';
      
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (pageYOffset >= (sectionTop - 150)) {
          currentSection = section.getAttribute('id');
        }
      });
      
      navBoxes.forEach(box => {
        box.classList.remove('active');
        if (box.getAttribute('onclick').includes(currentSection)) {
          box.classList.add('active');
        }
      });
    });

    // Animation on scroll
    document.addEventListener('DOMContentLoaded', function() {
      const animateElements = document.querySelectorAll('.animate__animated');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            // Add staggered delay based on index
            const delay = (index % 4) * 100;
            setTimeout(() => {
              entry.target.classList.add('animate__fadeInUp');
            }, delay);
            observer.unobserve(entry.target);
          }
        });
      }, {threshold: 0.1});
      
      animateElements.forEach(element => {
        observer.observe(element);
      });

      // Add decorative elements
      const heroSection = document.querySelector('.hero-section');
      for (let i = 0; i < 5; i++) {
        const dot = document.createElement('div');
        dot.className = 'decorative-circle';
        dot.style.width = `${Math.random() * 20 + 10}px`;
        dot.style.height = dot.style.width;
        dot.style.background = i % 2 === 0 ? 'var(--accent-color)' : 'var(--secondary-accent)';
        dot.style.opacity = Math.random() * 0.1 + 0.05;
        dot.style.top = `${Math.random() * 100}%`;
        dot.style.left = `${Math.random() * 100}%`;
        dot.style.position = 'absolute';
        heroSection.appendChild(dot);
      }
    });
  </script>
</body>
</html>