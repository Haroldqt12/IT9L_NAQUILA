
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h2 class="mb-4 text-center">GCASH TRANSFER</h2>
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