<?php

class Common
{
  public function uploadData($conn,$id,$reportId,$quiz,$exam,$total,$createdOn,$updatedOn,$deleted,$course)
  {
      $mainQuery = "INSERT INTO marks SET id='$id',report_id='$reportId',course='$course',quiz='$quiz',exam='$exam',total='$total',created_on='$createdOn',updated_on='$updatedOn',deleted='$deleted'";
      $result1 = $conn->query($mainQuery) or die("Error in main Query".$conn->error);
      return $result1;
  }
}