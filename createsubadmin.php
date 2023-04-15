<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">
                    Sub Admin </h1>
            </div>
            <!-- End Col -->
            <div class="col-auto">
                <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addCustomer()">
                    <i class="bi-plus-circle me-1"></i>
                    Add New </a>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->
    <div class="customer-table-filters">
        <div class="row g-3">
            <div class="col-12 col-md-3">
                <div class="input-group input-group-sm">
                    <div class="input-group-text">
                        <i class="bi-search"></i>
                    </div>
                    <input type="search" class="form-control customer-table-search" placeholder="Search here">
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
        <table id="customer-table" class="table table-bordered table-nowrap table-align-middle">
            <thead class="thead-light" align="left">
                <tr>
                    <th>id</th>
                    <th>Sub Admin name</th>
                    <th>Mobile number</th>
                    <th>Email id</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div class="customer-table-footer"></div>
</div>
<!-- End Content -->
<div class="modal fade" id="subAddminAddModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="subAddminAddModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="subAddminAddModalLabel">Add new customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="row g-3" id="customer-form">
                    <div class="col-12 col-md-6">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="hidden" id="customer-form-action" name="add_customer" value="">
                                <label for="" class="form-label required">Customer name</label>
                                <input type="text" name="cus_name" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-12">
                                <input type="hidden" id="customer-form-action" name="add_customer" value="">
                                <label for="" class="form-label required">Customer name</label>
                                <input type="text" name="cus_name" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Mobile number</label>
                                <input type="tel" name="cus_mobile" class="form-control form-control-sm" oninput="allowType(event, 'mobile')">
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
                                    <option value="noshare">No share</option>
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
                </form>
            </div>
            <div class="modal-footer pt-0 border-top-0">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="customer-form" class="btn btn-sm btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/footer.php' ?>