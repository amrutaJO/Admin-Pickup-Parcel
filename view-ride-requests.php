<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					<?= translate('ride_requests') ?>
				</h1>
			</div>
			<!-- End Col -->

			<!-- <div class="col-auto">
				<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addCustomer()">
					<i class="bi-plus-circle me-1"></i>
					<?= translate('Add New') ?> </a>
			</div> -->

			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
	<!-- End Page Header -->
	<div class="data-table-filters">
		<div class="row g-3">
			<div class="col-12 col-md-3">
				<div class="input-group input-group-sm">
					<div class="input-group-text">
						<i class="bi-search"></i>
					</div>
					<input type="search" class="form-control customer-table-search" placeholder="<?= translate('search_here') ?>">
				</div>
			</div>
			<div class="col-12 col-md-6 offset-md-3">
				<div class="d-flex align-items-center gap-2">
					<div class="export-buttons ms-md-auto"></div>
				</div>
			</div>
		</div>
	</div>


	
	<div class="table-responsive">
		<table id="data-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light" align="left">
                <tr>
                    <th><?= translate('sr_no') ?></th>
                    <th><?= translate('transaction_id') ?></th>
					<th><?= translate('user_name') ?></th>
					<th><?= translate('pickup_address') ?></th>
					<th><?= translate('drop_address') ?></th>
					<th><?= translate('request_time') ?></th>
					<th><?= translate('request_type') ?></th>
					<th><?= translate('status') ?></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>01</td>
					<td>ABCX3423E</td>
					<td>Manish9322</td>
					<td>Govind Nagar, Nashik</td>
					<td>Ruchita Nagar, Nashik</td>
					<td>12.05pm</td>
					<td>Recent</td>
					<td>Pending</td>
				</tr>
				<tr>
					<td>02</td>
					<td>DEFZ3423F</td>
					<td>Rahul8979</td>
					<td>Govind Nagar, Nashik</td>
					<td>Ruchita Nagar, Nashik</td>
					<td>11.45pm</td>
					<td>History</td>
					<td>Pending</td>
				</tr>

			</tbody>
		</table>
	</div>
	<div class="customer-table-footer"></div>
</div>
<!-- End Content -->
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