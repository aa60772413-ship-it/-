<?php
include_once "db.php";
$chk=$Mem->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if($chk){
    echo 1;
}else{
    echo 0;
}


?>