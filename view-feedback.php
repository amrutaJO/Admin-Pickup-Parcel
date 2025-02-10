<?php 
require_once __DIR__ . "/header.php"; 
require_once "db.php"; // Database connection

// Fetch all feedback from the database
$result = $conn->query("SELECT * FROM feedback ORDER BY created_at DESC");
?>

<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('all_feedbacks') ?></h1>
            </div>
        </div>
    </div>

    <!-- Filter & Search Row -->
    <div class="row g-3 mb-3">
        <!-- Global Search -->
        <div class="col-12 col-md-3">
            <div class="input-group input-group-sm">
                <div class="input-group-text">
                    <i class="bi-search"></i>
                </div>
                <input type="search" class="form-control billing-table-search" placeholder="Search here">
            </div>
        </div>
        <!-- Filter Modal Trigger -->
        <div class="col-12 col-md-6 offset-md-3">
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-sm btn-secondary ms-md-auto" data-bs-toggle="modal"
                    data-bs-target="#transactionfilterModal">
                    Filter <i class="bi bi-funnel-fill"></i>
                </button>
                <div class="export-buttons"></div>
            </div>
        </div>
    </div>

    <!-- Filter Modal -->
    <div class="modal fade" id="transactionfilterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content shadow border">
                <div class="modal-header">
                    <h5 class="modal-title" id="filterModalLabel">Filter</h5>
                </div>
                <div class="modal-body py-3">
                    <form class="row g-3" id="filter-form">
                        <div class="col-12 col-md-6">
                            <label class="form-label">Filter by Name</label>
                            <input type="text" name="filter_name" class="form-control form-control-sm" placeholder="Enter name">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Filter by Email</label>
                            <input type="email" name="filter_email" class="form-control form-control-sm" placeholder="Enter email">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Filter by Mobile No</label>
                            <input type="text" name="filter_mobile" class="form-control form-control-sm" placeholder="Enter mobile no">
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label">Filter by Rating</label>
                            <select class="form-select form-select-sm" name="filter_rating">
                                <option value="">All</option>
                                <option value="1">⭐</option>
                                <option value="2">⭐⭐</option>
                                <option value="3">⭐⭐⭐</option>
                                <option value="4">⭐⭐⭐⭐</option>
                                <option value="5">⭐⭐⭐⭐⭐</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0 border-top-0">
                    <button type="button" onclick="clearAllFilters()" class="btn btn-sm btn-outline-danger me-auto"
                        data-bs-dismiss="modal">Clear all filters</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="filter-form" class="btn btn-sm btn-primary">Apply Filters</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Feedback Table -->
    <div class="table-responsive">
        <table id="data-table" class="table table-bordered table-nowrap table-align-middle">
            <thead class="thead-light" align="left">
                <tr>
                    <th><?= translate('sr_no') ?></th>
                    <th><?= translate('name') ?></th>
                    <th><?= translate('email') ?></th>
                    <th><?= translate('mobile_no') ?></th>
                    <th><?= translate('feedback') ?></th>
                    <th><?= translate('rating') ?></th>
                    <th><?= translate('action') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sr = 1;
                while ($row = $result->fetch_assoc()): 
                // Store key columns as data attributes for filtering (all lower-cased for consistency)
                ?>
                <tr 
                    data-rating="<?= $row['rating'] ?>" 
                    data-name="<?= strtolower(htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8')) ?>" 
                    data-email="<?= strtolower(htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8')) ?>" 
                    data-mobile="<?= strtolower(htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8')) ?>"
                >
                    <td><?= $sr++ ?></td>
                    <td><?= htmlspecialchars($row["name"]) ?></td>
                    <td><?= htmlspecialchars($row["email"]) ?></td>
                    <td><?= htmlspecialchars($row["phone"]) ?></td>
                    <td><?= htmlspecialchars($row["feedback"]) ?></td>
                    <td><?= str_repeat("⭐", $row["rating"]) ?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= translate('action') ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item edit-feedback" href="#" 
                                       data-id="<?= $row['id'] ?>" 
                                       data-name="<?= htmlspecialchars($row['name']) ?>" 
                                       data-email="<?= htmlspecialchars($row['email']) ?>" 
                                       data-phone="<?= htmlspecialchars($row['phone']) ?>" 
                                       data-feedback="<?= htmlspecialchars($row['feedback']) ?>" 
                                       data-rating="<?= $row['rating'] ?>">
                                        <?= translate('edit') ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-danger" href="delete-feedback.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this feedback?');">
                                        <?= translate('delete') ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <div class="data-table-footer"></div>
</div>

<!-- Edit Feedback Modal -->
<div class="modal fade" id="editFeedbackModal" tabindex="-1" aria-labelledby="editFeedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= translate('edit_feedback') ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edit-feedback-form">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="mb-3">
                        <label for="edit-name" class="form-label"><?= translate('name') ?></label>
                        <input type="text" class="form-control" name="name" id="edit-name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-email" class="form-label"><?= translate('email_id') ?></label>
                        <input type="email" class="form-control" name="email" id="edit-email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-phone" class="form-label"><?= translate('mobile_no') ?></label>
                        <input type="text" class="form-control" name="phone" id="edit-phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-feedback" class="form-label"><?= translate('feedback') ?></label>
                        <textarea class="form-control" name="feedback" id="edit-feedback" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="edit-rating" class="form-label"><?= translate('rating') ?></label>
                        <select class="form-control" name="rating" id="edit-rating" required>
                            <option value="1">⭐</option>
                            <option value="2">⭐⭐</option>
                            <option value="3">⭐⭐⭐</option>
                            <option value="4">⭐⭐⭐⭐</option>
                            <option value="5">⭐⭐⭐⭐⭐</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><?= translate('update') ?></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= translate('cancel') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>

<!-- JavaScript: Filtering & Modal Handling -->
<script>
    $(document).ready(function () {
        // Open edit modal and load data from selected row
        $(".edit-feedback").click(function () {
            $("#edit-id").val($(this).data("id"));
            $("#edit-name").val($(this).data("name"));
            $("#edit-email").val($(this).data("email"));
            $("#edit-phone").val($(this).data("phone"));
            $("#edit-feedback").val($(this).data("feedback"));
            $("#edit-rating").val($(this).data("rating"));
            $("#editFeedbackModal").modal("show");
        });

        // Handle edit form submission via AJAX
        $("#edit-feedback-form").submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "edit-feedback.php",
                data: $(this).serialize(),
                success: function (response) {
                    alert(response);
                    location.reload();
                }
            });
        });

        // Global search: call filter function when user types in the search box
        $(".billing-table-search").on("keyup", function () {
            filterTable();
        });

        // Modal filter form submission: apply filters and close the modal
        $("#filter-form").submit(function (e) {
            e.preventDefault();
            filterTable();
            $("#transactionfilterModal").modal("hide");
        });
    });

    // Combined filtering function: applies global search and modal filter criteria
    function filterTable() {
        // Get values from global search and filter modal inputs
        var globalSearch = $(".billing-table-search").val().toLowerCase();
        var filterName = $("input[name='filter_name']").val().toLowerCase();
        var filterEmail = $("input[name='filter_email']").val().toLowerCase();
        var filterMobile = $("input[name='filter_mobile']").val().toLowerCase();
        var filterRating = $("select[name='filter_rating']").val();

        $("#data-table tbody tr").each(function () {
            var $row = $(this);
            // Retrieve individual data attributes
            var name = $row.data("name");
            var email = $row.data("email");
            var mobile = $row.data("mobile");
            var rating = $row.data("rating").toString();
            // Global search is performed on the complete row text
            var rowText = $row.text().toLowerCase();

            // Check each filter condition. If a filter is empty, ignore it.
            var matchesGlobal   = rowText.indexOf(globalSearch) > -1;
            var matchesName     = (filterName === "" || name.indexOf(filterName) > -1);
            var matchesEmail    = (filterEmail === "" || email.indexOf(filterEmail) > -1);
            var matchesMobile   = (filterMobile === "" || mobile.indexOf(filterMobile) > -1);
            var matchesRating   = (filterRating === "" || rating === filterRating);

            // Show row only if all filter conditions are met
            if (matchesGlobal && matchesName && matchesEmail && matchesMobile && matchesRating) {
                $row.show();
            } else {
                $row.hide();
            }
        });
    }

    // Reset all filters and show all rows
    function clearAllFilters() {
        $("#filter-form")[0].reset();
        $(".billing-table-search").val("");
        filterTable();
    }
</script>
