<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$testName=$_POST['testName'];
$testDate=$_POST['testDate'];
$testTime=$_POST['testTime'];
$testType=$_POST['testType'];
$testMode=$_POST['testMode'];
$testPv=$_POST['testPv'];

$result=$conn->execute("INSERT INTO test (test_name, test_date, test_time, test_type, mode, pv, insert_by2, insert_date2) 
     VALUES ('".$testName."', '".$testDate."', '".$testTime."', '".$testType."','".$testMode."','".$testPv."','".$_SESSION["user"]."', CURRENT_TIMESTAMP)");

if($result) {
    header("Location: " ."../../views/admin/create_test.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/create_test.php?message=failed");
    die();
}

class EventStore
{

}