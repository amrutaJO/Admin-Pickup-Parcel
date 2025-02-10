<?php require_once __DIR__ . "/header.php" ?>
<div class="content container-fluid">
    <div class="page-header">
        <h1 class="page-header-title">Profile</h1>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5">
                <div class="d-grid">
                    <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse"
                        data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false"
                        aria-controls="navbarVerticalNavMenu">
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
                <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                    <ul id="navbarSettings"
                        class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical"
                        data-hs-sticky-block-options='{
                 "parentSelector": "#navbarVerticalNavMenu",
                 "targetSelector": "#header",
                 "breakpoint": "lg",
                 "startPoint": "#navbarVerticalNavMenu",
                 "endPoint": "#stickyBlockEndPoint",
                 "stickyOffsetTop": 20
               }'>
                        <li class="nav-item">
                            <a class="nav-link active" href="#profileInfoSection">
                                <i class="bi-person nav-icon"></i> Profile information </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#passwordSection">
                                <i class="bi-key nav-icon"></i> Change password </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="d-grid gap-3 gap-lg-5">
                <div id="profileInfoSection" class="card">
                    <div class="card-header">
                        <h2 class="card-title h4">Profile information</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" id="basic-info-form">
                            <div class="row mb-4">
                                <label for="u_avatar" class="col-sm-3 col-form-label form-label">
                                    Profile photo </label>
                                <div class="col-sm-9">
                                    <label class="avatar avatar-xxl avatar-circle avatar-uploader border shadow-sm p-1"
                                        for="u_avatar">
                                        <img id="u_avatar_preview" class="avatar-img bg-light"
                                            src="assets/svg/avatar.svg" style="object-fit: contain;">
                                        <input type="file" name="u_avatar" class="js-file-attach avatar-uploader-input"
                                            id="u_avatar" data-hs-file-attach-options='{
                                        "textTarget": "#u_avatar_preview",
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
                                <label class="col-sm-3 col-form-label form-label">
                                    Name </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="Demo" disabled>
                                        <input type="text" class="form-control" value="Admin" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-3 col-form-label form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="demo@pickupandparcel.com" disabled>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-sm-3 col-form-label form-label">Mobile number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="9876543210" disabled>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="change_avatar" form="basic-info-form"
                                    class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="passwordSection" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Change password</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="js-validate needs-validation" novalidate id="password-form">
                            <div class="row mb-4">
                                <label for="old_password" class="col-sm-3 col-form-label form-label">Old
                                    password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="u_password" id="old_password"
                                        required minlength="8" autocomplete="off">
                                    <label id="old_password-error" class="error invalid-feedback"
                                        for="old_password"></label>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="new_password" class="col-sm-3 col-form-label form-label">New
                                    password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="new_password"
                                        required minlength="8" autocomplete="off">
                                    <label id="new_password-error" class="error invalid-feedback"
                                        for="new_password"></label>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="confirm_password" class="col-sm-3 col-form-label form-label">Confirm new
                                    password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="cpassword" id="confirm_password"
                                        required minlength="8" autocomplete="off">
                                    <label id="confirm_password-error" class="error invalid-feedback"
                                        for="confirm_password"></label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="change_password"
                                    class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="stickyBlockEndPoint"></div>
        </div>
    </div>
</div>
<div class="toast-container position-fixed top-0 end-0 p-3 pt-5 mt-5"></div>
<?php require_once __DIR__ . '/footer.php' ?>