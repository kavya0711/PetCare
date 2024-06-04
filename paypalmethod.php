<?php
include 'animal.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $amount = $_POST["amount"];
    $paypal = $_POST["paypal"];

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $stmt = $con->prepare("INSERT INTO register6 (name, email, amount, paypal) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $amount, $paypal);

    if ($stmt->execute()) {
        header("Location: paymentsuccess.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
