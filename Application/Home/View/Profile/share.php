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
						<img src="__IMG__/account.png" style="width:32px;htight:32px"/>
						<li style="margin-bottom:20px;"><a href="__APP__/Home/Profile/account">账户</a></li>
						<img src="__IMG__/share.png" style="width:32px;htight:32px"/>
						<li><a href="__APP__/Home/Profile/share">贡献</a></li>
					</ul>
					</span>
				</div>

			</div>
			<div class="col-xs-11">
				<div class="well">
					<div class="comment-title"><span style="color:#3d464d;font-size:14px;font-weight:bold;"></span></div>
		
					<div class="tribe" style="background-color:#fff;">
						<if condition="$ckflag eq 0">

							<p style="font-size:100px;margin-left:50px;margin-top:40px;">:( </p>
							<p style="font-size:16px;color:#bbb;margin-left:50px;">贡献数据的好处: 有机会升级为荣誉账户，查询全部数据。</p>
						</if>
						<if condition="$ckflag eq 1">
						<table class="tribe-table" style="border-radius:0px;">
							<tr>
								<td width="35%"><span style="margin-left:25px;" class="pull-left">数据名称</span></td>
								<td width="35%">数据链接</td>
								<td width="30%">提交时间</td>
							</tr>
						</table>
							
						<volist name="list" id="vo">
						<div class="tribe-list">
							<table>
								<tr>
									<td width="35%"><span class="tribe-list-text pull-left"><img src="__IMG__/sharedata.png" style="width:16px;height:16px;"/>  {$vo.suname}</a></span></td>
									<td width="35%">{$vo.sulink}</td>
									<td width="30%">{$vo.sutime} </td>
									
								</tr>
							</table>
						</div>	
						</volist>
						<div class="flickr">{$page}</div>
					</if>
					</div>
				</div>
				<div class="well pull-right">还有想贡献的？<a href="__APP__/Home/Submit">走起！</a></div>
				<br/>
			</div>
		</div>
	<include file="Inc/footer" />
	</div>
</body>
</html>
