<?php
session_start();
?>

<?php
$stID="student";
$stPWD="stu";

$trID="teacher";
$trPWD="tea";

$prID="principle";
$prPWD="pri";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($stID==$id)&&($stPWD==$pwd)||($trID==$id)&&($trPWD==$pwd)||($prID==$id)&&($prPWD==$pwd)){                
    $_SESSION["login"]="Yes";
    //echo "login success";
    if(($stID==$id)&&($stPWD==$pwd)){
        header("Location:0316_A1103320student.php");
    }
    if(($trID==$id)&&($trPWD==$pwd)){
        header("Location:0316_A1103320teacher.php");
    }
    if(($prID==$id)&&($prPWD==$pwd)){
        header("Location:0316_A1103320principle.php");
    }    
}else{
    $_SESSION["login"]="No";
    //echo "login failed";
    header("Location:0316_A1103320error.php");
}
?>