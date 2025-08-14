@extends('base.header')

@section('title')
  Reports |
@endsection

@section('content')

<!-- Hero Section with Gradient Background -->
<div class="hero-section" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
  <div class="container py-6">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <h1 class="fw-bold text-white display-4 mb-4">
          Professional <span class="text-warning">Project Reports</span> for Bank Financing
        </h1>
        <p class="text-white-75 fs-5 mb-4">
          Get expert-prepared financial documentation that increases your chances of loan approval by 3x
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left">
<img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
             class="img-fluid rounded-4 shadow-lg" 
             alt="Financial documents"
             style="border: 5px solid rgba(255,255,255,0.2);">
      </div>
    </div>
  </div>
</div>

<!-- Key Benefits Section -->
<div class="py-5 bg-white" id="services">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold display-5 mb-3">
        <span class="text-warning">Why</span> <span class="" style="color: #1e3a8a;">Our</span> <span class="text-success">Project</span> <span class="text-danger">Reports</span>
      </h2>
      <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
        Professionally crafted reports that meet all bank requirements and showcase your project's potential
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-card h-100">
          <div class="icon-wrapper bg-primary bg-opacity-10 mb-4">
            <i class="bi bi-check-circle-fill text-primary fs-1"></i>
          </div>
          <h4 class="fw-bold mb-3">Bank-Approved Format</h4>
          <p class="text-muted">
            Reports structured exactly as financial institutions expect, following RBI guidelines and banking standards
          </p>
          <ul class="text-muted mt-3 ps-3">
            <li class="mb-2 hover-slide-right">Financial projections</li>
            <li class="mb-2 hover-slide-right">Market analysis</li>
            <li class="hover-slide-right">Repayment strategy</li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-card h-100">
          <div class="icon-wrapper bg-success bg-opacity-10 mb-4">
            <i class="bi bi-graph-up-arrow text-success fs-1"></i>
          </div>
          <h4 class="fw-bold mb-3">Increased Approval Odds</h4>
          <p class="text-muted">
            Our clients experience 3x higher approval rates compared to self-prepared reports
          </p>
          <ul class="text-muted mt-3 ps-3">
            <li class="mb-2 hover-slide-right">Professional presentation</li>
            <li class="mb-2 hover-slide-right">Accurate calculations</li>
            <li class="hover-slide-right">Risk mitigation</li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-card h-100">
          <div class="icon-wrapper bg-warning bg-opacity-10 mb-4">
            <i class="bi bi-clock-history text-warning fs-1"></i>
          </div>
          <h4 class="fw-bold mb-3">Fast Turnaround</h4>
          <p class="text-muted">
            Get your complete project report within 2-3 working days
          </p>
          <ul class="text-muted mt-3 ps-3">
            <li class="mb-2 hover-slide-right">Express options available</li>
            <li class="mb-2 hover-slide-right">Dedicated support</li>
            <li class="hover-slide-right">Quick revisions</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- What is Project Report Financing -->
<div class="py-5 bg-light" id="how-it-works">
  <div class="container my-5">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
        <div class="pe-lg-5">
          <div class="d-flex align-items-center mb-4">
            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 50px; height: 50px;">
              <i class="bi bi-journal-text fs-4"></i>
            </div>
            <h3 class="fw-bold mb-0 text-dark">Project Report Financing</h3>
          </div>
          <div class="info-box p-4">
            <p class="text-muted fs-5 mb-0">
              A comprehensive document that outlines your business plan, financial projections, and funding requirements. This professionally prepared report demonstrates your project's viability to banks and investors, significantly improving your chances of securing financing.
            </p>
          </div>
          <div class="mt-4">
            <div class="d-flex mb-3">
              <div class="me-3 text-primary">
                <i class="bi bi-check-circle-fill"></i>
              </div>
              <div>
                <p class="mb-0 fw-semibold">Essential for loan applications</p>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="me-3 text-primary">
                <i class="bi bi-check-circle-fill"></i>
              </div>
              <div>
                <p class="mb-0 fw-semibold">Builds credibility with lenders</p>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-3 text-primary">
                <i class="bi bi-check-circle-fill"></i>
              </div>
              <div>
                <p class="mb-0 fw-semibold">Highlights repayment capacity</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="bg-white p-4 rounded-4 shadow-sm">
          <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" 
               class="img-fluid rounded-3" 
               alt="Financial documents"
               loading="lazy">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- How It Works Section -->
<div class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold display-5 mb-3">
        <span class="text-warning">Simple</span> <span class="" style="color: #1e3a8a;">3-Step</span> <span class="text-success">Process</span>
      </h2>
      <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
        Get your professional project report ready for bank submission quickly and easily
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="process-card text-center h-100">
          <div class="step-number bg-primary text-white rounded-circle d-inline-flex justify-content-center align-items-center mb-3">
            1
          </div>
          <div class="icon-wrapper bg-primary bg-opacity-10 mb-3">
            <i class="bi bi-pencil-square text-primary fs-1"></i>
          </div>
          <h4 class="fw-bold mb-3">Share Details</h4>
          <p class="text-muted">
            Provide basic information about your business, financials, and funding requirements
          </p>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="process-card text-center h-100">
          <div class="step-number bg-success text-white rounded-circle d-inline-flex justify-content-center align-items-center mb-3">
            2
          </div>
          <div class="icon-wrapper bg-success bg-opacity-10 mb-3">
            <i class="bi bi-file-earmark-bar-graph text-success fs-1"></i>
          </div>
          <h4 class="fw-bold mb-3">We Prepare Report</h4>
          <p class="text-muted">
            Our experts create a comprehensive, bank-ready project report within 2-3 days
          </p>
        </div>
      </div>
      
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="process-card text-center h-100">
          <div class="step-number bg-warning text-white rounded-circle d-inline-flex justify-content-center align-items-center mb-3">
            3
          </div>
          <div class="icon-wrapper bg-warning bg-opacity-10 mb-3">
            <i class="bi bi-bank text-warning fs-1"></i>
          </div>
          <h4 class="fw-bold mb-3">Submit to Bank</h4>
          <p class="text-muted">
            Receive your professional report and submit it confidently to financial institutions
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA Section -->
<div class="py-5" style="background: linear-gradient(rgba(30, 58, 138, 0.9), rgba(30, 58, 138, 0.9)), url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center; background-size: cover;">
  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center text-white" data-aos="zoom-in">
        <h2 class="fw-bold display-5 mb-4">Ready to Secure Your Funding?</h2>
        <p class="fs-4 mb-4 opacity-75">Let our financial experts prepare a professional project report that maximizes your loan approval chances</p>
      </div>
    </div>
  </div>
</div>

<style>
  /* Color Variables */
  :root {
    --primary: #1e3a8a;
    --primary-light: #3b82f6;
    --secondary: #10b981;
    --warning: #f59e0b;
  }
  
  /* Text Gradients */
  .text-gradient-blue {
    background: linear-gradient(90deg, var(--primary), var(--primary-light));
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-orange {
    background: linear-gradient(90deg, #f97316, var(--warning));
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  /* Hero Section */
  .hero-section {
    padding: 6rem 0;
    color: white;
  }
  
  /* Feature Cards */
  .feature-card {
    background: #fff;
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
  }
  
  .feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  }
  
  /* Process Cards */
  .process-card {
    background: #fff;
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
  }
  
  .process-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  }
  
  .step-number {
    width: 50px;
    height: 50px;
    font-size: 1.5rem;
    font-weight: bold;
  }
  
  /* Icon Wrapper */
  .icon-wrapper {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
    border-radius: 20px;
  }
  
  /* Info Box */
  .info-box {
    background: #fff;
    border-radius: 1rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }
  
  /* Animation Classes */
  .hover-slide-right {
    padding-left: 0;
    transition: all 0.3s ease;
  }
  .hover-slide-right:hover {
    padding-left: 10px;
  }
  
  .hover-grow {
    transition: all 0.3s ease;
  }
  .hover-grow:hover {
    transform: scale(1.05);
  }
  
  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .hero-section {
      padding: 4rem 0;
    }
    
    .display-4, .display-5 {
      font-size: 2.5rem;
    }
  }
</style>

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

@endsection