<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('order_dashboard') ?></h1>
            </div>
        </div>
    </div>
    <div class="row g-3">

    <!-- Rides Bookings -->

    <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('booking') ?></span>
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
                                <span>0 <small><?= translate('book') ?></small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_bookings') ?></span>
                                <span>0 <small><?= translate('book') ?></small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_bookings') ?></span>
                                <span>0 <small><?= translate('book') ?></small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_bookings') ?></span>
                                <span>0 <small><?= translate('book') ?></small></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 

        <!-- Requested Rides  -->

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('requests') ?></span>
                        <span>
                            <i class="bi-list-check btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_requests') ?> </span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_requests') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_requests') ?> </span>
                                <span>0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_requests') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Ongoing -->

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('ongoing_requests') ?></span>
                        <span>
                            <i class="bi-hourglass-split btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_ongoing_rides') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_ongoing_rides') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_ongoing_rides') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_ongoing_rides') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Completed Rides -->

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('completed_requests') ?></span>
                        <span>
                            <i class="bi-check-circle btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_completed_rides') ?></span>
                                <span>0 <small><?= translate('completed') ?></small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_completed_rides') ?></span>
                                <span>0 <small><?= translate('completed') ?></small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_completed_rides') ?></span>
                                <span>0 <small><?= translate('completed') ?></small></span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_completed_rides') ?></span>
                                <span>0 <small><?= translate('completed') ?></small></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Canceled Rides -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('canceled_requests') ?></span>
                        <span>
                            <i class="bi-x-circle btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_canceled_rides') ?> </span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_canceled_rides') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_canceled_rides') ?> </span>
                                <span>0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_canceled_rides') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 

        <!-- New Card -->
        <!-- Rental Rides -->

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header bg-light text-primary py-2">
                    <div class="card-title d-flex justify-content-between align-items-center">
                        <span class="fs-3"><?= translate('rental_rides') ?></span>
                        <span>
                            <i class="bi-car-front-fill btn-icon icon-circle icon-soft-primary bg-gradient fs-3"></i>
                        </span>
                    </div>
                </div>
                <div class="card-body py-2">
                    <ul class="list-group list-group-flush card-text">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('total_rental_rides') ?> </span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('yearly_rental_rides') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('monthly_rental_rides') ?> </span>
                                <span>0.00</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex justify-content-between">
                                <span><?= translate('daily_rental_rides') ?></span>
                                <span >0.00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        

        <!-- End of New Card -->



    </div>
</div>
<?php require_once __DIR__ . '/footer.php' ?>

