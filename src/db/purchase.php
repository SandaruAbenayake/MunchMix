<?php
$conn = new mysqli("localhost", "root", "", "munchmix");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartItems = json_decode($_POST['cartItems'], true);
    $user = $_POST['user']['userid'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];


    $sql =  "INSERT INTO `order` (`amount`,`date`,`user_id`) VALUES ($amount,'$date',$user)";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'message' => 'Purchase successful', 'data' => $conn->insert_id]);
        $orderId = $conn->insert_id;
        foreach ($cartItems as $item) {
            $itemId = $item['itemId'];
            $qty = $item['qty'];

            // the SQL statement
            $sql = "INSERT INTO `order_item_details` (`order_id`, `item_id`, `qty`) VALUES ($orderId ,'$itemId', $qty)";
            if ($conn->query($sql) === TRUE) {
                echo json_encode(['status' => 'success', 'message' => 'Purchase successful', 'data' => $conn->insert_id]);
            }
        }
    } else {
        echo json_encode(['status' => 'success', 'message' => 'Purchase unsuccessful']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
