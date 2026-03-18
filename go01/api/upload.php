<?php
include_once "db.php";
$table=$_GET['table'];
$id=$_GET['id'];
$DB=${ucfirst($_GET['table'])};
// dd($_POST);
if(!empty($id)){
$_POST['id']=$id;}
$DB->save($_POST);
    to("../back.php?do=$table");
?>