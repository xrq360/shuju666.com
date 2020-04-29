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
						<form action={:U('Profile/search')} method="post">
							<span style="color:#;font-size:14px;font-weight:bold;">搜索一下，你就知道。</span>
							<div class="input-group pull-left" style="margin:0 0;width:98%;">
								<input id="search_input" type="text" name="keyword" class="form-control input-lg" style="height:50px;margin-top:10px;border-radius:10" placeholder="" onblur="fill()";>
								<input type="hidden" name="sort" value="0">
								<span class="input-group-btn">
									<button class="btn btn-info btn-lg" type="submit" id="submit" style="border-radius:0;padding-left:3px;padding-right:3px;letter-spacing:40px;height:50px;margin-top:10px"><i class="glyphicon glyphicon-search" title="搜索" style="color:#fff;margin-bottom:5px;margin-left:25px;font-size:25px;"></i></button>
								</span>
							</div>

						</form>
					</div>
					<div class="tribe" style="background-color:#fff;">
						<if condition="$ckflag eq 0">
							<if condition="is_vip()">
								<p style="font-size:16px;color:#999;margin-top:20px;margin-left:50px;">尊敬的荣誉会员,暂时没有你要的搜索结果。我们每天都在更新数据，也希望你能一如既往地支持我们！ </p>
							<else/>	
								<p style="font-size:16px;color:#999;margin-top:20px;margin-left:50px;">部分搜索结果，需要荣誉会员才能查看。 <button type="button" class="btn btn-success btn-sm" style="border-radius:5px;height: 35px;font-size: 16px;" onclick="location='__URL__/account'">点击查看规则</button></p>
							</if>
						</if>
						<if condition="$ckflag eq 1">
						<span style="font-size:13px;color:#999">为您找到相关结果：{$acount} 个</span>
						<table class="tribe-table" style="border-radius:0px;margin-top:5px;background-color: #fafafa;color: #777;font-weight: 400;">
							<tr>
								<td width="1%"></td>
								<td width="9%">用户名</td>
								<td width="20%">邮箱</td>
								<td width="20%">密码</td>
								<td width="10%">加盐</td>
								<td width="10%">证件号</td>
								<td width="10%">电话</td>
								<td width="10%">位置</td>
								<td width="10%">数据源</td>
							</tr>
						</table>
							
						<volist name="list" id="vo">
						<div class="tribe-list">
							<table style="table-layout:fixed;">
								<tr>
								<td width="1%" style="word-wrap:break-word;"><i class="glyphicon glyphicon-chevron-right" style="left:0;color:#999;font-size:11px;"></i></td>
								<td width="9%" style="word-wrap:break-word;">{$vo.username}</td>
								<td width="20%" style="word-wrap:break-word;">{$vo.email}</td>
								<td width="20%" style="word-wrap:break-word;">{$vo.password}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.salt}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.idcard}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.mobile}</td>
								<td width="10%" style="word-wrap:break-word;">{$vo.ip}</td>
								<td width="10%" align="left" style="font-size: 11px;"><a class="page-filter-tag-content" style="padding-left: 1px;padding-right: 1px" href="http://{$vo.from}" target="__BLANK">{$vo.from}</a></td>
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