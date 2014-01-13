			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
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
				<div class="twelvecol footer-navigation">
				<p class="source-org copyright threecol first">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
					<nav role="navigation" class="ninecol last">
							<?php bones_footer_links(); ?>
					</nav>
				</div>
				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
