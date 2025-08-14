<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLP Registration | TaxFilingHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #4895ef;
            --primary-dark: #3f37c9;
            --secondary: #f72585;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #38b000;
            --gradient: linear-gradient(135deg, var(--primary), var(--primary-dark));
            --gradient-accent: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            line-height: 1.6;
            overflow-x: hidden;
            color: var(--dark);
        }

        /* Particle Background */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            opacity: 0.3;
        }

        /* Animated Hero Section */
        .hero-section {
            background: var(--gradient);
            color: orangered;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to right, white, #f8f9fa);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: textShine 3s ease-in-out infinite alternate;
        }

        @keyframes textShine {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .hero-section .lead {
            font-size: 1.5rem;
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }

        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }

        .floating {
            animation: float 8s ease-in-out infinite;
            transform-origin: center;
        }

        /* Glow Effect */
        @keyframes glow {
            0% { box-shadow: 0 0 10px rgba(67, 97, 238, 0.5); }
            50% { box-shadow: 0 0 20px rgba(67, 97, 238, 0.8); }
            100% { box-shadow: 0 0 10px rgba(67, 97, 238, 0.5); }
        }

        .glow {
            animation: glow 3s ease-in-out infinite;
        }

        /* Info Cards with 3D Effect */
        .info-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            height: 100%;
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .info-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            color: orangered;
        }

        .info-card:hover::before {
            opacity: 1;
        }

        .info-card:hover h5,
        .info-card:hover i {
            color: white !important;
        }

        .info-card h5 {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .info-card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
            display: inline-block;
            transition: all 0.3s ease;
        }

        /* Section Styling */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
            color: var(--dark);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
            animation: underlineGrow 1.5s ease-in-out infinite alternate;
        }

        @keyframes underlineGrow {
            0% { width: 60px; }
            100% { width: 100px; }
        }

        /* Feature Cards with Tilt Effect */
        .feature-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            margin-bottom: 30px;
            border: none;
            position: relative;
            transform-style: preserve-3d;
        }

        .feature-card:hover {
            transform: translateY(-10px) rotateY(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .feature-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .feature-card:hover img {
            transform: scale(1.05);
        }

        .feature-card .card-body {
            padding: 25px;
            position: relative;
            z-index: 1;
        }

        .feature-card .card-title {
            font-weight: 600;
            color: var(--primary);
            position: relative;
            display: inline-block;
        }

        .feature-card .card-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .feature-card:hover .card-title::after {
            width: 80px;
        }

        /* Animated List Items */
        .animated-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            opacity: 0;
            animation: fadeInUp 0.5s ease forwards;
        }

        .animated-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--success);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Pricing Card with 3D Flip */
        .pricing-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .pricing-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient-accent);
            transition: height 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .pricing-card:hover::before {
            height: 10px;
        }

        .pricing-card .price {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 20px 0;
            position: relative;
            display: inline-block;
        }

        .pricing-card .price::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--secondary);
        }

        .pricing-card ul {
            list-style: none;
            padding: 0;
            margin-bottom: 30px;
        }

        .pricing-card ul li {
            padding: 12px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            position: relative;
            overflow: hidden;
        }

        .pricing-card ul li::before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: var(--success);
            margin-right: 10px;
        }

        /* Footer with Wave Animation */
        footer {
            background: var(--dark);
            color: white;
            padding: 80px 0 30px;
            position: relative;
            overflow: hidden;
        }

        .wave {
            position: absolute;
            top: -50px;
            left: 0;
            width: 100%;
            height: 50px;
            background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" fill="%23f8f9fa" opacity=".25"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" fill="%23f8f9fa" opacity=".5"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23f8f9fa"/></svg>');
            background-size: cover;
            animation: wave 10s linear infinite;
        }

        @keyframes wave {
            0% { background-position-x: 0; }
            100% { background-position-x: 1200px; }
        }

        /* Custom Button with Gradient */
        .btn-gradient {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-accent);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .btn-gradient:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-gradient:hover::before {
            opacity: 1;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section .lead {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }
    </style>
</head>

<body>
    <!-- Animated Hero Section with Particles -->
    <section class="hero-section">
        <div id="particles-js"></div>
        <div class="hero-content container">
            <h1 class="animate__animated animate__fadeInDown">LLP Registration <span class="text-nowrap">Made Simple</span></h1>
            <p class="lead animate__animated animate__fadeIn animate__delay-1s">Start your business with limited liability protection and tax benefits</p>
            <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-1s">
                <a href="#pricing" class="btn btn-light btn-lg px-4 py-3 btn-gradient">
                    <i class="fas fa-rupee-sign me-2"></i> Only <strong>₹19,499/-</strong>
                </a>
                <a href="#contact" class="btn btn-outline-light btn-lg px-4 py-3">
                    <i class="fas fa-phone-alt me-2"></i> Free Consultation
                </a>
            </div>
            <div class="mt-5 animate__animated animate__fadeIn animate__delay-2s">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Business Team" class="img-fluid rounded-3 shadow floating" style="max-height: 300px;">
            </div>
        </div>
    </section>

    <!-- Features Section with 3D Cards -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title animate__animated animate__fadeIn">Why Choose <span class="text-primary">LLP Registration?</span></h2>
            <p class="lead text-muted animate__animated animate__fadeIn animate__delay-1s">The perfect business structure for startups and professionals</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3 animate__animated animate__fadeInUp">
                <div class="info-card text-center h-100">
                    <i class="fas fa-shield-alt"></i>
                    <h5>Limited Liability</h5>
                    <p>Partners are protected from business debts</p>
                    <div class="mt-3">
                        <span class="badge bg-danger">Security</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="info-card text-center h-100">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h5>Tax Benefits</h5>
                    <p>Lower tax rates than private companies</p>
                    <div class="mt-3">
                        <span class="badge bg-success">Save Money</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="info-card text-center h-100">
                    <i class="fas fa-file-contract"></i>
                    <h5>Less Compliance</h5>
                    <p>Simpler than private limited companies</p>
                    <div class="mt-3">
                        <span class="badge bg-info">Easy</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 animate__animated animate__fadeInUp animate__delay-3s">
                <div class="info-card text-center h-100">
                    <i class="fas fa-user-friends"></i>
                    <h5>Flexible Structure</h5>
                    <p>Customize partnership terms easily</p>
                    <div class="mt-3">
                        <span class="badge bg-warning">Adaptable</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Process Timeline -->
<!-- Process Timeline with Enhanced Design -->
<section class="process-timeline py-5 position-relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="timeline-bg-elements">
        <div class="floating-doc floating-doc-1">
            <img src="https://cdn-icons-png.flaticon.com/512/2991/2991112.png" alt="Document" class="img-fluid">
        </div>
        <div class="floating-doc floating-doc-2">
            <img src="https://cdn-icons-png.flaticon.com/512/1570/1570887.png" alt="Stamp" class="img-fluid">
        </div>
        <div class="floating-doc floating-doc-3">
            <img src="https://cdn-icons-png.flaticon.com/512/3176/3176272.png" alt="Certificate" class="img-fluid">
        </div>
    </div>
    
    <div class="container position-relative z-2">
        <div class="text-center mb-5">
            <h2 class="section-title animate__animated animate__fadeIn">
                <span class="text-gradient-blue-orange">LLP Registration Journey</span>
            </h2>
            <p class="lead text-muted animate__animated animate__fadeIn animate__delay-1s">Our seamless 4-step process to get your LLP registered</p>
        </div>

        <div class="timeline-carousel owl-carousel owl-theme">
            <!-- Step 1 -->
            <div class="timeline-card animate__animated animate__fadeIn">
                <div class="timeline-card-inner">
                    <div class="timeline-card-front">
                        <div class="step-number">1</div>
                        <div class="step-icon">
                            <i class="fas fa-signature"></i>
                        </div>
                        <h5>Name Approval</h5>
                        <div class="badge duration-badge">1-2 Days</div>
                    </div>
                    <div class="timeline-card-back">
                        <h5>Name Approval Process</h5>
                        <p>We help you choose and reserve a unique name for your LLP through RUN-LLP service</p>
                        <ul>
                            <li>Name availability check</li>
                            <li>Reservation application</li>
                            <li>MCA approval</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="timeline-card animate__animated animate__fadeIn animate__delay-1s">
                <div class="timeline-card-inner">
                    <div class="timeline-card-front">
                        <div class="step-number">2</div>
                        <div class="step-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h5>Document Preparation</h5>
                        <div class="badge duration-badge">2-3 Days</div>
                    </div>
                    <div class="timeline-card-back">
                        <h5>Document Preparation</h5>
                        <p>Drafting LLP agreement and preparing all necessary documents for registration</p>
                        <ul>
                            <li>LLP Agreement drafting</li>
                            <li>Partner details compilation</li>
                            <li>Address proof verification</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-card animate__animated animate__fadeIn animate__delay-2s">
                <div class="timeline-card-inner">
                    <div class="timeline-card-front">
                        <div class="step-number">3</div>
                        <div class="step-icon">
                            <i class="fas fa-stamp"></i>
                        </div>
                        <h5>Filing Forms</h5>
                        <div class="badge duration-badge">3-5 Days</div>
                    </div>
                    <div class="timeline-card-back">
                        <h5>Filing with ROC</h5>
                        <p>Submission of FiLLiP form with Registrar of Companies along with required documents</p>
                        <ul>
                            <li>Digital signature application</li>
                            <li>Form FiLLiP submission</li>
                            <li>Payment of fees</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-card animate__animated animate__fadeIn animate__delay-3s">
                <div class="timeline-card-inner">
                    <div class="timeline-card-front">
                        <div class="step-number">4</div>
                        <div class="step-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Certificate Issuance</h5>
                        <div class="badge duration-badge">7-10 Days</div>
                    </div>
                    <div class="timeline-card-back">
                        <h5>Certificate Issuance</h5>
                        <p>Receiving Certificate of Incorporation from ROC and LLP Identification Number</p>
                        <ul>
                            <li>ROC verification</li>
                            <li>Certificate generation</li>
                            <li>PAN/TAN application</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <div class="timeline-nav">
        <button class="timeline-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="timeline-next"><i class="fas fa-chevron-right"></i></button>
    </div>
</section>

<style>
    /* Timeline Section Styles */
    .process-timeline {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9f2ff 100%);
        position: relative;
    }
    
    .text-gradient-blue-orange {
        background: linear-gradient(90deg, #4361ee 0%, #f72585 50%, #f8961e 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: inline;
    }
    
    /* Floating Documents Animation */
    .timeline-bg-elements {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1;
        overflow: hidden;
    }
    
    .floating-doc {
        position: absolute;
        opacity: 0.1;
        filter: grayscale(100%) brightness(0.5);
    }
    
    .floating-doc-1 {
        top: 15%;
        left: 10%;
        width: 80px;
        animation: float 15s ease-in-out infinite;
    }
    
    .floating-doc-2 {
        top: 60%;
        right: 15%;
        width: 70px;
        animation: float 18s ease-in-out infinite reverse;
    }
    
    .floating-doc-3 {
        bottom: 20%;
        left: 20%;
        width: 60px;
        animation: float 12s ease-in-out infinite 2s;
    }
    
    @keyframes float {
        0% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-30px) rotate(5deg); }
        100% { transform: translateY(0) rotate(0deg); }
    }
    
    /* Timeline Cards */
    .timeline-carousel {
        position: relative;
        z-index: 2;
    }
    
    .timeline-card {
        background: white;
        border-radius: 15px;
        padding: 20px;
        margin: 10px;
        box-shadow: 0 10px 30px rgba(67, 97, 238, 0.1);
        height: 350px;
        perspective: 1000px;
        transition: all 0.3s ease;
    }
    
    .timeline-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }
    
    .timeline-card:hover .timeline-card-inner {
        transform: rotateY(180deg);
    }
    
    .timeline-card-front, .timeline-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }
    
    .timeline-card-front {
        background: white;
        color: #333;
        border-radius: 15px;
    }
    
    .timeline-card-back {
        background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
        color: white;
        transform: rotateY(180deg);
        border-radius: 15px;
        text-align: left;
    }
    
    .step-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: #f8961e;
        margin-bottom: 10px;
    }
    
    .step-icon {
        width: 80px;
        height: 80px;
        background: rgba(67, 97, 238, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .step-icon i {
        font-size: 2.5rem;
        color: #4361ee;
    }
    
    .timeline-card-back h5 {
        color: #f8961e;
        margin-bottom: 15px;
    }
    
    .timeline-card-back ul {
        padding-left: 20px;
        text-align: left;
    }
    
    .timeline-card-back ul li {
        margin-bottom: 8px;
        position: relative;
    }
    
    .timeline-card-back ul li::before {
        content: "•";
        color: #f8961e;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }
    
    .duration-badge {
        background: #f8961e;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: 500;
        margin-top: 15px;
    }
    
    /* Navigation Arrows */
    .timeline-nav {
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 20px;
        z-index: 3;
    }
    
    .timeline-prev, .timeline-next {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: white;
        color: #4361ee;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .timeline-prev:hover, .timeline-next:hover {
        background: #4361ee;
        color: white;
        transform: translateY(-3px);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .timeline-card {
            height: 300px;
        }
        
        .step-icon {
            width: 60px;
            height: 60px;
        }
        
        .step-icon i {
            font-size: 2rem;
        }
    }
</style>

<script>
    // Initialize Owl Carousel
    document.addEventListener('DOMContentLoaded', function() {
        $('.timeline-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 4
                }
            }
        });
        
        // Custom navigation
        $('.timeline-next').click(function() {
            $('.timeline-carousel').trigger('next.owl.carousel');
        });
        
        $('.timeline-prev').click(function() {
            $('.timeline-carousel').trigger('prev.owl.carousel');
        });
        
        // Add hover animation to cards
        $('.timeline-card').hover(
            function() {
                $(this).addClass('animate__pulse');
            },
            function() {
                $(this).removeClass('animate__pulse');
            }
        );
    });
</script>

    <!-- Process Section with Animated Timeline -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate__animated animate__fadeIn">Our <span class="text-primary">4-Step</span> Process</h2>
                <p class="lead text-muted animate__animated animate__fadeIn animate__delay-1s">Get your LLP registered quickly and easily</p>
            </div>

            <div class="row g-4">
                <div class="col-md-3 animate__animated animate__fadeInLeft">
                    <div class="info-card text-center h-100 glow">
                        <div class="display-4 text-primary mb-3">1</div>
                        <h5>Name Approval</h5>
                        <p>We reserve your unique LLP name with MCA</p>
                        <div class="small text-muted">1-2 Days</div>
                    </div>
                </div>
                <div class="col-md-3 animate__animated animate__fadeInLeft animate__delay-1s">
                    <div class="info-card text-center h-100 glow">
                        <div class="display-4 text-primary mb-3">2</div>
                        <h5>Document Preparation</h5>
                        <p>Drafting LLP agreement and documents</p>
                        <div class="small text-muted">2-3 Days</div>
                    </div>
                </div>
                <div class="col-md-3 animate__animated animate__fadeInLeft animate__delay-2s">
                    <div class="info-card text-center h-100 glow">
                        <div class="display-4 text-primary mb-3">3</div>
                        <h5>Filing with ROC</h5>
                        <p>Submission to Registrar of Companies</p>
                        <div class="small text-muted">3-5 Days</div>
                    </div>
                </div>
                <div class="col-md-3 animate__animated animate__fadeInLeft animate__delay-3s">
                    <div class="info-card text-center h-100 glow">
                        <div class="display-4 text-primary mb-3">4</div>
                        <h5>Certificate Issued</h5>
                        <p>Receive incorporation certificate</p>
                        <div class="small text-muted">7-10 Days</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section with 3D Flip Card -->
    <section id="pricing" class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title animate__animated animate__fadeIn">Transparent <span class="text-primary">Pricing</span></h2>
            <p class="lead text-muted animate__animated animate__fadeIn animate__delay-1s">All-inclusive package with no hidden fees</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="pricing-card animate__animated animate__zoomIn">
                    <h3>Complete LLP Registration Package</h3>
                    <div class="price">₹19,499</div>
                    <p class="text-muted">One-time payment | All government fees included</p>
                    
                    <ul class="animated-list">
                        <li style="animation-delay: 0.1s">Name approval and reservation</li>
                        <li style="animation-delay: 0.2s">DIN for two designated partners</li>
                        <li style="animation-delay: 0.3s">Digital Signature Certificates (DSC)</li>
                        <li style="animation-delay: 0.4s">LLP Agreement drafting</li>
                        <li style="animation-delay: 0.5s">PAN & TAN application</li>
                        <li style="animation-delay: 0.6s">GST registration (optional)</li>
                    </ul>
                    
                    <a href="#" class="btn btn-primary btn-lg btn-gradient">
                        <i class="fas fa-paper-plane me-2"></i> Start My Registration
                    </a>
                    <p class="small mt-3 text-muted">*Stamp duty extra as per state regulations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Document Requirements with Tilt Effect -->
    <section class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 animate__animated animate__fadeInLeft">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Documents" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Documents Required</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-light mt-3">
                                    <h6><i class="fas fa-user-tie me-2 text-primary"></i> For Partners:</h6>
                                    <ul class="mb-0">
                                        <li>PAN Card</li>
                                        <li>Aadhar Card</li>
                                        <li>Passport Photo</li>
                                        <li>Address Proof</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-light mt-3">
                                    <h6><i class="fas fa-building me-2 text-primary"></i> For Office:</h6>
                                    <ul class="mb-0">
                                        <li>Rent Agreement</li>
                                        <li>Utility Bill</li>
                                        <li>NOC from Owner</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 animate__animated animate__fadeInRight">
                <div class="feature-card">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1511&q=80" alt="Compliance" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Annual Compliance</h3>
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle me-2"></i> Penalties up to ₹5 lakh for non-compliance
                        </div>
                        <div class="alert alert-light">
                            <h6><i class="fas fa-file-alt me-2 text-primary"></i> Form 11:</h6>
                            <p>Annual Return due within 60 days of financial year end</p>
                        </div>
                        <div class="alert alert-light">
                            <h6><i class="fas fa-file-invoice-dollar me-2 text-primary"></i> Form 8:</h6>
                            <p>Statement of Account & Solvency due by 30th October</p>
                        </div>
                        <div class="alert alert-light">
                            <h6><i class="fas fa-receipt me-2 text-primary"></i> Income Tax:</h6>
                            <p>Filed annually by 31st July</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section with Gradient Background -->
    <section class="py-5" style="background: var(--gradient);">
        <div class="container text-center text-white">
            <h2 class="mb-4 animate__animated animate__fadeIn">Ready to Start Your LLP?</h2>
            <p class="lead mb-5 animate__animated animate__fadeIn animate__delay-1s">Our experts will handle everything from name approval to final registration</p>
            <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                <a href="#" class="btn btn-light btn-lg px-4 py-3 btn-gradient">
                    <i class="fas fa-paper-plane me-2"></i> Begin Registration
                </a>
                <a href="#" class="btn btn-outline-light btn-lg px-4 py-3">
                    <i class="fas fa-download me-2"></i> Download Checklist
                </a>
            </div>
        </div>
    </section>

    <!-- Footer with Wave Animation -->
    <footer>
        <div class="wave"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="text-white mb-4">TaxFilingHub</h5>
                    <p>Your trusted partner for business registration and compliance services across India.</p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">LLP Registration</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Private Limited</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">GST Registration</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="text-white mb-4">Contact Info</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> 123 Business Street, Mumbai</li>
                        <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> +91 9876543210</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@taxfilinghub.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="text-center">
                <p class="text-white-50 mb-0">© 2023 TaxFilingHub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        // Initialize particles.js
        document.addEventListener('DOMContentLoaded', function() {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });

            // Animation on scroll
            const animateElements = document.querySelectorAll('.animate__animated');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const animation = entry.target.getAttribute('data-animate');
                        entry.target.classList.add('animate__animated', animation);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            animateElements.forEach(element => {
                observer.observe(element);
            });

            // Add floating animation delay randomly
            const floatElements = document.querySelectorAll('.floating');
            floatElements.forEach(el => {
                el.style.animationDelay = Math.random() * 2 + 's';
            });

            // Animate list items sequentially
            const listItems = document.querySelectorAll('.animated-list li');
            listItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>

</html>