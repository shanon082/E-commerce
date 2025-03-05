<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="account">
        <div class="account-card">
            <h1>Account Overview</h1><hr>
            <div class="account-info">
                <div class="account-details">
                    <h1>Account Details</h1><hr>
                    <div class="info">
                        <p>Username: <?php echo $_SESSION['username']; ?></p>
                        <p>Email: <?php echo $_SESSION['email']; ?></p>
                        <p>Phone: <?php echo $_SESSION['phone']; ?></p>
                    </div>
                </div>
                <div class="address-book">
                    <h1>Address Book</h1><hr>
                    <div class="add-info">
                        
                    </div>
                </div>
                <div class="store-credit"></div>
                <div class="newsletter-pref"></div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>