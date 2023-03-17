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
Student
</title>
</head>
<body>
<?php
//echo $_SESSION["login"];由5到8行代替
//echo "<br>";
echo "學生的網頁";
echo "<br>";
?>
<a href="0316_A1103320logout.php">點選登出</a>
</body>
</html>