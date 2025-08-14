<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nidhi Company Registration - LLP | Film & Media Business Setup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    :root {
      --primary: #e50914; /* Netflix-style red */
      --secondary: #141414; /* Dark background */
      --accent: #f5c518; /* Golden accent */
      --text-light: #e5e5e5;
      --text-dark: #333;
      --gradient: linear-gradient(135deg, #e50914, #b20710);
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f8f9fa;
      color: var(--text-dark);
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5 {
      font-family: 'Playfair Display', serif;
    }

    /* ===== Hero Section (Cinematic) ===== */
    .hero {
      background: linear-gradient(rgba(20, 20, 20, 0.8), rgba(20, 20, 20, 0.8)),
                  url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
      color: white;
      padding: 180px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      bottom: -50px;
      left: 0;
      width: 100%;
      height: 100px;
      background: #f8f9fa;
      transform: skewY(-3deg);
      z-index: 1;
    }

    .hero h1 {
      font-size: 4.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      text-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      animation: fadeInDown 1s ease;
    }

    .hero p {
      font-size: 1.5rem;
      max-width: 800px;
      margin: 0 auto 30px;
      animation: fadeIn 1.5s ease;
    }

    /* ===== Glowing CTA Button ===== */
    .btn-cinematic {
      background: var(--gradient);
      color: white;
      font-weight: 600;
      padding: 15px 40px;
      border-radius: 50px;
      border: none;
      box-shadow: 0 5px 25px rgba(229, 9, 20, 0.5);
      transition: all 0.3s ease;
      animation: pulse 2s infinite;
    }

    .btn-cinematic:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(229, 9, 20, 0.7);
    }

    /* ===== Features Section ===== */
    .feature-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      border-left: 5px solid var(--primary);
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    /* ===== Document Upload Widget ===== */
    .upload-widget {
      border: 2px dashed #ccc;
      border-radius: 15px;
      padding: 40px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .upload-widget:hover {
      border-color: var(--primary);
      background: rgba(229, 9, 20, 0.05);
    }

    /* ===== Testimonials Carousel ===== */
    .testimonial-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    /* ===== FAQ Accordion ===== */
    .accordion-button:not(.collapsed) {
      background-color: rgba(229, 9, 20, 0.1);
      color: var(--primary);
    }

    /* ===== Footer ===== */
    .footer {
      background: var(--secondary);
      color: white;
      padding: 60px 0;
    }

    /* ===== Animations ===== */
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }
  </style>
</head>
<body>

  <!-- 🎥 Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="animate__animated animate__fadeInDown">Start Your Nidhi Company</h1>
      <p class="animate__animated animate__fadeIn animate__delay-1s">Register as an LLP for <span class="text-warning">legal protection & tax benefits</span> in the film & media industry</p>
      <a href="#register" class="btn btn-cinematic animate__animated animate__fadeInUp animate__delay-2s">
        <i class="fas fa-play me-2"></i> Get Started Now
      </a>
    </div>
  </section>

  <!-- 🎬 Why Choose LLP for Production Companies? -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Why LLP is Perfect for Production Houses</h2>
        <p class="lead">Limited liability + flexible profit sharing = Ideal for filmmakers</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-card">
            <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
            <h4>Asset Protection</h4>
            <p>Your personal assets stay safe if the production faces legal issues.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card">
            <i class="fas fa-hand-holding-usd fa-3x text-primary mb-3"></i>
            <h4>Tax Advantages</h4>
            <p>Better tax planning options compared to private limited companies.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card">
            <i class="fas fa-users fa-3x text-primary mb-3"></i>
            <h4>Easy Collaboration</h4>
            <p>Add co-producers easily without complex share transfers.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ⏳ Registration Timeline -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Simple 3-Step Registration</h2>
        <p class="lead">Get your production company registered in just 15 days</p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="text-center p-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
              <h3 class="mb-0">1</h3>
            </div>
            <h4>Document Collection</h4>
            <p>We gather PAN, Aadhar, and address proof for all partners.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center p-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
              <h3 class="mb-0">2</h3>
            </div>
            <h4>Name Approval</h4>
            <p>We file for your production company name with the MCA.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center p-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
              <h3 class="mb-0">3</h3>
            </div>
            <h4>LLP Agreement</h4>
            <p>Drafting and filing of your production company's LLP deed.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 📄 Document Upload Widget -->
  <section class="py-5 bg-light" id="register">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h2>Ready to Register?</h2>
          <p class="lead">Upload your documents securely to get started.</p>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> PAN Card</li>
            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Aadhar Card</li>
            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Passport Photo</li>
            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Address Proof</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="upload-widget">
            <i class="fas fa-cloud-upload-alt fa-4x text-muted mb-3"></i>
            <h4>Drag & Drop Documents Here</h4>
            <p class="text-muted">or click to browse files</p>
            <input type="file" class="d-none" id="documentUpload">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 💰 Pricing Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Transparent Pricing</h2>
        <p class="lead">All-inclusive package for production companies</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="bg-primary text-white">
                <tr>
                  <th>Service</th>
                  <th>Cost</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>LLP Name Approval</td>
                  <td>₹1,000</td>
                </tr>
                <tr>
                  <td>Digital Signature (2 Partners)</td>
                  <td>₹1,500</td>
                </tr>
                <tr>
                  <td>Stamp Duty & Registration</td>
                  <td>₹1,000</td>
                </tr>
                <tr>
                  <td>LLP Agreement Drafting</td>
                  <td>₹3,000</td>
                </tr>
                <tr>
                  <td>Professional Fees</td>
                  <td>₹13,999</td>
                </tr>
                <tr class="table-active">
                  <th>Total</th>
                  <th>₹19,499</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🎥 Testimonials -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Filmmakers Who Chose LLP</h2>
        <p class="lead">Trusted by independent production houses</p>
      </div>
      <div class="swiper testimonialSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="mb-3">
                <i class="fas fa-quote-left fa-2x text-primary"></i>
              </div>
              <p class="mb-4">"Registering as an LLP gave our production house credibility when pitching to streaming platforms."</p>
              <div class="d-flex align-items-center">
                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Testimonial" class="rounded-circle me-3" width="60">
                <div>
                  <h6 class="mb-0">Priya Sharma</h6>
                  <small class="text-muted">Founder, Luminary Films</small>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="mb-3">
                <i class="fas fa-quote-left fa-2x text-primary"></i>
              </div>
              <p class="mb-4">"The tax benefits helped us reinvest more into our next documentary project."</p>
              <div class="d-flex align-items-center">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Testimonial" class="rounded-circle me-3" width="60">
                <div>
                  <h6 class="mb-0">Rahul Mehta</h6>
                  <small class="text-muted">Director, Urban Stories LLP</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!-- ❓ FAQ Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Frequently Asked Questions</h2>
        <p class="lead">Everything about production company registration</p>
      </div>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item mb-3 border-0 shadow-sm">
          <h3 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              Can I use my production company name internationally?
            </button>
          </h3>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
            <div class="accordion-body">
              Yes! Your LLP registration is valid for international projects, but you may need additional trademarks for global branding.
            </div>
          </div>
        </div>
        <div class="accordion-item mb-3 border-0 shadow-sm">
          <h3 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              How many partners can a production LLP have?
            </button>
          </h3>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
            <div class="accordion-body">
              Minimum 2 partners, no maximum limit. You can add producers, directors, or investors easily.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 🚀 Final CTA -->
  <section class="py-5 bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">Ready to Launch Your Production Company?</h2>
      <p class="lead mb-4">Get LLP registered in 15 days with expert assistance</p>
      <a href="#register" class="btn btn-light btn-lg px-5">
        <i class="fas fa-play me-2"></i> Start Registration
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <h5>Production Company LLP</h5>
          <p>Specializing in film, media, and entertainment business registrations.</p>
        </div>
        <div class="col-lg-4 mb-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Home</a></li>
            <li><a href="#register" class="text-white">Register Now</a></li>
            <li><a href="#faq" class="text-white">FAQ</a></li>
          </ul>
        </div>
        <div class="col-lg-4 mb-4">
          <h5>Contact</h5>
          <p><i class="fas fa-envelope me-2"></i> hello@productionllp.com</p>
          <p><i class="fas fa-phone me-2"></i> +91 9876543210</p>
        </div>
      </div>
      <hr class="my-4 bg-light">
      <div class="text-center">
        <p class="mb-0">© 2023 Production Company LLP. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    // Initialize Testimonial Swiper
    new Swiper('.testimonialSwiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        }
      }
    });

    // Document Upload Widget Interaction
    const uploadWidget = document.querySelector('.upload-widget');
    const fileInput = document.getElementById('documentUpload');

    uploadWidget.addEventListener('click', () => fileInput.click());
    uploadWidget.addEventListener('dragover', (e) => {
      e.preventDefault();
      uploadWidget.style.borderColor = 'var(--primary)';
      uploadWidget.style.backgroundColor = 'rgba(229, 9, 20, 0.1)';
    });
    uploadWidget.addEventListener('dragleave', () => {
      uploadWidget.style.borderColor = '#ccc';
      uploadWidget.style.backgroundColor = 'transparent';
    });
  </script>
</body>
</html>