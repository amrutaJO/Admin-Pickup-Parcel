<?php require_once __DIR__."/header.php"?>
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-header-title">Settings</h1>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-lg-3">
            <!-- Navbar -->
            <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5">
                <!-- Navbar Toggle -->
                <!-- Navbar Toggle -->
                <div class="d-grid">
                    <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
                        <span class="d-flex justify-content-between align-items-center">
                            <span class="text-dark">Menu</span>
                            <span class="navbar-toggler-default">
                                <i class="bi-list"></i>
                            </span>
                            <span class="navbar-toggler-toggled">
                                <i class="bi-x"></i>
                            </span>
                        </span>
                    </button>
                </div>
                <!-- End Navbar Toggle -->
                <!-- End Navbar Toggle -->
                <!-- Navbar Collapse -->
                <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                    <ul id="navbarSettings" class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical" data-hs-sticky-block-options='{
				 "parentSelector": "#navbarVerticalNavMenu",
				 "targetSelector": "#header",
				 "breakpoint": "lg",
				 "startPoint": "#navbarVerticalNavMenu",
				 "endPoint": "#stickyBlockEndPoint",
				 "stickyOffsetTop": 20
			   }'>
                                                <li class="nav-item">
                            <a class="nav-link active" href="#basicInfoSection">
                                <i class="bi-person nav-icon"></i> Business information                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#addressSection">
                                <i class="bi-geo-alt nav-icon"></i> Address                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bankSection">
                                <i class="bi-bank nav-icon"></i> Bank accounts                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#licensesSection">
                                <i class="bi-award nav-icon"></i> Licenses                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#billingNotesSection">
                                <i class="bi-receipt-cutoff nav-icon"></i> Invoice notes                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quotationNotesSection">
                                <i class="bi-receipt nav-icon"></i> Quotation notes                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bookingNotesSection">
                                <i class="bi-receipt nav-icon"></i> Quotation notes                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#billingSection">
                                <i class="bi-cash-coin nav-icon"></i> Billing settings                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bookingSection">
                                <i class="bi-tags nav-icon"></i> Booking settings                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#settingsSection">
                                <i class="bi-gear nav-icon"></i> Settings                            </a>
                        </li> -->
                    </ul>
                </div>
                <!-- End Navbar Collapse -->
            </div>
            <!-- End Navbar -->
        </div>
        <div class="col-lg-9">
            <div class="d-grid gap-3 gap-lg-5">
                                <div id="basicInfoSection" class="card">
                    <div class="card-header">
                        <h2 class="card-title h4">Business information</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" id="basic-info-form">
                            <input type="hidden" name="biz_id" value="2">
                            <div class="row mb-4">
                                <label for="biz_logo" class="col-sm-3 col-form-label form-label">
                                    Business Logo                                </label>
                                <div class="col-sm-9">
                                    <label class="avatar avatar-xxl avatar-uploader border shadow-sm p-2 bg-light" for="biz_logo">
                                        <img id="biz_logo_preview" class="avatar-img" src="assets/svg/logos/logo.svg" style="object-fit: contain;">
                                        <input type="file" name="biz_logo" class="js-file-attach avatar-uploader-input" id="biz_logo" data-hs-file-attach-options='{
                                        "textTarget": "#biz_logo_preview",
                                        "mode": "image",
                                        "targetAttr": "src",
                                        "allowTypes": [".png", ".jpeg", ".jpg"]
                                     }' accept=".png,.jpeg,.jpg">
                                        <span class="avatar-uploader-trigger me-1 mb-1">
                                            <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="biz_name" class="col-sm-3 col-form-label form-label">
                                    Business name                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="biz_name" id="biz_name" value="नर्सरी सोल्यूशन">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="biz_email" class="col-sm-3 col-form-label form-label">Business email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="biz_email" id="biz_email" value="nursery@gmail.com">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="biz_contact" class="col-sm-3 col-form-label form-label">Business contacts</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="biz_contact" id="biz_contact" value="९८७६५४३२१०, ७८५४५७८५२३">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="biz_gst" class="col-sm-3 col-form-label form-label">GST Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="biz_gst" id="biz_gst" placeholder="22AAAAA0000A1Z5" value="27AAAAA000071Z">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="biz_website" class="col-sm-3 col-form-label form-label">Business website</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="biz_website" id="biz_website" placeholder="https://example.com" value="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="update_basic_info" form="basic-info-form" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="addressSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Address</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <input type="hidden" name="biz_id" value="2">
                            <div class="row mb-4">
                                <label for="address" class="col-sm-3 col-form-label form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address" id="address">मुंबई नाका</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="village" class="col-sm-3 col-form-label form-label">Village</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="village" id="village" value="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="taluka" class="col-sm-3 col-form-label form-label">Taluka</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="taluka" id="taluka" value="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="district" class="col-sm-3 col-form-label form-label">District</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="district" id="district" value="नाशिक ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="state" class="col-sm-3 col-form-label form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="state" id="state" value="महाराष्ट्र ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="pin_code" class="col-sm-3 col-form-label form-label">PIN Code</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="pin_code" id="pin_code" value="४२२००९ ">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="update_biz_address" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="bankSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex justify-content-between align-items-center">
                            <span>Bank accounts</span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <input type="hidden" name="biz_id" value="2">
                            <div class="bank-accounts-list">
                                                                <div class="bank-account-item card px-4 py-3 border mb-3">
                                    <div class="row mb-4">
                                        <label class="col-sm-3 col-form-label form-label">Account holder name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="acc_holder[]" id="acc_holder" value="नर्सरी सोल्यूशन ">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-3 col-form-label form-label">Account number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="account_no[]" id="account_no" value="९५१२५७८५६३२१५">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label class="col-sm-3 col-form-label form-label">IFSC Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="ifsc_code[]" id="ifsc_code" value="SBIN130000">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label class="col-sm-3 col-form-label form-label">Branch</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="branch[]" id="branch" value="मुंबई  नाका ">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn badge rounded-pill text-primary border-primary bg-primary bg-opacity-25" onclick="cloneBankAcc(this)">
                                            Add bank account                                        </button>
                                        <button type="button" class="btn badge rounded-pill text-danger border-danger bg-danger bg-opacity-25" onclick="removeBankAcc(this)">
                                            Remove bank account                                        </button>
                                    </div>
                                </div>
                                                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="update_bank_info" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="licensesSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex justify-content-between align-items-center">
                            <span>Licenses</span>
                            <button type="button" class="btn bt-sm btn-link p-0" onclick="addLicense()">
                                <i class="bi-plus-circle me-1"></i> Add license                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <input type="hidden" name="biz_id" value="2">
                            <div class="licenses-list row g-3 mb-4">
                                                                <div class="col-12 d-flex licenses-item">
                                    <div class="input-group">
                                        <span class="input-group-text">License name</span>
                                        <input type="text" name="license_title[]" class="form-control" value="बियाणे ला.नं.">
                                        <span class="input-group-text">License number</span>
                                        <input type="text" name="biz_licenses[]" class="form-control" value="465646fdfafafafa">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeLicense(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                            </div>
                            <div class="licenses-save-btn" >
                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="update_license" class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="billingNotesSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex justify-content-between align-items-center">
                            <span>Invoice notes</span>
                            <button type="button" class="btn bt-sm btn-link p-0" onclick="addNotes(this)">
                                <i class="bi-plus-circle me-1"></i> Add invoice notes                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row g-4">
                            <div class="col-12">
                                <input type="hidden" name="biz_id" value="2">
                            </div>
                            <div class="col-12 notes-list">
                                                                                                                                <div class="d-flex notes-items mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">1</span>
                                        <input type="text" class="form-control" name="invoice_notes[]" placeholder="Notes" value="आमच्याकडे रोप निर्मीती केली जाते उत्पादनाची कोणतीही हमी घेतली जात नाही.">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeNotes(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                                <div class="d-flex notes-items mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">2</span>
                                        <input type="text" class="form-control" name="invoice_notes[]" placeholder="Notes" value="कारण बियाणे निर्मीती ही कंपनी मध्ये होते आमच्याकडे होत नाही.">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeNotes(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                                <div class="d-flex notes-items mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">3</span>
                                        <input type="text" class="form-control" name="invoice_notes[]" placeholder="Notes" value="व कंपनी ही कोणती ही उत्पादन ग्यारंटी घेत नाही.">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeNotes(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                                <div class="d-flex notes-items mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">4</span>
                                        <input type="text" class="form-control" name="invoice_notes[]" placeholder="Notes" value="हे बिल चेक वटल्या शिवाय ग्राह्य धरु नये.">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeNotes(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                                <div class="d-flex notes-items mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">5</span>
                                        <input type="text" class="form-control" name="invoice_notes[]" placeholder="Notes" value="शेतकऱ्याला रोप तयार करण्यासाठी ठरवुन दिलेल्या दिनांक च्या नंतर रोपाची कोणतीही जबाबदारी हि नर्सरी मालकाकडे राहणार नाही व त्याबाबत कोणतीही तक्रार ऐकल्या जाणार नाही.">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeNotes(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                                <div class="d-flex notes-items mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">6</span>
                                        <input type="text" class="form-control" name="invoice_notes[]" placeholder="Notes" value="याची शेतकरीबंधूनी नोंद घ्यावी.">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeNotes(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                                                            </div>
                            <div class="notes-save-btn" >
                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="update_invoice_notes" class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="quotationNotesSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex justify-content-between align-items-center">
                            <span>Quotation notes</span>
                            <button type="button" class="btn bt-sm btn-link p-0" onclick="addNotes(this)">
                                <i class="bi-plus-circle me-1"></i> Add quotation notes                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row g-4">
                            <div class="col-12">
                                <input type="hidden" name="biz_id" value="2">
                            </div>
                            <div class="col-12 notes-list">
                                                                                                                                <div class="d-flex notes-items mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">1</span>
                                        <input type="text" class="form-control" name="quotation_notes[]" placeholder="Notes" value="सदर कोटेशन कोटेशन दिल्या पासून ७ दिवसासाठी लागू असेल.">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeNotes(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                                <div class="d-flex notes-items mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light">2</span>
                                        <input type="text" class="form-control" name="quotation_notes[]" placeholder="Notes" value="७ दिवसानंतर चालू दरा नुसार बिल केले जाईल">
                                    </div>
                                    <button type="button" class="btn py-0 pe-0 text-danger border-0" onclick="removeNotes(this)">
                                        <i class="bi bi-trash3-fill fs-3"></i>
                                    </button>
                                </div>
                                                                                            </div>
                            <div class="notes-save-btn" >
                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="update_quotation_notes" class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="bookingNotesSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex justify-content-between align-items-center">
                            <span>Quotation notes</span>
                            <button type="button" class="btn bt-sm btn-link p-0" onclick="addNotes(this)">
                                <i class="bi-plus-circle me-1"></i> Add quotation notes                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row g-4">
                            <div class="col-12">
                                <input type="hidden" name="biz_id" value="2">
                            </div>
                            <div class="col-12 notes-list">
                                                                                            </div>
                            <div class="notes-save-btn" style="display: none;">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" name="update_booking_notes" class="btn btn-sm btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="billingSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex justify-content-between align-items-center">
                            <span>Billing settings</span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row g-4">
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_logo_in_invoice" name="show_logo_in_invoice" checked>
                                    <label class="form-check-label" for="show_logo_in_invoice">
                                        Show logo in invoice                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_address_in_invoice" name="show_address_in_invoice" checked>
                                    <label class="form-check-label" for="show_address_in_invoice">
                                        Show address in invoice                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_gst_in_invoice" name="show_gst_in_invoice" checked>
                                    <label class="form-check-label" for="show_gst_in_invoice">
                                        Show GST No. in invoice                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_licenses_in_invoice" name="show_licenses_in_invoice" checked>
                                    <label class="form-check-label" for="show_licenses_in_invoice">
                                        Show licenses in invoice                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_bank_details_in_invoice" name="show_bank_details_in_invoice" checked>
                                    <label class="form-check-label" for="show_bank_details_in_invoice">
                                        Show bank details in invoice                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_notes_in_invoice" name="show_notes_in_invoice" checked>
                                    <label class="form-check-label" for="show_notes_in_invoice">
                                        Show notes in invoice                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_notes_in_quotation" name="show_notes_in_quotation" checked>
                                    <label class="form-check-label" for="show_notes_in_quotation">
                                        Show notes in quotation                                    </label>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" name="update_billing_settings" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="bookingSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex justify-content-between align-items-center">
                            <span>Booking settings</span>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="row g-4">
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_logo_in_booking" name="show_logo_in_booking" checked>
                                    <label class="form-check-label" for="show_logo_in_booking">
                                        Show logo in booking                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_address_in_booking" name="show_address_in_booking" checked>
                                    <label class="form-check-label" for="show_address_in_booking">
                                        Show address in booking                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_gst_in_booking" name="show_gst_in_booking" checked>
                                    <label class="form-check-label" for="show_gst_in_booking">
                                        Show GST No. in booking                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_licenses_in_booking" name="show_licenses_in_booking" checked>
                                    <label class="form-check-label" for="show_licenses_in_booking">
                                        Show licenses in booking                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_bank_details_in_booking" name="show_bank_details_in_booking" checked>
                                    <label class="form-check-label" for="show_bank_details_in_booking">
                                        Show bank details in booking                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch lh-1">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_notes_in_booking" name="show_notes_in_booking" checked>
                                    <label class="form-check-label" for="show_notes_in_booking">
                                        Show notes in booking                                    </label>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" name="update_booking_settings" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Sticky Block End Point -->
            <div id="stickyBlockEndPoint"></div>
        </div>
    </div>
    <!-- End Row -->
</div>
<!-- End Content -->
<?php require_once __DIR__.'/footer.php' ?>