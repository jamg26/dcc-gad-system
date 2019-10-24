<?php
include '../../db.php';
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$deadline = $_POST['deadline'];
$staff = $_POST['staff'];


$sql = "update schedule set title='$title', description='$description', deadline='$deadline', assigned_staff='$staff' where id=$id";
if ($conn->query($sql) === TRUE) {
    header('location: /pages/barangay-captain/?updated=true');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //header('location: ../pages/course.php?updated=false');
}
$conn->close();

?>