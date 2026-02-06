<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Academic City | Admin Panel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="web-assets/imgs/logo/accity-icon.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2e7d32;
            --primary-dark: #1b5e20;
            --primary-light: #4caf50;
            --secondary-color: #388e3c;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --gray-color: #6c757d;
            --border-radius: 8px;
            --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            line-height: 1.6;
        }
        
        .login-container {
            display: flex;
            max-width: 1000px;
            width: 100%;
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .login-info {
            flex: 1;
            background: linear-gradient(rgba(46, 125, 50, 0.85), rgba(46, 125, 50, 0.9)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80') center/cover no-repeat;
            color: white;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .login-info h1 {
            font-size: 2.2rem;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .login-info p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }
        
        .features {
            list-style: none;
            margin-top: 30px;
        }
        
        .features li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 1rem;
        }
        
        .features i {
            margin-right: 12px;
            background: rgba(255, 255, 255, 0.2);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-form-container {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .logo img {
            height: 50px;
            margin-right: 15px;
        }
        
        .logo h2 {
            color: var(--primary-color);
            font-size: 1.8rem;
            font-weight: 600;
        }
        
        .login-form-container h3 {
            font-size: 1.8rem;
            color: var(--dark-color);
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .login-form-container > p {
            color: var(--gray-color);
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark-color);
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-color);
        }
        
        .input-with-icon input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .input-with-icon input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
            outline: none;
        }
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-color);
            cursor: pointer;
        }
        
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
        }
        
        .remember-me input {
            margin-right: 8px;
        }
        
        .forgot-password {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }
        
        .forgot-password:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .login-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 14px;
            width: 100%;
            border-radius: var(--border-radius);
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-btn i {
            margin-right: 10px;
        }
        
        .login-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }
        
        .error-msg {
            background: #f8d7da;
            color: #721c24;
            padding: 12px;
            border-radius: var(--border-radius);
            margin-top: 20px;
            display: none;
        }
        
        .footer-text {
            text-align: center;
            margin-top: 30px;
            color: var(--gray-color);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                max-width: 500px;
            }
            
            .login-info {
                padding: 30px 25px;
            }
            
            .login-form-container {
                padding: 30px 25px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-info">
            <h1>The Academic City</h1>
            <p>Welcome to our higher education informatics portal. Access your admin dashboard to manage academic data, student information, and institutional analytics.</p>
            
            <ul class="features">
                <li><i class="fas fa-graduation-cap"></i> Manage student records and academic programs</li>
                <li><i class="fas fa-chart-line"></i> Analyze institutional performance metrics</li>
                <li><i class="fas fa-database"></i> Secure access to educational data systems</li>
                <li><i class="fas fa-users"></i> Collaborate with faculty and staff members</li>
            </ul>
        </div>
        
        <div class="login-form-container">
            <div class="logo">
                <img src="web-assets/imgs/logo/accity-icon.png" alt="Academic City Logo">
                <h2>Academic City</h2>
            </div>
            
            <h3>Sign In to Your Account</h3>
            <p>Enter your credentials to access the admin panel</p>
            
            <form class="login_form" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="mobileNumber">Mobile Number</label>
                    <div class="input-with-icon">
                        <i class="fas fa-phone"></i>
                        <input type="tel" id="mobileNumber" name="number" placeholder="Enter your mobile number" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <span class="password-toggle" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>
                
                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="rememberMe" checked>
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
                
                <button type="submit" class="login-btn">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </button>
                
                <div class="error-msg" id="errorMessage"></div>
            </form>
            
            <p class="footer-text">© {{ date("Y") }} The Academic City. All rights reserved.</p>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Password visibility toggle
            $("#togglePassword").on('click', function() {
                const passwordInput = $("#password");
                const type = passwordInput.attr('type') === 'password' ? 'text' : 'password';
                passwordInput.attr('type', type);
                $(this).find('i').toggleClass('fa-eye fa-eye-slash');
            });
            
            // Form submission
            $(".login_form").submit(function(e) {
                e.preventDefault();
                
                // Show loading state
                const submitBtn = $(this).find('button[type="submit"]');
                const originalText = submitBtn.html();
                submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Signing In...');
                submitBtn.prop('disabled', true);
                
                // Hide any previous error
                $("#errorMessage").hide();
                
                // Get the action URL
                var actionurl = '/loginuser';
                
                // AJAX request
                $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        // Reset button state
                        submitBtn.html(originalText);
                        submitBtn.prop('disabled', false);
                        
                        var response = JSON.parse(data);
                        if (response.success == 1) {
                            window.location.href = '/admin_dashboard';
                        } else {
                            $("#errorMessage").html(response.message).show();
                        }
                    },
                    error: function(xhr, status, error) {
                        // Reset button state
                        submitBtn.html(originalText);
                        submitBtn.prop('disabled', false);
                        
                        $("#errorMessage").html("An error occurred. Please try again.").show();
                    }
                });
            });
        });
    </script>
</body>
</html>
