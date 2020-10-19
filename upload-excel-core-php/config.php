<?php

$connection = new mysqli("localhost","root","awkward12","exeldata");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}