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
					<span style="font-size:12px;color:#999;">		
					<ul style="font-size:12px;list-style-type:none">
						<img src="__IMG__/account.png" style="width:32px;height:32px"/>
						<li style="margin-bottom:20px;"><a href="__APP__/World/Profile/account">ACC</a></li>
						<img src="__IMG__/share.png" style="width:32px;height:32px"/>
						<li><a href="__APP__/World/Profile/share">SHA</a></li>
						
					</ul>
					</span>
				</div>

			</div>
			<div class="col-xs-11">
				<div class="well" style="height:400px;">
					<div style="width:100%;height:100px;">
						<form action={:U('Profile/search')} method="post">
							<span style="color:#3d464d;font-size:14px;font-weight:bold;">Enjoy Your Searching!</span>
							<div class="input-group pull-left" style="margin:0 0;width:98%;">
								<input id="search_input" type="text" name="keyword" class="form-control input-lg" style="height:50px;margin-top:10px;border-radius:10" placeholder="" onblur="fill()";>
								<input type="hidden" name="sort" value="0">
								<span class="input-group-btn">
									<button class="btn btn-info btn-lg" type="submit" style="border-radius:0;padding-left:3px;padding-right:3px;letter-spacing:40px;height:50px;margin-top:10px"><i class="glyphicon glyphicon-search" title="Search" style="color:#fff;margin-bottom:5px;margin-left:25px;font-size:25px;"></i></button>
								</span>
							</div>
						</form>
					</div>


					<div class="page-filter" style="margin-top:10px;">
						<div class="page-filter-tag">
							<span class="page-filter-tag-leading">Honorary Members</span>
							<a class="page-filter-tag-content" href="#">mexx89</a>
							<a class="page-filter-tag-content" href="#">fuckofyou</a>
							<a class="page-filter-tag-content" href="#">bdsee</a>
							<a class="page-filter-tag-content" href="#">alex911</a>
							<a class="page-filter-tag-content" href="#">thehacker</a>
							<a class="page-filter-tag-content" href="#">nu1l</a>
							<a class="page-filter-tag-content" href="#">....</a>

						</div>	
					</div>

					<div class="page-filter" style="margin-top:25px;">
						<div class="page-filter-tag" style="margin-top:8px;">
							<span class="page-filter-tag-leading">Data leaked Sources</span>
							<a class="page-filter-tag-content" href="#">Linkedin</a>
							<a class="page-filter-tag-content" href="#">Myspace</a>
							<a class="page-filter-tag-content" href="#">Dropbox</a>
							<a class="page-filter-tag-content" href="#">Adobe</a>
							<a class="page-filter-tag-content" href="#">Gmail</a>
							<a class="page-filter-tag-content" href="#">Aminno</a>
							<a class="page-filter-tag-content" href="#">000webhost</a>
							<a class="page-filter-tag-content" href="#">Mernis</a>
							<a class="page-filter-tag-content" href="#">Yandex.ru</a>
							<a class="page-filter-tag-content" href="#">Yahoo</a>

						</div>
					</div>
					
					<div class="page-filter" style="margin-top:25px;">
						<div class="page-filter-tag" style="margin-top:8px;">
							<a class="page-filter-tag-content" href="#" style="margin-left:150px">Netease</a>
							<a class="page-filter-tag-content" href="#">QQ</a>
							<a class="page-filter-tag-content" href="#">Tianya</a>
							<a class="page-filter-tag-content" href="#">DangDang</a>
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