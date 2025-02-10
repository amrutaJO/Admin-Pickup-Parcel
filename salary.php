<?php require_once __DIR__."/header.php"?>
<div class="content container-fluid">
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="page-header-title">
					Salary				</h1>
			</div>
			<div class="col-auto">
				<button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#selectSalaryMonth">Change Month</button>
			</div>
		</div>
	</div>
	<div>
								<div class="fs-3 bg-light border px-2 py-3 text-center mb-2 rounded-1 shadow-sm">
			<div>April - 2023</div>
			<div class="small">
				<small>[01 Apr 2023 - 30 Apr 2023]</small>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-nowrap table-align-middle table-col-1-fixed-start shadow-end table-col-2-fixed-start-offset-1">
				<thead class="thead-light" align="center">
					<tr>
						<th>Sr.No.</th>
						<th class="text-start">Partner name</th>
																		<th>01</th>
																								<th>02</th>
																								<th>03</th>
																								<th>04</th>
																								<th>05</th>
																								<th>06</th>
																								<th>07</th>
																								<th>08</th>
																								<th>09</th>
																								<th>10</th>
																								<th>11</th>
																								<th>12</th>
																								<th>13</th>
																								<th>14</th>
																								<th>15</th>
																								<th>16</th>
																								<th>17</th>
																								<th>18</th>
																								<th>19</th>
																								<th>20</th>
																								<th>21</th>
																								<th>22</th>
																								<th>23</th>
																								<th>24</th>
																								<th>25</th>
																								<th>26</th>
																								<th>27</th>
																								<th>28</th>
																								<th>29</th>
																								<th>30</th>
																		<th class="text-bg-danger">Absent</th>
						<th class="text-bg-success">Present</th>
						<th class="text-bg-primary">Paid Leave</th>
						<th class="text-bg-secondary">Per day salary</th>
						<th class="text-bg-dark">
							<div>Total Salary</div>
							<div class="small fw-normal">
								<small>(Present + Paid Leave) x Per day salary</small>
							</div>
						</th>
						<th class="text-bg-warning">Advance / Borrowing</th>
						<th class="text-bg-success">
							<div>Total payable</div>
							<div class="small fw-normal">
								<small>(Total Salary - Advance)</small>
							</div>
						</th>
					</tr>
				</thead>
				<tbody align="center">
														</tbody>
			</table>
		</div>
		<div class="d-flex justify-content-center gap-3 my-2">
			<span class="px-3 rounded-1 text-bg-success">P - Present</span>
			<span class="px-3 rounded-1 text-bg-danger">A - Absent</span>
			<span class="px-3 rounded-1 text-bg-primary">PL - Paid Leave</span>
		</div>
	</div>
</div>
<div class="modal fade" id="selectSalaryMonth" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="selectSalaryMonthLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="selectSalaryMonthLabel">Change Month</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="salary-month-change-form">
					<div class="col-12 col-md-6">
						<label class="form-label">Select Month</label>
						<select class="form-select form-select-sm" name="month" required>
							<option value="">Select</option>
														<option value="01" >January</option>
														<option value="02" >February</option>
														<option value="03" >March</option>
														<option value="04" selected>April</option>
														<option value="05" >May</option>
														<option value="06" >June</option>
														<option value="07" >July</option>
														<option value="08" >August</option>
														<option value="09" >September</option>
														<option value="10" >October</option>
														<option value="11" >November</option>
														<option value="12" >December</option>
													</select>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">Select Year</label>
						<select class="form-select form-select-sm" name="year" required>
							<option value="">Select</option>
							 
							<option value="2021" >2021</option>
							 
							<option value="2022" >2022</option>
							 
							<option value="2023" selected>2023</option>
													</select>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="salary-month-change-form" class="btn btn-sm btn-primary">Change</button>
			</div>
		</div>
	</div>
</div>
<?php require_once __DIR__.'/footer.php' ?>