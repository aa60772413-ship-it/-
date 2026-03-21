<?php
include_once "db.php";
$table=$_GET['table'];
$DB=${ucfirst($_GET['table'])};
foreach ($_POST['id'] as $key => $id)  {
    $row=$DB->find($id);
if($table == 'title'){
    $row['sh']=($_POST['sh'] == $id)?1:0;
}else{
    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
}
    $DB->save($row);
}
?>