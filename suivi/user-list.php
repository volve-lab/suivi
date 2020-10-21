<?php include("session.php"); 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Users</title>

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

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">


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

                <div class="page__heading">
                    <div class="container-fluid page__container">
                        <div class="row">
                            <div class="col col-md-6"><h1 class="mb-0">Users list</h1></div>
                            <!-- <div class="col col-md-6"><a href="#" class="btn btn-primary float-right">add user</a></div> -->
                        </div>
                    </div>
                </div>
                <div class="bg-white border-bottom mb-3">
                </div>
                <div class="container-fluid page__container">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="activity_all">
                            <!-- FIRST TAB CONTENT -->
                            
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Username</th>
                                                <th>User type</th>
                                                <th>Status</th>
                                                <th>Created on</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no=0;
											$query = "SELECT * FROM users WHERE deleted != 'yes'";
											$query = $conn->query($query);
												while($row = $query->fetch_assoc()){
                                                    $no++;
                                                    $userTypeId = $row['user_type_id'];
                                                    $queryUser = "SELECT * FROM usertype WHERE id='$userTypeId' AND deleted != 'yes'";
                                                    $queryUser = $conn->query($queryUser);
                                                        while($rowUser = $queryUser->fetch_assoc()){
										?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $rowUser['name']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                                <td><?php echo $row['created_on']; ?></td>
                                                <td><Button class="btn btn-secondary">Activate</Button></td>
                                            </tr>
                                            <?php }} ?>

                                        </tbody>
                                    </table>

                            <!-- END FIRST TAB CONTENT -->
                        </div>
                        <div class="tab-pane fade" id="activity_purchases">
                            <!-- SECOND TAB CONTENT -->



                            <!-- END SECOND TAB -->
                        </div>
                        <div class="tab-pane fade" id="activity_emails">
                            Ducimus aperiam aut corporis, facere nobis id quos dignissimos, ut corrupti asperiores
                            reprehenderit culpa praesentium exercitationem, officia commodi.
                        </div>
                        <div class="tab-pane fade" id="activity_quotes">
                            Odit consectetur dolore maxime similique qui officia deserunt fugiat quo tempore
                            consequuntur dicta ratione sint commodi eum eligendi, magnam aliquid expedita quas
                            accusantium, sed nobis tenetur illum mollitia. Quis ipsum tenetur distinctio tempore
                            vitae atque quam.
                        </div>
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

    <script>
        $(document).ready(function() {
        $('#example').DataTable();} );
    </script>
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

    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

</body>


<!-- Mirrored from educate.frontted.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 02:19:31 GMT -->

</html>