<?php

include_once "db.php";
dd($_POST);

if(!empty($_GET['id'])){
    $_POST['id']=$_GET['id'];
}
$DB=${ucfirst($_GET['table'])};
dd($_POST);
$DB->save($_POST);
// to("../back.php?do={$_GET['table']}");
?>
