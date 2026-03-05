<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Academic City | Admin Panel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="web-assets/imgs/logo/accity-icon.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --red:        #DA3A34;
            --red-dark:   #b82e29;
            --red-light:  #f2534d;
            --navy:       #212958;
            --navy-dark:  #181e42;
            --navy-light: #2d3870;
            --white:      #ffffff;
            --off-white:  #f5f6fa;
            --gray:       #8b93b5;
            --light-gray: #e8eaf2;
            --radius:     12px;
            --radius-lg:  20px;
            --shadow:     0 24px 64px rgba(33, 41, 88, 0.18);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--navy-dark);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Animated background blobs */
        body::before {
            content: '';
            position: fixed;
            top: -200px;
            left: -200px;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(218, 58, 52, 0.18) 0%, transparent 70%);
            border-radius: 50%;
            animation: blobMove1 12s ease-in-out infinite;
            pointer-events: none;
        }

        body::after {
            content: '';
            position: fixed;
            bottom: -200px;
            right: -150px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(45, 56, 112, 0.5) 0%, transparent 70%);
            border-radius: 50%;
            animation: blobMove2 15s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes blobMove1 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50%       { transform: translate(80px, 60px) scale(1.12); }
        }
        @keyframes blobMove2 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50%       { transform: translate(-60px, -40px) scale(1.1); }
        }

        /* Card */
        .login-container {
            display: flex;
            max-width: 980px;
            width: 100%;
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow);
            animation: slideUp 0.7s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px) scale(0.97); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }

        /* ── LEFT PANEL ── */
        .login-panel {
            flex: 1.1;
            background: linear-gradient(145deg, var(--navy) 0%, var(--navy-dark) 60%, #0f1430 100%);
            color: var(--white);
            padding: 56px 44px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .login-panel::before {
            content: '';
            position: absolute;
            top: -80px;
            right: -80px;
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, rgba(218, 58, 52, 0.22) 0%, transparent 70%);
            border-radius: 50%;
        }

        .login-panel::after {
            content: '';
            position: absolute;
            bottom: -60px;
            left: -60px;
            width: 220px;
            height: 220px;
            background: radial-gradient(circle, rgba(218, 58, 52, 0.14) 0%, transparent 70%);
            border-radius: 50%;
        }

        /* Decorative floating circles */
        .deco-circle {
            position: absolute;
            border-radius: 50%;
            border: 1.5px solid rgba(218, 58, 52, 0.25);
            pointer-events: none;
        }
        .deco-circle-1 { width: 180px; height: 180px; top: 30px; right: 20px; animation: spin 20s linear infinite; }
        .deco-circle-2 { width: 110px; height: 110px; bottom: 100px; right: 60px; animation: spin 14s linear infinite reverse; }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }

        .panel-top { position: relative; z-index: 2; }

        .panel-logo {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 42px;
        }

        .panel-logo img {
            height: 46px;
            filter: brightness(0) invert(1);
        }

        .panel-logo-text {
            font-size: 1.15rem;
            font-weight: 700;
            letter-spacing: 0.02em;
            line-height: 1.2;
            color: var(--white);
        }

        .panel-logo-text span {
            display: block;
            font-size: 0.75rem;
            font-weight: 400;
            opacity: 0.6;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .panel-headline {
            font-size: 2rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 14px;
            letter-spacing: -0.01em;
        }

        .panel-headline .highlight {
            color: var(--red-light);
        }

        .panel-desc {
            font-size: 0.95rem;
            line-height: 1.7;
            opacity: 0.72;
            margin-bottom: 40px;
        }

        .features {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 16px;
            position: relative;
            z-index: 2;
        }

        .features li {
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 0.9rem;
            opacity: 0.88;
        }

        .feature-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: rgba(218, 58, 52, 0.18);
            border: 1px solid rgba(218, 58, 52, 0.35);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--red-light);
            font-size: 0.85rem;
            transition: var(--transition);
        }

        .features li:hover .feature-icon {
            background: rgba(218, 58, 52, 0.32);
            transform: scale(1.1);
        }

        .panel-footer {
            position: relative;
            z-index: 2;
            margin-top: 48px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            font-size: 0.8rem;
            opacity: 0.5;
        }

        /* ── RIGHT PANEL (form) ── */
        .login-form-container {
            flex: 1;
            padding: 56px 44px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: var(--white);
        }

        .form-header {
            margin-bottom: 36px;
        }

        .form-header .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(218, 58, 52, 0.08);
            color: var(--red);
            font-size: 0.75rem;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 100px;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            margin-bottom: 14px;
            border: 1px solid rgba(218, 58, 52, 0.18);
        }

        .form-header h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--navy);
            letter-spacing: -0.02em;
            margin-bottom: 8px;
        }

        .form-header p {
            color: var(--gray);
            font-size: 0.92rem;
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
            margin-top: -4px;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--light-gray);
        }
        .divider span {
            color: var(--gray);
            font-size: 0.78rem;
            white-space: nowrap;
        }

        /* Form elements */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
            font-size: 0.85rem;
            color: var(--navy);
            letter-spacing: 0.01em;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper .icon-left {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            font-size: 0.9rem;
            transition: var(--transition);
            pointer-events: none;
        }

        .input-wrapper input {
            width: 100%;
            padding: 13px 16px 13px 44px;
            border: 1.5px solid var(--light-gray);
            border-radius: var(--radius);
            font-size: 0.93rem;
            font-family: 'Inter', sans-serif;
            color: var(--navy);
            background: var(--off-white);
            transition: var(--transition);
            outline: none;
        }

        .input-wrapper input::placeholder {
            color: #b0b8d4;
        }

        .input-wrapper input:focus {
            border-color: var(--red);
            background: var(--white);
            box-shadow: 0 0 0 4px rgba(218, 58, 52, 0.1);
        }

        .input-wrapper input:focus + .icon-left,
        .input-wrapper:focus-within .icon-left {
            color: var(--red);
        }

        .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            cursor: pointer;
            padding: 4px;
            transition: var(--transition);
            font-size: 0.88rem;
        }

        .password-toggle:hover { color: var(--navy); }

        /* Options row */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-me input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: var(--red);
            cursor: pointer;
            border-radius: 4px;
        }

        .remember-me label {
            font-size: 0.85rem;
            color: var(--gray);
            cursor: pointer;
            user-select: none;
        }

        .forgot-link {
            font-size: 0.85rem;
            color: var(--red);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .forgot-link:hover {
            color: var(--red-dark);
            text-decoration: underline;
        }

        /* Submit button */
        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, var(--red) 0%, var(--red-dark) 100%);
            color: var(--white);
            border: none;
            border-radius: var(--radius);
            font-size: 1rem;
            font-weight: 700;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            letter-spacing: 0.02em;
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.12) 0%, transparent 60%);
            opacity: 0;
            transition: var(--transition);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(218, 58, 52, 0.4);
        }

        .login-btn:hover::before { opacity: 1; }

        .login-btn:active {
            transform: translateY(0);
            box-shadow: 0 4px 12px rgba(218, 58, 52, 0.3);
        }

        .login-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        /* Error message */
        .error-msg {
            display: none;
            background: rgba(218, 58, 52, 0.08);
            color: var(--red-dark);
            border: 1px solid rgba(218, 58, 52, 0.25);
            padding: 12px 16px;
            border-radius: var(--radius);
            margin-top: 18px;
            font-size: 0.88rem;
            font-weight: 500;
            display: none;
            animation: shake 0.4s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25%       { transform: translateX(-6px); }
            75%       { transform: translateX(6px); }
        }

        .footer-text {
            text-align: center;
            margin-top: 28px;
            color: var(--gray);
            font-size: 0.8rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                max-width: 440px;
            }

            .login-panel {
                padding: 36px 28px;
            }

            .deco-circle { display: none; }

            .panel-headline { font-size: 1.5rem; }

            .login-form-container {
                padding: 36px 28px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">

        <!-- ── LEFT PANEL ── -->
        <div class="login-panel">
            <span class="deco-circle deco-circle-1"></span>
            <span class="deco-circle deco-circle-2"></span>

            <div class="panel-top">
                <div class="panel-logo">
                    <img src="web-assets/imgs/logo/accity-icon.png" alt="Academic City Logo">
                    <div class="panel-logo-text">
                        Academic City
                        <span>Admin Portal</span>
                    </div>
                </div>

                <h1 class="panel-headline">
                    Power Your <br>
                    <span class="highlight">Academic</span> Journey
                </h1>
                <p class="panel-desc">
                    A centralised platform to manage students, staff, academic programmes, and institutional analytics — all in one secure panel.
                </p>

                <ul class="features">
                    <li>
                        <span class="feature-icon"><i class="fas fa-graduation-cap"></i></span>
                        Manage student records & academic programmes
                    </li>
                    <li>
                        <span class="feature-icon"><i class="fas fa-chart-line"></i></span>
                        Analyse institutional performance metrics
                    </li>
                    <li>
                        <span class="feature-icon"><i class="fas fa-shield-alt"></i></span>
                        Secure, role-based access control
                    </li>
                    <li>
                        <span class="feature-icon"><i class="fas fa-users"></i></span>
                        Collaborate with faculty & staff members
                    </li>
                </ul>
            </div>

            <div class="panel-footer">
                © {{ date("Y") }} The Academic City. All rights reserved.
            </div>
        </div>

        <!-- ── RIGHT PANEL (form) ── -->
        <div class="login-form-container">
            <div class="form-header">
                <div class="badge">
                    <i class="fas fa-lock"></i> Secure Access
                </div>
                <h3>Welcome Back</h3>
                <p>Sign in to your administrator account to continue.</p>
            </div>

            <form class="login_form" method="POST">
                @csrf

                <div class="form-group">
                    <label for="mobileNumber">Mobile Number</label>
                    <div class="input-wrapper">
                        <input type="tel" id="mobileNumber" name="number"
                               placeholder="Enter your mobile number" required autocomplete="tel">
                        <span class="icon-left"><i class="fas fa-phone"></i></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password"
                               placeholder="Enter your password" required autocomplete="current-password">
                        <span class="icon-left"><i class="fas fa-lock"></i></span>
                        <span class="password-toggle" id="togglePassword" title="Toggle password visibility">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="rememberMe" name="remember" checked>
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>

                <button type="submit" class="login-btn" id="loginBtn">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </button>

                <div class="error-msg" id="errorMessage"></div>
            </form>

            <p class="footer-text">
                Need help? Contact your system administrator.
            </p>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            // Password visibility toggle
            $("#togglePassword").on('click', function () {
                const input = $("#password");
                const isPassword = input.attr('type') === 'password';
                input.attr('type', isPassword ? 'text' : 'password');
                $(this).find('i').toggleClass('fa-eye fa-eye-slash');
            });

            // Form submission via AJAX
            $(".login_form").submit(function (e) {
                e.preventDefault();

                const btn          = $("#loginBtn");
                const originalHtml = btn.html();

                btn.html('<i class="fas fa-circle-notch fa-spin"></i> Signing In…').prop('disabled', true);
                $("#errorMessage").hide().html('');

                $.ajax({
                    url:  '/loginuser',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function (data) {
                        btn.html(originalHtml).prop('disabled', false);
                        const response = JSON.parse(data);

                        if (response.success == 1) {
                            window.location.href = '/admin_dashboard';
                        } else {
                            const msg = response.message || 'Invalid credentials. Please try again.';
                            $("#errorMessage").html(
                                '<i class="fas fa-exclamation-circle" style="margin-right:8px"></i>' + msg
                            ).fadeIn(200);
                        }
                    },
                    error: function () {
                        btn.html(originalHtml).prop('disabled', false);
                        $("#errorMessage").html(
                            '<i class="fas fa-exclamation-circle" style="margin-right:8px"></i>An error occurred. Please try again.'
                        ).fadeIn(200);
                    }
                });
            });
        });
    </script>
</body>
</html>
