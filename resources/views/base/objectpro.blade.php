<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produce Company | TaxFilingHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #0066ff;
      --primary-glow: rgba(0, 102, 255, 0.4);
      --secondary: #004080;
      --accent: #ffcc00;
      --accent-glow: rgba(255, 204, 0, 0.4);
      --dark: #003366;
      --light: #f5f8fc;
      --neon-glow: 0 0 10px var(--primary-glow), 0 0 20px var(--primary-glow), 0 0 30px var(--primary-glow);
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light);
      color: #222;
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    /* Hero Section - Enhanced Glow Effects */
    .hero {
      background: linear-gradient(rgba(0, 51, 102, 0.9), rgba(0, 51, 102, 0.9)), 
                  url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat fixed;
      color: white;
      padding: 150px 20px;
      text-align: center;
      position: relative;
      overflow: hidden;
      box-shadow: inset 0 0 100px rgba(0,0,0,0.3);
    }

    .hero::before {
      content: '';
      position: absolute;
      bottom: -50px;
      left: 0;
      width: 100%;
      height: 100px;
      background: var(--light);
      transform: skewY(-3deg);
      z-index: 1;
      filter: drop-shadow(0 -10px 20px var(--primary-glow));
    }

    .hero h2 {
      font-weight: 800;
      font-size: 4rem;
      margin-bottom: 1rem;
      text-shadow: 0 0 10px rgba(255,255,255,0.3);
      animation: fadeInDown 1s ease, glowTitle 2s infinite alternate;
      letter-spacing: 1px;
    }

    @keyframes glowTitle {
      from { text-shadow: 0 0 10px rgba(255,255,255,0.3); }
      to { text-shadow: 0 0 20px rgba(255,255,255,0.6), 0 0 30px rgba(255,255,255,0.3); }
    }

    .hero p {
      font-size: 1.5rem;
      margin-bottom: 2rem;
      animation: fadeIn 1.5s ease;
      text-shadow: 0 0 5px rgba(0,0,0,0.3);
    }

    /* Glowing Highlight */
    .highlight {
      color: var(--accent);
      font-weight: 700;
      position: relative;
      display: inline-block;
      animation: pulseGlow 2s infinite alternate;
    }

    @keyframes pulseGlow {
      from { 
        text-shadow: 0 0 5px var(--accent-glow);
      }
      to { 
        text-shadow: 0 0 15px var(--accent-glow), 0 0 25px var(--accent-glow);
      }
    }

    /* Glowing Button */
    .btn-primary {
      background-color: var(--primary);
      border: none;
      font-weight: 600;
      padding: 15px 40px;
      border-radius: 50px;
      letter-spacing: 1px;
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 5px 20px var(--primary-glow);
      animation: fadeInUp 1s ease, btnGlow 2s infinite alternate;
      z-index: 1;
    }

    @keyframes btnGlow {
      from { box-shadow: 0 5px 20px var(--primary-glow); }
      to { box-shadow: 0 5px 30px var(--primary-glow), 0 5px 40px var(--primary-glow); }
    }

    .btn-primary:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 10px 30px var(--primary-glow);
    }

    .btn-primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, 
                  transparent, 
                  rgba(255,255,255,0.2), 
                  transparent);
      transform: translateX(-100%);
      transition: 0.5s;
      z-index: -1;
    }

    .btn-primary:hover::before {
      transform: translateX(100%);
    }

    /* Navigation Buttons - Glowing Hover */
    .grid-buttons {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 2rem;
      margin: 60px 0;
      justify-items: center;
    }

    .grid-buttons .btn {
      background-color: rgba(0,0,0,0.8);
      color: white;
      padding: 20px;
      border-radius: 12px;
      font-weight: 600;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      width: 100%;
      position: relative;
      overflow: hidden;
      border: none;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1;
      backdrop-filter: blur(5px);
      border: 1px solid rgba(255,255,255,0.1);
    }

    .grid-buttons .btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, 
                  transparent, 
                  rgba(255,255,255,0.1), 
                  transparent);
      transform: translateX(-100%);
      transition: 0.5s;
      z-index: -1;
    }

    .grid-buttons .btn:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 15px 30px rgba(0,0,0,0.3);
    }

    .grid-buttons .btn:hover::before {
      transform: translateX(100%);
    }

    .grid-buttons .btn i {
      margin-right: 12px;
      font-size: 1.3rem;
    }

    /* Gradient Backgrounds for Navigation Buttons */
    .grid-buttons .btn:nth-child(1) { 
      background: linear-gradient(135deg, rgba(52, 152, 219, 0.8), rgba(44, 62, 80, 0.8));
      box-shadow: 0 5px 20px rgba(52, 152, 219, 0.3);
    }
    .grid-buttons .btn:nth-child(2) { 
      background: linear-gradient(135deg, rgba(231, 76, 60, 0.8), rgba(192, 57, 43, 0.8));
      box-shadow: 0 5px 20px rgba(231, 76, 60, 0.3);
    }
    .grid-buttons .btn:nth-child(3) { 
      background: linear-gradient(135deg, rgba(46, 204, 113, 0.8), rgba(39, 174, 96, 0.8));
      box-shadow: 0 5px 20px rgba(46, 204, 113, 0.3);
    }
    .grid-buttons .btn:nth-child(4) { 
      background: linear-gradient(135deg, rgba(155, 89, 182, 0.8), rgba(142, 68, 173, 0.8));
      box-shadow: 0 5px 20px rgba(155, 89, 182, 0.3);
    }

    /* Section Titles with Glow */
    .section-title {
      font-size: 2.8rem;
      font-weight: 800;
      color: var(--secondary);
      margin: 100px 0 40px;
      text-align: center;
      position: relative;
      display: inline-block;
      left: 50%;
      transform: translateX(-50%);
      text-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 5px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border-radius: 5px;
      box-shadow: 0 0 15px var(--primary-glow);
    }

    /* Glowing Info Boxes */
    .info-box {
      background: white;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.1);
      margin: 40px 0;
      padding: 40px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-left: 6px solid var(--primary);
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .info-box::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(0,102,255,0.05) 0%, rgba(0,102,255,0) 100%);
      z-index: -1;
    }

    .info-box::after {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, var(--primary), var(--accent));
      z-index: -2;
      filter: blur(20px);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .info-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    }

    .info-box:hover::after {
      opacity: 0.3;
    }

    .info-box h5, .info-box h6 {
      color: var(--secondary);
      font-weight: 700;
      margin-bottom: 25px;
      position: relative;
      display: inline-block;
    }

    .info-box h5::after, .info-box h6::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 50px;
      height: 3px;
      background: var(--primary);
      border-radius: 3px;
    }

    /* Glowing List Items */
    .info-box ul {
      list-style: none;
      padding-left: 0;
      position: relative;
    }

    .info-box ul li {
      padding: 12px 0 12px 40px;
      position: relative;
      border-bottom: 1px dashed #eee;
      transition: all 0.3s ease;
    }

    .info-box ul li:hover {
      transform: translateX(10px);
      color: var(--primary);
    }

    .info-box ul li::before {
      content: '✓';
      position: absolute;
      left: 0;
      color: var(--primary);
      font-weight: bold;
      font-size: 1.2rem;
      text-shadow: 0 0 5px var(--primary-glow);
    }

    /* Pricing Card with Neon Glow */
    .pricing-card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 20px 50px rgba(0,0,0,0.15);
      padding: 50px;
      margin: 60px auto;
      max-width: 900px;
      text-align: center;
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(0,0,0,0.05);
      z-index: 1;
    }

    .pricing-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
    }

    .pricing-card::after {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, var(--primary), var(--accent));
      z-index: -1;
      filter: blur(30px);
      opacity: 0.3;
      animation: pulseGlow 3s infinite alternate;
    }

    .pricing-card h3 {
      color: var(--secondary);
      font-weight: 800;
      margin-bottom: 25px;
      font-size: 2rem;
    }

    .price-tag {
      font-size: 4.5rem;
      font-weight: 800;
      color: var(--primary);
      margin: 30px 0;
      position: relative;
      display: inline-block;
      text-shadow: 0 0 10px var(--primary-glow);
      animation: pulse 2s infinite alternate;
    }

    .price-tag::after {
      content: 'all inclusive';
      position: absolute;
      bottom: -25px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 1.2rem;
      color: #777;
      font-weight: normal;
      text-shadow: none;
    }

    /* Glowing Timeline */
    .timeline {
      position: relative;
      max-width: 900px;
      margin: 60px auto;
    }

    .timeline::before {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 6px;
      height: 100%;
      background: linear-gradient(to bottom, var(--primary), var(--accent));
      box-shadow: var(--neon-glow);
      border-radius: 10px;
    }

    .timeline-item {
      padding: 30px 50px;
      position: relative;
      width: 50%;
      box-sizing: border-box;
      margin-bottom: 40px;
    }

    .timeline-content {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      position: relative;
      transition: all 0.3s ease;
      border: 1px solid rgba(0,0,0,0.05);
    }

    .timeline-content:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.15), 0 0 20px var(--primary-glow);
    }

    .timeline-dot {
      position: absolute;
      top: 40px;
      right: -18px;
      width: 36px;
      height: 36px;
      background: var(--accent);
      border-radius: 50%;
      border: 6px solid var(--primary);
      z-index: 1;
      box-shadow: 0 0 15px var(--accent-glow);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--dark);
      font-weight: bold;
    }

    /* Glowing Swiper */
    .swiper-container {
      position: relative;
      width: 100%;
      height: 600px;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(0,0,0,0.3);
      margin: 80px 0;
      border: 2px solid rgba(255,255,255,0.2);
    }

    .swiper-slide {
      position: relative;
    }

    .swiper-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .swiper-slide:hover img {
      transform: scale(1.05);
    }

    .swiper-slide-content {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 40px;
      background: linear-gradient(transparent, rgba(0,0,0,0.9));
      color: white;
      z-index: 1;
    }

    .swiper-slide-content h3 {
      font-size: 2rem;
      margin-bottom: 10px;
      text-shadow: 0 0 10px rgba(0,0,0,0.5);
    }

    .swiper-pagination-bullet {
      background: white;
      opacity: 0.6;
      width: 15px;
      height: 15px;
      margin: 0 10px !important;
      transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      background: var(--accent);
      opacity: 1;
      transform: scale(1.3);
      box-shadow: 0 0 10px var(--accent-glow);
    }

    /* Glowing Document Cards */
    .document-card {
      display: flex;
      align-items: center;
      padding: 15px;
      margin-bottom: 20px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      border: 1px solid rgba(0,0,0,0.05);
      position: relative;
      overflow: hidden;
    }

    .document-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1), 0 0 15px rgba(0,102,255,0.2);
    }

    .document-card i {
      font-size: 1.5rem;
      margin-right: 15px;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0,102,255,0.1);
      border-radius: 50%;
      color: var(--primary);
    }

    /* Glowing CTA Section */
    .cta-section {
      position: relative;
      padding: 80px 0;
      margin: 100px 0;
      overflow: hidden;
    }

    .cta-box {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      border-radius: 20px;
      padding: 60px;
      text-align: center;
      position: relative;
      z-index: 1;
      box-shadow: 0 20px 50px rgba(0,102,255,0.3);
      transition: all 0.3s ease;
      overflow: hidden;
    }

    .cta-box::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
      transform: rotate(45deg);
      z-index: -1;
      animation: shine 3s infinite;
    }

    @keyframes shine {
      0% { transform: translateX(-100%) rotate(45deg); }
      100% { transform: translateX(100%) rotate(45deg); }
    }

    .cta-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 30px 60px rgba(0,102,255,0.4);
    }

    .cta-box h3 {
      color: white;
      font-size: 2.5rem;
      margin-bottom: 20px;
      text-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    .cta-box p {
      color: rgba(255,255,255,0.8);
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto 30px;
    }

    .cta-btn {
      background: white;
      color: var(--primary);
      font-weight: 700;
      padding: 15px 40px;
      border-radius: 50px;
      display: inline-block;
      transition: all 0.3s ease;
      box-shadow: 0 5px 20px rgba(0,0,0,0.2);
      position: relative;
      overflow: hidden;
    }

    .cta-btn:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
      color: var(--secondary);
    }

    /* Glowing Footer */
    .footer {
      background: linear-gradient(135deg, var(--dark), #001a33);
      color: white;
      padding: 80px 20px;
      text-align: center;
      position: relative;
      margin-top: 150px;
      overflow: hidden;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: -50px;
      left: 0;
      width: 100%;
      height: 100px;
      background: var(--light);
      transform: skewY(-3deg);
      z-index: 1;
      filter: drop-shadow(0 -10px 20px var(--primary-glow));
    }

    .footer::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://www.transparenttextures.com/patterns/dark-stripes.png');
      opacity: 0.05;
      z-index: 0;
    }

    .footer-content {
      position: relative;
      z-index: 1;
    }

    .footer h5 {
      font-size: 2rem;
      margin-bottom: 25px;
      position: relative;
      display: inline-block;
    }

    .footer h5::after {
      content: '';
      position: absolute;
      bottom: -12px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: var(--accent);
      border-radius: 2px;
      box-shadow: 0 0 10px var(--accent-glow);
    }

    .newsletter-form {
      display: flex;
      max-width: 600px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .newsletter-form input {
      flex: 1;
      padding: 18px 25px;
      border: none;
      border-radius: 50px 0 0 50px;
      font-size: 1.1rem;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .newsletter-form button {
      padding: 0 40px;
      border-radius: 0 50px 50px 0;
      background: var(--accent);
      color: var(--dark);
      font-weight: 700;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      font-size: 1.1rem;
    }

    .newsletter-form button:hover {
      background: #ffd633;
      transform: scale(1.05);
    }

    /* Floating Particles Background */
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
      background: rgba(255,255,255,0.5);
      border-radius: 50%;
      filter: blur(2px);
      animation: float linear infinite;
    }

    @keyframes float {
      0% { transform: translateY(0) translateX(0); opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { transform: translateY(-100vh) translateX(100px); opacity: 0; }
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
      .hero h2 {
        font-size: 3rem;
      }
      
      .section-title {
        font-size: 2.3rem;
      }
      
      .price-tag {
        font-size: 3.5rem;
      }
      
      .swiper-container {
        height: 450px;
      }
    }

    @media (max-width: 768px) {
      .hero {
        padding: 100px 20px;
      }
      
      .hero h2 {
        font-size: 2.5rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .timeline::before {
        left: 31px;
      }
      
      .timeline-item {
        width: 100%;
        padding-left: 80px;
        padding-right: 30px;
      }
      
      .timeline-item:nth-child(even) {
        left: 0;
      }
      
      .timeline-dot {
        left: 25px !important;
        right: auto !important;
      }
      
      .swiper-container {
        height: 350px;
        margin: 50px 0;
      }
      
      .cta-box {
        padding: 40px 20px;
      }
      
      .cta-box h3 {
        font-size: 2rem;
      }
    }

    @media (max-width: 576px) {
      .grid-buttons {
        grid-template-columns: 1fr;
      }
      
      .pricing-card {
        padding: 30px 20px;
      }
      
      .price-tag {
        font-size: 2.8rem;
      }
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <div class="hero">
    <div class="particles" id="particles-js"></div>
    <div class="container">
      <h2 class="animate__animated animate__fadeInDown">Produce Company </h2>
      <p class="animate__animated animate__fadeIn animate__delay-1s">Start your business with <span class="highlight">complete legal protection</span></p>
      <p class="animate__animated animate__fadeIn animate__delay-2s">Only <span class="highlight">₹19,499/-</span> all inclusive</p>
      <a href="#cost" class="btn btn-primary animate__animated animate__fadeInUp animate__delay-3s">
        <i class="fas fa-rocket me-2"></i> Get Started Now
      </a>
      
      <div class="mt-5 pt-5">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="pricing-card animate__animated animate__zoomIn animate__delay-1s">
              <h3>Complete LLP Registration Package</h3>
              <div class="price-tag">₹19,499</div>
              <p class="mb-4">Everything you need to legally establish your Product with zero hassle</p>
              <a href="#cost" class="btn btn-primary">
                <i class="fas fa-rupee-sign me-2"></i> See Detailed Breakdown
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation Buttons -->
  <div class="container">
    <div class="grid-buttons">
      <a href="#requirement" class="btn animate__animated animate__fadeInLeft">
        <i class="fas fa-clipboard-check me-2"></i> Requirements
      </a>
      <a href="#compliance" class="btn animate__animated animate__fadeInLeft animate__delay-1s">
        <i class="fas fa-file-contract me-2"></i> Compliances
      </a>
      <a href="#documents" class="btn animate__animated animate__fadeInLeft animate__delay-2s">
        <i class="fas fa-file-alt me-2"></i> Documents
      </a>
      <a href="#cost" class="btn animate__animated animate__fadeInLeft animate__delay-3s">
        <i class="fas fa-clock me-2"></i> Cost & Time
      </a>
    </div>
  </div>

  <!-- Image Slider -->
  <div class="container">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Business Team">
          <div class="swiper-slide-content">
            <h3>Professional Partnership Solutions</h3>
            <p>LLP provides the perfect structure for professional collaborations with legal protection</p>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Business Meeting">
          <div class="swiper-slide-content">
            <h3>Limited Liability Protection</h3>
            <p>Shield your personal assets from business liabilities and risks</p>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="Teamwork">
          <div class="swiper-slide-content">
            <h3>Flexible Management Structure</h3>
            <p>Operate with partnership flexibility while enjoying corporate benefits</p>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Main Content Sections -->
  <div class="container">
    <!-- Cost Section -->
    <h3 class="section-title" id="cost">Time and Cost for Incorporation</h3>
    <div class="info-box animate__animated animate__fadeInRight">
      <div class="row">
        <div class="col-lg-6">
          <h5><i class="fas fa-clock me-2"></i> Timeline:</h5>
          <div class="timeline">
            <div class="timeline-item">
              <div class="timeline-dot">1</div>
              <div class="timeline-content">
                <h6>Day 1</h6>
                <p>Name Approval Process Completed</p>
                <p class="text-muted small mt-2">We handle all paperwork for instant approval</p>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot">2</div>
              <div class="timeline-content">
                <h6>Day 2-3</h6>
                <p>Stamp Duty Processing</p>
                <p class="text-muted small mt-2">Digital stamping for fastest processing</p>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot">3</div>
              <div class="timeline-content">
                <h6>Within 15 Days</h6>
                <p>Overall Approval & Registration</p>
                <p class="text-muted small mt-2">Certificate delivered to your doorstep</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <h5><i class="fas fa-receipt me-2"></i> Cost Breakdown:</h5>
          <ul>
            <li><strong>Authorized Capital:</strong> ₹10,00,000/-</li>
            <li><strong>Name Approval:</strong> ₹1000/- (government fee)</li>
            <li><strong>Two Digital Signatures:</strong> ₹1500/- (DSC tokens)</li>
            <li><strong>Stamp Duty Cost:</strong> ₹1000/- (state charges)</li>
            <li><strong>Professional Fee:</strong> ₹16,999/- (our service charge)</li>
            <li class="mt-4 pt-3 border-top">
              <h4 class="text-primary">Total: ₹19,499/- <span class="text-muted small">all inclusive</span></h4>
            </li>
          </ul>
          
          <div class="alert alert-primary mt-4">
            <i class="fas fa-gift me-2"></i> <strong>Special Offer:</strong> Free first-year compliance checklist worth ₹3000 with every registration!
          </div>
        </div>
      </div>
    </div>

    <!-- Requirements Section -->
    <h3 class="section-title" id="requirement">Requirement for Registration</h3>
    <div class="info-box animate__animated animate__fadeInLeft">
      <p class="lead">LLP Registration is ideal for small businesses and professionals due to its simplicity, flexibility, and low compliance requirements while offering the benefit of limited liability protection.</p>
      
      <div class="row mt-5">
        <div class="col-md-6 mb-4">
          <div class="card h-100 border-0 shadow-lg">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box bg-primary text-white rounded-circle me-3">
                  <i class="fas fa-user-tie fa-lg"></i>
                </div>
                <h5 class="mb-0">Minimum Requirements</h5>
              </div>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check text-primary"></i></span>Minimum 2 Partners (individuals or companies)</li>
                <li><span class="fa-li"><i class="fas fa-check text-primary"></i></span>No minimum capital requirement</li>
                <li><span class="fa-li"><i class="fas fa-check text-primary"></i></span>At least 1 Indian resident partner</li>
                <li><span class="fa-li"><i class="fas fa-check text-primary"></i></span>No restriction on maximum number of partners</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card h-100 border-0 shadow-lg">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <div class="icon-box bg-warning text-white rounded-circle me-3">
                  <i class="fas fa-star fa-lg"></i>
                </div>
                <h5 class="mb-0">Key Benefits</h5>
              </div>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fas fa-check text-warning"></i></span>Limited liability protection for partners</li>
                <li><span class="fa-li"><i class="fas fa-check text-warning"></i></span>Flexible management structure</li>
                <li><span class="fa-li"><i class="fas fa-check text-warning"></i></span>Tax advantages over companies</li>
                <li><span class="fa-li"><i class="fas fa-check text-warning"></i></span>Lower compliance than private limited</li>
                <li><span class="fa-li"><i class="fas fa-check text-warning"></i></span>Easy transferability of ownership</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mt-4 text-center">
        <a href="#" class="btn btn-outline-primary btn-lg">
          <i class="fas fa-link me-2"></i> Choose Your LLP Name Now
        </a>
      </div>
    </div>

    <!-- Compliance Section -->
    <h3 class="section-title" id="compliance">Mandatory Compliances</h3>
    <div class="info-box animate__animated animate__fadeInRight">
      <div class="alert alert-warning alert-glow">
        <i class="fas fa-exclamation-triangle me-2"></i> <strong>Important:</strong> These annual compliances must be filed to maintain your LLP's active status
      </div>
      
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="compliance-card glow-hover">
            <div class="d-flex align-items-start">
              <div class="compliance-badge bg-primary me-3">1</div>
              <div>
                <h6>Annual Return (Form 11)</h6>
                <p class="mb-2">Due within 60 days of financial year end (May 30th)</p>
                <p class="text-muted small">Contains details of partners and LLP</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="compliance-card glow-hover">
            <div class="d-flex align-items-start">
              <div class="compliance-badge bg-primary me-3">2</div>
              <div>
                <h6>Statement of Account & Solvency (Form 8)</h6>
                <p class="mb-2">Due on or before October 30th every year</p>
                <p class="text-muted small">Includes financial statements and solvency declaration</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="mt-5 p-4 bg-light rounded glow-hover">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <i class="fas fa-lightbulb text-warning fa-2x me-3"></i>
          </div>
          <div>
            <h5 class="text-warning">Pro Tip</h5>
            <p class="mb-0">Consider our <a href="#" class="text-primary fw-bold">Annual Compliance Package</a> to handle all these requirements seamlessly. We'll remind you of deadlines and file everything for you!</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Documents Section -->
    <h3 class="section-title" id="documents">Documents Required</h3>
    <div class="info-box animate__animated animate__fadeInLeft">
      <div class="row">
        <div class="col-lg-6">
          <h5><i class="fas fa-user-circle me-2"></i> For Partners:</h5>
          <div class="row">
            <div class="col-sm-6 mb-3">
              <div class="document-card glow-hover">
                <i class="fas fa-id-card text-primary fa-lg"></i>
                <div>
                  <h6 class="mb-0">PAN Card</h6>
                  <p class="small text-muted mb-0">Copy of permanent account number</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <div class="document-card glow-hover">
                <i class="fas fa-address-card text-primary fa-lg"></i>
                <div>
                  <h6 class="mb-0">Aadhar Card</h6>
                  <p class="small text-muted mb-0">Identity proof with address</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <div class="document-card glow-hover">
                <i class="fas fa-id-badge text-primary fa-lg"></i>
                <div>
                  <h6 class="mb-0">Voter ID/Passport</h6>
                  <p class="small text-muted mb-0">Alternative identity proof</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <div class="document-card glow-hover">
                <i class="fas fa-camera text-primary fa-lg"></i>
                <div>
                  <h6 class="mb-0">Passport Photo</h6>
                  <p class="small text-muted mb-0">Recent white background</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <div class="document-card glow-hover">
                <i class="fas fa-certificate text-primary fa-lg"></i>
                <div>
                  <h6 class="mb-0">DIN (if any)</h6>
                  <p class="small text-muted mb-0">Director identification number</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-3">
              <div class="document-card glow-hover">
                <i class="fas fa-signature text-primary fa-lg"></i>
                <div>
                  <h6 class="mb-0">Digital Signature</h6>
                  <p class="small text-muted mb-0">Class 2 or Class 3 DSC</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <h5><i class="fas fa-building me-2"></i> For Registered Office:</h5>
          <div class="card bg-light border-0 shadow-sm h-100 glow-hover">
            <div class="card-body">
              <div class="mb-4">
                <h6><i class="fas fa-home text-primary me-2"></i> Rented Property:</h6>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Notarized Rent Agreement</li>
                  <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Latest Utility Bill (electricity/water)</li>
                  <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>NOC from Owner (format provided)</li>
                </ul>
              </div>
              
              <div>
                <h6><i class="fas fa-key text-primary me-2"></i> Owned Property:</h6>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Latest Utility Bill (electricity/water)</li>
                  <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>NOC if co-owned (format provided)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA Section -->
  <div class="cta-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="cta-box">
            <h3>Ready to Register Your Product Company?</h3>
            <p>Get started today and enjoy the benefits of limited liability with flexible management structure. Our experts will handle everything from name approval to final registration.</p>
            <a href="#" class="cta-btn">
              <i class="fas fa-rocket me-2"></i> Start Registration Now
            </a>
            
            <div class="d-flex justify-content-center mt-4">
              <div class="me-4">
                <i class="fas fa-check-circle me-2"></i> 100% Online Process
              </div>
              <div class="me-4">
                <i class="fas fa-check-circle me-2"></i> Lowest Price Guarantee
              </div>
              <div>
                <i class="fas fa-check-circle me-2"></i> Expert Assistance
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="footer-content">
      <h5>Join Our Business Newsletter</h5>
      <p>Get regular updates on compliance changes, tax tips, and business growth strategies delivered to your inbox.</p>
      <form class="newsletter-form mt-4">
        <input type="email" placeholder="Enter your email address" required>
        <button type="submit">Subscribe <i class="fas fa-paper-plane ms-2"></i></button>
      </form>
      
      <div class="mt-5 pt-3">
        <div class="social-icons">
          <a href="#" class="text-white mx-3"><i class="fab fa-facebook-f fa-lg"></i></a>
          <a href="#" class="text-white mx-3"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="#" class="text-white mx-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
          <a href="#" class="text-white mx-3"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="#" class="text-white mx-3"><i class="fab fa-youtube fa-lg"></i></a>
        </div>
        <p class="text-white-50 mt-3">© 2023 TaxFilingHub. All rights reserved.</p>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
  
  <script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
    });
    
    // GSAP Animations
    gsap.registerPlugin(ScrollTrigger);
    
    // Animate timeline items
    gsap.utils.toArray('.timeline-item').forEach((item, i) => {
      gsap.from(item, {
        scrollTrigger: {
          trigger: item,
          start: "top 80%",
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        delay: i * 0.2,
        ease: "back.out(1.2)"
      });
    });
    
    // Animate info boxes
    gsap.utils.toArray('.info-box').forEach(box => {
      gsap.from(box, {
        scrollTrigger: {
          trigger: box,
          start: "top 70%",
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: "power2.out"
      });
    });
    
    // Animate document cards with stagger
    gsap.from('.document-card', {
      scrollTrigger: {
        trigger: '#documents',
        start: "top 70%",
      },
      y: 30,
      opacity: 0,
      scale: 0.9,
      duration: 0.6,
      stagger: 0.1,
      ease: "back.out(1.7)"
    });
    
    // Create floating particles
    function createParticles() {
      const particlesContainer = document.getElementById('particles-js');
      const particleCount = 30;
      
      for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        
        // Random size between 2px and 6px
        const size = Math.random() * 4 + 2;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        
        // Random position
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.bottom = `-${size}px`;
        
        // Random animation duration between 10s and 20s
        const duration = Math.random() * 10 + 10;
        particle.style.animationDuration = `${duration}s`;
        
        // Random delay
        particle.style.animationDelay = `${Math.random() * 10}s`;
        
        particlesContainer.appendChild(particle);
      }
    }
    
    // Initialize particles when DOM loads
    document.addEventListener('DOMContentLoaded', createParticles);
    
    // Add ripple effect to buttons
    document.querySelectorAll('.btn').forEach(button => {
      button.addEventListener('click', function(e) {
        let x = e.clientX - e.target.getBoundingClientRect().left;
        let y = e.clientY - e.target.getBoundingClientRect().top;
        
        let ripple = document.createElement('span');
        ripple.classList.add('ripple');
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;
        this.appendChild(ripple);
        
        setTimeout(() => {
          ripple.remove();
        }, 1000);
      });
    });
  </script>
  
  <style>
    /* Additional styles for enhanced elements */
    .icon-box {
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .compliance-card {
      background: white;
      padding: 25px;
      border-radius: 15px;
      margin-bottom: 20px;
      border-left: 5px solid var(--primary);
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    
    .compliance-badge {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      font-size: 1.2rem;
      flex-shrink: 0;
    }
    
    .glow-hover {
      transition: all 0.3s ease;
    }
    
    .glow-hover:hover {
      box-shadow: 0 5px 25px rgba(0,102,255,0.2) !important;
      transform: translateY(-5px) !important;
    }
    
    .alert-glow {
      animation: pulseGlowBox 2s infinite alternate;
    }
    
    @keyframes pulseGlowBox {
      from { box-shadow: 0 0 5px rgba(255,193,7,0.3); }
      to { box-shadow: 0 0 15px rgba(255,193,7,0.5); }
    }
    
    .ripple {
      position: absolute;
      border-radius: 50%;
      transform: scale(0);
      animation: ripple 0.6s linear;
      background-color: rgba(255, 255, 255, 0.4);
      pointer-events: none;
    }
    
    @keyframes ripple {
      to {
        transform: scale(4);
        opacity: 0;
      }
    }
    
    .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      transition: all 0.3s ease;
    }
    
    .social-icons a:hover {
      background: var(--accent);
      color: var(--dark) !important;
      transform: translateY(-3px);
    }
    
    .lead {
      font-size: 1.2rem;
      line-height: 1.7;
    }
    
    .shadow-lg {
      box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }
  </style>
</body>
</html>