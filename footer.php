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
    <script type="text/javascript">
        $("#loading").fadeOut(500);
    </script>
    <script>
                window.content_index_showTocToggle = false;
                function content_index_toggleToc() {
                    var tts = "显示";
                    var tth = "隐藏";
                    if (window.content_index_showTocToggle) {
                        window.content_index_showTocToggle = false;
                        document.getElementById("toc-content").style.display = "none";
                        document.getElementById("content-index-togglelink").innerHTML = tts
                    } else {
                        window.content_index_showTocToggle = true;
                        document.getElementById("toc-content").style.display = "block";
                        document.getElementById("content-index-togglelink").innerHTML = tth
                    }
                }
                $(document).scroll(function(){
                   if ($(window).scrollTop() > 350){
                        $(".toc-index").css({
                            position: "fixed",
                            top: "10px",
                            right:"25%",
                            width:"230px",
                        });
                    }else{
                        $(".toc-index").removeAttr("style")
                    }
                })
            </script>
<?php $this->footer(); ?>
</body>
</html>