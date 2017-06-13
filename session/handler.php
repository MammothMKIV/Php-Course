<?php
session_start();

if (isset($_POST['myValue'])) {
	$_SESSION['myValue'] = $_POST['myValue'];
}

header('Location: index.php');
