<!-- Register for customer -->
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
          <button style="cursor: pointer;" class="btn"><a href="login.html">Login</a></button>

      </div>
    </nav>
    <br />

    <div class="body-container">

        <form method="post" action="singup.php">
            <h2>Registration Form</h2>
            <label for="Firstname">First name:</label>
            <input type="text" id="firstname" name="firstname" placeholder="Enter First name" required>

            <label for="Lastname">Last name:</label>
            <input type="text" id="lastname" name="lastname" placeholder="Enter Last name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>

            Gender: &nbsp; &nbsp; Male <input type="radio" name="gender" value="Male" required> Female <input
                type="radio" name="gender" value="Female" required><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter address" required>

            <label for="contact">Contact No:</label>
            <input type="number" id="contact" name="contact" placeholder="Enter contact no" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            
            <br><br>
            <button type="submit">Register</button>

        </form>

    </div>



  <!-- FOOTER -->
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
            <li><a href="#">Noodles</a></li>
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


