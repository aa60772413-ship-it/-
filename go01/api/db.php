<?php
session_start();
date_default_timezone_set("Asia/Taipei");
Class DB{
private $dsn="mysql:host=localhost;dbname=db01_2;charset=utf8;";
private $pdo;
private $table;

function __construct($table)
{
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,'root',"");

}
function ats($array){
    $tmp=[];
    foreach($array as $k=>$v){
        $tmp[]="`$k`='$v'";
    }
    return $tmp;
}
function all(...$arg){
    $sql="SELECT * FROM {$this->table}";
    if(isset($arg[0])){
        if(is_array($arg[0])){
            $tmp=$this->ats($arg[0]);
            $sql.=" WHERE ".join(' AND ',$tmp);
        }else{
            $sql.=$arg[0];
        }
    }
    if(isset($arg[1])){
        $sql .=$arg[1];
    }
return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
function find($id){
    $sql="SELECT * FROM {$this->table}";
    if(isset($id)){
        if(is_array($id)){
            $tmp=$this->ats($id);
            $sql.=" WHERE ".join(' AND ',$tmp);
        }else{
            $sql.=" WHERE `id`='{$id}'";
        }
        }
      return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        }
function del($id){
    $sql="DELETE FROM {$this->table}";
    if(isset($id)){
        if(is_array($id)){
            $tmp=$this->ats($id);
            $sql.=" WHERE ".join(' AND ',$tmp);
        }else{
            $sql.=" WHERE `id`='{$id}'";
        }
        }
        return $this->pdo->exec($sql);
    }

function count(...$arg){
    $sql="SELECT COUNT(*) FROM {$this->table}";
    if(isset($arg[0])){
        if(is_array($arg[0])){
            $tmp=$this->ats($arg[0]);
            $sql.=" WHERE ".join(' AND ',$tmp);
        }else{
            $sql.=$arg[0];
        }
    }else{
      $sql.=$arg[1];  
    }
    return $this->pdo->query($sql)->fetchColumn();
}
function sum($col,...$arg){
    $sql="SELECT SUM(`$col`) FROM {$this->table}";
    if(isset($arg[0])){
        if(is_array($arg[0])){
            $tmp=$this->ats($arg[0]);
            $sql.=" WHERE ".join(' AND ',$tmp);
        }else{
            $sql.=$arg[0];
        }
    }else{
      $sql.=$arg[1];  
    }
    return $this->pdo->query($sql)->fetchColumn();
}
    function save($array){
        if (isset($array['id'])) {
            $id = $array['id'];
            unset( $array['id']);
            $sql = "UPDATE `{$this->table}` SET ";
            $tmp = $this->ats($array);
            $sql .= join(",", $tmp) . " WHERE `id` = '{$id}'";

        }else{
            $cols = join("`,`", array_keys($array));
            $vals = join("','", $array);
            $sql = "INSERT INTO `{$this->table}` (`{$cols}`) VALUES ('{$vals}')";
        }
        return $this->pdo->exec($sql);
    }








    
    
    
    }
    
    $Bottom=new DB('bottom');
    $Title=new DB('title');
    $Mvim=new DB('mvim');
    $Image=new DB('image');
    $Ad=new DB('ad');
    $Total=new DB('total');
    $News=new DB('news');
    $Menu=new DB('menu');
    // $Menu2=new DB('menu2');

    $Mem=new DB('mem');

function to($url){
    header("location:".$url);
}
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
if(!isset($_SESSION['visit'])){
    $_SESSION['visit'] = 1;
    $row = $Total->find(1); // 拿到整筆資料陣列 ['id'=>1, 'total'=>5]
    $row['total']++;        // 把裡面的數字加 1
    $Total->save($row);     // 存回去
}

?>