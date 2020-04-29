<include file="Inc/header" />
<style type="text/css">
td{vertical-align:middle !important;text-align:center;}
.btn{border-radius:0;}
.form-control,.well{border-radius:0;background:white}
.col-xs-11{padding-right:2px;padding-left: 2px;}
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
					<span style="font-size:12px;color:#999;">		
					<ul style="font-size:12px;list-style-type:none">
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
						<form action={:U('Profile/search')} method="post">
							<span style="color:#;font-size:14px;font-weight:bold;">Enjoy Your Searching</span>
							<div class="input-group pull-left" style="margin:0 0;width:98%;">
								<input id="search_input" type="text" name="keyword" class="form-control input-lg" style="height:50px;margin-top:10px;border-radius:10" placeholder="" onblur="fill()";>
								<input type="hidden" name="sort" value="0">
								<span class="input-group-btn">
									<button class="btn btn-info btn-lg" type="submit" style="border-radius:0;padding-left:3px;padding-right:3px;letter-spacing:40px;height:50px;margin-top:10px"><i class="glyphicon glyphicon-search" title="Search" style="color:#fff;margin-bottom:5px;margin-left:25px;font-size:25px;"></i></button>
								</span>
							</div>
						</form>
					</div>
					<div class="tribe" style="background-color:#fff;">
						<if condition="$ckflag eq 0">
							<if condition="is_vip()">
								<p style="font-size:16px;color:#999;margin-top:20px;margin-left:50px;">There is no search result for you at the moment. We update data every day and hope you can support us as always!</p>
							<else/>	
								<p style="font-size:16px;color:#999;margin-top:20px;margin-left:50px;">Some search results can only be viewed by honorary members. <button type="button" class="btn btn-success btn-sm" style="border-radius:5px;height: 35px;font-size: 14px;" onclick="location='__URL__/account'">Click to see the rules</button></p>
							</if>	
						</if>
						<if condition="$ckflag eq 1">
						<span style="font-size:12px;color:#999">Related results：{$acount} 个</span>
						<table class="tribe-table" style="border-radius:0px;margin-top:5px;">
							<tr>
								<td width="1%"></td>
								<td width="9%">Username</td>
								<td width="20%">Email</td>
								<td width="20%">Password</td>
								<td width="10%">Salt</td>
								<td width="10%">ID</td>
								<td width="10%">Mobile</td>
								<td width="10%">Location</td>
								<td width="10%">Source</td>
							</tr>
						</table>
							
						<volist name="list" id="vo">
						<div class="tribe-list">
							<table style="table-layout:fixed;">
								<tr>
								<td width="1%" style="word-wrap:break-word;"><i class="glyphicon glyphicon-chevron-right" style="left:0;color:#999;font-size:13px;"></i></td>
								<td width="9%" style="word-wrap:break-word;">{$vo.username}</td>
								<td width="20%" style="word-wrap:break-word;">{$vo.email}</td>
								<td width="20%" style="word-wrap:break-word;">{$vo.password}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.salt}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.idcard}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.mobile}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.ip}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.from}</td>
								</tr>
							</table>
						</div>	
						</volist>
						</if>
					</div>
					
				</div>									
			</div>
		</div>

	</div>
	<include file="Inc/footer" />
	</div>
</body>
</html>