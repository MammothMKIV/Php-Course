<?php
session_start();

$credentials = array(
	'admin' => 'MyPassword'
);

if (isset($_POST['login']) && isset($_POST['password'])) {
	if (isset($credentials[$_POST['login']]) && $credentials[$_POST['login']] == $_POST['password']) {
		$_SESSION['login'] = $_POST['login'];
		header('Location: index.php');
	} else {
		echo 'Invalid credentials';
	}
} else {
	header('Location: index.php');
}

