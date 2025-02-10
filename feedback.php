<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					Feedbacks </h1>
			</div>
			<!-- End Col -->
			<!-- <div class="col-auto">
					<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBill()">
						<i class="bi-plus-circle me-1"></i>
						Add New					</a>
				</div> -->
			<!-- End Col -->
		</div>
		<!-- End Row -->
	</div>
	<!-- End Page Header -->
	<div class="billing-table-filters">
		<div class="row g-3">
			<div class="col-12 col-md-3">
				<div class="input-group input-group-sm">
					<div class="input-group-text">
						<i class="bi-search"></i>
					</div>
					<input type="search" class="form-control billing-table-search" placeholder="Search here">
				</div>
			</div>

			<!-- <div class="col-12 col-md-6 offset-md-3">
				<div class="d-flex align-items-center gap-2">
					<button class="btn btn-sm btn-secondary ms-md-auto" data-bs-toggle="modal" data-bs-target="#filterModal">
						Filter <i class="bi bi-funnel-fill"></i>
					</button>
					<div class="export-buttons"></div>
				</div>
			</div> -->
		
		</div>
	</div>
	<div class="table-responsive">
		<table id="billing-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light" align="left">
				<tr>
					<th>Sr.No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>Feedback</th>
					<th>Rating</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>1</td>
					<td>Aditya Mahajan</td>
					<td>aditya.mahajan.in@gmail.com</td>
					<td>9765783665</td>
					<td>This is demo feedback from a developer</td>
					<td>5</td>
					<td>
						<a href="" class="btn btn-sm btn-primary">Delete</a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
	<div class="billing-table-footer"></div>
</div>
<div class="modal fade" id="filterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="filterModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content shadow border">
			<div class="modal-header">
				<h5 class="modal-title" id="filterModalLabel">Filter</h5>
			</div>
			<div class="modal-body py-3">
				<form class="row g-3" id="filter-form">
					<div class="col-12 col-md-6">
						<label class="form-label">
							Filter by Customers </label>
						<select class="form-select form-select-sm" id="filter-customer" name="cus_name">
							<option value="" selected>All</option>>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">
							Filter by Type </label>
						<select class="form-select form-select-sm" name="type">
							<option value="" selected>All</option>
							<option value="Invoice">Invoice</option>
							<option value="Quotation">Quotation</option>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">
							Filter by Payment mode </label>
						<select class="form-select form-select-sm" name="paymode">
							<option value="" selected>All</option>
							<option value="Cash">Cash</option>
							<option value="UPI">UPI</option>
							<option value="NEFT">NEFT</option>
							<option value="RTGS">RTGS</option>
							<option value="Other">Other</option>
							<option value="Unpaid">Unpaid</option>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">
							Filter by Payment status </label>
						<select class="form-select form-select-sm" name="status">
							<option value="" selected>All</option>
							<option value="Paid">Paid</option>
							<option value="Unpaid">Unpaid</option>
							<option value="Quotation">Quotation</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" onclick="clearAllFilters()" class="btn btn-sm btn-outline-danger me-auto"
					data-bs-dismiss="modal">Clear all filters</button>
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="filter-form" class="btn btn-sm btn-primary">Apply Filters</button>
			</div>
		</div>
	</div>
</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>