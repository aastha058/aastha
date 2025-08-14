@extends('parent.header')

@section('title', 'GST Registration - Simple & Fast | Professional Services')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
  /* Custom Variables */
  :root {
    --primary: #2563eb;
    --primary-dark: #1e40af;
    --primary-light: rgba(37, 99, 235, 0.1);
    --secondary: #6b7280;
    --light: #f9fafb;
    --dark: #111827;
    --success: #10b981;
    --warning: #f59e0b;
    --gradient: linear-gradient(135deg, var(--primary), var(--primary-dark));
  }

  /* Base Styles */
  body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    line-height: 1.6;
    color: var(--dark);
  }

  /* Hero Section */
  
  /* Feature Highlight Section */
  .feature-highlight {
    padding: 5rem 0;
    background: white;
  }

  .feature-card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    background: white;
    height: 100%;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    border: 1px solid rgba(0,0,0,0.03);
  }

  .feature-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
  }

  .feature-icon {
    width: 80px;
    height: 80px;
    background: var(--gradient);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    font-size: 2rem;
    color: white;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
  }

  /* Split Content Section */
  .split-content {
    padding: 5rem 0;
    background: var(--light);
  }

  .content-image {
    border-radius: 16px;
    box-shadow: 0 25px 50px -12px rgba(0,0,0,0.1);
    transition: all 0.4s ease;
    overflow: hidden;
  }

  .content-image:hover {
    transform: scale(1.02);
    box-shadow: 0 30px 60px -12px rgba(0,0,0,0.15);
  }

  .content-image img {
    transition: all 0.8s ease;
  }

  .content-image:hover img {
    transform: scale(1.05);
  }

  .benefit-item {
    display: flex;
    align-items: flex-start;
    padding: 1.25rem;
    border-radius: 12px;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
    background: white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.03);
    border-left: 4px solid var(--primary);
  }

  .benefit-item:hover {
    transform: translateX(8px);
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.1);
  }

  .benefit-icon {
    width: 48px;
    height: 48px;
    background: var(--primary-light);
    color: var(--primary);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1.25rem;
    flex-shrink: 0;
    font-size: 1.25rem;
  }

  /* Registration Section */
  .registration-section {
    padding: 5rem 0;
    background: white;
    position: relative;
    overflow: hidden;
  }

  .registration-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.03;
    background-image: radial-gradient(var(--primary) 1px, transparent 1px);
    background-size: 20px 20px;
  }

  .requirement-item {
    display: flex;
    align-items: center;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    margin-bottom: 0.75rem;
    transition: all 0.3s ease;
    background: var(--light);
    border: 1px solid rgba(0,0,0,0.05);
  }

  .requirement-item:hover {
    background: var(--primary-light);
    transform: translateX(5px);
    border-color: rgba(37, 99, 235, 0.2);
  }

  .requirement-icon {
    width: 40px;
    height: 40px;
    background: var(--success);
    color: white;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1.25rem;
    flex-shrink: 0;
  }

  /* Process Section */
  .process-section {
    padding: 5rem 0;
    background: var(--light);
    position: relative;
  }

  .process-connector {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--primary-light);
    z-index: 0;
    transform: translateY(-50%);
  }

  .process-step {
    position: relative;
    padding: 2rem;
    background: white;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    height: 100%;
    transition: all 0.4s ease;
    z-index: 1;
    border: 1px solid rgba(0,0,0,0.03);
  }

  .process-step:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
  }

  .step-number {
    width: 70px;
    height: 70px;
    background: var(--gradient);
    color: white;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
    font-weight: bold;
    margin: 0 auto 1.5rem;
    position: relative;
    z-index: 1;
    box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
  }

  /* Testimonials */
  .testimonial-section {
    padding: 5rem 0;
    background: white;
  }

  .testimonial-card {
    border: none;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    transition: all 0.4s ease;
    height: 100%;
    border: 1px solid rgba(0,0,0,0.03);
  }

  .testimonial-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
  }

  .testimonial-img {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid var(--primary);
    margin: 0 auto;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }

  /* CTA Section */
  .cta-section {
    padding: 6rem 0;
    background: var(--gradient);
    color: white;
    position: relative;
    overflow: hidden;
  }

  .cta-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.1;
    background-image: radial-gradient(white 1px, transparent 1px);
    background-size: 30px 30px;
  }

  /* Buttons */
  .btn-theme {
    background: var(--gradient);
    color: white;
    padding: 0.875rem 2rem;
    border-radius: 12px;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
  }

  .btn-theme:hover {
    background: white;
    color: var(--primary);
    transform: translateY(-3px) scale(1.02);
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
  }

  .btn-outline-theme {
    background-color: transparent;
    color: var(--primary);
    border: 2px solid var(--primary);
    padding: 0.875rem 2rem;
    border-radius: 12px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-outline-theme:hover {
    background: var(--primary);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(37, 99, 235, 0.2);
  }

  /* Animations */
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
  }

  @keyframes pulse {
    0% { transform: scale(1); box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3); }
    50% { transform: scale(1.05); box-shadow: 0 4px 25px rgba(245, 158, 11, 0.4); }
    100% { transform: scale(1); box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3); }
  }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .hero-section {
      min-height: auto;
      padding: 4rem 0;
      text-align: center;
    }
    
    .hero-image {
      margin-top: 3rem;
      max-width: 80%;
    }

    .process-connector {
      display: none;
    }
  }
</style>

<!-- Hero Section -->
<style>
  /* Hero Section Styles with Enhanced Background */
  .hero-section {
    position: relative;
    min-height: 90vh;
    display: flex;
    align-items: center;
    color: white;
    overflow: hidden;
    background: linear-gradient(135deg, rgba(37, 99, 235, 0.92) 0%, rgba(30, 64, 175, 0.95) 100%);
  }

  .hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('{{ asset("banner.jpeg") }}') no-repeat center center;
    background-size: cover;
    z-index: -1;
    opacity: 0.90;
    animation: backgroundZoom 20s infinite alternate ease-in-out;
  }

  /* Background Animation */
  @keyframes backgroundZoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); }
  }

  /* Subtle grain texture overlay */
  .hero-section::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxmaWx0ZXIgaWQ9Im5vaXNlIj48ZmVUdXJidWxlbmNlIHR5cGU9ImZyYWN0YWxOb2lzZSIgYmFzZUZyZXF1ZW5jeT0iMC43IiBudW1PY3RhdmVzPSI0IiBzdGl0Y2hUaWxlcz0ic3RpdGNoIi8+PC9maWx0ZXI+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbHRlcj0idXJsKCNub2lzZSkiIG9wYWNpdHk9IjAuMDMiLz48L3N2Zz4=');
    z-index: -1;
    pointer-events: none;
  }

  /* Rest of your existing styles remain unchanged */
  .hero-content {
    position: relative;
    z-index: 2;
    padding: 4rem 0;
  }

  .hero-image {
    position: relative;
    animation: float 6s ease-in-out infinite;
    filter: drop-shadow(0 25px 50px rgba(0,0,0,0.3));
    transform-style: preserve-3d;
  }

  /* ... keep all your other existing styles ... */
</style>

<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="800">
        <span class="hero-badge">
          <i class="bi bi-award-fill me-2"></i>Most Trusted GST Provider
        </span>
        <h1 class="display-3 fw-bold mb-4">Seamless GST Registration in <span class="text-warning" style="text-shadow: 0 2px 4px rgba(0,0,0,0.2);">Under 48 Hours</span></h1>
        <p class="lead mb-4" style="font-size: 1.25rem; max-width: 90%;">Let our certified GST practitioners handle your registration from start to finish while you focus on growing your business.</p>
        <div class="d-flex flex-wrap gap-3 mb-5">
          <a href="#registration" class="btn  btn-lg px-4 py-3" style="background-color:#f59e0b; color:#f9fafb;">
            <i class="bi bi-lightning-charge-fill me-2"></i> Get Started Now
          </a>
          <a href="#benefits" class="btn btn-outline-light btn-lg px-4 py-3">
            <i class="bi bi-play-circle me-2"></i> Watch Demo
          </a>
        </div>
        
        <div class="d-flex align-items-center">
          <div class="avatar-group me-3">
            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="avatar" alt="Client">
            <br>
            <img src="https://randomuser.me/api/portraits/men/44.jpg" class="avatar" alt="Client">
            <br>
            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="avatar" alt="Client">
            <div class="avatar-more">
              +2.4K
            </div>
          </div>
          <div>
            <div class="rating text-warning mb-1">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span class="ms-2 text-white">4.8</span>
            </div>
            <p class="small mb-0 text-white-80">Trusted by 2,458+ businesses across India</p>
            <br>
            <br>
            <div class="rating text-warning mb-1">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span class="ms-2 text-white">4.8</span>
            </div>
            <p class="small mb-0 text-white-80">Trusted by 2,458+ businesses across India</p>
            <br>
            <br>
            <div class="rating text-warning mb-1">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <span class="ms-2 text-white">4.8</span>
            </div>
            <p class="small mb-0 text-white-80">Trusted by 2,458+ businesses across India</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-image" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
        <img src="{{ asset('banner.jpeg') }}" alt="GST Registration" class="img-fluid" style="max-width: 100%; height: auto;">
      </div>
    </div>
  </div>
</section>

<!-- Feature Highlight Section -->
<section class="feature-highlight">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="600">
        <div class="feature-card">
          <div class="card-body text-center p-4" >
            <div class="feature-icon" >
              <i class="bi bi-shield-check"></i>
            </div>
            <h4 class="mb-3 fw-bold" style="color:#f59e0b;">100% Compliance</h4>
            <p class="fw-bold" style="color:#1e40af;">Guaranteed accurate filing with government regulations</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="feature-card">
          <div class="card-body text-center p-4">
            <div class="feature-icon">
              <i class="bi bi-headset"></i>
            </div>
            <h4 class="mb-3 fw-bold" style="color:#f59e0b;">Dedicated Support</h4>
            <p class="fw-bold" style="color:#1e40af;">Personal GST expert assigned to your business</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="feature-card">
          <div class="card-body text-center p-4">
            <div class="feature-icon">
              <i class="bi bi-coin"></i>
            </div>
            <h4 class="mb-3 fw-bold" style="color:#f59e0b;">Input Tax Credit</h4>
            <p class="fw-bold" style="color:#1e40af;">Maximize your tax savings with proper documentation</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Split Content Section -->
<section id="benefits" class="split-content">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="800">
        <div class="content-image">
          <img src="{{ asset('banner.jpeg') }}" alt="GST Benefits" class="img-fluid rounded-3">
        </div>
      </div>
      <div class="col-lg-6 ps-lg-5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
        <span class="badge bg-primary bg-opacity-10  fw-bold px-3 py-2 mb-3" style="color:#1e40af;">Why Register?</span>
        <h2 class="display-5 fw-bold mb-4"><span style="color:#052cac;">Key Benefits of</span> <span style="color:#f59e0b;">GST Registration</span></h2>
        <p class="lead  mb-4" style="color:#072894;">Registering for GST unlocks several advantages for your growing business</p>
        
        <div class="benefit-item">
          <div class="benefit-icon" style="color:#072894;">
            <i class="bi bi-building"></i>
          </div>
          <div>
            <h5 class="mb-2 fw-bold" style="color:#e89403;">Legal Recognition</h5>
            <p class="small fw-bold mb-0" style="color:#072894;">GST registration gives your business legal recognition as a supplier of goods or services.</p>
          </div>
        </div>
        
        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="bi bi-cash-stack" style="color:#072894;"></i>
          </div>
          <div>
            <h5 class="mb-2 fw-bold" style="color:#e89403;">Input Tax Credit</h5>
            <p class="small fw-bold mb-0" style="color:#072894;">Claim credit for taxes paid on purchases and reduce your overall tax liability.</p>
          </div>
        </div>
        
        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="bi bi-globe" style="color:#072894;"></i>
          </div>
          <div>
            <h5 class="mb-2 fw-bold" style="color:#e89403;">Interstate Sales</h5>
            <p class="small fw-bold mb-0" style="color:#072894;">Expand your market by selling across state borders without restrictions.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Registration Section -->
<section id="registration" class="registration-section">
  <div class="registration-pattern"></div>
  <div class="container position-relative">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="800">
        <span class="badge bg-primary bg-opacity-10  px-3 py-2 mb-3" style="color:#072894;">Documents Required</span>
        <h2 class="display-5 fw-bold mb-4" style="color:#072894;">What You Need for <span style="color:#f59e0b;">GST Registration</span></h2>
        <p class="lead fw-bold mb-4" style="color:#072894;">We've simplified the document collection process. Just provide these basic documents and we'll handle the rest.</p>
        
        <div class="row">
          <div class="col-md-6">
            <div class="requirement-item">
              <div class="requirement-icon" style="background-color:#f59e0b;">
                <i class="bi bi-file-earmark-text"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold" style="color:#072894;">PAN Card</h6>
                <p class="small fw-bold mb-0" style="color:#072894;">Of owner/company</p>
              </div>
            </div>
            <div class="requirement-item">
              <div class="requirement-icon" style="background-color:#f59e0b;">
                <i class="bi bi-person-badge"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold" style="color:#072894;">Aadhaar Card</h6>
                <p class="small fw-bold mb-0" style="color:#072894;">With mobile linking</p>
              </div>
            </div>
            <div class="requirement-item">
              <div class="requirement-icon" style="background-color:#f59e0b;">
                <i class="bi bi-bank"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold" style="color:#072894;">Bank Details</h6>
                <p class="small fw-bold mb-0" style="color:#072894;">Statement or cancelled cheque</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="requirement-item">
              <div class="requirement-icon" style="background-color:#f59e0b;">
                <i class="bi bi-house-door"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold" style="color:#072894;">Address Proof</h6>
                <p class="small fw-bold mb-0" style="color:#072894;">Electricity bill/rent agreement</p>
              </div>
            </div>
            <div class="requirement-item">
              <div class="requirement-icon" style="background-color:#f59e0b;">
                <i class="bi bi-briefcase"></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold" style="color:#072894;">Business Proof</h6>
                <p class="small fw-bold mb-0" style="color:#072894;">License/registration certificate</p>
              </div>
            </div>
            <div class="requirement-item">
              <div class="requirement-icon" style="background-color:#f59e0b;">
                <i class="bi bi-camera" ></i>
              </div>
              <div>
                <h6 class="mb-0 fw-bold" style="color:#072894;">Photo</h6>
                <p class="small fw-bold mb-0" style="color:#072894;">Passport size (white background)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
        <div class="card border-0 shadow-lg overflow-hidden">
          <div class="row g-0">
            <div class="col-md-5 text-white p-5 d-flex align-items-center" style="background-color:#072894;">
              <div>
                <h3 class=" fw-bold mb-3" style="color:#f59e0b;">Start Your Registration</h3>
                <p class="text-white-80 fw-bold mb-4">Upload your documents securely and get started</p>
                <ul class="list-unstyled">
                  <li class="mb-3 d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 fs-5" style="color:#f59e0b;"></i>
                    <span class="fw-bold">256-bit SSL Encryption</span>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 fs-5" style="color:#f59e0b;"></i>
                    <span class="fw-bold">Certified GST Practitioners</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card-body p-5">
                <div class="document-upload border-2 border-dashed rounded-3 p-4 text-center mb-4">
                  <i class="bi bi-cloud-arrow-up fs-1 mb-3" style="color:#072894:"></i>
                  <h5 class="mb-2" style="color:#072894:">Upload Documents</h5>
                  <p class=" mb-3" style="color:#072894:">Drag & drop files or</p>
                  <button class="btn btn-outline-primary px-4">
                    <i class="bi bi-folder2-open me-2"></i> Browse Files
                  </button>
                </div>
                <div class="d-flex flex-wrap gap-3">
                  <button class="btn text-white fw-bold flex-grow-1" style="background-color:#072894;">
                    <i class="bi bi-whatsapp me-2"></i> WhatsApp
                  </button>
                  <button class="btn text-white fw-bold flex-grow-1" style="background-color:#e89403;">
                    <i class="bi bi-envelope me-2"></i> Email
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section id="process" class="process-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="800">
      <span class="badge bg-primary bg-opacity-10 fw-bold px-3 py-2 mb-3" style="color:#072894;">How It Works</span>
      <h2 class="display-5 fw-bold mb-3" style="color:#072894;">Simple 4-Step <span class="fw-bold" style="color:#e89403;">Process</span></h2>
      <p class="lead fw-bold mx-auto" style="max-width: 700px; color:#052cac;">Get your GST number quickly without visiting any government office</p>
    </div>
    
    <div class="position-relative">
      <div class="process-connector"></div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600">
          <div class="process-step">
            <div class="step-number">1</div>
            <h4 class="text-center fw-bold mb-3" style="color:#e89403;">Submit Documents</h4>
            <p class="fw-bold text-center mb-0" style="color:#072894;">Upload your documents through our secure portal or WhatsApp</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
          <div class="process-step">
            <div class="step-number">2</div>
            <h4 class="text-center fw-bold mb-3" style="color:#e89403;">Expert Verification</h4>
            <p class="fw-bold text-center mb-0" style="color:#072894;">Our GST experts verify and process your application</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
          <div class="process-step">
            <div class="step-number">3</div>
            <h4 class="text-center fw-bold mb-3" style="color:#e89403;">Application Filing</h4>
            <p class="fw-bold text-center mb-0" style="color:#072894;">We file your application with the GST department</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
          <div class="process-step">
            <div class="step-number">4</div>
            <h4 class="text-center fw-bold mb-3" style="color:#e89403;">Receive GSTIN</h4>
            <p class=" fw-bold text-center mb-0" style="color:#072894;">Get your GST number directly to your email</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="testimonial-section">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="800">
      <span class="badge bg-primary bg-opacity-10  px-3 py-2 mb-3" style="color:#072894;">Testimonials</span>
      <h2 class="display-5 fw-bold mb-3" style="color:#072894;">What Our <span class="fw-bold" style="color:#f59e0b;">Clients Say</span></h2>
      <p class="lead fw-bold mx-auto" style="max-width: 700px; color:#072894;">Don't just take our word for it - hear from businesses we've helped</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="600">
        <div class="testimonial-card">
          <div class="card-body p-4 text-center">
            <img src="https://randomuser.me/api/portraits/women/43.jpg" class="testimonial-img mb-3" alt="Client">
            <div class="rating text-warning mb-3">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="mb-4">"Got my GST number in just 2 days! The team was extremely helpful throughout the process."</p>
            <h6 class="mb-1">Priya Sharma</h6>
            <p class="small text-muted">Fashion Boutique Owner</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="testimonial-card">
          <div class="card-body p-4 text-center">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="testimonial-img mb-3" alt="Client">
            <div class="rating text-warning mb-3">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="mb-4">"As a startup founder, I appreciated how they simplified the complex GST registration process."</p>
            <h6 class="mb-1">Rahul Mehta</h6>
            <p class="small text-muted">Tech Startup Founder</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="testimonial-card">
          <div class="card-body p-4 text-center">
            <img src="https://randomuser.me/api/portraits/men/75.jpg" class="testimonial-img mb-3" alt="Client">
            <div class="rating text-warning mb-3">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="mb-4">"Professional service with regular updates. Will definitely use them for GST filing as well."</p>
            <h6 class="mb-1">Amit Patel</h6>
            <p class="small text-muted">Restaurant Owner</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
{{-- <section class="cta-section">
  <div class="cta-pattern"></div>
  <div class="container position-relative">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center" data-aos="zoom-in" data-aos-duration="800">
        <h2 class="display-5 fw-bold text-white mb-4">Ready to Register for GST?</h2>
        <p class="lead text-white-80 mb-5">Start your GST registration today and get your GSTIN within 48 hours</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="#registration" class="btn btn-light btn-lg px-4 py-3">
            <i class="bi bi-file-earmark-text me-2"></i> Start Registration Now
          </a>
          <a href="#" class="btn btn-outline-light btn-lg px-4 py-3">
            <i class="bi bi-headset me-2"></i> Talk to GST Expert
          </a>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  // Initialize animations
  AOS.init({
    duration: 800,
    once: true,
    easing: 'ease-in-out'
  });
  
  // Add hover effect to cards
  document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.feature-card, .process-step, .testimonial-card, .benefit-item');
    
    cards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = this.classList.contains('benefit-item') 
          ? 'translateX(8px)' 
          : 'translateY(-10px) scale(1.02)';
          
        this.style.boxShadow = '0 20px 40px rgba(37, 99, 235, 0.15)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = '';
        this.style.boxShadow = '';
      });
    });
    
    // Animate content image on hover
    const contentImage = document.querySelector('.content-image');
    if(contentImage) {
      contentImage.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.02)';
        this.style.boxShadow = '0 30px 60px -12px rgba(0,0,0,0.15)';
      });
      
      contentImage.addEventListener('mouseleave', function() {
        this.style.transform = '';
        this.style.boxShadow = '0 25px 50px -12px rgba(0,0,0,0.1)';
      });
    }
  });
</script>

@endsection