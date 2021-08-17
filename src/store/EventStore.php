<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$eventName1=$_POST['eventName1'];
$eventDate1=$_POST['eventDate1'];
$eventTime1=$_POST['eventTime1'];
$eventType1=$_POST['eventType1'];
$eventCoordinator=$_POST['eventCoordinator'];
$eventPlatform=$_POST['eventPlatform'];

$result=$conn->execute("INSERT INTO online (event_name1, event_date1, event_time1, event_type1, coordinator, platform, insert_by1, insert_date1) 
     VALUES ('".$eventName1."', '".$eventDate1."', '".$eventTime1."', '".$eventType1."','".$eventCoordinator."','".$eventPlatform."','".$_SESSION["user"]."', CURRENT_TIMESTAMP)");

if($result) {
    header("Location: " ."../../views/admin/create_online_event.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/create_online_event.php?message=failed");
    die();
}

class EventStore
{

}