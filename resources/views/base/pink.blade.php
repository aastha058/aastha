<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Public Limited Company | TaxFilingHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-blue: #1a73e8;
      --dark-blue: #0d47a1;
      --accent-orange: #ff6d00;
      --light-orange: #ff9e40;
      --light-bg: #f8f9fa;
      --dark-text: #212529;
      --gradient-blue: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
      --gradient-orange: linear-gradient(135deg, var(--accent-orange), var(--light-orange));
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-bg);
      color: var(--dark-text);
      position: relative;
      overflow-x: hidden;
    }

    /* Background Pattern */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      opacity: 0.05;
      z-index: -1;
    }

    /* Hero Section with Animated Gradient */
    





    /* Info Cards with 3D Effect */
    .info-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      margin-bottom: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      height: 100%;
      position: relative;
      overflow: hidden;
      border: none;
    }

    .info-card::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: var(--gradient-orange);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
    }

    .info-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    .info-card:hover::before {
      transform: scaleX(1);
    }

    .info-card i {
      font-size: 2.5rem;
      color: var(--primary-blue);
      margin-bottom: 20px;
      display: inline-block;
    }

    .info-card h5 {
      font-weight: 600;
      color: var(--dark-text);
      margin-bottom: 15px;
    }

    /* Section Styling */
    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 30px;
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
      background: var(--gradient-orange);
      border-radius: 2px;
      animation: underlineGrow 1.5s ease-in-out infinite alternate;
    }

    @keyframes underlineGrow {
      0% { width: 60px; }
      100% { width: 100px; }
    }

    /* Feature Cards with Image */
    .feature-card {
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      transition: all 0.4s ease;
      margin-bottom: 30px;
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .feature-card img {
      width: 100%;
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
      font-weight: 600;
      color: var(--primary-blue);
    }

    /* Animated List */
    .animated-list li {
      position: relative;
      padding-left: 30px;
      margin-bottom: 15px;
      opacity: 0;
      animation: fadeInUp 0.5s ease forwards;
    }

    .animated-list li::before {
      content: '\f00c';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      position: absolute;
      left: 0;
      color: var(--accent-orange);
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Pricing Highlight */
    .pricing-highlight {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      border-top: 5px solid var(--accent-orange);
    }

    .pricing-highlight .price {
      font-size: 3rem;
      font-weight: 700;
      color: var(--primary-blue);
      margin: 20px 0;
    }

    .pricing-highlight .price span {
      font-size: 1rem;
      color: var(--dark-text);
    }

    /* Footer with Wave */
    footer {
      background: var(--dark-text);
      color: white;
      padding: 80px 0 30px;
      position: relative;
    }

    .wave {
      position: absolute;
      top: -50px;
      left: 0;
      width: 100%;
      height: 50px;
      background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%23f8f9fa" opacity=".25"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" fill="%23f8f9fa" opacity=".5"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23f8f9fa"/></svg>');
      background-size: cover;
      animation: wave 10s linear infinite;
    }

    @keyframes wave {
      0% { background-position-x: 0; }
      100% { background-position-x: 1200px; }
    }

    /* Custom Button */
    .btn-custom {
      background: var(--gradient-orange);
      color: white;
      border: none;
      padding: 12px 30px;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn-custom:hover {
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(255,109,0,0.3);
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2.5rem;
      }
      
      .hero-section .lead {
        font-size: 1.2rem;
      }
      
      .section-title {
        font-size: 2rem;
      }


    }
  </style>
</head>

<body>
  <!-- Animated Hero Section -->
 <!-- Enhanced Hero Section with Live Animations -->
<section class="hero-section position-relative overflow-hidden">
  <!-- Animated Background Elements -->
  <div class="hero-animation-bg">
    <!-- Floating Documents -->
    <div class="floating-doc doc-1">
      <img src="https://cdn-icons-png.flaticon.com/512/2991/2991112.png" alt="Document" class="img-fluid">
    </div>
    <div class="floating-doc doc-2">
      <img src="https://cdn-icons-png.flaticon.com/512/1570/1570887.png" alt="Stamp" class="img-fluid">
    </div>
    <div class="floating-doc doc-3">
      <img src="https://cdn-icons-png.flaticon.com/512/3176/3176272.png" alt="Certificate" class="img-fluid">
    </div>
    
    <!-- Animated Gradient Background -->
    <div class="gradient-animation"></div>
  </div>
  
  <div class="container position-relative z-2">
    <h1 class="animate__animated animate__fadeInDown text-gradient">
      Public Limited Company 
      <span class="d-block typed-text" data-typed='["Registration", "Incorporation", "Compliance"]'></span>
    </h1>
    
    <p class="lead animate__animated animate__fadeIn animate__delay-1s" >
      Go public with your business and <span class="text-highlight">unlock growth opportunities</span>
    </p>
    
    <div class="d-flex flex-wrap justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-1s">
      <a href="#pricing" class="btn btn-light btn-lg px-4 py-3 btn-glow floating">
        <i class="fas fa-rupee-sign me-2"></i> Only <strong>₹15,799/-</strong>
        <span class="pulse-dot"></span>
      </a>
      <a href="#contact" class="btn btn-outline-light btn-lg px-4 py-3 btn-hover-grow">
        <i class="fas fa-phone-alt me-2"></i> Free Consultation
      </a>
    </div>
    

    
</section>

<style>
  /* Hero Section Styles */
  .hero-section {
    background: linear-gradient(135deg, #0d47a1, #1a73e8);
    color: white;
    padding: 120px 0 100px;
    text-align: center;
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
  
  /* Animated Background Elements */
  .hero-animation-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
  }
  
  .gradient-animation {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
      rgba(255,102,0,0.1) 0%, 
      rgba(255,153,51,0.05) 50%, 
      rgba(26,115,232,0.1) 100%);
    background-size: 200% 200%;
    animation: gradientMove 15s ease infinite;
  }
  
  @keyframes gradientMove {
    0% { background-position: 0% 0%; }
    50% { background-position: 100% 100%; }
    100% { background-position: 0% 0%; }
  }
  
  /* Floating Documents */
  .floating-doc {
    position: absolute;
    opacity: 0.15;
    filter: brightness(0) invert(1);
  }
  
  .doc-1 {
    top: 20%;
    left: 10%;
    width: 80px;
    animation: floatDoc 18s ease-in-out infinite;
  }
  
  .doc-2 {
    top: 60%;
    right: 15%;
    width: 70px;
    animation: floatDoc 15s ease-in-out infinite reverse;
  }
  
  .doc-3 {
    bottom: 20%;
    left: 20%;
    width: 60px;
    animation: floatDoc 12s ease-in-out infinite 2s;
  }
  
  @keyframes floatDoc {
    0% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-40px) rotate(5deg); }
    100% { transform: translateY(0) rotate(0deg); }
  }
  
  /* Text Effects */
  .text-gradient {
    background: linear-gradient(90deg, #ffffff, #f8f9fa);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    font-size: 3.5rem;
    font-weight: 800;
    margin-bottom: 20px;
  }
  
  .text-highlight {
    background: linear-gradient(transparent 60%, rgba(255,102,0,0.3) 40%);
    padding: 0 5px;
  }
  
  /* Button Effects */
  .btn-glow {
    position: relative;
    overflow: hidden;
    box-shadow: 0 0 15px rgba(255,255,255,0.5);
    transition: all 0.3s ease;
  }
  
  .btn-glow:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 25px rgba(255,255,255,0.8);
  }
  
  .pulse-dot {
    position: absolute;
    top: -5px;
    right: -5px;
    width: 15px;
    height: 15px;
    background: #ff6600;
    border-radius: 50%;
    animation: pulse 2s infinite;
  }
  
  @keyframes pulse {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255,102,0,0.7); }
    70% { transform: scale(1.1); box-shadow: 0 0 0 10px rgba(255,102,0,0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255,102,0,0); }
  }
  
  .btn-hover-grow {
    transition: all 0.3s ease;
  }
  
  .btn-hover-grow:hover {
    transform: scale(1.05);
  }
  
  /* Scroll Down Indicator */
  .scroll-down {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 2px;
  }
  
  .mouse {
    width: 24px;
    height: 40px;
    border: 2px solid white;
    border-radius: 12px;
    margin: 5px auto;
    position: relative;
  }
  
  .wheel {
    width: 4px;
    height: 8px;
    background: white;
    border-radius: 2px;
    position: absolute;
    top: 5px;
    left: 50%;
    transform: translateX(-50%);
    animation: scrollWheel 2s infinite;
  }
  
  @keyframes scrollWheel {
    0% { top: 5px; opacity: 1; }
    50% { top: 15px; opacity: 0.5; }
    100% { top: 5px; opacity: 1; }
  }
  
  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .hero-section {
      padding: 100px 0 80px;
    }
    
    .text-gradient {
      font-size: 2.5rem;
    }
    
    .floating-doc {
      display: none;
    }
  }
</style>

<script>
  // Typed Text Animation
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize typed.js if available
    if (typeof Typed !== 'undefined') {
      new Typed('.typed-text', {
        strings: ['Registration', 'Incorporation', 'Compliance'],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true
      });
    } else {
      // Fallback animation
      const typedText = document.querySelector('.typed-text');
      const texts = JSON.parse(typedText.getAttribute('data-typed'));
      let currentIndex = 0;
      
      function typeNext() {
        typedText.textContent = '';
        const text = texts[currentIndex];
        let i = 0;
        
        function typing() {
          if (i < text.length) {
            typedText.textContent += text.charAt(i);
            i++;
            setTimeout(typing, 100);
          } else {
            setTimeout(erase, 1500);
          }
        }
        
        function erase() {
          if (typedText.textContent.length > 0) {
            typedText.textContent = typedText.textContent.slice(0, -1);
            setTimeout(erase, 50);
          } else {
            currentIndex = (currentIndex + 1) % texts.length;
            setTimeout(typeNext, 500);
          }
        }
        
        typing();
      }
      
      typeNext();
    }
  });
</script>

  <!-- Info Cards Section -->
  <section class="container py-5">
    <div class="row g-4">
      <div class="col-md-3 animate__animated animate__fadeInUp">
        <div class="info-card text-center">
          <i class="fas fa-clipboard-check"></i>
          <h5>Requirements</h5>
          <p>Everything you need to register</p>
        </div>
      </div>
      <div class="col-md-3 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="info-card text-center">
          <i class="fas fa-file-alt"></i>
          <h5>Compliances</h5>
          <p>Mandatory filings and reports</p>
        </div>
      </div>
      <div class="col-md-3 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="info-card text-center">
          <i class="fas fa-file-upload"></i>
          <h5>Documents</h5>
          <p>Checklist of required papers</p>
        </div>
      </div>
      <div class="col-md-3 animate__animated animate__fadeInUp animate__delay-3s">
        <div class="info-card text-center">
          <i class="fas fa-clock"></i>
          <h5>Time & Cost</h5>
          <p>Transparent pricing breakdown</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Highlight -->
  <section class="container py-5">
    <div class="pricing-highlight animate__animated animate__fadeIn">
      <h2 class="section-title">Time and Cost for Incorporation</h2>
      <div class="row">
        <div class="col-md-6">
          <h4>Timeline:</h4>
          <ul class="animated-list">
            <li style="animation-delay: 0.1s">1 Day: Name Approval</li>
            <li style="animation-delay: 0.2s">2 Working Days: Stamp Duty</li>
            <li style="animation-delay: 0.3s">15 Days: Overall Approval</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h4>Cost Breakdown:</h4>
          <ul class="animated-list">
            <li style="animation-delay: 0.4s">Authorized Capital: ₹15,00,000/-</li>
            <li style="animation-delay: 0.5s">Name Approval: ₹1000/-</li>
            <li style="animation-delay: 0.6s">Three DSC: ₹2250/-</li>
            <li style="animation-delay: 0.7s">3 DIN: ₹1500/-</li>
            <li style="animation-delay: 0.8s">Stamp Duty: ₹1000/-</li>
            <li style="animation-delay: 0.9s">Professional Fee: ₹7999/-</li>
          </ul>
        </div>
      </div>
      <div class="text-center mt-4">
        <div class="price">₹15,799 <span class="text-muted">all inclusive</span></div>
        <a href="#" class="btn btn-custom mt-3">Start Registration Now</a>
      </div>
    </div>
  </section>

  <!-- Requirements Section with Image -->
  <section class="container py-5">
    <div class="row g-4">
      <div class="col-md-6 animate__animated animate__fadeInLeft">
        <div class="feature-card">
          <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Requirements">
          <div class="card-body">
            <h3 class="card-title">Registration Requirements</h3>
            <p>A public limited company offers wider ownership through shares and ensures transparency in operations. It is ideal for medium to large businesses that wish to raise capital publicly.</p>
            <ul>
              <li>Minimum 3 Directors and 7 Shareholders</li>
              <li>DIN and DSC for all Directors</li>
              <li>Registered Office Address with Proof</li>
              <li>Memorandum and Articles of Association</li>
              <li>Consent from Directors and Declaration for non-disqualification</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 animate__animated animate__fadeInRight">
        <div class="feature-card">
          <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" alt="Compliance">
          <div class="card-body">
            <h3 class="card-title">Mandatory Compliances</h3>
            <div class="alert alert-warning">
              <i class="fas fa-exclamation-triangle me-2"></i> Non-compliance may result in penalties
            </div>
            <ul>
              <li>ROC Form MGT 7 (Annual Return)</li>
              <li>ROC Form AOC 4 (Financial Statements)</li>
              <li>Board Meetings, AGMs, Statutory Registers, and Minutes Maintenance</li>
              <li>Income Tax Filings and Audit Reports</li>
              <li>Additional filings in case of share transfers, issue of capital, or other significant changes</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Documents Section -->
  <section class="container py-5">
    <h2 class="section-title animate__animated animate__fadeIn">Documents Required</h2>
    <div class="row g-4">
      <div class="col-md-6 animate__animated animate__fadeInLeft">
        <div class="info-card">
          <h4><i class="fas fa-user-tie me-2 text-primary-blue"></i> For Directors:</h4>
          <ul>
            <li>PAN Card</li>
            <li>Aadhar Card</li>
            <li>Passport (if applicable)</li>
            <li>Voter ID</li>
            <li>1 Passport Photo</li>
            <li>DIN & DSC</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 animate__animated animate__fadeInRight">
        <div class="info-card">
          <h4><i class="fas fa-building me-2 text-primary-blue"></i> For Company:</h4>
          <ul>
            <li>Rent Agreement / Ownership Proof</li>
            <li>Electricity Bill</li>
            <li>No Objection Certificate (NOC)</li>
            <li>Utility Bills (not older than 2 months)</li>
            <li>Director Identification Number (DIN)</li>
            <li>Digital Signature Certificate (DSC)</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

 <!-- Enhanced Gallery Section with Video & Interactive Features -->
<section class="container py-5">
  <h2 class="text-center mb-5 animate__animated" data-animate="animate__fadeIn">Our Registration Process in Action</h2>
  

  <!-- Interactive Gallery with Lightbox -->
  <div class="row g-4 gallery-grid">
    <!-- Card 1 with Video Thumbnail -->
    <div class="col-md-4 col-6 animate__animated" data-animate="animate__fadeInUp">
      <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-video="https://assets.mixkit.co/videos/preview/mixkit-businessman-signing-document-12348-large.mp4">
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Document Preparation">
          <div class="image-card-overlay">
            <div class="play-icon"><i class="fas fa-play"></i></div>
            <h4>Document Preparation</h4>
            <p>Click to watch our experts at work</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Card 2 with Image -->
    <div class="col-md-4 col-6 animate__animated" data-animate="animate__fadeInUp" style="animation-delay: 0.2s">
      <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80">
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Digital Signatures">
          <div class="image-card-overlay">
            <h4>Digital Signatures</h4>
            <p>Obtaining digital signatures for directors</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Card 3 with Video Thumbnail -->
    <div class="col-md-4 col-6 animate__animated" data-animate="animate__fadeInUp" style="animation-delay: 0.4s">
      <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-video="https://assets.mixkit.co/videos/preview/mixkit-woman-handling-the-filing-of-documents-12349-large.mp4">
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="ROC Filing">
          <div class="image-card-overlay">
            <div class="play-icon"><i class="fas fa-play"></i></div>
            <h4>ROC Filing</h4>
            <p>See our filing process in action</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Card 4 with Image -->
    <div class="col-md-4 col-6 animate__animated" data-animate="animate__fadeInUp">
      <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80">
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Team Meeting">
          <div class="image-card-overlay">
            <h4>Team Meeting</h4>
            <p>Discussing your company requirements</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Card 5 with Video Thumbnail -->
    <div class="col-md-4 col-6 animate__animated" data-animate="animate__fadeInUp" style="animation-delay: 0.2s">
      <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-video="https://assets.mixkit.co/videos/preview/mixkit-man-receiving-award-document-12350-large.mp4">
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Certificate">
          <div class="image-card-overlay">
            <div class="play-icon"><i class="fas fa-play"></i></div>
            <h4>Certificate</h4>
            <p>Watch a client receive their certificate</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Card 6 with Image -->
    <div class="col-md-4 col-6 animate__animated" data-animate="animate__fadeInUp" style="animation-delay: 0.4s">
      <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80">
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Celebration">
          <div class="image-card-overlay">
            <h4>Success</h4>
            <p>Celebrating your company registration</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Gallery Navigation -->
  <div class="text-center mt-5">
    <button class="btn btn-outline-primary mx-2 gallery-filter active" data-filter="all">All</button>
    <button class="btn btn-outline-primary mx-2 gallery-filter" data-filter="video">Videos</button>
    <button class="btn btn-outline-primary mx-2 gallery-filter" data-filter="image">Images</button>
  </div>
</section>

<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-dark">
      <div class="modal-header border-0">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-0">
        <div id="modalVideoContainer" class="d-none">
          <video controls autoplay class="w-100">
            <source src="" type="video/mp4">
          </video>
        </div>
        <img id="modalImage" src="" alt="" class="img-fluid d-none w-100">
      </div>
    </div>
  </div>
</div>

<style>
  /* Enhanced Gallery Styles */
  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 68, 136, 0.6);
  }

  .gallery-card {
    cursor: pointer;
    transition: transform 0.3s ease;
  }

  .gallery-card:hover {
    transform: translateY(-5px);
  }

  .image-card {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    height: 300px;
    margin-bottom: 0;
  }

  .image-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .gallery-card:hover .image-card img {
    transform: scale(1.05);
  }

  .image-card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    color: white;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .gallery-card:hover .image-card-overlay {
    opacity: 1;
  }

  .play-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    backdrop-filter: blur(5px);
    transition: all 0.3s ease;
  }

  .gallery-card:hover .play-icon {
    background: var(--accent-orange);
    transform: scale(1.1);
  }

  .play-icon i {
    font-size: 1.5rem;
    margin-left: 5px;
  }

  .gallery-filter.active {
    background: var(--primary-blue);
    color: white;
    border-color: var(--primary-blue);
  }

  @media (max-width: 768px) {
    .image-card {
      height: 200px;
    }
  }
</style>

<script>
  // Gallery Modal Functionality
  document.addEventListener('DOMContentLoaded', function() {
    const galleryModal = new bootstrap.Modal(document.getElementById('galleryModal'));
    const modalVideoContainer = document.getElementById('modalVideoContainer');
    const modalVideo = modalVideoContainer.querySelector('video');
    const modalImage = document.getElementById('modalImage');

    document.querySelectorAll('.gallery-card').forEach(card => {
      card.addEventListener('click', function() {
        const videoSrc = this.getAttribute('data-video');
        const imageSrc = this.getAttribute('data-image');

        if (videoSrc) {
          modalVideoContainer.classList.remove('d-none');
          modalImage.classList.add('d-none');
          modalVideo.src = videoSrc;
        } else {
          modalVideoContainer.classList.add('d-none');
          modalImage.classList.remove('d-none');
          modalImage.src = imageSrc;
          modalImage.alt = this.querySelector('img').alt;
        }

        galleryModal.show();
      });
    });

    // Filter functionality
    document.querySelectorAll('.gallery-filter').forEach(filter => {
      filter.addEventListener('click', function() {
        document.querySelectorAll('.gallery-filter').forEach(f => f.classList.remove('active'));
        this.classList.add('active');
        
        const filterValue = this.getAttribute('data-filter');
        document.querySelectorAll('.gallery-card').forEach(card => {
          if (filterValue === 'all') {
            card.style.display = 'block';
          } else {
            const hasVideo = card.hasAttribute('data-video');
            if ((filterValue === 'video' && hasVideo) || (filterValue === 'image' && !hasVideo)) {
              card.style.display = 'block';
            } else {
              card.style.display = 'none';
            }
          }
        });
      });
    });

    // Reset modal when closed
    galleryModal._element.addEventListener('hidden.bs.modal', function() {
      modalVideo.pause();
      modalVideo.currentTime = 0;
    });
  });
</script>
  </section>
  <!-- CTA Section -->
  <section class="py-5" style="background: var(--gradient-blue);">
    <div class="container text-center text-white">
      <h2 class="mb-4 animate__animated animate__fadeIn">Ready to Register Your Public Limited Company?</h2>
      <p class="lead mb-5 animate__animated animate__fadeIn animate__delay-1s">Our experts will guide you through the entire process</p>
      <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-2s">
        <a href="#" class="btn btn-light btn-lg px-4 py-3">
          <i class="fas fa-paper-plane me-2"></i> Begin Registration
        </a>
        <a href="#" class="btn btn-outline-light btn-lg px-4 py-3">
          <i class="fas fa-download me-2"></i> Download Checklist
        </a>
      </div>
    </div>
  </section>

  <!-- Footer with Wave -->
  <footer>
    <div class="wave"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <h5 class="text-white mb-4">TaxFilingHub</h5>
          <p>Your trusted partner for business registration and compliance services across India.</p>
          <div class="mt-4">
            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <h5 class="text-white mb-4">Newsletter</h5>
          <p>Subscribe to get updates on compliance changes and business tips</p>
          <form class="mt-4">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Your email address">
              <button class="btn btn-orange" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
      <hr class="my-4 bg-secondary">
      <div class="text-center">
        <p class="text-white-50 mb-0">© 2023 TaxFilingHub. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Animate elements on scroll
    document.addEventListener('DOMContentLoaded', function() {
      const animateElements = document.querySelectorAll('.animate__animated');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const animation = entry.target.getAttribute('data-animate');
            entry.target.classList.add('animate__animated', animation);
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1
      });

      animateElements.forEach(element => {
        observer.observe(element);
      });

      // Animate list items sequentially
      const listItems = document.querySelectorAll('.animated-list li');
      listItems.forEach((item, index) => {
        item.style.animationDelay = `${index * 0.1}s`;
      });
    });
  </script>
</body>

</html>