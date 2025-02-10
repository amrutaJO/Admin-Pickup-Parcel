<!-- Footer -->
<form method="POST" id="language-change-form" class="d-none">
	<input type="hidden" name="change_lang" value="">
	<input type="hidden" name="language" value="en">
</form>
<div class="footer">
	<div class="row justify-content-between align-items-center">
		<div class="col-12">
			<div class="d-flex justify-content-end">
				<!-- List Separator -->
				<ul class="list-inline list-separator">
					<li class="list-inline-item">
						<?= translate('title') ?> |
						<span><?= translate('paarsh') ?> &copy; 2025</span>
					</li>
				</ul>
				<!-- End List Separator -->
			</div>
		</div>
		<!-- End Col -->
	</div>
	<!-- End Row -->
</div>
<!-- End Footer -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Activity -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream"
	aria-labelledby="offcanvasActivityStreamLabel">
	<div class="offcanvas-header">
		<h4 id="offcanvasActivityStreamLabel" class="mb-0"><?= translate('daily_activity') ?></h4>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<!-- Step -->
		<ul class="step step-icon-sm step-avatar-sm">
		</ul>
		<!-- End Step -->
		<h5 class="text-center text-muted">No Activities performed yet.</h5>
	</div>
</div>
<!-- End Activity -->
<!-- All Modals -->
<div class="modal fade" id="billingAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="billingAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="billingAddModalLabel">Add new bill</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-3">

				<form action="" class="row g-3" id="billing-form">
					<div class="col-12 col-md-9">
						<label for="" class="form-label required">Select products</label>
						<div class="table-responsive">
							<table class="table table-borderless table-thead-bordered table-nowrap table-align-middle">
								<thead align="center">
									<tr>
										<th>#</th>
										<th class="text-start" width="20%">Product</th>
										<th>Lot No.</th>
										<th>Quantity</th>
										<th>Selling price</th>
										<th>Discount</th>
										<th>Taxes</th>
										<th>Amount</th>
										<th></th>
									</tr>
								</thead>
								<tbody align="center">
									<tr class="billing-product">
										<td>1</td>
										<td class="text-start" width="20%">
											<input type="hidden" name="bds_st_id[]" value="">
											<select name="bds_pro_id[]" class="form-select form-select-sm" required
												onchange="findBillProductStockPrice(this)">
												<option value="" pro-stock-id="" pro-gst="0" pro-gst-included="0">Select
													product</option>
											</select>
										</td>
										<td>
											<input type="text" name="bds_pro_lot_no[]"
												class="form-control form-control-sm text-center"
												onfocus="this.select()">
										</td>
										<td>
											<input type="text" name="bds_pro_qty[]"
												class="form-control form-control-sm text-center" placeholder="0"
												required oninput="allowType(event, 'number'),calcBillTotal()"
												onfocus="this.select()">
										</td>
										<td>
											<input type="text" name="bds_pro_rate[]"
												class="form-control form-control-sm text-center" placeholder="0.00"
												required oninput="allowType(event, 'decimal', 2),calcBillTotal()"
												onfocus="this.select()">
										</td>
										<td>
											<div class="input-group input-group-sm flex-nowrap">
												<input type="text" name="bds_discount[]"
													class="form-control text-center" placeholder="0.00"
													oninput="allowType(event, 'decimal', 2),calcBillTotal()"
													onfocus="this.select()">
												<select class="form-control bill-pro-disc px-0 text-center"
													name="bds_discount_isflat[]" onchange="calcBillTotal()">
													<option value="1">₹</option>
													<option value="0">%</option>
												</select>
											</div>
										</td>
										<td>
											<input type="text" name="bds_taxes[]"
												class="bill-pro-taxes form-control form-control-sm text-center"
												placeholder="0.00" readonly tabindex="-1">
										</td>
										<td>
											<input type="text" name="bds_subtotal[]"
												class="bill-pro-subtotal form-control form-control-sm text-center"
												placeholder="0.00" readonly tabindex="-1">
										</td>
										<td></td>
									</tr>
								</tbody>
								<tfoot align="center">
									<tr>
										<th colspan="8">
											<a href="javascript:;" class="link-primary" onclick="cloneBillProduct()">
												<i class="bi-plus-circle-fill me-1"></i> Add product </a>
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>

					<div class="col-12 col-md-3 border-start">
						<div class="row g-3">
							<div class="col-12">
								<input type="hidden" name="billing_from" value="new">
								<input type="hidden" name="bill_bok_id" value="">
								<input type="hidden" id="billing-form-action" name="add_billing" value="">
								<input type="hidden" id="billing-form-type" name="bill_type" value="">
								<label class="form-label required">Customer</label>
								<div class="input-group input-group-sm">
									<select name="bill_cus_id" class="form-select rounded-1" required>
										<option value="">Select customer</option>
									</select>
									<button class="btn p-0 border-0" type="button" onclick="addCustomer()">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total quantity</label>
								<input type="text" id="bill_qty" name="bill_qty" class="form-control form-control-sm"
									value="0" readonly tabindex="-1">
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total amount</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" name="bill_subtotal" id="bill_total_amount"
										class="form-control px-2" value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total discount</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" name="bill_discount" id="bill_discount_amount"
										class="form-control px-2" value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total tax</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" name="bill_taxes" id="bill_tax_amount" class="form-control px-2"
										value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 bill-fees-section">
								<label class="form-label">
									Extra charges <button class="btn border-0 p-0" onclick="addBillFees(this)"
										type="button">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</label>
								<div class="bill-fees-list row g-3"></div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total fees</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" name="bill_fees_total" id="bill_fees_amount"
										class="form-control px-2" value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Grand total</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" name="bill_total" id="bill_grand_total" class="form-control px-2"
										value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 bill-advance-section">
								<label class="form-label">
									Advance / Received amount <button class="btn border-0 p-0"
										onclick="addBillAdvance(this)" type="button">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</label>
								<div class="bill-advance-list row g-3"></div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Received amount</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" name="bill_paid" class="form-control px-2" value="0.00" readonly
										tabindex="-1">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Balance amount</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" id="bill_balance" class="form-control px-2" value="0.00" readonly
										tabindex="-1">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Payment mode</label>
								<select name="bill_paymod" class="form-select form-select-sm">
									<option value='cash'>Cash</option>
									<option value='upi'>UPI</option>
									<option value='neft'>NEFT</option>
									<option value='rtgs'>RTGS</option>
									<option value='other'>Other</option>
									<option value='unpaid'>Unpaid</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" name="quotation" form="billing-form" class="btn btn-sm btn-success"
					onclick="$('#billing-form-type').val('quotation')">Save Quotation</button>
				<button type="submit" name="invoice" form="billing-form" class="btn btn-sm btn-primary"
					onclick="$('#billing-form-type').val('invoice')">Save Bill</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="invoicePreviewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="invoicePreviewModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-body p-3">
				<iframe src="" frameborder="0" class="w-100 h-100" style="min-height: 75vh;"></iframe>
			</div>
			<div class="modal-footer pt-0 border-top-0 p-3">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-sm btn-primary invoice-print-btn">Print</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="receiveBillAmount" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="receiveBillAmountLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="receiveBillAmountLabel">Receive amount</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="receive-bill-amount-form">
					<div class="col-12 col-md-6">
						<input type="hidden" name="receive_bill_advance" value="">
						<label class="form-label">Bill No.</label>
						<div class="input-group input-group-sm">
							<span class="input-group-text px-2">
								<i class="bi bi-hash"></i>
							</span>
							<input type="text" name="bill_id" id="receive-bill-no" class="form-control px-2" value=""
								readonly tabindex="-1">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">Total amount</label>
						<div class="input-group input-group-sm">
							<span class="input-group-text px-2">
								<i class="bi bi-currency-rupee"></i>
							</span>
							<input type="text" name="bill_total" id="bill_grand_total" class="form-control px-2"
								value="0.00" readonly tabindex="-1">
						</div>
					</div>
					<div class="col-12 bill-advance-section">
						<label class="form-label">
							Advance / Received amount <button class="btn border-0 p-0" onclick="addBillAdvance(this)"
								type="button">
								<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
							</button>
						</label>
						<div class="bill-advance-list row g-3"></div>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">Received amount</label>
						<div class="input-group input-group-sm">
							<span class="input-group-text px-2">
								<i class="bi bi-currency-rupee"></i>
							</span>
							<input type="text" name="bill_paid" id="receive-bill-amount-received"
								class="form-control px-2" value="0.00" readonly tabindex="-1">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">Balance amount</label>
						<div class="input-group input-group-sm">
							<span class="input-group-text px-2">
								<i class="bi bi-currency-rupee"></i>
							</span>
							<input type="text" id="receive-bill-balance" class="form-control px-2" value="0.00" readonly
								tabindex="-1">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<label class="form-label">Payment mode</label>
						<select name="bill_paymod" class="form-select form-select-sm" required>
							<option value='cash'>Cash</option>
							<option value='upi'>UPI</option>
							<option value='neft'>NEFT</option>
							<option value='rtgs'>RTGS</option>
							<option value='other'>Other</option>
							<option value='unpaid'>Unpaid</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="receive-bill-amount-form" class="btn btn-sm btn-primary">Received</button>
			</div>
		</div>
	</div>
</div>


<!-- Vehicle master modal -->

  <div class="modal fade" id="vmasterAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="vmasterAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="vmasterAddModalLabel"> <?= translate('Add Vehicle Master') ?> </h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="vmaster-form">
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Manufacturer Name</label>
						<input type="text" class="form-control form-control-sm" placeholder="Manufacturer Name">

					</div>
					<div class="col-12 col-md-6">

						<label for="" class="form-label">Vehicle Color</label>
						<input type="text" class="form-control form-control-sm" placeholder="Color">

					</div>
					<div class="col-12 col-md-6">

						<label for="" class="form-label">Model Name</label>
						<input type="text" class="form-control form-control-sm" placeholder="Model Name">

					</div>

					<div class="col-12 col-md-6">

						<label for="" class="form-label">Manufacturing Year</label>
						<input type="number" class="form-control form-control-sm" min="4" max="4"
							placeholder="Manufacturing Year">

					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Seat Arrangement</label>
						<input type="number" class="form-control form-control-sm" placeholder="Seat Arrangement">
					</div>

					<div class="modal-footer p-0 border-top-0">
						<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" form="customer-form" class="btn btn-sm btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- End Vehicle master modal -->


<div class="modal fade" id="bookingAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="bookingAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="bookingAddModalLabel">Add New Order</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-3">
				<form action="" class="row g-3" id="booking-form">
					<div class="col-12 col-md-9">
						<label for="" class="form-label required">Select products</label>
						<table class="table table-borderless table-thead-bordered table-nowrap table-align-middle">
							<thead align="center">
								<tr>
									<th>#</th>
									<th class="text-start" width="20%">Product</th>
									<th class="text-start" width="20%">Variety</th>
									<th class="text-start" width="20%">Tray Size</th>
									<th>Sowing <br /> Destination</th>
									<th>Quantity</th>
									<th width="20%">Rate</th>
									<th>Amount</th>
									<th></th>
								</tr>
							</thead>
							<tbody align="center">
								<tr class="booking-product">
									<td>1</td>
									<td class="text-start" width="20%">
										<input type="hidden" name="bkd_id[]" value="">
										<select name="bkd_pro_id[]" class="form-select form-select-sm" required
											onchange="findProductStockPrice(this)">
											<option value="" pro-stock-id="">Select product</option>
											<option value="" pro-stock-id="">RI GOURD</option>
											<option value="" pro-stock-id="">BI GOURD</option>
											<option value="" pro-stock-id="">CHILLI</option>
										</select>
									</td>
									<td class="text-start" width="20%">
										<input type="hidden" name="" value="">
										<select name="" class="form-select form-select-sm" required>
											<option value="" pro-stock-id="">Select Variety</option>
											<option value="" pro-stock-id="">NAGA</option>
											<option value="" pro-stock-id="">N-48</option>
											<option value="" pro-stock-id="">US 730</option>
										</select>
									</td>
									<td class="text-start" width="20%">
										<input type="hidden" name="" value="">
										<select name="" class="form-select form-select-sm" required>
											<option value="" pro-stock-id="">Select Tray</option>
											<option value="" pro-stock-id="">125</option>
											<option value="" pro-stock-id="">60 GIFFY</option>
											<option value="" pro-stock-id="">70</option>
										</select>
									</td>
									<td class="text-start" width="20%">
										<input type="text" class="form-control form-control-sm text-center" name=""
											value="">
									</td>
									<td>
										<input type="text" name="bkd_pro_qty[]"
											class="form-control form-control-sm text-center" placeholder="0" required
											oninput="allowType(event, 'number'),calcBookingTotal()"
											onfocus="this.select()">
									</td>
									<td>
										<input type="text" name="bkd_pro_rate[]"
											class="form-control form-control-sm text-center" placeholder="0.00" required
											oninput="allowType(event, 'decimal', 2),calcBookingTotal()"
											onfocus="this.select()">
									</td>
									<td>
										<input type="text" class="form-control form-control-sm text-center"
											placeholder="0.00" readonly tabindex="-1">
									</td>
									<td></td>
								</tr>
							</tbody>
							<tfoot align="center">
								<tr>
									<th colspan="6">
										<a href="javascript:;" class="link-primary" onclick="cloneBookingProduct()">
											<i class="bi-plus-circle me-1"></i> Add product </a>
									</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="col-12 col-md-3 border-start">
						<div class="row g-3">
							<div class="col-12">
								<input type="hidden" id="booking-form-action" name="add_booking" value="">
								<label for="" class="form-label required">Farmer</label>
								<div class="input-group input-group-sm">
									<select name="bok_cus_id" class="form-select rounded-1" required>
										<option value="">Select Farmer</option>
										<option value="">Tushar (+91 9307362845)</option>
										<option value="">Tushar (+91 4282523183)</option>
									</select>
									<button class="btn p-0 border-0" type="button" onclick="addCustomer()">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</div>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Total quantity</label>
								<input type="text" id="bok_qty" class="form-control form-control-sm" value="0" readonly
									tabindex="-1">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Total amount</label>
								<input type="text" id="bok_total_amount" class="form-control form-control-sm" value="0"
									readonly tabindex="-1">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Advance amount</label>
								<input type="text" name="bok_advance_amount" class="form-control form-control-sm"
									value="0.00" oninput="allowType(event, 'decimal', 2),calcBookingTotal()"
									onfocus="this.select()">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Balance amount</label>
								<input type="text" id="bok_balance_amount" class="form-control form-control-sm" readonly
									tabindex="-1">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Delivery date</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text">
										<i class="bi-calendar-week"></i>
									</span>
									<input type="text" name="bok_delivery_date"
										class="js-flatpickr form-control form-control-sm"
										data-hs-flatpickr-options='{"dateFormat": "Y-m-d"}' required
										title="Required field">
								</div>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Due date</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text">
										<i class="bi-calendar-week"></i>
									</span>
									<input type="text" name="" class="js-flatpickr form-control form-control-sm"
										data-hs-flatpickr-options='{"dateFormat": "Y-m-d"}' required
										title="Required field">
								</div>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Remark</label>
								<textarea name="" class="form-control form-control-sm" rows="3"></textarea>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Home Delivery</label>
								<textarea name="" class="form-control form-control-sm" rows="3"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="booking-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<!-- Promo Code Modal -->

<div class="modal fade" id="promoCodeAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="promoCodeAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="" id=""></h5>
				<h5>Add New Promocode</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
				<form action="" class="row g-3" id="promoCode-form">
					<div class="col-12 col-md-6">
						<div class="row g-3">
							<div class="col-12">
								<input type="hidden" id="promoCode-form-action" name="add_promocode" value="">
								<label for="" class="form-label required">Promo Code</label>
								<input type="text" name="promo_code" class="form-control form-control-sm" required>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Discount Amount</label>
								<input type="tel" name="discount_amount" class="form-control form-control-sm" oninput="allowType(event, 'mobile')">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Max Usage ( Total )</label>
								<input type="number" name="max_usage_total" class="form-control form-control-sm">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Max Usage ( Per Customer )</label>
								<input type="number" name="max_usage_user" class="form-control form-control-sm">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="row g-3">
							<div class="col-12">
								<label for="" class="form-label">Type</label>
								<select name="promo_type" class="form-control form-control-sm">
									<option value="flat">Flat Off</option>
									<option value="percent">Percent Off</option>
								
								</select>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Short Description</label>
								 <input type="text" name="short_discription" class="form-control form-control-sm" id="">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Long Description</label>
								<textarea name="long_discription" class="form-control form-control-sm" rows="5"></textarea>
							</div>

						</div>
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Start Date</label>
						<input type="date" class="form-control form-control-sm" name="" id="">
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Expiry Date</label>
						<input type="date" class="form-control form-control-sm" name="" id="">
					</div>
				</form>


			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="customer-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<!-- End Of Promo Code Modal -->


<div class="modal fade" id="expenseAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="expenseAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="expenseAddModalLabel">Add new expense</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="expense-form">
					<div class="col-12 col-md-6">
						<div class="row g-3">
							<div class="col-12">
								<label for="" class="form-label required">Given to whom</label>
								<input type="text" name="exp_to" class="form-control form-control-sm" required
									title="Required field" list="exp-to-list" autocomplete="off">
								<datalist id="exp-to-list">
								</datalist>
							</div>
							<div class="col-12">
								<input type="hidden" id="expense-form-action" name="add_expense" value="">
								<input type="hidden" name="exp_type" value="expense">
								<label for="" class="form-label required">Expense date</label>
								<!-- Flatpickr -->
								<div class="input-group input-group-sm">
									<span class="input-group-text">
										<i class="bi-calendar-week"></i>
									</span>
									<input type="text" name="exp_date" class="js-flatpickr form-control"
										placeholder="Expense date" data-hs-flatpickr-options='{
											 "dateFormat": "Y-m-d"
										   }' required value="2023-04-14" title="Required field">
								</div>
								<!-- End Flatpickr -->
							</div>
							<div class="col-12">
								<label for="" class="form-label required">Expense amount</label>
								<input type="text" name="exp_amount" class="form-control form-control-sm" required
									oninput="allowType(event, 'decimal', 2)" title="Required field">
							</div>
							<div class="col-12">
								<label for="" class="form-label required">Expense for</label>
								<input type="text" name="exp_for" class="form-control form-control-sm" required
									title="Required field" list="exp-for-list" autocomplete="off">
								<datalist id="exp-for-list">
								</datalist>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="row g-3">
							<div class="col-12">
								<label for="" class="form-label">Expense payment mode</label>
								<input type="text" name="exp_paymode" class="form-control form-control-sm">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Expense description</label>
								<textarea name="exp_desc" class="form-control form-control-sm" rows="9"></textarea>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="expense-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="purchaseAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="purchaseAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="purchaseAddModalLabel">Add new purchase</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-3">
				<form action="" class="row g-3" id="purchase-form">
					<div class="col-12 col-md-9">
						<label class="form-label required">Select products</label>
						<table class="table table-borderless table-thead-bordered table-nowrap table-align-middle">
							<thead align="center">
								<tr>
									<th>#</th>
									<th class="text-start" width="30%">Product</th>
									<th>Lot No.</th>
									<th>Quantity</th>
									<th>Cost price</th>
									<th>Discount</th>
									<th>Amount</th>
									<th></th>
								</tr>
							</thead>
							<tbody align="center">
								<tr class="purchase-product">
									<td>1</td>
									<td class="text-start" width="30%">
										<select name="pod_pro_id[]" class="form-select form-select-sm" required
											onchange="findPurchaseProductStockPrice(this)">
											<option value="" pro-gst="0" pro-gst-included="0">Select product</option>
										</select>
									</td>
									<td>
										<input type="text" name="pod_pro_lot[]"
											class="form-control form-control-sm text-center" onfocus="this.select()">
									</td>
									<td>
										<input type="text" name="pod_pro_qty[]"
											class="form-control form-control-sm text-center" placeholder="0" required
											oninput="allowType(event, 'number'),calcPurchaseTotal()"
											onfocus="this.select()">
									</td>
									<td>
										<input type="text" name="pod_pro_price[]"
											class="form-control form-control-sm text-center" placeholder="0.00" required
											oninput="allowType(event, 'decimal', 2),calcPurchaseTotal()"
											onfocus="this.select()">
									</td>
									<td>
										<div class="input-group input-group-sm">
											<input type="text" name="pod_pro_discount[]"
												class="form-control px-2 text-center" placeholder="0.00"
												oninput="allowType(event, 'decimal', 2),calcPurchaseTotal()"
												onfocus="this.select()">
											<select name="pod_pro_discount_isflat[]"
												class="form-control px-0 text-center" onchange="calcPurchaseTotal()">
												<option value="1">₹</option>
												<option value="0">%</option>
											</select>
										</div>
									</td>
									<td>
										<input type="text"
											class="po-pro-subtotal form-control form-control-sm text-center"
											placeholder="0.00" readonly tabindex="-1">
									</td>
									<td></td>
								</tr>
							</tbody>
							<tfoot align="center">
								<tr>
									<th colspan="8">
										<a href="javascript:;" class="link-primary" onclick="clonePurchaseProduct()">
											<i class="bi-plus-circle-fill me-1"></i> Add product </a>
									</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="col-12 col-md-3 border-start">
						<div class="row g-3">
							<div class="col-12">
								<input type="hidden" id="purchase-form-action" name="add_purchase" value="">
								<label class="form-label required">Supplier</label>
								<div class="input-group input-group-sm">
									<select name="po_sup_id" class="form-select rounded-1" required>
										<option value="">Select supplier</option>
									</select>
									<button class="btn p-0 border-0" type="button" onclick="addSupplier()">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total quantity</label>
								<input type="text" id="po_qty" name="po_qty" class="form-control form-control-sm"
									value="0" readonly tabindex="-1">
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total amount</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" id="po_subtotal" name="po_subtotal" class="form-control px-2"
										value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total discount</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" id="po_discount_amount" name="po_discount"
										class="form-control px-2" value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total tax</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" id="po_tax_amount" name="po_taxes" class="form-control px-2"
										value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 po-fees-section">
								<label class="form-label">
									Extra charges <button class="btn border-0 p-0" onclick="addFees(this)"
										type="button">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</label>
								<div class="po-fees-list row g-3"></div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Total fees</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" id="po_fees_total" name="po_fees_total" class="form-control px-2"
										value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Grand total</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text px-2">
										<i class="bi bi-currency-rupee"></i>
									</span>
									<input type="text" id="po_total" name="po_total" class="form-control px-2"
										value="0.00" readonly tabindex="-1">
								</div>
							</div>
							<div class="col-12">
								<label class="form-label">Expected date</label>
								<div class="input-group input-group-sm">
									<span class="input-group-text">
										<i class="bi-calendar-week"></i>
									</span>
									<input type="text" name="po_expected_by" class="js-flatpickr form-control"
										data-hs-flatpickr-options='{"dateFormat": "Y-m-d"}' required
										title="Required field">
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="purchase-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="sowingAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="sowingAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="sowingAddModalLabel">Sowing</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-3">
				<form action="" class="row g-3" id="sowing-form">
					<div class="col-12 col-md-9">
						<label for="" class="form-label required">Select seeds & other raw material for sowing</label>
						<table
							class="table table-borderless table-thead-bordered table-nowrap table-align-middle table-col-last-ps-0">
							<thead align="center">
								<tr>
									<th>#</th>
									<th class="text-start" width="30%">Batch No.</th>
									<th>Lot No.</th>
									<th>Section</th>
									<th>No. of Pkt</th>
									<th>Unit</th>
									<th>Tray No.</th>
									<th>Tray size</th>
									<th>Total Tray</th>
								</tr>
							</thead>
							<tbody align="center">
								<tr class="sowing-product">
									<td>1</td>
									<td class="text-start" width="30%">
										<select name="" class="form-select form-select-sm" required
											onchange="findSowingProductStockPrice(this)">
											<option value="">Select product</option>
											<option value="">Taiwan-784/1</option>
											<option value="">SANIT/5</option>
										</select>
									</td>
									<td>
										<input type="text" name=""
											class="form-control w-120px form-control-sm text-center">
									</td>
									<td>
										<input type="text" class=" form-control form-control-sm text-center">
									</td>
									<td>
										<select class="form-control form-control-sm w-120px" name="" id="">
											<option value="none">Select</option>
											<option value="machine">5</option>
											<option value="manual">2.3</option>
										</select>
									</td>
									<td>
										<select class="form-control form-control-sm w-120px" name="" id="">
											<option value="none">Select</option>
											<option value="machine">3500N</option>
											<option value="manual">1500N</option>
										</select>
									</td>
									<td>
										<input type="text" class="w-70px form-control form-control-sm text-center"
											name="">
									</td>
									<td>
										<input type="text" class="w-70px form-control form-control-sm text-center"
											name="">
									</td>
									<td>
										<input type="text" class="form-control form-control-sm text-center" name="">
									</td>

									<td></td>
								</tr>
							</tbody>
							<tfoot align="center">
								<tr>
									<th colspan="7">
										<a href="javascript:;" class="link-primary" onclick="cloneSowingProduct()">
											<i class="bi-plus-circle-fill me-1"></i> Add product </a>
									</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="col-12 col-md-3 border-start">
						<div class="row g-3">
							<div class="col-12">
								<input type="hidden" id="sowing-form-action" name="add_sowing" value="">
								<label class="form-label required">Sowing Type</label>
								<div class="input-group input-group-sm">
									<select class="form-control form-control-sm w-120px" name="" id="">
										<option value="none">Select</option>
										<option value="machine">Machine</option>
										<option value="manual">Manual</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Average</label>
								<input type="text" class="form-control" readonly placeholder="0.00">
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Gross Total</label>
								<input type="text" class="form-control" readonly placeholder="0.00">
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Location</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-12 col-md-6">
								<label class="form-label">Bed No.</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-12">
								<label class="form-label">Germination %</label>
								<input type="text" class="form-control">
							</div>
							<div class="col-12">
								<label class="form-label">Crop Type</label>
								<select class="form-control" name="" id="">
									<option value="none">Select</option>
									<option value="machine">Good</option>
									<option value="manual">Bad</option>
								</select>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="productAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="productAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h4 class="modal-title" id="productAddModalLabel">Add new product</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="product-form">
					<div class="col-12 col-md-4">
						<div class="row g-3">
							<div class="col-12">
								<input type="hidden" id="product-form-action" name="add_product" value="">
								<label for="" class="form-label">Product name</label>
								<input type="text" name="pro_name" class="form-control form-control-sm" required
									onfocus="this.select()">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Unit</label>
								<div class="input-group input-group-sm">
									<select class="form-select rounded-1" name="pro_unit" id="product-units">
										<option value="">Select</option>
									</select>
									<button class="btn p-0 border-0" type="button"
										onclick="addUnitOption('#product-units', 'Unit')">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</div>
							</div>
							<div class="col-12">
								<label for="" class="form-label">HSN Code</label>
								<input type="text" name="pro_hsn" class="form-control form-control-sm"
									onfocus="this.select()">
							</div>
							<div class="col-12">
								<label for="" class="form-label">GST %</label>
								<input type="text" name="pro_gst" class="form-control form-control-sm mb-1"
									oninput="allowType(event, 'decimal', 2)" onfocus="this.select()">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="pro_gst_included" value="1"
										id="gst_included" checked>
									<label class="form-check-label" for="gst_included">Included</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="pro_gst_included" value="0"
										id="gst_excluded">
									<label class="form-check-label" for="gst_excluded">Excluded</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="row g-3">
							<div class="col-12">
								<label for="" class="form-label">Type</label>
								<div class="input-group input-group-sm">
									<select name="pro_type" class="form-select">
										<option value="product">Product</option>
										<option value="raw_material">Raw material</option>
										<option value="seed">Seed</option>
										<option value="internal">Internal</option>
									</select>
								</div>
							</div>
							<div class="col-12">
								<label for="pro_cat_id" class="form-label">Category</label>
								<div class="input-group input-group-sm">
									<select name="pro_cat_id" id="pro_cat_id" class="form-select rounded-1">
										<option value="">Select</option>
									</select>
									<button class="btn p-0 border-0" type="button" onclick="addCategory()">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</div>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Sub Category</label>
								<div class="input-group input-group-sm">
									<select name="pro_sc_id" class="form-select rounded-1">
										<option value="">Select</option>
									</select>
									<button class="btn p-0 border-0" type="button" onclick="addSubCategory()">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</div>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Brand</label>
								<div class="input-group input-group-sm">
									<select name="pro_br_id" class="form-select rounded-1">
										<option value="">Select</option>
									</select>
									<button class="btn p-0 border-0" type="button" onclick="addBrand()">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</div>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Suppliers</label>
								<div class="input-group input-group-sm">
									<select name="pro_sup_id" class="form-select rounded-1">
										<option value="">Select</option>
									</select>
									<button class="btn p-0 border-0" type="button" onclick="addSupplier()">
										<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="row g-3">
							<div class="col-12">
								<label for="" class="form-label">Opening Stock</label>
								<input type="text" name="pro_stock" class="form-control form-control-sm"
									oninput="allowType(event, 'number')" value="0" required onfocus="this.select()">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Cost price / Production cost</label>
								<input type="text" name="pro_cost_price" class="form-control form-control-sm"
									oninput="allowType(event, 'decimal', 2)" value="0.00" required
									onfocus="this.select()">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Selling price</label>
								<input type="text" name="pro_selling_price" class="form-control form-control-sm"
									oninput="allowType(event, 'decimal', 2)" value="0.00" onfocus="this.select()">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Low stock quantity</label>
								<input type="text" name="pro_lowstock" class="form-control form-control-sm"
									oninput="allowType(event, 'number')" onfocus="this.select()">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Max stock quantity</label>
								<input type="text" name="pro_maxstock" class="form-control form-control-sm"
									oninput="allowType(event, 'number')" onfocus="this.select()">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="product-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="categoryAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="categoryAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content shadow border">
			<div class="modal-header">
				<h4 class="modal-title" id="categoryAddModalLabel">Add new category</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="category-form">
					<div class="col-12">
						<input type="hidden" id="category-form-action" name="add_category">
						<label for="" class="form-label">Category name</label>
						<input type="text" name="cat_name" class="form-control">
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="category-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="subCategoryAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="subCategoryAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content shadow border">
			<div class="modal-header">
				<h4 class="modal-title" id="subCategoryAddModalLabel">Add new sub category</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="sub-category-form">
					<div class="col-12">
						<input type="hidden" id="sub-category-form-action" name="add_sub_category">
						<label for="" class="form-label">Category name</label>
						<select name="sc_cat_id" class="form-select rounded-1">
							<option value="">Select</option>
						</select>
					</div>
					<div class="col-12">
						<label for="" class="form-label">Sub category name</label>
						<input type="text" name="sc_name" class="form-control">
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="sub-category-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="brandAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="brandAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content shadow border">
			<div class="modal-header">
				<h4 class="modal-title" id="brandAddModalLabel">Add new brand</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="brand-form">
					<div class="col-12">
						<input type="hidden" id="brand-form-action" name="add_brand">
						<label for="" class="form-label">Brand name</label>
						<input type="text" name="br_name" class="form-control">
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="brand-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="supplierAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="supplierAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h4 class="modal-title" id="supplierAddModalLabel">Add new supplier</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="supplier-form">
					<div class="col-12 col-md-4">
						<input type="hidden" id="supplier-form-action" name="add_supplier" value="">
						<label for="" class="form-label">Supplier's business name</label>
						<input type="text" name="sup_store_name" class="form-control form-control-sm" required>
					</div>
					<div class="col-12 col-md-4">
						<label for="" class="form-label">Supplier's name</label>
						<input type="text" name="sup_name" class="form-control form-control-sm">
					</div>
					<div class="col-12 col-md-4">
						<label for="" class="form-label">Mobile number</label>
						<input type="text" name="sup_mobile" class="form-control form-control-sm"
							oninput="allowType(event, 'mobile', 10)">
					</div>
					<div class="col-12 col-md-4">
						<label for="" class="form-label">Email id</label>
						<input type="text" name="sup_email" class="form-control form-control-sm">
					</div>
					<div class="col-12 col-md-4">
						<label for="" class="form-label">GST Number</label>
						<input type="text" name="sup_gst" class="form-control form-control-sm"
							oninput="allowType(event, 'alfanum', 17, 'upper')">
					</div>
					<div class="col-12">
						<label for="" class="form-label">Address</label>
						<textarea name="sup_address" class="form-control form-control-sm"></textarea>
					</div>
					<div class="col-12">
						<label for="" class="form-label">Description</label>
						<textarea name="sup_desc" class="form-control form-control-sm"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="supplier-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="employeeAdvanceAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="employeeAdvanceAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="employeeAdvanceAddModalLabel">Give an advance / borrowing</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="advance-form">
					<div class="col-12 col-md-6">
						<div class="row g-3">
							<div class="col-12">
								<input type="hidden" id="advance-form-action" name="add_advance" value="">
								<label for="" class="form-label required">Given date</label>
								<input type="text" name="ead_date"
									class="form-control form-control-sm js-flatpickr w-100"
									data-hs-flatpickr-options='{"dateFormat": "Y-m-d"}'>
							</div>
							<div class="col-12">
								<label for="" class="form-label required">Poly House Type (only show on daily
									weiges)</label>
								<select name="ead_emp_id" class="form-control form-control-sm" required>
									<option value="">Poly House 1</option>
									<option value="">Poly House 2</option>
								</select>
							</div>
							<div class="col-12">
								<label for="" class="form-label required">Employee</label>
								<select name="ead_emp_id" class="form-control form-control-sm" required>
									<option value="">Select employee</option>
								</select>
							</div>
							<div class="col-12">
								<label for="" class="form-label required">Given amount</label>
								<input type="text" name="ead_amount" class="form-control form-control-sm"
									oninput="allowType(event, 'decimal', 2)">
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="">
							<label for="" class="form-label">Employee Type</label>
							<select id="empt" class="form-control form-control-sm">
								<option value="dailyweiges">Daily Weiges</option>
								<option value="staff">Staff</option>
							</select>
						</div>
						<label for="" class="form-label">Taken for what</label>
						<textarea name="ead_reason" class="form-control form-control-sm" rows="5"></textarea>
					</div>

				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="advance-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="employeeAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="employeeAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="employeeAddModalLabel">Add New employee</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<form action="" class="row g-3" id="employee-form">
					<div class="col-12 col-md-6">
						<div class="row g-3">

							<div class="col-12">
								<input type="hidden" id="employee-form-action" name="add_employee" value="">
								<label for="" class="form-label">Partner name</label>
								<input type="text" name="emp_name" class="form-control form-control-sm" required>
							</div>

							<div class="col-12">
								<label for="" class="form-label">Mobile number</label>
								<input type="tel" name="emp_mobile" class="form-control form-control-sm"
									oninput="allowType(event, 'mobile')">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Email id</label>
								<input type="email" name="emp_email" class="form-control form-control-sm">
							</div>

							<div class="col-12">
								<label for="" class="form-label">Partner Type</label>
								<select id="emptype" class="form-control form-control-sm">
									<option value="selectoption">Select Type</option>
									<option value="dailyweiges">Daily Weiges</option>
									<option value="staff">Staff</option>
								</select>
							</div>

							<div class="col-12">
								<label for="" class="form-label">Daily Services</label>
								<select id="emptype" class="form-control form-control-sm">
									<option value="selectoption">Yes</option>
									<option value="dailyweiges">No</option>
								</select>
							</div>

							<div class="col-12">
								<label for="" class="form-label">Account No</label>
								<input type="tel" name="emp_mobile" class="form-control form-control-sm"
									oninput="allowType(event, 'mobile')">
							</div>

							<div class="col-12">
								<input type="hidden" id="employee-form-action" name="add_employee" value="">
								<label for="bank_name" class="form-label">Bank Name</label>
								<input type="text" name="bank_name" class="form-control form-control-sm" required>
							</div>


						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="row g-3">

							<!-- <div class="col-12">
								<label for="" class="form-label required">Joining date</label>
								<input type="text" name="emp_joined" class="form-control form-control-sm js-flatpickr w-100" data-hs-flatpickr-options='{"dateFormat": "Y-m-d"}'>
							</div> -->

							<div class="col-12">
								<label for="" class="form-label">Gender</label>
								<select name="emp_gender" class="form-control form-control-sm">
									<option value="noshare">Don't Want To Share</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
							</div>
							<div class="col-12 d-none" id="deptstaff">
								<label for="" class="form-label">Department</label>
								<select name="" class="form-control form-control-sm">
									<option value="">D1</option>
									<option value="">D2</option>
								</select>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Address</label>
								<textarea name="emp_address" class="form-control form-control-sm" rows="5"></textarea>
							</div>

							<div class="col-12">
								<label for="" class="form-label">Outstation Services</label>
								<select id="emptype" class="form-control form-control-sm">
									<option value="selectoption">Yes</option>
									<option value="dailyweiges">No</option>
								</select>
							</div>

							<div class="col-12">
								<input type="hidden" id="employee-form-action" name="add_employee" value="">
								<label for="upi_id" class="form-label">UPI id</label>
								<input type="text" name="upi_id" class="form-control form-control-sm" required>
							</div>

							<div class="col-12">
								<input type="hidden" id="employee-form-action" name="add_employee" value="">
								<label for="bank_name" class="form-label">IFSC Code</label>
								<input type="text" name="bank_name" class="form-control form-control-sm" required>
							</div>

							<div class="col-12">
								<input type="hidden" id="employee-form-action" name="add_employee" value="">
								<label for="password" class="form-label">Password</label>
								<input type="password" name="password" class="form-control form-control-sm" required>
							</div>



						</div>
					</div>
					<div class="col-12 ">
						<div class="row">
							<div class="d-flex col-md-4 justify-content-between perdaymonth align-items-center">
								<input type="radio" class="d-none" name="salper" id="permonth" checked
									data-value="Month">
								<label class="px-3 py-2" for="permonth">
									Month
								</label>
								<input type="radio" class="d-none" name="salper" id="perday" data-value="Day">
								<label class="px-3 py-2" for="perday">
									Day
								</label>
							</div>
							<div class="col-md-8">
								<label for="" class="form-label" id="sal">Per <span id="salchange"></span>
									salary</label>
								<input type="text" name="emp_salary" class="form-control form-control-sm"
									oninput="allowType(event, 'number')">
							</div>
						</div>
					</div>
				</form>

			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="employee-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<!-- start of new Modal -->


<div class="modal fade" id="orderAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="orderAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="orderAddModalLabel">Add New Order</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="order-form">
					<div class="col-12 col-md-6">
						<div class="row g-3">

							<div class="col-12">
								<input type="hidden" id="order-form-action" name="add_order" value="">
								<label for="" class="form-label">User name</label>
								<input type="text" name="emp_name" class="form-control form-control-sm" required>
							</div>

							<div class="col-12">
								<label for="" class="form-label">Pickup Address</label>
								<textarea name="pick_address" class="form-control form-control-sm" rows="5"></textarea>
							</div>

							<div class="col-12">
								<label for="" class="form-label">Package Size</label>
								<select name="emp_gender" class="form-control form-control-sm">
									<option value="noshare">Small</option>
									<option value="noshare">Medium</option>
									<option value="noshare">Large</option>
									<option value="noshare">Extra Large</option>
								</select>
							</div>


						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="row g-3">

							<div class="col-12">
								<label for="" class="form-label">Package Type</label>
								<select name="emp_gender" class="form-control form-control-sm">
									<option value="noshare">Documents</option>
									<option value="male">Commercial Goods</option>
									<option value="male">Personal Items</option>
									<option value="male">Fragile Items</option>
									<option value="female">Perishable</option>
									<option value="other">Other</option>
								</select>
							</div>

							<div class="col-12">
								<label for="" class="form-label">Drop Address</label>
								<textarea name="drop_address" class="form-control form-control-sm" rows="5"></textarea>
							</div>

							<div class="col-12">
								<label for="" class="form-label">Discription</label>
								<textarea placeholder="Some Details ...." name="drop_address"
									class="form-control form-control-sm" rows="5"></textarea>
							</div>


							<!-- <div class="col-12">
								<label for="" class="form-label">Outstation Services</label>
								<select id="emptype" class="form-control form-control-sm">
									<option value="selectoption">Yes</option>
									<option value="dailyweiges">No</option>
								</select>
							</div>

							<div class="col-12">
								<input type="hidden" id="employee-form-action" name="add_employee" value="">
								<label for="upi_id" class="form-label">UPI id</label>
								<input type="text" name="upi_id" class="form-control form-control-sm" required>
							</div>

							<div class="col-12">
								<input type="hidden" id="employee-form-action" name="add_employee" value="">
								<label for="bank_name" class="form-label">IFSC Code</label>
								<input type="text" name="bank_name" class="form-control form-control-sm" required>
							</div>

							<div class="col-12">
								<input type="hidden" id="employee-form-action" name="add_employee" value="">
								<label for="password" class="form-label">Password</label>
								<input type="password" name="password" class="form-control form-control-sm" required>
							</div>
 -->




						</div>
					</div>

					<!-- <div class="col-12 ">
						<div class="row">
							<div class="d-flex col-md-4 justify-content-between perdaymonth align-items-center">
								<input type="radio" class="d-none" name="salper" id="permonth" checked
									data-value="Month">
								<label class="px-3 py-2" for="permonth">
									Month
								</label>
								<input type="radio" class="d-none" name="salper" id="perday" data-value="Day">
								<label class="px-3 py-2" for="perday">
									Day
								</label>
							</div>
							<div class="col-md-8">
								<label for="" class="form-label" id="sal">Per <span id="salchange"></span>
									salary</label>
								<input type="text" name="emp_salary" class="form-control form-control-sm"
									oninput="allowType(event, 'number')">
							</div>
						</div>
					</div> -->

				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="employee-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>



<!-- End new Modal -->

<div class="modal fade" id="customerAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="customerAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="customerAddModalLabel">Add New User</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
				<form action="" class="row g-3" id="customer-form">
					<div class="col-12 col-md-6">
						<div class="row g-3">
							<div class="col-12">
								<input type="hidden" id="customer-form-action" name="add_customer" value="">
								<label for="" class="form-label required">User name</label>
								<input type="text" name="cus_name" class="form-control form-control-sm" required>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Mobile number</label>
								<input type="tel" name="cus_mobile" class="form-control form-control-sm"
									oninput="allowType(event, 'mobile')">
							</div>
							<div class="col-12">
								<label for="" class="form-label">Email id</label>
								<input type="email" name="cus_email" class="form-control form-control-sm">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="row g-3">
							<div class="col-12">
								<label for="" class="form-label">Gender</label>
								<select name="cus_gender" class="form-control form-control-sm">
									<option value="noshare">Don't Want To Share</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
							</div>
							<div class="col-12">
								<label for="" class="form-label">Address</label>
								<textarea name="cus_address" class="form-control form-control-sm" rows="5"></textarea>
							</div>

						</div>
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">City</label>
						<select name="" class="form-control form-control-sm">
							<option value="nashik">Nashik</option>
							<option value="dindori">Mumbai</option>
							<option value="malegoan">Pune</option>
							<option value="other">Other</option>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">State</label>
						<select name="" class="form-control form-control-sm">
							<option value="nashik">Maharashtra</option>
							<option value="dindori">Gujarat</option>
							<option value="malegoan">Karnataka</option>
							<option value="other">Other</option>
						</select>
					</div>
				</form>

			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="customer-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="transportAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="transportAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="customerAddModalLabel">Add New Vehicle</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<form action="" class="row g-3" id="transport-form">
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Vehicle Name</label>
						<div class="input-group input-group-sm w-100">
							<select name="" class="form-control form-control-sm">
								<option value="">Select</option>
								<option value="yodha">Tata Yoddha</option>
								<option value="yodha">CB Shine</option>
								<option value="yodha">Pulsar 220</option>

							</select>
							<button class="btn p-0 border-0" type="button" onclick="addVehicle()">
								<i class="bi bi-plus-circle-fill p-1 ms-1 text-primary"></i>
							</button>
						</div>
					</div>

					<div class="col-12 col-md-6">

						<label for="" class="form-label">Vehicle Modal</label>
						<input type="text" class="form-control form-control-sm" readonly placeholder="Vehicle Modal">

					</div>
					<div class="col-12 col-md-6">

						<label for="" class="form-label">Vehicle Number</label>
						<input type="text" class="form-control form-control-sm" readonly placeholder="Vehicle Number">

					</div>

					<div class="col-12 col-md-6">

						<label for="" class="form-label">Driver Name</label>
						<input type="text" class="form-control form-control-sm" placeholder="Driver Name">

					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Driver Mobile Number</label>
						<input type="tel" class="form-control form-control-sm" placeholder="Contact Number">
					</div>

					<!-- <div class="col-12 col-md-6">
						<label for="" class="form-label">Batch No</label>
						<input type="tel" class="form-control form-control-sm" placeholder="Batch No">
					</div> -->


				</form>

			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="customer-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal modal-sm fade" id="vehicleAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="transportAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content border shadow-lg">
			<div class="modal-header">
				<h5 class="modal-title" id="customerAddModalLabel">Add New Vehicle</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="transport-form">
					<div class="col-12 ">
						<label for="" class="form-label">Vehicle Name</label>
						<input type="text" class="form-control form-control-sm" placeholder="Vehicle Name">
					</div>

					<div class="col-12 col-md-6">
						<label for="" class="form-label">Vehicle Type</label>
						<div class="input-group input-group-sm w-100">
							<select name="" class="form-control form-control-sm">
								<option value="yodha">Bike</option>
								<option value="yodha">Three-wheeler</option>
								<option value="yodha">Car</option>
								<option value="yodha">Pickup</option>
								<option value="yodha">Truck</option>

							</select>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<label for="" class="form-label">Vehicle No.</label>
						<input type="text" class="form-control form-control-sm" placeholder="Vehicle Number">
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Vehicle Modal</label>
						<input type="text" class="form-control form-control-sm" placeholder="Vehicle Modal">
					</div>

				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="customer-form" class="btn btn-sm btn-primary">Add</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="userAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="userAddModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h5 class="modal-title" id="userAddModalLabel">Add new user</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="user-form">
					<div class="col-12 text-danger" id="user-form-error" style="display: none;"></div>
					<div class="col-12 col-md-6">
						<input type="hidden" name="biz_id" value="2">
						<input type="hidden" id="user-form-action" name="add_user" value="">
						<label for="" class="form-label">First Name</label>
						<input type="text" name="u_fname" class="form-control form-control-sm" required>
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Last Name</label>
						<input type="text" name="u_lname" class="form-control form-control-sm" required>
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Mobile number</label>
						<input type="tel" name="u_mobile" class="form-control form-control-sm"
							oninput="allowType(event, 'mobile')">
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Email id</label>
						<input type="email" name="u_email" class="form-control form-control-sm">
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">User role</label>
						<select name="u_role" class="form-control form-control-sm">
							<option value="staff">Staff</option>
							<option value="admin">Admin</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="user-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="alertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content shadow border">
			<div class="modal-header">
				<div class="modal-title d-flex flex-column text-center w-100">
					<div class="alertIcon"></div>
					<h5 class="alertText"></h5>
				</div>
			</div>
			<div class="modal-footer border-top-0 justify-content-center gap-2">
				<button type="button" data-bs-dismiss="modal" class="btn btn-sm alertOkBtn btn-primary">OK</button>
			</div>
		</div>
	</div>
</div>

<!-- custom modal -->
<div class="modal fade" id="dispatchAddModal" data-bs-backdrop="static" data-bs-keyboard="false">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
		<div class="modal-content border shadow">
			<div class="modal-header">
				<h4 class="modal-title" id="dispatchAddModalLabel">Add new dispatch</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="row g-3" id="dispatch-form">
					<div class="col-12 col-md-4">
						<label for="" class="form-label">Batch No.</label>
						<select class="form-select form-select-sm" name="" id="">
							<option value="">Select</option>
							<option value="">1522/24 WEAK</option>
							<option value="">SUPER SHIGRA/5</option>
							<option value="">SAINT/95</option>
						</select>
					</div>
					<div class="col-12 col-md-4">
						<label for="" class="form-label">Vehicle No.</label>
						<input type="text" name="" class="form-control form-control-sm">
					</div>
					<div class="col-12 col-md-4">
						<label for="" class="form-label">Payment Type</label>
						<select class="form-select form-select-sm" name="" id="">
							<option value="">Select</option>
							<option value="">Cash</option>
							<option value="">Transport</option>
							<option value="">Credit</option>
						</select>
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Loaded Trays</label>
						<input type="text" name="sup_gst" class="form-control form-control-sm"
							oninput="allowType(event, 'alfanum', 17, 'upper')">
					</div>
					<div class="col-12 col-md-6">
						<label for="" class="form-label">Extra Tray</label>
						<input type="text" name="sup_gst" class="form-control form-control-sm"
							oninput="allowType(event, 'alfanum', 17, 'upper')">
					</div>
					<div class="col-12">
						<label for="" class="form-label">Remark</label>
						<input type="text" name="" class="form-control form-control-sm">
					</div>
				</form>
			</div>
			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="dispatch-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="stock-group-AddModal" data-bs-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New Stock Group</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-3">
				<form action="" class="row g-3 align-items-end" id="stock-group-form">
					<div class="col-12">
						<label for="" class="form-label">Stock Group Name
						</label>
						<input type="text" class="form-control form-control-sm" placeholder="Stock group Name">
					</div>
					<div class="col-md-6 ">
						<label for="" class="form-label">Can Quantities of Items be Added ?
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">Yes</option>
							<option value="">No</option>
						</select>
					</div>
					<div class="col-md-6 ">
						<label for="" class="form-label">Stock Group Under
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
						</select>
					</div>
				</form>
			</div>

			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="stock-group-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="stock-item-AddModal" data-bs-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New Stock Item</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-3">
				<form action="" class="row g-3 align-items-end" id="stock-item-form">
					<div class="col-md-4">
						<label for="" class="form-label">Stock Item Name
						</label>
						<input type="text" class="form-control form-control-sm" placeholder="Stock item Name">
					</div>
					<div class="col-md-4 ">
						<label for="" class="form-label">Under
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">Primary</option>
							<option value="">Secondary</option>
						</select>
					</div>
					<div class="col-md-4 ">
						<label for="" class="form-label">Units
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Not Applicable</option>
							<option value="">nos</option>
							<option value="">kilogram</option>
						</select>
					</div>
					<h5>Opening Balance</h5>
					<div class="col-md-4">
						<label for="" class="form-label">Quantity
						</label>
						<input type="number" class="form-control form-control-sm" placeholder="0.00">
					</div>
					<div class="col-md-4">
						<label for="" class="form-label">Rate Per
						</label>
						<input type="number" class="form-control form-control-sm" placeholder="0.00">
					</div>
					<div class="col-md-4">
						<label for="" class="form-label">Value
						</label>
						<input readonly type="number" class="form-control form-control-sm" placeholder="0.00">
					</div>
				</form>
			</div>

			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="stock-item-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="unit-measure-AddModal" data-bs-backdrop="static">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New Stock Group</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-3">
				<form action="" class="row g-3 align-items-end" id="unit-measure-form">
					<div class="col-12">
						<label for="" class="form-label">Unit Name
						</label>
						<input type="text" class="form-control form-control-sm">
					</div>
				</form>
			</div>

			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="unit-measure-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="groupModal" data-bs-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New Group</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<div class="modal-body py-3">
				<form action="" class="row g-5 align-items-end" id="group-form">
					<div class="col-md-6">
						<label for="" class="form-label">Group Name
						</label>
						<input type="text" class="form-control form-control-sm" placeholder="Group Name">
					</div>
					<div class="col-md-6">
						<label for="" class="form-label">Under
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">Primary</option>
							<option value="">Secondary</option>
						</select>
					</div>

					<div class="col-md-3">
						<label for="" class="form-label">Group behaves like a Sub-Ledger
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">yes</option>
							<option value="">no</option>

						</select>
					</div>
					<div class="col-md-3">
						<label for="" class="form-label">Nett Debit/Credit Balances for Reporting
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">yes</option>
							<option value="">no</option>
						</select>
					</div>
					<div class="col-md-3">
						<label for="" class="form-label">Used for Calculation
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">yes</option>
							<option value="">no</option>
						</select>
					</div>
					<div class="col-md-3">
						<label for="" class="form-label">Method to Allocate when used in Purchase Invoice
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">yes</option>
							<option value="">no</option>
						</select>
					</div>
				</form>
			</div>

			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="stock-item-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="ledgerModal" data-bs-backdrop="static">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add New Ledger</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-3">
				<form action="" class="row g-5 align-items-end" id="ledger-form">
					<div class="col-md-4">
						<label for="" class="form-label"> Name
						</label>
						<input type="text" class="form-control form-control-sm" placeholder="Name">
					</div>
					<div class="col-md-4">
						<label for="" class="form-label">Under
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">Primary</option>
							<option value="">Secondary</option>
						</select>
					</div>

					<div class="col-md-4">
						<label for="" class="form-label">Inventory Values are Affected ?
						</label>
						<select name="" class="form-control form-control-sm">
							<option selected value="">Select</option>
							<option value="">yes</option>
							<option value="">no</option>

						</select>
					</div>
					<h5>Mailing Details</h5>
				</form>
			</div>

			<div class="modal-footer pt-0 border-top-0">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" form="stock-item-form" class="btn btn-sm btn-primary">Save</button>
			</div>
		</div>
	</div>
</div>

<script>
	function Alert(options = {}) {
		const BSAction = {
			success: '<i class="bi bi-check-circle display-1 text-success"></i>',
			error: '<i class="bi bi-x-circle display-1 text-danger"></i>',
			warning: '<i class="bi bi-exclamation-circle display-1 text-warning"></i>',
			info: '<i class="bi bi-info-circle display-1 text-info"></i>',
			question: '<i class="bi bi-question-circle display-1 text-muted"></i>',
		}
		const modal = $('#alertModal');
		const icon = modal.find('.modal-title .alertIcon');
		const text = modal.find('.modal-title .alertText');
		const okBtn = modal.find('.modal-footer .alertOkBtn');
		const cancelBtn = modal.find('.modal-footer .alertCancelBtn');
		icon.html('');
		text.html('');
		cancelBtn.remove();
		if (options.type && BSAction[options.type]) {
			icon.html(BSAction[options.type]);
		}
		if ('string' === typeof options) {
			text.html(options);
		} else if ('object' === typeof options && options.text) {
			text.html(options.text);
		} else {
			text.html(translate('alert'));
		}
		if (options.callback) {
			okBtn.on('click', function (e) {
				options.callback(e);
				$(this).unbind("click");
			})
		}
		if (options.confirmText) {
			okBtn.text(options.confirmText);
		} else {
			okBtn.text(translate('ok'));
		}
		modal.modal('show');
	}
	async function Prompt(options = {}) {
		const modal = $('#alertModal');
		const icon = modal.find('.modal-title .alertIcon');
		const text = modal.find('.modal-title .alertText');
		const okBtn = modal.find('.modal-footer .alertOkBtn');
		modal.find('.modal-footer .alertCancelBtn').remove();
		icon.html('');
		text.html('');
		if ('string' === typeof options) {
			icon.html(`<h5>${options}</h5>`);
		} else if ('object' === typeof options && options.text) {
			icon.html(`<h5>${options.text}</h5>`);
		} else {
			icon.html(`<h5>${translate('prompt')}</h5>`);
		}
		modal.find('.modal-footer').prepend(`<button type="button" data-bs-dismiss="modal" class="btn btn-sm alertCancelBtn btn-secondary">${translate('cancel')}</button>`);
		text.html('<input type="text" class="form-control promptInput">');
		const cancelBtn = modal.find('.modal-footer .alertCancelBtn');
		modal.modal('show');
		return await new Promise((resolve, reject) => {
			okBtn.on('click', function () {
				resolve(modal.find('.promptInput').val());
				$(this).unbind('click');
			});
			cancelBtn.on('click', function () {
				resolve(null);
			});
		});
	}
	async function Confirm(options = {}) {
		const modal = $('#alertModal');
		const icon = modal.find('.modal-title .alertIcon');
		const text = modal.find('.modal-title .alertText');
		const okBtn = modal.find('.modal-footer .alertOkBtn');
		modal.find('.modal-footer .alertCancelBtn').remove();
		icon.html('');
		text.html('');
		if ('string' === typeof options) {
			icon.html(`<h5>${options}</h5>`);
		} else if ('object' === typeof options && options.text) {
			icon.html(`<h5>${options.text}</h5>`);
		} else {
			icon.html(`<h5>${translate('confirm')}</h5>`);
		}
		if (options.confirmText) {
			okBtn.text(options.confirmText);
		}
		let cancelText = translate('cancel');
		if (options.cancelText) {
			cancelText = options.cancelText;
		}
		modal.find('.modal-footer').prepend(`<button type="button" data-bs-dismiss="modal" class="btn btn-sm alertCancelBtn btn-secondary">${cancelText}</button>`);
		const cancelBtn = modal.find('.modal-footer .alertCancelBtn');
		modal.modal('show');
		if (options.onOk || options.onCancel) {
			if (options.onOk) {
				okBtn.on('click', function (e) {
					options.onOk(e);
					$(this).unbind("click");
				});
			}
			if (options.onCancel) {
				cancelBtn.on('click', function (e) {
					options.onCancel(e);
					$(this).unbind("click");
				});
			}
		} else {
			return await new Promise((resolve, reject) => {
				okBtn.on('click', function () {
					resolve(true);
					$(this).unbind('click');
				});
				cancelBtn.on('click', function () {
					resolve(false);
				});
			});
		}
	}
</script><!-- End Create a new user Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->
<!-- JS Implementing Plugins -->
<script src="includes/lang.php?js_lang=<?= $lang ?>"></script>
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/moment.js"></script>
<script src="assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js"></script>
<!-- JS Front -->
<script src="assets/js/theme.min.js"></script>
<script src="assets/js/hs.theme-appearance-charts.js"></script>
<script type="text/javascript"
	src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.js"></script>
<script src="assets/js/vfs_fonts.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/additional-methods.min.js"></script>
<script src="assets/js/BSSelect.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
	$('.table-responsive').on('show.bs.dropdown', function () {
		$(this).css('overflow', 'inherit');
	});
	$('.table-responsive').on('hide.bs.dropdown', function () {
		$(this).css('overflow', 'auto');
	});
	$.fn.dataTable.Api.register('sum()', function () {
		return this.flatten().reduce(function (a, b) {
			if (typeof a === 'string') {
				a = a.replace(/[^\d.-]/g, '') * 1;
			}
			if (typeof b === 'string') {
				b = b.replace(/[^\d.-]/g, '') * 1;
			}

			return a + b;
		}, 0);
	}),
		$.fn.dataTable.moment = function (format, locale) {
			var types = $.fn.dataTable.ext.type;
			// Add type detection
			types.detect.unshift(function (d) {
				return moment(d, format, locale, true).isValid() ?
					'moment-' + format :
					null;
			});
			// Add sorting method - use an integer for the sorting
			types.order['moment-' + format + '-pre'] = function (d) {
				return moment(d, format, locale, true).unix();
			};
		},
		$.fn.dataTable.moment('DD MMM YYYY'),
		$.fn.dataTable.defaults.aLengthMenu = [
			[10, 25, 50, 100, 500, -1],
			[10, 25, 50, 100, 500, translate('all')],
		];
	const dtLang = $.fn.dataTable.defaults.oLanguage;
	dtLang.sLengthMenu = 'Show _MENU_ entries',
		dtLang.sLoadingRecords = translate('loading'),
		dtLang.sEmptyTable = dtLang.sZeroRecords = `<div class="text-center p-4"><img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default"><img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark"><p class="mb-0">${translate('no_data_to_show')}</p></div>`,
		dtLang.sInfo = 'Showing page _PAGE_ of _PAGES_',
		dtLang.sInfoEmpty = translate('no_data_to_show'),
		dtLang.sInfoFiltered = ' - filtered from _MAX_ records',
		dtLang.sSearch = translate('search'),
		dtLang.oPaginate = {
			sFirst: translate('first'),
			sLast: translate('last'),
			sNext: translate('next'),
			sPrevious: translate('previous')
		},
		dtLang.buttons = {
			copySuccess: {
				1: translate('copied_one_row'),
				_: translate('copied_n_rows')
			},
			copyTitle: translate('copy_to_clipboard')
		},
		$.fn.dataTableExt.buttons.csvHtml5.charset = 'UTF-8',
		$.fn.dataTableExt.buttons.csvHtml5.bom = true;
	const pdf = $.fn.dataTableExt.buttons.pdfHtml5;
	pdf.footer = true,
		pdf.orientation = 'landscape',
		pdf.exportOptions = {
			// columns: ':visible',
			search: 'applied',
			order: 'applied'
		},
		$.fn.dataTableExt.buttons.print.footer = true,
		// to print current page only
		$.fn.dataTableExt.buttons.print.exportOptions = {
			modifier: {
				page: 'current'
			}
		},
		pdf.customize = function (doc) {
			doc.defaultStyle.font = 'NotoSans';
			doc.pageMargins = [20, 40, 20, 40];
			doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
			const body = doc.content[1].table.body;
			for (let i = 0; i < Object.values(body).length; i++) {
				for (let j = 0; j < Object.values(body[i]).length; j++) {
					// body[i][j].color = '#000'; // change font color
					// body[i][j].fillColor = '#fff'; // change background color of cell
					body[i][j].alignment = 'left'; // text alignment
				}
			}
		};
	$(document).ready(function () {
		// const excel = $.fn.dataTableExt.buttons.excelHtml5;
		// const csv = $.fn.dataTableExt.buttons.csvHtml5;
		// const print = $.fn.dataTableExt.buttons.print;
		$.fn.startLoading = function (e) {
			let spinner = `<span class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">${translate('saving')}...</span></span> `;
			if (undefined === e) {
				e = spinner + translate('saving');
			} else {
				e = spinner + e;
			}
			return this.html(e).prop('disabled', true);
		}
		$.fn.stopLoading = function (e) {
			if (undefined === e) {
				e = translate('save');
			}
			return this.html(e).prop('disabled', false);
		}
	});
	(function () {
		localStorage.removeItem('hs_theme');
		window.addEventListener('load', function () {

			// INITIALIZATION OF BOOTSTRAP DROPDOWN
			// =======================================================
			// HSBsDropdown.init()


			// INITIALIZATION OF SELECT
			// =======================================================
			HSCore.components.HSTomSelect.init('.js-select')


			// INITIALIZATION OF INPUT MASK
			// =======================================================
			HSCore.components.HSMask.init('.js-input-mask')


			// INITIALIZATION OF FILE ATTACHMENT
			// =======================================================
			new HSFileAttach('.js-file-attach')


			// INITIALIZATION OF STICKY BLOCKS
			// =======================================================
			new HSStickyBlock('.js-sticky-block', {
				targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
			})


			// SCROLLSPY
			// =======================================================
			new bootstrap.ScrollSpy(document.body, {
				target: '#navbarSettings',
				offset: 100
			})
			if (document.querySelector('#navbarVerticalNavMenu')) {
				new HSScrollspy('#navbarVerticalNavMenu', {
					breakpoint: 'lg',
					scrollOffset: -20
				})
			}
			let page = location.pathname.split('/').slice(-1)[0];
			if (page === '') {
				page = './';
			}
			document.querySelectorAll('#navbarVerticalMenu .nav-link').forEach(el => {
				el.classList.remove('active');
			});
			const active = document.querySelector('#navbarVerticalMenu a[href="' + page + '"]');
			if (active) {
				active.classList.add('active');
				if (active.parentNode.classList.contains('collapse')) {
					active.parentNode.classList.add('show');
				} else if (active.closest('.collapse')) {
					active.closest('.collapse').classList.add('show');
				}
			}

			new HSSideNav('.js-navbar-vertical-aside').init();
			const HSFormSearchInstance = new HSFormSearch('.js-form-search')
			if (HSFormSearchInstance.collection.length) {
				HSFormSearchInstance.getItem(1).on('close', function (el) {
					el.classList.remove('top-0');
				})
				document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
					let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
						$menu = document.querySelector(dataOptions.dropMenuElement)
					$menu.classList.add('top-0')
					$menu.style.left = 0
				})
			}
		});
		const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
		const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

		// Function to set active style in the dorpdown menu and set icon for dropdown trigger
		const setActiveStyle = function () {
			$variants.forEach($item => {
				if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
					$dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
					return $item.classList.add('active')
				}
				$item.classList.remove('active')
			});
		}

		// Add a click event to all items of the dropdown to set the style
		$variants.forEach(function ($item) {
			$item.addEventListener('click', function () {
				HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
			});
		})

		// Call the setActiveStyle on load page
		setActiveStyle()

		// Add event listener on change style to call the setActiveStyle function
		window.addEventListener('on-hs-appearance-change', function () {
			setActiveStyle()
		})
		if ($('.js-flatpickr').length) {
			HSCore.components.HSFlatpickr.init('.js-flatpickr');
		}
	})();
</script>
</body>

</html>