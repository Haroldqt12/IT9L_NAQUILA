<?php
include "../database/database.php";

// Fetch all payment records
$sql = "SELECT * FROM cash";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - GCASH Payments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h2 class="mb-4 text-center">GCASH PAYMENT ADMIN</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Account Number</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['Fname']); ?></td>
                            <td><?php echo htmlspecialchars($row['number']); ?></td>
                            <td><?php echo htmlspecialchars($row['amount']); ?></td>
                            <td>
                                <a href="../database/update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="../database/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
