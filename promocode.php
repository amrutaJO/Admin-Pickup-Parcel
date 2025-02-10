<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title d-flex align-items-center gap-3">
					<span><?= translate('view_promocodes') ?></span>
				</h1>
			</div>
		</div>
	</div>

	<div class="modal fade" id="transactionfilterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
		aria-labelledby="filterModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content shadow border">
				<div class="modal-header">
					<h5 class="modal-title" id="filterModalLabel"><?= translate('filter') ?></h5>
				</div>
				<div class="modal-body py-3">
					<form class="row g-3" id="filter-form">
						<div class="col-12 col-md-6">
							<label class="form-label"><?= translate('filter_by_promo_code') ?></label>
							<select class="form-select form-select-sm" name="paymode">
								<option value="" selected><?= translate('all') ?></option>
								<option value="Cash">ABCD1234 </option>
							</select>
						</div>

						<div class="col-12 col-md-6">
							<label class="form-label"><?= translate('filter_by_status') ?></label>
							<select class="form-select form-select-sm" name="status">
								<option value="" selected><?= translate('all') ?></option>
								<option value="Paid"><?= translate('valid') ?></option>
								<option value="Unpaid"><?= translate('invalid') ?></option>
								<option value="Unpaid"><?= translate('expired') ?></option>
							</select>
						</div>
					</form>
				</div>
				<div class="modal-footer pt-0 border-top-0">
					<button type="button" onclick="clearAllFilters()" class="btn btn-sm btn-outline-danger me-auto"
						data-bs-dismiss="modal"><?= translate('clear_all_filters') ?></button>
					<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><?= translate('close') ?></button>
					<button type="submit" form="filter-form" class="btn btn-sm btn-primary"><?= translate('apply_filters') ?></button>
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
				<input type="search" class="form-control billing-table-search" placeholder="<?= translate('search_here') ?>">
			</div>
		</div>
		<div class="col-12 col-md-6 offset-md-3">
			<div class="d-flex align-items-center gap-2">
				<button class="btn btn-sm btn-secondary ms-md-auto" data-bs-toggle="modal"
					data-bs-target="#transactionfilterModal">
					<?= translate('filter') ?> <i class="bi bi-funnel-fill"></i>
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
					<th><?= translate('promo_code') ?></th>
					<th><?= translate('start_date') ?></th>
					<th><?= translate('expiry_date') ?></th>
					<th><?= translate('description') ?></th>
					<th><?= translate('status') ?></th>
					<th><?= translate('action') ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>ABCD1234</td>
					<td>2025-01-10</td>
					<td>2025-02-10</td>
					<td>This is PromoCode short description</td>
					<td><?= translate('valid') ?></td>
					<td>
						<div class="dropdown">
							<button class="btn btn-sm btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								<?= translate('actions') ?>
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Transactions</a></li>
								<li><a class="dropdown-item" href="#">Redeems</a></li>
							</ul>
						</div>
					</td>
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
				text: '<i class="bi-clipboard2-check dropdown-item-icon"></i> <?= translate('copy') ?>'
			},
			{
				extend: 'excel',
				text: '<i class="bi-filetype-xlsx dropdown-item-icon"></i> <?= translate('excel') ?>'
			},
			{
				extend: 'csv',
				text: '<i class="bi-filetype-csv dropdown-item-icon"></i> <?= translate('csv') ?>'
			},
			{
				extend: 'pdf',
				text: '<i class="bi-filetype-pdf dropdown-item-icon"></i> <?= translate('pdf') ?>'
			},
			{
				extend: 'print',
				text: '<i class="bi-printer dropdown-item-icon"></i> <?= translate('print') ?>'
			}
			]
		}],
	});
</script>
