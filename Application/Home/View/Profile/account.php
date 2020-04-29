<include file="Inc/header" />
<style type="text/css">
td{vertical-align:middle !important;text-align:center;}
.btn{border-radius:0;}
.form-control,.well{border-radius:0;background:white}
.col-xs-11{padding-right:2px;padding-left: 2px;}
.col-md-5{padding:0}
.metro{width: 92px;height: 92px;display: table-cell;vertical-align: middle !important;text-align: center}
.metro-con {margin: 0 !important}
.metro-con td{padding: 4px !important;border: none !important}
</style>
<body>
	<include file="Inc/nav" />
	<div class="container">
		<div class="row" style="margin-top:55px">
			<div class="col-xs-1">
				<div class="well">
					<span style="font-size:13px;color:#999;">		
					<ul style="font-size:13px;list-style-type:none">
						<img src="__IMG__/account.png" style="width:32px;height:32px"/>
						<li style="margin-bottom:20px;"><a href="__APP__/Home/Profile/account">账户</a></li>
						<img src="__IMG__/share.png" style="width:32px;height:32px"/>
						<li><a href="__APP__/Home/Profile/share">贡献</a></li>
					</ul>
					</span>
				</div>

			</div>
			<div class="col-xs-11">
				<div class="well">
					<div style="width:100%;height:100px;">
						
							<span style="color:#3d464d;font-size:16px;font-weight:bold;"><u>0x01 我的账户</u></span><br><br>
	

							<div class="input-group pull-left" style="margin:0 0;width:100%;">
								<span style="font-size:13px;color:#666;">注册邮箱： {$uemail}</span><br><br>
								<span style="font-size:13px;color:#666;">注册地区：{$ucity}</span><br><br>
								<span style="font-size:13px;color:#666;">账户类别：{$urank}</span><br><br>
								<span style="font-size:13px;color:#666;">特别说明：所有站内问题，均使用导航栏的"反馈"功能进行处理。</span><br><br>
								
							</div>	
					</div>

					<div style="width:100%;height:280px;margin-top:30px;">
						
							<span style="color:#3d464d;font-size:16px;font-weight:bold;"><u>0x02 荣誉账户说明</u></span><br><br>
							

							<div class="input-group pull-left" style="margin:0 0;width:100%;">
								<span style="font-size:13px;color:#ff0000;font-weight:bold;">荣誉账户可查询全部数据源，普通用户只能查询一部分数据。</span><br><br>
								<span style="font-size:13px;color:#666;">贡献数据，即可成为荣誉账户。根据所贡献数据的质量，给予不同的查询次数（全部数据查询）。<button type="button" class="btn btn-success btn-xs" style="border-radius:2px;height: 25px;font-size: 13px;" onclick="window.open('http://shuju666.com/Home/Submit')">点此提交数据</button></span><br><br>

							</div>	

					</div>



				</div>
			</div>

		</div>
	<include file="Inc/footer" />
	</div>
</body>
</html>