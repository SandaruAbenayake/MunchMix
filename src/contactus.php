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
    <section class="aboutus">
        <h1>CONTACT US</h1>
    </section>

    <body>

        
        <br>
        Thank you for your interest in MunchMix!<br>
        We're here to answer any questions you may have and assist you in any way we can.,
        Here's how you can get in touch with us:
        <br>
        <br>
        <h2>Address:</h2>
        <br>
        MunchMix
        37/A,
        Marine Drive,
        Kollupitiya.

        <br>
        <br>
        <h2>Phone:</h2>
        <br>
        +94 718 896 741

        <br>
        <br>
        <h2>Email:</h2>
        <br>
        <u>munchmix@gmail.com</u>

        <br>
        <br>
        <h2>Hours of Operation:</h2>
        <br>
        8 AM - 11 PM

        <br>
        <br>

        <h2>Social Media:</h>
            <br>
            <br>
            Follow us on social media for the latest updates, promotions, and behind-the-scenes glimpses of life at MunchMix:
            <br>
            1. <u>Facebook</u><br>
            2. <u>Instagram</u><br>
            3. <u>Twitter</u><br>
            <br>
            <br>
            <h2>Feedback:</h2>
            <br>
            We value your feedback and strive to continuously improve our services. If you have any comments, suggestions, or feedback about your experience at MunchMix, please don't hesitate to let us know. We'd love to hear from you!

            <br>
            <br>

            <h2>Reservation:</h2>
            <br>
            To make a reservation, please call us at 071 485 9878 <br>
            use our online reservation system

            <br>
            <br>

            <h2>Catering & Events:</h2>
            <br>
            Interested in catering services or hosting an event at MunchMix? We'd be delighted to assist you! Please contact us at 071 485 9878 <br>
            Munchmix@gmail.com to discuss your requirements.

            <br>
            <br>

            <h2>Press & Media Inquiries:</h2>
            <br>
            For press and media inquiries, please contact Sandaru abenayake at abenayakeqwre12@gmail.com.

            <br>
            <br>


            <h2>Map:</h2>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.726985046434!2d79.85040453936385!3d6.90692213065984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25960d359dbbf%3A0xd64947e9ab7a4c4f!2sColombo%2003%2C%20Colombo!5e0!3m2!1sen!2slk!4v1713713623017!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br>
            <br>
            <br>
            <h1>We look forward to hearing from you and welcoming you to MunchMix soon!</h1>
            <br>
            <br>

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