<?php require_once __DIR__ . "/header.php" ?>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('add_rental_service') ?></h1>

            </div>
            <div class="col-auto">
				<a class="btn btn-sm btn-primary" href="view-rental-services.php">
					<i class="bi-card-list me-1"></i>
					<?= translate('view_rental_services') ?>
				</a>
			</div>
        </div>
    </div>

<form action="" class="row g-3" id="rental-form">
    <div class="col-12 col-md-6">
        <label for="hourlyPackage" class="form-label"><?= translate('hourly_package') ?></label>
        <select class="form-control form-control-sm" id="hourlyPackage">
            <option><?= translate('basic') ?></option>
            <option><?= translate('premium') ?></option>
            <option><?= translate('luxury') ?></option>
        </select>
    </div>

    <div class="col-12 col-md-6">
        <label for="baseFare" class="form-label"><?= translate('base_fare') ?></label>
        <input type="number" class="form-control form-control-sm" id="baseFare" required>
    </div>

    <div class="col-12 col-md-6">
        <label for="bookingFee" class="form-label"><?= translate('booking_fee') ?></label>
        <input type="number" class="form-control form-control-sm" id="bookingFee" required>
    </div>

    <div class="col-12 col-md-6">
        <label for="vehicleType" class="form-label"><?= translate('vehicle_type') ?></label>
        <select class="form-control form-control-sm" id="vehicleType">
            <option><?= translate('bike') ?></option>
            <option><?= translate('three_wheeler') ?></option>
            <option><?= translate('car') ?></option>
            <option><?= translate('truck') ?></option>
            <option><?= translate('other') ?></option>
        </select>
    </div>

    <div class="col-12 col-md-6">
        <label for="perKmRate" class="form-label"><?= translate('per_km_rate') ?></label>
        <input type="number" class="form-control form-control-sm" id="perKmRate" required>
    </div>

    <div class="col-12 col-md-6">
        <label for="perMinuteRate" class="form-label"><?= translate('per_minute_rate') ?></label>
        <input type="number" class="form-control form-control-sm" id="perMinuteRate" required>
    </div>

    <div class="modal-footer p-0 border-top-0">
        <button type="submit" form="rental-form" class="btn btn-sm btn-primary"><?= translate('save') ?></button>
        <button type="reset" form="rental-form" class="btn btn-sm btn-secondary ms-2" data-bs-dismiss="modal"><?= translate('reset') ?></button>
    </div>
</form>


</div>

<?php require_once __DIR__ . '/footer.php' ?>

<script>
    document.getElementById("rentalForm").addEventListener("submit", function(event) {
        event.preventDefault();
        let hourlyPackage = document.getElementById("hourlyPackage").value;
        let baseFare = document.getElementById("baseFare").value;
        let bookingFee = document.getElementById("bookingFee").value;
        let vehicleType = document.getElementById("vehicleType").value;
        let perKmRate = document.getElementById("perKmRate").value;
        let perMinuteRate = document.getElementById("perMinuteRate").value;

        let rentals = JSON.parse(localStorage.getItem("rentals")) || [];
        rentals.push({ hourlyPackage, baseFare, bookingFee, vehicleType, perKmRate, perMinuteRate });
        localStorage.setItem("rentals", JSON.stringify(rentals));

        alert("Rental service added successfully!");
        document.getElementById("rentalForm").reset();
    });
</script>


