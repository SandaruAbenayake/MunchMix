<?php
session_start();
$isLoggedIn = isset($_SESSION['user']);

$name = $isLoggedIn ? $_SESSION['user']['firstname'] . " " . $_SESSION['user']['lastname'] : null;
$userData = $isLoggedIn ? json_encode($_SESSION['user']) : 'null';

?>

<!DOCTYPE html>
<html>

<head>
  <title>MunchMix</title>
  <link rel="icon" type="image/x-icon" href="logo/logo tit.jpg" />
  <link rel="stylesheet" href="stylesheet.css" />
  <link rel="stylesheet" href="cart.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="script.js"></script>
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
  <div class></div>
  <div class="container">
    <div class="table-panel">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Amount</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-body">
        </tbody>
      </table>
    </div>
    <div class="side-panel">
      <h2 style="text-align: center;">Summary</h2>
      <label style="text-align: center;">Total : Rs. <span id="total">0</span></label><br><br>
      <button style="text-align: centers;" id="purchaseButton">purchase</button>
    </div>
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
  <script>
    let items = JSON.parse(localStorage.getItem("cartItems")) || [];
    let total = 0;
    const userData = <?php echo $userData ?>;
 
    // Get current date
    const currentDate = new Date();
    var formattedDate = String(currentDate.getFullYear()) + '-' + String(currentDate.getMonth() + 1).padStart(2, '0') + '-' + String(currentDate.getDate()).padStart(2, '0');

    calculateTotal();
    $(document).ready(function() {

      items.forEach(function(item, index) {
        console.log(index, item) // Adjust 'column_name' according to your database schema
        $(".table-body").append(`<tr>
                            <td>${item.itemId}</td>
                            <td>${item.itemName}</td>
                            <td>${item.price}</td>
                            <td><div class="input-group">
  <button class="btn" onclick='decrement(${index})'>-</button>
  <input type="number" id="input" value="${item.qty}" readonly>
  <button class="btn" onclick='increment(${index})'>+</button>
</div></td>
                            <td>${item.price*item.qty}</td>
                            <td><button onclick='removeItemFromCart(${index})'>delete</button></td>
                        </tr>`)
      })
    })


    function increment(index) {
      items[index].qty++;
      updateLocalStorage();
    }

    function decrement(index) {
      if (items[index].qty > 1) {
        items[index].qty--;
        updateLocalStorage();
      } else {
        removeItemFromCart(index)
      }

    }


    function updateLocalStorage() {
      localStorage.setItem("cartItems", JSON.stringify(items));
      refreshCart();
    }

    function calculateTotal() {
      total = items.reduce((sum, item) => sum + (item.price * item.qty), 0);
      $("#total").text(total.toFixed(2));
    }

    // purchase button function
    $("#purchaseButton").click(function() {
      if (userData == null) {
        window.location.href = "login.html";
      } else {
        if (items != null) {
          $.ajax({
            type: "POST",
            url: "db/purchase.php",
            data: {
              cartItems: JSON.stringify(items),
              user: userData,
              amount: total,
              date: formattedDate
            },
            success: function(response) {
              displayMessage("Scussful Puarches!");
              let cartItems = [];
              localStorage.setItem("cartItems", JSON.stringify(cartItems));
              refreshCart();
            },
            error: function() {
              alert('Error processing the request.');
            }
          });

        }

      }


    });
  </script>
</body>

</html>