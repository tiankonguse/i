<?php
session_start ();
require ("./inc/common.php");
?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<?php
$title = "tiankonguse' 世界";
require BASE_INC . 'head.inc.php';
?>


<script type="text/javascript">
TK.loader.loadCSS({url:"<?php echo MAIN_PATH;?>css/main.css"});
</script>

</head>

<body>
	<header>
		<div class="title">
			tiankonguse' 世界
			<script>document.write(new Date().getFullYear());</script>
		</div>
	</header>

	<section>
		<div class="container">
			<ul class="item-list">
				<li><a target="_blank" href="<?php echo DOMAIN_LAB;?>"> 实验室 <span
						class="new">新</span>
				</a></li>
				<li><a target="_blank"
					href="<?php echo DOMAIN_LAB;?>girlfriend/index.php"> 女朋友 <span
						class="new">新</span>
				</a></li>
				<li><a target="_blank" href="<?php echo DOMAIN_RECORD;?>"> 记录集 </a>
				</li>
				<li><a target="_blank" href="/firstblog/"> first blog </a></li>
				<li><a target="_blank" href="/messagefk/"> 信息反馈系统 </a></li>
				<li><a target="_blank" href="/blog/"> 博客 </a></li>
				<li><a target="_blank" href="<?php echo DOMAIN_TIMELINE;?>"> 生活记录轴 </a>
				</li>
				<li><a target="_blank" href="/resume/"> 我的简历 </a></li>
			</ul>
		</div>
	</section>

	<footer>
		<?php  require BASE_INC . 'footer.inc.php'; ?>
	</footer>
	<script>
	TK.loader.loadJS({url:"<?php echo PATH_JS;?>main.js"});
	</script>

</body>
</html>
