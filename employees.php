<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					<?= translate('partners') ?>
				</h1>
			</div>
			<!-- End Col -->
			<!-- <div class="col-auto">
				<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addEmployee()">
					<i class="bi-plus-circle me-1"></i>
					Add New </a>
			</div> -->
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
					<input type="search" class="form-control employees-table-search"
						placeholder="<?= translate('search_here') ?>">
				</div>
			</div>
			<div class="col-12 col-md-6 offset-md-3">
				<div class="d-flex align-items-center gap-2">
					<span class="ms-md-auto"><?= translate('gender') ?></span>
					<div>
						<select class="form-select form-select-sm"
							onchange="employeeListTable.column(4).search(this.value).draw()">
							<option value="" selected><?= translate('all') ?></option>
							<option value="Male"><?= translate('male') ?></option>
							<option value="Female"><?= translate('female') ?></option>
							<option value="Other"><?= translate('other') ?></option>
							<option value="No share"><?= translate('noshare') ?></option>
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
					<th><?= translate('id') ?></th>
					<th><?= translate('partner_name') ?></th>
					<th><?= translate('mobile_no') ?></th>
					<th><?= translate('email_id') ?></th>
					<th><?= translate('gender') ?></th>
					<th><?= translate('outstation_services') ?></th>
					<th><?= translate('daily_services') ?></th>
					<th><?= translate('upi_id') ?></th>
					<th><?= translate('account_no') ?></th>
					<th><?= translate('ifsc_code') ?></th>
					<th><?= translate('password') ?></th>
					<th><?= translate('per_day_salary') ?></th>
					<th><?= translate('joining_date') ?></th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
	<div class="employees-table-footer"></div>
</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>


<script>
	let employeeListTable = false;
	employeeListTable = $('#employees-table').DataTable({
		lengthChange: true,
		pageLength: 10, // Default entries per page
		data: [
			{
				"emp_id": "01",
				"emp_name": "Manish Sonawane",
				"emp_mobile": "9322897948",
				"emp_email": "manishsonawane3010@gmail.com",
				"emp_gender_lang": "Male",
				"emp_outstation_services": "No",
				"emp_daily_services": "Yes",
				"emp_upi": "ABC@ABCBANK",
				"emp_account_no": "123456789012",
				"emp_ifsc": "SBI0AIROLI",
				"emp_password": "Partner@9421",
				"emp_salary": "578.34",
				"emp_joined": "2024-06-01"
			},
			{
				"emp_id": "02",
				"emp_name": "Rahul Sharma",
				"emp_mobile": "9876543210",
				"emp_email": "rahulsharma@gmail.com",
				"emp_gender_lang": "Male",
				"emp_outstation_services": "Yes",
				"emp_daily_services": "No",
				"emp_upi": "RAHUL@HDFC",
				"emp_account_no": "987654321098",
				"emp_ifsc": "HDFC0001234",
				"emp_password": "Rahul@123",
				"emp_salary": "650.00",
				"emp_joined": "2024-05-20"
			},
			{
				"emp_id": "03",
				"emp_name": "Sneha Patil",
				"emp_mobile": "9123456789",
				"emp_email": "snehapatil1256@gmail.com",
				"emp_gender_lang": "Female",
				"emp_outstation_services": "Yes",
				"emp_daily_services": "Yes",
				"emp_upi": "SNEHA@ICICI",
				"emp_account_no": "876543210987",
				"emp_ifsc": "ICIC0005678",
				"emp_password": "Sneha@789",
				"emp_salary": "700.50",
				"emp_joined": "2024-04-15"
			},
			{
				"emp_id": "04",
				"emp_name": "Amit Verma",
				"emp_mobile": "8001234567",
				"emp_email": "amitverma567@gmail.com",
				"emp_gender_lang": "Male",
				"emp_outstation_services": "No",
				"emp_daily_services": "Yes",
				"emp_upi": "AMIT@SBI",
				"emp_account_no": "654321098765",
				"emp_ifsc": "SBI0004321",
				"emp_password": "Amit@321",
				"emp_salary": "600.75",
				"emp_joined": "2024-03-10"
			}
		],
		columns: [
			{ data: 'emp_id' },
			{
				data: 'emp_name',
				render: function (data, type, row) {
					return `<span class="onclick="editEmployee(${row.emp_id})">${data}</span>`;
				}

				// cursor-pointer link-primary" - removed these classes from emp_name's span tag here
				// return `<span class=" cursor-pointer link-primary onclick="editEmployee(${row.emp_id})">${data}</span>`;
			},
			{ data: 'emp_mobile' },
			{ data: 'emp_email' },
			{
				data: 'emp_gender_lang',
				render: function (data) {
					return data.toTitleCase ? data.toTitleCase() : data;
				}
			},
			{ data: 'emp_outstation_services' },
			{ data: 'emp_daily_services' },
			{ data: 'emp_upi' },
			{ data: 'emp_account_no' },
			{ data: 'emp_ifsc' },
			{ data: 'emp_password' },
			{ data: 'emp_salary' },
			{
				data: 'emp_joined',
				render: function (data) {
					return new Date(data).toLocaleDateString('en-GB'); // Formats as dd-mm-yyyy
				}
			}
		],
		order: [[0, 'asc']],
		initComplete: function () {
			$('.dataTables_filter').hide();
			$('.employees-table-footer').html($('#employees-table_wrapper .row:last-child()'));
			$('.dataTables_info').before($('.dataTables_length').find('label').addClass('d-inline-flex text-nowrap align-items-center gap-2'));
			$('.employees-table-search').on('input', function () {
				employeeListTable.search(this.value).draw();
			});
			employeeListTable.buttons().container().appendTo($('.export-buttons'));
		},
		dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
			"<'row'<'col-sm-12'tr>>" +
			"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
		buttons: [{
			extend: 'collection',
			text: '<i class="bi bi-cloud-download-fill"></i>',
			className: 'btn-sm btn-outline-primary',
			buttons: [
				{ extend: 'copy', text: '<i class="bi-clipboard2-check dropdown-item-icon"></i> Copy' },
				{ extend: 'excel', text: '<i class="bi-filetype-xlsx dropdown-item-icon"></i> Excel' },
				{ extend: 'csv', text: '<i class="bi-filetype-csv dropdown-item-icon"></i> CSV' },
				{ extend: 'pdf', text: '<i class="bi-filetype-pdf dropdown-item-icon"></i> PDF' },
				{ extend: 'print', text: '<i class="bi-printer dropdown-item-icon"></i> Print' }
			]
		}]
	});
</script>