<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <!-- Nav tabs -->
    <ul class="nav nav-pills mb-4" id="acount-info-tab" role="tablist">
        <li class="nav-item" role="presentation">
<<<<<<< HEAD
            <button class="btn btn-outline-primary active" id="group-ledger-tab" data-bs-toggle="tab" data-bs-target="#group-ledger-content" type="button" role="tab" aria-controls="group-ledger-content" aria-selected="true">Group</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary active" id="group-ledger-tab" data-bs-toggle="tab" data-bs-target="#group-ledger-content" type="button" role="tab" aria-controls="group-ledger-content" aria-selected="true">Ledgers</button>
=======
            <button class="btn btn-outline-primary active" id="group-tab" data-bs-toggle="tab" data-bs-target="#group-content" type="button" role="tab" aria-controls="group-content" aria-selected="true">Group</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="ledger-tab" data-bs-toggle="tab" data-bs-target="#ledger-content" type="button" role="tab" aria-controls="ledger-content" aria-selected="true">Ledger</button>
>>>>>>> 490440d7fc5189b0042a744a5e2d573d4428c4dc
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="voucher-type-tab" data-bs-toggle="tab" data-bs-target="#voucher-type-content" type="button" role="tab" aria-controls="voucher-type-content" aria-selected="false">Voucher Type</button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="group-content" role="tabpanel" aria-labelledby="group-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">Group</h1>
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
            <div class="group-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control group-table-search" placeholder="Search here">
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
                <table id="group-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Name</th>
                            <th>Under</th>
                            <th>Group behaves like a Sub-Ledger</th>
                            <th>Nett Debit/Credit Balances for Reporting</th>
                            <th>Used for Calculation</th>
                            <th>Method to Allocate when used in Purchase Invoice</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="group-table-footer"></div>
        </div>
        <div class="tab-pane" id="ledger-content" role="tabpanel" aria-labelledby="ledger-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">Ledger</h1>
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
            <div class="ledger-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control ledger-table-search" placeholder="Search here">
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
                <table id="ledger-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
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
            <div class="ledger-table-footer"></div>
        </div>
        <div class="tab-pane" id="voucher-type-content" role="tabpanel" aria-labelledby="voucher-type-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Voucher Type
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
            <div class="voucher-type-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control voucher-type-table-search" placeholder="Search here">
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
                <table id="voucher-type-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
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
            <div class="voucher-type-table-footer"></div>
        </div>
    </div>

</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>
<script>
    let groupListTable = false;
    groupListTable = $('#group-table').DataTable({
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
            $('.group-table-footer').append($('#group-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.group-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.group-table-search').on('input', function() {
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
    let groupLedgerListTable = false;
    groupLedgerListTable = $('#ledger-table').DataTable({
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
            $('.ledger-table-footer').append($('#ledger-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.ledger-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.ledger-table-search').on('input', function() {
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
    let voucherTypeListTable = false;
    voucherTypeListTable = $('#voucher-type-table').DataTable({
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
            $('.voucher-type-table-footer').append($('#voucher-type-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.voucher-type-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.voucher-type-table-search').on('input', function() {
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