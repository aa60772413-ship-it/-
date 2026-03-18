<form action="../api/upload.php?table=<?=$_GET['table'];?>&id=<?=$_GET['id']??"";?>" method="post">

    <table>

        <tr>
            <td>帳號</td>
            <td><input type="text" name="acc" id=""></td>
        </tr>
                <tr>
            <td>密碼</td>
            <td><input type="text" name="pw" id=""></td>
        </tr>
                <tr>
            <td>確認密碼</td>
            <td><input type="text" name="" id=""></td>
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



