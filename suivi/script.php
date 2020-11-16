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


            $queryStudent = "SELECT * FROM student WHERE id = '$studentId' AND deleted != 'yes'";
            $queryStudent = $conn->query($queryStudent);
            $rowStudent = $queryStudent->fetch_assoc(); 
            $firstName = $rowStudent['firstname'];
            $lastname = $rowStudent['lastname'];
            $parentId =  $rowStudent['parent_id'];
    
            $queryParent = "SELECT * FROM parent WHERE id = '$parentId' AND deleted != 'yes'";
            $queryParent = $conn->query($queryParent);
            $rowParent = $queryParent->fetch_assoc();
            $firstName = $rowParent['firstname'];
            $lastname = $rowParent['lastname'];
            $phone =  $rowParent['phone'];
    
            $data = array(      
                "sender"=>"$firstName . ' REPORT'",
                "recipients"=>$phone,
                "message"=>"$firstName . ' Report is out'",        
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


            echo "<script>alert('Sheet has been uploaded successfull !');window.location.href='student-all-actions.php';</script>";
        }
    }
}