<?php 
require_once __DIR__ . "/header.php";
require_once "db.php"; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $feedback = trim($_POST['feedback']);
    $rating = $_POST['rating'];

    // Check if all fields are filled
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($feedback) && !empty($rating)) {
        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO feedback (name, email, phone, feedback, rating) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $name, $email, $phone, $feedback, $rating);

        if ($stmt->execute()) {
            echo "<script>alert('Feedback submitted successfully!'); window.location='view-feedback.php';</script>";
        } else {
            echo "<script>alert('Error submitting feedback.');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Please fill all fields.');</script>";
    }
}
?>

<div class="content container-fluid">
    <div class="page-header mb-4">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('add_feed') ?></h1>
            </div>
            <div class="col-auto">
                <a class="btn btn-sm btn-primary" href="view-feedback.php">
                    <i class="bi-card-list me-1"></i>
                    <?= translate('view_feedbacks') ?>
                </a>
            </div>
        </div>
    </div>

    <form action="" method="POST" class="row g-3" id="feedback-form">
        <div class="col-12 col-md-4">
            <label for="name" class="form-label"><?= translate('name') ?></label>
            <input type="text" class="form-control form-control-sm" name="name" placeholder="<?= translate('enter_name') ?>" required>
        </div>
        <div class="col-12 col-md-4">
            <label for="email" class="form-label"><?= translate('email_id') ?></label>
            <input type="email" class="form-control form-control-sm" name="email" placeholder="<?= translate('enter_email') ?>" required>
        </div>
        <div class="col-12 col-md-4">
            <label for="phone" class="form-label"><?= translate('mobile_no') ?></label>
            <input type="text" class="form-control form-control-sm" name="phone" placeholder="<?= translate('enter_mobile') ?>" required>
        </div>

        <div class="col-12">
            <label for="feedback" class="form-label"><?= translate('feedback') ?></label>
            <textarea class="form-control form-control-sm" name="feedback" rows="3" placeholder="<?= translate('enter_feedback_here') ?>" required></textarea>
        </div>

        <div class="col-12 col-md-6">
            <label for="rating" class="form-label"><?= translate('rating') ?></label>
            <select class="form-control form-control-sm" name="rating" required>
                <option value="" disabled selected><?= translate('select_rating') ?></option>
                <option value="1">⭐</option>
                <option value="2">⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
            </select>
        </div>

        <div class="col-12 d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-sm btn-primary"><?= translate('submit') ?></button>
            <button type="reset" class="btn btn-sm btn-secondary ms-2"><?= translate('reset') ?></button>
        </div>
    </form>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
