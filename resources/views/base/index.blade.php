<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaxFilingHub - Professional Tax Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1c1d35;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: #f9f9f9;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #2980b9;
        }
        
        .navbar {
            background-color: var(--primary-color);
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            padding: 15px 0;
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            background-color: rgba(44, 62, 80, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: white !important;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand span {
            color: var(--accent-color);
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            transition: all 0.3s ease;
            font-weight: 500;
            margin: 0 10px;
            position: relative;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::before {
            width: 100%;
        }
        
        .nav-link:hover {
            color: white !important;
            transform: translateY(-2px);
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 150px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80') no-repeat center center/cover;
            opacity: 0.1;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-size: 3.8rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0.9;
            font-weight: 300;
        }
        
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            padding: 15px 35px;
            font-weight: 600;
            transition: all 0.4s ease;
            border-radius: 50px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.6s ease;
            z-index: -1;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover {
            background-color: #c0392b;
            border-color: #c0392b;
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            border: none;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .feature-card:hover::after {
            transform: scaleX(1);
        }
        
        .feature-icon {
            font-size: 3rem;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: rotate(15deg) scale(1.1);
        }
        
        .section-title {
            font-weight: 800;
            color: var(--dark-color);
            position: relative;
            margin-bottom: 60px;
            font-size: 2.5rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
            border-radius: 2px;
        }
        
        .about-section {
            background-color: var(--light-color);
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }
        
        .about-section::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            border-radius: 50%;
            opacity: 0.1;
        }
        
        .about-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            border-radius: 50%;
            opacity: 0.1;
        }
        
        .stats-container {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .stats-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80') no-repeat center center/cover;
            opacity: 0.1;
        }
        
        .stat-item {
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            background: linear-gradient(135deg, white, #f1f1f1);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .stat-label {
            font-size: 1.2rem;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .testimonial-section {
            padding: 100px 0;
            background-color: white;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin: 15px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .testimonial-card::before {
            content: '\201C';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 5rem;
            color: rgba(52, 152, 219, 0.1);
            font-family: Georgia, serif;
            line-height: 1;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-text {
            position: relative;
            z-index: 1;
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
            border: 3px solid var(--secondary-color);
        }
        
        .author-info h5 {
            margin-bottom: 0;
            font-weight: 600;
        }
        
        .author-info p {
            margin-bottom: 0;
            color: #777;
            font-size: 0.9rem;
        }
        
        .contact-section {
            padding: 120px 0;
            background: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80') no-repeat center center/cover;
            position: relative;
        }
        
        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(44, 62, 80, 0.9);
            z-index: 0;
        }
        
        .contact-form {
            background: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        .form-control {
            height: 55px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            margin-bottom: 25px;
            padding-left: 20px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.1);
            transform: translateY(-2px);
        }
        
        textarea.form-control {
            height: 150px;
            padding-top: 15px;
        }
        
        .floating-label {
            position: relative;
            margin-bottom: 25px;
        }
        
        .floating-label label {
            position: absolute;
            top: 18px;
            left: 20px;
            color: #999;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        .floating-label input:focus + label,
        .floating-label input:not(:placeholder-shown) + label,
        .floating-label textarea:focus + label,
        .floating-label textarea:not(:placeholder-shown) + label {
            top: -10px;
            left: 10px;
            background: white;
            padding: 0 10px;
            font-size: 0.8rem;
            color: var(--secondary-color);
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 80px 0 30px;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
        }
        
        .footer-links h5 {
            margin-bottom: 25px;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }
        
        .footer-links h5::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 15px;
        }
        
        .footer-links li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .footer-links li:hover::before {
            opacity: 1;
            left: -5px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            margin-right: 15px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .social-icons a:hover {
            background-color: var(--accent-color);
            transform: translateY(-5px) rotate(10deg);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
            z-index: 999;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
        }
        
        /* Animations */
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .animate-gradient {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color), var(--secondary-color));
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .animate-shake {
            animation: shake 0.5s ease infinite alternate;
        }
        
        @keyframes shake {
            0% { transform: rotate(-2deg); }
            100% { transform: rotate(2deg); }
        }
        
        .hover-3d {
            transition: all 0.5s ease;
        }
        
        .hover-3d:hover {
            transform: perspective(1000px) rotateY(5deg) rotateX(5deg) translateY(-10px);
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.2);
        }
        
        /* Particle animation */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: float-particle linear infinite;
        }
        
        @keyframes float-particle {
            0% { transform: translateY(0) translateX(0); opacity: 1; }
            100% { transform: translateY(-1000px) translateX(200px); opacity: 0; }
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .contact-form {
                padding: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .btn-primary {
                padding: 12px 25px;
            }
            
            .feature-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-calculator me-2"></i>Tax<span>Filing</span>Hub
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="taxationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Service
    </a>
    <ul class="dropdown-menu" aria-labelledby="taxationsDropdown">
         <li><a class="dropdown-item" href="#">Accounting Support</a></li>
        <li><a class="dropdown-item" href="#">Direct Tax</a></li>
        <li><a class="dropdown-item" href="#">Indirect Tax</a></li>
        <li><a class="dropdown-item" href="#">MSME Certification</a></li>
         <li><a class="dropdown-item" href="#">Project Reports</a></li>
        <li><a class="dropdown-item" href="#">Corperate & Regulatory</a></li>
    </ul>
</li>
   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="taxationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Taxations
    </a>
    <ul class="dropdown-menu" aria-labelledby="taxationsDropdown">
        <li><a class="dropdown-item" href="#">Individual ITR</a></li>
        <li><a class="dropdown-item" href="#">Company/Firm/LLP ITR</a></li>
        <li><a class="dropdown-item" href="#">GST Register</a></li>
         <li><a class="dropdown-item" href="#">GST Return</a></li>
          <li><a class="dropdown-item" href="#">Income Tax Notice and Compliance</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Company
    </a>
    <ul class="dropdown-menu" aria-labelledby="companyDropdown">
        <li><a class="dropdown-item" href="#">Private Limited Company</a></li>
        <li><a class="dropdown-item" href="#">One Person Company (OPC)</a></li>
        <li><a class="dropdown-item" href="#">Limited Liability Partnership(LLP)</a></li>
        <li><a class="dropdown-item" href="#">Public Company</a></li>
        <li><a class="dropdown-item" href="#">Producer Company</a></li>
        <li><a class="dropdown-item" href="#">Nidhi Company</a></li>
        <li><a class="dropdown-item" href="#">Section8 Company(NPO)</a></li>
        <li><a class="dropdown-item" href="#">Micro Finance Company</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="registrationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Registration
    </a>
    <ul class="dropdown-menu" aria-labelledby="registrationDropdown">
        <li><a class="dropdown-item" href="#">Trademark</a></li>
        <li><a class="dropdown-item" href="#">Import&Export</a></li>
        <li><a class="dropdown-item" href="#">EPF AND ESI Registration</a></li>
        <li><a class="dropdown-item" href="#">MSME</a></li>
        <li><a class="dropdown-item" href="#">ISO</a></li>
        <li><a class="dropdown-item" href="#">Shop and Establishment</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="businessDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Business
    </a>
    <ul class="dropdown-menu" aria-labelledby="businessDropdown">
        <li><a class="dropdown-item" href="#">Digital Signature Certificate(DSC)</a></li>
        <li><a class="dropdown-item" href="#">Project/Report Financing</a></li>
        <li><a class="dropdown-item" href="#">Secretarial Compliance</a></li>
        <li><a class="dropdown-item" href="#">Bulk SMS/Email</a></li>
        <li><a class="dropdown-item" href="#">Accounting/Book Keeping</a></li>

    </ul>
</li>
       
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">TDS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="#contact" class="btn btn-primary ms-lg-3 animate-pulse">login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="particles" id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-title">Professional Tax Solutions <span class="text-warning">Made Simple</span></h1>
                    <p class="hero-subtitle">Streamline your tax filing process with our expert services and cutting-edge technology built on taxation.</p>
                    <div>
                        <a href="{{ route('apoint') }}" class="btn btn-primary me-3">Make Appoinment</a>
                        <a href="#contact" class="btn btn-outline-light">Partner with Us</a>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <div class="d-flex">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client" class="rounded-circle border border-3 border-white" width="40">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="rounded-circle border border-3 border-white ms-n2" width="40">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="rounded-circle border border-3 border-white ms-n2" width="40">
                        </div>
                        <div class="ms-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-star text-warning me-1"></i>
                                <i class="fas fa-star text-warning me-1"></i>
                                <i class="fas fa-star text-warning me-1"></i>
                                <i class="fas fa-star text-warning me-1"></i>
                                <i class="fas fa-star text-warning me-1"></i>
                            </div>
                            <small class="text-white-50">Trusted by 1000+ clients</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block" data-aos="fade-left" data-aos-duration="1000">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Tax Illustration" class="img-fluid animate-float">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5" id="services">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Our <span class="text-primary">Services</span></h2>
                <p class="lead">Comprehensive tax solutions tailored to your needs</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <h3>Tax Preparation</h3>
                        <p>Professional tax preparation services for individuals and businesses, ensuring maximum deductions and compliance with all regulations.</p>
                        <a href="#" class="text-primary text-decoration-none mt-3 d-inline-block">Learn more <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Tax Planning</h3>
                        <p>Strategic tax planning to minimize your tax liability and maximize your financial growth throughout the year with our expert advisors.</p>
                        <a href="#" class="text-primary text-decoration-none mt-3 d-inline-block">Learn more <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h3>Audit Support</h3>
                        <p>Expert representation and support if you're facing an IRS audit or tax-related legal issues with our experienced team.</p>
                        <a href="#" class="text-primary text-decoration-none mt-3 d-inline-block">Learn more <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Business Tax</h3>
                        <p>Comprehensive tax solutions for businesses of all sizes, from startups to corporations, ensuring compliance and optimization.</p>
                        <a href="#" class="text-primary text-decoration-none mt-3 d-inline-block">Learn more <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-retweet"></i>
                        </div>
                        <h3>Tax Resolution</h3>
                        <p>Help with tax debt resolution, penalty abatement, and installment agreements to get you back on track with the IRS.</p>
                        <a href="#" class="text-primary text-decoration-none mt-3 d-inline-block">Learn more <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <h3>Cloud Accounting</h3>
                        <p>Modern cloud-based accounting solutions integrated with our tax services for seamless financial management.</p>
                        <a href="#" class="text-primary text-decoration-none mt-3 d-inline-block">Learn more <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                        <div class="stat-number counter" data-count="1500">0</div>
                        <div class="stat-label">Happy Clients</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                        <div class="stat-number counter" data-count="24">0</div>
                        <div class="stat-label">Experts Team</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <div class="stat-number counter" data-count="98">0</div>
                        <div class="stat-label">Success Rate</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item">
                        <div class="stat-number counter" data-count="500">0</div>
                        <div class="stat-label">Cases Solved</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="py-5 info-cards-section">
  <div class="container">
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-3 col-6">
        <div class="image-card animate__animated" data-animation="fadeInUp">
          <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');">
            <div class="image-overlay" style="background-color: rgba(26, 115, 232, 0.85);"></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <i class="fas fa-clipboard-check"></i>
            </div>
            <h6>Requirements</h6>
            <small>For Registration</small>
            <div class="hover-content">
              <p>Everything you need to register your business</p>
              <a href="#" class="btn-explore">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Card 2 -->
      <div class="col-md-3 col-6">
        <div class="image-card animate__animated" data-animation="fadeInUp" data-animation-delay="0.1s">
          <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');">
            <div class="image-overlay" style="background-color: rgba(22, 163, 74, 0.85);"></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <i class="fas fa-file-alt"></i>
            </div>
            <h6>Mandatory</h6>
            <small>Compliances</small>
            <div class="hover-content">
              <p>Essential filings for your business compliance</p>
              <a href="#" class="btn-explore">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Card 3 -->
      <div class="col-md-3 col-6">
        <div class="image-card animate__animated" data-animation="fadeInUp" data-animation-delay="0.2s">
          <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');">
            <div class="image-overlay" style="background-color: rgba(220, 38, 38, 0.85);"></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <i class="fas fa-file-upload"></i>
            </div>
            <h6>Documents</h6>
            <small>Required</small>
            <div class="hover-content">
              <p>Complete checklist of required documents</p>
              <a href="#" class="btn-explore">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Card 4 -->
      <div class="col-md-3 col-6">
        <div class="image-card animate__animated" data-animation="fadeInUp" data-animation-delay="0.3s">
          <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80');">
            <div class="image-overlay" style="background-color: rgba(234, 88, 12, 0.85);"></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h6>Time & Cost</h6>
            <small>For Incorporation</small>
            <div class="hover-content">
              <p>Transparent pricing and timeline</p>
              <a href="#" class="btn-explore">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Image Cards Styling */
  .info-cards-section {
    background-color: #f8fafc;
    position: relative;
    overflow: hidden;
  }
  
  .image-card {
    height: 280px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    position: relative;
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  
  .image-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
  }
  
  .card-image {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    position: relative;
    transition: transform 0.8s ease;
  }
  
  .image-card:hover .card-image {
    transform: scale(1.1);
  }
  
  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    mix-blend-mode: multiply;
    transition: all 0.5s ease;
  }
  
  .image-card:hover .image-overlay {
    opacity: 0.9;
  }
  
  .card-content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    padding: 20px;
    text-align: center;
    z-index: 2;
  }
  
  .card-icon {
    width: 60px;
    height: 60px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 15px;
    transition: all 0.3s ease;
  }
  
  .image-card:hover .card-icon {
    background: rgba(255,255,255,0.3);
    transform: scale(1.1);
  }
  
  .image-card h6 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 5px;
    transition: all 0.3s ease;
  }
  
  .image-card small {
    font-size: 0.85rem;
    opacity: 0.9;
    display: block;
    margin-bottom: 15px;
    transition: all 0.3s ease;
  }
  
  .hover-content {
    position: absolute;
    bottom: -50px;
    left: 0;
    width: 100%;
    padding: 20px;
    opacity: 0;
    transition: all 0.5s ease;
  }
  
  .image-card:hover .hover-content {
    bottom: 20px;
    opacity: 1;
  }
  
  .image-card:hover h6,
  .image-card:hover small {
    transform: translateY(-20px);
  }
  
  .hover-content p {
    margin-bottom: 15px;
    font-size: 0.9rem;
  }
  
  .btn-explore {
    color: white;
    font-size: 0.85rem;
    font-weight: 500;
    text-decoration: none;
    border-bottom: 1px solid rgba(255,255,255,0.3);
    padding-bottom: 3px;
    transition: all 0.3s ease;
  }
  
  .btn-explore:hover {
    border-bottom-color: white;
  }
  
  .btn-explore i {
    margin-left: 5px;
    transition: transform 0.3s ease;
  }
  
  .btn-explore:hover i {
    transform: translateX(3px);
  }
  
  /* Responsive adjustments */
  @media (max-width: 767.98px) {
    .image-card {
      height: 220px;
    }
    
    .card-content {
      padding: 15px;
    }
    
    .card-icon {
      width: 50px;
      height: 50px;
      font-size: 1.25rem;
    }
    
    .image-card h6 {
      font-size: 1.1rem;
    }
  }
</style>

<script>
  // Animation on scroll
  document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.image-card');
    
    const animateCards = function() {
      cards.forEach(card => {
        const cardPosition = card.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (cardPosition < windowHeight - 100) {
          const animation = card.getAttribute('data-animation');
          const delay = card.getAttribute('data-animation-delay') || '0s';
          
          card.style.animationDelay = delay;
          card.classList.add('animate__' + animation);
        }
      });
    };
    
    // Run once on load
    animateCards();
    
    // Run on scroll
    window.addEventListener('scroll', animateCards);
  });
</script>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="About Us" class="img-fluid rounded shadow-lg">
                        <div class="position-absolute bottom-0 start-0 bg-primary text-white p-3 m-3 rounded shadow" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="mb-0">12+ Years</h4>
                            <p class="mb-0">Of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">About <span class="text-primary">TaxFilingHub</span></h2>
                    <p>TaxFilingHub is a modern tax solution provider built on Laravel 12, offering secure and efficient tax services through our cutting-edge web platform. Our system leverages the latest web technologies to provide a seamless user experience.</p>
                    <p>Our team of certified tax professionals combines years of experience with innovative technology to deliver accurate and timely tax services. We stay ahead of the curve with continuous updates to our platform.</p>
                    <div class="mt-4">
                        <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>Laravel 12 powered secure platform with real-time processing</span>
                        </div>
                        <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>AI-enhanced tax calculation engine for maximum accuracy</span>
                        </div>
                        <div class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>Automated document processing with machine learning</span>
                        </div>
                        <div class="d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="bg-primary text-white rounded-circle p-2 me-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <span>Military-grade encryption for all your financial data</span>
                        </div>
                    </div>
                    <div class="mt-4" data-aos="fade-up" data-aos-delay="500">
                        <a href="#" class="btn btn-primary me-2">Learn More</a>
                        <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section" id="testimonials">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">What Our <span class="text-primary">Clients Say</span></h2>
                <p class="lead">Trusted by businesses and individuals nationwide</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item" data-aos="fade-up" data-aos-delay="100">
                            <div class="testimonial-card">
                                <p class="testimonial-text">TaxFilingHub saved me thousands on my tax bill with their expert planning. Their Laravel platform made document submission so easy and secure. Highly recommend their services!</p>
                                <div class="testimonial-author">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
                                    <div class="author-info">
                                        <h5>Sarah Johnson</h5>
                                        <p>Small Business Owner</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-up" data-aos-delay="200">
                            <div class="testimonial-card">
                                <p class="testimonial-text">As a freelancer, taxes were always stressful. TaxFilingHub simplified everything and found deductions I didn't know existed. Their online portal is incredibly user-friendly.</p>
                                <div class="testimonial-author">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                                    <div class="author-info">
                                        <h5>Michael Chen</h5>
                                        <p>Freelance Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-up" data-aos-delay="300">
                            <div class="testimonial-card">
                                <p class="testimonial-text">When I got audited, I panicked. TaxFilingHub handled everything professionally and resolved the issue quickly. Their expertise gave me peace of mind during a stressful time.</p>
                                <div class="testimonial-author">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez">
                                    <div class="author-info">
                                        <h5>Emily Rodriguez</h5>
                                        <p>Marketing Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-aos="fade-up" data-aos-delay="400">
                            <div class="testimonial-card">
                                <p class="testimonial-text">The tax planning session was worth every penny. They projected my tax liability for the next 3 years and set up strategies to minimize it. The Laravel dashboard makes tracking everything simple.</p>
                                <div class="testimonial-author">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="David Wilson">
                                    <div class="author-info">
                                        <h5>David Wilson</h5>
                                        <p>Real Estate Investor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-form hover-3d" data-aos="zoom-in">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="mb-4">Get In Touch</h2>
                                <p class="mb-4">Have questions about our services or need tax advice? Fill out the form and our experts will get back to you within 24 hours.</p>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white rounded-circle p-2 me-3">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Call Us</h5>
                                        <p class="mb-0">(123) 456-7890</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary text-white rounded-circle p-2 me-3">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Email Us</h5>
                                        <p class="mb-0">info@taxfilinghub.com</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle p-2 me-3">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">Visit Us</h5>
                                        <p class="mb-0">123 Tax Street, Financial City</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h5>Follow Us</h5>
                                    <div class="social-icons">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="" method="POST" class="mt-4 mt-lg-0">
                                    @csrf
                                    <div class="floating-label">
                                        <input type="text" name="name" id="name" class="form-control" placeholder=" " required>
                                        <label for="name">Your Name</label>
                                    </div>
                                    <div class="floating-label">
                                        <input type="email" name="email" id="email" class="form-control" placeholder=" " required>
                                        <label for="email">Your Email</label>
                                    </div>
                                    <div class="floating-label">
                                        <input type="tel" name="phone" id="phone" class="form-control" placeholder=" ">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                    <div class="floating-label">
                                        <select name="service" id="service" class="form-control" required>
                                            <option value="" disabled selected></option>
                                            <option value="Tax Preparation">Tax Preparation</option>
                                            <option value="Tax Planning">Tax Planning</option>
                                            <option value="Audit Support">Audit Support</option>
                                            <option value="Business Tax">Business Tax</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <label for="service">Service Needed</label>
                                    </div>
                                    <div class="floating-label">
                                        <textarea name="message" id="message" class="form-control" placeholder=" "></textarea>
                                        <label for="message">Your Message</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-3">
                                        <span class="submit-text">Send Message</span>
                                        <span class="loading d-none">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Sending...
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a class="navbar-brand text-white mb-3" href="#">
                        <i class="fas fa-calculator me-2"></i>Tax<span class="text-danger">Filing</span>Hub
                    </a>
                    <p>Providing professional tax solutions with cutting-edge technology built on Laravel 12. Our platform offers secure, efficient tax services for individuals and businesses.</p>
                    <div class="social-icons mt-4">
                        <a href="#" class="animate-shake"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="animate-shake" style="animation-delay: 0.1s"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="animate-shake" style="animation-delay: 0.2s"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="animate-shake" style="animation-delay: 0.3s"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                    <h5>Our Services</h5>
                    <ul class="footer-links">
                        <li><a href="#">Tax Preparation</a></li>
                        <li><a href="#">Tax Planning</a></li>
                        <li><a href="#">Audit Support</a></li>
                        <li><a href="#">Business Tax</a></li>
                        <li><a href="#">Tax Resolution</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>Contact Info</h5>
                    <ul class="footer-links">
                        <li>
                            <i class="fas fa-map-marker-alt me-2 text-primary"></i> 
                            123 Tax Street, Financial City, FC 12345
                        </li>
                        <li>
                            <i class="fas fa-phone me-2 text-primary"></i> 
                            (123) 456-7890
                        </li>
                        <li>
                            <i class="fas fa-envelope me-2 text-primary"></i> 
                            info@taxfilinghub.com
                        </li>
                        <li>
                            <i class="fas fa-clock me-2 text-primary"></i> 
                            Mon-Fri: 9AM - 6PM
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <p class="mb-0">&copy; 2025 TaxFilingHub. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-white-50 me-3">Privacy Policy</a>
                    <a href="#" class="text-white-50">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS (Animate On Scroll) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Back to top button
        const backToTopButton = document.querySelector('.back-to-top');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });

        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Counter animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        function animateCounters() {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(animateCounters, 1);
                } else {
                    counter.innerText = target;
                }
            });
        }

        // Start counters when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => {
            observer.observe(counter);
        });

        // Testimonial carousel
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                margin: 30,
                responsive: {
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });
        });

        // Form submission animation
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const button = this.querySelector('button[type="submit"]');
                if (button) {
                    const submitText = button.querySelector('.submit-text');
                    const loading = button.querySelector('.loading');
                    
                    if (submitText) submitText.classList.add('d-none');
                    if (loading) loading.classList.remove('d-none');
                }
            });
        });

        // Create particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles-js');
            if (!particlesContainer) return;

            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 2px and 6px
                const size = Math.random() * 4 + 2;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.bottom = `-${size}px`;
                
                // Random animation duration between 10s and 20s
                const duration = Math.random() * 10 + 10;
                particle.style.animationDuration = `${duration}s`;
                
                // Random delay
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                particlesContainer.appendChild(particle);
            }
        }

        // Initialize particles when DOM is loaded
        document.addEventListener('DOMContentLoaded', createParticles);
    </script>
</body>
</html>