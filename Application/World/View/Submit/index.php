<include file="Inc/header" />
<body>
	<include file="Inc/nav" />
	<div class="cover-story">
		<div class="cover-story-bg" style="background-image: url('__IMG__/submit.jpg')">
			<div class="container">
				<div class="cover-story-content">
						<h1><a href="__APP__/World/Submit" target="_parent">Share Data？</a></h1>
						<div class="cover-story-abstract">
							One's data can only be called data, the data from a group of people are treasures!</div>
						<div class="cover-story-meta">
							
						</div>
				</div>
			</div>
		</div>
	</div>
<div class="floor">
	<div class="container">
		<form action="__APP__/World/Submit/addsu" method="post">
			<div class="col-xs-10" style="">
				<h3 style="color:#999;">0x0 Share my data <span style="font-size:16px;color:rgba(225, 136, 135, 1)">(By sharing data,get more data!)</h3>
				
				<table class="table row metro-con" style="width:100%;">	
					<tr width="100%" height="50px">
						<td height="35px" width="20%" align="center" color="#666;font-size:15px;">Source of leakage data</td>
						<td width="70%"><input type="text" name="name" class="form-control input-lg" style="height:35px;font-size:13px;" placeholder="Source of leakage data"></td>
					</tr>		
					<tr width="100%" height="50px">
						<td height="35px" width="20%" align="center">Data storage link</td>
						<td width="70%"><input type="text" name="link" class="form-control input-lg" style="height:35px;font-size:13px;" placeholder="BT links or sharing address from cloud disk"></td>
					</tr>
					<tr width="100%" height="50px">
						<td height="35px" width="20%" align="center">Your Email</td>
						<td width="70%"><input type="text" name="email" class="form-control input-lg" style="height:35px;font-size:13px;" placeholder="Should be registered in shuju666.com"></td>
					</tr>		
					<tr width="100%" height="50px">
						<td height="35px" width="20%" align="center">Data Format</td>
						<td width="70%"><span style="color:#ff0000;font-weight:bold;">The data format should have 7 Fields like below. *If a field is blank, use '---' to make up.<br><br> <i><span style="color:#666">[Username , Email, Password, Salt, SSN, Mobile, IP].</span></i><br></span></td>
					</tr>			
					<tr width="100%" height="45px">
						<td height="45px" width="20%" align="center"></td>
						<td width="70%"><button type="submit" class="btn btn-primary btn-lg btn-block" style="height:45px;">Submit</button></td>
					</tr>
				</table>
			</div>
			</form>	
	</div>

</div>
<include file="Inc/footer" />
</body>
</html>