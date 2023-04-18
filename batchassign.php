<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title d-flex align-items-center gap-3">
					<a href="reports" class="link-dark"><i class="bi-arrow-left-circle-fill align-middle"></i></a>
					<span>Batch Assign Managament</span>
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
					<input type="search" class="form-control reports-table-search" placeholder="Search here">
				</div>
			</div>
			
		</div>
	</div>
	<div class="table-responsive">
		<table id="data-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light " align="left">
				<tr>
					<th>No.</th>
					<th>Date.</th>
					<th>Bill No</th>
					<th>Farmer Name</th>
					<th>Address</th>
					<th>Taluka</th>
					<th>Mobile Number</th>
					<th>Crop</th>
					<th>Variety</th>
					<th>Tray Size</th>
					<th>Qty</th>
					<th>Batch No</th>
				</tr>
			</thead>
			<tbody>
                <tr class="odd">
                    <td>1</td>
                    <td>18 Apr 2023</td>
                    <td>5</td>
                    <td>pandu</td>
                    <td>dindori</td>
                    <td>dindori</td>
                    <td>+91-7789765565</td>
                    <td>Flower</td>
                    <td>Saint</td>
                    <td>125</td>
                    <td>200</td>
                    <td><input type="text" class="form-control w-120px"></td>
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