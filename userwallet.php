<?php require_once __DIR__ . "/header.php"; ?>
<div class="content container-fluid">
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title d-flex align-items-center gap-3">
					<span><?= translate('user_wallets', 'mr') ?></span>
				</h1>
			</div>
		</div>
	</div>

	<div class="reports-table-filters">
		<div class="row g-3">
			<div class="col-12 col-md-3">
				<div class="input-group input-group-sm">
					<div class="input-group-text">
						<i class="bi-search"></i>
					</div>
					<input type="search" class="form-control reports-table-search" placeholder="<?= translate('search_here', 'mr') ?>">
				</div>
			</div>
		</div>
	</div>

	<!-- Table -->
	<div class="table-responsive">
		<table id="data-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light" align="left">
				<tr>
					<th><?= translate('sr_no', 'mr') ?></th>
					<th><?= translate('user_name', 'mr') ?></th>
					<th><?= translate('total_amount', 'mr') ?></th>
					<th><?= translate('remaining_amount', 'mr') ?></th>
					<th><?= translate('used_amount', 'mr') ?></th>
					<th><?= translate('last_updated', 'mr') ?></th>
					<th><?= translate('actions', 'mr') ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Manish9322</td>
					<td>1000</td>
					<td>700</td>
					<td>300</td>
					<td>2025-01-24</td>
					<td>
						<div class="dropdown">
							<button class="btn btn-sm btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								<?= translate('actions', 'mr') ?>
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#"><?= translate('transactions', 'mr') ?></a></li>
								<li><a class="dropdown-item" href="#"><?= translate('redeems', 'mr') ?></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Tejas Khairnar</td>
					<td>2000</td>
					<td>1500</td>
					<td>500</td>
					<td>2025-01-23</td>
					<td>
						<div class="dropdown">
							<button class="btn btn-sm btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								<?= translate('actions', 'mr') ?>
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#"><?= translate('transactions', 'mr') ?></a></li>
								<li><a class="dropdown-item" href="#"><?= translate('redeems', 'mr') ?></a></li>
							</ul>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="data-table-footer"></div>
</div>
<?php require_once __DIR__ . '/footer.php'; ?>

<script>
	let sowingListTable = false;
sowingListTable = $('#data-table').DataTable({
    lengthChange: true,
    order: [[0, 'asc']], // Ensure Sr. No. is sorted in ascending order
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
            text: '<i class="bi-clipboard2-check dropdown-item-icon"></i> <?= translate("copy", "mr") ?>'
        },
        {
            extend: 'excel',
            text: '<i class="bi-filetype-xlsx dropdown-item-icon"></i> <?= translate("excel", "mr") ?>'
        },
        {
            extend: 'csv',
            text: '<i class="bi-filetype-csv dropdown-item-icon"></i> <?= translate("csv", "mr") ?>'
        },
        {
            extend: 'pdf',
            text: '<i class="bi-filetype-pdf dropdown-item-icon"></i> <?= translate("pdf", "mr") ?>'
        },
        {
            extend: 'print',
            text: '<i class="bi-printer dropdown-item-icon"></i> <?= translate("print", "mr") ?>'
        }
        ]
    }],
});

</script>
