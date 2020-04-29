<include file="Inc/header" />
<style type="text/css">
	.mobile_rname{float:left;width:70%;padding-top:10px;padding-left:5px;}
	.mobile_rname a{font-size:16px;color:#333;font-weight:50px;}
	.mobile_rname a:hover{color:#fff;background-color:#191970;text-decoration:none}
	.mobile_rname a:visited{color:#999}

</style>
<body>
	<include file="Inc/nav" />
						<div style="width:100%;">
						<if condition="$ckflag eq 1">
						<div style="height:20px;width:100%;background-color:#fff;padding-left:5px;"> <span style="color:#999;font-size:13px;">注：手机端只显示20条搜索结果.</span></div>
							<volist name="list" id="vo">
								<div style="height:100px;background-color:#fff;margin-top:10px;">
								<table border="0">
									<tr><td>
									<div class="mobile_rname">
										<span class="pull-left" style="margin-left:0px; font-size:13px;color:#666;font-weight:bold;" > <u>{$kword}&nbsp;&nbsp; 泄露网站:{$vo.from}</u> </a></span> 
										
									</div>
									
									</td></tr>
									
									<tr><td style="color:#999;font-size:13px;padding-right:4px;">
									<span class="pull-left" style="margin-left:6px;margin-top:5px;">用户名：{$vo.username} | 邮箱：{$vo.email} | 密码：{$vo.password} | 加盐：{$vo.salt} | 证件号：{$vo.idcard} | 电话：{$vo.mobile}</span>
								
									</td></tr>
								</table>
								</div>
							</volist>
							</if>
							<if condition="$ckflag eq 0">
								<div style="height:100px;width:100%;background-color:#fff;padding-top:40px;padding-left:20px;color:#999;font-size:15px;margin-bottom:70"> 手机端只显示部分搜索结果,建议在电脑端试试.</div>
							</if>
						</div>	
						<div style="width:100%;height:50px;background-color:#fff"></span>
							
	<include file="Inc/footer" />	
</body>
</html>
