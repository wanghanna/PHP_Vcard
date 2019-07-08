<?php
session_start();
$_SESSION['name']=$_POST['name'];
$_SESSION['job']=$_POST['job'];
$_SESSION['tel']=$_POST['tel'];
$_SESSION['email']=$_POST['email'];
$_SESSION['skill']=$_POST['skill'];
$_SESSION['mypic']=$_FILES['mypic']['name'];
$_SESSION['type']=$_POST['type'];
$_SESSION['type_in']=$_POST['type_in'];

copy($_FILES["mypic"]["tmp_name"],"upload/".$_FILES["mypic"]["name"]);

header("location:preview.php");
?>