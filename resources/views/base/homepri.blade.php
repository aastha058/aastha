<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Private Limited Company | TaxFilingHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #1e3a8a;  /* Deep blue */
      --secondary: #f97316; /* Vibrant orange */
      --accent: #3b82f6;   /* Bright blue */
      --light: #f8f9fa;
      --dark: #212529;
      --logo: #f97316;     /* Orange logo color */
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      overflow-x: hidden;
    }
    
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 10px;
    }
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }
    ::-webkit-scrollbar-thumb {
      background: var(--secondary);
      border-radius: 10px;
    }
    
    /* Header Section */
    .header-section {
      background: linear-gradient(135deg, var(--primary), #1e40af);
      color: white;
      padding: 80px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .header-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') center/cover;
      opacity: 0.1;
    }
    
    .price-tag {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--secondary);
      text-shadow: 0 2px 4px rgba(0,0,0,0.1);
      margin: 20px 0;
      display: inline-block;
      background: rgba(255,255,255,0.2);
      padding: 10px 30px;
      border-radius: 50px;
      backdrop-filter: blur(5px);
      border: 2px solid var(--secondary);
    }
    
    /* Logo styling */
    .logo {
      color: var(--logo);
      font-weight: 700;
      font-size: 1.8rem;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }
    
    .logo span {
      color: var(--primary);
    }
    
    /* Info Cards */
    .info-cards .card {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0,0,0,0.05);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      background: white;
      height: 100%;
      position: relative;
      z-index: 1;
    }
    
    .info-cards .card::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, var(--secondary), var(--accent));
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
    }
    
    .info-cards .card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .info-cards .card:hover::before {
      transform: scaleX(1);
    }
    
    .info-cards .card h6 {
      font-weight: 600;
      color: var(--primary);
    }
    
    .info-cards .card i {
      font-size: 2.5rem;
      margin-bottom: 15px;
      color: var(--secondary);
      transition: all 0.3s ease;
    }
    
    .info-cards .card:hover i {
      transform: rotate(15deg) scale(1.2);
      color: var(--accent);
    }
    
    /* Section Styling */
    .section-container {
      padding: 80px 0;
      position: relative;
    }
    
    .bg-light-custom {
      background-color: #f1f7fc;
    }
    
    .section-title {
      color: var(--primary);
      font-weight: 700;
      position: relative;
      display: inline-block;
      margin-bottom: 30px;
    }
    
    .section-title::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 50%;
      height: 4px;
      background: linear-gradient(90deg, var(--secondary), var(--accent));
      border-radius: 2px;
    }
    
    /* List Group Styling */
    .custom-list-group {
      border-radius: 10px;
      overflow: hidden;
    }
    
    .custom-list-group .list-group-item {
      padding: 15px 20px;
      border-left: 0;
      border-right: 0;
      position: relative;
      padding-left: 40px;
      transition: all 0.3s ease;
    }
    
    .custom-list-group .list-group-item::before {
      content: '\f00c';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      position: absolute;
      left: 15px;
      color: var(--secondary);
    }
    
    .custom-list-group .list-group-item:hover {
      background-color: rgba(249, 115, 22, 0.05);
      transform: translateX(5px);
    }
    
    /* Button Styling */
    .btn-get-started {
      background: linear-gradient(135deg, var(--accent), #2563eb);
      color: white;
      font-weight: 600;
      padding: 12px 30px;
      border-radius: 50px;
      border: none;
      box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
      position: relative;
      overflow: hidden;
      transition: all 0.4s ease;
    }
    
    .btn-get-started::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: all 0.6s ease;
    }
    
    .btn-get-started:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
      background: linear-gradient(135deg, #2563eb, var(--accent));
    }
    
    .btn-get-started:hover::before {
      left: 100%;
    }
    
    /* Orange accent button */
    .btn-orange {
      background: linear-gradient(135deg, var(--secondary), #ea580c);
      box-shadow: 0 5px 15px rgba(249, 115, 22, 0.3);
    }
    
    .btn-orange:hover {
      background: linear-gradient(135deg, #ea580c, var(--secondary));
      box-shadow: 0 8px 25px rgba(249, 115, 22, 0.4);
    }
    
    /* Image Hover Effect */
    .img-hover-zoom {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0,0,0,0.1);
      transition: all 0.4s ease;
      border: 3px solid transparent;
    }
    
    .img-hover-zoom img {
      transition: transform 0.5s ease;
    }
    
    .img-hover-zoom:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
      border-color: var(--secondary);
    }
    
    .img-hover-zoom:hover img {
      transform: scale(1.05);
    }
    
    /* Floating Animation */
    .animate-float {
      animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
      100% { transform: translateY(0px); }
    }
    
    /* Pulse Animation */
    .animate-pulse {
      animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }
    
    /* Bounce Animation */
    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
      40% {transform: translateY(-20px);}
      60% {transform: translateY(-10px);}
    }
    
    .animate-bounce {
      animation: bounce 2s infinite;
    }
    
    /* Rotate Animation */
    @keyframes rotate {
      from {transform: rotate(0deg);}
      to {transform: rotate(360deg);}
    }
    
    .animate-rotate {
      animation: rotate 10s linear infinite;
    }
    
    /* Gradient Border */
    .gradient-border {
      position: relative;
      border-radius: 10px;
    }
    
    .gradient-border::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      z-index: -1;
      background: linear-gradient(45deg, var(--secondary), var(--accent));
      border-radius: 12px;
      animation: rotate 10s linear infinite;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .header-section {
        padding: 60px 0;
      }
      
      .price-tag {
        font-size: 2rem;
      }
    }
    
    /* Particle Animation */
    .particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 0;
    }
    
    .particle {
      position: absolute;
      background: rgba(255, 255, 255, 0.5);
      border-radius: 50%;
      animation: float-particle linear infinite;
    }
    
    @keyframes float-particle {
      0% {
        transform: translateY(0) translateX(0);
        opacity: 1;
      }
      100% {
        transform: translateY(-100vh) translateX(100px);
        opacity: 0;
      }
    }
    
    /* Glow Effect */
    .glow {
      text-shadow: 0 0 10px rgba(249, 115, 22, 0.7);
    }
    
    /* Hover underline animation */
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
      bottom: -4px;
      left: 0;
      background-color: var(--secondary);
      transform-origin: bottom right;
      transition: transform 0.25s ease-out;
    }
    
    .hover-underline:hover::after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }
  </style></head>
<body>

  <!-- Header Section -->
  <section class="header-section">
    <div class="container">
      <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown">Private Limited Company Registration</h1>
      <p class="lead mb-4 animate__animated animate__fadeIn animate__delay-1s">Start your business with limited liability and maximum credibility</p>
      <p class="price-tag animate__animated animate__pulse animate__delay-2s animate__infinite">Only ₹12,799/-</p>
      <a href="#" class="btn btn-get-started btn-lg animate__animated animate__fadeInUp animate__delay-1s">
        Get Started <i class="fas fa-arrow-right ms-2"></i>
      </a>
    </div>
  </section>

  <!-- Quick Info Boxes -->
  <section class="py-5 info-cards">
    <div class="container text-center">
      <div class="row g-4">
        <div class="col-md-3 col-6">
          <div class="card p-4 h-100">
            <i class="fas fa-clipboard-check"></i>
            <h6>Requirements</h6>
            <small class="text-muted">For Registration</small>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="card p-4 h-100">
            <i class="fas fa-file-alt"></i>
            <h6>Mandatory</h6>
            <small class="text-muted">Compliances</small>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="card p-4 h-100">
            <i class="fas fa-file-upload"></i>
            <h6>Documents</h6>
            <small class="text-muted">Required</small>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="card p-4 h-100">
            <i class="fas fa-clock"></i>
            <h6>Time & Cost</h6>
            <small class="text-muted">For Incorporation</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Time and Cost Section -->
  <section class="section-container bg-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h3 class="section-title">Time and Cost for Incorporation</h3>
          <div class="custom-list-group list-group mb-4">
            <div class="list-group-item">Name Approval: <strong>1 Day</strong></div>
            <div class="list-group-item">Incorporation: <strong>3-5 Working Days</strong></div>
            <div class="list-group-item">
              <strong>Cost Breakdown:</strong>
              <ul class="mt-2 ps-4">
                <li>Name Approval – ₹1000</li>
                <li>Two DSC – ₹2500</li>
                <li>Stamp Duty – ₹2300</li>
                <li>Professional Fee – ₹6999</li>
                <li class="fw-bold">Total – ₹12,799/-</li>
              </ul>
            </div>
          </div>
          <a href="#" class="btn btn-get-started animate-pulse">
            Register Now <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
        <div class="col-lg-6">
          <div class="img-hover-zoom animate-float">
            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Business Registration" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Enhanced Requirement Section with Sliding Cards -->
<section class="section-container bg-light-custom">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
        <h3 class="section-title text-primary">Requirement for Registration</h3>
        <p class="text-muted">A Private Limited Company offers limited liability and legal protection to its shareholders. It requires a minimum of 2 directors and shareholders. A person can be both a shareholder and a director.</p>
        <p class="text-muted">The liability of members is limited to their shares. Operations can begin after receiving the Certificate of Incorporation, usually within 5 working days.</p>
        <div class="mt-4">
          <div class="d-flex align-items-center mb-3">
            <div class="bg-primary text-white rounded-circle p-2 me-3">
              <i class="fas fa-check"></i>
            </div>
            <span class="fw-medium">Minimum 2 Directors</span>
          </div>
          <div class="d-flex align-items-center mb-3">
            <div class="bg-primary text-white rounded-circle p-2 me-3">
              <i class="fas fa-check"></i>
            </div>
            <span class="fw-medium">Minimum 2 Shareholders</span>
          </div>
          <div class="d-flex align-items-center">
            <div class="bg-primary text-white rounded-circle p-2 me-3">
              <i class="fas fa-check"></i>
            </div>
            <span class="fw-medium">No Minimum Capital Requirement</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="image-slider">
          <div class="slider-item">
            <div class="card border-0 shadow-sm overflow-hidden">
              <div class="card-img-top overflow-hidden">
                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Business Requirements" class="img-fluid zoom-hover">
              </div>
              <div class="card-body bg-primary text-white">
                <h5 class="card-title">Company Formation</h5>
                <p class="card-text">Start your business with proper legal structure</p>
              </div>
            </div>
          </div>
          <div class="slider-item">
            <div class="card border-0 shadow-sm overflow-hidden">
              <div class="card-img-top overflow-hidden">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Business Team" class="img-fluid zoom-hover">
              </div>
              <div class="card-body bg-primary text-white">
                <h5 class="card-title">Team Collaboration</h5>
                <p class="card-text">Build your team with proper documentation</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Enhanced Compliance Section with Hover Effects -->
<section class="section-container bg-white">
  <div class="container">
    <h3 class="section-title text-center mb-5 text-primary position-relative">
      <span class="position-relative z-index-1">Mandatory Compliances</span>
      
    </h3>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="compliance-card">
          <div class="card-image-wrapper">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Document Management" class="card-bg-image">
            <div class="image-overlay"></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <i class="fas fa-file-alt"></i>
            </div>
            <h5>ROC Form MGT-7</h5>
            <p>Shareholding structure, director changes, and share transfers (Due within 60 days of AGM).</p>
            <a href="#" class="card-link">
              Learn More <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="compliance-card">
          <div class="card-image-wrapper">
            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Financial Documents" class="card-bg-image">
            <div class="image-overlay"></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <h5>ROC Form AOC-4</h5>
            <p>Financial statements, register of members, and board information (Due within 30 days of AGM).</p>
            <a href="#" class="card-link">
              Learn More <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="compliance-card">
          <div class="card-image-wrapper">
            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Audit Meeting" class="card-bg-image">
            <div class="image-overlay"></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <i class="fas fa-user-tie"></i>
            </div>
            <h5>ROC Form ADT-1</h5>
            <p>Auditor appointment (Due within 15 days of AGM).</p>
            <a href="#" class="card-link">
              Learn More <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Compliance Cards Styling */
  .compliance-card {
    position: relative;
    height: 350px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(30, 64, 175, 0.1);
    transition: all 0.4s ease;
  }
  
  .compliance-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(30, 64, 175, 0.2);
  }
  
  .card-image-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
  }
  
  .card-bg-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s ease;
  }
  
  .compliance-card:hover .card-bg-image {
    transform: scale(1.1);
  }
  
  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(30, 64, 175, 0.2) 0%, rgba(30, 64, 175, 0.7) 100%);
  }
  
  .card-content {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 2rem;
    color: white;
    transform: translateY(0);
    transition: all 0.4s ease;
    z-index: 2;
  }
  
  .compliance-card:hover .card-content {
    background-color: #1e3a8a ;
    transform: translateY();
  
  }
  
  .card-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    color: #1e40af;
    font-size: 1.5rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }
  
  .card-content h5 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    font-weight: 600;
  }
  
  .card-content p {
    margin-bottom: 1.5rem;
    opacity: 0.9;
    line-height: 1.6;
  }
  
  .card-link {
    display: inline-flex;
    align-items: center;
    color: white;
    font-weight: 500;
    text-decoration: none;
    padding-bottom: 2px;
    border-bottom: 2px solid rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
  }
  
  .card-link:hover {
    border-bottom-color: white;
  }
  
  .card-link i {
    margin-left: 8px;
    transition: transform 0.3s ease;
  }
  
  .card-link:hover i {
    transform: translateX(5px);
  }
  
  .title-decoration {
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: #1e40af;
    border-radius: 2px;
  }
  
  @media (max-width: 767.98px) {
    .compliance-card {
      height: 300px;
      margin-bottom: 1.5rem;
    }
    
    .card-content {
      padding: 1.5rem;
    }
  }
</style>
<!-- Enhanced Documents Section with Animated Cards -->
<section class="section-container bg-light-custom">
  <div class="container">
    <h3 class="section-title text-center mb-5 text-primary position-relative">
      <span class="position-relative z-index-1">Documents Required</span>
    </h3>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="document-card document-card-director">
          <div class="card-header">
            <div class="header-icon">
              <i class="fas fa-user-tie"></i>
            </div>
            <h4>For Directors</h4>
            <div class="header-decoration"></div>
          </div>
          <div class="card-body">
            <ul class="document-list">
              <li class="document-item">
                <div class="document-icon">
                  <i class="fas fa-id-card"></i>
                </div>
                <div class="document-content">
                  <h5>PAN Card</h5>
                  <p>Permanent Account Number issued by IT Department</p>
                </div>
              </li>
              <li class="document-item">
                <div class="document-icon">
                  <i class="fas fa-address-card"></i>
                </div>
                <div class="document-content">
                  <h5>Aadhaar Card</h5>
                  <p>12-digit unique identity number</p>
                </div>
              </li>
              <li class="document-item">
                <div class="document-icon">
                  <i class="fas fa-id-badge"></i>
                </div>
                <div class="document-content">
                  <h5>Identity Proof</h5>
                  <p>Voter ID / Driving License / Passport</p>
                </div>
              </li>
              <li class="document-item">
                <div class="document-icon">
                  <i class="fas fa-certificate"></i>
                </div>
                <div class="document-content">
                  <h5>DIN</h5>
                  <p>Director Identification Number (if available)</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="document-card document-card-promoter">
          <div class="card-header">
            <div class="header-icon">
              <i class="fas fa-users"></i>
            </div>
            <h4>For Promoters</h4>
            <div class="header-decoration"></div>
          </div>
          <div class="card-body">
            <ul class="document-list">
              <li class="document-item">
                <div class="document-icon">
                  <i class="fas fa-id-card"></i>
                </div>
                <div class="document-content">
                  <h5>PAN Card</h5>
                  <p>Permanent Account Number for all promoters</p>
                </div>
              </li>
              <li class="document-item">
                <div class="document-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="document-content">
                  <h5>Address Proof</h5>
                  <p>Recent utility bill or bank statement</p>
                </div>
              </li>
              <li class="document-item">
                <div class="document-icon">
                  <i class="fas fa-home"></i>
                </div>
                <div class="document-content">
                  <h5>Business Premises</h5>
                  <p>Electricity Bill or Rent Agreement</p>
                </div>
              </li>
              <li class="document-item">
                <div class="document-icon">
                  <i class="fas fa-passport"></i>
                </div>
                <div class="document-content">
                  <h5>Photographs</h5>
                  <p>Passport-sized (2-4 copies)</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Custom Document Cards */
  .document-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(30, 64, 175, 0.08);
    overflow: hidden;
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
  }
  
  .document-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(30, 64, 175, 0.15);
  }
  
  .document-card-director .card-header {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
  }
  
  .document-card-promoter .card-header {
    background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
  }
  
  .card-header {
    padding: 1.5rem;
    color: white;
    position: relative;
    overflow: hidden;
  }
  
  .card-header h4 {
    position: relative;
    z-index: 2;
    margin-bottom: 0;
    font-weight: 600;
  }
  
  .header-icon {
    position: absolute;
    right: 1.5rem;
    top: 50%;
    transform: translateY(-50%);
    font-size: 3rem;
    opacity: 0.15;
    z-index: 1;
  }
  
  .header-decoration {
    position: absolute;
    bottom: -20px;
    left: 0;
    width: 100%;
    height: 40px;
    background: white;
    transform: skewY(-2deg);
    z-index: 1;
  }
  
  .document-list {
    padding: 1.5rem;
    list-style: none;
  }
  
  .document-item {
    display: flex;
    align-items: flex-start;
    padding: 1rem 0;
    border-bottom: 1px solid #f1f5f9;
  }
  
  .document-item:last-child {
    border-bottom: none;
  }
  
  .document-icon {
    flex: 0 0 50px;
    height: 50px;
    background: #eff6ff;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1e40af;
    font-size: 1.25rem;
    margin-right: 1rem;
  }
  
  .document-content h5 {
    color: #1e40af;
    margin-bottom: 0.25rem;
    font-weight: 600;
  }
  
  .document-content p {
    color: #64748b;
    margin-bottom: 0;
    font-size: 0.9rem;
  }
  
  .title-decoration {
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: #1e40af;
    border-radius: 2px;
  }
  
  .section-title {
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
  }
  
  @media (max-width: 767.98px) {
    .document-card {
      margin-bottom: 1.5rem;
    }
    
    .header-icon {
      font-size: 2rem;
    }
  }
</style>
<!-- Enhanced CTA Section -->
<section class="py-5 bg-primary text-white position-relative overflow-hidden">
  <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary bg-opacity-10"></div>
  <div class="container text-center py-4 position-relative">
    <h2 class="mb-4">Ready to Start Your Private Limited Company?</h2>
    <p class="lead mb-4">Our experts will handle everything from documentation to registration</p>
    <a href="#" class="btn btn-light btn-lg btn-get-started px-4 py-3">
      Get Started Now <i class="fas fa-arrow-right ms-2 transition-all"></i>
    </a>
  </div>
</section>

<style>
  /* Custom Blue Theme Styles */
  .bg-light-custom {
    background-color: #f8fafc;
  }
  
  .text-primary {
    color: #1e40af !important;
  }
  
  .bg-primary {
    background-color: #1e40af !important;
  }
  
  .btn-outline-primary {
    color: #1e40af;
    border-color: #1e40af;
  }
  
  .btn-outline-primary:hover {
    background-color: #1e40af;
    color: white;
  }
  
  /* Hover Effects */
  .hover-shadow:hover {
    box-shadow: 0 10px 25px rgba(30, 64, 175, 0.15) !important;
  }
  
  .hover-transform {
    transition: all 0.3s ease;
  }
  
  .hover-transform:hover {
    transform: translateY(-5px);
  }
  
  .transition-all {
    transition: all 0.3s ease;
  }
  
  /* Image Zoom Hover */
  .zoom-hover {
    transition: transform 0.5s ease;
  }
  
  .zoom-hover:hover {
    transform: scale(1.05);
  }
  
  /* Icon Box */
  .icon-box {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
  }
  
  /* Button Animation */
  .btn-get-started:hover i {
    transform: translateX(3px);
  }
  
  /* Image Slider */
  .image-slider {
    position: relative;
    height: 400px;
  }
  
  .slider-item {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }
  
  .slider-item:first-child {
    opacity: 1;
  }
  
  /* Animation for slider */
  @keyframes slideAnimation {
    0%, 100% { opacity: 0; }
    10%, 90% { opacity: 1; }
  }
  
  /* Responsive adjustments */
  @media (max-width: 768px) {
    .image-slider {
      height: 300px;
      margin-bottom: 30px;
    }
  }
</style>

<script>
  // Simple image slider functionality
  document.addEventListener('DOMContentLoaded', function() {
    const sliderItems = document.querySelectorAll('.slider-item');
    let currentItem = 0;
    
    function slide() {
      sliderItems[currentItem].style.opacity = 0;
      currentItem = (currentItem + 1) % sliderItems.length;
      sliderItems[currentItem].style.opacity = 1;
    }
    
    setInterval(slide, 5000);
  });
</script>

  <!-- Footer -->
  <footer class="py-4 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-3 mb-md-0">
          <h5 class="mb-3">TaxFilingHub</h5>
          <p>Your trusted partner for all business registration and compliance needs.</p>
          <div class="social-icons">
            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
          <h5 class="mb-3">Quick Links</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#" class="text-white-50">Home</a></li>
            <li class="mb-2"><a href="#" class="text-white-50">Services</a></li>
            <li class="mb-2"><a href="#" class="text-white-50">About Us</a></li>
            <li><a href="#" class="text-white-50">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5 class="mb-3">Contact</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> 123 Business St, Financial City</li>
            <li class="mb-2"><i class="fas fa-phone me-2"></i> +91 9876543210</li>
            <li><i class="fas fa-envelope me-2"></i> info@taxfilinghub.com</li>
          </ul>
        </div>
      </div>
      <hr class="my-4">
      <div class="text-center">
        &copy; 2025 TaxFilingHub. All rights reserved.
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Simple animation trigger on scroll
    document.addEventListener('DOMContentLoaded', function() {
      const animateElements = document.querySelectorAll('.animate-on-scroll');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated', 'animate__fadeInUp');
          }
        });
      }, { threshold: 0.1 });
      
      animateElements.forEach(el => {
        observer.observe(el);
      });
    });
  </script>
</body>

</html>