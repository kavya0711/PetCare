<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PetCare</title>
    <link rel="stylesheet" href="assets\css\sign in style.css">
    <link rel="icon" type="image/x-icon" href="assets/images/pet.png">
</head>
<body>
    <img src="assets\images\login.jpg" class="background-image" alt="Background Image">
    <div class="image-wrapper">
        <a class="paw" href="homepage.php">
            <img src="assets/images/pet.png" alt="PetCare">
        </a>
    </div>
    <main>
        <div>
            <section class="login-section">
                <h2>Login to Your Account</h2>
                <form action="adoptionpage.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    
                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember-me" name="remember-me">
                            <label for="remember-me">Remember Me</label>
                        </div>
                        <a href="#">Forgot Password?</a>
                    </div>
                    
                    <button type="submit">Login</button>
                </form>
                
                <div class="signup-option">
                    <p>Don't have an account? <a href="Signup.php">Sign Up</a></p>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="content">
            <section class="footer-links">
                <ul>
                <li><a class="link" href="privacypolicy.php" target="_blank">Privacy Policy</a></li>
                    <li><a class="link" href="termsofservice.php" target="_blank">Terms of Service</a></li>
                </ul>
            </section>
        </div>
    </footer>
</body>
</html>
