<?php
use PhpMyAdmin\Session;

print_r($_POST);
echo $name=$_POST['name'];
echo $job=$_POST['job'];
echo $tel=$_POST['tel'];
echo $email=$_POST['email'];
echo $skill=$_POST['skill'];
echo $mypic=$_FILES['mypic']['name'];
echo $type=$_POST['type'];

copy($_FILES["mypic"]["tmp_name"],"upload/".$_FILES["mypic"]["name"]);

session_start();
$_SESSION['name']=$name;
$_SESSION['job']=$job;
$_SESSION['tel']=$tel;
$_SESSION['email']=$emil;
$_SESSION['skill']=$skill;
$_SESSION['mypic']=$mypic;
$_SESSION['type']=$type;

header("location:preview.php");
?>