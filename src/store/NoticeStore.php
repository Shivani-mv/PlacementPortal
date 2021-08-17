<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

    $eventName=$_POST['eventName'];
    $eventDate=$_POST['eventDate'];
    $eventTime=$_POST['eventTime'];
    $eventType=$_POST['eventType'];
    $eventGuest=$_POST['eventGuest'];
    $eventVenue=$_POST['eventVenue'];

    $result=$conn->execute("INSERT INTO offline (event_name, event_date, event_time, event_type,guest,venue,insert_by, insert_date) 
     VALUES ('".$eventName."', '".$eventDate."', '".$eventTime."', '".$eventType."','".$eventGuest."' ,'".$eventVenue."','".$_SESSION["user"]."', CURRENT_TIMESTAMP)");

    if($result) {
        header("Location: " ."../../views/admin/create_offline_event.php?message=success");
        die();
    } else {
        header("Location: " ."../../views/admin/create_offline_event.php?message=failed");
        die();
    }

class NoticeStore
{

}