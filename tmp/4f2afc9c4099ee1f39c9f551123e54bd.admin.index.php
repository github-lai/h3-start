<?php
$_root = $this->vars["_root"];
$_cfgurl = $this->vars["_cfgurl"];

?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<base href="<?php echo $_cfgurl; ?>"/>
		<link rel="shortcut icon" href="favicon.ico">
		


		<link href="res/css/bootstrap.min.css" rel="stylesheet" />
		<style type="text/css">
			.menu{ display:inline-block;}
			.menu li{ list-style:none; display:inline-block;}
			.menu li a{ text-decoration:none;color:white; font-size:14px;display:block; height:45px; padding:0 15px;}
			.menu li a:hover{ text-decoration:none;color:green; background:#eee; font-weight:bold; }
			.menu li a.on{ text-decoration:none;color:green; background:#eee; font-weight:bold; }
		</style>
	</head>

	<body>
	<div class="top" style="background:#006699;height:45px;margin-bottom:15px;line-height:45px;color:white;">
		<div class="container" style="padding:0!important;">
			<b>Administrator</b>
			<ul class="menu">
			<li><a href="<?php echo $_cfgurl; ?>">首页</a></li>
			<li><a href="<?php echo $_cfgurl; ?>@admin/welcome">用户中心</a></li>
			</ul>
			<span class="htop" id="toplink" style="float:right;color:white;">
			</span>
		</div>
	</div>

	<div class="container" style="position:relative;">

	<section class="row mcontent">
		
	welcome

	</section>

	</div>

	<script src='res/js/jquery-2.0.3.min.js'></script>
	<script src='res/js/bootstrap.min.js'></script>
	<script src='res/layer/layer.js'></script>
	

	<script type="text/javascript">
		function setOn(index)
		{
			$(".menu li a").removeClass("on");
			$(".menu li:eq("+index+") a").addClass("on");
		}
		$(document).ready(function(){
			$.get("base/islogin",function(data){
				$("#toplink").html(data);
			});
		});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			setOn(1);
		});
	</script>

</body>
</html>

