<?php get_sidebar(); ?>
</div> <?php // end content-wrapper (started in header.php) ?>
<footer role="contentinfo" class="main-footer">
	<div class="max-container">
		<?php $args = array( 'container' => false, 'menu_id' => false, 'menu_class' => 'main-menu footer-menu', 'theme_location' => 'footer-menu'); wp_nav_menu($args); ?>
		<p class="copyright">&copy;<?php echo date("Y"); ?> Sons of the Revolution in the State of New York, Inc.</p>
		<a class="jump-top" href="#top" title="Jump back to top">Jump to top <span class="fa fa-arrow-circle-up"></span></a>
	</div>
</footer>

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo bloginfo('template_directory'); ?>/scripts/jquery-1.11.2.min.js"%3E%3C/script%3E'))</script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/scripts/mediaCheck-min.js"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/scripts/common.js"></script>
<?php //if ( is_singular() ) wp_print_scripts( 'comment-reply' ); ?>
</body>
</html>
