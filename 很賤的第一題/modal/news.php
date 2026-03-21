

<div class="cent"><?=(!isset($_GET['id']))?"新增廣告管理":"修改廣告管理"?></div>
<hr>
<form action="api/insert.php?table=<?=$_GET['table'];?>&id=<?=$_GET['id']??""?>" method="post">
    
    <table style="width:70%;margin:auto">

        <tr>
            <td>廣告管理</td>
            <td><input type="text" name="text" id=""></td>
            
        </tr>
        <tr>
            <td>
                <input type="submit" value="<?=(!isset($_GET['id']))?"新增":"修改"?>">
                <input type="reset" value="重置">
            </td>
            <td></td>
        </tr>
    </table>
</form>