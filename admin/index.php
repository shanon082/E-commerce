<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="admin-wrapper">
        <h1>Admin Dashboard</h1>
        <div class="admin-links">
            <a href="manage_products.php">Manage Products</a>
            <a href="manage_orders.php">Manage Orders</a>
            <a href="manage_users.php">Manage Users</a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
