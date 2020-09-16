<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from educate.frontted.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 02:18:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115115077-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-115115077-4');
    </script>



    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '340571383230227');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=340571383230227&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->




    <!-- Flatpickr -->
    <link type="text/css" href="assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">



</head>

<body class="layout-default">

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <?php include('includes/header.php'); ?>
            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
                style="padding-top: 60px;">


                <div class="page__heading border-bottom">
                    <div class="container-fluid page__container d-flex align-items-center">
                        <h1 class="mb-0">Edit Account</h1>
                    </div>
                </div>

                <div class="container-fluid page__container">
                    <div class="card card-form">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Basic Information</strong></p>
                                <p class="text-muted mb-0">Edit your account details and settings.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First name</label>
                                            <input id="fname" type="text" class="form-control" placeholder="First name"
                                                value="Adrian">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last name</label>
                                            <input id="lname" type="text" class="form-control" placeholder="Last name"
                                                value="Demian">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Bio / Description</label>
                                    <textarea id="desc" rows="4" class="form-control"
                                        placeholder="Bio / description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label><br />
                                    <select id="country" class="custom-select w-auto">
                                        <option value="usa">United States</option>
                                        <option value="usa">Canada</option>
                                    </select>
                                    <small class="form-text text-muted">The country is not visible to other users.</small>
                                </div>
                                <div class="form-group">
                                    <label for="subscribe">Subscribe to newsletter</label><br>
                                    <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                        <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                        <label class="custom-control-label" for="subscribe">Yes</label>
                                    </div>
                                    <label for="subscribe" class="mb-0">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-form">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Update Your Password</strong></p>
                                <p class="text-muted mb-0">Change your password.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="opass">Old Password</label>
                                            <input id="opass" type="password" class="form-control" placeholder="Old password"
                                                value="****">
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">New Password</label>
                                            <input id="npass" type="password" class="form-control is-invalid">
                                            <small class="invalid-feedback">The new password must not be empty.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="cpass">Confirm Password</label>
                                            <input id="cpass" type="password" class="form-control" placeholder="Confirm password">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-form">
                        <div class="row no-gutters">
                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Profile Settings</strong></p>
                                <p class="text-muted mb-0">Update your public profile with relevant and meaningful information.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <div class="dz-clickable media align-items-center" data-toggle="dropzone"
                                        data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable"
                                        data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                                        <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                            <div class="avatar avatar-lg">
                                                <img src="assets/images/account-add-photo.svg" class="avatar-img rounded" alt="..."
                                                    data-dz-thumbnail>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc2">Description</label>
                                    <textarea id="desc2" rows="4" class="form-control" placeholder="Description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="social1">Social links</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-merge mb-2">
                                                <input id="social1" type="text" class="form-control form-control-prepended"
                                                    placeholder="Facebook">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-facebook text-facebook"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-merge mb-2">
                                                <input id="social2" type="text" class="form-control form-control-prepended"
                                                    placeholder="Twitter">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-twitter text-twitter"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-merge mb-2">
                                                <input id="social3" type="text" class="form-control form-control-prepended"
                                                    placeholder="Instagram">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-instagram text-instagram"></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customCheck1">Available for freelance?</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                        <label class="custom-control-label" for="customCheck1">Yes, show me as available for
                                            freelance!</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mb-5">
                        <a href="#" class="btn btn-success">Save</a>
                    </div>
                </div>


            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

    </div>
    <!-- // END drawer-layout__content -->

    <!-- Left side bar START -->
    <?php include('includes/left-bar.php'); ?>
    <!-- Left side bar END -->
    </div>
    <!-- // END drawer-layout -->


    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>


    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Moment.js -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/moment-range.js"></script>


    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- App Charts JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/charts.js"></script>

    <!-- Chart Samples -->
    <script src="assets/js/page.analytics.js"></script>


</body>


<!-- Mirrored from educate.frontted.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 02:19:31 GMT -->

</html>