<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

	<footer id="footer"><hr />
	<p  align="center" valign="middle">&copy; <?php echo date('Y'); ?> / <a href="<?php $this->options->siteUrl(); ?>"  title="<?php $this->options->title(); ?>"><?php $this->options->title(); ?> </a><br /><a href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" title="署名-非商业性使用-相同方式共享 4.0 国际" target="_blank">CC BY-NC-SA 4.0</a> / <a href="<?php $this->options->feedUrl(); ?>" title="RSS订阅"> RSS </a><br /><?php $this->widget('Widget_Contents_Page_List')->to($pages); ?><?php while($pages->next()): ?><?php if($this->is('page',$pages->slug)): ?><?php endif; ?><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"> <?php $pages->title(); ?> </a><?php endwhile; ?><a href="<?php $this->options->adminUrl(); ?>"  title="登录到<?php $this->options->title(); ?>"> 登录 </a></p>
	</footer>

	<?php $this->footer(); ?>
</main>

   <!-- wumii hook begin -->
   <!-- wumii相关推荐的代码建议放这里 -->
   <!-- wumii hook end -->

   <!-- tongji begin -->
   <!-- 统计的代码建议放这里，如百度统计/cnzz统计等 -->
   <!-- tongji end -->

</body>
</html>
