@extends('base.header')

@section('title')
Bulk | 
@endsection

@section('content')

<!-- Hero Section with Background Image -->
<div class="hero-section" style="background: linear-gradient(rgba(30, 58, 138, 0.8), rgba(59, 130, 246, 0.8)), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center; background-size: cover;">
  <div class="container py-6">
    <div class="text-center text-white" data-aos="fade-down">
      <h2 class="fw-bold display-4">
        <span class="text-gradient-light-blue">Bulk</span> <span class="text-gradient-light-green">SMS</span> & <span class="text-gradient-light-red">Email</span> Services
      </h2>
      <p class="fs-4 mb-4" data-aos="fade-up" data-aos-delay="200">Reach thousands instantly with our fast, reliable and affordable bulk messaging solutions.</p>
    </div>
  </div>
</div>

<!-- Main Content -->
<div class="container my-5" id="services">
  <!-- Features Section -->
  <div class="row g-4">
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
      <div class="p-4 bg-white rounded-4 shadow-sm border-start border-4 border-primary hover-lift">
        <div class="text-center mb-3">
          <i class="bi bi-megaphone-fill fs-1 text-primary pulse-icon"></i>
        </div>
        <h5 class="fw-bold text-center">Marketing Campaigns</h5>
        <p class="text-muted text-center">Promote your business with SMS/Email blasts that deliver results.</p>
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
      <div class="p-4 bg-white rounded-4 shadow-sm border-start border-4 border-success hover-lift">
        <div class="text-center mb-3">
          <i class="bi bi-people-fill fs-1 text-success pulse-icon"></i>
        </div>
        <h5 class="fw-bold text-center">Customer Engagement</h5>
        <p class="text-muted text-center">Stay connected with your customers through personalized messages.</p>
      </div>
    </div>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
      <div class="p-4 bg-white rounded-4 shadow-sm border-start border-4 border-danger hover-lift">
        <div class="text-center mb-3">
          <i class="bi bi-rocket-takeoff-fill fs-1 text-danger pulse-icon"></i>
        </div>
        <h5 class="fw-bold text-center">Instant Delivery</h5>
        <p class="text-muted text-center">Messages delivered within seconds, with high reliability and uptime.</p>
      </div>
    </div>
  </div>

  <!-- How It Works -->
  <div class="my-5">
    <div class="text-center mb-4" data-aos="fade-up">
      <h3 class="fw-bold display-5 text-success">How <span class="text-dark">It</span> <span class="text-gradient-orange">Works</span></h3>
      <p class="text-muted fs-5">Simple 3-step process to start sending bulk SMS/Emails</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="bg-white p-4 rounded-4 shadow-sm border-start border-4 border-warning hover-lift">
          <div class="mb-3"><i class="bi bi-upload fs-1 text-warning bounce-icon"></i></div>
          <h6 class="fw-bold">1. Upload Contact List</h6>
          <p class="text-muted">Upload your CSV/Excel with verified phone numbers and emails.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white p-4 rounded-4 shadow-sm border-start border-4 border-info hover-lift">
          <div class="mb-3"><i class="bi bi-pencil-square fs-1 text-info bounce-icon"></i></div>
          <h6 class="fw-bold">2. Compose Message</h6>
          <p class="text-muted">Write a custom message or choose from templates.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="bg-white p-4 rounded-4 shadow-sm border-start border-4 border-success hover-lift">
          <div class="mb-3"><i class="bi bi-send-check-fill fs-1 text-success bounce-icon"></i></div>
          <h6 class="fw-bold">3. Send Instantly</h6>
          <p class="text-muted">Send your message instantly or schedule it for later.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services Detail Section -->
<div class="py-5" style="background-color: #f8fafc;">
  <div class="container my-5">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold display-4 text-gradient-blue">Bulk <span class="text-gradient-green">SMS</span> & <span class="text-gradient-orange">Email</span> Services</h2>
      <p class="text-muted fs-5">Reach thousands of customers instantly with our powerful and reliable messaging platform.</p>
    </div>

    <div class="row g-4 mb-5">
      <div class="col-md-6" data-aos="fade-right">
        <div class="p-4 bg-white rounded-4 border-start border-4 border-success shadow-sm hover-effect">
          <h4 class="fw-bold mb-2"><i class="bi bi-chat-dots-fill text-success me-2 pulse-icon"></i>Bulk SMS</h4>
          <p class="text-muted">Send personalized or promotional text messages directly to your customer's mobile phones. Fast, efficient, and high delivery rates.</p>
          <ul class="text-muted small ps-3">
            <li class="hover-slide-right">Instant delivery</li>
            <li class="hover-slide-right">98% open rate</li>
            <li class="hover-slide-right">Transactional & Promotional</li>
            <li class="hover-slide-right">TRAI DLT Compliant</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-left">
        <div class="p-4 bg-white rounded-4 border-start border-4 border-warning shadow-sm hover-effect">
          <h4 class="fw-bold mb-2"><i class="bi bi-envelope-fill text-warning me-2 pulse-icon"></i>Bulk Email</h4>
          <p class="text-muted">Send professional emails to your entire customer list. Perfect for newsletters, promotions, and updates.</p>
          <ul class="text-muted small ps-3">
            <li class="hover-slide-right">Custom HTML Templates</li>
            <li class="hover-slide-right">Detailed Analytics</li>
            <li class="hover-slide-right">Automated Scheduling</li>
            <li class="hover-slide-right">GDPR / CAN-SPAM Compliant</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA Section -->


<style>
  /* Hero Section */
  .hero-section {
    padding: 8rem 0;
    color: white;
  }
  
  /* Color Gradients */
  .text-gradient-blue {
    background: linear-gradient(90deg, #1e3a8a, #3b82f6);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-green {
    background: linear-gradient(90deg, #10b981, #22c55e);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-red {
    background: linear-gradient(90deg, #ef4444, #f97316);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-orange {
    background: linear-gradient(90deg, #f97316, #f59e0b);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-light-blue {
    background: linear-gradient(90deg, #93c5fd, #bfdbfe);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-light-green {
    background: linear-gradient(90deg, #6ee7b7, #a7f3d0);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .text-gradient-light-red {
    background: linear-gradient(90deg, #fca5a5, #fecaca);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .bg-gradient-blue {
    background: linear-gradient(135deg, #1e3a8a, #3b82f6);
  }

  /* Animation Classes */
  .hover-lift {
    transition: all 0.3s ease;
  }
  .hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }
  
  .hover-effect {
    transition: all 0.3s ease;
  }
  .hover-effect:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  }
  
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
  
  .hover-pulse {
    transition: all 0.3s ease;
  }
  .hover-pulse:hover {
    animation: pulse 1.5s infinite;
  }
  
  .pulse-icon {
    animation: pulse 2s infinite;
  }
  
  .bounce-icon {
    animation: bounce 2s infinite;
  }
  
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
  }
  
  @keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
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