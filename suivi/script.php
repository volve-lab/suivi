<?php
include("session.php");
include_once  "Common.php";
include("uuid.php");

if($_FILES['excelDoc']['name']) {
    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            if ($count == 1) {
                continue;
            }
                $id = $conn->real_escape_string($data[0]);
                $reportId = $conn->real_escape_string($data[1]);
                $quiz = $conn->real_escape_string($data[2]);
                $exam = $conn->real_escape_string($data[3]);
                $total = $conn->real_escape_string($data[4]);
                $createdOn = $conn->real_escape_string($data[5]);
                $updatedOn = $conn->real_escape_string($data[6]);
                $deleted = $conn->real_escape_string($data[7]);
                $common = new Common();
                $SheetUpload = $common->uploadData($conn,$id,$reportId,$quiz,$exam,$total,$createdOn,$updatedOn,$deleted);
        }
        if ($SheetUpload){
            echo "<script>alert('Sheet has been uploaded successfull !');window.location.href='student-all-actions.php';</script>";
        }
    }
}