<?php
session_start();
$isLoggedIn = isset($_SESSION['name']);
if ($isLoggedIn) {
  $name = $_SESSION['name'];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>MunchMix</title>
    <link rel="icon" type="image/x-icon" href="logo/logo tit.jpg" />
    <link rel="stylesheet" href="stylesheet.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body
    background="https://png.pngtree.com/thumb_back/fw800/background/20221130/pngtree-black-plate-seen-from-above-resting-on-a-wooden-table-with-a-black-backdrop-photo-image_41464446.jpg"
  >
    <!-- NAV BAR -->
    <nav>
      <img src="logo/logo.jpeg" width="100px" height="auto" />
      <a class="nav-lbl" href="index.php">Home</a>
      <a class="nav-lbl" href="menu.php">Menu</a>
      <a class="nav-lbl" href="aboutus.php">About Us</a>
      <a class="nav-lbl" href="contactus.php">Contact Us</a>
  
      <!-- cart  -->
      <a href="cart.php">
        <button style="background-color: red; border-radius: 10px;">
          <img style="height: 40px; width: 40px" src="logo/cart.png" />
      </a>
      </button>
      <div>
        <?php if ($isLoggedIn) : ?>
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;"><label style="font-size: 1.2rem; font-family: Arial, Helvetica, sans-serif;"><?php echo htmlspecialchars($name); ?></label>
            <button style="cursor: pointer;" class="btn"><a href="logout.php">Logout</a></button>
          </div>
        <?php else : ?>
          <button style="cursor: pointer;" class="btn"><a href="login.html">Login</a></button>
          <button style="cursor: pointer;" class="btn"><a href="signup.php">Signup</a></button>
        <?php endif; ?>
      </div>
    </nav>
    </nav>
    <br />
    <section class="noodles" style="margin-left: 5%">
      <h2>Noodles</h2>
    </section>
    <br />

    <div class="card-container"></div>
      

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <ul>
              <li><img src="logo/logo.jpeg" width="200px" height="auto" /></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Order Now</h4>
            <ul>
              <li><a href="#">Pasta</a></li>
              <li><a href="#">Nooldes</a></li>
              <li><a href="#">Fried Rice</a></li>
              <li><a href="#">Kottu</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>About Us</h4>
            <ul>
              <li><a href="#">Send Feedback</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="socialmedia">
              <ul>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      $(document).ready(function() {
  // Make AJAX request to PHP script
  $.ajax({
    url: 'db/noodlesdb.php',
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      // Handle the response
      data.forEach(function(item) {
        console.log(item) // Adjust 'column_name' according to your database schema
        $(".card-container").append(`<div class="card">
        <img
          src="${item.image}"
        />
        <div class="card-content">
          <h2>
            ${item.itemName}<br />
            Rs. ${item.price}.00
          </h2>
        </div>
        <button onclick='addToCart(${JSON.stringify(item)})' style="
          padding: 10px 20px; 
          margin: 10px auto;
          font-size: 16px; 
          cursor: pointer; 
          border-color: aliceblue;
          border-radius: 5px;
          background-color: black;
          color: aliceblue;">
        ADD CART
      </button>
      </div>`)
            });
    },
    error: function(xhr, status, error) {
      console.error('Error fetching data:', error);
}
  });
 });
    </script>

  </body>
</html>
