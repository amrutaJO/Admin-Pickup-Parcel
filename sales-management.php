<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <!-- Nav tabs -->
    <ul class="nav nav-pills mb-4" id="acount-voucher-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary active" id="project-management-tab" data-bs-toggle="tab" data-bs-target="#project-management-content" type="button" role="tab" aria-controls="project-management-content" aria-selected="true">Projection Management</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="batch-assign-tab" data-bs-toggle="tab" data-bs-target="#batch-assign-content" type="button" role="tab" aria-controls="batch-assign-content" aria-selected="false">Batch Assign / Batch Merge</button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="project-management-content" role="tabpanel" aria-labelledby="project-management-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Projection Management</h1>
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
            <div class="project-management-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control project-management-table-search" placeholder="Search here">
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
                <table id="project-management-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
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
            <div class="project-management-table-footer"></div>
        </div>
        <div class="tab-pane" id="batch-assign-content" role="tabpanel" aria-labelledby="batch-assign-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Batch Assign / Batch Merge
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
            <div class="batch-assign-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control batch-assign-table-search" placeholder="Search here">
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
                <table id="batch-assign-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
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
            <div class="batch-assign-table-footer"></div>
        </div>
    </div>

</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>
<script>
    let projectionManagementListTable = false;
    projectionManagementListTable = $('#project-management-table').DataTable({
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
            $('.project-management-table-footer').append($('#project-management-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.project-management-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.project-management-table-search').on('input', function() {
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
    let batchAssignListTable = false;
    batchAssignListTable = $('#batch-assign-table').DataTable({
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
            $('.batch-assign-table-footer').append($('#batch-assign-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.batch-assign-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.batch-assign-table-search').on('input', function() {
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