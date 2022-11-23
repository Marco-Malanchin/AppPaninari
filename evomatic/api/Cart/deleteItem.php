<?php
include_once dirname(__FILE__) . '/../../db/connection.php';
include_once dirname(__FILE__) . '/../../model/cart.php';

$dtbase = new db();
$conn = $dtbase->connection();

$prod_ID = 1;
$cart_ID = 1;

$cart = new Cart();
$queryDelete = $cart->deleteItem($prod_ID, $cart_ID);

$result = $conn->query($queryDelete);
print_r($result);


?>