<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

               <aside class="col-md-4 sidebar">
                <!-- start widget -->
<!-- end widget --> 

<!-- start tag cloud widget -->
<div class="widget">
  <h4 class="title">搜索</h4>
  <div class="content community"  style="position: relative;">
    <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
        <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
        <input aria-label="search input" type="text" name="s" class="text asearch" placeholder="<?php _e('输入关键字搜索'); ?>" />
        <i  title="搜索" class="glyphicon glyphicon-search" id="icon-search" style="position: absolute;top: 30%;right: 2%;color: #a6a6a6;margin: 1px 5px;"></i>
    </form>
  </div>
</div>
<!-- end tag cloud widget --> 

<!-- start tag cloud widget -->
<div class="widget">
  <h4 class="title">标签云</h4>
  <div class="content tag-cloud">
    <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 50))->to($tags); ?>  
<?php while($tags->next()): ?>  
<a rel="tag" href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?>(<?php $tags->count(); ?>)</a>
<?php endwhile; ?>
  </div>
</div>
<!-- end tag cloud widget --> 

<!-- start widget -->
<div class="widget">
  <h4 class="title">最新文章</h4>
  <div class="content recent-post">
        <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=3')->to($contents); $cont=1;?>
		<?php while($contents->next()): ?>
        <div class="recent-single-post">
            <a href="<?php $contents->permalink() ?>" class="post-title">
            <?php $contents->title() ?></a>
            <div class="date"><?php $contents->date('Y年m月d日') ?></div>
        </div>
        <?php $cont +=1; if($cont>3) break; ?>
		<?php endwhile; ?>
    </div>
</div>

<!-- end widget --> 

<!-- start widget -->
<div class="widget">
	<h4 class="title">最新评论</h4>
	<div class="content recent-post">
        <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true&pageSize=3')->to($comments); ?>
        <?php while ($comments->next()): ?>
        <div class="recent-single-post">
        	<a href="<?php $comments->permalink() ?>" class="post-title">
        	<?php $comments->excerpt('40'); ?></a>
        	<div class="date"><?php $comments->date('Y年m月d日') ?> # <?php $comments->author(false); ?></div>
    	</div> 
    <?php endwhile; ?>
    </div>
</div>

<!-- end widget -->  


<!-- start widget -->
<div class="widget">
	<h4 class="title">微信关注</h4>
	<div class="content recent-post">
        <div class="recent-single-post" align="center">
            <img src="https://pic.idzd.top/icon/wx.png" title="欢迎关注公众号" alt="欢迎关注公众号" />
    	</div> 
    </div>
</div>

<!-- end widget --> 


<!-- start widget -->
<div class="widget">
	<h4 class="title">友情链接</h4>
	<div class="content recent-post">
        	<?php Links_Plugin::output("SHOW_MIX"); ?>
    </div>
</div>

<!-- end widget --> 
</aside>
