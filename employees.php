<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					Employees </h1>
			</div>
			<!-- End Col -->
			<div class="col-auto">
				<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addEmployee()">
					<i class="bi-plus-circle me-1"></i>
					Add New </a>
			</div>
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
	<!-- End Page Header -->
	<div class="employees-table-filters">
		<div class="row g-3">
			<div class="col-12 col-md-3">
				<div class="input-group input-group-sm">
					<div class="input-group-text">
						<i class="bi-search"></i>
					</div>
					<input type="search" class="form-control employees-table-search" placeholder="Search here">
				</div>
			</div>
			<div class="col-12 col-md-6 offset-md-3">
				<div class="d-flex align-items-center gap-2">
					<span class="ms-md-auto">Gender</span>
					<div>
						<select class="form-select form-select-sm" onchange="employeeListTable.column(4).search(this.value).draw()">
							<option value="" selected>All</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
							<option value="No share">No share</option>
						</select>
					</div>
					<div class="export-buttons"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table id="employees-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light" align="left">
				<tr>
					<th>id</th>
					<th>Employee name</th>
					<th>Mobile number</th>
					<th>Email id</th>
					<th>Gender</th>
					<th>Per day salary</th>
					<th>Joining date</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
	<div class="employees-table-footer"></div>
</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>
<script>
	let employeeListTable = false;
	employeeListTable = $('#employees-table').DataTable({
		data: {},
		columns: [{
				data: 'emp_id',
				render: function(data, type, row, meta) {
					// return `<div class="text-start">
					// 		<input type="checkbox" class="multi-check-item form-check-input mx-2" name="emp_id[]" value="${row.emp_id}">
					// 	</div>`;
					return row.emp_id;
				}
			},
			{
				data: 'emp_name',
				render: function(data, type, row, meta) {
					return `<span class="cursor-pointer link-primary" onclick="editEmployee(${row.emp_id})">${row.emp_name}</span>`;
				}
			},
			{
				data: 'emp_mobile'
			},
			{
				data: 'emp_email'
			},
			{
				data: 'emp_gender_lang',
				render: function(data, type, row, meta) {
					return row.emp_gender_lang.toTitleCase();
				}
			},
			{
				data: 'emp_salary'
			},
			{
				data: 'emp_joined',
				render: function(data, type, row, meta) {
					return new Date(row.emp_joined).getFormated('dd mmm yyyy');
				}
			},
		],
		lengthChange: true,
		columnDefs: [{
			// targets: [0,],
			// orderable: false,
		}],
		order: [
			[0, 'desc']
		],
		initComplete: function(settings, json) {
			$('.dataTables_filter').hide();
			$('.employees-table-footer').append($('#employees-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
			$('.dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
			$('.employees-table-search').on('input', function() {
				employeeListTable.search(this.value).draw();
			});
			employeeListTable.buttons().container().find('.btn-secondary').removeClass('btn-secondary');
			employeeListTable.buttons().container().appendTo($('.export-buttons'));
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
		}]
	});
</script>