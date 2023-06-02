<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,binitial-scale=1.0">
        <title>Online Store</title>
        <link rel="stylesheet" href="css/feedback.css">
        <link rel="icon" type="image/x-icon" href="img/shop.png">
    </head>
    <body>

        <!-- nav -->

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
      
        <!-- feedback -->
        <div class="form">
        <form action="connfeed.php" method="post">
          
        <form action="submit-feedback.php" method="POST">
            <label class="label-form" for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-input" required><br><br>
            <label class="label-form" for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-input" required><br><br>
            <label class="label-form" for="feedback">Feedback:</label><br>
            <textarea id="Feedback" name="Feedback" rows="5" cols="50" class="form-input" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
        </div>
    
        <!-- footer -->
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
    </body>
</html>