<?php include("session.php"); 

// -id uuid
// -student-id string
// -description string
// -start date time
// -end date time
// -created-on date
// -deleted boolean 

include("uuid.php"); 

$studentId = $_GET['student-id'];

if (isset($_POST['permission'])) {

    $description=$_POST['description'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $date = date('Y-m-d');
    $uuid = gen_uuid();
    $receiver = '0788211579';
 
    $query = "INSERT INTO permission(id, student_id, description, start_date, end_date, start_time, end_time, created_on, deleted) VALUES ('$uuid', '$studentId', '$description', '$startDate', '$endDate', '$startTime', '$endTime', '$date', 'no')";
    if($conn->query($query)){
        // $uuidId = gen_uuid();
        // $query = "INSERT INTO users(id, username, password, user_type_id, user_id, status, created_on, deleted) VALUES ('$uuidId', '$username', '', '$userTypeId', '$uuid', 'Active', '$date', 'no')";
        // $query = $conn->query($query);


        $data = array(      
            "sender"=>"Suivi",
            "recipients"=>$receiver,
            "message"=>$description,        
        );
    
        $url = "https://www.intouchsms.co.rw/api/sendsms/.json";
        
        $data = http_build_query ($data);
    
        $username="gapfizi";
        $password="pass123"; 
        
        //open connection
        $ch = curl_init();
    
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
    
        //execute post
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //close connection
        curl_close($ch);

        // send_message('0788211579',$description);
        header("Location: student-all-actions.php?student-id='$studentId'&success-permission");
    }else {
        header("Location: student-all-actions.php?student-id='$studentId'&error-permission");
    }
}

if (isset($_POST['submit'])) {

    $comment=$_POST['comment'];
    $marks = $_POST['marks'];
    $date = date('Y-m-d');
    $uuid = gen_uuid();
 
    $query = "INSERT INTO disciplinemarks(id, student_id, marks, comment, created_on, deleted) VALUES ('$uuid', '$studentId', '$marks', '$comment', '$date', 'no')";
    if($conn->query($query)){
        header("Location: student-all-actions.php?student-id=$studentId&success");
    }else {
        header("Location: student-all-actions.php?student-id=$studentId&error");
    }
}

$queryStudent = "SELECT * FROM student WHERE id='$studentId' deleted != 'yes'";
$queryStudent = $conn->query($queryStudent);
$rowStudent = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student</title>

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
                            <div class="col col-md-6"><h1 class="mb-0">Student status</h1></div>
                            <div class="col col-md-6">
                            <?php if($role == 'staff' || $role == 'administrator'){ ?>
                                <a href="student-list.php" class="text-dark-gray ml-2 float-right">
                                    <i class="material-icons">reply</i>
                                </a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-bottom mb-3">
                        <div class="container-fluid nav nav-tabs" role="tablist">
                            <a href="#permission" class="active" data-toggle="tab" role="tab" aria-controls="activity_all" aria-selected="true">Permission</a>
                            <a href="#discipline-marks" data-toggle="tab" role="tab" aria-selected="false">Discipline Marks</a>
                            <a href="#course-marks" data-toggle="tab" role="tab" aria-selected="false">Course Marks</a>
                      </div>
                    </div>
                <!-- <div class="bg-white border-bottom mb-3">
                </div> -->
                
                <div class="container-fluid page__container">
                
                    <div class="tab-content">
                    
                        <div class="tab-pane active show fade" id="permission">
                            <!-- 1 FIRST TAB CONTENT permission -->

                            <?php if(isset($_GET['success-permission'])){ ?>
                              <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> action performed</div>
                              <?php } ?>
                              <?php if(isset($_GET['error-permission'])){ ?>
                              <div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Something went wrong, Try again !</div>
                              <?php } ?>
                              
                                <div class="row">
                                <?php if($role == 'staff'){ ?>
                                <div class="col-md-12">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Description</label>
                                                    <textarea name="description" type="text" class="form-control" rows="4" cols="50" placeholder="Description"> </textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Start date</label>
                                                    <input name="startDate" type="date" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >End date</label>
                                                    <input name="endDate" type="date" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >Start time</label>
                                                    <input name="startTime" type="time" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label >End time</label>
                                                    <input name="endTime" type="time" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-6">
                                                <div class="form-group">
                                                    <button type="submit" name="permission" class="btn btn-primary">submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                              </div>
                              <?php } ?>

                              <div class="col-md-12">
                                    <table id="example" class="table table-bordered" style="width:100%; background:#46BEDB">
                                        <thead>
                                            <tr>
                                                <th>Permission</th>
                                                <th>Start</th>
                                                <th>End</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
											$query = "SELECT * FROM permission WHERE deleted != 'Yes'";
											$query = $conn->query($query);
												while($row = $query->fetch_assoc()){
										?>
                                            <tr>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><?php echo $row['start_date'] . 'at' . $row['start_time']; ?></td>
                                                <td><?php echo $row['end_date'] . 'at' . $row['end_time']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>    
                            <!-- 1 END FIRST TAB CONTENT permission -->
                        </div>
                        
                        <div class="tab-pane fade" id="discipline-marks">
                            <!-- 2 THIRD TAB CONTENT discipline -->

                            <?php if(isset($_GET['success'])){ ?>
                              <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> action performed</div>
                              <?php } ?>
                              <?php if(isset($_GET['error'])){ ?>
                              <div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Something went wrong, Try again !</div>
                              <?php } ?>

                            <div class="row">
                            <?php if($role == 'staff'){ ?>
                                <div class="col-md-12">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Comment</label>
                                                    <textarea name="comment" type="text" class="form-control" rows="4" cols="50" placeholder="Write a comment"> </textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col col-md-12">
                                                        <div class="form-group">
                                                            <label >Marks</label>
                                                            <input name="marks" type="text" class="form-control" placeholder="Enter marks to remove">
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" name="submit" class="btn btn-primary">submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>   
                                    </form>
                                </div>
                            <?php } ?>
                                <div class="col-md-12">
                                    <table id="example" class="table table-bordered" style="width:100%; background:#FFCD5A">
                                        <thead>
                                            <tr>
                                                <th>Marks/50</th>
                                                <th>Comment</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = "SELECT * FROM disciplinemarks WHERE deleted != 'yes' ORDER BY created_on DESC";
                                                $query = $conn->query($query);
                                                $rows = $query->num_rows;
                                                    while($row = $query->fetch_assoc()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['marks']; ?></td>
                                                    <td><?php echo $row['comment']; ?></td>
                                                    <td><?php echo $row['created_on']; ?></td>
                                                </tr> 
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- 2 END THIRD TAB discipline-->
                        </div>

                        <div class="tab-pane fade" id="course-marks">
                            <!-- 3 SECOND TAB CONTENT course-marks -->

                                <?php if(isset($_GET['success'])){ ?>
                              <div class="alert alert-success alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Successfully!</strong> action performed</div>
                              <?php } ?>
                              <?php if(isset($_GET['error'])){ ?>
                              <div class="alert alert-danger alert-dismissable"><button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button></span><strong>Oops!</strong> Something went wrong, Try again !</div>
                              <?php } ?>

                            <div class="row">
                            <?php if($role == 'staff'){ ?>
                                <div class="col-md-12">
                                    <form action="script.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label >Marks</label>
                                                    <input name="excelDoc" type="file" class="form-control" placeholder="Enter marks to remove">
                                                </div>
                                            </div>
                                            <div class="col col-md-6 mt-4">
                                                <div class="form-group">
                                                    <button type="submit" name="report" class="btn btn-primary">submit</button>
                                                </div>
                                            </div>
                                        </div>   
                                    </form>
                                </div>
                            <?php } ?>
                                <div class="col-md-12">
                                    <table id="example" class="table table-bordered" style="width:100%; background:#59BB4C">
                                        <thead>
                                            <tr>
                                                <th>Course</th>
                                                <th>Quiz</th>
                                                <th>Exam</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
											$query = "SELECT * FROM marks";
											$query = $conn->query($query);
												while($row = $query->fetch_assoc()){
										?>
                                            <tr>
                                                <td><?php echo $row['course']; ?></td>
                                                <td><?php echo $row['quiz']; ?></td>
                                                <td><?php echo $row['exam']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 3 END SECOND TAB course-marks -->
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