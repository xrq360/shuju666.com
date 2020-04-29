<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginlabel" aria-hidden="true" style="top:50px">
	<div class="modal-dialog modal-sm">
		<div class="modal-content" style="width:380px;">
			<div class="modal-header" style="background: rgba(246,246,246,1)">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
					<span class="sr-only">close</span></button>
					<h5 class="modal-title" id="loginlabel" style="color:rgba(102,102,102,1);font-size:16px;">Sign in</h5>
			</div>
			<div class="modal-body">
				<form role="form" class="form-horizontal" action="__APP__/Home/Inc/cklogin" method="post">
					<div class="form-group" style="margin-left:0;margin-right:0;">
						<label for="email" class="sr-only control-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">
						<label for="password" class="sr-only control-label">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							<span class="glyphicon glyphicon-lock form-control-feedback" style="right:0"></span>
					</div>

					<div class="modal-footer">
						 <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:3px;">Sign&nbsp;&nbsp;&nbsp;&nbsp;in</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="reglabel" aria-hidden="true" style="top:50px">
	<div class="modal-dialog modal-sm">
		<div class="modal-content" style="width:380px;">
			<div class="modal-header" style="background: rgba(246,246,246,1);">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
					<span class="sr-only">close</span></button>
					<h5 class="modal-title" id="reglabel" style="color:rgba(102,102,102,1);font-size:16px;">Create Free Account</h5>
			</div>
			<div class="modal-body">
				<form role="form" class="form-horizontal" action="__APP__/Home/Inc/reg" method="post">
					<div class="form-group" style="margin-left:0;margin-right:0">
						<label for="email" class="sr-only control-label">Email</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="Email address">
					</div>
					<div class="form-group" style="margin-left:0;margin-right:0">
						<label for="user" class="sr-only control-label">Username</label>
						<input type="user" name="username" class="form-control" id="email" placeholder="Username">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">
						<label for="password" class="sr-only control-label">Password</label>
						<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							<span class="glyphicon glyphicon-lock form-control-feedback" style="right:0"></span>
					</div>


					<div class="modal-footer">
						 <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:0px;">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="feedbacklabel" aria-hidden="true" style="top:50px">
	<div class="modal-dialog modal-sm">
		<div class="modal-content" style="width:380px;">
			<div class="modal-header" style="background: rgba(246,246,246,1)">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span>
					<span class="sr-only">close</span></button>
					<h5 class="modal-title" id="feedbacklabel" style="color:rgba(102,102,102,1);font-size:16px;">Feedback</h5>
			</div>
			<div class="modal-body">
				<form role="form" class="form-horizontal" action="__APP__/World/Inc/feedback" method="post">
					<div class="form-group" style="margin-left:0;margin-right:0;">
						<label for="fb_name" class="sr-only control-label">Nickname</label>
						<input type="fb_name" class="form-control" id="fb_name" name="fb_name" placeholder="Nickname">
					</div>
					<div class="form-group has-feedback" style="margin-left:0;margin-right:0">
						<label for="feedback" class="sr-only control-label"></label>
						<textarea rows="5" cols="20" class="form-control" name="fb_content" placeholder="Suggestions and opinions"></textarea>
							<span class="glyphicon glyphicon-edit form-control-feedback" style="right:0"></span>
					</div>

					<div class="modal-footer">
						 <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius:3px;">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<style>
	li:hover{background-color: #CCC	!important}
</style>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="width:100%;margin-bottom:0;background-color:#fff; ">
	<div class="container">
		<div class="navbar-header">
<a href="__APP__/World/Index"><img src="__IMG__/logo_en.png"></a>
		</div>	
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav" style="font-size:16px">
				<li><a href="__APP__/World/Submit">Share<span style="font-size:14px;color: rgba(225, 136, 135, 1);margin-left:4px;">welfare</span></a></li>
				<li><a onclick="javascript:$('#feedback').modal('toggle');" style="cursor:pointer">Feedback</a></li>
				<li><a href="__APP__/World/About">About</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right" style="font-size:16px">

				<if condition="is_login()">
					<li> <a href="__APP__/World/Profile"><i class="glyphicon glyphicon-home" style="color:rgb(0,195,0)"></i> {$Think.session.PID|get_uname_byuid=###}(<span style="color:rgba(225, 136, 135, 1)">{$Think.session.PID|get_rank_byuid=###}</span>)</a> </li> 
					<li> <a href="__APP__/World/Inc/logout"><span style="font-size:14px;text-decoration:underline;color:#999">Logout</span></a></li>
				<else/>	
				<li><a onclick="javascript:$('#login').modal('toggle');" style="cursor:pointer">Sign in</a></li>
				<li><a onclick="javascript:$('#register').modal('toggle');" style="cursor:pointer">Register</a></li>
				</if>
			</ul>
		</div>
	</div>  
</nav>