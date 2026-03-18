<?php
include_once "db.php";
$table=$_GET['table'];
$id=$_GET['id'];
$DB=${ucfirst($_GET['table'])};
// dd($_POST);
if(!empty($id)){
$_POST['id']=$id;
//   dd($_POST);  
}else{
    switch ($table) {
        case 'title':
             $_POST['sh'] = ($DB->count(['sh'=>1]) == 0) ? 1 : 0;
            break;
        
        default:
            # code...
            break;
    }       
}
// dd($_POST);
    $DB->save($_POST);

    to("../back.php?do=$table");
?>