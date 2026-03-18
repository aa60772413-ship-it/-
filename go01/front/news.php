
			

				<div
					style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
					<span class="t botli">最新消息區<a href="?do=news"></a>
					</span>
					<div class="ssaa" style="list-style-type:decimal;">
					<?php
					$rows=$News->all(['sh'=>1]," LIMIT 5 ");
					foreach($rows as $k=>$row):
					?>
						<div><?=($k+1)." . ". $row['text'] ?></div>
									<?php endforeach ?>
					</div>
					<div id="altt"
						style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
					</div>
					<script>
						$(".ssaa div").hover(
							function () {
								$("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
								$("#altt").show()
							}
						)
						$(".ssaa div").mouseout(
							function () {
								$("#altt").hide()
							}
						)
					</script>
				</div>