<?php require_once __DIR__."/header.php"?>
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">Reports</h1>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3">Sales</span>
                        <span>
                            <i class="bi-cash-coin btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <a href="reports?show=sales-all"><div>All Sales</div></a>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <a href="reports?show=sales-paid"><div>Paid Sales</div></a>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <a href="reports?show=sales-unpaid"><div>Unpaid Sales</div></a>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <a href="reports?show=sales-quotations"><div>Quotations</div></a>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <a href="reports?show=sales-products"><div>Product wise sales</div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3">Purchase</span>
                        <span>
                            <i class="bi-cart-plus btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <a href="reports?show=purchase-all"><div>All Purchases</div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3">Expenses</span>
                        <span>
                            <i class="bi-currency-exchange btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <a href="reports?show=expenses-all"><div>All Expenses</div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3">Bookings</span>
                        <span>
                            <i class="bi-tags btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <a href="reports?show=bookings-all"><div>All Bookings</div></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__.'/footer.php' ?>