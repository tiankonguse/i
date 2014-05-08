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

<style>
:link { background: transparent; color: #00f; }
:visited { background: transparent; color: #0e388c; }
h1 { margin: 0; padding: 0; font-size: 2em; font-weight: bold; }
.container{
margin: auto;
padding: 0;
max-width: 80em;
text-align: center;
}

.container > a { 
    margin: 1em 2em; 
    border: solid thick; 
    text-align: center; 
    display: inline-block; 
    vertical-align: bottom; 
    text-decoration: none; 
} 
.container > a > p { text-decoration: none; width: 18em; min-height: 7em; padding: 1em 1.4em; }
.container > a > p strong { font-size: 2em; font-style: normal; display: block;  }
.container > a > p span { white-space: nowrap; text-decoration: none;margin-top: 15px;display: inline-block; }

.container > a                                              { color: black; background: #FFFF99; border-color: #FFFF00; }
.container > a + a                                          { color: black; background: #99FFFF; border-color: #00FFFF; }
.container > a + a + a                                      { color: black; background: #FF99CC; border-color: #FF0099; }
.container > a + a + a + a                                  { color: black; background: #99FF99; border-color: #00FF00; }
.container > a + a + a + a + a                              { color: black; background: #FF9999; border-color: #FF0000; }
.container > a + a + a + a + a + a                          { color: black; background: #99CCFF; border-color: #0099FF; }
.container > a + a + a + a + a + a + a                      { color: black; background: #CC99FF; border-color: #9900FF; }
.container > a + a + a + a + a + a + a + a                  { color: black; background: #FFCC99; border-color: #FF9900; }
.container > a + a + a + a + a + a + a + a + a              { color: black; background: #FF99FF; border-color: #FF00FF; }
.container > a + a + a + a + a + a + a + a + a + a          { color: black; background: #99FFCC; border-color: #00FF99; }
.container > a + a + a + a + a + a + a + a + a + a + a      { color: white; background: #999999; border-color: #000000; }
.container > a + a + a + a + a + a + a + a + a + a + a + a  { color: black; background: #CCFF99; border-color: #99FF00; }

.container > a {
  box-shadow:         0 0 5px black;
  transition: box-shadow 0.05s linear;
}

.container > a:hover {
  box-shadow:         0 0 25px black;
}

</style>

</head>
<body>
    <header>
        <div class="title">
            <h1>tiankonguse' 世界</h1>
        </div>
    </header>
    <section>
        <div class="container">
                <a target="_blank" href="<?php echo DOMAIN_LAB;?>"><p><strong> 实验室 </strong><span>各种学习与研究的场所</span></p></a>
                <a target="_blank" href="<?php echo DOMAIN_RECORD;?>"><p><strong> 记录集 </strong><span>记录下研究和生活中的点滴</span></p></a>
                <a target="_blank" href="<?php echo DOMAIN;?>/firstblog/"><p><strong> first blog </strong><span>若干年前学习php后做的一个博客</span></p></a>
                <a target="_blank" href="<?php echo DOMAIN;?>/blog/"><p><strong> 博客</strong><span>wordpress. 和记录集保持一致</span></p></a>
                <a target="_blank" href="<?php echo DOMAIN_TIMELINE;?>"><p><strong> 生活记录轴 </strong><span>时间轴，现在集中记录记录集的点滴</span></p></a>
                <a target="_blank" href="<?php echo DOMAIN;?>/lab/kirichik/"><p><strong> 我的扁平简历 </strong><span>一个扁平页面</span></p></a>
                <a target="_blank" href="<?php echo DOMAIN;?>/resume/"><p><strong> 我的简历 </strong><span>pdf版的简历</span></p></a>
        </div>
    </section>
    <footer>
        <?php  require BASE_INC . 'footer.inc.php'; ?>
    </footer>
<script>
TK.loader.loadJS({url:"<?php echo PATH_JS;?>main.js",v:"1.02"});
</script>

</body>
</html>
