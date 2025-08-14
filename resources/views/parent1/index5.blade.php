<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
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

        .left-panel > * {
            position: relative;
            z-index: 1;
        }

        .left-panel h2 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            animation: slideIn 0.8s forwards 0.3s;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .left-panel .content {
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

        .features-list {
            margin: 30px 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            animation: slideIn 0.6s forwards;
        }

        .feature-item:nth-child(1) { animation-delay: 0.8s; }
        .feature-item:nth-child(2) { animation-delay: 1s; }
        .feature-item:nth-child(3) { animation-delay: 1.2s; }

        .feature-item i {
            color: var(--primary-color);
            margin-right: 10px;
            font-size: 18px;
        }

        .feature-item span {
            font-size: 15px;
            color: rgba(255, 255, 255, 0.9);
        }

        .social-icons {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            animation: fadeInUp 0.8s forwards 0.7s;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .social-icon:hover {
            background: #e74c3c;
            transform: scale(1.1);
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
            white-space: nowrap;
            pointer-events: none;
        }

        .social-icon:hover::after {
            opacity: 1;
            bottom: 120%;
        }

        .right-panel {
            flex: 1;
            background-color: rgba(26, 26, 46, 0.8);
            backdrop-filter: blur(12px);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 30px;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            background: rgba(30, 30, 60, 0.5);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 0.8s forwards 0.4s;
        }

        .form-container h3 {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-container p.subtitle {
            text-align: center;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            color: white;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: var(--text-muted);
        }

        .form-control {
            background: rgba(46, 43, 70, 0.7);
            border: none;
            color: var(--text-light);
            padding: 12px 15px;
            border-radius: 8px;
            width: 100%;
        }

        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-check-input {
            margin-right: 10px;
        }

        .btn-custom {
            width: 100%;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }

        .btn-custom:hover {
            background: var(--primary-hover);
        }

        .form-footer {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: var(--text-muted);
        }

        .form-footer a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .form-footer a:hover {
            color: var(--secondary-color);
            text-decoration: underline;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes confetti-fall {
            0% { transform: translateY(0) scale(0); opacity: 0; }
            10% { transform: scale(1); opacity: 1; }
            100% { transform: translateY(100vh) scale(0.5); opacity: 1; }
        }

        @media (max-width: 992px) {
            .main-container {
                flex-direction: column;
            }
            .left-panel, .right-panel {
                width: 100%;
            }
            .left-panel p {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="main-container">
    <!-- Left panel -->
    <div class="left-panel">
        <div>
             <h2 class="floating">TAX<a style="color: #e74c3c;" >Filing</a>Hub.</h2>
        </div>
        <div class="content">
            <h2>Welcome Back!</h2>
            <p>Login to manage your business filings, access analytics, and more — all from one platform.</p>
            <div class="features-list">
                <div class="feature-item"><i class="bi bi-lightning-charge-fill"></i><span>Fast & Secure Access</span></div>
                <div class="feature-item"><i class="bi bi-shield-lock-fill"></i><span>Secure Data Encryption</span></div>
                <div class="feature-item"><i class="bi bi-graph-up-arrow"></i><span>Analytics & Insights</span></div>
            </div>
        </div>
        <div class="social-icons">
            <a href="#" class="social-icon" data-tooltip="Linkedin"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="social-icon" data-tooltip="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-icon" data-tooltip="Twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="social-icon" data-tooltip="Google"><i class="bi bi-google"></i></a>
        </div>
    </div>

    <!-- Right panel - Login Form -->
    <div class="right-panel">
        <div class="form-container">
            <h3>Login to Your Account</h3>
            <p class="subtitle">Welcome back! Please enter your details</p>
            <form id="loginForm">
                <div class="form-group"  >
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label " style=" color: #a4a4ae;" for="rememberMe">Remember me</label>
                </div>
                <button type="submit" class="btn btn-custom">
                    <span class="button-text">Login</span>
                    <span class="button-loader" style="display: none;"><i class="bi bi-arrow-repeat"></i></span>
                </button>
                <div class="form-footer">
                    Don't have an account? <a href="{{ route("welcome") }}">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const button = this.querySelector('button[type="submit"]');
            const buttonText = button.querySelector('.button-text');
            const buttonLoader = button.querySelector('.button-loader');

            buttonText.style.display = 'none';
            buttonLoader.style.display = 'inline-block';
            button.style.cursor = 'not-allowed';
            buttonLoader.style.animation = 'spin 1s linear infinite';

            document.styleSheets[0].insertRule(`
                @keyframes spin {
                    from { transform: rotate(0deg); }
                    to { transform: rotate(360deg); }
                }
            `, document.styleSheets[0].cssRules.length);

            setTimeout(() => {
                buttonText.textContent = 'Welcome Back!';
                buttonText.style.display = 'inline-block';
                buttonLoader.style.display = 'none';
                button.style.background = 'linear-gradient(to right, #00b894, #00cec9)';
                createConfetti();

                setTimeout(() => {
                    buttonText.textContent = 'Login';
                    button.style.background = 'linear-gradient(to right, var(--primary-color), var(--secondary-color))';
                    button.style.cursor = 'pointer';
                }, 3000);
            }, 2000);
        });
    }

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
            container.appendChild(confetti);
            setTimeout(() => confetti.remove(), 5000);
        }
    }
</script>
</body>
</html>
