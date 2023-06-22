<?php
// Retrieve the data from the AJAX request
$product_id = $_POST["product_id"];

// Perform the necessary backend operations (e.g., add to cart, update database, etc.)

// Return a response
$response = array("status" => "success", "message" => "Product added to cart.");
echo json_encode($response);
?>