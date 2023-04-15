<?php require_once __DIR__."/header.php"?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					Users				</h1>
			</div>
							<!-- End Col -->
				<!-- <div class="col-auto">
					<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addUser()">
						<i class="bi-plus-circle me-1"></i>
						Add New					</a>
				</div> -->
				<!-- End Col -->
					</div>
		<!-- End Row -->
	</div>
	<!-- End Page Header -->
	<div class="users-table-filters">
		<div class="row g-3">
			<div class="col-12 col-md-3">
				<div class="input-group input-group-sm">
					<div class="input-group-text">
					  <i class="bi-search"></i>
					</div>
					<input type="search" class="form-control users-table-search" placeholder="Search here">
				</div>
			</div>
			<div class="col-12 col-md-6 offset-md-3">
				<div class="d-flex align-items-center gap-2">
					<span class="ms-md-auto">User role</span>
					<div>
						<select class="form-select form-select-sm" onchange="usersListTable.column(2).search(this.value).draw()">
							<option value="" selected>All</option>
														<option value="Admin">Admin</option>
							<option value="Staff">Staff</option>
						</select>
					</div>
					<div class="export-buttons"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table id="users-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light" align="left">
				<tr>
					<th>id</th>
					<th>User name</th>
					<th>User role</th>
					<th>Mobile number</th>
					<th>Email id</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
	<div class="users-table-footer"></div>
</div>
<!-- End Content -->
<?php require_once __DIR__.'/footer.php' ?>