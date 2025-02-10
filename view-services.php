<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
				<?= translate('service') ?>
				</h1>
			</div>
		</div>
		<!-- New outline after the header -->
	</div>
	<!-- End Page Header -->


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
							<label class="form-label">
								Filter by Daily Services</label>
							<select class="form-select form-select-sm" name="paymode">
								<option value="" selected>All</option>
								<option value="Cash">Notification</option>
								<option value="UPI">SMS</option>
								<option value="NEFT">WhatsApp</option>
							</select>
						</div>

						<div class="col-12 col-md-6">
							<label class="form-label">
								Filter by Status </label>
							<select class="form-select form-select-sm" name="status">
								<option value="" selected>All</option>
								<option value="Paid">Pending</option>
								<option value="Unpaid">Delivered</option>
							</select>
						</div>

						<div class="col-12 col-md-6">
							<label class="form-label">
								Filter by Outstation Services </label>
							<select class="form-select form-select-sm" name="status">
								<option value="" selected>All</option>
								<option value="Paid">Pending</option>
								<option value="Unpaid">Delivered</option>
							</select>
						</div>

						<div class="col-12 col-md-6">
							<label class="form-label">
								Filter by Rental Service </label>
							<select class="form-select form-select-sm" name="status">
								<option value="" selected>All</option>
								<option value="Paid">Pending</option>
								<option value="Unpaid">Delivered</option>
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

	<div class="row g-3">
		<div class="col-12 col-md-3">
			<div class="input-group input-group-sm">
				<div class="input-group-text">
					<i class="bi-search"></i>
				</div>
				<input type="search" class="form-control billing-table-search" placeholder="Search here">
			</div>
		</div>
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



	<div class="table-responsive">
		<table id="data-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light " align="left">
				<tr>

					<th><?= translate('sr_no') ?></th>
					<th><?= translate('service_name') ?></th>
					<th><?= translate('number_of_seats') ?></th>
					<th><?= translate('base_fare') ?></th>
					<th><?= translate('minimum_fare') ?></th>
					<th><?= translate('booking_fare') ?></th>
					<th><?= translate('tax_percentage') ?></th>
					<th><?= translate('price_per_minute') ?></th>
					<th><?= translate('price_per_mile_km') ?></th>
					<th><?= translate('mileage') ?></th>
					<th><?= translate('daily_service') ?></th>
					<th><?= translate('outstation_service') ?></th>
					<th><?= translate('rental_service') ?></th>
					<th><?= translate('rental_service') ?></th>
					<th><?= translate('provider_commision') ?></th>
					<th><?= translate('driver_cash_limit') ?></th>
					<th><?= translate('service_picture') ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Premium Car</td>
					<td>4</td>
					<td>1000</td>
					<td>500</td>
					<td>1200</td>
					<td>18%</td>
					<td>50</td>
					<td>10</td>
					<td>Yes</td>
					<td>Yes</td>
					<td>Yes</td>
					<td>No</td>
					<td>Yes</td>
					<td>20%</td>
					<td>5000</td>
					<td >Premium Car</td>

				</tr>
			</tbody>
		</table>
	</div>
	<div class="data-table-footer"></div>
</div>
<?php require_once __DIR__ . '/footer.php' ?>

<script>
	let sowingListTable = false;
	sowingListTable = $('#data-table').DataTable({
		lengthChange: true,
		columnDefs: [{
			// targets: [0,],
			// orderable: false,
		}],
		order: [
			[1, 'desc'],
			[0, 'desc']
		],
		initComplete: function (settings, json) {
			$('.dataTables_filter').hide();
			$('.data-table-footer').append($('#data-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
			$('.dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
			$('.data-table-search').on('input', function () {
				sowingListTable.search(this.value).draw();
			});
			sowingListTable.buttons().container().find('.btn-secondary').removeClass('btn-secondary');
			sowingListTable.buttons().container().appendTo($('.export-buttons'));
		},
		buttons: [{
			extend: 'collection',
			text: '<i class="bi bi-cloud-download-fill"></i>',
			className: 'btn-sm btn-outline-primary',
			buttons: [{
				extend: 'copy',
				text: '<i class="bi-clipboard2-check dropdown-item-icon"></i> Copy'
			},
			{
				extend: 'excel',
				text: '<i class="bi-filetype-xlsx dropdown-item-icon"></i> Excel'
			},
			{
				extend: 'csv',
				text: '<i class="bi-filetype-csv dropdown-item-icon"></i> CSV'
			},
			{
				extend: 'pdf',
				text: '<i class="bi-filetype-pdf dropdown-item-icon"></i> PDF'
			},
			{
				extend: 'print',
				text: '<i class="bi-printer dropdown-item-icon"></i> Print'
			}
			]
		}],
	});
</script>

<!-- Add custom CSS for breakpoint outline -->
<style>
	.page-header-breakpoint {
		width: 100%;
		border-bottom: 2px solid #ddd;
		/* Add a light gray border for the outline */
		margin-top: auto;
	}
</style>