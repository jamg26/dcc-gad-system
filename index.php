<?php

include 'navigation.php';
$role = $_SESSION['user']['role'];

if($role == 'captain') {
	header('location: /pages/barangay-captain/');
} else if($role == 'chairperson') {
	header('location: /pages/chairperson/');
} else if($role == 'staff') {
	header('location: /pages/barangay-staff/');
} else if($role == 'resident') {
	header('location: /pages/resident/');
} else {
	header('location: /signin.php');
}

?>