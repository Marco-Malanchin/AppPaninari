<?php
include_once dirname(__FILE__) . '/../../db/connection.php';
include_once dirname(__FILE__) . '/../../model/cart.php';

$dtbase = new db();
$conn = $dtbase->connection();
//print_r($conn);

$prod_ID = 1;
$cart_ID = 1;

$cart = new Cart();
$queryRemoveItem = $cart->setCartItemsRemove($prod_ID, $cart_ID);

$result = $conn->query($queryRemoveItem);
print_r($result);

?>