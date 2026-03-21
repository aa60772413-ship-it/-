				<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
						<p class="t cent botli">網站標題管理</p>
						<form method="post" target="back" action="./api/edit.php?table=<?= $do; ?>">
							<table width="100%">
								<tbody>
									<tr class="yel">
										<td width="45%">網站標題</td>
										<td width="23%">替代文字</td>
				
										<td width="7%">刪除</td>
										<td></td>
									</tr>
								<?php 
									$rows=$Menu->all(['main_id'=>$_GET['id']]);
									foreach($rows as $row):
										?>
				
										<tr>
										<td width="45%"><?=$row['text'];?></td>
										<td width="23%"><?=$row['href'];?></td>
									
										<td width="7%"><input type="button" onclick="location.href='./api/del.php?table=menu&id=<?=$row['id'];?>'" value="刪除"></td>
										<td><input type="button" value="修改	" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=menu&main_id=<?=$_GET['id']?>&id=<?=$row['id'];?>')"></td>
										<input type="hidden" name="id[]" value="<?= $row['id'] ?>" >
									</tr>
									<?php endforeach;?>	
								</tbody>
							</table>
							<table style="margin-top:40px; width:70%;">
								<tbody>
									<tr>
										<td width="200px"><input type="button"
												onclick="op('#cover','#cvr','./modal/<?=$do?>.php?table=menu&main_id=<?=$_GET['id']?>')"
												value="新增網站標題圖片"></td>
										<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
										</td>
									</tr>
								</tbody>
							</table>

						</form>
					</div>