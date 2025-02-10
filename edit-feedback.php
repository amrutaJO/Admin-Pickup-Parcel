<?php
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['rating'];

    $stmt = $conn->prepare("UPDATE feedback SET name=?, email=?, phone=?, feedback=?, rating=? WHERE id=?");
    $stmt->bind_param("ssssii", $name, $email, $phone, $feedback, $rating, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Updated successfully!'); window.location='view-feedback.php';</script>";

    } else {
        echo "<script>window.location='view-feedback.php?status=error';</script>";
    }
}
?>
