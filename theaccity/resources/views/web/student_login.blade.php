@extends('web_layouts.app')

@section('wrapper')
<main>
    <style>
        .login-section {
            background-color: #f3f4f6;
            min-height: 80vh;
            display: flex;
            align-items: center;
            padding: 40px 0;
            font-family: 'Inter', sans-serif;
        }
        .auth-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.06);
            overflow: hidden;
            border: 1px solid #f0f0f0;
            max-width: 480px;
            margin: 0 auto;
        }
        .auth-header {
            text-align: center;
            padding: 40px 30px 20px;
            background: #fff;
        }
        .auth-header h3 {
            font-size: 26px;
            font-weight: 800;
            color: #111827;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }
        .auth-header p {
            color: #6b7280;
            font-size: 15px;
        }
        .form-toggle {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
            background: #f1f5f9;
            padding: 4px;
            border-radius: 12px;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }
        .toggle-btn {
            padding: 8px 30px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            background: transparent;
            color: #64748b;
        }
        .toggle-btn.active {
            background: #ffffff;
            color: #2563eb;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .auth-body {
            padding: 10px 40px 40px;
        }
        .form-control-custom {
            height: 50px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            padding-left: 15px;
            font-size: 15px;
            background-color: #ffffff;
            transition: all 0.2s;
        }
        .form-control-custom:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            background-color: #fff;
        }
        .form-label {
            font-weight: 600;
            font-size: 13px;
            color: #374151;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .btn-primary-custom {
            height: 50px;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            font-size: 16px;
            width: 100%;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }
        .btn-primary-custom:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 15px rgba(37, 99, 235, 0.3);
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: white;
        }
        .input-icon-group {
            position: relative;
        }
        .input-icon-group i {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            pointer-events: none;
        }
    </style>

    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    
                    @if($errors->any())
                        <div class="alert alert-danger mb-4 shadow-sm border-0 d-flex align-items-center" style="border-radius: 10px; background: #fee2e2; color: #b91c1c;">
                            <i class="fal fa-exclamation-circle me-3 fs-5"></i>
                            <ul class="mb-0 ps-0" style="list-style: none;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="auth-card animated fadeInUp">
                        <div class="auth-header">
                            <h3 id="form-title">Welcome Back</h3>
                            <p id="form-subtitle">Login to access your courses</p>
                            
                            <div class="form-toggle">
                                <button class="toggle-btn active" id="btn-login" onclick="showLogin()">Log In</button>
                                <button class="toggle-btn" id="btn-register" onclick="showRegister()">Sign Up</button>
                            </div>
                        </div>

                        <div class="auth-body">
                            <!-- Login Form -->
                            <div id="login-form">
                                <form action="{{ route('student.login.post') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-icon-group">
                                            <input type="email" name="email" class="form-control form-control-custom" placeholder="name@example.com" required>
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <div class="input-icon-group">
                                            <input type="password" name="password" class="form-control form-control-custom" placeholder="••••••••" required>
                                            <i class="fal fa-lock"></i>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary-custom" type="submit">Sign In</button>
                                    
                                    <div class="text-center mt-3">
                                       <a href="#" class="text-decoration-none" style="font-size: 13px; color: #64748b;">Forgot your password?</a>
                                    </div>
                                </form>
                            </div>

                            <!-- Register Form -->
                            <div id="register-form" style="display: none;">
                                <form action="{{ route('student.register.post') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <div class="input-icon-group">
                                            <input type="text" name="name" class="form-control form-control-custom" placeholder="Your Name" required>
                                            <i class="fal fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Country of Residence</label>
                                        <div class="input-icon-group">
                                            <input type="text" name="country" class="form-control form-control-custom" placeholder="Your Country" required>
                                            <i class="fal fa-globe"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-icon-group">
                                            <input type="email" name="email" class="form-control form-control-custom" placeholder="name@example.com" required>
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <div class="input-icon-group">
                                            <input type="text" name="phone" class="form-control form-control-custom" placeholder="+880 1xxx-xxxxxx" required>
                                            <i class="fal fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <div class="input-icon-group">
                                            <input type="password" name="password" class="form-control form-control-custom" placeholder="••••••••" required>
                                            <i class="fal fa-lock"></i>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary-custom" type="submit">Create Account</button>
                                </form>
                            </div>

                            
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <p style="color: #94a3b8; font-size: 14px;">&copy; {{ date('Y') }} The Accity. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    function showLogin() {
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('register-form').style.display = 'none';
        document.getElementById('btn-login').classList.add('active');
        document.getElementById('btn-register').classList.remove('active');
        document.getElementById('form-title').innerText = 'Welcome Back';
        document.getElementById('form-subtitle').innerText = 'Login to access your courses';
    }

    function showRegister() {
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'block';
        document.getElementById('btn-login').classList.remove('active');
        document.getElementById('btn-register').classList.add('active');
        document.getElementById('form-title').innerText = 'Join The Community';
        document.getElementById('form-subtitle').innerText = 'Fill in your details to start learning';
    }
</script>
@endsection
