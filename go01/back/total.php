

<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">網站標題管理</p>
	<form method="post" target="back" action="./api/edit.php?table=<?= $do; ?>">
		<table width="100%">
			<tbody>
				<?php
				$rows=${ucfirst($_GET['do'])}->find(1);?>
				<tr class="yel">
					
					<td width="65%">進站人數</td>
					<td width="14%">
					<input type="hidden" name="id[]" value="<?= $rows['id'] ?>" >
					<input type="text" name="text" id="" value="<?= $rows['text'] ?>">
					</td>
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