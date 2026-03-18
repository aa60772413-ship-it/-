				<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
				</marquee>
				<div style="height:32px; display:block;"></div>
				<!--正中央-->
				<form method="post" action="?do=check" target="back">
					<p class="t botli">管理員登入區</p>
					<p class="cent">帳號 ： <input name="acc" id="acc" autofocus="" type="text"></p>
					<p class="cent">密碼 ： <input name="pw" id="pw" type="password"></p>
					<p class="cent">
            
                    <input type="button" value="送出"  onclick="login()">
                    <input type="reset" value="清除"></p>
				</form>
<script>
 function login(){
    let acc=$('#acc').val();
    let pw=$('#pw').val();

     $.post('../api/login.php',{acc,pw},function(res){
        console.log(res);
        
        if(res == 1){
            location.href="back.php?do=title"
        }else{
            alert("帳號密碼錯誤");
        }

     })

 }
</script>