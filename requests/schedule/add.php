<?php
include '../../db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];
$staff = $_POST['staff'];
$sql = "insert into schedule (title, description, deadline, assigned_staff) 
values('$title', '$description', '$deadline', '$staff')";
if ($conn->query($sql) === TRUE) {
    header('location: /pages/barangay-captain/?added=true');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //header('location: ../pages/course.php?added=false');
}
$conn->close();

?>