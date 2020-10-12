<?php include("session.php"); 
      include("uuid.php");  

if (isset($_POST['submit'])) {

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $userType=$_POST['userType'];
    $date = date('Y-m-d');
    $uuid = gen_uuid();

    $query = "SELECT * FROM usertype WHERE name='parent' AND deleted != 'yes'";
    $query = $conn->query($query);
    $row = $query->fetch_assoc();
    $userTypeId = $row['id'];
    // SQL query to fetch information of registerd users and finds user match.
    $query = "INSERT INTO parent(id, firstname, lastname, gender, phone, email, created_on, deleted) VALUES ('$uuid', '$firstname', '$lastname', '$gender', '$phone', '$email', '$date', 'no')";
    if($conn->query($query)){
        $uuidId = gen_uuid();
        $query = "INSERT INTO users(id, username, password, user_type_id, user_id, status, created_on, deleted) VALUES ('$uuidId', '$username', '', '$userTypeId', '$uuid', 'Active', '$date', 'no')";
        $query = $conn->query($query);
        header("Location: student-add.php?success");
    }else {
        header("Location: student-add.php?error");
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parent</title>

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

                <div class="page__heading">
                    <div class="container-fluid page__container">
                        <h1 class="mb-0">Add new parent</h1>
                    </div>
                </div>
                <div class="bg-white border-bottom mb-3">
                </div>
                <div class="container-fluid page__container">
                    <div class="tab-content">
                        <div class="tab-pane active show fade" id="activity_all">
                            <!-- FIRST TAB CONTENT -->
                            <div class="card card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-12 card-form__body card-body">
                                <?php if(isset($_GET['success'])){ ?>
                              <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> Registered</div>
                              <?php } ?>
                              <?php if(isset($_GET['error'])){ ?>
                              <div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Something went wrong, Try again !</div>
                              <?php } ?>
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Firstname</label>
                                                    <input name="firstname" type="text" class="form-control" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Lastname</label>
                                                    <input name="lastname" type="text" class="form-control" placeholder="Last name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Gender</label>
                                                    <select name="gender" class="form-control">
                                                        <option selected disabled>Choose...</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Male">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Phone</label>
                                                    <input name="phone" type="text" class="form-control" placeholder="Phone number">
                                                </div>
                                            </div>
                                            </div>
                                        </div> 

                                        <div class="row">
                                        <div class="col">
                                                <div class="form-group">
                                                    <label >Email</label>
                                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Username</label>
                                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            
                                        </div>   
                                        <div class="row">
                                            <div class="col col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

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