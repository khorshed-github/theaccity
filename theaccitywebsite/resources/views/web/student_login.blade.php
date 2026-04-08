@extends('web_layouts.app')

@section('wrapper')
    <main>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

            /* ── Page Reset ─────────────────────────────── */
            .sl-page {
                font-family: 'Inter', sans-serif;
                min-height: 100vh;
                display: flex;
                align-items: stretch;
                background: #f1f4f9;
            }

            /* ── Left Panel ─────────────────────────────── */
            .sl-left {
                flex: 0 0 42%;
                max-width: 42%;
                background: linear-gradient(160deg, #212958 0%, #1a2050 40%, #DA3A34 100%);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
                padding: 60px 56px;
                position: relative;
                overflow: hidden;
            }

            .sl-left::before {
                content: '';
                position: absolute;
                width: 420px;
                height: 420px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.04);
                top: -140px;
                right: -160px;
            }

            .sl-left::after {
                content: '';
                position: absolute;
                width: 260px;
                height: 260px;
                border-radius: 50%;
                background: rgba(218, 58, 52, 0.18);
                bottom: -80px;
                left: -80px;
            }

            .sl-left-dot {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.12);
            }

            .sl-left-brand {
                position: relative;
                z-index: 2;
            }

            .sl-left-brand img {
                height: 54px;
                margin-bottom: 44px;
                filter: brightness(0) invert(1);
            }

            .sl-left-brand h2 {
                font-size: 34px;
                font-weight: 800;
                color: #fff;
                line-height: 1.2;
                margin-bottom: 18px;
                letter-spacing: -0.5px;
            }

            .sl-left-brand h2 span {
                color: #ffcdd0;
            }

            .sl-left-brand p {
                color: rgba(255, 255, 255, 0.72);
                font-size: 15px;
                line-height: 1.7;
                margin-bottom: 36px;
                max-width: 320px;
            }

            .sl-perks {
                display: flex;
                flex-direction: column;
                gap: 14px;
                position: relative;
                z-index: 2;
            }

            .sl-perk {
                display: flex;
                align-items: center;
                gap: 12px;
                color: rgba(255, 255, 255, 0.88);
                font-size: 14px;
                font-weight: 500;
            }

            .sl-perk-icon {
                width: 34px;
                height: 34px;
                border-radius: 8px;
                background: rgba(255, 255, 255, 0.12);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 15px;
                flex-shrink: 0;
                color: #fff;
            }

            /* ── Right Panel ─────────────────────────────── */
            .sl-right {
                flex: 1;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 60px 40px;
                background: #f1f4f9;
                position: relative;
            }

            /* ── Card ───────────────────────────────────── */
            .sl-card {
                background: #ffffff;
                border-radius: 20px;
                box-shadow: 0 8px 48px rgba(33, 41, 88, 0.10), 0 2px 12px rgba(33, 41, 88, 0.06);
                width: 100%;
                max-width: 440px;
                overflow: hidden;
            }

            .sl-card-header {
                padding: 36px 40px 20px;
                text-align: center;
                border-bottom: 1px solid #f1f1f1;
            }

            .sl-card-header h3 {
                font-size: 24px;
                font-weight: 800;
                color: #212958;
                margin-bottom: 4px;
                letter-spacing: -0.4px;
            }

            .sl-card-header p {
                color: #94a3b8;
                font-size: 14px;
            }

            /* ── Toggle ─────────────────────────────────── */
            .sl-toggle {
                display: inline-flex;
                background: #f1f4f9;
                border-radius: 12px;
                padding: 4px;
                margin-top: 18px;
            }

            .sl-toggle-btn {
                padding: 8px 32px;
                border-radius: 9px;
                border: none;
                font-size: 14px;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.25s ease;
                background: transparent;
                color: #94a3b8;
            }

            .sl-toggle-btn.active {
                background: #212958;
                color: #fff;
                box-shadow: 0 3px 12px rgba(33, 41, 88, 0.25);
            }

            /* ── Form Body ──────────────────────────────── */
            .sl-card-body {
                padding: 28px 40px 36px;
            }

            .sl-label {
                display: block;
                font-size: 12px;
                font-weight: 700;
                color: #212958;
                letter-spacing: 0.6px;
                text-transform: uppercase;
                margin-bottom: 7px;
            }

            .sl-input-wrap {
                position: relative;
                margin-bottom: 18px;
            }

            .sl-input-wrap input {
                width: 100%;
                height: 50px;
                border: 1.5px solid #e2e8f0;
                border-radius: 11px;
                padding: 0 46px 0 16px;
                font-size: 15px;
                font-family: 'Inter', sans-serif;
                color: #1e293b;
                background: #fafbfc;
                outline: none;
                transition: border 0.2s, box-shadow 0.2s, background 0.2s;
            }

            .sl-input-wrap input:focus {
                border-color: #212958;
                box-shadow: 0 0 0 4px rgba(33, 41, 88, 0.09);
                background: #fff;
            }

            .sl-input-wrap .sl-icon {
                position: absolute;
                right: 15px;
                top: 50%;
                transform: translateY(-50%);
                color: #b0b8cc;
                font-size: 15px;
                pointer-events: none;
            }

            /* ── Submit Button ──────────────────────────── */
            .sl-btn {
                width: 100%;
                height: 50px;
                background: linear-gradient(135deg, #212958 0%, #1a1f45 100%);
                color: #fff;
                font-size: 15px;
                font-weight: 700;
                border: none;
                border-radius: 11px;
                cursor: pointer;
                transition: all 0.25s ease;
                box-shadow: 0 4px 16px rgba(33, 41, 88, 0.22);
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                font-family: 'Inter', sans-serif;
                margin-top: 6px;
            }

            .sl-btn:hover {
                background: linear-gradient(135deg, #DA3A34 0%, #bf2f2a 100%);
                box-shadow: 0 6px 20px rgba(218, 58, 52, 0.32);
                transform: translateY(-2px);
            }

            /* ── Forgot / Extras ────────────────────────── */
            .sl-forgot {
                text-align: center;
                margin-top: 14px;
            }

            .sl-forgot a {
                font-size: 13px;
                color: #94a3b8;
                text-decoration: none;
                transition: color 0.2s;
            }

            .sl-forgot a:hover {
                color: #DA3A34;
            }

            /* ── Error alert ────────────────────────────── */
            .sl-alert {
                border-radius: 11px;
                background: #fee2e2;
                border: 1px solid #fca5a5;
                color: #b91c1c;
                padding: 12px 16px;
                font-size: 14px;
                margin-bottom: 20px;
                display: flex;
                align-items: flex-start;
                gap: 10px;
            }

            .sl-alert ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            /* ── Responsive ─────────────────────────────── */
            @media (max-width: 900px) {
                .sl-left {
                    display: none;
                }

                .sl-right {
                    padding: 40px 20px;
                }
            }

            @media (max-width: 480px) {

                .sl-card-header,
                .sl-card-body {
                    padding-left: 24px;
                    padding-right: 24px;
                }

                .sl-toggle-btn {
                    padding: 8px 22px;
                }
            }
        </style>

        <div class="sl-page">

            <!-- ───── Left Panel ───── -->
            <div class="sl-left">
                <!-- floating dots -->
                <div class="sl-left-dot" style="width:80px;height:80px;top:60px;right:60px;opacity:0.5;"></div>
                <div class="sl-left-dot" style="width:20px;height:20px;top:200px;left:30px;opacity:0.3;"></div>
                <div class="sl-left-dot" style="width:50px;height:50px;bottom:160px;right:30px;opacity:0.2;"></div>

                <div class="sl-left-brand">
                    <img src="{{ asset('web-assets/imgs/logo/logo.png') }}" alt="The Accity Logo"
                        onerror="this.style.display='none'">
                    <h2>Your <span>Future</span> Starts<br>Here Today</h2>
                    <p>Join thousands of students who have successfully secured admissions to top universities worldwide
                        through our expert guidance.</p>
                </div>

                <div class="sl-perks">
                    <div class="sl-perk">
                        <div class="sl-perk-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                        Access to 500+ university courses
                    </div>
                    <div class="sl-perk">
                        <div class="sl-perk-icon"><i class="fa-solid fa-headset"></i></div>
                        Dedicated expert advisor support
                    </div>
                    <div class="sl-perk">
                        <div class="sl-perk-icon"><i class="fa-solid fa-file-check"></i></div>
                        Streamlined application tracking
                    </div>
                    <div class="sl-perk">
                        <div class="sl-perk-icon"><i class="fa-solid fa-globe"></i></div>
                        Study abroad opportunities worldwide
                    </div>
                </div>
            </div>

            <!-- ───── Right Panel ───── -->
            <div class="sl-right">

                @if($errors->any())
                    <div class="sl-alert" style="width:100%;max-width:440px;">
                        <i class="fa-solid fa-circle-exclamation" style="margin-top:2px;flex-shrink:0;"></i>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="sl-card">
                    <!-- Header -->
                    <div class="sl-card-header">
                        <h3 id="sl-title">Welcome Back 👋</h3>
                        <p id="sl-subtitle">Sign in to access your student portal</p>
                        <div class="sl-toggle">
                            <button class="sl-toggle-btn active" id="btn-login" onclick="showLogin()">Log In</button>
                            <button class="sl-toggle-btn" id="btn-register" onclick="showRegister()">Sign Up</button>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sl-card-body">

                        <!-- ── Login Form ── -->
                        <div id="sl-login-form">
                            <form action="{{ route('student.login.post') }}" method="POST">
                                @csrf
                                <div class="sl-input-wrap">
                                    <label class="sl-label" for="login-email">Email Address</label>
                                    <input type="email" id="login-email" name="email" placeholder="name@example.com"
                                        required value="{{ old('email') }}">
                                    <i class="fa-regular fa-envelope sl-icon"></i>
                                </div>
                                <div class="sl-input-wrap">
                                    <label class="sl-label" for="login-pass">Password</label>
                                    <input type="password" id="login-pass" name="password" placeholder="••••••••" required>
                                    <i class="fa-regular fa-lock sl-icon" id="toggle-pass"
                                        style="pointer-events:all;cursor:pointer;"
                                        onclick="togglePass('login-pass','toggle-pass')"></i>
                                </div>
                                <button type="submit" class="sl-btn">
                                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Sign In
                                </button>
                                <div class="sl-forgot">
                                    <a href="#">Forgot your password?</a>
                                </div>
                            </form>
                        </div>

                        <!-- ── Register Form ── -->
                        <div id="sl-register-form" style="display:none;">
                            <form action="{{ route('student.register.post') }}" method="POST">
                                @csrf
                                <div class="sl-input-wrap">
                                    <label class="sl-label" for="reg-name">Full Name</label>
                                    <input type="text" id="reg-name" name="name" placeholder="Your full name" required>
                                    <i class="fa-regular fa-user sl-icon"></i>
                                </div>
                                <div class="sl-input-wrap">
                                    <label class="sl-label" for="reg-country">Country of Residence</label>
                                    <input type="text" id="reg-country" name="country" placeholder="Your country" required>
                                    <i class="fa-regular fa-globe sl-icon"></i>
                                </div>
                                <div class="sl-input-wrap">
                                    <label class="sl-label" for="reg-email">Email Address</label>
                                    <input type="email" id="reg-email" name="email" placeholder="name@example.com" required
                                        value="{{ old('email') }}">
                                    <i class="fa-regular fa-envelope sl-icon"></i>
                                </div>
                                <div class="sl-input-wrap">
                                    <label class="sl-label" for="reg-phone">Phone Number</label>
                                    <input type="text" id="reg-phone" name="phone" placeholder="+880 1xxx-xxxxxx" required>
                                    <i class="fa-regular fa-phone sl-icon"></i>
                                </div>
                                <div class="sl-input-wrap">
                                    <label class="sl-label" for="reg-pass">Password</label>
                                    <input type="password" id="reg-pass" name="password" placeholder="••••••••" required>
                                    <i class="fa-regular fa-lock sl-icon" id="toggle-reg-pass"
                                        style="pointer-events:all;cursor:pointer;"
                                        onclick="togglePass('reg-pass','toggle-reg-pass')"></i>
                                </div>
                                <button type="submit" class="sl-btn">
                                    <i class="fa-solid fa-user-plus"></i> Create Account
                                </button>
                            </form>
                        </div>

                    </div>
                </div>

                <p style="color:#b0b8cc; font-size:13px; margin-top:24px; text-align:center;">
                    &copy; {{ date('Y') }} The Accity. All rights reserved.
                </p>
            </div>
        </div>
    </main>

    <script>
        function showLogin() {
            document.getElementById('sl-login-form').style.display = 'block';
            document.getElementById('sl-register-form').style.display = 'none';
            document.getElementById('btn-login').classList.add('active');
            document.getElementById('btn-register').classList.remove('active');
            document.getElementById('sl-title').innerText = 'Welcome Back 👋';
            document.getElementById('sl-subtitle').innerText = 'Sign in to access your student portal';
        }

        function showRegister() {
            document.getElementById('sl-login-form').style.display = 'none';
            document.getElementById('sl-register-form').style.display = 'block';
            document.getElementById('btn-login').classList.remove('active');
            document.getElementById('btn-register').classList.add('active');
            document.getElementById('sl-title').innerText = 'Create an Account ✨';
            document.getElementById('sl-subtitle').innerText = 'Fill in your details to get started';
        }

        function togglePass(inputId, iconId) {
            const inp = document.getElementById(inputId);
            const ico = document.getElementById(iconId);
            if (inp.type === 'password') {
                inp.type = 'text';
                ico.classList.replace('fa-lock', 'fa-lock-open');
            } else {
                inp.type = 'password';
                ico.classList.replace('fa-lock-open', 'fa-lock');
            }
        }

        // Auto-show register tab if there's a register error
        @if(session('show_register') || old('name'))
            showRegister();
        @endif
    </script>
@endsection