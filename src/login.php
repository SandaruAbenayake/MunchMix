<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "munchmix";
session_start();

$data = mysqli_connect($host, $user, $password, $db); //connect to the mysql
if ($data === false) {
  die("connection error");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM user WHERE email='" . $username . "' AND password='" . $password . "'";
  $result = mysqli_query($data, $sql);
  $row = mysqli_fetch_array($result);

  if ($row == null) {
    echo '<script>alert("Username Not Found & Incorrect username or password");</script>';
    header("location:login.html");
  } else {
    if ($row["type"] == "admin") {
      $_SESSION["user"] = $row;
      $_SESSION["type"] = "admin";
      header("location:admin/index.html");
    } elseif ($row["type"] == "user") {
      $_SESSION["user"] = $row;
      $_SESSION["type"] = "user";
      header("location:index.php");
    } else {
      echo '<script>alert("Database error");</script>';
    }
  }
}
?>