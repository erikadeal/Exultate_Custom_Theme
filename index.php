<?php get_header(); ?>

<div id="content">

				<div id="inner-content" class="wrap center-grid clearfix">
						<div id="main" class="clearfix" role="main">
						<!--<div class="headline clearfix">
						<h1 class="h2 index-focus eightcol last">The Exultate Chamber Choir & Orchestra is a versatile ensemble in the Minneapolis-St. Paul area that is committed to performing <span>“music that moves the soul”</span> at the highest level.</h1>
							</div>-->
							<div class="action clearfix">
								<div class="hover fourcol first clearfix">
									<img src="http://erikadeal.com/exultate/wp-content/themes/Exultate_Alt2/library/images/music.jpg">
									<a href="performances"><p>Listen to a performance or recording</p></a>
								</div>
								<div class="hover fourcol clearfix">
									<img src="http://erikadeal.com/exultate/wp-content/themes/Exultate_Alt2/library/images/neck.jpg">
									<a href="about"><p>Find out what brings people back to Exultate year after year</p></a>
								</div>
								<div class="hover fourcol clearfix">
									<img src="http://erikadeal.com/exultate/wp-content/themes/Exultate_Alt2/library/images/player.jpg">
									<a href="get-involved"><p>Get involved with Exultate</p></a>
								</div>
								<ul class="call-to-action">
									<li class="fourcol first">Listen</li>
									<li class="fourcol">Learn</li>
									<li class="fourcol">Join</li>
								</ul>
							</div>
							<div class="main-content index-main">
							 <?php query_posts('cat=1&amp;showposts='.get_option('posts_per_page')); ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<section class="entry-content eightcol first clearfix" itemprop="articleBody">
								<p class="lead">
The Exultate Chamber Choir & Orchestra is a versatile ensemble in the Minneapolis-St. Paul area that is committed to performing <span>music that moves the soul</span> at the highest level.
</p>
									<?php the_content(); ?>
							</section> <!-- end article section -->

							<section class="fourcol last">
								<?php get_sidebar()?>
							</section>
								<footer class="article-footer">
								

								</footer> <!-- end article footer -->


							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							</div>
						</div> <!-- end #main -->
				</div> <!-- end #inner-content -->
			</div> <!-- end #content -->

<?php get_footer(); ?>

