<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
</marquee>
<div style="height:32px; display:block;"></div>
<!--正中央-->
<div class="ssaa" style="list-style-type:decimal;">

					<?php 
                        $rows=$News->all(['sh'=>1]," limit 5");
                        foreach($rows as $k=> $n):
                    ?>
	<div>
		<div>
			<?=($k+1)." . ".mb_substr($n['text'],0,20);?>
		</div>
		<div class="all" style='display:none;'>
			<?=($k+1).$n['text']?>
		</div>
	</div>
	<?php endforeach;?>
</div>
<div id="altt"
	style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
	$(".ssaa div").hover(
		function () {
			$("#altt").html("" + $(this).children(".all").html() + "")
			$("#altt").show()
		}
	)
	$(".ssaa div").mouseout(
		function () {
			$("#altt").hide()
		}
	)
</script>