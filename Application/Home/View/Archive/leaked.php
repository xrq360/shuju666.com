<!DOCTYPE html>
<html>
<head>

	<title>{$lword} 泄露的信息和密码 - 数据牛 - www.shuju666.com</title>
	<meta name="keywords" content="个人信息泄露查询,密码泄露查询,密码泄露查询网站">

<META content="index,follow" name="robots">
<META content="数据牛"  name="Author">
	<script src="__JS__/jquery.min.js"></script>
	<script src="__JS__/bootstrap.min.js"></script>
	<script src="__JS__/holder.js"></script>
	<link href="__CSS__/bootstrap.min.css" rel="stylesheet">
	<link href="__CSS__/style.css" rel="stylesheet">
	<link href="__CSS__/page.css" rel="stylesheet">
	<meta http-equiv="Content-type" content="text/html;charset=utf-8">
	<link rel="shortcut icon" href=" __IMG__/ss_favicon.ico" />
</head>
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
						
						<li style="margin-bottom:20px;margin-left:0px;"><a href="__APP__/Home/Archive/index"> 查看归档</a></li>
						
					</ul>
					</span>

				</div>

			</div>
			<div class="col-xs-11">
				<div class="well">

					<div class="tribe" style="background-color:#fff;">
						<if condition="$ckflag eq 0">
							
							<p style="font-size:16px;color:#999;margin-top:20px;margin-left:50px;">Null. </p>
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