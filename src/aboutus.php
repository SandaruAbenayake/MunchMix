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
        <a href="cart.html">
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
    <br>
    <section class="aboutus">
        <h2 style="color: aliceblue;">ABOUT US</h2>
    </section><br>

    <body>
        <p>
        <h1>Welcome to MunchMix!</h1>
        <br>
        At MunchMix, we're not just a restaurant; we're a culinary adventure waiting to be explored. Founded on the belief that food should be exciting,
        diverse, and utterly delicious, MunchMix is your go-to destination for a unique fusion dining experience.
        <br>
        <br>
        <h1>Our Story</h1>
        <br>
        Inspired by the vibrant tapestry of global cuisine, MunchMix was born out of a desire to blend flavors, cultures, and culinary3
        traditions in innovative ways. Our founder, [Founder's Name], envisioned a place where pasta kottu and fried rice could coexist harmoniously on the same menu,
        where every dish tells a story of culinary creativity and passion.
        <br>
        <br>
        <h1>Our Philosophy</h1>
        <br>
        At MunchMix, we believe in the power of food to bring people together, to spark conversation, and to create unforgettable memories. That's why we're dedicated to sourcing the finest ingredients, crafting each dish with care, and delivering flavors that excite the palate and nourish the soul.
        <br>
        <br>
        <h1>Our Menu</h1>
        <br>
        From our signature pasta kottu, a delightful fusion of Italian pasta and Sri Lankan kottu roti,
        to our mouthwatering fried rice creations bursting with flavor, our menu is a celebration of culinary innovation and exploration.
        Each dish is carefully crafted to surprise and delight, offering a tantalizing blend of familiar favorites and exotic flavors.
        <br>
        <br>
        <h1>Our Commitment</h1>
        <br>
        At MunchMix, we're committed to excellence in everything we do. From our warm and inviting atmosphere to our attentive service and,<br>
        most importantly, our delicious food, we strive to exceed your expectations at every turn.
        Whether you're dining in with friends, grabbing takeout on the go, or ordering delivery for a cozy night in,
        we want every MunchMix experience to be a memorable one.
        <br>
        <br>
        <h1>Join Us at MunchMix</h1>
        <br>
        We invite you to join us on this culinary journey, to explore new flavors, discover new favorites,
        and embark on a delicious adventure unlike any other. From our family to yours, <br>
        welcome to MunchMix—where every bite is a taste of something extraordinary.
        <br>
        <br>
        </p>

    </body>




    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <ul>
                        <li><img src="logo/logo.jpeg" width="200px" height="auto"></li>
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
</body>

</html>