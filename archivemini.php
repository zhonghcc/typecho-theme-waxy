<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 归档页面（概览）
 *
 * @package custom
 */
?>

<?php $this->need('header.php'); ?>


<section class="content-wrap">
    <div class="container">
    <div class="row">
    <main class="col-md-8 main-content">
	<article class="post">
	<header class="post-head">
	<h1 class="post-title">归档页面</h1>
	<section class="post-meta"></section>
	<div class="post-border"></div></header>
	<section class="post-content"><div id="archives">
	<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年 m月')->to($parses); ?>
	<?php while($parses->next()):  ?>
	    <h2 ><a style="color:#505050;" href="<?php $parses->permalink() ?>"><?php $parses->date('Y年m月') ?> （共<?php $parses->count() ?>篇）</a></h2>
	<?php endwhile;?>
	</div>
	</section>
	<footer class="post-footer clearfix"></footer>
	</article>
	</main>
	<?php $this->need('sidebar.php'); ?>
	</div>
	</div>
</section>
<?php $this->need('footer.php'); ?>