<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">
                    <?= translate('custom_push', 'mr')?></h1>
            </div>
        </div>
        <!-- End Row -->
    </div>

    <div class="px-sm-5 row g-5">
        <div class="col-md-5">
            <div>
                <label class="form-label fs-4"><?= translate('custom_push', 'mr')?> :</label>
                <div class="d-flex gap-3">
                    <div class="notify">
                        <input type="radio" class="d-none" name="notificationtype" id="notify" checked>
                        <label for="notify">
                            <div class="border border-primary px-3 py-2 rounded"><?= translate('notification', 'mr')?></div>
                        </label>
                    </div>
                    <div class="notify">
                        <input type="radio" class="d-none" name="notificationtype" id="sms">
                        <label for="sms">
                            <div class="border border-primary px-3 py-2 rounded"><?= translate('SMS', 'mr')?></div>
                        </label>
                    </div>
                    <div class="notify">
                        <input type="radio" class="d-none" name="notificationtype" id="whatsapp">
                        <label for="whatsapp">
                            <div class="border border-primary px-3 py-2 rounded"><?= translate('WhatsApp', 'mr')?></div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <label for="sendby" class="fs-4 lh-lg"><?= translate('send_by', 'mr')?></label>
                <select id="sendby" class="form-select">
                    <option value="none"><?= translate('select', 'mr')?></option>
                    <option value="staff"><?= translate('Admin', 'mr')?></option>
                    <option value="department"><?= translate('User', 'mr')?></option>
                    <option value="farmer"><?= translate('Partner', 'mr')?></option>
                </select>
            </div>
            <div class="my-5">
                <label for="notifymessage" class="fs-4 lh-lg"><?= translate('message', 'mr')?></label>
                <textarea id="notifymessage" class="form-control w-100" rows="4"></textarea>
            </div>
        </div>
        <div class="col-md-7">
            <div id="staff_selection" class="px-sm-4 d-none">
                <div class="d-flex justify-content-between my-4 align-items-center">
                    <h3><?= translate('Select Admin', 'mr')?></h3>
                    <button class="btn btn-primary btn-sm"> <?= translate('send', 'mr')?><i class="bi bi-chevron-right"></i></button>
                </div>
                <form class="list-group">
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff1">
                        <label for="staff1">Manish Sonawane</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff2">
                        <label for="staff2">Aditya Mahajan</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff3">
                        <label for="staff3">Shashikant Shirsath</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff4">
                        <label for="staff4">Pranjal Mahajan</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff5">
                        <label for="staff5">Shridhar Vikharankar</label>
                    </div>
                </form>
            </div>
            <div id="department_selection" class="px-sm-4 d-none">
                <div class="d-flex justify-content-between my-4 align-items-center">
                    <h3><?= translate('Select User', 'mr')?></h3>
                    <button class="btn btn-primary btn-sm"> <?= translate('send', 'mr')?> <i class="bi bi-chevron-right"></i></button>
                </div>
                <form class="list-group">
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d1">
                        <label for="d1"><?= translate('Rahul Bharhate')?></label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d2">
                        <label for="d2"><?= translate('Tejas Khairnar')?></label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d3">
                        <label for="d3"><?= translate('Jayesh Chaudhari')?></label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d4">
                        <label for="d4"><?= translate('Chandrakant Patil')?></label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d5">
                        <label for="d5"><?= translate('Bhushan Kumbhar')?></label>
                    </div>
                </form>
            </div>
            <div id="farmer_selection" class="px-sm-4 d-none ">
                <div class="d-flex justify-content-between my-4 align-items-center">
                    <h3><?= translate('Select Partners', 'mr')?></h3>
                    <button class="btn btn-primary btn-sm"> <?= translate('send', 'mr')?> <i class="bi bi-chevron-right"></i></button>
                </div>
                <form class="list-group">
                    <div class="notifyselect list-group-item">
                        <input type="radio" name="farmergroup" class="form-check-input me-2 stretched-link" id="all">
                        <label for="all"><?= translate('all', 'mr')?></label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="radio" name="farmergroup" class="form-check-input me-2 stretched-link" id="booking">
                        <label for="booking"><?= translate('Online', 'mr')?></label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="radio" name="farmergroup" class="form-check-input me-2 stretched-link" id="delivery">
                        <label for="delivery"><?= translate('Offline', 'mr')?></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/footer.php' ?>