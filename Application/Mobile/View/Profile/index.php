<include file="Inc/header" />
<style type="text/css">
	.menu_list{background-color:#fff;height:200px;}
	.menu_list li{height:50px;font-size:16px;color:#000;list-style:none;}
	.menu_list a{text-decoration:none;}
	.menu_list a:hover{background-color:#eee;}
	.div_hr{height:1px;width:100%;background-color:#eee;margin-top:7px;}
</style>
<body style="background-color:#fff">
	<include file="Inc/nav" />
				<div class="container">

			<div class="col-xs-12">
			
					<div style="width:100%;height:100px;">
						
							<span style="color:#3d464d;font-size:16px;font-weight:bold;"><u>0x01 我的账户</u></span><br><br>
	

							<div class="input-group pull-left" style="margin:0 0;width:100%;">
								<span style="font-size:13px;color:#666;">注册邮箱： {$uemail}</span><br><br>
								<span style="font-size:13px;color:#666;">注册地区：{$ucity}</span><br><br>
								<span style="font-size:13px;color:#666;">账户类别：{$urank}</span><br><br>
								<span style="font-size:13px;color:#666;">特别说明：所有站内问题，均使用导航栏的"反馈"功能进行处理。</span><br><br>
								
							</div>	
					</div>

					<div style="width:100%;height:160px;margin-top:30px;">
						
							<span style="color:#3d464d;font-size:16px;font-weight:bold;"><u>0x02 荣誉账户说明</u></span><br><br>
							

							<div class="input-group pull-left" style="margin:0 0;width:100%;">
								<span style="font-size:13px;color:#ff0000;font-weight:bold;">荣誉账户可查询全部数据源，普通用户只能查询一部分数据。</span><br><br>
								<span style="font-size:13px;color:#666;">贡献数据，即可成为荣誉账户。根据所贡献数据的质量，给予不同的查询次数（全部数据查询）。</span><br><br>

							</div>	
					</div>
					
					<div style="width:100%;height:80px;margin-top:20px">
					<button type="submit" class="btn btn-primary btn-bg btn-block" style="width:100%" onclick="location='__APP__/index.php/Mobile/Inc/logout'">退出登录</button>
					
					</div>
			
			</div>

		</div>
	<include file="Inc/footer" />
	</div>
			
</body>
</html>