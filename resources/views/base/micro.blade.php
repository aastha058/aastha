<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Micro Finance Company | TaxFilingHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <style>
    :root {
      --primary: #0066cc;
      --secondary: #00a86b;
      --accent: #ff6b6b;
      --dark: #1a1a2e;
      --light: #f8f9fa;
    }
    
    body {
      font-family: 'Poppins', system-ui, -apple-system, sans-serif;
      background: linear-gradient(135deg, #f5f7fa 0%, #e4f1ff 100%);
      scroll-behavior: smooth;
      overflow-x: hidden;
    }
    
    /* Glassmorphism effect */
    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 16px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.18);
      transition: all 0.3s ease;
    }
    
    .glass-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }
    
    /* Hero section with animated gradient */
    .hero {
      background: linear-gradient(-45deg, #0066cc, #00a86b, #0066cc, #00a86b);
      background-size: 400% 400%;
      color: #fff;
      padding: 120px 20px;
      text-align: center;
      position: relative;
      overflow: hidden;
      animation: gradientBG 15s ease infinite;
    }
    
    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://images.unsplash.com/photo-1573164574396-9d3d877a59c8') center/cover no-repeat;
      opacity: 0.15;
      z-index: 0;
    }
    
    .hero-content {
      position: relative;
      z-index: 1;
    }
    
    .hero h2 {
      font-size: 3.5rem;
      font-weight: 800;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
      margin-bottom: 1.5rem;
    }
    
    .hero p {
      font-size: 1.5rem;
      font-weight: 300;
      max-width: 800px;
      margin: 0 auto 2rem;
    }
    
    .price-tag {
      display: inline-block;
      background: rgba(255, 255, 255, 0.2);
      padding: 0.5rem 1.5rem;
      border-radius: 50px;
      font-weight: 700;
      backdrop-filter: blur(5px);
      margin-bottom: 2rem;
      border: 2px solid rgba(255, 255, 255, 0.3);
    }
    
    .btn-primary {
      background-color: var(--primary);
      border: none;
      padding: 12px 30px;
      border-radius: 50px;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 102, 204, 0.3);
    }
    
    .btn-primary:hover {
      background-color: #0052a3;
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(0, 102, 204, 0.4);
    }
    
    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--dark);
      margin: 80px 0 30px;
      text-align: center;
      position: relative;
      display: inline-block;
      left: 50%;
      transform: translateX(-50%);
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(to right, var(--primary), var(--secondary));
      border-radius: 2px;
    }
    
    .info-box {
      padding: 30px;
      margin-bottom: 30px;
      border-left: 5px solid var(--primary);
    }
    
    /* Floating animation */
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }
    
    .floating {
      animation: float 6s ease-in-out infinite;
    }
    
    /* Feature cards */
    .feature-card {
      border-radius: 16px;
      overflow: hidden;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      border: none;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }
    
    .feature-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }
    
    .feature-card img {
      height: 200px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .feature-card:hover img {
      transform: scale(1.05);
    }
    
    .feature-card .card-body {
      padding: 25px;
    }
    
    .feature-card .card-title {
      font-weight: 700;
      color: var(--dark);
      margin-bottom: 15px;
    }
    
    /* Testimonial slider */
    .testimonial-slide {
      padding: 30px;
      background: white;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      margin: 20px;
    }
    
    .testimonial-avatar {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--primary);
      margin: 0 auto 15px;
    }
    
    /* Process timeline */
    .process-timeline {
      position: relative;
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 0;
    }
    
    .process-timeline::after {
      content: '';
      position: absolute;
      width: 6px;
      background: linear-gradient(to bottom, var(--primary), var(--secondary));
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -3px;
      border-radius: 3px;
    }
    
    .process-step {
      padding: 10px 40px;
      position: relative;
      width: 50%;
      box-sizing: border-box;
    }
    
    .process-step::after {
      content: '';
      position: absolute;
      width: 25px;
      height: 25px;
      background: var(--primary);
      border-radius: 50%;
      top: 15px;
      z-index: 1;
    }
    
    .left {
      left: 0;
    }
    
    .right {
      left: 50%;
    }
    
    .left::after {
      right: -12px;
    }
    
    .right::after {
      left: -12px;
    }
    
    .process-content {
      padding: 20px 30px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    /* Floating action button */
    .fab {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 60px;
      height: 60px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      z-index: 100;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .fab:hover {
      transform: scale(1.1) rotate(15deg);
      background: var(--secondary);
    }
    
    /* Footer */
    .footer {
      background: var(--dark);
      color: white;
      padding: 60px 0 30px;
      position: relative;
      overflow: hidden;
    }
    
    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71') center/cover no-repeat;
      opacity: 0.1;
      z-index: 0;
    }
    
    .footer-content {
      position: relative;
      z-index: 1;
    }
    
    .newsletter-input {
      background: rgba(255, 255, 255, 0.1);
      border: none;
      color: white;
      padding: 15px 20px;
      border-radius: 50px;
      width: 100%;
      max-width: 400px;
      margin-right: 10px;
      backdrop-filter: blur(5px);
    }
    
    .newsletter-input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }
    
    .newsletter-btn {
      background: var(--accent);
      border: none;
      padding: 15px 30px;
      border-radius: 50px;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    
    .newsletter-btn:hover {
      background: #ff5252;
      transform: translateY(-2px);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .hero h2 {
        font-size: 2.5rem;
      }
      
      .hero p {
        font-size: 1.2rem;
      }
      
      .process-timeline::after {
        left: 31px;
      }
      
      .process-step {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }
      
      .process-step::after {
        left: 18px;
      }
      
      .left::after, .right::after {
        left: 18px;
      }
      
      .right {
        left: 0;
      }
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 10px;
    }
    
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    
    ::-webkit-scrollbar-thumb {
      background: var(--primary);
      border-radius: 10px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
      background: #0052a3;
    }
    
    /* Particle animation background for some sections */
    .particle-bg {
      position: relative;
      overflow: hidden;
    }
    
    .particle {
      position: absolute;
      background: rgba(0, 170, 107, 0.2);
      border-radius: 50%;
      pointer-events: none;
    }
    
    /* Animated underline effect */
    .hover-underline {
      display: inline-block;
      position: relative;
    }
    
    .hover-underline::after {
      content: '';
      position: absolute;
      width: 100%;
      transform: scaleX(0);
      height: 2px;
      bottom: -2px;
      left: 0;
      background-color: var(--primary);
      transform-origin: bottom right;
      transition: transform 0.25s ease-out;
    }
    
    .hover-underline:hover::after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }
    
    /* Glow effect */
    .glow {
      animation: glow 2s ease-in-out infinite alternate;
    }
    
    @keyframes glow {
      from {
        box-shadow: 0 0 5px rgba(0, 170, 107, 0.5);
      }
      to {
        box-shadow: 0 0 20px rgba(0, 170, 107, 0.8);
      }
    }
  </style>
</head>
<body>
<!-- HERO SECTION -->
<section class="hero">
  <div class="hero-content text-center">
    <h2 class="animate__animated animate__fadeInDown mb-3">Micro Finance Registration</h2>
    <p class="animate__animated animate__fadeIn mb-4">Fast & Affordable Setup</p>
    <div class="price-tag animate__animated animate__fadeIn mb-4">
      Just <span class="text-warning fw-bold">₹25,799</span> All-In
    </div>
    <a href="#cost" class="btn btn-primary btn-lg animate__animated animate__fadeInUp">
      Start Now <i class="fas fa-arrow-right ms-2"></i>
    </a>
  </div>
  <div id="particles-js"></div>
</section>

  <!-- FEATURES SECTION -->
  <section class="container py-5">
    <h2 class="section-title" data-aos="fade-down">Why Choose Us?</h2>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card h-100">
          <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f" class="card-img-top" alt="Fast Service">
          <div class="card-body">
            <h5 class="card-title">Lightning Fast Registration</h5>
            <p class="card-text">Get your micro finance company registered in as little as 15 days with our streamlined process.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card h-100">
          <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e" class="card-img-top" alt="Expert Team">
          <div class="card-body">
            <h5 class="card-title">Expert Guidance</h5>
            <p class="card-text">Our team of financial and legal experts will guide you through every step of the process.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card h-100">
          <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="card-img-top" alt="Compliance">
          <div class="card-body">
            <h5 class="card-title">End-to-End Compliance</h5>
            <p class="card-text">We handle all RBI compliance requirements so you can focus on your business.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS TIMELINE -->
  <section class="container py-5 particle-bg">
    <h2 class="section-title" data-aos="fade-down">Our Simple 4-Step Process</h2>
    
    <div class="process-timeline">
      <div class="process-step left" data-aos="fade-right">
        <div class="process-content">
          <h4>1. Consultation & Documentation</h4>
          <p>We understand your needs and collect all required documents</p>
        </div>
      </div>
      <div class="process-step right" data-aos="fade-left" data-aos-delay="100">
        <div class="process-content">
          <h4>2. Name Approval & Incorporation</h4>
          <p>We handle company name reservation and registration</p>
        </div>
      </div>
      <div class="process-step left" data-aos="fade-right" data-aos-delay="200">
        <div class="process-content">
          <h4>3. RBI Registration</h4>
          <p>We prepare and submit all necessary applications to RBI</p>
        </div>
      </div>
      <div class="process-step right" data-aos="fade-left" data-aos-delay="300">
        <div class="process-content">
          <h4>4. Compliance Setup</h4>
          <p>We establish your compliance framework for smooth operations</p>
        </div>
      </div>
    </div>
  </section>

  <!-- IMAGE SLIDER WITH TESTIMONIALS -->
  <section class="container py-5">
    <h2 class="section-title" data-aos="fade-down">Success Stories</h2>
    
    <div class="swiper testimonial-slider" data-aos="fade-up">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="testimonial-slide glass-card">
            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="testimonial-avatar" alt="Client">
            <h5 class="text-center mb-3">Priya Sharma</h5>
            <p class="text-center">"TaxFilingHub made our micro finance registration effortless. Their expertise saved us weeks of work and potential compliance issues."</p>
            <div class="text-center text-warning mt-3">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-slide glass-card">
            <img src="https://randomuser.me/api/portraits/men/45.jpg" class="testimonial-avatar" alt="Client">
            <h5 class="text-center mb-3">Rahul Mehta</h5>
            <p class="text-center">"The team was professional and responsive throughout the process. We got our RBI approval in record time!"</p>
            <div class="text-center text-warning mt-3">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-slide glass-card">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="testimonial-avatar" alt="Client">
            <h5 class="text-center mb-3">Ananya Patel</h5>
            <p class="text-center">"Their end-to-end service gave us confidence to focus on our core business while they handled all regulatory requirements."</p>
            <div class="text-center text-warning mt-3">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- DETAILED SECTIONS -->
  <div class="container py-5">
    <!-- COST SECTION -->
    <section id="cost">
      <h3 class="section-title">Time and Cost for Incorporation</h3>
      <div class="row">
        <div class="col-md-6" data-aos="fade-right">
          <div class="info-box glass-card h-100">
            <h4 class="text-primary mb-4"><i class="fas fa-clock me-2"></i> Time Required</h4>
            <div class="d-flex align-items-center mb-3">
              <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                <i class="fas fa-check-circle text-primary"></i>
              </div>
              <div>
                <h6 class="mb-0">1 Day</h6>
                <small class="text-muted">Name Approval</small>
              </div>
            </div>
            <div class="d-flex align-items-center mb-3">
              <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                <i class="fas fa-check-circle text-primary"></i>
              </div>
              <div>
                <h6 class="mb-0">2 Working Days</h6>
                <small class="text-muted">Documentation Preparation</small>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                <i class="fas fa-check-circle text-primary"></i>
              </div>
              <div>
                <h6 class="mb-0">15 Days</h6>
                <small class="text-muted">For Final Approval</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <div class="info-box glass-card h-100">
            <h4 class="text-primary mb-4"><i class="fas fa-rupee-sign me-2"></i> Cost Breakdown</h4>
            <div class="d-flex justify-content-between mb-2">
              <span>Name Approval:</span>
              <span class="fw-bold">₹1000</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Two DSC:</span>
              <span class="fw-bold">₹1500</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Stamp Duty:</span>
              <span class="fw-bold">₹1000</span>
            </div>
            <div class="d-flex justify-content-between mb-2">
              <span>Professional Fee:</span>
              <span class="fw-bold">₹22,299</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
              <span class="h5">Total:</span>
              <span class="h4 text-primary fw-bold">₹25,799/-</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- REQUIREMENT SECTION -->
    <section id="requirement" class="mt-5">
      <h3 class="section-title">Requirement for Registration</h3>
      <div class="info-box glass-card" data-aos="zoom-in">
        <div class="row align-items-center">
          <div class="col-md-8">
            <p>To incorporate a Micro Finance Company, registration with the RBI is mandatory under the Companies Act. You must adhere to financial norms and submit required capital proof and documentation.</p>
            <p>A minimum capital of ₹5 lakh is needed, and the company must have the object of providing small loans to underprivileged sections.</p>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> RBI Registration Required</li>
              <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Minimum ₹5 Lakh Capital</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> Clear Lending Objectives</li>
            </ul>
          </div>
          <div class="col-md-4 text-center">
            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e" class="img-fluid rounded floating" alt="Requirements" style="max-height: 200px;">
          </div>
        </div>
      </div>
    </section>

    <!-- COMPLIANCE SECTION -->
    <section id="compliance" class="mt-5">
      <h3 class="section-title">Mandatory Compliances</h3>
      <div class="row g-4">
        <div class="col-md-6" data-aos="fade-up">
          <div class="info-box glass-card h-100">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                <i class="fas fa-file-invoice text-primary fs-4"></i>
              </div>
              <div>
                <h5>Quarterly Reporting</h5>
                <p class="mb-0">Submission of financial returns to RBI every quarter to maintain transparency.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="info-box glass-card h-100">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                <i class="fas fa-chart-line text-primary fs-4"></i>
              </div>
              <div>
                <h5>Annual Audits</h5>
                <p class="mb-0">Annual audited financial statements must be submitted to regulatory authorities.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="info-box glass-card h-100">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                <i class="fas fa-user-shield text-primary fs-4"></i>
              </div>
              <div>
                <h5>KYC Norms</h5>
                <p class="mb-0">Strict adherence to Know Your Customer regulations for all borrowers.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="info-box glass-card h-100">
            <div class="d-flex align-items-start">
              <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                <i class="fas fa-file-contract text-primary fs-4"></i>
              </div>
              <div>
                <h5>Loan Documentation</h5>
                <p class="mb-0">Maintaining proper loan agreements and borrower records is essential.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- DOCUMENTS SECTION -->
    <section id="documents" class="mt-5">
      <h3 class="section-title">Documents Required</h3>
      <div class="row">
        <div class="col-md-6" data-aos="fade-right">
          <div class="info-box glass-card h-100">
            <h4 class="text-primary mb-4"><i class="fas fa-user-tie me-2"></i> For Directors</h4>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex align-items-start">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                  <i class="fas fa-id-card text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-0">PAN Card</h6>
                  <small class="text-muted">Mandatory identity proof</small>
                </div>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                  <i class="fas fa-address-card text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-0">Aadhar Card</h6>
                  <small class="text-muted">Address and identity proof</small>
                </div>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                  <i class="fas fa-camera text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-0">Passport Photo</h6>
                  <small class="text-muted">Recent photograph</small>
                </div>
              </li>
              <li class="d-flex align-items-start">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                  <i class="fas fa-file-signature text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-0">DIN & DSC</h6>
                  <small class="text-muted">Digital Signature Certificate</small>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <div class="info-box glass-card h-100">
            <h4 class="text-primary mb-4"><i class="fas fa-building me-2"></i> For Registered Office</h4>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex align-items-start">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                  <i class="fas fa-file-contract text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-0">Rent Agreement</h6>
                  <small class="text-muted">If office is rented</small>
                </div>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                  <i class="fas fa-lightbulb text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-0">Utility Bill</h6>
                  <small class="text-muted">Electricity/water bill</small>
                </div>
              </li>
              <li class="mb-3 d-flex align-items-start">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                  <i class="fas fa-home text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-0">Ownership Proof</h6>
                  <small class="text-muted">If office is owned</small>
                </div>
              </li>
              <li class="d-flex align-items-start">
                <div class="bg-primary bg-opacity-10 p-2 rounded me-3">
                  <i class="fas fa-file-invoice-dollar text-primary"></i>
                </div>
                <div>
                  <h6 class="mb-0">Bank Statement</h6>
                  <small class="text-muted">For capital proof</small>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- CTA SECTION -->
  <section class="py-5 bg-primary text-white">
    <div class="container text-center">
      <h2 class="display-5 mb-4">Ready to Start Your Micro Finance Company?</h2>
      <p class="lead mb-5">Join hundreds of successful financial entrepreneurs who trusted us with their registration</p>
      <a href="#cost" class="btn btn-light btn-lg px-5 py-3">
        <i class="fas fa-paper-plane me-2"></i> Begin Registration Now
      </a>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="container py-5">
    <h2 class="section-title" data-aos="fade-down">Frequently Asked Questions</h2>
    
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item glass-card border-0 mb-3" data-aos="fade-up">
        <h3 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            What is the minimum capital requirement for a Micro Finance Company?
          </button>
        </h3>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The minimum capital requirement for registering a Micro Finance Company is ₹5 lakh. This capital must be clearly shown in your bank statements and financial documents submitted during the registration process.
          </div>
        </div>
      </div>
      
      <div class="accordion-item glass-card border-0 mb-3" data-aos="fade-up" data-aos-delay="100">
        <h3 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            How long does the registration process typically take?
          </button>
        </h3>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The complete registration process typically takes about 15-20 working days, depending on RBI processing times. This includes 1 day for name approval, 2 working days for documentation preparation, and approximately 15 days for final approval from the authorities.
          </div>
        </div>
      </div>
      
      <div class="accordion-item glass-card border-0 mb-3" data-aos="fade-up" data-aos-delay="200">
        <h3 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
            What ongoing compliances are required after registration?
          </button>
        </h3>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            After registration, Micro Finance Companies must comply with several ongoing requirements including quarterly financial reporting to RBI, annual audits, maintaining proper KYC documentation for all borrowers, adhering to fair practices codes, and submitting annual returns to the Registrar of Companies.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-content container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up">
          <h4 class="mb-4">TaxFilingHub</h4>
          <p>Your trusted partner for all financial and regulatory compliance needs. We make complex processes simple and efficient.</p>
        </div>
        <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <h4 class="mb-4">Quick Links</h4>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#cost" class="text-white hover-underline">Pricing</a></li>
            <li class="mb-2"><a href="#requirement" class="text-white hover-underline">Requirements</a></li>
            <li class="mb-2"><a href="#compliance" class="text-white hover-underline">Compliances</a></li>
            <li><a href="#documents" class="text-white hover-underline">Documents</a></li>
          </ul>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <h4 class="mb-4">Newsletter</h4>
          <p>Subscribe to get updates, financial tips, and exclusive offers.</p>
          <form class="d-flex mt-3">
            <input type="email" class="form-control newsletter-input" placeholder="Your email" required>
            <button type="submit" class="btn newsletter-btn">
              <i class="fas fa-paper-plane"></i>
            </button>
          </form>
        </div>
      </div>
      <hr class="my-4 opacity-25">
      <div class="text-center pt-3">
        <p class="mb-0">&copy; 2023 TaxFilingHub. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- FLOATING ACTION BUTTON -->
  <div class="fab animate__animated animate__bounceIn animate__delay-2s" onclick="scrollToTop()">
    <i class="fas fa-arrow-up"></i>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  
  <script>
    // Initialize AOS animation
    AOS.init({
      duration: 800,
      once: true
    });
    
    // Initialize testimonial slider
    const testimonialSwiper = new Swiper('.testimonial-slider', {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
    });
    
    // Scroll to top function
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
    
    // Show/hide floating action button based on scroll position
    window.addEventListener('scroll', function() {
      const fab = document.querySelector('.fab');
      if (window.scrollY > 300) {
        fab.style.display = 'flex';
      } else {
        fab.style.display = 'none';
      }
    });
    
    // Create floating particles in hero section
    document.addEventListener('DOMContentLoaded', function() {
      if (document.getElementById('particles-js')) {
        particlesJS('particles-js', {
          particles: {
            number: { value: 80, density: { enable: true, value_area: 800 } },
            color: { value: "#ffffff" },
            shape: { type: "circle" },
            opacity: { value: 0.5, random: true },
            size: { value: 3, random: true },
            line_linked: { enable: true, distance: 150, color: "#ffffff", opacity: 0.3, width: 1 },
            move: { enable: true, speed: 2, direction: "none", random: true, straight: false, out_mode: "out" }
          },
          interactivity: {
            detect_on: "canvas",
            events: {
              onhover: { enable: true, mode: "repulse" },
              onclick: { enable: true, mode: "push" }
            }
          }
        });
      }
      
      // Add particles to sections with particle-bg class
      const particleSections = document.querySelectorAll('.particle-bg');
      particleSections.forEach(section => {
        for (let i = 0; i < 15; i++) {
          const particle = document.createElement('div');
          particle.classList.add('particle');
          particle.style.width = `${Math.random() * 10 + 5}px`;
          particle.style.height = particle.style.width;
          particle.style.left = `${Math.random() * 100}%`;
          particle.style.top = `${Math.random() * 100}%`;
          particle.style.opacity = Math.random() * 0.3 + 0.1;
          section.appendChild(particle);
          
          // Animate particles
          setInterval(() => {
            particle.style.transform = `translate(${Math.random() * 20 - 10}px, ${Math.random() * 20 - 10}px)`;
          }, Math.random() * 2000 + 1000);
        }
      });
    });
    
    // Add hover effect to all links with hover-underline class
    document.querySelectorAll('.hover-underline').forEach(link => {
      link.addEventListener('mouseenter', () => {
        link.classList.add('hover-underline-animation');
      });
      link.addEventListener('mouseleave', () => {
        link.classList.remove('hover-underline-animation');
      });
    });
  </script>
</body>
</html>