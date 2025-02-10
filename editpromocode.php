<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					<!-- <?= translate('edit_promocode') ?> -->
					<?= translate('edit_promocode') ?>
				</h1>
			</div>
			<!-- End Col -->
			<div class="col-auto">
				<a class="btn btn-sm btn-primary" href="promocode.php" onclick="addCustomer()">
					<i class="bi-card-list me-1"></i>
					<?= translate('view_promocodes') ?>
				</a>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
	<!-- End Page Header -->

	<form action="" class="row g-3" id="customer-form">
		<div class="col-12 col-md-6">
			<div class="row g-3">
				<div class="col-12">
					<input type="hidden" id="customer-form-action" name="add_customer" value="">
					<label for="" class="form-label required"><?= translate('promo_code') ?></label>
					<input type="text" name="cus_name" class="form-control form-control-sm" required>
				</div>
				<div class="col-12">
					<label for="" class="form-label"><?= translate('discount_amount') ?></label>
					<input type="tel" name="cus_mobile" class="form-control form-control-sm"
						oninput="allowType(event, 'mobile')">
				</div>
				<div class="col-12">
					<label for="" class="form-label"><?= translate('max_usage_total') ?></label>
					<input type="number" name="cus_email" class="form-control form-control-sm">
				</div>
				<div class="col-12">
					<label for="" class="form-label"><?= translate('max_usage_per_customer') ?></label>
					<input type="number" name="cus_email" class="form-control form-control-sm">
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="row g-3">
				<div class="col-12">
					<label for="" class="form-label"><?= translate('type') ?></label>
					<select name="cus_gender" class="form-control form-control-sm">
						<option value="noshare"><?= translate('flat_off') ?></option>
						<option value="male"><?= translate('percent_off') ?></option>
					</select>
				</div>
				<div class="col-12">
					<label for="" class="form-label"><?= translate('short_description') ?></label>
					<input type="text" name="" class="form-control form-control-sm" id="">
				</div>
				<div class="col-12">
					<label for="" class="form-label"><?= translate('long_description') ?></label>
					<textarea name="cus_address" class="form-control form-control-sm" rows="5"></textarea>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<label for="" class="form-label"><?= translate('start_date') ?></label>
			<input type="date" class="form-control form-control-sm" name="" id="">
		</div>
		<div class="col-12 col-md-6">
			<label for="" class="form-label"><?= translate('expiry_date') ?></label>
			<input type="date" class="form-control form-control-sm" name="" id="">
		</div>

		<div class="modal-footer p-0 border-top-0">
			<button type="submit" form="customer-form" class="btn btn-sm btn-primary"><?= translate('save') ?></button>
			<button type="reset" form="customer-form" class="btn btn-sm btn-secondary ms-2"><?= translate('reset') ?></button>
		</div>

	</form>

</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>
