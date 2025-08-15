<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            --primary-color: #6c5ce7;
            --primary-hover: #5649c0;
            --secondary-color: #00cec9;
            --bg-dark: #1a1a2e;
            --bg-darker: #16213e;
            --text-light: #f8f9fa;
            --text-muted: rgba(255, 255, 255, 0.6);
        }

        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .main-container {
            display: flex;
            height: 100vh;
            position: relative;
            background: linear-gradient(135deg, var(--bg-dark) 0%, var(--bg-darker) 100%);
        }

        /* Left Panel - Enhanced with floating particles */
        .left-panel {
            flex: 1;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('{{ asset("banner.png") }}') no-repeat center center;
            background-size: cover;
            color: var(--text-light);
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .left-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(108, 92, 231, 0.3) 0%, rgba(29, 27, 46, 0.8) 100%);
            z-index: 0;
        }

        .left-panel>* {
            position: relative;
            z-index: 1;
        }

        .left-panel h2 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            transform: translateX(-50px);
            opacity: 0;
            animation: slideIn 0.8s forwards 0.3s;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .left-panel .content {
            transform: translateY(50px);
            opacity: 0;
            animation: fadeInUp 0.8s forwards 0.5s;
        }

        .left-panel .content h2 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 15px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .left-panel p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 80%;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Feature List with Animated Icons */
        .features-list {
            margin: 30px 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideIn 0.6s forwards;
        }

        .feature-item:nth-child(1) { animation-delay: 0.8s; }
        .feature-item:nth-child(2) { animation-delay: 1s; }
        .feature-item:nth-child(3) { animation-delay: 1.2s; }

        .feature-item i {
            color: var(--primary-color);
            margin-right: 10px;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .feature-item:hover i {
            transform: scale(1.2);
            color: #e74c3c;
        }

        .feature-item span {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Social Icons with Tooltips */
        .social-icons {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            transform: translateY(30px);
            opacity: 0;
            animation: fadeInUp 0.8s forwards 0.7s;
        }

        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
            position: relative;
        }

        .social-icon:hover {
            background: #e74c3c;
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
        }

        .social-icon::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            opacity: 0;
            transition: all 0.3s ease;
            pointer-events: none;
            white-space: nowrap;
            margin-bottom: 10px;
        }

        .social-icon:hover::after {
            opacity: 1;
            bottom: 120%;
        }

        /* Right Panel - Form Section */
        .right-panel {
            flex: 1;
            background-color: rgba(26, 26, 46, 0.8);
            backdrop-filter: blur(12px);
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--text-light);
            position: relative;
            padding: 30px;
            overflow: hidden;
        }

        .right-panel::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(108, 92, 231, 0.1) 0%, transparent 70%);
            animation: pulse 15s infinite alternate;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            background: rgba(30, 30, 60, 0.5);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s forwards 0.4s;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .form-container:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .form-container h3 {
            font-weight: 600;
            margin-bottom: 10px;
            position: relative;
            text-align: center;
            font-size: 28px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-container h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }

        .form-container p.subtitle {
            color: var(--text-muted);
            margin-bottom: 30px;
            font-size: 14px;
            text-align: center;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: var(--text-muted);
            transform: translateY(10px);
            opacity: 0;
            animation: fadeInUp 0.6s forwards;
        }

        .form-control {
            background: rgba(46, 43, 70, 0.7);
            border: none;
            color: var(--text-light);
            padding: 12px 15px;
            border-radius: 8px;
            width: 100%;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            transform: translateY(10px);
            opacity: 0;
            animation: fadeInUp 0.6s forwards;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.3);
            border-left: 3px solid var(--primary-color);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        /* Input Field Animations */
        .form-group:nth-child(1) .form-label,
        .form-group:nth-child(1) .form-control {
            animation-delay: 0.6s;
        }
        .form-group:nth-child(2) .form-label,
        .form-group:nth-child(2) .form-control {
            animation-delay: 0.7s;
        }
        .form-group:nth-child(3) .form-label,
        .form-group:nth-child(3) .form-control {
            animation-delay: 0.8s;
        }
        .form-group:nth-child(4) .form-label,
        .form-group:nth-child(4) .form-control {
            animation-delay: 0.9s;
        }

        /* Checkbox Styling */
        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            transform: translateY(10px);
            opacity: 0;
            animation: fadeInUp 0.6s forwards 1s;
        }

        .form-check-input {
            width: 18px;
            height: 18px;
            margin-right: 10px;
            background-color: var(--bg-darker);
            border: 1px solid var(--primary-color);
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
        }

        .form-check-label {
            font-size: 14px;
            color: var(--text-muted);
            cursor: pointer;
        }

        .form-check-label a {
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .form-check-label a:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }

        /* Button Styling */
        .btn-custom {
            width: 100%;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            margin-top: 10px;
            transform: translateY(10px);
            opacity: 0;
            animation: fadeInUp 0.6s forwards 1.1s;
            position: relative;
            overflow: hidden;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
        }

        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
        }

        .btn-custom:hover::before {
            left: 100%;
        }

        /* Form Footer */
        .form-footer {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: var(--text-muted);
            transform: translateY(10px);
            opacity: 0;
            animation: fadeInUp 0.6s forwards 1.2s;
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .form-footer a:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }

        /* Floating Elements */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(2px);
            z-index: 0;
            animation: float 6s ease-in-out infinite;
        }

        /* Animations */
        @keyframes float {
            0% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(20px, 20px) rotate(10deg); }
            100% { transform: translate(0, 0) rotate(0deg); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(0.8);
                opacity: 0.5;
            }
            100% {
                transform: scale(1.2);
                opacity: 0.8;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .main-container {
                flex-direction: column;
            }
            
            .left-panel, .right-panel {
                flex: none;
                width: 100%;
            }
            
            .left-panel {
                height: auto;
                padding: 40px 20px;
                text-align: center;
            }
            
            .left-panel p {
                max-width: 100%;
            }
            
            .social-icons {
                justify-content: center;
            }
            
            .form-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Left panel - Enhanced with features and animations -->
        <div class="left-panel">
            <div>
                <h2 class="floating">TAX<a style="color: #e74c3c;" >Filing</a>Hub.</h2>
            </div>
            <div class="content">
                <h2>Don't have an account?</h2>
                <p>Register to access all the features of our service. Manage your business in one place. It's free!</p>
                
                <div class="features-list">
                    <div class="feature-item" >
                        <i class="bi bi-lightning-charge-fill"></i>
                        <span>Lightning fast performance</span>
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-shield-lock-fill"></i>
                        <span>Bank-level security</span>
                    </div>
                    <div class="feature-item">
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>Real-time analytics</span>
                    </div>
                </div>
            </div>
            <div class="social-icons"  >
                <a href="#" class="social-icon" data-tooltip="Linkedin" style="" >  <i class="bi bi-linkedin"></i></a>
                <a href="#" class="social-icon" data-tooltip="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon" data-tooltip="Twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="social-icon" data-tooltip="Google"><i class="bi bi-google"></i></a>
            </div>
            
            <!-- Floating decorative elements -->
            <div class="floating-element" style="width: 150px; height: 150px; top: -50px; left: -50px; background: rgba(108, 92, 231, 0.1); animation-delay: 0.5s;"></div>
            <div class="floating-element" style="width: 80px; height: 80px; bottom: 30px; right: 30px; background: rgba(255, 255, 255, 0.05); animation-delay: 1s;"></div>
        </div>

        <!-- Right panel - Form section -->
        <div class="right-panel">
            <div class="form-container">
                <h3>Create Account</h3>
                <p class="subtitle">Join us today and unlock amazing features</p>
                
                <form id="signupForm"  >
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contact Number</label>
                        <input type="tel" name="contact" class="form-control" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Create a password" required>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="agreeCheck" required>
                        <label class="form-check-label" for="agreeCheck">
                            I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-custom">
                        <span class="button-text">Sign Up Now</span>
                        <span class="button-loader" style="display: none;">
                            <i class="bi bi-arrow-repeat"></i>
                        </span>
                    </button>
                    
                    <div class="form-footer">
                        Already have an account? <a href="{{ route("parent1.login") }}">Sign In</a>
                    </div>
                </form>
            </div>
            
            <!-- Floating decorative elements -->
            <div class="floating-element" style="width: 20px; height: 20px; top: 20%; left: 10%; background: rgba(108, 92, 231, 0.3);"></div>
            <div class="floating-element" style="width: 30px; height: 30px; bottom: 15%; right: 15%; background: rgba(255, 255, 255, 0.1); animation-delay: 0.8s;"></div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form submission handler with enhanced animations
        const signupForm = document.getElementById('signupForm');
        if (signupForm) {
            signupForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const button = this.querySelector('button[type="submit"]');
                const buttonText = button.querySelector('.button-text');
                const buttonLoader = button.querySelector('.button-loader');
                
                // Show loading state
                buttonText.style.display = 'none';
                buttonLoader.style.display = 'inline-block';
                button.style.cursor = 'not-allowed';
                buttonLoader.style.animation = 'spin 1s linear infinite';
                
                // Add spin animation
                document.styleSheets[0].insertRule(`
                    @keyframes spin {
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }
                `, document.styleSheets[0].cssRules.length);
                
                // Simulate API call
                setTimeout(() => {
                    // Show success state
                    buttonText.textContent = 'Welcome to KRADUS!';
                    buttonText.style.display = 'inline-block';
                    buttonLoader.style.display = 'none';
                    button.style.background = 'linear-gradient(to right, #00b894, #00cec9)';
                    
                    // Add confetti effect
                    createConfetti();
                    
                    // Reset after 3 seconds
                    setTimeout(() => {
                        buttonText.textContent = 'Sign Up Now';
                        button.style.background = 'linear-gradient(to right, var(--primary-color), var(--secondary-color))';
                        button.style.cursor = 'pointer';
                        // Here you would typically redirect the user
                    }, 3000);
                }, 2000);
            });
        }
        
        // Create confetti effect
        function createConfetti() {
            const colors = ['#6c5ce7', '#00cec9', '#fd79a8', '#fdcb6e', '#a29bfe'];
            const container = document.querySelector('.right-panel');
            
            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement('div');
                confetti.style.position = 'absolute';
                confetti.style.width = '10px';
                confetti.style.height = '10px';
                confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.borderRadius = '50%';
                confetti.style.left = Math.random() * 100 + '%';
                confetti.style.top = '-10px';
                confetti.style.opacity = '0';
                confetti.style.transform = 'scale(0)';
                confetti.style.animation = `confetti-fall ${Math.random() * 3 + 2}s ease-in forwards ${Math.random() * 0.5}s`;
                
                document.styleSheets[0].insertRule(`
                    @keyframes confetti-fall {
                        0% { 
                            opacity: 0; 
                            transform: translateY(0) scale(0) rotate(0deg); 
                        }
                        10% { 
                            opacity: 1; 
                            transform: translateY(0) scale(1) rotate(0deg); 
                        }
                        100% { 
                            opacity: 1; 
                            transform: translateY(100vh) scale(0.5) rotate(${Math.random() * 360}deg); 
                        }
                    }
                `, document.styleSheets[0].cssRules.length);
                
                container.appendChild(confetti);
                
                // Remove confetti after animation
                setTimeout(() => {
                    confetti.remove();
                }, 5000);
            }
        }
        
        // Input focus effects
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.querySelector('.form-label').style.color = 'var(--primary-color)';
                this.style.boxShadow = '0 0 0 3px rgba(108, 92, 231, 0.3)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.querySelector('.form-label').style.color = 'var(--text-muted)';
                this.style.boxShadow = 'none';
            });
        });
    </script>
</body>
</html>