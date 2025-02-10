<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('add_service') ?></h1>
            </div>

            <div class="col-auto">
				<a class="btn btn-sm btn-primary" href="view-services.php">
					<i class="bi-card-list me-1"></i>
					<?= translate('View Services') ?>
				</a>
			</div>

        </div>

    </div>

    <form action="" class="row g-3" id="service-form">
        <div class="col-12 col-md-6">
            <label for="serviceName" class="form-label"><?= translate('service_name') ?></label>
            <input type="text" class="form-control form-control-sm" id="serviceName" placeholder="<?= translate('service_name') ?>">
        </div>

        <div class="col-12 col-md-6">
            <label for="numSeats" class="form-label"><?= translate('number_of_seats') ?></label>
            <input type="number" class="form-control form-control-sm" id="numSeats" placeholder="<?= translate('number_of_seats') ?>">
        </div>

        <div class="col-12 col-md-4">
            <label for="baseFare" class="form-label"><?= translate('base_fare') ?></label>
            <input type="number" class="form-control form-control-sm" id="baseFare" placeholder="<?= translate('base_fare') ?>">
        </div>

        <div class="col-12 col-md-4">
            <label for="minFare" class="form-label"><?= translate('minimum_fare') ?></label>
            <input type="number" class="form-control form-control-sm" id="minFare" placeholder="<?= translate('minimum_fare') ?>">
        </div>

        <div class="col-12 col-md-4">
            <label for="bookingFee" class="form-label"><?= translate('booking_fee') ?></label>
            <input type="number" class="form-control form-control-sm" id="bookingFee" placeholder="<?= translate('booking_fee') ?>">
        </div>

        <div class="col-12 col-md-4">
            <label for="taxPercentage" class="form-label"><?= translate('tax_percentage') ?></label>
            <input type="number" class="form-control form-control-sm" id="taxPercentage" placeholder="<?= translate('tax_percentage') ?>">
        </div>

        <div class="col-12 col-md-4">
            <label for="pricePerMinute" class="form-label"><?= translate('price_per_minute') ?></label>
            <input type="number" class="form-control form-control-sm" id="pricePerMinute" placeholder="<?= translate('price_per_minute') ?>">
        </div>

        <div class="col-12 col-md-4">
            <label for="pricePerKm" class="form-label"><?= translate('price_per_mile_km') ?></label>
            <input type="number" class="form-control form-control-sm" id="pricePerKm" placeholder="<?= translate('price_per_mile_km') ?>">
        </div>

        <div class="col-12 col-md-4">
            <label for="mileage" class="form-label"><?= translate('mileage') ?></label>
            <select class="form-control form-control-sm" id="mileage">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>

        <div class="col-12 col-md-4">
            <label for="dailyService" class="form-label"><?= translate('daily_service') ?></label>
            <select class="form-control form-control-sm" id="dailyService">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>

        <div class="col-12 col-md-4">
            <label for="outstationService" class="form-label"><?= translate('outstation_service') ?></label>
            <select class="form-control form-control-sm" id="outstationService">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>

        <div class="col-12 col-md-4">
            <label for="rentalService" class="form-label"><?= translate('rental_service') ?></label>
            <select class="form-control form-control-sm" id="rentalService">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>

        <div class="col-12 col-md-4">
            <label for="providerCommission" class="form-label"><?= translate('provider_commission') ?></label>
            <input type="number" class="form-control form-control-sm" id="providerCommission" placeholder="<?= translate('provider_commission') ?>">
        </div>

        <div class="col-12 col-md-4">
            <label for="adminCommission" class="form-label"><?= translate('admin_commission') ?></label>
            <input type="number" class="form-control form-control-sm" id="adminCommission" placeholder="<?= translate('admin_commission') ?>">
        </div>

        <div class="col-12 col-md-6">
            <label for="driverCashLimit" class="form-label"><?= translate('driver_cash_limit') ?></label>
            <input type="number" class="form-control form-control-sm" id="driverCashLimit" placeholder="<?= translate('driver_cash_limit') ?>">
        </div>

        <div class="col-12 col-md-6">
            <label for="servicePicture" class="form-label"><?= translate('service_picture') ?></label>
            <input type="file" class="form-control form-control-sm" id="servicePicture">
        </div>

        <div class="modal-footer pt-0 border-top-0">
            <button type="submit" form="service-form" class="btn btn-sm btn-primary"><?= translate('save') ?></button>
            <button type="reset" form="service-form" class="btn btn-sm btn-secondary ms-2" data-bs-dismiss="modal">
                <?= translate('reset') ?>
            </button>
        </div>
    </form>
</div>
<?php require_once __DIR__ . '/footer.php' ?>
