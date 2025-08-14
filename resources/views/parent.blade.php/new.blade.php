@extends('header')

@section('title', 'Tax Filing Services')

@section('content')
<!-- Bootstrap CSS & JS + Animate.css + Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<style>
  :root {
    --primary-color: #0a2463; /* Dark Blue */
    --secondary-color: #fb8500; /* Orange */
    --accent-color: #ffb703;
    --light-bg: #f8f9fa;
  }

  /* Background pattern with parallax effect */
 body {
    background-color: #f8f9fa;
    background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
    background-position: center;
    width: 100%;
    background-size: cover;
    background-attachment: fixed; /* Changed from scroll to fixed */
    position: relative;
    overflow-x: hidden;
  }

  body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.85);
    z-index: -1;
  }

  /* Card Styles with floating animation */
  .price-card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    position: relative;
    z-index: 1;
    transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
    box-shadow: 0 10px 30px rgba(10, 36, 99, 0.15);
    background: linear-gradient(135deg, rgba(255,255,255,0.95), rgba(255,255,255,0.9));
    backdrop-filter: blur(5px);
    animation: float 6s ease-in-out infinite;
  }

  .price-card:nth-child(2) {
    animation-delay: 0.5s;
  }

  .price-card:nth-child(3) {
    animation-delay: 1s;
  }

  .price-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80') center/cover;
    opacity: 0.08;
    z-index: -1;
  }

  .price-card:hover {
    transform: translateY(-15px) scale(1.03);
    box-shadow: 0 20px 40px rgba(10, 36, 99, 0.25);
  }

  .price-card.popular {
    border-top: 4px solid var(--secondary-color);
  }

  .price-card .card-badge {
    position: absolute;
    top: -10px;
    right: 20px;
    background: var(--secondary-color);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(251, 133, 0, 0.3);
    animation: pulse 2s infinite;
  }

  /* Feature List */
  .feature-icon {
    width: 28px;
    height: 28px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px;
    transition: all 0.3s ease;
  }

  .price-card:hover .feature-icon {
    background: var(--secondary-color);
    transform: rotate(15deg) scale(1.1);
  }

  /* Section Headers */
  .section-header {
    position: relative;
    padding-bottom: 15px;
    margin-bottom: 40px;
  }

  .section-header::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    border-radius: 2px;
    animation: expand 1.5s ease-out forwards;
  }

  /* Animations */
  @keyframes slideInLeft {
    from {
      transform: translateX(-100px);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  @keyframes slideInRight {
    from {
      transform: translateX(100px);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  @keyframes slideInUp {
    from {
      transform: translateY(100px);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }

  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
    100% { transform: translateY(0px); }
  }

  @keyframes expand {
    from { width: 0; }
    to { width: 80px; }
  }

  /* Gradient buttons */
  .btn-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border: none;
    color: white;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .btn-gradient::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: all 0.5s ease;
  }

  .btn-gradient:hover::before {
    left: 100%;
  }

  .btn-gradient:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 25px rgba(10, 36, 99, 0.3);
    color: white;
  }

  /* Info cards */
  .info-card {
    border-radius: 16px;
    transition: all 0.4s ease;
    background: rgba(255,255,255,0.9);
    box-shadow: 0 8px 25px rgba(10, 36, 99, 0.1);
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(10, 36, 99, 0.1);
  }

  .info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(10, 36, 99, 0.03), rgba(251, 133, 0, 0.03));
    z-index: 0;
  }

  .info-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(10, 36, 99, 0.2);
  }

  /* Section divider */
  .section-divider {
    position: relative;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(10, 36, 99, 0.3), transparent);
    margin: 4rem 0;
  }

  .section-divider::after {
    content: '✧';
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background: white;
    padding: 0 20px;
    color: var(--secondary-color);
    font-size: 1.5rem;
  }

  /* CTA Section */
  .cta-section {
    background: linear-gradient(135deg, var(--primary-color), #1a3a8f);
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    z-index: 1;
    box-shadow: 0 15px 40px rgba(10, 36, 99, 0.3);
  }

  .cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
    opacity: 0.1;
    z-index: -1;
  }

  /* Final Section with Image and Details */
  .final-section {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(10, 36, 99, 0.1);
    position: relative;
  }

  .final-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover;
    opacity: 0.05;
    z-index: 0;
  }

  .final-content {
    position: relative;
    z-index: 1;
  }

  .final-image {
    background: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover;
    min-height: 400px;
    border-radius: 20px 0 0 20px;
    position: relative;
    overflow: hidden;
    animation: zoomInOut 15s infinite alternate;
  }

  @keyframes zoomInOut {
    0% { transform: scale(1); }
    100% { transform: scale(1.05); }
  }

  .final-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(10, 36, 99, 0.7), rgba(251, 133, 0, 0.5));
  }

  /* Floating elements */
  .floating {
    animation: floating 8s ease-in-out infinite;
  }

  @keyframes floating {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
  }

  /* Glow effect */
  .glow {
    animation: glow 2s ease-in-out infinite alternate;
  }

  @keyframes glow {
    from { box-shadow: 0 0 10px rgba(251, 133, 0, 0.5); }
    to { box-shadow: 0 0 20px rgba(251, 133, 0, 0.8); }
  }

  /* Bounce animation */
  .bounce {
    animation: bounce 2s infinite;
  }

  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
    40% {transform: translateY(-20px);}
    60% {transform: translateY(-10px);}
  }
</style>

<div class="container my-5">

  <!-- Hero Section with Animation -->
  <div class="text-center mb-5 animate__animated" data-animation="animate__fadeInDown">
    <h5 class="text-uppercase fw-bold mb-3" style="color:#0a2463;">Professional Tax Services</h5>
    <h1 class="fw-bold display-4 mb-4" style="background: linear-gradient(90deg, var(--primary-color), var(--secondary-color)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      Expert Income Tax Filing
    </h1>
    <div class="d-flex justify-content-center align-items-center mb-4">
      <p class="lead fw-bold mb-0 me-3" style="color:#0a2463;">Starting at just</p>
      <span class="badge rounded-pill px-4 py-2 fs-5 glow" style="background: var(--secondary-color);">
        Rs 1499/-
      </span>
    </div>
    <a href="#" class="btn btn-gradient btn-lg mt-3 px-5 py-3 bounce">
      GET STARTED NOW <i class="fas fa-arrow-right ms-2"></i>
    </a>
  </div>

  <!-- Pricing Cards with Slide Animations -->
  <div class="row g-4 mb-5">
    <!-- ITR 5 -->
    <div class="col-md-4 animate__animated" data-animation="animate__slideInLeft">
      <div class="price-card p-4 h-100">
        <div class="text-center mb-3">
          <h4 class="fw-bold" style="color: var(--primary-color);">ITR 5</h4>
          <h3 class="fw-bold my-3">Rs. 1499/-</h3>
          <small class="text-muted">(All Inclusive)</small>
        </div>
        <hr class="my-3" style="border-top: 1px dashed rgba(10, 36, 99, 0.2);">
        <ul class="list-unstyled">
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Audited Financial Statements</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> DSC of Authorized Person</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Bank Details</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Tax Computation Sheet</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> GST Returns (if applicable)</li>
        </ul>
        <button class="btn btn-gradient w-100 mt-3 py-2">Select Plan</button>
      </div>
    </div>

    <!-- ITR 6 - Highlighted Card -->
    <div class="col-md-4 animate__animated" data-animation="animate__slideInUp">
      <div class="price-card p-4 h-100 popular position-relative">
        <div class="card-badge">Popular Choice</div>
        <div class="text-center mb-3 mt-2">
          <h4 class="fw-bold" style="color: var(--primary-color);">ITR 6</h4>
          <h3 class="fw-bold my-3">Rs. 599/-</h3>
          <small class="text-muted">(All Inclusive)</small>
        </div>
        <hr class="my-3" style="border-top: 1px dashed rgba(10, 36, 99, 0.2);">
        <ul class="list-unstyled">
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Audited Financial Statements</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> DSC of Authorized Person</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Bank Details</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Tax Computation Sheet</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> GST Returns (if applicable)</li>
        </ul>
        <button class="btn btn-gradient w-100 mt-3 py-2">Select Plan</button>
      </div>
    </div>

    <!-- ITR 7 -->
    <div class="col-md-4 animate__animated" data-animation="animate__slideInRight">
      <div class="price-card p-4 h-100">
        <div class="text-center mb-3">
          <h4 class="fw-bold" style="color: var(--primary-color);">ITR 7</h4>
          <h3 class="fw-bold my-3">Rs. 999/-</h3>
          <small class="text-muted">(All Inclusive)</small>
        </div>
        <hr class="my-3" style="border-top: 1px dashed rgba(10, 36, 99, 0.2);">
        <ul class="list-unstyled">
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Audited Financial Statements</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> DSC of Authorized Person</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Bank Details</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> Tax Computation Sheet</li>
          <li class="mb-3"><span class="feature-icon"><i class="fas fa-check"></i></span> GST Returns (if applicable)</li>
        </ul>
        <button class="btn btn-gradient w-100 mt-3 py-2">Select Plan</button>
      </div>
    </div>
  </div>
  <!-- Why ITR is Required Section -->
  <div class="mb-5 animate__animated" data-animation="animate__fadeIn">
    <div class="section-header">
      <div class="d-flex align-items-center">
        <div class="rounded-circle p-3 me-3 floating" style="background: var(--primary-color);">
          <i class="fas fa-question text-white fs-4"></i>
        </div>
        <h2 class="fw-bold mb-0" style="color:#0a2463;">Why Income Tax Return is Required?</h2>
      </div>
    </div>
    
    <div class="ps-5">
      <div class="alert  animate__animated animate__fadeIn animate__delay-1s" style="border-left: 4px solid var(--primary-color); background-color:#fb8500; color:#f8f9fa;">
        It is <strong>mandatory</strong> to file the income tax return; otherwise, a penalty will be levied.
      </div>
      
      <div class="row mt-4">
  <!-- Card 1 - Claim Tax Refund -->
  <div class="col-md-4 mb-4 animate__animated" data-animation="animate__fadeInUp" data-delay="0.1s">
    <div class="info-card p-0 h-100 overflow-hidden position-relative">
      <!-- Card Image -->
      <div class="card-img-container overflow-hidden" style="height: 180px;">
        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
             alt="Tax Refund" 
             class="img-fluid w-100 h-100 object-fit-cover card-image"
             style="transition: transform 0.5s ease;">
      </div>
      
      <!-- Card Content -->
      <div class="p-4 position-relative">
        <!-- Floating Icon -->
        <div class="icon-container position-absolute" style="top: -30px; left: 50%; transform: translateX(-50%);">
          <div class="bg-white rounded-circle p-3 shadow-lg" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-money-bill-wave fs-3" style="color:#fb8500;"></i>
          </div>
        </div>
        
        <h4 class="text-center fw-bold mb-3 mt-2" style="color: #0a2463;">Claim Tax Refund</h4>
        <p class="text-center mb-4">Required to get refund from the Income Tax Department</p>
      </div>
      
      <!-- Hover Overlay -->
      <div class="card-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
        <div class="text-white text-center p-4">
          <h5 class="fw-bold">Maximize Your Refund</h5>
          <p class="small">Our experts ensure you claim every eligible deduction</p>
          <div class="spinner-border spinner-border-sm text-white" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Card 2 - Carry Forward Losses -->
  <div class="col-md-4 mb-4 animate__animated" data-animation="animate__fadeInUp" data-delay="0.2s">
    <div class="info-card p-0 h-100 overflow-hidden position-relative">
      <!-- Card Image -->
      <div class="card-img-container overflow-hidden" style="height: 180px;">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
             alt="Tax Planning" 
             class="img-fluid w-100 h-100 object-fit-cover card-image"
             style="transition: transform 0.5s ease;">
      </div>
      
      <!-- Card Content -->
      <div class="p-4 position-relative">
        <!-- Floating Icon -->
        <div class="icon-container position-absolute" style="top: -30px; left: 50%; transform: translateX(-50%);">
          <div class="bg-white rounded-circle p-3 shadow-lg" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-chart-line fs-3" style="color:#fb8500;"></i>
          </div>
        </div>
        
        <h4 class="text-center fw-bold mb-3 mt-2" style="color: #0a2463;">Carry Forward Losses</h4>
        <p class="text-center mb-4">File on time to carry losses forward to next years</p>
      </div>
      
      <!-- Hover Overlay -->
      <div class="card-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
        <div class="text-white text-center p-4">
          <h5 class="fw-bold">Strategic Tax Planning</h5>
          <p class="small">Optimize your tax position with our expert advice</p>
          <div class="spinner-grow spinner-grow-sm text-white" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Card 3 - Avoid Penalties -->
  <div class="col-md-4 mb-4 animate__animated" data-animation="animate__fadeInUp" data-delay="0.3s">
    <div class="info-card p-0 h-100 overflow-hidden position-relative">
      <!-- Card Image -->
      <div class="card-img-container overflow-hidden" style="height: 180px;">
        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
             alt="Tax Compliance" 
             class="img-fluid w-100 h-100 object-fit-cover card-image"
             style="transition: transform 0.5s ease;">
      </div>
      
      <!-- Card Content -->
      <div class="p-4 position-relative">
        <!-- Floating Icon -->
        <div class="icon-container position-absolute" style="top: -30px; left: 50%; transform: translateX(-50%);">
          <div class="bg-white rounded-circle p-3 shadow-lg" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-shield-alt fs-3" style="color:#fb8500;"></i>
          </div>
        </div>
        
        <h4 class="text-center fw-bold mb-3 mt-2" style="color: #0a2463;">Avoid Penalties</h4>
        <p class="text-center mb-4">Avoid penalty up to Rs.5,000 for late filing</p>
      </div>
      
      <!-- Hover Overlay -->
      <div class="card-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
        <div class="text-white text-center p-4">
          <h5 class="fw-bold">Timely Compliance</h5>
          <p class="small">Never miss a deadline with our reminder system</p>
          <div class="spinner-border spinner-border-sm text-white" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Card Styles */
  .info-card {
    border-radius: 12px;
    transition: all 0.4s ease;
    background: white;
    box-shadow: 0 8px 25px rgba(10, 36, 99, 0.1);
    position: relative;
    overflow: hidden;
    border: none;
  }
  
  /* Card Image Container */
  .card-img-container {
    position: relative;
    overflow: hidden;
  }
  
  /* Card Image Animation */
  .card-image {
    transition: transform 0.5s ease, filter 0.3s ease;
  }
  
  /* Card Hover Effects */
  .info-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 35px rgba(10, 36, 99, 0.2);
  }
  
  .info-card:hover .card-image {
    transform: scale(1.1);
    filter: brightness(0.9);
  }
  
  /* Card Overlay */
  .card-overlay {
    background: linear-gradient(135deg, rgba(10, 36, 99, 0.9), rgba(251, 133, 0, 0.8));
    opacity: 0;
    transition: all 0.4s ease;
    transform: translateY(20px);
  }
  
  .info-card:hover .card-overlay {
    opacity: 1;
    transform: translateY(0);
  }
  
  /* Icon Animation */
  .icon-container {
    transition: all 0.3s ease;
    z-index: 2;
  }
  
  .info-card:hover .icon-container {
    transform: translateX(-50%) translateY(-5px);
  }
  
  /* Button Animation */
  .learn-more-btn {
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    border: none;
    border-radius: 30px;
    padding: 8px 20px;
  }
  
  .learn-more-btn::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: all 0.5s ease;
  }
  
  .learn-more-btn:hover::after {
    left: 100%;
  }
  
  .learn-more-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(10, 36, 99, 0.3);
  }
  
  /* Floating Animation */
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }
  
  .floating {
    animation: float 3s ease-in-out infinite;
  }
  
  /* Custom Spinner */
  .spinner-grow, .spinner-border {
    animation-duration: 1.5s;
  }
</style>
    </div>
  </div>

 

  <!-- Types of ITR Section -->
  <div class="mb-5 animate__animated" data-animation="animate__fadeIn">
    <div class="section-header">
      <div class="d-flex align-items-center">
        <div class="rounded-circle p-3 me-3 floating" style="background: var(--primary-color);">
          <i class="fas fa-file-alt text-white fs-4"></i>
        </div>
        <h2 class="fw-bold mb-0" style="color:#0a2463;">Types of Income Tax Return</h2>
      </div>
    </div>
    
   <div class="container-fluid px-5 py-4">
  <div class="row g-4">
    <!-- ITR 5 -->
    <div class="col-md-4 animate__animated" data-animation="animate__fadeInLeft">
      <div class="d-flex h-100 hover-scale" style="background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%); border-radius: 12px; overflow: hidden; box-shadow: 0 10px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;">
        <div class="image-section" style="width: 40%; background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80') center/cover;"></div>
        <div class="content-section p-4" style="width: 60%;">
           <h3 class="gradient-text mb-3" style="background: linear-gradient(90deg, #0f5c9f 0%, #fd9920 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">ITR </h3>
          <p class="text-uppercase fw-bold small mb-2" style="color:#fb8500; letter-spacing: 1px;">For businesses</p>
          <p class="mb-3" style="color:#0a2463;">For Firms, LLPs, AOPs, BOIs, AJPs, Estates, etc.</p>
          <div class="tags mt-auto">
            <span class="badge rounded-pill me-2" style="background: rgba(31, 107, 213, 0.1); color: #ef8e19;">Business</span>
            <span class="badge rounded-pill" style="background: rgba(241, 146, 38, 0.1); color: #054780;">Tax Filing</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ITR 6 -->
    <div class="col-md-4 animate__animated" data-animation="animate__fadeInUp">
      <div class="d-flex h-100 hover-scale" style="background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%); border-radius: 12px; overflow: hidden; box-shadow: 0 10px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;">
        <div class="image-section" style="width: 40%; background: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80') center/cover;"></div>
        <div class="content-section p-4" style="width: 60%;">
         <h3 class="gradient-text mb-3" style="background: linear-gradient(90deg, #0f5c9f 0%, #fd9920 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">ITR </h3>
          <p class="text-uppercase small mb-2" style=" color:#fb8500;  letter-spacing: 1px;">For companies</p>
          <p class="mb-3" style="color:#0a2463;">For companies claiming exemptions under section 11.</p>
          <div class="tags mt-auto">
            <span class="badge rounded-pill me-2" style="background: rgba(79, 172, 254, 0.1); color: #ef8e19;">Company</span>
            <span class="badge rounded-pill" style="background: rgba(108, 117, 125, 0.1); color: #054780;">Tax Filing</span>
          </div>
        </div>
      </div>
    </div>

    <!-- ITR 7 -->
    <div class="col-md-4 animate__animated" data-animation="animate__fadeInRight">
      <div class="d-flex h-100 hover-scale" style="background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%); border-radius: 12px; overflow: hidden; box-shadow: 0 10px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;">
        <div class="image-section" style="width: 40%; background: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80') center/cover;"></div>
        <div class="content-section p-4" style="width: 60%;">
          <h3 class="gradient-text mb-3" style="background: linear-gradient(90deg, #0f5c9f 0%, #fd9920 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">ITR </h3>
          <p class="text-uppercase small mb-2" style="color:#fb8500;  letter-spacing: 1px;">Special cases</p>
          <p class="mb-3" style="color:#0a2463;">For persons required to furnish returns under section 139(4A to 4D).</p>
          <div class="tags mt-auto">
            <span class="badge rounded-pill me-2" style="background: rgba(240, 147, 251, 0.1); color: #ef8e19;">Special</span>
            <span class="badge rounded-pill" style="background: rgba(108, 117, 125, 0.1); color: #054780;">Tax Filing</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
  }

  .hover-scale {
    transition: all 0.3s ease;
  }
  
  .hover-scale:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.12) !important;
  }
  
  .hover-scale:hover .hover-arrow {
    transform: translateX(5px);
  }
  
  .image-section {
    position: relative;
    overflow: hidden;
  }
  
  .image-section::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to right, rgba(255,255,255,0.1), rgba(255,255,255,0.3));
  }
  
  .animate__animated {
    animation-duration: 1s;
  }
</style>

<script>
  // Animation on scroll
  document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.animate__animated');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const animation = entry.target.getAttribute('data-animation');
          entry.target.classList.add(animation);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    
    animatedElements.forEach(element => {
      observer.observe(element);
    });
  });
</script>
  </div>

  <div class="section-divider"></div>

  <!-- IT Login Info Section -->
  <div class="mb-5 animate__animated" data-animation="animate__fadeIn">
    <div class="section-header">
      <div class="d-flex align-items-center">
        <div class="rounded-circle p-3 me-3 floating" style="background: var(--primary-color);">
          <i class="fas fa-key text-white fs-4"></i>
        </div>
        <h2 class="fw-bold mb-0" style="color:#0a2463;">Income Tax ID & Password</h2>
      </div>
    </div>
    
   <div class="container-fluid px-lg-5 py-4">
  <div class="row g-4">
    <!-- New Registration Card -->
    <div class="col-lg-6">
      <div class="card-registration animate__animated animate__fadeInLeft h-100"
           data-animation="animate__pulse" 
           data-hover-animation="animate__pulse">
        <div class="card-body p-4 p-lg-5">
          <div class="d-flex align-items-center mb-4">
            <div class="icon-wrapper" style="background-color:#0a2463;">
              <i class="fas fa-user-plus" style="color:rgb(247, 163, 7);"></i>
            </div>
            <h3 class="ms-3 mb-0 fw-bold" style="color:#0a2463;">New Registration</h3>
          </div>
          
          <ul class="requirements-list list-unstyled">
            <li class="py-3">
              <div class="d-flex align-items-center">
                <div class="step-badge me-3" style="background-color:#ef8e19;">1</div>
                <div>
                  <h6 class="mb-0">PAN Card</h6>
                  <small class="text-muted">Your Permanent Account Number</small>
                </div>
                <i class="fas fa-check-circle ms-auto text-success"></i>
              </div>
            </li>
            <li class="py-3">
              <div class="d-flex align-items-center">
                <div class="step-badge me-3" style="background-color:#ef8e19;">2</div>
                <div>
                  <h6 class="mb-0">Aadhaar Card</h6>
                  <small class="text-muted">Linked with your mobile number</small>
                </div>
                <i class="fas fa-check-circle ms-auto text-success"></i>
              </div>
            </li>
            <li class="py-3">
              <div class="d-flex align-items-center">
                <div class="step-badge me-3" style="background-color:#ef8e19;">3</div>
                <div>
                  <h6 class="mb-0">Mobile Number</h6>
                  <small class="text-muted">Active and accessible</small>
                </div>
                <i class="fas fa-check-circle ms-auto text-success"></i>
              </div>
            </li>
            <li class="py-3">
              <div class="d-flex align-items-center">
                <div class="step-badge me-3" style="background-color:#ef8e19;">4</div>
                <div>
                  <h6 class="mb-0">Email Address</h6>
                  <small class="text-muted">For communication</small>
                </div>
                <i class="fas fa-check-circle ms-auto text-success"></i>
              </div>
            </li>
          </ul>
          
          <button class="btn  mt-3 w-100 py-3 register-btn" style="background-color:#0a2463; color:white;">
            Start Registration <i class="fas fa-arrow-right ms-2"></i>
          </button>
        </div>
        
        <!-- Animated decoration elements -->
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
      </div>
    </div>
    
    <!-- Existing User Card -->
    <div class="col-lg-6">
      <div class="card-existing-user animate__animated animate__fadeInRight h-100"
           data-animation="animate__pulse" 
           data-hover-animation="animate__pulse">
        <div class="card-body p-4 p-lg-5">
          <div class="d-flex align-items-center mb-4">
            <div class="icon-wrapper " style="background-color:#0a2463;">
              <i class="fas fa-sign-in-alt " style="color:#ef8e19;"></i>
            </div>
            <h3 class="ms-3 mb-0 fw-bold" style="color:#0a2463;">Existing User</h3>
          </div>
          
          <p class="mb-4">Use your existing credentials for the Income Tax portal</p>
          
          <div class="stats-wrapper mb-4">
            <div class="d-flex justify-content-between mb-2">
              <span>User Satisfaction</span>
              <strong>85%</strong>
            </div>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" 
                   role="progressbar" 
                   style="width: 85%" 
                   aria-valuenow="85" 
                   aria-valuemin="0" 
                   aria-valuemax="100"></div>
            </div>
            <small class="text-muted d-block mt-2">85% of our clients are returning customers</small>
          </div>
          
          <div class="row g-3">
            <div class="col-md-6">
              <div class="stat-card">
                <div class="d-flex align-items-center">
                  <i class="fas fa-users me-2 text-info"></i>
                  <h5 class="mb-0">1M+</h5>
                </div>
                <small>Active Users</small>
              </div>
            </div>
            <div class="col-md-6">
              <div class="stat-card">
                <div class="d-flex align-items-center">
                  <i class="fas fa-clock me-2 text-warning"></i>
                  <h5 class="mb-0">24/7</h5>
                </div>
                <small>Support Available</small>
              </div>
            </div>
          </div>
          
          <button class="btn  mt-4 w-100 py-3 login-btn" style="background-color: #0a2463; color:white;">
            Login Now <i class="fas fa-sign-in-alt ms-2"></i>
          </button>
        </div>
        
        <!-- Animated decoration elements -->
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Custom CSS for enhanced cards */
  .card-registration, .card-existing-user {
    position: relative;
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.5s ease;
    background: white;
    z-index: 1;
  }
  
  .card-registration:hover, .card-existing-user:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
  }
  
  .card-registration::before, .card-existing-user::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 100%);
    z-index: -1;
  }
  
  .icon-wrapper {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
  }
  
  .bg-primary-light {
    background-color: rgba(13, 110, 253, 0.1);
  }
  
  .bg-success-light {
    background-color: rgba(25, 135, 84, 0.1);
  }
  
  .requirements-list li {
    border-bottom: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
  }
  
  .requirements-list li:hover {
    background: rgba(0,0,0,0.02);
    transform: translateX(5px);
  }
  
  .step-badge {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: var(--bs-primary);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.8rem;
  }
  
  .btn-primary-gradient {
    background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
    border: none;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
  }
  
  .btn-success-gradient {
    background: linear-gradient(135deg, #198754 0%, #157347 100%);
    border: none;
    border-radius: 10px;
    font-weight: 600;
    transition: all 0.3s ease;
  }
  
  .btn-primary-gradient:hover, .btn-success-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  
  .stat-card {
    background: rgba(0,0,0,0.02);
    padding: 15px;
    border-radius: 10px;
    transition: all 0.3s ease;
  }
  
  .stat-card:hover {
    background: rgba(0,0,0,0.05);
    transform: translateY(-3px);
  }
  
  /* Animated shapes */
  .shape {
    position: absolute;
    border-radius: 50%;
    background: rgba(13, 110, 253, 0.05);
    z-index: -1;
    animation: float 6s ease-in-out infinite;
  }
  
  .card-registration .shape-1 {
    width: 100px;
    height: 100px;
    top: -30px;
    right: -30px;
    animation-delay: 0s;
  }
  
  .card-registration .shape-2 {
    width: 60px;
    height: 60px;
    bottom: -20px;
    left: -20px;
    animation-delay: 1s;
  }
  
  .card-existing-user .shape-1 {
    width: 120px;
    height: 120px;
    bottom: -40px;
    right: -40px;
    background: rgba(25, 135, 84, 0.05);
    animation-delay: 0.5s;
  }
  
  .card-existing-user .shape-2 {
    width: 80px;
    height: 80px;
    top: -30px;
    left: -30px;
    background: rgba(25, 135, 84, 0.05);
    animation-delay: 1.5s;
  }
  
  @keyframes float {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-15px);
    }
  }
  
  /* Register/Login button animations */
  .register-btn:hover i {
    animation: bounceRight 0.6s infinite;
  }
  
  .login-btn:hover i {
    animation: bounceRight 0.6s infinite;
  }
  
  @keyframes bounceRight {
    0%, 100% {
      transform: translateX(0);
    }
    50% {
      transform: translateX(5px);
    }
  }
</style>

<script>
  // Add hover animations using jQuery
  $(document).ready(function() {
    $('.card-registration, .card-existing-user').hover(
      function() {
        const animation = $(this).data('hover-animation');
        $(this).addClass('animate__animated ' + animation);
      },
      function() {
        const animation = $(this).data('hover-animation');
        $(this).removeClass('animate__animated ' + animation);
      }
    );
  });
</script>
  </div>

  <!-- Final Section with Image and Details -->
  <div class="final-section mb-5 animate__animated" data-animation="animate__fadeIn">
    <div class="row g-0">
      <div class="col-lg-6 final-image animate__animated" data-animation="animate__slideInLeft"></div>
      <div class="col-lg-6 final-content p-5 animate__animated" data-animation="animate__slideInRight">
        <h2 class="fw-bold mb-4">Why Choose Our Tax Services?</h2>
        <div class="d-flex mb-4">
          <div class="me-4">
            <div class="rounded-circle bg-primary p-3 text-white mb-2" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-check fs-4"></i>
            </div>
          </div>
          <div>
            <h4 class="text-primary">100% Accuracy Guarantee</h4>
            <p>Our expert team ensures your tax filing is error-free with our accuracy guarantee.</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <div class="me-4">
            <div class="rounded-circle bg-primary p-3 text-white mb-2" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-clock fs-4"></i>
            </div>
          </div>
          <div>
            <h4 class="text-primary">Fast Processing</h4>
            <p>Get your tax filing completed in as little as 24 hours with our express service.</p>
          </div>
        </div>
        <div class="d-flex mb-4">
          <div class="me-4">
            <div class="rounded-circle bg-primary p-3 text-white mb-2" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
              <i class="fas fa-headset fs-4"></i>
            </div>
          </div>
          <div>
            <h4 class="text-primary">Dedicated Support</h4>
            <p>24/7 customer support to answer all your tax-related queries.</p>
          </div>
        </div>
        <button class="btn btn-gradient btn-lg mt-3 px-5 py-3">Get Expert Help Now</button>
      </div>
    </div>
  </div>

  <!-- CTA Section -->
  <div class="cta-section p-5 text-white text-center mb-5 animate__animated float-animation" data-animation="animate__fadeInUp">
    <h2 class="fw-bold mb-4">Ready to File Your ITR?</h2>
    <p class="lead mb-5">Our experts will handle everything for you with 100% accuracy guarantee</p>
    <button class="btn btn-light btn-lg px-5 py-3 bounce" style="color: var(--primary-color);">
      Start Now <i class="fas fa-arrow-right ms-2"></i>
    </button>
  </div>

</div>

<!-- Initialize animations when scrolling -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.animate__animated');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const element = entry.target;
          const animation = element.getAttribute('data-animation') || 
                           'fadeIn';
          const delay = element.getAttribute('data-delay') || 0;
          
          setTimeout(() => {
            element.classList.add(`animate__${animation}`);
          }, delay * 1000);
          
          observer.unobserve(element);
        }
      });
    }, {
      threshold: 0.1
    });

    animateElements.forEach(el => {
      observer.observe(el);
    });

    // Parallax effect for background
    window.addEventListener('scroll', function() {
      const scrollPosition = window.pageYOffset;
      const background = document.querySelector('body');
      background.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
    });
  });
</script>

@endsection