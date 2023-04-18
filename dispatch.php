<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title d-flex align-items-center gap-3">
					<a href="reports" class="link-dark"><i class="bi-arrow-left-circle-fill align-middle"></i></a>
					<span>Dispatch Managament</span>
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
		<table id="booking-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
			<thead class="thead-light " align="left">
				<tr>
					<th>Date.</th>
					<th>Bill No</th>
					<th>Farmer Name</th>
					<th>Address</th>
					<th>Farmer name</th>
					<th>Address</th>
					<th>Taluka</th>
					<th>Mobile Number</th>
					<th>Crop</th>
					<th>Variety</th>
					<th>Tray Size</th>
					<th>Qty</th>
					<th>Batch No</th>
					<th>Sale Type</th>
					<th>Vehicle No</th>
					<th>Payment Type</th>
					<th>Remark</th>
					<th>Extra Type</th>
					<th>Loaded Trays</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
		<div class="reports-table-footer"></div>
</div>
<div class="modal fade" id="reportsDateRangeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="reportsDateRangeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content shadow border">
			<div class="modal-body">
				<form id="date-range-form" class="row g-3 mt-0">
					<div class="col-12">
						<input type="hidden" name="show" value="bookings-all">
						<label class="form-label">Duraiton</label>
						<select class="form-select form-select-sm" id="report-date-range" onchange="rangeSelect(this.value)">
							<option value="">Select Duraiton</option>
							<option value="">1-5 Days</option>
							<option value="">5-10 Days</option>
							<option value="">10-15 Days</option>
						</select>
					</div>
					<div class="col-6">
						<label for="" class="form-label">From Date</label>
						<div class="input-group input-group-sm">
							<span class="input-group-text">
								<i class="bi-calendar-week fs-5"></i>
							</span>
							<input type="text" name="date-from" class="form-control js-flatpickr" value="2023-04-17" data-hs-flatpickr-options='{"dateFormat": "Y-m-d"}'>
						</div>
					</div>
					<div class="col-6">
						<label for="" class="form-label">To Date</label>
						<div class="input-group input-group-sm">
							<span class="input-group-text">
								<i class="bi-calendar-week fs-5"></i>
							</span>
							<input type="text" name="date-to" class="form-control js-flatpickr" value="2023-04-18" data-hs-flatpickr-options='{"dateFormat": "Y-m-d"}'>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
				<button type="submit" form="date-range-form" class="btn btn-sm btn-primary">Apply</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="filterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content shadow border">
			<div class="modal-header">
				<h5 class="modal-title" id="filterModalLabel">Filter</h5>
			</div>
			<div class="modal-body py-3">
				<form class="row g-3" id="filter-form">
					<div class="col-12 col-md-6">
						<label class="form-label">Filter by Crop</label>
						<select class="form-select form-select-sm" id="" name="">
							<option value="" selected>All</option>
							<option value="">Chilli</option>
							<option value="">Cauliflower</option>
							<option value="">Tomato</option>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">Filter by Variety</label>
						<select class="form-select form-select-sm" id="" name="">
							<option value="" selected>All</option>
							<option value="">785</option>
							<option value="">ASHA F1</option>
							<option value="">SAINT</option>
						</select>
					</div>
                    <div class="col-12 col-md-6">
						<label class="form-label">Filter by Tray</label>
						<select class="form-select form-select-sm" id="" name="">
							<option value="" selected>All</option>
							<option value="">125</option>
							<option value="">60 GIFFY</option>
							<option value="">104</option>
						</select>
					</div>
                    <div class="col-12 col-md-6">
						<label class="form-label">Filter by Delivery Date</label>
						<select class="form-select form-select-sm" id="" name="">
							<option value="" selected>All</option>
							<option value="">1-5 MAY</option>
							<option value="">26-30 APR</option>
							<option value="">1-2 JUNE</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer border-top-0">
				<button type="button" onclick="clearAllFilters()" class="btn btn-sm btn-outline-danger me-auto" data-bs-dismiss="modal">Clear all filters</button>
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="filter-form" class="btn btn-sm btn-primary">Apply Filters</button>
			</div>
		</div>
	</div>
</div><!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>

<script>
	function clearAllFilters() {
		$('#filter-form').trigger('reset');
		reportsTable.columns().search('').draw();
	}
	$('#filter-form').on('submit', function(e){
		e.preventDefault();
		const form = this.elements;
		reportsTable.column(3).search(form.customer.value).draw()
		reportsTable.column(9).search(form.status.value).draw();
		$('#filterModal').modal('hide');
	});
	let reportsTable = $('#booking-table').DataTable({
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
			$('.reports-table-footer').append($('#reports-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
			$('.dataTables_info').before($('.dataTables_length').find('label').attr('class','d-inline-flex text-nowrap align-items-center gap-2'));
			$('.reports-table-search').on('input', function() {
				reportsTable.search(this.value).draw();
			});
		},
		drawCallback: function () {
			let api = this.api();
			$(api.table().footer()).find('th:eq(1)').html(
				api.column(4, {page:'current'}).data().sum()
			);
			$(api.table().footer()).find('th:eq(2)').html(
				api.column(5, {page:'current'}).data().sum().toFixed(2)
			);
			$(api.table().footer()).find('th:eq(3)').html(
				api.column(6, {page:'current'}).data().sum().toFixed(2)
			);
			$(api.table().footer()).find('th:eq(4)').html(
				api.column(7, {page:'current'}).data().sum().toFixed(2)
			);
			$(api.table().footer()).find('th:eq(5)').html(
				api.column(8, {page:'current'}).data().sum().toFixed(2)
			);
		},
		buttons: [{
			extend: 'collection',
			text: '<i class="bi bi-cloud-download-fill"></i>',
			className: 'btn-sm btn-outline-primary',
			buttons: [
				{extend: 'copy', text: '<i class="bi-clipboard2-check dropdown-item-icon"></i> Copy'},
				{extend: 'excel', text: '<i class="bi-filetype-xlsx dropdown-item-icon"></i> Excel'},
				{extend: 'csv', text: '<i class="bi-filetype-csv dropdown-item-icon"></i> CSV'},
				{extend: 'pdf', text: '<i class="bi-filetype-pdf dropdown-item-icon"></i> PDF'},
				{extend: 'print', text: '<i class="bi-printer dropdown-item-icon"></i> Print'}
			]
		}]
	});
	reportsTable.buttons().container().find('.btn-secondary').removeClass('btn-secondary');
	reportsTable.buttons().container().appendTo($('.export-buttons'));
	const customer = reportsTable.column(3).data().unique();
	const list = [];
	for (let i = 0; i < customer.length; i++) {
		const cus = $(customer[i]).text().trim();
		if (list.indexOf(cus)<0) {
			list.push(cus);
		}
	}
	list.forEach(c => {
		$('#filter-customer').append(`<option value="${c}">${c}</option>`);
	});
	const status = reportsTable.column(9).data().unique();
	for (let i = 0; i < status.length; i++) {
		$('#filter-status').append(`<option value="${status[i]}">${status[i]}</option>`);
	}
	function rangeSelect(range) {
		let from = document.querySelector('[name="date-from"]');
		let to = document.querySelector('[name="date-to"]');
		let date = new Date();
		switch(range) {
			case 'today':
				from.value = date.getToday('-');
				date.setDate(date.getDate() + 1);
				to.value = date.getToday('-');
				break;
			case 'yesterday':
				to.value = date.getToday('-');
				date.setDate(date.getDate() - 1);
				from.value = date.getToday('-');
				break;
			case 'last_7_days':
				date.setDate(date.getDate() + 1);
				to.value = date.getToday('-');
				date.setDate(date.getDate() - 7);
				from.value = date.getToday('-');
				break;
			case 'last_30_days':
				date.setDate(date.getDate() + 1);
				to.value = date.getToday('-');
				date.setDate(date.getDate() - 30);
				from.value = date.getToday('-');
				break;
			case 'last_90_days':
				date.setDate(date.getDate() + 1);
				to.value = date.getToday('-');
				date.setDate(date.getDate() - 90);
				from.value = date.getToday('-');
				break;
			case 'last_month':
				date.setMonth(date.getMonth(), 0)
				from.value = date.getToday('-');
				date.setDate(1);
				to.value = date.getToday('-');
				break;
			case 'last_year':
				date.setYear(date.getFullYear() - 1);
				from.value = `${date.getFullYear()}-01-01`;
				to.value = `${date.getFullYear()}-12-31`;
				break;
			case 'all':
				from.value = '1970-01-01';
				date.setDate(date.getDate() + 1);
				to.value = date.getToday('-');
				break;
		}
	}
</script>