<form action="../api/upload.php?table=<?=$_GET['table'];?>&id=<?=$_GET['id']??"";?>" method="post">

    <table>
        <tr>
            <td>新增圖片</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td>替代文字</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="確認">
                <input type="reset" value="重製">
            </td>
            <td></td>
        </tr>
    </table>
</form>



