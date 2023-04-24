<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <!-- Nav tabs -->
    <ul class="nav nav-pills mb-4" id="acount-voucher-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary active" id="contra-tab" data-bs-toggle="tab" data-bs-target="#contra-content" type="button" role="tab" aria-controls="contra-content" aria-selected="true">Contra</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment-content" type="button" role="tab" aria-controls="payment-content" aria-selected="false">Payment</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="recipt-tab" data-bs-toggle="tab" data-bs-target="#recipt-content" type="button" role="tab" aria-controls="recipt-content" aria-selected="false">Recipt</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary " id="journal-tab" data-bs-toggle="tab" data-bs-target="#journal-content" type="button" role="tab" aria-controls="journal-content" aria-selected="fasle">Journal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-content" type="button" role="tab" aria-controls="sales-content" aria-selected="false">Sles</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="sales-return-tab" data-bs-toggle="tab" data-bs-target="#sales-return-content" type="button" role="tab" aria-controls="sales-return-content" aria-selected="false">Sales Return</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="purchase-tab" data-bs-toggle="tab" data-bs-target="#purchase-content" type="button" role="tab" aria-controls="purchase-content" aria-selected="true">Purchase</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="purchase-return-tab" data-bs-toggle="tab" data-bs-target="#purchase-return-content" type="button" role="tab" aria-controls="purchase-return-content" aria-selected="false">Purchase Return</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="credit-note-tab" data-bs-toggle="tab" data-bs-target="#credit-note-content" type="button" role="tab" aria-controls="credit-note-content" aria-selected="false">Credit Note</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="debit-note-tab" data-bs-toggle="tab" data-bs-target="#debit-note-content" type="button" role="tab" aria-controls="debit-note-content" aria-selected="true">Debit Note</button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="contra-content" role="tabpanel" aria-labelledby="contra-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Contra</h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Stock Item</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="contra-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control contra-table-search" placeholder="Search here">
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
                <table id="contra-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="contra-table-footer"></div>
        </div>
        <div class="tab-pane" id="payment-content" role="tabpanel" aria-labelledby="payment-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Payment
                        </h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Add new booking</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="payment-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control payment-table-search" placeholder="Search here">
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
                <table id="payment-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="payment-table-footer"></div>
        </div>
        <div class="tab-pane" id="recipt-content" role="tabpanel" aria-labelledby="recipt-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Recipt
                        </h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Add new booking</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="recipt-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control recipt-table-search" placeholder="Search here">
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
                <table id="recipt-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="recipt-table-footer"></div>
        </div>
        <div class="tab-pane" id="journal-content" role="tabpanel" aria-labelledby="journal-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Journal</h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Stock Item</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="journal-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control journal-table-search" placeholder="Search here">
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
                <table id="journal-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="journal-table-footer"></div>
        </div>
        <div class="tab-pane" id="sales-content" role="tabpanel" aria-labelledby="sales-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Sales
                        </h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Add new booking</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="sales-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control sales-table-search" placeholder="Search here">
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
                <table id="sales-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="sales-table-footer"></div>
        </div>
        <div class="tab-pane" id="sales-return-content" role="tabpanel" aria-labelledby="sales-return-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Sales Return
                        </h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Add new booking</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="sales-return-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control sales-return-table-search" placeholder="Search here">
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
                <table id="sales-return-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="sales-return-table-footer"></div>
        </div>
        <div class="tab-pane" id="purchase-content" role="tabpanel" aria-labelledby="purchase-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Purchase</h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Stock Item</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="purchase-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control purchase-table-search" placeholder="Search here">
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
                <table id="purchase-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="purchase-table-footer"></div>
        </div>
        <div class="tab-pane" id="purchase-return-content" role="tabpanel" aria-labelledby="purchase-return-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Purchase Return
                        </h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Add new booking</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="purchase-return-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control purchase-return-table-search" placeholder="Search here">
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
                <table id="purchase-return-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="purchase-return-table-footer"></div>
        </div>
        <div class="tab-pane" id="credit-note-content" role="tabpanel" aria-labelledby="credit-note-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Credit Note
                        </h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Add new booking</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="credit-note-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control credit-note-table-search" placeholder="Search here">
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
                <table id="credit-note-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="credit-note-table-footer"></div>
        </div>
        <div class="tab-pane" id="debit-note-content" role="tabpanel" aria-labelledby="debit-note-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Debit Note</h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addBooking()">
                            <i class="bi-plus-circle me-1"></i>
                            Stock Item</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="debit-note-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control debit-note-table-search" placeholder="Search here">
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
                <table id="debit-note-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Booking No.</th>
                            <th>Booking date</th>
                            <th>Booking By.</th>
                            <th>Delivery date</th>
                            <th>Farmer Name</th>
                            <th>Address</th>
                            <th>Taluka</th>
                            <th>District</th>
                            <th>Taluka</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="debit-note-table-footer"></div>
        </div>

    </div>

</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>
<script>
    let contraListTable = false;
    contraListTable = $('#contra-table').DataTable({
        data: {},
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
            $('.contra-table-footer').append($('#contra-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.contra-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.contra-table-search').on('input', function() {
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
</script>
<script>
    let paymentListTable = false;
    paymentListTable = $('#payment-table').DataTable({
        data: {},
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
            $('.payment-table-footer').append($('#payment-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.payment-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.payment-table-search').on('input', function() {
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
</script>
<script>
    let reciptListTable = false;
    reciptListTable = $('#recipt-table').DataTable({
        data: {},
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
            $('.recipt-table-footer').append($('#recipt-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.recipt-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.recipt-table-search').on('input', function() {
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
</script>
<script>
    let journalListTable = false;
    journalListTable = $('#journal-table').DataTable({
        data: {},
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
            $('.journal-table-footer').append($('#journal-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.journal-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.journal-table-search').on('input', function() {
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
</script>
<script>
    let salesListTable = false;
    salesListTable = $('#sales-table').DataTable({
        data: {},
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
            $('.sales-table-footer').append($('#sales-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.sales-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.sales-table-search').on('input', function() {
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
</script>
<script>
    let salesReturnListTable = false;
    salesReturnListTable = $('#sales-return-table').DataTable({
        data: {},
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
            $('.sales-return-table-footer').append($('#sales-return-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.sales-return-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.sales-return-table-search').on('input', function() {
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
</script>
<script>
    let purchaseListTable = false;
    purchaseListTable = $('#purchase-table').DataTable({
        data: {},
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
            $('.purchase-table-footer').append($('#purchase-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.purchase-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.purchase-table-search').on('input', function() {
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
</script>
<script>
    let purchaseReturnListTable = false;
    purchaseReturnListTable = $('#purchase-return-table').DataTable({
        data: {},
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
            $('.purchase-return-table-footer').append($('#purchase-return-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.purchase-return-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.purchase-return-table-search').on('input', function() {
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
</script>
<script>
    let creditNoteListTable = false;
    creditNoteListTable = $('#credit-note-table').DataTable({
        data: {},
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
            $('.credit-note-table-footer').append($('#credit-note-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.credit-note-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.credit-note-table-search').on('input', function() {
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
</script>
<script>
    let stockGroupListTable = false;
    stockGroupListTable = $('#debit-note-table').DataTable({
        data: {},
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
            $('.debit-note-table-footer').append($('#debit-note-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.debit-note-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.debit-note-table-search').on('input', function() {
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
</script>