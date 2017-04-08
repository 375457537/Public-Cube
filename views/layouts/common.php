<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>魔方百科 - 中国最大的魔方信息百科</title>
	<?=Html::cssFile('@web/css/reset.css')?>

	<?=Html::cssFile('@web/css/style.css')?>
	
</head>
<body>
	<div class="nav commonWidth clearfix">
		<div class="logo fl">
			<h2>魔方百科</h2>
		</div>
		<nav class="fl">
			<ul>
				<li class="active"><a href="#">首页</a></li>
				<li><a href="#">目录</a></li>
			</ul>
		</nav>
	</div>

	<div class="searchBox">
		<div class="commonWidth">
			<div class="box">
				<div class="inputBox clearfix">
					<input type="text" class="fl" placeholder="请输入要查询的内容">
					<button type="button" class="fl">搜索</button>
				</div>
				<div class="hotWords">
					热门关键词:
					<a href="#">三阶魔方</a>
					<a href="#">mf3rs</a>
					<a href="#">异形魔方</a>
				</div>
			</div>
		</div>
	</div>

	<?=$content?>

	<div class="footer">
		
	</div>
</body>
</html>