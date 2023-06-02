 <?php
$servername = "localhost";
$username = "osama";
$password = "test1234";
$dbname = 'online store';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT product_name, product_price FROM products";
$result = mysqli_query($conn, $sql);
?>


  <?php for($i = 0 ; $i < 40 ; $i++ ){
    $row = mysqli_fetch_assoc($result);
  }  ?>

<?php mysqli_close($conn); ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/x-icon" href="img/shop.png">
    <title>Online store</title>
  </head>
  <script src="https://unpkg.com/feather-icons"></script>
  <body>
    <nav class="navbar">
      <div class="nav">
        <img src="img/dark-logo.png" class="brand-logo" alt="" />
        <div class="nav-items">
          <div class="search">
            <input type="text" class="search-box" placeholder="search brand, product"/>
            <button class="search-btn">search</button>
          </div>
          <div class="dropdown">
            <a href="#" class="dropbtn profile-icon"><img src="img/user.png" alt="" /></a>

            <div class="dropdown-content">
              <a class="dropdown-item" href="profile.html"><i class="align-middle mr-1" data-feather="user"></i>Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="settings.html"><i class="align-middle mr-1" data-feather="settings"></i>Settings & Privacy</a>
              <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i>Help Center</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="log-out"></i>Logout</a>
            </div>
          </div>

          <a href="#" class="profile-icon"><img src="img/cart.png" alt="" /></a>
        </div>
      </div>
      <ul class="links-container">
        <li class="link-item"><a href="index.php" class="link">Home</a></li>
        <li class="link-item"><a href="#" class="link">Clothes</a></li>
        <li class="link-item"><a href="#" class="link">Shoes</a></li>
        <li class="link-item"><a href="#" class="link">Electronics</a></li>
        <li class="link-item"><a href="feedback.php" class="link">Feedback</a></li>
      </ul>
    </nav>
    <script>
      feather.replace();
      
    </script>
    <header class="hero-section">
      <div class="content">
          <img src="img/light-logo.png" class="logo" alt="">
          <p class="sub-heading">Buy all what you want from one place</p>
      </div>
  </header>

  <section class="product">
    <h2 class="product-category">best selling</h2>
    <hr class="word-underline">
    
  <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
  <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
  <div class="product-container">
    <div class="product-card">
      <div class="product-image">
        <span class="discount-tag">50% off</span>
        <img src="img/card7.png" class="product-thumb" alt="">
        <button class="card-btn">add to whislist</button>
      </div>
      <div class="product-info">
        <h3 class="product-brand">brand</h3>
            <p class="product-short-des">a short line about the cloth..</p>
            <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">50% off</span>
          <img src="img/card2.png" class="product-thumb" alt="">
          <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
          <h3 class="product-brand">brand</h3>
          <p class="product-short-des">a short line about the cloth..</p>
          <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">50% off</span>
          <img src="img/card3.png" class="product-thumb" alt="">
          <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
          <h3 class="product-brand">brand</h3>
          <p class="product-short-des">a short line about the cloth..</p>
          <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">50% off</span>
          <img src="img/card5.png" class="product-thumb" alt="">
          <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
          <h3 class="product-brand">brand</h3>
          <p class="product-short-des">a short line about the cloth..</p>
          <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">50% off</span>
          <img src="img/buy-1.jpg" class="product-thumb" alt="">
          <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
          <h3 class="product-brand">brand</h3>
          <p class="product-short-des">a short line about the cloth..</p>
          <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">50% off</span>
          <img src="img/buy-3.jpg" class="product-thumb" alt="">
          <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
          <h3 class="product-brand">brand</h3>
          <p class="product-short-des">a short line about the cloth..</p>
          <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">50% off</span>
          <img src="img/category-1.jpg" class="product-thumb" alt="">
          <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
          <h3 class="product-brand">brand</h3>
          <p class="product-short-des">a short line about the cloth..</p>
          <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <span class="discount-tag">50% off</span>
          <img src="img/category-2.jpg" class="product-thumb" alt="">
          <button class="card-btn">add to whislist</button>
        </div>
        <div class="product-info">
          <h3 class="product-brand">brand</h3>
          <p class="product-short-des">a short line about the cloth..</p>
          <span class="price">$20</span><span class="actual-price">$40</span>
        </div>
      </div>
      <script>
        const productContainers = [...document.querySelectorAll('.product-container')];
        const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
        const preBtn = [...document.querySelectorAll('.pre-btn')];
        
        productContainers.forEach((item, i) => {
            let containerDimenstions = item.getBoundingClientRect();
            let containerWidth = containerDimenstions.width;
        
            nxtBtn[i].addEventListener('click', () => {
                item.scrollLeft += containerWidth;
            })
        
            preBtn[i].addEventListener('click', () => {
                item.scrollLeft -= containerWidth;
            })
        })</script>
    </section>
    
    <div class="small-container">
      <h2 class="product-category">Latest Products</h2>
      <hr class="word-underline">
      <div class="row">
        <div class="col-4">
          <?php $row = mysqli_fetch_assoc($result); ?>
          <img src="images/product-1.jpg">
          <h4><?php echo $row['product_name']; ?></h4>
          <p class="product-short-des">a short line about the product..</p>
          <p class="price"><?php echo $row['product_price']; ?></p>
        </div>

        <div class="col-4">
        <?php $row = mysqli_fetch_assoc($result); ?>

          <img src="images/product-5.jpg">
          <h4>Grey Shoes</h4>
          <p class="product-short-des">a short line about the product..</p>
          <p class="price"><?php echo $row['product_price']; ?></p>
        </div>

        <div class="col-4">
        <?php $row = mysqli_fetch_assoc($result); ?>

          <img src="images/product-6.jpg">
          <h4><?php echo $row['product_name']; ?></h4>
          <p class="product-short-des">a short line about the product..</p>
          <p class="price"><?php echo $row['product_price']; ?></p>
        </div>

        <div class="col-4">
        <?php $row = mysqli_fetch_assoc($result); ?>

          <img src="images/product-7.jpg">
          <h4><?php echo $row['product_name']; ?></h4>
          <p class="product-short-des">a short line about the product..</p>
          <p class="price"><?php echo $row['product_price']; ?></p>
        </div>

        <div class="col-4">
        <?php $row = mysqli_fetch_assoc($result); ?>

          <img src="images/product-8.jpg">
          <h4><?php echo $row['product_name']; ?></h4>
          <p class="product-short-des">a short line about the product..</p>
          <p class="price"><?php echo $row['product_price']; ?></p>
        </div>

        <div class="col-4">
        <?php $row = mysqli_fetch_assoc($result); ?>

          <img src="images/product-9.jpg">
          <h4> <?php echo $row['product_name']; ?></h4>
          <p class="product-short-des">a short line about the product..</p>
          <p class="price"><?php echo $row['product_price']; ?></p>
        </div>

        <div class="col-4">
        <?php $row = mysqli_fetch_assoc($result); ?>

          <img src="images/product-10.jpg">
          <h4><?php echo $row['product_name']; ?></h4>
          <p class="product-short-des">a short line about the product..</p>
          <p class="price"><?php echo $row['product_price']; ?></p>
        </div>

         <div class="col-4">
         <?php $row = mysqli_fetch_assoc($result); ?>
          <img src="images/product-11.jpg">
          <h4><?php echo $row['product_name']; ?></h4>
          <p class="product-short-des">a short line about the product..</p>
          <p class="price"><?php echo $row['product_price']; ?></p>
        </div>
      </div>
    </div>

      <div class="footer">
        <div class="container">    
          <div class="row">
            <div class="footer-col-1">
              <h3>Download Our App</h3>
              <p>Download App for Android and ios mobile phone.</p>
              <div class="app-logo">
                <img src="images/play-store.png">
                <img src="images/app-store.png">
              </div>
            </div>
            <div class="footer-col-2">
              <img src="img/light-logo.png" width="100px">
              <p>Our Purpose Is To Sustainably Make the Pleasure and 
                Benefits of Sports Accessible to the Many.</p>
            </div>
            <div class="footer-col-3">
              <h3>Useful Links</h3>
              <ul>
                <li>Coupons</li>
                <li>Blog Post</li>
                <li>Return Policy</li>
                <li>Join Affiliate</li>
              </ul>
            </div>
            <div class="footer-col-4">
              <h3>Follow Us</h3>
              <ul>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>YouTube</li>
              </ul>
            </div>
          </div>
          <hr>
          <p class="copyright">Copyright 2023 - OnlinStore</p>
        </div>
    </div>
    
</div>
  </body>
</html>
