<form action="../api/upload.php?table=<?=$_GET['table'];?>&id=<?=$_GET['id']??"";?>" method="post">

    <table>

        <tr>
            <td>主選單名稱</td>
            <td><input type="text" name="text" id=""></td>
        </tr>
                <tr>
            <td>網址</td>
            <td><input type="text" name="href" id=""></td>
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



