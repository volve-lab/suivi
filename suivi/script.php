<?php
include("session.php");
include_once  "Common.php";
include("uuid.php");

$studentId = $_GET['student-id'];
$date = date('Y-m-d');

if($_FILES['excelDoc']['name']) {
    $report = gen_uuid();

    $query = "INSERT INTO report(id, student_id, created_on, updated_on, deleted) VALUES ('$report','$studentId', '$date', '', 'no')";
    $conn->query($query);

    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;

            if ($count == 1) {
                continue;
            }

                // $id = $conn->real_escape_string($data[0]);
                $id = gen_uuid();
                $reportId = $report;
                $course = $conn->real_escape_string($data[2]);
                $quiz = $conn->real_escape_string($data[3]);
                $exam = $conn->real_escape_string($data[4]);
                $total = $conn->real_escape_string($data[5]);
                $createdOn = $conn->real_escape_string($data[6]);
                $updatedOn = $conn->real_escape_string($data[7]);
                $deleted = $conn->real_escape_string($data[8]);
                $common = new Common();
                $SheetUpload = $common->uploadData($conn,$id,$reportId,$quiz,$exam,$total,$createdOn,$updatedOn,$deleted,$course);
        }
        if ($SheetUpload){
            echo "<script>alert('Sheet has been uploaded successfull !');window.location.href='student-all-actions.php';</script>";
        }
    }
}