<include file="Inc/header" />
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
			<div class="col-xs-1">
				<div class="well">
					<span style="font-size:13px;color:#999;">		
					<ul style="font-size:13px;list-style-type:none">
						<img src="__IMG__/account.png" style="width:32px;height:32px"/>
						<li style="margin-bottom:20px;"><a href="__APP__/Home/Profile/account">账户</a></li>
						<img src="__IMG__/share.png" style="width:32px;height:32px"/>
						<li><a href="__APP__/Home/Profile/share">贡献</a></li>
					</ul>
					</span>
				</div>

			</div>
			<div class="col-xs-11">
				<div class="well" style="height:400px;">
					<div style="width:100%;height:100px;">
						<form action={:U('Profile/search')} method="post">
							<span style="color:#3d464d;font-size:14px;font-weight:bold;">搜索一下，你就知道。</span>
							<div class="input-group pull-left" style="margin:0 0;width:100%;">
								<input id="search_input" type="text" name="keyword" class="form-control input-lg" style="height:50px;margin-top:15px;border-radius:10" placeholder="姓名、用户名、邮箱、手机、身份证" onblur="fill()";>
								<input type="hidden" name="sort" value="0">
								<span class="input-group-btn">
									<button class="btn btn-info btn-lg" type="submit" style="border-radius:0;padding-left:3px;padding-right:3px;letter-spacing:40px;height:50px;margin-top:15px"><i class="glyphicon glyphicon-search" title="搜索" style="color:#fff;margin-bottom:5px;margin-left:25px;font-size:25px;"></i></button>
								</span>
							</div>
						</form>
					<span style="color:#999;font-size:13px;margin-top: 5px;"></span>
					</div>


					<div class="page-filter" style="margin-top:15px;">
						<div class="page-filter-tag">
							<span class="page-filter-tag-leading">荣誉会员</span>
							<a class="page-filter-tag-content" href="#">江风</a>
							<a class="page-filter-tag-content" href="#">mexx89</a>
							<a class="page-filter-tag-content" href="#">木木21</a>
							<a class="page-filter-tag-content" href="#">闹闹</a>
							<a class="page-filter-tag-content" href="#">L三炮大人</a>
							<a class="page-filter-tag-content" href="#">fuckall</a>
							<a class="page-filter-tag-content" href="#">音韵kaka</a>
							<a class="page-filter-tag-content" href="#">射经丶英雄</a>
							<a class="page-filter-tag-content" href="#">....</a>

						</div>	
					</div>
					<div class="page-filter" style="margin-top:25px;">
						<div class="page-filter-tag">
							<span class="page-filter-tag-leading">境内数据</span>
							<a class="page-filter-tag-content" href="#">QQ</a>
							<a class="page-filter-tag-content" href="#">163</a>
							<a class="page-filter-tag-content" href="#">当当</a>
							<a class="page-filter-tag-content" href="#">天涯</a>
							<a class="page-filter-tag-content" href="#">CSDN</a>
							<a class="page-filter-tag-content" href="#">人人</a>
							<a class="page-filter-tag-content" href="#">如家</a>
							<a class="page-filter-tag-content" href="#">七天</a>
							<a class="page-filter-tag-content" href="#">智联</a>
							<a class="page-filter-tag-content" href="#">....</a>

						</div>	
					</div>
					<div class="page-filter" style="margin-top:25px;">
						<div class="page-filter-tag" style="margin-top:8px;">
							<span class="page-filter-tag-leading">境外数据</span>
							<a class="page-filter-tag-content" href="#">Linkedin</a>
							<a class="page-filter-tag-content" href="#">Myspace</a>
							<a class="page-filter-tag-content" href="#">Dropbox</a>
							<a class="page-filter-tag-content" href="#">Gmail</a>
							<a class="page-filter-tag-content" href="#">000webhost</a>
							<a class="page-filter-tag-content" href="#">....</a>
						</div>
					</div>

				</div>
				</div>

		</div>
	<include file="Inc/footer" />
	</div>
</body>
</html>