<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <!-- Nav tabs -->
    <ul class="nav nav-pills mb-4" id="inventory-info-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary active" id="stock-group-tab" data-bs-toggle="tab" data-bs-target="#stock-group-content" type="button" role="tab" aria-controls="stock-group-content" aria-selected="true">Stock Groups</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="stock-item-tab" data-bs-toggle="tab" data-bs-target="#stock-item-content" type="button" role="tab" aria-controls="stock-item-content" aria-selected="false">Stock Items</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="btn btn-outline-primary" id="unit-measure-tab" data-bs-toggle="tab" data-bs-target="#unit-measure-content" type="button" role="tab" aria-controls="unit-measure-content" aria-selected="false">Unit of Measure</button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="stock-group-content" role="tabpanel" aria-labelledby="stock-group-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Stock Groups</h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addStockGroup()">
                            <i class="bi-plus-circle me-1"></i>
                           Add Stock Group</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="stock-group-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control stock-group-table-search" placeholder="Search here">
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
                <table id="stock-group-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>ID</th>
                            <th>Stock Group Name</th>
                            <th>Can Quantities of Items be Added ?</th>
                            <th>Under</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="stock-group-table-footer"></div>
        </div>
        <div class="tab-pane" id="stock-item-content" role="tabpanel" aria-labelledby="stock-item-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Stock Item
                        </h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addStockItem()">
                            <i class="bi-plus-circle me-1"></i>
                            Add Stock Item</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="stock-item-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control stock-item-table-search" placeholder="Search here">
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
                <table id="stock-item-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle w-100">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th>Id.</th>
                            <th>Stock Item Name</th>
                            <th>Under.</th>
                            <th>Units</th>
                            <th>Quantiy</th>
                            <th>Rate Per</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="stock-item-table-footer"></div>
        </div>
        <div class="tab-pane" id="unit-measure-content" role="tabpanel" aria-labelledby="unit-measure-tab">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="page-header-title">
                            Unit of Measure
                        </h1>
                    </div>
                    <!-- End Col -->
                    <div class="col-auto">
                        <a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="addUnitMeasure()">
                            <i class="bi-plus-circle me-1"></i>
                            Add Unit of Measure</a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->
            <div class="unit-measure-table-filters">
                <div class="row g-3 ">
                    <div class="col-12 col-md-3">
                        <div class="input-group input-group-sm">
                            <div class="input-group-text">
                                <i class="bi-search"></i>
                            </div>
                            <input type="search" class="form-control unit-measure-table-search" placeholder="Search here">
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
                <table id="unit-measure-table" class="table table-bordered table-td-3-danger-bold table-nowrap table-align-middle w-100">
                    <thead class="thead-light " align="left">
                        <tr>
                            <th class="w-10">Id.</th>
                            <th class="w-10">Alter</th>
                            <th>Unit Name</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="unit-measure-table-footer"></div>
        </div>

    </div>

</div>
<!-- End Content -->
<?php require_once __DIR__ . '/footer.php' ?>
<script>
    let stockGroupListTable = false;
    stockGroupListTable = $('#stock-group-table').DataTable({
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
            $('.stock-group-table-footer').append($('#stock-group-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.stock-group-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.stock-group-table-search').on('input', function() {
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
    let stockItemListTable = false;
    stockItemListTable = $('#stock-item-table').DataTable({
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
            $('.stock-item-table-footer').append($('#stock-item-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.stock-item-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.stock-item-table-search').on('input', function() {
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
    let unitMeasureListTable = false;
    unitMeasureListTable = $('#unit-measure-table').DataTable({
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
            $('.unit-measure-table-footer').append($('#unit-measure-table_wrapper .row:last-child()')).find('.previous').addClass('ms-md-auto');
            $('.unit-measure-table-footer .dataTables_info').before($('.dataTables_length').find('label').attr('class', 'd-inline-flex text-nowrap align-items-center gap-2'));
            $('.unit-measure-table-search').on('input', function() {
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