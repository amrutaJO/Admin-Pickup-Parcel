<?php require_once __DIR__ . "/header.php"; ?>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('cancellation_form') ?></h1>
            </div>
            <div class="col-auto">
                <a class="btn btn-sm btn-primary" href="view-cancellation.php">
                    <i class="bi-card-list me-1"></i>
                    <?= translate('view_cancellations') ?>
                </a>
            </div>
        </div>
    </div>
    <!-- 
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-body"> -->
    <form action="" class="row g-3" id="cancellation-form">
        <div class="col-12 col-md-6">
            <label for="cancel_reason" class="form-label"><?= translate('cancellation_reason') ?></label>
            <select id="cancel_reason" class="form-control form-control-sm">
                <option value="" disabled selected><?= translate('select_reason') ?></option>
                <option value="delayed"><?= translate('delayed') ?></option>
                <option value="wrong_item"><?= translate('wrong_item') ?></option>
                <option value="change_mind"><?= translate('change_mind') ?></option>
                <option value="booked_by_mistake"><?= translate('booked_by_mistake') ?></option>
                <option value="found_another_ride"><?= translate('found_another_ride') ?></option>
                <option value="price_too_high"><?= translate('price_too_high') ?></option>
                <option value="other"><?= translate('other') ?></option>
            </select>
        </div>

        <div class="col-12 col-md-6">
            <label for="custom_reason" class="form-label"><?= translate('custom_reason') ?></label>
            <input type="text" id="custom_reason" class="form-control form-control-sm"
                placeholder="<?= translate('enter_custom_reason') ?>">
        </div>

        <div class="col-12">
            <label for="additional_info" class="form-label"><?= translate('additional_info') ?></label>
            <textarea id="additional_info" class="form-control form-control-sm" rows="3"
                placeholder="<?= translate('provide_additional_details') ?>"></textarea>
        </div>

        <div class="modal-footer p-0 border-top-0">
            <button type="submit" class="btn btn-sm btn-primary"><?= translate('submit') ?></button>
            <button type="reset" class="btn btn-sm btn-secondary ms-2"
                data-bs-dismiss="modal"><?= translate('reset') ?></button>
        </div>
    </form>
    <!-- </div>
            </div>
        </div>
    </div> -->

</div>
<?php require_once __DIR__ . '/footer.php'; ?>