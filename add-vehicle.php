<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('add_vehicle') ?></h1>
            </div>
            <div class="col-auto">
                <a class="btn btn-sm btn-primary" href="view-vehicles.php">
                    <!-- <i class="bi-plus-circle me-1"></i> -->
                    <?= translate('view_vehicles') ?>
                </a>
            </div>
        </div>
    </div>


    <form action="" class="row g-3" id="vehicle-form">
        <div class="col-12 col-md-6">
            <label for="" class="form-label"><?= translate('vehicle_name') ?></label>
            <div class="input-group input-group-sm w-100">
                <select name="" class="form-control form-control-sm">
                    <option value=""><?= translate('select') ?></option>
                    <option value="yodha">Tata Yoddha</option>
                    <option value="yodha">CB Shine</option>
                    <option value="yodha">Pulsar 220</option>

                </select>
                <button class="btn p-0 border-0" type="button" onclick="addVehicle()">
                    <i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
                </button>
            </div>
        </div>

        <div class="col-12 col-md-6">

            <label for="" class="form-label"><?= translate('vehicle_model') ?></label>
            <input type="text" class="form-control form-control-sm" readonly placeholder="<?= translate('vehicle_model') ?>">

        </div>
        <div class="col-12 col-md-6">

            <label for="" class="form-label"><?= translate('vehicle_no') ?></label>
            <input type="text" class="form-control form-control-sm" readonly placeholder="<?= translate('vehicle_no') ?>">

        </div>

        <div class="col-12 col-md-6">

            <label for="" class="form-label"><?= translate('driver_name') ?></label>
            <input type="text" class="form-control form-control-sm" placeholder="<?= translate('driver_name') ?>">

        </div>
        <div class="col-12 col-md-6">
            <label for="" class="form-label"><?= translate('driver_mobile_number') ?></label>
            <input type="tel" class="form-control form-control-sm" placeholder="<?= translate('driver_mobile_number') ?>">
        </div>

        <!-- <div class="col-12 col-md-6">
                        <label for="" class="form-label">Batch No</label>
                        <input type="tel" class="form-control form-control-sm" placeholder="Batch No">
                    </div> -->

        <div class="modal-footer pt-0 border-top-0">
            <button type="reset" form="vehicle-form" class="btn btn-sm btn-secondary"><?= translate('Reset') ?></button>
            <button type="submit" form="vehicle-form" class="btn btn-sm btn-primary ms-2"><?= translate('Save') ?></button>
        </div>
    </form>


    <!-- End of New Card -->



</div>
</div>
<?php require_once __DIR__ . '/footer.php' ?>