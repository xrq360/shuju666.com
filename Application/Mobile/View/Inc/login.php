<include file="Inc/header" />
<style type="text/css">
	.mobile_rname{float:left;width:70%;padding-top:10px;padding-left:5px;}
	.mobile_rname a{font-size:16px;color:#333;font-weight:50px;}
	.mobile_rname a:visited{color:#999}
</style>
<body style="background-color:#fff;">
	<include file="Inc/nav" />
		<div style="width:100%;background-color:#fff;s">
			<div class="modal-header" style="height:40px;">
				<h5 class="modal-title" id="reglabel" style="color:rgba(102,102,102,1);font-size:16px;font-weight:bold;color:#999;">登陆账户</h5>
			</div>
			<div class="modal-body">
				<form role="form" class="form-horizontal" action="__APP__/index.php/Mobile/Inc/cklogin" method="post">
					<div class="form-group" style="margin-left:0;margin-right:0;">
						<label for="email" class="sr-only control-label">登陆邮箱</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="登陆邮箱">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">
						<label for="password" class="sr-only control-label">密码</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="密码">
							<span class="glyphicon glyphicon-lock form-control-feedback" style="right:0"></span>
					</div>

					<div>
						 <button type="submit" class="btn btn-primary btn-lg btn-block" style="width:100%">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
					</div>
				</form>
			</div>
		</div>
</body>
</html>