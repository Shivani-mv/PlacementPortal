?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

    $comName=$_POST['comName'];
    $visDate=$_POST['visDate'];
    $visTime=$_POST['visTime'];
    $comType=$_POST['comType'];
    $cutOff=$_POST['cutOff'];
    $comVenue=$_POST['comVenue'];

    $result=$conn->execute("INSERT INTO company (company_name, visit_date, visit_time, company_type,cut_off,venue1,insert_by3, insert_date3) 
     VALUES ('".$comName."', '".$visDate."', '".$visTime."', '".$comType."','".$cutOff."' ,'".$comVenue."','".$_SESSION["user"]."', CURRENT_TIMESTAMP)");

    if($result) {
        header("Location: " ."../../views/admin/create_com_visit.php?message=success");
        die();
    } else {
        header("Location: " ."../../views/admin/create_com_visit.php?message=failed");
        die();
    }

class NoticeStore
{

}