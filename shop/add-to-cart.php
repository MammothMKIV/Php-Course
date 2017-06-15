<?php

require 'common.php';

if (isset($_POST['product_id']) && isset($_POST['count'])) {
	$productId = $_POST['product_id'];
	$count = $_POST['count'];

	$cartItems = array();

	if (isset($_SESSION['cartItems'])) {
		$cartItems = $_SESSION['cartItems'];
	}

	if (isset($cartItems[$productId])) {
		$cartItems[$productId] += $count;
	} else {
		$cartItems[$productId] = $count;
	}

	$_SESSION['cartItems'] = $cartItems;

	header('Content-Type: application/json');

	echo json_encode(array(
		'result' => 'success'
	));
}
