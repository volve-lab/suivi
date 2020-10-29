<?php
$server="localhost";
$user="root";
$pass="awkward12";
$db="suivi";
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
function getlocation($id, $location) {
    $conn = new mysqli('localhost', 'root', 'awkward12', 'suivi');
    //
    $query = "SELECT name FROM $location WHERE id = '$id'";
    $query = $conn->query($query);
    $row = $query->fetch_assoc();
    return $row['name'];
}
function send_message($receiver,$message)
{
    return;
    $data = array(      
        "sender"=>"Suivi",
        "recipients"=>$receiver,
        "message"=>$message,        
    );

    $url = "https://www.intouchsms.co.rw/api/sendsms/.json";
    
    $data = http_build_query ($data);

    $username="";
    $password="";
    
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
    
    //echo $result;
    //echo $httpcode;

    //sudo apt-get install php5-curl
    //sudo service apache2 restart
}
?>