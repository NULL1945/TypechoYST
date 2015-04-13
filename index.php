<?php
/**
 * 基于 Typecho1.0 默认主题修改的简洁的主题，命名为 YST （Your Simple Theme），部分代码参考网上主题（如：CSS 参考 <a href="http://www.giuem.com" target="_blank">Ginum</a> ,底部分页参考 <a href="http://pjf.name" target="_blank">疯子的自留地</a> ）。本主题遵守 <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" title="署名-非商业性使用-相同方式共享 4.0 国际" target="_blank">CC BY-NC-SA 4.0</a>
 * 
 * @package Your Simple Theme
 * @author Lin  
 * @version 0.1  
 * @link http://www.hello1995.com  
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->sticky(); $this->title() ?></a></h2>
			<time class="post-time" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content(' (ง •̀_•́)ง 查看全文 '); ?>
            </div>
        </article>
	<?php endwhile; ?>
	<div id="page">
		<?php $this->pageNav('<<','>>',2,'...');?>
	</div>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
