<!DOCTYPE html>
<html>
<head>

	<title>{$day}泄露信息存档|数据牛 - www.shuju666.com</title>
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
.col-md-5{padding:0}
.metro{width: 92px;height: 92px;display: table-cell;vertical-align: middle !important;text-align: center}
.metro-con {margin: 0 !important}
.metro-con td{padding: 4px !important;border: none !important}
</style>
<body>
	<include file="Inc/nav" />
	<div class="container">
		<div class="row" style="margin-top:55px">
			<div class="col-xs-2">
				<div class="well">
					<span style="font-size:13px;color:#999;">		
					<ul style="font-size:14px;list-style-type:none">
						<li style="margin-bottom:20px;font-size:16px;"> <a href="__APP__/Home/Archive"><span class="glyphicon glyphicon-book"></span> 归档信息</a> </li>
						<li style="margin-bottom:20px;margin-left:15px"> <a href="{:U('Archive/bymonth?m=2017-09')}"> 2017年09月</a> </li>
						<li style="margin-bottom:20px;margin-left:15px"> <a href="{:U('Archive/bymonth?m=2017-08')}"> 2017年08月</a> </li>
						<li style="margin-bottom:20px;margin-left:15px"> <a href="{:U('Archive/bymonth?m=2017-07')}"> 2017年07月</a> </li>
						<li style="margin-bottom:20px;margin-left:15px"> <a href="{:U('Archive/bymonth?m=2017-06')}"> 2017年06月</a> </li>

					</ul>
					</span>
				</div>

			</div>
			<div class="col-xs-10">
				<div class="well">
					<div class="comment-title"><span style="color:#3d464d;font-size:14px;font-weight:bold;"></span></div>
					<span style="font-size:13px;color:#999">{$day}存档 >>> </span>
					<div class="tribe" style="background-color:#fff;">
						<if condition="$ckflag eq 0">

							<p style="font-size:100px;margin-left:50px;margin-top:40px;">:( </p>
							<p style="font-size:16px;color:#bbb;margin-left:50px;">null.</p>
						</if>
						<if condition="$ckflag eq 1">
						<table class="tribe-table" style="border-radius:0px;margin-top:5px;background-color: #fafafa;color: #777;font-weight: 400;">
							<tr>
								<td width="70%"><span style="margin-left:25px;" class="pull-left">标题</span></td>
								<td width="30%">时间</td>
							</tr>
						</table>
							
						<volist name="list" id="vo">
						<div class="tribe-list">
							<table style="table-layout:fixed;">
							
								<tr>
									<td width="70%"><span class="tribe-list-text pull-left"> <a href="{:U('Archive/leaked?history='.$vo['plword'])}"><span class="glyphicon glyphicon-file"></span> {$vo.plword} 已经泄露的信息 - 数据牛 </a></span></td>
									<td width="30%">{$day} </td>
									
								</tr>
							</table>
						</div>	
						</volist>
						<div class="flickr">{$page}</div>
					</if>
					</div>
				</div>
				<div class="well pull-right">需要删除您的隐私数据？请通过<a href="__APP__/Home/">反馈</a>联系我们！</div>
				<br/>
			</div>
		</div>
	<include file="Inc/footer" />
	</div>
</body>
</html>
