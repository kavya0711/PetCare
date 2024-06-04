<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Donation</title>
    <link rel="stylesheet" href="assets/css/upi.css">
    <link rel="icon" type="image/x-icon" href="assets/images/pet.png">
    <img src="assets\images\upipay.jpeg" class="background-image" alt="Background Image">

</head>
<body>
    <div class="container login-section">
        <h2>Donate for Pets</h2>
        <form action="paypalmethod.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="amount">Amount (INR):</label>
            <input type="number" id="amount" name="amount" required>
            <label for="paypalid">PAYPAL ID:</label>
            <input type="text" id="paypal" name="paypal" required>

            <button type="submit">Donate</button>
        </form>
    </div>
</body>
</html>
