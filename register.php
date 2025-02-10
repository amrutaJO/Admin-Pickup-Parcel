
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
    <title>Register | Paarsh Infotech</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">

  <link rel="preload" href="assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/","assets/css/docs.css","assets/vendor/icon-set/","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body>

  <script src="assets/js/hs.theme-appearance.js"></script>

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main bg-light">

    <!-- Content -->
    <div class="container py-5 py-sm-7">
      <div class="mx-auto" style="max-width: 30rem;">
        <!-- Card -->
        <a class="d-flex justify-content-center mb-3" href="./">
          <img class="zi-2" src="assets/svg/logos/logo.svg" alt="Image Description" style="width: 12rem;">
        </a>
        <div class="card card-lg mb-5">
          <div class="card-body">
            <!-- Form -->
            <form class="js-validate needs-validation" novalidate id="register-form" method="post">
              <div class="text-center">
                <div class="mb-5">
                  <h1 class="display-5">Create your account</h1>
                  <p>Already have an account? <a class="link" href="login.php">Login here</a></p>
                </div>
              </div>
                            <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupSrBizName">Your business</label>
                <input type="text" class="form-control form-control-lg" name="biz_name" id="signupSrBizName" placeholder="Business name" aria-label="Business name" required>
                <label id="signupSrBizName-error" class="error invalid-feedback" for="signupSrBizName"></label>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-4">
                    <label class="form-label" for="signupSrFname">First Name</label>
                    <input type="text" class="form-control form-control-lg" name="u_fname" id="signupSrFname" placeholder="First Name" aria-label="First Name" required>
                    <label id="signupSrFname-error" class="error invalid-feedback" for="signupSrFname"></label>
                  </div>
                  <!-- End Form -->
                </div>

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <label class="form-label" for="signupSrLname">Last Name</label>
                    <input type="text" class="form-control form-control-lg" name="u_lname" id="signupSrLname" placeholder="Last Name" aria-label="Last Name" required>
                    <label id="signupSrLname-error" class="error invalid-feedback" for="signupSrLname"></label>
                  </div>
                  <!-- End Form -->
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupSrMobile">Your mobile number</label>
                <input type="tel" class="form-control form-control-lg" name="u_mobile" id="signupSrMobile" placeholder="9876543210" aria-label="9876543210" required minlength="10" oninput="allowType(event, 'mobile')">
                <label id="signupSrMobile-error" class="error invalid-feedback" for="signupSrMobile"></label>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupSrEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="u_email" id="signupSrEmail" placeholder="user@example.com" aria-label="user@example.com" required>
                <label id="signupSrEmail-error" class="error invalid-feedback" for="signupSrEmail"></label>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupSrPassword">Password</label>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                  <input type="password" class="js-toggle-password form-control form-control-lg" name="u_password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                           "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": ".js-toggle-password-show-icon-1"
                         }'>
                  <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                    <i class="js-toggle-password-show-icon-1 bi-eye"></i>
                  </a>
                </div>
                <label id="signupSrPassword-error" class="error invalid-feedback" for="signupSrPassword"></label>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupSrConfirmPassword">Confirm password</label>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                  <input type="password" class="js-toggle-password form-control form-control-lg" name="u_cpassword" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                           "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": ".js-toggle-password-show-icon-2"
                         }'>
                  <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
                    <i class="js-toggle-password-show-icon-2 bi-eye"></i>
                  </a>
                </div>
                <label id="signupSrConfirmPassword-error" class="error invalid-feedback" for="signupSrConfirmPassword"></label>
              </div>
              <!-- End Form -->

              <!-- Form Check -->
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="accepted" name="u_terms" id="termsCheckbox" required>
                <label class="form-check-label" for="termsCheckbox">
                  I accept the <a href="#">Terms and Conditions</a>                </label>
                <label id="u_terms-error" class="error invalid-feedback" for="u_terms"></label>
              </div>
              <!-- End Form Check -->

              <div class="d-grid gap-2">
                <button type="submit" name="register" class="btn btn-primary btn-lg">Create an account</button>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/additional-methods.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        // HSBsValidation.init('.js-validate');
        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password');
        $('#register-form').validate({
          rules: {
            biz_name: {
              required: true,
            },
            u_fname: {
              required: true,
            },
            u_lname: {
              required: true,
            },
            u_mobile: {
              required: true,
              minlength: 10,
            },
            u_email: {
              required: true,
              email: true,
            },
            u_password: {
              required: true,
            },
            u_cpassword: {
              required: true,
              equalTo: '#signupSrPassword',
            },
            u_terms: {
              required: true,
            },
          },
          messages: {
            biz_name: {
              required: 'Please enter a business name.',
            },
            u_fname: {
              required: 'Please enter your first name.',
            },
            u_lname: {
              required: 'Please enter your last name.',
            },
            u_mobile: {
              required: 'Please enter a valid mobile number.',
              minlength: 'Please enter at least 10 digits.',
            },
            u_email: {
              required: 'Please enter a valid email address.',
              email: 'Please enter a valid email address.',
            },
            u_password: {
              required: 'Your password is invalid. Please try again.',
              minlength: 'Please enter at least 8 characters.',
            },
            u_cpassword: {
              required: 'Your password is invalid. Please try again.',
              equalTo: 'Password does not match the confirm password.',
              minlength: 'Please enter at least 8 characters.',
            },
            u_terms: {
              required: 'Please accept our Terms and Conditions.',
            }
          }
        });
      }
    })()
  </script>
</body>
</html>