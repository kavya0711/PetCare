<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - PetCare</title>
    <link rel="stylesheet" href="assets\css\sign in style.css">
    <link rel="icon" type="image/x-icon" href="assets/images/pet.png">
    <img src="assets\images\login.jpg" class="background-image" alt="Background Image">

</head>
<body>
    <div class="image-wrapper">
        <a class="paw" href="homepage.php">
            <img src="assets/images/pet.png" alt="PetCare">
        </a>
    </div>

    <main>
        <div>
            <section class="signup-section">
                <h2>Create Your Account</h2>
                <form action="insert.php" method="post" onsubmit="return validate();">
                    <label for="name">Name:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    
                    <div class="form-options">
                        <div class="terms-conditions">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I accept the <a href="termsofservice.php" target="_blank">Terms of Service</a> & <a href="privacypolicy.php" target="_blank">Privacy Policy</a>

                        </div>
                    </div>
                    <button type="submit" class="btn">Signup</button>
                    
                </form>
                
                <div class="login-option">
                    <p>Already have an account? <a href="loginpage.php">Log In</a></p>
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
