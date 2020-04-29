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
						<span style="font-size:45px;color:#47525d;font-weight:bold;">Have your information and passwords been leaked?</span><br><br>
						<span style="font-size:26px;color:#3d464d;">Discover your information leaks , Protect it!</span>
					</div>
					
				</div>


			</div>
			<div class="col-xs-5">
				<div class="">
				<div class="modal-body">
					<span style="font-size:38px;font-weight:bold;">Register</span><br>
					<span style="font-size:18px;">Free data query service.</span><br><br>
					<form role="form" class="form-horizontal" action="__APP__/World/Inc/reg" method="post">
					<div class="form-group" style="margin-left:0;margin-right:0;">
						<label for="email" class="sr-only control-label">Email</label>
						<input type="email" name="email" class="form-control" id="email" style="border-radius:8px;height:45px;" placeholder="Enter your real email address">
					</div>
					<div class="form-group" style="margin-left:0;margin-right:0">
						<label for="user" class="sr-only control-label">Username</label>
						<input type="user" name="username" class="form-control" id="email" style="border-radius:8px;height:45px;" placeholder="Enter your username">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">
						<label for="password" class="sr-only control-label">Password</label>
						<input type="password" name="password" class="form-control" id="password" style="border-radius:8px;height:45px;" placeholder="Enter your password">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">	
						<input type="checkbox" name="agree" checked="checked"/> <span style="font-size:13px;color:#999">Agree to our registration rules</a></span>	
					</div>
					<div class="modal-footer">
						 <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:4px;">Create Account</button>
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
