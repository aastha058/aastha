@extends('header')

@section('title', 'GST Return')

@section('content')

<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .divider {
        width: 60px;
        height: 4px;
        background: #ffc107;
        margin: 15px auto;
    }
    
    .card-hover {
        transition: all 0.3s ease;
    }
    
    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .price-card {
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 20px;
    }
    
    .price-card .card-header {
        font-weight: 700;
        font-size: 1.2rem;
    }
    
    .feature-icon {
        font-size: 2.5rem;
        color: #005293;
        margin-bottom: 15px;
    }
    
    .nav-pills .nav-link.active {
        background-color: #005293;
    }
    
    .nav-pills .nav-link {
        color: #005293;
        font-weight: 500;
    }
    
    .gst-image {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .requirement-item, .document-item {
        padding: 15px;
        border-left: 3px solid #ffc107;
        margin-bottom: 10px;
        background: #f8f9fa;
        transition: all 0.3s ease;
    }
    
    .requirement-item:hover, .document-item:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }
    
    .floating {
        animation: floating 3s ease-in-out infinite;
    }
    
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
</style>

<!-- Hero Section -->
<style>
    .hero-section {
        position: relative;
        overflow: hidden;
        color: white;
        padding: 100px 0;
        margin-bottom: 50px;
        background: linear-gradient(135deg, rgba(0, 82, 147, 0.9) 0%, rgba(0, 123, 255, 0.8) 100%);
    }
    
    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80') center/cover no-repeat;
        z-index: -1;
        opacity: 0.15;
        animation: zoomEffect 20s infinite alternate;
    }
    
    @keyframes zoomEffect {
        0% { transform: scale(1); }
        100% { transform: scale(1.05); }
    }
    
    .divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #ffc107 0%, #ff9800 100%);
        margin: 20px auto;
        border-radius: 2px;
        animation: widen 1.5s ease-out forwards;
    }
    
    @keyframes widen {
        0% { width: 0; opacity: 0; }
        100% { width: 80px; opacity: 1; }
    }
    
    .hero-highlight {
        display: inline-block;
        background: rgba(255, 193, 7, 0.2);
        padding: 5px 15px;
        border-radius: 30px;
        border: 1px solid rgba(255, 193, 7, 0.5);
        margin-bottom: 20px;
        animation: fadeInDown 1s ease-out;
    }
    
    .hero-cta {
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
        transform-style: preserve-3d;
        box-shadow: 0 10px 30px rgba(255, 193, 7, 0.3);
    }
    
    .hero-cta:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 15px 40px rgba(255, 193, 7, 0.4);
    }
    
    .hero-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }
    
    .hero-cta:hover::before {
        left: 100%;
    }
    
    .floating-items {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 40px;
        flex-wrap: wrap;
    }
    
    .floating-item {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 15px 25px;
        border-radius: 10px;
        animation: float 6s ease-in-out infinite;
        transition: all 0.3s ease;
    }
    
    .floating-item:nth-child(1) { animation-delay: 0s; }
    .floating-item:nth-child(2) { animation-delay: 1s; }
    .floating-item:nth-child(3) { animation-delay: 2s; }
    
    .floating-item:hover {
        background: rgba(255, 193, 7, 0.2);
        transform: translateY(-5px);
    }
    
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    
    .typewriter {
        display: inline-block;
        overflow: hidden;
        border-right: 3px solid #ffc107;
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: 1px;
        animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
    }
    
    @keyframes typing {
        from { width: 0 }
        to { width: 100% }
    }
    
    @keyframes blink-caret {
        from, to { border-color: transparent }
        50% { border-color: #ffc107; }
    }
</style>

<div class="hero-section text-center animate__animated animate__fadeIn">
    <div class="hero-bg"></div>
    <div class="container position-relative">
        <div class="hero-highlight animate__animated animate__fadeInDown" style="background-color:#ff9800;">
            <span class="fw-bold">GST COMPLIANCE MADE EASY</span>
        </div>
        <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown">
            <span class="typewriter">Professional <span style="color:#ff9800;">GST Return</span> Filing</span>
        </h1>
        <div class="divider"></div>
        <p class="lead mb-4 fs-4 animate__animated animate__fadeIn animate__delay-1s">
            Hassle-free, accurate GST filing at <span class="text-warning fw-bold">₹499 only</span>
        </p>
        <p class="mb-5 animate__animated animate__fadeIn animate__delay-1s">
            Avoid penalties with our expert-guided GST return filing services
        </p>
        
      
        
        <div class="floating-items">
            <div class="floating-item fw-bold" style="background-color:#ff9800;">
                <i class="fas fa-bolt me-2 text-white"></i> Quick Processing
            </div>
            <div class="floating-item fw-bold" style="background-color:#ff9800;">
                <i class="fas fa-shield-alt me-2 text-white" ></i> Error-Free Filing
            </div>
            <div class="floating-item fw-bold" style="background-color:#ff9800;">
                <i class="fas fa-rupee-sign me-2 text-white"></i> Best Price Guarantee
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <!-- Quick Navigation -->
    <style>
    /* Animation and Card Styles */
    .feature-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        background: white;
        position: relative;
        z-index: 1;
        padding: 30px 20px;
        text-align: center;
    }
    
    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0,82,147,0.1) 0%, rgba(0,123,255,0.05) 100%);
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.12);
    }
    
    .feature-card:hover::before {
        opacity: 1;
    }
    
    .card-icon-wrapper {
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        background: linear-gradient(135deg, #005293 0%, #007bff 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 30px;
        box-shadow: 0 5px 15px rgba(0,82,147,0.3);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .card-icon-wrapper::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            to bottom right,
            rgba(255,255,255,0) 0%,
            rgba(255,255,255,0) 45%,
            rgba(255,255,255,0.8) 50%,
            rgba(255,255,255,0) 55%,
            rgba(255,255,255,0) 100%
        );
        transform: rotate(30deg);
        animation: shine 3s infinite;
    }
    
    @keyframes shine {
        0% { transform: translateX(-100%) rotate(30deg); }
        100% { transform: translateX(100%) rotate(30deg); }
    }
    
    .feature-card:hover .card-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
        animation: pulse 1.5s infinite;
    }
    
    @keyframes pulse {
        0% { transform: scale(1) rotate(5deg); }
        50% { transform: scale(1.05) rotate(5deg); }
        100% { transform: scale(1) rotate(5deg); }
    }
    
    .feature-card h5 {
        font-weight: 700;
        margin-bottom: 15px;
        color: #005293;
        transition: all 0.3s ease;
    }
    
    .feature-card:hover h5 {
        color: #007bff;
    }
    
    .feature-card p {
        color: #6c757d;
        transition: all 0.3s ease;
    }
    
    .feature-card:hover p {
        color: #495057;
    }
    
    /* Floating animation for the entire row */
    @keyframes floatRow {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    
    .floating-row {
        animation: floatRow 8s ease-in-out infinite;
    }
</style>

<div class="row g-4 mb-5 floating-row">
    <div class="col-md-3">
        <div class="feature-card">
            <div class="card-icon-wrapper">
                <i class="fas fa-clipboard-check"></i>
            </div>
            <h5 class="fw-bold" style="color:#ff9800;">Requirements</h5>
            <p class="fw-bold" style="color:rgb(0, 0, 176);">Everything you need to file your GST return</p>
            <div class="mt-3">
                <div class="d-flex justify-content-center">
                    <div class="circle-animation mx-1"></div>
                    <div class="circle-animation mx-1" style="animation-delay: 0.2s"></div>
                    <div class="circle-animation mx-1" style="animation-delay: 0.4s"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="feature-card">
            <div class="card-icon-wrapper">
                <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <h5 class="fw-bold" style="color:#ff9800;">Return Types</h5>
            <p class="fw-bold" style="color:rgb(0, 0, 176);">Different GST return forms explained</p>
            <div class="mt-3">
                <div class="d-flex justify-content-center">
                    <div class="circle-animation mx-1"></div>
                    <div class="circle-animation mx-1" style="animation-delay: 0.2s"></div>
                    <div class="circle-animation mx-1" style="animation-delay: 0.4s"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="feature-card">
            <div class="card-icon-wrapper">
                <i class="fas fa-rupee-sign"></i>
            </div>
            <h5 class="fw-bold" style="color:#ff9800;">Pricing</h5>
            <p class="fw-bold" style="color:rgb(0, 0, 176);">Affordable packages for all needs</p>
            <div class="mt-3">
                <div class="d-flex justify-content-center">
                    <div class="circle-animation mx-1"></div>
                    <div class="circle-animation mx-1" style="animation-delay: 0.2s"></div>
                    <div class="circle-animation mx-1" style="animation-delay: 0.4s"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="feature-card">
            <div class="card-icon-wrapper">
                <i class="fas fa-file-alt"></i>
            </div>
            <h5 class="fw-bold" style="color:#ff9800;">Documents</h5>
            <p class="fw-bold" style="color:rgb(0, 0, 176);">Checklist of required documents</p>
            <div class="mt-3">
                <div class="d-flex justify-content-center">
                    <div class="circle-animation mx-1"></div>
                    <div class="circle-animation mx-1" style="animation-delay: 0.2s"></div>
                    <div class="circle-animation mx-1" style="animation-delay: 0.4s"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Circle animation dots */
    .circle-animation {
        width: 8px;
        height: 8px;
        background-color: #007bff;
        border-radius: 50%;
        animation: bounce 1.5s infinite ease-in-out;
        opacity: 0.6;
    }
    
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
</style>

<script>
    // Add random color variation to icons on hover
    document.querySelectorAll('.feature-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            const colors = ['#005293', '#28a745', '#fd7e14', '#6f42c1'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            this.querySelector('.card-icon-wrapper').style.background = `linear-gradient(135deg, ${randomColor} 0%, ${randomColor}80 100%)`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.querySelector('.card-icon-wrapper').style.background = 'linear-gradient(135deg, #005293 0%, #007bff 100%)';
        });
    });
</script>

    <!-- Main Content with Image -->
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" 
                 alt="GST Filing" class="gst-image floating animate__animated animate__fadeInLeft">
        </div>
        <div class="col-lg-6 animate__animated animate__fadeInRight">
            <h2 class="fw-bold  mb-4" style="color:#0350a2;">Why Choose Our GST Return Services?</h2>
            <div class="d-flex mb-3">
                <div class="me-3 text-warning">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div>
                    <h5>Expert Assistance</h5>
                    <p>Our team of GST professionals ensures accurate and timely filing of your returns.</p>
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="me-3 text-warning">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div>
                    <h5>Affordable Pricing</h5>
                    <p>Starting at just ₹499, we offer the most competitive rates in the market.</p>
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="me-3 text-warning">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div>
                    <h5>Quick Processing</h5>
                    <p>We process returns within 30 minutes after receiving your data.</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="me-3 text-warning">
                    <i class="fas fa-check-circle fa-2x"></i>
                </div>
                <div>
                    <h5>Penalty Protection</h5>
                    <p>Avoid heavy penalties and late fees with our timely filing services.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div id="pricing" class="mb-5">
        <h2 class="text-center fw-bold  mb-5" style="color:#0350a2;">Our Pricing Plans</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card price-card card-hover h-100">
                    <div class="card-header bg-primary text-white py-3">
                        <h4 class="mb-0">ESSENTIAL</h4>
                        <h3 class="mb-0">₹499/-</h3>
                        <small>All Inclusive</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> One NIL GST return</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> GSTR 3B or GSTR 1</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Expert review</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Email support</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-primary w-100">Choose Plan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card price-card card-hover h-100">
                    <div class="card-header bg-success text-white py-3">
                        <h4 class="mb-0">ANNUAL (QRMP)</h4>
                        <h3 class="mb-0">₹7,999/-</h3>
                        <small>All Inclusive</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> GSTR 3B & GSTR 1</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> GSTR 9 Annual Return</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Quarterly filing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Priority support</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-success w-100">Choose Plan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card price-card card-hover h-100">
                    <div class="card-header bg-warning text-dark py-3">
                        <h4 class="mb-0">ANNUAL</h4>
                        <h3 class="mb-0">₹9,999/-</h3>
                        <small>All Inclusive</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> GSTR 3B & GSTR 1</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> GSTR 9 Annual Return</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Monthly filing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dedicated manager</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-warning w-100">Choose Plan</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card price-card card-hover h-100">
                    <div class="card-header bg-info text-white py-3">
                        <h4 class="mb-0">COMPOSITION</h4>
                        <h3 class="mb-0">₹5,999/-</h3>
                        <small>All Inclusive</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> GSTR 4 Filing</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> CMP-08 Quarterly</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Annual Return</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Tax saving advice</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent">
                        <button class="btn btn-info w-100">Choose Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Requirements Section -->
    <div id="requirements" class="mb-5">
        <h2 class="fw-bold  mb-4" style="color:#0350a2;">Requirements for GST Return Filing</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="requirement-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-laptop me-2 text-primary"></i> Online Process</h5>
                    <p>GST return filing is completely an online process in India. Our platform makes it simple and straightforward.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="requirement-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-check-circle me-2 text-primary"></i> Accurate Filing</h5>
                    <p>Returns must be filed correctly and error-free to ensure GST credits can be passed to the next stage.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="requirement-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-sign-in-alt me-2 text-primary"></i> Login Credentials</h5>
                    <p>All you need is your GST website login credentials to get started with our service.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="requirement-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-exclamation-triangle me-2 text-primary"></i> Avoid Penalties</h5>
                    <p>Non-filing entails heavy penalties. Late fee is ₹20 for Nil Return, ₹50 per day for other returns.</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="requirement-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-calendar-alt me-2 text-primary"></i> QRMP Scheme</h5>
                    <p>If your turnover is less than ₹5 crore, opt for QRMP scheme to reduce compliance burden and costs.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Types of GST Return -->
    <div id="types" class="mb-5">
        <h2 class="fw-bold  mb-4" style="color:#0350a2;">Types of GST Returns</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 card-hover">
                    <div class="card-header bg-primary text-white">
                        <h5>Regular Taxpayer (Other than QRMP)</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-file-alt me-2 text-warning"></i> <strong>GSTR 3B</strong> - Monthly (20th of next month)</li>
                            <li class="list-group-item"><i class="fas fa-file-alt me-2 text-warning"></i> <strong>GSTR 1</strong> - Monthly (11th of next month)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 card-hover">
                    <div class="card-header bg-success text-white">
                        <h5>Regular Taxpayer (QRMP)</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-file-alt me-2 text-warning"></i> <strong>GSTR 3B</strong> - Quarterly (20th of next month of quarter end)</li>
                            <li class="list-group-item"><i class="fas fa-file-alt me-2 text-warning"></i> <strong>GSTR 1</strong> - Monthly (13th of next month of quarter end)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 card-hover">
                    <div class="card-header bg-warning text-dark">
                        <h5>Composition Taxpayer</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-file-alt me-2 text-warning"></i> <strong>GSTR 4</strong> - Annually (30th April of next year)</li>
                            <li class="list-group-item"><i class="fas fa-file-alt me-2 text-warning"></i> <strong>CMP 08</strong> - Quarterly (18th of next month of quarter end)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 card-hover">
                    <div class="card-header bg-info text-white">
                        <h5>TDS Deductor</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-file-alt me-2 text-warning"></i> <strong>GSTR 7</strong> - Monthly (10th of next month)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Documents Required -->
    <div id="documents" class="mb-5">
        <h2 class="fw-bold  mb-4" style="color:#0350a2;">Documents Required</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="document-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-file-excel me-2 text-primary"></i> GSTR 3B</h5>
                    <p>Format: JSON or Excel or in any format or remote control of software if used</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="document-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-file-excel me-2 text-primary"></i> GSTR 1</h5>
                    <p>Format: JSON or Excel or in any format or remote control of software if used</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="document-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-file-excel me-2 text-primary"></i> GSTR 4</h5>
                    <p>Format: JSON or Excel or in any format or remote control of software if used</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="document-item animate__animated animate__fadeIn">
                    <h5><i class="fas fa-file-excel me-2 text-primary"></i> GSTR 7</h5>
                    <p>Format: JSON or Excel or in any format or remote control of software if used</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="text-center py-5 bg-light rounded-3 mt-5 animate__animated animate__fadeInUp">
        <h3 class="fw-bold mb-4" style="color:#ff9800;">Ready to File Your GST Returns?</h3>
        <p class="lead mb-4 fw-bold" style="color:#005293;">Let our experts handle your GST compliance while you focus on your business.</p>
        <a href="#" class="btn  btn-lg px-5 py-3 fw-bold" style="background-color:#005293; color:white;">START FILING NOW</a>
    </div>
</div>

<!-- Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation classes when elements come into view
        const animateElements = document.querySelectorAll('.requirement-item, .document-item, .card-hover');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeIn');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        animateElements.forEach(element => {
            observer.observe(element);
        });
    });
</script>

@endsection