

<head>
	<link href="./home_files/css.css" rel="stylesheet" type="text/css">
	<script src="./home_files/jquery-3.4.1.min.js"></script>
	<script src="./home_files/js.js"></script>
</head>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">網站標題管理</p>
	<form method="post" target="back" action="./api/edit.php?table=<?= $do; ?>">
		<table id="add" width="100%">
				<tr class="yel">
					<td width="30%">名稱</td>
					<td width="30%">網址</td>
					<td width="5%">刪除</td>					
					<td></td>
				</tr>
				<tr>
					<td ><input type="text" name="text[]" value="<?= $row['text'] ?>"></td>
					<td ><input type="text" name="href[]" value="<?= $row['href'] ?>"></td>		
					<td ><input type="checkbox" name="del[]" value=<?= $row['id'] ?>></td>
					<input type="hidden" name="id[]" value="<?= $row['id'] ?>" >				
				</tr>
					<tr>
					<td ><input type="text" name="text[]" value=""></td>
					<td ><input type="text" name="href[]" value=""></td>		
					<td ></td>		
				</tr>
	
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<td width="200px"><input type="button"
							onclick="more()"
							value="新增網站標題圖片"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
					</td>
				</tr>
			</tbody>
		</table>

	</form>
</div>
<script>
    function more(){
        let opt=`</tr>
					<tr>
					<td ><input type='text' name='text[]'></td>
					<td ><input type='text' name='href[]' ></td>
					<td ></td>
				</tr>`
    
        $("#add").append(opt);

    }

</script>