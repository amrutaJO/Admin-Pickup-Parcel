<?php
require_once "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM feedback WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('Feedback deleted successfully!'); window.location='view-feedback.php';</script>";
    } else {
        echo "<script>alert('Error deleting feedback.'); window.location='view-feedback.php';</script>";
    }
    
    $stmt->close();
}
?>
