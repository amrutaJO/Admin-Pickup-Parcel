<?php require_once __DIR__."/header.php"?>

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('dashboard') ?></h1>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('revenue') ?></span>
                        <span>
                            <i class="bi-cash-stack btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_revenue') ?> </span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_revenue') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_revenue') ?> </span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_revenue') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('sales') ?></span>
                        <span>
                            <i class="bi-cash-coin btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_sales') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_sales') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_sales') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_sales') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('purchase') ?></span>
                        <span>
                            <i class="bi-cart-plus btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_purchase') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_purchase') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_purchase') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_purchase') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('expenses') ?></span>
                        <span>
                            <i class="bi-currency-exchange btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_expenses') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_expenses') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_expenses') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_expenses') ?></span>
                                <span class="rupee-after">0.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('bookings') ?></span>
                        <span>
                            <i class="bi-tags btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_bookings') ?></span>
                                <span>0 <small>(0 Plants)</small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_bookings') ?></span>
                                <span>0 <small>(0 Plants)</small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_bookings') ?></span>
                                <span>0 <small>(0 Plants)</small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_bookings') ?></span>
                                <span>0 <small>(0 Plants)</small></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__.'/footer.php' ?>