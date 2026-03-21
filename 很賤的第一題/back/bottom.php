<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
<p class="t cent botli">網站標題管理</p>
<?php 
    $row=${ucfirst($_GET['do'])}->find(1);					
?>
<form method="post" target="back" action="./api/insert.php?table=<?= $do; ?>&id=<?=$row['id'];?>">
            <table width="100%">
                <tbody>
                    <tr class="yel">

                        <td width="68%">替代文字</td>
    
                    </tr>

                        <tr>	
                            
                        <td width="68%"><input type="text" name="<?= $do ?>" value="<?=$row['bottom'];?>"></td>
                        
                    </tr>
            
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
    
                        <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>