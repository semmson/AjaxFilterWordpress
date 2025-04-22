<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>




<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
	<div class="inner">
		<ul class="menu">
			<li>&copy; Untitled. All rights reserved.</li>
			<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>
</footer>

<script src="<?=get_template_directory_uri()?>/src/js/jquery.min.js"></script>
<script src="<?=get_template_directory_uri()?>/src/js/jquery.scrollex.min.js"></script>
<script src="<?=get_template_directory_uri()?>/src/js/jquery.scrolly.min.js"></script>
<script src="<?=get_template_directory_uri()?>/src/js/browser.min.js"></script>
<script src="<?=get_template_directory_uri()?>/src/js/breakpoints.min.js"></script>
<script src="<?=get_template_directory_uri()?>/src/js/util.js"></script>
<script src="<?=get_template_directory_uri()?>/src/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>