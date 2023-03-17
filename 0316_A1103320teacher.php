
<?php
session_start();
?>
<?php
if($_SESSION["login"]=="Yes"){
}else{
    header("Location:0316_A1103320error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>
Teacher
</title>
</head>
<body>
<?php
//echo $_SESSION["login"];由5到8行代替
//echo "<br>";
echo "老師的網頁";
echo "<br>";
?>
若要點選學生的網頁請<a href="0316_A1103320student.php">按此處</a>
<a href="0316_A1103320logout.php">點選登出</a>
</body>
</html>