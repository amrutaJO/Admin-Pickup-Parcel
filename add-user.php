<?php 
require_once __DIR__ . "/header.php";  // Include your header file
require_once __DIR__ . "/db.php"; // Include the database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $cus_name = $conn->real_escape_string($_POST['cus_name']);
    $cus_mobile = $conn->real_escape_string($_POST['cus_mobile']);
    $cus_email = $conn->real_escape_string($_POST['cus_email']);
    $cus_gender = $conn->real_escape_string($_POST['cus_gender']);
    $cus_address = $conn->real_escape_string($_POST['cus_address']);
    $cus_city = $conn->real_escape_string($_POST['cus_city']);
    $cus_state = $conn->real_escape_string($_POST['cus_state']);

    // Insert data into the user_management table
    $sql = "INSERT INTO user_management (cus_name, cus_mobile, cus_email, cus_gender, cus_address, cus_city, cus_state)
            VALUES ('$cus_name', '$cus_mobile', '$cus_email', '$cus_gender', '$cus_address', '$cus_city', '$cus_state')";

    // Check if data was inserted successfully
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>New user added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}
?>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('add_user') ?></h1>
            </div>
            <div class="col-auto">
                <a class="btn btn-sm btn-primary" href="customers.php">
                    <?= translate('view_users') ?>
                </a>
            </div>
        </div>
    </div>

    <!-- User Form -->
    <form action="add_user.php" method="POST" class="row g-3" id="user-form">
        <div class="col-12 col-md-6">
            <div class="row g-3">
                <div class="col-12">
                    <label for="cus_name" class="form-label required"><?= translate('user_name') ?></label>
                    <input type="text" name="cus_name" class="form-control form-control-sm" required>
                </div>
                <div class="col-12">
                    <label for="cus_mobile" class="form-label"><?= translate('mobile_number') ?></label>
                    <input type="tel" name="cus_mobile" class="form-control form-control-sm" required>
                </div>
                <div class="col-12">
                    <label for="cus_email" class="form-label"><?= translate('email_id') ?></label>
                    <input type="email" name="cus_email" class="form-control form-control-sm" required>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="row g-3">
                <div class="col-12">
                    <label for="cus_gender" class="form-label"><?= translate('gender') ?></label>
                    <select name="cus_gender" class="form-control form-control-sm" required>
                        <option value="male"><?= translate('male') ?></option>
                        <option value="female"><?= translate('female') ?></option>
                        <option value="other"><?= translate('other') ?></option>
                        <option value="noshare"><?= translate('dont_want_to_share') ?></option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="cus_address" class="form-label"><?= translate('address') ?></label>
                    <textarea name="cus_address" class="form-control form-control-sm" rows="5" required></textarea>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <label for="cus_city" class="form-label"><?= translate('city') ?></label>
            <select name="cus_city" class="form-control form-control-sm" required>
                <option value="nashik"><?= translate('nashik') ?></option>
                <option value="mumbai"><?= translate('mumbai') ?></option>
                <option value="pune"><?= translate('pune') ?></option>
                <option value="other"><?= translate('other') ?></option>
            </select>
        </div>

        <div class="col-12 col-md-6">
            <label for="cus_state" class="form-label"><?= translate('state') ?></label>
            <select name="cus_state" class="form-control form-control-sm" required>
                <option value="maharashtra"><?= translate('maharashtra') ?></option>
                <option value="gujarat"><?= translate('gujarat') ?></option>
                <option value="karnataka"><?= translate('karnataka') ?></option>
                <option value="other"><?= translate('other') ?></option>
            </select>
        </div>

        <div class="modal-footer pt-0 border-top-0">
            <button type="reset" form="user-form" class="btn btn-sm btn-secondary"><?= translate('reset') ?></button>
            <button type="submit" form="user-form" class="btn btn-sm btn-primary ms-2"><?= translate('save') ?></button>
        </div>
    </form>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
