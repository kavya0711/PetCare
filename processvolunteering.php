<?php
include 'animal.php'; // Ensure that this file includes the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $volunteeringArea = $_POST["volunteering-area"];
    $message = $_POST["message"];
    
    // Prepare and bind parameters
    $stmt = $con->prepare("INSERT INTO register4 (name, email, phone, `volunteering-area`, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $volunteeringArea, $message);
    
    // Execute the statement
    if ($stmt->execute()) {
        header("location: applicationsuccess.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
