<?php require_once __DIR__."/header.php"?>
<div class="content container-fluid">
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					Attendance				</h1>
			</div>
			<!-- <div class="col-auto">
				<form action="" id="attendance-search-form">
					<div class="input-group input-group-sm">
						<a class="btn btn-success" href="attendance">Todays</a>
						<input type="text" name="date" class="form-control date-picker" value="2023-04-14">
						<button class="btn btn-primary">Search</button>
					</div>
				</form>
			</div> -->
		</div>
	</div>
	<div>
		<form method="POST">
			<input type="hidden" name="at_date" value="2023-04-14">
						<div class="fs-3 bg-light border px-2 py-3 text-center mb-2 rounded-1 shadow-sm">
				April - 2023			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-nowrap table-align-middle table-col-1-fixed-start shadow-end table-col-2-fixed-start-offset-1">
					<thead class="thead-light" align="center">
						<tr>
							<th rowspan="2" class="fs-5">Sr.No.</th>
							<th rowspan="2" class="text-start fs-5">
								Partner name							</th>
														<th colspan="3" class="">
								<div class="fs-5">
									Monday								</div>
								<div>
									10 Apr 2023								</div>
							</th>
														<th colspan="3" class="">
								<div class="fs-5">
									Tuesday								</div>
								<div>
									11 Apr 2023								</div>
							</th>
														<th colspan="3" class="">
								<div class="fs-5">
									Wednesday								</div>
								<div>
									12 Apr 2023								</div>
							</th>
														<th colspan="3" class="">
								<div class="fs-5">
									Thursday								</div>
								<div>
									13 Apr 2023								</div>
							</th>
														<th colspan="3" class="bg-primary bg-opacity-25">
								<div class="fs-5">
									Friday								</div>
								<div>
									14 Apr 2023								</div>
							</th>
														<th colspan="3" class="">
								<div class="fs-5">
									Saturday								</div>
								<div>
									15 Apr 2023								</div>
							</th>
														<th colspan="3" class="">
								<div class="fs-5">
									Sunday								</div>
								<div>
									16 Apr 2023								</div>
							</th>
													</tr>
						<tr>
														<th class="">Absent</th>
							<th class="">Present</th>
							<th class="">Paid Leave</th>
														<th class="">Absent</th>
							<th class="">Present</th>
							<th class="">Paid Leave</th>
														<th class="">Absent</th>
							<th class="">Present</th>
							<th class="">Paid Leave</th>
														<th class="">Absent</th>
							<th class="">Present</th>
							<th class="">Paid Leave</th>
														<th class="bg-primary bg-opacity-25">Absent</th>
							<th class="bg-primary bg-opacity-25">Present</th>
							<th class="bg-primary bg-opacity-25">Paid Leave</th>
														<th class="">Absent</th>
							<th class="">Present</th>
							<th class="">Paid Leave</th>
														<th class="">Absent</th>
							<th class="">Present</th>
							<th class="">Paid Leave</th>
													</tr>
					</thead>
					<tbody align="center">
																	</tbody>
					<tfoot class="thead-light">
						<tr>
							<th class="border-end-0"></th>
							<th class="border-start-0"></th>
														<th colspan="3" class="">
															</th>
														<th colspan="3" class="">
															</th>
														<th colspan="3" class="">
															</th>
														<th colspan="3" class="">
															</th>
														<th colspan="3" class="bg-primary bg-opacity-25">
															</th>
														<th colspan="3" class="">
															</th>
														<th colspan="3" class="">
															</th>
													</tr>
					</tfoot>
				</table>
			</div>
		</form>
	</div>
</div>
<script>
	window.addEventListener('load', () => {
		let inputs = document.querySelector('.date-picker');
		if (inputs) {
			flatpickr(inputs, {
				dateFormat: 'Y-m-d',
				maxDate: new Date()
			});
		}
	});
</script>
<?php require_once __DIR__.'/footer.php' ?>