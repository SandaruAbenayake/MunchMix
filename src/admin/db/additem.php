<?php

$connection = mysqli_connect("localhost", "root", "", "munchmix");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$itemId = $_POST['itemId'];
$itemName = $_POST['itemName'];
$price = $_POST['price'];
$category = $_POST['category'];
$image = $_POST['image'];


$query = "INSERT INTO foods ( itemId, itemName, price, category, image) VALUES ( '$itemId', '$itemName', '$price', '$category', '$image')";


if (mysqli_query($connection, $query)) {
    echo "item added successfully.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>