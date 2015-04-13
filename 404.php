<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="col-mb-12 col-tb-8 col-tb-offset-2">
        <div class="error-page">
            <h2 class="post-title">404 - <?php _e(' _(:3 」∠)_ 页面没找到！ '); ?></h2>
            <p><?php _e('你想查看的页面可能被外星人抓去研究了, 要不要搜索看看: '); ?></p>
            <form method="post">
                <p><input type="text" name="s" class="text" autofocus /></p>
                <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
            </form>
        </div>

    </div><!-- end #content-->
	<?php $this->need('footer.php'); ?>
