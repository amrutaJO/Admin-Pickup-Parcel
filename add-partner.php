<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title"><?= translate('add_partner') ?></h1>
            </div>
            <div class="col-auto">
                <a class="btn btn-sm btn-primary" href="employees.php">
                    <!-- <i class="bi-plus-circle me-1"></i> -->
                    <?= translate('view_partners') ?> </a>
            </div>
        </div>
    </div>


    <!-- <form action="" class="row g-3" id="vmaster-form">
        <div class="col-12 col-md-6">
            <label for="" class="form-label">Manufacturer Name</label>
            <input type="text" class="form-control form-control-sm" placeholder="Manufacturer Name">

        </div>
        <div class="col-12 col-md-6">

            <label for="" class="form-label">Vehicle Color</label>
            <input type="text" class="form-control form-control-sm" placeholder="Color">

        </div>
        <div class="col-12 col-md-6">

            <label for="" class="form-label">Model Name</label>
            <input type="text" class="form-control form-control-sm" placeholder="Model Name">

        </div>

        <div class="col-12 col-md-6">

            <label for="" class="form-label">Manufacturing Year</label>
            <input type="number" class="form-control form-control-sm" min="4" max="4" placeholder="Manufacturing Year">

        </div>
        <div class="col-12 col-md-6">
            <label for="" class="form-label">Seat Arrangement</label>
            <input type="number" class="form-control form-control-sm" placeholder="Seat Arrangement">
        </div>

        <div class="modal-footer p-0 border-top-0">
            <button type="reset" form="vmaster-form" class="btn btn-sm btn-primary me-2">Reset</button>
            <button type="submit" form="vmaster-form" class="btn btn-sm btn-primary">Save</button>

        </div>
    </form> -->


    <form action="" class="row g-3" id="employee-form">
        <div class="col-12 col-md-6">
            <div class="row g-3">

                <div class="col-12">
                    <input type="hidden" id="employee-form-action" name="add_employee" value="">
                    <label for="" class="form-label"><?= translate('partner_name')?></label>
                    <input type="text" name="emp_name" class="form-control form-control-sm" required>
                </div>

                <div class="col-12">
                    <label for="" class="form-label"><?= translate('mobile_no')?></label>
                    <input type="tel" name="emp_mobile" class="form-control form-control-sm"
                        oninput="allowType(event, 'mobile')">
                </div>
                <div class="col-12">
                    <label for="" class="form-label"><?= translate('email_id')?></label>
                    <input type="email" name="emp_email" class="form-control form-control-sm">
                </div>

                <div class="col-12">
                    <label for="" class="form-label"><?= translate('partner_type')?></label>
                    <select id="emptype" class="form-control form-control-sm">
                        <option value="selectoption" disabled selected><?= translate('select_type')?></option>
                        <option value="dailyweiges"><?= translate('daily_wages')?></option>
                        <option value="staff"><?= translate('staff')?></option>
                    </select>
                </div>

                <div class="col-12">
                    <label for="" class="form-label"><?= translate('daily_services')?></label>
                    <select id="emptype" class="form-control form-control-sm">
                        <option value="selectoption"><?= translate('yes')?></option>
                        <option value="dailyweiges"><?= translate('no')?></option>
                    </select>
                </div>

                <div class="col-12">
                    <label for="" class="form-label"><?= translate('account_no')?></label>
                    <input type="tel" name="emp_mobile" class="form-control form-control-sm"
                        oninput="allowType(event, 'mobile')">
                </div>

                <div class="col-12">
                    <input type="hidden" id="employee-form-action" name="add_employee" value="">
                    <label for="bank_name" class="form-label">Bank Name</label>
                    <input type="text" name="bank_name" class="form-control form-control-sm" required>
                </div>


            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="row g-3">

                <div class="col-12">
                    <label for="" class="form-label"><?= translate('gender')?></label>
                    <select name="emp_gender" class="form-control form-control-sm">
                        <option value="male"><?= translate('male')?></option>
                        <option value="female"><?= translate('female')?></option>
                        <option value="other"><?= translate('other')?></option>
                        <option value="noshare"><?= translate('noshare')?></option>
                    </select>
                </div>
                <div class="col-12 d-none" id="deptstaff">
                    <label for="" class="form-label">Department</label>
                    <select name="" class="form-control form-control-sm">
                        <option value="">D1</option>
                        <option value="">D2</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="" class="form-label"><?= translate('address')?></label>
                    <textarea name="emp_address" class="form-control form-control-sm" rows="5"></textarea>
                </div>

                <div class="col-12">
                    <label for="" class="form-label"><?= translate('outstation_services')?></label>
                    <select id="emptype" class="form-control form-control-sm">
                        <option value="selectoption"><?= translate('yes')?></option>
                        <option value="dailyweiges"><?= translate('no')?></option>
                    </select>
                </div>

                <div class="col-12">
                    <input type="hidden" id="employee-form-action" name="add_employee" value="">
                    <label for="upi_id" class="form-label"><?= translate('upi_id')?></label>
                    <input type="text" name="upi_id" class="form-control form-control-sm" required>
                </div>

                <div class="col-12">
                    <input type="hidden" id="employee-form-action" name="add_employee" value="">
                    <label for="bank_name" class="form-label"><?= translate('ifsc_code')?></label>
                    <input type="text" name="bank_name" class="form-control form-control-sm" required>
                </div>

                <div class="col-12">
                    <input type="hidden" id="employee-form-action" name="add_employee" value="">
                    <label for="password" class="form-label"><?= translate('password')?></label>
                    <input type="password" name="password" class="form-control form-control-sm" required>
                </div>



            </div>
        </div>
        <div class="col-12 ">
            <div class="row">
                <div class="d-flex col-md-2 justify-content-between perdaymonth align-items-center">
                    <input type="radio" class="d-none" name="salper" id="permonth" checked data-value="Month">
                    <label class="px-3 py-2 me-2" for="permonth">
                    <?= translate('month')?>
                    </label>
                    <input type="radio" class="d-none" name="salper" id="perday" data-value="Day">
                    <label class="px-3 py-2 ms-2" for="perday">
                    <?= translate('day')?>
                    </label>
                </div>
                <div class="col-md-8">
                    <label for="" class="form-label" id="sal">Per <span id="salchange"></span>
                        salary</label>
                    <input type="text" name="emp_salary" class="form-control form-control-sm"
                        oninput="allowType(event, 'number')">
                </div>
            </div>

            
        </div>

        <div class="modal-footer pt-0 border-top-0">
            <button type="submit" form="employee-form" class="btn btn-sm btn-primary"><?= translate('save')?></button>
            <button type="reset" form="employee-form" class="btn btn-sm btn-secondary  ms-2" data-bs-dismiss="modal"><?= translate('reset')?></button>
        </div>

    </form>


    <!-- End of New Card -->



</div>
</div>
<?php require_once __DIR__ . '/footer.php' ?>