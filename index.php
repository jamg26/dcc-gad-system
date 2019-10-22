<?php

include 'navigation.php';
$role = $_SESSION['user']['role'];

if($role == 'captain') {
	header('location: /pages/barangay-captain/');
} else if($role == 'chairperson') {
	header('location: /pages/chairperson/');
} else {
	header('location: /signin.php');
}

?>