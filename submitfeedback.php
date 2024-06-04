<?php
include 'animal.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["feedback-name"];
    $email = $_POST["feedback-email"];
    $message = $_POST["feedback-message"];

    // Prepare and execute the SQL statement to insert feedback data
    $stmt = $con->prepare("INSERT INTO register7 (`feedback-name`, `feedback-email`, `feedback-message`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    
    if ($stmt->execute()) {
        header("Location: feedbacksubmitted.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
