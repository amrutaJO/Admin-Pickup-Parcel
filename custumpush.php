<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title">
                    Custum Push</h1>
            </div>
        </div>
        <!-- End Row -->
    </div>

    <div class="px-sm-5 row g-5">
        <div class="col-md-5">
            <div>
                <label class="form-label fs-4">Notification Type :</label>
                <div class="d-flex gap-3">
                    <div class="notify">
                        <input type="radio" class="d-none" name="notificationtype" id="notify" checked>
                        <label for="notify">
                            <div class="border border-primary px-3 py-2 rounded">Notification</div>
                        </label>
                    </div>
                    <div class="notify">
                        <input type="radio" class="d-none" name="notificationtype" id="sms">
                        <label for="sms">
                            <div class="border border-primary px-3 py-2 rounded">SMS</div>
                        </label>
                    </div>
                    <div class="notify">
                        <input type="radio" class="d-none" name="notificationtype" id="whatsapp">
                        <label for="whatsapp">
                            <div class="border border-primary px-3 py-2 rounded">Whatsapp</div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="my-5">
                <label for="sendby" class="fs-4 lh-lg">Send By</label>
                <select id="sendby" class="form-select">
                    <option value="none">Select</option>
                    <option value="staff">Staff</option>
                    <option value="department">Department</option>
                    <option value="farmer">Farmer</option>
                </select>
            </div>
            <div class="my-5">
                <label for="notifymessage" class="fs-4 lh-lg">Message</label>
                <textarea id="notifymessage" class="form-control w-100" rows="4"></textarea>
            </div>
        </div>
        <div class="col-md-7">
            <div id="staff_selection" class="px-sm-4 d-none">
                <div class="d-flex justify-content-between my-4 align-items-center">
                    <h3>Select Staff</h3>
                    <button class="btn btn-primary btn-sm">Send <i class="bi bi-chevron-right"></i></button>
                </div>
                <form class="list-group">
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff1">
                        <label for="staff1">John Doe</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff2">
                        <label for="staff2">John Doe</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff3">
                        <label for="staff3">John Doe</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff4">
                        <label for="staff4">John Doe</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="staffgroup" class="form-check-input me-2 stretched-link" id="staff5">
                        <label for="staff5">John Doe</label>
                    </div>
                </form>
            </div>
            <div id="department_selection" class="px-sm-4 d-none">
                <div class="d-flex justify-content-between my-4 align-items-center">
                    <h3>Select Department</h3>
                    <button class="btn btn-primary btn-sm">Send <i class="bi bi-chevron-right"></i></button>
                </div>
                <form class="list-group">
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d1">
                        <label for="d1">Booking Department</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d2">
                        <label for="d2">Sowing Department</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d3">
                        <label for="d3">HR Department</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d4">
                        <label for="d4">Transport Department</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="checkbox" name="departmentgroup" class="form-check-input me-2 stretched-link" id="d5">
                        <label for="d5">Dispatch Department</label>
                    </div>
                </form>
            </div>
            <div id="farmer_selection" class="px-sm-4 d-none ">
                <div class="d-flex justify-content-between my-4 align-items-center">
                    <h3>Select Farmer</h3>
                    <button class="btn btn-primary btn-sm">Send <i class="bi bi-chevron-right"></i></button>
                </div>
                <form class="list-group">
                    <div class="notifyselect list-group-item">
                        <input type="radio" name="farmergroup" class="form-check-input me-2 stretched-link" id="all">
                        <label for="all">All</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="radio" name="farmergroup" class="form-check-input me-2 stretched-link" id="booking">
                        <label for="booking">Booking</label>
                    </div>
                    <div class="notifyselect list-group-item">
                        <input type="radio" name="farmergroup" class="form-check-input me-2 stretched-link" id="delivery">
                        <label for="delivery">Delivery</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/footer.php' ?>