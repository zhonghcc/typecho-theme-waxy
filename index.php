<?php
/**
 * 这是由Dingzd修改的主题（基于seventeen）。修改了大部分的界面，添加短代码、公告、文章置顶、懒加载、查看大图等功能。如需文章添加缩略图，请在文章添加自定义字段 img ；文章添加星星记号，请在文章添加自定义字段 star ；其他功能请在主题中设置；
 * 
 * @package Waxy
 * @author Dingzd
 * @version 2020.06.15
 * @link https://www.idzd.top/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


<section class="content-wrap">
        <div class="container">
            <div class="row">
                <main class="col-md-8 main-content">
            		
<?php if($this->is('index')){on_top_text($this);on_up_post($this);} ?>


<?php while($this->next()): ?>

<article id="<?php $this->cid() ?>" class="post">

    <?php if (array_key_exists('star',unserialize($this->___fields()))): ?><div class="featured" title="推荐文章">
        <i class="glyphicon glyphicon-star"></i>
    </div><?php endif; ?>

    <div class="post-head">
        <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="post-meta">
            <span class="author">作者：<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
            <time class="post-date" datetime="<?php $this->date('c'); ?>" title="<?php $this->date('Y年m月d日'); ?>">时间：<?php $this->date('Y年m月d日'); ?></time>
            <span class="author">分类：<?php $this->category(','); ?></span>
            <span class="author">字数：<?php echo art_count($this->cid); ?></span>
            <!--span class="author">阅读：<?php //get_post_view($this) ?></span-->
        </div>
        <div class="post-border"></div>
    </div>
    <?php if (array_key_exists('img',unserialize($this->___fields()))): ?>
    <div class="featured-media">
        <a href="<?php $this->permalink() ?>" data-fancybox="gallery" ><img src="<?php $this->fields->img(); ?>" alt="<?php $this->title() ?>"></a>
    </div>
    <?php endif; ?>
    <div class="post-content">
        <?php echo getIndexContent($this->content,$this->permalink); ?>
		<!-- 显示摘要-->
        <!--?php echo getExcerptTest($this->text,150,' ......'); ?-->
    </div>
    

    <footer class="post-footer clearfix">
    	
        <div class="pull-left tag-list" >
            <i class="glyphicon glyphicon-folder-open"></i>
            <?php $this->tags(' , ', true, 'none'); ?>
        </div>
        
        <div class="pull-right post-permalink" >
        	<a href="<?php $this->permalink() ?>#comments" class="btn btn-default">前往评论</a>
		</div>
    </footer>
</article>

<?php endwhile; ?>

<nav class="pagination" role="navigation">
        
        <?php $this->pageLink('<span aria-label="Previous" class="newer-posts"><i class="glyphicon glyphicon-menu-left"></i></span>'); ?>
    <span class="page-number">第 <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> 页 / 共 <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?> 页</span>
        <?php $this->pageLink('<sapn aria-label="Next" class="older-posts"><i class="glyphicon glyphicon-menu-right"></i></span>','next'); ?>
</nav>


                </main>


<?php $this->need('sidebar.php'); ?>

            </div class="row">
        </div class="container">
</section>


<?php $this->need('footer.php'); ?>
