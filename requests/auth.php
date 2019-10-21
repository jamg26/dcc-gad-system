<?php
session_start();
include_once "../db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from users where username = '$username' and password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //$_SESSION['user'] = [$row['id'], $row['firstname'], $row['middlename'], $row['lastname'], $row['address'], $row['email'], $row['role']];
        $_SESSION['user'] = $row;
        header('location: /');
    }
} else {
    header('location: ../signin.php?invalid=true');
}
$conn->close();

?>
