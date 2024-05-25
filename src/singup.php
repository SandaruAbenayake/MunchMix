<?php

$connection = mysqli_connect("localhost", "root", "", "munchmix");



if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}


$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$password = $_POST['password'];


$query = "INSERT INTO user (firstname, lastname, email, gender , address, contactnumber ,password , type) VALUES ('$first_name', '$last_name', '$email', '$gender','$address','$contact','$password', 'user')";

if (mysqli_query($connection, $query)) {
  echo "User added successfully.";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
