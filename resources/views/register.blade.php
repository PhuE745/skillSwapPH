<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap PH - Register</title>
    
    {{-- Link to external CSS (same CSS file) --}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="card-content">
            <!-- Brand Section -->
            <div class="brand">
                <h1>SkillSwap PH</h1>
                <div class="brand-tagline">Exchange skills, not money</div>
            </div>

            <!-- Features Section -->
            <div class="features">
                <div class="feature-item">
                    <span class="check-symbol">✓</span>
                    <span>Match with skilled learners</span>
                </div>
                <div class="feature-item">
                    <span class="check-symbol">✧</span>
                    <span>Learn & teach together</span>
                </div>
                <div class="feature-item">
                    <span class="check-symbol">✦</span>
                    <span>Build a learning community</span>
                </div>
            </div>

            <!-- Welcome Section -->
            <div class="welcome">
                <h2>Create Account</h2>
                <p>Join our learning community</p>
            </div>

            <!-- Register Form -->
            <form method="POST">
                @csrf

                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" name="name" placeholder="Juan Dela Cruz" value="{{ old('name') }}" required>
                </div>

                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="hello@skillswap.ph" value="{{ old('email') }}" required>
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="input-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="••••••••" required>
                </div>

                <button type="submit" class="login-btn">Sign Up</button>
            </form>

            <!-- Login Link -->
            <div class="signup-prompt">
                Already have an account? <a href="/">Login</a>
            </div>
        </div>
    </div>
</body>
</html>