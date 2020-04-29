<include file="Inc/header" />
<body>
	<include file="Inc/nav" />
	<div class="cover-story">
		<div class="cover-story-bg" style="background-image: url('__IMG__/submit.jpg')">
			<div class="container">
				<div class="cover-story-content">
						<h1><a href="__APP__/Home/Submit" target="_parent">贡献数据？</a></h1>
						<div class="cover-story-abstract">
							一个人的数据只能叫数据，一群人的数据才是宝贝!</div>
						<div class="cover-story-meta">
							
						</div>
				</div>
			</div>
		</div>
	</div>
<div class="floor">
	<div class="container">
		<form action="__APP__/Home/Submit/addsu" method="post">
			<div class="col-xs-10" style="">
				<h4 style="color:#999;">0x0: 贡献我的数据 <span style="font-size:16px;color:rgba(225, 136, 135, 1)">(通过贡献数据,可升级为荣誉账户，获得更多查询!)</h4>
				
				<table class="table row metro-con" style="width:100%;">	
					<tr width="100%" height="50px">
						<td height="35px" width="20%" align="center" color="#666;font-size:15px;">数据名称</td>
						<td width="70%"><input type="text" name="name" class="form-control input-lg" style="height:35px;font-size:13px;" placeholder="数据来源和日期"></td>
					</tr>		
					<tr width="100%" height="50px">
						<td height="35px" width="20%" align="center">资源链接</td>
						<td width="70%"><input type="text" name="link" class="form-control input-lg" style="height:35px;font-size:13px;" placeholder="磁力链接或云盘链接"></td>
					</tr>
					<tr width="100%" height="50px">
						<td height="35px" width="20%" align="center">你的Email</td>
						<td width="70%"><input type="text" name="email" class="form-control input-lg" style="height:35px;font-size:13px;" placeholder="升级vip账号时使用"></td>
					</tr>		
					<tr width="100%" height="250px">
						<td height="35px" width="20%" align="center">数据格式</td>
						<td width="70%"><img src="__IMG__/geshi.png" style="width:750px;height:250px;"/></td>
					</tr>			
					<tr width="100%" height="45px">
						<td height="45px" width="20%" align="center"></td>
						<td width="70%"><button type="submit" class="btn btn-primary btn-lg btn-block" style="height:45px;">提交数据</button></td>
					</tr>
				</table>
			</div>
			</form>	
	</div>
		<div class="container">

	</div>
</div>
<include file="Inc/footer" />
</body>
</html>