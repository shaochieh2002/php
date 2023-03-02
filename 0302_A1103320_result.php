<meta charset ="utf8">
<?php
if(isset($_POST["id"])){

$id=$_POST["id"];
$idName=$_POST["idName"];
$gender=$_POST["gender"];
$email=$_POST["email"];

echo "你的id是:".$id."<br/>";
echo "你的姓名是:".$idName."<br/>";
echo "email為：".$email."<br/>";
echo "性別為:";

if($gender=="male"){
    echo "男生</br>";
}else{
    echo "女生</br>";
}
if(isset($_POST["ball"])){
    $swim=$_POST["ball"];
    echo "球類運動</br>";
}
if(isset($_POST["sing"])){
    $swim=$_POST["sing"];
    echo "聲林之王</br>";
}
if(isset($_POST["play"])){
    $swim=$_POST["play"];
    echo "團康活動</br>";
}

$grade=$_POST["grade"];

echo "系級為：";
foreach ($grade as $value){
    echo $value." </br>";
}

$comment=$_POST["comment"];
echo "其他注意事項：</br>";
echo nl2br(strip_tags($comment));

}
?>

