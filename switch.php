<?php

define('USER_ROLE_ADMINISTRATOR', 0);
define('USER_ROLE_MODERATOR', 1);
define('USER_ROLE_MEMBER', 2);
define('USER_ROLE_GUEST', 3);

$userRole = 26;
$var = 1;

switch ($userRole) {
	case (25 + $var):
		echo 'asdasda';
		break;
	case USER_ROLE_MODERATOR:
	case USER_ROLE_MEMBER:
		echo 'Участник';
		break;
	case USER_ROLE_GUEST:
		echo 'Гость';
		break;
}
