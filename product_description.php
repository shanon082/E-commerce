<?php
session_start();
require_once 'db.php';

// Fetch product details based on the product ID passed in the URL
$product_id = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
$stmt->execute();
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    echo "Product not found.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?> - Product Description</title>
    <link rel="stylesheet" href="product_description.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="product-description">
        <h1><?php echo htmlspecialchars($product['name']); ?></h1>
        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
        <p><?php echo htmlspecialchars($product['description']); ?></p>
        <h3>Price: $<?php echo htmlspecialchars($product['price']); ?></h3>
        <button>Add to Cart</button>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
