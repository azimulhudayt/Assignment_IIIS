<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $item = $_POST["item"];
    
    echo "Order placed successfully! Thank you, $name, for ordering $item.";
} else {
    header("Location: order.html");
    exit();
}
?>