<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Person Company (OPC) | TaxFilingHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #2563eb;
            --dark-blue: #1e40af;
            --light-blue: #e0e7ff;
            --accent-orange: #f97316;
            --dark-orange: #ea580c;
            --gradient-blue: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            --gradient-orange: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: #334155;
            overflow-x: hidden;
        }
        
        /* Premium Hero Section */
        .hero {
            background: var(--gradient-blue);
            text-align: center;
            padding: 100px 20px;
            color: white;
            position: relative;
            overflow: hidden;
            clip-path: ellipse(100% 80% at 50% 20%);
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') center/cover;
            opacity: 0.1;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h2 {
            font-weight: 700;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .hero p.subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        /* Premium Price Tag */
        .price-tag {
            font-size: 1.8rem;
            background: var(--gradient-orange);
            color: white;
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px;
            margin: 20px 0;
            box-shadow: 0 10px 20px rgba(249, 115, 22, 0.3);
            position: relative;
            overflow: hidden;
            border: 2px solid rgba(255,255,255,0.2);
        }
        
        .price-tag::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.1) 45%,
                rgba(255,255,255,0.1) 55%,
                rgba(255,255,255,0) 100%
            );
            transform: rotate(30deg);
            animation: shine 3s infinite;
        }
        
        /* Premium Button */
        .btn-get-started {
            background: var(--gradient-orange);
            color: white;
            padding: 16px 40px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 20px rgba(249, 115, 22, 0.3);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-get-started:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 30px rgba(249, 115, 22, 0.4);
        }
        
        .btn-get-started::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-orange);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .btn-get-started:hover::before {
            opacity: 1;
        }
        
        /* Premium Info Cards */
        .info-cards {
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }
        
        .info-cards .card {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: 16px;
            font-weight: 600;
            color: var(--dark-blue);
            border: none;
            box-shadow: 0 15px 30px rgba(30, 64, 175, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .info-cards .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient-orange);
            transition: height 0.3s ease;
        }
        
        .info-cards .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(30, 64, 175, 0.2);
        }
        
        .info-cards .card:hover::before {
            height: 8px;
        }
        
        .info-cards .card i {
            font-size: 2.5rem;
            margin-bottom: 20px;
            background: var(--gradient-blue);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        /* Premium Section Titles */
        h4.section-title {
            margin-top: 80px;
            color: var(--dark-blue);
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
            font-size: 2rem;
        }
        
        h4.section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 5px;
            background: var(--gradient-orange);
            border-radius: 5px;
        }
        
        /* Premium Feature Boxes */
        .feature-box {
            background: white;
            border-radius: 16px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 15px 30px rgba(30, 64, 175, 0.1);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(226, 232, 240, 0.5);
        }
        
        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(30, 64, 175, 0.2);
        }
        
        .feature-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--gradient-orange);
            transition: width 0.3s ease;
        }
        
        .feature-box:hover::before {
            width: 8px;
        }
        
        .feature-box h5 {
            color: var(--dark-blue);
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
        }
        
        .feature-box ul {
            padding-left: 20px;
        }
        
        .feature-box ul li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 30px;
        }
        
        .feature-box ul li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 16px;
            height: 16px;
            background: var(--gradient-orange);
            border-radius: 50%;
        }
        
        /* Premium Image Cards */
        .image-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(30, 64, 175, 0.1);
            margin-bottom: 40px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            height: 100%;
        }
        
        .image-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(30, 64, 175, 0.2);
        }
        
        .image-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .image-card:hover img {
            transform: scale(1.1);
        }
        
        .image-card .card-body {
            padding: 30px;
            background: white;
            position: relative;
        }
        
        .image-card .card-title {
            color: var(--dark-blue);
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 15px;
        }
        
        .image-card .card-text {
            color: #64748b;
            margin-bottom: 20px;
        }
        
        /* Premium Compliance Items */
        .compliance-item {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px rgba(30, 64, 175, 0.05);
            transition: all 0.3s ease;
            border-left: 4px solid var(--accent-orange);
        }
        
        .compliance-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(30, 64, 175, 0.1);
        }
        
        .compliance-item h5 {
            color: var(--dark-blue);
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .compliance-item h5 i {
            color: var(--accent-orange);
            margin-right: 10px;
        }
        
        /* Premium Footer */
        .footer {
            background: var(--gradient-blue);
            padding: 80px 0 40px;
            text-align: center;
            margin-top: 100px;
            color: white;
            clip-path: ellipse(120% 100% at 50% 100%);
            position: relative;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80') center/cover;
            opacity: 0.05;
            z-index: 0;
        }
        
        .footer-content {
            position: relative;
            z-index: 1;
        }
        
        .footer h5 {
            font-weight: 600;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }
        
        .footer .form-control {
            border-radius: 50px;
            padding: 15px 25px;
            border: none;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 0 auto 20px;
        }
        
        .footer .btn-subscribe {
            background: var(--gradient-orange);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 20px rgba(249, 115, 22, 0.3);
        }
        
        .footer .btn-subscribe:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 30px rgba(249, 115, 22, 0.4);
        }
        
        .social-icons {
            margin: 30px 0;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: white;
            font-size: 1.2rem;
            margin: 0 10px;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .social-icons a:hover {
            background: var(--accent-orange);
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 20px rgba(249, 115, 22, 0.3);
        }
        
        /* Animations */
        @keyframes shine {
            0% { transform: translateX(-100%) rotate(30deg); }
            100% { transform: translateX(100%) rotate(30deg); }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        .floating {
            animation: float 4s ease-in-out infinite;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .hero {
                padding: 80px 20px;
                clip-path: ellipse(120% 80% at 50% 20%);
            }
            
            .hero h2 {
                font-size: 2.5rem;
            }
            
            .info-cards {
                margin-top: 0;
            }
            
            .footer {
                clip-path: ellipse(150% 100% at 50% 100%);
            }
        }
        
        @media (max-width: 767.98px) {
            .hero {
                padding: 60px 15px;
                clip-path: ellipse(150% 80% at 50% 20%);
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .price-tag {
                font-size: 1.4rem;
                padding: 10px 25px;
            }
            
            h4.section-title {
                font-size: 1.6rem;
                margin-top: 60px;
            }
            
            .feature-box, .image-card {
                padding: 30px;
                margin-bottom: 30px;
            }
            
            .footer {
                padding: 60px 0 30px;
            }
        }
    </style>
</head>
<body>

    <!-- Premium Hero Section -->
    <div class="hero">
        <div class="hero-content animate__animated animate__fadeIn">
            <h2 class="animate__animated animate__fadeInDown">One Person Company (OPC)</h2>
            <p class="subtitle animate__animated animate__fadeIn animate__delay-1s">Start your business with limited liability and full control</p>
            <div class="floating animate__animated animate__fadeIn animate__delay-2s">
                <p class="price-tag">Only <strong>₹11,699/-</strong></p>
            </div>
            <button class="btn-get-started animate__animated animate__fadeInUp animate__delay-3s">
                GET STARTED NOW <i class="fas fa-arrow-right ms-2"></i>
            </button>
        </div>
    </div>

    <!-- Premium Info Cards -->
    <div class="container">
        <div class="row info-cards g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card animate__animated animate__fadeIn" data-animation-delay="0.1s">
                    <i class="fas fa-clipboard-check"></i>
                    <h5>Requirements</h5>
                    <p>Everything you need to register your OPC</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card animate__animated animate__fadeIn" data-animation-delay="0.2s">
                    <i class="fas fa-file-contract"></i>
                    <h5>Compliances</h5>
                    <p>Mandatory filings and regulations</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card animate__animated animate__fadeIn" data-animation-delay="0.3s">
                    <i class="fas fa-file-alt"></i>
                    <h5>Documents</h5>
                    <p>Checklist of required paperwork</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card animate__animated animate__fadeIn" data-animation-delay="0.4s">
                    <i class="fas fa-clock"></i>
                    <h5>Time & Cost</h5>
                    <p>Transparent pricing and timeline</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Premium Content Sections -->
    <div class="container py-5">
        <!-- Time and Cost Section -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="feature-box animate__animated animate__fadeInLeft">
                    <h4 class="section-title">TIME AND COST FOR INCORPORATION</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="fas fa-clock text-orange me-2"></i> Time Required</h5>
                            <ul>
                                <li>1 Day: Name Approval</li>
                                <li>1 Working Day</li>
                                <li>3 Days for Approval</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="fas fa-rupee-sign text-orange me-2"></i> Cost Breakdown</h5>
                            <ul>
                                <li>Name Approval: ₹1000</li>
                                <li>Two DSC: ₹2500</li>
                                <li>Stamp Duty: ₹2300</li>
                                <li>Professional Fee: ₹5899</li>
                                <li><strong>Total: ₹11,699/-</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-card animate__animated animate__fadeInRight">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Business Timeline">
                    <div class="card-body">
                        <h5 class="card-title">Fast and Transparent Process</h5>
                        <p class="card-text">We ensure quick registration with no hidden costs</p>
                        <button class="btn btn-primary">View Detailed Timeline</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Requirements Section -->
        <div class="row align-items-center mt-5">
            <div class="col-lg-6 order-lg-2">
                <div class="feature-box animate__animated animate__fadeInRight">
                    <h4 class="section-title">REQUIREMENT FOR REGISTRATION</h4>
                    <p>One Person Company (OPC) is the perfect blend of sole proprietorship benefits with corporate structure advantages.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="benefit-item">
                                <i class="fas fa-check-circle text-orange me-2"></i> Single Promoter
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle text-orange me-2"></i> Full Control
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="benefit-item">
                                <i class="fas fa-check-circle text-orange me-2"></i> Limited Liability
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle text-orange me-2"></i> Easy Compliance
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="image-card animate__animated animate__fadeInLeft">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Business Requirements">
                    <div class="card-body">
                        <h5 class="card-title">Why Choose OPC?</h5>
                        <p class="card-text">The ideal structure for solo entrepreneurs</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compliances Section -->
        <div class="feature-box animate__animated animate__fadeInUp mt-5">
            <h4 class="section-title text-center">MANDATORY COMPLIANCES</h4>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="compliance-item animate__animated" data-animation="fadeInUp" data-animation-delay="0.1s">
                        <h5><i class="fas fa-file-alt"></i> ROC Form MGT 7</h5>
                        <p>Shareholding structure, changes in directorship, transfer of shares (Due 60 days from AGM)</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="compliance-item animate__animated" data-animation="fadeInUp" data-animation-delay="0.2s">
                        <h5><i class="fas fa-file-invoice-dollar"></i> ROC Form AOC 4</h5>
                        <p>Financials, Compliance Certificate, Registered Office, Debentures, etc. (Due 30 days from AGM)</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="compliance-item animate__animated" data-animation="fadeInUp" data-animation-delay="0.3s">
                        <h5><i class="fas fa-user-tie"></i> ROC Form ADT 1</h5>
                        <p>Auditor appointment (Due within 15 days of AGM)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Documents Section -->
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="feature-box animate__animated animate__fadeInLeft">
                    <h4 class="section-title">DOCUMENTS REQUIRED</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="fas fa-user-tie text-orange me-2"></i> For Director</h5>
                            <ul>
                                <li>PAN Card</li>
                                <li>Aadhaar Card</li>
                                <li>Voter ID / DL / Passport</li>
                                <li>DIN (if available)</li>
                                <li>DSC</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="fas fa-building text-orange me-2"></i> For Company</h5>
                            <ul>
                                <li>Proposed Name</li>
                                <li>Business Activity</li>
                                <li>Electricity Bill & NOC</li>
                                <li>Rent Agreement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-card animate__animated animate__fadeInRight">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80" alt="Documents Checklist">
                    <div class="card-body">
                        <h5 class="card-title">Document Assistance</h5>
                        <p class="card-text">We help prepare all required documents</p>
                        <button class="btn btn-primary">Download Checklist</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Premium CTA Section -->
    <div class="cta-section py-5">
        <div class="container text-center">
            <h3 class="animate__animated animate__fadeIn">Ready to Register Your OPC?</h3>
            <p class="animate__animated animate__fadeIn animate__delay-1s">Get started today and enjoy these exclusive benefits:</p>
            <div class="row justify-content-center mt-4">
                <div class="col-md-8">
                    <div class="benefits-grid">
                        <div class="benefit-item animate__animated animate__fadeIn" data-animation-delay="0.1s">
                            <i class="fas fa-check-circle"></i> Free Name Approval Assistance
                        </div>
                        <div class="benefit-item animate__animated animate__fadeIn" data-animation-delay="0.2s">
                            <i class="fas fa-check-circle"></i> Digital Signature Certificate
                        </div>
                        <div class="benefit-item animate__animated animate__fadeIn" data-animation-delay="0.3s">
                            <i class="fas fa-check-circle"></i> GST Registration Support
                        </div>
                        <div class="benefit-item animate__animated animate__fadeIn" data-animation-delay="0.4s">
                            <i class="fas fa-check-circle"></i> 1 Year Compliance Support
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-get-started mt-4 animate__animated animate__fadeInUp animate__delay-2s">
                START REGISTRATION NOW <i class="fas fa-arrow-right ms-2"></i>
            </button>
        </div>
    </div>

    <!-- Premium Footer -->
    <div class="footer">
        <div class="footer-content">
            <h5 class="animate__animated animate__fadeIn">Stay Updated With TaxFilingHub</h5>
            <form class="d-flex justify-content-center mt-4 animate__animated animate__fadeIn animate__delay-1s">
                <input type="email" placeholder="Enter your email" class="form-control">
                <button type="submit" class="btn-subscribe ms-3">Subscribe</button>
            </form>
            <div class="social-icons animate__animated animate__fadeIn animate__delay-2s">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <p class="mt-4 animate__animated animate__fadeIn animate__delay-3s">© 2025 TaxFilingHub. All rights reserved.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('[data-animation], .animate__animated');
            
            const animateOnScroll = function() {
                animateElements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        const animationClass = element.getAttribute('data-animation') || 
                                              element.className.split('animate__')[1].split(' ')[0];
                        const delay = element.getAttribute('data-animation-delay') || '0s';
                        
                        element.style.animationDelay = delay;
                        element.classList.add('animate__' + animationClass);
                    }
                });
            };
            
            // Run once on load
            animateOnScroll();
            
            // Run on scroll
            window.addEventListener('scroll', animateOnScroll);
            
            // Button ripple effect
            document.querySelectorAll('.btn-get-started, .btn-subscribe, .btn-primary').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const ripple = document.createElement('span');
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple-effect');
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 1000);
                });
            });
        });
    </script>
</body>
</html>