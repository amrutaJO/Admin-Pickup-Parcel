<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title d-flex align-items-center gap-3">
					<!-- <a href="reports" class="link-dark"><i class="bi-arrow-left-circle-fill align-middle"></i></a> -->
					<span><?= translate('document_management')?></span>
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
					<input type="search" class="form-control reports-table-search" placeholder="<?= translate('search_here') ?>">
				</div>
			</div>
			
		</div>
	</div>
	<div class="table-responsive">
		<table id="data-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light " align="left">
				<tr>	
					<th><?= translate('sr_no')?></th>
					<th><?= translate('id')?></th>
					<th><?= translate('name')?></th>
					<th><?= translate('created')?></th>
					<th><?= translate('status')?></th>
					<th><?= translate('action')?></th>
				</tr>
			</thead>
			<tbody>
			<tr class="odd">
					<td>1</td>
					<td>001</td>
					<td>vehicle picture</td>
					<td>12-07-2023, 07:35</td>
					<td>Active</td>
					<td>
					<div class="dropdown">
                                <button class="btn btn-sm btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">View</a></li>
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                    <li><a class="dropdown-item" href="#">Decline</a></li>
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
		initComplete: function(settings, json) {
			$('.dataTables_filter').hide();
			$('.data-table-footer').append($('#data-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
			$('.dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap mb-1 align-items-center gap-2'));
			$('.data-table-search').on('input', function() {
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