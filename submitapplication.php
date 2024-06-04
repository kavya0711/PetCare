<?php
include 'animal.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $petType = $_POST["pet-type"];
    $reason = $_POST["reason"];
    $stmt = $con->prepare("INSERT INTO register2 (name, email, phone, address, `pet-type`, reason) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $address, $petType, $reason);
    
    if ($stmt->execute()) {
        header("location: applicationsuccess.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>    
