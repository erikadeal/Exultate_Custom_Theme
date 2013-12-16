			</div>
			<footer class="footer" role="contentinfo">

				<div id="footer-widgets" class="wrap clearfix">
					<div class="fourcol first">
						<?php
						if(is_active_sidebar('footer1')){
						dynamic_sidebar('footer1');
						}
						?>
					</div>
					<div class="fourcol">
						<?php
						if(is_active_sidebar('footer2')){
						dynamic_sidebar('footer2');
						}
						?>
					</div>
					<div class="fourcol last">
						<?php
						if(is_active_sidebar('footer3')){
						dynamic_sidebar('footer3');
						}
						?>
					</div>
				</div>

				<div id="inner-footer" class="clearfix">

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					<nav role="navigation" class="footer-links">
							<?php bones_footer_links(); ?>
					</nav>

				</div>

			</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html>
