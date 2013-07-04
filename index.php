<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="zh-cn">
	<head>
		<?php
		$title = "tiankonguse的世界";
		include_once('inc/header.inc.php');
		?>
	</head>
	
	<body>
		<header>
			<?php include_once('inc/index.top.php'); ?>
		</header>
		
		<section>
			<?php include_once("inc/index.body.php") ?>	
		</section>
		
		<footer>
			<?php  include_once('inc/footer.inc.php'); ?>
		</footer>
		
		<?php include_once("inc/index.backTop.php") ?>	
	</body>
</html>