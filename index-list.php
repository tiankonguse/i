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
    <header style="margin-top: 100px;">
        <div class="title">
            tiankonguse' 世界
            <script>document.write(new Date().getFullYear());</script>
        </div>
    </header>

    <section>
        <div class="container">
            <ul class="item-list">
                <li><a target="_blank" href="<?php echo DOMAIN_LAB;?>"> 实验室 <span class="new">new</span>
                </a></li>
                <li><a target="_blank" href="<?php echo DOMAIN_RECORD;?>"> 记录集 <span class="new">new</span>
                </a>
                </li>
                <li><a target="_blank" href="<?php echo DOMAIN;?>/firstblog/"> first blog <span class="old">old</span>
                </a></li>
                <li><a target="_blank" href="<?php echo DOMAIN;?>/blog/"> 博客 <span class="old">old</span>
                </a></li>
                <li><a target="_blank" href="<?php echo DOMAIN_TIMELINE;?>"> 生活记录轴 </a>
                </li>
                <li><a target="_blank" href="<?php echo DOMAIN;?>/lab/kirichik/"> 我的扁平简历<span class="new">new</span>
 </a></li>
                <li><a target="_blank" href="<?php echo DOMAIN;?>/resume/"> 我的简历 </a></li>
            </ul>
        </div>
    </section>
    <footer>
        <?php  require BASE_INC . 'footer.inc.php'; ?>
    </footer>
<script>
TK.loader.loadJS({url:"<?php echo PATH_JS;?>main.js",v:"1.02"});
</script>
<div style="position: fixed; width: 100%;top: 0px;background-color: #d9edf7;   padding: 15px;   text-align: center;">
      <button type="button" style=" cursor: url(/common/img/cursors/handcursor.cur),pointer;" onclick="this.parentNode.remove();" class="close">×</button>
      <a href="index-box.php" target="_blank" style="width: 80%;display: inline-block;"><strong style="">通知</strong> 最新版的主页已经出炉了.</a>
    </div>
</body>
</html>
