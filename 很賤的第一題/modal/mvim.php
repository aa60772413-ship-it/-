

<div class="cent"><?=(!isset($_GET['id']))?"新增動畫區圖片":"修改動畫區圖片"?></div>
<hr>
<form action="api/insert.php?table=<?=$_GET['table'];?>&id=<?=$_GET['id']??""?>" method="post">
    
    <table style="width:70%;margin:auto">
        <tr>
            <td>標題區圖片</td>
            <td><input type="file" name="img" id=""></td>
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