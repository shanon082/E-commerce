<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HomePage</title>
    <link rel="stylesheet" href="index.css" />
    <script src="https://kit.fontawesome.com/b27d0ab5e4.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <?php session_start(); ?>
    <header>
      <!-- header -->
      <nav class="navbar">
        <h2 class="brand">.TUKOLE <span>business</span></h2>
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        <div class="search-section">
          <div class="sec">
            <i></i>
            <input
              type="search"
              name="search"
              id=""
              placeholder="Search product, brand and category"
            />
          </div>
          <button type="submit">search</button>
        </div>
        <ul class="nav-links" id="nav-links">
          <li class="dropdown">
            <?php if (isset($_SESSION['username'])): ?>
              <a href="#"><img src="./images/account.png" alt="" style="width: 20px;"> Hi, <?php echo $_SESSION['username']; ?> ▼</a>
              <ul class="dropdown-menu">
                <li><a href="./login_and_signup/logout.php">Logout</a></li>
              </ul>
            <?php else: ?>
              <a href="#"><img src="./images/account.png" alt="" style="width: 20px;"> Account▼</a>
              <ul class="dropdown-menu">
                <li><a href="./login_and_signup/signup.php">SignUp</a></li>
                <li><a href="./login_and_signup/login.php">Login</a></li>
              </ul>
            <?php endif; ?>
          </li>
          <li class="dropdown">
            <a href="#"><img src="./images/help.png" alt="" style="width: 20px;"> Help▼</a>
            <ul class="dropdown-menu">
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Place an Order</a></li>
              <li><a href="#">Payments Options</a></li>
              <li><a href="#">Delivery Timelines & Track your order</a></li>
              <li><a href="#">Returns and Refunds</a></li>
              <li><a href="#">Warranty</a></li>
            </ul>
          </li>
          <li><a href="#"><img src="./images/cart.png" alt="" style="width: 20px;"> Cart</a></li>
        </ul>
      </nav>
    </header>
    <!-- slider images -->
    <section class="slideshow-container">
      <div class="slide fade">
        <img src="./images/electonics.png" alt="Electronics" />
        <div class="caption">
          <h3>Latest Electronics <br />& Gadgets</h3>
          <p>Find the best deals on the newest tech products.</p>
        </div>
      </div>
      <div class="slide fade">
        <img src="./images/clothes.png" alt="Clothes" />
        <div class="caption">
          <h3>Trendy Fashion <br />& Clothing</h3>
          <p>Shop the latest trends at the best prices.</p>
        </div>
      </div>
      <div class="slide fade">
        <img src="./images/agrobased.png" alt="Agro products" />
        <div class="caption">
          <h3>Fresh Agro-Based <br />Products</h3>
          <p>Organic and fresh farm produce delivered to your doorstep.</p>
        </div>
      </div>
      <div class="slide fade">
        <img src="./images/furniture.png" alt="Furniture" />
        <div class="caption">
          <h3>Quality Furniture for <br />Every Home</h3>
          <p>Stylish and durable furniture for your comfort.</p>
        </div>
      </div>
      <!-- <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
      <button class="next" onclick="changeSlide(1)">&#10095;</button> -->
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
      <h1>Featured Products</h1>
      <div class="featured-slider">
        <div class="featured-slides">
          <div class="card">
            <img src="./images/cloth.png" alt="Product 1" />
            <h4>Product 1</h4>
            <h5>$100</h5>
            <h6>Review: ⭐⭐⭐⭐⭐</h6>
            <p>High-quality fabric, available in various sizes and colors.</p>
          </div>
          <div class="card">
            <img src="./images/phone.png" alt="Product 2" />
            <h4>iPhone 15 Pro Max</h4>
            <h5>$200</h5>
            <h6>Review: ⭐⭐⭐⭐⭐</h6>
            <p>Latest model with advanced features and sleek design.</p>
          </div>
          <div class="card">
            <img src="./images/lap.png" alt="Product 3" />
            <h4>Lenovo ThinkPad T442</h4>
            <h5>$300</h5>
            <h6>Review: ⭐⭐⭐⭐⭐</h6>
            <p>Powerful performance with long battery life and durability.</p>
          </div>
          <div class="card">
            <img src="./images/coofee.png" alt="" />
            <h4>Cofeee 1 acre</h4>
            <h5>negotiable</h5>
            <h6>Review: ⭐⭐⭐⭐⭐</h6>
          </div>
          <div class="card">
            <img src="./images/flash.png" alt="" />
            <h4>Flash drives</h4>
            <h5>$2 @</h5>
            <h6>Review: ⭐⭐⭐⭐⭐</h6>
          </div>
        </div>
        <!-- <button class="prev" onclick="prevFeaturedSlide()">&#10094;</button>
        <button class="next" onclick="nextFeaturedSlide()">&#10095;</button> -->
      </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
      <h1>Shop by Categories</h1>
      <div class="category-cards">
        <div class="category-card">
          <img src="./images/electonics.png" alt="Electronics" />
          <h4>Electronics</h4>
        </div>
        <div class="category-card">
          <img src="./images/clothes.png" alt="Clothing" />
          <h4>Clothing</h4>
        </div>
        <div class="category-card">
          <img src="./images/furniture.png" alt="Furniture" />
          <h4>Furniture</h4>
        </div>
      </div>
    </section>

       <!-- About Us Section -->
    <section class="aboutus-container">
      <img src="images/lap.png" alt="About Us" />
      <div class="info">
        <h3>About Us</h3>
        <h1>We Provide High-Quality Products</h1>
        <h4>
          We ensure that our products meet top-notch quality standards to
          satisfy our customers.
        </h4>
        <p>Hp laptop <span>Brand new</span></p>
        <p>8GB Ram 256GB SSD Dual core....</p>
        <p><span style="text-decoration: line-through;color:grey">$800</span></p>
        <p>$500</p>
        <button type="button">Explore More</button>
      </div>
    </section>

    <!-- Product Details Section -->
    <section class="product-details-container">
      <div class="info">
        <h3>Product Details</h3>
        <h1>Get to Know Our Feature Products</h1>
        <p>
          Explore our best-selling and top-rated products that customers love.
        </p>
      </div>
      <div class="pdt-card">
        <img src="images/agrobased.png" alt="Featured Product" />
        <img src="images/electonics.png" alt="Featured Product" />
      </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="customer-reviews">
      <h1>What Our Customers Say</h1>
      <div class="review-slider">
        <div class="review-slides">
          <div class="review-card">
            <img src="./images/cust1.png" alt="Customer 1" />
            <p>"Excellent quality products and great customer service!"</p>
            <span>⭐⭐⭐⭐⭐</span>
            <h4>John Doe</h4>
          </div>
          <div class="review-card">
            <img src="./images/cust2.png" alt="Customer 2" />
            <p>"Fast delivery and amazing deals! Will shop again."</p>
            <span>⭐⭐⭐⭐⭐</span>
            <h4>Sarah Smith</h4>
          </div>
          <div class="review-card">
            <img src="./images/cust3.png" alt="Customer 3" />
            <p>"The best shopping experience I have ever had!"</p>
            <span>⭐⭐⭐⭐⭐</span>
            <h4>Michael Johnson</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
      <h1>Sign Up for Updates & Newsletter</h1>
      <div class="email">
        <input type="email" placeholder="Enter your Email" />
        <button type="submit">Subscribe Now</button>
      </div>
    </section>

    <!-- Footer Section -->
    <section class="footer">
      <div class="footer-links">
        <div class="footer-column">
          <h4>Customer Service</h4>
          <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Track Order</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>About Us</h4>
          <ul>
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Press</a></li>
          </ul>
        </div>
        <div class="footer-column">
          <h4>Follow Us</h4>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
      <p>&copy; 2025 eCommerce. All rights reserved.</p>
    </section>
    <script src="script.js"></script>
  </body>
</html>
