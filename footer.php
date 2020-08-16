<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span> Copyright &copy; <?php echo date("Y"); ?> <a href="<?php $this->options->siteUrl(); ?>" target="_blank"><?php $this->options->title(); ?></a></span><br />
                    <span>Powered by <a rel="noopener" href="https://typecho.org/" target="_blank">Typecho</a> | Theme by <a rel="noopener" href="https://github.com/dingzd1995/typecho-theme-waxy" target="_blank">Waxy</a></span><br />
                </div>
            </div>
        </div>
    </div>


    <a id="back-to-top"><i class="glyphicon glyphicon-menu-up"></i></a>
    
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="//cdn.bootcss.com/jquery_lazyload/1.9.7/jquery.lazyload.js"></script>
	<script src="<?php $this->options->themeUrl('js/screen.js'); ?>"></script>
	
	<!--代码高亮-->
	<?php if ($this->options->codeHighlightControl): ?>
	<script type="text/javascript">
	(function(){
		var pres = document.querySelectorAll('pre');
		var lineNumberClassName = 'line-numbers';
		pres.forEach(function (item, index) {
			item.className = item.className == '' ? lineNumberClassName : item.className + ' ' + lineNumberClassName;
		});
	})();
    </script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('prism/prism.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('prism/clipboard.min.js'); ?>"></script>
    <?php endif; ?>
    <!--END-->
    
    <script type="text/javascript">
        $("#loading").fadeOut(500);
    </script>

<?php $this->footer(); ?>
</body>
</html>