<?php
include_once "db.php";
$table = $_GET['table'];
$DB = ${ucfirst($table)};
dd($_POST);
dd($_GET['main_id']);
foreach($_POST['id'] as $k=>$id){
    if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
        $DB->del($id);
        continue;
        }
    
    $row = $DB->find($id);
    // dd($row);
        switch ($table) {
            case 'title':
                $row['sh'] = ($_POST['sh']==$id)?1:0;
                $row['text']=$_POST['text'][$k];
                break;
            case 'total':
            case 'bottom':
            
                $row['text']=$_POST['text'];

                  break;
            case 'ad':
            case 'news':
            
                $row['text'] = ($_POST['sh']==$id)?1:0;

                break;
            case 'mem':
            
                $row['acc']=$_POST['acc'][$k];
                $row['pw']=$_POST['pw'][$k];

                break;
            case 'mvim' :
            case 'image':
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']))?1:0;

                break;
            case 'menu':
                $row['text']=$_POST['text'][$k];
                $row['href']=$_POST['href'][$k];
                $row['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh']))?1:0;
                $row['main_id'] = (isset($_GET['main_id']))?$_GET['main_id']:0;
                break;

                
              
            default:
                # code...
                break;
        }
dd($_POST);

        $DB->save($row);
        to("../back.php?do=$table");
}





?>