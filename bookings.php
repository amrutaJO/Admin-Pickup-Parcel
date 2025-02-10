<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					<?= translate('Order details') ?>
				</h1>
			</div>
			<!-- End Col -->


			<!-- <div class="col-auto">
				<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addOrder()">
					<i class="bi-plus-circle me-1"></i>
					<?= translate('place new order') ?></a>
			</div> -->

			<!-- It had onclick="addBooking()" first -->


			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
	<!-- End Page Header -->
	<div class="booking-table-filters">
		<div class="row g-3 ">
			<div class="col-12 col-md-3">
				<div class="input-group input-group-sm">
					<div class="input-group-text">
						<i class="bi-search"></i>
					</div>
					<input type="search" class="form-control booking-table-search" placeholder="Search here">
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
		<table id="booking-table" class="table table-bordered  table-nowrap table-align-middle">
			<thead class="thead-light" align="left">
				<tr>
					<th><?= translate('order_no') ?></th>
					<th><?= translate('order date') ?></th>
					<th><?= translate('order by') ?></th>
					<th><?= translate('delivery date') ?></th>
					<th><?= translate('pickup address') ?></th> <!-- newly added -->
					<th><?= translate('drop address') ?></th> <!-- newly added -->
					<th><?= translate('status') ?></th> <!-- newly added -->
					<th><?= translate('distance traveled') ?></th> <!-- newly added -->
					<th><?= translate('discounts') ?></th> <!-- newly added -->
					<th><?= translate('coupon code') ?></th> <!-- newly added -->
					<th><?= translate('description') ?></th><!-- newly added -->
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>01</td>
					<td>01-01-2025</td>
					<td>Manish Sonawane</td>
					<td>02-01-2025</td>
					<td>Govind Nagar, Nashik</td>
					<td>Suchita Nagar, Nashik</td>
					<td>Pending</td>
					<td>230m</td>
					<td>10</td>
					<td>MIXCODE07</td>
					<td>First Order Of the Platform.</td>
				</tr>
			</tbody>
		</table>

	</div>
	<div class="booking-table-footer"></div>
</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>

<!-- <script>
	let bookingListTable = false;
	bookingListTable = $('#booking-table').DataTable({
		data: {},
		// columns: [{
		// 		data: 'bok_id',
		// 		render: function(data, type, row, meta) {
		// 			// return `<div class="text-start">
		// 			// 		<input type="checkbox" class="multi-check-item form-check-input mx-2" name="bok_id[]" value="${row.bok_id}">
		// 			// 	</div>`;
		// 			return row.bok_id;
		// 		}
		// 	},
		// 	{
		// 		data: 'bok_created',
		// 		render: function(data, type, row, meta) {
		// 			return new Date(row.bok_created).getFormated('dd mmm yyyy');
		// 		}
		// 	},
		// 	{
		// 		data: 'bok_delivery_date',
		// 		render: function(data, type, row, meta) {
		// 			return new Date(row.bok_delivery_date).getFormated('dd mmm yyyy');
		// 		}
		// 	},
		// 	{
		// 		data: 'cus_name',
		// 		render: function(data, type, row, meta) {
		// 			return `<strong class="cursor-pointer link-primary" onclick="viewBooking(${row.bok_id})">${row.cus_name}</strong>`;
		// 		}
		// 	},
		// 	{
		// 		data: 'bok_qty'
		// 	},
		// 	{
		// 		data: 'bok_total_amount'
		// 	},
		// 	{
		// 		data: 'bok_advance_amount',
		// 		render: function(data, type, row, meta) {
		// 			return Number(row.bok_advance_amount).toFixed(2);
		// 		}
		// 	},
		// 	{
		// 		data: 'bok_balance_amount',
		// 		render: function(data, type, row, meta) {
		// 			return Number(row.bok_balance_amount).toFixed(2);
		// 		}
		// 	},
		// 	{
		// 		data: 'bok_received_amount',
		// 		render: function(data, type, row, meta) {
		// 			return Number(row.bok_received_amount).toFixed(2);
		// 		}
		// 	},
		// 	{
		// 		data: 'bok_status_lang'
		// 	},
		// 	{
		// 		data: 'bok_id',
		// 		render: function(data, type, row, meta) {
		// 			if (row.bok_status != 'delivered') {
		// 				return `<div class="dropdown">
		// 					<button class="btn py-0 px-2 border-0" type="button" data-bs-toggle="dropdown">
		// 						<i class="bi-three-dots fs-3"></i>
		// 					</button>
		// 					<ul class="dropdown-menu dropdown-menu-end">
		// 						<li>
		// 							<button class="dropdown-item text-primary" onclick="editBooking(${row.bok_id})">
		// 								<i class="bi-pencil-square me-1 align-middle"></i> ${translate('update_booking')}
		// 							</button>
		// 						</li>
		// 						<li>
		// 							<button class="dropdown-item text-success" onclick="deliverBooking(${row.bok_id})">
		// 								<i class="bi-box-seam me-1 align-middle"></i> ${translate('deliver_booking')}
		// 							</button>
		// 						</li>
		// 						<li>
		// 							<button class="dropdown-item text-danger" onclick="deleteBooking(${row.bok_id})">
		// 								<i class="bi-trash me-1 align-middle"></i> ${translate('delete_booking')}
		// 							</button>
		// 						</li>
		// 					</ul>
		// 				</div>`;
		// 			} else {
		// 				return '';
		// 			}
		// 		}
		// 	}
		// ],
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
			$('.booking-table-footer').append($('#booking-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
			$('.dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
			$('.booking-table-search').on('input', function () {
				bookingListTable.search(this.value).draw();
			});
			bookingListTable.buttons().container().find('.btn-secondary').removeClass('btn-secondary');
			bookingListTable.buttons().container().appendTo($('.export-buttons'));
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
</script> -->


<script>
	$(document).ready(function () {
		let bookingListTable = $('#booking-table').DataTable({
			lengthChange: true,
			order: [[1, 'desc'], [0, 'desc']],
			initComplete: function (settings, json) {
				$('.dataTables_filter').hide();
				$('.booking-table-footer').append($('#booking-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
				$('.dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
				$('.booking-table-search').on('input', function () {
					bookingListTable.search(this.value).draw();
				});
				bookingListTable.buttons().container().find('.btn-secondary').removeClass('btn-secondary');
				bookingListTable.buttons().container().appendTo($('.export-buttons'));
			},
			buttons: [
				{
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
				}
			]
		});

		let data = [
			{
				order_no: "01",
				order_date: "01-01-2025",
				order_by: "Manish Sonawane",
				delivery_date: "02-01-2025",
				pickup_address: "Govind Nagar, Nashik",
				drop_address: "Suchita Nagar, Nashik",
				status: "Pending",
				distance: "230m",
				discounts: "10",
				coupon_code: "MIXCODE07",
				description: "First Order Of the Platform."
			}
		];

		data.forEach(row => {
			bookingListTable.row.add([
				row.order_no,
				row.order_date,
				row.order_by,
				row.delivery_date,
				row.pickup_address,
				row.drop_address,
				row.status,
				row.distance,
				row.discounts,
				row.coupon_code,
				row.description
			]).draw();
		});
	});

</script>