<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trademark Registration | Protect Your Brand</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #1b1c34;
      --secondary-color: #0f101d;
      --accent-color: #fd7e14;
      --dark-color: #121212;
      --light-color: #f8f9fa;
      --gradient-primary: linear-gradient(135deg, #1b1c34 0%, #0f101d 100%);
      --gradient-accent: linear-gradient(135deg, #fd7e14 0%, #f76707 100%);
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--light-color);
      color: var(--dark-color);
      overflow-x: hidden;
    }

    .brand-box {
      color: #fff;
      background: var(--gradient-accent);
      display: inline-block;
      padding: 8px 18px;
      font-weight: 600;
      border-radius: 30px;
      box-shadow: 0 4px 15px rgba(253, 126, 20, 0.3);
      transform: translateY(0);
      transition: all 0.3s ease;
      animation: pulse 2s infinite;
    }

    .brand-box:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(253, 126, 20, 0.4);
    }

    .title-section {
      text-align: center;
      padding: 80px 20px 50px;
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
      border-radius: 0 0 20px 20px;
      margin-bottom: 40px;
      position: relative;
      overflow: hidden;
      background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop');
      background-size: cover;
      background-position: center;
      background-blend-mode: overlay;
    }

    .title-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: var(--gradient-accent);
    }

    .title-section::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(27, 28, 52, 0.7);
      z-index: 0;
    }

    .title-section h2 {
      font-size: 42px;
      font-weight: 700;
      margin: 20px 0;
      color: white;
      position: relative;
      z-index: 1;
      text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .title-section p {
      font-size: 22px;
      margin-bottom: 30px;
      color: white;
      opacity: 0.9;
      position: relative;
      z-index: 1;
    }

    .btn-started {
      background: var(--gradient-accent);
      border: none;
      color: #fff;
      padding: 14px 32px;
      font-weight: bold;
      border-radius: 30px;
      transition: all 0.4s ease;
      box-shadow: 0 4px 15px rgba(253, 126, 20, 0.3);
      position: relative;
      overflow: hidden;
      z-index: 1;
    }

    .btn-started:hover {
      background: linear-gradient(to right, #f76707, #fd7e14);
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(253, 126, 20, 0.4);
      color: #fff;
    }

    .btn-started:active {
      transform: translateY(1px);
    }

    .btn-started::after {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      width: 5px;
      height: 5px;
      background: rgba(255, 255, 255, 0.5);
      opacity: 0;
      border-radius: 100%;
      transform: scale(1, 1) translate(-50%);
      transform-origin: 50% 50%;
    }

    .btn-started:focus:not(:active)::after {
      animation: ripple 1s ease-out;
    }

    @keyframes ripple {
      0% {
        transform: scale(0, 0);
        opacity: 0.5;
      }
      100% {
        transform: scale(20, 20);
        opacity: 0;
      }
    }

    .info-box {
      padding: 30px 20px;
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      margin-bottom: 20px;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      border-top: 4px solid var(--accent-color);
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .info-box::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: var(--gradient-primary);
      opacity: 0;
      transition: all 0.3s ease;
      z-index: 0;
    }

    .info-box:hover::before {
      opacity: 0.05;
    }

    .info-box:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
    }

    .info-box i {
      font-size: 36px;
      margin-bottom: 15px;
      color: var(--accent-color);
      position: relative;
      z-index: 1;
      transition: all 0.3s ease;
    }

    .info-box:hover i {
      transform: scale(1.1);
      color: var(--accent-color);
    }

    .info-box h5 {
      position: relative;
      z-index: 1;
      transition: all 0.3s ease;
    }

    .info-box:hover h5 {
      color: var(--primary-color);
    }

    .section-heading {
      color: var(--primary-color);
      font-weight: 700;
      font-size: 32px;
      margin-top: 60px;
      margin-bottom: 30px;
      position: relative;
      display: inline-block;
    }

    .section-heading::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--gradient-accent);
      border-radius: 2px;
    }

    .blue-table {
      background-color: #ffffff;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      border-radius: 15px;
      overflow: hidden;
      margin-bottom: 40px;
      transition: all 0.3s ease;
      border: 1px solid rgba(27, 28, 52, 0.1);
    }

    .blue-table:hover {
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
      transform: translateY(-5px);
    }

    .blue-table .col-md-4 {
      padding: 30px 25px;
      border-right: 1px solid rgba(0, 0, 0, 0.05);
      position: relative;
      transition: all 0.3s ease;
    }

    .blue-table .col-md-4:hover {
      background-color: rgba(253, 126, 20, 0.03);
    }

    .blue-table .col-md-4:last-child {
      border-right: none;
    }

    .blue-table h5 {
      color: var(--primary-color);
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .blue-table p {
      margin-bottom: 10px;
    }

    .blue-table p strong {
      font-size: 24px;
      color: var(--accent-color);
    }

    ul.custom-list {
      list-style-type: none;
      padding-left: 0;
    }

    ul.custom-list li {
      margin-bottom: 15px;
      padding-left: 30px;
      position: relative;
      line-height: 1.6;
      transition: all 0.3s ease;
    }

    ul.custom-list li:hover {
      transform: translateX(5px);
    }

    ul.custom-list li::before {
      content: "\f00c";
      font-family: "Font Awesome 6 Free";
      font-weight: 900;
      position: absolute;
      left: 0;
      color: var(--accent-color);
    }

    .newsletter {
      background: var(--gradient-primary);
      color: white;
      padding: 60px 20px;
      text-align: center;
      margin-top: 80px;
      border-radius: 20px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(27, 28, 52, 0.3);
    }

    .newsletter::before {
      content: "";
      position: absolute;
      top: -50px;
      right: -50px;
      width: 200px;
      height: 200px;
      background: rgba(253, 126, 20, 0.1);
      border-radius: 50%;
      animation: float 6s ease-in-out infinite;
    }

    .newsletter::after {
      content: "";
      position: absolute;
      bottom: -80px;
      left: -80px;
      width: 250px;
      height: 250px;
      background: rgba(253, 126, 20, 0.1);
      border-radius: 50%;
      animation: float 8s ease-in-out infinite;
    }

    .newsletter h4 {
      font-weight: bold;
      font-size: 28px;
      margin-bottom: 15px;
      position: relative;
      z-index: 1;
    }

    .newsletter p {
      font-size: 18px;
      margin-bottom: 30px;
      position: relative;
      z-index: 1;
      opacity: 0.9;
    }

    .newsletter input[type="email"] {
      width: 350px;
      padding: 15px 25px;
      border-radius: 30px;
      border: none;
      margin-right: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      position: relative;
      z-index: 1;
    }

    .newsletter input[type="email"]:focus {
      outline: none;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
      transform: translateY(-2px);
      border: 1px solid var(--accent-color);
    }

    .btn-subscribe {
      background-color: var(--accent-color);
      color: white;
      padding: 15px 30px;
      border-radius: 30px;
      border: none;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(253, 126, 20, 0.3);
      position: relative;
      z-index: 1;
    }

    .btn-subscribe:hover {
      background-color: #f76707;
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(253, 126, 20, 0.4);
    }

    .floating {
      animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }

    @keyframes float {
      0% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(5deg); }
      100% { transform: translateY(0px) rotate(0deg); }
    }

    @keyframes pulse {
      0% { box-shadow: 0 0 0 0 rgba(253, 126, 20, 0.4); }
      70% { box-shadow: 0 0 0 15px rgba(253, 126, 20, 0); }
      100% { box-shadow: 0 0 0 0 rgba(253, 126, 20, 0); }
    }

    .feature-icon {
      width: 80px;
      height: 80px;
      background: var(--gradient-accent);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 36px;
      box-shadow: 0 5px 15px rgba(253, 126, 20, 0.3);
      transition: all 0.3s ease;
    }

    .feature-icon:hover {
      transform: rotate(15deg) scale(1.1);
    }

    .testimonial-card {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      margin: 20px 0;
      transition: all 0.3s ease;
      border-top: 3px solid var(--accent-color);
    }

    .testimonial-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
    }

    .testimonial-card img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--accent-color);
      margin-bottom: 15px;
      transition: all 0.3s ease;
    }

    .testimonial-card:hover img {
      transform: scale(1.1);
      box-shadow: 0 5px 15px rgba(253, 126, 20, 0.3);
    }

    .testimonial-card h5 {
      color: var(--primary-color);
      font-weight: 600;
    }

    .testimonial-card p {
      font-style: italic;
      color: #666;
    }

    .scroll-animation {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease;
    }

    .scroll-animation.animated {
      opacity: 1;
      transform: translateY(0);
    }

    .glow-on-hover {
      position: relative;
      z-index: 0;
    }

    .glow-on-hover::before {
      content: '';
      background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
      position: absolute;
      top: -2px;
      left:-2px;
      background-size: 400%;
      z-index: -1;
      filter: blur(5px);
      width: calc(100% + 4px);
      height: calc(100% + 4px);
      animation: glowing 20s linear infinite;
      opacity: 0;
      transition: opacity .3s ease-in-out;
      border-radius: 30px;
    }

    .glow-on-hover:hover::before {
      opacity: 0.5;
    }

    .glow-on-hover:active::before {
      opacity: 1;
    }

    @keyframes glowing {
      0% { background-position: 0 0; }
      50% { background-position: 400% 0; }
      100% { background-position: 0 0; }
    }

    .parallax-effect {
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .hover-zoom {
      transition: transform 0.5s ease;
    }

    .hover-zoom:hover {
      transform: scale(1.05);
    }

    .rotate-animation {
      animation: rotate 10s linear infinite;
    }

    @keyframes rotate {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .bounce-animation {
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
      40% {transform: translateY(-20px);}
      60% {transform: translateY(-10px);}
    }

    @media (max-width: 768px) {
      .title-section h2 {
        font-size: 32px;
      }
      
      .title-section p {
        font-size: 18px;
      }
      
      .section-heading {
        font-size: 26px;
      }
      
      .blue-table .col-md-4 {
        border-right: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: 25px 20px;
      }

      .blue-table .col-md-4:last-child {
        border-bottom: none;
      }

      .newsletter input[type="email"] {
        width: 100%;
        margin-bottom: 15px;
        margin-right: 0;
      }

      .btn-subscribe {
        width: 100%;
      }
      
      .newsletter::before,
      .newsletter::after {
        display: none;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="title-section animate__animated animate__fadeIn">
    <div class="brand-box floating">Trademark Registration</div>
    <h2 class="animate__animated animate__fadeInUp">Protect Your Brand Identity</h2>
    <p class="animate__animated animate__fadeInUp animate__delay-1s">Starting at just <span style="font-weight: 700; color: var(--accent-color);">Rs 7,500/-</span></p>
    <button class="btn btn-started pulse animate__animated animate__fadeInUp animate__delay-1s glow-on-hover">GET STARTED NOW</button>
  </div>

  <div class="row text-center mb-5">
    <div class="col-md-3 scroll-animation">
      <div class="info-box hover-zoom">
        <div>
          <i class="fas fa-clipboard-check bounce-animation"></i>
          <h5>REQUIREMENTS</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 scroll-animation" style="transition-delay: 0.2s;">
      <div class="info-box hover-zoom">
        <div>
          <i class="fas fa-trademark bounce-animation"></i>
          <h5>SELECTING A MARK</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 scroll-animation" style="transition-delay: 0.4s;">
      <div class="info-box hover-zoom">
        <div>
          <i class="fas fa-clock bounce-animation"></i>
          <h5>TIME & COST</h5>
        </div>
      </div>
    </div>
    <div class="col-md-3 scroll-animation" style="transition-delay: 0.6s;">
      <div class="info-box hover-zoom">
        <div>
          <i class="fas fa-file-alt bounce-animation"></i>
          <h5>DOCUMENTS</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-animation">
    <h3 class="section-heading">TIME AND COST FOR TRADEMARK</h3>
    <p><strong>Time:</strong>Once the full document received it will take 1 day to file the trademark, the next thing you should do is to track your application online. This is because the trademark registration process takes around 9 to 16 months, but you can use the Trademark after 3 Days from the filling of trade mark as TM.</p>

    <div class="row blue-table text-center hover-zoom">
      <div class="col-md-4">
        <div class="feature-icon rotate-animation">
          <i class="fas fa-file-signature"></i>
        </div>
        <h5>Application for Individuals</h5>
        <p><strong>Rs. 7500/-</strong></p>
        <p>Govt Fee: Rs. 4500/-<br>Professional Fee: Rs. 3000/-</p>
      </div>
      <div class="col-md-4">
        <div class="feature-icon rotate-animation">
          <i class="fas fa-sync-alt"></i>
        </div>
        <h5>Renewal for Individuals</h5>
        <p><strong>Rs. 11500/-</strong></p>
        <p>Govt Fee: Rs. 9000/-<br>Professional Fee: Rs. 2500/-</p>
      </div>
      <div class="col-md-4">
        <div class="feature-icon rotate-animation">
          <i class="fas fa-gavel"></i>
        </div>
        <h5>Objection Handling</h5>
        <p><strong>Rs. 2500/-</strong></p>
        <p>Govt Fee: NIL<br>Professional Fee: Rs. 2500/-</p>
      </div>
    </div>
  </div>
  

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
  
  :root {
    --dark-blue: #0f101d;
    --orange: #fd7e14;
    --light-gray: #f5f5f7;
    --white: #ffffff;
  }
  
  body {
    font-family: 'Poppins', sans-serif;
    background-color: var(--light-gray);
    color: var(--dark-blue);
    line-height: 1.6;
  }
  
  .scroll-animation {
    background: var(--white);
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 10px 30px rgba(15, 16, 29, 0.1);
    transform: translateY(50px);
    opacity: 0;
    transition: all 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  
  .scroll-animation.animate {
    transform: translateY(0);
    opacity: 1;
  }
  
  .section-heading {
    color: var(--orange);
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 25px;
    position: relative;
    padding-bottom: 15px;
  }
  
  .section-heading:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 4px;
    background: var(--orange);
    border-radius: 2px;
    animation: underlineGrow 1s ease-out forwards;
  }
  
  @keyframes underlineGrow {
    from { width: 0; }
    to { width: 60px; }
  }
  
  p {
    font-size: 16px;
    margin-bottom: 20px;
  }
  
  .custom-list {
    list-style: none;
    padding: 0;
  }
  
  .custom-list li {
    padding: 12px 0 12px 35px;
    position: relative;
    font-size: 15px;
    border-bottom: 1px dashed rgba(15, 16, 29, 0.1);
    transition: all 0.3s ease;
  }
  
  .custom-list li:hover {
    transform: translateX(10px);
    background: rgba(253, 126, 20, 0.05);
  }
  
  .custom-list li:before {
    content: '';
    position: absolute;
    left: 0;
    top: 16px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--orange);
    transition: all 0.3s ease;
  }
  
  .custom-list li:hover:before {
    transform: scale(1.5);
  }
  
  .row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
  }
  
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0 15px;
  }
  
  /* Pulse animation for important elements */
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }
  
  strong {
    color: var(--orange);
    font-weight: 600;
  }
  
  /* Responsive adjustments */
  @media (max-width: 768px) {
    .col-md-6 {
      flex: 0 0 100%;
      max-width: 100%;
    }
    
    .section-heading {
      font-size: 24px;
    }
  }
</style>

<div class="scroll-animation">
    <h3 class="section-heading">TRADEMARK REQUIREMENTS</h3>
    <p>A trademark is a sign capable of distinguishing the goods or services of one enterprise from those of other enterprises. Trademarks are protected by intellectual property rights.

Just look around yourself, you will find that you are surrounded by the trademarks like McDonald, Pizzahut, Dominos, Amazon, Flipkart etc.</p>
    <p>Further, once the trademark is filed, the next thing you should do is to track your application online. This is because the trademark registration process takes around 9 to 16 months and hence, it is recommended to keep a close watch on the status of the trademark application otherwise application may get rejected due to non filing of the timely replies with the trademark department.</p>
</div>

<style>
  .scroll-animation {
    background: #ffffff;
    border-radius: 16px;
    padding: 32px;
    margin: 24px 0;
    box-shadow: 0 8px 32px rgba(15, 16, 29, 0.1);
    transform: perspective(500px) rotateX(15deg) translateY(30px);
    opacity: 0;
    transition: all 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
    border-left: 4px solid transparent;
  }

  .scroll-animation.animate {
    transform: perspective(500px) rotateX(0) translateY(0);
    opacity: 1;
    border-left-color: #fd7e14;
  }

  .section-heading {
    color: #0f101d;
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 24px;
    position: relative;
    display: inline-block;
  }

  .section-heading::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -8px;
    width: 0;
    height: 3px;
    background: #fd7e14;
    border-radius: 3px;
    transition: width 0.6s ease-out;
  }

  .scroll-animation.animate .section-heading::after {
    width: 100%;
  }

  .custom-list {
    list-style: none;
    padding: 0;
    counter-reset: list-counter;
  }

  .custom-list li {
    position: relative;
    padding: 16px 0 16px 42px;
    margin-bottom: 8px;
    font-size: 16px;
    line-height: 1.6;
    border-bottom: 1px solid rgba(15, 16, 29, 0.05);
    transition: all 0.4s ease;
    counter-increment: list-counter;
  }

  .custom-list li::before {
    content: counter(list-counter);
    position: absolute;
    left: 0;
    top: 16px;
    width: 28px;
    height: 28px;
    background: #fd7e14;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: 700;
    transition: all 0.3s ease;
  }

  .custom-list li:hover {
    transform: translateX(8px);
    background: rgba(253, 126, 20, 0.03);
  }

  .custom-list li:hover::before {
    transform: scale(1.1) rotate(8deg);
    box-shadow: 0 4px 8px rgba(253, 126, 20, 0.3);
  }

  .custom-list li strong {
    color: #fd7e14;
    font-weight: 600;
    position: relative;
  }

  .custom-list li strong::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    width: 0;
    height: 2px;
    background: #fd7e14;
    transition: width 0.3s ease;
  }

  .custom-list li:hover strong::after {
    width: 100%;
  }
</style>

<div class="scroll-animation">
    <h3 class="section-heading">HOW TO SELECT A STRONG TRADEMARK</h3>
    <ul class="custom-list">
      <li>During the course of selection of trademark following point to be keep in mind:-</li>
      <li><strong>AVOID</strong> words that will cause consumers to be confused with another trademark.</li>
      <li><strong>AVOID</strong>  three letter acronyms and numbers.</li>
      <li><strong>AVOID</strong> trademarks which are earlier registered.</li>
      <li><strong>AVOID</strong> words which have direct reference to the Character or Quality of the product/service. E.g. Best Choice, Easy Cook, Super.</li>
      <li><strong>AVOID</strong>  Common Personal Names or surnames. Such names are registrable only if it has acquired distinctiveness through advertisements and long use.</li>
      <li><strong>AVOID</strong>Superlative or Laudatory words E.g. Premium, Gold, Deluxe.</li>
      <li><strong>DO CHOOSE</strong>Descriptive words E.g. Coffee shop for coffee bars; Cooler for Refrigerators.</li>
    </ul>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const animationElement = document.querySelector('.scroll-animation');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
        }
      });
    }, {
      threshold: 0.2
    });

    observer.observe(animationElement);
  });
</script>

<div class="scroll-animation">
    <h3 class="section-heading">DOCUMENTS REQUIRED</h3>
    <div class="row">
      <div class="col-md-6">
        <ul class="custom-list">
          <li><strong>PAN Card</strong> - Copy of proprietor/company PAN</li>
          <li><strong>AADHAAR Card</strong> - Identity proof of applicant</li>
          <li><strong>Logo/Image</strong> - High quality image file if registering design</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="custom-list">
          <li><strong>TM Requisition Form</strong> - Basic details about your mark</li>
          <li><strong>Power of Attorney</strong> - Authorizing us to file on your behalf</li>
          <li><strong>Declaration</strong> - Confirming first use date if already in use</li>
        </ul>
      </div>
    </div>
</div>

<script>
  // Animation on scroll
  document.addEventListener('DOMContentLoaded', function() {
    const scrollAnimations = document.querySelectorAll('.scroll-animation');
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate');
          
          // Add pulse animation to headings
          const heading = entry.target.querySelector('.section-heading');
          if (heading) {
            heading.style.animation = 'pulse 1s ease';
            setTimeout(() => {
              heading.style.animation = '';
            }, 1000);
          }
        }
      });
    }, {
      threshold: 0.1
    });
    
    scrollAnimations.forEach(animation => {
      observer.observe(animation);
    });
  });
</script>
</div>

<div class="container">
  <div class="newsletter scroll-animation parallax-effect" style="background-image: url('{{ asset('banner7.png') }}');">
    <h4>Stay Updated on Trademark Laws</h4>
    <p>Subscribe to our newsletter for the latest updates and tips</p>
    <form class="d-flex flex-column flex-md-row justify-content-center align-items-center">
      <input type="email" class="form-control mb-2 mb-md-0" placeholder="Enter your email" required>
      <button type="submit" class="btn btn-subscribe ms-md-2 glow-on-hover">Subscribe Now</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Scroll animation trigger
  document.addEventListener('DOMContentLoaded', function() {
    const scrollElements = document.querySelectorAll('.scroll-animation');
    
    const elementInView = (el) => {
      const elementTop = el.getBoundingClientRect().top;
      return (
        elementTop <= (window.innerHeight || document.documentElement.clientHeight) * 0.75
      );
    };
    
    const displayScrollElement = (element) => {
      element.classList.add('animated');
    };
    
    const handleScrollAnimation = () => {
      scrollElements.forEach((el) => {
        if (elementInView(el)) {
          displayScrollElement(el);
        }
      });
    };
    
    // Initialize
    window.addEventListener('scroll', () => {
      handleScrollAnimation();
    });
    
    // Trigger once on load for elements already in view
    handleScrollAnimation();
  });
  
  // Ripple effect for buttons
  function createRipple(event) {
    const button = event.currentTarget;
    const circle = document.createElement("span");
    const diameter = Math.max(button.clientWidth, button.clientHeight);
    const radius = diameter / 2;
    
    circle.style.width = circle.style.height = `${diameter}px`;
    circle.style.left = `${event.clientX - button.getBoundingClientRect().left - radius}px`;
    circle.style.top = `${event.clientY - button.getBoundingClientRect().top - radius}px`;
    circle.classList.add("ripple");
    
    const ripple = button.getElementsByClassName("ripple")[0];
    if (ripple) {
      ripple.remove();
    }
    
    button.appendChild(circle);
  }
  
  const buttons = document.getElementsByTagName("button");
  for (const button of buttons) {
    button.addEventListener("click", createRipple);
  }

  // Add hover effect to all elements with hover-zoom class
  document.querySelectorAll('.hover-zoom').forEach(item => {
    item.addEventListener('mouseenter', () => {
      item.style.transform = 'scale(1.05)';
    });
    item.addEventListener('mouseleave', () => {
      item.style.transform = 'scale(1)';
    });
  });

  // Add animation to feature icons on hover
  document.querySelectorAll('.feature-icon').forEach(icon => {
    icon.addEventListener('mouseenter', () => {
      icon.style.animation = 'rotate 1s ease-in-out';
    });
    icon.addEventListener('mouseleave', () => {
      icon.style.animation = '';
    });
  });
</script>
</body>
</html>
