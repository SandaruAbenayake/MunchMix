<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);
if ($isLoggedIn) {
  $name = $_SESSION['user']['firstname']." ".$_SESSION['user']['lastname'];
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>MunchMix</title>
  <link rel="icon" type="image/x-icon" href="logo/logo tit.jpg" />
  <link rel="stylesheet" href="stylesheet.css" />
</head>

<body background="https://png.pngtree.com/thumb_back/fw800/background/20221130/pngtree-black-plate-seen-from-above-resting-on-a-wooden-table-with-a-black-backdrop-photo-image_41464446.jpg">
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
  <br />



  <marquee class="quote">
    Flavor Journey,
    One Stop at a Time
  </marquee>




  <br /><br />
  <section class="theme">
    <p>
      "MunchMix celebrates the vibrant tapestry of global cuisine, bringing
      together flavors, ingredients, and culinary traditions from around the
      world in a creative and innovative fusion. Our menu is a curated
      collection of culinary delights inspired by diverse cultures, offering a
      tantalizing journey for your taste buds. From savory street food
      favorites to exquisite gourmet creations, embark on a culinary adventure
      that transcends borders and satisfies every craving. At MunchMix, every
      dish tells a story, blending the best of international flavors into a
      harmonious symphony of taste sensations"
    </p>
  </section>
  <br />
  <hr />
  <br />
  <section class="title01">
    <h2>Featured Products</h2>
  </section>
  <section class="title02">
    <div class="image">
      <img src="https://parade.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTk3NzMyMjMzNzI3OTc2NzQ5/cottage-cheese-tomato-pasta.jpg" />
    </div>
    <div class="image">
      <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2022/02/veg-noodles-vegetable-noodles-recipe.jpg" />
    </div>
    <div class="image">
      <img src="https://mission-food.com/wp-content/uploads/2022/01/Spicy-Vegetable-Fried-Rice-Featured.jpg" />
    </div>
    <div class="image">
      <img src="https://www.kapruka.com/shops/specialGifts/productImages/1628677852912_dsc06873_m.jpg" />
    </div>
  </section>

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
</body>

</html>