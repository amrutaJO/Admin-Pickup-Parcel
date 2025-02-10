<?php require_once __DIR__."/header.php"?>
<div class="content container-fluid">
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					Advance / Borrowing				</h1>
			</div>
							<!-- End Col -->
				<div class="col-auto">
					<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addEmployeeAdvance()">
						<i class="bi-plus-circle me-1"></i>
						Give an advance / borrowing					</a>
				</div>
				<!-- End Col -->
					</div>
		<!-- End Row -->
	</div>
	<!-- End Page Header -->
	<div class="advance-table-filters">
		<div class="row g-3">
			<div class="col-12 col-md-3">
				<div class="input-group input-group-sm">
					<div class="input-group-text">
					  <i class="bi-search"></i>
					</div>
					<input type="search" class="form-control advance-table-search" placeholder="Search here">
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
		<table id="advance-table" class="table table-bordered table-nowrap table-align-middle">
			<thead class="thead-light" align="left">
				<tr>
					<th>Given date</th>
					<th>Partner name</th>
					<th>Given amount</th>
					<th>Taken for what</th>
					<!-- <th>Advance amount deducted</th> -->
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
	<div class="advance-table-footer"></div>
</div>
<!-- End Content -->
<?php require_once __DIR__.'/footer.php' ?>