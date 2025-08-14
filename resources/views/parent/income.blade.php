@extends('parent.header')

@section('title', 'Income Tax')

@section('content')

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)), 
                    url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-attachment: fixed;
    }
    .section-title {
        color: #2c3e50;
        font-weight: 700;
        position: relative;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    .section-title:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 3px;
        background: #3498db;
    }
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        overflow: hidden;
        margin-bottom: 20px;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .card-header {
        background: #3498db;
        color: white;
        font-weight: 600;
        border-bottom: none;
    }
    .highlight-box {
        background: #f8f9fa;
        border-left: 4px solid #3498db;
        padding: 20px;
        margin: 20px 0;
    }
    .price-tag {
        font-size: 2rem;
        font-weight: 700;
        color: #2c3e50;
    }
    .btn-primary {
        background: #3498db;
        border: none;
        padding: 10px 25px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    .btn-primary:hover {
        background: #2980b9;
    }
    .feature-icon {
        font-size: 2.5rem;
        color: #3498db;
        margin-bottom: 15px;
    }
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }
    .animate-on-scroll.visible {
        opacity: 1;
        transform: translateY(0);
    }
    .side-image {
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        max-height: 500px;
        object-fit: cover;
    }
    .list-group-item {
        border-left: none;
        border-right: none;
        padding: 15px 0;
    }
    .list-group-item:first-child {
        border-top: none;
    }
</style>

<div class="container py-5">
    <div class="row align-items-center mb-5 animate-on-scroll">
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold mb-4" style="color:#0a42f8;">GST & <span style="color:#e59d02e7;">Income Tax</span> Notice Compliance Services</h1>
            <p class="lead mb-4 fw-bold">Professional assistance to handle all types of Income Tax and GST notices with expert guidance and timely responses.</p>
            <div class="d-flex align-items-center mb-4">
                <div class="price-tag me-3">₹599/-</div>
                <a href="#contact" class="btn  btn-lg shadow" style="background-color:#0a42f8; color:white;">Get Started Now</a>
            </div>
            <div class="d-flex">
                <div class="me-4">
                    <i class="fas fa-check-circle text-success me-2"></i> Expert Assistance
                </div>
                <div>
                    <i class="fas fa-check-circle text-success me-2"></i> Timely Response
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                 alt="Tax Compliance" class="img-fluid side-image">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-3 mb-4 animate-on-scroll">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <div class="feature-icon" style="color:rgb(247, 129, 4);">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color:#0530bc;">Notice Types</h5>
                    <p class="card-text">Comprehensive coverage of all Income Tax and GST notice types</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 animate-on-scroll">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <div class="feature-icon" style="color:rgb(247, 129, 4);">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color:#0530bc;">Expert Team</h5>
                    <p class="card-text">Experienced professionals to handle your case</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 animate-on-scroll">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <div class="feature-icon" style="color:rgb(247, 129, 4);">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color:#0530bc;">Timely Response</h5>
                    <p class="card-text">Quick turnaround time for notice compliance</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 animate-on-scroll">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <div class="feature-icon" style="color:rgb(247, 129, 4);">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h5 class="card-title fw-bold" style="color:#0530bc;">Cost Effective</h5>
                    <p class="card-text">Affordable pricing with transparent costs</p>
                </div>
            </div>
        </div>
    </div>

   <div class="row align-items-stretch">
    <!-- Left Column - Content -->
    <div class="col-lg-7 animate-on-scroll">
        <h2 class="section-title fw-bold">Our Notice Compliance Services</h2>
        
        <!-- Income Tax Notices Card with Enhanced Animation -->
        <div class="card mb-4 hover-scale">
            <div class="card-header bg-gradient-primary text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Income Tax Notices</span>
                    <i class="fas fa-file-invoice-dollar fa-lg"></i>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-exclamation-circle text-danger me-2"></i>
                        <strong>Defective Income Tax Return</strong> - Section 139(9)
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-search-dollar text-warning me-2"></i>
                        <strong>Income Concealment</strong> - Section 131(1A)
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-question-circle text-info me-2"></i>
                        <strong>Preliminary Enquiry</strong> - Section 142(1)
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-reply-all text-primary me-2"></i>
                        <strong>Follow up Notice</strong> - Section 143(2)
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-running text-secondary me-2"></i>
                        <strong>Income Escaped Assessment</strong> - Section 148
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-hand-holding-usd text-success me-2"></i>
                        <strong>Notice of Demand</strong> - Section 156
                    </li>
                </ul>
            </div>
        </div>

        <!-- GST Notices Card with Enhanced Animation -->
        <div class="card mb-4 hover-scale">
            <div class="card-header  text-white" style="background-color:rgb(223, 131, 2);">
                <div class="d-flex justify-content-between align-items-center">
                    <span>GST Notices</span>
                    <i class="fas fa-receipt fa-lg"></i>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-balance-scale text-danger me-2"></i>
                        Scrutiny Notice for mismatch in GSTR 1 and GSTR 3B
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-credit-card text-info me-2"></i>
                        Difference in Input Tax Credit claims
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-truck text-warning me-2"></i>
                        Inconsistent declaration in GSTR 1 and E-way bill
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-clock text-secondary me-2"></i>
                        Delay in filing GSTR 1 & GSTR 3B
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-money-bill-wave text-danger me-2"></i>
                        Short payment of GST liability
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-exchange-alt text-primary me-2"></i>
                        Wrong GST refund cases
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-calculator text-success me-2"></i>
                        Wrong ITC availed or utilized
                    </li>
                    <li class="list-group-item hover-list-item">
                        <i class="fas fa-clipboard-check text-info me-2"></i>
                        GST Audit cases
                    </li>
                </ul>
            </div>
        </div>

        <!-- Process Section with Animated Steps -->
        <div class="highlight-box animate-on-scroll process-steps">
            <h4 class="mb-4 text-center" style="color:#0530bc;"><i class="fas fa-project-diagram me-2" style="color:#0530bc;"></i> Our Compliance Process</h4>
            <div class="timeline">
                <div class="timeline-step">
                    <div class="timeline-icon bg-primary text-white">
                        1
                    </div>
                    <div class="timeline-content">
                        <h5 style="color:#0530bc;">Initial Consultation</h5>
                        <p>Understand the notice details with our experts</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon bg-info text-white">
                        2
                    </div>
                    <div class="timeline-content">
                        <h5 style="color:#0530bc;">Document Collection</h5>
                        <p>Gather all necessary supporting documents</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon bg-warning text-white">
                        3
                    </div>
                    <div class="timeline-content">
                        <h5 style="color:#0530bc;">Draft Response</h5>
                        <p>Prepare comprehensive reply with legal references</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon bg-secondary text-white">
                        4
                    </div>
                    <div class="timeline-content">
                        <h5 style="color:#0530bc;">Client Review</h5>
                        <p>Discuss implications and get your approval</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon bg-success text-white">
                        5
                    </div>
                    <div class="timeline-content">
                        <h5 style="color:#0530bc;">Submission</h5>
                        <p>Timely filing with the concerned department</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon bg-dark text-white">
                        6
                    </div>
                    <div class="timeline-content">
                        <h5 style="color:#0530bc;">Follow-up</h5>
                        <p>Track status and handle further queries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column - Image and Stats -->
    <div class="col-lg-5 animate-on-scroll">
        <div class="position-sticky" style="top: 20px;">
            <!-- Animated Image Card -->
            <div class="card mb-4 hover-zoom">
                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     class="card-img-top" alt="Tax Compliance" style="border-radius: 10px 10px 0 0;">
                <div class="card-body text-center">
                    <h4 class="card-title fw-bold" style="color:#0530bc;">Expert Notice Resolution</h4>
                    <p class="card-text">Our team handles hundreds of notices each month with a 98% success rate</p>
                </div>
            </div>

            <!-- Stats Counter -->
            <div class="card mb-4 bg-light">
                <div class="card-body">
                    <h5 class="text-center fw-bold mb-4" style="color:#0530bc;"><i class="fas fa-chart-line me-2"></i>Our Performance Metrics</h5>
                    <div class="row text-center">
                        <div class="col-4 stat-item">
                            <div class="counter" style="color:rgb(247, 179, 8);" data-target="1500">0</div>
                            <div class="stat-label">Notices Handled</div>
                        </div>
                        <div class="col-4 stat-item">
                            <div class="counter" style="color:rgb(247, 179, 8);" data-target="98">0</div>
                            <div class="stat-label">Success Rate</div>
                        </div>
                        <div class="col-4 stat-item">
                            <div class="counter" style="color:rgb(247, 179, 8);" data-target="24">0</div>
                            <div class="stat-label">Hour Response</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial with Animation -->
            <div class="card hover-scale">
                <div class="card-body">
                    <div class="testimonial-slide">
                        <blockquote class="blockquote">
                            <i class="fas fa-quote-left " style="color:#0530bc;" ></i>
                            <p class="mb-3 " style="color:#0530bc;">Their team resolved my GST notice within 48 hours when I was facing a huge penalty. Professional and efficient service!</p>
                            <footer class="blockquote-footer">Rahul Sharma, <cite>ABC Enterprises</cite></footer>
                        </blockquote>
                    </div>
                    <div class="text-center mt-3">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Additional Styles for Enhanced Section */
    .bg-gradient-primary {
        background: linear-gradient(135deg, #3498db, #2c3e50);
    }
    
    .bg-gradient-success {
        background: linear-gradient(135deg, #2ecc71, #27ae60);
    }
    
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-scale:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    
    .hover-list-item {
        transition: all 0.2s ease;
        padding: 12px 0;
    }
    
    .hover-list-item:hover {
        background-color: #f8f9fa;
        padding-left: 10px;
    }
    
    .hover-zoom {
        overflow: hidden;
    }
    
    .hover-zoom img {
        transition: transform 0.5s ease;
    }
    
    .hover-zoom:hover img {
        transform: scale(1.05);
    }
    
    .timeline {
        position: relative;
        padding-left: 50px;
    }
    
    .timeline-step {
        position: relative;
        margin-bottom: 30px;
    }
    
    .timeline-icon {
        position: absolute;
        left: -50px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        box-shadow: 0 0 0 4px white, 0 3px 5px rgba(0,0,0,0.1);
    }
    
    .timeline-content {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    
    .timeline-step:after {
        content: '';
        position: absolute;
        left: -30px;
        top: 40px;
        width: 2px;
        height: calc(100% - 40px);
        background: #e9ecef;
    }
    
    .timeline-step:last-child:after {
        display: none;
    }
    
    .stat-item {
        padding: 15px 5px;
    }
    
    .counter {
        font-size: 2rem;
        font-weight: 700;
        color: #3498db;
    }
    
    .stat-label {
        font-size: 0.8rem;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .dot {
        height: 10px;
        width: 10px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        margin: 0 2px;
        cursor: pointer;
    }
    
    .dot.active {
        background-color: #3498db;
    }
    
    .testimonial-slide {
        position: relative;
        min-height: 150px;
    }
</style>

<script>
    // Counter Animation
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.counter');
        const speed = 200;
        
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / speed;
            
            if(count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCounter, 1);
            } else {
                counter.innerText = target;
            }
            
            function updateCounter() {
                const count = +counter.innerText;
                if(count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 1);
                } else {
                    counter.innerText = target;
                }
            }
        });
        
        // Simple testimonial slider
        const dots = document.querySelectorAll('.dot');
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                dots.forEach(d => d.classList.remove('active'));
                dot.classList.add('active');
                // Here you would typically change the testimonial content
            });
        });
    });
</script>
   <div class="row mt-5 align-items-stretch">
    <div class="col-lg-6 animate-on-scroll">
        <div class="card h-100 border-0 shadow-lg hover-3d">
            <div class="card-header bg-gradient-primary text-white py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fas fa-tags me-2"></i>Pricing & Timeline</h5>
                    <span class="badge bg-white text-primary">Transparent Pricing</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <!-- Standard Service -->
                    <div class="col-md-6">
                        <div class="pricing-card basic h-100">
                            <div class="pricing-header bg-light p-4 rounded-top">
                                <h5 class="text-center"><i class="fas fa-star text-warning me-2"></i>Standard Service</h5>
                                <div class="price text-center my-3">
                                    <span class="h4">₹599</span>
                                    <span class="text-muted">/basic notice</span>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush rounded-bottom">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Basic notice response
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Document review
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Single department filing
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    3-day turnaround
                                </li>
                            </ul>
                            <div class="text-center mt-3">
                                <button class="btn btn-outline-primary btn-choose-plan">Choose Standard</button>
                            </div>
                        </div>
                    </div>

                    <!-- Premium Service -->
                    <div class="col-md-6">
                        <div class="pricing-card premium h-100">
                            <div class="pricing-header bg-light p-4 rounded-top position-relative">
                                <span class="badge bg-danger position-absolute top-0 start-50 translate-middle">Popular</span>
                                <h5 class="text-center"><i class="fas fa-crown text-warning me-2"></i>Premium Service</h5>
                                <div class="price text-center my-3">
                                    <span class="h4">Custom</span>
                                    <span class="text-muted">/complex cases</span>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush rounded-bottom">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Comprehensive handling
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Expert consultation
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Multi-department coordination
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Priority status tracking
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    24-hour emergency service
                                </li>
                            </ul>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-choose-plan">Choose Premium</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Note Section with Animation -->
                <div class="alert alert-info mt-4 alert-animate" role="alert">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-info-circle fa-2x me-3"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="alert-heading">Important Note</h5>
                            <p class="mb-1">Time depends on case complexity. Urgent cases can be prioritized with same-day consultation.</p>
                            <p class="mb-0">Professional fees are <strong>₹2000/hour</strong> for complex matters.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column - Image and Features -->
    <div class="col-lg-6 animate-on-scroll">
        <div class="card h-100 border-0 overflow-hidden">
            <div class="row g-0 h-100">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card-body p-4 bg-light d-flex flex-column justify-content-center">
                        <h3 class="mb-4"><i class="fas fa-business-time text-primary me-2"></i> Why Choose Us?</h3>
                        
                        <div class="feature-list">
                            <div class="feature-item mb-3 d-flex">
                                <div class="feature-icon bg-primary text-white rounded-circle me-3">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">98% Success Rate</h5>
                                    <p class="text-muted small">Highest resolution rate in the industry</p>
                                </div>
                            </div>
                            
                            <div class="feature-item mb-3 d-flex">
                                <div class="feature-icon bg-success text-white rounded-circle me-3">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">24-Hour Response</h5>
                                    <p class="text-muted small">Urgent cases handled immediately</p>
                                </div>
                            </div>
                            
                            <div class="feature-item mb-3 d-flex">
                                <div class="feature-icon bg-warning text-white rounded-circle me-3">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">CA Experts</h5>
                                    <p class="text-muted small">Certified professionals handling your case</p>
                                </div>
                            </div>
                            
                            <div class="feature-item d-flex">
                                <div class="feature-icon bg-info text-white rounded-circle me-3">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Dedicated Support</h5>
                                    <p class="text-muted small">Single point of contact throughout</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 position-relative">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             class="img-fluid h-100 w-100 object-fit-cover" alt="Tax Experts">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 bg-dark bg-opacity-75 text-white">
                            <h5 class="mb-1">Need Immediate Help?</h5>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-phone-alt me-2"></i>
                                <a href="tel:+917488447789" class="text-white stretched-link">+91 7488447789</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Pricing Card Styles */
    .pricing-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    
    .pricing-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .pricing-card.premium {
        border-top: 3px solid #ffc107;
    }
    
    .pricing-card.basic {
        border-top: 3px solid #0d6efd;
    }
    
    .price {
        font-weight: 700;
    }
    
    .price span.h4 {
        font-size: 2rem;
        color: #2c3e50;
    }
    
    .btn-choose-plan {
        transition: all 0.3s ease;
        font-weight: 600;
        padding: 8px 20px;
    }
    
    /* Feature List Styles */
    .feature-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .feature-item {
        transition: all 0.3s ease;
        padding: 10px;
        border-radius: 8px;
    }
    
    .feature-item:hover {
        background-color: rgba(52, 152, 219, 0.1);
        transform: translateX(5px);
    }
    
    /* Alert Animation */
    .alert-animate {
        animation: pulse 2s infinite alternate;
        border-left: 4px solid #0dcaf0;
    }
    
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(13, 202, 240, 0.4);
        }
        100% {
            box-shadow: 0 0 0 10px rgba(13, 202, 240, 0);
        }
    }
    
    /* 3D Hover Effect */
    .hover-3d {
        transition: all 0.3s ease;
        transform-style: preserve-3d;
    }
    
    .hover-3d:hover {
        transform: perspective(1000px) rotateX(5deg) rotateY(5deg);
        box-shadow: 20px 20px 40px rgba(0,0,0,0.1);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .col-lg-6:first-child {
            margin-bottom: 30px;
        }
        
        .feature-item {
            padding: 8px;
        }
    }
    
    @media (max-width: 768px) {
        .row.g-0 .col-md-6 {
            width: 100%;
        }
        
        .row.g-0 .col-md-6:first-child {
            order: 2;
        }
        
        .row.g-0 .col-md-6:last-child {
            order: 1;
            height: 300px;
        }
    }
</style>

<script>
    // Animation for pricing cards
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover class on mouseenter
        const pricingCards = document.querySelectorAll('.pricing-card');
        pricingCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.classList.add('hover-active');
            });
            
            card.addEventListener('mouseleave', function() {
                this.classList.remove('hover-active');
            });
        });
        
        // Button animation
        const buttons = document.querySelectorAll('.btn-choose-plan');
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.innerHTML = this.innerHTML.includes('Choose') ? 
                    '<i class="fas fa-arrow-right me-2"></i>' + this.textContent : 
                    this.textContent;
            });
            
            button.addEventListener('mouseleave', function() {
                this.innerHTML = this.textContent;
            });
        });
    });
</script>
</div>

<script>
    // Animation on scroll functionality
    document.addEventListener('DOMContentLoaded', function() {
        const animateElements = document.querySelectorAll('.animate-on-scroll');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
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