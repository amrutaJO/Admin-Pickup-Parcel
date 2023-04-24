<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					<?= translate('sowing')?> </h1>
			</div>
			<!-- End Col -->
			<div class="col-auto">
				<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addSowing()">
					<i class="bi-plus-circle me-1"></i>
					Add New </a>
			</div>
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
					<input type="search" class="form-control data-table-search" placeholder="Search here">
				</div>
			</div>
			<div class="col-12 col-md-6 offset-md-3">
				<div class="d-flex align-items-center gap-2">
					<span class="ms-md-auto">Type</span>
					<div>
						<select class="form-select form-select-sm" onchange="sowingListTable.column(2).search(this.value).draw()">
							<option value="" selected>All</option>
							<option value="Sowing">Sowing</option>
							<option value="Raw material">Raw material</option>
							<option value="Seed">Seed</option>
							<option value="Internal">Internal</option>
						</select>
					</div>
					<div class="export-buttons"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table id="data-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light" align="left">
				<tr>
					<th><?= translate('sr_no')?></th>
					<th><?= translate('sowing_date')?></th>
					<th><?= translate('pr_date-ready-sale')?></th>
					<th><?= translate('crop')?></th>
					<th><?= translate('variety')?></th>
					<th><?= translate('batch_no')?></th>
					<th><?= translate('lot_no')?></th>
					<th><?= translate('section')?></th>
					<th><?= translate('num_pkt')?></th>
					<th><?= translate('unit')?></th>
					<th><?= translate('average')?></th>
					<th><?= translate('tray_num')?></th>
					<th><?= translate('tray_size')?></th>
					<th><?= translate('total_tray')?></th>
					<th><?= translate('gross_total')?></th>
					<th><?= translate('sowing_type')?></th>
					<th><?= translate('location')?></th>
					<th><?= translate('bed_no')?></th>
					<th><?= translate('germination')?></th>
					<th><?= translate('crop_type')?></th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd">
					<td>1</td>
					<td>15 Apr 2023</td>
					<td>21-25 APR</td>
					<td>Tomato</td>
					<td>Taiwan-784</td>
					<td>Taiwan-784/1</td>
					<td>85drg</td>
					<td>A</td>
					<td>5</td>
					<td>3500N</td>
					<td>00</td>
					<td>2.5</td>
					<td>GIFFY-684</td>
					<td>56</td>
					<td>00</td>
					<td>Machine</td>
					<td>Antop Hill</td>
					<td>878</td>
					<td>52</td>
					<td>Good</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="data-table-footer"></div>
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
		initComplete: function(settings, json) {
			$('.dataTables_filter').hide();
			$('.data-table-footer').append($('#data-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
			$('.dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
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