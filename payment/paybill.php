<?php
 include "../helpers/Authenticated.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h2 class="mb-4 text-center">GCASH TRANSFER</h2>
            <div class="row justify-content-between">
                <div class="col-sm-3">
                    <a href="saveInfo.php"><button class="btn btn-sm btn-primary">Show records</button></a>
                </div>
                <div class="col-sm-1">
                    <a href="../Handler_connection.php/logout.php"><button class="btn btn-sm btn-danger">Logout</button></a>
                </div>
            </div>
            <form method="POST" action="data.php">
                <div class="mb-3">
                    <label for="reference" class="form-label">Name</label>
                    <input type="text" class="form-control"  name="name" required>
                </div>
                <div class="mb-3">
                    <label for="account_number" class="form-label">Number</label>
                    <input type="text" class="form-control" name="account_number" required>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" class="form-control"  name="amount" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Pay Now</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>