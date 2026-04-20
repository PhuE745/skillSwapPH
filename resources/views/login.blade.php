<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSwap PH - Login</title>
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
                <h2>Welcome Back</h2>
                <p>Login to continue</p>
            </div>

            <!-- Login Form -->
            <form method="GET" action="/logPost">
                @csrf

                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="hello@skillswap.ph">
                </div>

                <div class="input-group">
                    <label>Password</label>
                    <input type="password" placeholder="••••••••">
                </div>

                <div class="options-row">
                    <label class="remember">
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>

            <!-- Sign Up Link -->
            <div class="signup-prompt">
                Don't have an account? <a href="/register">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html>
