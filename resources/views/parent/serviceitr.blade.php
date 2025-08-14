@extends('header')

@section('title', 'Company ITR Filing Services')

@section('content')

<div class="services-section">
  <!-- Background Layers -->
  <div class="services-bg" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')"></div>
  <div class="services-overlay"></div>
  
  <!-- Floating Elements -->
  <div class="floating-elements">
    <div class="element element-1"><img src="https://cdn-icons-png.flaticon.com/512/1570/1570887.png" alt="Calculator"></div>
    <div class="element element-3"><img src="https://cdn-icons-png.flaticon.com/512/2103/2103633.png" alt="Shield"></div>
  </div>
  
  <div class="container">
    <!-- Section Header -->
    <div class="section-header">
      <h2 class="section-title">Our <span>Professional</span> ITR Services</h2>
      <p class="section-subtitle">Comprehensive tax solutions tailored for your business needs</p>
      <div class="section-divider"></div>
    </div>
    
    <!-- Services Cards -->
    <div class="services-grid">
      <!-- Card 1 -->
      <div class="service-card">
        <div class="card-icon">
          <i class="fas fa-building"></i>
          <div class="icon-bg"></div>
        </div>
        <h3 class="card-title">Company ITR Filing</h3>
        <p class="card-price">Starting at <span>₹1,499</span></p>
        <ul class="card-features">
          <li><i class="fas fa-check"></i> ITR-6 for Companies</li>
          <li><i class="fas fa-check"></i> Audit Report Preparation</li>
          <li><i class="fas fa-check"></i> Tax Planning Consultation</li>
          <li><i class="fas fa-check"></i> Annual Compliance</li>
        </ul>
        <div class="card-hover-content">
          <p>Ideal for private and public limited companies with turnover above ₹1 crore</p>
          <a href="#" class="card-btn">Get Started <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="card-corner"></div>
      </div>
      
      <!-- Card 2 -->
      <div class="service-card featured">
        <div class="featured-badge">Most Popular</div>
        <div class="card-icon">
          <i class="fas fa-handshake"></i>
          <div class="icon-bg"></div>
        </div>
        <h3 class="card-title">LLP & Firm ITR</h3>
        <p class="card-price">Starting at <span>₹999</span></p>
        <ul class="card-features">
          <li><i class="fas fa-check"></i> ITR-5 for LLPs/Firms</li>
          <li><i class="fas fa-check"></i> Partner KYC Compliance</li>
          <li><i class="fas fa-check"></i> Bookkeeping Support</li>
          <li><i class="fas fa-check"></i> GST Reconciliation</li>
        </ul>
        <div class="card-hover-content">
          <p>Perfect for LLPs, partnerships and firms with professional income</p>
          <a href="#" class="card-btn">Get Started <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="card-corner"></div>
      </div>
      
      <!-- Card 3 -->
      <div class="service-card">
        <div class="card-icon">
          <i class="fas fa-chart-line"></i>
          <div class="icon-bg"></div>
        </div>
        <h3 class="card-title">Tax Planning</h3>
        <p class="card-price">Starting at <span>₹2,999</span></p>
        <ul class="card-features">
          <li><i class="fas fa-check"></i> Strategic Tax Savings</li>
          <li><i class="fas fa-check"></i> Deduction Optimization</li>
          <li><i class="fas fa-check"></i> Investment Advisory</li>
          <li><i class="fas fa-check"></i> Year-round Support</li>
        </ul>
        <div class="card-hover-content">
          <p>Maximize your tax savings with our strategic planning services</p>
          <a href="#" class="card-btn">Get Started <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="card-corner"></div>
      </div>
    </div>
    
    <!-- CTA Section -->
    <div class="cta-section">
      <div class="cta-content">
        <h3>Need Custom Tax Solutions?</h3>
        <p>Our experts can create a personalized tax strategy for your business</p>
      </div>
      <a href="#" class="cta-btn">Consult Our Experts <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</div>

<style>
/* Base Styles */
.services-section {
  position: relative;
  padding: 6rem 0;
  overflow: hidden;
}

/* Background Layers */
.services-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  filter: brightness(0.7) contrast(1.1); /* Reduced darkening effect */
  z-index: -2;
  opacity: 0.9; /* Increased opacity */
}

.services-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(10, 32, 63, 0.7) 0%, rgba(33, 82, 150, 0.7) 100%); /* Reduced overlay opacity */
  z-index: -1;
  mix-blend-mode: multiply; /* This helps blend the overlay better */
}

/* Floating Elements */
.floating-elements {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: -1;
}

.element {
  position: absolute;
  opacity: 0.15;
  filter: drop-shadow(0 5px 10px rgba(255, 102, 0, 0.5));
}

.element img {
  width: 80px;
  height: auto;
}

.element-1 {
  top: 10%;
  left: 5%;
  animation: float 8s ease-in-out infinite;
}

.element-2 {
  top: 70%;
  left: 85%;
  animation: float 10s ease-in-out 2s infinite;
}

.element-3 {
  top: 40%;
  left: 75%;
  animation: float 12s ease-in-out 1s infinite;
}

@keyframes float {
  0% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(5deg); }
  100% { transform: translateY(0) rotate(0deg); }
}

/* Section Header */
.section-header {
  text-align: center;
  margin-bottom: 4rem;
  position: relative;
}

.section-title {
  font-size: 2.8rem;
  font-weight: 700;
  color: white;
  margin-bottom: 1rem;
  position: relative;
  display: inline-block;
}

.section-title span {
  color: #ff6600;
  position: relative;
}

.section-title span::after {
  content: '';
  position: absolute;
  bottom: 5px;
  left: 0;
  width: 100%;
  height: 8px;
  background: rgba(255, 102, 0, 0.3);
  z-index: -1;
  border-radius: 3px;
}

.section-subtitle {
  font-size: 1.2rem;
  color: rgba(255, 255, 255, 0.8);
  max-width: 700px;
  margin: 0 auto;
}

.section-divider {
  width: 80px;
  height: 4px;
  background: linear-gradient(90deg, #ff6600, #ff8c00);
  margin: 1.5rem auto 0;
  border-radius: 2px;
}

/* Services Grid */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin-bottom: 4rem;
}

/* Service Card */
.service-card {
  background: rgba(255, 255, 255, 0.95);
  border-radius: 15px;
  padding: 2.5rem;
  position: relative;
  overflow: hidden;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
  z-index: 1;
  transform: translateY(50px);
  opacity: 0;
}

.service-card.animate {
  transform: translateY(0);
  opacity: 1;
}

.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 5px;
  background: linear-gradient(90deg, #0d6efd, #00d2ff);
  transition: all 0.3s ease;
}

.service-card:hover {
  transform: translateY(-10px) !important;
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
}

.service-card:hover::before {
  height: 10px;
  background: linear-gradient(90deg, #ff6600, #ff8c00);
}

/* Featured Card */
.service-card.featured {
  border: 2px solid rgba(255, 102, 0, 0.5);
  box-shadow: 0 20px 40px rgba(255, 102, 0, 0.2);
}

.featured-badge {
  position: absolute;
  top: 15px;
  right: -30px;
  background: linear-gradient(135deg, #ff6600, #ff8c00);
  color: white;
  padding: 0.3rem 2rem;
  font-size: 0.8rem;
  font-weight: 600;
  transform: rotate(45deg);
  text-transform: uppercase;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
  z-index: 2;
}

/* Card Icon */
.card-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #0d6efd, #00d2ff);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5rem;
  position: relative;
  color: white;
  font-size: 2rem;
  transition: all 0.3s ease;
}

.service-card:hover .card-icon {
  background: linear-gradient(135deg, #ff6600, #ff8c00);
  transform: scale(1.1) rotate(10deg);
}

.icon-bg {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: rgba(13, 110, 253, 0.1);
  transform: scale(0);
  transition: all 0.3s ease;
}

.service-card:hover .icon-bg {
  transform: scale(1.5);
  opacity: 0;
}

/* Card Content */
.card-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: #0a203f;
  margin-bottom: 1rem;
}

.card-price {
  font-size: 1.1rem;
  color: #6c757d;
  margin-bottom: 1.5rem;
}

.card-price span {
  color: #ff6600;
  font-weight: 700;
  font-size: 1.5rem;
}

.card-features {
  list-style: none;
  padding: 0;
  margin: 0 0 1.5rem;
}

.card-features li {
  padding: 0.5rem 0;
  position: relative;
  padding-left: 2rem;
  color: #495057;
}

.card-features li i {
  color: #0d6efd;
  position: absolute;
  left: 0;
  top: 0.6rem;
}

.service-card:hover .card-features li i {
  color: #ff6600;
}

/* Hover Content */
.card-hover-content {
  position: absolute;
  bottom: -100%;
  left: 0;
  width: 100%;
  padding: 2rem;
  background: linear-gradient(135deg, #0a203f, #152a4e);
  color: white;
  transition: all 0.4s ease;
}

.service-card:hover .card-hover-content {
  bottom: 0;
}

.card-hover-content p {
  margin-bottom: 1.5rem;
  font-size: 0.95rem;
  opacity: 0.9;
}

.card-btn {
  display: inline-flex;
  align-items: center;
  color: white;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.card-btn i {
  margin-left: 0.5rem;
  transition: transform 0.3s ease;
}

.card-btn:hover {
  color: #ff6600;
}

.card-btn:hover i {
  transform: translateX(5px);
}

/* Card Corner Effect */
.card-corner {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 0;
  height: 0;
  border-bottom: 20px solid #0d6efd;
  border-left: 20px solid transparent;
  transition: all 0.3s ease;
}

.service-card:hover .card-corner {
  border-bottom-color: #ff6600;
}

/* CTA Section */
.cta-section {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border-radius: 15px;
  padding: 2rem;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  border: 1px solid rgba(255, 255, 255, 0.2);
  transform: translateY(50px);
  opacity: 0;
  transition: all 0.5s ease;
}

.cta-section.animate {
  transform: translateY(0);
  opacity: 1;
}

.cta-content h3 {
  color: white;
  font-size: 1.5rem;
  margin-bottom: 0.5rem;
}

.cta-content p {
  color: rgba(255, 255, 255, 0.8);
  margin: 0;
}

.cta-btn {
  background: linear-gradient(135deg, #ff6600, #ff8c00);
  color: white;
  padding: 0.8rem 2rem;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  transition: all 0.3s ease;
  box-shadow: 0 5px 20px rgba(255, 102, 0, 0.3);
}

.cta-btn i {
  margin-left: 0.5rem;
  transition: transform 0.3s ease;
}

.cta-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(255, 102, 0, 0.4);
}

.cta-btn:hover i {
  transform: translateX(5px);
}

/* Responsive Adjustments */
@media (max-width: 992px) {
  .section-title {
    font-size: 2.3rem;
  }
  
  .services-grid {
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  }
}

@media (max-width: 768px) {
  .services-section {
    padding: 4rem 0;
  }
  
  .section-title {
    font-size: 2rem;
  }
  
  .cta-section {
    flex-direction: column;
    text-align: center;
    gap: 1.5rem;
  }
  
  .cta-btn {
    margin-top: 1rem;
  }
}

/* Animation Delays */
.delay-1 { transition-delay: 0.2s !important; }
.delay-2 { transition-delay: 0.4s !important; }
.delay-3 { transition-delay: 0.6s !important; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Animate cards on scroll
  const animateOnScroll = function() {
    const cards = document.querySelectorAll('.service-card');
    const cta = document.querySelector('.cta-section');
    const windowHeight = window.innerHeight;
    
    cards.forEach((card, index) => {
      const cardPosition = card.getBoundingClientRect().top;
      const delay = index * 0.2;
      
      if (cardPosition < windowHeight - 100) {
        card.style.transitionDelay = `${delay}s`;
        card.classList.add('animate');
      }
    });
    
    if (cta.getBoundingClientRect().top < windowHeight - 100) {
      cta.classList.add('animate');
    }
  };
  
  // Initialize animation on load
  animateOnScroll();
  
  // Animate on scroll
  window.addEventListener('scroll', animateOnScroll);
  
  // Floating elements parallax effect
  window.addEventListener('mousemove', function(e) {
    const elements = document.querySelectorAll('.element');
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;
    
    elements.forEach((el, index) => {
      const speed = 0.05 + (index * 0.02);
      const xPos = x * 50 * speed;
      const yPos = y * 50 * speed;
      
      el.style.transform = `translate(${xPos}px, ${yPos}px)`;
    });
  });
  
  // Card hover effect for touch devices
  if ('ontouchstart' in window) {
    document.querySelectorAll('.service-card').forEach(card => {
      card.addEventListener('click', function() {
        this.classList.toggle('hover-effect');
      });
    });
  }
});
</script>


<div class="container py-5">
  <!-- Feature Section with Image and Text -->
  <div class="row feature-section align-items-center mb-5">
    <div class="col-lg-6 order-lg-2">
      <div class="feature-image animate__animated animate__fadeInRight">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Tax Consultation" class="img-fluid rounded shadow-lg">
        <div class="image-overlay"></div>
      </div>
    </div>
    <div class="col-lg-6 order-lg-1">
      <div class="feature-content animate__animated animate__fadeInLeft">
        <h2 class="fw-bold" style="color:#152a4e;"><span class="highlight fw-bold" style="color:#e74c3c;">Why Choose</span> Our ITR Services?</h2>
        <div class="feature-list">
          <div class="feature-item">
            <div class="feature-icon" style="background-color: #e74c3c;">
              <i class="fas fa-shield-alt"></i>
            </div>
            <div class="feature-text">
              <h4 class="fw-bold" style="color:#152a4e;">100% Compliance Guarantee</h4>
              <p>Our CAs ensure your filings meet all regulatory requirements</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon" style="background-color: #e74c3c;">
              <i class="fas fa-clock"></i>
            </div>
            <div class="feature-text">
              <h4 class="fw-bold" style="color:#152a4e;">Fast Processing</h4>
              <p>Average turnaround time of 48 hours for standard filings</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon" style="background-color: #e74c3c;">
              <i class="fas fa-headset"></i>
            </div>
            <div class="feature-text">
              <h4 class="fw-bold" style="color:#152a4e;">Dedicated Support</h4>
              <p>24/7 assistance from our team of tax professionals</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pricing Cards with Enhanced Design -->
  <div class="pricing-section" id="pricing">
  <!-- Animated Background Elements -->
  <div class="pricing-bg-shapes">
    <div class="shape-1"></div>
    <div class="shape-2"></div>
    <div class="shape-3"></div>
  </div>
  
  <div class="container">
    <!-- Section Header with Animation -->
    <div class="row justify-content-center g-4">
     <!-- Compact Pricing Cards -->
<div class="container mx-auto px-4 py-12">
  <div class="text-center mb-16">
    <h2 class="text-4xl font-bold  mb-4 animate__animated animate__fadeInDown" style="color:#e74c3c;">Professional ITR Filing <span style="color:#0a203f;">Services</span></h2>
    <p class="text-lg max-w-2xl mx-auto animate__animated animate__fadeIn animate__delay-1s" style="color:#e74c3c;">Choose the perfect plan for your business needs with our expert tax filing solutions</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <!-- ITR 1 Card -->
    <div class="relative group">
      <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl shadow-lg transform group-hover:-translate-y-2 transition-all duration-300 opacity-70 group-hover:opacity-90"></div>
      <div class="relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 group-hover:shadow-2xl h-full">
        <div class="absolute top-0 right-0 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">Basic</div>
        <div class="bg-cover bg-center h-32" style="background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');">
          <div class=" bg-opacity-40 h-full flex items-center justify-center" style="background-color: #0a203f;">
            <h3 class="text-white text-2xl font-bold">ITR <span style="color:#e74c3c;">1</span></h3>
          </div>
        </div>
        <div class="p-6">
          <div class="text-center mb-6">
            <span class="text-4xl font-bold " style="color:#e74c3c;">₹499</span>
            <span class="text-gray-600">/filing</span>
          </div>
          <p class="text-gray-600 text-sm mb-6">For salaried individuals with income up to ₹50 lakh</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Salary/Pension Income</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">One House Property</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Interest Income</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Basic Deductions</span>
            </li>
          </ul>
          <button class="w-full  text-white py-3 px-6 rounded-lg font-medium hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105" style="background-color: #e74c3c;">
            Get Started
          </button>
        </div>
      </div>
    </div>

    <!-- ITR 2 Card -->
    <div class="relative group">
      <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl shadow-lg transform group-hover:-translate-y-2 transition-all duration-300 opacity-70 group-hover:opacity-90"></div>
      <div class="relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 group-hover:shadow-2xl h-full">
        <div class="absolute top-0 right-0 bg-purple-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">Standard</div>
        <div class="bg-cover bg-center h-32" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');">
          <div class="bg-opacity-40 h-full flex items-center justify-center" style="background-color: #0a203f;">
            <h3 class="text-white text-2xl font-bold">ITR <span style="color:#e74c3c;">2</span></h3>
          </div>
        </div>
        <div class="p-6">
          <div class="text-center mb-6">
            <span class="text-4xl font-bold " style="color:#e74c3c;">₹999</span>
            <span class="text-gray-600">/filing</span>
          </div>
          <p class="text-gray-600 text-sm mb-6">For individuals with capital gains and multiple properties</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">All ITR 1 features</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Capital Gains</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Multiple Properties</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Foreign Income</span>
            </li>
          </ul>
           <button class="w-full  text-white py-3 px-6 rounded-lg font-medium hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105" style="background-color: #e74c3c;">
            Get Started
          </button>
        </div>
      </div>
    </div>

    <!-- ITR 3 Card (Featured) -->
    <div class="relative group transform hover:scale-105 transition-all duration-500">
      <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-xl shadow-xl transform group-hover:-rotate-1 group-hover:-translate-y-3 transition-all duration-300 opacity-80 group-hover:opacity-90"></div>
      <div class="relative bg-white rounded-xl shadow-2xl overflow-hidden transition-all duration-300 h-full border-4 border-yellow-300">
        <div class="absolute top-0 right-0 bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">Popular</div>
        <div class="absolute -top-4 -right-4 bg-yellow-500 text-white text-xs font-bold px-4 py-1 rounded-full shadow-lg transform rotate-12">
          Best Value
        </div>
        <div class="bg-cover bg-center h-32" style="background-image: url('https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');">
          <div class=" bg-opacity-40 h-full flex items-center justify-center" style="background-color: #0a203f;">
            <h3 class="text-white text-2xl font-bold">ITR <span style="color:#e74c3c;">3</span></h3>
          </div>
        </div>
        <div class="p-6">
          <div class="text-center mb-6">
            <span class="text-4xl font-bold " style="color:#e74c3c;">₹1,499</span>
            <span class="text-gray-600">/filing</span>
          </div>
          <p class="text-gray-600 text-sm mb-6">For individuals with business/professional income</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">All ITR 2 features</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Business Income</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Professional Income</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Presumptive Taxation</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Priority Support</span>
            </li>
          </ul>
           <button class="w-full  text-white py-3 px-6 rounded-lg font-medium hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105" style="background-color: #e74c3c;">
            Get Started
          </button>
        </div>
      </div>
    </div>

    <!-- ITR 4 Card -->
    <div class="relative group">
      <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl shadow-lg transform group-hover:-translate-y-2 transition-all duration-300 opacity-70 group-hover:opacity-90"></div>
      <div class="relative bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 group-hover:shadow-2xl h-full">
        <div class="absolute top-0 right-0 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">Premium</div>
        <div class="bg-cover bg-center h-32" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');">
          <div class="bg-opacity-40 h-full flex items-center justify-center" style="background-color: #0a203f;">
            <h3 class="text-white text-2xl font-bold">ITR <span style="color:#e74c3c;">4</span></h3>
          </div>
        </div>
        <div class="p-6">
          <div class="text-center mb-6">
            <span class="text-4xl font-bold" style="color:#e74c3c;">₹1,999</span>
            <span class="text-gray-600">/filing</span>
          </div>
          <p class="text-gray-600 text-sm mb-6">For businesses opting for presumptive taxation</p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">All ITR 3 features</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Presumptive Business</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Tax Audit Support</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">Dedicated CA</span>
            </li>
            <li class="flex items-center">
              <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span class="text-gray-700">24/7 Support</span>
            </li>
          </ul>
           <button class="w-full  text-white py-3 px-6 rounded-lg font-medium hover:from-blue-600 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105" style="background-color: #e74c3c;">
            Get Started
          </button>
        </div>
      </div>
    </div>
  </div>

  
</div>
<style>
  @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
  
  .group:hover .group-hover\:translate-y-2 {
    transform: translateY(-0.5rem);
  }
  
  .group:hover .group-hover\:opacity-90 {
    opacity: 0.9;
  }
  
  .transition-all {
    transition-property: all;
  }
  
  .duration-300 {
    transition-duration: 300ms;
  }
  
  .transform {
    transform: translateZ(0);
  }
</style>
    </div>
  </div>
</div>

<style>
/* Base Variables */
:root {
  --primary: #6366F1;
  --primary-dark: #4F46E5;
  --primary-light: #A5B4FC;
  --secondary: #10B981;
  --dark: #1E293B;
  --gray: #64748B;
  --light-gray: #F1F5F9;
  --white: #FFFFFF;
  --shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  --shadow-hover: 0 15px 45px rgba(0, 0, 0, 0.15);
  --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

/* Pricing Section */
.pricing-section {
  position: relative;
  padding: 6rem 0;
  background-color: var(--light-gray);
  overflow: hidden;
}

.pricing-bg-shapes {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 0;
  overflow: hidden;
}

.pricing-bg-shapes .shape-1 {
  position: absolute;
  top: -100px;
  right: -100px;
  width: 400px;
  height: 400px;
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
  background: linear-gradient(45deg, var(--primary-light), var(--primary));
  opacity: 0.15;
  animation: float 8s ease-in-out infinite;
}

.pricing-bg-shapes .shape-2 {
  position: absolute;
  bottom: -150px;
  left: -150px;
  width: 500px;
  height: 500px;
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
  background: linear-gradient(45deg, var(--primary), var(--secondary));
  opacity: 0.1;
  animation: float 10s ease-in-out infinite;
  animation-delay: 1s;
}

.pricing-bg-shapes .shape-3 {
  position: absolute;
  top: 50%;
  right: 10%;
  width: 200px;
  height: 200px;
  border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
  background: linear-gradient(45deg, var(--secondary), var(--primary-dark));
  opacity: 0.1;
  animation: float 7s ease-in-out infinite;
  animation-delay: 2s;
}

@keyframes float {
  0% {
    transform: translateY(0) rotate(0deg);
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
  }
  50% {
    transform: translateY(-20px) rotate(5deg);
    border-radius: 50% 50% 20% 80% / 25% 80% 20% 75%;
  }
  100% {
    transform: translateY(0) rotate(0deg);
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
  }
}

/* Section Header */
.section-header {
  position: relative;
  z-index: 2;
  margin-bottom: 4rem;
}

.header-badge {
  display: inline-block;
  background: rgba(99, 102, 241, 0.1);
  color: var(--primary);
  padding: 0.5rem 1.25rem;
  border-radius: 50px;
  font-size: 0.875rem;
  font-weight: 600;
  letter-spacing: 0.5px;
  margin-bottom: 1rem;
}

.section-header h2 {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--dark);
  margin-bottom: 1rem;
}

.text-gradient {
  background: linear-gradient(90deg, var(--primary), var(--secondary));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.section-header .lead {
  font-size: 1.25rem;
  color: var(--gray);
  max-width: 600px;
  margin: 0 auto;
}

/* Pricing Toggle */
.pricing-toggle {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 2rem;
  gap: 1rem;
}

.pricing-toggle span {
  font-weight: 600;
  color: var(--gray);
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 30px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: var(--transition);
}

.slider:before {
  position: absolute;
  content: "";
  height: 22px;
  width: 22px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: var(--transition);
}

input:checked + .slider {
  background: linear-gradient(90deg, var(--primary), var(--secondary));
}

input:checked + .slider:before {
  transform: translateX(30px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

/* Pricing Cards */


@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.illustration-img {
  position: relative;
  z-index: 2;
  width: 80px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.illustration-img img {
  max-width: 100%;
  max-height: 100%;
  filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.1));
}

/* Card Header */
.card-header {
  text-align: center;
  margin-bottom: 1.5rem;
}

.card-header h3 {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--dark);
  margin-bottom: 0.5rem;
}

.price {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  margin-bottom: 0.5rem;
}

.price .currency {
  font-size: 1.25rem;
  font-weight: 600;
  color: var(--dark);
  margin-right: 0.25rem;
  line-height: 2.5rem;
}

.price .amount {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--dark);
  line-height: 1;
}

.price .period {
  font-size: 1rem;
  color: var(--gray);
  align-self: flex-end;
  margin-left: 0.25rem;
  line-height: 2.5rem;
}

.price-description {
  font-size: 0.875rem;
  color: var(--gray);
}

/* Card Body */
.card-body {
  margin-bottom: 2rem;
}

.features {
  list-style: none;
  padding: 0;
  margin: 0;
}

.features li {
  display: flex;
  align-items: flex-start;
  gap: 0.75rem;
  padding: 0.75rem 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.features li:last-child {
  border-bottom: none;
}

.features li i {
  color: var(--secondary);
  font-size: 1rem;
  margin-top: 0.25rem;
}

.features li span {
  color: var(--dark);
  font-size: 0.9375rem;
}

/* Card Footer */
.btn-purchase {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  padding: 1rem;
  background: linear-gradient(90deg, var(--primary), var(--primary-dark));
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: var(--transition);
  margin-bottom: 1rem;
}

.btn-purchase:hover {
  background: linear-gradient(90deg, var(--primary-dark), var(--primary));
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
}

.btn-purchase i {
  margin-left: 0.5rem;
  transition: var(--transition);
}

.btn-purchase:hover i {
  transform: translateX(3px);
}

.contact-link a {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  color: var(--gray);
  font-size: 0.875rem;
  text-decoration: none;
  transition: var(--transition);
}

.contact-link a:hover {
  color: var(--primary);
}

.contact-link i {
  font-size: 1rem;
}

/* Comparison Button */
.btn-comparison {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  background: transparent;
  border: 1px solid var(--primary-light);
  color: var(--primary);
  padding: 0.75rem 1.5rem;
  border-radius: 50px;
  font-size: 0.9375rem;
  font-weight: 600;
  cursor: pointer;
  transition: var(--transition);
}

.btn-comparison:hover {
  background: rgba(99, 102, 241, 0.1);
  transform: translateY(-2px);
}

/* Responsive Adjustments */
@media (max-width: 992px) {
  .section-header h2 {
    font-size: 2rem;
  }
  
  .pricing-card {
    margin-bottom: 2rem;
  }
}

@media (max-width: 768px) {
  .pricing-section {
    padding: 4rem 0;
  }
  
  .section-header h2 {
    font-size: 1.75rem;
  }
  
  .price .amount {
    font-size: 2rem;
  }
  
  .price .period,
  .price .currency {
    font-size: 0.875rem;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Pricing toggle functionality
  const pricingToggle = document.getElementById('pricing-toggle');
  if (pricingToggle) {
    pricingToggle.addEventListener('change', function() {
      const basicPrices = document.querySelectorAll('.price .amount');
      const basicPlans = document.querySelectorAll('.card-badge');
      
      if (this.checked) {
        // Switch to premium pricing
        basicPrices[0].textContent = '2,499';
        basicPrices[1].textContent = '1,999';
        basicPrices[2].textContent = '1,499';
        
        basicPlans[0].textContent = 'Advanced';
        basicPlans[1].textContent = 'Professional';
        basicPlans[2].textContent = 'Business';
      } else {
        // Switch to basic pricing
        basicPrices[0].textContent = '1,499';
        basicPrices[1].textContent = '999';
        basicPrices[2].textContent = '999';
        
        basicPlans[0].textContent = 'Standard';
        basicPlans[1].textContent = 'Popular';
        basicPlans[2].textContent = 'Essential';
      }
    });
  }
  
  // Card hover animations
  const cards = document.querySelectorAll('.pricing-card');
  cards.forEach(card => {
    card.addEventListener('mousemove', function(e) {
      const rect = this.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const angleY = (x - centerX) / 20;
      const angleX = (centerY - y) / 20;
      
      this.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-10px)`;
    });
    
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(-10px)';
    });
  });
  
  // Animate cards on scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate__fadeInUp');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  
  document.querySelectorAll('.pricing-card').forEach(card => {
    observer.observe(card);
  });
});
</script>

  <!-- Content Sections with Tabs -->
  <div class="container mx-auto px-4 py-12">
  <div class="bg-white rounded-xl shadow-lg overflow-hidden animate__animated animate__fadeIn">
    <div class="flex flex-col lg:flex-row">
      <!-- Image Section -->
     <div class="lg:w-2/5 bg-gradient-to-br from-blue-500/30 to-indigo-600/30 relative overflow-hidden">
  <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80')] bg-cover bg-center"></div>
  <div class="absolute inset-0 bg-gradient-to-br from-blue-500/70 to-indigo-600/70"></div>
  <div class="relative h-full p-8 flex flex-col justify-center text-white">
    <h2 class="text-3xl font-bold mb-4 animate__animated animate__fadeInLeft"><span style="color:rgb(230, 143, 14);">ITR Filing</span> Made Simple</h2>
    <p class="mb-6 text-white/90 animate__animated animate__fadeInLeft animate__delay-1s">Everything you need to know about Income Tax Returns in one place</p>
    <div class="flex space-x-4 animate__animated animate__fadeInUp animate__delay-2s">
      <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm hover:bg-white/30 transition-all" style="background-color:orange;">
        <i class="fas fa-file-alt text-2xl"></i>
      </div>
      <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm hover:bg-white/30 transition-all" style="background-color:orange;">
        <i class="fas fa-calculator text-2xl"></i>
      </div>
      <div class="w-16 h-16 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm hover:bg-white/30 transition-all" style="background-color:orange;">
        <i class="fas fa-shield-alt text-2xl"></i>
      </div>
    </div>
  </div>
</div>
      <!-- Tabs Section -->
      <div class="lg:w-3/5 p-8">
        <ul class="nav nav-tabs flex border-b border-gray-200 mb-8" id="infoTabs" role="tablist">
          <li class="nav-item mr-2" role="presentation">
            <button style="color:orangered;" class="nav-link active px-4 py-3 text-sm font-medium rounded-t-lg transition-all duration-300 hover:bg-blue-50 hover:text-blue-800 border-b-2 border-transparent hover:border-blue-300" id="why-tab" data-bs-toggle="tab" data-bs-target="#why" type="button" role="tab">
              <i class="fas fa-question-circle mr-2"></i> Why File ITR?
            </button>
          </li>
          <li class="nav-item mr-2" role="presentation">
            <button  style="color:orangered;" class="nav-link px-4 py-3 text-sm font-medium rounded-t-lg transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-300" id="types-tab" data-bs-toggle="tab" data-bs-target="#types" type="button" role="tab">
              <i class="fas fa-list-ul mr-2"></i> ITR Types
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button style="color:orangered;" class="nav-link px-4 py-3 text-sm font-medium rounded-t-lg transition-all duration-300 hover:bg-blue-50 hover:text-blue-600 border-b-2 border-transparent hover:border-blue-300" id="docs-tab" data-bs-toggle="tab" data-bs-target="#docs" type="button" role="tab">
              <i class="fas fa-file-signature mr-2"></i> Documents
            </button>
          </li>
        </ul>

        <div class="tab-content" id="infoTabsContent">
          <!-- Why File ITR Tab -->
          <div class="tab-pane fade show active" id="why" role="tabpanel">
            <div class="grid md:grid-cols-2 gap-6">
              <div class="info-card bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-start">
                  <div class="bg-blue-100 p-3 rounded-lg mr-4 text-blue-600">
                    <i class="fas fa-gavel text-xl"></i>
                  </div>
                  <div>
                    <h4 class="text-lg fw-bold  mb-2" style="color:#0a203f;">Legal Compliance</h4>
                    <p class="text-gray-600 text-sm">Avoid penalties up to ₹10,000 and legal scrutiny by filing accurate returns before the deadline.</p>
                  </div>
                </div>
              </div>
              <div class="info-card bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-start">
                  <div class="bg-green-100 p-3 rounded-lg mr-4 text-green-600">
                    <i class="fas fa-file-invoice-dollar text-xl"></i>
                  </div>
                  <div>
                    <h4 class="text-lg mb-2 fw-bold"  style="color:#0a203f;">Financial Proof</h4>
                    <p class="text-gray-600 text-sm">Essential documentation for loans, credit cards, visas, and property transactions.</p>
                  </div>
                </div>
              </div>
              <div class="info-card bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-start">
                  <div class="bg-purple-100 p-3 rounded-lg mr-4 text-purple-600">
                    <i class="fas fa-hand-holding-usd text-xl"></i>
                  </div>
                  <div>
                    <h4 class="text-lg font-semibold mb-2 fw-bold"  style="color:#0a203f;">Refund Claims</h4>
                    <p class="text-gray-600 text-sm">Get your TDS refunds processed within 3-6 months when filing returns.</p>
                  </div>
                </div>
              </div>
              <div class="info-card bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md hover:border-blue-100 transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-start">
                  <div class="bg-yellow-100 p-3 rounded-lg mr-4 text-yellow-600">
                    <i class="fas fa-chart-line text-xl"></i>
                  </div>
                  <div>
                    <h4 class="text-lg font-semibold mb-2 fw-bold"  style="color:#0a203f;">Business Growth</h4>
                    <p class="text-gray-600 text-sm">Required for government tenders, contracts, and establishing investor confidence.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- ITR Types Tab -->
          <div class="tab-pane fade" id="types" role="tabpanel">
            <div class="accordion space-y-4" id="itrTypesAccordion">
              <div class="accordion-item bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button flex items-center justify-between w-full px-6 py-4 text-left font-medium bg-blue-50 hover:bg-blue-100 transition-colors duration-300" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                    <span class="flex items-center">
                      <i class="fas fa-user-tie text-blue-600 mr-3"></i>
                      ITR 1 (SAHAJ)
                    </span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                  <div class="accordion-body px-6 py-4 bg-white border-t border-gray-100">
                    For salaried individuals with income up to ₹50 lakh from salary, one house property, and other sources (interest, dividends). Cannot be used if you have capital gains, lottery income, or agricultural income above ₹5,000.
                  </div>
                </div>
              </div>
              <div class="accordion-item bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button flex items-center justify-between w-full px-6 py-4 text-left font-medium bg-blue-50 hover:bg-blue-100 transition-colors duration-300" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    <span class="flex items-center">
                      <i class="fas fa-home text-green-600 mr-3"></i>
                      ITR 2
                    </span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                  <div class="accordion-body px-6 py-4 bg-white border-t border-gray-100">
                    For individuals and HUFs not having income from business or profession. Includes income from salary, house property, capital gains (both short-term and long-term), and other sources. Also used if you have foreign assets or agricultural income above ₹5,000.
                  </div>
                </div>
              </div>
              <div class="accordion-item bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-md">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button flex items-center justify-between w-full px-6 py-4 text-left font-medium bg-blue-50 hover:bg-blue-100 transition-colors duration-300" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                    <span class="flex items-center">
                      <i class="fas fa-briefcase text-purple-600 mr-3"></i>
                      ITR 3
                    </span>
                    <i class="fas fa-chevron-down transition-transform duration-300"></i>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                  <div class="accordion-body px-6 py-4 bg-white border-t border-gray-100">
                    For individuals/HUFs having income from a proprietary business or profession. Includes all income sources covered under ITR-2 plus business/professional income. Must be filed if total turnover exceeds ₹2 crore (₹1 crore for presumptive taxation).
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Documents Tab -->
          <div class="tab-pane fade" id="docs" role="tabpanel">
            <div class="grid md:grid-cols-2 gap-6">
              <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold mb-4 flex items-center">
                  <i class="fas fa-id-card text-blue-500 mr-2"></i>
                  Personal Documents
                </h3>
                <ul class="space-y-3">
                  <li class="flex items-start group">
                    <div class="bg-blue-100 p-1 rounded-full mr-3 group-hover:bg-blue-200 transition-colors duration-300">
                      <i class="fas fa-check text-blue-600 text-xs"></i>
                    </div>
                    <span class="text-gray-700"><strong>PAN Card:</strong> Linked with Aadhaar (mandatory)</span>
                  </li>
                  <li class="flex items-start group">
                    <div class="bg-blue-100 p-1 rounded-full mr-3 group-hover:bg-blue-200 transition-colors duration-300">
                      <i class="fas fa-check text-blue-600 text-xs"></i>
                    </div>
                    <span class="text-gray-700"><strong>Login Credentials:</strong> Income Tax Portal username/password</span>
                  </li>
                  <li class="flex items-start group">
                    <div class="bg-blue-100 p-1 rounded-full mr-3 group-hover:bg-blue-200 transition-colors duration-300">
                      <i class="fas fa-check text-blue-600 text-xs"></i>
                    </div>
                    <span class="text-gray-700"><strong>Bank Details:</strong> For refund processing (IFSC & account number)</span>
                  </li>
                  <li class="flex items-start group">
                    <div class="bg-blue-100 p-1 rounded-full mr-3 group-hover:bg-blue-200 transition-colors duration-300">
                      <i class="fas fa-check text-blue-600 text-xs"></i>
                    </div>
                    <span class="text-gray-700"><strong>DSC:</strong> Digital Signature Certificate for companies/LLPs</span>
                  </li>
                </ul>
              </div>
              <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold mb-4 flex items-center">
                  <i class="fas fa-file-alt text-green-500 mr-2"></i>
                  Financial Documents
                </h3>
                <ul class="space-y-3">
                  <li class="flex items-start group">
                    <div class="bg-green-100 p-1 rounded-full mr-3 group-hover:bg-green-200 transition-colors duration-300">
                      <i class="fas fa-check text-green-600 text-xs"></i>
                    </div>
                    <span class="text-gray-700"><strong>Form 16:</strong> From employer (Part A & B)</span>
                  </li>
                  <li class="flex items-start group">
                    <div class="bg-green-100 p-1 rounded-full mr-3 group-hover:bg-green-200 transition-colors duration-300">
                      <i class="fas fa-check text-green-600 text-xs"></i>
                    </div>
                    <span class="text-gray-700"><strong>Investment Proofs:</strong> For deductions (80C, 80D, etc.)</span>
                  </li>
                  <li class="flex items-start group">
                    <div class="bg-green-100 p-1 rounded-full mr-3 group-hover:bg-green-200 transition-colors duration-300">
                      <i class="fas fa-check text-green-600 text-xs"></i>
                    </div>
                    <span class="text-gray-700"><strong>Interest Certificates:</strong> From banks/post office</span>
                  </li>
                  <li class="flex items-start group">
                    <div class="bg-green-100 p-1 rounded-full mr-3 group-hover:bg-green-200 transition-colors duration-300">
                      <i class="fas fa-check text-green-600 text-xs"></i>
                    </div>
                    <span class="text-gray-700"><strong>Capital Gains:</strong> Broker statements for equity transactions</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
  @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
  
  .nav-tabs .nav-link {
    position: relative;
    color: #6b7280;
  }
  
  .nav-tabs .nav-link.active {
    color: #3b82f6;
    border-bottom-color: #3b82f6;
    border-bottom-width: 2px;
    font-weight: 500;
  }
  
  .nav-tabs .nav-link:not(.active):hover {
    color: #2563eb;
  }
  
  .accordion-button:not(.collapsed) .fa-chevron-down {
    transform: rotate(180deg);
  }
  
  .info-card:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
  }
  
  .accordion-item:hover {
    transform: translateY(-2px);
  }
  
  .document-list li {
    transition: all 0.3s ease;
    padding: 8px 0;
    border-bottom: 1px solid #f3f4f6;
  }
  
  .document-list li:hover {
    background-color: #f9fafb;
    padding-left: 8px;
  }
</style>

<script>
  // Add animation when tabs change
  document.querySelectorAll('[data-bs-toggle="tab"]').forEach(tab => {
    tab.addEventListener('click', function() {
      const target = document.querySelector(this.getAttribute('data-bs-target'));
      target.classList.remove('animate__fadeIn');
      void target.offsetWidth; // Trigger reflow
      target.classList.add('animate__fadeIn');
    });
  });
</script>
</div>
<style>
  /* Base Styles */
  :root {
    --primary-color: #2c3e50;
    --secondary-color: #3498db;
    --accent-color: #e74c3c;
    --light-color: #ecf0f1;
    --dark-color: #2c3e50;
    --highlight-color: #3498db;
  }
  
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    line-height: 1.6;
  }
  
  .highlight {
    color: var(--highlight-color);
    font-weight: 600;
  }
  
  /* Hero Section */
  .services-hero {
    position: relative;
    height: 80vh;
    min-height: 600px;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    overflow: hidden;
  }
  
  .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(10, 32, 63, 0.85) 0%, rgba(33, 82, 150, 0.85) 100%);
  }
  
  .hero-content {
    position: relative;
    z-index: 2;
    color: white;
    max-width: 800px;
  }
  
  .hero-content h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
  }
  
  .hero-content p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    text-shadow: 0 1px 2px rgba(0,0,0,0.3);
  }
  
  /* Feature Section */
  .feature-section {
    margin: 5rem 0;
  }
  
  .feature-image {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    transform: perspective(1000px) rotateY(-5deg);
    transition: all 0.5s ease;
  }
  
  .feature-image:hover {
    transform: perspective(1000px) rotateY(0deg) scale(1.03);
  }
  
  .feature-image img {
    width: 100%;
    height: auto;
    display: block;
  }
  
  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.4) 100%);
  }
  
  .feature-content h2 {
    font-size: 2.5rem;
    margin-bottom: 2rem;
    position: relative;
    padding-bottom: 15px;
  }
  
  .feature-content h2:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 4px;
    background: var(--highlight-color);
    border-radius: 2px;
  }
  
  .feature-item {
    display: flex;
    margin-bottom: 1.5rem;
    align-items: flex-start;
  }
  
  .feature-icon {
    background: var(--highlight-color);
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1.5rem;
    flex-shrink: 0;
    font-size: 1.2rem;
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
  }
  
  .feature-text h4 {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
    color: var(--dark-color);
  }
  
  /* Pricing Cards */
  .pricing-container {
    padding: 5rem 0;
    background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover;
    position: relative;
    margin: 5rem 0;
    border-radius: 10px;
    overflow: hidden;
  }
  
  .pricing-container:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(10, 32, 63, 0.9);
  }
  
  .section-header {
    position: relative;
    z-index: 2;
    color: white;
  }
  
  .section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }
  
  .section-header .lead {
    font-size: 1.2rem;
    opacity: 0.9;
  }
  
  .card-box {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
    height: 100%;
    transform: translateY(0);
  }
  
  .card-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
  }
  
  .card-box.featured {
    border: 2px solid var(--highlight-color);
  }
  
  .card-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--highlight-color);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
  }
  
  .card-header {
    padding: 2rem;
    background: var(--primary-color);
    color: white;
    text-align: center;
  }
  
  .card-title {
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
  }
  
  .card-price {
    margin-top: 1rem;
  }
  
  .currency {
    font-size: 1.5rem;
    vertical-align: top;
    line-height: 2.5rem;
  }
  
  .amount {
    font-size: 3rem;
    font-weight: 700;
    margin: 0 5px;
  }
  
  .period {
    font-size: 1rem;
    opacity: 0.8;
  }
  
  .card-body {
    padding: 2rem;
  }
  
  .feature-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem 0;
    text-align: left;
  }
  
  .feature-list li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
  }
  
  .feature-list li i {
    color: var(--highlight-color);
    margin-right: 10px;
    font-size: 1.1rem;
  }
  
  /* Info Tabs */
  .info-tabs {
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.05);
    overflow: hidden;
    margin-bottom: 5rem;
  }
  
  .nav-tabs {
    border-bottom: none;
    background: var(--light-color);
  }
  
  .nav-tabs .nav-link {
    border: none;
    padding: 1rem 2rem;
    font-weight: 600;
    color: var(--dark-color);
    position: relative;
  }
  
  .nav-tabs .nav-link.active {
    color: var(--highlight-color);
    background: white;
  }
  
  .nav-tabs .nav-link.active:after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    height: 3px;
    background: var(--highlight-color);
  }
  
  .tab-content {
    padding: 2rem;
  }
  
  .info-card {
    background: var(--light-color);
    padding: 2rem;
    border-radius: 8px;
    height: 100%;
    transition: all 0.3s ease;
    text-align: center;
    margin-bottom: 1.5rem;
  }
  
  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
  
  .info-card i {
    font-size: 2.5rem;
    color: var(--highlight-color);
    margin-bottom: 1.5rem;
  }
  
  .info-card h4 {
    margin-bottom: 1rem;
    color: var(--dark-color);
  }
  
  .document-list {
    list-style: none;
    padding: 0;
  }
  
  .document-list li {
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
  }
  
  .document-list li i {
    color: var(--highlight-color);
    margin-right: 15px;
    font-size: 1.2rem;
    width: 25px;
    text-align: center;
  }
  
  /* Testimonial Section */
  .testimonial-section {
    background: var(--light-color);
  }
  
  .testimonial-slider {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    gap: 2rem;
    padding-bottom: 2rem;
  }
  
  .testimonial-item {
    min-width: 100%;
    scroll-snap-align: start;
  }
  
  .testimonial-content {
    background: white;
    padding: 2.5rem;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    position: relative;
    max-width: 800px;
    margin: 0 auto;
  }
  
  .quote-icon {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 3rem;
    color: var(--light-color);
    opacity: 0.3;
  }
  
  .testimonial-content p {
    font-size: 1.1rem;
    font-style: italic;
    margin-bottom: 2rem;
  }
  
  .client-info {
    display: flex;
    align-items: center;
  }
  
  .client-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 1.5rem;
    border: 3px solid var(--highlight-color);
  }
  
  .client-info h5 {
    margin-bottom: 0.2rem;
    color: var(--dark-color);
  }
  
  .client-info span {
    font-size: 0.9rem;
    color: #666;
  }
  
  /* CTA Section */
  .cta-section {
    background: var(--primary-color);
    color: white;
  }
  
  .cta-section h2 {
    font-size: 2.5rem;
    margin-bottom: 1.5rem;
  }
  
  .cta-section .lead {
    font-size: 1.2rem;
    opacity: 0.9;
  }
  
  /* Floating Action Button */
  .fab {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 1000;
  }
  
  .fab .btn {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
  }
  
  .pulse {
    animation: pulse 2s infinite;
  }
  
  @keyframes pulse {
    0% {
      box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.7);
    }
    70% {
      box-shadow: 0 0 0 15px rgba(52, 152, 219, 0);
    }
    100% {
      box-shadow: 0 0 0 0 rgba(52, 152, 219, 0);
    }
  }
  
  /* Responsive Adjustments */
  @media (max-width: 992px) {
    .hero-content h1 {
      font-size: 2.8rem;
    }
    
    .feature-section {
      flex-direction: column;
    }
    
    .feature-image {
      margin-bottom: 3rem;
      transform: none !important;
    }
  }
  
  @media (max-width: 768px) {
    .hero-content h1 {
      font-size: 2.2rem;
    }
    
    .hero-content p {
      font-size: 1.2rem;
    }
    
    .card-box {
      margin-bottom: 2rem;
    }
  }
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize animations with Intersection Observer
  const animateOnScroll = (elements, animationClass) => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add(animationClass);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    
    elements.forEach(el => observer.observe(el));
  };
  
  // Animate feature sections
  animateOnScroll(document.querySelectorAll('.feature-image'), 'animate__animated animate__fadeInRight');
  animateOnScroll(document.querySelectorAll('.feature-content'), 'animate__animated animate__fadeInLeft');
  animateOnScroll(document.querySelectorAll('.card-box'), 'animate__animated animate__fadeInUp');
  
  // Card hover effect
  const cards = document.querySelectorAll('.card-box');
  cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-10px)';
    });
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0)';
    });
  });
  
  // Testimonial slider
  let currentTestimonial = 0;
  const testimonials = document.querySelectorAll('.testimonial-item');
  
  function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
      testimonial.style.display = i === index ? 'block' : 'none';
    });
  }
  
  function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    showTestimonial(currentTestimonial);
  }
  
  // Auto-rotate testimonials every 5 seconds
  setInterval(nextTestimonial, 5000);
  showTestimonial(0);
  
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: 'smooth'
        });
      }
    });
  });
  
  // Parallax effect for hero section
  window.addEventListener('scroll', function() {
    const scrollPosition = window.pageYOffset;
    const hero = document.querySelector('.services-hero');
    if (hero) {
      hero.style.backgroundPositionY = `${scrollPosition * 0.3}px`;
    }
  });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
@endsection