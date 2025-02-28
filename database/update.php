<?php
include '../database/database.php';

try {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM cash WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $todo = $result->fetch_assoc();
    } else {
        die("Record not found");
    }
    $stmt->close();

// diri to akong problem josh
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $Acc_number = $_POST['number'];
        $Amount = $_POST['amount'];

        $updateStmt = $conn->prepare("UPDATE cash SET number = ?, amount = ? WHERE id = ?");
        $updateStmt->bind_param("ssi", $Acc_number, $Amount, $id);

        if ($updateStmt->execute()) {
            header("Location: ../payment/saveInfo.php");
            exit;
        } else {
            echo "Update failed";
        }
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h2 class="mb-4 text-center">Edit GCASH Payment</h2>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Account Number</label>
                    <input type="text" name="number" class="form-control" value="<?= $todo['number'] ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Amount</label>
                    <input type="number" name="amount" class="form-control" value="<?= $todo['amount'] ?>" required>
                </div>
                <button href="../payment/saveInfo.php" type="submit" class="btn btn-primary">Update</button>
                <a href="../payment/saveInfo.php" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>
