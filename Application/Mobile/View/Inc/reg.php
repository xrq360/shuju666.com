<include file="Inc/header" />
<style type="text/css">
	.mobile_rname{float:left;width:70%;padding-top:10px;padding-left:5px;}
	.mobile_rname a{font-size:16px;color:#333;font-weight:50px;}
	.mobile_rname a:visited{color:#999}
</style>
<body style="background-color:#fff;">
	<include file="Inc/nav" />
		<div style="width:100%;">
			<div class="modal-header" style="height:40px;">
					<h5 class="modal-title" id="reglabel" style="color:rgba(102,102,102,1);font-size:16px;font-weight:bold;color:#999;">永久享受免费数据查询！</h5>
			</div>
			<div class="modal-body">
				<form role="form" class="form-horizontal" action="__APP__/index.php/Mobile/Inc/ckreg" method="post">
					<div class="form-group" style="margin-left:0;margin-right:0">
						<label for="email" class="sr-only control-label">邮箱</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="请输入真实邮箱">
					</div>
					<div class="form-group" style="margin-left:0;margin-right:0">
						<label for="user" class="sr-only control-label">用户名</label>
						<input type="user" name="username" class="form-control" id="email" placeholder="用户名">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">
						<label for="password" class="sr-only control-label">密码</label>
						<input type="password" name="password" class="form-control" id="password" placeholder="密码">
							<span class="glyphicon glyphicon-lock form-control-feedback" style="right:0"></span>
					</div>
					<div>
						 <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:0px;width:100%;">创建账号</button>
					</div>
				</form>
			</div>
		</div>
</body>
</html>