@extends('home.header')

@section('title')
    DSC |
@endsection

@section('content')

<!-- Animated Hero Section with Particle Background -->
<section class="dsc-hero-section">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h1 class="hero-title animate__animated animate__fadeInDown">Secure Your Digital Identity</h1>
        <p class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s">Government-approved Digital Signature Certificates for all your online transactions</p>

        <div class="trust-badges mt-4 animate__animated animate__fadeIn animate__delay-2s">
          <div class="badge-item">
            <i class="fas fa-shield-alt"></i>
            <span>ISO 27001 Certified</span>
          </div>
          <div class="badge-item">
            <i class="fas fa-bolt"></i>
            <span>24-48 Hour Delivery</span>
          </div>
          <div class="badge-item">
            <i class="fas fa-headset"></i>
            <span>Dedicated Support</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 animate__animated animate__fadeInRight animate__delay-1s">
        <div class="hero-image-container text-center">
          <img src="https://cdn-icons-png.flaticon.com/512/3059/3059518.png" alt="Digital Signature" class="img-fluid floating" style="max-height: 350px;">
        </div>
    </div>
    </div>
  </div>
</section>

<!-- Animated Process Section -->
<section id="how-it-works" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-label animate__animated animate__fadeIn">PROCESS</div>
      <h2 class="fw-bold display-5 animate__animated animate__fadeIn">
        Get Your DSC in <span class="text-gradient">4 Simple Steps</span>
      </h2>
      <p class="text-muted fs-5 animate__animated animate__fadeIn animate__delay-1s">Secure your digital identity quickly and easily</p>
    </div>

    <!-- Animated Timeline Steps -->
    <div class="process-steps">
      <!-- Step 1 -->
      <div class="step animate__animated animate__fadeInLeft">
        <div class="step-number">1</div>
        <div class="step-content">
          <div class="step-icon bg-primary">
            <i class="fas fa-cloud-upload-alt"></i>
          </div>
          <h3>Submit Documents</h3>
          <p>Upload your PAN, Aadhaar, photo, and other required documents through our secure portal.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="step animate__animated animate__fadeInRight">
        <div class="step-number">2</div>
        <div class="step-content">
          <div class="step-icon bg-success">
            <i class="fas fa-user-check"></i>
          </div>
          <h3>Identity Verification</h3>
          <p>Our team verifies your documents through video KYC or in-person verification.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="step animate__animated animate__fadeInLeft">
        <div class="step-number">3</div>
        <div class="step-content">
          <div class="step-icon bg-warning">
            <i class="fas fa-certificate"></i>
          </div>
          <h3>Certificate Issuance</h3>
          <p>Certifying Authority issues your DSC within 24–48 hours after verification.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="step animate__animated animate__fadeInRight">
        <div class="step-number">4</div>
        <div class="step-content">
          <div class="step-icon bg-dark">
            <i class="fas fa-box-open"></i>
          </div>
          <h3>Delivery & Installation</h3>
          <p>Receive your DSC token by courier with complete installation guide and support.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Section with 3D Card Effect -->
<section id="pricing" class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-label animate__animated animate__fadeIn">PRICING</div>
      <h2 class="fw-bold display-5 animate__animated animate__fadeIn">
        <span class="text-gradient">Simple,</span><span class="text-warning"> Transparent</span><span class="text-success"> Pricing</span>
      </h2>
      <p class="text-muted fs-5 animate__animated animate__fadeIn animate__delay-1s">Choose the plan that fits your needs</p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Basic Plan -->
      <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp">
        <div class="card pricing-card h-100">
          <div class="card-body p-4">
            <div class="text-center">
              <h4 class="fw-bold text-primary">Basic DSC</h4>
              <div class="price-display">
                <span class="currency">₹</span>
                <span class="amount">799</span>
                <span class="period">/year</span>
              </div>
              <p class="text-muted mb-4">For individuals and small businesses</p>
            </div>
            <ul class="feature-list">
              <li><i class="fas fa-check-circle text-success me-2"></i> Class 3 Certificate</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> 1 Year Validity</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> GST & Income Tax Filing</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> Email Support</li>
              <li class="text-muted"><i class="fas fa-times-circle me-2"></i> USB Token Not Included</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Popular Plan -->
      <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="card pricing-card popular h-100">
          <div class="card-body p-4">
            <div class="text-center">
              <h4 class="fw-bold text-warning">Standard DSC</h4>
              <div class="price-display">
                <span class="currency">₹</span>
                <span class="amount">1,199</span>
                <span class="period">/2 years</span>
              </div>
              <p class="text-muted mb-4">Best for professionals and businesses</p>
            </div>
            <ul class="feature-list">
              <li><i class="fas fa-check-circle text-success me-2"></i> Class 3 Certificate</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> 2 Years Validity</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> Includes USB Token</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> All Government Portals</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> Priority Support</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Enterprise Plan -->
      <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="card pricing-card h-100">
          <div class="card-body p-4">
            <div class="text-center">
              <h4 class="fw-bold text-success">Enterprise DSC</h4>
              <div class="price-display">
                <span class="currency">₹</span>
                <span class="amount">1,699</span>
                <span class="period">/3 years</span>
              </div>
              <p class="text-muted mb-4">For corporates and large organizations</p>
            </div>
            <ul class="feature-list">
              <li><i class="fas fa-check-circle text-success me-2"></i> Class 3 with Encryption</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> 3 Years Validity</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> Premium USB Token</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> Bulk Discounts Available</li>
              <li><i class="fas fa-check-circle text-success me-2"></i> Dedicated Account Manager</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Use Cases Section with Interactive Cards -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-label animate__animated animate__fadeIn">USE CASES</div>
      <h2 class="fw-bold display-5 animate__animated animate__fadeIn">
        <span class="text-warning">Use</span> <span class=""style="color: #1e3a8a;">Digital</span> <span class="text-success">Signature</span>
      </h2>
      <p class="text-muted fs-5 animate__animated animate__fadeIn animate__delay-1s">Secure authentication across multiple sectors</p>
    </div>

    <div class="row g-4">
      <!-- Tax Filing -->
      <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp">
        <div class="card h-100 use-case-card">
          <div class="card-body p-4">
            <div class="icon-container bg-primary-light mb-4 mx-auto">
              <i class="fas fa-file-invoice-dollar text-primary"></i>
            </div>
            <h4 class="fw-bold mb-3 text-center">Tax Filing</h4>
            <ul class="feature-list">
              <li><i class="fas fa-check text-success me-2"></i>Income Tax Returns</li>
              <li><i class="fas fa-check text-success me-2"></i>GST Filing</li>
              <li><i class="fas fa-check text-success me-2"></i>TDS/TCS Returns</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Corporate Compliance -->
      <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp animate__delay-1s">
        <div class="card h-100 use-case-card">
          <div class="card-body p-4">
            <div class="icon-container bg-success-light mb-4 mx-auto">
              <i class="fas fa-building text-success"></i>
            </div>
            <h4 class="fw-bold mb-3 text-center">Corporate Compliance</h4>
            <ul class="feature-list">
              <li><i class="fas fa-check text-success me-2"></i>MCA 21 Filings</li>
              <li><i class="fas fa-check text-success me-2"></i>Annual Returns</li>
              <li><i class="fas fa-check text-success me-2"></i>Board Resolutions</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Legal Documents -->
      <div class="col-md-6 col-lg-4 animate__animated animate__fadeInUp animate__delay-2s">
        <div class="card h-100 use-case-card">
          <div class="card-body p-4">
            <div class="icon-container bg-warning-light mb-4 mx-auto">
              <i class="fas fa-file-contract text-warning"></i>
            </div>
            <h4 class="fw-bold mb-3 text-center">Legal Documents</h4>
            <ul class="feature-list">
              <li><i class="fas fa-check text-success me-2"></i>E-Tendering</li>
              <li><i class="fas fa-check text-success me-2"></i>Property Documents</li>
              <li><i class="fas fa-check text-success me-2"></i>Court Filings</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Documents Section with Tabs -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-label animate__animated animate__fadeIn">DOCUMENTS</div>
      <h2 class="fw-bold display-5 animate__animated animate__fadeIn">
        <span class="" style="color: #1e3a8a;">Required</span><span class="text-success"> Documents</span>
      </h2>
      <p class="text-muted fs-5 animate__animated animate__fadeIn animate__delay-1s">Get your DSC quickly with these documents</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="documents-tabs">
          <ul class="nav nav-tabs justify-content-center" id="docTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="individual-tab" data-bs-toggle="tab" data-bs-target="#individual" type="button" role="tab">
                <i class="fas fa-user me-2"></i> For Individuals
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="organization-tab" data-bs-toggle="tab" data-bs-target="#organization" type="button" role="tab">
                <i class="fas fa-building me-2"></i> For Organizations
              </button>
            </li>
          </ul>
          <div class="tab-content" id="docTabsContent">
            <div class="tab-pane fade show active" id="individual" role="tabpanel">
              <div class="document-list">
                <div class="document-item">
                  <div class="doc-icon bg-primary-light">
                    <i class="fas fa-id-card text-primary"></i>
                  </div>
                  <div class="doc-details">
                    <h5>PAN Card</h5>
                    <p class="text-muted">Mandatory for all applicants</p>
                  </div>
                </div>
                <div class="document-item">
                  <div class="doc-icon bg-primary-light">
                    <i class="fas fa-address-card text-primary"></i>
                  </div>
                  <div class="doc-details">
                    <h5>Aadhaar Card</h5>
                    <p class="text-muted">For identity and address proof</p>
                  </div>
                </div>
                <div class="document-item">
                  <div class="doc-icon bg-primary-light">
                    <i class="fas fa-camera text-primary"></i>
                  </div>
                  <div class="doc-details">
                    <h5>Passport Photo</h5>
                    <p class="text-muted">Recent color photograph</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="organization" role="tabpanel">
              <div class="document-list">
                <div class="document-item">
                  <div class="doc-icon bg-success-light">
                    <i class="fas fa-file-alt text-success"></i>
                  </div>
                  <div class="doc-details">
                    <h5>Company PAN</h5>
                    <p class="text-muted">Mandatory for all organizations</p>
                  </div>
                </div>
                <div class="document-item">
                  <div class="doc-icon bg-success-light">
                    <i class="fas fa-user-tie text-success"></i>
                  </div>
                  <div class="doc-details">
                    <h5>Director's KYC</h5>
                    <p class="text-muted">PAN and Aadhaar of authorized signatory</p>
                  </div>
                </div>
                <div class="document-item">
                  <div class="doc-icon bg-success-light">
                    <i class="fas fa-stamp text-success"></i>
                  </div>
                  <div class="doc-details">
                    <h5>Authorization Letter</h5>
                    <p class="text-muted">Board resolution for company signatory</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section with Animated Accordion -->
<section id="faq" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-label animate__animated animate__fadeIn">FAQs</div>
      <h2 class="fw-bold display-5 animate__animated animate__fadeIn">
       <span class="text-warning"> Frequently</span> <span class="text-success">Asked</span> <span class="text-gradient">Questions</span>
      </h2>
      <p class="text-muted fs-5 animate__animated animate__fadeIn animate__delay-1s">Find answers to common questions about DSC</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion" id="faqAccordion">
          <!-- FAQ Item 1 -->
          <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden animate__animated animate__fadeInUp">
            <h3 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <i class="fas fa-question-circle text-primary me-2"></i> What is a Digital Signature Certificate (DSC)?
              </button>
            </h3>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <p>A Digital Signature Certificate (DSC) is a secure digital key issued by Certifying Authorities (CAs) that validates your identity electronically. It serves as proof of identity for individuals and organizations when conducting transactions online.</p>
                <p>DSC contains information about the user's identity, public key, and the certifying authority's digital signature. It's legally valid under the Information Technology Act, 2000 and is used to sign documents digitally, ensuring authenticity and integrity.</p>
              </div>
            </div>
          </div>
          
          <!-- FAQ Item 2 -->
          <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden animate__animated animate__fadeInUp animate__delay-1s">
            <h3 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fas fa-question-circle text-primary me-2"></i> What are the different classes of DSC?
              </button>
            </h3>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <p>There are three classes of Digital Signature Certificates:</p>
                <ul class="mb-0">
                  <li><strong>Class 1:</strong> Basic level certificate that verifies email identity. Not valid for business documents.</li>
                  <li><strong>Class 2:</strong> Verifies identity against a pre-verified database. Used for company filings, income tax returns, etc.</li>
                  <li><strong>Class 3:</strong> Highest level that requires physical verification of identity. Required for e-tendering, online bidding, and other high-value transactions.</li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- FAQ Item 3 -->
          <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden animate__animated animate__fadeInUp animate__delay-2s">
            <h3 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fas fa-question-circle text-primary me-2"></i> How long does it take to get a DSC?
              </button>
            </h3>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <p>The processing time for a Digital Signature Certificate typically takes 24-48 hours after submission of all required documents and successful verification. The exact time may vary depending on:</p>
                <ul class="mb-0">
                  <li>Completeness of submitted documents</li>
                  <li>Verification method chosen (eKYC is faster than physical verification)</li>
                  <li>Workload at the Certifying Authority</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-gradient-reverse text-white">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 animate__animated animate__fadeInLeft">
        <h2 class="fw-bold mb-3">Ready to Secure Your Digital Identity?</h2>
        <p class="mb-lg-0">Get your legally valid Digital Signature Certificate in just 24-48 hours.</p>
      </div>
    </div>
  </div>
</section>

<style>
  /* Global Styles */
  :root {
    --primary: #1e3a8a;
    --secondary: #166534;
    --accent: #f59e0b;
    --light: #f8fafc;
    --dark: #1e293b;
  }
  
  .text-gradient {
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
  .bg-gradient-reverse {
    background: linear-gradient(135deg, var(--secondary), var(--primary));
  }
  
  .section-label {
    color: var(--primary);
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
    font-size: 0.85rem;
  }
  
  /* Hero Section */
  .dsc-hero-section {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
  }
  
  #particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 0;
  }
  
  .hero-title {
    font-size: 3rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 1.5rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
  }
  
  .hero-subtitle {
    font-size: 1.25rem;
    opacity: 0.9;
    margin-bottom: 2rem;
  }
  
  .trust-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 2rem;
  }
  
  .badge-item {
    background: rgba(255,255,255,0.15);
    border-radius: 50px;
    padding: 8px 15px;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 8px;
    backdrop-filter: blur(5px);
    transition: all 0.3s ease;
  }
  
  .badge-item:hover {
    background: rgba(255,255,255,0.25);
    transform: translateY(-2px);
  }
  
  /* Floating Animation */
  .floating {
    animation: floating 6s ease-in-out infinite;
  }
  
  @keyframes floating {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
    100% { transform: translateY(0px); }
  }
  
  /* Pulse Animation */
  .pulse-animation {
    animation: pulse 2s infinite;
  }
  
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }
  
  /* Process Steps */
  .process-steps {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 0;
  }
  
  .process-steps::before {
    content: '';
    position: absolute;
    width: 4px;
    background: linear-gradient(to bottom, var(--primary), var(--secondary));
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -2px;
    border-radius: 10px;
  }
  
  .step {
    padding: 10px 40px;
    position: relative;
    width: 50%;
    box-sizing: border-box;
    margin-bottom: 30px;
  }
  
  .step:nth-child(odd) {
    left: 0;
  }
  
  .step:nth-child(even) {
    left: 50%;
  }
  
  .step-number {
    position: absolute;
    top: -15px;
    right: -15px;
    width: 40px;
    height: 40px;
    background: var(--primary);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .step:nth-child(even) .step-number {
    left: -15px;
    right: auto;
  }
  
  .step-content {
    padding: 20px;
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    position: relative;
    transition: all 0.3s ease;
  }
  
  .step-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }
  
  .step-icon {
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    margin-bottom: 15px;
  }
  
  /* Pricing Cards */
  .pricing-card {
    border-radius: 12px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(0,0,0,0.05);
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  }
  
  .pricing-card.popular {
    border: 2px solid var(--accent);
    transform: translateY(-10px);
  }
  
  .popular-badge {
    position: absolute;
    top: 15px;
    right: -30px;
    background: var(--accent);
    color: white;
    padding: 5px 30px;
    transform: rotate(45deg);
    font-size: 0.75rem;
    font-weight: bold;
  }
  
  .price-display {
    font-size: 2.5rem;
    font-weight: 700;
    margin: 1rem 0;
    color: var(--dark);
  }
  
  .price-display .currency {
    font-size: 1.5rem;
    vertical-align: super;
  }
  
  .price-display .period {
    font-size: 1rem;
    color: #64748b;
    font-weight: normal;
  }
  
  .feature-list {
    list-style: none;
    padding-left: 0;
  }
  
  .feature-list li {
    padding: 8px 0;
    border-bottom: 1px solid #f1f5f9;
  }
  
  /* Use Case Cards */
  .use-case-card {
    border-radius: 12px;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  }
  
  .use-case-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }
  
  .icon-container {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
  }
  
  /* Documents Section */
  .documents-tabs .nav-tabs {
    border-bottom: 2px solid #e2e8f0;
  }
  
  .documents-tabs .nav-link {
    color: #64748b;
    font-weight: 600;
    border: none;
    padding: 12px 20px;
    transition: all 0.3s ease;
  }
  
  .documents-tabs .nav-link.active {
    color: var(--primary);
    background: transparent;
    border-bottom: 3px solid var(--primary);
  }
  
  .document-list {
    padding: 20px 0;
  }
  
  .document-item {
    display: flex;
    align-items: center;
    padding: 15px;
    border-radius: 8px;
    transition: all 0.3s ease;
    margin-bottom: 10px;
  }
  
  .document-item:hover {
    background: #f8fafc;
    transform: translateX(5px);
  }
  
  .doc-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    margin-right: 15px;
    flex-shrink: 0;
  }
  
  /* Background Colors */
  .bg-primary-light {
    background-color: rgba(30, 58, 138, 0.1);
  }
  
  .bg-success-light {
    background-color: rgba(22, 101, 52, 0.1);
  }
  
  .bg-warning-light {
    background-color: rgba(245, 158, 11, 0.1);
  }
  
  /* Responsive Adjustments */
  @media (max-width: 992px) {
    .hero-title {
      font-size: 2.5rem;
    }
    
    .process-steps::before {
      left: 31px;
    }
    
    .step {
      width: 100%;
      padding-left: 70px;
      padding-right: 25px;
      left: 0 !important;
    }
    
    .step:nth-child(even) .step-number {
      left: -15px;
    }
  }
  
  @media (max-width: 768px) {
    .hero-title {
      font-size: 2rem;
    }
    
    .dsc-hero-section {
      padding: 4rem 0;
      text-align: center;
    }
    
    .hero-cta .btn {
      display: block;
      width: 100%;
      margin-bottom: 15px;
    }
    
    .trust-badges {
      justify-content: center;
    }
    
    .process-steps::before {
      display: none;
    }
    
    .step {
      padding-left: 40px;
    }
    
    .step-number {
      left: 0 !important;
      right: auto;
    }
  }
</style>

<!-- Include Particles.js -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script>
  // Initialize particles.js
  document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('particles-js')) {
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
            "value": 0.3,
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
            "opacity": 0.2,
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
    }

    // Initialize animations when elements are in viewport
    const animateElements = document.querySelectorAll('.animate__animated');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add(entry.target.dataset.animation);
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });
    
    animateElements.forEach(element => {
      observer.observe(element);
    });
    
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
  });
</script>

<!-- Include Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endsection