<include file="Inc/header" />
<style type="text/css">
	.mobile_rname{float:left;width:70%;padding-top:10px;padding-left:5px;}
	.mobile_rname a{font-size:16px;color:#333;font-weight:50px;}
	.mobile_rname a:hover{color:#fff;background-color:#191970;text-decoration:none}
	.mobile_rname a:visited{color:#999}

</style>
<body style="background-color:#fff">
	<include file="Inc/nav" />
		<div style="width:100%;background-color:#fff;height:100%">
			<div class="mobile_rname" style="height:35px;padding-left:15px;margin-bottom:5px;">
							<span style="font-weight:bold;color:#3d464d;font-size:16px;">你的密码和信息是否泄漏？</span>
			</div>
			<div class="modal-body">
				<form role="form" class="form-horizontal" action="__APP__/Mobile/Index/search" method="post">
					<div class="form-group" style="margin-left:0;margin-right:0;">
						<input type="text" class="form-control" name="keyword" placeholder="姓名、用户名、邮箱、手机、身份证" style="height:40px">
					</div>
					<div>
						 <button type="submit" class="btn btn-primary btn-bg btn-block" style="width:100%">搜&nbsp;&nbsp;&nbsp;&nbsp;索</button>
					</div>
				</form>
			</div>
			
				
		</div>
							
	<include file="Inc/footer" />	
</body>
</html>
