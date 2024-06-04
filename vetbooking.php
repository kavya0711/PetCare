<?php
include 'animal.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_id = $_POST["pet_id"];
    $petName = $_POST["petName"];
    $ownerName = $_POST["ownerName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $appointmentDate = $_POST["appointmentDate"];
    $appointmentTime = $_POST["appointmentTime"];
    $reason = $_POST["reason"];
    
    $stmt = $con->prepare("INSERT INTO register3 (pet_id, petName, ownerName, email, phone, address, appointmentDate, appointmentTime, reason) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $pet_id, $petName, $ownerName, $email, $phone, $address, $appointmentDate, $appointmentTime, $reason);
    
    if ($stmt->execute()) {
        header("location: applicationsuccess.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
