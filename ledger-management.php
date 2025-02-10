
<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <!-- Nav tabs -->
    <ul class="nav nav-pills mb-4" id="acount-voucher-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary active" id="crop-tab" data-bs-toggle="tab" data-bs-target="#crop-content" type="button" role="tab" aria-controls="crop-content" aria-selected="true">Crop</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="variety-tab" data-bs-toggle="tab" data-bs-target="#variety-content" type="button" role="tab" aria-controls="variety-content" aria-selected="false">Variety</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="tray-size-tab" data-bs-toggle="tab" data-bs-target="#tray-size-content" type="button" role="tab" aria-controls="tray-size-content" aria-selected="false">Tray Size</button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="crop-content" role="tabpanel" aria-labelledby="crop-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Crop</h1>
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
            <div class="crop-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control crop-table-search" placeholder="Search here">
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
                <table id="crop-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
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
            <div class="crop-table-footer"></div>
        </div>
        <div class="tab-pane" id="variety-content" role="tabpanel" aria-labelledby="variety-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Variety
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
            <div class="variety-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control variety-table-search" placeholder="Search here">
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
                <table id="variety-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
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
            <div class="variety-table-footer"></div>
        </div>
        <div class="tab-pane" id="tray-size-content" role="tabpanel" aria-labelledby="tray-size-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Tray Size
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
            <div class="tray-size-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control tray-size-table-search" placeholder="Search here">
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
                <table id="tray-size-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
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
            <div class="tray-size-table-footer"></div>
        </div>
    </div>

</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>
<script>
    let cropListTable = false;
    cropListTable = $('#crop-table').DataTable({
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
            $('.crop-table-footer').append($('#crop-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.crop-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.crop-table-search').on('input', function() {
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
    let varietyListTable = false;
    varietyListTable = $('#variety-table').DataTable({
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
            $('.variety-table-footer').append($('#variety-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.variety-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.variety-table-search').on('input', function() {
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
    let traySizeListTable = false;
    traySizeListTable = $('#tray-size-table').DataTable({
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
            $('.tray-size-table-footer').append($('#tray-size-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.tray-size-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.tray-size-table-search').on('input', function() {
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