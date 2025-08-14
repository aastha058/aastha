@extends('home.header')

@section('title')
  Project | 
@endsection

@section('content')

<div class="container my-5 py-4">
  <div class="text-center mb-5" data-aos="fade-up">
    <h2 class="fw-bold display-4" style="color: #1e3a8a;">Our<span class="text-warning"> Project</span></h2>
    <p class="text-muted fs-5">Explore the innovative solutions we've crafted for our clients</p>
  </div>
  
  <div class="row g-4">
    <!-- Project 1 -->
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card project-card border-0 shadow-sm rounded-4 overflow-hidden h-100">
        <div class="project-img-container">
          <img src="https://images.unsplash.com/photo-1579389083078-4e7018379f7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
               class="card-img-top project-img" 
               alt="Meeting Scheduler App"
               loading="lazy">
          <div class="project-overlay">
            <div class="overlay-content">
              <h5 class="text-white mb-3">Meeting Scheduler</h5>
              <a href="{{ route('base.projectshow') }}" class="btn btn-light btn-sm rounded-pill px-3 shadow-sm">View Details <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <span class="badge bg-primary me-2">Web App</span>
            <span class="badge bg-secondary">Productivity</span>
          </div>
          <h5 class="fw-bold text-dark">Smart Meeting Scheduler</h5>
          <p class="text-muted">An intelligent platform that automates meeting scheduling across timezones with calendar integration.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">Completed: January 2021</small>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Project 2 -->
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card project-card border-0 shadow-sm rounded-4 overflow-hidden h-100">
        <div class="project-img-container">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
               class="card-img-top project-img" 
               alt="Data Analytics Dashboard"
               loading="lazy">
          <div class="project-overlay">
            <div class="overlay-content">
              <h5 class="text-white mb-3">Data Analytics</h5>
              <a href="{{ route('base.projectshow') }}" class="btn btn-light btn-sm rounded-pill px-3 shadow-sm">View Details <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <span class="badge bg-info text-white">Business Intelligence</span>
          </div>
          <h5 class="fw-bold text-dark">Enterprise Analytics Suite</h5>
          <p class="text-muted">Custom data visualization platform that transforms complex datasets into actionable insights.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">Completed: May 2022</small>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Project 3 -->
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
      <div class="card project-card border-0 shadow-sm rounded-4 overflow-hidden h-100">
        <div class="project-img-container">
          <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
               class="card-img-top project-img" 
               alt="Customer Support System"
               loading="lazy">
          <div class="project-overlay">
            <div class="overlay-content">
              <h5 class="text-white mb-3">Support Desk</h5>
              <a href="{{ route('base.projectshow') }}" class="btn btn-light btn-sm rounded-pill px-3 shadow-sm">View Details <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <span class="badge bg-warning me-2">SaaS</span>
            <span class="badge bg-danger">Customer Service</span>
          </div>
          <h5 class="fw-bold text-dark">AI-Powered Support Desk</h5>
          <p class="text-muted">Next-generation customer support platform with automated ticket routing and AI suggestions.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">Completed: March 2023</small>
          </div>
        </div>
      </div>
    </div>

    <!-- Project 4 -->
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <div class="card project-card border-0 shadow-sm rounded-4 overflow-hidden h-100">
        <div class="project-img-container">
          <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80"
               class="card-img-top project-img" 
               alt="AI Customer Support System"
               loading="lazy">
          <div class="project-overlay">
            <div class="overlay-content">
              <h5 class="text-white mb-3">AI Support Desk</h5>
              <a href="{{ route('base.projectshow') }}" class="btn btn-light btn-sm rounded-pill px-3 shadow-sm">View Details <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <span class="badge bg-primary">Customer Service</span>
          </div>
          <h5 class="fw-bold text-dark">AI Support System</h5>
          <p class="text-muted">Our Support system provides 24/7 customer assistance using natural language processing and machine learning.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">Completed: July 2024</small>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Project 5 -->
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <div class="card project-card border-0 shadow-sm rounded-4 overflow-hidden h-100">
        <div class="project-img-container">
          <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
               class="card-img-top project-img" 
               alt="Mobile Banking App"
               loading="lazy">
          <div class="project-overlay">
            <div class="overlay-content">
              <h5 class="text-white mb-3">Banking App</h5>
              <a href="{{ route('base.projectshow') }}" class="btn btn-light btn-sm rounded-pill px-3 shadow-sm">View Details <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <span class="badge bg-success me-2">Mobile</span>
            <span class="badge bg-dark">Finance</span>
          </div>
          <h5 class="fw-bold text-dark">Next-Gen Banking App</h5>
          <p class="text-muted">Revolutionary mobile banking experience with biometric authentication and AI financial insights.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">Completed: June 2025</small>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Project 6 -->
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
      <div class="card project-card border-0 shadow-sm rounded-4 overflow-hidden h-100">
        <div class="project-img-container">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
               class="card-img-top project-img" 
               alt="E-commerce Platform"
               loading="lazy">
          <div class="project-overlay">
            <div class="overlay-content">
              <h5 class="text-white mb-3">E-commerce</h5>
              <a href="{{ route('base.projectshow') }}" class="btn btn-light btn-sm rounded-pill px-3 shadow-sm">View Details <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <span class="badge bg-danger me-2">Web</span>
            <span class="badge bg-warning text-white">Retail</span>
          </div>
          <h5 class="fw-bold text-dark">Premium E-commerce Platform</h5>
          <p class="text-muted">High-performance online store with AR product previews, AI recommendations, and seamless checkout.</p>
          <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-muted">Completed: November 2025</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* Base Card Styles */
.project-card {
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transform: translateY(0);
  border: 1px solid rgba(34, 2, 2, 0.05);
  background: #fff;
  overflow: hidden;
}

.project-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.15) !important;
  border-color: rgba(17, 1, 1, 0.1);
}

.project-img-container {
  position: relative;
  height: 220px;
  overflow: hidden;
  border-radius: 0.5rem 0.5rem 0 0 !important;
}

.project-img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.project-card:hover .project-img {
  transform: scale(1.1) rotate(1deg);
  filter: brightness(1.05);
}

.project-overlay {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: linear-gradient(135deg, rgba(96, 53, 78, 0.85) 0%, rgba(96, 53, 78, 0.85) 100%);
  opacity: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.4s ease;
  backdrop-filter: blur(2px);
}

.overlay-content {
  text-align: center;
  transform: translateY(30px);
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  opacity: 0;
}

.project-card:hover .project-overlay {
  opacity: 1;
}

.project-card:hover .overlay-content {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 0.1s;
}

/* Card Body Animation */
.card-body {
  transition: all 0.4s ease;
  background: white;
  position: relative;
  z-index: 2;
}

.project-card:hover .card-body {
  background: #f8f9fa;
  transform: translateY(-5px);
}

/* Badge Animation */
.badge {
  transition: all 0.3s ease;
  transform: scale(1);
  position: relative;
  overflow: hidden;
}

.badge::after {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: rgba(255,255,255,0.2);
  transform: rotate(45deg) translate(-20px, -20px);
  transition: all 0.3s ease;
  opacity: 0;
}

.project-card:hover .badge::after {
  opacity: 1;
  animation: shine 1.5s infinite;
}

@keyframes shine {
  0% { transform: rotate(45deg) translate(-20px, -20px); }
  100% { transform: rotate(45deg) translate(20px, 20px); }
}

.project-card:hover .badge {
  transform: scale(1.05);
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* Button Animation */
.btn-light {
  transition: all 0.3s ease;
  transform: scale(1);
  position: relative;
  overflow: hidden;
}

.btn-light:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.btn-light::after {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
  transition: all 0.5s ease;
}

.btn-light:hover::after {
  left: 100%;
}

/* Rating Stars Animation */
.rating i {
  transition: all 0.3s ease;
  display: inline-block;
}

.project-card:hover .rating i {
  animation: bounce 0.5s ease;
}

.rating i:nth-child(2) { animation-delay: 0.1s; }
.rating i:nth-child(3) { animation-delay: 0.2s; }
.rating i:nth-child(4) { animation-delay: 0.3s; }
.rating i:nth-child(5) { animation-delay: 0.4s; }

@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-5px); }
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .project-card:hover {
    transform: translateY(-5px);
  }
  
  .project-img-container {
    height: 200px;
  }
}

/* Floating animation for cards */
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

.project-card {
  animation: float 6s ease-in-out infinite;
}

.project-card:nth-child(2) { animation-delay: 0.5s; }
.project-card:nth-child(3) { animation-delay: 1s; }
.project-card:nth-child(4) { animation-delay: 1.5s; }
.project-card:nth-child(5) { animation-delay: 2s; }
.project-card:nth-child(6) { animation-delay: 2.5s; }
</style>

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true
  });
</script>
@endsection