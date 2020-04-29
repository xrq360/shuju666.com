<include file="Inc/header" />
<style type="text/css">
td{vertical-align:middle !important;text-align:center;}
.btn{border-radius:0;}
.form-control,.well{border-radius:0;background:white}
.col-xs-2,.col-xs-9,.col-xs-1{padding:0 6px;}

</style>
<body>
	<include file="Inc/nav_index" />
	<div class="container">
		<div class="row" style="margin-top:100px">
			<div class="col-xs-7">
				<div>
					<div class="row" style="margin-top:30px;margin-right:55px;margin-left:20px;">
						<span style="font-size:65px;color:#47525d;font-weight:bold;">发现你的信息、密码是否已泄漏？</span><br><br>
						<span style="font-size:26px;color:#3d464d;">发现数据泄露，才能更好的保护你的信息。</span>
					</div>
					
				</div>


			</div>
			<div class="col-xs-5">
				<div class="">
				<div class="modal-body">
					<span style="font-size:38px;font-weight:bold;">注册</span><br>
					<span style="font-size:18px;">永久享受免费数据查询</span><br><br>
					<form role="form" class="form-horizontal" action="__APP__/Home/Inc/reg" method="post">
					<div class="form-group" style="margin-left:0;margin-right:0;">
						<label for="email" class="sr-only control-label">邮箱</label>
						<input type="email" name="email" class="form-control" id="email" style="border-radius:8px;height:45px;" placeholder="请输入真实邮箱">
					</div>
					<div class="form-group" style="margin-left:0;margin-right:0">
						<label for="user" class="sr-only control-label">用户名</label>
						<input type="user" name="username" class="form-control" id="email" style="border-radius:8px;height:45px;" placeholder="用户名">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">
						<label for="password" class="sr-only control-label">密码</label>
						<input type="password" name="password" class="form-control" id="password" style="border-radius:8px;height:45px;" placeholder="密码">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">	
						<input type="checkbox" name="agree" checked="checked"/> <span style="font-size:13px;color:#999">同意本站数据使用规定</a></span>	
					</div>
					<div class="modal-footer">
						 <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:4px;">创建账户</button>
					</div>
					</form>
				</div>

				</div>
					
				<br/>
			</div>

		</div>
	<include file="Inc/footer" />
	</div>
</body>
</html>
