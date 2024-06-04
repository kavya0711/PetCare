<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care Feedback</title>
    <link rel="stylesheet" href="assets/css/feedback.css">
    <link rel="icon" type="image/x-icon" href="assets/images/pet.png">
</head>
<body>
    <img src="assets/images/upipay.jpeg" class="background-image" alt="Background Image">
    <section class="feedback">
        <h3>Feedback</h3>
        <form action="submitfeedback.php" method="post">
            <label for="feedback-name">Your Name:</label>
            <input type="text" id="feedback-name" name="feedback-name" required>

            <label for="feedback-email">Your Email:</label>
            <input type="email" id="feedback-email" name="feedback-email" required>

            <label for="feedback-message">Your Message:</label>
            <textarea id="feedback-message" name="feedback-message" rows="4" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </section>
</body>
</html>
