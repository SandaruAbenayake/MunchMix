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
        <section class="menu">
            <h1>MENU</h1>
        </section><br>
        <div class="card-container">
            <div class="card">
                <a href="pasta.php">
                    <div class="card-content">
                        <h2><pre>PASTA</pre></h2>
                    </div>
                    <img src="https://parade.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTk3NzMyMjMzNzI3OTc2NzQ5/cottage-cheese-tomato-pasta.jpg">
                </a>
            </div>
            <div class="card">
                <a href="noodles.php">
                    <div class="card-content">
                        <h2><pre>NOODLES</pre></h2>
                    </div>
                    <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2022/02/veg-noodles-vegetable-noodles-recipe.jpg">
                </a>
            </div>
            <div class="card">
                <a href="friedrice.php">
                    <div class="card-content">
                        <h2><pre>FRIED RICE</pre></h2>
                    </div>
                    <img src="https://mission-food.com/wp-content/uploads/2022/01/Spicy-Vegetable-Fried-Rice-Featured.jpg">
                </a>
            </div>
            <div class="card">
                <a href="kottu.php">
                    <div class="card-content">
                        <h2>KOTTU</h2>
                    </div>
                    <img src="https://hiasia.xyz/Uploads/Picture/ngocvan-195421015441-The-sound-of-Kottu-Roti.jpg">
                <div class="card-content">
                </a>
            </div>
        </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <ul>
                            <li ><img src="logo/logo.jpeg" width="200px" height="auto"></li>
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