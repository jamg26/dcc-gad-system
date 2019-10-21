<?php

include 'navigation.php';
$role = $_SESSION['user']['role'];



if($role == 'captain') {
	echo $role;
} else {
	header('location: /signin.php');
}

?>