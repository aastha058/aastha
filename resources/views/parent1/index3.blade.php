<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MSME Registration | TaxFilingHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    :root {
      --primary-color: #1c1d35;
      --accent-color: #ec9215;
      --light-bg: #f8f9fa;
      --text-color: #333;
      --text-light: #777;
    }
    
    body {
      font-family: 'Inter', sans-serif;
      background-color: #fff;
      color: var(--text-color);
      overflow-x: hidden;
    }

    .hero-section {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      padding: 80px 0 60px;
      margin-bottom: 40px;
      position: relative;
      overflow: hidden;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 20px;
      background: repeating-linear-gradient(
        -45deg,
        var(--primary-color),
        var(--primary-color) 10px,
        var(--accent-color) 10px,
        var(--accent-color) 20px
      );
    }

    .section-title {
      font-weight: bold;
      font-size: 2rem;
      margin-bottom: 1.5rem;
      color: var(--primary-color);
      position: relative;
      display: inline-block;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--accent-color);
      border-radius: 2px;
      animation: underlineGrow 0.8s ease-out forwards;
    }

    @keyframes underlineGrow {
      from { width: 0; }
      to { width: 60px; }
    }

    .highlight {
      color: var(--accent-color);
      font-weight: 600;
    }

    .price-tag {
      font-size: 2.5rem;
      font-weight: bold;
      color: var(--accent-color);
      margin: 15px 0;
      text-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .nav-box {
      background: var(--primary-color);
      color: white;
      padding: 18px;
      text-align: center;
      font-weight: 600;
      border-radius: 8px;
      margin-bottom: 20px;
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      position: relative;
      overflow: hidden;
    }

    .nav-box::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 0;
      background: var(--accent-color);
      transition: all 0.4s ease;
    }

    .nav-box:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .nav-box:hover::before {
      height: 100%;
    }

    .btn-custom {
      background-color: var(--primary-color);
      color: white;
      font-weight: 600;
      padding: 14px 40px;
      border: none;
      border-radius: 8px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(28, 29, 53, 0.2);
      position: relative;
      overflow: hidden;
    }

    .btn-custom::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: 0.5s;
    }

    .btn-custom:hover {
      background-color: var(--accent-color);
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(236, 146, 21, 0.3);
    }

    .btn-custom:hover::after {
      left: 100%;
    }

    .info-card {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      margin-bottom: 40px;
      transition: all 0.4s ease;
      border-left: 4px solid var(--accent-color);
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.12);
    }

    .classification-table {
      width: 100%;
      border-collapse: collapse;
      margin: 25px 0;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .classification-table th, 
    .classification-table td {
      padding: 15px 20px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }

    .classification-table th {
      background-color: var(--primary-color);
      color: white;
      font-weight: 500;
      letter-spacing: 0.5px;
    }

    .classification-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .classification-table tr:hover {
      background-color: #f1f1f1;
    }

    .document-list {
      list-style-type: none;
      padding: 0;
    }

    .document-list li {
      padding: 12px 0;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 40px;
      transition: all 0.3s ease;
    }

    .document-list li:hover {
      transform: translateX(5px);
    }

    .document-list li::before {
      content: '✓';
      position: absolute;
      left: 0;
      color: var(--accent-color);
      font-weight: bold;
      font-size: 1.2rem;
    }

    .newsletter {
      background: linear-gradient(135deg, var(--primary-color) 0%, #2a2b4a 100%);
      padding: 60px 0;
      border-radius: 15px;
      margin: 60px 0;
      color: white;
      text-align: center;
      box-shadow: 0 20px 40px rgba(28, 29, 53, 0.2);
      position: relative;
      overflow: hidden;
    }

    .newsletter::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 200px;
      height: 200px;
      background: var(--accent-color);
      opacity: 0.1;
      border-radius: 50%;
    }

    .newsletter::after {
      content: '';
      position: absolute;
      bottom: -80px;
      left: -80px;
      width: 250px;
      height: 250px;
      background: var(--accent-color);
      opacity: 0.1;
      border-radius: 50%;
    }

    .newsletter .form-control {
      height: 55px;
      border-radius: 8px;
      border: none;
      padding: 0 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      position: relative;
      z-index: 1;
    }

    .newsletter .btn-subscribe {
      background: var(--accent-color);
      color: white;
      font-weight: 600;
      height: 55px;
      padding: 0 35px;
      border-radius: 8px;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(236, 146, 21, 0.3);
      position: relative;
      z-index: 1;
    }

    .newsletter .btn-subscribe:hover {
      background: #e67e22;
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(236, 146, 21, 0.4);
    }

    .footer {
      background: var(--primary-color);
      color: white;
      padding: 80px 0 0;
      position: relative;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: var(--accent-color);
    }

    .footer h5 {
      font-weight: 700;
      margin-bottom: 25px;
      position: relative;
      display: inline-block;
    }

    .footer h5::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 40px;
      height: 3px;
      background: var(--accent-color);
    }

    .footer ul {
      list-style: none;
      padding: 0;
    }

    .footer ul li {
      margin-bottom: 12px;
      transition: all 0.3s ease;
    }

    .footer ul li:hover {
      color: var(--accent-color);
      transform: translateX(5px);
    }

    .footer-bottom {
      text-align: center;
      padding: 25px;
      font-size: 14px;
      background: rgba(0,0,0,0.2);
      margin-top: 60px;
    }

    .social-icons i {
      font-size: 1.3rem;
      margin-right: 15px;
      color: white;
      transition: all 0.3s ease;
      background: rgba(255,255,255,0.1);
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .social-icons i:hover {
      color: var(--accent-color);
      transform: translateY(-5px) scale(1.1);
      background: rgba(255,255,255,0.2);
    }

    .floating {
      animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
      100% { transform: translateY(0px); }
    }

    .pulse {
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(236, 146, 21, 0.4); }
      70% { box-shadow: 0 0 0 15px rgba(236, 146, 21, 0); }
      100% { box-shadow: 0 0 0 0 rgba(236, 146, 21, 0); }
    }

    .rotate {
      animation: rotate 15s linear infinite;
    }

    @keyframes rotate {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .glow-effect {
      animation: glow 2s ease-in-out infinite alternate;
    }

    @keyframes glow {
      from {
        box-shadow: 0 0 5px rgba(236, 146, 21, 0.5);
      }
      to {
        box-shadow: 0 0 20px rgba(236, 146, 21, 0.8);
      }
    }

    @media (max-width: 768px) {
      .section-title {
        font-size: 1.6rem;
      }
      
      .hero-section {
        padding: 60px 0 40px;
      }
      
      .newsletter input {
        margin-bottom: 15px;
      }
      
      .classification-table {
        display: block;
        overflow-x: auto;
      }
    }
  </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold mb-4 animate__animated animate__fadeInDown">MSME Registration</h1>
        <div class="price-tag animate__animated animate__fadeInDown animate__delay-1s">Only ₹999/-</div>
        <p class="lead mb-4 animate__animated animate__fadeInDown animate__delay-1s">Register your Micro, Small or Medium Enterprise and unlock government benefits and schemes</p>
        <div class="d-flex align-items-center animate__animated animate__fadeInDown animate__delay-2s">
          <button class="btn btn-custom me-3 pulse">GET STARTED</button>
          <span class="text-muted"><i class="bi bi-arrow-right"></i> Process completed in 5 days</span>
        </div>
      </div>
      <div class="col-lg-6 d-none d-lg-block">
        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="MSME Registration" class="img-fluid floating animate__animated animate__fadeIn">
      </div>
    </div>
  </div>
</section>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <!-- Left Content Section -->
    <div class="col-lg-8">
      <!-- Time and Cost Section -->
      <section id="time-cost" class="animate__animated">
        <h2 class="section-title">TIME AND COST</h2>
        <div class="info-card">
          <p>Once the full document is received it will take 5 days to obtain the certificate of MSME. Cost:-</p>
          <ul class="document-list">
            <li>Government Fee: Nil/-</li>
            <li>Professional Fee (inclusive of Taxes): ₹999/-</li>
            <li class="fw-bold">Total: ₹999/-</li>
          </ul>
        </div>
      </section>

      <!-- About MSME Section -->
      <section id="about-msme" class="animate__animated">
        <h2 class="section-title">ABOUT MSME</h2>
        <div class="info-card">
          <p>MSME stands for Micro, Small and Medium Enterprises. In a developing country like India, MSME industries are the backbone of the economy.</p>
          <p>Economy of the country grows as a whole and flourishes. These industries are also known as small-scale industries or SSIs.</p>
          
          <h5 class="mt-4">Existing MSME Classification</h5>
          <table class="classification-table">
            <thead>
              <tr>
                <th>Sector</th>
                <th>Micro</th>
                <th>Small</th>
                <th>Medium</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Manufacturing</td>
                <td>Investment < ₹25 lakh</td>
                <td>Investment < ₹5 crore</td>
                <td>Investment < ₹10 crore</td>
              </tr>
              <tr>
                <td>Services</td>
                <td>Investment < ₹10 lakh</td>
                <td>Investment < ₹2 crore</td>
                <td>Investment < ₹5 crore</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Application Process Section -->
      <section id="application-process" class="animate__animated">
        <h2 class="section-title">APPLICATION PROCESS</h2>
        <div class="info-card">
          <p>Application of MSME is a completely online process and can be done by anyone since it does not require any professional signature or attestation.</p>
          <p>However, MSME involves some technical discussion and hence, it is recommended that you should take the help of a professional so you don't end up doing it wrong.</p>
          
          <div class="row mt-4">
            <div class="col-md-6">
              <div class="process-step" data-step="1">
                <h5>Document Collection</h5>
                <p>We collect all necessary documents from you</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="process-step" data-step="2">
                <h5>Form Filling</h5>
                <p>We complete the MSME application form</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="process-step" data-step="3">
                <h5>Submission</h5>
                <p>We submit the application on your behalf</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="process-step" data-step="4">
                <h5>Certificate</h5>
                <p>You receive your MSME certificate</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Documents Required Section -->
      <section id="documents-required" class="animate__animated">
        <h2 class="section-title">DOCUMENTS REQUIRED</h2>
        <div class="info-card">
          <ul class="document-list">
            <li>PAN Card</li>
            <li>AADHAAR Card</li>
            <li>Cancelled Cheque</li>
            <li>Name of Business</li>
            <li>Copy of Income Tax Return</li>
            <li>Copy of Financial Statements</li>
          </ul>
        </div>
      </section>

      <!-- Newsletter Section -->
      <section class="newsletter animate__animated animate__fadeIn">
        <div class="container text-center">
          <h5>Join Our Newsletter</h5>
          <p class="mb-4">Join Our Newsletter program to get updated news of taxes.</p>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="input-group">
                <input type="email" placeholder="Enter your email" class="form-control"/>
                <button class="btn btn-subscribe">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Right Navigation -->
    <div class="col-lg-4">
      <div class="sticky-top" style="top: 20px;">
        <div class="nav-box animate__animated" onclick="scrollToSection('about-msme')">ABOUT MSME</div>
        <div class="nav-box animate__animated" onclick="scrollToSection('application-process')">APPLICATION PROCESS</div>
        <div class="nav-box animate__animated" onclick="scrollToSection('time-cost')">TIME AND COST</div>
        <div class="nav-box animate__animated" onclick="scrollToSection('documents-required')">DOCUMENTS REQUIRED</div>
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Smooth scroll function for navigation boxes
  function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({
      behavior: 'smooth'
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
      
      if (pageYOffset >= (sectionTop - 100)) {
        currentSection = section.getAttribute('id');
      }
    });
    
    navBoxes.forEach(box => {
      box.classList.remove('active');
      if (box.getAttribute('onclick').includes(currentSection)) {
        box.classList.add('active');
        box.style.backgroundColor = 'var(--accent-color)';
      } else {
        box.style.backgroundColor = 'var(--primary-color)';
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

    // Add hover effect to boxes
    const boxes = document.querySelectorAll('.info-card, .nav-box');
    boxes.forEach(box => {
      box.addEventListener('mouseenter', () => {
        box.style.transform = 'translateY(-5px)';
      });
      box.addEventListener('mouseleave', () => {
        box.style.transform = '';
      });
    });
  });
</script>
</body>
</html>