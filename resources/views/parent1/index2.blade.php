<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Import Export | TaxFilingHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    :root {
      --primary-color: #1c1d35;
      --accent-color: #ec9215;
      --light-bg: #f8f9fa;
      --text-color: #333;
      --text-light: #777;
      --gradient: linear-gradient(135deg, var(--primary-color) 0%, #2a2b4a 100%);
    }
    
    body {
      font-family: 'Inter', 'Segoe UI', sans-serif;
      line-height: 1.7;
      color: var(--text-color);
      overflow-x: hidden;
      background-color: #f9f9f9;
    }
    
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 10px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb {
      background: var(--accent-color);
      border-radius: 10px;
    }
    
    .top-bar {
      background: var(--gradient);
      color: white;
      font-size: 14px;
      padding: 10px 20px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .top-bar i {
      margin-right: 5px;
      color: var(--accent-color);
    }
    
    .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
      color: var(--primary-color);
      letter-spacing: -0.5px;
    }
    
    .highlight {
      color: var(--accent-color);
    }
    
    .section-title {
      font-weight: 700;
      font-size: 2.2rem;
      margin-top: 60px;
      margin-bottom: 25px;
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
    
    /* Enhanced Box Design */
    .box {
      background: white;
      padding: 30px 25px;
      text-align: center;
      margin-bottom: 20px;
      font-weight: 600;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      border: none;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }
    
    .box::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: var(--gradient);
      transition: all 0.4s ease;
      z-index: -1;
    }
    
    .box::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: var(--gradient);
      opacity: 0;
      z-index: -1;
      transition: all 0.4s ease;
    }
    
    .box:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
      color: white;
    }
    
    .box:hover::after {
      opacity: 1;
    }
    
    .box:hover .card-icon,
    .box:hover h5,
    .box:hover p {
      color: white !important;
    }
    
    /* Enhanced Button */
    .btn-custom {
      background: var(--gradient);
      color: white;
      padding: 14px 40px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(28, 29, 53, 0.3);
      position: relative;
      overflow: hidden;
      z-index: 1;
    }
    
    .btn-custom::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: 0.5s;
      z-index: -1;
    }
    
    .btn-custom:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(28, 29, 53, 0.4);
    }
    
    .btn-custom:hover::before {
      left: 100%;
    }
    
    /* Hero Section Enhancements */
    .hero-section {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      padding: 100px 0 80px;
      margin-bottom: 40px;
      position: relative;
      overflow: hidden;
      border-bottom: 1px solid rgba(0,0,0,0.05);
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
    
    .hero-section::after {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 80%;
      height: 200%;
      background: radial-gradient(circle, rgba(236,146,21,0.05) 0%, rgba(236,146,21,0) 70%);
      z-index: 0;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
    }
    
    .price-tag {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--accent-color);
      margin: 15px 0;
      text-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    /* Feature List Enhancements */
    .feature-list li {
      margin-bottom: 15px;
      position: relative;
      padding-left: 30px;
      transition: all 0.3s ease;
    }
    
    .feature-list li:hover {
      transform: translateX(10px);
    }
    
    .feature-list li::before {
      content: '✓';
      position: absolute;
      left: 0;
      color: var(--accent-color);
      font-weight: bold;
      font-size: 1.2rem;
    }
    
    /* Footer Enhancements */
    .footer {
      background: var(--gradient);
      color: white;
      padding: 80px 0 0;
      position: relative;
      clip-path: polygon(0 0, 100% 5%, 100% 100%, 0% 100%);
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
    
    /* Social Icons */
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
    
    /* Newsletter Enhancements */
    .newsletter {
      background: var(--gradient);
      padding: 80px 0;
      border-radius: 20px;
      margin: 100px 0;
      color: white;
      box-shadow: 0 30px 50px rgba(28, 29, 53, 0.2);
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(255,255,255,0.1);
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
      animation: float 6s ease-in-out infinite;
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
      animation: float 8s ease-in-out infinite;
    }
    
    .newsletter h5 {
      font-weight: 700;
      font-size: 2.2rem;
      position: relative;
      z-index: 1;
      text-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .newsletter p {
      opacity: 0.9;
      position: relative;
      z-index: 1;
      font-size: 1.1rem;
    }
    
    .newsletter input {
      border-radius: 8px;
      height: 55px;
      border: none;
      padding: 0 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      position: relative;
      z-index: 1;
      transition: all 0.3s ease;
    }
    
    .newsletter input:focus {
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
      transform: translateY(-2px);
    }
    
    .newsletter .btn {
      background: var(--accent-color);
      color: white;
      font-weight: 600;
      height: 55px;
      padding: 0 35px;
      border-radius: 8px;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 5px 20px rgba(236, 146, 21, 0.4);
      position: relative;
      z-index: 1;
    }
    
    .newsletter .btn:hover {
      background: #e67e22;
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(236, 146, 21, 0.5);
    }
    
    /* Card Icon Enhancements */
    .card-icon {
      font-size: 3rem;
      color: var(--accent-color);
      margin-bottom: 20px;
      transition: all 0.5s ease;
      display: inline-block;
    }
    
    .box:hover .card-icon {
      transform: rotate(360deg) scale(1.2);
    }
    
    /* Process Steps Enhancements */
    .process-step {
      position: relative;
      padding-left: 60px;
      margin-bottom: 40px;
      transition: all 0.3s ease;
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    
    .process-step:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .process-step::before {
      content: attr(data-step);
      position: absolute;
      left: 20px;
      top: 25px;
      width: 40px;
      height: 40px;
      background: var(--gradient);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 1.3rem;
      box-shadow: 0 5px 15px rgba(28, 29, 53, 0.3);
    }
    
    .process-step::after {
      content: '';
      position: absolute;
      left: 40px;
      top: 65px;
      width: 2px;
      height: calc(100% - 40px);
      background: var(--accent-color);
      opacity: 0.3;
    }
    
    .process-step:last-child::after {
      display: none;
    }
    
    /* Animations */
    .floating {
      animation: floating 4s ease-in-out infinite;
      filter: drop-shadow(0 10px 20px rgba(0,0,0,0.1));
    }
    
    @keyframes floating {
      0% { transform: translateY(0px) rotate(-2deg); }
      50% { transform: translateY(-20px) rotate(2deg); }
      100% { transform: translateY(0px) rotate(-2deg); }
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
    
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }
    
    /* Pricing Card */
    .pricing-card {
      background: white;
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    
    .pricing-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    }
    
    .feature-list {
      list-style: none;
      padding: 0;
    }
    
    .feature-list li {
      padding: 12px 0;
      border-bottom: 1px solid rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    
    .feature-list li:hover {
      background-color: rgba(236, 146, 21, 0.05);
      transform: translateX(10px);
    }
    
    .badge.bg-primary {
      background-color: var(--primary-color) !important;
    }
    
    .badge.bg-accent {
      background-color: var(--accent-color) !important;
    }
    
    .highlight-text {
      background-color: rgba(236, 146, 21, 0.1);
      padding: 20px;
      border-left: 4px solid var(--accent-color);
      border-radius: 0 8px 8px 0;
      font-size: 1.1rem;
      transition: all 0.3s ease;
    }
    
    .highlight-text:hover {
      background-color: rgba(236, 146, 21, 0.15);
      transform: translateX(5px);
    }
    
    .info-point {
      padding: 20px;
      border-radius: 10px;
      transition: all 0.3s ease;
      margin-bottom: 15px;
      background: white;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .info-point:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .info-heading {
      color: var(--primary-color);
      font-weight: 600;
      display: flex;
      align-items: center;
      font-size: 1.2rem;
    }
    
    /* Accordion Enhancements */
    .accordion-button {
      font-weight: 600;
      padding: 15px 20px;
      background: white;
      border-radius: 8px !important;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    
    .accordion-button:not(.collapsed) {
      background: var(--primary-color);
      color: white;
    }
    
    .accordion-button:focus {
      box-shadow: 0 0 0 0.25rem rgba(236, 146, 21, 0.25);
    }
    
    .accordion-item {
      border: none;
      margin-bottom: 15px;
      border-radius: 8px !important;
      overflow: hidden;
    }
    
    .accordion-body {
      padding: 20px;
      background: rgba(0,0,0,0.02);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .section-title {
        font-size: 1.8rem;
      }
      
      .hero-section {
        padding: 60px 0 40px;
      }
      
      .newsletter input {
        margin-bottom: 15px;
      }
      
      .process-step {
        padding-left: 50px;
        margin-bottom: 30px;
      }
      
      .process-step::before {
        width: 30px;
        height: 30px;
        left: 15px;
      }
      
      .process-step::after {
        left: 30px;
      }
      
      .feature-list li {
        flex-direction: column;
        align-items: flex-start !important;
      }
      
      .badge {
        margin-top: 5px;
      }
    }
    
    /* Particles Background */
    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      overflow: hidden;
    }
    
    .particle {
      position: absolute;
      background: var(--accent-color);
      opacity: 0.1;
      border-radius: 50%;
      animation: float 15s infinite linear;
    }
    
    /* Floating Shapes */
    .floating-shape {
      position: absolute;
      opacity: 0.05;
      z-index: 0;
    }
    
    .shape-1 {
      top: 20%;
      left: 10%;
      width: 100px;
      height: 100px;
      background: var(--accent-color);
      border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
      animation: float 8s ease-in-out infinite;
    }
    
    .shape-2 {
      bottom: 30%;
      right: 15%;
      width: 150px;
      height: 150px;
      background: var(--primary-color);
      border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
      animation: float 10s ease-in-out infinite;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <div class="hero-section">
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 hero-content">
          <h1 class="display-5 fw-bold mb-4 animate__animated animate__fadeInDown">Import Export <span class="highlight">Code</span></h1>
          <p class="lead mb-4 animate__animated animate__fadeInDown animate__delay-1s">Start your global trade journey for just <strong class="highlight">Rs 4000/-</strong></p>
          <div class="d-flex align-items-center animate__animated animate__fadeInDown animate__delay-2s">
            <button class="btn btn-custom me-3 pulse">GET STARTED <i class="bi bi-arrow-right ms-2"></i></button>
            <a href="#process" class="btn btn-outline-primary">Learn More</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Import Export" class="img-fluid floating animate__animated animate__fadeIn">
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <!-- Features Grid -->
    <div class="row g-4 my-5">
      <div class="col-md-3">
        <div class="box animate__animated">
          <i class="bi bi-file-earmark-text card-icon"></i>
          <h5>Documents Required</h5>
          <p class="small">PAN, Aadhaar, Photo, Cancelled Cheque</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box animate__animated">
          <i class="bi bi-clock-history card-icon"></i>
          <h5>Processing Time</h5>
          <p class="small">3-5 Working Days</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box animate__animated">
          <i class="bi bi-cash-coin card-icon"></i>
          <h5>Affordable Pricing</h5>
          <p class="small">Total Cost: ₹4000/-</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box animate__animated">
          <i class="bi bi-headset card-icon"></i>
          <h5>Expert Support</h5>
          <p class="small">Dedicated assistance</p>
        </div>
      </div>
    </div>

    <!-- Time and Cost -->
    <div class="row my-5">
      <div class="col-lg-6">
        <h2 class="section-title animate__animated animate__fadeInDown">TIME AND COST Import Export</h2>
        <div class="card border-0 shadow-sm animate__animated animate__fadeIn">
          <div class="card-body">
            <div class="pricing-card">
              <ul class="feature-list">
                <li class="d-flex justify-content-between align-items-center py-2">
                  <span>Government Fee:</span>
                  <span class="badge bg-primary rounded-pill">₹500/-</span>
                </li>
                <li class="d-flex justify-content-between align-items-center py-2">
                  <span>Digital Signature Certificate (DSC):</span>
                  <span class="badge bg-primary rounded-pill">₹1500/-</span>
                </li>
                <li class="d-flex justify-content-between align-items-center py-2">
                  <span>Professional Fee (Inclusive of Taxes):</span>
                  <span class="badge bg-primary rounded-pill">₹2000/-</span>
                </li>
                <li class="d-flex justify-content-between align-items-center py-3 mt-3 border-top">
                  <span class="fw-bold fs-5">TOTAL:</span>
                  <span class="badge bg-accent rounded-pill fs-5">₹4000/-</span>
                </li>
              </ul>
              <button class="btn btn-custom mt-4 w-100 pulse">Apply Now <i class="bi bi-arrow-right ms-2"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h2 class="section-title animate__animated animate__fadeInDown">Why IEC Required</h2>
        <div class="card border-0 shadow-sm animate__animated animate__fadeIn">
          <div class="card-body">
            <div class="info-content">
              <p class="highlight-text">While the majority of goods are freely importable, the Exim Policy (2007) of India prohibits import of certain categories of products as well as conditional import on certain items.</p>
              
              <div class="info-point mt-4">
                <h5 class="info-heading"><i class="bi bi-check-circle-fill text-accent me-2"></i> Import License Issuing Authority</h5>
                <p>In India, Import License is issued by the Director General of Foreign Trade (DGFT). The DGFT Delhi office is situated in Udyog Bhawan, New Delhi 110011.</p>
              </div>
              
              <div class="info-point mt-4">
                <h5 class="info-heading"><i class="bi bi-check-circle-fill text-accent me-2"></i> Validity of Import License</h5>
                <p>Import Licenses are valid for 24 months for capital goods and 18 months for raw materials components, consumables and spares, with the license term renewable.</p>
              </div>
              
              <div class="info-point mt-4">
                <h5 class="info-heading"><i class="bi bi-check-circle-fill text-accent me-2"></i> Sample of Import License</h5>
                <p>A typical sample of import license consists of two copies:</p>
                <ul class="feature-list mt-2">
                  <li><strong>Foreign Exchange Control Copy:</strong> For effecting remittance to foreign seller or opening letter of credit</li>
                  <li><strong>Customs Copy:</strong> For presenting to Customs authority to clear goods (without this, imports may be declared unauthorized)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Application Process -->
    <h2 class="section-title" id="process">How to Apply for IEC</h2>
    <div class="row g-4 my-4">
      <div class="col-md-6">
        <div class="process-step animate__animated" data-step="1">
          <h5>Document Collection</h5>
          <p>We collect all necessary documents from you including PAN, Aadhaar, and bank details.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="process-step animate__animated" data-step="2">
          <h5>DSC Application</h5>
          <p>We apply for your Digital Signature Certificate which is mandatory for IEC registration.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="process-step animate__animated" data-step="3">
          <h5>Form Submission</h5>
          <p>We complete and submit the IEC application form on the DGFT portal on your behalf.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="process-step animate__animated" data-step="4">
          <h5>IEC Approval</h5>
          <p>Once approved, we deliver your Import Export Code certificate directly to you.</p>
        </div>
      </div>
    </div>

    <!-- Documents Required -->
    <h2 class="section-title">Documents Required</h2>
    <div class="row g-4 my-4">
      <div class="col-md-6">
        <div class="card border-0 shadow-sm h-100 animate__animated">
          <div class="card-body">
            <h5><i class="bi bi-person-badge me-2"></i> For Individuals</h5>
            <ul class="feature-list mt-3">
              <li>PAN Card (Copy)</li>
              <li>AADHAAR Card (Copy)</li>
              <li>Passport Size Photo</li>
              <li>Cancelled Cheque</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0 shadow-sm h-100 animate__animated">
          <div class="card-body">
            <h5><i class="bi bi-building me-2"></i> For Companies</h5>
            <ul class="feature-list mt-3">
              <li>Company PAN Card</li>
              <li>Certificate of Incorporation</li>
              <li>MOA & AOA</li>
              <li>Bank Statement/Cancelled Cheque</li>
              <li>Director's PAN & Aadhaar</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Newsletter -->
  <div class="container">
    <div class="newsletter animate__animated animate__fadeIn">
      <div class="container text-center">
        <h5>Join Our Newsletter</h5>
        <p class="mb-4">Stay updated with the latest news and updates about import/export regulations and tax filings</p>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="input-group">
              <input type="email" placeholder="Enter your email" class="form-control"/>
              <button class="btn">Subscribe <i class="bi bi-envelope-arrow-up ms-2"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQ Section -->
  <div class="container my-5">
    <h2 class="section-title">Frequently Asked Questions</h2>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item border-0 shadow-sm mb-3 animate__animated">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            <i class="bi bi-question-circle me-2"></i> What is the validity of an IEC code?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The IEC code has lifetime validity and doesn't require renewal. However, if there are any changes in your business details, you need to update them with DGFT.
          </div>
        </div>
      </div>
      <div class="accordion-item border-0 shadow-sm mb-3 animate__animated">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            <i class="bi bi-question-circle me-2"></i> Can one person have multiple IEC codes?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            No, one person or entity can have only one IEC code. However, if you have multiple businesses with different PANs, each can have its own IEC code.
          </div>
        </div>
      </div>
      <div class="accordion-item border-0 shadow-sm mb-3 animate__animated">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
            <i class="bi bi-question-circle me-2"></i> Is physical verification required for IEC?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Generally, no physical verification is required. The process is completely online. However, DGFT may conduct verification if they find any discrepancies in your application.
          </div>
        </div>
      </div>
      <div class="accordion-item border-0 shadow-sm mb-3 animate__animated">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
            <i class="bi bi-question-circle me-2"></i> How long does it take to get IEC code?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Typically, it takes 3-5 working days to get your IEC code after submitting all required documents. The process may take longer if there are issues with your application.
          </div>
        </div>
      </div>
    </div>
  </div>

 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Enhanced animation trigger with staggered delays
    document.addEventListener('DOMContentLoaded', function() {
      const animateElements = document.querySelectorAll('.animate__animated');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
          if (entry.isIntersecting) {
            // Add staggered delay based on index
            const delay = (index % 4) * 200;
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

      // Create floating particles
      const heroSection = document.querySelector('.hero-section');
      for (let i = 0; i < 15; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        
        // Random size between 5 and 15px
        const size = Math.random() * 10 + 5;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        
        // Random position
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.top = `${Math.random() * 100}%`;
        
        // Random animation duration
        const duration = Math.random() * 20 + 10;
        particle.style.animationDuration = `${duration}s`;
        
        // Random delay
        particle.style.animationDelay = `${Math.random() * 5}s`;
        
        heroSection.appendChild(particle);
      }
      
      // Add click effect to buttons
      const buttons = document.querySelectorAll('.btn-custom, .btn');
      buttons.forEach(button => {
        button.addEventListener('click', function(e) {
          const x = e.clientX - e.target.getBoundingClientRect().left;
          const y = e.clientY - e.target.getBoundingClientRect().top;
          
          const ripple = document.createElement('span');
          ripple.classList.add('ripple-effect');
          ripple.style.left = `${x}px`;
          ripple.style.top = `${y}px`;
          
          this.appendChild(ripple);
          
          setTimeout(() => {
            ripple.remove();
          }, 1000);
        });
      });
    });
  </script>
</body>
</html>