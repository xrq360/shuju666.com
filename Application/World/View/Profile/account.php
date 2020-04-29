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
						<li style="margin-bottom:20px;"><a href="__APP__/World/Profile/account">ACC</a></li>
						<img src="__IMG__/share.png" style="width:32px;height:32px"/>
						<li><a href="__APP__/World/Profile/share">SHA</a></li>
					
					</ul>
					</span>
				</div>

			</div>
			<div class="col-xs-11">
				<div class="well">
					<div style="width:100%;height:100px;">
						
							<span style="color:#3d464d;font-size:16px;font-weight:bold;"><u>0x01 My Account</u></span><br><br>
	

							<div class="input-group pull-left" style="margin:0 0;width:100%;">
								<span style="font-size:13px;color:#666;">Email： {$uemail}</span><br><br>
								<span style="font-size:13px;color:#666;">Type：{$urank}</span><br><br><br>
							</div>	
					</div>

					<div style="width:100%;height:210px;margin-top:30px;">
						
							<span style="color:#3d464d;font-size:16px;font-weight:bold;"><u>0x02 About Honor Account</u></span><br><br>
							

							<div class="input-group pull-left" style="margin:0 0;width:100%;">
								<span style="font-size:13px;color:#ff0000;font-weight:bold;">Honor account can query all data sources, ordinary users only part.</span><br><br>
								<span style="font-size:13px;color:#666;">By submitting data, your account can be upgraded to an honor account.<button type="button" class="btn btn-success btn-xs" style="border-radius:2px;height: 25px;font-size: 13px;" onclick="window.open('http://www.shuju666.com/World/Submit')">

Click here to submit data
</button></span><br><br>
								<br>
							</div>	

					</div>

				</div>
			</div>

		</div>
	<include file="Inc/footer" />
	</div>
</body>
</html>