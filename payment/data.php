<?php

include "../database/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $account_number = $_POST['account_number'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO cash (Fname, number, amount) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sss", $name, $account_number, $amount);

    if ($stmt->execute()) {
        header("Location: paybill.php");
        exit();
    } else {
        die("Error inserting data: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
