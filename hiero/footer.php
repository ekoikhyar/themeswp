<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package aThemes
 */
?>
		</div>
	<!-- #main --></div>

	<?php
		/* A sidebar in the footer? Yep. You can can customize
		 * your footer with up to four columns of widgets.
		 */
		get_sidebar( 'footer' );
	?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="clearfix container">
			<div class="site-info">
				&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
			</div><!-- .site-info -->

			<div class="site-credit">
				<a href="http://athemes.com/theme/hiero">Hiero</a> by aThemes
			</div><!-- .site-credit -->
		</div>
	<!-- #colophon --></footer>

<?php wp_footer(); ?>

<!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="page hit counter" ><script  type="text/javascript" >
try {Histats.start(1,2755620,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2755620&101" alt="page hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->


</body>
</html>