@extends('parent.header')

@section('title', 'TDS Return')

@section('content')

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(rgba(255,255,255,0.93), rgba(255,255,255,0.93)), 
                    url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
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
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        overflow: hidden;
        margin-bottom: 25px;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }
    .card-header {
        background: linear-gradient(135deg, #3498db, #2c3e50);
        color: white;
        font-weight: 600;
        border-bottom: none;
    }
    .highlight-box {
        background: #f8f9fa;
        border-left: 4px solid #3498db;
        padding: 20px;
        margin: 25px 0;
        border-radius: 0 8px 8px 0;
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
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background: #2980b9;
        transform: translateY(-2px);
    }
    .feature-icon {
        font-size: 2rem;
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
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        max-height: 450px;
        object-fit: cover;
        transition: all 0.5s ease;
    }
    .side-image:hover {
        transform: scale(1.02);
    }
    .process-step {
        position: relative;
        padding-left: 45px;
        margin-bottom: 20px;
    }
    .process-step:before {
        content: attr(data-step);
        position: absolute;
        left: 0;
        top: 0;
        width: 30px;
        height: 30px;
        background: #3498db;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    .process-step:not(:last-child):after {
        content: '';
        position: absolute;
        left: 15px;
        top: 30px;
        width: 2px;
        height: calc(100% - 30px);
        background: #e9ecef;
    }
    .type-badge {
        background: #e3f2fd;
        color: #1976d2;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 8px;
        transition: all 0.3s ease;
    }
    .type-badge:hover {
        background: #bbdefb;
        transform: translateX(5px);
    }
    @media (max-width: 768px) {
        .section-title:after {
            width: 30px;
        }
        .price-tag {
            font-size: 1.5rem;
        }
    }
</style>

<div class="container py-5">
    <!-- Hero Section -->
    <div class="row align-items-center mb-5 animate-on-scroll">
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold mb-3">Professional TDS Return Filing Services</h1>
            <p class="lead mb-4">Accurate and timely TDS return filing to ensure compliance with Income Tax regulations and avoid penalties.</p>
            <div class="d-flex align-items-center mb-4">
                <div class="price-tag me-3">₹799/-</div>
                <a href="#contact" class="btn btn-primary btn-lg shadow">Start Filing Now</a>
            </div>
            <div class="d-flex flex-wrap">
                <div class="me-4 mb-2">
                    <i class="fas fa-check-circle text-success me-2"></i> 100% Compliance
                </div>
                <div class="me-4 mb-2">
                    <i class="fas fa-check-circle text-success me-2"></i> Expert Assistance
                </div>
                <div class="mb-2">
                    <i class="fas fa-check-circle text-success me-2"></i> Timely Filing
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                 alt="TDS Filing" class="img-fluid side-image">
        </div>
    </div>

    <!-- Services Overview -->
    <div class="row mb-5">
        <div class="col-md-3 mb-4 animate-on-scroll">
            <div class="card h-100 text-center py-4">
                <div class="card-body">
                    <div class="feature-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h5 class="card-title">Form 24Q</h5>
                    <p class="card-text">TDS on Salary Payments</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 animate-on-scroll">
            <div class="card h-100 text-center py-4">
                <div class="card-body">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h5 class="card-title">Form 26Q</h5>
                    <p class="card-text">TDS on Other Payments</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 animate-on-scroll">
            <div class="card h-100 text-center py-4">
                <div class="card-body">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h5 class="card-title">Form 27Q</h5>
                    <p class="card-text">TDS on Non-Residents</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4 animate-on-scroll">
            <div class="card h-100 text-center py-4">
                <div class="card-body">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h5 class="card-title">Form 27EQ</h5>
                    <p class="card-text">Tax Collected at Source</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row">
        <!-- Left Column - Content -->
        <div class="col-lg-7 animate-on-scroll">
            <!-- Time & Cost -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="far fa-clock me-2"></i> Time & Cost</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-success">
                        <i class="fas fa-info-circle me-2"></i> <strong>Standard Service:</strong> ₹799 per return (1-2 working days)
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            Return filing within 1–2 working days after receiving complete data
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            Bulk filing discounts available for multiple returns
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            Urgent processing available at additional charges
                        </li>
                    </ul>
                </div>
            </div>

            <!-- TDS Return Types -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-tasks me-2"></i> Types of TDS Returns</h5>
                </div>
                <div class="card-body">
                    <div class="type-badge">
                        <i class="fas fa-user-tie me-2"></i> Form 24Q - TDS on Salary
                    </div>
                    <div class="type-badge">
                        <i class="fas fa-rupee-sign me-2"></i> Form 26Q - TDS on Other Payments
                    </div>
                    <div class="type-badge">
                        <i class="fas fa-passport me-2"></i> Form 27Q - TDS on Non-Residents
                    </div>
                    <div class="type-badge">
                        <i class="fas fa-cash-register me-2"></i> Form 27EQ - Tax Collected at Source
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column - Process -->
        <div class="col-lg-5 animate-on-scroll">
            <!-- Filing Process -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-project-diagram me-2"></i> Filing Process</h5>
                </div>
                <div class="card-body">
                    <div class="process-step" data-step="1">
                        <h5>Data Collection</h5>
                        <p>Collect PAN and deduction details from deductor</p>
                    </div>
                    <div class="process-step" data-step="2">
                        <h5>Challan Verification</h5>
                        <p>Verify challan details with OLTAS</p>
                    </div>
                    <div class="process-step" data-step="3">
                        <h5>Return Preparation</h5>
                        <p>Prepare return file using RPU (Return Preparation Utility)</p>
                    </div>
                    <div class="process-step" data-step="4">
                        <h5>Upload & Validate</h5>
                        <p>Validate and upload on TRACES/Income Tax portal</p>
                    </div>
                    <div class="process-step" data-step="5">
                        <h5>Acknowledgment</h5>
                        <p>Download acknowledgment and share with client</p>
                    </div>
                </div>
            </div>

            <!-- Data Requirements -->
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"><i class="fas fa-database me-2"></i> Data Requirements</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-id-card text-primary me-3"></i>
                            PAN of deductor and deductees
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-receipt text-info me-3"></i>
                            Challan details (BSR code, date, amount)
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-calculator text-warning me-3"></i>
                            Deduction details (section code, amounts)
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fas fa-signature text-success me-3"></i>
                            Digital signature (if required)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="row mt-5 animate-on-scroll">
        <div class="col-12">
            <div class="card bg-light border-0">
                <div class="card-body text-center py-5">
                    <h2 class="mb-4">Ready to File Your TDS Returns?</h2>
                    <p class="lead mb-4">Our experts will handle everything from data collection to final submission</p>
                    <a href="#contact" class="btn btn-primary btn-lg px-5">
                        <i class="fas fa-paper-plane me-2"></i> Get Started Now
                    </a>
                </div>
            </div>
        </div>
    </div>
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

        // Add hover effect to type badges
        const badges = document.querySelectorAll('.type-badge');
        badges.forEach(badge => {
            badge.addEventListener('mouseenter', function() {
                this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
            });
            badge.addEventListener('mouseleave', function() {
                this.style.boxShadow = 'none';
            });
        });
    });
</script>

@endsection