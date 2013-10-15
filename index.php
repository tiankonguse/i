<?php
session_start();
require("./inc/common.php");
?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
<?php
$title = "tiankonguse' record";
require BASE_INC . 'head.inc.php';
?>
<link href="<?php echo MAIN_DOMAIN;?>css/main.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="title">
            tiankonguse
            <script>document.write(new Date().getFullYear());</script>
        </div>
    </header>

    <section>
        <div class="container">
            <h3>tiankonguse 正在做的事</h3>
            <ul class="item-list">
                <li><a target="_blank" href="/game/sokoban.php"> 用心打造游戏
                        <span class="new">新</span>
                </a>
                </li>
                <li>
                
                <li><a target="_blank" href="/rjbq/"> 人间冰器 </a>
                </li>
                <li><a target="_blank" href="/record/"> 记录集 <span
                        class="new">新</span>
                </a>
                </li>
                <li><a target="_blank" href="/firstblog/"> first blog </a>
                </li>
                <li><a target="_blank" href="/messagefk/"> 信息反馈系统 <span
                        class="new">新</span>
                </a>
                </li>
                <li><a target="_blank" href="/blog/"> 博客 </a>
                </li>
                <li><a target="_blank" href="/timeline/"> 生活记录轴 </a>
                </li>
                <li><a target="_blank" href="/vatirk/"> acm vatirk团队 </a>
                </li>
                <li><a target="_blank" href="/resume/"> 我的简历 </a>
                </li>
                <li><a target="_blank" href="/rose/"> 送给女朋友的玫瑰 </a>
                </li>
                <li><a target="_blank" href="/earth/"> canvas 画地球 </a>
                </li>
                <li><a target="_blank"
                    href="http://webf.nenu.edu.cn/zwhz/index.php">
                        中外合作办学网站 </a>
                </li>
                <li><a target="_blank"
                    href="http://acm.nenu.edu.cn/ccr/"> acm校赛注册及比赛管理系统 <span
                        class="remark">学长主力</span>
                </a>
                </li>
            </ul>
        </div>
    </section>
    
    <script src="<?php echo DOMAIN_JS;?>jquery.js"></script>
    <footer>
    <?php  require BASE_INC . 'footer.inc.php'; ?>
    </footer>

    <script src="<?php echo DOMAIN_JS;?>main.js"></script>

</body>
</html>
