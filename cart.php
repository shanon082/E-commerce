<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="contain">
        <section>
            <div class="cart_card">
                
                <div class="cart">
                <h1>Cart (3)</h1><hr>
                    <div class="cart-item">
                        <img src="./images/cloth.png" alt="Product 1" />
                        <div class="cart-item-details">
                            <h4>Product 1</h4>
                            <p>Price: $100</p>
                            <p>Quantity: 1</p>
                            <button>Remove</button>
                        </div>
                    </div>
                    <hr>
                    <div class="cart-item">
                        <img src="./images/cloth.png" alt="Product 1" />
                        <div class="cart-item-details">
                            <h4>Product 2</h4>
                            <p>Price: $100</p>
                            <p>Quantity: 1</p>
                            <button>Remove</button>
                        </div>
                    </div>
                    <hr>
                    <div class="cart-item">
                        <img src="./images/cloth.png" alt="Product 1" />
                        <div class="cart-item-details">
                            <h4>Product 3</h4>
                            <p>Price: $100</p>
                            <p>Quantity: 1</p>
                            <button>Remove</button>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="cart-total">
                    <h3>Total: $300</h3>
                    <button>Checkout</button>
                </div>
            </div>
        </section>

        <section>
            <div class="top-selling-items">
                <h1>Top Selling Items</h1>
                <div class="top-selling-items-cards">
                    <div class="card">
                        <img src="./images/cloth.png" alt="Product 1" />
                        <h4>Product 1</h4>
                        <p>Price: $100</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php include 'footer.php'; ?>
</body>

</html>