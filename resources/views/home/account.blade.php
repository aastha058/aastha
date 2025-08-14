@extends('base.header')

@section('title')
  Accounting Services | 
@endsection

@section('content')
<div class="container my-5">
  <!-- Hero Section -->
  <section class="hero-section mb-5 py-4">
    <div class="row align-items-center g-5">
      <!-- Text Content -->
      <div class="col-lg-6 order-lg-1 order-2">
        <h1 class="fw-bold display-4 mb-4 animate-fade-in">
          <span class="" style="color: #1e3a8a;">Smart Accounting</span><br>
          <span class="" style="color: #1e3a8a;">for Growing</span><br>
          <span class="" style="color: #1e3a8a;">Businesses</span>
        </h1>
        <p class="lead text-muted mb-4 animate-fade-in animate-delay-1">
          Precision financial management that scales with your business. 
          Cloud-based solutions with expert oversight.
        </p>
        
        
        <div class="d-flex align-items-center animate-fade-in animate-delay-3">
          <div class="avatar-group me-3">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="avatar" alt="Client">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="avatar" alt="Client">
            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="avatar" alt="Client">
          </div>
        </div>
      </div>
      
      <!-- Hero Image -->
      <div class="col-lg-6 order-lg-2 order-1">
        <div class="position-relative floating-img">
<img src="{{ asset('images/accounting.png') }}" alt="Accounting Charts with Calculator" class="img-fluid" style="max-width: 100%; height: auto;">

          <div class="position-absolute top-0 start-0 translate-middle bg-white p-2 rounded-circle shadow-sm">
            <i class="bi bi-check-circle-fill text-success fs-4"></i>
          </div>
          <div class="position-absolute bottom-0 end-0 translate-middle bg-white p-2 rounded-circle shadow-sm">
            <i class="bi bi-graph-up-arrow text-primary fs-4"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust Badges -->
  <div class="row g-4 mb-5 justify-content-center animate-fade-in animate-delay-4">
    <div class="col-auto">
      <div class="px-4 py-3 bg-light rounded-3 text-center">
        <i class="bi bi-shield-lock-fill text-primary fs-3 mb-2"></i>
        <h6 class="mb-0">Bank-Level Security</h6>
      </div>
    </div>
    <div class="col-auto">
      <div class="px-4 py-3 bg-light rounded-3 text-center">
        <i class="bi bi-currency-exchange text-success fs-3 mb-2"></i>
        <h6 class="mb-0">GST Compliant</h6>
      </div>
    </div>
    <div class="col-auto">
      <div class="px-4 py-3 bg-light rounded-3 text-center">
        <i class="bi bi-cloud-check-fill text-info fs-3 mb-2"></i>
        <h6 class="mb-0">Cloud Sync</h6>
      </div>
    </div>
    <div class="col-auto">
      <div class="px-4 py-3 bg-light rounded-3 text-center">
        <i class="bi bi-headset text-warning fs-3 mb-2"></i>
        <h6 class="mb-0">24/7 Support</h6>
      </div>
    </div>
  </div>

  <!-- Services Section -->
  <section id="services" class="services-section mb-5 py-5 bg-light rounded-4">
    <div class="text-center mb-5">
      <span class="badge bg-primary bg-opacity-10 text-primary mb-3">Our Services</span>
      <h2 class="fw-bold mb-3"><span style="color: #1e3a8a;">Complete</span> <span class="text-success">Financial</span> <span class="text-danger">Solutions</span></h2>
      <p class="text-muted mx-auto" style="max-width: 600px;">
        From daily bookkeeping to strategic financial planning, we've got all your accounting needs covered.
      </p>
    </div>
    
    <div class="row g-4">
      <!-- Service 1 -->
      <div class="col-md-6 col-lg-4 animate-slide-up">
        <div class="card border-0 h-100 shadow-sm hover-lift">
          <div class="card-body p-4">
            <div class="icon-box bg-primary bg-opacity-10 text-primary mb-4">
              <i class="bi bi-journal-text"></i>
            </div>
            <h4 class="mb-3">Book Keeping</h4>
            <p class="text-muted mb-4">
              Accurate recording of all financial transactions with automated bank feeds and receipt capture.
            </p>
            <ul class="list-unstyled text-muted mb-4">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Daily transaction recording</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Bank reconciliation</li>
              <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Expense categorization</li>
            </ul>
            
          </div>
        </div>
      </div>
      
      <!-- Service 2 -->
      <div class="col-md-6 col-lg-4 animate-slide-up animate-delay-1">
        <div class="card border-0 h-100 shadow-sm hover-lift">
          <div class="card-body p-4">
            <div class="icon-box bg-success bg-opacity-10 text-success mb-4">
              <i class="bi bi-file-earmark-text"></i>
            </div>
            <h4 class="mb-3">Tax Preparation</h4>
            <p class="text-muted mb-4">
              Complete tax compliance including GST filing, TDS returns, and income tax preparation.
            </p>
            <ul class="list-unstyled text-muted mb-4">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> GST filing</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> TDS returns</li>
              <li><i class="bi bi-check-circle-fill text-success me-2"></i> Tax planning</li>
            </ul>
           
          </div>
        </div>
      </div>
      
      <!-- Service 3 -->
      <div class="col-md-6 col-lg-4 animate-slide-up animate-delay-2">
        <div class="card border-0 h-100 shadow-sm hover-lift">
          <div class="card-body p-4">
            <div class="icon-box bg-warning bg-opacity-10 text-warning mb-4">
              <i class="bi bi-graph-up"></i>
            </div>
            <h4 class="mb-3">Financial Reporting</h4>
            <p class="text-muted mb-4">
              Customized reports and dashboards to give you clear insights into your business performance.
            </p>
            <ul class="list-unstyled text-muted mb-4">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i> Profit & Loss</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i> Balance Sheets</li>
              <li><i class="bi bi-check-circle-fill text-warning me-2"></i> Cash Flow Analysis</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Accounting Explained Section -->
  <section class="accounting-explained mb-5 py-5">
    <div class="row align-items-center g-5">
      <!-- Image Column -->
      <div class="col-lg-5">
        <div class="position-relative">
          <img src="{{ asset('images/account.png') }}" 
               alt="Accounting Process" 
               class="img-fluid rounded-4 shadow">
          <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded-3 shadow-sm translate-middle-y">
            <div class="d-flex align-items-center">
              <div class="bg-primary bg-opacity-10 p-2 rounded-circle me-2">
                <i class="bi bi-check-lg text-primary"></i>
              </div>
              <div>
                <h6 class="mb-0">Accurate Books</h6>
                <small class="text-muted">Guaranteed</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Text Column -->
      <div class="col-lg-7">
        <div class="ps-lg-4">
          <span class="badge bg-info bg-opacity-10 text-info mb-3">Accounting 101</span>
          <h2 class="fw-bold mb-4"><span style="color: #1e3a8a;">Understand</span> <span class="text-success">Accounting</span> <span class="text-warning">Basics</span></h2>

          <div class="accordion" id="accountingAccordion">
            <!-- Accordion Item 1 -->
            <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
              <h3 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                  <i class="bi bi-journal-bookmark-fill text-primary me-3"></i> What is Accounting?
                </button>
              </h3>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accountingAccordion">
                <div class="accordion-body text-muted">
                  Accounting is the systematic recording, analysis, and reporting of financial transactions. 
                  It provides a clear picture of your business's financial health, helping you make informed decisions.
                </div>
              </div>
            </div>
            
            <!-- Accordion Item 2 -->
            <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                  <i class="bi bi-calculator-fill text-success me-3"></i> Key Accounting Principles
                </button>
              </h3>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accountingAccordion">
                <div class="accordion-body text-muted">
                  <ul class="list-unstyled">
                    <li class="mb-2"><strong>Revenue Recognition:</strong> Record income when earned</li>
                    <li class="mb-2"><strong>Matching Principle:</strong> Expenses matched to revenue</li>
                    <li><strong>Consistency:</strong> Apply methods consistently</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!-- Accordion Item 3 -->
            <div class="accordion-item border-0 rounded-3 overflow-hidden shadow-sm">
              <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                  <i class="bi bi-graph-up-arrow text-warning me-3"></i> Why It Matters
                </button>
              </h3>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accountingAccordion">
                <div class="accordion-body text-muted">
                  Proper accounting helps you:
                  <ul>
                    <li>Track business performance</li>
                    <li>Ensure tax compliance</li>
                    <li>Secure financing</li>
                    <li>Make data-driven decisions</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('styles')
<style>
  /* Color Variables */
  :root {
    --primary-color: #2b50a1;
    --secondary-color: #1a365d;
    --accent-color: #4d79f7;
  }
  
  /* Text Gradients */
  .text-gradient-primary {
    background: linear-gradient(90deg, var(--primary-color) 0%, var(--accent-color) 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-secondary {
    background: linear-gradient(90deg, var(--secondary-color) 0%, #2b5876 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-accent {
    background: linear-gradient(90deg, #4d79f7 0%, #6a8bef 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  /* Avatar Group */
  .avatar-group {
    display: flex;
  }
  
  .avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid white;
    margin-right: -10px;
  }
  
  /* Icon Box */
  .icon-box {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
  }
  
  /* Floating Animation */
  .floating-img {
    animation: float 6s ease-in-out infinite;
  }
  
  @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
    100% { transform: translateY(0px); }
  }
  
  /* Hover Effects */
  .hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .hover-lift:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
  }
  
  .hover-grow {
    transition: transform 0.3s ease;
  }
  
  .hover-grow:hover {
    transform: scale(1.05);
  }
  
  /* Animations */
  .animate-fade-in {
    opacity: 0;
    animation: fadeIn 1s ease forwards;
  }
  
  .animate-delay-1 {
    animation-delay: 0.3s;
  }
  
  .animate-delay-2 {
    animation-delay: 0.6s;
  }
  
  .animate-delay-3 {
    animation-delay: 0.9s;
  }
  
  .animate-delay-4 {
    animation-delay: 1.2s;
  }
  
  .animate-slide-up {
    opacity: 0;
    transform: translateY(30px);
    animation: slideUp 0.8s ease forwards;
  }
  
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
  
  @keyframes slideUp {
    from { 
      opacity: 0;
      transform: translateY(30px);
    }
    to { 
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  /* Accordion Customization */
  .accordion-button:not(.collapsed) {
    background-color: white;
    color: var(--primary-color);
  }
  
  .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0,0,0,.125);
  }
  
  /* Form Customization */
  .form-control::placeholder,
  .form-select option:first-child {
    color: rgba(255,255,255,0.6) !important;
  }
  
  .form-control,
  .form-select {
    color: white !important;
  }
  
  .form-control:focus,
  .form-select:focus {
    background-color: var(--primary-color);
    color: white !important;
    border-color: rgba(255,255,255,0.3);
    box-shadow: 0 0 0 0.25rem rgba(255,255,255,0.1);
  }
</style>
@endpush

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Animation on scroll
    const animateOnScroll = function() {
      const elements = document.querySelectorAll('.animate-slide-up, .animate-fade-in');
      const windowHeight = window.innerHeight;
      
      elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const elementVisible = 100;
        
        if (elementPosition < windowHeight - elementVisible) {
          element.style.opacity = '1';
          element.style.transform = 'translateY(0)';
        }
      });
    };
    
    // Initialize animations
    animateOnScroll();
    window.addEventListener('scroll', animateOnScroll);
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  });
</script>
@endpush