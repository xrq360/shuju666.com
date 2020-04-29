
<if condition="is_login()">
	<table style="position:fixed;bottom:0;width:100%;background-color:#eee; ">
	<tr>
		<td style="height:40px;">
			<div style="height:40px;width:100%;padding-left:5px;padding-top:10px;color:#000;font-size:14px;"><i class="glyphicon glyphicon-info-sign" style="color:rgb(50,205,50);"></i> 建议使用电脑访问,效果更好！</div>
		</td>
	</tr>
	</table>
<else/>
<table style="position:fixed;bottom:0;width:100%;background-color:#ccc; ">
	<tr>
		<td style="width:50%;height:50px;">
			<button type="button" class="btn btn-primary btn-lg btn-block" style="font-weight:bold;height:38px;width:90%;margin-left:5%;" onclick="window.open('__APP__/index.php/Mobile/Inc/login')">登陆</button>
		</td>
		<td style="width:50%;height:50px;">
			<button type="button" class="btn btn-default btn-lg btn-block" style="font-weight:bold;height:38px;width:90%;margin-left:5%;" onclick="window.open('__APP__/index.php/Mobile/Inc/reg')">注册</button>
		</td>
	</tr>
</table>	
</if>
